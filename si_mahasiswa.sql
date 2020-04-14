-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Apr 2020 pada 12.27
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_mahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `admins`
--

INSERT INTO `admins` (`id`, `name`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Mahasiswa', 'admin', '$2y$10$sbxd8BGXfrAu.ZKAh1dZw.xPub/wybfoQmRiyYTRhB.qqkoHLsK.W', NULL, '2020-03-05 00:34:53', '2020-03-05 00:34:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata_mahasiswa`
--

CREATE TABLE `biodata_mahasiswa` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `biodata_mahasiswa`
--

INSERT INTO `biodata_mahasiswa` (`id`, `name`, `nim`, `address`, `created_at`, `updated_at`, `deleted_at`, `photo`) VALUES
(2, 'Mahasiswa 0', '15833238300', 'Kota Malang', '2020-03-04 05:10:30', '2020-03-04 05:10:30', NULL, NULL),
(3, 'Mahasiswa 1', '15833238301', 'Kota Malang', '2020-03-04 05:10:30', '2020-03-04 05:10:30', NULL, NULL),
(4, 'Mahasiswa 2', '15833238312', 'Kota Malang', '2020-03-04 05:10:31', '2020-03-04 05:10:31', NULL, NULL),
(5, 'Mahasiswa 3', '15833238313', 'Kota Malang', '2020-03-04 05:10:31', '2020-03-04 05:10:31', NULL, NULL),
(9, 'coba', '99999', 'boobobo', '2020-03-04 05:22:50', '2020-03-04 05:23:24', '2020-03-04 05:23:24', NULL),
(10, 'yyy', '888', 'uyyy', '2020-03-04 05:30:02', '2020-03-04 05:30:02', NULL, NULL),
(11, 'ahahh', '12121', 'ksds', '2020-03-04 05:37:58', '2020-03-04 05:37:58', NULL, NULL),
(12, 'asas', '1212', 'asas', '2020-03-04 05:40:00', '2020-03-04 05:40:00', NULL, 'public/9PnagyDH6R6J02NMbhRpFohwmd0GkKze2IQTZIsE.jpeg'),
(13, 'Mahasiswa 0', '15833924680', 'Kota Malang', '2020-03-05 00:14:28', '2020-03-05 00:14:28', NULL, NULL),
(14, 'Mahasiswa 1', '15833924681', 'Kota Malang', '2020-03-05 00:14:28', '2020-03-05 00:14:28', NULL, NULL),
(15, 'Mahasiswa 2', '15833924682', 'Kota Malang', '2020-03-05 00:14:28', '2020-03-05 00:14:28', NULL, NULL),
(16, 'Mahasiswa 3', '15833924683', 'Kota Malang', '2020-03-05 00:14:28', '2020-03-05 00:14:28', NULL, NULL),
(17, 'jsndjsjjnjn', '7777777', 'ansjansj', '2020-03-15 12:39:56', '2020-03-30 04:19:18', '2020-03-30 04:19:18', 'public/gvsD0K9L0uAY9Th9UkCQKpt7o51Dfc5zwkPC9Pi0.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2020_02_12_115119_biodata_mahasiswa', 2),
(5, '2020_02_20_122252_biodata_mahasiswa_soft_delete', 2),
(10, '2020_03_04_120833_add_foto', 3),
(11, '2020_03_05_064400_create_admins_table', 4);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `biodata_mahasiswa`
--
ALTER TABLE `biodata_mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `biodata_mahasiswa_nim_unique` (`nim`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `biodata_mahasiswa`
--
ALTER TABLE `biodata_mahasiswa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
