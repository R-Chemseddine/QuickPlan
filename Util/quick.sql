-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mer 25 Janvier 2023 à 22:25
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `quick`
--
CREATE DATABASE IF NOT EXISTS `quick` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `quick`;

-- --------------------------------------------------------

--
-- Structure de la table `dispos`
--

CREATE TABLE IF NOT EXISTS `dispos` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `mail` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `heure` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Structure de la table `equipiers`
--

CREATE TABLE IF NOT EXISTS `equipiers` (
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `mdp` varchar(30) NOT NULL,
  PRIMARY KEY (`mail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `equipiers`
--

INSERT INTO `equipiers` (`nom`, `prenom`, `mail`, `mdp`) VALUES
('Rachdi', 'Chems eddine', 'rachdiamine135@gmail.com', 'azertyuiop');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
