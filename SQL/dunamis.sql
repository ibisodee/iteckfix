-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2020 at 03:46 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dunamis`
--

-- --------------------------------------------------------

--
-- Table structure for table `avatars`
--

CREATE TABLE `avatars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userid` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` mediumtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cruds`
--

CREATE TABLE `cruds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `engineers`
--

CREATE TABLE `engineers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `focus` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` mediumtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(5, '2020_06_08_141602_create_repairs_table', 2),
(6, '2020_06_11_230933_add_more_field_to_users_table', 3),
(7, '2020_06_12_000105_add_more_field_to_repairs_table', 4),
(8, '2020_06_13_101818_create_engineers_table', 5),
(9, '2020_06_13_180605_add_image_to_engineers_table', 6),
(10, '2020_06_20_210149_create_sessions_table', 7),
(11, '2020_06_22_131143_create_tracks_table', 8),
(12, '2020_06_25_194616_create_cruds_table', 9),
(13, '2020_06_25_225033_create_avatars_table', 9),
(14, '2020_06_26_002808_add_new_fields_to_users_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('ibiso.dokubo.t@gmail.com', '$2y$10$YMvR0/h2Sc/.Y2NpO1fC3.W3XOqLwr8.uDxml42JUgu3/k3EwXZ8i', '2020-06-26 12:01:01'),
('ejiroblessing@gmail.com', '$2y$10$A7NuScPg8jXbB6GSBkVs0.8fNnHinyrF2dzFpOuSqHWjQ8J.eUvZ2', '2020-06-26 12:19:40');

-- --------------------------------------------------------

--
-- Table structure for table `repairs`
--

CREATE TABLE `repairs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fault` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci,
  `upload` mediumtext COLLATE utf8mb4_unicode_ci,
  `name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `bill` int(11) DEFAULT NULL,
  `balance` int(11) DEFAULT NULL,
  `repairer` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pickdate` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivered` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pin` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feedback` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fresponse` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `city` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_paid` int(11) DEFAULT NULL,
  `complaint` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimony`
--

CREATE TABLE `testimony` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `message` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Testimoy Users';

--
-- Dumping data for table `testimony`
--

INSERT INTO `testimony` (`id`, `name`, `email`, `phone`, `message`, `date`, `status`) VALUES
(1, 'ibiso', 'ibiso@gmail.com', '09036267513', 'I just want to Give thanks to the Lord , that i have gotten my Expectations for this year', '2020-06-04', 'approved'),
(5, 'Brigth Keremu Kent', 'ibiso.dokubo.t@gmail.com', '', '', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tracks`
--

CREATE TABLE `tracks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `track_id` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status1` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s1date` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status2` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s2date` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `report` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `avatar` mediumtext COLLATE utf8mb4_unicode_ci,
  `userid` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `password` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `city` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Address` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `avatar`, `userid`, `number`, `is_admin`, `password`, `remember_token`, `created_at`, `updated_at`, `city`, `Address`, `gender`) VALUES
(1, 'Brigth Keremu Kent', 'keremu@gmail.com', NULL, NULL, NULL, '09036267513', 1, '$2y$10$5S.1qGhh2UOZKSx/68a.h.ZqhggjfSopeFmDjNstK1wDSKusx1hlm', 'WGDg9VoaN5x1WKvBZYNc26KJIs146cR25gXtxtdIQZ9jbMu7T9qwtCXJk3lM', '2020-06-08 20:33:24', '2020-06-08 20:33:24', 'PHC-Phalga', NULL, NULL),
(2, 'Ejiro Takufia', 'ejiroblessing@gmail.com', NULL, NULL, NULL, '08126074662', NULL, '$2y$10$b0VQly9zyH9zKTiV7DvameFRzkqd97prDS5.J3jg4N1mcDHzH1tGa', NULL, '2020-06-11 22:39:28', '2020-06-11 22:39:28', NULL, NULL, NULL),
(3, 'Akintunde Adegbite', 'asitoway@gmail.com', NULL, NULL, NULL, '07039876789', NULL, '$2y$10$BBrBbaS0f0Rm7RGJt6sEdeoPqgedpPZgD7pSWFChPGbE/EfJ/5Iq2', NULL, '2020-06-11 22:42:10', '2020-06-11 22:42:10', NULL, NULL, NULL),
(4, 'Tochi Ebelebe', 'ibiso.dokubo.t@gmail.com', NULL, NULL, NULL, '09036267513', NULL, '$2y$10$/MHnZdS8bpQDe1JwXKXXx.fbb3NVBjQqTY/Eepq/N7jRqTAe0Mwuu', NULL, '2020-06-20 19:36:15', '2020-06-20 19:36:15', NULL, NULL, NULL),
(5, 'ibiso Dokubo', 'ibiso.dokubo.t3@gmail.com', NULL, NULL, NULL, '09036267513', NULL, '$2y$10$Hz24oM0nnWmboX1BKnMb9uA5Z9z.5tadnXlJ4wBVVfPULsc0rS/Fq', NULL, '2020-06-20 19:52:23', '2020-06-20 19:52:23', NULL, NULL, NULL),
(6, 'Akintunde Adegbite', 'ibidkubo.t@gmail.com', NULL, NULL, NULL, '09034234543', NULL, '$2y$10$eohwUZ7AK0dNAvIhK1Ul7.RZJRwkuf74uCI7DAQ431u1tpV0PSKJK', NULL, '2020-06-21 13:36:33', '2020-06-21 13:36:33', 'PHC-Phalga', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `avatars`
--
ALTER TABLE `avatars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cruds`
--
ALTER TABLE `cruds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `engineers`
--
ALTER TABLE `engineers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- Indexes for table `repairs`
--
ALTER TABLE `repairs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

--
-- Indexes for table `testimony`
--
ALTER TABLE `testimony`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tracks`
--
ALTER TABLE `tracks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_userid_unique` (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `avatars`
--
ALTER TABLE `avatars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `cruds`
--
ALTER TABLE `cruds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `engineers`
--
ALTER TABLE `engineers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `repairs`
--
ALTER TABLE `repairs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `testimony`
--
ALTER TABLE `testimony`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tracks`
--
ALTER TABLE `tracks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
