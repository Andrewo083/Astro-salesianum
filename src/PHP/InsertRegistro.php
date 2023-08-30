<?php
$conexion = new mysqli("localhost", "root", "", "astrodb") or die(mysqli_error($mysqli));

if (!$conexion) {
    die("Error en la conexion" . mysqli_connect_error());
}

$defaultName = isset($_POST['Name']) ? $_POST['Name'] : '';
$defaultLastName = isset($_POST['LastName']) ? $_POST['LastName'] : '';
$defaultEmail = isset($_POST['Email']) ? $_POST['Email'] : '';
$defaultPhoneNumber = isset($_POST['PhoneNumber']) ? $_POST['PhoneNumber'] : '';

$errorCorreo = ""; // Variable para almacenar mensaje de error
$exitoRegistro = ""; // Variable para almacenar mensaje de éxito
$esperaRegistro = ""; // Variable para almacenar mensaje de espera

if ($_SERVER["REQUEST_METHOD"] === "POST") {
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
            $errorCorreo = '¡El correo electrónico ya está registrado!, por favor utiliza otro';
        } else {
            // Verificar si la contraseña cumple con los requisitos
            if (strlen($Contrasena) >= 8 && preg_match("/[A-Z]/", $Contrasena) && preg_match("/[0-9]/", $Contrasena))  {
                // Insertar los datos en la tabla correspondiente
                $sql = "INSERT INTO `user`(`Email`, `Password`, `Name`, `LastName`, `PhoneNumber`, `ROL`, `ProfileImage`) VALUES ('$Email','$Contrasena','$Name','$LastName','$PhoneNumber','$Rol','$imagen')";

                if ($conexion->query($sql)) {
                    $exitoRegistro = 'Registro exitoso. Redireccionando...';

                   ?><!DOCTYPE html>
                   <html lang="en">
                   <head>
                       <meta charset="UTF-8">
                       <meta name="viewport" content="width=device-width, initial-scale=1.0">
                       <link rel="stylesheet" href="../Public/tailwind.css" />
                       <title>Espera</title> <link rel="stylesheet" href="">
                       <link rel="stylesheet" href="../Public/boton.css">
                        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
                   </head>
                   <body><br><br><br><br><br><br>
                       <!-- Contenido de la Landing Page -->
                   <div class="bg-white">
                       <div class="flex justify-between items-center py-28 px-5">
                           <div class="w-1/2">
                               <h2 class="text-5xl font-semibold text-gray-800">Por favor espere un momento.</h2>
                               <h3 class="text-xl font-semibold text-gray-600 mt-4">¡Los datos se estan enviando por favor espero un momento!</h3>
                               <p class="text-gray-600 mt-4">Estamos enviando sus datos en este momento. Si el proceso dura demasiado tiempo, por favor contactanos. Esperamos que disfrute su tiempo en nuestro periodico ¡Muchas Gracias! <br> &nbsp; <b><a href="../newindex.php">Ir a Home</a></b>
                               </p>
                           </div>
                           <a href="../newindex.php">
                           <div class="w-1/2">
                               <img src="./PHP/AstroFavicon.png" alt="Imagen relacionada con el programa de fidelización" class="w-full h-auto">
                           </div>
                       </a>
                       </div>
                       <a href=""></a>
                   </div>
                   
                   
                   <br><br><br><br><br><br><br><br><br><br>
                   </body>
                   </html>
                   <script> 
                       function googleTranslateElementInit() { new google.translate.TranslateElement({ pageLanguage: "es",includedLanguages: "en,es",}, "google_translate_element" ); } </script>
                       <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                       
                        <?php

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
