-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Des 2025 pada 17.50
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
-- Database: `usp_bantantengah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL,
  `no_anggota` varchar(50) DEFAULT NULL,
  `no_simpanan` varchar(50) DEFAULT NULL,
  `nama` varchar(50) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `kelamin` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `ktp` varchar(50) NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  `jam` varchar(50) NOT NULL,
  `tanggal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `no_anggota`, `no_simpanan`, `nama`, `nik`, `kelamin`, `no_hp`, `alamat`, `ktp`, `status`, `jam`, `tanggal`) VALUES
(1, NULL, NULL, 'Firdaus', '4354654654', 'Laki-laki', '098776765543', 'Sungai Nibung', 'ade_s_bakung.jpg', 'tarik', '', ''),
(2, NULL, NULL, 'Viki', '07675674764', 'Laki-laki', '083147154888', 'Sungai Nibung', 'fauzi_bakung1.jpg', 'tarik', '13:48:35', '2022-09-08'),
(3, NULL, NULL, 'Marlis', '14088278728', 'Laki-laki', '0828637274', 'Sungai Bakung', 'marlis_bakung.jpg', NULL, '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan`
--

CREATE TABLE `pengajuan` (
  `id_pengajuan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `ttl` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `jaminan` varchar(255) NOT NULL,
  `lokasi` text NOT NULL,
  `foto_jaminan` text NOT NULL,
  `tujuan` text NOT NULL,
  `anggunan` int(11) NOT NULL,
  `tempo` int(11) NOT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengajuan`
--

INSERT INTO `pengajuan` (`id_pengajuan`, `id_user`, `nama`, `alamat`, `ttl`, `pekerjaan`, `jaminan`, `lokasi`, `foto_jaminan`, `tujuan`, `anggunan`, `tempo`, `status`) VALUES
(1, 40, 'Sapik', 'JL. JEND SUDIRMAN', 'Bantan Air, 02-05-2000', 'Petani', 'Rumah', 'JL. Jendral Sudirman', 'RG.png', 'Penambahan modal usaha', 10000000, 24, 'Diterima'),
(4, 40, 'Khoirul Hakimin', 'JL. JEND SUDIRMAN', 'Bantan Air, 02-05-2000', 'Petani', 'Rumah', 'JL. Jendral Sudirman', 'Picture1.jpg', 'Penambahan modal usaha', 15000000, 24, 'Tidak Diterima'),
(5, 1, 'Dapi', 'JL. AHMAD YANI', 'Bantan Air, 02-05-2000', 'Petani', 'Perkebunan', 'JL. Gajah Mada', '45.jpg', 'Penambahan modal usaha', 30000000, 36, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat`
--

CREATE TABLE `riwayat` (
  `id_riwayat` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `tgl` varchar(255) NOT NULL,
  `jam` varchar(255) NOT NULL,
  `no_simpan` varchar(255) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `riwayat`
--

INSERT INTO `riwayat` (`id_riwayat`, `nama`, `tipe`, `tgl`, `jam`, `no_simpan`, `jumlah`, `status`) VALUES
(1, 'Firdaus', 'Pokok', '2022-12-04', '04:35:53', '1', '50000', ''),
(3, 'Syukron', 'Pokok', '2022-12-04', '05:18:08', '2', '50000', 'tarik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `simpan`
--

CREATE TABLE `simpan` (
  `id_simpanan` int(11) NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  `no_simpanan` varchar(20) DEFAULT NULL,
  `nama` varchar(50) NOT NULL,
  `jumlah` varchar(50) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `jam` varchar(50) NOT NULL,
  `jenis` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `simpan`
--

INSERT INTO `simpan` (`id_simpanan`, `status`, `no_simpanan`, `nama`, `jumlah`, `tanggal`, `jam`, `jenis`) VALUES
(1, 'masuk', '1', 'Firdaus', '50000', '2022-09-08', '01:46:52', 'Pokok'),
(2, 'tarik', '2', 'Viki', '50000', '2022-09-08', '13:48:35', 'Pokok'),
(3, 'masuk', '3', 'Marlis', '50000', '2021-12-09', '10:04:42', 'Pokok');

-- --------------------------------------------------------

--
-- Struktur dari tabel `survei`
--

CREATE TABLE `survei` (
  `id` int(11) NOT NULL,
  `id_pengaju` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `ttl` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `usaha` varchar(255) NOT NULL,
  `laba_pinjam` varchar(255) NOT NULL,
  `daerah_usaha` varchar(255) NOT NULL,
  `sistem_usaha` varchar(255) NOT NULL,
  `pesaing` varchar(255) NOT NULL,
  `solusi` varchar(255) NOT NULL,
  `pengalaman` varchar(255) NOT NULL,
  `kekayaan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(150) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` varchar(50) DEFAULT NULL,
  `nik` varchar(50) DEFAULT NULL,
  `ktp` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `level` enum('Admin','Nasabah','Staff SAK','Analisis Kredit') NOT NULL,
  `blokir` enum('N','Y') NOT NULL,
  `id_session` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `nama`, `foto`, `password`, `email`, `no_hp`, `nik`, `ktp`, `alamat`, `level`, `blokir`, `id_session`) VALUES
(1, 'Admin', '', 'man-2687628_1280.png', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', NULL, NULL, NULL, NULL, 'Admin', 'N', ''),
(40, 'Suci Ramadani', '', NULL, '1cc6545f956f39a79c80b05f65df3c0a', 'suci@gmail.com', '087723442323', NULL, 'RG3.png', 'JL. JEND SUDIRMAN', 'Nasabah', 'N', ''),
(41, 'Dandi', '', NULL, '32408919e7c985cf5439ebda3e1eb0f5', 'dandi@gmail.com', '082276840932', NULL, NULL, 'JL. JEND SUDIRMAN', 'Staff SAK', 'N', ''),
(42, 'Linda', '', NULL, 'eaf450085c15c3b880c66d0b78f2c041', 'linda@gmail.com', '082376542156', NULL, NULL, 'JL. AHMAD YANI', 'Analisis Kredit', 'N', ''),
(43, 'Muslimah', 'Siti Muslimah', NULL, '8f2e4f7fae580d74d9a20997a974ed6c', 'muslimah@gmail.com', '082209875643', NULL, 'absensi.png', 'JL. JEND SUDIRMAN', 'Nasabah', 'N', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indeks untuk tabel `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indeks untuk tabel `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id_riwayat`);

--
-- Indeks untuk tabel `simpan`
--
ALTER TABLE `simpan`
  ADD PRIMARY KEY (`id_simpanan`);

--
-- Indeks untuk tabel `survei`
--
ALTER TABLE `survei`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `id_riwayat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `simpan`
--
ALTER TABLE `simpan`
  MODIFY `id_simpanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `survei`
--
ALTER TABLE `survei`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
