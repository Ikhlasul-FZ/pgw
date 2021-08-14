-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2021 at 08:27 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `10119254_kepegawaian`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_gaji`
--

CREATE TABLE `data_gaji` (
  `kd_gaji` varchar(3) NOT NULL,
  `nip` varchar(5) NOT NULL,
  `tglMasuk` date NOT NULL,
  `golongan` enum('I','II','III','IV') NOT NULL,
  `tunjangan` int(11) NOT NULL,
  `gajiPokok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_gaji`
--

INSERT INTO `data_gaji` (`kd_gaji`, `nip`, `tglMasuk`, `golongan`, `tunjangan`, `gajiPokok`) VALUES
('G01', '11111', '2021-08-09', 'III', 300000, 3300000),
('G02', '11112', '2021-08-16', 'II', 200000, 3200000),
('G03', '11113', '2021-08-24', 'III', 200000, 4200000),
('G04', '11114', '2021-08-10', 'III', 300000, 4300000),
('G05', '11115', '2021-08-03', 'II', 300000, 3300000),
('G06', '11116', '2021-08-01', 'II', 200000, 3200000);

-- --------------------------------------------------------

--
-- Table structure for table `data_pegawai`
--

CREATE TABLE `data_pegawai` (
  `nip` varchar(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenisKelamin` enum('Pria','Wanita') NOT NULL,
  `tglLahir` date NOT NULL,
  `alamat` text NOT NULL,
  `status` enum('Lajang','Menikah') NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_pegawai`
--

INSERT INTO `data_pegawai` (`nip`, `nama`, `jenisKelamin`, `tglLahir`, `alamat`, `status`, `email`) VALUES
('11111', 'Supriyadi', 'Pria', '1999-12-09', 'Bandung', 'Menikah', 'supri@email.com'),
('11112', 'Salsabila', 'Wanita', '2000-09-02', 'Jakarta', 'Lajang', 'sabila@gmial.com'),
('11113', 'Pradono', 'Pria', '1998-09-02', 'Surabaya', 'Lajang', 'donoo21@qmail.com'),
('11114', 'Junadi', 'Pria', '1998-10-02', 'Bandung', 'Menikah', 'jmd12@ymail.com'),
('11115', 'Ayu Lestari', 'Wanita', '1999-01-01', 'Bekasi', 'Menikah', 'ayuuu@email.com'),
('11116', 'Apriyani', 'Wanita', '1998-07-28', 'Jakarta', 'Menikah', 'aprii@ymail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `nama`, `email`, `password`) VALUES
(4, 'admin', 'Admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_gaji`
--
ALTER TABLE `data_gaji`
  ADD PRIMARY KEY (`kd_gaji`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_gaji`
--
ALTER TABLE `data_gaji`
  ADD CONSTRAINT `data_gaji_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `data_pegawai` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
