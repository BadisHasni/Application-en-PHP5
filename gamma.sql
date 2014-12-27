-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 26 Décembre 2014 à 15:17
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `gamma`
--
CREATE DATABASE IF NOT EXISTS `gamma` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `gamma`;

-- --------------------------------------------------------

--
-- Structure de la table `banque`
--

CREATE TABLE IF NOT EXISTS `banque` (
  `idbanque` int(11) NOT NULL,
  `nomBanque` varchar(45) DEFAULT NULL,
  `typePayement` varchar(45) DEFAULT NULL,
  `departement_iddepartement` int(11) NOT NULL,
  PRIMARY KEY (`idbanque`),
  KEY `fk_banque_departement1_idx` (`departement_iddepartement`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

CREATE TABLE IF NOT EXISTS `departement` (
  `iddepartement` int(11) NOT NULL AUTO_INCREMENT,
  `nomDep` varchar(45) DEFAULT NULL,
  `BudgetDep` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`iddepartement`),
  UNIQUE KEY `iddepartement_UNIQUE` (`iddepartement`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `departement`
--

INSERT INTO `departement` (`iddepartement`, `nomDep`, `BudgetDep`, `date`) VALUES
(1, 'informatique', 3000, '2014-05-16'),
(2, 'Marketing', 3000, '2014-05-16'),
(3, 'achat', 3000, '2014-05-31');

-- --------------------------------------------------------

--
-- Structure de la table `depense`
--

CREATE TABLE IF NOT EXISTS `depense` (
  `iddepense` int(11) NOT NULL AUTO_INCREMENT,
  `typeDepense` varchar(45) DEFAULT NULL,
  `budgetDepense` varchar(45) DEFAULT NULL,
  `dateDepense` varchar(255) NOT NULL,
  `departement_iddepartement` int(11) NOT NULL,
  PRIMARY KEY (`iddepense`),
  UNIQUE KEY `iddepense_UNIQUE` (`iddepense`),
  KEY `fk_depense_departement_idx` (`departement_iddepartement`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `depense`
--

INSERT INTO `depense` (`iddepense`, `typeDepense`, `budgetDepense`, `dateDepense`, `departement_iddepartement`) VALUES
(1, 'factures_telephoniques', '350', 'octobre', 1),
(2, 'Voayge', '840', 'Septembre', 1),
(4, 'Carburant', '600', 'Octobre', 2),
(6, 'Location_de_voiture', '2200', 'Decembre', 3),
(8, 'Carburant', '490', 'Avril', 1),
(9, 'Mobiliers', '1400', 'Janvier', 1),
(10, 'Location_de_voiture', '650', 'Janvier', 2);

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

CREATE TABLE IF NOT EXISTS `employe` (
  `idemploye` int(11) NOT NULL AUTO_INCREMENT,
  `nomEmp` varchar(45) DEFAULT NULL,
  `prenomEmp` varchar(45) DEFAULT NULL,
  `salaireEmp` float DEFAULT NULL,
  `departement_iddepartement` int(11) NOT NULL,
  PRIMARY KEY (`idemploye`),
  UNIQUE KEY `idemploye_UNIQUE` (`idemploye`),
  KEY `fk_employe_departement1_idx` (`departement_iddepartement`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Contenu de la table `employe`
--

INSERT INTO `employe` (`idemploye`, `nomEmp`, `prenomEmp`, `salaireEmp`, `departement_iddepartement`) VALUES
(1, 'Sabri', 'gharbi', 1900, 1),
(12, 'houssem', 'zitoun', 1290, 3),
(17, 'Badis', 'Hasni', 898, 1),
(19, 'Mohamed', 'Mokded', 9800, 2),
(20, 'Jaafer', 'Gesmi', 160, 1);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `banque`
--
ALTER TABLE `banque`
  ADD CONSTRAINT `fk_banque_departement1` FOREIGN KEY (`departement_iddepartement`) REFERENCES `departement` (`iddepartement`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `depense`
--
ALTER TABLE `depense`
  ADD CONSTRAINT `fk_depense_departement` FOREIGN KEY (`departement_iddepartement`) REFERENCES `departement` (`iddepartement`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `employe`
--
ALTER TABLE `employe`
  ADD CONSTRAINT `fk_employe_departement1` FOREIGN KEY (`departement_iddepartement`) REFERENCES `departement` (`iddepartement`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
