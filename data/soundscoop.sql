-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : sam. 11 nov. 2023 à 15:51
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
(1, 'Nouvelle guitare par Gibson', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Euismod in pellentesque massa placerat duis ultricies lacus. Vel turpis nunc eget lorem dolor sed. Suspendisse faucibus interdum posuere lorem ipsum dolor sit amet. In massa tempor nec feugiat nisl pretium fusce. Auctor eu augue ut lectus arcu.', '2023-10-26', 1, 'https://www.cortguitars.com/_DATA/editor/2203/dbf796aa2576a284e4f3063ac9fa7fdb_1647839581_0505.jpg'),
(2, 'Interview de AC/DC', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Euismod in pellentesque massa placerat duis ultricies lacus. Vel turpis nunc eget lorem dolor sed. Suspendisse faucibus interdum posuere lorem ipsum dolor sit amet. In massa tempor nec feugiat nisl pretium fusce. Auctor eu augue ut lectus arcu.', '2023-10-25', 1, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcTYlrBeH23WqjelknD0K6DLmNyAqrxBt8fA&usqp=CAU'),
(3, 'Queen de retour !', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Euismod in pellentesque massa placerat duis ultricies lacus.', '2023-10-19', 2, 'https://resize.elle.fr/original/var/plain_site/storage/images/loisirs/musique/news/queen-cette-bonne-nouvelle-qui-va-ravir-les-fans-de-freddie-mercury-4027803/96857529-1-fre-FR/Queen-cette-bonne-nouvelle-qui-va-ravir-les-fans-de-Freddie-Mercury.jpg'),
(5, 'Le streaming bat son plein !', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Euismod in pellentesque massa placerat duis ultricies lacus. Vel turpis nunc eget lorem dolor sed. Suspendisse faucibus interdum posuere lorem ipsum dolor sit amet. In massa tempor nec feugiat nisl pretium fusce. Auctor eu augue ut lectus arcu.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Euismod in pellentesque massa placerat duis ultricies lacus. Vel turpis nunc eget lorem dolor sed. Suspendisse faucibus interdum posuere lorem ipsum dolor sit amet. In massa tempor nec feugiat nisl pretium fusce. Auctor eu augue ut lectus arcu.', '2023-10-15', 2, 'https://cdn.statcdn.com/Infographic/images/normal/22309.jpeg'),
(6, 'Nouveau single de Kungs', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet porttitor eget dolor morbi. Gravida in fermentum et sollicitudin ac orci phasellus egestas tellus. Dui ut ornare lectus sit amet est placerat in. Hendrerit gravida rutrum quisque non tellus. Quis lectus nulla at volutpat diam ut venenatis. Sollicitudin nibh sit amet commodo nulla facilisi nullam vehicula. Vulputate eu scelerisque felis imperdiet proin fermentum leo vel. Vestibulum sed arcu non odio euismod lacinia. Eu turpis egestas pretium aenean. Dolor sit amet consectetur adipiscing elit. Nibh cras pulvinar mattis nunc. Nec feugiat in fermentum posuere.\r\n\r\nNunc sed velit dignissim sodales ut. Tellus in metus vulputate eu scelerisque felis imperdiet proin. Et ultrices neque ornare aenean. Ut ornare lectus sit amet est placerat. Id volutpat lacus laoreet non curabitur. Quam quisque id diam vel quam. Enim sed faucibus turpis in eu mi. Malesuada fames ac turpis egestas maecenas pharetra convallis posuere morbi. Eros in cursus turpis massa tincidunt dui ut. Elementum nibh tellus molestie nunc.\r\n\r\nAliquet lectus proin nibh nisl. Convallis convallis tellus id interdum velit. Ultrices sagittis orci a scelerisque. Sem viverra aliquet eget sit amet. Tristique magna sit amet purus gravida quis blandit turpis cursus. Aliquam id diam maecenas ultricies mi eget. Sed odio morbi quis commodo odio aenean sed adipiscing. Sodales ut eu sem integer vitae justo. Porta lorem mollis aliquam ut porttitor leo a. Cursus euismod quis viverra nibh cras pulvinar mattis. Nam at lectus urna duis convallis convallis tellus id interdum. Nibh praesent tristique magna sit amet purus. Bibendum neque egestas congue quisque egestas diam. Mi sit amet mauris commodo quis. Quis viverra nibh cras pulvinar mattis nunc sed blandit libero. Nunc non blandit massa enim nec dui nunc mattis enim. Amet venenatis urna cursus eget. Nunc congue nisi vitae suscipit tellus mauris a diam. Arcu cursus euismod quis viverra nibh cras pulvinar mattis nunc.', '2023-11-03', 1, 'https://static.fnac-static.com/multimedia/Images/FR/NR/24/16/d5/13964836/1540-1/tsp20220217165235/Club-Azur-Exclusivite-Fnac-Vinyle-Blanc.jpg'),
(7, 'Buy Jupiter fait trembler la scène du SYLAK Open Air Festival', 'Buy Jupiter : Les Titans du Metal\r\n\r\nExplorez la genèse de Buy Jupiter en tant que groupe de metal. Parlez des sous-genres qu\'ils explorent, de l\'évolution de leur style et des caractéristiques qui définissent leur son unique.\r\nSYLAK Open Air Festival : Le Rendez-vous Annuel des Métalleux\r\n\r\nDonnez un aperçu du SYLAK Open Air festival en tant que terrain de jeu idéal pour les groupes de metal. Soulignez l\'importance du festival dans la scène metal et ses efforts pour promouvoir la diversité du genre.\r\nL\'Attente Fébrile Avant le Déchaînement\r\n\r\nDécrivez l\'anticipation grandissante avant la performance de Buy Jupiter au SYLAK Open Air festival. Mettez en lumière les attentes des fans de metal, les préparatifs du groupe et l\'excitation qui entoure un événement aussi massif.\r\nLa Furie sur Scène\r\n\r\nDécrivez en détail la performance de Buy Jupiter au festival. Parlez de l\'intensité de leur présence sur scène, des riffs de guitare déchirants, de la puissance des percussions, et de la manière dont ils ont captivé le public.\r\nLa Fureur des Fans\r\n\r\nExplorez la réaction passionnée des fans de metal à la prestation de Buy Jupiter. Incluez des témoignages de fans, des vidéos du public en délire et des moments mémorables où la symbiose entre le groupe et ses supporters était à son comble.\r\nLes Coulisses du Chaos\r\n\r\nPartagez des moments en coulisses, des anecdotes, et des rituels pré-spectacle qui ont contribué à créer l\'atmosphère explosive de la performance de Buy Jupiter.\r\nConclusion\r\n\r\nRésumez l\'impact de Buy Jupiter au SYLAK Open Air festival sur la scène metal. Discutez de la façon dont cette performance pourrait influencer l\'avenir du groupe et son statut dans le monde du metal.\r\nSources et Ressources\r\n\r\nAjoutez des liens vers les plateformes de musique du groupe, des photos de la performance, des interviews, et tout autre contenu pertinent pour renforcer votre article.\r\n\r\nN\'oubliez pas de maintenir une tonalité vibrante et passionnée tout au long de l\'article pour refléter l\'énergie du metal et de la performance de Buy Jupiter au festival.', '2023-11-11', 2, 'https://photolive69.fr/wp-content/uploads/2023/10/2023-08-05-sylak-031-ok.jpg'),
(8, 'L\'album de Coldplay est un carton !', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pulvinar mattis nunc sed blandit. Dui id ornare arcu odio ut sem nulla pharetra. Pharetra sit amet aliquam id. Adipiscing elit pellentesque habitant morbi tristique senectus et. A diam maecenas sed enim ut sem viverra aliquet eget. Porta non pulvinar neque laoreet suspendisse interdum. Viverra tellus in hac habitasse platea dictumst vestibulum rhoncus. Etiam tempor orci eu lobortis elementum nibh tellus. Diam ut venenatis tellus in metus vulputate eu. Pharetra diam sit amet nisl suscipit adipiscing bibendum est ultricies. Cursus turpis massa tincidunt dui. Arcu dictum varius duis at. Urna id volutpat lacus laoreet non curabitur gravida arcu. Arcu odio ut sem nulla pharetra diam sit amet. Orci eu lobortis elementum nibh tellus molestie nunc non. Non odio euismod lacinia at quis risus sed vulputate odio. Pellentesque massa placerat duis ultricies.\r\n\r\nFringilla phasellus faucibus scelerisque eleifend. Augue interdum velit euismod in pellentesque massa placerat duis. Varius morbi enim nunc faucibus a. Nunc mattis enim ut tellus elementum sagittis vitae et. Rhoncus dolor purus non enim. Eget mauris pharetra et ultrices neque ornare aenean euismod elementum. Eu non diam phasellus vestibulum. Nisi quis eleifend quam adipiscing vitae proin sagittis nisl rhoncus. Arcu non odio euismod lacinia at quis risus sed vulputate. Urna molestie at elementum eu facilisis sed odio. In est ante in nibh mauris cursus. Proin libero nunc consequat interdum varius sit. Magna fermentum iaculis eu non diam.\r\n\r\nTristique et egestas quis ipsum. Rhoncus est pellentesque elit ullamcorper dignissim cras. Felis eget velit aliquet sagittis. Lorem mollis aliquam ut porttitor leo a diam sollicitudin. Pellentesque sit amet porttitor eget dolor morbi non. Ultricies tristique nulla aliquet enim tortor at. Erat nam at lectus urna duis convallis convallis tellus. Ultricies leo integer malesuada nunc vel risus. Varius duis at consectetur lorem donec. Tempus imperdiet nulla malesuada pellentesque elit eget. Pulvinar neque laoreet suspendisse interdum consectetur libero id faucibus nisl. Ac tincidunt vitae semper quis lectus nulla. Lobortis mattis aliquam faucibus purus in. Eu lobortis elementum nibh tellus.\r\n\r\nOdio euismod lacinia at quis risus sed. Mauris in aliquam sem fringilla ut morbi tincidunt augue interdum. Facilisis sed odio morbi quis commodo. Lacus vel facilisis volutpat est velit egestas dui id. Elementum tempus egestas sed sed risus pretium quam vulputate dignissim. Nunc consequat interdum varius sit amet mattis vulputate enim. Cras ornare arcu dui vivamus arcu felis bibendum. Amet dictum sit amet justo donec. Hac habitasse platea dictumst quisque sagittis purus sit amet volutpat. Luctus accumsan tortor posuere ac ut consequat semper viverra. Lectus quam id leo in vitae turpis massa sed elementum. Dis parturient montes nascetur ridiculus mus. Elementum tempus egestas sed sed risus pretium quam. Sed adipiscing diam donec adipiscing tristique risus nec feugiat.', '2023-10-11', 2, 'https://i.ebayimg.com/images/g/k08AAOSwz6Rk2yPn/s-l1200.webp');

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
(5, 11, 7),
(7, 14, 8);

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
(3, 4, 2),
(4, 1, 1),
(5, 5, 5),
(6, 2, 6),
(7, 2, 7),
(8, 5, 8);

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
(20, 'Guns N\' Roses', NULL, 'USA', '2015-10-06', 2);

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
(1, 'Damien', 'damien@gmail.com', '$2y$10$FvDY9g4bHHtqCHi9qIxYueCVB8RMQSuKpK4g9XZ0s38QAx7Oj5eC.'),
(2, 'Lucas', 'lucas@gmail.com', '$2y$10$zO/OEBdADHXNQKbLEQPSiO94VXlyqwvaf3GA./hWxBDLCFhIP4.na');

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
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `article_artist`
--
ALTER TABLE `article_artist`
  MODIFY `id_article_artist` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `article_categorie`
--
ALTER TABLE `article_categorie`
  MODIFY `id_article_categorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
