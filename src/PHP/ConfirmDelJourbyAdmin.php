<?php
include('conexion.php');

$conexion = new mysqli($host, $user, $password, $bd);

if (!$conexion) {
    die("Error en la conexión" . mysqli_connect_error());
}

$ID = $_GET['ID']; //Variable a obtener

// Agregamos el código JavaScript para la confirmación antes de eliminar
echo "<script>
    if (confirm('¿Estás seguro de que deseas eliminar el registro?')) {
        window.location.href = 'Delete.php?ID=$ID';
    } else {
        window.location.href = 'http://localhost/Astro-salesianum/src/AdminJourTable.php';
    }
</script>";

mysqli_close($conexion);
?>
