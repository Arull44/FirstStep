-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2021 at 06:45 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemroweb_uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(5) NOT NULL,
  `nama_admin` varchar(70) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `alamat` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`, `telepon`, `alamat`) VALUES
(1, 'Aula Fajrun Khalilurahman', 'arul', '12345', '0895705502360', 'Situbondo'),
(2, 'Anne Raihan', 'anne', 'anne11', '087546738475', 'Jember');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(5) NOT NULL,
  `nama_customer` varchar(70) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telepon` varchar(14) NOT NULL,
  `alamat` varchar(120) NOT NULL,
  `cerita` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama_customer`, `email`, `telepon`, `alamat`, `cerita`) VALUES
(1, 'david simon', 'david@gmail.com', '085678466532', 'Jember', 'mengalami beberapa masalah mental'),
(2, 'atus kura', 'atus@gmail.com', '085231435789', 'situbondo', 'sering mendengarkan keluh kesah teman, padahal saya juga memiliki masalah sendiri'),
(5, 'anne', 'anne@gmail.com', '087539248392', 'jl. jember', 'masih teringat kenangan mantan');

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id_layanan` int(5) NOT NULL,
  `nama_layanan` varchar(50) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id_layanan`, `nama_layanan`, `deskripsi`, `harga`) VALUES
(1, 'Webinar ', 'Kegiatan pembelajaran secara langsung melalui platform zoom bersama mentor dan psikolog handal', 50000),
(2, 'Kelas Online', 'Kegiatan pembelajaran online bersama mentor dan psikolog handal kami secara praktis dan fleksibel', 100000),
(3, 'Mentoring', 'Layanan konsultasi 1-on-1 bersama mentor terpercaya', 100000),
(4, 'Konseling', 'Layanan konsultasi 1-on-1 dengan psikolog kami', 200000),
(5, 'webinar kemanusiaan', 'kemanusiaan', 40000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id_layanan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
