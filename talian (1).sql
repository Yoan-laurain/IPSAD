-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 05 fév. 2021 à 09:19
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `talian`
--

-- --------------------------------------------------------

--
-- Structure de la table `message_`
--

DROP TABLE IF EXISTS `message_`;
CREATE TABLE IF NOT EXISTS `message_` (
  `libelle` varchar(300) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `message_`
--

INSERT INTO `message_` (`libelle`, `id`) VALUES
('Voici un test', 1);

-- --------------------------------------------------------

--
-- Structure de la table `saisons`
--

DROP TABLE IF EXISTS `saisons`;
CREATE TABLE IF NOT EXISTS `saisons` (
  `idSaison` int(11) NOT NULL AUTO_INCREMENT,
  `Libelle` varchar(32) NOT NULL,
  `Script` varchar(100) NOT NULL,
  `Active` tinyint(1) NOT NULL,
  PRIMARY KEY (`idSaison`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `saisons`
--

INSERT INTO `saisons` (`idSaison`, `Libelle`, `Script`, `Active`) VALUES
(2, 'Hiver', 'https://click123.ca/dist/js/snow.js', 1),
(7, 'Automne', '../IPSAD/JS/Autumn.js', 0);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `Nom` varchar(32) NOT NULL,
  `Prenom` varchar(32) NOT NULL,
  `mdp` varchar(100) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Mail` varchar(50) NOT NULL,
  `Jeton` varchar(300) NOT NULL,
  `Sel` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`Nom`, `Prenom`, `mdp`, `id`, `Mail`, `Jeton`, `Sel`) VALUES
('Laurain', 'Yoan', '3d9e038c0635caabf85d05d5f7bce17221751bbefd08cc99129df3e4a9c4b214', 3, 'yoan.laurain0@gmail.com', 'TkhY86IMMEsSMcqj0S=4', 'P3xIte5CGco8IZOHrOv5');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
