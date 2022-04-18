-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 18 avr. 2022 à 20:02
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `php_tuto`
--

-- --------------------------------------------------------

--
-- Structure de la table `answear`
--

CREATE TABLE `answear` (
  `id` int(11) NOT NULL,
  `id_autor` int(11) NOT NULL,
  `pesudo_auto` varchar(255) NOT NULL,
  `id_question` int(11) NOT NULL,
  `answear` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `answear`
--

INSERT INTO `answear` (`id`, `id_autor`, `pesudo_auto`, `id_question`, `answear`) VALUES
(1, 25, 'user', 22, 'dfdf'),
(2, 25, 'user', 22, 'yuyu'),
(3, 25, 'user', 28, 'bon reponse'),
(4, 25, 'user', 22, 'bien reponse'),
(5, 8, 'admin', 29, 'thank you '),
(6, 8, 'admin', 28, 'rtrtr'),
(7, 8, 'admin', 29, 'trrt'),
(8, 8, 'admin', 29, 'trrt'),
(9, 8, 'admin', 30, 'bon repose'),
(10, 8, 'admin', 28, 'uyruytue'),
(11, 8, 'admin', 32, 'rtrtrtrtr'),
(12, 8, 'admin', 32, 'rtrtrtrtr'),
(13, 8, 'admin', 32, 'rtrtrtrtr'),
(14, 8, 'admin', 32, 'rtrtrtrtr'),
(15, 8, 'admin', 32, 'rtrtrtrtr'),
(16, 8, 'admin', 32, 'rtrtrtrtr'),
(17, 8, 'admin', 32, 'rtrtrtrtr'),
(18, 8, 'admin', 32, 'rtrtrtrtr'),
(19, 8, 'admin', 31, 'bon reposte'),
(20, 25, 'user', 31, 'yes it\'s ok'),
(21, 25, 'user', 33, 'rgregrhgihreghfihdsi'),
(22, 25, 'user', 33, 'rgoruiuri\r\n'),
(23, 25, 'user', 31, 'uuyu'),
(24, 25, 'user', 32, 'trtt'),
(25, 28, 'user1', 28, 'your answer'),
(26, 28, 'user1', 32, 'answer');

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `titel` varchar(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `id_autor` int(11) NOT NULL,
  `pesudo_autor` varchar(255) NOT NULL,
  `date_publication` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `questions`
--

INSERT INTO `questions` (`id`, `titel`, `question`, `description`, `id_autor`, `pesudo_autor`, `date_publication`) VALUES
(22, 'Titer de question ', 'Question ???', 'Description !!! ', 25, 'user', '12/09/21'),
(28, 'Titer de question ', 'Question ??', 'Description de question  !!! ', 25, 'user', '15/09/21'),
(29, 'Titer de question ', 'Questions ???', 'Description de question !! ', 25, 'user', '15/09/21'),
(30, 'Titer de question ', 'question ???', 'description de question !! ', 8, 'admin', '15/09/21'),
(32, 'Titer de question ', 'Question ??', 'Description !! ', 8, 'admin', '16/09/21'),
(33, 'Titer de question ', 'Question ??', 'Description de question !!! ', 25, 'user', '16/09/21');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `pesudo` varchar(255) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `pesudo`, `nome`, `prenom`, `password`) VALUES
(3, 'bilal', 'bilal', 'mannouti', '$2y$10$OnfNEgfQbdX4Wl3Exc6BvOwPUzig31F5aaFoIofoILnjuFysLbKRu'),
(4, 'test', 'yassin', 'yassin', '$2y$10$Ol8AXTn65NlXNC3QdjVXnu2p6VYtiCvXts.P4P9WzGY4.zbxotFEq'),
(8, 'admin', 'admin', 'admin', '$2y$10$7rBr.oPZ25iFatxzqkGyk.kvfAIcyqS2Q/5iQiCaT4QE8iYteKcCu'),
(20, 'aa', 'aa', 'aa', '$2y$10$wV6hpwtT.r5OcCnlKj68sukVxnIXuXTrDmAmbD5KqIyILHOqjauNa'),
(21, 'vvc', 'vvc', 'vvc', '$2y$10$66qgkyEqRFsFm9ZaQ80ybOxbIfPnsB5KO1kizodJRY7QqWvDPY7JO'),
(22, 'uyu', 'uyuy', 'tth', '$2y$10$F8mSPdWLOjUl/uCKlWGvH.N2Ty5AYV/2vZxR02h7JjfiPflXmm9Iy'),
(23, 'uyrrrr', 'uyuy', 'tth', '$2y$10$G6AOZwyyWQDi.ZgjMGT5w.8Gu9oRMjG0l/rssnwqNUlDjWTEMc6va'),
(24, 'lklkl', 'uyuy', 'tth', '$2y$10$zFKnnT27jntNpFNVMuKBFOP73bcD8007qvru6FnJdI4QjEl0ueq4y'),
(25, 'user', 'user', 'user', '$2y$10$4v4V.YoU/b4Q5pWj7ywNc.LtWtMxw8BKZBJ7eHyse9fsct2iLGeUC'),
(26, 'ee', 'ee', 'ee', '$2y$10$hu3lJzsqB/3m84JTKd.2K.hfo4jTfpYss6RBtL9pZ/YyWYG45AmvK'),
(27, 'zz', 'zz', 'zz', '$2y$10$yRZsDcABe1JCMPFz9Zsu1u7aMvWnVsbleZXqcZvFJ42VUsycmZ.tm'),
(28, 'user1', 'user1', 'user1', '$2y$10$YIUXTLBkiKk6m.B3Dz3iuu/XdRxRj9gbMSB.MaV.b8rG/f6QjggUS');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `answear`
--
ALTER TABLE `answear`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `answear`
--
ALTER TABLE `answear`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
