<?php 

include('./PHP/conexion.php');

$conexion = new mysqli($host, $user, $password, $bd);

if (!$conexion) {
  die("Error en la conedxion" . mysqli_connect_error());
}

$email = $_SESSION['Email'];

$conexion = mysqli_connect('localhost', 'root', '', 'astrodb');
$carpet_images = "../img/";
$query = "SELECT * FROM `user` WHERE `email` = '$email'";
$result = mysqli_query($conexion, $query);

?>