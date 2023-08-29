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
        move_uploaded_file($imagen_tmp, $url_main);

        $sql = $conexion->query("INSERT INTO reporter(Email, ProfileImage, Password, Name, LastName, PhoneNumber, ROL) VALUES ('$Email', '$imagen', '$Password', '$Name', '$LastName', '$PhoneNumber', '$ROL')");
        if ($sql == 1) {
            include("./Wait.html");
        } else {
            echo "<div class='alert alert-danger'>BIEN</div>";
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
                echo "<script>
                var noChanges = alert('No hay cambios en los datos');
                if (noChanges) {
                    window.location.href = 'http://localhost/Astro-salesianum/src/Edit_Jurnalist.php?reporter=$email';
                } else {
                    window.location.href = 'http://localhost/Astro-salesianum/src/Edit_Jurnalist.php?reporter=$email';
                }
                </script>";
            } else {
                $query = "UPDATE `reporter` SET `Email`='$Email',`ProfileImage`='$ProfileImage',`Password`='$Password',`Name`='$Name',`LastName`='$LastName',`PhoneNumber`='$PhoneNumber',`ROL`='$ROL' WHERE `Email` = '$ID'";
    
                mysqli_query($conexion, $query);
    
                include("./Wait.html");
                // Redirigir después de 2 segundos
                header('Refresh: 2; URL=http://localhost/Astro-salesianum/src/AdminJourTable.php');
            }
        } else {
            echo '<script>alert("El correo electrónico no es válido");</script>';
        }
    }
    
    // Cerrar la conexión
    $conexion->close();
    
}








?>