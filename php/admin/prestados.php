<?php
include '../conexion.php';

$sql = "SELECT * FROM prestamos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Folio: " . $row["Folio"] . "<br>";
        echo "Código: " . $row["codigo_lib"] . "<br>";
        echo "Título: " . $row["titulo_lib"] . "<br>";
        echo "Matrícula: " . $row["matricula"] . "<br>";
        echo "Fecha de prestamo: " . $row["fecha_prestamo"] . "<br>";
        echo "Fecha de devolución: " . $row["fecha_devolucion"] . "<br>";
        echo "Estatus: " . $row["estatus_prestamo"] . "<br>";
        echo "<hr>"; // Línea separadora entre registros
    }
} else {
    echo "0 resultados";
}

$conn->close();
?>