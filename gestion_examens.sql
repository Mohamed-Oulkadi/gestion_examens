-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 07 jan. 2025 à 16:54
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_examens`
--

-- --------------------------------------------------------

--
-- Structure de la table `comptes`
--

CREATE TABLE `comptes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `comptes`
--

INSERT INTO `comptes` (`id`, `user_id`, `username`, `password`, `role_id`) VALUES
(14, 14, 'yassine98', '$2y$10$2lQWCl6EEjbIma57c6uPEuzAoWn8OYxh9m1pYvnePR1glM8Jcq8pu', 2),
(15, 15, 'ha123', '$2y$10$fkqhD8W8MytuCVHFbLnuO.8TzGvNluzR2Z86cFApyEerfWNj290A.', 3),
(16, 16, 'said123', '$2y$10$IpW/SVBPb3h5lkLaW1NN1ejKpgKM2lqFw5slB2zdr2FUfKljLa6v.', 1),
(17, 1, 'karim', '$2y$10$2lQWCl6EEjbIma57c6uPEuzAoWn8OYxh9m1pYvnePR1glM8Jcq8pu', 1),
(18, 2, 'said', '$2y$10$2lQWCl6EEjbIma57c6uPEuzAoWn8OYxh9m1pYvnePR1glM8Jcq8pu', 2),
(19, 3, 'mohammed', '$2y$10$2lQWCl6EEjbIma57c6uPEuzAoWn8OYxh9m1pYvnePR1glM8Jcq8pu', 3),
(20, 17, 'ali123', '$2y$10$NeZZeMzIVMfY1b9Khsy2WeQCH8D92.LrTaWSWY1HMdtvirkND16rK', 2),
(21, 18, 'ibra12', '$2y$10$YEsOZmvJQv/qbud1dtaZjeUyp6mg.A1MpSBa4DYq.etjb665lzNqm', 2),
(22, 19, 'admin', '$2y$10$1yR34CikPJgQneEjxJEyJOoyTsreCoKNOSlAOMArdIXGIp/sm8anK', 1);

-- --------------------------------------------------------

--
-- Structure de la table `etudiant_filiere`
--

CREATE TABLE `etudiant_filiere` (
  `id` int(11) NOT NULL,
  `etudiant_id` int(11) NOT NULL,
  `filiere_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etudiant_filiere`
--

INSERT INTO `etudiant_filiere` (`id`, `etudiant_id`, `filiere_id`) VALUES
(2, 14, 1),
(4, 18, 2),
(5, 20, 2);

-- --------------------------------------------------------

--
-- Structure de la table `examens`
--

CREATE TABLE `examens` (
  `id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `exam_date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `examens`
--

INSERT INTO `examens` (`id`, `module_id`, `name`, `exam_date`, `created_at`) VALUES
(1, 4, 'Exam Base de Données', '2025-01-23', '2025-01-06 22:00:25'),
(2, 3, 'Exam Programmation', '2025-01-24', '2025-01-06 22:00:25');

-- --------------------------------------------------------

--
-- Structure de la table `filiere`
--

CREATE TABLE `filiere` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `filiere`
--

INSERT INTO `filiere` (`id`, `name`, `description`, `created_at`) VALUES
(1, 'Informatique', 'Filière dédiée à l\'informatique et aux technologies.', '2025-01-06 13:21:27'),
(2, 'Gestion', 'Filière dédiée à la gestion et l\'administration.', '2025-01-06 13:21:27'),
(6, 'Génie Électrique et Énergétique', ' Conception, analyse et maintenance des systèmes électriques et énergétiques.', '2025-01-07 15:45:20'),
(7, 'Informatique et Technologies de l\'Information', 'Étude des bases de données, programmation, systèmes d’exploitation et réseaux informatiques.', '2025-01-07 15:45:54');

-- --------------------------------------------------------

--
-- Structure de la table `filiere_module`
--

CREATE TABLE `filiere_module` (
  `id` int(11) NOT NULL,
  `filiere_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `filiere_module`
--

INSERT INTO `filiere_module` (`id`, `filiere_id`, `module_id`) VALUES
(1, 1, 4),
(2, 1, 3),
(7, 1, 13);

-- --------------------------------------------------------

--
-- Structure de la table `module`
--

CREATE TABLE `module` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `professeur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `module`
--

INSERT INTO `module` (`id`, `name`, `description`, `created_at`, `professeur_id`) VALUES
(3, 'Programmation', 'Introduction à la programmation.', '2025-01-06 21:57:08', 3),
(4, 'Base de Données', 'Gestion et conception de bases de données.', '2025-01-06 21:57:08', 15),
(13, 'python', 'intro to py', '2025-01-07 13:33:27', 3);

-- --------------------------------------------------------

--
-- Structure de la table `resultats`
--

CREATE TABLE `resultats` (
  `id` int(11) NOT NULL,
  `examen_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `grade` decimal(5,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `resultats`
--

INSERT INTO `resultats` (`id`, `examen_id`, `student_id`, `grade`, `created_at`) VALUES
(1, 1, 14, '17.50', '2025-01-06 22:01:36'),
(2, 2, 14, '16.00', '2025-01-06 22:01:36');

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `role_name`) VALUES
(1, 'Admin'),
(2, 'Etudiant'),
(3, 'Professeur');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `email`) VALUES
(1, 'Karim', 'Yasini', 'jkarimyassin@gmail.com'),
(2, 'Said', 'Sfyani', 'saidSfyani@gmail.com'),
(3, 'Mohammed', 'Jibali', 'mohammedjibali@hotmail.com'),
(14, 'elkrik', 'yassine', 'yassineelkrik@gmail.com'),
(15, 'ham', 'hamid', 'hamid@gmail.com'),
(16, 'ben', 'said', 'said@gmail.com'),
(17, 'el', 'ali', 'ali@gmail.com'),
(18, 'el madani', 'ibrahim', 'ibrahim@gmail.com'),
(19, 'El krik', 'Yassine', 'Admin@gmail.com');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `comptes`
--
ALTER TABLE `comptes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Index pour la table `etudiant_filiere`
--
ALTER TABLE `etudiant_filiere`
  ADD PRIMARY KEY (`id`),
  ADD KEY `etudiant_id` (`etudiant_id`),
  ADD KEY `filiere_id` (`filiere_id`);

--
-- Index pour la table `examens`
--
ALTER TABLE `examens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `module_id` (`module_id`);

--
-- Index pour la table `filiere`
--
ALTER TABLE `filiere`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `filiere_module`
--
ALTER TABLE `filiere_module`
  ADD PRIMARY KEY (`id`),
  ADD KEY `filiere_id` (`filiere_id`),
  ADD KEY `module_id` (`module_id`);

--
-- Index pour la table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`id`),
  ADD KEY `professeur_id` (`professeur_id`);

--
-- Index pour la table `resultats`
--
ALTER TABLE `resultats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `examen_id` (`examen_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `role_name` (`role_name`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `comptes`
--
ALTER TABLE `comptes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `etudiant_filiere`
--
ALTER TABLE `etudiant_filiere`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `examens`
--
ALTER TABLE `examens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `filiere`
--
ALTER TABLE `filiere`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `filiere_module`
--
ALTER TABLE `filiere_module`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `module`
--
ALTER TABLE `module`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `resultats`
--
ALTER TABLE `resultats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comptes`
--
ALTER TABLE `comptes`
  ADD CONSTRAINT `comptes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comptes_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `etudiant_filiere`
--
ALTER TABLE `etudiant_filiere`
  ADD CONSTRAINT `etudiant_filiere_ibfk_1` FOREIGN KEY (`etudiant_id`) REFERENCES `comptes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `etudiant_filiere_ibfk_2` FOREIGN KEY (`filiere_id`) REFERENCES `filiere` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `examens`
--
ALTER TABLE `examens`
  ADD CONSTRAINT `examens_ibfk_1` FOREIGN KEY (`module_id`) REFERENCES `module` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `filiere_module`
--
ALTER TABLE `filiere_module`
  ADD CONSTRAINT `filiere_module_ibfk_1` FOREIGN KEY (`filiere_id`) REFERENCES `filiere` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `filiere_module_ibfk_2` FOREIGN KEY (`module_id`) REFERENCES `module` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `module`
--
ALTER TABLE `module`
  ADD CONSTRAINT `module_ibfk_1` FOREIGN KEY (`professeur_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `resultats`
--
ALTER TABLE `resultats`
  ADD CONSTRAINT `resultats_ibfk_1` FOREIGN KEY (`examen_id`) REFERENCES `examens` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `resultats_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `comptes` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
