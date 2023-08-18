<?php

if($ROL == 1){
    echo "welcomeAdmin.html";
  }else if($ROL == 2){
    echo "Profile_Journalist.php";
  }else if($ROL == 3){
    echo "ProfileUser.php";
  }else{
    echo "error.html";
  }


?>