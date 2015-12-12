-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2015 at 01:49 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `uts`
--

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaan`
--

CREATE TABLE IF NOT EXISTS `pekerjaan` (
`pekid` int(4) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `nama_perusahaan` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pekerjaan`
--

INSERT INTO `pekerjaan` (`pekid`, `pekerjaan`, `nama_perusahaan`) VALUES
(1, 'Mahasiswa', '-'),
(2, 'a', 'a'),
(3, 'Internship', 'Intelsoy'),
(4, 'Mahasiswa', '-');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE IF NOT EXISTS `pendidikan` (
`penid` int(4) NOT NULL,
  `sd` varchar(35) NOT NULL,
  `smp` varchar(35) NOT NULL,
  `sma` varchar(35) NOT NULL,
  `pt` varchar(35) NOT NULL,
  `jurusan` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`penid`, `sd`, `smp`, `sma`, `pt`, `jurusan`) VALUES
(1, 'SDN Sukarela 4', 'SMPN 49 Bandung', 'SMK MedikaCom', 'Piksi Ganesha', 'M. Informatika'),
(2, 'a', 'a', 'a', 'a', 'a'),
(3, 'SD Sukarela 3', 'SMPN 50', 'SMK MedikaCom', 'Bahria', 'Com sience'),
(4, 'SD', 'SMPN 50', 'SMA pasundan', 'Piksi Ganesha', 'M. Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`user_id` int(4) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `alamat` varchar(35) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `no_hp` bigint(14) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `nama`, `alamat`, `jenis_kelamin`, `agama`, `no_hp`) VALUES
(1, 'Wina Lupi Siti Lutpiah', 'Jl. Sindang Sari no. 29', 'Perempuan', 'Islam', 85794785401),
(3, 'Jawwad', 'Jl. RS uber', '', 'Islam', 8),
(4, 'Dyana', 'Cibaduyut', 'Perempuan', 'Islam', 83222777111);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
 ADD PRIMARY KEY (`pekid`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
 ADD PRIMARY KEY (`penid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
MODIFY `pekid` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
MODIFY `penid` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `user_id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
