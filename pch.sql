-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2020 at 01:18 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pch`
--

-- --------------------------------------------------------

--
-- Table structure for table `cashin`
--

CREATE TABLE IF NOT EXISTS `cashin` (
  `cashin_id` varchar(20) NOT NULL,
  `member_id` varchar(20) NOT NULL,
  `description` varchar(225) NOT NULL,
  `jumlah_ci` int(100) NOT NULL,
  `tanggal_ci` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cashin`
--

INSERT INTO `cashin` (`cashin_id`, `member_id`, `description`, `jumlah_ci`, `tanggal_ci`) VALUES
('5e5fb8ade2510', '5e60aa67ded9b', 'kas', 30000, '2020-03-04'),
('5e66376f8bb78', '5e5fabe5079be', 'tes kas', 100000, '2020-03-03');

-- --------------------------------------------------------

--
-- Table structure for table `cashout`
--

CREATE TABLE IF NOT EXISTS `cashout` (
  `cashout_id` varchar(20) NOT NULL,
  `category_id` varchar(20) NOT NULL,
  `description` varchar(225) NOT NULL,
  `jumlah_co` int(100) NOT NULL,
  `tanggal_co` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cashout`
--

INSERT INTO `cashout` (`cashout_id`, `category_id`, `description`, `jumlah_co`, `tanggal_co`) VALUES
('1', '5e57d6e434ed8', 'kondangan', 200000, '2020-03-08'),
('5e6479102c940', '5e57d233e6950', 'sukarela', 100000, '2020-03-09');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` varchar(20) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category`) VALUES
('5e57d233e6950', 'Suka Cita'),
('5e57d6e434ed8', 'Duka Cita');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
`iduser` int(2) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(225) NOT NULL,
  `level` varchar(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`iduser`, `username`, `password`, `level`) VALUES
(1, 'nabhila', '21232f297a57a5a743894a0e4a801fc3', '1');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `member_id` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `golongan` varchar(5) NOT NULL,
  `jumlah` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `nama`, `jabatan`, `golongan`, `jumlah`) VALUES
('5e5bd3011575e', 'Desi Lusinda', 'Staff', '2', 50000),
('5e5fabe5079be', 'Agus Solihin', 'Bos', '9', 100000),
('5e60aa67ded9b', 'Nabhila Rufaidah Syahnaz', 'Staff', '3', 30000);

-- --------------------------------------------------------

--
-- Table structure for table `recap`
--

CREATE TABLE IF NOT EXISTS `recap` (
  `tanggal` date NOT NULL,
  `description` varchar(225) NOT NULL,
  `in` int(10) NOT NULL,
  `out` int(10) NOT NULL,
  `saldo` int(10) NOT NULL,
  `id_recap` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cashin`
--
ALTER TABLE `cashin`
 ADD PRIMARY KEY (`cashin_id`), ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `cashout`
--
ALTER TABLE `cashout`
 ADD PRIMARY KEY (`cashout_id`), ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`iduser`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
 ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `recap`
--
ALTER TABLE `recap`
 ADD PRIMARY KEY (`id_recap`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
MODIFY `iduser` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cashin`
--
ALTER TABLE `cashin`
ADD CONSTRAINT `cashin_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `member` (`member_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cashout`
--
ALTER TABLE `cashout`
ADD CONSTRAINT `cashout_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
