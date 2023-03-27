-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 27 Mar 2023, 22:15
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
(39, 2, 2, 226.90, 228.50, 228.00, 2.10, '0%', 49.98, 10528104, '2023-03-22 20:45:59', '2023-03-22 19:46:02', '2023-03-22 19:46:02'),
(40, 3, 3, 226.50, 228.40, 228.70, 2.20, '0%', 49.98, 8899342, '2023-03-22 20:45:59', '2023-03-22 19:46:05', '2023-03-22 19:46:05'),
(41, 4, 4, 229.30, 229.20, 231.00, 2.30, '0%', 49.99, 10299122, '2023-03-22 20:45:59', '2023-03-22 19:46:08', '2023-03-22 19:46:08'),
(42, 5, 5, 224.00, 225.80, 225.50, 2.40, '0%', 49.99, 28175768, '2023-03-22 20:45:59', '2023-03-22 19:46:11', '2023-03-22 19:46:11'),
(43, 6, 6, 225.30, 225.50, 223.10, 2.50, '0%', 49.99, 31424858, '2023-03-22 20:45:59', '2023-03-22 19:46:14', '2023-03-22 19:46:14'),
(44, 7, 7, 229.80, 229.10, 230.10, 2.60, '0%', 49.99, 23617836, '2023-03-22 20:45:59', '2023-03-22 19:46:17', '2023-03-22 19:46:17'),
(45, 8, 8, 229.90, 228.10, 229.10, 2.70, '0%', 49.99, 19829912, '2023-03-22 20:45:59', '2023-03-22 19:46:20', '2023-03-22 19:46:20'),
(46, 9, 9, 239.90, 239.00, 238.70, 2.80, '0%', 49.99, 41349128, '2023-03-22 20:45:59', '2023-03-22 19:46:23', '2023-03-22 19:46:23'),
(47, 10, 10, 238.80, 238.30, 238.60, 2.90, '0%', 49.99, 50731944, '2023-03-22 20:45:59', '2023-03-22 19:46:26', '2023-03-22 19:46:26'),
(48, 11, 11, 224.80, 225.50, 224.50, 2.10, '0%', 49.98, 10398395, '2023-03-22 20:45:59', '2023-03-22 19:46:29', '2023-03-22 19:46:29'),
(49, 12, 12, 222.50, 224.90, 223.40, 2.20, '0%', 49.98, 20402320, '2023-03-22 20:45:59', '2023-03-22 19:46:32', '2023-03-22 19:46:32'),
(50, 13, 13, 225.00, 229.40, 228.20, 2.30, '0%', 49.98, 8014435, '2023-03-22 20:45:59', '2023-03-22 19:46:35', '2023-03-22 19:46:35'),
(51, 2, 2, 224.90, 227.20, 226.00, 2.40, '0%', 49.99, 10528104, '2023-03-22 20:48:53', '2023-03-22 19:48:56', '2023-03-22 19:48:56'),
(52, 3, 3, 225.10, 227.20, 226.00, 2.50, '0%', 49.99, 8899342, '2023-03-22 20:48:53', '2023-03-22 19:48:59', '2023-03-22 19:48:59'),
(53, 4, 4, 227.40, 227.30, 229.00, 2.60, '0%', 49.99, 10299122, '2023-03-22 20:48:53', '2023-03-22 19:49:02', '2023-03-22 19:49:02'),
(54, 5, 5, 224.20, 225.40, 225.60, 2.70, '0%', 49.99, 28175768, '2023-03-22 20:48:53', '2023-03-22 19:49:05', '2023-03-22 19:49:05'),
(55, 6, 6, 225.30, 225.60, 223.30, 2.80, '0%', 49.99, 31424858, '2023-03-22 20:48:53', '2023-03-22 19:49:08', '2023-03-22 19:49:08'),
(56, 7, 7, 229.60, 228.50, 229.50, 2.90, '0%', 49.99, 23617836, '2023-03-22 20:48:53', '2023-03-22 19:49:11', '2023-03-22 19:49:11'),
(57, 8, 8, 229.30, 225.60, 229.00, 2.10, '0%', 49.99, 19829912, '2023-03-22 20:48:53', '2023-03-22 19:49:14', '2023-03-22 19:49:14'),
(58, 9, 9, 239.50, 239.20, 239.20, 2.20, '0%', 50.00, 41349128, '2023-03-22 20:48:53', '2023-03-22 19:49:17', '2023-03-22 19:49:17'),
(59, 10, 10, 239.00, 238.60, 239.10, 2.30, '0%', 49.99, 50731944, '2023-03-22 20:48:53', '2023-03-22 19:49:21', '2023-03-22 19:49:21'),
(60, 11, 11, 224.90, 225.40, 224.30, 2.40, '0%', 50.00, 10398395, '2023-03-22 20:48:53', '2023-03-22 19:49:23', '2023-03-22 19:49:23'),
(61, 12, 12, 222.60, 223.80, 223.90, 2.50, '0%', 50.01, 20402320, '2023-03-22 20:48:53', '2023-03-22 19:49:26', '2023-03-22 19:49:26'),
(62, 13, 13, 227.40, 230.80, 228.00, 2.60, '0%', 50.01, 8014435, '2023-03-22 20:48:53', '2023-03-22 19:49:30', '2023-03-22 19:49:30');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `measurement_one_minutes`
--
ALTER TABLE `measurement_one_minutes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `measurement_one_minutes`
--
ALTER TABLE `measurement_one_minutes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
