
<?php
require_once ("security.php");

?>

<html>
<head>
    <title></title>
    <link rel="stylesheet" href="css/mystyle.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>



<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Gestion Etudiants</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item ">
                <a class="nav-link" href="etudiants.php">Etudiants <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="saisieEtudiant.php">Saisie Etudiant</a>
            </li>
            <li class="nav-item ml ">
                <a class="nav-link " href="logout.php">logout[<?php echo($_SESSION['PROFILE'] ['LOGIN'])?>]</a>
            </li>

        </ul>
    </div>
</nav>



</body>
</html>
