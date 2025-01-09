-- Création de la base de données
CREATE DATABASE IF NOT EXISTS gestion_contacts;

-- Utilisation de la base de données
USE gestion_contacts;

-- Création de la table "contacts"
CREATE TABLE IF NOT EXISTS contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,        -- Identifiant unique
    nom VARCHAR(100) NOT NULL,                -- Nom du contact
    email VARCHAR(100) NOT NULL,              -- Email du contact
    telephone VARCHAR(15),                    -- Numéro de téléphone (optionnel)
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP -- Date de création
);

-- Données d'exemple (optionnel)
INSERT INTO contacts (nom, email, telephone) VALUES
('Jean Dupont', 'jean.dupont@example.com', '0601020304'),
('Marie Curie', 'marie.curie@example.com', '0612345678'),
('Albert Einstein', 'albert.einstein@example.com', '0698765432');
