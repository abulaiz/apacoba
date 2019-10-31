-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2019 at 04:31 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel`
--

CREATE TABLE `tabel` (
  `id_tabel` int(11) NOT NULL,
  `order` varchar(128) NOT NULL,
  `nama_pesanan` varchar(200) NOT NULL,
  `pelaksana` varchar(128) NOT NULL,
  `finish` date NOT NULL,
  `detail` varchar(255) NOT NULL,
  `jenis_order` int(1) NOT NULL COMMENT '1:CO, 2:EO, 3:PO, 4:TO'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel`
--

INSERT INTO `tabel` (`id_tabel`, `order`, `nama_pesanan`, `pelaksana`, `finish`, `detail`, `jenis_order`) VALUES
(1, 'Raisha Ghaniyyah D', 'Aplikasi Robotik', 'Dadang Hidayat', '2019-08-24', '3x berkunjung ke polman', 3),
(2, 'Yuli Fitrianie', 'Aplikasi IoT', 'Anisa Dewi', '2019-08-31', '6x berkunjung ke polman', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `level` int(1) NOT NULL COMMENT '1:admin, 2:kasir'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `name`, `address`, `level`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Raqillia Fauziyyah D', 'Bandung', 1),
(2, 'user', '12dea96fec20593566ab75692c9949596833adc9', 'Muhammad Adam', 'Ciamis', 2),
(6, 'obeth', '19b58543c85b97c5498edfd89c11c3aa8cb5fe51', 'Ranggie Arieftya D', 'Bandung', 2),
(7, 'aweee', 'c4bfeb721012d1b5338b2aa107c52277a7af45c6', 'Raenaldy Muhammad Daniansyah', 'Bandung', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel`
--
ALTER TABLE `tabel`
  ADD PRIMARY KEY (`id_tabel`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel`
--
ALTER TABLE `tabel`
  MODIFY `id_tabel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
