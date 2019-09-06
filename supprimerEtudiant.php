
<?php
require_once ("security.php");
require_once ("RoleScolarite.php");

?>





<?php
$code=$_GET['code'];
require_once ("connexion.php");
$ps=$pdo->prepare("delete from etudiants WHERE CODE=?");
$params=array($code);
$ps->execute($params);
header("location:etudiants.php");


?>
