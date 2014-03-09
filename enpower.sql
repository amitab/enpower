-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Mar 09, 2014 at 04:56 AM
-- Server version: 5.5.36
-- PHP Version: 5.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `enpower`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `course_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `starts_on` datetime NOT NULL,
  `ends_on` datetime NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `intro_video_url` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `pincode` int(11) NOT NULL,
  `creator` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `courses_creator_foreign` (`creator`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `created_at`, `updated_at`, `course_name`, `starts_on`, `ends_on`, `description`, `intro_video_url`, `pincode`, `creator`) VALUES
(3, '2014-03-08 08:37:24', '2014-03-08 08:37:24', 'Optical Lens Making', '2014-03-01 00:00:00', '2014-08-01 00:00:00', 'We started this industry to help women see through all odds and lead their lives with clarity just like how our lenses help them to.', 'http://www.youtube.com/watch?sdfjdsjfUHN1', 238283893, 'john.doe@example.com'),
(4, '2014-03-07 16:00:00', '0000-00-00 00:00:00', 'Solar Farming', '2014-03-08 00:00:00', '2014-03-31 00:00:00', 'Light Hope Opportunity Helios Farms eradicates energy poverty by empowering women with economic opportunity. We combine the breakthrough potential of solar technology with a...', 'http://youtu.be/uoWeBNluCKU', 560011, 'john.doe@example.com');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `groups_name_unique` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 'Users', '{"admin":1,"users":1}', '2014-03-08 03:49:17', '2014-03-08 03:49:17'),
(2, 'Ngo', '{"admin":1,"users":1}', '2014-03-08 15:10:19', '2014-03-08 15:10:19');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2012_12_06_225921_migration_cartalyst_sentry_install_users', 1),
('2012_12_06_225929_migration_cartalyst_sentry_install_groups', 1),
('2012_12_06_225945_migration_cartalyst_sentry_install_users_groups_pivot', 1),
('2012_12_06_225988_migration_cartalyst_sentry_install_throttle', 1),
('2014_03_08_082207_courses_table', 2),
('2014_03_08_084543_user_details_table', 3),
('2014_03_08_094451_add_email_to_user_details', 4),
('2014_03_08_094919_add_foreign_to_user_details', 5),
('2014_03_08_100240_add_foreign_keys_to_user_courses', 7),
('2014_03_08_101655_syllabus', 8),
('2014_03_08_102842_quiz', 9),
('2014_03_08_105418_assignment', 10),
('2014_03_08_110431_assignment_questions', 11),
('2014_03_08_115630_add_pincode_to_user_details', 11),
('2014_03_08_095158_user_to_courses', 12),
('2014_03_08_121409_add_foreign_to_user_courses', 12),
('2014_03_08_122115_user_quiz', 13),
('2014_03_08_122745_add_foreign_to_user_quiz', 14),
('2014_03_08_123436_add_ngo_to_courses', 15),
('2014_03_08_142423_remove_duration_from_courses', 16),
('2014_03_08_153519_remove_ques_specific_from_quiz', 17),
('2014_03_08_153716_question', 18),
('2014_03_08_155557_remove_options_from_question', 19),
('2014_03_08_155612_option', 19);

-- --------------------------------------------------------

--
-- Table structure for table `option`
--

CREATE TABLE IF NOT EXISTS `option` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `option` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `question_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `option_question_id_foreign` (`question_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `question` longtext COLLATE utf8_unicode_ci NOT NULL,
  `answer` enum('1','2','3','4') COLLATE utf8_unicode_ci NOT NULL,
  `quiz_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `question_quiz_id_foreign` (`quiz_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `created_at`, `updated_at`, `question`, `answer`, `quiz_id`) VALUES
(1, '2014-03-11 18:30:00', '2014-03-11 18:30:00', 'Whats the minimum requirement one needs to join the barefoot college?', '3', 1),
(2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Who validates your skill set at the barefoot-college?', '4', 1),
(3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Who built the barefoot-college?', '3', 1),
(4, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'How is the food cooked at the barefoot-college?', '2', 1),
(5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Where was the first barefoot solar training centre in Africa established ?', '1', 1),
(6, '2014-03-25 18:30:00', '0000-00-00 00:00:00', 'What are the fundamental units of any form of light energy?', '4', 2),
(7, '2014-03-25 18:30:00', '0000-00-00 00:00:00', 'What is the effect that creates an electrical voltage or rather the electric current that flows in a closed loop(here referring to a solar pane)?\r\n', '2', 2),
(8, '2014-02-25 18:30:00', '0000-00-00 00:00:00', 'Which Frequencies do the Concentrators usually ignore ?', '1', 2),
(9, '2014-02-25 18:30:00', '0000-00-00 00:00:00', 'What are Autonomous PV systems?', '3', 2),
(10, '2014-02-25 18:30:00', '0000-00-00 00:00:00', 'What is the product of Voltage and Electric current also known as?', '2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE IF NOT EXISTS `quiz` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `syllabus_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `quiz_syllabus_id_foreign` (`syllabus_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `created_at`, `updated_at`, `syllabus_id`) VALUES
(1, '2014-03-11 18:30:00', '2014-03-11 18:30:00', 1),
(2, '2014-02-24 18:30:00', '0000-00-00 00:00:00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `syllabus`
--

CREATE TABLE IF NOT EXISTS `syllabus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `title` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `video_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `article` longtext COLLATE utf8_unicode_ci NOT NULL,
  `type` enum('video','article') COLLATE utf8_unicode_ci NOT NULL,
  `course_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `syllabus_course_id_foreign` (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `syllabus`
--

INSERT INTO `syllabus` (`id`, `created_at`, `updated_at`, `title`, `video_url`, `article`, `type`, `course_id`) VALUES
(1, '2014-03-11 18:30:00', '2014-03-11 18:30:00', 'The barefoot movement (A Case Study)', 'http://youtu.be/6qqqVwM6bMM', '', 'video', 4),
(2, '2014-02-19 18:30:00', '0000-00-00 00:00:00', 'Theory behind the working of Solar panels(Article)', '', 'Solar panels harness the energy of the sun light and convert it into usable electricity. In this article, we are going to have a detailed look at the theory behind the basic principle used in solar panels.\r\n\r\nPhotons are the basic fundamental unit of any form of light energy. The photons that are emitted by the sun (visible light) are captured by the solar panels. The generation of electricity in the solar panels is possible because of a principle called as photovoltaic effect.\r\n\r\nPhotovoltaic effect: This effect is the creation of an electrical voltage or rather the electric current flowing in a closed loop, here referred to in a solar panel. This process is somewhat related to the photoelectric effect; although these are different processes altogether. The electrons that are generated when the solar panels are exposed to a stream of photons are transferred between the different bands of energy inside the atom to which they are bound. Typically, the transition of the energy state of electrons takes place from valence band to the conduction band, but within the material that is used in the solar panels. This transfer of electrons makes them accumulate in order to cause a buildup of voltage between the two electrodes.\r\n\r\nThere is however another principle that guides the behaviors of solar panels. This refers to p-n junction solar cells used in solar panels. Here the material which is illuminated by the sun''s energy is the source of current due to the separation of excited electrons and holes that are swept away in the different directions. This is caused due to the built in electric field of the p-n junction present at the depletion region.\r\n\r\nSolar panels contain a system of solar cells that are interconnected so that they can transfer the induced voltage/current between one another so that the required parameters can pile up and a suitable throughout can be obtained. Series connections of solar cells in solar panels help add up the voltage and the same is true for solar cells connected using parallel connection.\r\n\r\nSolar cells are protected from the mechanical damage as well as external factors like dust and moisture that can be severe to degrade their performance. Solar cells have materials that are mostly rigid. But when it comes to the thin films, they need extra care as they are available in semi-flexible nature.\r\n\r\nIt all depends upon how the solar panels are designed and manufactured. These factors help them produce electricity from a range of frequencies of light. Solar panels cannot be designed practically in order to capture photons of the entire spectrum of light emitted by the sun. Capabilities of solar panels that capture rage of frequencies mostly exclude the infrared, ultraviolet etc. and a poor performance is witnessed in the low or diffused light.\r\n\r\nAnother fact is that solar panels produce much lesser efficiency as compared to when their basic components viz. solar cells are used independently without any interconnections. Typically, solar panels that are available commercially are only able to depict their best efficiency as low as 21%. Due to the significant impact of efficiency, a number of techniques are used in order to tweak the performance of solar cells.\r\n\r\nSolar cells are designed in conjunction with concentrators which contain lenses or mirrors to focus the light on to tightly packed and coupled array of solar cells. Although there is an increase in the design and implementation of the solar panels in terms of high cost per unit area, the basic motto of increase in efficiency is achieved with least efforts. Thus the science and technology behind solar panels is increasing by the day and advancement in the same is occurring at a rapid pace.\r\n', 'article', 4);

-- --------------------------------------------------------

--
-- Table structure for table `throttle`
--

CREATE TABLE IF NOT EXISTS `throttle` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `ip_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attempts` int(11) NOT NULL DEFAULT '0',
  `suspended` tinyint(1) NOT NULL DEFAULT '0',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `last_attempt_at` timestamp NULL DEFAULT NULL,
  `suspended_at` timestamp NULL DEFAULT NULL,
  `banned_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `throttle_user_id_index` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `throttle`
--

INSERT INTO `throttle` (`id`, `user_id`, `ip_address`, `attempts`, `suspended`, `banned`, `last_attempt_at`, `suspended_at`, `banned_at`) VALUES
(1, 2, '::1', 0, 0, 0, NULL, NULL, NULL),
(2, 7, '::1', 0, 0, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `activated` tinyint(1) NOT NULL DEFAULT '0',
  `activation_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `activated_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `persist_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reset_password_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_activation_code_index` (`activation_code`),
  KEY `users_reset_password_code_index` (`reset_password_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `permissions`, `activated`, `activation_code`, `activated_at`, `last_login`, `persist_code`, `reset_password_code`, `first_name`, `last_name`, `created_at`, `updated_at`) VALUES
(2, 'john.doe@example.com', '$2y$10$u.cpAuSdvZfws0kH9A4D4uU./COwYjPWf.nI3lv1WY/3b2.1PPT/O', NULL, 1, NULL, NULL, '2014-03-09 05:59:46', '$2y$10$7JRZD7rgxDGginTJYXBMdegN2mav0fmyNTQ1CexsbYatTYZD/Wd4K', NULL, NULL, NULL, '2014-03-08 08:26:34', '2014-03-09 05:59:46'),
(4, 'amitab.das@outlook.com', '$2y$10$ZsORv6xU2rCFRPNbk8yvpukCIJTm12KpRux0Olhj9Yz.NmF78lVS2', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2014-03-08 15:05:36', '2014-03-08 15:05:36'),
(7, 'ngo@ngo.in', '$2y$10$GjNT8NZjoNXV9H1YM4QD4uVqZjZKPMAAAiuJ2PnOTDXu4tuRsJZ56', NULL, 1, NULL, NULL, '2014-03-09 05:28:59', '$2y$10$thLJI9N4b.WKdyFYeXauzemrLHK/uM5BgSxHi3tf5K6stLshPKt2C', NULL, NULL, NULL, '2014-03-08 21:34:34', '2014-03-09 05:28:59');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `user_id` int(10) unsigned NOT NULL,
  `group_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`user_id`, `group_id`) VALUES
(1, 1),
(2, 1),
(4, 1),
(7, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_courses`
--

CREATE TABLE IF NOT EXISTS `user_courses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `course_id` int(10) unsigned NOT NULL,
  `completed` enum('0','1') COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_courses_course_id_foreign` (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user_courses`
--

INSERT INTO `user_courses` (`id`, `created_at`, `updated_at`, `email`, `course_id`, `completed`) VALUES
(3, '2014-03-08 08:38:50', '2014-03-08 08:38:50', 'john.doe@example.com', 3, '0'),
(4, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'john.doe@example.com', 4, '0');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE IF NOT EXISTS `user_details` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `uid` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pincode` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_details_email_foreign` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `first_name`, `last_name`, `dob`, `uid`, `email`, `pincode`) VALUES
(8, 'sdfksdfkdsf', 'dfdsfsdf', '1970-01-01', 34324324, 'amitab.das@outlook.com', 0),
(9, 'John', 'Doe', '2014-03-12', 2324234, 'john.doe@example.com', 35435345),
(10, 'Amitabh', 'Das', '1970-01-01', 16278300, 'ngo@ngo.in', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_quiz`
--

CREATE TABLE IF NOT EXISTS `user_quiz` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `score` int(11) NOT NULL,
  `quiz_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_quiz_email_foreign` (`email`),
  KEY `user_quiz_quiz_id_foreign` (`quiz_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_creator_foreign` FOREIGN KEY (`creator`) REFERENCES `users` (`email`);

--
-- Constraints for table `option`
--
ALTER TABLE `option`
  ADD CONSTRAINT `option_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `question` (`id`);

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_quiz_id_foreign` FOREIGN KEY (`quiz_id`) REFERENCES `quiz` (`id`);

--
-- Constraints for table `quiz`
--
ALTER TABLE `quiz`
  ADD CONSTRAINT `quiz_syllabus_id_foreign` FOREIGN KEY (`syllabus_id`) REFERENCES `syllabus` (`id`);

--
-- Constraints for table `syllabus`
--
ALTER TABLE `syllabus`
  ADD CONSTRAINT `syllabus_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`);

--
-- Constraints for table `user_courses`
--
ALTER TABLE `user_courses`
  ADD CONSTRAINT `user_courses_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`);

--
-- Constraints for table `user_details`
--
ALTER TABLE `user_details`
  ADD CONSTRAINT `user_details_email_foreign` FOREIGN KEY (`email`) REFERENCES `users` (`email`);

--
-- Constraints for table `user_quiz`
--
ALTER TABLE `user_quiz`
  ADD CONSTRAINT `user_quiz_email_foreign` FOREIGN KEY (`email`) REFERENCES `users` (`email`),
  ADD CONSTRAINT `user_quiz_quiz_id_foreign` FOREIGN KEY (`quiz_id`) REFERENCES `quiz` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
