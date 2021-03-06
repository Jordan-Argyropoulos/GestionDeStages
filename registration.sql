-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 01 mai 2021 à 10:46
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `registration`
--

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

DROP TABLE IF EXISTS `entreprise`;
CREATE TABLE IF NOT EXISTS `entreprise` (
  `id_entreprise` int(11) NOT NULL AUTO_INCREMENT,
  `nom_entreprise` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville_entreprise` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_entreprise`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

DROP TABLE IF EXISTS `etudiants`;
CREATE TABLE IF NOT EXISTS `etudiants` (
  `id_etudiant` int(11) NOT NULL AUTO_INCREMENT,
  `email_etudiant` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'min 4 caracteres',
  `password_confirm` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'min 4 caracteres',
  `nom_etudiant` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom_etudiant` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stage` tinyint(1) NOT NULL COMMENT 'oui ou non',
  PRIMARY KEY (`id_etudiant`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`id_etudiant`, `email_etudiant`, `password`, `password_confirm`, `nom_etudiant`, `prenom_etudiant`, `stage`) VALUES
(2, 'jj.vanrossomme@outlook.com', '1234', '1234', 'Vanrossomme', 'Jean-Julien', 1);

-- --------------------------------------------------------

--
-- Structure de la table `sujets_stage`
--

DROP TABLE IF EXISTS `sujets_stage`;
CREATE TABLE IF NOT EXISTS `sujets_stage` (
  `id_sujets` int(11) NOT NULL AUTO_INCREMENT,
  `descritptif_sujets` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_superviseur` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_etudiant` int(11) NOT NULL,
  `id_entreprise` int(11) NOT NULL,
  PRIMARY KEY (`id_sujets`),
  UNIQUE KEY `id_etudiant` (`id_etudiant`),
  UNIQUE KEY `id_entreprise` (`id_entreprise`),
  KEY `id_etudiant_2` (`id_etudiant`,`id_entreprise`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `sujets_stage`
--
ALTER TABLE `sujets_stage`
  ADD CONSTRAINT `sujets_stage_fk_entreprise` FOREIGN KEY (`id_entreprise`) REFERENCES `entreprise` (`id_entreprise`),
  ADD CONSTRAINT `sujets_stage_fk_etudiants` FOREIGN KEY (`id_etudiant`) REFERENCES `etudiants` (`id_etudiant`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
