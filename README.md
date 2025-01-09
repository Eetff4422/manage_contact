# Système de Gestion de Contacts

Une application web simple permettant de gérer une liste de contacts, développée avec PHP et MySQL.

## Fonctionnalités

* Affichage de la liste des contacts
* Ajout d'un nouveau contact
* Modification des informations d'un contact existant
* Suppression d'un contact
* Stockage des données dans une base MySQL

## Prérequis

* PHP 7.0 ou supérieur
* MySQL 5.7 ou supérieur
* Serveur web (Apache, Nginx, etc.)
* PDO PHP Extension

## Installation

1. Clonez le répertoire :
```bash
git clone https://github.com/votre-username/gestion-contacts.git
cd gestion-contacts
```

2. Configurez votre base de données MySQL en exécutant le script SQL :
```bash
mysql -u root -p < gestion_contacts.sql
```

3. Configurez la connexion à la base de données :
   * Ouvrez le fichier `config.php`
   * Modifiez les paramètres de connexion selon votre environnement :
     ```php
     $dsn = 'mysql:host=127.0.0.1;dbname=gestion_contacts';
     $user = 'votre_utilisateur';
     $password = 'votre_mot_de_passe';
     ```

4. Placez les fichiers dans votre répertoire web

## Structure du Projet

```
gestion-contacts/
├── config.php          # Configuration de la base de données
├── index.php          # Page principale listant les contacts
├── ajouter.php        # Formulaire d'ajout de contact
├── modifier.php       # Formulaire de modification de contact
├── supprimer.php      # Script de suppression de contact
├── gestion_contacts.sql # Script de création de la base de données
└── README.md          # Ce fichier
```

## Sécurité

* Les données sont échappées avec htmlspecialchars pour prévenir les attaques XSS
* Utilisation de requêtes préparées PDO pour prévenir les injections SQL
* Validation basique des entrées utilisateur

## Points d'amélioration possibles

* Ajout d'une authentification utilisateur
* Validation plus poussée des données
* Interface utilisateur plus élaborée avec CSS
* Pagination de la liste des contacts
* Recherche et filtrage des contacts
* Ajout de photos de profil
* Export des contacts

## Contribution

Les contributions sont les bienvenues ! N'hésitez pas à :
1. Fork le projet
2. Créer une branche pour votre fonctionnalité
3. Commit vos changements
4. Push vers la branche
5. Ouvrir une Pull Request
