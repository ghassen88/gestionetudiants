<?php
/*
$conn=mysqli_connect("localhost","root") or die(mysqli_error());
mysqli_select_db($conn,"scolarite");
*/


try{

    $strconnexion='mysql:host=localhost;dbname=scolarite';
    $pdo=new PDO($strconnexion,'root','');
}catch(PDOException $exception){
$msg='erreur PDO dans' .$exception->getMessage();
die($msg);
}
?>