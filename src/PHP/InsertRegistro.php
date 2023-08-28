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

// Verificar si el correo electrónico contiene un punto en el dominio
if (strpos($Email, ".") !== false && strrpos($Email, ".") > strpos($Email, "@")) {
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
        // Verificar si la contraseña cumple con los requisitos
        if (strlen($Contrasena) >= 8 && preg_match("/[A-Z]/", $Contrasena) && preg_match("/[!@#$%^&*()\-_=+{};:,<.>]/", $Contrasena)) {
            // Insertar los datos en la tabla correspondiente
            $sql = "INSERT INTO `user`(`Email`, `Password`, `Name`, `LastName`, `PhoneNumber`, `ROL`, `ProfileImage`) VALUES ('$Email','$Contrasena','$Name','$LastName','$PhoneNumber','$Rol','$imagen')";

            if ($conexion->query($sql)) {
                include("./Wait.html");
                header('Refresh: 1; URL=http://localhost/Astro-salesianum/src/Login.php');
            } else {
                include("./Error.php");
                header('Refresh: 1; URL=http://localhost/Astro-salesianum/src/Login.php');
            }
        } else {
            header("Location: ../Error.php");
        }
    }
} else {
    header("Location: ../Error.php");

}

// Cerrar la conexión
$conexion->close();
?>