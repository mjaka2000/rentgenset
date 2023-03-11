-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Mar 2023 pada 16.47
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rent_genset`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang_keluar`
--

CREATE TABLE `tb_barang_keluar` (
  `id_transaksi` varchar(50) NOT NULL,
  `tanggal_keluar` varchar(20) NOT NULL,
  `tanggal_masuk` varchar(20) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `nama_operator` varchar(50) DEFAULT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `kode_genset` varchar(50) NOT NULL,
  `nama_genset` varchar(50) NOT NULL,
  `daya` varchar(10) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `mobil` varchar(50) NOT NULL,
  `nopol` varchar(50) DEFAULT NULL,
  `tambahan` varchar(255) NOT NULL,
  `jumlah_hari` varchar(10) NOT NULL,
  `total` varchar(50) NOT NULL,
  `status_ajuan` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang_masuk`
--

CREATE TABLE `tb_barang_masuk` (
  `id_transaksi` varchar(50) NOT NULL,
  `tanggal_keluar` varchar(20) NOT NULL,
  `tanggal_masuk` varchar(20) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `nama_operator` varchar(50) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `kode_genset` varchar(50) NOT NULL,
  `nama_genset` varchar(50) NOT NULL,
  `daya` varchar(10) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `mobil` varchar(50) NOT NULL,
  `nopol` varchar(50) NOT NULL,
  `tambahan` varchar(255) NOT NULL,
  `jumlah_hari` varchar(10) NOT NULL,
  `total` varchar(50) NOT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_genset`
--

CREATE TABLE `tb_genset` (
  `id` int(11) NOT NULL,
  `kode_genset` varchar(50) NOT NULL,
  `nama_genset` varchar(50) NOT NULL,
  `daya` varchar(50) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `stok_gd` varchar(50) NOT NULL,
  `stok_pj` varchar(50) NOT NULL,
  `gambar_genset` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mobil`
--

CREATE TABLE `tb_mobil` (
  `id` int(11) NOT NULL,
  `merek` varchar(100) NOT NULL,
  `tipe` varchar(100) NOT NULL,
  `tahun` varchar(50) NOT NULL,
  `nopol` varchar(50) NOT NULL,
  `jenis_bbm` varchar(50) NOT NULL,
  `pajak` varchar(50) NOT NULL,
  `stnk` varchar(50) NOT NULL,
  `gambar_mobil` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_mobil`
--

INSERT INTO `tb_mobil` (`id`, `merek`, `tipe`, `tahun`, `nopol`, `jenis_bbm`, `pajak`, `stnk`, `gambar_mobil`) VALUES
(1, 'Daihatsu Gran Max Biru', 'Pickup', '2011', 'DA 1256 CJ', 'Bensin', '10-03-2023', '10-03-2023', 'daihatsu-gran-max-blu.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_operator`
--

CREATE TABLE `tb_operator` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `nama_perusahaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`id`, `nama`, `alamat`, `no_hp`, `jenis_kelamin`, `nama_perusahaan`) VALUES
(1, 'Aldi', 'Jl. HKSN Permai', '089821321234', 'Laki-Laki', 'PT RTR');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_serv_genset`
--

CREATE TABLE `tb_serv_genset` (
  `id` int(11) NOT NULL,
  `kode_genset` varchar(50) NOT NULL,
  `nama_genset` varchar(50) NOT NULL,
  `jenis_perbaikan` varchar(255) NOT NULL,
  `spare_part` varchar(255) NOT NULL,
  `tgl_perbaikan` varchar(255) NOT NULL,
  `ket_perbaikan` varchar(255) NOT NULL,
  `biaya_perbaikan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_upload_gambar_user`
--

CREATE TABLE `tb_upload_gambar_user` (
  `id` int(11) NOT NULL,
  `username_user` varchar(50) NOT NULL,
  `nama_file` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_upload_gambar_user`
--

INSERT INTO `tb_upload_gambar_user` (`id`, `username_user`, `nama_file`) VALUES
(1, 'admin', '640c36ac4df35.jpg'),
(8, 'jaka', 'nopic.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(12) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0,
  `last_login` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `role`, `last_login`) VALUES
(1, 'admin', '$2y$10$ZxCzpmMY4v6FO30lX46QC.4r82/MJYxxNyFw3MKryzcDFhpf1n74C', 1, '11-03-2023 23:07'),
(16, 'jaka', '$2y$10$b7G1LziahDnaNObLxw9N2uZuRuhY4LrNKB7DkSMJTaQrGiiJkA7Jq', 0, '11-03-2023 23:14');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_barang_keluar`
--
ALTER TABLE `tb_barang_keluar`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `tb_barang_masuk`
--
ALTER TABLE `tb_barang_masuk`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `tb_genset`
--
ALTER TABLE `tb_genset`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_mobil`
--
ALTER TABLE `tb_mobil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_operator`
--
ALTER TABLE `tb_operator`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_serv_genset`
--
ALTER TABLE `tb_serv_genset`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_upload_gambar_user`
--
ALTER TABLE `tb_upload_gambar_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_genset`
--
ALTER TABLE `tb_genset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_mobil`
--
ALTER TABLE `tb_mobil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_operator`
--
ALTER TABLE `tb_operator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_serv_genset`
--
ALTER TABLE `tb_serv_genset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_upload_gambar_user`
--
ALTER TABLE `tb_upload_gambar_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
