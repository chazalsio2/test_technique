-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 11 juin 2021 à 14:54
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `test-technique`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `date_inscription` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `pseudo`, `password`, `email`, `ip`, `date_inscription`) VALUES
(2, 'mathias', 'chanel976', 'mathias@gmail.com', '', '0000-00-00 00:00:00'),
(5, 'chazal', '$2y$12$CBuMSnyHznZ7b2WqyI4f1OOaSPyhNAWE2fIX9Np.PMhufjwlaCPoW', 'chazal.hassani@gmail.com', '::1', '2021-06-10 04:13:25'),
(6, 'emanuel', 'chanel976', 'emanuel@gmail.com', '', '2021-06-10 16:04:10'),
(7, 'bil', 'chanel976', 'bil@gmail.com', '', '0000-00-00 00:00:00'),
(9, 'gaston', '$2y$12$DColyHeRAll8NKcQF/9NT.UB.SPojFw8.0BbVSPChf8tdlWqAMSGC', 'kazailchazal6@gmail.com', '::1', '2021-06-10 23:36:10'),
(10, 'gerom', '$2y$12$UafFqgkoFdAxNN.Xr.Pzw.xd4xGya1LCYRk0nWDQnIiYx.dPpkm0y', 'gerom@gmail.com', '::1', '2021-06-10 23:37:22'),
(2022, 'leo', '$2y$12$1wt2S9SF2TWEFeTLw0mlJeT7Fmo/0dHazXEvabB0bPOpFDIa7XhCK', 'leo@gmail.com', '::1', '2021-06-11 16:35:58');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2023;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
