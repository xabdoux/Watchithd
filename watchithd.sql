-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 27 Juillet 2016 à 22:42
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `watchithd`
--

-- --------------------------------------------------------

--
-- Structure de la table `actors`
--

CREATE TABLE IF NOT EXISTS `actors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `actor_name1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dist_name1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `actor_name2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dist_name2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `actor_name3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dist_name3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `actor_name4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dist_name4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `actor_name5` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dist_name5` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `movies_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=25 ;

--
-- Contenu de la table `actors`
--

INSERT INTO `actors` (`id`, `actor_name1`, `dist_name1`, `actor_name2`, `dist_name2`, `actor_name3`, `dist_name3`, `actor_name4`, `dist_name4`, `actor_name5`, `dist_name5`, `movies_id`, `created_at`, `updated_at`) VALUES
(2, 'Tim Robbins', 'Andy Dufresne', 'Morgan Freeman', 'Ellis Boyd ''Red'' Redding', 'Bob Gunton', 'Warden Norton', 'William Sadler', 'Heywood', 'Clancy Brown', 'Captain Hadley', '2', '2016-07-26 15:26:25', '2016-07-26 14:26:25'),
(3, 'Louane Emera', '', ' Karin Viard', '', 'François Damiens', '', '', '', '', '', '3', '2016-07-26 17:57:40', '2016-07-26 16:57:40'),
(4, '', '', '', '', '', '', '', '', '', '', '4', '2016-07-26 19:28:16', '2016-07-26 18:28:16'),
(5, 'Robert Downey Jr.', 'Tony Stark / Iron Man', 'Chris Hemsworth', 'Thor', 'Mark Ruffalo', 'Bruce Banner / Hulk', 'Chris Evans', 'Steve Rogers / Captain America', 'Scarlett Johansson', 'Natasha Romanoff / Black Widow', '5', '2016-07-26 23:13:04', '2016-07-26 22:13:04'),
(6, 'Jennifer Lawrence', 'Katniss Everdeen', 'Josh Hutcherson', 'Peeta Mellark', 'Liam Hemsworth', 'Gale Hawthorne', 'Woody Harrelson', 'Haymitch Abernathy', '', '', '6', '2016-07-27 00:22:45', '2016-07-26 23:22:45'),
(7, 'Chris Pratt', 'Owen', 'Bryce Dallas Howard ', 'Claire', 'Irrfan Khan ', 'Masrani', 'Vincent D''Onofrio ', 'Hoskins', 'Ty Simpkins ', 'Gray', '7', '2016-07-27 01:12:55', '2016-07-27 00:12:55'),
(8, 'Harrison Ford ', 'Han Solo', 'Mark Hamill ', 'Luke Skywalker', 'Carrie Fisher', ' Princess Leia', 'Adam Driver', ' Rey', 'John Boyega ', 'Finn', '8', '2016-07-27 01:25:36', '2016-07-27 00:25:36'),
(9, 'Sandra Bulloc ', 'Scarlet Overkill', 'Jon Hamm ', 'Herb Overkill', 'Michael Keaton ', 'Walter Nelson', 'Allison Janney ', 'Madge Nelson', 'Steve Coogan ', 'Professor Flux / Tower Guard', '9', '2016-07-27 01:36:02', '2016-07-27 00:36:02'),
(10, 'Vin Diesel ', 'Dominic Toretto', 'Paul Walker', ' Brian O''Conner', 'Jason Statham ', 'Deckard Shaw', 'Michelle Rodriguez ', 'Letty', 'Jordana Brewster', ' Mia', '10', '2016-07-27 01:46:01', '2016-07-27 00:46:01'),
(11, 'Kate Winslet', 'Jeanine', 'Jai Courtney', 'Eric', 'Mekhi Phifer', 'Max', 'Shailene Woodley', 'Tris', 'Theo James', 'Four', '11', '2016-07-27 01:54:56', '2016-07-27 00:54:56'),
(12, 'Arnold Schwarzenegger', 'Guardian', 'Jason Clarke', 'ohn Connor', 'Emilia Clarke', 'Sarah Connor', 'Jai Courtney', 'Kyle Reese', 'J.K. Simmons', 'O''Brien', '12', '2016-07-27 02:01:28', '2016-07-27 01:01:28'),
(13, 'Dakota Johnson', 'Anastasia Steele', 'Jamie Dornan', 'Christian Grey', 'Jennifer Ehle', 'Carla', '', '', 'Eloise Mumford', 'Kate', '13', '2016-07-27 02:06:48', '2016-07-27 01:06:48'),
(14, 'Mark Wahlberg', 'John', 'Seth MacFarlane', 'Ted ', 'Amanda Seyfried', 'Samantha', 'Jessica Barth', 'Tami-Lynn', 'Giovanni Ribisi', 'Donny', '14', '2016-07-27 02:11:49', '2016-07-27 01:11:49'),
(15, 'Adam Sandler', 'Dracula', 'Andy Samberg', 'Jonathan ', 'Selena Gomez', 'Mavis', 'Kevin James', 'Frankenstein', 'Steve Buscemi', 'Wayne', '15', '2016-07-27 02:23:15', '2016-07-27 01:23:15'),
(16, 'Dylan O''Brien', 'Thomas', 'Ki Hong Lee', 'Minho', 'Kaya Scodelario', '', '', '', 'Thomas Brodie-Sangster', '', '16', '2016-07-27 12:11:07', '2016-07-27 11:11:07'),
(17, 'Tom Hardy', 'Max Rockatansky', 'Charlize Theron', 'Imperator Furiosa', 'Nicholas Hoult', 'Nux', 'Hugh Keays-Byrne', 'Immortan Joe', 'Nathan Jones', '', '17', '2016-07-27 12:25:30', '2016-07-27 11:25:30'),
(18, 'Sam Rockwell', 'Eric Bowen', 'Rosemarie DeWitt', 'Amy Bowen', 'Saxon Sharbino', 'Kendra Bowen', 'Kyle Catlett', 'Griffin Bowen', 'Kennedi Clements', '', '18', '2016-07-27 13:09:29', '2016-07-27 12:09:29'),
(19, 'George Clooney', 'Frank Walker', 'Hugh Laurie', 'Nix', 'Britt Robertson', 'Casey Newton', 'Raffey Cassidy', 'Athena', 'Tim McGraw', '', '19', '2016-07-27 13:33:57', '2016-07-27 12:33:57'),
(20, 'Tom Cruise', 'Ethan Hunt', 'Jeremy Renner', 'William Brandt ', 'Simon Pegg', 'Benji Dunn', 'Rebecca Ferguson', 'Ilsa Faust', 'Ving Rhames', 'Luther Stickell', '20', '2016-07-27 14:22:26', '2016-07-27 13:22:26'),
(21, 'Cate Blanchett', 'Stepmother', 'Lily James', 'Cinderella', 'Richard Madden', 'Prince', 'Helena Bonham', 'Fairy Godmother', 'Nonso Anozie', 'Captain', '21', '2016-07-27 16:08:36', '2016-07-27 15:08:36'),
(22, 'Miles Teller', 'Reed Richards', 'Michael B. Jordan', 'Johnny Storm', 'Kate Mara', 'Sue Storm', 'Jamie Bell', 'Ben Grimm / The Thing', 'Toby Kebbell', 'Victor Von Doom / Dr. Doom', '22', '2016-07-27 16:23:03', '2016-07-27 15:23:03'),
(23, 'Jeff Bridges', 'Master Gregory', 'Ben Barnes', 'Tom Ward', 'Julianne Moore', 'Mother Malkin', 'licia Vikander', 'Alice', 'Antje Traue', 'Bony Lizzie', '23', '2016-07-27 16:30:45', '2016-07-27 15:30:45'),
(24, 'Ed Skrein', 'Frank Martin', 'Ray Stevenson', 'Frank Senior', 'Loan Chabanol', 'Anna', 'Gabriella Wright', 'Gina', 'Tatiana Pajkovic', 'Maria', '24', '2016-07-27 16:40:04', '2016-07-27 15:40:04');

-- --------------------------------------------------------

--
-- Structure de la table `ar_servers`
--

CREATE TABLE IF NOT EXISTS `ar_servers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ar_name1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ar_link1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ar_name2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ar_link2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ar_name3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ar_link3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ar_name4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ar_link4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ar_name5` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ar_link5` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ar_name6` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ar_link6` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `movies_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=25 ;

--
-- Contenu de la table `ar_servers`
--

INSERT INTO `ar_servers` (`id`, `ar_name1`, `ar_link1`, `ar_name2`, `ar_link2`, `ar_name3`, `ar_link3`, `ar_name4`, `ar_link4`, `ar_name5`, `ar_link5`, `ar_name6`, `ar_link6`, `movies_id`, `created_at`, `updated_at`) VALUES
(2, '', '', '', '', '', '', '', '', '', '', '', '', 2, '2016-07-26 15:26:25', '2016-07-26 14:26:25'),
(3, '', '', '', '', '', '', '', '', '', '', '', '', 3, '2016-07-26 17:03:26', '2016-07-26 16:03:26'),
(4, '', '', '', '', '', '', '', '', '', '', '', '', 4, '2016-07-26 19:28:16', '2016-07-26 18:28:16'),
(5, '', '', '', '', '', '', '', '', '', '', '', '', 5, '2016-07-26 23:13:05', '2016-07-26 22:13:05'),
(6, '', '', '', '', '', '', '', '', '', '', '', '', 6, '2016-07-27 00:22:46', '2016-07-26 23:22:46'),
(7, '', '', '', '', '', '', '', '', '', '', '', '', 7, '2016-07-27 01:12:55', '2016-07-27 00:12:55'),
(8, '', '', '', '', '', '', '', '', '', '', '', '', 8, '2016-07-27 01:25:37', '2016-07-27 00:25:37'),
(9, '', '', '', '', '', '', '', '', '', '', '', '', 9, '2016-07-27 01:36:03', '2016-07-27 00:36:03'),
(10, '', '', '', '', '', '', '', '', '', '', '', '', 10, '2016-07-27 01:46:01', '2016-07-27 00:46:01'),
(11, '', '', '', '', '', '', '', '', '', '', '', '', 11, '2016-07-27 01:54:56', '2016-07-27 00:54:56'),
(12, '', '', '', '', '', '', '', '', '', '', '', '', 12, '2016-07-27 02:01:28', '2016-07-27 01:01:28'),
(13, '', '', '', '', '', '', '', '', '', '', '', '', 13, '2016-07-27 02:06:49', '2016-07-27 01:06:49'),
(14, '', '', '', '', '', '', '', '', '', '', '', '', 14, '2016-07-27 02:11:49', '2016-07-27 01:11:49'),
(15, '', '', '', '', '', '', '', '', '', '', '', '', 15, '2016-07-27 02:23:15', '2016-07-27 01:23:15'),
(16, '', '', '', '', '', '', '', '', '', '', '', '', 16, '2016-07-27 12:11:08', '2016-07-27 11:11:08'),
(17, '', '', '', '', '', '', '', '', '', '', '', '', 17, '2016-07-27 12:25:30', '2016-07-27 11:25:30'),
(18, '', '', '', '', '', '', '', '', '', '', '', '', 18, '2016-07-27 13:09:29', '2016-07-27 12:09:29'),
(19, '', '', '', '', '', '', '', '', '', '', '', '', 19, '2016-07-27 13:33:57', '2016-07-27 12:33:57'),
(20, '', '', '', '', '', '', '', '', '', '', '', '', 20, '2016-07-27 14:22:26', '2016-07-27 13:22:26'),
(21, '', '', '', '', '', '', '', '', '', '', '', '', 21, '2016-07-27 16:08:37', '2016-07-27 15:08:37'),
(22, '', '', '', '', '', '', '', '', '', '', '', '', 22, '2016-07-27 16:23:03', '2016-07-27 15:23:03'),
(23, '', '', '', '', '', '', '', '', '', '', '', '', 23, '2016-07-27 16:30:46', '2016-07-27 15:30:46'),
(24, '', '', '', '', '', '', '', '', '', '', '', '', 24, '2016-07-27 16:40:05', '2016-07-27 15:40:05');

-- --------------------------------------------------------

--
-- Structure de la table `en_servers`
--

CREATE TABLE IF NOT EXISTS `en_servers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `en_name1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `en_link1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `en_name2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `en_link2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `en_name3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `en_link3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `en_name4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `en_link4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `en_name5` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `en_link5` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `en_name6` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `en_link6` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `movies_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=25 ;

--
-- Contenu de la table `en_servers`
--

INSERT INTO `en_servers` (`id`, `en_name1`, `en_link1`, `en_name2`, `en_link2`, `en_name3`, `en_link3`, `en_name4`, `en_link4`, `en_name5`, `en_link5`, `en_name6`, `en_link6`, `movies_id`, `created_at`, `updated_at`) VALUES
(2, 'Thevideos', 'http://thevideos.tv/embed-dmxojpnjwmxx-728x410.html', '', '', '', '', '', '', '', '', '', '', 2, '2016-07-26 15:26:25', '2016-07-26 14:26:25'),
(3, '', '', '', '', '', '', '', '', '', '', '', '', 3, '2016-07-26 17:03:26', '2016-07-26 16:03:26'),
(4, '', '', '', '', '', '', '', '', '', '', '', '', 4, '2016-07-26 19:28:16', '2016-07-26 18:28:16'),
(5, 'Server 1', 'http://goo.gl/oO3cF6', '', '', '', '', '', '', '', '', '', '', 5, '2016-07-27 00:08:15', '2016-07-26 23:08:15'),
(6, 'Server 1', 'http://uptostream.com/iframe/ye92ejlnl7z5', '', '', '', '', '', '', '', '', '', '', 6, '2016-07-27 00:30:15', '2016-07-26 23:30:15'),
(7, 'Nowvideo', 'http://embed.nowvideo.sx/embed.php?v=0e169e0722782', '', '', '', '', '', '', '', '', '', '', 7, '2016-07-27 01:12:56', '2016-07-27 00:12:56'),
(8, '', '', '', '', '', '', '', '', '', '', '', '', 8, '2016-07-27 01:38:15', '2016-07-27 00:38:15'),
(9, '', '', '', '', '', '', '', '', '', '', '', '', 9, '2016-07-27 01:36:03', '2016-07-27 00:36:03'),
(10, 'Nowvideo', 'http://embed.nowvideo.sx/embed.php?v=5937cd02dc0d3', '', '', '', '', '', '', '', '', '', '', 10, '2016-07-27 01:46:01', '2016-07-27 00:46:01'),
(11, '', '', '', '', '', '', '', '', '', '', '', '', 11, '2016-07-27 01:54:56', '2016-07-27 00:54:56'),
(12, 'Nowvideo', 'http://embed.nowvideo.sx/embed.php?v=9b669948c0d4c', '', '', '', '', '', '', '', '', '', '', 12, '2016-07-27 02:01:28', '2016-07-27 01:01:28'),
(13, '', '', '', '', '', '', '', '', '', '', '', '', 13, '2016-07-27 02:06:49', '2016-07-27 01:06:49'),
(14, '', '', '', '', '', '', '', '', '', '', '', '', 14, '2016-07-27 02:11:49', '2016-07-27 01:11:49'),
(15, '', '', '', '', '', '', '', '', '', '', '', '', 15, '2016-07-27 02:23:16', '2016-07-27 01:23:16'),
(16, 'Nowvideo', 'https://www.youtube.com/embed/-44_igsZtgU', 'GoogleDrive', 'https://www.youtube.com/embed/-44_igsZtgU', 'Mega video', 'https://www.youtube.com/embed/-44_igsZtgU', 'Tune', 'https://www.youtube.com/embed/-44_igsZtgU', '', '', '', '', 16, '2016-07-27 12:11:08', '2016-07-27 11:11:08'),
(17, '', '', '', '', '', '', '', '', '', '', '', '', 17, '2016-07-27 12:29:39', '2016-07-27 11:29:39'),
(18, '', '', '', '', '', '', '', '', '', '', '', '', 18, '2016-07-27 13:09:29', '2016-07-27 12:09:29'),
(19, '', '', '', '', '', '', '', '', '', '', '', '', 19, '2016-07-27 13:33:57', '2016-07-27 12:33:57'),
(20, '', '', '', '', '', '', '', '', '', '', '', '', 20, '2016-07-27 14:22:27', '2016-07-27 13:22:27'),
(21, 'Spruto', 'http://www.spruto.tv/iframe_embed.php?video_id=120734', 'Server 2', 'http://hqq.tv/player/embed_player.php?vid=92NNWUD9N2KS&autoplay=none&hash_from=8e690f98a8c017373fcf567426307a56', '', '', '', '', '', '', '', '', 21, '2016-07-27 16:08:37', '2016-07-27 15:08:37'),
(22, '', '', '', '', '', '', '', '', '', '', '', '', 22, '2016-07-27 16:23:03', '2016-07-27 15:23:03'),
(23, 'Openload', 'https://openload.co/embed/VezUC4MvDpE/', '', '', '', '', '', '', '', '', '', '', 23, '2016-07-27 16:30:46', '2016-07-27 15:30:46'),
(24, '', '', '', '', '', '', '', '', '', '', '', '', 24, '2016-07-27 16:40:05', '2016-07-27 15:40:05');

-- --------------------------------------------------------

--
-- Structure de la table `es_servers`
--

CREATE TABLE IF NOT EXISTS `es_servers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `es_name1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `es_link1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `es_name2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `es_link2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `es_name3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `es_link3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `es_name4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `es_link4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `es_name5` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `es_link5` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `es_name6` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `es_link6` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `movies_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=25 ;

--
-- Contenu de la table `es_servers`
--

INSERT INTO `es_servers` (`id`, `es_name1`, `es_link1`, `es_name2`, `es_link2`, `es_name3`, `es_link3`, `es_name4`, `es_link4`, `es_name5`, `es_link5`, `es_name6`, `es_link6`, `movies_id`, `created_at`, `updated_at`) VALUES
(2, '', '', '', '', '', '', '', '', '', '', '', '', 2, '2016-07-26 15:26:25', '2016-07-26 14:26:25'),
(3, '', '', '', '', '', '', '', '', '', '', '', '', 3, '2016-07-26 17:03:27', '2016-07-26 16:03:27'),
(4, '', '', '', '', '', '', '', '', '', '', '', '', 4, '2016-07-26 19:28:17', '2016-07-26 18:28:17'),
(5, '', '', '', '', '', '', '', '', '', '', '', '', 5, '2016-07-26 23:13:05', '2016-07-26 22:13:05'),
(6, '', '', '', '', '', '', '', '', '', '', '', '', 6, '2016-07-27 00:22:46', '2016-07-26 23:22:46'),
(7, '', '', '', '', '', '', '', '', '', '', '', '', 7, '2016-07-27 01:12:56', '2016-07-27 00:12:56'),
(8, '', '', '', '', '', '', '', '', '', '', '', '', 8, '2016-07-27 01:25:38', '2016-07-27 00:25:38'),
(9, '', '', '', '', '', '', '', '', '', '', '', '', 9, '2016-07-27 01:36:03', '2016-07-27 00:36:03'),
(10, '', '', '', '', '', '', '', '', '', '', '', '', 10, '2016-07-27 01:46:01', '2016-07-27 00:46:01'),
(11, '', '', '', '', '', '', '', '', '', '', '', '', 11, '2016-07-27 01:54:56', '2016-07-27 00:54:56'),
(12, '', '', '', '', '', '', '', '', '', '', '', '', 12, '2016-07-27 02:01:28', '2016-07-27 01:01:28'),
(13, '', '', '', '', '', '', '', '', '', '', '', '', 13, '2016-07-27 02:06:49', '2016-07-27 01:06:49'),
(14, '', '', '', '', '', '', '', '', '', '', '', '', 14, '2016-07-27 02:11:49', '2016-07-27 01:11:49'),
(15, '', '', '', '', '', '', '', '', '', '', '', '', 15, '2016-07-27 02:23:16', '2016-07-27 01:23:16'),
(16, '', '', '', '', '', '', '', '', '', '', '', '', 16, '2016-07-27 12:11:08', '2016-07-27 11:11:08'),
(17, '', '', '', '', '', '', '', '', '', '', '', '', 17, '2016-07-27 12:25:30', '2016-07-27 11:25:30'),
(18, '', '', '', '', '', '', '', '', '', '', '', '', 18, '2016-07-27 13:09:30', '2016-07-27 12:09:30'),
(19, '', '', '', '', '', '', '', '', '', '', '', '', 19, '2016-07-27 13:33:58', '2016-07-27 12:33:58'),
(20, '', '', '', '', '', '', '', '', '', '', '', '', 20, '2016-07-27 14:22:27', '2016-07-27 13:22:27'),
(21, '', '', '', '', '', '', '', '', '', '', '', '', 21, '2016-07-27 16:08:37', '2016-07-27 15:08:37'),
(22, '', '', '', '', '', '', '', '', '', '', '', '', 22, '2016-07-27 16:23:04', '2016-07-27 15:23:04'),
(23, '', '', '', '', '', '', '', '', '', '', '', '', 23, '2016-07-27 16:30:46', '2016-07-27 15:30:46'),
(24, '', '', '', '', '', '', '', '', '', '', '', '', 24, '2016-07-27 16:40:05', '2016-07-27 15:40:05');

-- --------------------------------------------------------

--
-- Structure de la table `fr_servers`
--

CREATE TABLE IF NOT EXISTS `fr_servers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fr_name1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fr_link1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fr_name2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fr_link2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fr_name3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fr_link3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fr_name4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fr_link4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fr_name5` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fr_link5` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fr_name6` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fr_link6` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `movies_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=25 ;

--
-- Contenu de la table `fr_servers`
--

INSERT INTO `fr_servers` (`id`, `fr_name1`, `fr_link1`, `fr_name2`, `fr_link2`, `fr_name3`, `fr_link3`, `fr_name4`, `fr_link4`, `fr_name5`, `fr_link5`, `fr_name6`, `fr_link6`, `movies_id`, `created_at`, `updated_at`) VALUES
(2, 'Server1', '/brafoz3/player.php?id=aH!BeF0cHM6Ly9waG90b3MuZ29vZ2xlLmNvbS9zaGFyZS9B!BeFjF!BeFaXBQTF94VGc1UFpGZGxwSUk0MDc4SnAzal!BeFibE5QeFNS!BeFnNlUElUQVY4eTJYSk5md3FXWTE2YUVqcUVxc0VjTDh3P2tleT1!BeFM2xUYUZaMFdYa3lVblkxUTJK!BeFE9HTllaa0ZNTWpKVVIzZG1MV3!BeFC&id2=', '', '', '', '', '', '', '', '', '', '', 2, '2016-07-26 21:09:55', '2016-07-26 20:09:55'),
(3, 'Streaming', 'https://openload.co/embed/fnXBHl5J6hw/', 'Server 2', 'http://hqq.tv/player/embed_player.php?vid=ZddT36Jj3Uk9', ' ', '', '', '', '', '', '', '', 3, '2016-07-26 18:12:44', '2016-07-26 17:12:44'),
(4, 'Server 1', 'http://goo.gl/xDyJEu', '', '', '', '', '', '', '', '', '', '', 4, '2016-07-26 19:28:17', '2016-07-26 18:28:17'),
(5, '', '', '', '', '', '', '', '', '', '', '', '', 5, '2016-07-26 23:13:05', '2016-07-26 22:13:05'),
(6, '', '', '', '', '', '', '', '', '', '', '', '', 6, '2016-07-27 00:22:47', '2016-07-26 23:22:47'),
(7, '', '', '', '', '', '', '', '', '', '', '', '', 7, '2016-07-27 01:12:56', '2016-07-27 00:12:56'),
(8, 'Server 1', 'http://uptostream.com/iframe/0nwlcgo71sff', '', '', '', '', '', '', '', '', '', '', 8, '2016-07-27 01:38:15', '2016-07-27 00:38:15'),
(9, 'streaming', 'http://goo.gl/IDkotK', '', '', '', '', '', '', '', '', '', '', 9, '2016-07-27 01:36:03', '2016-07-27 00:36:03'),
(10, '', '', '', '', '', '', '', '', '', '', '', '', 10, '2016-07-27 01:46:02', '2016-07-27 00:46:02'),
(11, 'Server 1', 'http://goo.gl/yIQgqJ', '', '', '', '', '', '', '', '', '', '', 11, '2016-07-27 01:54:57', '2016-07-27 00:54:57'),
(12, '', '', '', '', '', '', '', '', '', '', '', '', 12, '2016-07-27 02:01:29', '2016-07-27 01:01:29'),
(13, '', '', '', '', '', '', '', '', '', '', '', '', 13, '2016-07-27 02:06:49', '2016-07-27 01:06:49'),
(14, '', '', '', '', '', '', '', '', '', '', '', '', 14, '2016-07-27 02:11:49', '2016-07-27 01:11:49'),
(15, 'Openload', 'https://openload.io/embed/4pvtP3CK_MM/', '', '', '', '', '', '', '', '', '', '', 15, '2016-07-27 02:23:16', '2016-07-27 01:23:16'),
(16, '', '', '', '', '', '', '', '', '', '', '', '', 16, '2016-07-27 12:11:08', '2016-07-27 11:11:08'),
(17, 'Uptobox', 'http://goo.gl/TepFi3', '', '', '', '', '', '', '', '', '', '', 17, '2016-07-27 12:29:39', '2016-07-27 11:29:39'),
(18, 'Openload', 'https://openload.co/embed/7aaxhWy00CI/', 'Exashare', 'http://ajihezo.info/embed-4tcm3wpcr5j3-_-MUdUdVhUMkY4NVFDaWxETnUzVzBZWEIrSDhrL1J2UENXOU1rVFg4Mk5lL0VmOURhSWJRTkMweXRQY2FlRndOb3NKZlFTdmh0bGdUMApwSy9vWGh4N0ZRPT0K.html?247837657', '', '', '', '', '', '', '', '', 18, '2016-07-27 13:09:30', '2016-07-27 12:09:30'),
(19, 'Exashare', 'http://ajihezo.info/embed-h49rhyc8dwk1-_-MUdUdVhUMkY4NVFMbEUzVjVDRDBPRzVuVjhKZ1VPclNXOVprQ3lWcU02amJkWVRUZSswTkVFS2dJTTdDUTBjanFvVFlUdz09Cg==.html?307755101', '', '', '', '', '', '', '', '', '', '', 19, '2016-07-27 13:33:58', '2016-07-27 12:33:58'),
(20, 'Streaming', 'http://goo.gl/uS98sj', '', '', '', '', '', '', '', '', '', '', 20, '2016-07-27 14:22:27', '2016-07-27 13:22:27'),
(21, '', '', '', '', '', '', '', '', '', '', '', '', 21, '2016-07-27 16:08:37', '2016-07-27 15:08:37'),
(22, 'Google drive', 'https://865508acd718bfdcc95981a53b662d814b8f726f.googledrive.com/host/13vPlsY6OfyJ_rbbmkSEXOLe-eOzK81a4LQ/', 'Filmzenstream', 'http://filmzenstream.com/vid/les-4-fantastiques.html', '', '', '', '', '', '', '', '', 22, '2016-07-27 16:23:04', '2016-07-27 15:23:04'),
(23, '', '', '', '', '', '', '', '', '', '', '', '', 23, '2016-07-27 16:30:46', '2016-07-27 15:30:46'),
(24, 'Filmzenstream', 'http://filmzenstream.com/le-transporteur-4.html', '', '', '', '', '', '', '', '', '', '', 24, '2016-07-27 16:40:05', '2016-07-27 15:40:05');

-- --------------------------------------------------------

--
-- Structure de la table `genremovies`
--

CREATE TABLE IF NOT EXISTS `genremovies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `genre_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=25 ;

--
-- Contenu de la table `genremovies`
--

INSERT INTO `genremovies` (`id`, `genre_id`, `movie_id`, `created_at`, `updated_at`) VALUES
(2, 2, 2, '2016-07-26 15:26:25', '0000-00-00 00:00:00'),
(3, 3, 3, '2016-07-26 17:03:26', '0000-00-00 00:00:00'),
(4, 4, 4, '2016-07-26 19:28:16', '0000-00-00 00:00:00'),
(5, 5, 5, '2016-07-26 23:13:05', '0000-00-00 00:00:00'),
(6, 6, 6, '2016-07-27 00:22:45', '0000-00-00 00:00:00'),
(7, 7, 7, '2016-07-27 01:12:55', '0000-00-00 00:00:00'),
(8, 8, 8, '2016-07-27 01:25:37', '0000-00-00 00:00:00'),
(9, 9, 9, '2016-07-27 01:36:02', '0000-00-00 00:00:00'),
(10, 10, 10, '2016-07-27 01:46:01', '0000-00-00 00:00:00'),
(11, 11, 11, '2016-07-27 01:54:56', '0000-00-00 00:00:00'),
(12, 12, 12, '2016-07-27 02:01:28', '0000-00-00 00:00:00'),
(13, 13, 13, '2016-07-27 02:06:48', '0000-00-00 00:00:00'),
(14, 14, 14, '2016-07-27 02:11:49', '0000-00-00 00:00:00'),
(15, 15, 15, '2016-07-27 02:23:15', '0000-00-00 00:00:00'),
(16, 16, 16, '2016-07-27 12:11:07', '0000-00-00 00:00:00'),
(17, 17, 17, '2016-07-27 12:25:30', '0000-00-00 00:00:00'),
(18, 18, 18, '2016-07-27 13:09:29', '0000-00-00 00:00:00'),
(19, 19, 19, '2016-07-27 13:33:57', '0000-00-00 00:00:00'),
(20, 20, 20, '2016-07-27 14:22:26', '0000-00-00 00:00:00'),
(21, 21, 21, '2016-07-27 16:08:37', '0000-00-00 00:00:00'),
(22, 22, 22, '2016-07-27 16:23:03', '0000-00-00 00:00:00'),
(23, 23, 23, '2016-07-27 16:30:46', '0000-00-00 00:00:00'),
(24, 24, 24, '2016-07-27 16:40:05', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `genres`
--

CREATE TABLE IF NOT EXISTS `genres` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `genre_1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `genre_2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `genre_3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=25 ;

--
-- Contenu de la table `genres`
--

INSERT INTO `genres` (`id`, `genre_1`, `genre_2`, `genre_3`, `created_at`, `updated_at`) VALUES
(1, 'Action', 'Adolescents', '', '2016-07-26 13:54:25', '2016-07-26 10:27:39'),
(2, 'Crime', 'Drama', '', '2016-07-26 14:26:25', '2016-07-26 14:26:25'),
(3, 'Comedy', 'Drama', '', '2016-07-26 16:03:26', '2016-07-26 16:03:26'),
(4, 'Animation', 'Family', 'Comedy', '2016-07-26 18:28:16', '2016-07-26 18:28:16'),
(5, 'Action', 'Adventure', 'Science Fic.', '2016-07-26 22:13:05', '2016-07-26 22:13:05'),
(6, 'Adventure', 'Science Fic.', '', '2016-07-26 23:22:45', '2016-07-26 23:22:45'),
(7, 'Action', 'Adventure', 'Science Fic.', '2016-07-27 00:12:55', '2016-07-27 00:12:55'),
(8, 'Action', 'Adventure', 'Fantasy', '2016-07-27 00:25:36', '2016-07-27 00:25:36'),
(9, 'Animation', 'Comedy', 'Family', '2016-07-27 00:36:02', '2016-07-27 00:36:02'),
(10, 'Action', 'Crime', 'Thriller', '2016-07-27 00:46:01', '2016-07-27 00:46:01'),
(11, 'Adventure', 'Science Fic.', 'Thriller', '2016-07-27 00:54:56', '2016-07-27 00:54:56'),
(12, 'Action', 'Adventure', 'Science Fic.', '2016-07-27 01:01:28', '2016-07-27 01:01:28'),
(13, 'Drama', 'Romance', '', '2016-07-27 01:06:48', '2016-07-27 01:06:48'),
(14, 'Comedy', '', '', '2016-07-27 01:11:49', '2016-07-27 01:11:49'),
(15, 'Animation', 'Comedy', 'Family', '2016-07-27 01:23:15', '2016-07-27 01:23:15'),
(16, 'Action', 'Science Fic.', 'Thriller', '2016-07-27 11:11:07', '2016-07-27 11:11:07'),
(17, 'Action', 'Adventure', 'Science Fic.', '2016-07-27 11:25:30', '2016-07-27 11:25:30'),
(18, 'Terror', 'Thriller', '', '2016-07-27 12:09:29', '2016-07-27 12:09:29'),
(19, 'Action', 'Adventure', 'Family', '2016-07-27 12:33:57', '2016-07-27 12:33:57'),
(20, 'Action', 'Adventure', 'Thriller', '2016-07-27 13:22:26', '2016-07-27 13:22:26'),
(21, 'Drama', 'Fantasy', 'Romance', '2016-07-27 15:08:37', '2016-07-27 15:08:37'),
(22, 'Action', 'Adventure', 'Science Fic.', '2016-07-27 15:23:03', '2016-07-27 15:23:03'),
(23, 'Action', 'Adventure', 'Fantasy', '2016-07-27 15:30:46', '2016-07-27 15:30:46'),
(24, 'Action', 'Crime', 'Thriller', '2016-07-27 15:40:04', '2016-07-27 15:40:04');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `movies`
--

CREATE TABLE IF NOT EXISTS `movies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `language` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `director` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `producer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `runtime` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quality` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cover` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `trailer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `release_date` date NOT NULL,
  `year` int(11) NOT NULL,
  `rates_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=25 ;

--
-- Contenu de la table `movies`
--

INSERT INTO `movies` (`id`, `title`, `country`, `language`, `director`, `producer`, `runtime`, `quality`, `cover`, `trailer`, `type`, `tags`, `release_date`, `year`, `rates_id`, `created_at`, `updated_at`) VALUES
(2, 'THE SHAWSHANK REDEMPTION', 'United States', '	English', 'Frank Darabont', '	Niki Marvin', '142 minutes', 'HQ', 'public/movies-images/1469546784.jpg', 'https://www.youtube.com/embed/6hB3S9bIaco', 'PG-13', 'THE SHAWSHANK REDEMPTION,Tim Robbins, Morgan Freeman, Bob Gunton ,William Sadler, Clancy Brown, crime, drama, best movie, top movie', '1994-10-23', 1994, '2', '2016-07-26 15:38:47', '2016-07-26 14:38:47'),
(3, 'THE BÉLIER FAMILY', 'France', 'French', 'Éric Lartigau', 'Philippe Rousselet, Éric Jehelmann, Stéphanie Bermann', '105 minutes', 'HD', 'public/movies-images/1469552605.jpg', 'https://www.youtube.com/embed/y36W7P1FxJI', 'PG-13', 'THE BÉLIER FAMILY, comedy, drama, Philippe Rousselet,best movie, movies 2016, top movies', '2014-12-17', 2014, '3', '2016-07-26 17:03:25', '2016-07-26 16:03:25'),
(4, 'Ice Age: Collision Course', 'United States', 'English', 'Mike Thurmeier', 'Lori Forte', '94 minutes', 'LQ', 'public/movies-images/1469561295.jpg', 'https://www.youtube.com/embed/HyLquKn3Swc', 'PG-3', 'Ice Age, Collision Course,animation, 2016 movies, family, comedy', '2016-07-13', 2016, '4', '2016-07-26 19:32:50', '2016-07-26 18:32:50'),
(5, 'Avengers: Age of Ultron', 'United States', 'English', 'Joss Whedon', 'Robert Downey Jr., Chris Evans, Mark Ruffalo', '2h 21min', 'HQ', 'public/movies-images/1469574784.jpg', 'https://www.youtube.com/embed/tmeOjFno6Do', 'PG-13', 'Avengers, Age of Ultron, adventure, science, action, movies 2016, new movies', '2015-04-13', 2015, '5', '2016-07-26 23:13:04', '2016-07-26 22:13:04'),
(6, 'The Hunger Games: Mockingjay - Part 2', 'United States, Germany', 'English', 'Francis Lawrence', 'Jennifer Lawrence, Josh Hutcherson, Liam Hemsworth', '2h 17min', 'MQ', 'public/movies-images/1469578965.jpg', 'https://www.youtube.com/embed/KmYNkasYthg', 'PG-13', 'The Hunger Games: Mockingjay - Part 2, Mockingjay, Hunger Games, adventure, science fiction, Jennifer Lawrence, Josh Hutcherson, Liam Hemsworth ', '2015-11-16', 2015, '6', '2016-07-27 00:22:45', '2016-07-26 23:22:45'),
(7, 'Jurassic World', 'United States', 'English', ' Colin Trevorrow', 'Chris Pratt, Bryce Dallas Howard, Ty Simpkins', '2h 4min', 'MQ', 'public/movies-images/1469581975.jpg', 'https://www.youtube.com/embed/RFinNxS5KN4', 'PG-13', '', '2015-06-09', 2015, '7', '2016-07-27 01:12:55', '2016-07-27 00:12:55'),
(8, 'Star Wars: The Force Awakens', 'United States', 'English', '.J. Abrams', 'Daisy Ridley, John Boyega, Oscar Isaac', '2h 15min', 'MQ', 'public/movies-images/1469582736.jpg', 'https://www.youtube.com/embed/sGbxmsDFVnE', 'PG-13', 'Star Wars: The Force Awakens,  The Force Awakens, action, adventur, ', '2015-12-14', 2015, '8', '2016-07-27 01:25:36', '2016-07-27 00:25:36'),
(9, 'Minions', ' United States', 'English', 'Kyle Balda, Pierre Coffin', 'Sandra Bullock, Jon Hamm, Michael Keaton ', '1h 31min', 'MQ', 'public/movies-images/1469583362.jpg', 'https://www.youtube.com/embed/Wfql_DoHRKc', 'PG-8', 'Minions?Minions 2016 , comedy Minions , Minions family, ', '2015-07-10', 2015, '9', '2016-07-27 01:36:02', '2016-07-27 00:36:02'),
(10, 'Fast & Furious 7', 'United States', 'English', 'James Wan', 'Vin Diesel, Paul Walker, Dwayne Johnson', ' 2h 17min', 'HQ', 'public/movies-images/1469583960.jpg', 'https://www.youtube.com/embed/Skpu5HaVkOc', 'PG-13', 'Fast & Furious 7, cars , fast, furious, action, 2015 movies , speed,Vin Diesel, Paul Walker', '2015-03-16', 2015, '10', '2016-07-27 01:46:00', '2016-07-27 00:46:00'),
(11, 'Insurgent', 'United States', 'English', 'Robert Schwentke', 'Shailene Woodley, Ansel Elgort, Theo James', '1h 59min', 'HQ', 'public/movies-images/1469584495.jpg', 'https://www.youtube.com/embed/suZcGoRLXkU', 'PG-13', 'Insurgent, adventure, science fiction, movies 2016 , new movies', '2015-03-16', 2015, '11', '2016-07-27 01:54:56', '2016-07-27 00:54:55'),
(12, 'Terminator Genisys', 'United States', 'English', 'Alan Taylor', 'Arnold Schwarzenegger, Jason Clarke, Emilia Clarke', '2h 6min', 'HQ', 'public/movies-images/1469584888.JPG', 'https://www.youtube.com/embed/62E4FJTwSuc', 'PG-12', 'Terminator Genisys, action, adventure, science fiction , new films 2015 , new movies', '2015-07-01', 2015, '12', '2016-07-27 02:01:28', '2016-07-27 01:01:28'),
(13, 'Fifty Shades of Grey', 'United States', 'English', ' Sam Taylor-Johnson', ' Dakota Johnson, Jamie Dornan, Jennifer Ehle', ' 2h 5min', 'HQ', 'public/movies-images/1469585208.jpg', 'https://www.youtube.com/embed/SfZWFDs0LxA', 'PG-12', 'Fifty Shades of Grey,love, remance , new 2016,', '0205-02-09', 2015, '13', '2016-07-27 02:06:48', '2016-07-27 01:06:48'),
(14, 'Ted 2', 'United States', 'English', 'Seth MacFarlane', 'Mark Wahlberg, Seth MacFarlane, Amanda Seyfried', '1h 55min', 'HQ', 'public/movies-images/1469585508.jpg', 'https://www.youtube.com/embed/XnT-h5jJl6g', 'PG-8', 'Ted 2, comedy films, comedy movies, new movie comedy 2016', '2015-06-26', 2015, '14', '2016-07-27 02:11:48', '2016-07-27 01:11:48'),
(15, 'Hotel Transylvania 2', 'United States', 'English', 'Genndy Tartakovsky', 'Adam Sandler, Andy Samberg, Selena Gomez', '1h 29min', 'HQ', 'public/movies-images/1469586195.jpg', 'https://www.youtube.com/embed/T3nqmGgnJe8', 'PG-3', 'Hotel Transylvania 2, animation movie 2015 , animation comedy, new movies animation', '2015-09-25', 2015, '15', '2016-07-27 02:23:15', '2016-07-27 01:23:15'),
(16, 'Maze Runner: The Scorch Trials', 'United States', 'English', 'Wes Ball', 'Dylan O''Brien, Kaya Scodelario, Thomas Brodie-Sangster', '2h 12min', 'HQ', 'public/movies-images/1469621467.jpg', 'https://www.youtube.com/embed/-44_igsZtgU', 'PG-13', 'Maze Runner, The Scorch Trials,action , science fiction ', '2015-09-15', 2015, '16', '2016-07-27 12:11:07', '2016-07-27 11:11:07'),
(17, 'Mad Max: Fury Road', 'United States', 'English', 'George Miller', 'Tom Hardy, Charlize Theron, Nicholas Hoult', '2h', 'HQ', 'public/movies-images/1469622330.jpg', 'https://www.youtube.com/embed/hEJnMQG9ev8', 'PG-13', '', '2015-05-07', 2015, '17', '2016-07-27 12:25:30', '2016-07-27 11:25:30'),
(18, 'Poltergeist', 'United States | canada', 'English', 'Gil Kenan', 'Sam Rockwell, Rosemarie DeWitt, Kennedi Clements', '1h 33min', 'HQ', 'public/movies-images/1469624968.jpg', 'https://www.youtube.com/embed/fhr8d1yxSP8', 'PG-14', 'Poltergeist, herror movie, terror movie, thriler ', '2015-05-22', 2015, '18', '2016-07-27 13:09:28', '2016-07-27 12:09:28'),
(19, 'Tomorrowland', 'United States | Spain', 'English | French | Japanese', 'Brad Bird', 'George Clooney, Britt Robertson, Hugh Laurie', '2h 10min', 'MQ', 'public/movies-images/1469626437.jpg', 'https://www.youtube.com/embed/lNzukD8pS_s', 'PG-8', 'Tomorrowland, Tomorrowland 2015, Tomorrowland 2016, action, adventure ', '2015-05-09', 2015, '19', '2016-07-27 13:33:57', '2016-07-27 12:33:57'),
(20, 'Mission Impossible Rogue Nation', 'United States', 'English', 'Christopher McQuarrie', 'Tom Cruise, Rebecca Ferguson, Jeremy Renner', '2h 11min', '', 'public/movies-images/1469629346.jpg', 'https://www.youtube.com/embed/gOW_azQbOjw', 'PG-10', 'Mission Impossible  Rogue Nation, action,  adventure, Tom Cruise, Jeremy Renner', '2015-07-31', 2015, '20', '2016-07-27 14:32:40', '2016-07-27 13:32:40'),
(21, 'Cinderella', 'United States | UK', 'English', 'Kenneth Branagh', 'Lily James, Cate Blanchett, Richard Madden', '1h 45min', 'HQ', 'public/movies-images/1469635716.jpg', 'https://www.youtube.com/embed/20DF6U1HcGQ', 'PG-3', 'Cinderella, Drama, romance, new movies 2016, Cinderella 2015', '2015-03-13', 2015, '21', '2016-07-27 16:08:36', '2016-07-27 15:08:36'),
(22, 'Fantastic Four', 'United States | Germany | UK | Canada', 'English', 'Josh Trank', 'Miles Teller, Kate Mara, Michael B. Jordan', '1h 40min', 'HQ', 'public/movies-images/1469636582.jpg', 'https://www.youtube.com/embed/_rRoD28-WgU', 'PG-10', 'Fantastic Four 2015, new movies 2016', '2015-08-07', 2015, '22', '2016-07-27 16:23:02', '2016-07-27 15:23:02'),
(23, 'Seventh Son', 'United States | UK | Canada | China', 'English', 'Sergey Bodrov', 'Ben Barnes, Julianne Moore, Jeff Bridges', '1h 42min', 'HQ', 'public/movies-images/1469637045.jpg', 'https://www.youtube.com/embed/TXiNkOjM7oM', 'PG-13', 'Seventh Son 2015 ,  new movies,  action', '2015-02-06', 2015, '23', '2016-07-27 16:30:45', '2016-07-27 15:30:45'),
(24, 'The Transporter Refueled', 'France | China | Belgium', 'English', 'Camille Delamarre', 'Ed Skrein, Loan Chabanol, Ray Stevenson', '1h 36min', 'HQ', 'public/movies-images/1469637604.jpg', 'https://www.youtube.com/embed/sU5lEfAkOGM', 'PG-13', 'The Transporter Refueled, Transporter  2015, new Transporter movie,', '2015-08-25', 2015, '24', '2016-07-27 16:40:04', '2016-07-27 15:40:04');

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `rates`
--

CREATE TABLE IF NOT EXISTS `rates` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `star` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=25 ;

--
-- Contenu de la table `rates`
--

INSERT INTO `rates` (`id`, `star`, `created_at`, `updated_at`) VALUES
(1, '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>', '2016-07-26 10:27:38', '2016-07-26 10:27:38'),
(2, '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i>', '2016-07-26 14:26:24', '2016-07-26 14:26:24'),
(3, '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>', '2016-07-26 16:03:25', '2016-07-26 16:03:25'),
(4, '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>', '2016-07-26 18:28:15', '2016-07-26 18:28:15'),
(5, '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i>', '2016-07-26 22:13:04', '2016-07-26 22:13:04'),
(6, '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i>', '2016-07-26 23:22:45', '2016-07-26 23:22:45'),
(7, '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i>', '2016-07-27 00:12:55', '2016-07-27 00:12:55'),
(8, '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i>', '2016-07-27 00:25:36', '2016-07-27 00:25:36'),
(9, '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i>', '2016-07-27 00:36:02', '2016-07-27 00:36:02'),
(10, '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i>', '2016-07-27 00:46:00', '2016-07-27 00:46:00'),
(11, '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i>', '2016-07-27 00:54:55', '2016-07-27 00:54:55'),
(12, '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i>', '2016-07-27 01:01:28', '2016-07-27 01:01:28'),
(13, '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i>', '2016-07-27 01:06:48', '2016-07-27 01:06:48'),
(14, '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i>', '2016-07-27 01:11:48', '2016-07-27 01:11:48'),
(15, '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i>', '2016-07-27 01:23:15', '2016-07-27 01:23:15'),
(16, '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>', '2016-07-27 11:11:07', '2016-07-27 11:11:07'),
(17, '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i>', '2016-07-27 11:25:30', '2016-07-27 11:25:30'),
(18, '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i>', '2016-07-27 12:09:28', '2016-07-27 12:09:28'),
(19, '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i>', '2016-07-27 12:33:57', '2016-07-27 12:33:57'),
(20, '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i>', '2016-07-27 13:22:26', '2016-07-27 13:22:26'),
(21, '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i>', '2016-07-27 15:08:36', '2016-07-27 15:08:36'),
(22, '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i>', '2016-07-27 15:23:02', '2016-07-27 15:23:02'),
(23, '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>', '2016-07-27 15:30:45', '2016-07-27 15:30:45'),
(24, '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i>', '2016-07-27 15:40:04', '2016-07-27 15:40:04');

-- --------------------------------------------------------

--
-- Structure de la table `storylines`
--

CREATE TABLE IF NOT EXISTS `storylines` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `en` text COLLATE utf8_unicode_ci NOT NULL,
  `fr` text COLLATE utf8_unicode_ci NOT NULL,
  `es` text COLLATE utf8_unicode_ci NOT NULL,
  `ar` text COLLATE utf8_unicode_ci NOT NULL,
  `movies_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=25 ;

--
-- Contenu de la table `storylines`
--

INSERT INTO `storylines` (`id`, `en`, `fr`, `es`, `ar`, `movies_id`, `created_at`, `updated_at`) VALUES
(2, '  Andy Dufresne is a young and successful banker whose life changes drastically when he is convicted and sentenced to life imprisonment for the murder of his wife and her lover. Set in the 1940''s, the film shows how Andy, with the help of his friend Red, the prison entrepreneur, turns out to be a most unconventional prisoner.', '', '', '', 2, '2016-07-26 15:26:25', '2016-07-26 14:26:25'),
(3, '     The Béliers are ordinary people : Rodolphe and Gigi are married, have two children and run their farm for a living. Ordinary people? Well, almost… since three of them, Dad, Mum and their son Quentin, are deaf. Which is not the case of the boy’s big sister, Paula. And not only can she speak but her music teacher scouts her beautiful voice as well. He offers her to sit for the entrance exam of the Maîtrise de Radio France, a vocal elite choir in Paris. Her parents, who rely on her as their ears and mouth in the outside world, take the news badly. Paula, who hates the idea of betraying her parents and her brother, goes through a painful dilemma…\r\n', 'Dans la famille Bélier, tout le monde est sourd sauf Paula, 16 ans. Elle est une interprète indispensable àses parents au quotidien, notamment pour l’exploitation de la ferme familiale. Un jour, poussée par son professeur de musique qui lui a découvert un don pour le chant, elle décide de préparer le concours de Radio France. Un choix de vie qui signifierait pour elle l’éloignement de sa famille et un passage inévitable à l’âge adulte.\r\n', '', '', 3, '2016-07-26 17:58:56', '2016-07-26 16:58:56'),
(4, '', 'L’éternelle quête de Scrat pour attraper son insaisissable gland le catapulte dans l’espace, où il déclenche accidentellement une série d’événements cosmiques qui vont transformer et menacer le monde de l’Âge de Glace. Pour survivre, Sid, Manny, Diego et le reste de la bande vont devoir quitter leur foyer et se lancer dans une nouvelle aventure pleine d’humour au cours de laquelle ils vont traverser d’incroyables paysages exotiques et rencontrer des personnages tous plus étonnants les uns que les autres.', '', '', 4, '2016-07-26 19:30:38', '2016-07-26 18:30:38'),
(5, '   When Tony Stark tries to jumpstart a dormant peacekeeping program,  things go awry and Earth''s Mightiest Heroes, including Iron Man,   Captain America, Thor, the Incredible Hulk, Black Widow and Hawkeye,   are put to the ultimate test as the fate of the planet hangs in the balance.\r\n   As the villainous Ultron emerges, it is up to the Avengers to stop him from  enacting  his terrible plans, and soon uneasy alliances and unexpected action pave the way for a global adventure.', '', '', '', 5, '2016-07-26 23:13:05', '2016-07-26 22:13:05'),
(6, ' After young Katniss Everdeen agrees to be the symbol of rebellion,\r\nthe Mockingjay, she tries to return Peeta to his normal state, tries \r\nto get to the Capitol, and tries to deal with the battles coming her \r\nway...but all for her main goal; assassinating President Snow and returning\r\npeace to the Districts of Panem. As her squad starts to get smaller and\r\nsmaller, will she make it to the Capitol? Will she get revenge on Snow?\r\nOr will her target change? Will she be with her "Star-Crossed Lover", Peeta?\r\nOr her long time friend, Gale? Deaths, Bombs, Bows and Arrows, A Love Triangle,\r\nHope. What will happen?', '', '', '', 6, '2016-07-27 00:22:46', '2016-07-26 23:22:46'),
(7, '  22 years after the original Jurassic Park failed, the new park (also known as Jurassic World) is open for business. After years of studying genetics the \r\nscientists on the park genetically engineer a new breed of dinosaur. When everything goes horribly wrong, will our heroes make it off the island?', '', '', '', 7, '2016-07-27 01:12:55', '2016-07-27 00:12:55'),
(8, ' 30 years after the defeat of Darth Vader  and the Empire, Rey, a scavenger from the  planet Jakku, finds a BB-8 droid that knows    the whereabouts of the long lost Luke Skywalker.\r\nare thrown into the middle of a battle between the resistance  and the daunting legions of the First Order.', '', '', '', 8, '2016-07-27 01:25:37', '2016-07-27 00:25:37'),
(9, ' Ever since the dawn of time, the Minions have lived to serve the most despicable of \r\nmasters. From T. rex to Napoleon, the easily distracted tribe has helped the biggest and the \r\nbaddest of villains. Now, join protective leader Kevin, teenage rebel Stuart and lovable little \r\nBob on a global road trip where they''ll earn a shot to work for a new boss-the world''s first \r\nfemale super-villain-and try to save all of  Minionkind...from annihilation.', '', '', '', 9, '2016-07-27 01:36:03', '2016-07-27 00:36:03'),
(10, ' Dominic and his crew thought they''d left the criminal mercenary life behind. They''d \r\ndefeated international terrorist Owen Shaw and went their separate ways. But now, Shaw''s \r\nbrother, Deckard Shaw, is out killing the crew one by one for revenge. Worse, a Somalian terrorist \r\ncalled Jakarde and a shady government official called  "Mr. Nobody" are both competing to steal a computer terrorism program called "God''s Eye," that can turn any technological device into a weapon. Torretto must reconvene with his team to stop Shaw and retrieve the God''s Eye program while caught in a power struggle between the terrorist and the United States government.', '', '', '', 10, '2016-07-27 01:46:01', '2016-07-27 00:46:01'),
(11, ' One choice can transform you-or it can destroy you. But every choice has consequences, and as unrest surges in the factions all around her, Tris Prior must continue trying to save those she loves--and herself--while grappling with haunting questions of grief and forgiveness, identity and \r\nloyalty, politics and love. Tris''s initiation day should have been marked by celebration and victory with her chosen faction; instead, the day ended with unspeakable horrors. War now looms \r\nas conflict between the factions and their ideologies grows. And in times of war, sides must be chosen, secrets will emerge, and choices will become even more irrevocable--and even more powerful. Transformed by her own decisions but also by haunting grief and guilt, radical new discoveries, and shifting relationships. Tris must fully embrace her Divergence, even if she does not know what she may lose by doing so.', '', '', '', 11, '2016-07-27 01:54:56', '2016-07-27 00:54:56'),
(12, '  When John Connor (Jason Clarke), leader of the human resistance, sends Sgt. Kyle Reese (Jai Courtney) back to 1984 to protect Sarah Connor (Emilia Clarke) and safeguard the future, an unexpected turn of events creates a fractured timeline. Now, Sgt. Reese finds himself in a \r\nnew and unfamiliar version of the past, where he is faced with unlikely allies, including the Guardian (Arnold Schwarzenegger), dangerous new enemies, and an unexpected new mission: To reset the future...', '', '', '', 12, '2016-07-27 02:01:28', '2016-07-27 01:01:28'),
(13, '  When Anastasia Steele, a literature student, \r\ngoes to interview the wealthy Christian Grey \r\nas a favor to her roommate Kate Kavanagh, she \r\nencounters a beautiful, brilliant and intimidating man. \r\nThe innocent and naive Ana starts to realize she wants him. \r\nDespite his enigmatic reserve and advice, she finds herself \r\ndesperate to get close to him. Not able to resist Ana''s beauty \r\nand independent spirit, Christian Grey admits he wants her too, \r\nbut on his own terms. Ana hesitates as she discovers the singular \r\ntastes of Christian Grey - despite the embellishments of success, \r\nhis multinational businesses, his vast wealth, and his loving family, \r\nGrey is consumed by the need to control everything.', '', '', '', 13, '2016-07-27 02:06:48', '2016-07-27 01:06:48'),
(14, ' Months after John''s divorce, Ted and Tami-Lynn''s \r\nmarriage seems on the same road. To patch things up, \r\nTed and Tami-Lynn plan to have a child with John''s help, \r\nbut their failed efforts backfire disastrously. Namely, \r\nTed is declared property by the government and he loses \r\nall his civil rights. Now, Ted must fight a seemingly hopeless \r\nlegal battle with an inexperienced young lawyer to regain his \r\nrightful legal status. Unfortunately, between Ted''s drunken \r\nidiocies and sinister forces interested in this situation to \r\nexploit him, Ted''s quest has all the odds against him.', '', '', '', 14, '2016-07-27 02:11:49', '2016-07-27 01:11:49'),
(15, ' The Drac pack is back for an all-new monster \r\ncomedy adventure in Sony Pictures Animation''s \r\nHotel Transylvania 2! Everything seems to be \r\nchanging for the better at Hotel Transylvania... \r\nDracula''s rigid monster-only hotel policy has finally \r\nrelaxed, opening up its doors to human guests. \r\nBut behind closed coffins, Drac is worried that his \r\nadorable half-human, half-vampire grandson, Dennis, \r\nisn''t showing signs of being a vampire. So while Mavis \r\nis busy visiting her human in-laws with Johnny - and in \r\nfor a major cultural shock of her own - "Vampa" Drac \r\nenlists his friends Frank, Murray, Wayne and Griffin \r\nto put Dennis through a "monster-in-training" boot camp. \r\nBut little do they know that Drac''s grumpy and very old, \r\nold, old school dad Vlad is about to pay a family visit \r\nto the hotel. And when Vlad finds out that his great-grandson \r\nis not a pure blood - and humans are now welcome at Hotel \r\nTransylvania - things are going to get batty!', '', '', '', 15, '2016-07-27 02:23:15', '2016-07-27 01:23:15'),
(16, ' In this next chapter of the epic "Maze Runner" saga, \r\nThomas (Dylan O''Brien) and his fellow Gladers face their \r\ngreatest challenge yet: searching for clues about the \r\nmysterious and powerful organization known as WCKD. \r\nTheir journey takes them to the Scorch, a desolate landscape \r\nfilled with unimaginable obstacles. Teaming up with resistance \r\nfighters, the Gladers take on WCKD''s vastly superior forces \r\nand uncover its shocking plans for them all.', '', '', '', 16, '2016-07-27 12:11:08', '2016-07-27 11:11:08'),
(17, '  An apocalyptic story set in the furthest reaches \r\nof our planet, in a stark desert landscape where \r\nhumanity is broken, and almost everyone is crazed \r\nfighting for the necessities of life. Within this \r\nworld exist two rebels on the run who just might \r\nbe able to restore order. There''s Max, a man of \r\naction and a man of few words, who seeks peace of \r\nmind following the loss of his wife and child in \r\nthe aftermath of the chaos. And Furiosa, a woman \r\nof action and a woman who believes her path to \r\nsurvival may be achieved if she can make it across \r\nthe desert back to her childhood homeland.', 'Hanté par un lourd passé, Mad Max estime que le meilleur moyen de survivre est de rester seul. Cependant, il se retrouve embarqué par une bande qui parcourt la Désolation à bord d’un véhicule militaire piloté par l’Imperator Furiosa. Ils fuient la Citadelle où sévit le terrible Immortan Joe qui s’est fait voler un objet irremplaçable. Enragé, ce Seigneur de guerre envoie ses hommes pour traquer les rebelles impitoyablement…\r\n\r\n', '', '', 17, '2016-07-27 12:30:11', '2016-07-27 11:30:11'),
(18, '  Legendary filmmaker Sam Raimi and director Gil Kenan \r\n                        reimagine and contemporize the classic tale about a \r\n                        family whose suburban home is invaded by angry spirits. \r\n                        When the terrifying apparitions escalate their attacks \r\n                        and take the youngest daughter, the family must come together to rescue her.', '', '', '', 18, '2016-07-27 13:09:29', '2016-07-27 12:09:29'),
(19, ' Bound by a shared destiny, a bright, optimistic \r\n                            teen bursting with scientific curiosity and a former \r\n                            boy-genius inventor jaded by disillusionment embark on \r\n                            a danger-filled mission to unearth the secrets of an \r\n                            enigmatic place somewhere in time and space that exists \r\n                            in their collective memory as "Tomorrowland".', '', '', '', 19, '2016-07-27 13:33:57', '2016-07-27 12:33:57'),
(20, ' CIA chief Hunley (Baldwin) convinces a Senate \r\n                            committee to disband the IMF (Impossible Mission Force), \r\n                            of which Ethan Hunt (Cruise) is a key member. Hunley \r\n                            argues that the IMF is too reckless. Now on his own, \r\n                            Hunt goes after a shadowy and deadly rogue organization called the Syndicate.', '', '', '', 20, '2016-07-27 14:22:26', '2016-07-27 13:22:26'),
(21, ' A girl named Ella (Cinderella) has the purest heart \r\n                            living in a cruel world filled with evil stepsisters \r\n                            and an evil stepmother out to ruin Ella''s life. Ella \r\n                            comes one with her pure heart when she meets the prince \r\n                            and dances her way to a better life with glass shoes, \r\n                            and a little help from her fairy godmother, of course.', '', '', '', 21, '2016-07-27 16:08:37', '2016-07-27 15:08:37'),
(22, ' FANTASTIC FOUR, a contemporary re-imagining of \r\n                            Marvel''s original and longest-running superhero team, \r\n                            centers on four young outsiders who teleport to an \r\n                            alternate and dangerous universe, which alters their \r\n                            physical form in shocking ways. Their lives irrevocably \r\n                            upended, the team must learn to harness their daunting \r\n                            new abilities and work together to save Earth from a former \r\n                            friend turned enemy.', '', '', '', 22, '2016-07-27 16:23:03', '2016-07-27 15:23:03'),
(23, '   John Gregory, who is a seventh son of a seventh\r\n                         son and also the local spook, has protected his country \r\n                         from witches, boggarts, ghouls and all manner of things \r\n                         that go bump in the night. However John is not young anymore, \r\n                         and has been seeking an apprentice to carry on his trade. \r\n                         Most have failed to survive. The last hope is a young farmer''s \r\n                         son named Thomas Ward. Will he survive the training to become \r\n                         the spook that so many others couldn''t? Should he trust the girl \r\n                         with pointy shoes? How can Thomas stand a chance against Mother Malkin, \r\n                         the most dangerous witch in the county?', '', '', '', 23, '2016-07-27 16:30:46', '2016-07-27 15:30:46'),
(24, ' Frank Martin, played by newcomer Ed Skrein, \r\n                            a former special-ops mercenary, is now living \r\n                            a less perilous life - or so he thinks - transporting \r\n                            classified packages for questionable people. When Frank''s \r\n                            father (Ray Stevenson) pays him a visit in the south of \r\n                            France, their father-son bonding weekend takes a turn for \r\n                            the worse when Frank is engaged by a cunning femme-fatale, \r\n                            Anna (Loan Chabanol), and her three seductive sidekicks to \r\n                            orchestrate the bank heist of the century. Frank must use \r\n                            his covert expertise and knowledge of fast cars, fast driving \r\n                            and fast women to outrun a sinister Russian kingpin, and worse \r\n                            than that, he is thrust into a dangerous game of chess with a \r\n                            team of gorgeous women out for revenge. From the producers of \r\n                            LUCY and the TAKEN trilogy, THE TRANSPORTER REFUELED is a fresh \r\n                            personification of the iconic role of Frank Martin, that launches \r\n                            the high-octane franchise into the present-day and introduces it \r\n                            to the next generation of thrill-seekers.', '', '', '', 24, '2016-07-27 16:40:05', '2016-07-27 15:40:05');

-- --------------------------------------------------------

--
-- Structure de la table `subscribes`
--

CREATE TABLE IF NOT EXISTS `subscribes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'abdellah', 'ajaadi51@gmail.com', '$2y$10$qzMW9zudyhGag3diCXdXV.s6ggvqRTBad69z.PXe.LleOSeraWgEi', NULL, '2016-07-26 10:26:00', '2016-07-26 10:26:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
