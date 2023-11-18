<?php
include '../conexion.php';
session_start();
$idadminp=$_SESSION["id_admin"];
$sqlnombrep = "SELECT nombre_admin FROM administrador WHERE id_admin = '$idadminp'";
$resultnombrep = $conn->query($sqlnombrep);
$nombrep = ($resultnombrep->num_rows > 0) ? $resultnombrep->fetch_assoc()['nombre_admin'] : '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Folio = $_POST['Folio'];
    $fecha_devolucion = $_POST['fecha_devolucion'];
    $codigoQuery = $conn->query("SELECT codigo_lib FROM prestamos WHERE Folio = '$Folio'");
    $row = $codigoQuery->fetch_assoc();
    $codigoLibro = $row['codigo_lib'];
    $estatusQuery = $conn->query("SELECT estatus_prestamo FROM prestamos WHERE Folio = '$Folio'");
    $estatusRow = $estatusQuery->fetch_assoc();
    $estatusPrestamo = $estatusRow['estatus_prestamo'];
    if($estatusPrestamo == 'DEVUELTO'){
        $sql = "UPDATE prestamos SET fecha_devolucion='$fecha_devolucion', receptor='$nombrep' WHERE Folio='$Folio'";
        if ($conn->query($sql) === TRUE) {
            if ($conn->affected_rows > 0) {
                $sqlUpdateCantidadp = "UPDATE libro SET cantidad = cantidad + 1 WHERE codigo_libro = '$codigoLibro'";
                $conn->query($sqlUpdateCantidadp);
                echo "<script>alert('Prestamo actualizado correctamente'); window.location.href = 'prestamos.php';</script>";
                exit();
            } else {
                echo "<script>alert('No se encontró un prestamo con el folio \"$Folio\" para actualizar.'); window.location.href = 'prestamos.php';</script>";
            }
        } else {
            echo "Error al actualizar prestamo: " . $conn->error;
        }
    }else{
        echo "<script>alert('El estatus del préstamo no es \"DEVUELTO\". No se puede actualizar la fecha de devolución.'); window.location.href = 'prestamos.php';</script>";
    }
}

$conn->close();
?>