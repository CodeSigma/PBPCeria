-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2019 at 02:03 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pbp`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kat` int(30) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kat`, `nama`) VALUES
(11, 'Tas Pria'),
(12, 'Tas Wanita');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `username`, `nama_lengkap`, `email`, `password`, `level`) VALUES
(123, 'ricko123', 'Ricko', 'ricko@gmail.com', 'ricko123', 'admin'),
(125, 'budi125', 'Budi', 'budi@gmail.com', 'budi125', 'manager'),
(127, 'ardi127', 'Ardi', 'ardi@gmail.com', 'ardi127', 'manager'),
(130, 'rini130', 'Rini', 'rini@gmail.com', 'rini123', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(30) NOT NULL,
  `id_kategori` int(30) NOT NULL,
  `idsub_kategori` int(30) NOT NULL,
  `harga` int(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `warna` varchar(50) NOT NULL,
  `path` varchar(100) NOT NULL,
  `last_update` datetime NOT NULL,
  `id_pegawai` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_kategori`, `idsub_kategori`, `harga`, `nama`, `warna`, `path`, `last_update`, `id_pegawai`) VALUES
(1111, 11, 21, 90000, 'Ransel ', 'hitam', 'database/img/ransel-hitam.jpg', '2019-10-02 00:00:00', 123),
(1112, 11, 22, 65000, 'Selempang', 'hitam', 'database/img/ransel-hitam.jpg', '2019-10-03 00:00:00', 123),
(1113, 12, 31, 200000, 'Handbag', 'hitam', 'database/img/ransel-hitam.jpg', '2019-10-04 00:00:00', 130),
(1114, 12, 32, 45000, 'Totebag', 'hitam', 'database/img/ransel-hitam.jpg', '2019-10-07 00:00:00', 130),
(1115, 11, 32, 90000, 'Totebag', 'putih', 'database/img/ransel-hitam.jpg', '2019-10-02 00:00:00', 123),
(1116, 11, 22, 90000, 'Selempang', 'putih', 'database/img/ransel-hitam.jpg', '2019-10-02 00:00:00', 130),
(1117, 12, 22, 90000, 'Selempang', 'merah', 'database/img/ransel-hitam.jpg', '2019-10-02 00:00:00', 130),
(1118, 11, 31, 90000, 'Handbag', 'coklat', 'database/img/ransel-hitam.jpg', '2019-10-02 00:00:00', 123),
(1119, 11, 22, 90000, 'Selemoang', 'Pink', 'database/img/ransel-hitam.jpg', '2019-10-02 00:00:00', 130),
(1120, 12, 21, 90000, 'Selemoang', 'Pink', 'database/img/ransel-hitam.jpg', '2019-10-02 00:00:00', 130);

-- --------------------------------------------------------

--
-- Table structure for table `sub_kat`
--

CREATE TABLE `sub_kat` (
  `id_kat` int(30) NOT NULL,
  `id_subkat` int(30) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_kat`
--

INSERT INTO `sub_kat` (`id_kat`, `id_subkat`, `nama`) VALUES
(11, 21, 'Tas Ransel'),
(11, 22, 'Tas Selempang'),
(12, 31, 'Handbag'),
(12, 32, 'Totebag');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kat`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `idsub_kategori` (`idsub_kategori`),
  ADD KEY `produk` (`id_pegawai`);

--
-- Indexes for table `sub_kat`
--
ALTER TABLE `sub_kat`
  ADD PRIMARY KEY (`id_subkat`),
  ADD KEY `id_kat` (`id_kat`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`),
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kat`),
  ADD CONSTRAINT `produk_ibfk_2` FOREIGN KEY (`idsub_kategori`) REFERENCES `sub_kat` (`id_subkat`);

--
-- Constraints for table `sub_kat`
--
ALTER TABLE `sub_kat`
  ADD CONSTRAINT `sub_kat_ibfk_1` FOREIGN KEY (`id_kat`) REFERENCES `kategori` (`id_kat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
