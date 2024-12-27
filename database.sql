CREATE TABLE users (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    prenom VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE
);

CREATE TABLE roles (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    role_name VARCHAR(100) NOT NULL UNIQUE
);

CREATE TABLE comptes (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    user_id INT(11) NOT NULL,
    username VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role_id INT(11) NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (role_id) REFERENCES roles(id) ON DELETE CASCADE
);
INSERT INTO roles (role_name) VALUES
('Admin'),
('Etudiant'),
('Professeur');

INSERT INTO users (nom, prenom, email) VALUES
('karim', 'yasini', 'jkarimyassin@gmail.com'),
('said', 'Sfyani', 'saidSfyani@gmail.com'),
('mohammed', 'jibali', 'mohammedjibali@houtmail.com');

INSERT INTO comptes (user_id, username, password, role_id) VALUES
(1, 'karim', 'password1', 1),
(2, 'said', 'password2', 2),
(3, 'mohammed', 'password3', 3);   

