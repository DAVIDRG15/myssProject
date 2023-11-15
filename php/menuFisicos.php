<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Menú Libros Físicos</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</head>

<body>

    <div class="container menuFisicos">
        <h1>Administrador - Menú Libros Físicos</h1>

        <div class="container create">
            <h2>Agregar Libro</h2>
            <form action="admin/create.php" method="post">
                Código: <input type="text" name="codigo" required><br>
                Título: <input type="text" name="titulo" required><br>
                Autor: <input type="text" name="autor" required><br>
                Editorial: <input type="text" name="editorial" required><br>
                Categoría: <input type="text" name="categoria" required><br>
                Subcategoría: <input type="text" name="subcategoria" required><br>
                Cantidad: <input type="number" name="cantidad" required><br>
                Estatus:
                <select name="estatus" required>
                    <option value="PRESTAMO">Prestamo</option>
                    <option value="DISPONIBLE">Disponible</option>
                </select><br>
                <input type="submit" value="Agregar Libro">
            </form>
        </div><br>

        <div class="container read">
            <h2>Libros</h2>
            <?php include 'admin/read.php'; ?>
        </div><br>

        <div class="container update">
            <h2>Actualizar Libro</h2>
            <form action="admin/update.php" method="post">
                Código del Libro a actualizar: <input type="text" name="codigo" required><br>
                Nuevo Título: <input type="text" name="titulo" required><br>
                Nuevo Autor: <input type="text" name="autor" required><br>
                Nueva Editorial: <input type="text" name="editorial" required><br>
                Nueva Categoría: <input type="text" name="categoria" required><br>
                Nueva Subcategoría: <input type="text" name="subcategoria" required><br>
                Nueva Cantidad: <input type="number" name="cantidad" required><br>
                Nuevo Estatus:
                <select name="estatus" required>
                    <option value="PRESTAMO">Prestamo</option>
                    <option value="DISPONIBLE">Disponible</option>
                </select><br>
                <input type="submit" value="Actualizar Libro">
            </form>
        </div><br>

        <div class="container delete">
            <h2>Eliminar Libro</h2>
            <form action="admin/delete.php" method="post">
                Código del Libro a eliminar: <input type="text" name="codigo" required><br>
                <input type="submit" value="Eliminar Libro">
            </form>
        </div><br>
    </div>

</body>

</html>