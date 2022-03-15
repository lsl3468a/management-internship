<?php

const HOST = "localhost";
const DB_NAME = "gestion_stage";
const DB_USER = "root";
const DB_PASS = "root";
const DB_CHARSET = "utf8";
const DB_HOST = 'mysql:host='.HOST.';dbname='.DB_NAME.';charset='.DB_CHARSET;

//echo DB_HOST;
    try
    {
        $bdd = new PDO(DB_HOST, DB_USER, DB_PASS);
    }
    catch(Exception $e)
    {
       die('Erreur : '.$e->getMessage());

    }
?>