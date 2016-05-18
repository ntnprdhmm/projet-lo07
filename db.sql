SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE IF NOT EXISTS `auteurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `publication_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `categories` (
  `slug` varchar(20) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  PRIMARY KEY (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `categories` (`slug`, `fullname`) VALUES
('AP', 'Autre Production'),
('BV', 'Brevet'),
('CF', 'Article dans des Conférences Françaises'),
('CI', 'Article dans des Conférences Internationales'),
('OS', 'Ouvrage Scientifique'),
('RF', 'Article dans des Revues Françaises'),
('RI', 'Article dans des Revues Internationales'),
('TD', 'Thèse de Doctorat');

CREATE TABLE IF NOT EXISTS `equipes` (
  `slug` varchar(50) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  PRIMARY KEY (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `equipes` (`slug`, `fullname`) VALUES
('CREIDD', 'Centre de Recherches et d''Etudes Interdisciplinaires sur le Développement Durable'),
('ERA', 'Environnement de Réseaux Autonomes'),
('GAMMA3', 'Génération Automatique de Maillage et Méthodes Avancées'),
('LASMIS', 'Systèmes Mécaniques et Ingénierie Simultanée'),
('LM2S', 'Modélisation et Sûreté des Systèmes'),
('LNIO', 'Nanotechnologie et Instrumentation Optique'),
('LSIO', 'Optimisation des Systèmes Industriels'),
('Tech-CICO', 'Technologies pour la Coopération, l''Interaction et les COnnaissances dans les collectifs');

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `publication` (
  `id` int(10) unsigned NOT NULL,
  `titre` text NOT NULL,
  `reference` text NOT NULL,
  `year` int(11) NOT NULL,
  `lieu` text,
  `status` enum('soumis','en révision','publié') NOT NULL DEFAULT 'soumis',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `organisation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `equipe` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

INSERT INTO `users` (`id`, `login`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `organisation`, `equipe`) VALUES
(4, 'admin', 'Maxime', 'p@me.com', '$2y$10$1nTigAfbC2UcFjtG5ACqvuP1h51HusBHrnd7kdy2v0sP4cWa2aoKq', NULL, '2016-05-16 22:50:09', '2016-05-16 22:50:09', 'UTT', 'lol');
