-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2021 at 09:11 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shipping`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test@test.com', '$2y$10$sy0ORSAYvSwFD2xV1UwJQeBL0k6Z42U1lRpLuW3PS4x8.kHJtjDq2', NULL, '2021-02-04 13:51:24', '2021-02-06 21:15:07'),
(2, 'Merritt Casey', 'ruhewefeka@mailinator.com', '$2y$10$W9Mz4FTauNqu48taATkRc.Holk81yTcX1XGdBrzvvtjANNgCdNjLi', NULL, '2021-02-06 20:26:41', '2021-02-06 20:26:41'),
(7, 'Allistair Mcdaniel', 'pezatat@mailinator.com', '$2y$10$Zc/a1Dqc2Lgv5TXc9pW4JevJmgflFD4AModPmto63tq6wer339R5C', NULL, '2021-02-07 07:39:52', '2021-02-07 07:39:52'),
(8, 'Unity Santiago', 'xihan@mailinator.com', '$2y$10$Lyto9wEDEp.KhNH3yY20oOk8k/MgPSXoToiV1hwfCQxTO1YeW6ry6', NULL, '2021-02-07 07:40:59', '2021-02-07 07:40:59'),
(9, 'Medge Cook', 'nanopaqo@mailinator.com', '$2y$10$5j2swddgXMHklADcOTQihO0KX4cdZKwKxD0tdxCXpyE1KC6sGGj2i', NULL, '2021-02-09 08:35:55', '2021-02-09 08:35:55'),
(10, 'Amelia Phillips', 'cexubi@mailinator.com', '$2y$10$1ZAKSF6y4mbbQxtyLP4TTOSXvBz16TwMJ05vMw/UGNh5gyFqQK83O', NULL, '2021-02-09 08:36:04', '2021-02-09 08:36:04'),
(11, 'Cara Strickland', 'datavaqot@mailinator.com', '$2y$10$6NwfZ6jpC/VPUJW2zG.RM.9QQL1VlRCDJgMSJzgj5fJssVN9xmrY.', NULL, '2021-02-09 08:36:12', '2021-02-09 08:36:12'),
(12, 'Ezra Moss', 'felyqane@mailinator.com', '$2y$10$VwMys213QQwBNbxOgnLUc.Lhb1cAWFOW8AkRI0W9ncN90g9dPFKRq', NULL, '2021-02-09 08:36:21', '2021-02-09 08:36:21'),
(13, 'Sopoline Wade', 'razyxusa@mailinator.com', '$2y$10$UhhYxLIXx81Pd4tu1vlF4ukseEpikFz3WgKssXheS96X4evUIHRW6', NULL, '2021-02-09 08:36:27', '2021-02-09 08:36:27'),
(14, 'Heidi Avery', 'hokufi@mailinator.com', '$2y$10$6j93d2fWgqQbotOGxIJ1kuwdj9RgS/B3UScrTIDbMiLb.fjDDbDbO', NULL, '2021-02-09 08:36:34', '2021-02-09 08:36:34'),
(15, 'Gary Vega', 'bahixuvuce@mailinator.com', '$2y$10$YeiD/8XlEJEfGMwL3pfJ/epVm8BwUCjM9nOg9N6QVNGoLcUa/aMUW', NULL, '2021-02-09 08:36:43', '2021-02-09 08:36:43');

-- --------------------------------------------------------

--
-- Table structure for table `air_requests`
--

CREATE TABLE `air_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `request_id` bigint(20) UNSIGNED NOT NULL,
  `payload_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arrival_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload_airport` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arrival_airport` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `goods_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` decimal(10,2) NOT NULL,
  `units_count` int(11) NOT NULL DEFAULT 0,
  `length` int(11) NOT NULL DEFAULT 0,
  `height` int(11) NOT NULL DEFAULT 0,
  `width` int(11) NOT NULL DEFAULT 0,
  `ready_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `air_requests`
--

INSERT INTO `air_requests` (`id`, `request_id`, `payload_address`, `arrival_address`, `payload_airport`, `arrival_airport`, `goods_type`, `weight`, `units_count`, `length`, `height`, `width`, `ready_date`, `created_at`, `updated_at`) VALUES
(1, 4, 'Recusandae Nostrum', 'Pariatur Adipisci p', 'Ipsa esse deserunt', 'Rerum voluptatem ex', 'Atque laboriosam ve', '20.00', 8, 67, 59, 83, '2022-11-28', '2021-03-27 16:38:22', '2021-03-27 16:38:22'),
(2, 7, 'In enim dolor offici', 'Quisquam voluptatem', 'Doloribus sit ipsum', 'Irure aspernatur a e', 'Anim magna exercitat', '57.00', 83, 70, 6, 69, '2022-05-06', '2021-03-27 16:41:45', '2021-03-27 16:41:45');

-- --------------------------------------------------------

--
-- Table structure for table `container_types`
--

CREATE TABLE `container_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `container_types`
--

INSERT INTO `container_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'حاوية كبيرة', NULL, NULL),
(2, 'حاوية صغيرة', NULL, NULL),
(3, 'حاوية متوسطة', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `custom_requests`
--

CREATE TABLE `custom_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `request_id` bigint(20) UNSIGNED NOT NULL,
  `payload_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload_place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` decimal(10,2) NOT NULL,
  `count` int(11) NOT NULL DEFAULT 0,
  `ready_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `container_type_id` bigint(20) UNSIGNED DEFAULT NULL,
  `custom_type_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `custom_requests`
--

INSERT INTO `custom_requests` (`id`, `request_id`, `payload_address`, `payload_place`, `weight`, `count`, `ready_date`, `container_type_id`, `custom_type_id`, `created_at`, `updated_at`) VALUES
(1, 5, 'Veritatis recusandae', 'Dicta atque voluptat', '20.00', 30, '2022-03-03', 1, 2, '2021-03-27 16:40:41', '2021-03-27 16:40:41');

-- --------------------------------------------------------

--
-- Table structure for table `custom_types`
--

CREATE TABLE `custom_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `custom_types`
--

INSERT INTO `custom_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'تخليص أول', NULL, NULL),
(2, 'تخليص ثان', NULL, NULL);

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
-- Table structure for table `maritime_requests`
--

CREATE TABLE `maritime_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `request_id` bigint(20) UNSIGNED NOT NULL,
  `payload_seaport` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arrival_seaport` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `goods_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` decimal(10,2) NOT NULL,
  `count` int(11) NOT NULL DEFAULT 0,
  `ready_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `container_type_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `maritime_requests`
--

INSERT INTO `maritime_requests` (`id`, `request_id`, `payload_seaport`, `arrival_seaport`, `goods_type`, `weight`, `count`, `ready_date`, `container_type_id`, `created_at`, `updated_at`) VALUES
(3, 6, 'Quia dolor molestiae', 'Consequuntur autem q', 'Impedit lorem dolor', '66.00', 50, '2022-02-04', 3, '2021-03-27 16:41:21', '2021-03-27 16:41:21'),
(4, 9, 'Voluptatem animi qu', 'Pariatur Qui nesciu', 'Qui aute non enim qu', '18.00', 9, '2021-03-29', 3, '2021-03-27 17:28:06', '2021-03-27 17:28:06'),
(5, 10, 'America', 'Cairo', 'Wood Test', '39.00', 5, '2021-03-31', 2, '2021-03-27 17:41:39', '2021-03-27 17:41:39');

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
(4, '2021_02_04_145750_create_admins_table', 1),
(30, '2021_03_27_135913_create_price_requests_table', 2),
(31, '2021_03_27_136523_create_custom_types_table', 2),
(32, '2021_03_27_136636_create_container_types_table', 2),
(33, '2021_03_27_140011_create_custom_requests_table', 2),
(34, '2021_03_27_140034_create_air_requests_table', 2),
(35, '2021_03_27_144939_create_maritime_requests_table', 2);

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
-- Table structure for table `price_requests`
--

CREATE TABLE `price_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('sea','air','custom') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_seen` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `price_requests`
--

INSERT INTO `price_requests` (`id`, `company_name`, `company_address`, `name`, `email`, `phone`, `type`, `is_seen`, `created_at`, `updated_at`) VALUES
(4, 'Dejesus Acosta Traders', 'Terry and Haynes Inc', 'Amber Robbins', 'sona@mailinator.com', '0123456789', 'air', 0, '2021-03-27 16:38:22', '2021-03-27 16:38:22'),
(5, 'Reese Hinton Inc', 'Scott Stevenson Associates', 'Maia Ramsey', 'gocuvujos@mailinator.com', '0123456789', 'custom', 1, '2021-03-27 16:40:41', '2021-03-27 17:21:03'),
(6, 'Alvarado and Butler Trading', 'Curry and Miranda Trading', 'Taha Else', 'zupy@mailinator.com', '0123456789', 'sea', 0, '2021-03-27 16:41:21', '2021-03-27 16:41:21'),
(7, 'Marks Heath LLC', 'Nicholson Kelly Traders', 'Shelly Hancock', 'gano@mailinator.com', '0123456789', 'air', 1, '2021-03-27 16:41:45', '2021-03-27 17:20:58'),
(9, 'Porter and Short Trading', 'Nixon and Cooley Traders', 'Rama Mcneil', 'vytabux@mailinator.com', '0123456789', 'sea', 0, '2021-03-27 17:28:06', '2021-03-27 17:28:06'),
(10, 'Sun', 'Cairo', 'AHmed', 'ahmed@gail.com', '8744787487', 'sea', 1, '2021-03-27 17:41:39', '2021-03-27 17:42:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `air_requests`
--
ALTER TABLE `air_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `air_requests_request_id_foreign` (`request_id`);

--
-- Indexes for table `container_types`
--
ALTER TABLE `container_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custom_requests`
--
ALTER TABLE `custom_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `custom_requests_request_id_foreign` (`request_id`),
  ADD KEY `custom_requests_container_type_id_foreign` (`container_type_id`),
  ADD KEY `custom_requests_custom_type_id_foreign` (`custom_type_id`);

--
-- Indexes for table `custom_types`
--
ALTER TABLE `custom_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maritime_requests`
--
ALTER TABLE `maritime_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `maritime_requests_request_id_foreign` (`request_id`),
  ADD KEY `maritime_requests_container_type_id_foreign` (`container_type_id`);

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
-- Indexes for table `price_requests`
--
ALTER TABLE `price_requests`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `air_requests`
--
ALTER TABLE `air_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `container_types`
--
ALTER TABLE `container_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `custom_requests`
--
ALTER TABLE `custom_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `custom_types`
--
ALTER TABLE `custom_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `maritime_requests`
--
ALTER TABLE `maritime_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `price_requests`
--
ALTER TABLE `price_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `air_requests`
--
ALTER TABLE `air_requests`
  ADD CONSTRAINT `air_requests_request_id_foreign` FOREIGN KEY (`request_id`) REFERENCES `price_requests` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `custom_requests`
--
ALTER TABLE `custom_requests`
  ADD CONSTRAINT `custom_requests_container_type_id_foreign` FOREIGN KEY (`container_type_id`) REFERENCES `container_types` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `custom_requests_custom_type_id_foreign` FOREIGN KEY (`custom_type_id`) REFERENCES `custom_types` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `custom_requests_request_id_foreign` FOREIGN KEY (`request_id`) REFERENCES `price_requests` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `maritime_requests`
--
ALTER TABLE `maritime_requests`
  ADD CONSTRAINT `maritime_requests_container_type_id_foreign` FOREIGN KEY (`container_type_id`) REFERENCES `container_types` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `maritime_requests_request_id_foreign` FOREIGN KEY (`request_id`) REFERENCES `price_requests` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
