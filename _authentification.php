<?php

if($_SERVER['PHP_AUTH_USER'] != 'admin' || $_SERVER['PHP_AUTH_PW'] != '003091'){
    header('Location: /admin.php');
    die;
}

?>