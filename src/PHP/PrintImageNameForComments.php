<?php 

$verificacion = False;

if($RowComment['id_user'] == NULL){
 $email = $RowComment['id_reporter']; 
 $verificacion =true; 
 include("./PHP/PrintJournalist.php");
 $ProfileImage = $ProfileImage;
 $UserName = $Name;
 
 
}else  if($RowComment['id_reporter'] == NULL){
 $verificacion = false; 
 $email = $RowComment['id_user']; 
 include("./PHP/PrintUser.php"); 
 $ProfileImage = $UserProfileImage;
 $UserName = $UserName;

 
}
  

?>