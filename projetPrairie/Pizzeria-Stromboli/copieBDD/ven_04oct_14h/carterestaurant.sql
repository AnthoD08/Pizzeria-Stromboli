-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 04 oct. 2024 à 12:04
-- Version du serveur : 8.3.0
-- Version de PHP : 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `carterestaurant`
--

-- --------------------------------------------------------

--
-- Structure de la table `adminmenu`
--

DROP TABLE IF EXISTS `adminmenu`;
CREATE TABLE IF NOT EXISTS `adminmenu` (
  `id` int NOT NULL,
  `identifiant` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mdp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `adminmenu`
--

INSERT INTO `adminmenu` (`id`, `identifiant`, `mdp`) VALUES
(0, 'strombol1', 'bestpizza');

-- --------------------------------------------------------

--
-- Structure de la table `carte`
--

DROP TABLE IF EXISTS `carte`;
CREATE TABLE IF NOT EXISTS `carte` (
  `id` int NOT NULL AUTO_INCREMENT,
  `catégorie` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `prix` int NOT NULL,
  `descript` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `carte`
--

INSERT INTO `carte` (`id`, `catégorie`, `nom`, `prix`, `descript`) VALUES
(1, 'plat', 'pizza margarita', 10, 'tomate, basilic, mozzarella'),
(2, 'plat', 'pizza 4 fromages ', 12, 'tomate, mozzarella, chèvre, gorgonzola, comté'),
(3, 'plat', 'pizza napolitaine', 11, 'tomate, mozzarella, basilic, anchois, ail'),
(5, 'boisson', 'eau', 1, 'bouteille 1L'),
(6, 'boisson', 'coca', 3, 'canette, 33cl'),
(7, 'boisson', 'bière', 4, 'canette, 33cl'),
(8, 'boisson', 'champagne', 7, '1 flute'),
(9, 'dessert', 'tiramisu', 5, 'recette secrète'),
(10, 'dessert', 'glace', 4, 'tradition italienne'),
(11, 'dessert', 'fruit', 2, 'frais'),
(12, 'dessert', 'yaourt', 3, 'nature sans sucre'),
(13, 'boisson', 'tropico', 2, 'canette, 33cl'),
(14, 'plat', 'pizza savoyarde', 13, 'crème fraiche, reblochon, pomme de terre, oignon, lardon'),
(18, 'boisson', 'orangina', 4, 'canette, 33cl'),
(19, '', '', 0, ''),
(21, '', '', 0, ''),
(22, '', '', 0, ''),
(23, 'dessert', 'cookie', 3, 'du boulanger du coin'),
(24, '', '', 0, ''),
(25, '', '', 0, ''),
(26, '', '', 0, ''),
(27, '', '', 0, ''),
(28, '', '', 0, ''),
(29, '', '', 0, ''),
(30, '', '', 0, ''),
(32, '', '', 0, ''),
(33, 'plat', 'pizza campagnarde', 11, ''),
(35, '', '', 0, ''),
(36, '', '', 0, ''),
(37, '', '', 0, ''),
(38, '', '', 0, ''),
(39, '', '', 0, ''),
(40, '', '', 0, ''),
(41, '', '', 0, ''),
(42, '', '', 0, ''),
(43, '', '', 0, ''),
(44, '', '', 0, ''),
(45, '', '', 0, ''),
(46, '', '', 0, ''),
(47, '', '', 0, ''),
(48, '', '', 0, ''),
(49, '', '', 0, ''),
(50, '', '', 0, ''),
(51, '', '', 0, '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
