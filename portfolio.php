<?php

require_once "_connection.php";

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/portfolio.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <nav id="menu">
        <ul>
            <a id="logoNav" href="#"><img src="img/monLogo.png" alt="monLogo"/></a>
            <li><a href="#comp">Compétences</a></li>
            <li><a href="#proj">Projets</a></li>
            <li><a href="#dip">Dîplomes</a></li>
            <li><a href="#exp">Expérience</a></li>
            <li><a href="#loi">Loisirs</a></li>
            <a id="contactNav" href="/formulaire.php">Contact</a>
        </ul>
    </nav>

    <section id="profil">
        <div>
            <img src="img/photoProfil2.jpg" alt="photoProfil2"/>

            <table>
                <tbody>
                    <tr>
                        <th>Nom</th>
                        <td>Taïs Juhel</td>
                        <th>Ville</th>
                        <td>Nantes</td>
                    </tr>
                    <tr>
                        <th>Age</th>
                        <td><?php

                            $date = new DateTime();
                            $naiss = new DateTime('2000-03-19');
                            $interval = $date->diff($naiss);
                            echo $interval->format('%Y ans');

                        ?></td>
                        <th>Activité</th>
                        <td>Etudiant en informatique</td>
                    </tr>
                </tbody>
            </table>
    </section>

    <section>
        <h2 id="comp">COMPETENCES</h2>

        <nav id="compt">
            <?php
                $stmt = $dbh->query('SELECT * FROM web.competence');
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)):
            ?>
                <img src="<?= $row['compt']; ?>" alt="<?= $row['alt'] ?>">
            <?php endwhile; ?>
        </nav>
    </section>

    <section>
        <h2 id="proj">PROJETS</h2>

        <div id="projet">
            <a href="#">
            <h3>VOIR LES PROJETS</h3>
            </a>
        </div>
    </section>

    <section>
        <h2 id="dip">DÎPLOMES</h2>

        <ul>
            <?php
            $stmt = $dbh->query('SELECT * FROM web.diplome');
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)):
            ?>
                <li><?= $row['dipl'] ?></li>
            <?php endwhile; ?>
        </ul>
    </section>

    <section>
        <h2 id="exp">EXPERIENCE</h2>

        
        <?php
        $stmt = $dbh->query('SELECT *
                            FROM web.experience
                            INNER JOIN web.titreexp ON web.experience.id_e = web.titreexp.id');
        $id = 0;
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)):
            if($id != $row['id']):
        ?>
                </ul>
                <h3><?= $row['titre'];?></h3>
                <ul>
            <?php 
                $id=$row['id'];
            endif;
            ?>
            <li><?= $row['sstitre'] ?>
            <?php if($row['dscrp']!=NULL): ?>
                <ul>
                    <li><?= $row['dscrp']; ?></li>
                </ul>
            <?php endif; ?>
            </li>
        <?php endwhile; ?>
    </section>

    <section>
        <h2 id="loi">LOISIRS</h2>

        <ul id="loisirs">
            <?php
            $stmt = $dbh->query('SELECT * FROM web.loisir');
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)):
            ?>
            <li>
                <img src="<?= $row['img'] ?>" alt="<?= $row['nom'] ?>">
                <p><?= $row['nom'] ?></p>
            </li>
            <?php endwhile; ?>
        </ul>
    </section>
    </div>

    <footer>
        <img src="img/monLogo.png" alt="logo">
        <p>juhel.tais@ynov.com</p>
        <a href="/formulaire.php">Me contacter</a>
    </footer>
</body>
</html>