
<?php 
$conexion = mysqli_connect('localhost', 'root', '', 'astrodb');
$State = "Active";
$query = "SELECT * FROM `news` WHERE `school` = 'Colegio Santa Cecilia' AND `State` = '$State'  ORDER BY 'date' DESC";
$result = mysqli_query($conexion, $query);

  $carpet_images = "../img/";

  ?>