<?php

if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Bye bye';
    exit;
} else {
    echo "<p>Bonjour, {$_SERVER['PHP_AUTH_USER']}.</p>";
    echo "<p>Votre mot de passe est {$_SERVER['PHP_AUTH_PW']}.</p>";
}

if($_SERVER['PHP_AUTH_USER'] != 'admin' || $_SERVER['PHP_AUTH_PW'] != '003091'){
    header('Location: /admin.php');
    die;
}

?>