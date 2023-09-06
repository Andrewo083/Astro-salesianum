<?php
if($_SESSION['ROL'] == 3){

    header("Location: ./Error.php");

}

$conexion = mysqli_connect('localhost', 'root', '', 'astrodb');

$email = $_SESSION['Email'];
$QueryJournalist = "SELECT * FROM reporter WHERE Email = '$email'";
$ResultJournalist = mysqli_query($conexion, $QueryJournalist);
while($RowQuery = mysqli_fetch_array($ResultJournalist)){
  $ProfileImage = $RowQuery['ProfileImage'];
}
$new= $_GET['new'];
$carpet_images = "../img/";
$query = "SELECT * FROM `news` WHERE `id_news` = '$new'";
$result = mysqli_query($conexion, $query);

?>