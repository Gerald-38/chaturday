-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 23 juil. 2020 à 15:39
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `chatgn`
--

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `name`, `message`) VALUES
(1, 'Gérald', 'Très sympa ce chat'),
(2, 'Shakira', 'Oh oui ! c\'est trop beau ! je me demande quel codeur de fou a créé ce chat mais c\'est simplement un génie !'),
(3, 'Gérald', 'Oui je pense qu\'il a un talent absolument fabuleux et un esprit supérieur'),
(4, 'Shakira', 'Et je suis sure qu\'il est beau tel un apollon transpirant dans l\'effort de la création'),
(5, 'Gérald', 'Sans aucun doute'),
(6, 'Gérald', 'Il est fantastique'),
(7, 'Gérald', 'Je crois que cela fonctionne parfaitement'),
(8, 'Shakira', 'Oh je crois qu\'il est sur la chat room !'),
(9, 'Shakira', 'Bonjour à toi O, créateur vénéré'),
(10, 'Gérald', 'Oui j\'avoue c\'est moi. ça y est, les masques tombent'),
(11, 'Shakira', 'Je me prosterne devant toi, être lumineux'),
(12, 'Gérald', 'Tu as raison mon enfant'),
(13, 'Shakira', 'C\'est vrai ça'),
(14, 'Gérald', 'Voyons ce qu\'il se passe quand on sort du cadre'),
(15, 'Shakira', 'On ne peut plus sortir du cadre le nombre de message affichés est à présent limité à 12'),
(16, 'Gérald', 'Finement observé');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
