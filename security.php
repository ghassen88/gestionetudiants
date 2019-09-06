<?php

session_start();

//isset permet de voir si un variable existe ou nn??
if(!(isset($_SESSION['PROFILE']))){
    header("location:authentification.php");
}

?>
