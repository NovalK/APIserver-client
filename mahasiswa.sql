-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2020 at 01:56 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Jenis_Kelamin` varchar(11) NOT NULL,
  `Umur` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `Nama`, `Jenis_Kelamin`, `Umur`) VALUES
(1, 'Baco', 'Laki-laki', 19),
(2, 'Agung', 'Laki-laki', 19),
(3, 'Becce', 'Perempuan', 18),
(0, '', '', 0),
(0, '', '', 0),
(0, '', '', 0),
(0, '', '', 0),
(0, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mahasiswa`
--

CREATE TABLE `tbl_mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(25) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `umur` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_mahasiswa`
--

INSERT INTO `tbl_mahasiswa` (`id`, `nama`, `jenis_kelamin`, `alamat`, `umur`) VALUES
(1, ' Noval Kadriawan', 'Laki-Laki', 'jl.Urip Sumoharjo', 21),
(2, 'Andi Muhammad Akbar R', 'Laki-Laki', 'Btp Blok G', 20),
(3, 'Becce', 'Perempuan', 'jl.Cenderawasih', 19),
(4, 'Amar Zoni', 'Laki-Laki', 'jl.Pochinki 2, Pangkajene Kepulauan', 20),
(5, 'Siti Nurbaya', 'Perempuan', 'jl.jendral sudirman 5', 21),
(6, 'Megawati', 'Perempuan', 'jl.ir soekarno', 19);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
