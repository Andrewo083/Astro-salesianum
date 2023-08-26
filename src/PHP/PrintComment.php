<?php 

 $conexion = new mysqli("localhost", "root","","astrodb")or die(mysqli_error($mysqli));

 $new = $_GET['new'];
 $State = "Active";

 $QueryComment = "SELECT * FROM `comments` WHERE `id_new` = '$new' AND `State` = '$State'";
 $ResultComment = mysqli_query($conexion, $QueryComment);
 while ($RowComment = mysqli_fetch_array($ResultComment)) {

   $id_comment = $RowComment['id_comment'];
   $id_user = $RowComment['id_user'];
   $id_new = $RowComment['id_new'];
   $comment = $RowComment['comment'];
   $date = $RowComment['date'];
   $hour = $RowComment['hour'];

 }



?>