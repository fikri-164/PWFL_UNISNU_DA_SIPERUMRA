-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09 Des 2019 pada 19.49
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siperumra`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama_umkm` varchar(50) NOT NULL,
  `jenis_umkm` varchar(50) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `harga_produk` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `nama_umkm`, `jenis_umkm`, `nama_produk`, `deskripsi_produk`, `harga_produk`, `foto`) VALUES
(1, 'bajuku', 'Fashion', 'Kerudung', 'banget', '50', ''),
(4, 'suka', 'Kerajinan', 'Miniatur', 'rrrr', '55666', ''),
(5, 'suka', 'Kerajinan', 'frame', 'tytyt', '4366', ''),
(7, 'suka', 'Kerajinan', 'asd', 'fhfthh', '245456', ''),
(8, 'bajuku', 'Fashion', 'Baju Kece', 'fdgfh', '5555', ''),
(9, 'bajuku', 'Fashion', 'gg', 'dd', '5666', '13.png'),
(10, 'bajuku', 'Fashion', 'dgd', 'tgtr', '56457', 'Screenshot_(2).png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `umkm`
--

CREATE TABLE `umkm` (
  `id` int(11) NOT NULL,
  `nama_umkm` varchar(50) NOT NULL,
  `jenis_umkm` varchar(50) NOT NULL,
  `profil` text NOT NULL,
  `cp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `umkm`
--

INSERT INTO `umkm` (`id`, `nama_umkm`, `jenis_umkm`, `profil`, `cp`) VALUES
(2, 'bajuku', 'Fashion', '<p>bajuku adalah</p>\r\n', '0000456'),
(3, 'suka', 'Kerajinan', '<p>llll</p>\r\n', '0982782'),
(4, 'mebelku', 'Mebel', 'shdhdd', '098436346');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nama_umkm` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(11) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `nama_umkm`, `password`, `level`, `ket`) VALUES
(1, 'fikri', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 'admin'),
(2, 'shihab', 'bajuku', 'ee11cbb19052e40b07aac0ca060c23ee', 2, 'Fashion'),
(3, 'dicky', 'suka', 'ee11cbb19052e40b07aac0ca060c23ee', 2, 'Kerajinan'),
(6, 'cemong', 'mebelku', 'ee11cbb19052e40b07aac0ca060c23ee', 2, 'Mebel');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `umkm`
--
ALTER TABLE `umkm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `umkm`
--
ALTER TABLE `umkm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
