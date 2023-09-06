<?php
include('conexion.php');
$conexion = new mysqli($host, $user, $password, $bd);

if (!$conexion) {
    die("Error en la conexión" . mysqli_connect_error());
}

$ID = $_GET['ID']; //Variable a obtener

$sql = "DELETE FROM `reporter` WHERE Email='$ID'"; // Encerramos $ID entre comillas simples

$resultado = mysqli_query($conexion, $sql);

if (mysqli_affected_rows($conexion) > 0) {
    include("./Wait.html");
    header('Refresh: 1; URL=http://localhost/Astro-salesianum/src/AdminJourTable.php');
} else {
    include("./Error.php");
    header('Refresh: 1; URL=http://localhost/Astro-salesianum/src/AdminJourTable.php');
}

mysqli_close($conexion);
?>