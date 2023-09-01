<?php 

$carpet_images = "../img/";
$conexion = mysqli_connect('localhost', 'root', '', 'astrodb');
$State = "Active";

$query = "SELECT * FROM `news` WHERE `school` = 'Instituto Ricaldone' AND `State` = '$State' ORDER BY 'date' DESC";
$result = mysqli_query($conexion, $query);

  $carpet_images = "../img/";



?>