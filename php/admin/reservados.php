<?php
include '../conexion.php';

$sql = "SELECT * FROM reserva";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="card mb-3">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">Folio: ' . $row["folio_rese"] . '</h5>';
        echo '<p class="card-text">Código: ' . $row["codigo_lr"] . '</p>';
        echo '<p class="card-text">Título: ' . $row["titulo_lr"] . '</p>';
        echo '<p class="card-text">Matrícula: ' . $row["matricular"] . '</p>';
        echo '<p class="card-text">Alumno: ' . $row["nombrer"] . '</p>';
        echo '<p class="card-text">Fecha de reserva: ' . $row["fecha_rese"] . '</p>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo "0 resultados";
}

$conn->close();
?>