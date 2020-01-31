-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 31, 2020 at 04:57 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `larargl`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactforms`
--

DROP TABLE IF EXISTS `contactforms`;
CREATE TABLE IF NOT EXISTS `contactforms` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `form_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `formcontent` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactforms`
--

INSERT INTO `contactforms` (`id`, `name`, `form_description`, `formcontent`, `created_at`, `updated_at`) VALUES
(1, 'Student form', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 'a:7:{s:10:\"label_attr\";a:5:{i:0;s:10:\"First name\";i:1;s:9:\"Last name\";i:2;s:5:\"Email\";i:3;s:8:\"Language\";i:4;s:6:\"Gender\";}s:11:\"select_attr\";a:5:{i:0;s:4:\"text\";i:1;s:4:\"text\";i:2;s:5:\"email\";i:3;s:6:\"select\";i:4;s:5:\"radio\";}s:9:\"form_name\";s:12:\"Student form\";s:11:\"description\";s:151:\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s\";s:19:\"extra_values_select\";a:1:{i:0;s:23:\"php\r\nlaravel\r\nsql\r\njava\";}s:18:\"extra_values_radio\";a:1:{i:0;s:12:\"Male\r\nFemale\";}s:12:\"required_arr\";a:5:{i:0;s:2:\"on\";i:1;s:3:\"off\";i:2;s:2:\"on\";i:3;s:3:\"off\";i:4;s:2:\"on\";}}', '2020-01-30 06:00:45', '2020-01-30 06:00:45'),
(2, 'Sam Test', 'this is a Test form', 'a:7:{s:10:\"label_attr\";a:7:{i:0;s:6:\"F Name\";i:1;s:6:\"L Name\";i:2;s:3:\"Sex\";i:3;s:3:\"Age\";i:4;s:5:\"Email\";i:5;s:3:\"Bio\";i:6;s:6:\"Choice\";}s:11:\"select_attr\";a:7:{i:0;s:4:\"text\";i:1;s:4:\"text\";i:2;s:6:\"select\";i:3;s:6:\"number\";i:4;s:5:\"email\";i:5;s:7:\"textbox\";i:6;s:5:\"radio\";}s:9:\"form_name\";s:8:\"sam Test\";s:11:\"description\";s:19:\"this is a Test form\";s:19:\"extra_values_select\";a:1:{i:0;s:19:\"Male\r\nFemale\r\nOther\";}s:18:\"extra_values_radio\";a:1:{i:0;s:24:\"Pizza\r\nBurger\r\nChocloate\";}s:12:\"required_arr\";a:7:{i:0;s:2:\"on\";i:1;s:2:\"on\";i:2;s:2:\"on\";i:3;s:2:\"on\";i:4;s:3:\"off\";i:5;s:2:\"on\";i:6;s:2:\"on\";}}', '2020-01-30 06:13:30', '2020-01-30 06:13:30'),
(9, 'Test form', 'This is test form', 'a:7:{s:9:\"form_name\";s:9:\"Test form\";s:11:\"description\";s:17:\"This is test form\";s:10:\"label_attr\";a:7:{i:0;s:6:\"F name\";i:1;s:6:\"L name\";i:2;s:5:\"Email\";i:3;s:3:\"Age\";i:4;s:6:\"Gender\";i:5;s:10:\"Technology\";i:6;s:3:\"Bio\";}s:11:\"select_attr\";a:7:{i:0;s:4:\"text\";i:1;s:4:\"text\";i:2;s:5:\"email\";i:3;s:6:\"number\";i:4;s:5:\"radio\";i:5;s:6:\"select\";i:6;s:7:\"textbox\";}s:19:\"extra_values_select\";a:1:{i:0;s:14:\"SQL\r\nPHP\r\nJAVA\";}s:18:\"extra_values_radio\";a:1:{i:0;s:19:\"Male\r\nFemale\r\nOther\";}s:12:\"required_arr\";a:7:{i:0;s:2:\"on\";i:1;s:3:\"off\";i:2;s:2:\"on\";i:3;s:2:\"on\";i:4;s:2:\"on\";i:5;s:2:\"on\";i:6;s:2:\"on\";}}', '2020-01-30 23:03:21', '2020-01-30 23:03:21');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(22, '2014_10_12_000000_create_users_table', 1),
(23, '2014_10_12_100000_create_password_resets_table', 1),
(24, '2020_01_29_092906_create_contactforms_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
