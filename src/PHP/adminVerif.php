<?php 

if(isset($_SESSION['ROL'])){
    if($_SESSION['ROL'] == 2){
        header("Location: ./Profile_Journalist.php");
    } elseif($_SESSION['ROL'] == 3){
        header("Location: ./newindex.php");
    }
}

?>