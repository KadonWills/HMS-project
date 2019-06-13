-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 13 juin 2019 à 16:40
-- Version du serveur :  5.7.21
-- Version de PHP :  7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

  
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `hms`
--

-- --------------------------------------------------------

--
-- Structure de la table `consultation`
--

DROP TABLE IF EXISTS `consultation`;
CREATE TABLE IF NOT EXISTS `consultation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patid` int(11) NOT NULL,
  `use_id` int(11) NOT NULL,
  `condesc` varchar(254) DEFAULT NULL,
  `condate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_association7` (`use_id`),
  KEY `fk_goesfor` (`patid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `exampresc`
--

DROP TABLE IF EXISTS `exampresc`;
CREATE TABLE IF NOT EXISTS `exampresc` (
  `con_id` int(11) NOT NULL,
  `lab_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `resultfile` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`con_id`,`lab_id`,`id`),
  KEY `fk_j` (`lab_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `labtest`
--

DROP TABLE IF EXISTS `labtest`;
CREATE TABLE IF NOT EXISTS `labtest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(254) DEFAULT NULL,
  `price` varchar(254) DEFAULT NULL,
  `labdesc` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `parameter`
--

DROP TABLE IF EXISTS `parameter`;
CREATE TABLE IF NOT EXISTS `parameter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `con_id` int(11) NOT NULL,
  `temperature` decimal(8,0) DEFAULT NULL,
  `weight` decimal(8,0) DEFAULT NULL,
  `tension` decimal(8,0) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_association5` (`con_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `patients`
--

DROP TABLE IF EXISTS `patients`;
CREATE TABLE IF NOT EXISTS `patients` (
  `patid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(254) DEFAULT NULL,
  `lname` varchar(254) DEFAULT NULL,
  `dob` datetime DEFAULT NULL,
  `phonenum` varchar(254) DEFAULT NULL,
  `address` varchar(254) DEFAULT NULL,
  `email` varchar(254) DEFAULT NULL,
  `gender` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`patid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `patients`
--

INSERT INTO `patients` (`patid`, `fname`, `lname`, `dob`, `phonenum`, `address`, `email`, `gender`) VALUES
(1, 'John', 'Doe', '2019-06-25 00:00:00', '699999999', 'Nkolanga', 'johndoe@gmail.com', 'Male'),
(2, 'Jeannette', 'Does', '2019-06-29 00:00:00', '611111111', 'Odza', 'jeannette@gmail.com', 'Female');

-- --------------------------------------------------------

--
-- Structure de la table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `use_id` int(11) NOT NULL,
  `patid` int(11) NOT NULL,
  `type` varchar(254) DEFAULT NULL,
  `total` decimal(8,0) DEFAULT NULL,
  `paydate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_association10` (`patid`),
  KEY `fk_association12` (`use_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `prescription`
--

DROP TABLE IF EXISTS `prescription`;
CREATE TABLE IF NOT EXISTS `prescription` (
  `idpres` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `presdesc` varchar(254) DEFAULT NULL,
  `drugname` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`idpres`),
  KEY `fk_association9` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `privilege`
--

DROP TABLE IF EXISTS `privilege`;
CREATE TABLE IF NOT EXISTS `privilege` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rol_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`rol_id`),
  KEY `fk_privilege` (`rol_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `rdv`
--

DROP TABLE IF EXISTS `rdv`;
CREATE TABLE IF NOT EXISTS `rdv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `use_id` int(11) NOT NULL,
  `doc_id` int(11) NOT NULL,
  `patid` int(11) NOT NULL,
  `rdvdate` datetime DEFAULT NULL,
  `rdvtime` varchar(254) DEFAULT NULL,
  `rdvdesc` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_association6` (`use_id`),
  KEY `fk_association8` (`patid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(254) DEFAULT NULL,
  `code` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(254) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `adress` varchar(254) DEFAULT NULL,
  `gender` varchar(254) DEFAULT NULL,
  `phonenum` varchar(254) DEFAULT NULL,
  `email` varchar(254) DEFAULT NULL,
  `login` varchar(254) DEFAULT NULL,
  `password` varchar(254) DEFAULT NULL,
  `sex` varchar(254) DEFAULT NULL,
  `lname` varchar(254) DEFAULT NULL,
  `speciality` varchar(254) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `fname`, `dob`, `adress`, `gender`, `phonenum`, `email`, `login`, `password`, `sex`, `lname`, `speciality`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, 'admin@gmail.com', 'admin', '$2y$10$sdx3nD2U7M9S4ioVRakaOOVorKT0PyGLMfOAFVRwo5y/z92S8PpfG', NULL, NULL, NULL, '2019-06-13 14:43:38', '2019-06-13 14:43:38');
COMMIT;

alter table rdv add constraint fk_association9 foreign key (doc_id)
      references user (id) on delete restrict on update restrict;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
