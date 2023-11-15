<?php
include '../conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codigo = $_POST['codigo'];
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $editorial = $_POST['editorial'];
    $categoria = $_POST['categoria'];
    $subcategoria = $_POST['subcategoria'];
    $cantidad = $_POST['cantidad'];
    $estatus = $_POST['estatus'];

    $sql = "INSERT INTO libro (codigo_libro, titulo_lib, autor_libro, editorial, categoria_libro, subcategoria_libro, cantidad, estatus)
            VALUES ('$codigo', '$titulo', '$autor', '$editorial', '$categoria', '$subcategoria', '$cantidad', '$estatus')";

    if ($conn->query($sql) === TRUE) {
        echo "Libro agregado correctamente";
    } else {
        echo "Error al agregar libro: " . $conn->error;
    }
}

$conn->close();
?>