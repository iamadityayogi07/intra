-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2024 at 08:00 PM
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
-- Database: `nakoda_traders`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Dove', 'This is dove', '2023-12-30 12:51:08', '2023-12-30 12:51:08'),
(2, 'Parle', '<p>This is parle g.</p>', '2024-01-01 11:50:12', '2024-01-01 11:50:12'),
(3, 'Lays', '<p>this is lays.</p>', '2024-01-01 12:05:55', '2024-01-01 12:05:55');

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `shop_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_variation_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Soap', '<p>This is soap.</p>', '2023-12-30 12:50:27', '2024-01-01 13:51:00'),
(2, 'Food', 'This is food', '2023-12-30 14:00:31', '2023-12-30 14:00:31');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_12_20_101331_create_permission_tables', 1),
(7, '2023_12_20_101421_create_products_table', 1),
(8, '2023_12_24_093548_create_categories_table', 1),
(9, '2023_12_24_093710_create_sub_categories_table', 1),
(10, '2023_12_24_111820_create_brands_table', 1);

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
(3, 'App\\Models\\User', 3),
(4, 'App\\Models\\User', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_id` varchar(70) DEFAULT NULL,
  `shop_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL COMMENT 'agent_id',
  `driver_id` int(11) NOT NULL DEFAULT 0,
  `total_price` decimal(10,2) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `payment_type` varchar(20) DEFAULT NULL,
  `payment_mode` varchar(20) DEFAULT NULL,
  `paid` decimal(10,2) DEFAULT NULL,
  `due` decimal(10,2) NOT NULL DEFAULT 0.00,
  `agent_incentive` decimal(5,2) DEFAULT NULL,
  `ref_image` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `shop_id`, `user_id`, `driver_id`, `total_price`, `status`, `payment_type`, `payment_mode`, `paid`, `due`, `agent_incentive`, `ref_image`, `created_at`, `updated_at`) VALUES
(1, 'ORD-583526', 5, 3, 2, 8993.00, 3, 'full', 'cash', 8993.00, 0.00, NULL, NULL, '2024-02-02 22:52:43', '2024-02-04 01:24:54'),
(2, 'ORD-351847', 1, 3, 2, 4995.00, 3, 'partial', 'cash', 4000.00, 995.00, NULL, NULL, '2024-02-01 22:55:30', '2024-02-02 00:54:56'),
(3, 'ORD-627634', 1, 3, 2, 5487.00, 3, 'partial', 'cash', 6000.00, 482.00, NULL, NULL, '2024-02-03 06:35:49', '2024-02-03 01:18:29'),
(4, 'ORD-275739', 1, 3, 2, 990.00, 3, 'partial', 'cash', 1400.00, 72.00, NULL, NULL, '2024-02-03 07:13:03', '2024-02-03 01:48:50'),
(5, 'ORD-563053', 1, 3, 2, 990.00, 3, 'full', 'online', 1062.00, 0.00, NULL, NULL, '2024-02-03 07:31:02', '2024-02-03 02:07:59'),
(6, 'ORD-708836', 1, 3, 2, 4497.00, 3, 'partial', 'cash', 4000.00, 497.00, NULL, NULL, '2024-02-04 07:39:02', '2024-02-04 02:11:33');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_variation_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_variation_id`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 33, 3, '2024-02-03 22:52:43', '2024-02-03 17:22:54'),
(2, 1, 31, 4, '2024-02-03 22:52:43', '2024-02-03 17:22:56'),
(3, 2, 33, 5, '2024-02-03 22:55:30', '2024-02-03 22:55:30'),
(4, 3, 32, 10, '2024-02-04 06:35:49', '2024-02-04 06:35:49'),
(5, 3, 31, 3, '2024-02-04 06:35:49', '2024-02-04 06:35:49'),
(6, 4, 32, 10, '2024-02-04 07:13:03', '2024-02-04 07:13:03'),
(7, 5, 32, 10, '2024-02-04 07:31:02', '2024-02-04 07:31:02'),
(8, 6, 31, 3, '2024-02-04 07:39:02', '2024-02-04 07:39:02');

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
(45, 'change-order-driver-status', 'web', '2023-12-24 10:00:58', '2023-12-24 10:00:58');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `category_id` bigint(20) NOT NULL DEFAULT 0,
  `subcategory_id` bigint(20) NOT NULL DEFAULT 0,
  `brand_id` bigint(20) NOT NULL DEFAULT 0,
  `stock_quantity` double DEFAULT 0,
  `available_stock_quantity` double NOT NULL DEFAULT 0 COMMENT 'stock minus from this',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `detail`, `category_id`, `subcategory_id`, `brand_id`, `stock_quantity`, `available_stock_quantity`, `created_at`, `updated_at`) VALUES
(6, 'Parle G', '<p>This is parle g</p>', 2, 2, 2, 14000, 14000, '2024-01-14 07:55:17', '2024-01-14 07:55:17'),
(7, 'Tiger', '<p>This is tiger biscuit</p>', 2, 2, 2, 15000, 15000, '2024-01-14 07:59:51', '2024-01-14 07:59:51');

-- --------------------------------------------------------

--
-- Table structure for table `product_variations`
--

CREATE TABLE `product_variations` (
  `id` int(11) NOT NULL,
  `product_id` bigint(20) NOT NULL DEFAULT 0,
  `unit` varchar(100) DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `min_quantity` int(11) NOT NULL DEFAULT 0,
  `price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_variations`
--

INSERT INTO `product_variations` (`id`, `product_id`, `unit`, `quantity`, `min_quantity`, `price`, `created_at`, `updated_at`) VALUES
(31, 7, 'Lot', 110, 3, 1499.00, '2024-01-14 13:36:34', '2024-01-14 13:36:34'),
(32, 6, 'Dozen', 12, 10, 99.00, '2024-01-14 13:37:06', '2024-01-14 13:37:06'),
(33, 6, 'Lot', 144, 2, 999.00, '2024-01-14 13:37:07', '2024-01-14 13:37:07');

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
(6, 3),
(7, 1),
(7, 3),
(8, 1),
(8, 3),
(9, 1),
(9, 3),
(10, 1),
(10, 3),
(11, 1),
(11, 3),
(12, 1),
(12, 3),
(13, 1),
(13, 3),
(14, 1),
(14, 3),
(15, 1),
(15, 3),
(16, 1),
(16, 3),
(17, 1),
(17, 3),
(18, 1),
(18, 3),
(19, 1),
(19, 3),
(20, 1),
(20, 3),
(21, 1),
(21, 3),
(22, 1),
(22, 3),
(23, 1),
(23, 3),
(24, 1),
(24, 3),
(27, 1),
(27, 3),
(30, 1),
(30, 3),
(31, 1),
(31, 3),
(32, 1),
(32, 3),
(33, 1),
(33, 3),
(34, 1),
(34, 3),
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
(40, 3),
(40, 4),
(41, 1),
(42, 1),
(42, 3),
(43, 3),
(44, 3);

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
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `id` int(11) NOT NULL,
  `agent_id` int(11) NOT NULL DEFAULT 0,
  `name` text NOT NULL,
  `description` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `open_days` varchar(255) DEFAULT NULL,
  `due_amount` decimal(10,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`id`, `agent_id`, `name`, `description`, `address`, `open_days`, `due_amount`, `created_at`, `updated_at`) VALUES
(1, 0, 'shop 1', '<p>This is my shop</p>', 'Indoe', 'Tuesday,Wednesday,Saturday,Sunday', 497.00, '2024-01-08 15:34:13', '2024-02-04 02:11:33'),
(5, 0, 'Shop-2', '<p>dgdgdg</p>', '56 number ki dukan', 'Monday,Saturday,Sunday', 8993.00, '2024-01-28 01:30:03', '2024-02-04 01:24:54');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'Bathing soap', 'this is bathing soap', '2023-12-30 12:50:46', '2023-12-30 12:50:46'),
(2, 2, 'Snacks', 'This is snacks sub category', '2023-12-30 14:01:12', '2023-12-30 14:01:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `role_name` varchar(50) DEFAULT NULL,
  `basic_pay` decimal(10,2) NOT NULL DEFAULT 0.00,
  `monthly_target` decimal(10,2) NOT NULL DEFAULT 0.00,
  `extra_per_order` decimal(10,2) NOT NULL DEFAULT 0.00,
  `incentive` decimal(10,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `role_name`, `basic_pay`, `monthly_target`, `extra_per_order`, `incentive`, `created_at`, `updated_at`) VALUES
(2, 'Driver', 'driver@gmail.com', NULL, '$2y$12$myFeSuimtmmrvsw2OIg5DuFY16SduTzKxnuBUDjSYg8kB4WywM/O2', NULL, 'Driver', 0.00, 0.00, 0.00, 0.00, '2023-12-24 10:15:07', '2024-01-23 12:15:07'),
(3, 'Agent', 'agent@gmail.com', NULL, '$2y$12$12.7oGQvECZCSov.Z9U6O.UkAQ4BvDBGVAcC.Qq65YVOXcTdcWB7G', '7NAzJJS7ZcMtK8uJGsieMprJ5P8ppeJBvILpsSy7DTnBOWFiC4iQjvJ45oWX', 'Agent', 10000.00, 100000.00, 40.00, 0.70, '2023-12-24 11:09:01', '2024-01-24 12:41:58'),
(8, 'admin', 'admin@gmail.com', NULL, '$2y$12$FSAT.KPCB8RfHjOMsiNb5uAb0ODKkSuDdgPhR0sxJvKqGjM.po7jC', '8HZzLCGDxwZ5ttthpyqVAeVJcpJ8SpdkjWdtj2i4nXXhHY4OESkjuZmpFEr1', 'Admin', 0.00, 0.00, 0.00, 0.00, '2024-01-23 12:10:16', '2024-01-24 11:06:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brands_name_unique` (`name`);

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_variation_id` (`product_variation_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_ibfk_1` (`order_id`),
  ADD KEY `order_details_ibfk_2` (`product_variation_id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_variations`
--
ALTER TABLE `product_variations`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_categories_category_id_foreign` (`category_id`);

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
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_variations`
--
ALTER TABLE `product_variations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

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
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD CONSTRAINT `cart_items_ibfk_1` FOREIGN KEY (`product_variation_id`) REFERENCES `product_variations` (`id`);

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
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`product_variation_id`) REFERENCES `product_variations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
