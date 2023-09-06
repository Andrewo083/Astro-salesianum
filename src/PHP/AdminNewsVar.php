<?php 


$conexion = mysqli_connect('localhost', 'root', '', 'astrodb');
$carpet_images = "../img/";
$State = "Active";
$query = "SELECT * FROM `news`WHERE `State` = '$State' ";
$result = mysqli_query($conexion, $query);


?>