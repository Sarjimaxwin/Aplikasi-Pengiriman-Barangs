-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2024 at 01:45 PM
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
-- Database: `aplikasi_1eb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `nama_pemesan` varchar(255) NOT NULL,
  `lauk_utama` varchar(255) NOT NULL,
  `lauk_tambahan_satu` varchar(255) DEFAULT NULL,
  `lauk_tambahan_dua` varchar(255) DEFAULT NULL,
  `catatan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `nama_pemesan`, `lauk_utama`, `lauk_tambahan_satu`, `lauk_tambahan_dua`, `catatan`) VALUES
(9, 'S', 'A', 'T', 'U', 'EB'),
(14, 'BI', 'NT', 'A', 'N', 'G'),
(15, 'S', 'A', 'T', 'U', 'EB'),
(16, 'B', 'IN', 'T', 'AN', 'G'),
(19, 'H', 'J', 'J', 'J', 'J');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `nama_lengkap` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `no_HP` text NOT NULL,
  `alamat` text NOT NULL,
  `hobby` text NOT NULL,
  `tanggal_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`nama_lengkap`, `email`, `password`, `no_HP`, `alamat`, `hobby`, `tanggal_lahir`) VALUES
('', '', '', '', '', '', '0000-00-00'),
('ma\'wa', '1@1.com', '1', '0988', 'xx', 'yy', '2024-07-08'),
('ma\'wa', '7@7.com', '7', '0998787', 'gbs', 'gbh', '2024-07-23'),
('Ma\'wa', '8@8.com', '8', '098', 'gang h a\'li', 'bgt', '2024-07-29'),
('Bintang', 'Bintang@pgt.com', '123', '08814530786', 'TGR', 'Ngumpulin Hp', '2024-07-05'),
('febfefe', 'gdufeufqe@g', 'vsbvfvf', '23224', 'gbgbgf', 'fdgfdgdf', '2024-07-26'),
('gyg', 'gvtv@fcf', 'bybyb', '445', 'gygyg', 'yyh', '2024-07-09'),
('bintang,', 'n@gmail', '123', '123456789098', 'tgr', 'www', '2024-07-18'),
('wdwd', 'wd@fcf', '123', '23', '2d', 'dwdw', '2024-07-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
