-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2023 at 04:13 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absensiku`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `id` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nama_divisi` varchar(100) NOT NULL,
  `tglmasuk` date NOT NULL,
  `jammasuk` time NOT NULL,
  `tglkeluar` date DEFAULT NULL,
  `jamkeluar` time DEFAULT NULL,
  `keterangan` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`id`, `nama`, `nama_divisi`, `tglmasuk`, `jammasuk`, `tglkeluar`, `jamkeluar`, `keterangan`) VALUES
('1', 'WW', 'IT', '2023-12-01', '08:09:56', '2023-12-01', '08:10:06', 'Hadir'),
('2', 'kirana', 'IT', '2023-12-01', '09:24:22', '2023-12-01', '09:24:33', 'Hadir'),
('3', 'mnb', 'consultaan', '2023-12-01', '09:42:17', '2023-12-01', '09:42:31', 'Hadir'),
('4', 'WW', 'IT', '2023-12-01', '08:32:13', '2023-12-01', '08:32:23', 'Hadir'),
('6', 'Shani Indira', 'manager', '2023-12-01', '08:28:28', '2023-12-01', '08:28:40', 'Hadir');

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `id_divisi` int(11) NOT NULL,
  `nama_divisi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`id_divisi`, `nama_divisi`) VALUES
(1, 'pemadamm'),
(2, 'IT'),
(3, 'consultaan'),
(4, 'Bussines'),
(5, 'manager');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` bigint(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` varchar(50) NOT NULL,
  `notlp` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `divisi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `nama`, `jk`, `notlp`, `alamat`, `divisi`) VALUES
(1, 'WW', 'Laki-Laki', '0876543', 'citampi', '2'),
(2, 'kirana', 'Perempuan', '08764', 'cimahi', '2'),
(3, 'mnb', 'Laki-Laki', '987', 'nbf', '3'),
(4, 'WW', 'Laki-Laki', '0867', 'tyty', '2'),
(6, 'Shani Indira', 'Perempuan', '08475757', 'Bojong soang', '5'),
(8, 'imas', 'Perempuan', '08765433', 'kebon kopi', '2'),
(9, 'lakaka', 'Laki-Laki', '08765', 'sedrftgyhu', '4'),
(19, 'trian', 'Laki-Laki', '08765354', 'baros', '5'),
(20, 'rika', 'Perempuan', '08464667', 'kyoto', '4'),
(21, 'Arya', 'Laki-Laki', '0894567', 'cicendo', '5'),
(32, 'mikasa', 'Perempuan', '096767', 'dfgh', '5'),
(40, 'fadhil', 'Laki-Laki', '086754656', 'margaasih', '2'),
(65, 'tre', 'Laki-Laki', '09876', 'hfthrh', '1'),
(777, 'ronaldo', 'Laki-Laki', '084567', 'portugal', '2'),
(43355, 'rafael', 'Laki-Laki', '084664', 'cicaheum', '3'),
(43434, 'yudha', 'Laki-Laki', '08765435', 'bebas', '2'),
(232323, 'Kambuaya', 'Laki-Laki', '084543', 'bengkulu', '2'),
(345678, 'iki', 'Laki-Laki', '087654', 'fghj', '3'),
(433343, 'nopall', 'Laki-Laki', '0876543', 'erwew', '3'),
(50000000, 'keyla', 'Perempuan', '08765435', 'apa', '3'),
(4970129727514, 'Seiva', 'Perempuan', '0876543', 'dago atas', '2'),
(3277010406060004, 'dika', 'Laki-Laki', '08765', 'cfghbhj', '5');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` varchar(25) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `hak` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `hak`) VALUES
('p01', 'nopal@gmail.com', '123', 'admin'),
('p02', 'utahime@gmail.com', '12', 'petugas'),
('p03', 'Karyawan@gmail.com', '211', 'karyawan');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id` int(11) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `nama_petugas` varchar(50) NOT NULL,
  `jk` varchar(50) NOT NULL,
  `no_tlp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id`, `kode`, `nama_petugas`, `jk`, `no_tlp`) VALUES
(1, '', 'utahime', 'Laki-Laki', '08765'),
(2, '', 'karasu', 'Laki-Laki', '087654'),
(3, '', 'mei san', 'Perempuan', '0876543');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id`,`tglmasuk`);

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=992;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
