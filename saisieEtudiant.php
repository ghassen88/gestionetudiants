<?php
require_once ("security.php");
require_once ("RoleScolarite.php");

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
    <div class="panel-heading" style="text-align: center;margin-top: 150px;color:#1c7430;background-color: #86cfda "><h2>Ajouter Etudiant</h2> </div>
<div class="panel-body">
    <form class="border" method="post" action="saveEtudiant.php" enctype="multipart/form-data">

<div class="form-group">
    <label class="control-label">Nom:</label>
    <input class="form-control" type="text" name="nom">

</div>
        <div class="form-group">
            <label class="control-label">Email:</label>
            <input class="form-control" type="text" name="email">

        </div>
        <div class="form-group">
            <label class="control-label">Photo:</label>
            <input class="form-control" type="file"  name="photo">

        </div>
        <div class="">
            <button class="btn btn-secondary" type="submit">save</button>
        </div>

    </form>
</div>

</div>
</div>
</body>
</html>