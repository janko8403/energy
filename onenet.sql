-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 16 Mar 2023, 09:16
-- Wersja serwera: 10.4.24-MariaDB
-- Wersja PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `onenet`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `areas`
--

CREATE TABLE `areas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `area` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `areas`
--

INSERT INTO `areas` (`id`, `area`) VALUES
(1, 'Przywidz'),
(2, 'Mława');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `configurations`
--

CREATE TABLE `configurations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nazwaOdbiorcy` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mocUmowna` double(8,2) NOT NULL DEFAULT 0.00,
  `typKlienta` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `napiecie` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area_id` bigint(20) UNSIGNED DEFAULT NULL,
  `pv_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `configurations`
--

INSERT INTO `configurations` (`id`, `nazwaOdbiorcy`, `mocUmowna`, `typKlienta`, `napiecie`, `area_id`, `pv_id`) VALUES
(1, 'M.J. Kasztanowa 1, Przywidz', 7.00, 'indywidualny', 'nn', 1, 1),
(2, 'C.H. Kasztanowa 6 Przywidz', 10.00, 'indywidualny', 'nn', 1, 2),
(3, 'Z.N. Kasztanowa 7, Przywidz', 10.00, 'indywidualny', 'nn', 1, 3),
(4, 'S.H. Kasztanowa 3, Przywidz', 12.50, 'indywidualny', 'nn', 1, 4),
(5, 'Hala Sportowa 31.0.208.227', 12.50, 'indywidualny', 'nn', 1, 5),
(6, 'Hala Sportowa 46.77.79.92', 12.50, 'indywidualny', 'nn', 1, 6),
(7, 'Hydrofornia', 12.50, 'indywidualny', 'nn', 1, 7),
(8, 'Przedszkole ul. Cisowa 12', 10.50, 'indywidualny', 'nn', 1, 8),
(9, 'Oczyszczalnia ścieków 46.77.84.117', 10.50, 'indywidualny', 'nn', 1, 9),
(10, 'Oczyszczalnia ścieków 31.0.219.86', 10.50, 'indywidualny', 'nn', 1, 10),
(11, 'Urząd Gminy 46.77.84.99', 10.50, 'indywidualny', 'nn', 1, 11),
(12, 'PUrząd Gminy 37.98.211.249', 10.50, 'indywidualny', 'nn', 1, 12),
(13, 'M.C. Cisowa 8', 10.50, 'indywidualny', 'nn', 1, 13),
(14, 'M.C. Kwiatowa 1a', 10.50, 'indywidualny', 'nn', 1, 14),
(15, 'Szkoła podstawowa', 10.50, 'indywidualny', 'nn', 1, 15),
(16, 'Cisowa 14', 10.50, 'indywidualny', 'nn', 1, 16),
(17, 'Kasztanowa 2', 10.50, 'indywidualny', 'nn', 1, 17),
(18, 'Kwiatowa 3', 10.50, 'indywidualny', 'nn', 1, 18),
(19, 'Różana 3a', 10.50, 'indywidualny', 'nn', 1, 19),
(20, 'Różana 9', 10.50, 'indywidualny', 'nn', 1, 20);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `logs`
--

CREATE TABLE `logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `device_id` int(11) NOT NULL,
  `client_id` bigint(20) UNSIGNED DEFAULT NULL,
  `log` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `measurement_fifteen_minutes`
--

CREATE TABLE `measurement_fifteen_minutes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `device_id` int(11) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `last_voltage_l1` double(8,2) DEFAULT NULL,
  `last_voltage_l2` double(8,2) DEFAULT NULL,
  `last_voltage_l3` double(8,2) DEFAULT NULL,
  `last_power_value` double(8,2) DEFAULT NULL,
  `last_power_set_active` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_frequency` double(8,2) DEFAULT NULL,
  `energy_data` int(11) DEFAULT NULL,
  `requested_timestamp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `measurement_one_hours`
--

CREATE TABLE `measurement_one_hours` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `device_id` int(11) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `last_voltage_l1` double(8,2) DEFAULT NULL,
  `last_voltage_l2` double(8,2) DEFAULT NULL,
  `last_voltage_l3` double(8,2) DEFAULT NULL,
  `last_power_value` double(8,2) DEFAULT NULL,
  `last_power_set_active` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_frequency` double(8,2) DEFAULT NULL,
  `energy_data` int(11) DEFAULT NULL,
  `requested_timestamp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `measurement_one_minutes`
--

CREATE TABLE `measurement_one_minutes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `device_id` int(11) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `last_voltage_l1` double(8,2) DEFAULT NULL,
  `last_voltage_l2` double(8,2) DEFAULT NULL,
  `last_voltage_l3` double(8,2) DEFAULT NULL,
  `last_power_value` double(8,2) DEFAULT NULL,
  `last_power_set_active` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_frequency` double(8,2) DEFAULT NULL,
  `energy_data` int(11) DEFAULT NULL,
  `requested_timestamp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `measurement_one_minutes`
--

INSERT INTO `measurement_one_minutes` (`id`, `device_id`, `client_id`, `last_voltage_l1`, `last_voltage_l2`, `last_voltage_l3`, `last_power_value`, `last_power_set_active`, `last_frequency`, `energy_data`, `requested_timestamp`, `created_at`, `updated_at`) VALUES
(2, 2, 2, 239.00, 244.20, 237.20, 4.00, '0%', 50.01, 10417920, '2023-03-15 11:57:24', '2023-03-15 17:57:24', '2023-03-15 09:57:24'),
(3, 3, 2, 238.70, 245.00, 237.70, 3.52, '0%', 50.02, 8807631, '2023-03-15 11:57:26', '2023-03-15 18:57:26', '2023-03-15 09:57:26'),
(4, 4, 4, 238.20, 237.70, 241.70, 5.01, '0%', 50.02, 10197280, '2023-03-15 11:57:29', '2023-03-15 09:57:29', '2023-03-15 09:57:29'),
(5, 5, 5, 234.30, 235.80, 236.00, 13.79, '0%', 50.02, 27855430, '2023-03-15 11:57:32', '2023-03-15 09:57:32', '2023-03-15 09:57:32'),
(6, 6, 6, 235.30, 235.40, 233.10, 0.24, '0%', 50.02, 31404810, '2023-03-15 11:57:35', '2023-03-15 09:57:35', '2023-03-15 09:57:35'),
(8, 8, 8, 245.30, 237.30, 243.20, 12.54, '0%', 50.01, 19606924, '2023-03-15 11:57:41', '2023-03-15 09:57:41', '2023-03-15 09:57:41'),
(9, 9, 9, 246.50, 245.80, 246.30, 22.03, '0%', 50.01, 40843328, '2023-03-15 11:57:44', '2023-03-15 09:57:44', '2023-03-15 09:57:44'),
(10, 10, 10, 245.80, 245.50, 246.40, 24.98, '0%', 50.02, 50131872, '2023-03-15 11:57:47', '2023-03-15 09:57:47', '2023-03-15 09:57:47'),
(11, 11, 11, 236.00, 241.30, 239.90, 5.75, '0%', 50.02, 10277187, '2023-03-15 11:57:51', '2023-03-15 09:57:51', '2023-03-15 09:57:51'),
(12, 12, 12, 236.00, 239.80, 239.00, 11.32, '0%', 50.01, 20168280, '2023-03-15 11:57:54', '2023-03-15 09:57:54', '2023-03-15 09:57:54'),
(13, 13, 13, 240.90, 243.90, 239.60, 4.00, '0%', 50.02, 7924348, '2023-03-15 11:57:57', '2023-03-15 15:57:57', '2023-03-15 09:57:57'),
(15, 2, 2, 235.80, 242.00, 235.70, 4.20, '0%', 50.02, 10418035, '2023-03-15 11:59:00', '2023-03-15 18:57:24', '2023-03-15 18:57:24'),
(16, 3, 3, 236.80, 242.30, 236.00, 3.67, '0%', 50.03, 8807730, '2023-03-15 11:59:03', '2023-03-15 09:59:03', '2023-03-15 09:59:03'),
(17, 4, 4, 236.30, 234.70, 239.10, 5.25, '0%', 50.03, 10197420, '2023-03-15 11:59:06', '2023-03-15 12:59:06', '2023-03-15 09:59:06'),
(18, 5, 5, 233.30, 234.60, 235.20, 14.85, '0%', 50.03, 27855832, '2023-03-15 11:59:09', '2023-03-15 13:59:09', '2023-03-15 09:59:09'),
(19, 6, 6, 234.50, 234.20, 232.00, 0.24, '0%', 50.02, 31404816, '2023-03-15 11:59:12', '2023-03-15 09:59:12', '2023-03-15 09:59:12'),
(21, 8, 8, 242.50, 237.30, 239.30, 13.06, '0%', 50.03, 19607280, '2023-03-15 11:59:19', '2023-03-15 09:59:19', '2023-03-15 09:59:19'),
(22, 9, 9, 247.20, 246.70, 247.20, 22.38, '0%', 50.03, 40843944, '2023-03-15 11:59:22', '2023-03-15 09:59:22', '2023-03-15 09:59:22'),
(23, 10, 10, 246.20, 246.20, 247.00, 24.98, '0%', 50.03, 50132576, '2023-03-15 11:59:26', '2023-03-15 19:57:24', '2023-03-15 09:59:26'),
(24, 11, 11, 233.70, 238.00, 238.50, 5.56, '0%', 50.03, 10277330, '2023-03-15 11:59:29', '2023-03-15 09:59:29', '2023-03-15 09:59:29'),
(25, 12, 12, 232.20, 237.10, 238.60, 10.97, '0%', 50.03, 20168564, '2023-03-15 11:59:32', '2023-03-15 15:59:09', '2023-03-15 09:59:32'),
(26, 13, 13, 239.80, 241.90, 239.40, 3.60, '0%', 50.02, 7924460, '2023-03-15 11:59:35', '2023-03-15 09:59:35', '2023-03-15 09:59:35');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(14, '2014_10_12_000000_create_users_table', 1),
(15, '2014_10_12_100000_create_password_resets_table', 1),
(16, '2019_08_19_000000_create_failed_jobs_table', 1),
(17, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(18, '2023_02_22_115201_create_roles_table', 1),
(19, '2023_02_22_115549_create_user_role_table', 1),
(20, '2023_03_03_173650_create_areas_table', 1),
(21, '2023_03_03_175256_create_pvs_table', 1),
(22, '2023_03_03_175959_create_configurations_table', 1),
(23, '2023_03_03_181207_create_logs_table', 1),
(24, '2023_03_06_140442_create_measurement_one_minutes_table', 1),
(25, '2023_03_14_205700_create_measurement_fifteen_minutes_table', 1),
(26, '2023_03_14_210211_create_measurement_one_hours_table', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pvs`
--

CREATE TABLE `pvs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `generacja` int(11) NOT NULL DEFAULT 0,
  `adres` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `pvs`
--

INSERT INTO `pvs` (`id`, `generacja`, `adres`) VALUES
(1, 6, 'http://31.0.201.158'),
(2, 6, 'http://31.0.200.95'),
(3, 7, 'http://46.77.72.216'),
(4, 5, 'http://31.0.207.185'),
(5, 6, 'http://31.0.208.227'),
(6, 5, 'http://46.77.79.92'),
(7, 6, 'http://37.98.212.115'),
(8, 5, 'http://46.77.82.187'),
(9, 5, 'http://46.77.84.117'),
(10, 5, 'http://31.0.219.86'),
(11, 5, 'http://46.77.84.99'),
(12, 5, 'http://37.98.211.249'),
(13, 5, 'http://31.0.210.92'),
(14, 5, 'http://31.0.208.219'),
(15, 5, 'http://31.0.210.234'),
(16, 5, 'http://31.0.220.178'),
(17, 5, 'http://31.0.224.42'),
(18, 5, 'http://31.0.210.93'),
(19, 5, 'http://46.77.78.135'),
(20, 5, 'http://31.0.218.0');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `roles`
--

INSERT INTO `roles` (`id`, `created_at`, `updated_at`, `name`, `description`) VALUES
(1, '2023-03-15 13:57:10', '2023-03-15 13:57:10', 'Admin', 'Administrator'),
(2, '2023-03-15 13:57:10', '2023-03-15 13:57:10', 'User', 'Użytkownik');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jan', 'test@test.pl', '2023-03-15 01:57:10', '$2y$10$OXe1TnQkgwv2xVs.6ejBBOaziT9.1VhuiRPma6pvVjvlf1x6TP8ZW', NULL, '2023-03-15 13:57:10', '2023-03-15 13:57:10');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_role`
--

CREATE TABLE `user_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `user_role`
--

INSERT INTO `user_role` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `configurations`
--
ALTER TABLE `configurations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `configurations_area_id_foreign` (`area_id`),
  ADD KEY `configurations_pv_id_foreign` (`pv_id`);

--
-- Indeksy dla tabeli `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeksy dla tabeli `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `logs_user_id_foreign` (`user_id`),
  ADD KEY `logs_client_id_foreign` (`client_id`);

--
-- Indeksy dla tabeli `measurement_fifteen_minutes`
--
ALTER TABLE `measurement_fifteen_minutes`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `measurement_one_hours`
--
ALTER TABLE `measurement_one_hours`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `measurement_one_minutes`
--
ALTER TABLE `measurement_one_minutes`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeksy dla tabeli `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeksy dla tabeli `pvs`
--
ALTER TABLE `pvs`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeksy dla tabeli `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `areas`
--
ALTER TABLE `areas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `configurations`
--
ALTER TABLE `configurations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT dla tabeli `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `logs`
--
ALTER TABLE `logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `measurement_fifteen_minutes`
--
ALTER TABLE `measurement_fifteen_minutes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `measurement_one_hours`
--
ALTER TABLE `measurement_one_hours`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `measurement_one_minutes`
--
ALTER TABLE `measurement_one_minutes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT dla tabeli `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT dla tabeli `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `pvs`
--
ALTER TABLE `pvs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT dla tabeli `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `configurations`
--
ALTER TABLE `configurations`
  ADD CONSTRAINT `configurations_area_id_foreign` FOREIGN KEY (`area_id`) REFERENCES `areas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `configurations_pv_id_foreign` FOREIGN KEY (`pv_id`) REFERENCES `pvs` (`id`) ON DELETE CASCADE;

--
-- Ograniczenia dla tabeli `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `logs_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `configurations` (`id`),
  ADD CONSTRAINT `logs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
