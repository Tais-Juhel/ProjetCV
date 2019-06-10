<?php

require_once '_connection.php';

?>

<div>
    <?php
        $stmt = $dbh->query('SELECT * FROM web.profil');
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    ?>
    <h3>
        <?= $row['compt1'];?>
        <a class="upd" href="?update=compt1">- Modifier -</a>
    </h3>
    <h3>
        <?= $row['compt2'];?>
        <a class="upd" href="?update=compt2">- Modifier -</a>
    </h3>
    <h3>
        <?= $row['compt3'];?>
        <a class="upd" href="?update=compt3">- Modifier -</a>
    </h3>
    <h3>
        <?= $row['compt4'];?>
        <a class="upd" href="?update=compt4">- Modifier -</a>
    </h3>
    <h3>
        <?= $row['compt5'];?>
        <a class="upd" href="?update=compt5">- Modifier -</a>
    </h3>
</div>

<?php
if(isset($_GET['update'])):
    $update = $_GET['update'];
?>
    <label for="valeur">Modifier <?= $row[$update]; ?> : </label>
    <input type="text" name="valeur">
    <input type="submit" name="modifier" value="Modifier">
<?php endif; ?>