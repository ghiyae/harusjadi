-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 28 Feb 2020 pada 14.28
-- Versi Server: 5.6.21
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
-- Struktur dari tabel `cashin`
--

CREATE TABLE IF NOT EXISTS `cashin` (
  `cashin_id` varchar(20) NOT NULL,
  `member_id` varchar(20) NOT NULL,
  `description` varchar(225) NOT NULL,
  `jumlah_ci` int(100) NOT NULL,
  `tanggal_ci` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cashout`
--

CREATE TABLE IF NOT EXISTS `cashout` (
  `cashout_id` varchar(20) NOT NULL,
  `category_id` varchar(20) NOT NULL,
  `description` varchar(225) NOT NULL,
  `jumlah_co` int(100) NOT NULL,
  `tanggal_co` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` varchar(20) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `category`
--

INSERT INTO `category` (`category_id`, `category`) VALUES
('5e57d233e6950', 'Suka Cita'),
('5e57d6e434ed8', 'Duka Cita');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE IF NOT EXISTS `login` (
`iduser` int(2) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(225) NOT NULL,
  `level` varchar(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`iduser`, `username`, `password`, `level`) VALUES
(1, 'nabhila', '21232f297a57a5a743894a0e4a801fc3', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `member_id` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `golongan` varchar(5) NOT NULL,
  `jumlah` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`member_id`, `nama`, `jabatan`, `golongan`, `jumlah`) VALUES
('5e50de0b95772', 'Lusi', 'Manager', '1', 200000),
('5e5287250f1c7', 'Indra', 'Manager', '8', 150000),
('5e57ea6fe85f5', 'Gia Eka Freiawan', 'Staff', '2', 30000);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
MODIFY `iduser` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `cashin`
--
ALTER TABLE `cashin`
ADD CONSTRAINT `cashin_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `member` (`member_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `cashout`
--
ALTER TABLE `cashout`
ADD CONSTRAINT `cashout_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
