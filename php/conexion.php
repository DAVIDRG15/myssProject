<?php
$servername = "blsn1oqors8cveyewvzf-mysql.services.clever-cloud.com";
$username = "uyfsurxa5hm8bxrj";
$password = "G79bzi0WlqdhAxiztxzE";
$database = "blsn1oqors8cveyewvzf";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>