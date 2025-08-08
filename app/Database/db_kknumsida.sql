-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2025 at 02:25 AM
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
-- Database: `db_kknumsida`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_kkn`
--

CREATE TABLE `daftar_kkn` (
  `id_daftar_kkn` int(11) NOT NULL,
  `id_master_kkn` int(11) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `desa_tujuan` varchar(150) DEFAULT NULL,
  `jaket` varchar(50) DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `kerja` varchar(150) DEFAULT NULL,
  `status` enum('aktif','lulus','batal') DEFAULT 'aktif',
  `bidang` varchar(150) DEFAULT NULL,
  `kelamin` enum('L','P') DEFAULT NULL,
  `tema` varchar(150) DEFAULT NULL,
  `regional` varchar(150) DEFAULT NULL,
  `gelombang` varchar(50) DEFAULT NULL,
  `alasan` text DEFAULT NULL,
  `klaster_kkn` varchar(100) DEFAULT NULL,
  `jam` time DEFAULT NULL,
  `jenis` varchar(100) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `komentar` text DEFAULT NULL,
  `ambil_jaket` enum('ya','tidak') DEFAULT 'tidak',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `master_kkn`
--

CREATE TABLE `master_kkn` (
  `id_master_kkn` int(11) NOT NULL,
  `jenis_kkn` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `tahun` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `access` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nik`, `nama`, `password`, `access`, `created_at`) VALUES
(1, '123', 'admin', '$2y$10$jhxOg4NylVOnnHeYZ3Lt8O04fz8HDZUYExsXjKlupWQFQJosXwSZO', 'administrator,dpl,drpm', '2025-08-04 14:28:39'),
(5, '111', 'Admin2', '$2y$10$3YkQxdRlsR1gmepM37dUAOcXEqv6kPk/AcoZ.WngXYjUSsIDkzUUi', 'dpl', '2025-08-08 00:25:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_kkn`
--
ALTER TABLE `daftar_kkn`
  ADD PRIMARY KEY (`id_daftar_kkn`),
  ADD KEY `id_master_kkn` (`id_master_kkn`);

--
-- Indexes for table `master_kkn`
--
ALTER TABLE `master_kkn`
  ADD PRIMARY KEY (`id_master_kkn`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_kkn`
--
ALTER TABLE `daftar_kkn`
  MODIFY `id_daftar_kkn` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_kkn`
--
ALTER TABLE `master_kkn`
  MODIFY `id_master_kkn` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `daftar_kkn`
--
ALTER TABLE `daftar_kkn`
  ADD CONSTRAINT `daftar_kkn_ibfk_1` FOREIGN KEY (`id_master_kkn`) REFERENCES `master_kkn` (`id_master_kkn`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
