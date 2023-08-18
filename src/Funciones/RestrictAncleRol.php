<?php

if($_SESSION['ROL'] == 1){
    echo "welcomeAdmin.html";
  }else if($_SESSION['ROL'] == 2){
    echo "Profile_Journalist.php";
  }else if($_SESSION['ROL'] == 3){
    echo "ProfileUser.php";
  }else{
    echo "error.html";
  }


?>