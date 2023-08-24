<?php 

$verificacion = False;

if($RowComment['id_user'] == NULL){
 $email = $RowComment['id_reporter']; 

 include("./Funciones/PrintJournalist.php");
 $ProfileImage = $ProfileImage;
 $UserName = $Name;
 echo $UserName."✅"; 
 
 
}else  if($RowComment['id_reporter'] == NULL){

 $email = $RowComment['id_user']; 
 include("./Funciones/PrintUser.php"); 
 $ProfileImage = $UserProfileImage;
 $UserName = $UserName;

    echo $UserName;



}
