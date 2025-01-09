<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];

    $stmt = $pdo->prepare("INSERT INTO contacts (nom, email, telephone) VALUES (?, ?, ?)");
    $stmt->execute([$nom, $email, $telephone]);

    header('Location: index.php');
    exit;
}
?>

<form action="ajouter.php" method="POST">
    <input type="text" name="nom" placeholder="Nom" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="telephone" placeholder="Téléphone">
    <button type="submit">Ajouter</button>
</form>
