<?php
include '../conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $matricula = $_POST['matricula'];
    $nombre = $_POST['nombre'];
    $contraseña = $_POST['contraseña'];
    $correo = $_POST['correo'];

    
    $sql = "INSERT INTO usuario (matricula, nombre_usu, contraseña)
            VALUES ('$matricula', '$nombre', '$contraseña')";

    $sql2 = "INSERT INTO multa (matriculam, nombrem, correom)
            VALUES ('$matricula', '$nombre', '$correo')";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Usuario agregado con éxito'); window.location.href = 'registro.php';</script>";
    } else {
        echo "Error al agregar usuario: " . $conn->error;
    }
    if ($conn->query($sql2) === TRUE) {
        exit();
    } 
}

$conn->close();
?>