-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2018 at 07:11 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peminjamanruangan`
--

-- --------------------------------------------------------

--
-- Table structure for table `formpeminjaman`
--

CREATE TABLE `formpeminjaman` (
  `idformulir` int(11) NOT NULL,
  `noRuangan` varchar(10) NOT NULL,
  `idUser` varchar(10) NOT NULL,
  `nmAcara` text NOT NULL,
  `waktu` datetime NOT NULL,
  `prodi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formpeminjaman`
--

INSERT INTO `formpeminjaman` (`idformulir`, `noRuangan`, `idUser`, `nmAcara`, `waktu`, `prodi`) VALUES
(1, '123', '123', '12312', '2018-05-23 02:09:09', '12312'),
(2, '12321', '12312', '12312', '0000-00-00 00:00:00', '12312');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `idUser` varchar(10) NOT NULL,
  `idFormulir` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `persetujuan` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `noruangan` varchar(10) NOT NULL,
  `statusruangan` varchar(10) NOT NULL,
  `kursi` int(11) NOT NULL,
  `meja` int(11) NOT NULL,
  `proyektor` int(11) NOT NULL,
  `ac` int(11) NOT NULL,
  `komputer` int(11) NOT NULL,
  `papantulis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` varchar(10) NOT NULL,
  `jabatan` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `jabatan`, `nama`, `password`) VALUES
('20121212', 'admin', 'raka', '1234'),
('2016081022', 'mahasiswa', 'yoga', '1234'),
('admin', 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `formpeminjaman`
--
ALTER TABLE `formpeminjaman`
  ADD PRIMARY KEY (`idformulir`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`noruangan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `formpeminjaman`
--
ALTER TABLE `formpeminjaman`
  MODIFY `idformulir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
