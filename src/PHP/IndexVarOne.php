<?php 






if (isset($_SESSION["Email"])) {
    include('./PHP/conexion.php');

      $conexion = new mysqli($host,$user,$password,$bd);
        if(!$conexion){
          die("Error en la conexion". mysqli_connect_error());
        }
    $Email = $_SESSION["Email"];



} else {

    header("Location: ./Login.php");
    exit();
}


$sql_all = true;


if (isset($_SESSION["Email"])) {
$name = $_SESSION['Name'];
} 


?>