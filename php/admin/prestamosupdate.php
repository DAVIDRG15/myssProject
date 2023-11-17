<?php
include '../conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Folio = $_POST['Folio'];
    $fecha_devolucion = $_POST['fecha_devolucion'];
    // $estatus = $_POST['estatus_prestamo'];
    $codigoQuery = $conn->query("SELECT codigo_lib FROM prestamos WHERE Folio = '$Folio'");
    $row = $codigoQuery->fetch_assoc();
    $codigoLibro = $row['codigo_lib'];
    $sql = "UPDATE prestamos SET fecha_devolucion='$fecha_devolucion', estatus_prestamo='DEVUELTO'WHERE Folio='$Folio'";

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
}

$conn->close();
?>