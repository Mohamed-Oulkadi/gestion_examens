-- Créer la base de données
CREATE DATABASE IF NOT EXISTS gestion_examens;

-- Utiliser la base de données
USE gestion_examens;

-- Table 'users' (informations des utilisateurs)
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    prenom VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE
);

-- Table 'roles' (rôles des utilisateurs)
CREATE TABLE IF NOT EXISTS roles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    role_name VARCHAR(100) NOT NULL UNIQUE
);

-- Table 'comptes' (détails de connexion des utilisateurs)
CREATE TABLE IF NOT EXISTS comptes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    username VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role_id INT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (role_id) REFERENCES roles(id) ON DELETE CASCADE
);

-- Table 'filiere' (gestion des filières)
CREATE TABLE IF NOT EXISTS filiere (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table 'module' (gestion des modules)
CREATE TABLE IF NOT EXISTS module (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table 'filiere_module' (relation entre filières et modules)
CREATE TABLE IF NOT EXISTS filiere_module (
    id INT AUTO_INCREMENT PRIMARY KEY,
    filiere_id INT NOT NULL,
    module_id INT NOT NULL,
    FOREIGN KEY (filiere_id) REFERENCES filiere(id) ON DELETE CASCADE,
    FOREIGN KEY (module_id) REFERENCES module(id) ON DELETE CASCADE
);

-- Table 'etudiant_filiere' (relation entre étudiants et filières)
CREATE TABLE IF NOT EXISTS etudiant_filiere (
    id INT AUTO_INCREMENT PRIMARY KEY,
    etudiant_id INT NOT NULL, -- Référence à la table 'comptes' (rôle étudiant)
    filiere_id INT NOT NULL, -- Référence à la filière assignée
    FOREIGN KEY (etudiant_id) REFERENCES comptes(id) ON DELETE CASCADE,
    FOREIGN KEY (filiere_id) REFERENCES filiere(id) ON DELETE CASCADE
);

-- Table 'professeur_module' (relation entre professeurs et modules)
CREATE TABLE IF NOT EXISTS professeur_module (
    id INT AUTO_INCREMENT PRIMARY KEY,
    professeur_id INT NOT NULL, -- Référence à la table 'comptes' (rôle professeur)
    module_id INT NOT NULL, -- Référence à la table 'module'
    FOREIGN KEY (professeur_id) REFERENCES comptes(id) ON DELETE CASCADE,
    FOREIGN KEY (module_id) REFERENCES module(id) ON DELETE CASCADE
);

-- Table 'examens' (gestion des examens)
CREATE TABLE IF NOT EXISTS examens (
    id INT AUTO_INCREMENT PRIMARY KEY,
    module_id INT NOT NULL,
    name VARCHAR(255) NOT NULL,
    exam_date DATE NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (module_id) REFERENCES module(id) ON DELETE CASCADE
);

-- Table 'resultats' (gestion des résultats des examens)
CREATE TABLE IF NOT EXISTS resultats (
    id INT AUTO_INCREMENT PRIMARY KEY,
    examen_id INT NOT NULL,
    student_id INT NOT NULL, -- Référence à la table 'comptes' (rôle étudiant)
    grade DECIMAL(5,2) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (examen_id) REFERENCES examens(id) ON DELETE CASCADE,
    FOREIGN KEY (student_id) REFERENCES comptes(id) ON DELETE CASCADE
);

-- Insérer des rôles dans la table 'roles'
INSERT INTO roles (role_name) VALUES
    ('Admin'),
    ('Professeur'),
    ('Etudiant');

-- Exemple de données pour 'users'
INSERT INTO users (nom, prenom, email) VALUES
    ('Karim', 'Yasini', 'jkarimyassin@gmail.com'),
    ('Said', 'Sfyani', 'saidSfyani@gmail.com'),
    ('Mohammed', 'Jibali', 'mohammedjibali@hotmail.com');

-- Exemple de données pour 'comptes'
INSERT INTO comptes (user_id, username, password, role_id) VALUES
    (1, 'karim', 'password1', 1), -- Admin
    (2, 'said', 'password2', 2), -- Professeur
    (3, 'mohammed', 'password3', 3); -- Étudiant

-- Exemple de données pour 'filiere'
INSERT INTO filiere (name, description) VALUES
    ('Informatique', 'Filière dédiée à l\'informatique et aux technologies.'),
    ('Gestion', 'Filière dédiée à la gestion et l\'administration.');

-- Exemple de données pour 'module'
INSERT INTO module (name, description) VALUES
    ('Programmation', 'Introduction à la programmation.'),
    ('Base de Données', 'Gestion et conception de bases de données.');

-- Relation filière et modules
INSERT INTO filiere_module (filiere_id, module_id) VALUES
    (1, 1), -- Informatique -> Programmation
    (1, 2), -- Informatique -> Base de Données
    (2, 2); -- Gestion -> Base de Données

-- Relation étudiant et filière
INSERT INTO etudiant_filiere (etudiant_id, filiere_id) VALUES
    (3, 1); -- Mohammed -> Informatique

-- Relation professeur et modules
INSERT INTO professeur_module (professeur_id, module_id) VALUES
    (2, 1), -- Said (Professeur) -> Programmation
    (2, 2); -- Said (Professeur) -> Base de Données

-- Exemple d'examens
INSERT INTO examens (module_id, name, exam_date) VALUES
    (1, 'Exam Programmation', '2024-01-15'),
    (2, 'Exam Base de Données', '2024-02-20');

-- Exemple de résultats
INSERT INTO resultats (examen_id, student_id, grade) VALUES
    (1, 3, 14.5), -- Mohammed -> Exam Programmation
    (2, 3, 16.0); -- Mohammed -> Exam Base de Données