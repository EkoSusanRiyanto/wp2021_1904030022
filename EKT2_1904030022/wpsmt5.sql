-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jan 2022 pada 17.38
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
-- Database: `wpsmt5`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `calon_mhs`
--

CREATE TABLE `calon_mhs` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(9) NOT NULL,
  `agama` varchar(9) NOT NULL,
  `sekolah_asal` varchar(20) NOT NULL,
  `foto_maba` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `calon_mhs`
--

INSERT INTO `calon_mhs` (`id`, `nama`, `alamat`, `jenis_kelamin`, `agama`, `sekolah_asal`, `foto_maba`) VALUES
(1, 'jono', 'veteran 2', 'laki laki', 'islam', 'sma 12', 'photo1.png'),
(2, 'joni', 'indah raya 2', 'laki laki', 'islam', 'sma 12', 'photo1.png'),
(3, 'rival', 'perum 1', 'laki laki', 'islam', 'smk bisa', 'photo1.png'),
(4, 'doni', 'indah asri 2', 'laki laki', 'islam', 'smk 1 mauk ', 'photo1.png'),
(5, 'rio', 'gembor', 'laki laki', 'islam', 'sma 11', 'photo2.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_dosen`
--

CREATE TABLE `daftar_dosen` (
  `foto_dosen` varchar(12) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `nidn` int(15) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `email` varchar(35) NOT NULL,
  `alamat_rumah` varchar(300) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `pendidikanS1` varchar(35) NOT NULL,
  `pendidikanS2` varchar(35) NOT NULL,
  `pendidikanS3` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `daftar_dosen`
--

INSERT INTO `daftar_dosen` (`foto_dosen`, `nama`, `nidn`, `jenis_kelamin`, `email`, `alamat_rumah`, `agama`, `pendidikanS1`, `pendidikanS2`, `pendidikanS3`) VALUES
('photo1.png', 'karyo', 1129817366, 'laki-laki', 'karyo433@gmail.com', 'teratai 2', 'islam', 'pendidikan', 'hukum', 'kedokteran'),
('photo2.png', 'widia', 1242537716, 'perempuan', 'widia555@gmail.com', 'angrek 2', 'islam', 'kedokteran', 'pendidikan', 'hukum'),
('photo2.png', 'suryo putri', 1293887176, 'perempuan', 'putrisuryo12@gmail.com', 'jalan-jalan sampai duit habis', 'islam', 'kedokteran', 'pendidikan', 'hukum'),
('photo1.png', 'danang', 1302937712, 'laki-laki', 'agus422@gmail.com', 'jalanin terus sampai sukses', 'islam', 'pendidikan', 'hukum', 'kedokteran');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `calon_mhs`
--
ALTER TABLE `calon_mhs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `daftar_dosen`
--
ALTER TABLE `daftar_dosen`
  ADD PRIMARY KEY (`nidn`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `calon_mhs`
--
ALTER TABLE `calon_mhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `daftar_dosen`
--
ALTER TABLE `daftar_dosen`
  MODIFY `nidn` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1302937713;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
