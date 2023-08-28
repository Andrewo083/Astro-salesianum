<?php 

session_start();

$conexion = mysqli_connect('localhost', 'root', '', 'astrodb');

$email = $_POST['Email'];
$password = $_POST['Password'];
$name = $_POST['Name'];
$lastname = $_POST['LastName'];
$phonenumber = $_POST['PhoneNumber'];



$queryVerif = "SELECT * FROM `reporter` WHERE `Email`  = '$email'";
$resultVerif = mysqli_query($conexion, $queryVerif);
$row = mysqli_fetch_assoc($resultVerif);

$updateNeeded = false;
if(
    $email = $row['Email'] ||
$password = $row['Password'] ||
$name = $row['Name'] ||
$lastname = $row['LastName'] ||
$phonenumber = $row['PhoneNumber'] 

){
    $updateNeeded = true;
}else{
    $updateNeeded = false;
}

if($updateNeeded == false){
    echo "sin cambios";
}else{
}


?>