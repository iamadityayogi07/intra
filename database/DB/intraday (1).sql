-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2024 at 07:52 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intraday`
--

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_12_20_101331_create_permission_tables', 1),
(7, '2023_12_20_101421_create_products_table', 1),
(8, '2023_12_24_093548_create_categories_table', 1),
(9, '2023_12_24_093710_create_sub_categories_table', 1),
(10, '2023_12_24_111820_create_brands_table', 1),
(11, '2014_10_12_000000_create_users_table', 2),
(12, '2024_06_13_172754_create_news_table', 3),
(13, '2024_06_13_173650_create_videos_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 4),
(1, 'App\\Models\\User', 5),
(1, 'App\\Models\\User', 8),
(1, 'App\\Models\\User', 11),
(1, 'App\\Models\\User', 14),
(1, 'App\\Models\\User', 19),
(1, 'App\\Models\\User', 20),
(1, 'App\\Models\\User', 23),
(3, 'App\\Models\\User', 3),
(3, 'App\\Models\\User', 9),
(3, 'App\\Models\\User', 10),
(3, 'App\\Models\\User', 13),
(3, 'App\\Models\\User', 15),
(3, 'App\\Models\\User', 17),
(3, 'App\\Models\\User', 21),
(3, 'App\\Models\\User', 24),
(3, 'App\\Models\\User', 25),
(3, 'App\\Models\\User', 26),
(3, 'App\\Models\\User', 28),
(4, 'App\\Models\\User', 2),
(4, 'App\\Models\\User', 16),
(4, 'App\\Models\\User', 18),
(4, 'App\\Models\\User', 22),
(4, 'App\\Models\\User', 27);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `link`, `created_at`, `updated_at`) VALUES
(1, 'xxx.com', '2024-06-13 17:33:04', '2024-06-13 17:33:04');

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'web', '2023-12-24 10:00:58', '2023-12-24 10:00:58'),
(2, 'role-create', 'web', '2023-12-24 10:00:59', '2023-12-24 10:00:59'),
(3, 'role-edit', 'web', '2023-12-24 10:00:59', '2023-12-24 10:00:59'),
(4, 'role-delete', 'web', '2023-12-24 10:00:59', '2023-12-24 10:00:59'),
(5, 'product-list', 'web', '2023-12-24 10:00:59', '2023-12-24 10:00:59'),
(6, 'product-create', 'web', '2023-12-24 10:00:59', '2023-12-24 10:00:59'),
(7, 'product-edit', 'web', '2023-12-24 10:00:59', '2023-12-24 10:00:59'),
(8, 'product-delete', 'web', '2023-12-24 10:00:59', '2023-12-24 10:00:59'),
(9, 'category-list', 'web', '2023-12-24 10:01:00', '2023-12-24 10:01:00'),
(10, 'category-create', 'web', '2023-12-24 10:01:00', '2023-12-24 10:01:00'),
(11, 'category-edit', 'web', '2023-12-24 10:01:00', '2023-12-24 10:01:00'),
(12, 'category-delete', 'web', '2023-12-24 10:01:00', '2023-12-24 10:01:00'),
(13, 'subcategory-list', 'web', '2023-12-24 10:01:00', '2023-12-24 10:01:00'),
(14, 'subcategory-create', 'web', '2023-12-24 10:01:00', '2023-12-24 10:01:00'),
(15, 'subcategory-edit', 'web', '2023-12-24 10:01:00', '2023-12-24 10:01:00'),
(16, 'subcategory-delete', 'web', '2023-12-24 10:01:00', '2023-12-24 10:01:00'),
(17, 'brand-list', 'web', '2023-12-24 10:01:01', '2023-12-24 10:01:01'),
(18, 'brand-create', 'web', '2023-12-24 10:01:01', '2023-12-24 10:01:01'),
(19, 'brand-edit', 'web', '2023-12-24 10:01:01', '2023-12-24 10:01:01'),
(20, 'brand-delete', 'web', '2023-12-24 10:01:01', '2023-12-24 10:01:01'),
(21, 'user-list', 'web', '2023-12-24 10:01:01', '2023-12-24 10:01:01'),
(22, 'user-create', 'web', '2023-12-24 10:01:01', '2023-12-24 10:01:01'),
(23, 'user-edit', 'web', '2023-12-24 10:01:01', '2023-12-24 10:01:01'),
(24, 'user-delete', 'web', '2023-12-24 10:01:01', '2023-12-24 10:01:01'),
(27, 'setting-edit', 'web', '2023-12-24 10:01:01', '2023-12-24 10:01:01'),
(30, 'product-order-listing', 'web', '2023-12-24 10:00:58', '2023-12-24 10:00:58'),
(31, 'shops-list', 'web', '2023-12-24 10:01:01', '2023-12-24 10:01:01'),
(32, 'shops-create', 'web', '2023-12-24 10:01:01', '2023-12-24 10:01:01'),
(33, 'shops-edit', 'web', '2023-12-24 10:01:01', '2023-12-24 10:01:01'),
(34, 'shops-delete', 'web', '2023-12-24 10:01:01', '2023-12-24 10:01:01'),
(35, 'checkout', 'web', '2023-12-24 10:01:01', '2023-12-24 10:01:01'),
(36, 'addToCart', 'web', '2023-12-24 10:01:01', '2023-12-24 10:01:01'),
(37, 'order-list', 'web', '2023-12-24 10:01:01', '2023-12-24 10:01:01'),
(38, 'order-details', 'web', '2023-12-24 10:01:01', '2023-12-24 10:01:01'),
(39, 'driver-order-list', 'web', '2023-12-24 10:01:01', '2023-12-24 10:01:01'),
(40, 'pay-and-update-order', 'web', '2023-12-24 10:01:01', '2023-12-24 10:01:01'),
(41, 'assign-driver', 'web', '2023-12-24 10:00:58', '2023-12-24 10:00:58'),
(42, 'editOrder', 'web', '2023-12-24 10:00:58', '2023-12-24 10:00:58'),
(43, 'delete-cart-item', 'web', '2023-12-24 10:00:58', '2023-12-24 10:00:58'),
(44, 'delete-order-item', 'web', '2023-12-24 10:00:59', '2023-12-24 10:00:59'),
(45, 'change-order-driver-status', 'web', '2023-12-24 10:00:58', '2023-12-24 10:00:58'),
(46, 'pay-shop-due', 'web', '2023-12-24 10:00:58', '2023-12-24 10:00:58'),
(47, 'purchase-item', 'web', '2023-12-24 10:00:58', '2023-12-24 10:00:58'),
(48, 'active-status', 'web', '2023-12-24 10:00:58', '2023-12-24 10:00:58');

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

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2023-12-24 10:01:05', '2023-12-24 10:01:05'),
(3, 'Agent', 'web', '2023-12-24 11:08:38', '2023-12-24 11:08:38'),
(4, 'Driver', 'web', '2024-01-18 10:30:05', '2024-01-18 10:30:05');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 3),
(2, 1),
(2, 3),
(3, 1),
(3, 3),
(4, 1),
(4, 3),
(5, 1),
(5, 3),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(27, 1),
(30, 1),
(30, 3),
(31, 1),
(31, 3),
(32, 1),
(32, 3),
(33, 1),
(33, 3),
(34, 1),
(35, 1),
(35, 3),
(36, 1),
(36, 3),
(37, 1),
(37, 3),
(38, 1),
(38, 3),
(38, 4),
(39, 4),
(40, 4),
(41, 1),
(42, 1),
(42, 3),
(43, 3),
(44, 1),
(44, 3),
(46, 1),
(46, 3),
(47, 1),
(48, 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `description` text DEFAULT NULL,
  `fav_icon` varchar(100) DEFAULT NULL,
  `logo` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `description`, `fav_icon`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'Grocey App', '<p>This is Grocery app.</p>', 'Coding Wallpapers 2.png', 'product.jpg', '2024-01-01 19:18:37', '2024-01-01 14:14:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL DEFAULT '0',
  `email` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `age` int(11) NOT NULL DEFAULT 0,
  `city` varchar(255) NOT NULL,
  `otp` int(11) NOT NULL DEFAULT 0,
  `gender` varchar(50) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `expiry_date` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `phone`, `email`, `profession`, `age`, `city`, `otp`, `gender`, `password`, `expiry_date`, `created_at`, `updated_at`) VALUES
(1, 'ay', 'yg', '88394375666', 'test@gail.com', 'job', 25, 'rtm', 0, NULL, '$2y$12$2d6pvgLyktUb2XXMKj8reeLJ1tACIzWmxCNcs1/V3KpOjdve1G7ZO', NULL, '2024-05-28 10:43:20', '2024-05-28 10:54:55'),
(2, 'test', 'data', '88394375666', 'adityayogi07@gmail.com', 'student', 24, 'indore', 0, NULL, '$2y$12$bDzn7R88R0lh11pLdYcGz.oWltYr2APqBDMd9D/s0Py/4ByzJ1xMm', '2024-06-28 16:13:20', '2024-05-28 11:02:34', '2024-05-29 11:09:45');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `link`, `image`, `type`, `created_at`, `updated_at`) VALUES
(1, 'xxx.com', 'image', 'Learning', '2024-06-13 17:38:38', '2024-06-13 17:38:38'),
(2, 'xxx.com', 'image', 'Learning', '2024-06-13 17:38:38', '2024-06-13 17:38:38'),
(3, 'xxx.com', 'image', 'Education', '2024-06-13 17:38:38', '2024-06-13 17:38:38'),
(4, 'xxx.com', 'image', 'Education', '2024-06-13 17:38:38', '2024-06-13 17:38:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
