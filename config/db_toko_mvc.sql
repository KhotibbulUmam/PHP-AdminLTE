-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2024 at 04:02 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_toko_mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kode` char(7) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kode`, `nama`, `harga`, `stok`) VALUES
('BRG001', 'Mie Goreng', 3500, 50),
('BRG002', 'Indomie', 3500, 84),
('BRG003', 'Mie Sakura', 2000, 50),
('BRG004', 'Mie Jagung', 5000, 100),
('BRG005', 'Mie Ramen', 7000, 1495);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` char(7) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama`, `alamat`) VALUES
('P001', 'Bakwan', 'Jln. Bakwan No.5'),
('P002', 'Black', ' Jln Putih'),
('P003', 'Naruto', 'Desa Konoha');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `kode_barang` char(7) NOT NULL,
  `id_pelanggan` char(7) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `bayar` int(11) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `kode_barang`, `id_pelanggan`, `jumlah`, `bayar`, `tanggal`) VALUES
(1, 'BRG001', 'P001', 6, 21000, '2024-11-10 08:01:19'),
(2, 'BRG002', 'P001', 50, 175000, '2024-11-10 08:03:18'),
(10, 'BRG001', 'P001', 50, 175000, '2024-11-10 08:19:19'),
(14, 'BRG002', 'P002', 16, 56000, '2024-11-10 08:28:28'),
(15, 'BRG005', 'P003', 5, 35000, '2024-11-10 10:00:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_pelanggan` (`id_pelanggan`),
  ADD KEY `kode_barang` (`kode_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`kode_barang`) REFERENCES `barang` (`kode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
