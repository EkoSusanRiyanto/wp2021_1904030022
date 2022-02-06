-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Feb 2022 pada 10.37
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_1904030022`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id` int(30) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `alamat` varchar(45) NOT NULL,
  `nomor_hp` int(13) NOT NULL,
  `jurusan_anggota` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id`, `nama`, `alamat`, `nomor_hp`, `jurusan_anggota`) VALUES
(1, 'Jupri', 'Jl.Saya Aja', 817263512, 'Ekonomi'),
(2, 'Imam', 'jl.Mawar Hitam', 819276372, 'Teknik Kimia'),
(3, 'Suryo', 'Jl.Teratai V', 812773891, 'Hukum'),
(4, 'Rio', 'Jl.Haji Daging II', 812736282, 'Pendidikan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` int(30) NOT NULL,
  `judul_buku` varchar(50) NOT NULL,
  `foto` varchar(45) NOT NULL,
  `tahun_penerbit` char(30) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `judul_buku`, `foto`, `tahun_penerbit`, `stock`) VALUES
(1, 'Pendidikan Pancasila', 'img.jpg', 'agustus 2009', 65),
(2, 'Manajemen Operasi Dasar', 'img.jpg', 'Juni 2011', 90),
(3, 'Sistem Operasi', 'img.jpg', 'Februari 2015', 60),
(4, 'Pengantar Bisnis', 'img.jpg', 'Januari 2013', 60);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
