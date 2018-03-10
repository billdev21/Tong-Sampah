-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 10, 2018 at 11:23 PM
-- Server version: 5.6.20-log
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tongsampah`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE IF NOT EXISTS `biodata` (
`id_bio` int(10) NOT NULL,
  `uniq` varchar(50) NOT NULL DEFAULT '0',
  `nama` varchar(50) DEFAULT NULL,
  `hp` varchar(50) DEFAULT NULL,
  `alamat` text,
  `kec` varchar(100) DEFAULT NULL,
  `kel` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `data_sampah`
--

CREATE TABLE IF NOT EXISTS `data_sampah` (
`id_sampah` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_kat` int(10) DEFAULT NULL,
  `ket` text,
  `etiket` text,
  `berat` int(11) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `data_sampah`
--

INSERT INTO `data_sampah` (`id_sampah`, `id_user`, `id_kat`, `ket`, `etiket`, `berat`, `status`) VALUES
(14, 2, 1, 'aasdasd', '03001', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
`id_kat` int(10) NOT NULL,
  `nama_kat` varchar(100) DEFAULT NULL,
  `harga_kat` int(20) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kat`, `nama_kat`, `harga_kat`) VALUES
(1, 'plastik', 5000),
(2, 'elektronik', 8000),
(3, 'kaleng', 6000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(10) NOT NULL,
  `uniq` varchar(50) NOT NULL DEFAULT '0',
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `uniq`, `username`, `password`, `level`) VALUES
(1, '0', 'admin', 'admin', 1),
(3, '0', 'driver', 'driver', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
 ADD PRIMARY KEY (`id_bio`);

--
-- Indexes for table `data_sampah`
--
ALTER TABLE `data_sampah`
 ADD PRIMARY KEY (`id_sampah`), ADD KEY `id_kat` (`id_kat`), ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
 ADD PRIMARY KEY (`id_kat`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
MODIFY `id_bio` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `data_sampah`
--
ALTER TABLE `data_sampah`
MODIFY `id_sampah` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
MODIFY `id_kat` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
