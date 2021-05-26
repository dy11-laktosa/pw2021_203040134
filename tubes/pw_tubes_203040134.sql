-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Bulan Mei 2021 pada 18.35
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;
/*!40101 SET NAMES utf8mb4 */
;
--
-- Database: `pw_tubes_203040134`
--
-- --------------------------------------------------------
--
-- Struktur dari tabel `user`
--
CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
--
-- Dumping data untuk tabel `user`
--
INSERT INTO `user` (`id`, `username`, `password`)
VALUES (
    3,
    'hady',
    '$2y$10$p1MUpfE0NTGkXE5BsWJq7uaBT6SQnBm9s5uuQrU.HgIUjMXDM2VRG'
  ),
  (
    4,
    'hery',
    '$2y$10$iUK6hwiz1WgYcj16sPL9DO6ULeBHmVXdDWvZ4nZy/Svj/IA7TrRMy'
  ),
  (
    5,
    'hendrik',
    '$2y$10$oQUWxYLLLAto4mjOHKD77.uhltMAuwwNFxUJvuGSENu2HrMlGHLom'
  );
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
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
--
-- Dumping data untuk tabel `walkrunstore`
--
INSERT INTO `walkrunstore` (
    `id`,
    `name`,
    `description`,
    `size`,
    `price`,
    `category`,
    `picture`
  )
VALUES (
    1,
    'sepatu yonex power sushion 65',
    'color blue stabilo original',
    '41',
    '590000',
    'sepatu sport',
    'spt1.png'
  ),
  (
    2,
    'sepatu yonex aerus 3',
    'color blue original',
    '40',
    '1000000',
    'sepatu sport',
    'spt2.png'
  ),
  (
    3,
    'sepatu yonex XHB ex stabilo',
    'color yellow original',
    '42',
    '2000000',
    'sepatu sport',
    'spt03.png'
  ),
  (
    4,
    'sepatu adidas adizero ueberschall',
    'color blue stabilo original',
    '39',
    '450000',
    'sepatu sport',
    'spt4.png'
  ),
  (
    5,
    'sepatu yonex shb comfort black',
    'color black original',
    '40',
    '250000',
    'sepatu sport',
    'spt5.png'
  ),
  (
    6,
    'sepatu asics gel rocket',
    'color blue original',
    '42',
    '650000',
    'sepatu sport',
    'spt6.png'
  ),
  (
    7,
    'sepatu li ning sonic boom',
    'color black original',
    '39',
    '750000',
    'sepatu sport',
    'spt7.png'
  ),
  (
    8,
    'sepatu li ning smash',
    'color orange original',
    '41',
    ' 600000',
    'sepatu sport',
    'spt8.png'
  ),
  (
    9,
    'sepatu li ning cloud',
    'color orange original',
    '39',
    '599000',
    'sepatu sport',
    'spt9.png'
  ),
  (
    10,
    'sepatu mizuno wave fang',
    'color white original',
    '42',
    '250000',
    'sepatu sport',
    'spt010.png'
  );
--
-- Indexes for dumped tables
--
--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
ADD PRIMARY KEY (`id`) USING BTREE;
--
-- Indeks untuk tabel `walkrunstore`
--
ALTER TABLE `walkrunstore`
ADD PRIMARY KEY (`id`);
--
-- AUTO_INCREMENT untuk tabel yang dibuang
--
--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 6;
--
-- AUTO_INCREMENT untuk tabel `walkrunstore`
--
ALTER TABLE `walkrunstore`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 14;
COMMIT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;