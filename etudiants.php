
<?php
require_once ("security.php");

?>


<?php
require_once ("connexion.php");

$mc="";
$size=3;
if(isset($_GET['page'])){
    $page=$_GET['page'];
    }else{
    $page=0;
}
$offset=$size*$page;

if(isset($_GET['motcle'])){
    $mc=$_GET['motcle'];
    $req="select * from etudiants WHERE NOM like '%$mc%'";
    $req="select * from etudiants WHERE EMAIL like '%$mc%'";

}else {
    $req = "select * from etudiants  LIMIT $size OFFSET $offset";

}

$ps=$pdo->prepare($req);
$ps->execute();
/*
$ps2=$pdo->prepare("SELECT COUNT(*) AS  NB_ET FROM etudiants ");
$ps->execute();
$ligne=$ps2->fetch(PDO::FETCH_ASSOC);
$NBE=$ligne['NB_ET'];
$NbPages=floor(($NBE/$size)+1);
*/
?>

<html>
<head>
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mystyle.css">
</head>

<body >
<?php
require_once ("entete.php")
?>
<div class="container">
    <div class="titre" style="margin-top: 60px; margin-right: 200px">
        <form method="get" action="etudiants.php">
            <div class="form-group">
                <label class="control-label">Mot clé</label>
                <input type="text" name="motcle" value="<?php echo($mc)?>"/>
                <button type="submit">Chercher</button>
            </div>
        </form>
    </div>
    <div class="titre" style="margin-top: 100px">
    <div class="panel tab-pane-info">
        <div class=" panel-heading " style="text-align: center;color: #1c7430;background-color: #86cfda"><h2>Liste des étudiants  </h2> </div>
        <div class="panel-body">
            <table class=" mytabele table table-striped">
                <thead>
                <tr>
                    <th>CODE</th>  <th>NOM</th> <th>EMAIL</th> <th>PHOTO</th><th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php  while ($et=$ps->fetch())  {?>
                    <tr>
                        <td><?php echo($et['CODE'])?></td>
                        <td><?php echo($et['NOM'])?></td>
                        <td><?php echo($et['EMAIL'])?></td>
                        <td><img src="images/<?php echo($et['PHOTO'])?>" width="100" height="100"></td>
                        <td><a href="editerEtudiant.php? code=<?php echo($et['CODE']) ?>" style="color: #c69500">modifier</a></td>
                        <td><a onclick="return confirm('Etes vous sur??')" href="supprimerEtudiant.php? code=<?php echo($et['CODE']) ?>" style="color: #c82333">supprimer</a></td>
                        <td></td>

                    </tr>



                <?php } ?>
                </tbody>
</body>
</table>
        </div>

</div>
</div>
</html>
