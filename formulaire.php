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
    <form method="POST">
        <h1>Formulaire</h1>
        <input class="inline" type="text" name="nom" placeholder="NOM" autocomplete="off">
        <input class="inline" type="text" name="prenom" placeholder="Prénom">
        <input type="text" name="mail" placeholder="Mail">
        <input type="text" name="objet" placeholder="Objet">
        <textarea name="mssg">Ecrivez votre message ici ...</textarea>
        <input type="submit" name="send" value="Envoyer">
    </form>
</body>
</html>