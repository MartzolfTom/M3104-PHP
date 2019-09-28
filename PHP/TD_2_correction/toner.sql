-- phpMyAdmin SQL Dump
-- version 4.2.12deb2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 16 Septembre 2015 à 20:55
-- Version du serveur :  5.6.25-0ubuntu0.15.04.1
-- Version de PHP :  5.6.4-4ubuntu6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `toner`
--

-- --------------------------------------------------------

--
-- Structure de la table `a_achete`
--

CREATE TABLE IF NOT EXISTS `a_achete` (
  `NO_CART` varchar(10) NOT NULL,
  `NO_CLI` varchar(10) NOT NULL,
  `DATE` datetime NOT NULL,
  `QTE` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `a_achete`
--

INSERT INTO `a_achete` (`NO_CART`, `NO_CLI`, `DATE`, `QTE`) VALUES
('12A1970', '1', '2012-12-12 00:00:00', 2),
('12A1970', '2', '2012-12-12 00:00:00', 2),
('C6578DE', '1', '2013-01-12 00:00:00', 3),
('C6578DE', '2', '2013-01-12 00:00:00', 3),
('C6578DE', '3', '2013-01-12 00:00:00', 3),
('C6578DE', '4', '2013-01-12 00:00:00', 3),
('C6578DEC', '4', '2013-01-12 00:00:00', 3),
('C6578DEK', '4', '2013-01-12 00:00:00', 3),
('C6615DEK', '4', '2013-01-12 00:00:00', 3),
('CAN0533', '3', '2013-02-12 00:00:00', 2),
('CAN0533', '4', '2013-02-12 00:00:00', 1),
('CAN0534', '3', '2013-02-12 00:00:00', 2),
('EPS S0533', '4', '2013-02-12 00:00:00', 5);

-- --------------------------------------------------------

--
-- Structure de la table `cartouche`
--

CREATE TABLE IF NOT EXISTS `cartouche` (
  `NO_CART` varchar(10) NOT NULL,
  `NO_CONS` varchar(10) DEFAULT NULL,
  `NO_TYPE_CART` varchar(10) DEFAULT NULL,
  `DESI_CART` varchar(10) DEFAULT NULL,
  `PRIX_CART` double DEFAULT NULL,
  `COULEUR_CART` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `cartouche`
--

INSERT INTO `cartouche` (`NO_CART`, `NO_CONS`, `NO_TYPE_CART`, `DESI_CART`, `PRIX_CART`, `COULEUR_CART`) VALUES
('12A1970', '4', '1', 'Encre', 44.99, 'Noir'),
('12A1970C', '7', '2', 'Encre', 24.99, 'Noir'),
('12A1970R', '5', '3', 'Encre', 20.99, 'Noir'),
('15M0120', '4', '1', 'Encre', 50.99, 'Couleur'),
('15M0120C', '7', '2', 'Encre', 30.99, 'Couleur'),
('15M0120R', '5', '3', 'Encre', 20.99, 'Couleur'),
('C6578DE', '1', '1', 'Encre', 53.99, 'Couleur'),
('C6578DEC', '7', '2', 'Encre', 23.99, 'Couleur'),
('C6578DEK', '6', '4', 'Encre', 13.99, 'Couleur'),
('C6578DER', '5', '3', 'Encre', 20.99, 'Couleur'),
('C6615DE', '1', '1', 'Encre', 41.99, 'Noir'),
('C6615DEC', '7', '2', 'Encre', 21.99, 'Noir'),
('C6615DEK', '6', '4', 'Encre', 10.99, 'Noir'),
('C6615DER', '5', '3', 'Encre', 20.99, 'Noir'),
('C6657AE', '1', '1', 'Toner', 123, 'Noir'),
('C6657BE', '1', '1', 'Toner', 121, 'Noir'),
('C6657CE', '1', '3', 'Toner', 120, 'Noir'),
('CAN0533', '2', '1', 'Encre', 20, 'Noir'),
('CAN0534', '2', '1', 'Encre', 30, 'Noir'),
('EPS S0533', '3', '3', 'Encre', 22, 'Noir');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `NO_CLI` varchar(10) NOT NULL,
  `NOM_CLI` varchar(20) DEFAULT NULL,
  `ADR_CLI` varchar(20) DEFAULT NULL,
  `VILLE_CLI` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`NO_CLI`, `NOM_CLI`, `ADR_CLI`, `VILLE_CLI`) VALUES
('1', 'MEILLOR', '4, av gare Nantiat', 'Nantiat'),
('2', 'DIESELEC', NULL, 'Limoges'),
('3', 'AQL', '51 rue F. CHENIEUX', 'Limoges'),
('4', 'AFI', '85 av. RUCHOUX', 'Limoges'),
('5', 'ULTIME', 'ESTER', 'Limoges'),
('6', 'IRP', '41 r F. BUISSON', 'Brive'),
('7', 'SPECIALMOUSSE', '55 rue F CHENIEUX', 'Limoges');

-- --------------------------------------------------------

--
-- Structure de la table `constructeur`
--

CREATE TABLE IF NOT EXISTS `constructeur` (
  `NO_CONS` varchar(10) NOT NULL,
  `NOM_CONS` varchar(20) DEFAULT NULL,
  `TEL_CONS` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `constructeur`
--

INSERT INTO `constructeur` (`NO_CONS`, `NOM_CONS`, `TEL_CONS`) VALUES
('1', 'HP', '01.02.03.04.05'),
('2', 'CANON', '06.07.08.09.10'),
('3', 'EPSON', '0112.13.14.15'),
('4', 'LEXMARK', '02.31.32.33.34'),
('5', 'IMD', '01.22.23.24.25'),
('6', 'INK CHIMICAL', '01.27.28.29.30'),
('7', 'TINKO', '06.17.18.19.20');

-- --------------------------------------------------------

--
-- Structure de la table `est_compatible`
--

CREATE TABLE IF NOT EXISTS `est_compatible` (
  `CAR_NO_CART` varchar(10) NOT NULL,
  `NO_CART` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `est_compatible`
--

INSERT INTO `est_compatible` (`CAR_NO_CART`, `NO_CART`) VALUES
('12A1970', '12A1970C'),
('12A1970', '12A1970R'),
('15M0120', '15M0120C'),
('15M0120', '15M0120R'),
('C6578DE', 'C6578DEC'),
('C6578DE', 'C6578DEK'),
('C6578DE', 'C6578DER'),
('C6615DEC', 'C6615DE'),
('C6615DEK', 'C6615DE'),
('C6615DER', 'C6615DE'),
('C6657AE', 'C6657BE'),
('C6657AE', 'C6657CE');

-- --------------------------------------------------------

--
-- Structure de la table `est_livree`
--

CREATE TABLE IF NOT EXISTS `est_livree` (
  `NO_IMPR` varchar(10) NOT NULL,
  `NO_CART` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `est_livree`
--

INSERT INTO `est_livree` (`NO_IMPR`, `NO_CART`) VALUES
('2', '12A1970'),
('3', '12A1970'),
('3', '15M0120'),
('4', 'C6578DE'),
('4', 'C6615DE'),
('5', 'C6657AE'),
('1', 'EPS S0533');

-- --------------------------------------------------------

--
-- Structure de la table `imprimante`
--

CREATE TABLE IF NOT EXISTS `imprimante` (
  `NO_IMPR` varchar(10) NOT NULL,
  `NO_TYPE` varchar(10) DEFAULT NULL,
  `NO_CONS` varchar(10) DEFAULT NULL,
  `DESI_IMPR` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `imprimante`
--

INSERT INTO `imprimante` (`NO_IMPR`, `NO_TYPE`, `NO_CONS`, `DESI_IMPR`) VALUES
('1', '1', '1', 'BJ 130'),
('2', '1', '4', 'Z31'),
('3', '1', '4', 'Z43'),
('4', '1', '1', '940C'),
('5', '2', '1', 'Laser jet 620'),
('6', '1', '1', 'essai');

-- --------------------------------------------------------

--
-- Structure de la table `type_cart`
--

CREATE TABLE IF NOT EXISTS `type_cart` (
  `NO_TYPE_CART` varchar(10) NOT NULL,
  `LIBELLE_TYPE_CART` varchar(20) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `type_cart`
--

INSERT INTO `type_cart` (`NO_TYPE_CART`, `LIBELLE_TYPE_CART`) VALUES
('1', 'Constructeur'),
('2', 'Compatible'),
('3', 'Reconditionnée'),
('4', 'Kit de recharge');

-- --------------------------------------------------------

--
-- Structure de la table `type_impr`
--

CREATE TABLE IF NOT EXISTS `type_impr` (
  `NO_TYPE` varchar(10) NOT NULL,
  `LIBELLE_TYPE` varchar(20) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `type_impr`
--

INSERT INTO `type_impr` (`NO_TYPE`, `LIBELLE_TYPE`) VALUES
('1', 'Jet d''encre'),
('2', 'Laser noir et blanc'),
('3', 'Laser couleur'),
('4', 'Matricielle');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `a_achete`
--
ALTER TABLE `a_achete`
 ADD PRIMARY KEY (`NO_CART`,`NO_CLI`,`DATE`), ADD KEY `NO_CLI` (`NO_CLI`);

--
-- Index pour la table `cartouche`
--
ALTER TABLE `cartouche`
 ADD PRIMARY KEY (`NO_CART`), ADD KEY `NO_CONS` (`NO_CONS`), ADD KEY `NO_TYPE_CART` (`NO_TYPE_CART`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
 ADD PRIMARY KEY (`NO_CLI`);

--
-- Index pour la table `constructeur`
--
ALTER TABLE `constructeur`
 ADD PRIMARY KEY (`NO_CONS`);

--
-- Index pour la table `est_compatible`
--
ALTER TABLE `est_compatible`
 ADD PRIMARY KEY (`CAR_NO_CART`,`NO_CART`), ADD KEY `NO_CART` (`NO_CART`);

--
-- Index pour la table `est_livree`
--
ALTER TABLE `est_livree`
 ADD PRIMARY KEY (`NO_IMPR`,`NO_CART`), ADD KEY `NO_CART` (`NO_CART`);

--
-- Index pour la table `imprimante`
--
ALTER TABLE `imprimante`
 ADD PRIMARY KEY (`NO_IMPR`), ADD KEY `NO_TYPE` (`NO_TYPE`), ADD KEY `NO_CONS` (`NO_CONS`);

--
-- Index pour la table `type_cart`
--
ALTER TABLE `type_cart`
 ADD PRIMARY KEY (`NO_TYPE_CART`);

--
-- Index pour la table `type_impr`
--
ALTER TABLE `type_impr`
 ADD PRIMARY KEY (`NO_TYPE`);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `a_achete`
--
ALTER TABLE `a_achete`
ADD CONSTRAINT `a_achete_ibfk_1` FOREIGN KEY (`NO_CART`) REFERENCES `cartouche` (`NO_CART`),
ADD CONSTRAINT `a_achete_ibfk_2` FOREIGN KEY (`NO_CLI`) REFERENCES `client` (`NO_CLI`);

--
-- Contraintes pour la table `cartouche`
--
ALTER TABLE `cartouche`
ADD CONSTRAINT `cartouche_ibfk_1` FOREIGN KEY (`NO_CONS`) REFERENCES `constructeur` (`NO_CONS`),
ADD CONSTRAINT `cartouche_ibfk_2` FOREIGN KEY (`NO_TYPE_CART`) REFERENCES `type_cart` (`NO_TYPE_CART`);

--
-- Contraintes pour la table `est_compatible`
--
ALTER TABLE `est_compatible`
ADD CONSTRAINT `est_compatible_ibfk_1` FOREIGN KEY (`CAR_NO_CART`) REFERENCES `cartouche` (`NO_CART`),
ADD CONSTRAINT `est_compatible_ibfk_2` FOREIGN KEY (`NO_CART`) REFERENCES `cartouche` (`NO_CART`);

--
-- Contraintes pour la table `est_livree`
--
ALTER TABLE `est_livree`
ADD CONSTRAINT `est_livree_ibfk_1` FOREIGN KEY (`NO_CART`) REFERENCES `cartouche` (`NO_CART`),
ADD CONSTRAINT `est_livree_ibfk_2` FOREIGN KEY (`NO_IMPR`) REFERENCES `imprimante` (`NO_IMPR`);

--
-- Contraintes pour la table `imprimante`
--
ALTER TABLE `imprimante`
ADD CONSTRAINT `imprimante_ibfk_1` FOREIGN KEY (`NO_TYPE`) REFERENCES `type_impr` (`NO_TYPE`),
ADD CONSTRAINT `imprimante_ibfk_2` FOREIGN KEY (`NO_CONS`) REFERENCES `constructeur` (`NO_CONS`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
