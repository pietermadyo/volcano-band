-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09 Des 2015 pada 09.57
-- Versi Server: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `volcano`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id_contact` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `message` varchar(50) DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id_contact`, `name`, `email`, `message`, `date`) VALUES
(1, 'dfgd', 'dfg', 'dfgdfg', '2015-12-07 04:07:01'),
(2, 'fghgh', 'fghfgh', 'fghfgh', '2015-12-07 05:03:55'),
(3, 'fghgh', 'fghfgh', 'fghfgh', '2015-12-07 05:35:15'),
(4, '4456', 'tyutyu', 'tyutyu', '2015-12-07 05:35:57'),
(5, 'dfsdf', 'sdfsdf', 'sdfsdf', '2015-12-08 04:01:23'),
(6, 'dfsdf', 'sdfsdf', 'sdfsdf', '2008-12-15 04:05:24'),
(7, 'dfsdf', 'sdfsdf', 'sdfsdf', '2008-12-15 04:05:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL DEFAULT '0',
  `password` varchar(50) NOT NULL DEFAULT '0',
  `role` varchar(50) NOT NULL DEFAULT '0',
  `name` varchar(50) DEFAULT '0',
  `email` varchar(50) DEFAULT '0',
  `telepon` varchar(30) DEFAULT NULL,
  `kota` varchar(30) DEFAULT NULL,
  `joindate` varchar(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `role`, `name`, `email`, `telepon`, `kota`, `joindate`) VALUES
(1, 'tes', 'tes', 'user', 'asdadsf', 'dgdfg', '12312', 'bandung', '15-12-08 03:27:25'),
(3, '123', '123', 'user', '123', '123', '123', '123', '15-12-08 03:27:25'),
(4, 'admin', 'admin123', 'administrator', 'administrator', 'admin@gmail.com', '123456', 'Jogja', '15-12-08 03:27:25'),
(5, 'asd', 'asd', 'user', 'asd', 'asd', 'asd', 'asd', '15-12-08 03:27:25'),
(6, 'pieter', '123', 'user', 'pietermadyo', 'pietermadyo@gmail.com', '1234567', 'mataram', '09-12-15 09:15:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
