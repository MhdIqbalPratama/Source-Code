-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2022 at 03:07 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `praktikum_11`
--

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `addres` varchar(225) NOT NULL,
  `gender` varchar(225) NOT NULL,
  `position` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `name`, `email`, `addres`, `gender`, `position`, `status`) VALUES
(0, 'Mamat Alkatiri', 'apasi@gmail.com', 'Jl.lorem Ipsum Dolan', 'Male', 'Data Engineer', 'Fulltime '),
(1, 'Adam Jck', 'adam@sample.com', 'Jl.Lorep ipsum', 'Male', 'Web Dev', 'Fulltime'),
(2, 'Eve', 'eve@sample.com', 'Jl.lorem Ipsum', 'Female', 'Fullstack Dev', 'Partime'),
(3, 'Kepin', 'kepin@sample.com', 'Jl.lorep ipsum', 'Male', 'Mobile Dev', 'Parttime');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
