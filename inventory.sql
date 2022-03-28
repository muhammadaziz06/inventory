-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jun 2021 pada 19.00
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bahanbaku`
--

CREATE TABLE `bahanbaku` (
  `idbahanbaku` int(11) NOT NULL,
  `namabahanbaku` varchar(30) NOT NULL,
  `deskripsi` varchar(30) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bahanbaku`
--

INSERT INTO `bahanbaku` (`idbahanbaku`, `namabahanbaku`, `deskripsi`, `stock`) VALUES
(9, 'Tepung Terigu', 'Kg', 121),
(10, 'Ragi', 'Kg', 40),
(11, 'Telur', 'Kg', 25),
(12, 'Mentega', 'Kg', 50),
(13, 'Margarin', 'Kg', 90),
(14, 'Minyak Zaitun', 'Liter', 70),
(15, 'Coklat', 'Kg', 20),
(17, 'Gula', 'Kg', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bahanbakukeluar`
--

CREATE TABLE `bahanbakukeluar` (
  `idbahanbakukeluar` int(11) NOT NULL,
  `idbahanbaku` int(11) NOT NULL,
  `penerima` varchar(30) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `jumlah` int(11) NOT NULL,
  `satuan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bahanbakukeluar`
--

INSERT INTO `bahanbakukeluar` (`idbahanbakukeluar`, `idbahanbaku`, `penerima`, `tanggal`, `jumlah`, `satuan`) VALUES
(9, 9, 'Sami', '2021-06-22', 50, 'Kg'),
(10, 11, 'Viola', '2021-06-22', 30, 'Kg'),
(11, 12, 'Salman', '2021-06-22', 20, 'Kg'),
(12, 9, 'Produksi', '2021-06-22', 10, 'Kg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bahanbakumasuk`
--

CREATE TABLE `bahanbakumasuk` (
  `idbahanbakumasuk` int(11) NOT NULL,
  `idbahanbaku` int(11) NOT NULL,
  `supplier` varchar(30) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `jumlah` int(11) NOT NULL,
  `satuan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bahanbakumasuk`
--

INSERT INTO `bahanbakumasuk` (`idbahanbakumasuk`, `idbahanbaku`, `supplier`, `tanggal`, `jumlah`, `satuan`) VALUES
(13, 9, 'Haji Endang', '2021-06-22', 10, 'Kg'),
(14, 16, 'Umelup Makmur', '2021-06-22', 50, 'Kg'),
(16, 9, 'Haji Endang', '2021-06-22', 100, 'Kg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `idbarang` int(11) NOT NULL,
  `namabarang` varchar(30) NOT NULL,
  `deskripsi` varchar(30) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`idbarang`, `namabarang`, `deskripsi`, `stock`) VALUES
(15, 'Kue Nastar', 'Kue', 55),
(16, 'Kue Salju', 'Kue', 35),
(17, 'Kue Bolu Pandan', 'Kue', 7),
(18, 'Roti Buaya', 'Roti', 5),
(19, 'Kue Pancong', 'Kue', 10),
(20, 'Roti Tawar', 'Roti', 10),
(21, 'Roti Bially', 'Roti', 13),
(22, 'Roti Tawar', 'Roti', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `barangkeluar`
--

CREATE TABLE `barangkeluar` (
  `idkeluar` int(11) NOT NULL,
  `idbarang` int(11) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `penerima` varchar(30) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barangkeluar`
--

INSERT INTO `barangkeluar` (`idkeluar`, `idbarang`, `tanggal`, `penerima`, `jumlah`) VALUES
(10, 21, '2021-06-22', 'Anjaly', 7),
(11, 17, '2021-06-22', 'Meysa', 6),
(12, 15, '2021-06-22', 'Anjaly', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `barangmasuk`
--

CREATE TABLE `barangmasuk` (
  `idmasuk` int(11) NOT NULL,
  `idbarang` int(11) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `keterangan` varchar(30) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barangmasuk`
--

INSERT INTO `barangmasuk` (`idmasuk`, `idbarang`, `tanggal`, `keterangan`, `jumlah`) VALUES
(19, 21, '2021-06-22', 'Oshid', 5),
(20, 22, '2021-06-22', 'Annisah', 5),
(21, 20, '2021-06-22', 'Aziz', 5),
(22, 19, '2021-06-22', 'Oshid', 5),
(23, 17, '2021-06-22', 'Annisah', 4),
(24, 17, '2021-06-22', 'Aziz', 4),
(25, 21, '2021-06-22', 'Aziz', 10),
(27, 15, '2021-06-22', 'oshid', 10),
(28, 15, '2021-06-22', 'Oshid', 50),
(29, 16, '2021-06-22', 'Oshid', 30);

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `iduser` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `permintaanpembelian`
--

CREATE TABLE `permintaanpembelian` (
  `idpermintaanpembelian` int(11) NOT NULL,
  `user` varchar(30) NOT NULL,
  `namabahanbaku` varchar(30) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `permintaanpembelian`
--

INSERT INTO `permintaanpembelian` (`idpermintaanpembelian`, `user`, `namabahanbaku`, `jumlah`, `satuan`, `tanggal`) VALUES
(2, 'Aziz', 'Gula Pasir', 50, 'Kg', '2021-06-22'),
(3, 'Oshid', 'Tepung Terigu', 70, 'Kg', '2021-06-22'),
(4, 'Annisah', 'Telur', 80, 'Kg', '2021-06-22'),
(6, 'Aziz', 'Gula', 100, 'Kg', '2021-06-22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `requestbahanbaku`
--

CREATE TABLE `requestbahanbaku` (
  `idrequestbahanbaku` int(11) NOT NULL,
  `namabahanbaku` varchar(30) NOT NULL,
  `deskripsi` varchar(30) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `jumlah` int(11) NOT NULL,
  `satuan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `requestbahanbaku`
--

INSERT INTO `requestbahanbaku` (`idrequestbahanbaku`, `namabahanbaku`, `deskripsi`, `tanggal`, `jumlah`, `satuan`) VALUES
(9, 'Gula Pasir', 'Produksi', '2021-06-22', 20, 'Kg'),
(10, 'Tepung Terigu', 'Produksi', '2021-06-22', 30, 'Kg'),
(11, 'Telur', 'Produksi', '2021-06-22', 40, 'Kg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `requestbarang`
--

CREATE TABLE `requestbarang` (
  `idrequestbarang` int(11) NOT NULL,
  `namabarang` varchar(30) NOT NULL,
  `deskripsi` varchar(30) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `requestbarang`
--

INSERT INTO `requestbarang` (`idrequestbarang`, `namabarang`, `deskripsi`, `tanggal`, `jumlah`) VALUES
(6, 'Kue Bolu Pandan', 'Sales and Marketing', '2021-06-22', 20),
(8, 'Roti Bially', 'Sales and Marketing', '2021-06-22', 30),
(10, 'kue nastar', 'Sales and Marketing', '2021-06-22', 10);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bahanbaku`
--
ALTER TABLE `bahanbaku`
  ADD PRIMARY KEY (`idbahanbaku`);

--
-- Indeks untuk tabel `bahanbakukeluar`
--
ALTER TABLE `bahanbakukeluar`
  ADD PRIMARY KEY (`idbahanbakukeluar`);

--
-- Indeks untuk tabel `bahanbakumasuk`
--
ALTER TABLE `bahanbakumasuk`
  ADD PRIMARY KEY (`idbahanbakumasuk`);

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`idbarang`);

--
-- Indeks untuk tabel `barangkeluar`
--
ALTER TABLE `barangkeluar`
  ADD PRIMARY KEY (`idkeluar`);

--
-- Indeks untuk tabel `barangmasuk`
--
ALTER TABLE `barangmasuk`
  ADD PRIMARY KEY (`idmasuk`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`iduser`);

--
-- Indeks untuk tabel `permintaanpembelian`
--
ALTER TABLE `permintaanpembelian`
  ADD PRIMARY KEY (`idpermintaanpembelian`);

--
-- Indeks untuk tabel `requestbahanbaku`
--
ALTER TABLE `requestbahanbaku`
  ADD PRIMARY KEY (`idrequestbahanbaku`);

--
-- Indeks untuk tabel `requestbarang`
--
ALTER TABLE `requestbarang`
  ADD PRIMARY KEY (`idrequestbarang`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bahanbaku`
--
ALTER TABLE `bahanbaku`
  MODIFY `idbahanbaku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `bahanbakukeluar`
--
ALTER TABLE `bahanbakukeluar`
  MODIFY `idbahanbakukeluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `bahanbakumasuk`
--
ALTER TABLE `bahanbakumasuk`
  MODIFY `idbahanbakumasuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `idbarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `barangkeluar`
--
ALTER TABLE `barangkeluar`
  MODIFY `idkeluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `barangmasuk`
--
ALTER TABLE `barangmasuk`
  MODIFY `idmasuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `permintaanpembelian`
--
ALTER TABLE `permintaanpembelian`
  MODIFY `idpermintaanpembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `requestbahanbaku`
--
ALTER TABLE `requestbahanbaku`
  MODIFY `idrequestbahanbaku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `requestbarang`
--
ALTER TABLE `requestbarang`
  MODIFY `idrequestbarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
