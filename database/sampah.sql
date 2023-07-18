-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2021 at 10:08 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sampah`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `tgl` date NOT NULL,
  `gambar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `isi`, `tgl`, `gambar`) VALUES
(8, 'adha', 'nbnbnbnbnn', '2001-11-11', '602f7cb6e8796.png'),
(9, 'ttttttttgbnm', 'jhjgjghjhjgh', '2008-09-09', '602f7cd89580b.jpg'),
(10, 'sdsd', 'fghjksdbad', '2001-06-06', '602f7cfe987b9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `nik` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `kelurahan` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `no_tlp` int(11) NOT NULL,
  `level` varchar(5) NOT NULL,
  `poin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`nik`, `nama`, `password`, `tempat`, `tanggal_lahir`, `kelurahan`, `alamat`, `jenis_kelamin`, `agama`, `no_tlp`, `level`, `poin`) VALUES
(' 404', 'admin', '$2y$10$FQoo0bNVIklU0lOp16cK4OCaNMz6lR4eDRJlNyGyn6BFzuShdRidK', 'Ranjok ', '1998-12-17', 'Karang Seraya', 'Ranjok Selatan', 'Laki-Laki', 'Islam', 0, 'admin', 0),
('12', 'as', '$2y$10$T5tybyyinOyFV/KsqqIWv.L5F6XknD.LfKFW0qTm0K3R6.NQLn.jq', '', '0000-00-00', '', '', '', '', 0, '', 0),
('123', 'asd', '$2y$10$5HhxDNj2BJVKWjbHepEZju5X7f04iFP5NUu.Xs4XkTcFWNoZSMXfC', '', '0000-00-00', '', '', '', '', 0, '', 0),
('126813', 'yhaghjs', '$2y$10$ne3O/iHrzgVWDIaNp4fKceGFl.jdVUYA6QRJy1QcunFKyfZ74e/M6', '', '0000-00-00', '', '', '', '', 0, '', 0),
('1324', 'kdk', '$2y$10$yuj1tKpQAGjzqKg9KRSNGuSFjkPCJDtiY/TiCfR4KPBweBdzeXMiy', '', '0000-00-00', '', '', '', '', 0, '', 0),
('3123', 'sad', '$2y$10$suUaLoYlJxIXc1DU0MbQG.bQ1BcXUL13r9HSnmyBN1/RmCfLp1e7a', '', '0000-00-00', '', '', '', '', 0, '', 0),
('32453', 'namaaa', '$2y$10$FfWdL7ZxBIVc4iOvy5mUaetXStmj8sE77ddKs5y6MsbtQNNwkLW/2', '', '0000-00-00', '', '', '', '', 0, '', 0),
('82398', 'djagdjka', '$2y$10$o5Kkqi8Fn2kcJOTYoEpIb.9RTrDlgmZEckWLCD8/1O7wz6DDNIc0C', '', '0000-00-00', '', '', '', '', 0, '', 0),
('917983123', 'aas', '$2y$10$1.cM1WTLiJaudNNUlRYF6eEHz87FMUjMZdPQ9UO/sOr0siRuDkEfG', '', '0000-00-00', '', '', '', '', 0, '', 0),
('9999', 'sembilan', '$2y$10$ZV8dbhbwiKYdsPIp.QpaxON.4beI/1b0F9HlbrYo6MvLa1YUygCem', 'Mataram', '2021-01-03', 'Karang Taruna', 'Mataram', 'L', 'Islam', 1233333, '', 999);

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `tgl` date NOT NULL,
  `gambar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `foto` varchar(20) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`foto`, `judul`, `isi`, `id`) VALUES
('6031c22218e88.png', '7k', 'seven knight 2\r\n\r\nhliahldlsaa\r\nsadjaukd\r\nabdjasjdbjasbjd\r\nsdabsdabdkjabskjd\r\nsbdjkbajsdbjkabdjkbaskjd\r\nsdabsjdbjasbdjkabskdba\r\nadbakbdhwehkawdl\r\nasdgadbjasbdasjkdbjasbdkjasd\r\nsbdkabjdbaskjdbjasbdjkasdsdbasilaldas\r\nsduowyoijdbakh', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
