-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Feb 2023 pada 12.26
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

--
-- Dumping data untuk tabel `tb_barang_keluar`
--

INSERT INTO `tb_barang_keluar` (`id_transaksi`, `tanggal_keluar`, `tanggal_masuk`, `lokasi`, `nama_operator`, `nama_pelanggan`, `kode_genset`, `nama_genset`, `daya`, `harga`, `mobil`, `nopol`, `tambahan`, `jumlah_hari`, `total`, `status_ajuan`, `status`) VALUES
('GE-Feb2183', '21-02-2023', '24-02-2023', 'Banjarbaru', 'Engkoh', 'Jaka', '08', 'Kubota 13-08', '13', '500000', 'Pickup', 'DA 4351 SF', '-', '3', '1500000', NULL, 0),
('GE-Feb5968', '17-02-2023', '19-02-2023', 'Binuang', 'Halikin', 'Thoyib', '250', 'Hartech C-250', '250', '3500000', 'Truk', 'DA 6754 QW', '-', '2', '7000000', NULL, 0),
('GE-Feb6829', '15-02-2023', '17-02-2023', 'Siring Pemko BJM', 'Ahmad Yani', 'Aldi', '02', 'Hartech 45 P-02', '40', '1000000', 'Pickup', 'DA 1231 CC', 'Box Panel ', '2', '2000000', NULL, 0),
('GE-Feb7126', '20-02-2023', '23-02-2023', 'Martapura', 'Insan', 'Ibnu', '10', 'Denyo 25 ES-10', '20', '750000', 'Truk', 'DA 4534 AS', 'Kabel 20M, Panel', '3', '2250000', NULL, 0),
('GE-Feb8016', '16-02-2023', '19-02-2023', 'Banjarbaru', 'Adul', 'Tajul', '07', 'Denyo 25 ES-07', '20', '750000', 'Pickup', 'DA 1256 CJ', 'Box Panel', '3', '2250000', NULL, 0);

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

--
-- Dumping data untuk tabel `tb_barang_masuk`
--

INSERT INTO `tb_barang_masuk` (`id_transaksi`, `tanggal_keluar`, `tanggal_masuk`, `lokasi`, `nama_operator`, `nama_pelanggan`, `kode_genset`, `nama_genset`, `daya`, `harga`, `mobil`, `nopol`, `tambahan`, `jumlah_hari`, `total`, `status`) VALUES
('GE-Feb2183', '21-02-2023', '24-02-2023', 'Banjarbaru', 'Engkoh', 'Jaka', '08', 'Kubota 13-08', '13', '500000', 'Pickup', 'DA 4351 SF', '-', '3', '1500000', NULL),
('GE-Feb5968', '17-02-2023', '19-02-2023', 'Binuang', 'Halikin', 'Thoyib', '250', 'Hartech C-250', '250', '3500000', 'Truk', 'DA 6754 QW', '-', '2', '7000000', 0),
('GE-Feb6829', '15-02-2023', '18-02-2023', 'Siring Pemko BJM', 'Ahmad Yani', 'Aldi', '02', 'Hartech 45 P-02', '40', '1000000', 'Pickup', 'DA 1231 CC', 'Box Panel ', '3', '3000000', 0),
('GE-Feb7126', '20-02-2023', '23-02-2023', 'Martapura', 'Insan', 'Ibnu', '10', 'Denyo 25 ES-10', '20', '750000', 'Truk', 'DA 4534 AS', 'Kabel 20M, Panel', '3', '2250000', NULL),
('GE-Feb8016', '16-02-2023', '19-02-2023', 'Banjarbaru', 'Adul', 'Tajul', '07', 'Denyo 25 ES-07', '20', '750000', 'Pickup', 'DA 1256 CJ', 'Box Panel', '3', '2250000', 0);

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

--
-- Dumping data untuk tabel `tb_genset`
--

INSERT INTO `tb_genset` (`id`, `kode_genset`, `nama_genset`, `daya`, `harga`, `stok_gd`, `stok_pj`, `gambar_genset`) VALUES
(1, '02', 'Hartech 45 P-02', '40', '1000000', '1', '0', 'ht45p-02.jpg'),
(2, '07', 'Denyo 25 ES-07', '20', '750000', '0', '1', 'denyo25es-07.jpg'),
(3, '10', 'Denyo 25 ES-10', '20', '750000', '1', '0', 'denyo25es-10.jpg'),
(4, '08', 'Kubota 13-08', '13', '500000', '1', '0', 'kubota13-08.jpg'),
(5, '250', 'Hartech C-250', '250', '3500000', '1', '0', 'ht250.jpg');

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
(1, 'Daihatsu Gran Max Biru', 'Pickup', '2011', 'DA 1231 CC', 'Bensin', '04-01-2024', '04-01-2025', 'daihatsu-gran-max-blu.jpg'),
(2, 'Daihatsu Gran Max Putih', 'Pickup', '2010', 'DA 1256 CJ', 'Bensin', '11-07-2023', '11-07-2024', 'gran_max_wh.jpg'),
(3, 'Mitsubishi Truk Engkel Kuning', 'Truk', '2005', 'DA 4534 AS', 'Solar', '12-12-2023', '12-12-2026', 'truk_engkel.jpg'),
(4, 'L300 Diesel', 'Pickup', '2005', 'DA 4351 SF', 'Solar', '07-09-2023', '07-09-2025', 'l300.jpg'),
(5, 'Truk Isuzu Putih', 'Truk', '2015', 'DA 6754 QW', 'Solar', '10-08-2023', '10-08-2024', 'Isuzu-wh.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_operator`
--

CREATE TABLE `tb_operator` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_operator`
--

INSERT INTO `tb_operator` (`id`, `nama`, `alamat`, `no_hp`, `jenis_kelamin`) VALUES
(1, 'Ahmad Yani', 'Jl. Handil Bakti', '0853555291', 'Laki-Laki'),
(2, 'Adul', 'Jl. Sungai Andai', '0819555831', 'Laki-Laki'),
(3, 'Insan', 'Jl. HKSN Permai', '0899061528', 'Laki-Laki'),
(4, 'Engkoh', 'Jl. Pangeran', '0876705850', 'Laki-Laki'),
(5, 'Halikin', 'Martapura', '08962109702', 'Laki-Laki');

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
(1, 'Aldi', 'Sungai Miai', '0771948682', 'Laki-Laki', 'PT. RTR'),
(2, 'Tajul', 'Jl. Sultan Adam', '0834873368', 'Laki-Laki', 'Kost Putra 350'),
(3, 'Ibnu', 'Jl. AKT', '0789711269', 'Laki-Laki', 'PT. Prastuti'),
(4, 'Jaka', 'Sungai Jingah', '0817677972', 'Laki-Laki', 'CV. Bintang'),
(5, 'Thoyib', 'Berangas', '0864303181', 'Laki-Laki', 'PT. Telkom');

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

--
-- Dumping data untuk tabel `tb_serv_genset`
--

INSERT INTO `tb_serv_genset` (`id`, `kode_genset`, `nama_genset`, `jenis_perbaikan`, `spare_part`, `tgl_perbaikan`, `ket_perbaikan`, `biaya_perbaikan`) VALUES
(1, '02', 'Hartech 45 P-02', 'Ganti Nozzle', 'Injektor Nozzle', '06-02-2023', 'Selesai Diperbaiki', '250000'),
(2, '07', 'Denyo 25 ES-07', 'Radiator Bocor', '-', '08-02-2023', 'Selesai Diperbaiki', '100000'),
(3, '10', 'Denyo 25 ES-10', 'Penggantian Filter Solar', 'Filter Solar ', '07-02-2023', 'Selesai Diperbaiki', '80000'),
(4, '08', 'Kubota 13-08', 'Ganti Oli', '-', '02-02-2023', 'Selesai Diperbaiki', '0'),
(5, '250', 'Hartech C-250', 'Kabel Fasa Out Terbakar', 'Kabel Fasa Out ', '17-02-2023', 'Selesai Diperbaiki', '200000');

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
(1, 'admin', '63e4b66ad290b.png'),
(4, 'aldi', 'nopic.png'),
(5, 'dio', 'nopic.png'),
(6, 'jakaja', 'nopic.png'),
(7, 'jojo', 'nopic.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(12) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0,
  `last_login` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `email`, `password`, `role`, `last_login`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$ZxCzpmMY4v6FO30lX46QC.4r82/MJYxxNyFw3MKryzcDFhpf1n74C', 1, '24-02-2023 12:09'),
(12, 'aldi', 'aldi01@gmail.com', '$2y$10$Xe8KpMOHZkKw0ESayBlM4.Z50S1iQF.t7LSBlBZcLi./inQPO6rdW', 1, '11-02-2023 18:13'),
(13, 'dio', 'dio@email.com', '$2y$10$73xZGyRs52chL8u7UDqpdeqKoM0tVh/SoJgPSTCnQGr7C62z7dtp6', 0, '24-02-2023 8:39'),
(14, 'jakaja', 'jaka09@mail.com', '$2y$10$9WKRqTwud03C/uZYjwT4.ergQgEikMHFvPm20KGC7HhaGV6519RdK', 0, '23-02-2023 8:44'),
(15, 'jojo', 'jojoadv@email.com', '$2y$10$3vM4OcwPEWg1r8t9WNV3duSRDTa2iBw.Ik3xkrUQWuAzu0Xs0XNEy', 1, '23-02-2023 8:44');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_mobil`
--
ALTER TABLE `tb_mobil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_operator`
--
ALTER TABLE `tb_operator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_serv_genset`
--
ALTER TABLE `tb_serv_genset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_upload_gambar_user`
--
ALTER TABLE `tb_upload_gambar_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
