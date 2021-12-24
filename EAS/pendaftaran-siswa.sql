-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2021 at 11:36 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran-siswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `calon_siswa`
--

CREATE TABLE `calon_siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(16) NOT NULL,
  `agama` varchar(16) NOT NULL,
  `sekolah_asal` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `calon_siswa`
--

INSERT INTO `calon_siswa` (`id`, `nama`, `foto`, `alamat`, `jenis_kelamin`, `agama`, `sekolah_asal`) VALUES
(4, 'test', '', 'test', 'laki-laki', 'Kristen', 'test'),
(5, 'asdfa', 'asdf', 'asdfa', 'perempuan', 'Atheis', 'asdfadfa'),
(6, 'sdfs', '', 'sdfsdf', 'laki-laki', 'Islam', 'sdfsd');

-- --------------------------------------------------------

--
-- Table structure for table `list_payments`
--

CREATE TABLE `list_payments` (
  `id` int(11) NOT NULL,
  `ptitle` varchar(20) NOT NULL,
  `pdate` date NOT NULL,
  `pdesc` varchar(30) NOT NULL,
  `student` varchar(20) NOT NULL,
  `amount` varchar(10) NOT NULL,
  `pbukti` varchar(200) DEFAULT NULL,
  `pstatus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `list_payments`
--

INSERT INTO `list_payments` (`id`, `ptitle`, `pdate`, `pdesc`, `student`, `amount`, `pbukti`, `pstatus`) VALUES
(3, 'test', '2021-12-04', 'Dibayar kontan', 'Zidan', '12', '24122021094153e6298d497271ed815d1ffc93bc9d0902.jpg', 'LUNAS'),
(6, 'semester 1', '2021-12-01', 'asdfa', 'adfa', '2462353452', '241220210948116350f8b3dc88747b6f3e5f4a30aea3c9.jpg', 'LUNAS'),
(8, 'test', '2021-12-14', 'test', 'test', '1500909987', '24122021105026o-LOKI-AVENGERS-2-facebook.jpg', 'test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calon_siswa`
--
ALTER TABLE `calon_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_payments`
--
ALTER TABLE `list_payments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama` (`student`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calon_siswa`
--
ALTER TABLE `calon_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `list_payments`
--
ALTER TABLE `list_payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
