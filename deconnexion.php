<?php
    session_start();
    session_destroy();
    setcookie('num_etudiant','');
    setcookie('id_contact','');
    header('Location:index.php');
    die();
?>