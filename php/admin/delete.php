<?php
include '../conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codigo = $_POST['codigo'];

    $sql = "DELETE FROM libro WHERE codigo_libro='$codigo'";

    if ($conn->query($sql) === TRUE) {
        echo "Libro eliminado correctamente";
    } else {
        echo "Error al eliminar libro: " . $conn->error;
    }
}

$conn->close();
?>