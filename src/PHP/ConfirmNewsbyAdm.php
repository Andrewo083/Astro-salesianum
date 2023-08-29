<?php
include('conexion.php');

$conexion = new mysqli($host, $user, $password, $bd);

if (!$conexion) {
    die("Error en la conexión" . mysqli_connect_error());
}

$new= $_GET['new']; //Variable a obtener

// Agregamos el código JavaScript para la confirmación antes de eliminar
echo "<script>
    if (confirm('¿Estás seguro de que deseas eliminar el registro?')) {
        window.location.href = 'AdminNewsTable.php?new=$new';
    } else {
        window.location.href = 'http://localhost/Astro-salesianum/src/AdminNewsTable.php';
    }
</script>";

mysqli_close($conexion);
?>
