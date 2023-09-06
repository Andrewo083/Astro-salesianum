<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Update User</title>
</head>
<body>

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

// Verificar si el correo electrónico contiene un punto en el dominio
if (strpos($ID, ".") !== false && strrpos($ID, ".") > strpos($ID, "@")) {
    // Verificar si la contraseña cumple con los requisitos
    if (strlen($Password) >= 8 && preg_match("/[A-Z]/", $Password) && preg_match("/[0-9]/", $Password)) {
        // Verificar si hay cambios en los campos
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

        // Verificar si hay campos vacíos
        if (!empty($Name) && !empty($LastName) && !empty($PhoneNumber) && !empty($Password)) {
            if ($updateNeeded) {
                $updateSQL = "UPDATE `user` SET `Name`='$Name',`LastName`='$LastName',`Password`='$Password',
                              `PhoneNumber`='$PhoneNumber',`ROL`='$Rol' WHERE Email = '$ID'";

                if (mysqli_query($conexion, $updateSQL)) {
                    include("./Wait.html");
                    header('Refresh: 2; URL=http://localhost/Astro-salesianum/src/ProfileUser.php');
                } else {
                    include("./Error.php");
                    header('Refresh: 1; URL=http://localhost/Astro-salesianum/src/ProfileUser.php');
                }
            } else {
                echo '<script>
                        Swal.fire({
                            icon: "info",
                            title: "Información",
                            text: "No hay cambios en los datos"
                        }).then(() => {
                            window.location.href = `http://localhost/Astro-salesianum/src/ProfileUser.php`;
                        });
                        </script>';
            }
        } else {
           
            echo '<script>
            Swal.fire({
                icon: "error",
                title: "Error",
                text: "Uno de los campos ha de estar vacios Verifica que estén completos"
            }).then(() => {
                window.location.href = `http://localhost/Astro-salesianum/src/ProfileUser.php`;
            });
            </script>';
          
        }
    } else {
        echo '<script>
                    Swal.fire({
                        icon: "error",
                        title: "Error",
                        text: "La contraseña no es válida. Debe contener al menos una letra mayúscula, un número y tener al menos 8 caracteres."
                    }).then(() => {
                        window.location.href = `http://localhost/Astro-salesianum/src/ProfileUser.php`;
                    });
                    </script>';
    }
} else {
    header("Location: ../Error.php");
}

mysqli_close($conexion);
?>
</body>
</html>

