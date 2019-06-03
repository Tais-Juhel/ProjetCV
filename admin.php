<?php

if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = "accueil";
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/admin.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <nav class="page">
        <a href="/admin.php/?page=accueil" class="active">Accueil</a>
        <a href="/admin.php/?page=portfolio">Portfolio</a>
        <a href="/admin.php/?page=projet">Projet</a>
        <a href="/admin.php/?page=formulaire">Formulaire</a>
    </nav>

    <?php

    switch ($page){
        case "accueil":
            require_once "index.php";
        break;
        case "portfolio":
            require_once "portfolio.php";
        break;
        case "projet":
            require_once "projet.php";
        break;
        case "formulaire":
            require_once "formulaire.php";
        break;
    }

    ?>
</body>
</html>