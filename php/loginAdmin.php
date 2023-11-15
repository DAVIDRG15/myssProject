<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador - Login</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</head>

<nav></nav>

<body>
    <div class="login">
        <div class="row">
            <div class="col-md-6 background-image2"></div>
            <div class="col-md-6 p-5">
                <div class="container loginFondo mt-2 mb-2">
                    <div class="text-center">
                        <img src="../assets/img/Usuario.png" alt="Usuario" class="img-fluid mt-4" width="200px">
                    </div>
                    <br><br>
                    <form id="loginForm" action="admin/login.php" method="post">
                        <div class="col-md-12">
                            <label for="usuario" class="form-label">ID</label>
                            <input type="text" class="form-control" id="id_admin" name="id_admin" required>
                        </div><br>
                        <div class="col-md-12">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="contraseña" name="contraseña" required>
                        </div><br>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success btnLogin mb-4">Ingresar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

<footer></footer>

</html>