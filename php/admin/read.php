<?php
include '../conexion.php';

$sql = "SELECT * FROM libro";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Código: " . $row["codigo_libro"] . "<br>";
        echo "Título: " . $row["titulo_lib"] . "<br>";
        echo "Autor: " . $row["autor_libro"] . "<br>";
        echo "Editorial: " . $row["editorial"] . "<br>";
        echo "Categoría: " . $row["categoria_libro"] . "<br>";
        echo "Subcategoría: " . $row["subcategoria_libro"] . "<br>";
        echo "Cantidad: " . $row["cantidad"] . "<br>";
        echo "Estatus: " . $row["estatus"] . "<br>";
        echo "<hr>"; // Línea separadora entre registros
    }
} else {
    echo "0 resultados";
}

$conn->close();
?>