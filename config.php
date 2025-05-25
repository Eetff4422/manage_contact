<?php
// Configuration de la connexion à la base de données
$dsn = 'mysql:host=127.0.0.1;dbname=gestion_contacts'; // Hôte local et nom de la base de données
$user = 'root'; // Nom d'utilisateur MySQL
$password = ''; // Mot de passe

try {
    // Création de la connexion PDO
    $pdo = new PDO($dsn, $user, $password);
    
    // Définition de l'attribut pour afficher les erreurs
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Connexion réussie à la base de données gestion_contacts!";
} catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}
?>
