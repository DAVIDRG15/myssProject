<?php
include '../conexion.php';

$sql = "SELECT * FROM libro";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="card mb-3">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">Título: ' . $row["titulo_lib"] . '</h5>';
        echo '<p class="card-text">Código: ' . $row["codigo_libro"] . '</p>';
        echo '<p class="card-text">Autor: ' . $row["autor_libro"] . '</p>';
        echo '<p class="card-text">Editorial: ' . $row["editorial"] . '</p>';
        echo '<p class="card-text">Categoría: ' . $row["categoria_libro"] . '</p>';
        echo '<p class="card-text">Subcategoría: ' . $row["subcategoria_libro"] . '</p>';
        echo '<p class="card-text">Cantidad: ' . $row["cantidad"] . '</p>';
        echo '<p class="card-text">Estatus: ' . $row["estatus"] . '</p>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo '<p class="lead">0 resultados</p>';
}

$conn->close();
?>