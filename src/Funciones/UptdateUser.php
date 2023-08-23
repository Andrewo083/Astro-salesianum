<?php
include('conexion.php');

$conexion = new mysqli($host, $user, $password, $bd);

if (!$conexion) {
    die("Error en la conexion" . mysqli_connect_error());
} 

$ID = $_GET['ID'];
$Name = $_POST['Name'];
$LastName = $_POST['LastName'];
$PhoneNumber = $_POST['PhoneNumber'];
$Password = $_POST['Password'];
$Rol = 3;

// Sanitizar y escapar el valor de Email para prevenir inyección de SQL
$ID = mysqli_real_escape_string($conexion, $ID);

$SQL = "UPDATE `user` SET `Name`='$Name',`LastName`='$LastName',`Password`='$Password',
        `PhoneNumber`='$PhoneNumber',`ROL`='$Rol',`ProfileImage`='[value-7]' WHERE Email = '$ID'";

// Ejecucion de la consulta
if (mysqli_query($conexion, $SQL)) {
    echo "Datos actualizados exitosamente";
    header('Refresh: 2; URL=http://localhost/Astro-salesianum/src/ProfileUser.php');
} else {
    echo "Error al actualizar el registro";
}

mysqli_close($conexion);
?>
