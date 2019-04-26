-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 23, 2019 at 11:37 AM
-- Server version: 10.2.23-MariaDB-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `udahpw_disnaker`
--

-- --------------------------------------------------------

--
-- Table structure for table `educations`
--

CREATE TABLE `educations` (
  `id` int(11) NOT NULL,
  `slug` varchar(32) NOT NULL,
  `name` varchar(128) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `educations`
--

INSERT INTO `educations` (`id`, `slug`, `name`, `created_at`, `updated_at`) VALUES
(1, 'sd', 'SD / SEDERAJAT', '2019-04-17 00:00:00', '0000-00-00 00:00:00'),
(2, 'smp', 'SMP / SEDERAJAT', '2019-04-17 00:00:00', '0000-00-00 00:00:00'),
(3, 'sma', 'SMA / D.I / AKTA.I', '2019-04-17 00:00:00', '0000-00-00 00:00:00'),
(4, 'diploma', 'SM / D.II / D.III', '2019-04-17 00:00:00', '0000-00-00 00:00:00'),
(5, 'akta2', 'AKTA II', '2019-04-17 00:00:00', '0000-00-00 00:00:00'),
(6, 'akta3', 'AKTA III', '2019-04-17 00:00:00', '0000-00-00 00:00:00'),
(7, 'sarjana', 'S / PASCA / S.1 / AKTA IV / D.IV', '2019-04-17 00:00:00', '0000-00-00 00:00:00'),
(8, 'doktor', 'DOKTOR / AKTA V', '2019-04-17 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(11) NOT NULL,
  `language` varchar(64) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `language`, `created_at`, `updated_at`) VALUES
(1, 'Inggris', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Jerman', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Mandarin', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Belanda', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Arab', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Jepang', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Perancis', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Lainnya', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `religions`
--

CREATE TABLE `religions` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `religions`
--

INSERT INTO `religions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Islam', '2019-04-17 00:00:00', '0000-00-00 00:00:00'),
(2, 'Protestan', '2019-04-17 00:00:00', '0000-00-00 00:00:00'),
(3, 'Katholik', '2019-04-17 00:00:00', '0000-00-00 00:00:00'),
(4, 'Hindu', '2019-04-17 00:00:00', '0000-00-00 00:00:00'),
(5, 'Budha', '2019-04-17 00:00:00', '0000-00-00 00:00:00'),
(6, 'Lainnya', '2019-04-17 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `stats`
--

CREATE TABLE `stats` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stats`
--

INSERT INTO `stats` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Kawin', '2019-04-17 00:00:00', '0000-00-00 00:00:00'),
(2, 'Belum Kawin', '2019-04-17 00:00:00', '0000-00-00 00:00:00'),
(3, 'Cerai Hidup', '2019-04-17 00:00:00', '0000-00-00 00:00:00'),
(4, 'Cerai Mati', '2019-04-17 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(2) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role_id`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@gmail.com', '$2y$10$FW2btmMkEc7sYf0zuvNXqOiRuD5htG4c7LZSNpnIkaHHokgMM3CtG', 1, 1, '2019-04-18 01:59:04', '2019-04-21 03:59:22'),
(5, 'Maslikhatul Aini', 'maslikhatulaini@gmail.com', '$2y$10$eztKOf7t83Kth2ytSt6w0uxOjkqP8zWu0yJzvkmMGE53XZPDQwfXS', 1, 1, '2019-04-22 05:57:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_contacts`
--

CREATE TABLE `user_contacts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `address` varchar(256) NOT NULL,
  `rt` int(4) NOT NULL,
  `rw` int(4) NOT NULL,
  `village` varchar(128) NOT NULL,
  `district` varchar(128) NOT NULL,
  `postal_code` int(8) NOT NULL,
  `phone` varchar(16) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_contacts`
--

INSERT INTO `user_contacts` (`id`, `user_id`, `address`, `rt`, `rw`, `village`, `district`, `postal_code`, `phone`, `created_at`, `updated_at`) VALUES
(1, 3, 'Test', 1, 2, 'Test', 'Test', 12345, '085732405860', '2019-04-20 15:47:57', '0000-00-00 00:00:00'),
(3, 5, 'Dsn Pakis Wetan RT 01 RW 02 Ds Pakis Kec Trowulan Kab Mojokerto', 1, 2, 'Pakis', 'Trowulan', 6210, '085732085377', '2019-04-22 05:57:42', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_desireds`
--

CREATE TABLE `user_desireds` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `position` varchar(256) DEFAULT NULL,
  `location` enum('domestic','overseas') DEFAULT NULL,
  `region` enum('residence','other') DEFAULT NULL,
  `salary` varchar(32) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_desireds`
--

INSERT INTO `user_desireds` (`id`, `user_id`, `position`, `location`, `region`, `salary`, `description`, `created_at`, `updated_at`) VALUES
(2, 5, 'Direktur', 'domestic', 'residence', '5000000', 'Direktur di Perusahaan', '2019-04-22 05:57:43', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_educations`
--

CREATE TABLE `user_educations` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `education_id` int(11) NOT NULL,
  `school_name` varchar(256) DEFAULT NULL,
  `department` varchar(256) DEFAULT NULL,
  `year_in` int(4) DEFAULT NULL,
  `year_out` int(4) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_educations`
--

INSERT INTO `user_educations` (`id`, `user_id`, `education_id`, `school_name`, `department`, `year_in`, `year_out`, `created_at`, `updated_at`) VALUES
(4, 5, 3, 'SMA Darul Ulum 3 Bilingual', 'IPA', 2013, 2016, '2019-04-22 05:57:43', '0000-00-00 00:00:00'),
(5, 5, 0, '', '', 0, 0, '2019-04-22 05:57:43', '0000-00-00 00:00:00'),
(6, 5, 0, '', '', 0, 0, '2019-04-22 05:57:43', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_experiences`
--

CREATE TABLE `user_experiences` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `company` varchar(256) DEFAULT NULL,
  `position` varchar(256) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `year_in` int(4) DEFAULT NULL,
  `year_out` int(4) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_experiences`
--

INSERT INTO `user_experiences` (`id`, `user_id`, `company`, `position`, `description`, `year_in`, `year_out`, `is_active`, `created_at`, `updated_at`) VALUES
(3, 5, 'pt adi jaya', 'manager', 'okelah', 2017, 0, 1, '2019-04-22 05:57:43', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_informations`
--

CREATE TABLE `user_informations` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nppk` varchar(256) NOT NULL,
  `nik` varchar(256) NOT NULL,
  `place_of_birth` varchar(256) NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `gender` enum('male','female') NOT NULL,
  `religion_id` int(11) NOT NULL,
  `stat_id` int(11) NOT NULL,
  `photo` text DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_informations`
--

INSERT INTO `user_informations` (`id`, `user_id`, `nppk`, `nik`, `place_of_birth`, `date_of_birth`, `gender`, `religion_id`, `stat_id`, `photo`, `created_at`, `updated_at`) VALUES
(2, 5, '22042019', '971215550271', 'Mojokerto', '1997-03-12', 'female', 1, 2, NULL, '2019-04-22 05:57:43', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_languages`
--

CREATE TABLE `user_languages` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `lang_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_languages`
--

INSERT INTO `user_languages` (`id`, `user_id`, `lang_id`, `created_at`, `updated_at`) VALUES
(3, 5, 1, '2019-04-22 05:57:43', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` int(11) NOT NULL,
  `role` varchar(16) NOT NULL,
  `name` varchar(64) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `role`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'user', 'Standard User', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `vacancies`
--

CREATE TABLE `vacancies` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `company` varchar(256) NOT NULL,
  `position` varchar(256) NOT NULL,
  `description` text DEFAULT NULL,
  `requirement` text DEFAULT NULL,
  `min_salary` varchar(32) NOT NULL,
  `max_salary` varchar(32) DEFAULT NULL,
  `show_salary` tinyint(1) NOT NULL,
  `address` text DEFAULT NULL,
  `city` varchar(128) NOT NULL,
  `province` varchar(128) DEFAULT NULL,
  `country` varchar(128) NOT NULL,
  `is_domestic` tinyint(1) NOT NULL,
  `deadline` date DEFAULT NULL,
  `image` text DEFAULT NULL,
  `thumbnail` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vacancies`
--

INSERT INTO `vacancies` (`id`, `user_id`, `company`, `position`, `description`, `requirement`, `min_salary`, `max_salary`, `show_salary`, `address`, `city`, `province`, `country`, `is_domestic`, `deadline`, `image`, `thumbnail`, `created_at`, `updated_at`) VALUES
(8, 1, 'pt adi jaya', '', 'jgjkgkvkhkcvjlhgvhb', ',jgjkbh mvbvk,', '', '', 1, 'sby', 'sbyindo', '', '', 1, '2019-12-12', '9f8767543b93bbbf2d7a7bccdba5852b.jpg', '9f8767543b93bbbf2d7a7bccdba5852b_thumb.jpg', '2019-04-22 05:40:53', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `educations`
--
ALTER TABLE `educations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `religions`
--
ALTER TABLE `religions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stats`
--
ALTER TABLE `stats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_contacts`
--
ALTER TABLE `user_contacts`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `user_desireds`
--
ALTER TABLE `user_desireds`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `user_educations`
--
ALTER TABLE `user_educations`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `user_experiences`
--
ALTER TABLE `user_experiences`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `user_informations`
--
ALTER TABLE `user_informations`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `user_languages`
--
ALTER TABLE `user_languages`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vacancies`
--
ALTER TABLE `vacancies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `educations`
--
ALTER TABLE `educations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `religions`
--
ALTER TABLE `religions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `stats`
--
ALTER TABLE `stats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_contacts`
--
ALTER TABLE `user_contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_desireds`
--
ALTER TABLE `user_desireds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_educations`
--
ALTER TABLE `user_educations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_experiences`
--
ALTER TABLE `user_experiences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_informations`
--
ALTER TABLE `user_informations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_languages`
--
ALTER TABLE `user_languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vacancies`
--
ALTER TABLE `vacancies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
