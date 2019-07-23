-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01 Jun 2017 pada 16.14
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `managemen_siswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_siswa`
--

CREATE TABLE `data_siswa` (
  `induk_siswa` varchar(50) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `tempat_tinggal` varchar(200) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_siswa`
--

INSERT INTO `data_siswa` (`induk_siswa`, `nama_siswa`, `tempat_tinggal`, `telp`, `agama`, `gender`, `tempat_lahir`, `tanggal_lahir`, `username`, `password`) VALUES
('1', 'umar', 'malang', '0821', 'Islam', 'L', 'kediri', '2000-12-12', 'umar', '123'),
('12', 'zendy', 'kediri', '00000000000000', 'Hindu', 'P', 'kedirim', '0000-00-00', 'zendy', '123'),
('1212', 'ahmeds', 'malang', '00909009090909', '', 'L', 'malang', '0000-00-00', 'ahmed', '123'),
('15', 'anu', 'kediri', '02102102012010', 'Islam', 'P', 'malang', '0000-00-00', 'fahru', '1232'),
('213', 'oooo', 'oooo', '00000', 'konghucu', 'L', 'opopopo', '0000-00-00', 'opo', '123'),
('ada', 'adad', 'adaad', '1313', 'hindu', 'L', 'adada', '0000-00-00', 'cindy', '123'),
('qeqeqe', 'eqeqeq', 'eqeqeq', '1313', 'cina', 'L', 'malan', '0000-00-00', 'qqqq', 'qqqq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`induk_siswa`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
