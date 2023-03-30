<?php

// Formulaires d'exemple
?>

<form action="emprunt.php" method="post">
    <label for="nom">Nom:</label>
    <input type="text" id="nom" name="nom"><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br><br>

    <label for="date_emprunt">Date d'emprunt:</label>
    <input type="date" id="date_emprunt" name="date_emprunt"><br><br>

    <label for="date_retour">Date de retour:</label>
    <input type="date" id="date_retour" name="date_retour"><br><br>

    <input type="submit" value="Emprunter">
</form>

<?php if (isset($_GET['id'])): ?>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
        <label for="title">Nom du livre</label>
        <input type="text" name="title" value="<?= $book['title'] ?>">
        <label for="author">Auteur</label>
        <input type="text" name="author" value="<?= $book['author'] ?>">
        <label for="stock">Stock actuel</label>
        <input type="number" name="number" value="<?= $book['stock'] ?>">
        <input type="submit" value="Modifier">
    </form>
<?php else: ?>
    <form action="create.php" method="post">
        <input type="number" name="isbn" placeholder="ISBN">
        <input type="text" name="title" placeholder="Titre">
        <input type="text" name="author" placeholder="Auteur">
        <input type="number" name="stock" placeholder="Stock">
        <input type="submit" value="Ajouter">
    </form>
<?php endif; ?>
