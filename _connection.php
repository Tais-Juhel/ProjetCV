<?php

try{
    $dbh = new PDO("pgsql:dbname=postgres;host=127.0.0.1", "postgres", "ttaann66");
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo 'Connexion échouée : '.$e->getMessage();
}

?>
