<?php 

$email =  $row['Email'];

            $queryCom = "SELECT * FROM `comments` WHERE `id_user` = '$email'";
            $resultCom = mysqli_query($conexion, $queryCom);

?>