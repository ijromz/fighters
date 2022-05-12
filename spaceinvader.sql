-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mer. 11 mai 2022 à 11:53
-- Version du serveur :  5.7.34
-- Version de PHP : 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `spaceinvader`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `mdp`, `email`) VALUES
(2, 'ThomasG', '$2y$10$vuQfWS7uK6/jjxvq.DjsUOToJUpYugipW2aDmXoT8kHkfYGyMvrC.', 'thomas.gravelines@gmail.com'),
(3, 'Patrick', '$2y$10$fjGNguzKbOcJOZHOB0LKaO8cdeRexaD48Fv0Xfj/xjV9j1UqIF6BK', 'thomas@gmail.com'),
(4, 'Cristiano', '$2y$10$O4LyfUrGCAdeHap7vGGKZusYFWDdSfbblFWaSifK1YWFVaMhqa/.G', 'thomas.charbel@gmail.com'),
(5, 'Saloute', '$2y$10$zNU2GAIhDbQn6Vp3cIpG5.5XakqHhjripKznJzfaiq9aOL7EMj32y', 'biloute@gmail.com'),
(6, 'yo', '$2y$10$ez/1GaAJdbhjrO0vzxHkA.lMX.kVPoezxXGzRrHd8ROOyMzxJTu1u', 'salut@gmail.com'),
(7, 'Charbel', '$2y$10$BcmvhmBf79MFfHzFHrxH2e9LFBtg2k2i.O/IfdSRIrw7NmHkV9/MS', 'charbel@gmail.com');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
