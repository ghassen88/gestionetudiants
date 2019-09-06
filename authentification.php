<?php


?>

<html>
<head>
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">



</head>
<body>
<?php
?>
<div class="container">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align: center;margin-top: 150px;color:#1c7430;background-color: #86cfda "><h2>Authentification</h2> </div>
                <div class="panel-body">
                    <form class="border" method="post" action="authentifier.php" enctype="multipart/form-data">

                        <div class="form-group">
                            <label class="control-label">Login:</label>
                            <input class="form-control" type="text" name="user">

                        </div>
                        <div class="form-group">
                            <label class="control-label">Mot de passe:</label>
                            <input class="form-control" type="password" name="pass">

                        </div>


                        <div class="">
                            <button class="btn btn-secondary" type="submit">Se connecter</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
        <div class="col-4"></div>

    </div>

</div>
</body>

