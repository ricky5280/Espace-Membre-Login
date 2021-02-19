-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 19 fév. 2021 à 19:58
-- Version du serveur :  5.7.24
-- Version de PHP : 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `espace_membres`
--

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pseudo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` enum('0','1') COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `name`, `pseudo`, `email`, `password`, `active`, `created_at`) VALUES
(14, 'marlon', 'marlon', 'marlon@free.fr', '$2y$10$GD6ZCWSUQY9FyUmU/6R/fOi9d1eZVhZ0lTCWaUnmhRSb4G7U.eGna', '1', '2021-01-26 09:05:39'),
(16, 'martin', 'lutero', 'bobobo@bob.com', '$2y$10$HRhPvvmAtg3OWyZJV2vPx.3Ld8vEyROhfXsE9zsnrfOgludo8vQIe', '0', '2021-01-26 11:49:34'),
(23, 'jordan', 'jordan', 'jor@dan.fr', '$2y$10$DaW/opuABxVxtwtowX3im.PVXprwCd6yKDOSXEigHhjOO.GcLDwlK', '1', '2021-01-29 10:16:10'),
(25, 'doncic', 'doncic', 'don@cic.us', '$2y$10$r4kk0Dehzlm8JXNP3P6gl.fUgqu3D7s9j3RQvaxWTLqACfs2U6NyO', '0', '2021-01-30 15:44:45');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
