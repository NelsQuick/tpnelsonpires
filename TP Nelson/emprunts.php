<?php

// Chargement des fichiers nécessaires
require_once('./classes/Book.php');

?>

<?php include 'templates/header.html.php'; ?>

<main>
    <h2>Liste des emprunts</h2>
    <table>
        <thead>
            <tr>
                <th>Nom du livre</th>
                <th>Nom du client</th>
                <th>Début d'emprunt</th>
                <th>Fin d'emprunt</th>
            </tr>
        </thead>
        <tbody>
            <?php include 'templates/rentals.html.php'; ?>
        </tbody>
    </table>
</main>

<?php include 'templates/footer.html.php'; ?>
