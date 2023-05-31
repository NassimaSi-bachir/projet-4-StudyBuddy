-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mer. 31 mai 2023 à 15:43
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
-- Base de données : `projet-4`
--

-- --------------------------------------------------------

--
-- Structure de la table `author`
--

CREATE TABLE `author` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `biography` longtext COLLATE utf8mb4_unicode_ci,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pseudo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `author`
--

INSERT INTO `author` (`id`, `name`, `surname`, `biography`, `image_name`, `slug`, `pseudo`, `updated_at`) VALUES
(15, 'Isabelle', 'Filliozat', 'Isabelle Filliozat est la fille du psychologue Rémy Filliozat, cofondateur de l\'Institut français d\'analyse transactionnelle1 et d\'Anne-Marie Filliozat-Cosson, psychologue et psychanalyste, qui a travaillé à l\'hôpital Necker auprès d\'enfants atteints de mucoviscidose. Ses parents ont développé en 1980 le stage de formation « Je dis non à la maladie, je dis oui à ses messages » et créé la formation de conseiller en santé holistique.', 'isabelle-filliozat.jpg', 'isabelle-filliozat', NULL, NULL),
(16, 'Remi', 'Brissiaud', 'Après une maîtrise de mathématiques obtenue en 1972 à l\'université Paris-VII, il commence sa carrière professionnelle comme professeur certifié de mathématiques au lycée technique d\'État Jean-Jaurès à Argenteuil. En 1976, il est nommé professeur de mathématiques à l\'École normale d\'instituteurs du Val-d’Oise qui devient ultérieurement un centre rattaché à l\'IUFM de Versailles.', 'remi-brissiaud.png', 'remi-brissiaud', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `image_name`, `updated_at`) VALUES
(63, 'Arts', 'arts', 'arts.png', NULL),
(64, 'Français', 'francais', 'francais.png', NULL),
(65, 'Géographie', 'geographie', 'geographie.png', NULL),
(66, 'Histoire', 'histoire', 'histoire.png', NULL),
(67, 'Langues vivantes', 'langues-vivantes', 'langues.png', NULL),
(68, 'Mathématiques', 'mathematiques', 'maths.png', NULL),
(69, 'Musique', 'musique', 'musique.png', NULL),
(70, 'Sciences', 'sciences', 'sciences.png', NULL),
(71, 'Sport', 'sport', 'sport.png', NULL),
(72, 'Technologie', 'technologie', 'techno.png', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20230524152436', '2023-05-25 17:35:05', 100),
('DoctrineMigrations\\Version20230531123859', '2023-05-31 12:51:08', 23),
('DoctrineMigrations\\Version20230531125303', '2023-05-31 12:53:08', 152),
('DoctrineMigrations\\Version20230531130151', '2023-05-31 15:17:11', 13),
('DoctrineMigrations\\Version20230531135616', '2023-05-31 13:56:28', 24),
('DoctrineMigrations\\Version20230531143932', '2023-05-31 15:17:11', 45),
('DoctrineMigrations\\Version20230531151654', '2023-05-31 15:17:11', 37);

-- --------------------------------------------------------

--
-- Structure de la table `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `headers` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)',
  `date` date DEFAULT NULL,
  `favoris` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_verified` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`, `name`, `surname`, `image_name`, `slug`, `updated_at`, `date`, `favoris`, `is_verified`) VALUES
(1, 'nassima.siba@gmail.com', '[\"ROLE_USER\", \"ROLE_ADMIN\"]', '$2y$13$II3rzETJRNcDzK7xNalv6uJnWEkAfxCxM1zCmEHaGxPjzmuPqEy3G', 'nassima', 'siba', NULL, 'nassima_siba', NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Structure de la table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `view_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` int(11) DEFAULT NULL,
  `video_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)',
  `creation_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `video`
--

INSERT INTO `video` (`id`, `view_id`, `title`, `description`, `image_name`, `slug`, `duration`, `video_name`, `updated_at`, `creation_date`) VALUES
(3, NULL, 'Education positive : pratiques', 'Un Groupe De Jeunes Dans La Discussion D\'un Projet De Groupe', 'lecture.jpg', 'education-positive-video', NULL, 'education-positive-video.mp4', NULL, NULL),
(4, NULL, 'Mathématiques : apprendre les divisions', 'Un élève Résolvant Une équation Mathématique Sur Le Tableau Noir', 'mathematiques.jpeg', 'mathematique-video', NULL, 'mathematique-brissiaud.mp4', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `video_author`
--

CREATE TABLE `video_author` (
  `video_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `video_author`
--

INSERT INTO `video_author` (`video_id`, `author_id`) VALUES
(3, 15),
(4, 16);

-- --------------------------------------------------------

--
-- Structure de la table `video_category`
--

CREATE TABLE `video_category` (
  `video_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `video_category`
--

INSERT INTO `video_category` (`video_id`, `category_id`) VALUES
(3, 67),
(4, 68);

-- --------------------------------------------------------

--
-- Structure de la table `view`
--

CREATE TABLE `view` (
  `id` int(11) NOT NULL,
  `state` tinyint(1) NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `view`
--

INSERT INTO `view` (`id`, `state`, `slug`, `view_date`) VALUES
(2, 1, 'video-vu', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- Index pour la table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_7CC7DA2C31518C7` (`view_id`);

--
-- Index pour la table `video_author`
--
ALTER TABLE `video_author`
  ADD PRIMARY KEY (`video_id`,`author_id`),
  ADD KEY `IDX_85F8780529C1004E` (`video_id`),
  ADD KEY `IDX_85F87805F675F31B` (`author_id`);

--
-- Index pour la table `video_category`
--
ALTER TABLE `video_category`
  ADD PRIMARY KEY (`video_id`,`category_id`),
  ADD KEY `IDX_AECE2B7D29C1004E` (`video_id`),
  ADD KEY `IDX_AECE2B7D12469DE2` (`category_id`);

--
-- Index pour la table `view`
--
ALTER TABLE `view`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `author`
--
ALTER TABLE `author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `view`
--
ALTER TABLE `view`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `video`
--
ALTER TABLE `video`
  ADD CONSTRAINT `FK_7CC7DA2C31518C7` FOREIGN KEY (`view_id`) REFERENCES `view` (`id`);

--
-- Contraintes pour la table `video_author`
--
ALTER TABLE `video_author`
  ADD CONSTRAINT `FK_85F8780529C1004E` FOREIGN KEY (`video_id`) REFERENCES `video` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_85F87805F675F31B` FOREIGN KEY (`author_id`) REFERENCES `author` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `video_category`
--
ALTER TABLE `video_category`
  ADD CONSTRAINT `FK_AECE2B7D12469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_AECE2B7D29C1004E` FOREIGN KEY (`video_id`) REFERENCES `video` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
