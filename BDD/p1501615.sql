-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 03 Janvier 2017 à 08:54
-- Version du serveur :  5.5.52-MariaDB
-- Version de PHP :  5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `p1501615`
--

-- --------------------------------------------------------

--
-- Structure de la table `action`
--

CREATE TABLE IF NOT EXISTS `action` (
  `idAction` int(11) NOT NULL,
  `date` date NOT NULL,
  `type` varchar(255) NOT NULL,
  `echangeID` int(11) NOT NULL,
  `responsableID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `echange`
--

CREATE TABLE IF NOT EXISTS `echange` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `destinataireID` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `vipID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

CREATE TABLE IF NOT EXISTS `film` (
  `idFilm` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `realisateur` varchar(255) NOT NULL,
  `duree` int(11) NOT NULL,
  `nomSelection` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `jury`
--

CREATE TABLE IF NOT EXISTS `jury` (
  `idJury` int(11) NOT NULL,
  `selectionJugee` varchar(255) NOT NULL,
  `nbMaxVisionnageParJour` int(1) NOT NULL DEFAULT '3'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `membrestaff`
--

CREATE TABLE IF NOT EXISTS `membrestaff` (
  `id` int(11) NOT NULL,
  `motDePasse` varchar(30) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `domaine` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `membrestaff`
--

INSERT INTO `membrestaff` (`id`, `motDePasse`, `nom`, `prenom`, `domaine`) VALUES
(1, 'test', 'ONCH', 'Jean', 0);

-- --------------------------------------------------------

--
-- Structure de la table `projection`
--

CREATE TABLE IF NOT EXISTS `projection` (
  `id` int(11) NOT NULL,
  `horaire` datetime NOT NULL,
  `salleID` int(11) NOT NULL,
  `film` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

CREATE TABLE IF NOT EXISTS `salle` (
  `id` int(11) NOT NULL,
  `nom` int(11) NOT NULL,
  `capacite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `selection`
--

CREATE TABLE IF NOT EXISTS `selection` (
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `vip`
--

CREATE TABLE IF NOT EXISTS `vip` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `dateNaissance` date NOT NULL,
  `typeVIP` varchar(255) NOT NULL,
  `infoUtile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `action`
--
ALTER TABLE `action`
  ADD PRIMARY KEY (`idAction`),
  ADD KEY `echangeID` (`echangeID`),
  ADD KEY `responsableID` (`responsableID`);

--
-- Index pour la table `echange`
--
ALTER TABLE `echange`
  ADD PRIMARY KEY (`id`),
  ADD KEY `destinataireID` (`destinataireID`),
  ADD KEY `vipID` (`vipID`);

--
-- Index pour la table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`idFilm`),
  ADD KEY `nomSelection` (`nomSelection`);

--
-- Index pour la table `jury`
--
ALTER TABLE `jury`
  ADD PRIMARY KEY (`idJury`),
  ADD KEY `selectionJugee` (`selectionJugee`);

--
-- Index pour la table `membrestaff`
--
ALTER TABLE `membrestaff`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `projection`
--
ALTER TABLE `projection`
  ADD PRIMARY KEY (`id`),
  ADD KEY `film` (`film`),
  ADD KEY `nomSalle` (`salleID`);

--
-- Index pour la table `salle`
--
ALTER TABLE `salle`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `selection`
--
ALTER TABLE `selection`
  ADD PRIMARY KEY (`nom`);

--
-- Index pour la table `vip`
--
ALTER TABLE `vip`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `membrestaff`
--
ALTER TABLE `membrestaff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `vip`
--
ALTER TABLE `vip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `action`
--
ALTER TABLE `action`
  ADD CONSTRAINT `fk_action_echange` FOREIGN KEY (`echangeID`) REFERENCES `echange` (`id`),
  ADD CONSTRAINT `fk_action_responsable` FOREIGN KEY (`responsableID`) REFERENCES `membrestaff` (`id`);

--
-- Contraintes pour la table `echange`
--
ALTER TABLE `echange`
  ADD CONSTRAINT `fk_echange_vip` FOREIGN KEY (`vipID`) REFERENCES `vip` (`id`);

--
-- Contraintes pour la table `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `fk_nom_selection` FOREIGN KEY (`nomSelection`) REFERENCES `selection` (`nom`);

--
-- Contraintes pour la table `jury`
--
ALTER TABLE `jury`
  ADD CONSTRAINT `fk_jury_selection` FOREIGN KEY (`selectionJugee`) REFERENCES `selection` (`nom`);

--
-- Contraintes pour la table `projection`
--
ALTER TABLE `projection`
  ADD CONSTRAINT `fk_projection_film` FOREIGN KEY (`film`) REFERENCES `film` (`idFilm`),
  ADD CONSTRAINT `fk_projection_salle` FOREIGN KEY (`salleID`) REFERENCES `salle` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
