<?php
include 'conexion.php';
session_start();
$matriculap = $_SESSION["matricula"];
$sqlnombrep = "SELECT nombre_usu FROM usuario WHERE matricula = '$matriculap'";
$resultnombrep = $conn->query($sqlnombrep);
$nombrep = ($resultnombrep->num_rows > 0) ? $resultnombrep->fetch_assoc()['nombre_usu'] : '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySS</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- JavaScript -->
    <script src="../assets/js/script.js"></script>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</head>

<nav>
    <div class="container">
        <br>
        <div class="d-flex justify-content-between">
            <div class="ml-auto">
                <a href="cuenta.php">
                    <button class="btn btn-warning">
                    <?php echo $nombrep; ?>
                    </button>
                </a>
            </div>
            <div class="ml-auto">
                <a href="../index.php">
                    <button class="btn btn-danger">
                        SALIR
                    </button>
                </a>
            </div>
        </div>
    </div>
</nav>

<body>
    <div class="container mt-5 mb-5 text-center">
        <p class="title">Simulación de Biblioteca</p>
        <br>
        <div class="row">
            <div class="col-md-6">
                <div class="book-container">
                    <img src="../assets/img/virtual.png" alt="Libros" class="img-fluid book">
                </div>
            </div>
            <div class="col-md-6">
                <div class="book-container">
                    <img src="../assets/img/fisico.png" alt="Libros" class="img-fluid book">
                </div>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-6">
                <a href="librosvirtuales1.php">
                    <button class="btn btn-success btnIndex">LIBROS VIRTUALES</button>
                </a>
            </div>
            <div class="col-md-6">
                <a href="../php/menuFisicos.php">
                    <button class="btn btn-success btnIndex">LIBROS FÍSICOS</button>
                </a>
            </div>
        </div>
    </div>
</body>

<footer></footer>

</html>