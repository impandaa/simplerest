-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2017 at 02:13 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuliah`
--

-- --------------------------------------------------------

--
-- Table structure for table `hobby`
--

CREATE TABLE `hobby` (
  `id` int(255) NOT NULL,
  `hobi` text NOT NULL,
  `userid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hobby`
--

INSERT INTO `hobby` (`id`, `hobi`, `userid`) VALUES
(7, 'Sepeda', 8),
(8, 'Lari ', 8),
(11, 'Lari ', 9),
(12, 'Hiking', 9),
(23, 'Berenang', 10),
(24, 'Berenang', 11),
(25, 'Lari', 11),
(40, 'Sepeda', 12),
(41, 'Berenang', 12),
(42, 'Lari', 12),
(43, 'Hiking', 12),
(52, 'Sepeda', 13),
(53, 'Berenang', 13),
(54, 'Lari', 13);

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(255) NOT NULL,
  `imagepath` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `imagepath`) VALUES
(1, 'uploads/IMG_20170103_170958.jpg'),
(2, 'uploads/Donnar.jpg'),
(3, 'uploads/_DSC0989.JPG'),
(4, 'uploads/_DSC0989.JPG'),
(5, 'uploads/_DSC0871.JPG'),
(6, 'uploads/_DSC1045.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `idmahasiswa` int(255) NOT NULL,
  `nama` text NOT NULL,
  `nim` text NOT NULL,
  `programstudi` text NOT NULL,
  `ipk` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`idmahasiswa`, `nama`, `nim`, `programstudi`, `ipk`, `foto`) VALUES
(18, 'Mahasiswa 1', '1234567890', 'Manajemen Informatik', '3,87', 'uploads/Surface.png'),
(19, 'Mahasiswa 2', '98765431', 'Teknik Komputer', '3,49', 'uploads/_DSC2831.JPG'),
(42, 'Green Day', 'Audioslave', 'Nirvana', 'Metalicca', ''),
(70, 'vdgrg', 'vdvdv', ' dvdg', 'xvdv', ''),
(71, 'vdgrg', 'vdvdv', ' dvdg', 'xvdv', ''),
(72, 'Green Day', 'Audioslave', 'Nirvana', 'Metalicca', ''),
(73, 'Green Day', 'Audioslave', 'Nirvana', 'Metalicca', ''),
(74, 'ufyfyf', 'hf du', 'ufyfy', 'hchcy', ''),
(75, 'hhhg', 'hhhh', 'hhh', 'bhhh', ''),
(76, 'gbuj', 'hhbh', 'bjbh', 'huh', ''),
(77, '', 'dbfhr', '', '', ''),
(78, '', 'dbfhr', '', '', ''),
(79, 'fbfh', 'bf dB f', 'vdgr', 'dgdgr', ''),
(80, 'satu', 'dua', 'empat', 'tiga', '');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` int(255) NOT NULL,
  `buku` text NOT NULL,
  `tanggalkembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `buku`, `tanggalkembali`) VALUES
(1, 'Lord of the ring', '2017-10-25');

-- --------------------------------------------------------

--
-- Table structure for table `praktikum`
--

CREATE TABLE `praktikum` (
  `userid` int(255) NOT NULL,
  `nama` text NOT NULL,
  `nim` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `praktikum`
--

INSERT INTO `praktikum` (`userid`, `nama`, `nim`, `gambar`) VALUES
(2, 'Patrick', '15890013', 'gambar/_DSC0899.JPG'),
(3, 'Patrick', '15890013', 'gambar/_DSC0899.JPG'),
(4, 'Patrickadolf', '15890013', 'gambar/_DSC1029.JPG'),
(5, 'dasdas', 'dasdasd', 'gambar/_DSC1083.JPG'),
(6, 'satu', '1234', 'gambar/20150102_202624_LLS.jpg'),
(7, 'satu', '1234', 'gambar/20150102_202624_LLS.jpg'),
(8, 'satu', '1234', 'gambar/20150102_202624_LLS.jpg'),
(9, 'pti', '3189021', 'gambar/tapir-conservation-project.jpg'),
(10, 'sampurasun', '89418', 'gambar/Donnar.jpg'),
(11, 'Doseeennnn panic mode', '21830198', 'gambar/Pep.jpg'),
(12, 'Doseeennnn panic mode', '21830198', 'gambar/Pep.jpg'),
(13, 'PTI', '31801776ewqeqwe', 'gambar/IMG_20170103_181822.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `webdasar`
--

CREATE TABLE `webdasar` (
  `id` int(255) NOT NULL,
  `nama` text NOT NULL,
  `nim` text NOT NULL,
  `umur` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webdasar`
--

INSERT INTO `webdasar` (`id`, `nama`, `nim`, `umur`, `gambar`) VALUES
(5, 'dua', '98765432', '804442', ''),
(14, 'Editted', 'Editted', 'Editted', ''),
(19, 'When ', 'Baby', 'Gone then', ''),
(20, 'Bryan ', 'Adams ', 'Duet', ''),
(21, 'Bryan ', 'Adams', 'Singer', ''),
(34, 'Patrick Telnoni', 'eqwe', 'eqweq', 'uploads/tapir-conservation-project.jpg'),
(41, 'Lannister', 'Stark', 'Targeryan', ''),
(42, 'PTI', '15890013', '3,51', ''),
(43, 'PTI', '15890013', '3,51', ''),
(44, 'PTI', '15890013', '3,51', ''),
(45, 'PTI', '15890013', 'Manajemen Informatik', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hobby`
--
ALTER TABLE `hobby`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`idmahasiswa`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `praktikum`
--
ALTER TABLE `praktikum`
  ADD PRIMARY KEY (`userid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `webdasar`
--
ALTER TABLE `webdasar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hobby`
--
ALTER TABLE `hobby`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `idmahasiswa` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `praktikum`
--
ALTER TABLE `praktikum`
  MODIFY `userid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `webdasar`
--
ALTER TABLE `webdasar`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
