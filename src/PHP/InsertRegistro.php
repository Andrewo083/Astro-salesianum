<?php
include('conexion.php');

$conexion = new mysqli($host,$user,$password,$bd);

if(!$conexion){
    die("Error en la conexion" .mysqli_connect_error());
} 

$Name = $_POST['Name'];
$LastName = $_POST['LastName'];
$Email = $_POST['Email'];
$PhoneNumber = $_POST['PhoneNumber'];
$Contrasena = $_POST['password'];
$imagen = "lawyer2.png";

$Rol = 3;

// Consulta SQL para buscar el correo en ambas tablas
$consultaEmail = "SELECT Email FROM user WHERE Email = '$Email'
                  UNION
                  SELECT Email FROM reporter WHERE Email = '$Email'";

// Ejecutar la consulta
$resultadoEmail = $conexion->query($consultaEmail);

// Verificar si el correo ya fue utilizado
if ($resultadoEmail->num_rows > 0) {
    echo '<script>alert("¡El correo electrónico ya está registrado!, por favor utiliza otro"); window.location.href = "../Registro.html";</script>';
} else {
    // Insertar los datos en la tabla correspondiente
    $sql = "INSERT INTO `user`(`Email`, `Password`, `Name`, `LastName`, `PhoneNumber`, `ROL`, `ProfileImage`) VALUES ('$Email','$Contrasena','$Name','$LastName','$PhoneNumber','$Rol','$imagen')";


    if ($conexion->query($sql)) {
        include("./Wait.html");
        header('Refresh: 1; URL=http://localhost/Astro-salesianum/src/Login.php');
    } else {
        include("./Error.php");
        header('Refresh: 1; URL=http://localhost/Astro-salesianum/src/Login.php');
    }
}

// Cerrar la conexión
$conexion->close();