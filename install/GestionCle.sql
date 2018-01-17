-- phpMyAdmin SQL Dump
-- version 4.6.5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost
-- Généré le :  Mer 28 Juin 2017 à 16:28
-- Version du serveur :  5.5.54-MariaDB
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `GestionCle`
--

-- --------------------------------------------------------

--
-- Structure de la table `Cles`
--

CREATE TABLE `Cles` (
  `Id_Cles` bigint(4) NOT NULL,
  `Nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Type` text COLLATE utf8_unicode_ci NOT NULL,
  `Quantité` int(255) NOT NULL,
  `Attribuer` int(2) DEFAULT '0',
  `Armoire` text COLLATE utf8_unicode_ci NOT NULL,
  `Emplacement` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `Portes`
--

CREATE TABLE `Portes` (
  `Id_portes` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `Nom` text COLLATE utf8_unicode_ci NOT NULL,
  `Batiment` text COLLATE utf8_unicode_ci NOT NULL,
  `Etage` text COLLATE utf8_unicode_ci NOT NULL,
  `Salle` text COLLATE utf8_unicode_ci NOT NULL,
  `Serrure` text COLLATE utf8_unicode_ci NOT NULL,
  `Id_Cles` varchar(7) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `PretEntreprise`
--

CREATE TABLE `PretEntreprise` (
  `ID` int(3) NOT NULL,
  `Nom` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Prenom` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Entreprise` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Batiment` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Etage` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Salle` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Id_Cles` int(11) NOT NULL,
  `Donner` datetime NOT NULL,
  `Rendu` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Structure de la table `PretPersonnel`
--

CREATE TABLE `PretPersonnel` (
  `ID` int(11) NOT NULL,
  `Personnel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Clé` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Donner` datetime NOT NULL,
  `Rendu` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `Users`
--

CREATE TABLE `Users` (
  `Nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Cles`
--
ALTER TABLE `Cles`
  ADD PRIMARY KEY (`Id_Cles`);

--
-- Index pour la table `Portes`
--
ALTER TABLE `Portes`
  ADD PRIMARY KEY (`Id_portes`);

--
-- Index pour la table `PretEntreprise`
--
ALTER TABLE `PretEntreprise`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `PretPersonnel`
--
ALTER TABLE `PretPersonnel`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID` (`ID`),
  ADD KEY `ID_2` (`ID`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Cles`
--
ALTER TABLE `Cles`
  MODIFY `Id_Cles` bigint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `PretEntreprise`
--
ALTER TABLE `PretEntreprise`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
--
-- AUTO_INCREMENT pour la table `PretPersonnel`
--
ALTER TABLE `PretPersonnel`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=366;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
