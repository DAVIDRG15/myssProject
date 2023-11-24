<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Multas</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../../assets/css/style.css">
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
            <div></div>
            <div class="ml-auto">
                <a href="admin.php">
                    <button class="btn btn-danger">
                        REGRESAR
                    </button>
                </a>
            </div>
        </div>
    </div>
</nav>

<body>

    <div class="container menuFisicos">
        <h1>Administrador - Multas</h1><br>
        <br>
        <div class="container read">
            <h2>Multados</h2>
            <?php include 'multados.php'; ?>
        </div><br>
    </div>

</body>

<footer></footer>

</html>