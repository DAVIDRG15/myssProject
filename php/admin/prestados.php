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
    $fecha_prestamo = date("Y-m-d");
    $sql = "UPDATE prestamos SET fecha_devolucion='$fecha_devolucion', estatus_prestamo='DEVUELTO', receptor='$nombrep' WHERE Folio='$Foliop'";
    if ($conn->query($sql) === TRUE) {
        $reservaQuery = $conn->query("SELECT * FROM reserva WHERE codigo_lr = '$codigoLibro' ORDER BY folio_rese ASC LIMIT 1");
        if ($reservaQuery->num_rows > 0) {
            $reserva = $reservaQuery->fetch_assoc();
            $sqlInsertPrestamo = "INSERT INTO prestamos (codigo_lib, titulo_lib, matricula, nom_usu, fecha_prestamo, estatus_prestamo)
                                  VALUES ('{$reserva['codigo_lr']}', '{$reserva['titulo_lr']}', '{$reserva['matricular']}', '{$reserva['nombrer']}', '$fecha_prestamo','PRESTADO')";
            $conn->query($sqlInsertPrestamo);
            $codigoReserva = $reserva['folio_rese'];
            $conn->query("DELETE FROM reserva WHERE folio_rese = '$codigoReserva'");
        } else {
            $conn->query("UPDATE libro SET cantidad = cantidad + 1 WHERE codigo_libro = '$codigoLibro'");
            $conn->query("UPDATE libro SET estatus = 'DISPONIBLE' WHERE codigo_libro = '$codigoLibro'");
        }
        $sqlUpdatePrestamo = "UPDATE prestamos SET fecha_devolucion = '$fecha_devolucion', estatus_prestamo = 'DEVUELTO', receptor = '$nombrep' WHERE Folio = '$Foliop'";
        $conn->query($sqlUpdatePrestamo);
        echo "<script>alert('Prestamo actualizado correctamente'); window.location.href = 'prestamos.php';</script>";
        exit();
    } else {
        echo "<script>alert('El estatus del préstamo no es \"DEVUELTO\". No se puede actualizar la fecha de devolución.'); window.location.href = 'prestamos.php';</script>";
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