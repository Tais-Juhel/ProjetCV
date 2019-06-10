<?php

require_once "_connection.php";
require_once "_SQLadmin.php";

?>

    <section>
        <h2>COMPETENCES - <a class="add" href="?page=portfolio&add=competence">Ajouter +</a></h2>

        <nav id="compt">
            <?php
                $stmt = $dbh->query('SELECT * FROM web.competence');
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)):
            ?>
                <img src="../<?= $row['compt']; ?>" alt="<?= $row['alt'] ?>">
            <?php 
            endwhile;
            if(isset($_GET['add']) && $_GET['add'] == 'competence'):
            ?>
            <form method="POST">
                <input type="text" name="new" placeholder="img">
                <input type="text" name="newA" placeholder="alt">
                <input type="submit" name="ajouter" value="Ajouter">
            </form>
            <?php endif; ?>
        </nav>
    </section>

    <section>
        <h2>DÎPLOMES - <a class="add" href="?page=portfolio&add=diplome">Ajouter +</a></h2>

        <ul>
            <?php
                $stmt = $dbh->query('SELECT * FROM web.diplome');
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)):
            ?>
                <li><?= $row['dipl'] ?></li>
            <?php 
            endwhile;
            if(isset($_GET['add']) && $_GET['add'] == 'diplome'):
            ?>
            <form method="POST">
                <input type="text" name="new">
                <input type="submit" name="ajouter" value="Ajouter">
            </form>
            <?php endif; ?>
        </ul>
    </section>

    <section>
        <h2>EXPERIENCE - <a class="add" href="?page=portfolio&add=experience">Ajouter +</a></h2>

        
        <?php
        $stmt = $dbh->query('SELECT *
                            FROM web.experience
                            INNER JOIN web.titreexp ON web.experience.id_e = web.titreexp.id');
        $id = 0;
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)):
            if($id != $row['id']):
        ?>
                </ul>
                <h3><?= $row['titre'];?> <a class="add" href="?page=portfolio&add=<?=$row['titre'];?>">Ajouter +</a></h3>
                <ul>
        <?php
        if(isset($_GET['add']) && $_GET['add'] == $row['titre']):
        ?>
        <form method="POST">
                <input type="text" name="new" placeholder="sstitre">
                <input type="text" name="newD" placeholder="dscrp">
                <input type="submit" name="ajouter" value="Ajouter">
        </form>
        <?php endif; ?>
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
        <?php
        endwhile;
        if(isset($_GET['add']) && $_GET['add'] == 'experience'):
        ?>
        <form method="POST">
                <input type="text" name="new">
                <input type="submit" name="ajouter" value="Ajouter">
        </form>
        <?php endif; ?>
    </section>

    <section>
        <h2>LOISIRS - <a class="add" href="?page=portfolio&add=loisirs">Ajouter +</a></h2>

        <ul id="loisirs">
            <?php
            $stmt = $dbh->query('SELECT * FROM web.loisir');
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)):
            ?>
            <li>
                <img src="<?= $row['img'] ?>" alt="<?= $row['nom'] ?>">
                <p><?= $row['nom'] ?></p>
                <a class="sup" href="?page=portfolio&sup=<?=$row['id']?>" onclick="return window.confirm('Confimez suppression ?')"> - Supprimer -</a>
            </li>
            <?php 
            endwhile;
            if(isset($_GET['add']) && $_GET['add'] == 'loisirs'):
            ?>
            <form method="POST">
                    <input type="text" name="new" placeholder="img">
                    <input type="text" name="newN" placeholder="nom">
                    <input type="submit" name="ajouter" value="Ajouter">
            </form>
            <?php endif;?>
        </ul>
    </section>
    </div>