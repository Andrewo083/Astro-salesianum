<?php
include('conexion.php');

$conexion = new mysqli($host, $user, $password, $bd);

if (!$conexion) {
    die("Error en la conexión" . mysqli_connect_error());
}

$Nombre = $_POST['Name'];
$Apellido = $_POST['LastName'];
$Email = $_POST['Email'];
$NumeroTelefono = $_POST['PhoneNumber'];
$Contrasena = $_POST['password'];
$Rol = 3;

// Consulta para verificar si el correo ya está registrado
$consultaEmail = "SELECT COUNT(*) AS total FROM `user` WHERE `Email` = '$Email'";
$resultadoEmail = $conexion->query($consultaEmail);
$datosEmail = $resultadoEmail->fetch_assoc();

if ($datosEmail['total'] > 0) {
    // El correo electrónico ya está registrado, mostrar el mensaje de alerta y redireccionar
    echo '<script>alert("¡El correo electrónico ya está registrado!"); window.location.href = "../Registro.html";</script>';
} else {
    // El correo electrónico no está registrado, realizar la inserción
    $sql = "INSERT INTO `user`(`Email`, `Name`, `LastName`, `Password`, `PhoneNumber`, `ROL`) VALUES ('$Email','$Nombre','$Apellido','$Contrasena','$NumeroTelefono','$Rol')";

    if ($conexion->query($sql)) {
        echo "Datos insertados correctamente";
        header('Refresh: 2; URL=http://localhost/Astro-salesianum/src/Login.html');
        
    } else {
        echo "Error en la inserción";
    }
}
?>
