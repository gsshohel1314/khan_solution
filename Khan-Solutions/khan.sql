-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2020 at 09:43 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `khan`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `ban_id` bigint(20) UNSIGNED NOT NULL,
  `ban_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ban_details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ban_button` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ban_button_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ban_image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ban_slug` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ban_publish` int(11) NOT NULL DEFAULT 0,
  `ban_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`ban_id`, `ban_title`, `ban_details`, `ban_button`, `ban_button_url`, `ban_image`, `ban_slug`, `ban_publish`, `ban_status`, `created_at`, `updated_at`) VALUES
(1, 'YOUR PROJECT HASSLE-FREE', 'CREATIVE / MULTIPURPOSE / COLORFUL', 'Read More', '#', 'banner_1_1579429163.jpg', 'BAN205e242d2b3777c', 0, 1, '2020-01-19 10:19:23', '2020-01-19 10:19:23'),
(2, 'YOUR PROJECT HASSLE-FREE', 'CREATIVE / MULTIPURPOSE / COLORFUL', 'View More', '#', 'banner_2_1579429207.jpg', 'BAN205e242d5760666', 0, 1, '2020-01-19 10:20:07', '2020-01-19 10:20:07');

-- --------------------------------------------------------

--
-- Table structure for table `basics`
--

CREATE TABLE `basics` (
  `basic_id` bigint(20) UNSIGNED NOT NULL,
  `basic_title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `basic_subtitle` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `basic_details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `basic_logo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `basic_favicon` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `basic_flogo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `basic_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `basics`
--

INSERT INTO `basics` (`basic_id`, `basic_title`, `basic_subtitle`, `basic_details`, `basic_logo`, `basic_favicon`, `basic_flogo`, `basic_status`, `created_at`, `updated_at`) VALUES
(1, 'Khan Solutions', 'International Software Company', 'Khan Solutions is International Based Software Company.', 'logo_1570104088.png', 'favicon_1570104089.png', 'flogo_1570104089.png', 1, '2020-01-19 10:54:18', '2020-01-19 10:54:18');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `bcate_id` bigint(20) UNSIGNED NOT NULL,
  `bcate_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bcate_slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bcate_creator` int(11) NOT NULL,
  `bcate_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `post_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_photo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_creator` int(11) NOT NULL,
  `post_category` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `post_tag` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `post_slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_publish` int(11) NOT NULL DEFAULT 0,
  `post_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contactuses`
--

CREATE TABLE `contactuses` (
  `conus_id` bigint(20) UNSIGNED NOT NULL,
  `conus_name` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conus_email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conus_phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conus_sub` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conus_mess` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conus_slug` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conus_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_information`
--

CREATE TABLE `contact_information` (
  `cont_id` bigint(20) UNSIGNED NOT NULL,
  `cont_phone1` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cont_phone2` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cont_phone3` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cont_phone4` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cont_email1` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cont_email2` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cont_email3` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cont_email4` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cont_add1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cont_add2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cont_add3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cont_add4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cont_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_information`
--

INSERT INTO `contact_information` (`cont_id`, `cont_phone1`, `cont_phone2`, `cont_phone3`, `cont_phone4`, `cont_email1`, `cont_email2`, `cont_email3`, `cont_email4`, `cont_add1`, `cont_add2`, `cont_add3`, `cont_add4`, `cont_status`, `created_at`, `updated_at`) VALUES
(1, '(123) 456 74700', '(123) 456 78700', '', '', 'info@domain.com', '', '', '', '121 King Street, Melbourne, Victoria 3000, AUS.', '', '', '', 1, '2019-10-03 01:00:00', '2020-01-19 11:05:14');

-- --------------------------------------------------------

--
-- Table structure for table `copyrights`
--

CREATE TABLE `copyrights` (
  `copy_id` bigint(20) UNSIGNED NOT NULL,
  `copy_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copy_creator` int(11) NOT NULL,
  `copy_slug` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `copy_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `copyrights`
--

INSERT INTO `copyrights` (`copy_id`, `copy_title`, `copy_creator`, `copy_slug`, `copy_status`, `created_at`, `updated_at`) VALUES
(1, 'Copyright © 2019 Dashboard', 1, 'C98qw1287we2', 1, '2019-10-05 02:00:00', '2019-10-05 06:40:57');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `gallery_id` bigint(20) UNSIGNED NOT NULL,
  `gallery_title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gcate_id` int(11) NOT NULL,
  `gallery_photo` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery_creator` int(11) NOT NULL,
  `gallery_status` int(11) NOT NULL DEFAULT 1,
  `gallery_slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery_categories`
--

CREATE TABLE `gallery_categories` (
  `gcate_id` bigint(20) UNSIGNED NOT NULL,
  `gcate_name` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gcate_remarks` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gcate_slug` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gcate_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_09_09_115434_create_user_roles_table', 2),
(5, '2019_10_03_110128_create_social_media_table', 3),
(6, '2019_10_03_110441_create_contact_information_table', 4),
(7, '2019_10_03_110726_create_basics_table', 5),
(8, '2019_10_03_111242_create_copyrights_table', 6),
(9, '2019_10_03_111541_create_contactuses_table', 7),
(10, '2019_10_03_111751_create_banners_table', 8),
(11, '2019_10_03_112106_create_partners_table', 9),
(12, '2019_10_07_121305_create_gallery_categories_table', 10),
(13, '2019_10_08_135020_create_galleries_table', 11),
(14, '2019_10_09_112129_create_tags_table', 12),
(15, '2019_10_09_113214_create_blog_categories_table', 13),
(16, '2019_10_09_144423_create_blog_posts_table', 14),
(17, '2019_11_06_113026_create_testimonials_table', 15),
(18, '2019_11_06_113603_create_newsletter_subscribers_table', 16),
(19, '2019_11_06_113847_create_pages_table', 17),
(20, '2019_11_06_114134_create_page_contents_table', 18),
(21, '2019_11_07_105710_create_teams_table', 19);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter_subscribers`
--

CREATE TABLE `newsletter_subscribers` (
  `ns_id` bigint(20) UNSIGNED NOT NULL,
  `ns_email` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ns_slug` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ns_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `page_id` bigint(20) UNSIGNED NOT NULL,
  `page_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `page_contents`
--

CREATE TABLE `page_contents` (
  `pc_id` bigint(20) UNSIGNED NOT NULL,
  `page_id` int(11) NOT NULL,
  `pc_title` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pc_subtitle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pc_details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pc_photo` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pc_slug` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pc_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `partner_id` bigint(20) UNSIGNED NOT NULL,
  `partner_title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `partner_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `partner_logo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `partner_slug` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `partner_publish` int(11) NOT NULL DEFAULT 1,
  `partner_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`partner_id`, `partner_title`, `partner_url`, `partner_logo`, `partner_slug`, `partner_publish`, `partner_status`, `created_at`, `updated_at`) VALUES
(1, 'Company Name', '#', 'partner_1_1579437513.png', 'P205e244dc94f361', 1, 1, '2020-01-19 12:38:33', '2020-01-19 12:38:33'),
(3, 'Company Name-02', '#', 'partner_3_1579437556.png', 'P205e244df415904', 1, 1, '2020-01-19 12:39:16', '2020-01-19 12:39:16'),
(4, 'Company Name-03', '#', 'partner_4_1579437577.png', 'P205e244e09b1fce', 1, 1, '2020-01-19 12:39:37', '2020-01-19 12:39:37'),
(5, 'Company Name-04', '#', 'partner_5_1579437593.png', 'P205e244e1942008', 1, 1, '2020-01-19 12:39:53', '2020-01-19 12:39:53'),
(6, 'Company Name-05', '#', 'partner_6_1579437606.png', 'P205e244e265a99a', 1, 1, '2020-01-19 12:40:06', '2020-01-19 12:40:06');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('uzzalbd.creative@gmail.com', '$2y$10$O3aDJ6Jd1ggblvOdOL98ne2mI0tYC/g2WebALYxDtfWdS5XiepU8y', '2019-09-09 07:11:28');

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `sm_id` bigint(20) UNSIGNED NOT NULL,
  `sm_facebook` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_twitter` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_linkedin` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_google` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_youtube` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_pinterest` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_flickr` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_vimeo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_skype` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_rss` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`sm_id`, `sm_facebook`, `sm_twitter`, `sm_linkedin`, `sm_google`, `sm_youtube`, `sm_pinterest`, `sm_flickr`, `sm_vimeo`, `sm_skype`, `sm_rss`, `sm_status`, `created_at`, `updated_at`) VALUES
(1, '#', '#', '#', '#', '#', '#', '#', '#', '#', '#', 1, '2019-10-03 00:00:00', '2019-10-03 12:06:57');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `tag_name` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag_slug` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag_creator` int(11) NOT NULL,
  `tag_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `team_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_designation` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team_details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team_photo` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team_facebook` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team_twitter` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team_linkedin` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team_pinterest` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team_google` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team_youtube` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team_slug` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team_publish` int(11) NOT NULL DEFAULT 0,
  `team_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`team_id`, `team_name`, `team_designation`, `team_details`, `team_photo`, `team_facebook`, `team_twitter`, `team_linkedin`, `team_pinterest`, `team_google`, `team_youtube`, `team_slug`, `team_publish`, `team_status`, `created_at`, `updated_at`) VALUES
(1, 'Saidul Islam Uzzal', 'CEO', 'eqwe wqewq ewq', NULL, 'a', 'b', 'c', 'd', 'e', 'f', 'T5dc407f718bbc', 0, 1, '2019-11-07 12:03:03', NULL),
(2, 'Saidul Islam Uzzal', 'CEO', 'rtrt y yryr r yyry r', NULL, 'https://www.facebook.com/', '#', 'http://linkedin.com/', 'pin', 'goo', 'youtube.com', 'T5dc7b12b69f22', 0, 1, '2019-11-10 06:41:47', NULL),
(3, 'Saidul Islam Uzzal', 'CEO', 'rtrt y yryr r yyry r', NULL, 'https://www.facebook.com/', '#', 'http://linkedin.com/', 'pin', 'goo', 'youtube.com', 'T5dc7b149b5843', 0, 1, '2019-11-10 06:42:17', NULL),
(4, 'Saidul Islam Uzzal aaa', 'CEO aa', 'rtrt y yryr r yyry r qq', 'team_4_1573376727.png', 'https://www.facebook.com/1', '#1', 'http://linkedin.com/1', 'pin1', 'goo1', 'youtube.com1', 'T5dc7b17ef1bc8', 0, 1, '2019-11-10 06:43:10', '2019-11-10 09:05:27');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `tm_id` bigint(20) UNSIGNED NOT NULL,
  `tm_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tm_designation` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tm_company` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tm_review` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tm_image` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tm_slug` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tm_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(11) NOT NULL DEFAULT 5,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `photo`, `role_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Saidul Islam Uzzal', '01710726035', 'uzzalbd', 'uzzalbd.creative@gmail.com', NULL, '$2y$10$FT6089P.vxr3rIXi7ZDf7Oq61jcS2GafizxlTnRkpVkcJrdKTjKHq', NULL, 'user_1_1568273089.jpg', 1, 1, '2019-09-12 07:24:49', '2019-10-18 05:40:25'),
(2, 'Creative Shaper', '01966999777', 'creative', 'creative@gmail.com', NULL, '$2y$10$VE28KKsZRyokLng9jzgfdO.0MmjW6wskIIQxANBwsCBfKyAeh9wdO', NULL, 'user_2_1571380499.png', 2, 1, '2019-10-18 06:34:59', '2019-10-18 06:35:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `role_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_status` int(11) NOT NULL DEFAULT 1,
  `role_slug` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`role_id`, `role_name`, `role_status`, `role_slug`, `created_at`, `updated_at`) VALUES
(1, 'Superadmin', 1, '77wewew88', '2019-09-09 01:00:00', NULL),
(2, 'Admin', 1, 'wqewe55', '2019-09-08 23:00:00', NULL),
(3, 'Author', 1, 'urwwewe87e33', '2019-09-09 00:00:00', NULL),
(4, 'Editor', 1, 'wety8897qqw', '2019-09-09 01:00:00', NULL),
(5, 'Subscriber', 1, 'wewet77612uy', '2019-09-09 01:00:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`ban_id`);

--
-- Indexes for table `basics`
--
ALTER TABLE `basics`
  ADD PRIMARY KEY (`basic_id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`bcate_id`),
  ADD UNIQUE KEY `blog_categories_bcate_name_unique` (`bcate_name`);

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`post_id`),
  ADD UNIQUE KEY `blog_posts_post_title_unique` (`post_title`);

--
-- Indexes for table `contactuses`
--
ALTER TABLE `contactuses`
  ADD PRIMARY KEY (`conus_id`);

--
-- Indexes for table `contact_information`
--
ALTER TABLE `contact_information`
  ADD PRIMARY KEY (`cont_id`);

--
-- Indexes for table `copyrights`
--
ALTER TABLE `copyrights`
  ADD PRIMARY KEY (`copy_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `gallery_categories`
--
ALTER TABLE `gallery_categories`
  ADD PRIMARY KEY (`gcate_id`),
  ADD UNIQUE KEY `gallery_categories_gcate_name_unique` (`gcate_name`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter_subscribers`
--
ALTER TABLE `newsletter_subscribers`
  ADD PRIMARY KEY (`ns_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`page_id`),
  ADD UNIQUE KEY `pages_page_name_unique` (`page_name`);

--
-- Indexes for table `page_contents`
--
ALTER TABLE `page_contents`
  ADD PRIMARY KEY (`pc_id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`partner_id`),
  ADD UNIQUE KEY `partners_partner_title_unique` (`partner_title`),
  ADD UNIQUE KEY `partners_partner_slug_unique` (`partner_slug`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`sm_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`tag_id`),
  ADD UNIQUE KEY `tags_tag_name_unique` (`tag_name`),
  ADD UNIQUE KEY `tag_slug` (`tag_slug`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`tm_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `ban_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `basics`
--
ALTER TABLE `basics`
  MODIFY `basic_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `bcate_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `post_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contactuses`
--
ALTER TABLE `contactuses`
  MODIFY `conus_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_information`
--
ALTER TABLE `contact_information`
  MODIFY `cont_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `copyrights`
--
ALTER TABLE `copyrights`
  MODIFY `copy_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `gallery_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery_categories`
--
ALTER TABLE `gallery_categories`
  MODIFY `gcate_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `newsletter_subscribers`
--
ALTER TABLE `newsletter_subscribers`
  MODIFY `ns_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `page_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `page_contents`
--
ALTER TABLE `page_contents`
  MODIFY `pc_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `partner_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `sm_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `tag_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `team_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `tm_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `role_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
