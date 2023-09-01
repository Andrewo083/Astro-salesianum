<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Insert Reportero</title>
</head>
<body>
    
</body>
</html>

<?php
include('conexion.php');

$conexion = new mysqli($host, $user, $password, $bd);

if (!$conexion) {
    die("Error en la conexion" . mysqli_connect_error());
}

$carpet_images = "C:/xampp/htdocs/Astro-salesianum/img/";

$imagen = $_FILES['imagen']['name'];
$imagen_tmp = $_FILES['imagen']['tmp_name'];

$Email = $_POST['Email'];
$Contraseña = $_POST['Password'];
$Name = $_POST['Name'];
$LastName = $_POST['LastName'];
$PhoneNumber = $_POST['PhoneNumber'];
$Rol = 2;

$imagen = $Email . "-" . $Name . "-" . $Rol . ".png";
$url_main = $carpet_images . $imagen;
if (move_uploaded_file($imagen_tmp, $url_main)) {
    // Verificar si el correo electrónico contiene un punto en el dominio
    if (strpos($Email, ".") !== false && strrpos($Email, ".") > strpos($Email, "@")) {
        // Verificar si la contraseña cumple con los requisitos
        if (strlen($Contraseña) >= 8 && preg_match("/[A-Z]/", $Contraseña) && preg_match("/[0-9]/", $Contraseña))  {
            // Consulta SQL para buscar el correo en ambas tablas
            $consultaEmail = "SELECT Email FROM user WHERE Email = '$Email'
                              UNION
                              SELECT Email FROM reporter WHERE Email = '$Email'";

            // Ejecutar la consulta
            $resultadoEmail = $conexion->query($consultaEmail);

            // Verificar si el correo ya fue utilizado
            if ($resultadoEmail->num_rows > 0) {
                echo '<script>
                Swal.fire({
                    icon: "error",
                    title: "Error",
                    text: "El correo electrónico ya está registrado, por favor utiliza otro"
                }).then(() => {
                    window.history.back();
                });
                </script>';
            } else {
                // Insertar los datos en la tabla correspondiente
                $sql = "INSERT INTO `reporter`(`ProfileImage`,`Email`, `Password`, `Name`, `LastName`, `PhoneNumber`, `ROL`) VALUES ('$imagen','$Email','$Contraseña','$Name','$LastName','$PhoneNumber','$Rol')";

                if ($conexion->query($sql)) {
                    echo '<script>
                    Swal.fire({
                        icon: "success",
                        title: "Registro exitoso",
                        text: "¡Registro exitoso!"
                    }).then(() => {
                        window.location.href = "../AdminJourTable.php";
                    });
                    </script>';
                } else {
                    echo '<script>
                    Swal.fire({
                        icon: "error",
                        title: "Error",
                        text: "Error al registrar"
                    }).then(() => {
                        window.history.back();
                    });
                    </script>';
                }
            }
        } else {
            echo '<script>
            Swal.fire({
                icon: "error",
                title: "Error",
                text: "La contraseña no cumple con los requisitos"
            }).then(() => {
                window.history.back();
            });
            </script>';
        }
    } else {
        echo '<script>
        Swal.fire({
            icon: "error",
            title: "Error",
            text: "El correo electrónico no es válido"
        }).then(() => {
            window.history.back();
        });
        </script>';
    }
} else {
    echo '<script>
    Swal.fire({
        icon: "error",
        title: "Error",
        text: "Error al mover la imagen al servidor"
    }).then(() => {
        window.history.back();
    });
    </script>';
}

// Cerrar la conexión
$conexion->close();
?>
