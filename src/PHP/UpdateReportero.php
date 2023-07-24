<?php
include('./conexion.php');

$conexion = new mysqli($host, $user, $password, $bd);

if (!$conexion) {
    die("Error en la conexión" . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $ID = $_POST["ID"];
    $Name = $_POST['Name'];
    $LastName = $_POST['LastName'];
    $Email = $_POST['Email'];
    $PhoneNumber = $_POST['PhoneNumber'];
    $Contrasena = $_POST['Password'];
    // Otros campos que desees actualizar

    // Consulta para actualizar los datos en la base de datos
    $sql = "UPDATE `reporter` SET `Email`='$Email',`Password`='$Contrasena',`Name`='$Name',`LastName`='$LastName,`PhoneNumber`='$PhoneNumber' WHERE Email = '$ID' ";

    if ($conexion->query($sql)) {
        echo "Datos actualizados correctamente";
    } else {
        echo "Error en la actualización";
    }
}

$conexion->close();
?>
