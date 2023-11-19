<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Registro</title>
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
        <h1>Administrador - Registro</h1><br>
        <div class="container create mt-2 mb-2">
            <h2>Agregar Administrador</h2>
            <form action="registroadmin.php" method="post">
                <label class="form-label">ID:</label>
                <input class="form-control" type="text" name="id" required><br>
                <label class="form-label">Nombre:</label>
                <input class="form-control" type="text" name="nombre" required><br>
                <label class="form-label">Contraseña:</label>
                <input class="form-control" type="text" name="contraseña" required><br>
                <input class="btn btn-success" type="submit" value="Agregar Administrador">
            </form>
            <br>
            <h2>Agregar Usuario</h2>
            <form action="registrouser.php" method="post">
                <label class="form-label">Matrícula:</label>
                <input class="form-control" type="text" name="matricula" required><br>
                <label class="form-label">Nombre:</label>
                <input class="form-control" type="text" name="nombre" required><br>
                <label class="form-label">Contraseña:</label>
                <input class="form-control" type="text" name="contraseña" required><br>
                <input class="btn btn-success" type="submit" value="Agregar Usuario">
            </form>
        </div><br>
    </div>

</body>

<footer></footer>

</html>