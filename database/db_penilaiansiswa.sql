-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Apr 2023 pada 10.25
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
-- Database: `db_penilaiansiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`, `nama`) VALUES
('admin', '1234', 'Dwi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `nip` varchar(20) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `kd_matpel` varchar(20) NOT NULL,
  `nama_matpel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`nip`, `nama_guru`, `tgl_lahir`, `alamat`, `telp`, `kd_matpel`, `nama_matpel`) VALUES
('123', 'Fitri Ramadhan', '2023-04-06', 'Jl. Suka Karya Rt01/02 No.36 Serua, Ciputat ', '09786578222', '003', 'Matematika'),
('1234', 'Supri', '2023-04-24', 'Jl. Sasmita Jaya, Pamulang ', '097865781477', '001', 'B.Indonesia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `kd_kelas` varchar(10) NOT NULL,
  `nama_kelas` varchar(15) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `jumlah_siswa` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `matpel`
--

CREATE TABLE `matpel` (
  `kd_matpel` varchar(20) NOT NULL,
  `nama_matpel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nis` varchar(20) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kd_kelas` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nis`, `nama_siswa`, `tgl_lahir`, `alamat`, `kd_kelas`, `username`, `password`, `telp`) VALUES
('0001', 'Dwi', '2023-04-27', 'Jl.H.Buang BSD', 'TP123', 'siswa', '1234', '081234567891'),
('0002', 'Fadillah', '2023-04-10', 'BSD Pondok jagung', 'TP1234', 'siswa1', '1234', '081234567810');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `kd_matpel` (`kd_matpel`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kd_kelas`),
  ADD KEY `nip` (`nip`);

--
-- Indeks untuk tabel `matpel`
--
ALTER TABLE `matpel`
  ADD PRIMARY KEY (`kd_matpel`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `kd_kelas` (`kd_kelas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
