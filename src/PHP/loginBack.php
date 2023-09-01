<?php 

$errorCorreo = ""; // Variable para almacenar mensaje de error de inicio de sesión
$conexion = new mysqli("localhost", "root", "", "astrodb") or die(mysqli_error($mysqli));

if (!$conexion) {
    die("Error en la conexion" . mysqli_connect_error());
}
$defaultEmail = isset($_POST['Email']) ? $_POST['Email'] : '';
// Verificamos si el formulario de inicio de sesión fue enviado
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtener el correo y la contraseña ingresados en el formulario
    $Email = $_POST["Email"];
    $Password = $_POST["Password"];

    // Consultas para seleccionar el correo, contraseña y nombre que coincidan con los ingresados para cada rol
    $consultaRol2 = "SELECT * FROM `reporter` WHERE `Email` = '$Email' AND BINARY `Password` = '$Password'";
    $consultaRol3 = "SELECT * FROM `user` WHERE `Email` = '$Email' AND BINARY `Password` = '$Password'";

    $resultadoRol2 = $conexion->query($consultaRol2);
    $resultadoRol3 = $conexion->query($consultaRol3);

    // Verificamos si se encontró una fila coincidente en alguna de las tablas
    if ($resultadoRol2->num_rows === 1) {
        // Inicio de sesión exitoso para el rol 2
        $row = $resultadoRol2->fetch_assoc();
        // Verificar si el correo electrónico contiene un punto en el dominio
        if (strpos($Email, ".") !== false && strrpos($Email, ".") > strpos($Email, "@")) {
            session_start();
            $_SESSION["Email"] = $Email;
            $_SESSION["Name"] = $row["Name"];
            $_SESSION['ROL'] = $row['ROL'];
            $_SESSION['ProfileImage'] = $row['ProfileImage'];
            header("Location: ./Profile_Journalist.php"); // Cambiarle a la parte de reportero
            exit();
        } else {
            $errorLogin = 'Credenciales incorrectas';
        }
    } elseif ($resultadoRol3->num_rows === 1) {
        // Inicio de sesión exitoso para el rol 3
        $row = $resultadoRol3->fetch_assoc();
        // Verificar si el correo electrónico contiene un punto en el dominio
        if (strpos($Email, ".") !== false && strrpos($Email, ".") > strpos($Email, "@")) {
            session_start();
            $_SESSION["Email"] = $Email;
            $_SESSION["Name"] = $row["Name"];
            $_SESSION['ROL'] = $row['ROL'];
            $_SESSION['ProfileImage'] = $row['ProfileImage'];

            // Agregamos esta parte para verificar el rol del usuario en la tabla "user"
            $rolConsulta = "SELECT rol FROM `user` WHERE `Email` = '$Email' AND `Password` = '$Password'";
            $resultadoRol = $conexion->query($rolConsulta);
            if ($resultadoRol->num_rows === 1) {
                $row = $resultadoRol->fetch_assoc();
                $rolUsuario = $row['rol'];
                if ($rolUsuario == 1) {
                    header("Location: ./WelcomeAdmin.php"); // Redirección para el rol 1
                    exit();
                } elseif ($rolUsuario == 2) {
                    header("Location: ./Profile_Journalist.php?jour=" . $Email); // Redirección para el rol 2
                    exit();
                } elseif ($rolUsuario == 3) {
                    header("Location: ./newindex.php"); // Redirección para el rol 3
                    exit();
                } else {
                    $errorCorreo = 'Rol no válido.';
                }
            } else {
                $errorCorreo = 'Error al obtener el rol del usuario.';
            }
        }
    } else {
        // Inicio de sesión fallido
        $errorCorreo = 'Credenciales incorrectas';
    }
}

// Cerrar la conexión
$conexion->close();

?>