

<?php
require_once ("security.php");


?>


<?php

$nom=$_POST['nom'];
$email=$_POST['email'];
$nomphoto=$_FILES ['photo']['name'];
$tmp=$_FILES['photo'] ['tmp_name'];
move_uploaded_file($tmp,'./images/'.$nomphoto);
require_once ("connexion.php");
$ps=$pdo->prepare("insert INTO etudiants (NOM,EMAIL,PHOTO) VALUES  (?,?,?)");
$params=array($nom,$email,$nomphoto);
$ps->execute($params);
header("location:etudiants.php");
?>
