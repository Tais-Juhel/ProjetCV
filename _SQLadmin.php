<?php

if(isset($_POST['ajouter']) && isset($_GET['add'])){
    if($_GET['add'] == 'competence'){
        $stmt = $dbh->prepare('INSERT INTO web.competence (compt, alt) VALUES (:compt, :alt)');
        $stmt->bindValue('compt', $_POST['new']);
        $stmt->bindValue('alt', $_POST['newA']);
        $stmt->execute();
        header('Location: /admin.php/?page=portfolio');
    }
    if($_GET['add'] == 'experience'){
        $stmt = $dbh->prepare('INSERT INTO web.titreexp (titre) VALUES (:titre)');
        $stmt->bindValue('titre', $_POST['new']);
        $stmt->execute();
        header('Location: /admin.php/?page=portfolio');
    }
    if($_GET['add'] == 'diplome'){
        $stmt = $dbh->prepare('INSERT INTO web.diplome (dipl) VALUES (:dipl)');
        $stmt->bindValue('dipl', $_POST['new']);
        $stmt->execute();
        header('Location: /admin.php/?page=portfolio');
    }
    if($_GET['add'] == 'loisirs'){
        $stmt = $dbh->prepare('INSERT INTO web.loisir (img, nom) VALUES (:img, :nom)');
        $stmt->bindValue('img', $_POST['new']);
        $stmt->bindValue('nom', $_POST['newN']);
        $stmt->execute();
        header('Location: /admin.php/?page=portfolio');
    }if($_GET['add'] == $row['titre']){
        $stmt = $dbh->prepare('INSERT INTO web.experience (sstitre, dscrp) VALUES (:sstitre, :dscrp)');
        $stmt->bindValue('sstitre', $_POST['new']);
        $stmt->bindValue('dscrp', $_POST['newD']);
        $stmt->execute();
        header('Location: /admin.php/?page=portfolio');
    }
}

if(isset($_GET['sup'])){
    $stmt = $dbh->prepare('DELETE FROM web.loisir
        WHERE id = :id');
    $stmt->bindValue('id', $_GET['sup']);
    $stmt->execute();
}

if(isset($_POST['modifier']) && isset($_GET['update'])){
    $upd = $_GET['update'];
    switch($upd){
        case "compt1":
            $stmt = $dbh->prepare('UPDATE web.profil
            SET compt1 = :compt');
            $stmt->bindValue('compt', $_POST['valeur']);
            $stmt->execute();
        break;
        case 'compt2':
            $stmt = $dbh->prepare('UPDATE web.profil
            SET compt2 = :compt');
            $stmt->bindValue('compt', $_POST['valeur']);
            $stmt->execute();
        break;
        case 'comp3':
            $stmt = $dbh->prepare('UPDATE web.profil
            SET compt3 = :compt');
            $stmt->bindValue('compt', $_POST['valeur']);
            $stmt->execute();
        break;
        case 'comp4':
            $stmt = $dbh->prepare('UPDATE web.profil
            SET compt4 = :compt');
            $stmt->bindValue('compt', $_POST['valeur']);
            $stmt->execute();
        break;
        case 'comp5':
            $stmt = $dbh->prepare('UPDATE web.profil
            SET compt5 = :compt');
            $stmt->bindValue('compt', $_POST['valeur']);
            $stmt->execute();
        break;
    }
    header('Location: /admin.php');
}

?>