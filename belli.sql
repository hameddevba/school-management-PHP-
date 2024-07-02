-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 11 mars 2023 à 10:41
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `belli`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `passwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `nom`, `passwd`) VALUES
(1, 'hamed', '739b7af086e8c8873d6c8c7378f224c8');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `nom` varchar(200) NOT NULL,
  `matricule` varchar(255) NOT NULL,
  `classe` varchar(150) NOT NULL,
  `rim` int(11) NOT NULL,
  `sc` int(11) NOT NULL,
  `maths` int(11) NOT NULL,
  `fr` int(11) NOT NULL,
  `ang` int(11) NOT NULL,
  `ar` int(11) NOT NULL,
  `hg` int(11) NOT NULL,
  `ic` int(11) NOT NULL,
  `ir` int(11) NOT NULL,
  `eps` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`nom`, `matricule`, `classe`, `rim`, `sc`, `maths`, `fr`, `ang`, `ar`, `hg`, `ic`, `ir`, `eps`) VALUES
('Ba', '0', '1f1', 12, 10, 10, 10, 10, 10, 10, 10, 10, 10),
('Ahmed gaye', 'gh1234', '2AF', 55, 8, 7, 9, 6, 5, 6, 8, 9, 10),
('sidi ahmed', 'gh1235', '3AF', 54, 7, 7, 10, 5, 8, 5, 5, 6, 8),
('layla', 'gh1236', '2AF', 56, 2, 3, 5, 3, 5, 6, 4, 2, 4),
('babacar diop', 'gh1237', '3AF', 57, 7, 5, 4, 8, 6, 6, 3, 3, 10),
('moctar', 'gh1238', '2AF', 0, 5, 4, 7, 6, 8, 7, 7, 9, 10);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`matricule`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
