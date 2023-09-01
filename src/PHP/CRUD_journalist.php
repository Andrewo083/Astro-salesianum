<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Crud_Journalist</title>
</head>
<body>
    
<?php 

$conexion = new mysqli("localhost", "root","","astrodb")or die(mysqli_error($mysqli));

diference($conexion);

function diference($conexion){

    if(isset($_POST['Enviar'])){
        insertar($conexion);
    }
    if(isset($_POST['editar'])){
        editar($conexion);
    }
    if(isset($_POST['Eliminar'])){
        delete($conexion);
    }

}

function insertar($conexion) {
    if (!empty($_POST["btnregistrar"])) {
        $carpet_images = "C:/xampp/htdocs/Astro-salesianum/img/";
        echo $carpet_images;

        $Email = $_POST['Email'];
        $Password = $_POST['Password'];
        $imagen = $_FILES['imagen']['name'];
        $imagen_tmp = $_FILES['imagen']['tmp_name'];

        $Name = $_POST['Name'];
        $LastName = $_POST['LastName'];
        $PhoneNumber = $_POST['PhoneNumber'];

        $ROL = "2";
        
        $imagen = "$Email.png";
        $url_main = $carpet_images . $imagen;
        if (move_uploaded_file($imagen_tmp, $url_main)) {
            $sql = $conexion->query("INSERT INTO reporter(Email, ProfileImage, Password, Name, LastName, PhoneNumber, ROL) VALUES ('$Email', '$imagen', '$Password', '$Name', '$LastName', '$PhoneNumber', '$ROL')");
            if ($sql == 1) {
                echo '<script>
                Swal.fire({
                    icon: "success",
                    title: "Registro exitoso",
                    text: "¡Registro exitoso!"
                }).then(() => {
                    window.location.href = "./Wait.html";
                });
                </script>';
            } else {
                echo '<script>
                Swal.fire({
                    icon: "error",
                    title: "Error",
                    text: "Error al registrar"
                }).then(() => {
                    window.location.href = "./Wait.html";
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
                window.location.href = "./Wait.html";
            });
            </script>';
        }
    }
}

function editar($conexion) {
    
    $conexion = mysqli_connect('localhost', 'root', '', 'astrodb');

    if (!$conexion) {
        die("Error en la conexión" . mysqli_connect_error());
    }
    
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $ID = mysqli_real_escape_string($conexion, $_POST['ID']);
        $Email = mysqli_real_escape_string($conexion, $_POST['Email']);
        $Password = mysqli_real_escape_string($conexion, $_POST['Password']);
        $Name = mysqli_real_escape_string($conexion, $_POST['Name']);
        $LastName = mysqli_real_escape_string($conexion, $_POST['LastName']);
        $PhoneNumber = mysqli_real_escape_string($conexion, $_POST['PhoneNumber']);
        $ProfileImage = mysqli_real_escape_string($conexion, $_POST['Imagen']);
        $ROL = "2"; 
    
        // Verificación de correo electrónico
        if (strpos($Email, ".") !== false && strrpos($Email, ".") > strpos($Email, "@")) {
            $email = $_POST['Email'];
            $password = $_POST['Password'];
            $name = $_POST['Name'];
            $lastname = $_POST['LastName'];
            $phonenumber = $_POST['PhoneNumber'];
    
            // Validación de contraseña
            if (strlen($password) >= 8 && preg_match("/[A-Z]/", $password) && preg_match("/[0-9]/", $password)) {
                $queryVerif = "SELECT * FROM `reporter` WHERE `Email`  = '$email'";
                $resultVerif = mysqli_query($conexion, $queryVerif);
                $row = mysqli_fetch_assoc($resultVerif);
        
                $updateNeeded = false;
                if (
                    $email != $row['Email'] ||
                    $password != $row['Password'] ||
                    $name != $row['Name'] ||
                    $lastname != $row['LastName'] ||
                    $phonenumber != $row['PhoneNumber']
                ) {
                    $updateNeeded = true;
                } else {
                    $updateNeeded = false;
                }
        
                if ($updateNeeded == false) {
                    echo '<script>
                    Swal.fire({
                        icon: "info",
                        title: "Información",
                        text: "No hay cambios en los datos"
                    }).then(() => {
                        window.location.href = `http://localhost/Astro-salesianum/src/Edit_Jurnalist.php?reporter=${email}`;
                    });
                    </script>';
                } else {
                    $query = "UPDATE `reporter` SET `Email`='$Email',`ProfileImage`='$ProfileImage',`Password`='$Password',`Name`='$Name',`LastName`='$LastName',`PhoneNumber`='$PhoneNumber',`ROL`='$ROL' WHERE `Email` = '$ID'";
            
                    mysqli_query($conexion, $query);
            
                    echo '<script>
                    Swal.fire({
                        icon: "success",
                        title: "Actualización exitosa",
                        text: "¡Actualización exitosa!"
                    }).then(() => {
                        window.location.href = `http://localhost/Astro-salesianum/src/AdminJourTable.php`;
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
                    window.location.href = `http://localhost/Astro-salesianum/src/Edit_Jurnalist.php?reporter=${email}`;
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
                window.location.href = `http://localhost/Astro-salesianum/src/Edit_Jurnalist.php?reporter=${email}`;
            });
            </script>';
        }
    }
    
    // Redirigir incluso cuando no se haya realizado ningún cambio
    echo '<script>
    setTimeout(() => {
        window.location.href = `http://localhost/Astro-salesianum/src/AdminJourTable.php`;
    }, 2000); // Redirigir después de 2 segundos
    </script>';
    
    // Cerrar la conexión
    $conexion->close();
    
}

?>
</body>
</html>
