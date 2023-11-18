<?php
include '../conexion.php';

$sql = "SELECT * FROM prestamos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="card mb-3">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">Folio: ' . $row["Folio"] . '</h5>';
        echo '<p class="card-text">Código: ' . $row["codigo_lib"] . '</p>';
        echo '<p class="card-text">Título: ' . $row["titulo_lib"] . '</p>';
        echo '<p class="card-text">Matrícula: ' . $row["matricula"] . '</p>';
        echo '<p class="card-text">Alumno: ' . $row["nom_usu"] . '</p>';
        echo '<p class="card-text">Fecha de prestamo: ' . $row["fecha_prestamo"] . '</p>';
        echo '<p class="card-text">Fecha de devolución: ' . $row["fecha_devolucion"] . '</p>';
        echo '<p class="card-text">Estatus: ' . $row["estatus_prestamo"] . '</p>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo "0 resultados";
}

$conn->close();
?>