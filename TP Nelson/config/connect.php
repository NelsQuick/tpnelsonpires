<?php

// Connexion à la BDD

function connect()
{
    $host = 'mysql:dbname=biblioApp;host=localhost';
    $user = 'root';
    $password = '';
    try {
        $pdo = new PDO($host, $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
        echo 'Connexion réussie';
    } catch (PDOException $e) {
        echo 'Erreur de connexion : <br>' . $e->getMessage() . '<br><br>';
    }
}