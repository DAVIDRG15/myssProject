<?php
include 'conexion.php';
session_start();
$matriculap = $_SESSION["matricula"];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Menú Libros Físicos</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</head>

<nav>
    <div class="container">
        <br>
        <div class="d-flex justify-content-between">
            <a href="menuLibros.php">
                <button class="btn btn-warning">
                    VOLVER
                </button>
            </a>
        </div>
    </div>
</nav>

<body>

    <div class="container menuFisicos">
        <h1 class="mt-4 mb-4">Libros Físicos</h1>

        <div class="container read mt-2 mb-4">
            <?php 
            if (isset($_GET['apartar']) && $_GET['apartar'] == 'true') {
                $codigoLibro = $_GET['id'];
                $sqlCantidad = "SELECT cantidad FROM libro WHERE codigo_libro = '$codigoLibro'";
                $resultCantidad = $conn->query($sqlCantidad);
                $sqltitulo = "SELECT titulo_lib FROM libro WHERE codigo_libro = '$codigoLibro'";
                $resultTitulo = $conn->query($sqltitulo);
                $titulo = ($resultTitulo->num_rows > 0) ? $resultTitulo->fetch_assoc()['titulo_lib'] : '';
                $sqlnombre = "SELECT nombre_usu FROM usuario WHERE matricula = '$matriculap'";
                $resultNombre = $conn->query($sqlnombre);
                $nombre = ($resultNombre->num_rows > 0) ? $resultNombre->fetch_assoc()['nombre_usu'] : '';
                if ($resultCantidad->num_rows > 0) {
                    $rowCantidad = $resultCantidad->fetch_assoc();
                    $cantidadActual = $rowCantidad["cantidad"];
                        if ($cantidadActual > 1) {
                        $sqlUpdateCantidad = "UPDATE libro SET cantidad = cantidad - 1 WHERE codigo_libro = '$codigoLibro'";
                        $conn->query($sqlUpdateCantidad);
                    } elseif ($cantidadActual == 1) {
                        $sqlUpdateEstado = "UPDATE libro SET estatus = 'PRESTAMO', cantidad = 0 WHERE codigo_libro = '$codigoLibro'";
                        $conn->query($sqlUpdateEstado);
                    }
                }
                $fechaPrestamo = date("Y-m-d");
                $sql2 = "INSERT INTO prestamos (codigo_lib, titulo_lib, matricula, nom_usu, fecha_prestamo, estatus_prestamo)
                VALUES ('$codigoLibro', '$titulo', '$matriculap', '$nombre', '$fechaPrestamo', 'PRESTADO')";
                if ($conn->query($sql2) === TRUE) {
                    echo "<script>alert('Libro apartado con éxito'); window.location.href = 'menuFisicos.php';</script>";
                } else {
                    echo "<script>alert('Error al apartar el libro'); window.location.href = 'menuFisicos.php';</script>" . $conn->error . '</div>';
                }
                header("Location: menuFisicos.php");
                exit();
            }
            if (isset($_GET['reservar']) && $_GET['reservar'] == 'true') {
                $codigoLibroR = $_GET['id2'];
                $sqltituloR = "SELECT titulo_lib FROM libro WHERE codigo_libro = '$codigoLibroR'";
                $resultTituloR = $conn->query($sqltituloR);
                $tituloR = ($resultTituloR->num_rows > 0) ? $resultTituloR->fetch_assoc()['titulo_lib'] : '';
                $sqlnombreR = "SELECT nombre_usu FROM usuario WHERE matricula = '$matriculap'";
                $resultNombreR = $conn->query($sqlnombreR);
                $nombreR = ($resultNombreR->num_rows > 0) ? $resultNombreR->fetch_assoc()['nombre_usu'] : '';
                $fechaReserva = date("Y-m-d");
                $sql3 = "INSERT INTO reserva (codigo_lr, titulo_lr, matricular, nombrer, fecha_rese)
                VALUES ('$codigoLibroR', '$tituloR', '$matriculap', '$nombreR', '$fechaReserva')";
                if ($conn->query($sql3) === TRUE) {
                    echo "<script>alert('Libro reservado con éxito'); window.location.href = 'menuFisicos.php';</script>";
                } else {
                    echo "<script>alert('Error al reservar el libro'); window.location.href = 'menuFisicos.php';</script>" . $conn->error . '</div>';
                }
                header("Location: menuFisicos.php");
                exit();
            }
            $sql = "SELECT * FROM libro";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="card mb-3">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">Título: ' . $row["titulo_lib"] . '</h5>';
                    echo '<p class="card-text">Código: ' . $row["codigo_libro"] . '</p>';
                    echo '<p class="card-text">Autor: ' . $row["autor_libro"] . '</p>';
                    echo '<p class="card-text">Editorial: ' . $row["editorial"] . '</p>';
                    echo '<p class="card-text">Categoría: ' . $row["categoria_libro"] . '</p>';
                    echo '<p class="card-text">Subcategoría: ' . $row["subcategoria_libro"] . '</p>';
                    echo '<p class="card-text">Cantidad: ' . $row["cantidad"] . '</p>';
                    echo '<p class="card-text">Estatus: ' . $row["estatus"] . '</p>';
                    if ($row["estatus"] == "DISPONIBLE") {
                        echo '<a href="menuFisicos.php?id=' . $row["codigo_libro"] . '&apartar=true" class="btn btn-success btnLogin mb-4">Apartar</a>';
                    }
                    if ($row["estatus"] == "PRESTAMO") {
                        echo '<a href="menuFisicos.php?id2=' . $row["codigo_libro"] . '&reservar=true" class="btn btn-success btnLogin mb-4">Reservar</a>';
                    }
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo '<p class="lead">0 resultados</p>';
            }

            $conn->close();
        ?>
        </div>
    </div>

</body>

<footer></footer>

</html>