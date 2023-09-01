<?php 

$email = $_SESSION['Email'];
//$email = $_GET['jour'];

$conexion = mysqli_connect('localhost', 'root', '', 'astrodb');
$carpet_images = "../img/";
$query = "SELECT * FROM `reporter` WHERE `email` = '$email'";
$result = mysqli_query($conexion, $query);



?>