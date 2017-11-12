-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Dim 12 Novembre 2017 à 14:56
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `becode_exo`
--

-- --------------------------------------------------------

--
-- Structure de la table `my_news`
--

CREATE TABLE `my_news` (
  `ID` int(11) NOT NULL,
  `title` text COLLATE utf8_bin NOT NULL,
  `content` longtext COLLATE utf8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `my_news`
--

INSERT INTO `my_news` (`ID`, `title`, `content`, `date`) VALUES
(1, 'Premier test', '<p>Ceci est la première news du blogroll.</p>\r\n<p>Si vous la voyez, c\'est que vous vous êtes correctement connecté ! </p>', '2017-11-07 11:09:27'),
(2, 'Bienvenue', '<p>Bienvenue sur mon blogroll.</p>', '2017-11-07 12:05:15'),
(3, 'Mon commit du jour', '<p>Aujourd\'hui, j\'ai <b>achevé le système d\'inscription et de connexion</b> au blogroll !</p>J\'ai eu l\'aide de Kev Somao pour tester mes exceptions. Je vais sûrement avancer encore un peu, mais plus tard.</p>', '2017-11-08 10:43:49'),
(6, 'Deuxième news de la journée :)', '<p>Ceci est ma news, et <b>je l\'aime</b>.</p>', '2017-11-10 15:03:31'),
(5, 'Petite update de la journée', '<p>Désormais, je peux écrire mes propres news directement via le web !</p>', '2017-11-10 14:50:31'),
(7, 'News illustrée', '<p>Voici une image dans une news !</p>\r\n<img src="https://i.imgur.com/zY3FeMx.png" alt="img" />', '2017-11-10 15:06:21'),
(8, 'News d\'exemple', '<p>Pour montrer à <b>Steve</b> ! </p>', '2017-11-10 15:26:22');

-- --------------------------------------------------------

--
-- Structure de la table `my_users`
--

CREATE TABLE `my_users` (
  `ID` int(11) NOT NULL,
  `username` text COLLATE utf8_bin NOT NULL,
  `mail` text COLLATE utf8_bin NOT NULL,
  `pass` text COLLATE utf8_bin NOT NULL,
  `auth` int(11) NOT NULL DEFAULT '0',
  `joindate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `my_users`
--

INSERT INTO `my_users` (`ID`, `username`, `mail`, `pass`, `auth`, `joindate`) VALUES
(1, 'axel', 'ax.fiolle@gmail.com', '4183b9f5ed14b64d012ce1e728cfa1e7afc399cb82b6729b222784db6b1a50a7', 1, '2017-11-08 10:44:10'),
(2, 'admin', 'ax.fiolle@gmail.com', '37bd45d638c2d11c49c641d2e9c4f49f406caf3ee282743e0c800aa1ed68e2ee', 3, '2017-11-08 10:53:43'),
(3, 'anda', 'ax.fiolle@gmail.com', '34a16967e4ecf1607892e53ce0fdfd9b158a007181a1e038021b31a1bea039ed', 0, '2017-11-10 14:13:42'),
(4, 'omar', 'omar@gmail.com', '1af581d4ba714d0b2549d894b4d0ba0d3ffa4cfad3c995e86990f126630324d5', 0, '2017-11-10 15:02:30'),
(5, 'steve', 'steve@mail.be', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', 0, '2017-11-10 15:23:15');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `my_news`
--
ALTER TABLE `my_news`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `my_users`
--
ALTER TABLE `my_users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `my_news`
--
ALTER TABLE `my_news`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `my_users`
--
ALTER TABLE `my_users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
