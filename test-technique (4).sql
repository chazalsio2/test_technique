-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 15 juin 2021 à 20:15
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
-- Structure de la table `ordinateur`
--

CREATE TABLE `ordinateur` (
  `id` int(11) NOT NULL,
  `ordinateur` varchar(100) NOT NULL,
  `id_relation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `ordinateur`
--

INSERT INTO `ordinateur` (`id`, `ordinateur`, `id_relation`) VALUES
(6, 'MAC Apple', 1),
(9, 'alien ware', 1),
(10, 'asus rogue', 1),
(51, 'fujitsu', 1),
(52, 'acer', 1),
(53, 'lenovo', 1),
(54, 'asus', 1),
(55, 'chromebook ', 1);

-- --------------------------------------------------------

--
-- Structure de la table `relation`
--

CREATE TABLE `relation` (
  `id_relation` int(11) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_ordinateur` int(100) NOT NULL,
  `date` date NOT NULL,
  `horaire` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `relation`
--

INSERT INTO `relation` (`id_relation`, `id_user`, `id_ordinateur`, `date`, `horaire`) VALUES
(1, 2026, 52, '2021-06-01', '17:00:00.000000'),
(2, 9, 54, '2021-06-03', '17:48:05.000000'),
(3, 2032, 52, '2021-06-15', '13:01:06.000000');

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
  `date_inscription` datetime NOT NULL DEFAULT current_timestamp(),
  `nom` varchar(100) NOT NULL,
  `id_relation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `pseudo`, `password`, `email`, `ip`, `date_inscription`, `nom`, `id_relation`) VALUES
(9, 'gaston', '$2y$12$DColyHeRAll8NKcQF/9NT.UB.SPojFw8.0BbVSPChf8tdlWqAMSGC', 'kazailchazal6@gmail.com', '::1', '2021-06-10 23:36:10', 'gardip', 1),
(2025, 'paul', '$2y$12$UJiPQTDzR6CZIlvy88tjWuZypAdh1cCHjXPEPXn.bX3b6Rc/XZS.2', 'paul@gmail.com', '::1', '2021-06-13 16:28:32', '', 1),
(2026, 'chazal', '$2y$12$9dwG7/bnffyMzu/BYz2/DuAuvVatZOBirnyqdJIEMBIuSygwe7oAq', 'chazal.hassani@gmail.com', '::1', '2021-06-13 16:31:32', '', 1),
(2027, 'kevin', '$2y$12$rlaFgGly/l5cjtakxAXljOFkZUOnt6azG16/Pwu5NC7kis1evvGQG', 'kevin.durant@gmail.com', '::1', '2021-06-13 16:32:49', '', 1),
(2032, 'bil', '$2y$12$zUw554VZU2Z5TBrcyY9Pje3qGSjOtp0kY411P/MWmAoMyif9Y0kze', 'bil@gmail.com', '::1', '2021-06-15 12:27:08', '', 1),
(2033, 'leo', '$2y$12$Elf1klKbZXXA4CVfCu68QeW9SDYw/DA1h1f2J425O2lpbYN9nCs5G', 'leo@gmail.com', '::1', '2021-06-15 12:27:55', '', 1),
(2034, 'mathias', '$2y$12$SdqT5dOLYNeKSFvbPNFbG.003BMX.SX3dj8Ie4d3AzYaZmAmfrKYG', 'mathias@gmail.com', '::1', '2021-06-15 12:28:29', '', 1),
(2035, 'lro', '$2y$12$j107vAa91bLeCSWhv3ymUOTxxs6/ZVKqoqcYBODpz/JDcl3ukITIO', 'lro@gmail.com', '::1', '2021-06-15 12:28:57', '', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `ordinateur`
--
ALTER TABLE `ordinateur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_relation` (`id_relation`);

--
-- Index pour la table `relation`
--
ALTER TABLE `relation`
  ADD PRIMARY KEY (`id_relation`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_ordinateur` (`id_ordinateur`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_relation` (`id_relation`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `ordinateur`
--
ALTER TABLE `ordinateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT pour la table `relation`
--
ALTER TABLE `relation`
  MODIFY `id_relation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2036;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `ordinateur`
--
ALTER TABLE `ordinateur`
  ADD CONSTRAINT `ordinateur_ibfk_1` FOREIGN KEY (`id_relation`) REFERENCES `relation` (`id_relation`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `relation`
--
ALTER TABLE `relation`
  ADD CONSTRAINT `relation_ibfk_1` FOREIGN KEY (`id_ordinateur`) REFERENCES `ordinateur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relation_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `utilisateur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `utilisateur_ibfk_1` FOREIGN KEY (`id_relation`) REFERENCES `relation` (`id_relation`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
