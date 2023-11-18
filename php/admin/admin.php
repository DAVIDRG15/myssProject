<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Menú Libros Físicos</title>
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
                <a href="../../index.php">
                    <button class="btn btn-danger">
                        SALIR
                    </button>
                </a>
            </div>
        </div>
    </div>
</nav>

<body>

    <div class="container menuFisicos">
        <h1>
            <p class="mlb">Administrador - Menú Libros Físicos</p>
        </h1><br>

        <div class="container create mt-2 mb-2">
            <h2>Agregar Libro</h2>
            <form action="create.php" method="post">
                <label class="form-label">Código:</label>
                <input class="form-control" type="text" name="codigo" required><br>
                <label class="form-label">Título:</label>
                <input class="form-control" type="text" name="titulo" required><br>
                <label class="form-label">Autor:</label>
                <input class="form-control" type="text" name="autor" required><br>
                <label class="form-label">Editorial:</label>
                <input class="form-control" type="text" name="editorial" required><br>
                <label class="form-label">Categoría:</label>
                <input class="form-control" type="text" name="categoria" required><br>
                <label class="form-label">Subcategoría:</label>
                <input class="form-control" type="text" name="subcategoria" required><br>
                <label class="form-label">Cantidad:</label>
                <input class="form-control" type="number" name="cantidad" required><br>
                <label class="form-label">Estatus:</label>
                <select class="form-control" name="estatus" required>
                    <option value="PRESTAMO">Prestamo</option>
                    <option value="DISPONIBLE">Disponible</option>
                </select><br>
                <input class="btn btn-success" type="submit" value="Agregar Libro">
            </form>
        </div><br>

        <div class="container read">
            <h2>Libros</h2>
            <?php include 'read.php'; ?>
        </div><br>

        <div class="container update">
            <h2>Actualizar Libro</h2>
            <div class="con_upt">
                <form action="update.php" method="post">
                    <label class="form-label">Código del Libro a actualizar: </label><input class="form-control"
                        type="text" name="codigo" required><br>
                    <label class="form-label">Título: </label><input class="form-control" type="text"
                        name="titulo" required><br>
                    <label class="form-label">Autor: </label><input class="form-control" type="text" name="autor"
                        required><br>
                    <label class="form-label">Editorial: </label><input class="form-control" type="text"
                        name="editorial" required><br>
                    <label class="form-label">Categoría: </label><input class="form-control" type="text"
                        name="categoria" required><br>
                    <label class="form-label">Subcategoría: </label><input class="form-control" type="text"
                        name="subcategoria" required><br>
                    <label class="form-label">Cantidad: </label><input class="form-control" type="number"
                        name="cantidad" required><br>
                    <label class="form-label">Estatus:</label>
                    <select class="form-control" name="estatus" required>
                        <option value="PRESTAMO">Prestamo</option>
                        <option value="DISPONIBLE">Disponible</option>
                    </select><br>
                    <input class="btn btn-success" type="submit" value="Actualizar Libro">
                </form>
            </div><br>

            <div class="container delete">
                <h2>Eliminar Libro</h2>
                <form action="delete.php" method="post">
                    <label class="form-label">Código del Libro a eliminar:</label> <input class="form-control"
                        type="text" name="codigo" required><br>
                    <input class="btn btn-success" type="submit" value="Eliminar Libro">
                </form>
            </div><br>

            <a href="prestamos.php">
                <button class="btn btn-success btnLogin mb-4">Préstamos</button>
            </a>
            <a href="reservas.php">
                <button class="btn btn-success btnLogin mb-4">Reservas</button>
            </a>
        </div>
    </div>

</body>

<footer></footer>

</html>