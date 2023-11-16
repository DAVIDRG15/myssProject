<?php
include '../conexion.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $matricula = $_POST["matricula"];
    $contraseña = $_POST["contraseña"];

    $sql = "SELECT * FROM usuario WHERE matricula = '$matricula' AND contraseña = '$contraseña'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $_SESSION["matricula"] = $matricula;
        header("Location: ../menuLibros.php");
        exit();
    } else {
        echo "Credenciales incorrectas. Inténtalo de nuevo.";
    }
}

$conn->close();
?>