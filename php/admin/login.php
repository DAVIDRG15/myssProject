<?php
include '../conexion.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_admin = $_POST["id_admin"];
    $contraseña = $_POST["contraseña"];

    $sql = "SELECT * FROM administrador WHERE id_admin = '$id_admin' AND contraseña = '$contraseña'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $_SESSION["id_admin"] = $id_admin;
        header("Location: admin.php");
        exit();
    } else {
        echo "Credenciales incorrectas. Inténtalo de nuevo.";
    }
}

$conn->close();
?>