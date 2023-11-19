<?php
include '../conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $matricula = $_POST['matricula'];
    $nombre = $_POST['nombre'];
    $contraseña = $_POST['contraseña'];
    
    $sql = "INSERT INTO usuario (matricula, nombre_usu, contraseña)
            VALUES ('$matricula', '$nombre', '$contraseña')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Usuario agregado con éxito'); window.location.href = 'registro.php';</script>";
        exit();
    } else {
        echo "Error al agregar usuario: " . $conn->error;
    }
}

$conn->close();
?>