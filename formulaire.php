<?php

require_once '_connection.php';

if(isset($_POST['send'])){
    $stmt = $dbh->prepare('INSERT INTO web.form (nom, prenom, mail, objet, mssg) VALUES (UPPER(:nom), INITCAP(LOWER(:prenom)), :mail, :objet, :mssg)');
    $stmt->bindValue('nom', $_POST['nom']);
    $stmt->bindValue('prenom', $_POST['prenom']);
    $stmt->bindValue('mail', $_POST['mail']);
    $stmt->bindValue('objet', $_POST['objet']);
    $stmt->bindValue('mssg', $_POST['mssg']);
    $stmt->execute();
    header('Location: /portfolio.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/form.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <form action="/formulaire.php" method="POST">
        <h1>Formulaire</h1>
        <input class="inline" type="text" name="nom" placeholder="NOM" autocomplete="off" required>
        <input class="inline" type="text" name="prenom" placeholder="Prénom" autocomplete="off" required>
        <input type="text" name="mail" placeholder="Mail" required>
        <input type="text" name="objet" placeholder="Objet" autocomplete="off" required>
        <textarea name="mssg" placeholder="Ecrivez votre message ici ..." required></textarea>
        <input type="submit" name="send" value="Envoyer">
    </form>
</body>
</html>