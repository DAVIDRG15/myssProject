<?php
include '../conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Folio = $_POST['Folio'];
    $fecha_devolucion = $_POST['fecha_devolucion'];
    $estatus = $_POST['estatus_prestamo'];

    $sql = "UPDATE prestamos SET fecha_devolucion='$fecha_devolucion', estatus_prestamo='$estatus'WHERE Folio='$Folio'";

    if ($conn->query($sql) === TRUE) {
        if ($conn->affected_rows > 0) {
            echo "<script>alert('Prestamo actualizado correctamente'); window.location.href = 'prestamos.php';</script>";
            exit();
        } else {
            echo "<script>alert('No se encontró un prestamo con el código \"$Folio\" para actualizar.'); window.location.href = 'prestamos.php';</script>";
        }
    } else {
        echo "Error al actualizar prestamo: " . $conn->error;
    }
}

$conn->close();
?>