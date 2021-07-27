-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jan 2021 pada 16.06
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `segmenspk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'Fajar', 'fajar'),
(2, 'Ilham', 'ilham'),
(3, 'Rizaldi', 'rizaldi'),
(4, 'Arfandra', 'arfandra'),
(5, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `analisa_alternatif`
--

CREATE TABLE `analisa_alternatif` (
  `alternatif_pertama` varchar(4) NOT NULL,
  `nilai_analisa_alternatif` double NOT NULL,
  `hasil_analisa_alternatif` double NOT NULL,
  `alternatif_kedua` varchar(4) NOT NULL,
  `id_kriteria` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `analisa_alternatif`
--

INSERT INTO `analisa_alternatif` (`alternatif_pertama`, `nilai_analisa_alternatif`, `hasil_analisa_alternatif`, `alternatif_kedua`, `id_kriteria`) VALUES
('KOS', 1, 0.29940119760479, 'KOS', 'C1'),
('KOS', 1, 0.22222222222222, 'KOS', 'C2'),
('KOS', 1, 0.25, 'KOS', 'C3'),
('KOS', 1, 0.30769230769231, 'KOS', 'C4'),
('KOS', 1.4925373134328, 0.29895366218236, 'KSC', 'C1'),
('KOS', 2, 0.22222222222222, 'KSC', 'C2'),
('KOS', 1, 0.25, 'KSC', 'C3'),
('KOS', 1, 0.30769230769231, 'KSC', 'C4'),
('KOS', 1.4925373134328, 0.29895366218236, 'KSO', 'C1'),
('KOS', 0.66666666666667, 0.22222222222222, 'KSO', 'C2'),
('KOS', 1, 0.25, 'KSO', 'C3'),
('KOS', 2, 0.30769230769231, 'KSO', 'C4'),
('KOS', 1, 0.3, 'KSS', 'C1'),
('KOS', 0.66666666666667, 0.22222222222222, 'KSS', 'C2'),
('KOS', 1, 0.25, 'KSS', 'C3'),
('KOS', 1.3333333333333, 0.3076923076923, 'KSS', 'C4'),
('KSC', 0.67, 0.20059880239521, 'KOS', 'C1'),
('KSC', 0.5, 0.11111111111111, 'KOS', 'C2'),
('KSC', 1, 0.25, 'KOS', 'C3'),
('KSC', 1, 0.30769230769231, 'KOS', 'C4'),
('KSC', 1, 0.20029895366218, 'KSC', 'C1'),
('KSC', 1, 0.11111111111111, 'KSC', 'C2'),
('KSC', 1, 0.25, 'KSC', 'C3'),
('KSC', 1, 0.30769230769231, 'KSC', 'C4'),
('KSC', 1, 0.20029895366218, 'KSO', 'C1'),
('KSC', 0.33333333333333, 0.11111111111111, 'KSO', 'C2'),
('KSC', 1, 0.25, 'KSO', 'C3'),
('KSC', 2, 0.30769230769231, 'KSO', 'C4'),
('KSC', 0.66666666666667, 0.2, 'KSS', 'C1'),
('KSC', 0.33333333333333, 0.11111111111111, 'KSS', 'C2'),
('KSC', 1, 0.25, 'KSS', 'C3'),
('KSC', 1.3333333333333, 0.3076923076923, 'KSS', 'C4'),
('KSO', 0.67, 0.20059880239521, 'KOS', 'C1'),
('KSO', 1.5, 0.33333333333333, 'KOS', 'C2'),
('KSO', 1, 0.25, 'KOS', 'C3'),
('KSO', 0.5, 0.15384615384615, 'KOS', 'C4'),
('KSO', 1, 0.20029895366218, 'KSC', 'C1'),
('KSO', 3, 0.33333333333333, 'KSC', 'C2'),
('KSO', 1, 0.25, 'KSC', 'C3'),
('KSO', 0.5, 0.15384615384615, 'KSC', 'C4'),
('KSO', 1, 0.20029895366218, 'KSO', 'C1'),
('KSO', 1, 0.33333333333333, 'KSO', 'C2'),
('KSO', 1, 0.25, 'KSO', 'C3'),
('KSO', 1, 0.15384615384615, 'KSO', 'C4'),
('KSO', 0.66666666666667, 0.2, 'KSS', 'C1'),
('KSO', 1, 0.33333333333333, 'KSS', 'C2'),
('KSO', 1, 0.25, 'KSS', 'C3'),
('KSO', 0.66666666666667, 0.15384615384616, 'KSS', 'C4'),
('KSS', 1, 0.29940119760479, 'KOS', 'C1'),
('KSS', 1.5, 0.33333333333333, 'KOS', 'C2'),
('KSS', 1, 0.25, 'KOS', 'C3'),
('KSS', 0.75, 0.23076923076923, 'KOS', 'C4'),
('KSS', 1.5, 0.30044843049328, 'KSC', 'C1'),
('KSS', 3, 0.33333333333333, 'KSC', 'C2'),
('KSS', 1, 0.25, 'KSC', 'C3'),
('KSS', 0.75, 0.23076923076923, 'KSC', 'C4'),
('KSS', 1.5, 0.30044843049328, 'KSO', 'C1'),
('KSS', 1, 0.33333333333333, 'KSO', 'C2'),
('KSS', 1, 0.25, 'KSO', 'C3'),
('KSS', 1.5, 0.23076923076923, 'KSO', 'C4'),
('KSS', 1, 0.3, 'KSS', 'C1'),
('KSS', 1, 0.33333333333333, 'KSS', 'C2'),
('KSS', 1, 0.25, 'KSS', 'C3'),
('KSS', 1, 0.23076923076923, 'KSS', 'C4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `analisa_kriteria`
--

CREATE TABLE `analisa_kriteria` (
  `kriteria_pertama` varchar(2) NOT NULL,
  `nilai_analisa_kriteria` double NOT NULL,
  `hasil_analisa_kriteria` double NOT NULL,
  `kriteria_kedua` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `analisa_kriteria`
--

INSERT INTO `analisa_kriteria` (`kriteria_pertama`, `nilai_analisa_kriteria`, `hasil_analisa_kriteria`, `kriteria_kedua`) VALUES
('C1', 1, 0.48, 'C1'),
('C1', 2, 0.52173913043478, 'C2'),
('C1', 3, 0.46153846153846, 'C3'),
('C1', 4, 0.4, 'C4'),
('C2', 0.5, 0.24, 'C1'),
('C2', 1, 0.26086956521739, 'C2'),
('C2', 2, 0.30769230769231, 'C3'),
('C2', 3, 0.3, 'C4'),
('C3', 0.33333333333333, 0.16, 'C1'),
('C3', 0.5, 0.1304347826087, 'C2'),
('C3', 1, 0.15384615384615, 'C3'),
('C3', 2, 0.2, 'C4'),
('C4', 0.25, 0.12, 'C1'),
('C4', 0.33333333333333, 0.08695652173913, 'C2'),
('C4', 0.5, 0.076923076923077, 'C3'),
('C4', 1, 0.1, 'C4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `pesan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id`, `nama`, `email`, `subject`, `pesan`) VALUES
(1, 'Ilham', 'Ilham@gmail.com', 'Tempat Nongkrong', 'Seru banget nongkrong disini , kopinya enak dan tempatnya juga cocok untuk rame rame\r\n'),
(2, 'Rizaldi', 'Rizaldi@gmail.com', 'Rasa Kopi', 'Kopi gula arennya terbaik sekota depok!!!');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_alternatif`
--

CREATE TABLE `data_alternatif` (
  `id_alternatif` varchar(4) NOT NULL,
  `nik` char(18) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `Harga` int(11) NOT NULL,
  `hasil_akhir` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_alternatif`
--

INSERT INTO `data_alternatif` (`id_alternatif`, `nik`, `nama`, `Harga`, `hasil_akhir`) VALUES
('A10', 'V60', 'V60', 18000, NULL),
('A11', 'VDP', 'Vietnam Drip', 20000, NULL),
('A12', 'KLT', 'Kalita', 18000, NULL),
('A13', 'FPS', 'French Press', 14000, NULL),
('A14', 'KTB', 'Tubruk', 12000, NULL),
('A15', 'ESG', 'Espresso Single', 8000, NULL),
('A16', 'EDB', 'Espresso Double', 10000, NULL),
('A17', 'PCL', 'Piccolo', 18000, NULL),
('A18', 'CPC', 'Cappucino', 20000, NULL),
('A19', 'LTE', 'Latte', 18000, NULL),
('A20', 'CKLT', 'Cokelat', 20000, NULL),
('A21', 'MTC', 'Matcha', 20000, NULL),
('A22', 'RDV', 'Red Velvet', 20000, NULL),
('A23', 'VLC', 'Vanilla Leci', 18000, NULL),
('A24', 'VLS', 'Vanilla Susu', 16000, NULL),
('A25', 'LTA', 'Lemon Tea', 12000, NULL),
('A26', 'LTC', 'Leci Tea', 14000, NULL),
('A27', 'TSS', 'Teh Susu', 15000, NULL),
('A28', 'TPC', 'Peach Tea', 16000, NULL),
('A29', 'TTR', 'Teh Tarik', 14000, NULL),
('KHS', 'KHS', 'Kopi Hitam Segmen', 15000, NULL),
('KOS', 'KOS', 'Kopi Oreo Susu', 20000, 0.28586391642433),
('KSC', 'KSC', 'Kopi Susu Coklat', 22000, 0.21403213658648598),
('KSO', 'KSO', 'Kopi Susu Original', 18000, 0.21384804717162698),
('KSS', 'KSS', 'Kopi Susu Segmen', 18000, 0.28625589981755095);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kriteria`
--

CREATE TABLE `data_kriteria` (
  `id_kriteria` varchar(2) NOT NULL,
  `nama_kriteria` varchar(45) NOT NULL,
  `jumlah_kriteria` double NOT NULL,
  `bobot_kriteria` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_kriteria`
--

INSERT INTO `data_kriteria` (`id_kriteria`, `nama_kriteria`, `jumlah_kriteria`, `bobot_kriteria`) VALUES
('C1', 'Rasaa', 2.08333333333333, 0.46581939799330996),
('C2', 'Harga', 3.83333333333333, 0.277140468227425),
('C3', 'Porsi', 6.5, 0.16107023411371252),
('C4', 'Bahan', 10, 0.09596989966555175);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jum_alt_kri`
--

CREATE TABLE `jum_alt_kri` (
  `id_alternatif` varchar(4) NOT NULL,
  `id_kriteria` varchar(2) NOT NULL,
  `jumlah_alt_kri` double NOT NULL,
  `skor_alt_kri` double NOT NULL,
  `hasil_alt_kri` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jum_alt_kri`
--

INSERT INTO `jum_alt_kri` (`id_alternatif`, `id_kriteria`, `jumlah_alt_kri`, `skor_alt_kri`, `hasil_alt_kri`) VALUES
('KOS', 'C1', 3.34, 0.2993271304923775, 0.13943238372902),
('KOS', 'C2', 4.5, 0.26981041510172626, 0.074775384773928),
('KOS', 'C3', 4, 0.27466356524618873, 0.044240124756711),
('KOS', 'C4', 3.25, 0.28567314606156163, 0.027416023164671),
('KSC', 'C1', 4.9925373134328, 0.2002991774298925, 0.093303242248948),
('KSC', 'C2', 9, 0.2172756490583275, 0.060215875114443),
('KSC', 'C3', 4, 0.22514958871494625, 0.036264896964922),
('KSC', 'C4', 3.25, 0.2526638283740667, 0.024248122258173),
('KSO', 'C1', 4.9925373134328, 0.2002991774298925, 0.093303242248948),
('KSO', 'C2', 3, 0.23436966615234375, 0.064953319015766),
('KSO', 'C3', 4, 0.22514958871494625, 0.036264896964922),
('KSO', 'C4', 6.5, 0.201381777092015, 0.019326588941991),
('KSS', 'C1', 3.33333333333334, 0.3000745146478375, 0.13978052976639),
('KSS', 'C2', 3, 0.2785442696875994, 0.077195889323287),
('KSS', 'C3', 4, 0.27503725732391876, 0.044300315427157),
('KSS', 'C4', 4.33333333333327, 0.2602812484723558, 0.024979165300717);

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id`, `nama`, `jenis`, `harga`) VALUES
(1, 'Kopi Hitam Original', 'Minuman', 'Rp 12000'),
(2, 'Kopi Segmen', 'Minuman', 'Rp 18000'),
(3, 'Kopi Segmen Gula Aren', 'Minuman', 'Rp 21000'),
(4, 'Sosis Bakar', 'Makanan', 'Rp 15000'),
(5, 'Kentang Goreng', 'Makanan', 'Rp 15000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `jum_nilai` double NOT NULL,
  `ket_nilai` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `jum_nilai`, `ket_nilai`) VALUES
(23, 2, 'Rasa Lebih Penting Dari Harga'),
(24, 3, 'Rasa Lebih Penting Dari Porsi'),
(25, 4, 'Rasa Lebih Penting Dari Bahan'),
(26, 2, 'Porsi Lebih Penting Dari Bahan'),
(27, 3, 'Harga Lebih Penting Dari Bahan'),
(28, 2, 'Harga Lebih Penting Dari Porsi'),
(29, 1.5, 'kali lebih besar dari'),
(30, 0.67, 'kali lebih besar dari'),
(31, 1, 'kali lebih besar dari'),
(32, 0.81818181, 'kali lebih besar dari'),
(33, 0.9, 'kali lebih besar dari'),
(34, 1.22222223, 'kali lebih besar dari'),
(35, 1.1, 'kali lebih besar dari'),
(36, 0.909090909, 'kali lebih besar dari'),
(37, 1.111111111, 'kali lebih besar dari'),
(38, 0.5, 'kali lebih besar dari'),
(39, 0.75, 'kali lebih besar dari'),
(40, 0.25, 'kali lebih besar dari'),
(41, 3, 'kali lebih besar dari'),
(42, 0.33333333333333, 'kali lebih besar dari'),
(43, 0.33333333333333, 'kali lebih besar dari');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_awal`
--

CREATE TABLE `nilai_awal` (
  `id_nilai_awal` int(11) NOT NULL,
  `id_alternatif` varchar(4) NOT NULL,
  `nilai` varchar(5) NOT NULL,
  `keterangan` enum('B','C','K') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai_awal`
--

INSERT INTO `nilai_awal` (`id_nilai_awal`, `id_alternatif`, `nilai`, `keterangan`) VALUES
(25, 'KSS', '64.75', 'C'),
(26, 'KSC', '64.25', 'C'),
(28, 'KSO', '64.25', 'C'),
(29, 'KOS', '64.75', 'C'),
(30, 'KHS', '38.5', 'K');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_awal_detail`
--

CREATE TABLE `nilai_awal_detail` (
  `id_nilai_awal_detail` int(11) NOT NULL,
  `id_nilai_awal` int(11) NOT NULL,
  `id_kriteria` varchar(2) NOT NULL,
  `nilai` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai_awal_detail`
--

INSERT INTO `nilai_awal_detail` (`id_nilai_awal_detail`, `id_nilai_awal`, `id_kriteria`, `nilai`) VALUES
(109, 25, 'C1', 3),
(110, 25, 'C2', 3),
(111, 25, 'C3', 250),
(112, 25, 'C4', 3),
(113, 26, 'C1', 2),
(114, 26, 'C2', 1),
(115, 26, 'C3', 250),
(116, 26, 'C4', 4),
(121, 28, 'C1', 2),
(122, 28, 'C2', 3),
(123, 28, 'C3', 250),
(124, 28, 'C4', 2),
(125, 29, 'C1', 3),
(126, 29, 'C2', 2),
(127, 29, 'C3', 250),
(128, 29, 'C4', 4),
(129, 30, 'C1', 2),
(130, 30, 'C2', 1),
(131, 30, 'C3', 150),
(132, 30, 'C4', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `role` enum('atasan','kepegawaian','manajer') NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama_lengkap`, `role`, `username`, `password`) VALUES
(1, 'Rizaldi Akbar', 'kepegawaian', 'al', 'zaldi123'),
(2, 'Arfandra Rezky', 'atasan', 'arpan', 'a123b45'),
(3, 'Fajar RH', 'manajer', 'fajar', '12345');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ranking`
--

CREATE TABLE `ranking` (
  `kriteria` varchar(2) NOT NULL,
  `skor_bobot` double NOT NULL,
  `alternatif` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `reservation`
--

CREATE TABLE `reservation` (
  `id` int(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` varchar(50) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `reservation`
--

INSERT INTO `reservation` (`id`, `fname`, `lname`, `tanggal`, `waktu`, `telepon`, `keterangan`, `status`) VALUES
(1, 'Arfandra', 'Rezky', '2021-01-19', '9 malam', '0898753123123', '6 orang yaa bawa pasukan ada yang habis lahirann', 'Aktif'),
(2, 'Fajar', 'Rahman', '2021-01-13', '10 Malam', '084212341231', ' 7 orang , Baru lulus kuliahh !!!', 'Aktif');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `analisa_alternatif`
--
ALTER TABLE `analisa_alternatif`
  ADD PRIMARY KEY (`alternatif_pertama`,`alternatif_kedua`,`id_kriteria`),
  ADD KEY `alternatif_kedua` (`alternatif_kedua`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indeks untuk tabel `analisa_kriteria`
--
ALTER TABLE `analisa_kriteria`
  ADD PRIMARY KEY (`kriteria_pertama`,`kriteria_kedua`),
  ADD KEY `kriteria_kedua` (`kriteria_kedua`);

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_alternatif`
--
ALTER TABLE `data_alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indeks untuk tabel `data_kriteria`
--
ALTER TABLE `data_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indeks untuk tabel `jum_alt_kri`
--
ALTER TABLE `jum_alt_kri`
  ADD PRIMARY KEY (`id_alternatif`,`id_kriteria`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indeks untuk tabel `nilai_awal`
--
ALTER TABLE `nilai_awal`
  ADD PRIMARY KEY (`id_nilai_awal`,`id_alternatif`),
  ADD KEY `alternatif` (`id_alternatif`);

--
-- Indeks untuk tabel `nilai_awal_detail`
--
ALTER TABLE `nilai_awal_detail`
  ADD PRIMARY KEY (`id_nilai_awal_detail`,`id_nilai_awal`),
  ADD KEY `alternatif` (`id_nilai_awal`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indeks untuk tabel `ranking`
--
ALTER TABLE `ranking`
  ADD PRIMARY KEY (`kriteria`,`alternatif`),
  ADD KEY `alternatif` (`alternatif`);

--
-- Indeks untuk tabel `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `nilai_awal`
--
ALTER TABLE `nilai_awal`
  MODIFY `id_nilai_awal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `nilai_awal_detail`
--
ALTER TABLE `nilai_awal_detail`
  MODIFY `id_nilai_awal_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT untuk tabel `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `analisa_alternatif`
--
ALTER TABLE `analisa_alternatif`
  ADD CONSTRAINT `analisa_alternatif_ibfk_1` FOREIGN KEY (`id_kriteria`) REFERENCES `data_kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `analisa_alternatif_ibfk_2` FOREIGN KEY (`alternatif_pertama`) REFERENCES `data_alternatif` (`id_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `analisa_alternatif_ibfk_3` FOREIGN KEY (`alternatif_kedua`) REFERENCES `data_alternatif` (`id_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `analisa_kriteria`
--
ALTER TABLE `analisa_kriteria`
  ADD CONSTRAINT `analisa_kriteria_ibfk_1` FOREIGN KEY (`kriteria_pertama`) REFERENCES `data_kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `analisa_kriteria_ibfk_2` FOREIGN KEY (`kriteria_kedua`) REFERENCES `data_kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `jum_alt_kri`
--
ALTER TABLE `jum_alt_kri`
  ADD CONSTRAINT `jum_alt_kri_ibfk_1` FOREIGN KEY (`id_kriteria`) REFERENCES `data_kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jum_alt_kri_ibfk_2` FOREIGN KEY (`id_alternatif`) REFERENCES `data_alternatif` (`id_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `nilai_awal`
--
ALTER TABLE `nilai_awal`
  ADD CONSTRAINT `nilai_awal_ibfk_1` FOREIGN KEY (`id_alternatif`) REFERENCES `data_alternatif` (`id_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `nilai_awal_detail`
--
ALTER TABLE `nilai_awal_detail`
  ADD CONSTRAINT `nilai_awal_detail_ibfk_1` FOREIGN KEY (`id_kriteria`) REFERENCES `data_kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_awal_detail_ibfk_2` FOREIGN KEY (`id_nilai_awal`) REFERENCES `nilai_awal` (`id_nilai_awal`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `ranking`
--
ALTER TABLE `ranking`
  ADD CONSTRAINT `ranking_ibfk_1` FOREIGN KEY (`kriteria`) REFERENCES `data_kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ranking_ibfk_2` FOREIGN KEY (`alternatif`) REFERENCES `data_alternatif` (`id_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
