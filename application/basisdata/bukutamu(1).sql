-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Sep 2018 pada 15.26
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bukutamu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akseslogin`
--

CREATE TABLE `akseslogin` (
  `idAkses` varchar(5) NOT NULL,
  `namaAkses` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hakAkses` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akseslogin`
--

INSERT INTO `akseslogin` (`idAkses`, `namaAkses`, `email`, `password`, `hakAkses`) VALUES
('A01', 'Rizki Agutsi', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', 'OPERATOR'),
('A02', 'Rukmana', 'admin@email.com', '21232f297a57a5a743894a0e4a801fc3', 'Admin'),
('A03', 'RIZKI AGUSTI GHOFUR', 'rizkiagustighofur@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bidang`
--

CREATE TABLE `bidang` (
  `idBidang` varchar(5) NOT NULL,
  `namaBidang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bidang`
--

INSERT INTO `bidang` (`idBidang`, `namaBidang`) VALUES
('B01', 'Kepala Bapenda'),
('B02', 'Sekertaris Bapenda'),
('B03', 'Sub Umum dan Perlengkapan'),
('B04', 'Sub Kepegawaian'),
('B05', 'Sub Bagian Keuangan dan Aset'),
('B06', 'Bidang Pembinaan dan Pengendalian'),
('B07', 'Bidang Perencanaan dan Pengembangan'),
('B08', 'Bidang Pendapatan 1'),
('B09', 'Bidang Pendapatan 2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftarpengunjung`
--

CREATE TABLE `daftarpengunjung` (
  `noKtp` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `fotoPengunjung` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftarpengunjung`
--

INSERT INTO `daftarpengunjung` (`noKtp`, `nama`, `fotoPengunjung`) VALUES
('123456789000230001', 'ASEP SURYANA', '123456789000230001.jpg'),
('67899999999990008', 'ASEP SURYANA ANDI', '67899999999990008.jpg'),
('98999990308960001', 'Rizki Agusti Ghofur', '98999990308960001.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `nip` varchar(30) NOT NULL,
  `namaPegawai` varchar(30) NOT NULL,
  `idBidang` varchar(5) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`nip`, `namaPegawai`, `idBidang`, `password`) VALUES
('196806071992031007', 'Herry', 'B04', '21232f297a57a5a743894a0e4a801fc3'),
('198312132006041007', 'Asep Kamil Husni, S.sos', 'B03', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengunjung`
--

CREATE TABLE `pengunjung` (
  `idPeng` varchar(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `noKtp` varchar(20) NOT NULL,
  `institusi` varchar(30) NOT NULL,
  `tujuan` text NOT NULL,
  `fotoPengunjung` varchar(50) NOT NULL,
  `tgl` date NOT NULL,
  `status` varchar(15) NOT NULL,
  `idBidang` varchar(5) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `idAkses` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengunjung`
--

INSERT INTO `pengunjung` (`idPeng`, `nama`, `noKtp`, `institusi`, `tujuan`, `fotoPengunjung`, `tgl`, `status`, `idBidang`, `nip`, `idAkses`) VALUES
('P0001', 'Rizki Agusti Ghofur', '98999990308960001', 'UNIKOM', 'mau ke pa asep kamik', '98999990308960001.jpg', '2018-09-05', 'sudah', 'B03', '198312132006041007', 'A01'),
('P0002', 'ASEP SURYANA', '123456789000230001', 'UNPAD', ' mau ke pa herry', '123456789000230001.jpg', '2018-09-05', '', 'B04', '', ''),
('P0003', 'Rizki Agusti Ghofur', '98999990308960001', 'UNIKOM', 'mau ke pa asep ', '98999990308960001.jpg', '2018-09-05', '', 'B03', '', ''),
('P0004', 'ASEP SURYANA ANDI', '67899999999990008', 'ITB', ' mau ke pa herry', '67899999999990008.jpg', '2018-09-05', 'sudah', 'B04', '196806071992031007', 'A01');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akseslogin`
--
ALTER TABLE `akseslogin`
  ADD PRIMARY KEY (`idAkses`);

--
-- Indeks untuk tabel `bidang`
--
ALTER TABLE `bidang`
  ADD PRIMARY KEY (`idBidang`);

--
-- Indeks untuk tabel `daftarpengunjung`
--
ALTER TABLE `daftarpengunjung`
  ADD PRIMARY KEY (`noKtp`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `idBidang` (`idBidang`);

--
-- Indeks untuk tabel `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`idPeng`),
  ADD KEY `idAkses` (`idAkses`),
  ADD KEY `idBidang` (`idBidang`),
  ADD KEY `nip` (`nip`),
  ADD KEY `idBidang_2` (`idBidang`,`nip`,`idAkses`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
