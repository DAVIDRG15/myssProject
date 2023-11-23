<?php
include '../conexion.php';

// $sql = "SELECT matricula, nombre_usu, correo FROM usuario";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     while ($row = $result->fetch_assoc()) {
//         $matricula = $row['matricula'];
//         $nombre = $row['nombre_usu'];
//         $correo = $row['correo'];

//         $sqlInsert = "INSERT INTO multa (matriculam, nombrem, correom) VALUES ('$matricula', '$nombre', '$correo')";
//         $conn->query($sqlInsert);
//     }
// }
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
        echo '</div>';
        echo '</div>';
    }
} else {
    echo "0 resultados";
}

$conn->close();
?>