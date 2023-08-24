<?php 

 $conexion = new mysqli("localhost", "root","","astrodb")or die(mysqli_error($mysqli));

 $QueryUser = "SELECT * FROM `user` WHERE `Email` = '$email'";
 $ResultUser = mysqli_query($conexion, $QueryUser);
 while ($RowUser = mysqli_fetch_array($ResultUser)) {
  
    $UserEmail = $RowUser['Email'];
    $UserProfileImage = $RowUser['ProfileImage'];
    $UserPassword = $RowUser['Password'];
    $UserName = $RowUser['Name'];
    $UserLastName = $RowUser['LastName'];
    $UserPhoneNumber = $RowUser['PhoneNumber'];
    $UserROL = $RowUser['ROL'];

 }




?>