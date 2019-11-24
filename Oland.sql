-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Dim 24 Novembre 2019 à 02:38
-- Version du serveur :  5.7.24-0ubuntu0.16.04.1
-- Version de PHP :  7.2.24-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `Oland`
--

-- --------------------------------------------------------

--
-- Structure de la table `compteUser`
--

CREATE TABLE `compteUser` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `persoId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `compteUser`
--

INSERT INTO `compteUser` (`id`, `user`, `password`, `persoId`) VALUES
(1, 'Mathieu', 'elie', 1);

-- --------------------------------------------------------

--
-- Structure de la table `perso`
--

CREATE TABLE `perso` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `pos` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `perso`
--

INSERT INTO `perso` (`id`, `img`, `pos`) VALUES
(1, 'unit11', 56),
(2, 'unit2', 57),
(3, 'unit7', 57),
(4, 'unit4', 75);

-- --------------------------------------------------------

--
-- Structure de la table `tiles`
--

CREATE TABLE `tiles` (
  `id` int(11) NOT NULL,
  `background` varchar(255) NOT NULL,
  `concretItem` varchar(255) DEFAULT NULL,
  `metaItem` varchar(255) DEFAULT NULL,
  `charactereId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `tiles`
--

INSERT INTO `tiles` (`id`, `background`, `concretItem`, `metaItem`, `charactereId`) VALUES
(1, 'forest', NULL, NULL, NULL),
(2, 'forest', NULL, NULL, NULL),
(3, 'tree1', NULL, NULL, NULL),
(4, 'tree3', NULL, NULL, NULL),
(5, 'forest', NULL, NULL, NULL),
(6, 'tree2', NULL, NULL, NULL),
(7, 'tree2', NULL, NULL, NULL),
(8, 'tree1', NULL, NULL, NULL),
(9, 'tree2', NULL, NULL, NULL),
(10, 'forest', NULL, NULL, NULL),
(11, 'forest', NULL, NULL, NULL),
(12, 'tree3', NULL, NULL, NULL),
(13, 'tree1', NULL, NULL, NULL),
(14, 'forestDown', NULL, NULL, NULL),
(15, 'tree1', NULL, NULL, NULL),
(16, 'forest', NULL, NULL, NULL),
(17, 'grass1', NULL, NULL, NULL),
(18, 'tree2', NULL, NULL, NULL),
(19, 'grass1', NULL, NULL, NULL),
(20, 'grass2', NULL, NULL, NULL),
(21, 'tree2', NULL, NULL, NULL),
(22, 'grass2', NULL, NULL, NULL),
(23, 'tree1Down', NULL, NULL, NULL),
(24, 'tree3Down', NULL, NULL, NULL),
(25, 'tree2Down', NULL, NULL, NULL),
(26, 'tree1Down', NULL, NULL, NULL),
(27, 'grass1', NULL, NULL, NULL),
(28, 'grass2', NULL, NULL, NULL),
(29, 'grass1', NULL, NULL, NULL),
(30, 'tree2', NULL, NULL, NULL),
(31, 'grass1', NULL, NULL, NULL),
(32, 'grass2', NULL, NULL, NULL),
(33, 'grass1', NULL, NULL, NULL),
(34, 'grass2', 'moulinUp', NULL, NULL),
(35, 'grass1', NULL, NULL, NULL),
(36, 'grass2', NULL, NULL, NULL),
(37, 'grass1', 'house1', NULL, NULL),
(38, 'grass2', 'house3', NULL, NULL),
(39, 'grass1', 'house2', NULL, NULL),
(40, 'grass2', NULL, NULL, NULL),
(41, 'grass1', NULL, NULL, NULL),
(42, 'grass2', NULL, NULL, NULL),
(43, 'grass1', NULL, NULL, NULL),
(44, 'roadEndBottom', 'moulinDown', NULL, NULL),
(45, 'grass1', NULL, NULL, NULL),
(46, 'grass2', 'house2', NULL, NULL),
(47, 'roadEndRight', NULL, NULL, NULL),
(48, 'roadXYbottom', NULL, NULL, NULL),
(49, 'roadEndLeft', NULL, NULL, NULL),
(50, 'grass2', NULL, NULL, NULL),
(51, 'grass1', NULL, NULL, NULL),
(52, 'tree2', NULL, NULL, NULL),
(53, 'grass1', 'house4', NULL, NULL),
(54, 'roadXrightY', NULL, NULL, NULL),
(55, 'roadX', NULL, NULL, NULL),
(56, 'roadX', NULL, NULL, NULL),
(57, 'roadXYbottom', NULL, NULL, NULL),
(58, 'roadTopToLeft', NULL, NULL, NULL),
(59, 'grass1', NULL, NULL, NULL),
(60, 'grass2', NULL, NULL, NULL),
(61, 'grass1', NULL, NULL, NULL),
(62, 'grass2', NULL, NULL, NULL),
(63, 'roadEndRight', NULL, NULL, NULL),
(64, 'roadTopToLeft', NULL, NULL, NULL),
(65, 'grass1', NULL, NULL, NULL),
(66, 'grass2', NULL, NULL, NULL),
(67, 'roadY', NULL, NULL, NULL),
(68, 'grass2', 'house5', NULL, NULL),
(69, 'grass1', NULL, NULL, NULL),
(70, 'grass2', NULL, NULL, NULL),
(71, 'grass1', NULL, NULL, NULL),
(72, 'grass2', NULL, NULL, NULL),
(73, 'grass1', NULL, NULL, NULL),
(74, 'grass2', 'house6', NULL, NULL),
(75, 'roadBottomToRight', NULL, NULL, NULL),
(76, 'roadX', NULL, NULL, NULL),
(77, 'roadXYtop', NULL, NULL, NULL),
(78, 'roadEndLeft', NULL, NULL, NULL),
(79, 'grass1', NULL, NULL, NULL),
(80, 'grass2', NULL, NULL, NULL),
(81, 'grass1', NULL, NULL, NULL),
(82, 'grass2', NULL, NULL, NULL),
(83, 'grass1', NULL, NULL, NULL),
(84, 'roadEndRight', NULL, NULL, NULL),
(85, 'roadTopToLeft', NULL, NULL, NULL),
(86, 'grass2', NULL, NULL, NULL),
(87, 'grass1', NULL, NULL, NULL),
(88, 'grass2', NULL, NULL, NULL),
(89, 'grass1', NULL, NULL, NULL),
(90, 'grass2', NULL, NULL, NULL),
(91, 'grass1', NULL, NULL, NULL),
(92, 'grass2', NULL, NULL, NULL),
(93, 'grass1', NULL, NULL, NULL),
(94, 'grass2', NULL, NULL, NULL),
(95, 'grass1', NULL, NULL, NULL),
(96, 'grass2', NULL, NULL, NULL),
(97, 'grass1', NULL, NULL, NULL),
(98, 'grass2', NULL, NULL, NULL),
(99, 'grass1', NULL, NULL, NULL),
(100, 'grass2', NULL, NULL, NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `compteUser`
--
ALTER TABLE `compteUser`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `perso`
--
ALTER TABLE `perso`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tiles`
--
ALTER TABLE `tiles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `compteUser`
--
ALTER TABLE `compteUser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `perso`
--
ALTER TABLE `perso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `tiles`
--
ALTER TABLE `tiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
