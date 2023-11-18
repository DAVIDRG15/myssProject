<?php
include '../conexion.php';
session_start();
$idadminp=$_SESSION["id_admin"];
$sqlnombrep = "SELECT nombre_admin FROM administrador WHERE id_admin = '$idadminp'";
$resultnombrep = $conn->query($sqlnombrep);
$nombrep = ($resultnombrep->num_rows > 0) ? $resultnombrep->fetch_assoc()['nombre_admin'] : '';

if (isset($_GET['actualizarp']) && $_GET['actualizarp'] == 'true') {
    $Foliop = $_GET['id3'];
    $fecha_devolucion=date("Y-m-d");
    $codigoQuery = $conn->query("SELECT codigo_lib FROM prestamos WHERE Folio = '$Foliop'");
    $row = $codigoQuery->fetch_assoc();
    $codigoLibro = $row['codigo_lib'];
    $sql = "UPDATE prestamos SET fecha_devolucion='$fecha_devolucion', estatus_prestamo='DEVUELTO', receptor='$nombrep' WHERE Folio='$Foliop'";
    if ($conn->query($sql) === TRUE) {
        if ($conn->affected_rows > 0) {
            $sqlUpdateCantidadp = "UPDATE libro SET cantidad = cantidad + 1 WHERE codigo_libro = '$codigoLibro'";
            $conn->query($sqlUpdateCantidadp);
            echo "<script>alert('Prestamo actualizado correctamente'); window.location.href = 'prestamos.php';</script>";
            exit();
        } else {
            echo "<script>alert('No se encontró un prestamo con el folio \"$Foliop\" para actualizar.'); window.location.href = 'prestamos.php';</script>";
        }
    } else {
        echo "Error al actualizar prestamo: " . $conn->error;
    }
}
$sql = "SELECT * FROM prestamos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="card mb-3">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">Folio: ' . $row["Folio"] . '</h5>';
        echo '<p class="card-text">Código: ' . $row["codigo_lib"] . '</p>';
        echo '<p class="card-text">Título: ' . $row["titulo_lib"] . '</p>';
        echo '<p class="card-text">Matrícula: ' . $row["matricula"] . '</p>';
        echo '<p class="card-text">Alumno: ' . $row["nom_usu"] . '</p>';
        echo '<p class="card-text">Fecha de prestamo: ' . $row["fecha_prestamo"] . '</p>';
        echo '<p class="card-text">Fecha de devolución: ' . $row["fecha_devolucion"] . '</p>';
        echo '<p class="card-text">Estatus: ' . $row["estatus_prestamo"] . '</p>';
        echo '<p class="card-text">Recibió el libro: ' . $row["receptor"] . '</p>';
        if ($row["estatus_prestamo"] == "PRESTADO") {
            echo '<a href="prestamos.php?id3=' . $row["Folio"] . '&actualizarp=true" class="btn btn-success btnLogin mb-4">Actualizar</a>';
        }
        echo '</div>';
        echo '</div>';
    }
} else {
    echo "0 resultados";
}

$conn->close();
?>