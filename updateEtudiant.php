

<?php
require_once ("security.php");
require_once ("RoleScolarite.php");

?>
<?php

$code=$_POST['code'];
$nom = $_POST['nom'];
$email = $_POST['email'];
$nomphoto = $_FILES ['photo']['name'];
require_once("connexion.php");

if($nomphoto==""){
    $ps = $pdo->prepare("UPDATE etudiants SET NOM=?, EMAIL=? WHERE CODE=?");
    $params = array($nom, $email,$code);
    $ps->execute($params);
}else{
    $tmp = $_FILES['photo'] ['tmp_name'];
    move_uploaded_file($tmp, './images/' . $nomphoto);
    $ps = $pdo->prepare("UPDATE etudiants SET NOM=?, EMAIL=?, PHOTO=? WHERE CODE=?");
    $params = array($nom, $email, $nomphoto,$code);
    $ps->execute($params);

}

header("location:etudiants.php");


?>
