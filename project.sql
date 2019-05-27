-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 25 mai 2019 à 11:27
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `portfolio_elo`
--

-- --------------------------------------------------------

--
-- Structure de la table `project`
--

DROP TABLE IF EXISTS `project`;
CREATE TABLE IF NOT EXISTS `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name1` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `introduction` text NOT NULL,
  `description` varchar(600) NOT NULL,
  `category` varchar(50) NOT NULL,
  `lien` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `project`
--

INSERT INTO `project` (`id`, `name1`, `title`, `introduction`, `description`, `category`, `lien`) VALUES
(1, 'dog', 'Dog', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean blandit erat sed dui gravida, ac elementum odio porttitor. Duis semper vel purus a dapibus. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean blandit erat sed dui gravida, ac elementum odio porttitor. Duis semper vel purus a dapibus. Praesent iaculis, elit a luctus ultricies, augue arcu varius justo, eget commodo ante eros ultrices enim. In bibendum eros condimentum nunc elementum rutrum. Nam eget dapibus ligula. Donec id est ut velit laoreet blandit vitae eget nisl. Donec tristique ornare egestas. Ut in posuere magna, nec iaculis tortor. Duis vitae est magna. In vestibulum neque quis consectetur pretium.', 'design', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
