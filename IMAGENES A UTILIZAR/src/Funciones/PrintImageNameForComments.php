<?php 

$verificacion = False;

if($RowComment['id_user'] == NULL){
 $email = $RowComment['id_reporter']; 
 $verificacion =true; 
 include("./Funciones/PrintJournalist.php");
 $ProfileImage = $ProfileImage;
 $UserName = $Name;
 
 
}else  if($RowComment['id_reporter'] == NULL){
 $verificacion = false; 
 $email = $RowComment['id_user']; 
 include("./Funciones/PrintUser.php"); 
 $ProfileImage = $UserProfileImage;
 $UserName = $UserName;

 
}
  

?>