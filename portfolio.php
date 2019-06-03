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
            <li><a href="#">Compétences</a></li>
            <li><a href="#">Projets</a></li>
            <li><a href="#">Dîplomes</a></li>
            <li><a href="#">Expérience</a></li>
            <li><a href="#">Loisirs</a></li>
            <a id="contactNav" href="#">Contact</a>
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
        <h2>COMPETENCES</h2>

        <nav id="compt">
            <img src="img/html5.png" alt="html">
            <img src="img/css3.png" alt="css">
            <img src="img/javascript.png" alt="js">
            <img src="img/jquery.png" alt="jquery">
            <img src="img/php.png" alt="php">
            <img src="img/python.png" alt="python">
            <img src="img/postgre.png" alt="pgsql">
            <img src="img/mysql.png" alt="mysql">
            <img src="img/java.png" alt="java">
            <img src="img/xd.png" alt="xd">
            <img src="img/illustrator.png" alt="illustrator">
        </nav>
    </section>

    <section>
        <h2>PROJETS</h2>

        <div id="projet">
            <a href="#">
            <h3>VOIR LES PROJETS</h3>
            </a>
        </div>
    </section>

    <section>
        <h2>DÎPLOMES</h2>

        <ul>
            <li>Actuellement : Etudiant 1ere année Bachelor Informatique (Ynov - Nantes)</li>
            <li>Baccalauréat SS-I (Science de l'ingénieur)</li>
            <li>Formation générale BAFA (Ufcv - Vannes)</li>
            <li>Initiateur Fédération Française de Basketball</li>
            <li>Animateur Fédération Française de Basketball</li>
        </ul>
    </section>

    <section>
        <h2>EXPERIENCE</h2>

        <h3>Entraîneur et coach de basket :</h3>
        <ul>
            <li>2019/2016 : Equipe moins de 11 ans - Similienne - Nantes</li>
        </ul>

        <h3>Animateur Basket :</h3>
            <ul>
                <li>26 au 31 Août 2018 et 21 au 25 Août 2017 :</li>
                <ul>
                    <li>Encadrement stage de basket (jeunes de 11 à 17 ans)</li>
                </ul>
                <li>19 Juin 2017 : Coupe du monde 3x3 "The Bridge" (tous publics)</li>
            </ul>

        <h3>Arbitre :</h3>
            <ul>
                <li>2019/2012 : Arbitre de champs et de table (toutes categories)</li>
                <li>1 Mai 2016 : Fête nationale du mini-basket - Nantes</li>
            <ul>
    </section>

    <section>
        <h2>LOISIRS</h2>

        <ul>
            <li>
                Basketball depuis (2012) - Similienne de Nantes :
                <ul>
                    <li>Actuellement niveau régional</li>
                </ul>
            </li>
            <li>Dessin</li>
            <li>Musique (guitare et piano)</li>
            <li>Jeux vidéo</li>
            <li>2011 : Théâtre (3 représentations)</li>
        </ul>

        <nav>
            <img src="" alt="">
            <img src="" alt="">
            <img src="" alt="">
            <img src="" alt="">
        </nav>
    </section>
    </div>
</body>
</html>