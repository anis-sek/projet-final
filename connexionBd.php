<?php
$bdd_global = 'celinedion';

function connexionBD($dbname)
{
    // paramètres de la base de donnée
    $sgbdname = 'mysql';
    $host = 'localhost';
    $charset = 'utf8';
    // dsn : data source name
    $dsn =
        $sgbdname .
        ':host=' . $host .
        ';dbname=' . $dbname .
        ';charset=' . $charset;

    // utilisateur connecté à la base de donnée
    $username = 'root';
    $password = '';

    // pour avoir des erreurs SQL plus claires 
    $erreur = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );

    try {
        // connexion à la BD : new PDO
        $bdd = new PDO($dsn, $username, $password, $erreur);
        // echo '<p>Connexion réussie !!!</p>';
        return $bdd;
    } catch (PDOException $e) {
        // echo 'Connexion échouée : ' . $e->getMessage();
        return NULL;
        // die ('Connexion échouée : ' . $e->getMessage() );
        // pas de die avec PDO
    }
}

function connexion()
{
    global $bdd_global;
    $bdd = connexionBD($bdd_global);
    return $bdd;
}
