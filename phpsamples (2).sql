-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jun 2023 pada 10.29
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpsamples`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `level` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Administrator', 'admin', 'admin', 'superadmin'),
(2, 'Dewangga', 'Dewangga', '123', 'operator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `items`
--

CREATE TABLE `items` (
  `id_item` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `items`
--

INSERT INTO `items` (`id_item`, `name`, `image`, `deskripsi`, `price`) VALUES
('I001', 'Ayam Goreng', 'product-1.jpeg', '', 20000),
('I002', 'Nasgor Telur Orak-Arik', 'product-2.jpeg', '', 15000),
('I003', 'Ayam Bakar', 'product-3.jpeg', '', 22000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `id_member` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `level` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id_member`, `username`, `password`, `email`, `level`) VALUES
('C000', 'admin', '$2y$10$xZB/xIoNQveepA1SmiHaJ.QHBlCJv3dtyRt/PeOxowlNxgBCFA5Fe', 'admin@admin.com', 'admin'),
('C001', 'Dewangga', '$2y$10$5Qh6CyG04Vt5kBQh9LFw.ePpJLge/HthuvuVYNJ..hKkJFnKl8zb6', '21082010201@student.upnjatim.ac.id', ''),
('C002', 'Mirza', '$2y$10$ANhl3f1qfjwQqru5ix.IcO1YSfR1bZ2XTJhX/Hz43Dl6qOYszkiWe', '21082010181@student.upnjatim.ac.id', ''),
('C003', 'Andhika', '$2y$10$32wUwcYAdUGad3Hr1AIK/OQOmbX8M7aS7uGhHqzPmaC5posXqORHK', '21082010171@student.upnjatim.ac.id', ''),
('C004', 'Bagus', '$2y$10$J6/H42e6Rpn45r2C1CZqM.hbAzASXtTnyoNhva3HLvl1V80qD4YD6', 'Bagus@gmail.com', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id_order` int(11) NOT NULL,
  `invoice` varchar(255) NOT NULL,
  `id_member` varchar(255) NOT NULL,
  `id_item` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`id_order`, `invoice`, `id_member`, `id_item`, `qty`, `price`, `date`) VALUES
(1, 'O002', 'C002', 'I002', 2, 15000, '2023-06-15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders_history`
--

CREATE TABLE `orders_history` (
  `id_order` int(11) NOT NULL,
  `invoice` varchar(255) NOT NULL,
  `id_member` varchar(255) NOT NULL,
  `id_item` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `orders_history`
--

INSERT INTO `orders_history` (`id_order`, `invoice`, `id_member`, `id_item`, `qty`, `price`, `date`) VALUES
(1, 'O001', 'C001', 'I001', 1, 20000, '2023-06-16'),
(2, 'O001', 'C001', 'I003', 1, 22000, '2023-06-16'),
(3, 'O002', 'C002', 'I001', 2, 40000, '2023-06-17'),
(4, 'O001', 'C001', 'I002', 5, 75000, '2023-06-17'),
(5, 'O001', 'C001', 'I001', 1, 20000, '2023-06-17');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id_item`);

--
-- Indeks untuk tabel `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`);

--
-- Indeks untuk tabel `orders_history`
--
ALTER TABLE `orders_history`
  ADD PRIMARY KEY (`id_order`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `orders_history`
--
ALTER TABLE `orders_history`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
