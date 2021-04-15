-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Apr 2021 pada 17.39
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040134`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `walkrunstore`
--

CREATE TABLE `walkrunstore` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `size` varchar(50) NOT NULL,
  `price` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `picture` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `walkrunstore`
--

INSERT INTO `walkrunstore` (`id`, `name`, `description`, `size`, `price`, `category`, `picture`) VALUES
(2, 'sepatu yonex aerus 3', 'color blue original', '39-43', '1000000', 'sepatu sport', 'spt2.png'),
(3, 'sepatu yonex XHB ex stabilo', 'color yellow original', '38-43', '2000000', 'sepatu sport', 'spt03.png'),
(4, 'sepatu adidas adizero ueberschall', 'color blue stabilo original', '37-40', '450000', 'sepatu sport', 'spt4.png'),
(5, 'sepatu yonex shb comfort black', 'color black original', '39-44', '250000', 'sepatu sport', 'spt5.png'),
(6, 'sepatu asics gel rocket', 'color blue original', '37-43', '650000', 'sepatu sport', 'spt6.png'),
(7, 'sepatu li ning sonic boom', 'color black original', '40-44', '750000', 'sepatu sport', 'spt7.png'),
(8, 'sepatu li ning smash', 'color orange original', '38-43', ' 600000', 'sepatu sport', 'spt8.png'),
(9, 'sepatu li ning cloud', 'color orange original', '39-42', '599000', 'sepatu sport', 'spt9.png'),
(10, 'sepatu mizuno wave fang', 'color white original', '40-43', '250000', 'sepatu sport', 'spt010.png'),
(13, 'sepatu yonex power sushion 65', 'color blue stabilo original', '40-42', '550000', 'sepatu sport', 'spt1.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `walkrunstore`
--
ALTER TABLE `walkrunstore`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `walkrunstore`
--
ALTER TABLE `walkrunstore`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;