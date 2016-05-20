-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 19, 2016 at 08:18 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravelTest`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(10) UNSIGNED NOT NULL,
  `orderNumber` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `amount` double(8,2) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderID`, `orderNumber`, `amount`, `user_id`, `created_at`, `updated_at`) VALUES
(3, 'INV-05459', 18.60, 1, '2016-05-03 18:30:00', '2016-05-18 14:02:04'),
(4, 'INV-0', 20.55, 2, '2016-05-09 18:30:00', NULL),
(10, 'INV-1011', 70.50, 1, '2016-05-11 02:04:35', '2016-05-11 02:04:35'),
(11, 'INV-101187', 70.50, 1, '2016-05-11 02:05:01', '2016-05-11 02:05:01'),
(12, 'INV-101187', 70.50, 1, '2016-05-11 02:05:28', '2016-05-11 02:05:28'),
(13, 'INV-87', 45.60, 1, '2016-05-18 13:26:58', '2016-05-18 13:26:58'),
(14, 'INV-00872', 50.60, 1, '2016-05-18 13:27:46', '2016-05-18 13:27:46'),
(15, 'INV-088', 58.60, 1, '2016-05-18 13:34:35', '2016-05-18 13:34:35'),
(16, 'IIY-01', 90.50, 1, '2016-05-18 13:35:50', '2016-05-18 13:35:50'),
(17, 'TT-262', 88.00, 1, '2016-05-18 13:36:29', '2016-05-18 13:36:29'),
(18, 'INV-066', 89.40, 1, '2016-05-18 13:38:11', '2016-05-18 13:38:11'),
(19, '878', 10.90, 1, '2016-05-18 13:47:47', '2016-05-18 13:47:47');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('niladridey933@gmail.com', 'f6b9f01b1a128a0c38dba673b2b2e987404937ff9607a2fb5d8a1b2652eeda45', '2016-05-18 04:21:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `api_token` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `api_token`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Niladri Dey', 'niladridey933@gmail.com', '$2y$10$f//g/PX4eP7D4UEzvVq.L.nlyvR3DYwONyvZ47P9wCRgC2QORt.da', 'Ak28OCJFgawryj1LoGm8WfBY1BMVk8awH5YpGSdgvOTcs5y3HJrpFb9fE3lA', 'myaddress', 'ICG6A7og2RAENiMqMTl2raoYjG7LoL7CNdCG3tKj0MPW1urpbSNaWbUNlfrF', '2016-05-10 10:24:05', '2016-05-18 14:25:55'),
(2, 'Test Test', 'niladridey9333@gmail.com', '$2y$10$kx/MytUwCeyAfOtb3aiSjeVc4pLLjh/mSHJ7VRM1iR7QSOUa/qv2m', 'DUi9kkGfpyHY4wHPizcs6jidOR63EOZXlq5g0raH1ZV2CMXD6FsVyi1kKyIW', 'Gm Lane', 'wdCJ6UTeDXrZPYxi713kvJ28Tl0s2GagACOO1JNLhTl4TPCKe548ijA6wYjn', '2016-05-10 10:24:24', '2016-05-10 10:24:26'),
(3, 'Niladri Dey', 'niladridey93387@gmail.com', '$2y$10$0Jlwr.LAVc0m11Nfz7f5i.teC0ppQylqoFMhbTZmdVmlkKWSEttRK', 'odoo4efnTxwdHpxFPWnwFzRIqa21mE2Jz33wqOnheMU5MgQafJ4g7zg6fMu9', 'test address', 'r4fE5bGqg4ZHJmQo5xge9jBjvZJTb7STB4376oKf5Fowa880cqzRGLMwucMX', '2016-05-13 05:31:59', '2016-05-13 05:32:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_api_token_unique` (`api_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
