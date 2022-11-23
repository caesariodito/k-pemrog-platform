-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2022 at 12:39 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `platform_jadwal_kuliah`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(7) NOT NULL,
  `kode` varchar(7) NOT NULL,
  `matakuliah` varchar(50) NOT NULL,
  `kelas` varchar(2) NOT NULL,
  `pengampu` varchar(50) NOT NULL,
  `hari` varchar(7) NOT NULL,
  `jam` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `kode`, `matakuliah`, `kelas`, `pengampu`, `hari`, `jam`) VALUES
(5, 'ALGO106', 'Strategi Algoritma', 'A', 'Bu Rita', 'Senin', '07:00 - 10:00'),
(6, 'SENG104', 'RPL', 'C', 'Bu Polina Anjay', 'Senin', '10:00 - 13:00'),
(7, 'SENG106', 'Pemrograman Platform', 'C', 'Pak Adi', 'Senin', '14:00 - 16:00'),
(8, 'INMA103', 'Pemerolehan Informasi', 'A', 'Romo Kun', 'Selasa', '07:00 - 10:00'),
(9, 'INTS106', 'Pemrosesan Citra', 'B', 'Pak Kartono', 'Selasa', '10:00 - 13:00'),
(10, 'INTS102', 'Pengenalan Pola', 'D', 'Pak Linggo', 'Rabu', '07:00 - 10:00'),
(11, 'INMA103', 'Pemerolehan Informasi', 'AP', 'Romo Kun', 'Rabu', '10:00 - 13:00'),
(12, 'SENG104', 'RPL', 'CP', 'Bu Polina', 'Rabu', '13:00 - 16:00'),
(13, 'SENG106', 'Pemrograman Platform', 'CP', 'Pak Adi', 'Kamis', '10:00 - 13:00'),
(14, 'INTS106', 'Pemrosesan Citra', 'BP', 'Pak Kartono', 'Kamis', '15:00 - 18:00'),
(15, 'INTS102', 'Pengenalan Pola', 'DP', 'Pak Linggo', 'Jumat', '14:00 - 17:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
