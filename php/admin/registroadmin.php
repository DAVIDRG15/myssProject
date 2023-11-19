<?php
include '../conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $contraseña = $_POST['contraseña'];
    
    $sql = "INSERT INTO administrador (id_admin, nombre_admin, contraseña)
            VALUES ('$id', '$nombre', '$contraseña')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Administrador agregado con éxito'); window.location.href = 'registro.php';</script>";
        exit();
    } else {
        echo "Error al agregar administrador: " . $conn->error;
    }
}

$conn->close();
?>