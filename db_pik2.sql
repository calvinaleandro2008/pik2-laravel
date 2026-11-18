-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 18 Nov 2026 pada 07.22
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pik2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `managers`
--

CREATE TABLE `managers` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `managers`
--

INSERT INTO `managers` (`id`, `nama`, `username`, `password`, `created_at`) VALUES
(1, 'Manager PIK2', 'manager', '$2y$12$ferMfuY58PSqufNHzLa7zeSlY/ILCZoWZVAC8QCscaTSis7RyzfOK', '2026-11-18 05:32:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perumahan`
--

CREATE TABLE `perumahan` (
  `id` int(11) NOT NULL,
  `cluster` varchar(100) NOT NULL,
  `kode_unit` varchar(50) NOT NULL,
  `nama_jalan` varchar(150) NOT NULL,
  `tipe_rumah` varchar(100) NOT NULL,
  `stok_rumah` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `perumahan`
--

INSERT INTO `perumahan` (`id`, `cluster`, `kode_unit`, `nama_jalan`, `tipe_rumah`, `stok_rumah`, `created_at`, `updated_at`) VALUES
(1, 'Cluster Atlanta', 'Blok A1 / No. 08', 'Jl. Atlanta Boulevard', 'Type Olive (8x10)', 6, '2026-11-18 05:32:53', '2026-11-18 05:32:53'),
(2, 'Cluster California', 'Blok C3 / No. 12', 'Jl. Sunset Avenue PIK2', 'Type Brown (4.5x10)', 14, '2026-11-18 05:32:53', '2026-11-18 05:32:53'),
(3, 'Cluster Florida', 'Blok F2 / No. 05', 'Jl. Palm Beach Raya', 'Type Sapphire (8x12.5)', 2, '2026-11-18 05:32:53', '2026-11-18 05:32:53'),
(4, 'Cluster San Antonio', 'Blok S5 / No. 01', 'Jl. Riverwalk Utama', 'Type Emerald (10x15)', 5, '2026-11-18 05:32:53', '2026-11-17 23:08:15'),
(5, 'Cluster Pasadena', 'Blok P1 / No. 21', 'Jl. Green Belt Barat', 'Type Jade (6x10)', 9, '2026-11-18 05:32:53', '2026-11-18 05:32:53'),
(6, 'Cluster California', 'Blok A2/No. 16', 'Jalan Bsd', 'Type Olive (8x10)', 10, '2026-11-17 22:57:16', '2026-11-17 22:57:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `promo_leads`
--

CREATE TABLE `promo_leads` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telepon` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `promo_leads`
--

INSERT INTO `promo_leads` (`id`, `nama_lengkap`, `email`, `no_telepon`, `created_at`) VALUES
(1, 'Rian', 'rianwijaya@gmail.com', '082211992278', '2026-11-17 22:56:05');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `managers`
--
ALTER TABLE `managers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `perumahan`
--
ALTER TABLE `perumahan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unik_unit_cluster` (`cluster`,`kode_unit`);

--
-- Indeks untuk tabel `promo_leads`
--
ALTER TABLE `promo_leads`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `managers`
--
ALTER TABLE `managers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `perumahan`
--
ALTER TABLE `perumahan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `promo_leads`
--
ALTER TABLE `promo_leads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
