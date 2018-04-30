-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2018 at 11:04 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `ID_BUKU` int(11) NOT NULL,
  `JUDUL` varchar(25) NOT NULL,
  `HARGA` varchar(15) NOT NULL,
  `USERNAME` varchar(20) NOT NULL,
  `JUMLAH` int(11) NOT NULL,
  `GAMBAR` varchar(20) NOT NULL,
  `PENGARANG` varchar(15) NOT NULL,
  `DESKRIPSI` varchar(100) NOT NULL,
  `KATEGORI` varchar(15) NOT NULL,
  `RATING` int(11) NOT NULL,
  `BEKAS` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`ID_BUKU`, `JUDUL`, `HARGA`, `USERNAME`, `JUMLAH`, `GAMBAR`, `PENGARANG`, `DESKRIPSI`, `KATEGORI`, `RATING`, `BEKAS`) VALUES
(2, 'Kalkulus', '90000', 'suryamahadi', 20, 'kalkulus1.jpg', 'Purcell', 'Buku pelajaran yang bikin kepala puyeng', 'Matematika', 0, 0),
(3, 'Matematika Kelas VII', '120000', 'suryamahadi', 5, 'mtk.jpg', 'Pemerintah', 'Buku pelajaran kesayangan anda', 'Matematika', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`ID_BUKU`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `ID_BUKU` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
