-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jun 2019 pada 18.07
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jeniskelamin` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `jurusan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id`, `nama`, `jeniskelamin`, `agama`, `alamat`, `jurusan`) VALUES
(1, 'Indri Anatasya Alam', 'Perempuan', 'Katolik', 'jl.gaja mada', 'Teknik Informatika'),
(2, 'Indah Lugianti', 'Perempuan', 'Islam', 'jl.kamboja', 'Teknik Informatika'),
(3, 'Melki', 'Laki-Laki', 'Protestan', 'jl.irari', 'Teknik Elektro'),
(4, 'Grace', 'Perempuan', 'Protestan', 'jl.mekar', 'Teknik Arsitek'),
(5, 'Isra Purnama Sari', 'Perempuan', 'Islam', 'jl.andonuhu', 'Teknik Informatika'),
(6, 'Fahir', 'Laki-Laki', 'Islam', 'jl.lasolo', 'Teknik Mesin'),
(7, 'Rosid', 'Laki-Laki', 'islam', 'jl.kejora', 'Teknik Elektro'),
(8, 'Nur Salam', 'Laki-Laki', 'Islam', 'jl.kampung salo', 'Teknik Sipil');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
