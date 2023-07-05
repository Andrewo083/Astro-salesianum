<?php 

$conexion = mysqli_connect('localhost', 'root', '','astrodb')or die(mysqli_error($mysqli));

diference($conexion);

function diference($conexion){

    if(isset($_POST['Enviar'])){
        insertar($conexion);
    }
    
}

function insertar($conexion){

    $email = $_POST['email'];
    //REVISION

    $presql = "SELECT * FROM `reporter` WHERE `Email` = '$email'";
    mysqli_query($conexion, $presql);
    if ($presql == true){
 echo "LO SIENTO ESTE CORREO YA ESTA REGISTRADO";
    }else{
        echo "no se puede";
    }
    $password = $_POST['password'];
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $phonenumber = $_POST['phonenumber'];
    $ROL = 2;

    $sql = "INSERT INTO `reporter`(`Email`, `Password`, `Name`, `LastName`, `PhoneNumber`, `ROL`) VALUES ('$email','$password','$name','$lastname','$phonenumber','$ROL')";

    mysqli_query($conexion, $sql);

}
?>