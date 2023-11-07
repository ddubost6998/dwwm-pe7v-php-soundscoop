-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : lun. 06 nov. 2023 à 08:13
-- Version du serveur : 5.7.39
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `soundscoop`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id_article` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `content` text NOT NULL,
  `issue_date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `url_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_article`, `title`, `content`, `issue_date`, `user_id`, `url_img`) VALUES
(1, 'Nouveau produits', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Euismod in pellentesque massa placerat duis ultricies lacus. Vel turpis nunc eget lorem dolor sed. Suspendisse faucibus interdum posuere lorem ipsum dolor sit amet. In massa tempor nec feugiat nisl pretium fusce. Auctor eu augue ut lectus arcu.', '2023-10-26', 1, NULL),
(2, 'Interview de AC/DC', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Euismod in pellentesque massa placerat duis ultricies lacus. Vel turpis nunc eget lorem dolor sed. Suspendisse faucibus interdum posuere lorem ipsum dolor sit amet. In massa tempor nec feugiat nisl pretium fusce. Auctor eu augue ut lectus arcu.', '2023-10-25', 1, NULL),
(3, 'Queen de retour !', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Euismod in pellentesque massa placerat duis ultricies lacus.', '2023-10-19', 2, NULL),
(4, 'Un bon nouvel album de Coldplay', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Euismod in pellentesque massa placerat duis ultricies lacus. Vel turpis nunc eget lorem dolor sed. Suspendisse faucibus interdum posuere lorem ipsum dolor sit amet. In massa tempor nec feugiat nisl pretium fusce.', '2023-10-06', 2, NULL),
(5, 'Le streaming bat son plein', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Euismod in pellentesque massa placerat duis ultricies lacus. Vel turpis nunc eget lorem dolor sed. Suspendisse faucibus interdum posuere lorem ipsum dolor sit amet. In massa tempor nec feugiat nisl pretium fusce. Auctor eu augue ut lectus arcu.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Euismod in pellentesque massa placerat duis ultricies lacus. Vel turpis nunc eget lorem dolor sed. Suspendisse faucibus interdum posuere lorem ipsum dolor sit amet. In massa tempor nec feugiat nisl pretium fusce. Auctor eu augue ut lectus arcu.', '2023-10-15', 2, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `article_artist`
--

CREATE TABLE `article_artist` (
  `id_article_artist` int(11) NOT NULL,
  `artist_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article_artist`
--

INSERT INTO `article_artist` (`id_article_artist`, `artist_id`, `article_id`) VALUES
(1, 12, 2),
(2, 13, 3),
(3, 11, 5),
(4, 14, 4);

-- --------------------------------------------------------

--
-- Structure de la table `article_categorie`
--

CREATE TABLE `article_categorie` (
  `id_article_categorie` int(11) NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article_categorie`
--

INSERT INTO `article_categorie` (`id_article_categorie`, `categorie_id`, `article_id`) VALUES
(1, 2, 3),
(2, 3, 4),
(3, 4, 2),
(4, 1, 1),
(5, 5, 5);

-- --------------------------------------------------------

--
-- Structure de la table `artist`
--

CREATE TABLE `artist` (
  `id_artist` int(11) NOT NULL,
  `name_artist` varchar(250) NOT NULL,
  `url_img` varchar(250) DEFAULT NULL,
  `country` varchar(250) NOT NULL,
  `date_creation` date NOT NULL,
  `style_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `artist`
--

INSERT INTO `artist` (`id_artist`, `name_artist`, `url_img`, `country`, `date_creation`, `style_id`) VALUES
(11, 'Buy Jupiter', NULL, 'France', '2020-06-05', 1),
(12, 'AC/DC', NULL, 'USA', '2014-11-11', 2),
(13, 'Queen', NULL, 'United Kingdom', '2013-06-11', 2),
(14, 'Coldplay', NULL, 'United Kingdom', '2017-10-10', 3),
(15, 'Jazz Harmony Quartet', NULL, 'Allemagne', '2014-10-01', 6),
(16, 'David Guetta', NULL, 'France', '2013-03-05', 5),
(17, 'Eminem', NULL, 'USA', '2018-10-02', 7),
(18, 'Kungs', NULL, 'France', '2017-04-14', 4),
(19, 'Chopin', NULL, 'Pologne', '2016-01-13', 8),
(20, 'Guns N\', 'Roses', NULL, 'USA', '2015-10-06', 2);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_categorie` int(11) NOT NULL,
  `name_categorie` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `name_categorie`) VALUES
(2, 'Artistes'),
(3, 'Critiques'),
(4, 'Interview'),
(1, 'Produits'),
(5, 'Statistiques');

-- --------------------------------------------------------

--
-- Structure de la table `style`
--

CREATE TABLE `style` (
  `id_style` int(11) NOT NULL,
  `name_style` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `style`
--

INSERT INTO `style` (`id_style`, `name_style`) VALUES
(1, 'Metal'),
(2, 'Rock'),
(3, 'Pop'),
(4, 'House'),
(5, 'EDM'),
(6, 'Jazz'),
(7, 'R&B'),
(8, 'Classique');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `name`, `email`, `password`) VALUES
(1, 'Damien', 'damien@gmail.com', 'test'),
(2, 'Lucas', 'lucas@gmail.com', 'test');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `article_artist`
--
ALTER TABLE `article_artist`
  ADD PRIMARY KEY (`id_article_artist`),
  ADD KEY `article_id` (`article_id`),
  ADD KEY `artist_id` (`artist_id`);

--
-- Index pour la table `article_categorie`
--
ALTER TABLE `article_categorie`
  ADD PRIMARY KEY (`id_article_categorie`),
  ADD KEY `article_id` (`article_id`),
  ADD KEY `categorie_id` (`categorie_id`);

--
-- Index pour la table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`id_artist`),
  ADD UNIQUE KEY `name_artist` (`name_artist`),
  ADD KEY `style_id` (`style_id`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_categorie`),
  ADD UNIQUE KEY `name_categorie` (`name_categorie`);

--
-- Index pour la table `style`
--
ALTER TABLE `style`
  ADD PRIMARY KEY (`id_style`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `article_artist`
--
ALTER TABLE `article_artist`
  MODIFY `id_article_artist` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `article_categorie`
--
ALTER TABLE `article_categorie`
  MODIFY `id_article_categorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `artist`
--
ALTER TABLE `artist`
  MODIFY `id_artist` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_categorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `style`
--
ALTER TABLE `style`
  MODIFY `id_style` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`);

--
-- Contraintes pour la table `article_artist`
--
ALTER TABLE `article_artist`
  ADD CONSTRAINT `article_artist_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `article` (`id_article`),
  ADD CONSTRAINT `article_artist_ibfk_2` FOREIGN KEY (`artist_id`) REFERENCES `artist` (`id_artist`);

--
-- Contraintes pour la table `article_categorie`
--
ALTER TABLE `article_categorie`
  ADD CONSTRAINT `article_categorie_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `article` (`id_article`),
  ADD CONSTRAINT `article_categorie_ibfk_2` FOREIGN KEY (`categorie_id`) REFERENCES `categorie` (`id_categorie`);

--
-- Contraintes pour la table `artist`
--
ALTER TABLE `artist`
  ADD CONSTRAINT `artist_ibfk_1` FOREIGN KEY (`style_id`) REFERENCES `style` (`id_style`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
