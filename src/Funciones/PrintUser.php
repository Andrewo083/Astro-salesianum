<?php 

 $conexion = new mysqli("localhost", "root","","astrodb")or die(mysqli_error($mysqli));


 $QueryReport = "SELECT * FROM `user` WHERE `Email` = '$email'";
 $ResultReport = mysqli_query($conexion, $QueryReport);
 while ($RowReport = mysqli_fetch_array($ResultReport)) {
  
    $Email = $RowReport['Email'];
    $ProfileImage = $RowReport['ProfileImage'];
    $Password = $RowReport['Password'];
    $Name = $RowReport['Name'];
    $LastName = $RowReport['LastName'];
    $PhoneNumber = $RowReport['PhoneNumber'];
    $ROL = $RowReport['ROL'];

 }





?>