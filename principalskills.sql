-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 01, 2015 at 11:38 AM
-- Server version: 5.5.27
-- PHP Version: 5.6.12

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `principalskills`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE IF NOT EXISTS `ads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` text CHARACTER SET latin1 NOT NULL,
  `status` enum('1','0') CHARACTER SET latin1 NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `position` varchar(20) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `code`, `status`, `created_at`, `updated_at`, `position`) VALUES
(1, 'top top top', '1', '2015-09-29 12:41:24', '2015-09-29 07:11:24', 'top'),
(2, 'left left left', '1', '2015-09-29 12:41:35', '2015-09-29 07:11:35', 'left'),
(3, 'right right right', '1', '2015-09-29 12:41:53', '2015-09-29 07:11:53', 'right'),
(4, 'bottom bottom bottom', '1', '2015-09-29 12:41:45', '2015-09-29 07:11:45', 'bottom');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET latin1 NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `phone` varchar(20) CHARACTER SET latin1 NOT NULL,
  `message` text CHARACTER SET latin1 NOT NULL,
  `status` enum('1','0') CHARACTER SET latin1 NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `username`, `email`, `phone`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Sonu Sindhu', 'sonupnf@gmail.com', '+91 8558855796', 'Testing Contacts', '1', '2015-09-29 10:51:23', '2015-09-29 05:21:23'),
(2, 'Sarabjit Singh', 'sarabjitpnf@gmail.com', '+91 8558855797', 'Testing Message for contact request', '1', '2015-09-29 10:51:27', '2015-09-29 05:21:27');

-- --------------------------------------------------------

--
-- Table structure for table `helps`
--

CREATE TABLE IF NOT EXISTS `helps` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET latin1 NOT NULL,
  `description` text CHARACTER SET latin1 NOT NULL,
  `status` enum('1','0') CHARACTER SET latin1 NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `helps`
--

INSERT INTO `helps` (`id`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'We want to file chapter7', 'We want to file chapter7 We want to file chapter7 We want to file chapter7', '1', '2015-09-28 12:31:53', '0000-00-00 00:00:00'),
(7, 'We want to file chapter 14', 'We want to file chapter7 We want to file chapter7 We want to file chapter7', '1', '2015-09-29 03:10:15', '2015-09-29 03:10:15'),
(8, 'We want to file chapter 10', 'We want to file chapter 10 We want to file chapter 10', '1', '2015-09-29 03:11:37', '2015-09-29 03:11:37'),
(9, 'We want to file chapter 11', 'We want to file chapter 10 We want to file chapter 10 We want to file chapter 10', '1', '2015-09-29 03:12:19', '2015-09-29 03:12:19'),
(10, 'We want to file chapter 20', 'We want to file chapter 10 We want to file chapter 10 We want to file chapter 10', '1', '2015-09-29 03:15:27', '2015-09-29 03:15:27'),
(11, 'We want to file chapter 11', 'We want to file chapter 10 We want to file chapter 10 We want to file chapter 10', '1', '2015-09-29 03:26:21', '2015-09-29 03:26:21'),
(12, 'We want to file chapter 12', 'We want to file chapter 10 We want to file chapter 10 We want to file chapter 10', '1', '2015-09-29 09:05:23', '2015-09-29 03:35:23'),
(13, 'We want to file chapter 25', 'We want to file chapter 25 We want to file chapter 25 We want to file chapter 25', '1', '2015-09-29 03:38:35', '2015-09-29 03:38:35');

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
('2014_11_16_205658_create_admins_table', 1),
('2014_12_02_152920_create_password_reminders_table', 1),
('2015_02_20_130902_create_url_table', 1),
('2015_03_15_123956_edit_url_table', 1),
('2014_10_12_100000_create_password_resets_table', 2),
('2015_09_24_130349_entrust_setup_tables', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE IF NOT EXISTS `permission_role` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_role_id_foreign` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) CHARACTER SET latin1 NOT NULL,
  `title` varchar(255) CHARACTER SET latin1 NOT NULL,
  `image` varchar(255) CHARACTER SET latin1 NOT NULL,
  `content` text CHARACTER SET latin1 NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` enum('1','0') CHARACTER SET latin1 NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `slug`, `title`, `image`, `content`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Lorem-Ipsum-is-simply-dummy', 'Lorem Ipsum is simply dummy text of the printing', '1443611099_11951876_730867070369106_1455710529867289350_n.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2015-09-30 11:04:59', '2015-09-30 05:34:59', '1'),
(7, 'what-is-gottman', 'WHAT IS GOTTMAN', '1443611371_Screen-Shot-2015-09-16-at-00.33.46.png', 'I am a Certified Gottman Therapist (CGT) and Licensed Clinical Social Worker (LCSW) with particular emphasis on working with couples/marriages. I often describe what I do as working with “couples and pieces of couples”. In addition to couples work, I provide some individual and group therapy, and starting in 2015 I will be presenting “The Art and Science of Love” workshop for couples, developed by The Gottman Institute. My focus is on developing what I call Healthy Intimacy, through Intimate Solutions. I am especially interested in helping individuals and couples recognize and develop emotional, relational, and sexual intimacy.I am a Certified Gottman Therapist (CGT) and Licensed Clinical Social Worker (LCSW) with particular emphasis on working with couples/marriages.', '2015-09-30 11:09:31', '2015-09-30 05:39:31', '1'),
(8, 'why-choose-principle-skills', 'WHY CHOOSE PRINCIPLE SKILLS', '1443611605_choose-us.png', 'I am a Certified Gottman Therapist (CGT) and Licensed Clinical Social Worker (LCSW) with particular emphasis on working with couples/marriages. I often describe what I do as working with “couples and pieces of couples”. In addition to couples work, I provide some individual and group therapy, and starting in 2015 I will be presenting “The Art and Science of Love” workshop for couples, developed by The Gottman Institute. My focus is on developing what I call Healthy Intimacy, through Intimate Solutions. I am especially interested in helping individuals and couples recognize and develop emotional, relational, and sexual intimacy.I am a Certified Gottman Therapist (CGT) and Licensed Clinical Social Worker (LCSW) with particular emphasis on working with couples/marriages.', '2015-09-30 11:13:25', '2015-09-30 05:43:25', '1'),
(9, 'we-want-to-file-chapter-20', 'We want to file chapter 21', '1443611488_IMG_6549.JPG', 'I am a Certified Gottman Therapist (CGT) and Licensed Clinical Social Worker (LCSW) with particular emphasis on working with couples/marriages. I often describe what I do as working with “couples and pieces of couples”. In addition to couples work, I provide some individual and group therapy, and starting in 2015 I will be presenting “The Art and Science of Love” workshop for couples, developed by The Gottman Institute. My focus is on developing what I call Healthy Intimacy, through Intimate Solutions. I am especially interested in helping individuals and couples recognize and develop emotional, relational, and sexual intimacy.I am a Certified Gottman Therapist (CGT) and Licensed Clinical Social Worker (LCSW) with particular emphasis on working with couples/marriages.', '2015-09-30 11:11:28', '2015-09-30 05:41:28', '1');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admininistrator', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'normal', 'normal', 'normal user', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE IF NOT EXISTS `role_user` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `role_user_role_id_foreign` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subscribe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `usertypes` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `title`, `firstname`, `surname`, `subscribe`, `email`, `password`, `remember_token`, `usertypes`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Mr', 'Sonu', 'Sindhu', 'on', 'sonupnf@gmail.com', '$2y$10$PdSHDPBRn5JGWirPODsC6e/KwfLGh0DW5LxyxRKkdtd526iEO1I5.', NULL, '0', '1', '2015-09-24 07:43:45', '2015-09-24 07:43:45'),
(2, 'Mr', 'Sonu', 'Sindhu', 'on', 'sonusindhu10@gmail.com', '$2y$10$PdSHDPBRn5JGWirPODsC6e/KwfLGh0DW5LxyxRKkdtd526iEO1I5.', 'K7SBmrejvog0NMhuzpSD5BJNPKCrEMfHT2YqweOKV6iZHLHbYvTuRZsIi72t', '1', '1', '2015-09-24 07:43:45', '2015-09-29 05:56:02'),
(3, 'Mr', 'Sonu', 'Sindhu', 'on', 'sonusindhu101@gmail.com', '$2y$10$PdSHDPBRn5JGWirPODsC6e/KwfLGh0DW5LxyxRKkdtd526iEO1I5.', NULL, '1', '0', '2015-09-24 07:43:45', '2015-09-29 05:44:56'),
(5, 'Mr', 'Sonu', 'Sindhu', 'on', 'sonupnf11@gmail.com', '$2y$10$EuZnGotejaUqD6dfZ04CJuta8/G4CpGOtMdozvy8BIYeym/jYIweW', NULL, '1', '1', '2015-09-28 02:36:48', '2015-09-29 05:44:53'),
(6, 'Mrs.', 'Sarabjit', 'Singh', 'on', 'sarabjitpnf@gmail.com', '$2y$10$YydlN.yXVhzkgVRyQ1vP4.gVkbJVsqbIB53t/Z8L1iu/.kJXkECdW', NULL, '1', '1', '2015-09-28 03:47:21', '2015-09-28 03:48:04');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET latin1 NOT NULL,
  `embed` text CHARACTER SET latin1 NOT NULL,
  `views` int(11) NOT NULL DEFAULT '0',
  `status` enum('1','0') CHARACTER SET latin1 NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `title`, `embed`, `views`, `status`, `created_at`, `updated_at`) VALUES
(1, 'KERALA CHRISTIAN WEDDING MERIN', 'https://www.youtube.com/watch?v=UcdRbVoxqD8', 0, '1', '2015-09-29 13:02:38', '0000-00-00 00:00:00'),
(2, 'THE NEW GENARATION KERALA CHRISTIAN WEDDING 2014', 'https://www.youtube.com/watch?v=pWv6f4junC0', 0, '1', '2015-09-30 06:58:45', '2015-09-30 01:28:45'),
(3, 'KERALA CHRISTIAN WEDDING MERIN 2', 'https://www.youtube.com/watch?v=UcdRbVoxqD8', 0, '1', '2015-09-30 01:29:20', '2015-09-30 01:29:20');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
