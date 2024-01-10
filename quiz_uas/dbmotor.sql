
-- Nama: Kisah Tegar Putra Abdi
-- NPM: 2021804041


-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 10, 2024 at 03:14 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmotor`
--

-- --------------------------------------------------------

--
-- Table structure for table `motor`
--

CREATE TABLE `motor` (
  `kdmotor` varchar(5) NOT NULL,
  `nmmotor` varchar(15) NOT NULL,
  `merk` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `motor`
--

INSERT INTO `motor` (`kdmotor`, `nmmotor`, `merk`) VALUES
('M001', 'Yamaha R1', 'Yamaha'),
('M002', 'Ducati panigale', 'Ducati');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `kdpembelian` varchar(5) NOT NULL,
  `nmmotor` varchar(15) NOT NULL,
  `type` varchar(15) NOT NULL,
  `warna` varchar(15) NOT NULL,
  `tanggal` varchar(15) NOT NULL,
  `hargabeli` varchar(15) NOT NULL,
  `cashorcredit` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`kdpembelian`, `nmmotor`, `type`, `warna`, `tanggal`, `hargabeli`, `cashorcredit`) VALUES
('P001', 'Ducati', 'Sport', 'Putih', '2024-01-10', '2500600', 'cash'),
('P002', 'Yamaha', 'Sport', 'Biru', '2024-01-10', '5222333', 'kredit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `motor`
--
ALTER TABLE `motor`
  ADD PRIMARY KEY (`kdmotor`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`kdpembelian`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
