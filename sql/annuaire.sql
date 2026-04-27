CREATE DATABASE  Annuaire;
USE Annuaire;

CREATE TABLE Categorie (
    id INT AUTO_INCREMENT PRIMARY KEY,
    libelle VARCHAR(100) NOT NULL
);

CREATE TABLE Utilisateur (
    id INT AUTO_INCREMENT PRIMARY KEY,
    mail VARCHAR(150) NOT NULL UNIQUE,
    mdp VARCHAR(255) NOT NULL,
    params JSON
);

CREATE TABLE Sites (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(150) NOT NULL,
    url VARCHAR(255) NOT NULL,
    description TEXT,
    categorie_id INT,
    utilisateur_id INT,
    FOREIGN KEY (categorie_id) REFERENCES Categorie(id),
    FOREIGN KEY (utilisateur_id) REFERENCES Utilisateur(id)
);

INSERT INTO Categorie (libelle) VALUES 
('Informatique'),
('Sport'),
('Cuisine'),
('Musique');

INSERT INTO Utilisateur (mail, mdp, params) VALUES 
('alice@mail.com', SHA2('password123', 256), NULL),
('bob@mail.com', SHA2('azerty456', 256), NULL);

INSERT INTO Sites (titre, url, description, categorie_id, utilisateur_id) VALUES
('Google', 'https://www.google.fr', 'Moteur de recherche', 1, 1),
('L\'Equipe', 'https://www.lequipe.fr', 'Site de sport', 2, 1),
('Marmiton', 'https://www.marmiton.org', 'Site de recettes', 3, 2),
('Deezer', 'https://www.deezer.com', 'Musique en streaming', 4, 2);
