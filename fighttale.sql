-- phpMyAdmin SQL Dump
-- version 4.9.6
-- https://www.phpmyadmin.net/
--
-- Hôte : fq0hs.myd.infomaniak.com
-- Généré le :  ven. 09 fév. 2024 à 15:40
-- Version du serveur :  10.6.15-MariaDB-1:10.6.15+maria~deb11-log
-- Version de PHP :  7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `fq0hs_fighttale`
--

-- --------------------------------------------------------

--
-- Structure de la table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `nom` varchar(250) DEFAULT NULL,
  `pvRestoration` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `items`
--

INSERT INTO `items` (`id`, `nom`, `pvRestoration`) VALUES
(1, 'Tarte au caramel', 2147483647),
(2, 'Pizza au fromage', 10),
(3, 'Spaghetti de papyrus', 20),
(4, 'Patate empoisonnée', -10),
(5, 'La reine des patates', 150),
(6, 'Le paname', 50),
(7, 'Tasse de thé du gentleman', 30),
(8, 'La légendaire blanquette d\'Alibert', 200);

-- --------------------------------------------------------

--
-- Structure de la table `personnages`
--

CREATE TABLE `personnages` (
  `id` int(11) NOT NULL,
  `nom` varchar(250) DEFAULT NULL,
  `atk` int(11) DEFAULT NULL,
  `pv` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `personnages`
--

INSERT INTO `personnages` (`id`, `nom`, `atk`, `pv`) VALUES
(1, 'Frisk', 25, 150),
(2, 'Papyrus', 10, 250),
(3, 'Chara', 50, 250),
(4, 'Asgore', 20, 200),
(8, 'Sans', 30, 400);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `personnages`
--
ALTER TABLE `personnages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `personnages`
--
ALTER TABLE `personnages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
