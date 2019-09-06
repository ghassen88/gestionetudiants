<?php
require_once("connexion.php");
$username=$_POST['user'];
$password = md5($_POST['pass']);
$ps = $pdo->prepare("SELECT * from users WHERE LOGIN=? AND PASSWORD=? ");
$params = array($username, $password,);
$ps->execute($params);
if($user=$ps->fetch()) {
    session_start();
    //objet user stockee dans une variable profile
    $_SESSION['PROFILE']=$user;
    header("location:etudiants.php");
}else{
    header("location:authentification.php");
}






?>
