-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 18, 2018 at 09:22 AM
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
  `user_id` int(10) UNSIGNED NOT NULL,
  `alumne_nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alumne_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alumne_password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alumne_rol` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alumne_validat` int(11) NOT NULL DEFAULT '0',
  `alumne_cognom1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `alumne_cognom2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `alumne_bio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `alumne_dni` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `alumne_telefon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `alumne_carnet` int(11) NOT NULL DEFAULT '0',
  `alumne_tempsTotal` int(11) NOT NULL DEFAULT '0',
  `estudis_sigles` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alumnes`
--

INSERT INTO `alumnes` (`user_id`, `alumne_nom`, `alumne_email`, `alumne_password`, `alumne_rol`, `alumne_validat`, `alumne_cognom1`, `alumne_cognom2`, `alumne_bio`, `alumne_dni`, `alumne_telefon`, `alumne_carnet`, `alumne_tempsTotal`, `estudis_sigles`, `created_at`, `updated_at`) VALUES
(2, 'Alumne', 'alumne@example.com', '$2y$10$XOJgo/sLvO7ZPmg8yC0G/eD4kDe/On3rjDjYxoGRWSxmeYmwQpciq', 'alumne', 1, 'Vidal', 'Barraquer', 'H', '12345678Z', '977123456', 1, 0, 'DAW', '2018-05-17 12:39:06', '2018-05-18 05:15:43'),
(4, 'Alumne2', 'alumne2@example.com', '$2y$10$d5z03VUsgIDDp3geAW9wEe.sOg/F2N4afW9rJryXn/TbKAUehL0WK', 'alumne', 1, 'Vidal2', 'Barraquer2', 'H', '23456789E', '977345678', 1, 0, 'TL', '2018-05-18 05:03:41', '2018-05-18 05:15:43'),
(5, 'Alumne3', 'alumne3@example.com', '$2y$10$THoHrd6pUmhcGwL6E2fRXO2Uv1XoXnuhqhC.DcYqY/iizkFYLg2Z2', 'alumne', 1, 'Vidal3', 'Barraquer3', 'H', '25346784R', '977243698', 0, 1, 'SMX', '2018-05-18 05:08:32', '2018-05-18 05:15:43'),
(6, 'Alumne4', 'alumne4@example.com', '$2y$10$19SJi.Zk4W6GeSrz/ptmhOzOX8UP25t.g46r72NmlK3uTXtT1011K', 'alumne', 0, 'Vidal4', 'Barraquer4', 'Holis', '28938476D', '977345678', 1, 0, 'AC', '2018-05-18 05:11:42', '2018-05-18 05:13:36');

-- --------------------------------------------------------

--
-- Table structure for table `alumne_oferta`
--

CREATE TABLE `alumne_oferta` (
  `id` int(10) UNSIGNED NOT NULL,
  `alumne_user_id` int(10) UNSIGNED NOT NULL,
  `oferta_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alumne_oferta`
--

INSERT INTO `alumne_oferta` (`id`, `alumne_user_id`, `oferta_id`, `created_at`, `updated_at`) VALUES
(2, 2, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `empresas`
--

CREATE TABLE `empresas` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `empresa_nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `empresa_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `empresa_cif` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `empresa_telefon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `empresa_addr` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `empresa_password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `empresa_rol` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `empresa_validat` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `empresas`
--

INSERT INTO `empresas` (`user_id`, `empresa_nom`, `empresa_email`, `empresa_cif`, `empresa_telefon`, `empresa_addr`, `empresa_password`, `empresa_rol`, `empresa_validat`, `created_at`, `updated_at`) VALUES
(7, 'Empresa 2 SL', 'empresa2@example.com', '35892039R', '977364738', 'C/ Example 4', '$2y$10$PZ5rReyc/2eF374bngBY8u1eZuRW0x3cXuficKb3rBm1kDLBrzBnO', 'empresa', 1, '2018-05-18 05:16:09', '2018-05-18 05:18:28'),
(8, 'Empresa 3 SL', 'empresa3@example.com', '24893489W', '977358235', 'C/ Example2 6', '$2y$10$/O1AULnXUpfbtc5cUJ3SsOPSXNKm8jUV4ALpROZxPzfNGcECAgXZy', 'empresa', 0, '2018-05-18 05:17:24', '2018-05-18 05:18:06'),
(3, 'Vidal i Barraquer', 'vidal@barraquer.net', '23456789S', '977212836', 'President Companys, 3 43002 - Tarragona', '$2y$10$HLrS5oXt5QSmdXrqOSqdSecWIiBlrlGs/idzUMtRsUSq49fBjeXBq', 'empresa', 1, '2018-05-17 12:39:27', '2018-05-18 05:15:48');

-- --------------------------------------------------------

--
-- Table structure for table `estudis`
--

CREATE TABLE `estudis` (
  `id` int(10) UNSIGNED NOT NULL,
  `sigles` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `familia` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `estudis`
--

INSERT INTO `estudis` (`id`, `sigles`, `nom`, `familia`, `created_at`, `updated_at`) VALUES
(1, 'GA', 'CFGM Gestió Administrativa', 'Família Administració i Gestió', '2018-05-17 12:38:42', '2018-05-17 12:38:42'),
(2, 'GAAJ', 'CFGM Gestió Administrativa (Àmbit Jurídic)', 'Família Administració i Gestió', '2018-05-17 12:38:43', '2018-05-17 12:38:43'),
(3, 'AF', 'CFGS Administració i Finances', 'Família Administració i Gestió', '2018-05-17 12:38:43', '2018-05-17 12:38:43'),
(4, 'AD', 'CFGS Assistencia a la Direcció', 'Família Administració i Gestió', '2018-05-17 12:38:43', '2018-05-17 12:38:43'),
(5, 'AC', 'CFGM Activitats Comercials', 'Família Comerç i Màrqueting', '2018-05-17 12:38:43', '2018-05-17 12:38:43'),
(6, 'CI', 'CFGS Comerç Internacional', 'Família Comerç i Màrqueting', '2018-05-17 12:38:43', '2018-05-17 12:38:43'),
(7, 'GVEC', 'CFGS Gestió de Vendes i Espais Comercials', 'Família Comerç i Màrqueting', '2018-05-17 12:38:43', '2018-05-17 12:38:43'),
(8, 'TL', 'CFGS Transport i Logística', 'Família Comerç i Màrqueting', '2018-05-17 12:38:43', '2018-05-17 12:38:43'),
(9, 'SMX', 'CFGM Sistemes Microinformàtics i Xarxes', 'Família Informàtica i Comunicacions', '2018-05-17 12:38:43', '2018-05-17 12:38:43'),
(10, 'ASIX', 'CFGS Administració de Sistemes Informàtics en la Xarxa', 'Família Informàtica i Comunicacions', '2018-05-17 12:38:43', '2018-05-17 12:38:43'),
(11, 'DAM', 'CFGS Desenvolupament d\'Aplicacions Multiplataforma', 'Família Informàtica i Comunicacions', '2018-05-17 12:38:43', '2018-05-17 12:38:43'),
(12, 'DAW', 'CFGS Desenvolupament d\'Aplicacions Web', 'Família Informàtica i Comunicacions', '2018-05-17 12:38:43', '2018-05-17 12:38:43'),
(13, 'APSD', 'CFGM Atenció a Persones en Situació de Dependència', 'Família de Serveis a la Comunitat', '2018-05-17 12:38:43', '2018-05-17 12:38:43'),
(14, 'AST', 'CFGS Animació Sociocultural i Turística', 'Família de Serveis a la Comunitat', '2018-05-17 12:38:43', '2018-05-17 12:38:43'),
(15, 'EI', 'CFGS Educació Infantil', 'Família de Serveis a la Comunitat', '2018-05-17 12:38:43', '2018-05-17 12:38:43'),
(16, 'IS', 'CFGS Integració Social', 'Família de Serveis a la Comunitat', '2018-05-17 12:38:43', '2018-05-17 12:38:43');

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
(3, '2018_02_11_072054_create_estudis_table', 1),
(4, '2018_03_23_072603_create_alumnes_table', 1),
(5, '2018_03_23_072612_create_empresas_table', 1),
(6, '2018_03_23_072618_create_validadors_table', 1),
(7, '2018_05_08_132808_create_ofertas_table', 1),
(8, '2018_05_17_143447_create_alumne_oferta_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ofertas`
--

CREATE TABLE `ofertas` (
  `id` int(10) UNSIGNED NOT NULL,
  `titol` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sou` int(11) NOT NULL,
  `horari` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipus` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estudis_sigles` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `validada` int(11) NOT NULL DEFAULT '0',
  `empresa_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ofertas`
--

INSERT INTO `ofertas` (`id`, `titol`, `descripcio`, `sou`, `horari`, `tipus`, `estudis_sigles`, `validada`, `empresa_id`, `created_at`, `updated_at`) VALUES
(2, 'Informàtic', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 4, '08:00 - 14:30', 'Informàtic', 'DAW', 1, 3, '2018-05-18 05:20:19', '2018-05-18 05:21:48'),
(3, 'Informàtic', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 4, '08:00 - 14:30', 'Informàtic', 'SMX', 1, 3, '2018-05-18 05:21:02', '2018-05-18 05:21:48'),
(4, 'Exemple', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 5, '12:00 - 16:00', 'Exemple', 'TL', 0, 3, '2018-05-18 05:21:26', '2018-05-18 05:21:26');

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
(1, 'validador1', 'validador1@example.com', '$2y$10$lpinoM8Cn.Nwh0fYwxRomO8fCSGA3im3BHdwJB/QtJIw8w6cLAoFS', 'validador', 1, '6S8ror0A2GGViCVE5emSHutOcSGgv2pc0tj3O8w282QWAuxG4QxHt4md8pjm', '2018-05-17 12:38:43', '2018-05-17 12:38:43'),
(2, 'Alumne', 'alumne@example.com', '$2y$10$Jfztka5VeS5Grf2.zRHrYeSwlfE07K/6QD5sc/A9cqvGtJCnIz0si', 'alumne', 1, 'owvwrgh7tU3pixykbkaPQ2LFJy0j4zN6JdFtTQLyJ5lgeF90k5zSrYEJAsc4', '2018-05-17 12:39:06', '2018-05-18 05:15:43'),
(3, 'Vidal i Barraquer', 'vidal@barraquer.net', '$2y$10$AbTt2Rc0.487PgVTW2prMeXbCxX.uFM4D3q2y.zrba9/k/D18cmtm', 'empresa', 1, 'eVSRnEHe94M0z1ew5hgS17bdfOm2e9XLtjbgahDZVl9b4u3JZuWXUE1lPwJ7', '2018-05-17 12:39:27', '2018-05-18 05:15:48'),
(4, 'Alumne2', 'alumne2@example.com', '$2y$10$q.8qInq7bADInDiZTaAbk.AgQouy7nxUxSOxh5oUiwN83UUh19/jG', 'alumne', 1, 'y6Tqqx0magh1mcTbaa0QQQsbzW5UvUwIlxkBnPYPYXNNwUs3d68f2jwAGlqx', '2018-05-18 05:03:41', '2018-05-18 05:15:43'),
(5, 'Alumne3', 'alumne3@example.com', '$2y$10$Qtuexvrk5XdCbZk192uxBOMxi9mIgzoRL0KAxtEfOMVOVtm9ZrCzm', 'alumne', 1, '4OT36sKMEQYNRx62LnVZI9CixaUBdSOD8VpKMu1BvKKMfV6h2800vJ0S6yuW', '2018-05-18 05:08:32', '2018-05-18 05:15:43'),
(6, 'Alumne4', 'alumne4@example.com', '$2y$10$pStoJBjDJeW78DW256xlMuFYiUHpl6Idnc3.qAHo8N.vbyOylgvG6', 'alumne', 0, '6CO4Ev5tHddksaukcgX7pvWrgeTSor784jaP59HVvajZ7hkqxmbHpMXYWc4r', '2018-05-18 05:11:42', '2018-05-18 05:13:36'),
(7, 'Empresa 2 SL', 'empresa2@example.com', '$2y$10$8KtXcYwuHF9mPiYSKebgjO0zUuujv20J50jzRdeYL2W5nLLwESEEu', 'empresa', 1, 'sNvFrbTUb6VQRZNdzkjAftPgkdZwmsnqq70g4OYN67WbSywPjxg5PHKynoMj', '2018-05-18 05:16:09', '2018-05-18 05:18:28'),
(8, 'Empresa 3 SL', 'empresa3@example.com', '$2y$10$x2SDltJ7CAnieHhCJd4ay.aTMWT0.VpevoA7G/ZAeQ9Dk0ytrN6aq', 'empresa', 0, '7zA6el2UhIRwwlheVeRX61KwMmEVmcxvZ2xm5jfFjRSoURaFPEmT888Sa490', '2018-05-18 05:17:24', '2018-05-18 05:18:06');

-- --------------------------------------------------------

--
-- Table structure for table `validadors`
--

CREATE TABLE `validadors` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rol` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `validat` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `validadors`
--

INSERT INTO `validadors` (`user_id`, `email`, `password`, `rol`, `validat`, `created_at`, `updated_at`) VALUES
(1, 'validador1@example.com', '$2y$10$m8yi5C11ovWWeqQ/KKHL2Oj6TqNnJXyuy2U1XMB98WLVVnotBaeQ6', 'validador', 1, '2018-05-17 12:38:43', '2018-05-17 12:38:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumnes`
--
ALTER TABLE `alumnes`
  ADD UNIQUE KEY `alumnes_alumne_email_unique` (`alumne_email`),
  ADD UNIQUE KEY `alumnes_alumne_dni_unique` (`alumne_dni`),
  ADD KEY `alumnes_user_id_foreign` (`user_id`),
  ADD KEY `alumnes_estudis_sigles_foreign` (`estudis_sigles`);

--
-- Indexes for table `alumne_oferta`
--
ALTER TABLE `alumne_oferta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alumne_oferta_alumne_user_id_foreign` (`alumne_user_id`),
  ADD KEY `alumne_oferta_oferta_id_foreign` (`oferta_id`);

--
-- Indexes for table `empresas`
--
ALTER TABLE `empresas`
  ADD UNIQUE KEY `empresas_empresa_email_unique` (`empresa_email`),
  ADD UNIQUE KEY `empresas_empresa_cif_unique` (`empresa_cif`),
  ADD KEY `empresas_user_id_foreign` (`user_id`);

--
-- Indexes for table `estudis`
--
ALTER TABLE `estudis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `estudis_sigles_index` (`sigles`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ofertas`
--
ALTER TABLE `ofertas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ofertas_estudis_sigles_foreign` (`estudis_sigles`),
  ADD KEY `ofertas_empresa_id_foreign` (`empresa_id`);

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
  ADD UNIQUE KEY `validadors_email_unique` (`email`),
  ADD KEY `validadors_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumne_oferta`
--
ALTER TABLE `alumne_oferta`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `estudis`
--
ALTER TABLE `estudis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ofertas`
--
ALTER TABLE `ofertas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alumnes`
--
ALTER TABLE `alumnes`
  ADD CONSTRAINT `alumnes_estudis_sigles_foreign` FOREIGN KEY (`estudis_sigles`) REFERENCES `estudis` (`sigles`),
  ADD CONSTRAINT `alumnes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `alumne_oferta`
--
ALTER TABLE `alumne_oferta`
  ADD CONSTRAINT `alumne_oferta_alumne_user_id_foreign` FOREIGN KEY (`alumne_user_id`) REFERENCES `alumnes` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `alumne_oferta_oferta_id_foreign` FOREIGN KEY (`oferta_id`) REFERENCES `ofertas` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `empresas`
--
ALTER TABLE `empresas`
  ADD CONSTRAINT `empresas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `ofertas`
--
ALTER TABLE `ofertas`
  ADD CONSTRAINT `ofertas_empresa_id_foreign` FOREIGN KEY (`empresa_id`) REFERENCES `empresas` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ofertas_estudis_sigles_foreign` FOREIGN KEY (`estudis_sigles`) REFERENCES `estudis` (`sigles`);

--
-- Constraints for table `validadors`
--
ALTER TABLE `validadors`
  ADD CONSTRAINT `validadors_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
