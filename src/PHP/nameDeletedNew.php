<?php 

$email = $row['id_reporter'];
              if($email == NULL){
                echo "@Astro Salesianum";
              }else{
              $QueryReport = "SELECT * FROM `reporter` WHERE `Email` = '$email'";
              $ResultReport = mysqli_query($conexion, $QueryReport);
              while ($RowReport = mysqli_fetch_array($ResultReport)) {
                echo "@".$RowReport['Name']." ".$RowReport['LastName']."✅";
              }
            }

?>