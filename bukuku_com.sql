-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2018 at 01:01 PM
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
-- Database: `bukuku.com`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `ID_BUKU` varchar(10) NOT NULL,
  `JUDUL` varchar(25) NOT NULL,
  `HARGA` varchar(15) NOT NULL,
  `USERNAME` varchar(20) NOT NULL,
  `JUMLAH` int(11) NOT NULL,
  `GAMBAR` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `ID_HISTORY` varchar(10) NOT NULL,
  `ID_BUKU` varchar(10) NOT NULL,
  `UNAME_PENJUAL` varchar(20) NOT NULL,
  `UNAME_PEMBELI` varchar(20) NOT NULL,
  `TANGGAL` date NOT NULL,
  `JUMLAH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `ID_RATING` varchar(10) NOT NULL,
  `ID_BUKU` varchar(10) NOT NULL,
  `USERNAME` varchar(20) NOT NULL,
  `RATING` varchar(15) NOT NULL,
  `KOMENTAR` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `USERNAME` varchar(15) NOT NULL,
  `PASSWORD` varchar(15) NOT NULL,
  `NAMA` varchar(20) NOT NULL,
  `EMAIL` varchar(25) NOT NULL,
  `ALAMAT` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`ID_HISTORY`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`ID_RATING`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`USERNAME`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
