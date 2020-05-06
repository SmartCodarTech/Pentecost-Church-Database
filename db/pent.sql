-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2020 at 10:33 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pent`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_name`, `created_at`, `updated_at`) VALUES
(1, 'English Service', '2020-04-29 00:41:40', '2020-04-29 00:41:40'),
(2, 'Twi Service', '2020-04-29 00:42:55', '2020-04-29 00:42:55'),
(3, 'Children Service', '2020-04-29 00:44:34', '2020-04-29 00:44:34');

-- --------------------------------------------------------

--
-- Table structure for table `cells`
--

CREATE TABLE `cells` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cell_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cell_center` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cell_leader` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cell_location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cells`
--

INSERT INTO `cells` (`id`, `cell_name`, `cell_center`, `cell_leader`, `cell_location`, `created_at`, `updated_at`) VALUES
(1, 'Glorious House', 'Aworshie', 'Mr Prince', 'Alang Taxi Rank', '2020-04-29 03:17:01', '2020-04-29 03:17:01'),
(2, 'Jesus Tower', 'Aworshie', 'Elder Thompson', 'Alang', '2020-04-29 03:19:12', '2020-04-29 03:19:12');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Afghanistan ', NULL, NULL),
(2, 'Albania ', NULL, NULL),
(3, 'Algeria ', NULL, NULL),
(4, 'American Samoa ', NULL, NULL),
(5, 'Andorra ', NULL, NULL),
(6, 'Angola ', NULL, NULL),
(7, 'Anguilla ', NULL, NULL),
(8, 'Antigua & Barbuda ', NULL, NULL),
(9, 'Argentina ', NULL, NULL),
(10, 'Armenia ', NULL, NULL),
(11, 'Aruba ', NULL, NULL),
(12, 'Australia ', NULL, NULL),
(13, 'Austria ', NULL, NULL),
(14, 'Azerbaijan ', NULL, NULL),
(15, 'Bahamas, The ', NULL, NULL),
(16, 'Bahrain ', NULL, NULL),
(17, 'Bangladesh ', NULL, NULL),
(18, 'Barbados ', NULL, NULL),
(19, 'Belarus ', NULL, NULL),
(20, 'Belgium ', NULL, NULL),
(21, 'Belize ', NULL, NULL),
(22, 'Benin ', NULL, NULL),
(23, 'Bermuda ', NULL, NULL),
(24, 'Bhutan ', NULL, NULL),
(25, 'Bolivia ', NULL, NULL),
(26, 'Bosnia & Herzegovina ', NULL, NULL),
(27, 'Botswana ', NULL, NULL),
(28, 'Brazil ', NULL, NULL),
(29, 'British Virgin Is. ', NULL, NULL),
(30, 'Brunei ', NULL, NULL),
(31, 'Bulgaria ', NULL, NULL),
(32, 'Burkina Faso ', NULL, NULL),
(33, 'Burma ', NULL, NULL),
(34, 'Burundi ', NULL, NULL),
(35, 'Cambodia ', NULL, NULL),
(36, 'Cameroon ', NULL, NULL),
(37, 'Canada ', NULL, NULL),
(38, 'Cape Verde ', NULL, NULL),
(39, 'Cayman Islands ', NULL, NULL),
(40, 'Central African Rep. ', NULL, NULL),
(41, 'Chad ', NULL, NULL),
(42, 'Chile ', NULL, NULL),
(43, 'China ', NULL, NULL),
(44, 'Colombia ', NULL, NULL),
(45, 'Comoros ', NULL, NULL),
(46, 'Congo, Dem. Rep. ', NULL, NULL),
(47, 'Congo, Repub. of the ', NULL, NULL),
(48, 'Cook Islands ', NULL, NULL),
(49, 'Costa Rica ', NULL, NULL),
(50, 'Cote d\'Ivoire ', NULL, NULL),
(51, 'Croatia ', NULL, NULL),
(52, 'Cuba ', NULL, NULL),
(53, 'Cyprus ', NULL, NULL),
(54, 'Czech Republic ', NULL, NULL),
(55, 'Denmark ', NULL, NULL),
(56, 'Djibouti ', NULL, NULL),
(57, 'Dominica ', NULL, NULL),
(58, 'Dominican Republic ', NULL, NULL),
(59, 'East Timor ', NULL, NULL),
(60, 'Ecuador ', NULL, NULL),
(61, 'Egypt ', NULL, NULL),
(62, 'El Salvador ', NULL, NULL),
(63, 'Equatorial Guinea ', NULL, NULL),
(64, 'Eritrea ', NULL, NULL),
(65, 'Estonia ', NULL, NULL),
(66, 'Ethiopia ', NULL, NULL),
(67, 'Faroe Islands ', NULL, NULL),
(68, 'Fiji ', NULL, NULL),
(69, 'Finland ', NULL, NULL),
(70, 'France ', NULL, NULL),
(71, 'French Guiana ', NULL, NULL),
(72, 'French Polynesia ', NULL, NULL),
(73, 'Gabon ', NULL, NULL),
(74, 'Gambia, The ', NULL, NULL),
(75, 'Gaza Strip ', NULL, NULL),
(76, 'Georgia ', NULL, NULL),
(77, 'Germany ', NULL, NULL),
(78, 'Ghana ', NULL, NULL),
(79, 'Gibraltar ', NULL, NULL),
(80, 'Greece ', NULL, NULL),
(81, 'Greenland ', NULL, NULL),
(82, 'Grenada ', NULL, NULL),
(83, 'Guadeloupe ', NULL, NULL),
(84, 'Guam ', NULL, NULL),
(85, 'Guatemala ', NULL, NULL),
(86, 'Guernsey ', NULL, NULL),
(87, 'Guinea ', NULL, NULL),
(88, 'Guinea-Bissau ', NULL, NULL),
(89, 'Guyana ', NULL, NULL),
(90, 'Haiti ', NULL, NULL),
(91, 'Honduras ', NULL, NULL),
(92, 'Hong Kong ', NULL, NULL),
(93, 'Hungary ', NULL, NULL),
(94, 'Iceland ', NULL, NULL),
(95, 'India ', NULL, NULL),
(96, 'Indonesia ', NULL, NULL),
(97, 'Iran ', NULL, NULL),
(98, 'Iraq ', NULL, NULL),
(99, 'Ireland ', NULL, NULL),
(100, 'Isle of Man ', NULL, NULL),
(101, 'Israel ', NULL, NULL),
(102, 'Italy ', NULL, NULL),
(103, 'Jamaica ', NULL, NULL),
(104, 'Japan ', NULL, NULL),
(105, 'Jersey ', NULL, NULL),
(106, 'Jordan ', NULL, NULL),
(107, 'Kazakhstan ', NULL, NULL),
(108, 'Kenya ', NULL, NULL),
(109, 'Kiribati ', NULL, NULL),
(110, 'Korea, North ', NULL, NULL),
(111, 'Korea, South ', NULL, NULL),
(112, 'Kuwait ', NULL, NULL),
(113, 'Kyrgyzstan ', NULL, NULL),
(114, 'Laos ', NULL, NULL),
(115, 'Latvia ', NULL, NULL),
(116, 'Lebanon ', NULL, NULL),
(117, 'Lesotho ', NULL, NULL),
(118, 'Liberia ', NULL, NULL),
(119, 'Libya ', NULL, NULL),
(120, 'Liechtenstein ', NULL, NULL),
(121, 'Lithuania ', NULL, NULL),
(122, 'Luxembourg ', NULL, NULL),
(123, 'Macau ', NULL, NULL),
(124, 'Macedonia ', NULL, NULL),
(125, 'Madagascar ', NULL, NULL),
(126, 'Malawi ', NULL, NULL),
(127, 'Malaysia ', NULL, NULL),
(128, 'Maldives ', NULL, NULL),
(129, 'Mali ', NULL, NULL),
(130, 'Malta ', NULL, NULL),
(131, 'Marshall Islands ', NULL, NULL),
(132, 'Martinique ', NULL, NULL),
(133, 'Mauritania ', NULL, NULL),
(134, 'Mauritius ', NULL, NULL),
(135, 'Mayotte ', NULL, NULL),
(136, 'Mexico ', NULL, NULL),
(137, 'Micronesia, Fed. St. ', NULL, NULL),
(138, 'Moldova ', NULL, NULL),
(139, 'Monaco ', NULL, NULL),
(140, 'Mongolia ', NULL, NULL),
(141, 'Montserrat ', NULL, NULL),
(142, 'Morocco ', NULL, NULL),
(143, 'Mozambique ', NULL, NULL),
(144, 'Namibia ', NULL, NULL),
(145, 'Nauru ', NULL, NULL),
(146, 'Nepal ', NULL, NULL),
(147, 'Netherlands ', NULL, NULL),
(148, 'Netherlands Antilles ', NULL, NULL),
(149, 'New Caledonia ', NULL, NULL),
(150, 'New Zealand ', NULL, NULL),
(151, 'Nicaragua ', NULL, NULL),
(152, 'Niger ', NULL, NULL),
(153, 'Nigeria ', NULL, NULL),
(154, 'N. Mariana Islands ', NULL, NULL),
(155, 'Norway ', NULL, NULL),
(156, 'Oman ', NULL, NULL),
(157, 'Pakistan ', NULL, NULL),
(158, 'Palau ', NULL, NULL),
(159, 'Panama ', NULL, NULL),
(160, 'Papua New Guinea ', NULL, NULL),
(161, 'Paraguay ', NULL, NULL),
(162, 'Peru ', NULL, NULL),
(163, 'Philippines ', NULL, NULL),
(164, 'Poland ', NULL, NULL),
(165, 'Portugal ', NULL, NULL),
(166, 'Puerto Rico ', NULL, NULL),
(167, 'Qatar ', NULL, NULL),
(168, 'Reunion ', NULL, NULL),
(169, 'Romania ', NULL, NULL),
(170, 'Russia ', NULL, NULL),
(171, 'Rwanda ', NULL, NULL),
(172, 'Saint Helena ', NULL, NULL),
(173, 'Saint Kitts & Nevis ', NULL, NULL),
(174, 'Saint Lucia ', NULL, NULL),
(175, 'St Pierre & Miquelon ', NULL, NULL),
(176, 'Saint Vincent and the Grenadines ', NULL, NULL),
(177, 'Samoa ', NULL, NULL),
(178, 'San Marino ', NULL, NULL),
(179, 'Sao Tome & Principe ', NULL, NULL),
(180, 'Saudi Arabia ', NULL, NULL),
(181, 'Senegal ', NULL, NULL),
(182, 'Serbia ', NULL, NULL),
(183, 'Seychelles ', NULL, NULL),
(184, 'Sierra Leone ', NULL, NULL),
(185, 'Singapore ', NULL, NULL),
(186, 'Slovakia ', NULL, NULL),
(187, 'Slovenia ', NULL, NULL),
(188, 'Solomon Islands ', NULL, NULL),
(189, 'Somalia ', NULL, NULL),
(190, 'South Africa ', NULL, NULL),
(191, 'Spain ', NULL, NULL),
(192, 'Sri Lanka ', NULL, NULL),
(193, 'Sudan ', NULL, NULL),
(194, 'Suriname ', NULL, NULL),
(195, 'Swaziland ', NULL, NULL),
(196, 'Sweden ', NULL, NULL),
(197, 'Switzerland ', NULL, NULL),
(198, 'Syria ', NULL, NULL),
(199, 'Taiwan ', NULL, NULL),
(200, 'Tajikistan ', NULL, NULL),
(201, 'Tanzania ', NULL, NULL),
(202, 'Thailand ', NULL, NULL),
(203, 'Togo ', NULL, NULL),
(204, 'Tonga ', NULL, NULL),
(205, 'Trinidad & Tobago ', NULL, NULL),
(206, 'Tunisia ', NULL, NULL),
(207, 'Turkey ', NULL, NULL),
(208, 'Turkmenistan ', NULL, NULL),
(209, 'Turks & Caicos Is ', NULL, NULL),
(210, 'Tuvalu ', NULL, NULL),
(211, 'Uganda ', NULL, NULL),
(212, 'Ukraine ', NULL, NULL),
(213, 'United Arab Emirates ', NULL, NULL),
(214, 'United Kingdom ', NULL, NULL),
(215, 'United States ', NULL, NULL),
(216, 'Uruguay ', NULL, NULL),
(217, 'Uzbekistan ', NULL, NULL),
(218, 'Vanuatu ', NULL, NULL),
(219, 'Venezuela ', NULL, NULL),
(220, 'Vietnam ', NULL, NULL),
(221, 'Virgin Islands ', NULL, NULL),
(222, 'Wallis and Futuna ', NULL, NULL),
(223, 'West Bank ', NULL, NULL),
(224, 'Western Sahara ', NULL, NULL),
(225, 'Yemen ', NULL, NULL),
(226, 'Zambia ', NULL, NULL),
(227, 'Zimbabwe ', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `div_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `div_name`, `created_at`, `updated_at`) VALUES
(1, 'Women Fellowship', '2020-04-29 03:53:35', '2020-04-29 03:53:35'),
(2, 'Men fellowship', '2020-04-29 03:53:59', '2020-04-29 03:53:59'),
(3, 'Youth Fellowship', '2020-04-29 03:54:14', '2020-04-29 03:54:14'),
(4, 'Council of Elders', '2020-04-29 03:54:27', '2020-04-29 03:54:27'),
(5, 'Single Ladies Fellowship', '2020-04-29 03:55:02', '2020-04-29 03:55:02'),
(6, 'Sunday School  Fellowship', '2020-04-29 03:55:19', '2020-04-29 03:55:19');

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
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prefix` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middlename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `birthdate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hometown` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marital_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relative` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relative_contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_in_church` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_cell` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `church_group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `church_session` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `occupation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `prefix`, `firstname`, `lastname`, `middlename`, `age`, `birthdate`, `language`, `gender`, `nationality`, `region`, `hometown`, `city`, `marital_status`, `phone`, `email`, `address`, `relative`, `relative_contact`, `role_in_church`, `home_cell`, `church_group`, `church_session`, `occupation`, `photo`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Mr.', 'Wisdom', 'Kukah', 'Nanayaw', 29, '08/15/1991', 'Ewe', 'Male', 'Ghana', 'Volta Region', 'Ho Bankoe', 'Accra Aworshie Alang', 'Single', '(054) 755-5088', 'eliknana45@gmail.com', 'P.O box LG751', 'Ophelia Kukah', '0546205587', 'IT Personnel', 'Jesus Tower', 'Youth Fellowship', 'English Service', 'Student', 'avatars/wgFdwVSGBz9A36LVYAHHEC71JMnkZPq9OKqYLwqs.jpeg', 0, NULL, '2020-04-29 22:05:26', '2020-04-29 22:05:26'),
(3, 'Mrs.', 'Lolonyo', 'Diang', 'Esi', 35, '06/17/1980', 'Fante', 'Female', 'Ghana', 'Volta Region', 'Aflao', 'Accra Aworshie Abrantie', 'Married', '(054) 575-5494', 'lolonyodiang@gmail.com', 'P.O box 5647', 'Mr Diang Eric', '024565599', 'Usher', 'Glorious House', 'Women Fellowship', 'Twi Service', 'Trader', 'avatars/J99pDymClbndsLRsBMHHjjmlDauCawPcqR7UpolW.jpeg', 0, NULL, '2020-04-30 02:27:36', '2020-04-30 02:27:36');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_04_27_081535_create_categories_table', 1),
(5, '2020_04_27_081622_create_cells_table', 1),
(6, '2020_04_27_081639_create_countries_table', 1),
(7, '2020_04_27_081654_create_regions_table', 1),
(8, '2020_04_27_082400_create_divisions_table', 1),
(9, '2020_04_27_082430_create_roles_table', 1),
(10, '2020_04_27_082711_create_members_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE `regions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Greater Accra', NULL, NULL),
(2, 'Volta Region', NULL, NULL),
(3, 'Eastern Region', NULL, NULL),
(4, 'Oti Region', NULL, NULL),
(5, 'Northern Region', NULL, NULL),
(6, 'Western North', NULL, NULL),
(7, 'North East', NULL, NULL),
(8, 'Bono East Region', NULL, NULL),
(9, 'Savannnah', NULL, NULL),
(10, 'Central Region', NULL, NULL),
(11, 'Brong Ahafo', NULL, NULL),
(12, 'Western Region', NULL, NULL),
(13, 'Upper East', NULL, NULL),
(14, 'Upper West', NULL, NULL),
(15, 'Ahafo Region', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `created_at`, `updated_at`) VALUES
(1, 'Usher', '2020-04-29 03:28:46', '2020-04-29 03:28:46'),
(2, 'Instrumentalist', '2020-04-29 03:29:55', '2020-04-29 03:29:55'),
(3, 'Singer/Chorister', '2020-04-29 03:30:23', '2020-04-29 03:30:23'),
(4, 'IT Personnel', '2020-04-29 03:30:42', '2020-04-29 03:30:42'),
(5, 'Cleaner or Church Worker', '2020-04-29 03:31:07', '2020-04-29 03:31:07'),
(6, 'Elder', '2020-04-29 03:31:20', '2020-04-29 03:31:20'),
(7, 'Youth President', '2020-04-29 03:31:35', '2020-04-29 03:31:35'),
(8, 'Member', '2020-04-29 03:31:43', '2020-04-29 03:31:43'),
(9, 'Financial Secretary', '2020-04-29 03:31:58', '2020-04-29 03:31:58'),
(10, 'Pastor', '2020-04-29 03:32:19', '2020-04-29 03:32:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `is_admin`, `status`, `email`, `email_verified_at`, `password`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Wisdom Kukah', 'Administrator', 1, 0, 'eliknana45@gmail.com', NULL, '$2y$10$LMFlj7s1V3TWUKCdbqGa7uyW.CxBUkKSdom6sYrR3g2WB9TeYZ94e', NULL, NULL, '2020-04-28 21:34:00', '2020-04-28 21:34:00'),
(2, 'Mr Prince', 'Prince', 1, 0, 'prince444@gmail.com', NULL, '$2y$10$GSxzUAVK3nJC28si.iyeqeTOCaS31vmhQvmYrNWcm54XiWVUDJC8K', NULL, NULL, '2020-04-30 01:24:15', '2020-04-30 01:24:15'),
(3, 'Mr Richard', 'Richard', 1, 0, 'richardpent@gmail.com', NULL, '$2y$10$r2ta2CG2JPGjCxFV7C4mM.dTVbRdbwWX14xGa1t3J40M/xzf6qcJi', NULL, NULL, '2020-04-30 01:26:01', '2020-04-30 01:26:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cells`
--
ALTER TABLE `cells`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cells`
--
ALTER TABLE `cells`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=228;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
