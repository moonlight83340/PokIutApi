-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Jeu 10 Mars 2016 à 18:17
-- Version du serveur: 5.5.43
-- Version de PHP: 5.6.9-1~dotdeb+7.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `poke_api`
--

-- --------------------------------------------------------

--
-- Structure de la table `TYPE`
--

CREATE TABLE IF NOT EXISTS `TYPE` (
  `TYPE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `TYPE_NAME` varchar(32) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`TYPE_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Contenu de la table `TYPE`
--

INSERT INTO `TYPE` (`TYPE_ID`, `TYPE_NAME`) VALUES
(1, 'ACIER'),
(2, 'COMBAT'),
(3, 'DRAGON'),
(4, 'EAU'),
(5, 'ELECTR'),
(6, 'FEE'),
(7, 'FEU'),
(8, 'GLACE'),
(9, 'INSECTE'),
(10, 'NORMAL'),
(11, 'PLANTE'),
(12, 'POISON'),
(13, 'PSY'),
(14, 'ROCHE'),
(15, 'SOL'),
(16, 'SPECTRE'),
(17, 'TENEBRES'),
(18, 'VOL');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

