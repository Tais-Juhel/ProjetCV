<?php

require_once '_connection.php';

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/indx.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <h1>TAÏS JUHEL</h1>
    <div>
        <?php
            $stmt = $dbh->query('SELECT * FROM web.profil');
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
        ?>
        <h3 class="left"><?= $row['compt1'];?></h3>
        <h3 class="right"><?= $row['compt2'];?></h3>
        <div id='pht'>
            <img src="<?= $row['pht']; ?>" alt="photoProfil"/>
        </div>
        <h3 class="left down"><?= $row['compt3'];?></h3>
        <h3 class="right down"><?= $row['compt4'];?></h3>
        <h3><?= $row['compt5'];?></h3>
    </div>
    <div>
        <a href="portfolio.php"><input type="button" name="Portfolio" value="Portfolio"></a>
        <a href="/img/CVTaisJ.pdf" download="Pacman_Kiwi"><input type="button" name="CV" value="Télécharger mon CV"></a>
    </div>
</body>
</html>