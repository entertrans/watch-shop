-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Mar 2020 pada 15.34
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proshop`
--
drop database if exists `proshop`;
create database `proshop`;
use `proshop`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_banner`
--

CREATE TABLE IF NOT EXISTS `tbl_banner` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `deskripsi` text NOT NULL,
  `status` int(11) DEFAULT NULL,
  `banner` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_cart`
--

CREATE TABLE IF NOT EXISTS `tbl_cart` (
  `id_cart` int(11) NOT NULL,
  `id_produk` int(5) NOT NULL,
  `id_session` varchar(100) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `stok_temp` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_config`
--

CREATE TABLE IF NOT EXISTS `tbl_config` (
  `email` varchar(50) NOT NULL,
  `nm_website` varchar(50) NOT NULL,
  `favicon` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `telp` varchar(50) NOT NULL,
  `bank` varchar(20) NOT NULL,
  `pemilik_rek` varchar(50) NOT NULL,
  `no_rekening` varchar(50) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_header`
--

CREATE TABLE IF NOT EXISTS `tbl_header` (
  `id_header` int(25) NOT NULL,
  `no_wa` varchar(50) NOT NULL,
  `nama_toko` varchar(50) NOT NULL,
  `slogan` varchar(50) NOT NULL,
  `logo_toko` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_header`
--

INSERT INTO `tbl_header` (`id_header`, `no_wa`, `nama_toko`, `slogan`, `logo_toko`) VALUES
(1, '0856 7400 617(Text Only)', 'Toko Imam', 'Ekonomis dan higienis', 'logo merah-01.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_info`
--

CREATE TABLE IF NOT EXISTS `tbl_info` (
  `id_info` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `konten` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE IF NOT EXISTS `tbl_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nm_kategori` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nm_kategori`, `slug`) VALUES
(1, 'Laki-Laki', ''),
(2, 'Perempuan', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_menu`
--

CREATE TABLE IF NOT EXISTS `tbl_menu` (
  `id_menu` int(11) NOT NULL,
  `nm_menu` varchar(100) NOT NULL,
  `induk` int(5) NOT NULL,
  `jenis_link` int(50) NOT NULL,
  `link` int(50) NOT NULL,
  `urutan` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pesan`
--

CREATE TABLE IF NOT EXISTS `tbl_pesan` (
  `id_pesan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subjek` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  `tanggal` date NOT NULL,
  `dibaca` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_produk`
--

CREATE TABLE IF NOT EXISTS `tbl_produk` (
  `id_product` int(100) NOT NULL,
  `nm_product` varchar(100) NOT NULL,
  `id_kategori` int(25) NOT NULL,
  `stock` int(11) NOT NULL,
  `dibeli` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `diskon` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `slider` tinyint(2) NOT NULL DEFAULT '0',
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_produk`
--

INSERT INTO `tbl_produk` (`id_product`, `nm_product`, `id_kategori`, `stock`, `dibeli`, `harga`, `diskon`, `img`, `status`, `slug`, `slider`, `deskripsi`) VALUES
(1, 'produk pria 1', 1, 10, 0, 100000, 20, 'produk-pria-1.png', 1, 'lorem ipsum', 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(2, 'produk pria 2', 1, 10, 0, 200000, 0, 'produk-pria-2.jpg', 1, 'lorem ipsum', 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(3, 'produk pria 3', 1, 10, 0, 300000, 0, 'produk-pria-3.jpg', 1, 'lorem ipsum', 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(4, 'produk wanita 1', 2, 10, 0, 1000000, 20, 'produk-wanita-1.jpg', 1, 'lorem ipsum', 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(5, 'produk wanita 2', 2, 10, 0, 2000000, 20, 'produk-wanita-2.jpg', 1, 'lorem ipsum', 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(6, 'produk wanita 3', 2, 10, 0, 3000000, 20, 'produk-wanita-3.jpg', 1, 'lorem ipsum', 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(7, 'produk pria 1', 1, 10, 0, 100000, 40, 'produk-pria-1.png', 1, 'lorem ipsum', 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(8, 'produk pria 2', 1, 10, 0, 200000, 20, 'produk-pria-2.jpg', 1, 'lorem ipsum', 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(9, 'produk pria 3', 1, 10, 0, 300000, 10, 'produk-pria-3.jpg', 1, 'lorem ipsum', 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_produk_detail`
--

CREATE TABLE IF NOT EXISTS `tbl_produk_detail` (
  `id_produk` int(11) NOT NULL,
  `detail_gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_produk_detail`
--

INSERT INTO `tbl_produk_detail` (`id_produk`, `detail_gambar`) VALUES
(1, 'a:3:{i:0;s:19:\"detail_produk_1.jpg\";i:1;s:19:\"detail_produk_2.jpg\";i:2;s:19:\"detail_produk_3.jpg\";}array(3) { [0]=> string(19) \"detail_produk_1.jpg\" [1]=> string(19) \"detail_produk_2.jpg\" [2]=> string(19) \"detail_produk_3.jpg\" } '),
(2, 'a:3:{i:0;s:19:\"detail_produk_1.jpg\";i:1;s:19:\"detail_produk_2.jpg\";i:2;s:19:\"detail_produk_3.jpg\";}array(3) { [0]=> string(19) \"detail_produk_1.jpg\" [1]=> string(19) \"detail_produk_2.jpg\" [2]=> string(19) \"detail_produk_3.jpg\" } ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_testimoni`
--

CREATE TABLE IF NOT EXISTS `tbl_testimoni` (
  `id_testimoni` int(255) NOT NULL,
  `img` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_testimoni`
--

INSERT INTO `tbl_testimoni` (`id_testimoni`, `img`, `deskripsi`) VALUES
(1, 'testimoni.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae debitis magnam, ipsam quod sint quis recusandae maiores asperiores, molestiae fugit, quo dolores sequi natus enim, perferendis sapiente facere tenetur non.'),
(2, 'testimoni.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'),
(3, 'testimoni.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae debitis magnam, ipsam quod sint quis recusandae maiores asperiores, molestiae fugit, quo dolores sequi natus enim, perferendis sapiente facere tenetur non.'),
(4, 'testimoni.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae debitis magnam, ipsam quod sint quis recusandae maiores asperiores, molestiae fugit, quo dolores sequi natus enim, perferendis sapiente facere tenetur non.'),
(5, 'testimoni.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae debitis magnam, ipsam quod sint quis recusandae maiores asperiores, molestiae fugit, quo dolores sequi natus enim, perferendis sapiente facere tenetur non.'),
(6, 'testimoni.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae debitis magnam, ipsam quod sint quis recusandae maiores asperiores, molestiae fugit, quo dolores sequi natus enim, perferendis sapiente facere tenetur non.'),
(7, 'testimoni.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae debitis magnam, ipsam quod sint quis recusandae maiores asperiores, molestiae fugit, quo dolores sequi natus enim, perferendis sapiente facere tenetur non.'),
(8, 'testimoni.jpg', 'Lorem ipsum dolor sit amet,');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_transaksi`
--

CREATE TABLE IF NOT EXISTS `tbl_transaksi` (
  `id_trans` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `nm_pemesan` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `telp` varchar(50) NOT NULL,
  `ongkir` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_transaksi_detail`
--

CREATE TABLE IF NOT EXISTS `tbl_transaksi_detail` (
  `id_detail` int(11) NOT NULL,
  `id_trans` int(5) NOT NULL,
  `id_produk` int(5) NOT NULL,
  `jumlah` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_banner`
--
ALTER TABLE `tbl_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indeks untuk tabel `tbl_config`
--
ALTER TABLE `tbl_config`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `tbl_header`
--
ALTER TABLE `tbl_header`
  ADD PRIMARY KEY (`id_header`);

--
-- Indeks untuk tabel `tbl_info`
--
ALTER TABLE `tbl_info`
  ADD PRIMARY KEY (`id_info`);

--
-- Indeks untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indeks untuk tabel `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indeks untuk tabel `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id_product`);

--
-- Indeks untuk tabel `tbl_testimoni`
--
ALTER TABLE `tbl_testimoni`
  ADD PRIMARY KEY (`id_testimoni`);

--
-- Indeks untuk tabel `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id_trans`);

--
-- Indeks untuk tabel `tbl_transaksi_detail`
--
ALTER TABLE `tbl_transaksi_detail`
  ADD PRIMARY KEY (`id_detail`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_banner`
--
ALTER TABLE `tbl_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_header`
--
ALTER TABLE `tbl_header`
  MODIFY `id_header` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_info`
--
ALTER TABLE `tbl_info`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `id_product` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_testimoni`
--
ALTER TABLE `tbl_testimoni`
  MODIFY `id_testimoni` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id_trans` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_transaksi_detail`
--
ALTER TABLE `tbl_transaksi_detail`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
