-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2024 at 05:52 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `persediaandb`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kdbarang` varchar(5) NOT NULL,
  `nmbarang` varchar(25) NOT NULL,
  `satuan` varchar(10) NOT NULL,
  `warna` varchar(10) NOT NULL,
  `jumlah` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kdbarang`, `nmbarang`, `satuan`, `warna`, `jumlah`) VALUES
('B001', 'Kipas', 'Box', 'Putih', 6),
('B002', 'Kulkas', 'Set', 'Biru', 4),
('B003', 'TV', 'Box', 'Putih', 7),
('B004', 'Kursi', 'Pcs', 'Merah', 83),
('B005', 'Komputer', 'Set', 'Putih', 3);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `kdcustomer` varchar(5) NOT NULL,
  `nmcustomer` varchar(25) NOT NULL,
  `tlp` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `alamat` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`kdcustomer`, `nmcustomer`, `tlp`, `email`, `alamat`) VALUES
('C001', 'Fullan Bin Syahid', '08229898921', 'fullan@mail.com', 'JL. Budi Luhur');

-- --------------------------------------------------------

--
-- Table structure for table `motor`
--

CREATE TABLE `motor` (
  `kdmotor` varchar(5) NOT NULL,
  `nmmotor` varchar(25) NOT NULL,
  `warna` varchar(10) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `motor`
--

INSERT INTO `motor` (`kdmotor`, `nmmotor`, `warna`, `harga`) VALUES
('M001', 'Revo', 'Putih', 1000),
('M002', 'Supra', 'Biru', 2000),
('M003', 'Beat', 'Putih', 3000),
('M004', 'mATIC', 'Putih', 9000);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `kdtransaksi` varchar(5) NOT NULL,
  `kdcustomer` varchar(5) NOT NULL,
  `kdbarang` varchar(5) NOT NULL,
  `quantity` varchar(40) NOT NULL,
  `tanggal` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`kdtransaksi`, `kdcustomer`, `kdbarang`, `quantity`, `tanggal`) VALUES
('T001', 'C001', 'B003', '10', '18-06-2003');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('anton', '321'),
('kisah', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kdbarang`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`kdcustomer`);

--
-- Indexes for table `motor`
--
ALTER TABLE `motor`
  ADD PRIMARY KEY (`kdmotor`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`kdtransaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
