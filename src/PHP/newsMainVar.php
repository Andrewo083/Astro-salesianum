<?php 

$email = $_SESSION['Email'];

$id_news = $_GET['new']; //Estandar para trabajo con las news
$conexion = mysqli_connect('localhost', 'root', '', 'astrodb');
$carpet_images = "../img/";
$query = "SELECT * FROM `news` WHERE `id_news` = '$id_news'";
$result = mysqli_query($conexion, $query);

?>