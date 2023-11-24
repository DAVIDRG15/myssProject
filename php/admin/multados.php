<?php
include '../conexion.php';

if (isset($_GET['pagado']) && $_GET['pagado'] == 'true') {//recogido
    $matriculam = $_GET['id4'];
    $sql = "UPDATE multa SET deuda=0 WHERE matriculam='$matriculam'";
    $conn->query($sql);
    echo "<script>alert('Multa actualizada correctamente'); window.location.href = 'multas.php';</script>";
    exit();
    }
$sql = "SELECT * FROM multa";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="card mb-3">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">Id: ' . $row["id"] . '</h5>';
        echo '<h5 class="card-title">Matrícula: ' . $row["matriculam"] . '</h5>';
        echo '<p class="card-text">Nombre: ' . $row["nombrem"] . '</p>';
        echo '<p class="card-text">Correo: ' . $row["correom"] . '</p>';
        echo '<p class="card-text">Deuda: ' . $row["deuda"] . '</p>';
        if ($row["deuda"] >0) {
            echo '<a href="multas.php?id4=' . $row["matriculam"] . '&pagado=true" class="btn btn-success btnLogin mb-4">Pagado</a> ';
        }
        echo '</div>';
        echo '</div>';
    }
} else {
    echo "0 resultados";
}

$conn->close();
?>