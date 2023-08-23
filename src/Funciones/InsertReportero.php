<?php
include('conexion.php');

$conexion = new mysqli($host,$user,$password,$bd);

if(!$conexion){
    die("Error en la conexion" .mysqli_connect_error());
} 
$carpet_images = "C:/xampp/htdocs/Astro-salesianum/img/";
echo $carpet_images;

$imagen = $_FILES['imagen']['name'];
$imagen_tmp = $_FILES['imagen']['tmp_name'];

$Email=$_POST['Email'];
$Contraseña=$_POST['Password'];
$Name=$_POST['Name'];
$LastName=$_POST['LastName'];
$PhoneNumber=$_POST['PhoneNumber'];
$Rol=2;

$imagen =  $Email."-".$Name."-".$ROL.".png";
    $url_main = $carpet_images.$imagen;
    move_uploaded_file($imagen_tmp, $url_main);

// Consulta SQL para buscar el correo en ambas tablas
$consultaEmail = "SELECT Email FROM user WHERE Email = '$Email'
                  UNION
                  SELECT Email FROM reporter WHERE Email = '$Email'";

// Ejecutar la consulta
$resultadoEmail = $conexion->query($consultaEmail);

// Verificar si el correo ya fue utilizado
if ($resultadoEmail->num_rows > 0) {
    echo '<script>alert("¡El correo electrónico ya está registrado!, por favor utiliza otro"); window.location.href = "../Form_Jurnalist.html";</script>';
} else {
    // Insertar los datos en la tabla correspondiente
    $sql = "INSERT INTO `reporter`(`ProfileImage`,`Email`, `Password`, `Name`, `LastName`, `PhoneNumber`, `ROL`) VALUES ('$imagen','$Email','$Contraseña','$Name','$LastName','$PhoneNumber','$Rol')";


    if ($conexion->query($sql)) {
        echo "Datos insertados correctamente";
        header('Refresh: 3; URL=http://localhost/Astro-salesianum/src/Form_Jurnalist.html');
    } else {
        echo "Error en la inserción";
    }
}

// Cerrar la conexión
$conexion->close();