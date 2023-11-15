<?php
include '../conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codigo = $_POST['codigo'];

    $sql = "DELETE FROM libro WHERE codigo_libro='$codigo'";

    if ($conn->query($sql) === TRUE) {
        if ($conn->affected_rows > 0) {
            echo "<script>alert('Libro eliminado correctamente'); window.location.href = 'admin.php';</script>";
            exit();
        } else {
            echo "<script>alert('No se encontró un libro con el código \"$codigo\" para eliminar.'); window.location.href = 'admin.php';</script>";
        }
    } else {
        echo "Error al eliminar libro: " . $conn->error;
    }
}

$conn->close();
?>