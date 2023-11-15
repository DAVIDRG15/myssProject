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

    $sql = "UPDATE libro SET titulo_lib='$titulo', autor_libro='$autor', editorial='$editorial', 
            categoria_libro='$categoria', subcategoria_libro='$subcategoria', cantidad='$cantidad', estatus='$estatus'
            WHERE codigo_libro='$codigo'";

    if ($conn->query($sql) === TRUE) {
        echo "Libro actualizado correctamente";
    } else {
        echo "Error al actualizar libro: " . $conn->error;
    }
}

$conn->close();
?>