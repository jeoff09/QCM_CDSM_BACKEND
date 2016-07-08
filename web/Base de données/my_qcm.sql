-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 08 Juillet 2016 à 14:16
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `my_qcm`
--

-- --------------------------------------------------------

--
-- Structure de la table `answer`
--

CREATE TABLE IF NOT EXISTS `answer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) NOT NULL,
  `ans` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_true` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_DADD4A2584261EAA` (`ans`),
  KEY `IDX_DADD4A251E27F6BF` (`question_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=79 ;

--
-- Contenu de la table `answer`
--

INSERT INTO `answer` (`id`, `question_id`, `ans`, `is_true`, `created_at`, `updated_at`) VALUES
(3, 5, 'RRRRRRRRRRRRRRRR', 1, '2016-03-15 00:00:00', '2016-03-15 00:00:00'),
(4, 5, 'TTTTTTTTTTTTTTTTTTTTTTT', 0, '2016-03-15 00:00:00', '2016-03-15 00:00:00'),
(10, 7, 'answer 3', 1, '2016-03-16 00:00:00', '2016-03-12 00:00:00'),
(11, 7, 'answer 4', 0, '2016-03-24 00:00:00', '2016-03-24 00:00:00'),
(12, 8, 'bntrntntrnr', 1, '2016-03-28 18:01:31', '2016-03-28 18:01:31'),
(13, 8, 'hgnhgnhgnnh', 0, '2016-03-28 18:02:06', '2016-03-28 18:02:06'),
(14, 10, 'rfrr', 1, '2016-07-01 14:18:21', '2016-07-01 14:18:21'),
(15, 10, 'vdf', 1, '2016-07-01 14:18:33', '2016-07-01 14:18:33'),
(16, 11, 'zzzzzz', 0, '2016-07-01 14:18:46', '2016-07-01 14:18:46'),
(17, 9, 'ggggg', 1, '2016-07-01 14:18:59', '2016-07-01 14:18:59'),
(19, 5, '+849', 0, '2016-07-01 14:40:05', '2016-07-01 14:40:05'),
(20, 17, 'Un malware très puisssant.', 0, '2016-07-07 14:20:54', '2016-07-07 14:20:54'),
(21, 17, 'Un envoi d''une grande quantité de messages à un destinataire unique dans une intention malveillante.', 1, '2016-07-07 14:21:05', '2016-07-07 14:21:05'),
(22, 17, 'Un envoi d''une grande quantité de messages à plusieurs destinataires dans le but de passer des PPT amusants', 0, '2016-07-07 14:21:20', '2016-07-07 14:21:20'),
(23, 18, 'Une propriété sur un disque dur.', 0, '2016-07-07 14:21:37', '2016-07-07 14:21:37'),
(24, 18, 'Un ensemble d''adresses faisant l''objet d''une gestion commune.', 1, '2016-07-07 14:21:51', '2016-07-07 14:21:51'),
(25, 18, 'Un réseau informatique privé.', 0, '2016-07-07 14:22:09', '2016-07-07 14:22:09'),
(26, 19, 'Une méthode associant un courriel et l''imitation d''un site réel à des fins crapuleuses.', 1, '2016-07-07 14:22:30', '2016-07-07 14:22:30'),
(27, 19, 'Une technique pour trouver des nouveaux clients.', 0, '2016-07-07 14:22:41', '2016-07-07 14:22:41'),
(28, 19, 'Une méthode de filiation entre des sites partenaires.', 0, '2016-07-07 14:22:54', '2016-07-07 14:22:54'),
(29, 20, 'Internet Postal', 0, '2016-07-07 14:23:07', '2016-07-07 14:23:07'),
(30, 20, 'Internet Protocol', 1, '2016-07-07 14:23:24', '2016-07-07 14:23:24'),
(31, 20, 'Internet Pratique', 0, '2016-07-07 14:23:36', '2016-07-07 14:23:36'),
(32, 21, 'HyperText Transfer Protocol', 1, '2016-07-07 14:23:51', '2016-07-07 14:23:51'),
(33, 21, 'HyperTransfert Text Protocol', 0, '2016-07-07 14:24:07', '2016-07-07 14:24:07'),
(34, 21, 'HyperTranslate Text Protocol', 0, '2016-07-07 14:24:23', '2016-07-07 14:24:23'),
(35, 22, 'Really Simple Syndication', 1, '2016-07-07 14:24:35', '2016-07-07 14:24:35'),
(36, 22, 'Real Sophistiqued Syndication', 0, '2016-07-07 14:24:48', '2016-07-07 14:24:48'),
(37, 22, 'Rolling Syndication Simple', 0, '2016-07-07 14:24:58', '2016-07-07 14:24:58'),
(38, 23, 'Un ensemble de données binaires correspondant à un poids virtuel.', 0, '2016-07-07 14:25:12', '2016-07-07 14:25:12'),
(39, 23, 'Une unité de mesures informatiques créée avec Internet.', 0, '2016-07-07 14:25:21', '2016-07-07 14:25:21'),
(40, 23, 'Un ensemble ordonné de huit éléments binaires traités comme un tout.', 0, '2016-07-07 14:25:32', '2016-07-07 14:25:32'),
(41, 24, 'Web log', 1, '2016-07-07 14:25:50', '2016-07-07 14:25:50'),
(42, 24, 'Web mailing', 0, '2016-07-07 14:26:06', '2016-07-07 14:26:06'),
(43, 24, 'Logging forum', 0, '2016-07-07 14:26:17', '2016-07-07 14:26:17'),
(44, 25, 'Syndicat Pourriel arobase mailing', 0, '2016-07-07 14:26:28', '2016-07-07 14:26:28'),
(45, 25, 'Des comiques des Monty Python', 1, '2016-07-07 14:26:43', '2016-07-07 14:26:43'),
(46, 25, 'Des ''SPA'' : les instituts de massage connus pour les arnaques', 0, '2016-07-07 14:26:54', '2016-07-07 14:26:54'),
(47, 26, 'En 1991', 1, '2016-07-07 14:27:05', '2016-07-07 14:27:05'),
(48, 26, 'En 1995', 0, '2016-07-07 14:27:15', '2016-07-07 14:27:15'),
(49, 26, 'En 1990', 0, '2016-07-07 14:27:29', '2016-07-07 14:27:29'),
(50, 27, 'Base', 0, '2016-07-07 14:34:23', '2016-07-07 14:34:23'),
(51, 27, 'Plage', 0, '2016-07-07 14:34:35', '2016-07-07 14:34:35'),
(52, 27, 'Plateforme', 1, '2016-07-07 14:34:45', '2016-07-07 14:34:45'),
(53, 28, 'Une sorte de base sur laquelle on peut rechercher des données', 1, '2016-07-07 14:35:11', '2016-07-07 14:35:11'),
(54, 28, 'Un truc payant', 0, '2016-07-07 14:35:20', '2016-07-07 14:35:20'),
(55, 29, 'Le Ouèbe', 0, '2016-07-07 14:35:31', '2016-07-07 14:37:06'),
(56, 29, 'Le Neb', 0, '2016-07-07 14:35:40', '2016-07-07 14:37:29'),
(57, 29, 'Le Web', 1, '2016-07-07 14:35:53', '2016-07-07 14:37:51'),
(58, 30, 'World Wide Webv', 1, '2016-07-07 14:38:13', '2016-07-07 14:38:13'),
(59, 30, 'C''est pas ''www'', c''est ''WWF''', 0, '2016-07-07 14:38:26', '2016-07-07 14:38:26'),
(60, 30, 'Wonder Woman Web', 0, '2016-07-07 14:38:36', '2016-07-07 14:38:36'),
(61, 31, 'Aropasse', 0, '2016-07-07 14:38:49', '2016-07-07 14:38:49'),
(62, 31, 'Arobase', 1, '2016-07-07 14:39:00', '2016-07-07 14:39:00'),
(63, 31, 'ça a un nom?', 0, '2016-07-07 14:39:09', '2016-07-07 14:39:09'),
(64, 32, '''dans''', 0, '2016-07-07 14:39:20', '2016-07-07 14:39:20'),
(65, 32, '''chez''', 1, '2016-07-07 14:39:32', '2016-07-07 14:39:32'),
(66, 32, '''içi''', 0, '2016-07-07 14:39:45', '2016-07-07 14:39:45'),
(67, 33, 'Surfer sur la vague', 0, '2016-07-07 14:39:59', '2016-07-07 14:39:59'),
(68, 33, 'Surfer sur le net', 1, '2016-07-07 14:40:11', '2016-07-07 14:40:11'),
(69, 33, 'Nager dans l''ordinateur', 0, '2016-07-07 14:40:23', '2016-07-07 14:40:23'),
(70, 34, 'Un logiciel pour écouter que du rock!', 0, '2016-07-07 14:40:34', '2016-07-07 14:40:34'),
(71, 34, 'Une base de blogs', 0, '2016-07-07 14:40:44', '2016-07-07 14:40:44'),
(72, 34, 'ça veut dire ''ciel rockeur''', 0, '2016-07-07 14:40:54', '2016-07-07 14:40:54'),
(73, 35, 'Les sites officiels de france 3 et france Ô', 0, '2016-07-07 14:41:09', '2016-07-07 14:41:09'),
(74, 35, 'Des sites pour visionner des vidéos', 1, '2016-07-07 14:41:21', '2016-07-07 14:41:21'),
(75, 35, 'C''est des chaînes radio, evidemment!', 0, '2016-07-07 14:41:32', '2016-07-07 14:41:32'),
(76, 36, '''Untermite''', 0, '2016-07-07 14:41:49', '2016-07-07 14:41:49'),
(77, 36, '''intermédiaire''', 0, '2016-07-07 14:42:06', '2016-07-07 14:42:06'),
(78, 36, '''internaute''', 1, '2016-07-07 14:44:50', '2016-07-07 14:44:50');

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_64C19C15E237E06` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Contenu de la table `category`
--

INSERT INTO `category` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Java', '2016-03-15 00:00:00', '2016-03-15 00:00:01'),
(2, 'C#', '2016-03-15 00:00:00', '2016-03-15 00:00:00'),
(3, 'Réseaux', '2016-05-09 11:41:54', '2016-05-09 11:41:54'),
(4, 'Vente', '2016-05-10 00:00:00', '2016-05-18 00:00:00'),
(5, 'Informatique General', '2016-07-07 14:06:42', '2016-07-07 14:12:14'),
(6, 'Les sites web', '2016-07-07 14:30:29', '2016-07-07 14:30:29');

-- --------------------------------------------------------

--
-- Structure de la table `fos_user`
--

CREATE TABLE IF NOT EXISTS `fos_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Contenu de la table `fos_user`
--

INSERT INTO `fos_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`, `updated_at`, `created_at`) VALUES
(1, 'jeoff09', 'jeoff09', 'jeoffrey.godart@hotmail.fr', 'jeoffrey.godart@hotmail.fr', 1, '31fue9uqs8owkw40k8s8w448s4cwcsg', 'DlHBDfDC2lnpham96wyNYrourygfL8/DtgKv+g+PR4SmBjnwaLKrxpVh+W3zWk3ySDcM2SD/FcFt0XGZRtwNBA==', '2016-03-12 09:39:40', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, '2016-06-29 11:50:50', '2016-03-12 09:36:40'),
(2, 'didier', 'didier', 'didier@hotmail.fr', 'didier@hotmail.fr', 1, 'gxh72fn4l80sso8k44oksk40gk8cg8o', 'll1YEB94LQxj7R3RXriPXrbJtbTfa+1QGB9wdBwc69B7PuiaoZ+zbYumgvMwicFSxyyGQuDhhNSVxLwmXJ3dbQ==', '2016-07-06 19:56:15', 0, 0, NULL, NULL, NULL, 'a:2:{i:0;s:10:"ROLE_ADMIN";i:1;s:16:"ROLE_SUPER_ADMIN";}', 0, NULL, '2016-07-06 19:56:15', '2016-03-13 20:18:11'),
(10, 'ypintas', 'ypintas', 'yoan.pintas@tactfactory.com', 'yoan.pintas@tactfactory.com', 1, '8ihpbghhjqko4g00cock8o00cg8soww', 'VwKDx0awOI1y5mWz6f4YiX5ejU6IkOaJ3HbFx3UCMm/nk4Cemw+n8e5/npFCGIanz1vTwfOtR18/RYoEFI2MRw==', '2016-07-08 09:11:02', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}', 0, NULL, '2016-07-08 09:11:02', '2016-07-07 13:55:25'),
(11, 'jcpetitot', 'jcpetitot', 'jc.petitot@tactfactory.com', 'jc.petitot@tactfactory.com', 1, 'mt8uitfkp9ckswsk04kc484008ws088', '3HDBOECwZoqpWoq3XmIQGHWWD+J6ayRJGqxv71LWwUUblv5N+w3mWmu2KtHIAhLakn7SWWeafvG0jisyob7LwA==', '2016-07-07 15:21:53', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}', 0, NULL, '2016-07-07 15:21:53', '2016-07-07 13:57:20'),
(12, 'data', 'data', 'jc.petot@tactfactory.com', 'jc.petot@tactfactory.com', 1, 'd55c5kswv20w8swkkgg0w8gs80kc8sk', 'EbSkHflO/S1qCOPuMp5hY9Noj1Y0tQoqICTFzScC1jz31oBmKeG0EKCW6MIQSh0tKeEHvknBewZtCtHz9QYSEQ==', NULL, 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}', 0, NULL, '2016-07-07 15:26:31', '2016-07-07 15:26:31');

-- --------------------------------------------------------

--
-- Structure de la table `fos_user_team`
--

CREATE TABLE IF NOT EXISTS `fos_user_team` (
  `user_id` int(11) NOT NULL,
  `team_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`team_id`),
  KEY `IDX_8C13A737A76ED395` (`user_id`),
  KEY `IDX_8C13A737296CD8AE` (`team_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `fos_user_team`
--

INSERT INTO `fos_user_team` (`user_id`, `team_id`) VALUES
(2, 1),
(10, 9),
(11, 9);

-- --------------------------------------------------------

--
-- Structure de la table `media`
--

CREATE TABLE IF NOT EXISTS `media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `typ_id` int(11) NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_6A2CA10C5E237E06` (`name`),
  KEY `IDX_6A2CA10C278CD074` (`typ_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `media`
--

INSERT INTO `media` (`id`, `typ_id`, `url`, `updated_at`, `created_at`, `name`) VALUES
(4, 2, 'jjj', '2016-03-23 10:10:45', '2016-03-23 10:10:45', 'jjj');

-- --------------------------------------------------------

--
-- Structure de la table `m_c_q`
--

CREATE TABLE IF NOT EXISTS `m_c_q` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_end` datetime DEFAULT NULL,
  `date_start` datetime NOT NULL,
  `duration` smallint(6) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `is_Actif` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_645E2E5D5E237E06` (`name`),
  KEY `IDX_645E2E5D12469DE2` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=25 ;

--
-- Contenu de la table `m_c_q`
--

INSERT INTO `m_c_q` (`id`, `category_id`, `name`, `date_end`, `date_start`, `duration`, `created_at`, `updated_at`, `is_Actif`) VALUES
(1, 1, 'Examen 2', NULL, '2016-03-16 00:00:00', 1, '2016-03-15 00:00:00', '2016-07-04 20:52:10', 1),
(18, 1, 'Java n°2', '2017-03-15 00:00:00', '2016-03-15 00:00:00', 80, '2016-03-15 00:00:00', '2016-07-05 21:04:15', 0),
(19, 2, 'DEFEF', NULL, '2011-01-01 00:00:00', 34, '2016-05-24 22:10:18', '2016-05-24 22:10:18', 1),
(20, 3, 'Calcule des IP', NULL, '2011-01-01 00:00:00', 85, '2016-07-01 14:00:56', '2016-07-01 14:00:56', 1),
(22, 4, 'Test', NULL, '2011-01-01 00:00:00', 55, '2016-07-05 21:26:05', '2016-07-05 21:26:05', 1),
(23, 5, 'Culture generale informatique', NULL, '2016-01-01 00:00:00', 30, '2016-07-07 14:14:42', '2016-07-07 14:14:42', 1),
(24, 6, 'Les sites web', NULL, '2016-01-01 00:00:00', 25, '2016-07-07 14:31:13', '2016-07-07 14:31:46', 1);

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `media_id` int(11) DEFAULT NULL,
  `mcq_id` int(11) NOT NULL,
  `que` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_B6F7494EEA9FDD75` (`media_id`),
  KEY `IDX_B6F7494E91B96B61` (`mcq_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=37 ;

--
-- Contenu de la table `question`
--

INSERT INTO `question` (`id`, `media_id`, `mcq_id`, `que`, `updated_at`, `created_at`) VALUES
(5, NULL, 1, 'R', '2016-03-15 00:00:00', '2016-03-15 00:00:00'),
(7, 4, 1, 'question 2', '2016-03-09 00:00:00', '2016-03-24 00:00:00'),
(8, NULL, 1, 'bijour commenr aezvre eqhzr', '2016-03-28 17:58:45', '2016-03-28 17:58:45'),
(9, NULL, 18, 'TEST 2', '2016-06-10 00:00:00', '2016-06-01 00:00:00'),
(10, NULL, 19, 'Test des questions', '2016-07-01 14:16:45', '2016-07-01 14:16:45'),
(11, NULL, 19, 'Test 2', '2016-07-01 14:17:45', '2016-07-01 14:16:58'),
(12, NULL, 1, 'test 3', '2016-07-01 14:17:10', '2016-07-01 14:17:10'),
(14, NULL, 1, 'gfgfgfg', '2016-07-01 14:38:35', '2016-07-01 14:38:35'),
(15, NULL, 22, 'fff', '2016-07-05 21:30:52', '2016-07-05 21:30:52'),
(16, NULL, 22, 'ggg', '2016-07-05 21:31:02', '2016-07-05 21:31:02'),
(17, NULL, 23, 'Un bombardement c''est :', '2016-07-07 14:15:39', '2016-07-07 14:15:39'),
(18, NULL, 23, 'Un domaine c''est :', '2016-07-07 14:15:57', '2016-07-07 14:15:57'),
(19, NULL, 23, 'Le filoutage c''est :', '2016-07-07 14:16:21', '2016-07-07 14:16:21'),
(20, NULL, 23, 'Une adresse Ip est le numéro qui identifie chaque ordinateur connecté à internet mais cela signifie :', '2016-07-07 14:17:07', '2016-07-07 14:17:07'),
(21, NULL, 23, 'HTTP est un est un protocole de communication client-serveur développé pour le World Wide Web mais ça signifie :', '2016-07-07 14:17:32', '2016-07-07 14:17:32'),
(22, NULL, 23, 'Le format « RSS » permet ainsi de décrire de façon synthétique le contenu d''un site web, mais cela signifie :', '2016-07-07 14:17:52', '2016-07-07 14:17:52'),
(23, NULL, 23, 'Un octet c''est :', '2016-07-07 14:18:06', '2016-07-07 14:18:06'),
(24, NULL, 23, 'Un blog ou blogue est un site web constitué par la réunion de billets écrits dans l''ordre chronologique, et classés la plupart du temps par ordre antéchronologique, mais cela vient de :', '2016-07-07 14:19:05', '2016-07-07 14:18:14'),
(25, NULL, 23, 'Le spam désigne une communication électronique, non sollicitée par les destinataires, expédiée en masse à des fins publicitaires ou malhonnêtes, mais en fait l''origine de ce mot vient de :', '2016-07-07 14:18:29', '2016-07-07 14:18:29'),
(26, NULL, 23, 'Linux, ou GNU/Linux, est un système d''exploitation compatible POSIX. Linux est basé sur le noyau Unix. Mais en quelle année a-t-il été créé ?', '2016-07-07 14:19:27', '2016-07-07 14:18:49'),
(27, NULL, 24, 'Pour créer son blog on va sur une ... de blogs', '2016-07-07 14:32:33', '2016-07-07 14:32:33'),
(28, NULL, 24, 'Un moteur de recherche, c''est...', '2016-07-07 14:32:47', '2016-07-07 14:32:47'),
(29, NULL, 24, 'Pour qualifier Internet, on dit ''la toile'' mais aussi :', '2016-07-07 14:32:58', '2016-07-07 14:32:58'),
(30, NULL, 24, '''www'' veut dire :', '2016-07-07 14:33:06', '2016-07-07 14:33:06'),
(31, NULL, 24, 'Le signe ''@'' se dit:', '2016-07-07 14:33:15', '2016-07-07 14:33:15'),
(32, NULL, 24, 'Que signifie ''@'' ?', '2016-07-07 14:33:24', '2016-07-07 14:33:24'),
(33, NULL, 24, 'Pour dire qu''on est sur Internet, on peut dire :', '2016-07-07 14:33:31', '2016-07-07 14:33:31'),
(34, NULL, 24, 'Skyrock, c''est quoi?', '2016-07-07 14:33:41', '2016-07-07 14:33:41'),
(35, NULL, 24, 'Et youtube, Dailymotion ...?', '2016-07-07 14:33:50', '2016-07-07 14:33:50'),
(36, NULL, 24, 'On dit , un ....', '2016-07-07 14:33:58', '2016-07-07 14:33:58');

-- --------------------------------------------------------

--
-- Structure de la table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mcq_id` int(11) NOT NULL,
  `usr_id` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `is_completed` tinyint(1) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_136AC11391B96B61` (`mcq_id`),
  KEY `IDX_136AC113C69D3FB` (`usr_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=59 ;

--
-- Contenu de la table `result`
--

INSERT INTO `result` (`id`, `mcq_id`, `usr_id`, `score`, `is_completed`, `updated_at`, `created_at`) VALUES
(39, 23, 10, 5, 1, '2016-07-07 14:56:01', '2016-07-07 14:56:01'),
(40, 24, 10, 8, 1, '2016-07-07 14:58:28', '2016-07-07 14:58:28'),
(41, 24, 10, 1, 1, '2016-07-07 15:01:54', '2016-07-07 15:01:54'),
(42, 1, 10, 2, 1, '2016-07-07 15:02:23', '2016-07-07 15:02:23'),
(43, 1, 10, 3, 1, '2016-07-07 15:02:52', '2016-07-07 15:02:52'),
(44, 24, 10, 6, 1, '2016-07-07 15:03:56', '2016-07-07 15:03:56'),
(45, 24, 10, 1, 1, '2016-07-07 15:06:08', '2016-07-07 15:06:08'),
(46, 24, 10, 1, 1, '2016-07-07 15:30:59', '2016-07-07 15:30:59'),
(47, 1, 2, 5, 1, '2016-07-07 17:03:53', '2016-07-07 17:03:53'),
(48, 22, 2, 2, 1, '2016-07-07 17:04:46', '2016-07-07 17:04:46'),
(49, 1, 2, 2, 1, '2016-07-07 20:51:37', '2016-07-07 20:51:37'),
(50, 1, 2, 3, 1, '2016-07-07 21:06:21', '2016-07-07 21:06:21'),
(51, 23, 10, 1, 1, '2016-07-07 21:16:12', '2016-07-07 21:16:12'),
(52, 24, 10, 0, 1, '2016-07-07 21:17:55', '2016-07-07 21:17:55'),
(53, 23, 10, 1, 1, '2016-07-07 21:18:28', '2016-07-07 21:18:28'),
(54, 23, 10, 1, 1, '2016-07-07 21:33:01', '2016-07-07 21:33:01'),
(55, 23, 10, 9, 1, '2016-07-07 21:49:49', '2016-07-07 21:49:49'),
(56, 23, 10, 0, 1, '2016-07-07 22:54:19', '2016-07-07 22:54:19'),
(57, 23, 11, 1, 1, '2016-07-08 09:26:07', '2016-07-08 09:26:07'),
(58, 23, 10, 6, 1, '2016-07-08 11:38:30', '2016-07-08 11:38:30');

-- --------------------------------------------------------

--
-- Structure de la table `team`
--

CREATE TABLE IF NOT EXISTS `team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_C4E0A61F5E237E06` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Contenu de la table `team`
--

INSERT INTO `team` (`id`, `updated_at`, `created_at`, `name`) VALUES
(1, '2016-03-13 00:00:00', '2016-03-13 00:00:00', 'CDSM'),
(2, '2016-03-13 00:00:00', '2016-03-13 00:00:00', 'BTSE2B'),
(3, '2016-03-23 16:20:10', '2016-03-23 16:20:10', 'BTSE1B'),
(6, '2016-03-23 16:22:01', '2016-03-23 16:22:01', 'Error'),
(7, '2016-05-12 11:21:58', '2016-05-12 11:21:58', 'BTES2EF'),
(8, '2016-05-17 13:48:34', '2016-05-17 13:48:34', 'fere'),
(9, '2016-07-07 14:46:27', '2016-07-07 14:00:43', 'Formateur');

-- --------------------------------------------------------

--
-- Structure de la table `team_mcq`
--

CREATE TABLE IF NOT EXISTS `team_mcq` (
  `team_id` int(11) NOT NULL,
  `mcq_id` int(11) NOT NULL,
  PRIMARY KEY (`team_id`,`mcq_id`),
  KEY `IDX_8C0F720B296CD8AE` (`team_id`),
  KEY `IDX_8C0F720B91B96B61` (`mcq_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `team_mcq`
--

INSERT INTO `team_mcq` (`team_id`, `mcq_id`) VALUES
(1, 1),
(1, 18),
(1, 19),
(9, 23),
(9, 24);

-- --------------------------------------------------------

--
-- Structure de la table `typ`
--

CREATE TABLE IF NOT EXISTS `typ` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_241AA1D5E237E06` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Contenu de la table `typ`
--

INSERT INTO `typ` (`id`, `name`, `updated_at`, `created_at`) VALUES
(2, 'vid', '2016-03-22 16:30:20', '2016-03-13 00:00:00'),
(3, 'geg', '2016-03-23 09:54:20', '2016-03-22 16:11:28'),
(4, 'Idiot', '2016-03-22 16:16:12', '2016-03-22 16:16:12'),
(5, 'Image', '2016-03-22 16:18:26', '2016-03-22 16:18:26');

-- --------------------------------------------------------

--
-- Structure de la table `user_mcq`
--

CREATE TABLE IF NOT EXISTS `user_mcq` (
  `user_id` int(11) NOT NULL,
  `mcq_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`mcq_id`),
  KEY `IDX_3D8A9924A76ED395` (`user_id`),
  KEY `IDX_3D8A992491B96B61` (`mcq_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `user_mcq`
--

INSERT INTO `user_mcq` (`user_id`, `mcq_id`) VALUES
(1, 1),
(1, 18),
(1, 19),
(1, 20),
(2, 18),
(2, 22),
(10, 23),
(11, 23);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `answer`
--
ALTER TABLE `answer`
  ADD CONSTRAINT `FK_DADD4A251E27F6BF` FOREIGN KEY (`question_id`) REFERENCES `question` (`id`);

--
-- Contraintes pour la table `fos_user_team`
--
ALTER TABLE `fos_user_team`
  ADD CONSTRAINT `FK_8C13A737296CD8AE` FOREIGN KEY (`team_id`) REFERENCES `team` (`id`),
  ADD CONSTRAINT `FK_8C13A737A76ED395` FOREIGN KEY (`user_id`) REFERENCES `fos_user` (`id`);

--
-- Contraintes pour la table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `FK_6A2CA10C278CD074` FOREIGN KEY (`typ_id`) REFERENCES `typ` (`id`);

--
-- Contraintes pour la table `m_c_q`
--
ALTER TABLE `m_c_q`
  ADD CONSTRAINT `FK_645E2E5D12469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Contraintes pour la table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `FK_B6F7494E91B96B61` FOREIGN KEY (`mcq_id`) REFERENCES `m_c_q` (`id`),
  ADD CONSTRAINT `FK_B6F7494EEA9FDD75` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`);

--
-- Contraintes pour la table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `FK_136AC11391B96B61` FOREIGN KEY (`mcq_id`) REFERENCES `m_c_q` (`id`),
  ADD CONSTRAINT `FK_136AC113C69D3FB` FOREIGN KEY (`usr_id`) REFERENCES `fos_user` (`id`);

--
-- Contraintes pour la table `team_mcq`
--
ALTER TABLE `team_mcq`
  ADD CONSTRAINT `FK_8C0F720B296CD8AE` FOREIGN KEY (`team_id`) REFERENCES `team` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_8C0F720B91B96B61` FOREIGN KEY (`mcq_id`) REFERENCES `m_c_q` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `user_mcq`
--
ALTER TABLE `user_mcq`
  ADD CONSTRAINT `FK_3D8A992491B96B61` FOREIGN KEY (`mcq_id`) REFERENCES `m_c_q` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_3D8A9924A76ED395` FOREIGN KEY (`user_id`) REFERENCES `fos_user` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
