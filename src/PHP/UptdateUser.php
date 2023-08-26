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

// Sanitizar y escapar los valores para prevenir inyección de SQL
$ID = mysqli_real_escape_string($conexion, $ID);
$Name = mysqli_real_escape_string($conexion, $Name);
$LastName = mysqli_real_escape_string($conexion, $LastName);
$PhoneNumber = mysqli_real_escape_string($conexion, $PhoneNumber);
$Password = mysqli_real_escape_string($conexion, $Password);

// Verificar si hay algún cambio en los campos
$SQL = "SELECT * FROM `user` WHERE Email = '$ID'";
$result = mysqli_query($conexion, $SQL);
$row = mysqli_fetch_assoc($result);

$updateNeeded = false;

if ($row['Name'] != $Name ||
    $row['LastName'] != $LastName ||
    $row['PhoneNumber'] != $PhoneNumber ||
    $row['Password'] != $Password) {
    $updateNeeded = true;
}

if ($updateNeeded) {
    $updateSQL = "UPDATE `user` SET `Name`='$Name',`LastName`='$LastName',`Password`='$Password',
                  `PhoneNumber`='$PhoneNumber',`ROL`='$Rol',`ProfileImage`='[value-7]' WHERE Email = '$ID'";
    
    if (mysqli_query($conexion, $updateSQL)) {
        echo "Datos actualizados exitosamente";
        header('Refresh: 2; URL=http://localhost/Astro-salesianum/src/ProfileUser.php');
    } else {
        echo "Error al actualizar el registro";
    }
} else {
    echo "<script>
            var noChanges = alert('No hay cambios en los datos');
            if (noChanges) {
                window.location.href = 'http://localhost/Astro-salesianum/src/ProfileUser.php';
            } else {
                window.location.href = 'http://localhost/Astro-salesianum/src/ProfileUser.php'; // Cambiar la URL según sea necesario
            }
          </script>";
}

mysqli_close($conexion);
?>
