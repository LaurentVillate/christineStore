<?php
// Initialisation des variables de connexion à la bdd
// dsn = Data Source Name
$dsn = 'mysql:host=localhost;dbname=christinestore_db;charset=utf8';
$login = 'root';
$password = '';


try{
    // Nouvelle instance de PDO
    $pdo = new PDO($dsn, $login, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Permet de délivrer un jeu de résultats sous forme d'objet.
}
catch(PDOException $e){
    echo 'Erreur !'. $e->getMessage();
}