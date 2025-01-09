<?php
// Configuration de la connexion à la base de données
$dsn = 'mysql:host=127.0.0.1;dbname=gestion_contacts'; // Hôte local et nom de la base de données
$user = 'root'; // Nom d'utilisateur MySQL (root dans ce cas)
$password = ''; // Mot de passe (vide si vous n'en avez pas configuré)

try {
    // Création de la connexion PDO
    $pdo = new PDO($dsn, $user, $password);
    
    // Définition de l'attribut pour afficher les erreurs
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Si tout fonctionne, vous pouvez afficher un message (optionnel)
    echo "Connexion réussie à la base de données gestion_contacts!";
} catch (PDOException $e) {
    // Si une erreur se produit, on l'affiche
    die('Erreur : ' . $e->getMessage());
}
?>
