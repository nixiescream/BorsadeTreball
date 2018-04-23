-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 23, 2018 at 09:25 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `borsa`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumnes`
--

CREATE TABLE `alumnes` (
  `id` int(10) UNSIGNED NOT NULL,
  `alumne_nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alumne_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alumne_password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alumne_rol` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alumne_validat` int(11) NOT NULL DEFAULT '0',
  `alumne_cognom1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `alumne_cognom2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `alumne_dni` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `alumne_estudis` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alumnes`
--

INSERT INTO `alumnes` (`id`, `alumne_nom`, `alumne_email`, `alumne_password`, `alumne_rol`, `alumne_validat`, `alumne_cognom1`, `alumne_cognom2`, `alumne_dni`, `alumne_estudis`, `created_at`, `updated_at`) VALUES
(1, 'alumne', 'alumne@example.com', '$2y$10$5hF8bNfV6upxWG8YPAxqf.2LaK1k4FmoKtlDU38yZdVdMRAFFEdZW', 'alumne', 1, '', '', '', '', '2018-04-13 10:08:49', '2018-04-13 10:08:49'),
(2, 'alumne2', 'alumne2@example.com', '$2y$10$OeTf3Ix..f.L8eaKcvZXP.MB2rPfqp/FRiGl1jF0Za4F756S5osjm', 'alumne', 0, '', '', '', '', '2018-04-13 10:09:15', '2018-04-13 10:09:15');

-- --------------------------------------------------------

--
-- Table structure for table `empresas`
--

CREATE TABLE `empresas` (
  `id` int(10) UNSIGNED NOT NULL,
  `empresa_nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `empresa_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `empresa_password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `empresa_rol` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `empresa_validat` int(11) NOT NULL DEFAULT '0',
  `empresa_nif` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `empresas`
--

INSERT INTO `empresas` (`id`, `empresa_nom`, `empresa_email`, `empresa_password`, `empresa_rol`, `empresa_validat`, `empresa_nif`, `created_at`, `updated_at`) VALUES
(1, 'empresa', 'empresa@example.com', '$2y$10$YnrWuXZeDcy8TCD.R9D0JOh1MxNkmEAQjxLc5odRmg9/yStJsNmIS', 'empresa', 1, '', '2018-04-13 10:09:03', '2018-04-13 10:09:03'),
(2, 'empresa2', 'empresa2@example.com', '$2y$10$5ziZ9uePLvtFPykV/RRtJ.qaN1j2j7Tb.FheInzWipM0QYJNkKwY6', 'empresa', 0, '', '2018-04-13 10:09:30', '2018-04-13 10:09:30');

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
(3, '2018_03_23_072603_create_alumnes_table', 1),
(4, '2018_03_23_072612_create_empresas_table', 1),
(5, '2018_03_23_072618_create_validadors_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rol` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `validat` int(11) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `rol`, `validat`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'alumne', 'alumne@example.com', '$2y$10$f6jU8ytNgVchn06GQdjusuG8SF6JLkjoeQ35GIZWy5h/fwzGm9iKm', 'alumne', 1, 'FPWCUW3awDJ1q7goFn2mazG6hSxdvwMBk1SCTuFeyjnEy0y8lQwZuSggphdv', '2018-04-13 10:08:49', '2018-04-13 10:08:49'),
(2, 'empresa', 'empresa@example.com', '$2y$10$9Sye0LjkgT56sRTGbt55VeMnYUQ/YXSIAnHLWOwiTySidgMeeetiy', 'empresa', 1, NULL, '2018-04-13 10:09:03', '2018-04-13 10:09:03'),
(3, 'alumne2', 'alumne2@example.com', '$2y$10$AWyak7SaX9Nz1wSr5HP9SuuKphTUmOKAZG6hG6dyq9lWRgux56yUm', 'alumne', 0, NULL, '2018-04-13 10:09:15', '2018-04-13 10:09:15'),
(4, 'empresa2', 'empresa2@example.com', '$2y$10$MmexQkOQZy4N/RDXqzLHCe4thRin4W1RY2CUBbnmen4V47FMJGEfy', 'empresa', 0, NULL, '2018-04-13 10:09:30', '2018-04-13 10:09:30');

-- --------------------------------------------------------

--
-- Table structure for table `validadors`
--

CREATE TABLE `validadors` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rol` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `validat` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumnes`
--
ALTER TABLE `alumnes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `alumnes_alumne_email_unique` (`alumne_email`);

--
-- Indexes for table `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `empresas_empresa_email_unique` (`empresa_email`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `validadors`
--
ALTER TABLE `validadors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `validadors_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumnes`
--
ALTER TABLE `alumnes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `validadors`
--
ALTER TABLE `validadors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
