-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 28, 2019 at 02:29 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms_db_v2`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

DROP TABLE IF EXISTS `applications`;
CREATE TABLE IF NOT EXISTS `applications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `form_id` int(11) NOT NULL,
  `response` longtext,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `form_id`, `response`, `created_at`, `updated_at`, `active`) VALUES
(1, 1, '<table class=\'table\'><thead><tr><th>First Name</th><th>Email  Address</th><th>Gender</th><th>lang</th><th>Country</th></tr></thead><body><tr><td>fesal ali</td><td>fesalali05@gmail.com</td><td>female</td><td>ar,en,</td><td>syria</td></tr></tbody></table>', '2019-09-12', '2019-09-12', 1),
(2, 1, '<table class=\'table\'><thead><tr><th>First Name</th><th>Email  Address</th><th>Gender</th><th>lang</th><th>Country</th></tr></thead><body><tr><td>fesal ali</td><td>testpage@gmail.com</td><td>female</td><td>ar,en,</td><td>syria</td></tr></tbody></table>', '2019-09-15', '2019-09-15', 1),
(3, 1, '<table class=\'table\'><thead><tr><th>First Name</th><th>Email  Address</th><th>Gender</th><th>lang</th><th>Country</th></tr></thead><body><tr><td>fesal ali</td><td>werew@gmail.com</td><td>female</td><td>ar,en,</td><td>lebanon</td></tr></tbody></table>', '2019-09-15', '2019-09-15', 1),
(4, 1, '<table class=\'table\'><thead><tr><th>age</th><th>First Name</th><th>Email  Address</th><th>Gender</th><th>lang</th><th>Country</th></tr></thead><body><tr><td>123</td><td>fesal</td><td>fesalali05@gmail.com</td><td>female</td><td>ar,en,</td><td>lebanon</td></tr></tbody></table>', '2019-09-15', '2019-09-15', 1),
(5, 1, '<table class=\'table\'><thead><tr><th>age</th><th>First Name</th><th>Email  Address</th><th>Gender</th><th>lang</th><th>Country</th></tr></thead><body><tr><td>26</td><td>Fesal Ali</td><td>fesalali05@gmail.com</td><td>male</td><td>ar,en,</td><td>syria</td></tr></tbody></table>', '2019-09-16', '2019-09-16', 1),
(6, 1, '<table class=\'table\'><thead><tr><th>age</th><th>lang</th><th>Email  Address</th><th>First Name</th><th>Country</th><th>Gender</th></tr></thead><body><tr><td>123</td><td>ar,en,</td><td>fesal@gmail.com</td><td>sdf</td><td>syria</td><td>female</td></tr></tbody></table>', '2019-09-29', '2019-09-29', 1),
(7, 1, '<table class=\'table\'><thead><tr><th>age</th><th>lang</th><th>Email  Address</th><th>First Name</th><th>Country</th><th>Gender</th></tr></thead><body><tr><td>20</td><td>ar,en,</td><td>fesal@gmail.com</td><td>sdf</td><td>syria</td><td>female</td></tr></tbody></table>', '2019-09-29', '2019-09-29', 1),
(8, 1, '<table class=\'table\'><thead><tr><th>age</th><th>lang</th><th>Email  Address</th><th>First Name</th><th>Country</th><th>Gender</th></tr></thead><body><tr><td>22</td><td>ar,en,</td><td>balkis@voila.digital</td><td>Thaer</td><td>lebanon</td><td>female</td></tr></tbody></table>', '2019-10-14', '2019-10-14', 1),
(9, 2, '<table class=\'table\'><thead><tr><th>email</th><th>Email</th><th>Name</th></tr></thead><body><tr><td>eman@voila.digital</td><td>eman,test,</td><td>ايمان</td></tr></tbody></table>', '2019-10-14', '2019-10-14', 1),
(10, 1, '<table class=\'table\'><thead><tr><th>Gender</th><th>Country</th><th>lang</th><th>First Name</th><th>Email  Address</th><th>age</th></tr></thead><body><tr><td></td><td>lebanon</td><td>ar,en,</td><td>23</td><td>fesalali04@gmail.co.com</td><td>132</td></tr></tbody></table>', '2019-11-14', '2019-11-14', 1),
(11, 2, '<table class=\'table\'><thead><tr><th>Name</th><th>Email</th><th>email</th></tr></thead><body><tr><td>fesa</td><td>eman,test,</td><td>fesalali05@gmail.com</td></tr></tbody></table>', '2019-11-14', '2019-11-14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cms_apicustom`
--

DROP TABLE IF EXISTS `cms_apicustom`;
CREATE TABLE IF NOT EXISTS `cms_apicustom` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `permalink` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tabel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aksi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kolom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orderby` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_query_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sql_where` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `method_type` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` longtext COLLATE utf8mb4_unicode_ci,
  `responses` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cms_apikey`
--

DROP TABLE IF EXISTS `cms_apikey`;
CREATE TABLE IF NOT EXISTS `cms_apikey` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `screetkey` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hit` int(11) DEFAULT NULL,
  `status` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cms_dashboard`
--

DROP TABLE IF EXISTS `cms_dashboard`;
CREATE TABLE IF NOT EXISTS `cms_dashboard` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_cms_privileges` int(11) DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cms_email_queues`
--

DROP TABLE IF EXISTS `cms_email_queues`;
CREATE TABLE IF NOT EXISTS `cms_email_queues` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `send_at` datetime DEFAULT NULL,
  `email_recipient` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_from_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_from_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_cc_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_content` text COLLATE utf8mb4_unicode_ci,
  `email_attachments` text COLLATE utf8mb4_unicode_ci,
  `is_sent` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cms_email_templates`
--

DROP TABLE IF EXISTS `cms_email_templates`;
CREATE TABLE IF NOT EXISTS `cms_email_templates` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cc_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms_email_templates`
--

INSERT INTO `cms_email_templates` (`id`, `name`, `slug`, `subject`, `content`, `description`, `from_name`, `from_email`, `cc_email`, `created_at`, `updated_at`) VALUES
(1, 'Email Template Forgot Password Backend', 'forgot_password_backend', NULL, '<p>Hi,</p><p>Someone requested forgot password, here is your new password : </p><p>[password]</p><p><br></p><p>--</p><p>Regards,</p><p>Admin</p>', '[password]', 'System', 'system@crudbooster.com', NULL, '2019-05-30 03:06:59', NULL),
(2, 'Form contact us', 'form_submit_contact_us', 'Form contact us', '<p><b>This is submit from Page Contact Us :</b></p><p><span style=\"font-weight: 700;\">&nbsp;email</span>: [email]&nbsp;<br></p><p><span style=\"font-weight: 700;\">Name</span>&nbsp;: [name]&nbsp;</p><p><b>message</b>: [message]&nbsp;</p><p>Thank You .</p><p><br></p>', 'email for any submit in site', 'Aviation Taiba', 'info@domdomta.com', NULL, '2019-10-10 02:57:35', '2019-10-13 08:01:44');

-- --------------------------------------------------------

--
-- Table structure for table `cms_logs`
--

DROP TABLE IF EXISTS `cms_logs`;
CREATE TABLE IF NOT EXISTS `cms_logs` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ipaddress` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `useragent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci,
  `id_cms_users` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1232 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms_logs`
--

INSERT INTO `cms_logs` (`id`, `ipaddress`, `useragent`, `url`, `description`, `details`, `id_cms_users`, `created_at`, `updated_at`) VALUES
(1220, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Safari/537.36', 'http://localhost:8000/modules/menu_management/delete/114', 'Delete data Statistic at Menu Management', '', 1, '2019-11-24 07:54:03', NULL),
(1221, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Safari/537.36', 'http://localhost:8000/modules/email_receiver/action-selected', 'Delete data 1,3 at Email Receivers', '', 1, '2019-11-24 08:16:23', NULL),
(1222, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Safari/537.36', 'http://localhost:8000/modules/logout', 'superadmin@voila.digital logout', '', 1, '2019-11-24 08:38:58', NULL),
(1223, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Safari/537.36', 'http://localhost:8000/modules/login', 'superadmin@voila.digital login with IP Address 127.0.0.1', '', 1, '2019-11-24 08:39:13', NULL),
(1224, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Safari/537.36', 'http://localhost:8000/modules/logout', 'superadmin@voila.digital logout', '', 1, '2019-11-24 08:41:02', NULL),
(1225, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Safari/537.36', 'http://localhost:8000/modules/login', 'admin@voila.com login with IP Address 127.0.0.1', '', 2, '2019-11-24 08:41:43', NULL),
(1226, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Safari/537.36', 'http://localhost:8000/modules/logout', 'admin@voila.com logout', '', 2, '2019-11-24 08:41:59', NULL),
(1227, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Safari/537.36', 'http://localhost:8000/modules/login', 'superadmin@voila.digital login with IP Address 127.0.0.1', '', 1, '2019-11-24 08:42:08', NULL),
(1228, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Safari/537.36', 'http://localhost:8000/modules/statistic_builder/delete/2', 'Delete data Requests Events at Statistic Builder', '', 1, '2019-11-24 08:51:28', NULL),
(1229, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Safari/537.36', 'http://localhost:8000/modules/email_templates/action-selected', 'Delete data 4,3 at Email Templates', '', 1, '2019-11-24 08:51:47', NULL),
(1230, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'http://localhost:8000/modules/login', 'superadmin@voila.digital login with IP Address 127.0.0.1', '', 1, '2019-11-28 11:41:04', NULL),
(1231, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'http://localhost:8000/modules/module_generator/delete/58', 'Delete data Test at Module Generator', '', 1, '2019-11-28 11:42:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cms_menus`
--

DROP TABLE IF EXISTS `cms_menus`;
CREATE TABLE IF NOT EXISTS `cms_menus` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'url',
  `path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `is_dashboard` tinyint(1) NOT NULL DEFAULT '0',
  `is_front` tinyint(4) DEFAULT NULL,
  `id_cms_privileges` int(11) DEFAULT NULL,
  `sorting` int(11) DEFAULT NULL,
  `lang_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=124 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms_menus`
--

INSERT INTO `cms_menus` (`id`, `name`, `type`, `path`, `color`, `icon`, `parent_id`, `is_active`, `is_dashboard`, `is_front`, `id_cms_privileges`, `sorting`, `lang_id`, `created_at`, `updated_at`) VALUES
(67, 'Social media', 'Route', 'AdminSocialMediaControllerGetIndex', 'normal', 'fa fa-glass', 0, 1, 0, NULL, 1, 14, NULL, '2019-09-09 14:29:05', '2019-10-27 10:15:30'),
(37, 'SEO', 'URL', '/modules/seo/home', 'normal', 'fa fa-globe', 0, 1, 0, NULL, 1, 9, NULL, '2019-08-07 05:41:35', '2019-09-09 14:33:42'),
(62, 'Menus', 'Module', 'menu_management_client', 'normal', 'fa fa-list-ul', 0, 1, 0, NULL, 1, 12, NULL, '2019-09-09 14:20:25', '2019-09-29 08:06:48'),
(100, 'Labels Translation', 'URL', '/modules/languages', 'normal', 'fa fa-pencil', 0, 1, 0, NULL, 1, 13, NULL, '2019-09-17 06:58:27', '2019-09-29 08:04:17'),
(112, 'Email Receivers', 'Route', 'AdminEmailReceiverControllerGetIndex', 'normal', 'fa fa-glass', 0, 1, 0, NULL, 1, 18, NULL, '2019-10-13 13:15:18', '2019-10-27 10:16:03'),
(123, 'Test', 'Route', 'AdminTblTest59ControllerGetIndex', NULL, 'fa fa-glass', 0, 1, 0, NULL, 1, 19, NULL, '2019-11-28 11:43:25', NULL),
(115, 'Pages and Forms', 'URL', '#', 'normal', 'fa fa-th-list', 0, 1, 0, NULL, 1, 1, NULL, '2019-11-11 11:15:53', NULL),
(116, 'Forms', 'Module', 'forms', 'normal', 'fa fa-files-o', 115, 1, 0, NULL, 1, 2, NULL, '2019-11-11 11:16:30', NULL),
(121, 'Pages', 'Route', 'AdminLandingPagesControllerGetIndex', 'normal', 'fa fa-list-alt', 115, 1, 0, NULL, 1, 1, NULL, '2019-11-13 08:04:34', '2019-11-14 10:33:55');

-- --------------------------------------------------------

--
-- Table structure for table `cms_menus_privileges`
--

DROP TABLE IF EXISTS `cms_menus_privileges`;
CREATE TABLE IF NOT EXISTS `cms_menus_privileges` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_cms_menus` int(11) DEFAULT NULL,
  `id_cms_privileges` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=258 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms_menus_privileges`
--

INSERT INTO `cms_menus_privileges` (`id`, `id_cms_menus`, `id_cms_privileges`) VALUES
(215, 54, 2),
(219, 55, 2),
(217, 56, 2),
(227, 57, 2),
(209, 58, 2),
(229, 59, 2),
(207, 60, 2),
(241, 61, 2),
(201, 62, 2),
(211, 63, 2),
(225, 64, 2),
(223, 65, 2),
(213, 66, 2),
(231, 67, 2),
(233, 68, 2),
(186, 37, 2),
(187, 37, 1),
(188, 69, 2),
(189, 69, 1),
(222, 70, 1),
(221, 70, 2),
(192, 71, 1),
(193, 72, 1),
(194, 73, 2),
(195, 73, 1),
(196, 74, 1),
(197, 100, 2),
(198, 100, 1),
(199, 102, 2),
(200, 102, 1),
(202, 62, 1),
(235, 104, 2),
(237, 105, 2),
(239, 112, 2),
(206, 113, 1),
(208, 60, 1),
(210, 58, 1),
(212, 63, 1),
(214, 66, 1),
(216, 54, 1),
(218, 56, 1),
(220, 55, 1),
(224, 65, 1),
(226, 64, 1),
(228, 57, 1),
(230, 59, 1),
(232, 67, 1),
(234, 68, 1),
(236, 104, 1),
(238, 105, 1),
(240, 112, 1),
(242, 61, 1),
(252, 114, 1),
(251, 114, 2),
(245, 115, 2),
(246, 115, 1),
(247, 116, 2),
(248, 116, 1),
(249, 117, 2),
(250, 117, 1),
(254, 121, 2),
(255, 121, 1),
(256, 122, 1),
(257, 123, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cms_moduls`
--

DROP TABLE IF EXISTS `cms_moduls`;
CREATE TABLE IF NOT EXISTS `cms_moduls` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_protected` tinyint(1) NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `hasImage` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `has_page_client` tinyint(4) DEFAULT '0',
  `main_field` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang_effected` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms_moduls`
--

INSERT INTO `cms_moduls` (`id`, `name`, `icon`, `path`, `table_name`, `controller`, `is_protected`, `is_active`, `hasImage`, `created_at`, `updated_at`, `deleted_at`, `has_page_client`, `main_field`, `lang_effected`) VALUES
(1, 'Notifications', 'fa fa-cog', 'notifications', 'cms_notifications', 'NotificationsController', 1, 1, 0, '2019-05-30 06:06:58', NULL, NULL, 0, NULL, NULL),
(2, 'Privileges', 'fa fa-cog', 'privileges', 'cms_privileges', 'PrivilegesController', 1, 1, 0, '2019-05-30 06:06:58', NULL, NULL, 0, NULL, NULL),
(3, 'Privileges Roles', 'fa fa-cog', 'privileges_roles', 'cms_privileges_roles', 'PrivilegesRolesController', 1, 1, 0, '2019-05-30 06:06:58', NULL, NULL, 0, NULL, NULL),
(4, 'Users Management', 'fa fa-users', 'users', 'cms_users', 'AdminCmsUsersController', 0, 1, 0, '2019-05-30 06:06:58', NULL, NULL, 0, NULL, NULL),
(5, 'Settings', 'fa fa-cog', 'settings', 'cms_settings', 'SettingsController', 1, 1, 0, '2019-05-30 06:06:58', NULL, NULL, 0, NULL, NULL),
(6, 'Module Generator', 'fa fa-database', 'module_generator', 'cms_moduls', 'ModulsController', 1, 1, 0, '2019-05-30 06:06:58', NULL, NULL, 0, NULL, NULL),
(7, 'Menu Management', 'fa fa-bars', 'menu_management', 'cms_menus', 'MenusController', 1, 1, 0, '2019-05-30 06:06:58', NULL, NULL, 0, NULL, NULL),
(8, 'Email Templates', 'fa fa-envelope-o', 'email_templates', 'cms_email_templates', 'EmailTemplatesController', 1, 1, 0, '2019-05-30 06:06:58', NULL, NULL, 0, NULL, NULL),
(9, 'Statistic Builder', 'fa fa-dashboard', 'statistic_builder', 'cms_statistics', 'StatisticBuilderController', 1, 1, 0, '2019-05-30 06:06:58', NULL, NULL, 0, NULL, NULL),
(10, 'API Generator', 'fa fa-cloud-download', 'api_generator', '', 'ApiCustomController', 1, 1, 0, '2019-05-30 06:06:58', NULL, NULL, 0, NULL, NULL),
(11, 'Log User Access', 'fa fa-flag-o', 'logs', 'cms_logs', 'LogsController', 1, 1, 0, '2019-05-30 06:06:58', NULL, NULL, 0, NULL, NULL),
(20, 'Menus', 'fa fa-list-ul', 'menu', 'menu', 'AdminMenuController', 0, 0, 0, '2019-09-09 14:20:25', NULL, NULL, 0, NULL, NULL),
(25, 'Social media', 'fa fa-glass', 'social_media', 'social_media', 'AdminSocialMediaController', 0, 0, 0, '2019-09-09 14:29:05', NULL, NULL, 0, NULL, NULL),
(28, 'Forms', 'fa fa-mail-forward', 'forms', 'forms', 'AdminFormsController', 0, 0, 0, '2019-09-10 12:42:22', NULL, NULL, 0, NULL, NULL),
(29, 'FormFields', 'fa fa-glass', 'form_field', 'form_field', 'AdminFormFieldController', 0, 0, 0, '2019-09-10 18:16:31', NULL, NULL, 0, NULL, NULL),
(52, 'Menu Management Client', 'fa fa-bars', 'menu_management_client', 'cms_menus', 'MenusClientController', 0, 1, 0, '2019-05-30 00:06:58', NULL, NULL, 0, NULL, NULL),
(55, 'Email Receivers', 'fa fa-glass', 'email_receiver', 'email_receiver', 'AdminEmailReceiverController', 0, 0, 0, '2019-10-13 13:15:12', NULL, NULL, 0, NULL, NULL),
(57, 'Pages', 'fa fa-glass', 'landing_pages', 'landing_pages', 'AdminLandingPagesController', 0, 0, 0, '2019-11-13 08:04:34', NULL, NULL, 0, NULL, NULL),
(58, 'Test', 'fa fa-glass', 'tbl_test', 'tbl_test', 'AdminTblTestController', 0, 0, 0, '2019-11-28 11:41:44', NULL, '2019-11-28 11:42:57', 1, 'name', 'record'),
(59, 'Test', 'fa fa-glass', 'tbl_test59', 'tbl_test', 'AdminTblTest59Controller', 0, 0, 0, '2019-11-28 11:43:25', NULL, NULL, 1, 'name', 'record');

-- --------------------------------------------------------

--
-- Table structure for table `cms_notifications`
--

DROP TABLE IF EXISTS `cms_notifications`;
CREATE TABLE IF NOT EXISTS `cms_notifications` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_cms_users` int(11) DEFAULT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_read` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cms_privileges`
--

DROP TABLE IF EXISTS `cms_privileges`;
CREATE TABLE IF NOT EXISTS `cms_privileges` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_superadmin` tinyint(1) DEFAULT NULL,
  `theme_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms_privileges`
--

INSERT INTO `cms_privileges` (`id`, `name`, `is_superadmin`, `theme_color`, `created_at`, `updated_at`) VALUES
(1, 'Super Administrator', 1, 'skin-red', '2019-05-30 06:06:58', NULL),
(2, 'normal user', 0, 'skin-red', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cms_privileges_roles`
--

DROP TABLE IF EXISTS `cms_privileges_roles`;
CREATE TABLE IF NOT EXISTS `cms_privileges_roles` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `is_visible` tinyint(1) DEFAULT NULL,
  `is_create` tinyint(1) DEFAULT NULL,
  `is_read` tinyint(1) DEFAULT NULL,
  `is_edit` tinyint(1) DEFAULT NULL,
  `is_delete` tinyint(1) DEFAULT NULL,
  `id_cms_privileges` int(11) DEFAULT NULL,
  `id_cms_moduls` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=71 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms_privileges_roles`
--

INSERT INTO `cms_privileges_roles` (`id`, `is_visible`, `is_create`, `is_read`, `is_edit`, `is_delete`, `id_cms_privileges`, `id_cms_moduls`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, 1, 1, 12, NULL, NULL),
(2, 1, 1, 1, 1, 1, 1, 13, NULL, NULL),
(3, 1, 1, 1, 1, 1, 1, 14, NULL, NULL),
(4, 1, 1, 1, 1, 1, 1, 15, NULL, NULL),
(5, 1, 1, 1, 1, 1, 1, 16, NULL, NULL),
(6, 1, 1, 1, 1, 1, 1, 17, NULL, NULL),
(7, 1, 1, 1, 1, 1, 1, 18, NULL, NULL),
(8, 1, 1, 1, 1, 1, 1, 19, NULL, NULL),
(9, 1, 1, 1, 1, 1, 1, 20, NULL, NULL),
(10, 1, 1, 1, 1, 1, 1, 21, NULL, NULL),
(11, 1, 1, 1, 1, 1, 1, 22, NULL, NULL),
(12, 1, 1, 1, 1, 1, 1, 23, NULL, NULL),
(13, 1, 1, 1, 1, 1, 1, 24, NULL, NULL),
(14, 1, 1, 1, 1, 1, 1, 25, NULL, NULL),
(15, 1, 1, 1, 1, 1, 1, 26, NULL, NULL),
(16, 1, 1, 1, 1, 1, 1, 27, NULL, NULL),
(17, 1, 1, 1, 1, 1, 1, 28, NULL, NULL),
(18, 1, 1, 1, 1, 1, 1, 29, NULL, NULL),
(19, 1, 1, 1, 1, 1, 1, 53, NULL, NULL),
(20, 1, 1, 1, 1, 1, 1, 54, NULL, NULL),
(21, 1, 1, 1, 1, 1, 1, 55, NULL, NULL),
(22, 1, 1, 1, 1, 1, 1, 56, NULL, NULL),
(56, 1, 1, 1, 1, 1, 1, 59, NULL, NULL),
(55, 1, 1, 1, 1, 1, 1, 58, NULL, NULL),
(54, 1, 1, 1, 1, 1, 2, 4, NULL, NULL),
(53, 1, 1, 1, 1, 1, 2, 25, NULL, NULL),
(52, 1, 1, 1, 1, 1, 2, 57, NULL, NULL),
(51, 1, 1, 1, 1, 1, 2, 20, NULL, NULL),
(50, 1, 1, 1, 1, 1, 2, 52, NULL, NULL),
(49, 1, 1, 1, 1, 1, 2, 28, NULL, NULL),
(48, 1, 1, 1, 1, 1, 2, 29, NULL, NULL),
(47, 1, 1, 1, 1, 1, 2, 55, NULL, NULL),
(46, 1, 1, 1, 1, 1, 1, 57, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cms_settings`
--

DROP TABLE IF EXISTS `cms_settings`;
CREATE TABLE IF NOT EXISTS `cms_settings` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `content_input_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dataenum` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `helper` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `group_setting` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms_settings`
--

INSERT INTO `cms_settings` (`id`, `name`, `content`, `content_input_type`, `dataenum`, `helper`, `created_at`, `updated_at`, `group_setting`, `label`) VALUES
(1, 'login_background_color', NULL, 'text', NULL, 'Input hexacode', '2019-05-30 06:06:58', NULL, 'Login Register Style', 'Login Background Color'),
(2, 'login_font_color', NULL, 'text', NULL, 'Input hexacode', '2019-05-30 06:06:58', NULL, 'Login Register Style', 'Login Font Color'),
(3, 'login_background_image', NULL, 'upload_image', NULL, NULL, '2019-05-30 06:06:58', NULL, 'Login Register Style', 'Login Background Image'),
(4, 'email_sender', 'info@domdomta.com', 'text', NULL, NULL, '2019-05-30 06:06:58', NULL, 'Email Setting', 'Email Sender'),
(5, 'smtp_driver', 'smtp', 'select', 'smtp,mail,sendmail', NULL, '2019-05-30 06:06:58', NULL, 'Email Setting', 'Mail Driver'),
(6, 'smtp_host', 'mail.voilahost.com', 'text', NULL, NULL, '2019-05-30 06:06:58', NULL, 'Email Setting', 'SMTP Host'),
(7, 'smtp_port', '465', 'text', NULL, 'default 25', '2019-05-30 06:06:58', NULL, 'Email Setting', 'SMTP Port'),
(8, 'smtp_username', 'info@domdomta.com', 'text', NULL, NULL, '2019-05-30 06:06:58', NULL, 'Email Setting', 'SMTP Username'),
(9, 'smtp_password', 'iQFhoZ6m12', 'text', NULL, NULL, '2019-05-30 06:06:58', NULL, 'Email Setting', 'SMTP Password'),
(10, 'appname', 'CMS Voila', 'text', NULL, NULL, '2019-05-30 06:06:58', NULL, 'Application Setting', 'Application Name'),
(11, 'default_paper_size', 'Legal', 'text', NULL, 'Paper size, ex : A4, Legal, etc', '2019-05-30 06:06:58', NULL, 'Application Setting', 'Default Paper Print Size'),
(12, 'logo', 'uploads/2019-11/bc8434249b214a4bf1cf55c8671f38f1.png', 'upload_image', NULL, NULL, '2019-05-30 06:06:58', NULL, 'Application Setting', 'Logo'),
(13, 'favicon', 'uploads/2019-11/001d874b14a004be36933953e0f56e81.png', 'upload_image', NULL, NULL, '2019-05-30 06:06:58', NULL, 'Application Setting', 'Favicon'),
(14, 'api_debug_mode', 'false', 'select', 'true,false', NULL, '2019-05-30 06:06:58', NULL, 'Application Setting', 'API Debug Mode'),
(15, 'google_api_key', NULL, 'text', NULL, NULL, '2019-05-30 06:06:58', NULL, 'Application Setting', 'Google API Key'),
(16, 'google_fcm_key', NULL, 'text', NULL, NULL, '2019-05-30 06:06:58', NULL, 'Application Setting', 'Google FCM Key');

-- --------------------------------------------------------

--
-- Table structure for table `cms_statistics`
--

DROP TABLE IF EXISTS `cms_statistics`;
CREATE TABLE IF NOT EXISTS `cms_statistics` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cms_statistic_components`
--

DROP TABLE IF EXISTS `cms_statistic_components`;
CREATE TABLE IF NOT EXISTS `cms_statistic_components` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_cms_statistics` int(11) DEFAULT NULL,
  `componentID` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `component_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area_name` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sorting` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `config` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms_statistic_components`
--

INSERT INTO `cms_statistic_components` (`id`, `id_cms_statistics`, `componentID`, `component_name`, `area_name`, `sorting`, `name`, `config`, `created_at`, `updated_at`) VALUES
(1, 2, 'e43e265a2e3a22218477d1bbca62ef97', 'smallbox', 'area1', 0, NULL, '{\"name\":\"Events Request\",\"icon\":\"ion-bag\",\"color\":\"bg-red\",\"link\":\"\\/admin\\/request_event\",\"sql\":\"select count(*) from request_events\"}', '2019-06-20 08:45:33', NULL),
(3, 2, '2ab24cc96db3a09f3efb8b7007125e00', 'smallbox', 'area2', 0, NULL, '{\"name\":\"Contact Us Requests\",\"icon\":\"ion-bag\",\"color\":\"bg-aqua\",\"link\":\"\\/admin\\/contact_us\",\"sql\":\"select count(*)  from contact_us\"}', '2019-06-20 08:53:35', NULL),
(4, 2, '5cfc7783207ae24ac240114a13521ea6', 'table', 'area5', 0, NULL, '{\"name\":\"Events\",\"sql\":\"select title_en as Title ,country,location, start_date as \'start Date\' , end_date as \'End Date\'  from events order by start_date desc\"}', '2019-06-26 07:53:31', NULL),
(5, 2, '40436fbc84fba971792d2a59862a03c5', 'smallbox', 'area3', 0, NULL, '{\"name\":\"Course Requests\",\"icon\":\"ion-bag\",\"color\":\"bg-yellow\",\"link\":\"\\/admin\\/request_course\",\"sql\":\"SELECT count( *) FROM `request_course`\"}', '2019-11-05 14:18:10', NULL),
(6, 2, '683394552c8f25051cfb7fdbbfeeafd3', 'chartarea', NULL, 0, 'Untitled', NULL, '2019-11-05 14:20:09', NULL),
(7, 2, '125b2f4fb803a4da9bfc3397232de911', 'chartarea', NULL, 0, 'Untitled', NULL, '2019-11-05 14:20:13', NULL),
(8, 2, '8cf4705d0d16ef23e7d44dffda63d471', 'smallbox', 'area4', 0, NULL, '{\"name\":\"Courses Count\",\"icon\":\"ion-bag\",\"color\":\"bg-green\",\"link\":\"\\/admin\\/courses\",\"sql\":\"SELECT count( *) FROM `courses`\"}', '2019-11-05 14:21:56', NULL),
(9, 2, '453235bcffcd5413269a2f37b5b7dfcd', 'chartarea', NULL, 0, 'Untitled', NULL, '2019-11-05 14:26:28', NULL),
(10, 2, 'c4b8bc5f16781681008bf7aab61400e8', 'chartarea', NULL, 0, 'Untitled', NULL, '2019-11-05 14:26:33', NULL),
(11, 2, '0268139a72f13ef8fe4077a1940af5c5', 'chartarea', 'area5', 0, NULL, '{\"name\":\"statistic\",\"sql\":\"select count(*) as value, b.title_en as label  from request_course a , courses b  where a.course_id=b.id group by label  Order by label\",\"area_name\":\"label\",\"goals\":null}', '2019-11-05 14:26:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cms_users`
--

DROP TABLE IF EXISTS `cms_users`;
CREATE TABLE IF NOT EXISTS `cms_users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_cms_privileges` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms_users`
--

INSERT INTO `cms_users` (`id`, `name`, `photo`, `email`, `password`, `id_cms_privileges`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Super Admin', '/images/portfolio1_logo.png', 'superadmin@voila.digital', '$2y$10$zUf73J0YOPbLH/fIHgC.wOIA2ADWJxxleMm4RJjvuC3AA6VtNC.U6', 1, '2019-05-30 06:06:58', '2019-10-27 10:10:45', 'Active'),
(2, 'admin taiba', '/images/portfolio1_logo.png', 'admin@voila.com', '$2y$10$zWJKFoTd0T/HKnXGUJJRyObPAyKR.mUbryT4nGWdlkHyFeaz8gf5e', 2, '2019-06-18 06:02:41', '2019-11-13 07:34:57', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `email_receiver`
--

DROP TABLE IF EXISTS `email_receiver`;
CREATE TABLE IF NOT EXISTS `email_receiver` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` longtext,
  `active` tinyint(4) DEFAULT '1',
  `sorting` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `email_receiver`
--

INSERT INTO `email_receiver` (`id`, `email`, `active`, `sorting`) VALUES
(2, 'balkis@voila.digital', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fields`
--

DROP TABLE IF EXISTS `fields`;
CREATE TABLE IF NOT EXISTS `fields` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) DEFAULT NULL,
  `multi` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fields`
--

INSERT INTO `fields` (`id`, `title`, `multi`) VALUES
(1, 'text', 0),
(2, 'email', 0),
(3, 'radio', 1),
(4, 'checkbox', 1),
(5, 'select', 1);

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

DROP TABLE IF EXISTS `forms`;
CREATE TABLE IF NOT EXISTS `forms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `response` longtext,
  `send_to` varchar(500) DEFAULT NULL,
  `row_type` varchar(500) DEFAULT NULL,
  `sorting` tinyint(4) DEFAULT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id`, `name`, `response`, `send_to`, `row_type`, `sorting`, `active`) VALUES
(1, 'First Form Aviation taiba', 'thank you for your submit ..', 'fesalali05@gmai.com', 'col-lg-12', NULL, 1),
(2, 'Test Form', 'Thanks', 'eman@voila.digital', 'col-lg-12', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `form_field`
--

DROP TABLE IF EXISTS `form_field`;
CREATE TABLE IF NOT EXISTS `form_field` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `form_id` int(11) DEFAULT NULL,
  `field_id` int(11) DEFAULT NULL,
  `required_filed` varchar(10) DEFAULT NULL,
  `label_filed` varchar(20) DEFAULT NULL,
  `values` varchar(500) DEFAULT NULL,
  `active` tinyint(4) DEFAULT '1',
  `sorting` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `form_field`
--

INSERT INTO `form_field` (`id`, `form_id`, `field_id`, `required_filed`, `label_filed`, `values`, `active`, `sorting`) VALUES
(10, 1, 3, 'No', 'Gender', 'female , male', 1, 1),
(11, 1, 5, 'No', 'Country', 'syria,lebanon', 1, 2),
(12, 1, 4, 'Yes', 'lang', 'ar , en', 1, 3),
(13, 1, 1, 'Yes', 'First Name', NULL, 1, 4),
(14, 1, 2, 'Yes', 'Email  Address', NULL, 1, 5),
(15, 1, 1, 'Yes', 'age', NULL, 1, 6),
(16, 2, 1, 'Yes', 'Name', NULL, 1, 1),
(17, 2, 4, 'Yes', 'Email', 'eman , test', 1, 2),
(18, 2, 2, 'Yes', 'email', NULL, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `image_model`
--

DROP TABLE IF EXISTS `image_model`;
CREATE TABLE IF NOT EXISTS `image_model` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `model` enum('product','news') DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `path` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `landing_pages`
--

DROP TABLE IF EXISTS `landing_pages`;
CREATE TABLE IF NOT EXISTS `landing_pages` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `background` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background_image` longtext COLLATE utf8mb4_unicode_ci,
  `from_scratch` tinyint(1) DEFAULT NULL,
  `background_color` longtext COLLATE utf8mb4_unicode_ci,
  `sorting` int(11) DEFAULT NULL,
  `active` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=71 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `landing_pages`
--

INSERT INTO `landing_pages` (`id`, `title`, `code`, `is_active`, `created_at`, `updated_at`, `background`, `background_image`, `from_scratch`, `background_color`, `sorting`, `active`) VALUES
(70, 'Landing Title', '<section class=\"ge-sect\"><div class=\"container bs-container\"><div class=\"row ge-row ui-sortable\"><div class=\"col-sm-12 col-xs-12 column ui-sortable col-md-9\" style=\"\"><div class=\"ge-content ge-content-type-tinymce ui-droppable\" data-ge-content-type=\"tinymce\" style=\"background-color: inherit;\" data-fe-type=\"form\" data-form-id=\"1\"><div class=\"col-xs-12\"><form method=\"POST\" data-form=\"1\" action=\"/request/form/1\" class=\"col-lg-12 well\" style=\"background:#FFF\">1</form></div></div></div><div class=\"col-md-3 col-sm-3 col-xs-12 column ui-sortable\"><div class=\"ge-content ge-content-type-tinymce ui-droppable\" data-ge-content-type=\"tinymce\" style=\"background-color: inherit;\" data-fe-type=\"image\"><img src=\"/images/service6.jpg\" alt=\"/images/service6.jpg\" class=\"img-responsive\"></div></div><div class=\"col-md-3 col-sm-3 col-xs-12 column ui-sortable\"><div class=\"ge-content ge-content-type-tinymce ui-droppable\" data-ge-content-type=\"tinymce\" style=\"background-color: inherit;\"></div></div></div></div></section>', 1, '2019-11-21 12:36:41', '2019-11-21 12:36:41', 'rgba(0, 0, 0, 0) none repeat scroll 0% 0% / auto padding-box border-box', NULL, 1, NULL, NULL, 1),
(69, 'Landing Title', '<section class=\"ge-sect\"><div class=\"container bs-container\"><div class=\"row ge-row ui-sortable\"><div class=\"col-md-6 col-sm-6 col-xs-12 column ui-sortable\"><div class=\"ge-content ge-content-type-tinymce ui-droppable\" data-ge-content-type=\"tinymce\" style=\"background-color: inherit;\" data-fe-type=\"form\" data-form-id=\"1\"><div class=\"col-xs-12\"><form method=\"POST\" data-form=\"1\" action=\"/request/form/1\" class=\"col-lg-12 well\" style=\"background:#FFF\">1</form></div></div></div><div class=\"col-md-6 col-sm-6 col-xs-12 column ui-sortable\"><div class=\"ge-content ge-content-type-tinymce ui-droppable\" data-ge-content-type=\"tinymce\" style=\"background-color: inherit;\"></div></div></div></div></section>', 1, '2019-11-17 04:48:43', '2019-11-17 04:48:43', 'rgba(0, 0, 0, 0) none repeat scroll 0% 0% / auto padding-box border-box', NULL, 1, NULL, NULL, 1),
(68, 'Landing Title', '<section class=\"ge-sect\"><div class=\"container bs-container\"></div></section><section class=\"ge-sect\"><div class=\"container bs-container\"><div class=\"row ge-row ui-sortable\"><div class=\"col-md-5 col-sm-5 col-xs-12 column ui-sortable\"><div class=\"ge-content ge-content-type-tinymce ui-droppable\" data-ge-content-type=\"tinymce\" style=\"background-color: inherit;\" data-fe-type=\"form\" data-form-id=\"2\"><div class=\"col-xs-12\"><form method=\"POST\" data-form=\"2\" action=\"/request/form/2\" class=\"col-lg-12 well\" style=\"background: rgb(255, 255, 255);\">2</form></div></div></div><div class=\"col-sm-3 col-xs-12 column ui-sortable col-md-7\" style=\"\"><div class=\"ge-content ge-content-type-tinymce ui-droppable\" data-ge-content-type=\"tinymce\" style=\"background-color: inherit;\" data-fe-type=\"form\" data-form-id=\"1\"><div class=\"col-xs-12\"><form method=\"POST\" data-form=\"1\" action=\"/request/form/1\" class=\"col-lg-12 well\" style=\"background:#FFF\">1</form></div></div></div></div></div></section>', 1, '2019-11-14 10:34:58', '2019-11-14 11:49:29', 'rgba(0, 0, 0, 0) none repeat scroll 0% 0% / auto padding-box border-box', NULL, 1, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

DROP TABLE IF EXISTS `languages`;
CREATE TABLE IF NOT EXISTS `languages` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `code`, `created_at`, `updated_at`) VALUES
(1, 'English', 'en', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `title_en` varchar(200) DEFAULT NULL,
  `title_ar` varchar(200) DEFAULT NULL,
  `url` varchar(300) DEFAULT NULL,
  `cms_moduls_id` int(11) DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT '1',
  `order_item` int(11) DEFAULT NULL,
  `sorting` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2016_08_07_145904_add_table_cms_apicustom', 1),
(2, '2016_08_07_150834_add_table_cms_dashboard', 1),
(3, '2016_08_07_151210_add_table_cms_logs', 1),
(4, '2016_08_07_151211_add_details_cms_logs', 1),
(5, '2016_08_07_152014_add_table_cms_privileges', 1),
(6, '2016_08_07_152214_add_table_cms_privileges_roles', 1),
(7, '2016_08_07_152320_add_table_cms_settings', 1),
(8, '2016_08_07_152421_add_table_cms_users', 1),
(9, '2016_08_07_154624_add_table_cms_menus_privileges', 1),
(10, '2016_08_07_154624_add_table_cms_moduls', 1),
(11, '2016_08_17_225409_add_status_cms_users', 1),
(12, '2016_08_20_125418_add_table_cms_notifications', 1),
(13, '2016_09_04_033706_add_table_cms_email_queues', 1),
(14, '2016_09_16_035347_add_group_setting', 1),
(15, '2016_09_16_045425_add_label_setting', 1),
(16, '2016_09_17_104728_create_nullable_cms_apicustom', 1),
(17, '2016_10_01_141740_add_method_type_apicustom', 1),
(18, '2016_10_01_141846_add_parameters_apicustom', 1),
(19, '2016_10_01_141934_add_responses_apicustom', 1),
(20, '2016_10_01_144826_add_table_apikey', 1),
(21, '2016_11_14_141657_create_cms_menus', 1),
(22, '2016_11_15_132350_create_cms_email_templates', 1),
(23, '2016_11_15_190410_create_cms_statistics', 1),
(24, '2016_11_17_102740_create_cms_statistic_components', 1),
(25, '2017_06_06_164501_add_deleted_at_cms_moduls', 1);

-- --------------------------------------------------------

--
-- Table structure for table `seo`
--

DROP TABLE IF EXISTS `seo`;
CREATE TABLE IF NOT EXISTS `seo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description_en` varchar(3000) DEFAULT NULL,
  `description_ar` varchar(3000) DEFAULT NULL,
  `keywords_en` varchar(3000) DEFAULT NULL,
  `keywords_ar` varchar(3000) DEFAULT NULL,
  `author_en` varchar(3000) DEFAULT NULL,
  `author_ar` varchar(3000) DEFAULT NULL,
  `title_ar` varchar(3000) DEFAULT NULL,
  `model` varchar(50) DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `title_en` varchar(300) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `image` varchar(400) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `seo`
--

INSERT INTO `seo` (`id`, `description_en`, `description_ar`, `keywords_en`, `keywords_ar`, `author_en`, `author_ar`, `title_ar`, `model`, `model_id`, `title_en`, `created_at`, `updated_at`, `image`) VALUES
(42, 'Horizons Taiba Aviation Support and Services launched operation on January 2015. It is a company owned by knowledgeable and well-experienced individuals who also have extensive experience in the aviation industry.', 'Horizons Taiba Aviation Support and Services launched operation on January 2015. It is a company owned by knowledgeable and well-experienced individuals who also have extensive experience in the aviation industry.', 'Horizons Taiba Aviation Support and Services launched operation on January 2015. It is a company owned by knowledgeable and well-experienced individuals who also have extensive experience in the aviation industry.', 'Horizons Taiba Aviation Support and Services launched operation on January 2015. It is a company owned by knowledgeable and well-experienced individuals who also have extensive experience in the aviation industry.', 'Horizons Taiba', 'Horizons Taiba', 'Horizons Taiba Aviation Support and Services launched operation on January 2015. It is a company owned by knowledgeable and well-experienced individuals who also have extensive experience in the aviation industry.', 'course', NULL, 'Horizons Taiba Aviation Support and Services launched operation on January 2015. It is a company owned by knowledgeable and well-experienced individuals who also have extensive experience in the aviation industry.', '2019-09-10', '2019-09-10', NULL),
(45, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'event', NULL, NULL, '2019-11-05', '2019-11-05', NULL),
(46, 'bvsdfvsfd', NULL, 'sds , qewr', 'ewrfqwef , rewqew', 'Maysaa Al Ahmar', NULL, 'svdfvsdfbv', 'news', NULL, 'csvsfv', '2019-11-12', '2019-11-12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

DROP TABLE IF EXISTS `social_media`;
CREATE TABLE IF NOT EXISTS `social_media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_en` varchar(200) DEFAULT NULL,
  `title_ar` varchar(200) DEFAULT NULL,
  `icon` varchar(200) DEFAULT NULL,
  `value` varchar(200) DEFAULT NULL,
  `sorting` int(11) DEFAULT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `title_en`, `title_ar`, `icon`, `value`, `sorting`, `active`) VALUES
(1, 'facebook', NULL, 'fa fa-facebook-f', 'https://www.facebook.com', 1, 1),
(2, 'twitter', NULL, 'fa fa-twitter', 'https://twitter.com', 5, 1),
(3, 'instagram', NULL, 'fa fa-instagram', 'https://www.instagram.com/', 3, 1),
(4, 'youtube', NULL, 'fa fa-youtube-play', 'https://www.youtube.com', 4, 1),
(5, 'linkedin', NULL, 'fa fa-linkedin', 'https://www.linkedin.com/', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_test`
--

DROP TABLE IF EXISTS `tbl_test`;
CREATE TABLE IF NOT EXISTS `tbl_test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `active` tinyint(4) DEFAULT '1',
  `sorting` int(11) DEFAULT NULL,
  `lang_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
