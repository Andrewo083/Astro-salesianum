<?php
$conexion = new mysqli("localhost", "root", "", "astrodb") or die(mysqli_error($mysqli));

if (!$conexion) {
    die("Error en la conexion" . mysqli_connect_error());
}

$defaultName = isset($_POST['Name']) ? htmlspecialchars($_POST['Name']) : '';
$defaultLastName = isset($_POST['LastName']) ? htmlspecialchars($_POST['LastName']) : '';
$defaultEmail = isset($_POST['Email']) ? $_POST['Email'] : '';
$defaultPhoneNumber = isset($_POST['PhoneNumber']) ? $_POST['PhoneNumber'] : '';

$errorCorreo = ""; // Variable para almacenar mensaje de error
$exitoRegistro = ""; // Variable para almacenar mensaje de éxito
$esperaRegistro = ""; // Variable para almacenar mensaje de espera

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $Name = htmlspecialchars($_POST['Name']);
    $LastName = htmlspecialchars($_POST['LastName']);
    $Email = htmlspecialchars($_POST['Email']);
    $PhoneNumber = htmlspecialchars($_POST['PhoneNumber']);
    $Contrasena = htmlspecialchars($_POST['password']);
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
            $errorCorreo = '¡El correo electrónico ya está registrado!, por favor utiliza otro';
        } else {
            // Verificar si la contraseña cumple con los requisitos
            if (strlen($Contrasena) >= 8 && preg_match("/[A-Z]/", $Contrasena) && preg_match("/[0-9]/", $Contrasena) && strpos($Contrasena, ' ') === false) {
                $hashedPassword = password_hash($Contrasena, PASSWORD_DEFAULT);
                // Insertar los datos en la tabla correspondiente
                $sql = "INSERT INTO `user`(`Email`, `Password`, `Name`, `LastName`, `PhoneNumber`, `ROL`, `ProfileImage`) VALUES ('$Email','$Contrasena','$Name','$LastName','$PhoneNumber','$Rol','$imagen')";

                if ($conexion->query($sql)) {
                    $exitoRegistro = 'Registro exitoso. Redireccionando...';

                    include("./Wait.html");

                    header('Refresh: 2; URL=http://localhost/Astro-salesianum/src/Login.php');
                } else {
                    $esperaRegistro = 'Ha ocurrido un error. Por favor, inténtalo nuevamente.';
                    include("./Error.php");
                    header('Refresh: 1; URL=http://localhost/Astro-salesianum/src/Login.php');
                }
            } else {
                $errorCorreo = 'La contraseña no es válida';
            }
        }
    } else {
        $errorCorreo = 'El correo electrónico no es válido';
    }
}
// Cerrar la conexión
$conexion->close();
?>
