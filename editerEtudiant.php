<?php
require_once ("security.php");
require_once ("RoleScolarite.php");

?>


<?php
$code=$_GET['code'];
require_once ("connexion.php");
$ps=$pdo->prepare("select * from etudiants WHERE CODE=?");
$params=array($code);
$ps->execute($params);
//recuprer ligne de la table
$etudiant=$ps->fetch();
?>

<html>
<head>
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">



</head>
<body>
<?php
require_once ("entete.php")
?>
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading" style="text-align: center;margin-top: 150px;color:#1c7430;background-color: #86cfda "><h2>Modifier Etudiant</h2> </div>
        <div class="panel-body">
            <form class="border" method="post" action="updateEtudiant.php" enctype="multipart/form-data">

                <div class="form-group">
                    <label class="control-label">Code:</label>
                    <input class="form-control" type="text" name="code" value="<?php echo($etudiant ['CODE'])?>">

                </div>
                <div class="form-group">
                    <label class="control-label">Nom:</label>
                    <input class="form-control" type="text" name="nom" value="<?php echo($etudiant ['NOM'])?>">

                </div>
                <div class="form-group">
                    <label class="control-label">Email:</label>
                    <input class="form-control" type="text" name="email" value="<?php echo($etudiant ['EMAIL'])?>">

                </div>
                <div class="form-group">
                    <label class="control-label">Photo:</label>
                    <input class="form-control" type="file"  name="photo">
  <img src="images/<?php echo($etudiant ['PHOTO'])?>" width="100" height="100">
                </div>
                <div class="">
                    <button class="btn btn-secondary" type="submit">save</button>
                </div>

            </form>
        </div>

    </div>
</div>
</body>
