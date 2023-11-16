<?php
include 'conexion.php';
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