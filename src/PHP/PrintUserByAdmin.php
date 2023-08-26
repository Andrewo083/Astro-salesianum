<?php 




                 
$verificacion = False;

if($row['id_user'] == NULL){

 $email = $row['id_reporter']; 
 $verificacion =true; 

 

include("./PHP/PrintJournalist.php");
  

 $ProfileImage = $ProfileImage;
 $UserName = "@".$Name." ".$LastName;
 
 
}else  if($row['id_reporter'] == NULL){

 $verificacion = false; 
 $email = $row['id_user']; 

 include("./PHP/PrintUser.php");



 $ProfileImage = $UserProfileImage;
 $UserName = "@".$UserName." ".$UserLastName;

 
}

?>