-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 02, 2024 at 03:55 PM
-- Server version: 10.11.7-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u965641053_testdash`
--

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE `devices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `variables` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`variables`)),
  `lat` double(8,2) NOT NULL,
  `long` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `devices`
--

INSERT INTO `devices` (`id`, `name`, `token`, `user_id`, `variables`, `lat`, `long`, `created_at`, `updated_at`) VALUES
(1, 'My Device', 'KkJ2OBN42LFshbzx', 4, '{\"temperature\":22.5,\"humidity\":55}', 40.71, -74.01, '2024-06-04 01:39:45', '2024-06-04 01:39:45'),
(2, 'My Device', 'yM64PNEbd8c6AnOW', 3, '{\"temperature\":22.5,\"humidity\":55}', 40.71, -74.01, '2024-06-04 01:40:18', '2024-06-04 01:40:18');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `metrics`
--

CREATE TABLE `metrics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `values` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`values`)),
  `device_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(19, '2014_10_12_000000_create_users_table', 1),
(20, '2014_10_12_100000_create_password_resets_table', 1),
(21, '2019_08_19_000000_create_failed_jobs_table', 1),
(22, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(23, '2024_05_01_114310_create_devices_table', 1),
(24, '2024_05_01_114332_create_metrics_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 3, 'access_Token', '8373ea75c14e341f09b8ced3058530c75bfd4982e2febc28b782f398c6a815a1', '[\"*\"]', NULL, NULL, '2024-06-04 01:32:24', '2024-06-04 01:32:24'),
(2, 'App\\Models\\User', 3, 'access_Token', '3f7a9e2030c1bdfc2fdc9c2ec832718a77621446b38da0cb2b7178a133e355ba', '[\"*\"]', NULL, NULL, '2024-06-04 01:35:40', '2024-06-04 01:35:40'),
(3, 'App\\Models\\User', 3, 'access_Token', '6b4a8956f3a8d50dec49da71695a18fcbe4bd9803998370cc0efff3b5d93191b', '[\"*\"]', NULL, NULL, '2024-06-04 01:36:21', '2024-06-04 01:36:21'),
(4, 'App\\Models\\User', 3, 'access_Token', '5cca49ec385c628dd2d784e38664fda4fded1a0c5d77b4cee088e4d20be9d3f2', '[\"*\"]', NULL, NULL, '2024-06-04 01:36:56', '2024-06-04 01:36:56'),
(5, 'App\\Models\\User', 4, 'access_Token', '0e698a4a0dbbd0623aad933431793a8e57d518c273a81b6a04ff0a08ed360771', '[\"*\"]', NULL, NULL, '2024-06-04 01:38:31', '2024-06-04 01:38:31'),
(6, 'App\\Models\\User', 4, 'access_Token', '8e08ba4d31157d3b9fd53a5186fb2cf34783cb900a5c8914e8fcb145d09974bc', '[\"*\"]', '2024-06-04 01:39:45', NULL, '2024-06-04 01:39:20', '2024-06-04 01:39:45'),
(7, 'App\\Models\\User', 3, 'access_Token', 'e1cfc0acc6ad1ffd6413a768829eb6350b779f03ea800801bbd65e69f8933cab', '[\"*\"]', '2024-06-04 01:40:18', NULL, '2024-06-04 01:40:01', '2024-06-04 01:40:18'),
(8, 'App\\Models\\User', 3, 'access_Token', '9c5cb7b90888bb640702e8a050a0ab265a66fe2e1f4f94302fa7a1924d74d5b7', '[\"*\"]', NULL, NULL, '2024-06-04 01:40:45', '2024-06-04 01:40:45'),
(9, 'App\\Models\\User', 5, 'access_Token', '7de113cfb25a31a036452e35cf558edd529c8d4c3c2a18990e67e1f78d7e0dc6', '[\"*\"]', NULL, NULL, '2024-06-04 01:56:26', '2024-06-04 01:56:26'),
(10, 'App\\Models\\User', 3, 'access_Token', 'aa3b1a183e4747f6a29f2ef4cd7eaa53e115e4a217d17aaf7d254b135f1cd3d0', '[\"*\"]', NULL, NULL, '2024-06-04 02:04:37', '2024-06-04 02:04:37'),
(11, 'App\\Models\\User', 4, 'access_Token', 'f317482ae63520fe7042e716a66e6facb5f8c408b8acc732a2da47ee872b69e9', '[\"*\"]', NULL, NULL, '2024-06-04 02:04:57', '2024-06-04 02:04:57'),
(12, 'App\\Models\\User', 3, 'access_Token', '37600b1b4b618f6c777e6f479978d3dba5283d40243b0ceec9afc4969cd3f6c2', '[\"*\"]', NULL, NULL, '2024-06-04 02:10:13', '2024-06-04 02:10:13'),
(13, 'App\\Models\\User', 3, 'access_Token', 'bd67945081107c2821b88cb8de2a6a4e37ac1b7e0c1562ba8e58389324b63877', '[\"*\"]', NULL, NULL, '2024-06-04 02:14:15', '2024-06-04 02:14:15'),
(14, 'App\\Models\\User', 3, 'access_Token', '7c90b10a8dfd09964597e071514b0c126da45d3636f7530b2cd217116bb68159', '[\"*\"]', NULL, NULL, '2024-06-04 02:44:30', '2024-06-04 02:44:30'),
(15, 'App\\Models\\User', 3, 'access_Token', '15354290d634467a69f04cc426a07ab00c880711e06c23c383eb52a74de8779a', '[\"*\"]', NULL, NULL, '2024-06-05 22:19:04', '2024-06-05 22:19:04'),
(16, 'App\\Models\\User', 9, 'access_Token', 'f401d7ed2d32c2a4fc2ae0668c02651a44b26d15fcd8f186f09a1ee1d41fd560', '[\"*\"]', NULL, NULL, '2024-06-06 15:35:06', '2024-06-06 15:35:06'),
(17, 'App\\Models\\User', 3, 'access_Token', '343c4607c8a65f5bf986c72c6f5e583134305fdcced236aa872022a104f7078a', '[\"*\"]', NULL, NULL, '2024-06-06 15:44:15', '2024-06-06 15:44:15'),
(18, 'App\\Models\\User', 3, 'access_Token', 'b8582f8821ef44ae67f1d5047a910f4bb48a556725e6d4e2e7beb25eeebe9969', '[\"*\"]', NULL, NULL, '2024-06-06 15:45:13', '2024-06-06 15:45:13'),
(19, 'App\\Models\\User', 3, 'access_Token', '29f51b528633528b011d2b164e6dc8870b42d9cef06aef84b3760d23a600fe24', '[\"*\"]', NULL, NULL, '2024-06-07 04:29:01', '2024-06-07 04:29:01'),
(20, 'App\\Models\\User', 3, 'access_Token', 'a2929c350386d58559045dc07aeaffcd84793259b84c94474aea7e68b8450b86', '[\"*\"]', NULL, NULL, '2024-06-07 10:47:43', '2024-06-07 10:47:43'),
(21, 'App\\Models\\User', 3, 'access_Token', '55648213a8176b2e880de6aa904e625f309af4dbf02aabef944439698c173aed', '[\"*\"]', NULL, NULL, '2024-06-12 23:14:48', '2024-06-12 23:14:48'),
(22, 'App\\Models\\User', 3, 'access_Token', '11bde9bdfc2bfba80d2a9a19b623990a1c3b4eba9ab9949d1fef5fa5ba050a52', '[\"*\"]', NULL, NULL, '2024-06-14 17:38:35', '2024-06-14 17:38:35'),
(23, 'App\\Models\\User', 3, 'access_Token', '11d703ec8cd345305dfed71b8edd7da2d24e71db7d067a0d839009d51b25dc7d', '[\"*\"]', NULL, NULL, '2024-06-16 00:19:59', '2024-06-16 00:19:59'),
(24, 'App\\Models\\User', 3, 'access_Token', '6d67cd6127f74e50484a59dd41f870794384fa96167ae6e8c0b5e49dd97578fc', '[\"*\"]', NULL, NULL, '2024-06-16 00:23:16', '2024-06-16 00:23:16'),
(25, 'App\\Models\\User', 3, 'access_Token', '6a40839db0438ab2149b3f80c34b581cbdf1e63dcfd66a416a2ccecda0d156d4', '[\"*\"]', NULL, NULL, '2024-06-17 23:59:50', '2024-06-17 23:59:50'),
(26, 'App\\Models\\User', 3, 'access_Token', 'c94f7f85b94bf436618ab0084801d122361fbe7a572bb602e9a09a92cb10c719', '[\"*\"]', NULL, NULL, '2024-06-18 04:31:46', '2024-06-18 04:31:46'),
(27, 'App\\Models\\User', 4, 'access_Token', 'e3c72c182dcfd7d6ebebbc01e566f6e372033e667220696fe59b8bcd51aa05c6', '[\"*\"]', NULL, NULL, '2024-06-18 15:25:18', '2024-06-18 15:25:18'),
(28, 'App\\Models\\User', 4, 'access_Token', 'ac08790ee7ab6f80c65652a5da63aa3334f3cc6df45022ca3064bf0e5bc1a6f4', '[\"*\"]', NULL, NULL, '2024-06-18 15:27:14', '2024-06-18 15:27:14'),
(29, 'App\\Models\\User', 4, 'access_Token', '2016e1ba1f872fd940b9be2a6fbc2d7fbab25c469f0e82271051e2190c71444d', '[\"*\"]', NULL, NULL, '2024-06-18 15:27:19', '2024-06-18 15:27:19'),
(30, 'App\\Models\\User', 17, 'access_Token', '39ba04bdeed5ae3e144a3a06cf5f004ddd4d812fb7e8bc8cf32eafe2f8bdac7c', '[\"*\"]', NULL, NULL, '2024-06-19 13:31:29', '2024-06-19 13:31:29'),
(31, 'App\\Models\\User', 3, 'access_Token', '0034873e7409e6d30518ac2226fc581947060b0b4dbbaba6d4ce519f6fa3f5d8', '[\"*\"]', NULL, NULL, '2024-06-19 13:31:53', '2024-06-19 13:31:53'),
(32, 'App\\Models\\User', 3, 'access_Token', 'de81e86a87bb01bab53e871925e5f190f532ed5cc63517d7e0b174b95b49ea34', '[\"*\"]', NULL, NULL, '2024-06-26 14:07:17', '2024-06-26 14:07:17'),
(33, 'App\\Models\\User', 3, 'access_Token', 'eca581bcef9e883bd28a82c75771146100e793495f68d7f300ae8a1be69fe37f', '[\"*\"]', NULL, NULL, '2024-06-26 14:31:13', '2024-06-26 14:31:13'),
(34, 'App\\Models\\User', 3, 'access_Token', '24dbbe47978137cffafe5378f43b4c262cb8fd11aecf2650f061262804f5ac61', '[\"*\"]', NULL, NULL, '2024-06-27 14:11:58', '2024-06-27 14:11:58'),
(35, 'App\\Models\\User', 3, 'access_Token', 'b46bc9b9639923d5e668920edeec92bd5cb1e9a78c8d0ec3f7e7c7fe8227e7a2', '[\"*\"]', NULL, NULL, '2024-06-27 16:40:13', '2024-06-27 16:40:13'),
(36, 'App\\Models\\User', 3, 'access_Token', '01bc6b20e8dd5059fee3e6c46b8bed1727044f7b61187f42b5acdf5b41c8e97f', '[\"*\"]', NULL, NULL, '2024-06-28 04:45:08', '2024-06-28 04:45:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('user','admin','business') NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `photo`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'hari', 'hari@mail.com', NULL, '$2y$10$I2Q.R6n446Rqt5xudCpYbe7XOX4iXPFDOPrVXhDWwfPQQj56dEyvC', 'admin', NULL, '2024-06-04 01:30:00', '2024-06-04 01:30:00'),
(3, 'user1', 'user1@mail.com', NULL, '$2y$10$Fuif5sMestfBDs0vNN2woeODAHghqdUZS1eohBatxqyx8Qcya3LrS', 'user', NULL, '2024-06-04 01:32:07', '2024-06-28 04:45:32'),
(4, 'user2', 'user2@mail.com', NULL, '$2y$10$/8IGN5VfFdJuuktJq5M.aepDv5ZsZpCEFwoyjMTD.CetY0yILtD56', 'user', NULL, '2024-06-04 01:38:13', '2024-06-04 01:38:13'),
(5, 'user3', 'user3@mail.com', NULL, '$2y$10$vYC2vAJpVAyGPXsZD3Yiz.ydJBszH1gKSsYfHWwBaNRLbZo8u3fIe', 'user', NULL, '2024-06-04 01:56:15', '2024-06-04 01:56:15'),
(6, 'user4', 'user4@mail.com', NULL, '$2y$10$09/yEMcALfPHFON39szxCOYyU98P1MRO.hG7QPcPwWIKB7pB5RZ0C', 'user', NULL, '2024-06-06 15:29:34', '2024-06-06 15:29:34'),
(7, 'user5', 'user5@mail.com', NULL, '$2y$10$O7gYw0DTyFS17GPDg45a/OI2YwlyUrpxPGO8gFQjMcNykZON.Jl4q', 'user', NULL, '2024-06-06 15:32:41', '2024-06-06 15:32:41'),
(8, 'user6', 'user6@mail.com', NULL, '$2y$10$V6ossnIZkNfmTAEQ.iG7MuDPHevOQnZWhO1dmxHPGjBE7t2elCzDi', 'user', NULL, '2024-06-06 15:34:10', '2024-06-06 15:34:10'),
(10, 'user7', 'user7@mail.com', NULL, '$2y$10$B/Y7UiDsrEPxT3VV7OpKAeqElkYM98GeK7rSR7wQ4t5eZH7Njy6.e', 'user', NULL, '2024-06-06 15:57:40', '2024-06-06 15:57:40'),
(11, 'user8', 'user8@mail.com', NULL, '$2y$10$HCmfJ5Od82LVqhIauawcuOgkil27KyWAXU8iaEZp2lgnTlymnEknm', 'user', NULL, '2024-06-06 16:03:46', '2024-06-06 16:03:46'),
(12, 'user9', 'user9@mail.com', NULL, '$2y$10$jt0n8Ol.mHyhe/VO2eNeAeYiv6gXCM1s.aAYRcLpQQH8KimWMd4xe', 'user', NULL, '2024-06-06 16:06:46', '2024-06-06 16:06:46'),
(13, 'user10', 'user10@mail.com', NULL, '$2y$10$RwISZqz6aItsqgsOnwOicu30t2Xa4j0PXF6RQNzzX3y0NRNXV3pB2', 'user', NULL, '2024-06-06 16:17:15', '2024-06-06 16:17:15'),
(18, 'user11', 'user11@mail.com', NULL, '$2y$10$muCJOV4TmyqnphpWDqPWxe00fOyaVptE6sqBnJosovaAYNs2ATu8a', 'admin', NULL, '2024-06-26 04:41:16', '2024-06-26 04:41:16'),
(19, 'user12', 'user12@mail.com', NULL, '$2y$10$n1KcoB73e6t1jFv4svIutOqS3zQYFCYA3//51fbWq0v6x7yszXjRm', 'user', NULL, '2024-06-26 04:55:48', '2024-06-26 04:55:48'),
(20, 'user13', 'user13@mail.com', NULL, '$2y$10$V3153L4N2UGERkoAG2rsAO63r/YVKfrQpLK7NPQ9BfTw3bNvIraGe', 'user', NULL, '2024-06-26 04:56:16', '2024-06-26 04:56:16'),
(21, 'user14', 'user14@mail.com', NULL, '$2y$10$uorR0pTvV0jHabaWihz9VOnzK0JS/FhE0Rcw91tXx7uEh7YZr5Juq', 'user', NULL, '2024-06-26 04:57:09', '2024-06-26 04:57:09'),
(22, 'user15', 'user15@mail.com', NULL, '$2y$10$ebJSg7gYSe2FgADpQnqeVuzblcgEHb4rOG9riaG3irjiRJPvpO.LS', 'user', NULL, '2024-06-26 04:58:11', '2024-06-26 04:58:11'),
(23, 'user16', 'user16@mail.com', NULL, '$2y$10$RhCFpRf0.NSR3biNTwjfq.YchHPSwwX/k7J27mbQ/2LxVSDyJB5Ve', 'user', NULL, '2024-06-26 14:06:05', '2024-06-26 14:06:05'),
(24, 'User18', 'user18@mail.com', NULL, '$2y$10$69J9kUUDUJWpVXUsdv5Csu67.28rLUzmnPv3T7cL/Luowjlj5JlMq', 'user', NULL, '2024-06-26 14:30:49', '2024-06-26 14:30:49'),
(25, 'user19', 'user19@mail.com', NULL, '$2y$10$JXivyE322IMJKrQ62XkTyeyTPolPcfVp1S2FPSxqPkpyxvX071m3e', 'user', NULL, '2024-06-27 16:36:35', '2024-06-27 16:36:35'),
(26, 'user20', 'user20@mail.com', NULL, '$2y$10$cqj.Nm4o4FINp5mhYtO4x.rz8A6/Ei4nx7ZLXMiGw4L33QwHPMZvW', 'user', NULL, '2024-06-27 16:37:05', '2024-06-27 16:37:05'),
(27, 'user21', 'user21@mail.com', NULL, '$2y$10$kZce.mp2ZeE8j260tC4CHu/1GSQiqReWzuTW1QH5wL7DcbcdW.Phe', 'user', NULL, '2024-06-27 16:38:08', '2024-06-27 16:38:08'),
(28, 'user22', 'user22@mail.com', NULL, '$2y$10$bz9R09WQ3TgJbNe3b/27GO3l.DGuj/TL59wn4iESTBB8stEueMsA6', 'user', NULL, '2024-06-27 16:39:25', '2024-06-27 16:39:25'),
(30, 'user31', 'user31@mail.com', NULL, '$2y$10$3ahPh8NjhTE6zbPu2Sw3g.yzv7aMvfTKckBCSaEBIQUu3gqfZZ0xy', 'user', NULL, '2024-06-28 04:44:51', '2024-06-28 04:44:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `devices`
--
ALTER TABLE `devices`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `devices_token_unique` (`token`),
  ADD KEY `devices_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `metrics`
--
ALTER TABLE `metrics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `metrics_device_id_foreign` (`device_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `devices`
--
ALTER TABLE `devices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `metrics`
--
ALTER TABLE `metrics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `devices`
--
ALTER TABLE `devices`
  ADD CONSTRAINT `devices_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `metrics`
--
ALTER TABLE `metrics`
  ADD CONSTRAINT `metrics_device_id_foreign` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
