<?php

if($_SESSION['ROL'] == 1){
    echo "WelcomeAdmin.php";
  }else if($_SESSION['ROL'] == 2){
    echo "Profile_Journalist.php";
  }else if($_SESSION['ROL'] == 3){
    echo "ProfileUser.php";
  }else{
    echo "Error.php";
  }


?>