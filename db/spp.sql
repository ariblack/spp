-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Bulan Mei 2021 pada 11.26
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `activity_log`
--

DROP TABLE IF EXISTS `activity_log`;
CREATE TABLE `activity_log` (
  `activity_log_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `date` varchar(25) NOT NULL,
  `action` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `activity_log`
--

INSERT INTO `activity_log` (`activity_log_id`, `username`, `date`, `action`) VALUES
(1, 'noel.titus', '2016-10-24 09:12:05', 'Add Class Form 6'),
(2, 'noel.titus', '2016-10-24 09:12:58', 'Edit Class Form 6'),
(3, 'noel.titus', '2016-10-24 09:15:07', 'Add Student aaa bbb'),
(4, 'noel.titus', '2016-10-24 09:15:36', 'Updated Student aaa bbb'),
(5, 'noel.titus', '2016-10-24 09:17:50', 'Add Student buel bol'),
(6, 'noel.titus', '2016-10-24 09:23:17', 'Add User abdul.hemedy'),
(7, 'noel.titus', '2021-04-22 09:43:54', 'Add User Ariono.Ariono'),
(8, 'noel.titus', '2021-04-22 09:57:03', 'Deleted  user Ariono.Ariono'),
(9, 'noel.titus', '2021-04-22 10:09:55', 'Add User Ariono.Ariono'),
(10, 'noel.titus', '2021-04-22 10:57:47', 'Add Student Ariono Ariono'),
(11, 'noel.titus', '2021-04-22 10:58:00', 'Deleted Student Ariono Ariono'),
(12, 'noel.titus', '2021-04-22 11:03:08', 'Deleted  user Ariono.Ariono'),
(13, 'noel.titus', '2021-04-24 15:42:56', 'Tambah Siswa Ariono'),
(14, 'noel.titus', '2021-05-03 10:45:19', 'Edit Siswa aaa'),
(15, 'noel.titus', '2021-05-03 10:45:32', 'Edit Siswa buel'),
(16, 'noel.titus', '2021-05-03 10:47:31', 'Tambah Siswa Anton'),
(17, 'noel.titus', '2021-05-03 10:47:50', 'Edit Siswa Anton'),
(18, 'noel.titus', '2021-05-03 10:49:33', 'Menghapus Siswa '),
(19, 'noel.titus', '2021-05-03 11:54:28', 'Tambah Kelas X MM'),
(20, 'noel.titus', '2021-05-03 11:54:46', 'Edit Kelas X MM'),
(21, 'noel.titus', '2021-05-03 11:57:06', 'Tambah Kelas X APH'),
(22, 'noel.titus', '2021-05-03 11:57:21', 'Edit Kelas X MM'),
(23, 'noel.titus', '2021-05-03 12:05:38', 'Edit Kelas X MM'),
(24, 'noel.titus', '2021-05-03 12:05:51', 'Edit Kelas X MM'),
(25, 'noel.titus', '2021-05-03 12:06:03', 'Menghapus Kelas X MM'),
(26, 'noel.titus', '2021-05-05 16:13:31', 'Edit Siswa aaa'),
(27, 'noel.titus', '2021-05-05 16:14:11', 'Edit Siswa aaa'),
(28, 'noel.titus', '2021-05-05 16:29:27', 'Menghapus Siswa '),
(29, 'noel.titus', '2021-05-05 16:30:27', 'Tambah Siswa dsadasdasas'),
(30, 'noel.titus', '2021-05-05 16:30:28', 'Tambah Siswa dsadasdasas'),
(31, 'noel.titus', '2021-05-05 16:30:39', 'Menghapus Siswa ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `aprjun`
--

DROP TABLE IF EXISTS `aprjun`;
CREATE TABLE `aprjun` (
  `aprjun_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `class` varchar(25) NOT NULL,
  `class_fee` int(11) NOT NULL,
  `status` varchar(25) NOT NULL,
  `status_fee` int(11) NOT NULL,
  `fee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `aprjun`
--

INSERT INTO `aprjun` (`aprjun_id`, `student_id`, `class`, `class_fee`, `status`, `status_fee`, `fee`) VALUES
(1, 1, 'Form 6', 250000, 'Setengah', 125000, 0),
(2, 2, 'Form 6', 250000, 'Full', 250000, 250000),
(4, 4, 'Form 6', 250000, 'Full', 250000, 250000),
(6, 6, 'Form 6', 250000, 'Setengah', 125000, 125000),
(7, 7, 'Form 6', 250000, 'Setengah', 125000, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bantuan`
--

DROP TABLE IF EXISTS `bantuan`;
CREATE TABLE `bantuan` (
  `id_bantuan` int(11) NOT NULL,
  `nama_bantuan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bantuan_siswa`
--

DROP TABLE IF EXISTS `bantuan_siswa`;
CREATE TABLE `bantuan_siswa` (
  `id_bantuan_siwa` int(11) NOT NULL,
  `id_dtl_bantuan` int(11) NOT NULL,
  `class_stud_id` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `biaya_siswa`
--

DROP TABLE IF EXISTS `biaya_siswa`;
CREATE TABLE `biaya_siswa` (
  `biaya_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `class` varchar(25) NOT NULL,
  `class_fee` int(11) NOT NULL,
  `status` varchar(25) NOT NULL,
  `status_fee` int(11) NOT NULL,
  `spp` int(11) NOT NULL,
  `pot_spp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `biaya_siswa`
--

INSERT INTO `biaya_siswa` (`biaya_id`, `student_id`, `class`, `class_fee`, `status`, `status_fee`, `spp`, `pot_spp`) VALUES
(1, 1, 'Form 6', 250000, 'Setengah', 125000, 125000, 0),
(2, 2, 'Form 6', 250000, 'Full', 250000, 250000, 0),
(4, 4, 'Form 6', 250000, 'Full', 250000, 250000, 0),
(6, 6, 'Form 6', 250000, 'Setengah', 125000, 125000, 0),
(7, 7, 'Form 6', 250000, 'Setengah', 125000, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `class`
--

DROP TABLE IF EXISTS `class`;
CREATE TABLE `class` (
  `class_id` int(11) NOT NULL,
  `class_name` varchar(30) NOT NULL,
  `fee` int(20) NOT NULL,
  `spp` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `class`
--

INSERT INTO `class` (`class_id`, `class_name`, `fee`, `spp`) VALUES
(1, 'Form 6', 250000, 0),
(3, 'X APH', 1250000, 150000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dtl_bantuan`
--

DROP TABLE IF EXISTS `dtl_bantuan`;
CREATE TABLE `dtl_bantuan` (
  `id_dtl_bantuan` int(11) NOT NULL,
  `id_bantuan` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fee_made`
--

DROP TABLE IF EXISTS `fee_made`;
CREATE TABLE `fee_made` (
  `pay_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `period` varchar(30) NOT NULL,
  `amount` int(11) NOT NULL,
  `date_of_payment` date NOT NULL,
  `receipt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fee_made`
--

INSERT INTO `fee_made` (`pay_id`, `student_id`, `period`, `amount`, `date_of_payment`, `receipt`) VALUES
(1, 2, 'janmar', 250000, '2016-10-24', 23444),
(2, 2, 'aprjun', 250000, '2016-10-24', 90909887),
(3, 1, 'janmar', 125000, '2021-05-05', 1),
(4, 2, 'julsep', 250000, '2021-05-05', 15),
(5, 2, 'octdec', 250000, '2021-05-05', 555),
(6, 4, 'julsep', 250000, '2021-05-05', 55),
(7, 4, 'janmar', 250000, '2021-05-05', 25556),
(8, 4, 'julsep', 250000, '2021-05-05', 15),
(9, 4, 'aprjun', 250000, '2021-05-05', 55555),
(10, 4, 'octdec', 250000, '2021-05-05', 4),
(11, 6, 'janmar', 125000, '2021-05-05', 56556565),
(12, 6, 'aprjun', 125000, '2021-05-05', 2147483647),
(13, 6, 'julsep', 125000, '2021-05-05', 5465645),
(14, 6, 'octdec', 125000, '2021-05-05', 65645);

-- --------------------------------------------------------

--
-- Struktur dari tabel `janmar`
--

DROP TABLE IF EXISTS `janmar`;
CREATE TABLE `janmar` (
  `janmar_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `class` varchar(25) NOT NULL,
  `class_fee` int(11) NOT NULL,
  `status` varchar(25) NOT NULL,
  `status_fee` int(11) NOT NULL,
  `fee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `janmar`
--

INSERT INTO `janmar` (`janmar_id`, `student_id`, `class`, `class_fee`, `status`, `status_fee`, `fee`) VALUES
(1, 1, 'Form 6', 250000, 'Setengah', 125000, 125000),
(2, 2, 'Form 6', 250000, 'Full', 250000, 250000),
(4, 4, 'Form 6', 250000, 'Full', 250000, 250000),
(6, 6, 'Form 6', 250000, 'Setengah', 125000, 125000),
(7, 7, 'Form 6', 250000, 'Setengah', 125000, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `julsep`
--

DROP TABLE IF EXISTS `julsep`;
CREATE TABLE `julsep` (
  `julsep_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `class` varchar(25) NOT NULL,
  `class_fee` int(11) NOT NULL,
  `status` varchar(25) NOT NULL,
  `status_fee` int(11) NOT NULL,
  `fee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `julsep`
--

INSERT INTO `julsep` (`julsep_id`, `student_id`, `class`, `class_fee`, `status`, `status_fee`, `fee`) VALUES
(1, 1, 'Form 6', 250000, 'Setengah', 125000, 0),
(2, 2, 'Form 6', 250000, 'Full', 250000, 250000),
(4, 4, 'Form 6', 250000, 'Full', 250000, 250000),
(6, 6, 'Form 6', 250000, 'Setengah', 125000, 125000),
(7, 7, 'Form 6', 250000, 'Setengah', 125000, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `octdec`
--

DROP TABLE IF EXISTS `octdec`;
CREATE TABLE `octdec` (
  `octdec_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `class` varchar(25) NOT NULL,
  `class_fee` int(11) NOT NULL,
  `status` varchar(25) NOT NULL,
  `status_fee` int(11) NOT NULL,
  `fee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `octdec`
--

INSERT INTO `octdec` (`octdec_id`, `student_id`, `class`, `class_fee`, `status`, `status_fee`, `fee`) VALUES
(1, 1, 'Form 6', 250000, 'Setengah', 125000, 0),
(2, 2, 'Form 6', 250000, 'Full', 250000, 250000),
(4, 4, 'Form 6', 250000, 'Full', 250000, 250000),
(6, 6, 'Form 6', 250000, 'Setengah', 125000, 125000),
(7, 7, 'Form 6', 250000, 'Setengah', 125000, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `payment_made`
--

DROP TABLE IF EXISTS `payment_made`;
CREATE TABLE `payment_made` (
  `pay_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `period` varchar(30) NOT NULL,
  `amount` int(11) NOT NULL,
  `date_of_payment` date NOT NULL,
  `receipt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `payment_made`
--

INSERT INTO `payment_made` (`pay_id`, `student_id`, `period`, `amount`, `date_of_payment`, `receipt`) VALUES
(1, 2, 'janmar', 250000, '2016-10-24', 23444),
(2, 2, 'aprjun', 250000, '2016-10-24', 90909887),
(3, 1, 'janmar', 125000, '2021-05-05', 1),
(4, 2, 'julsep', 250000, '2021-05-05', 15),
(5, 2, 'octdec', 250000, '2021-05-05', 555),
(6, 4, 'julsep', 250000, '2021-05-05', 55),
(7, 4, 'janmar', 250000, '2021-05-05', 25556),
(8, 4, 'julsep', 250000, '2021-05-05', 15),
(9, 4, 'aprjun', 250000, '2021-05-05', 55555),
(10, 4, 'octdec', 250000, '2021-05-05', 4),
(11, 6, 'janmar', 125000, '2021-05-05', 56556565),
(12, 6, 'aprjun', 125000, '2021-05-05', 2147483647),
(13, 6, 'julsep', 125000, '2021-05-05', 5465645),
(14, 6, 'octdec', 125000, '2021-05-05', 65645);

-- --------------------------------------------------------

--
-- Struktur dari tabel `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` enum('Laki-laki','Perempuan') NOT NULL,
  `pob` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `address` text NOT NULL,
  `class` varchar(10) NOT NULL,
  `fathername` varchar(100) NOT NULL,
  `mothername` varchar(100) NOT NULL,
  `guardianname` varchar(100) NOT NULL,
  `tel` varchar(30) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `students`
--

INSERT INTO `students` (`student_id`, `name`, `gender`, `pob`, `dob`, `address`, `class`, `fathername`, `mothername`, `guardianname`, `tel`, `status`) VALUES
(2, 'buel', 'Perempuan', 'Surabaya', '2016-10-26', 'stonetown', 'Form 6', 'bun', 'bol', 'buel', '0717884452', 'Full'),
(4, 'Ariono', 'Laki-laki', 'SURABAYA', '2010-02-14', 'KAPASMADYA			', 'Form 6', 'SUPRI', 'ATUN', '', '0878596676', 'Full'),
(6, 'dsadasdasas', 'Laki-laki', 'sdsds', '2004-03-25', 'csdas', 'Form 6', 'sdsds', 'ssas', 'ssds', '0232323', 'Setengah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `firstname`, `lastname`, `status`) VALUES
(3, 'noel.titus', '54321', 'noel', 'titus', 'Administrator'),
(4, 'abdul.hemedy', '12345', 'abdul', 'hemedy', 'Normal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_log`
--

DROP TABLE IF EXISTS `user_log`;
CREATE TABLE `user_log` (
  `user_log_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `login_date` varchar(50) NOT NULL,
  `logout_date` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_log`
--

INSERT INTO `user_log` (`user_log_id`, `username`, `login_date`, `logout_date`, `user_id`) VALUES
(1, 'noel.titus', '2016-10-24 09:10:07', '2021-05-05 16:33:48', 3),
(2, 'noel.titus', '2016-10-24 09:11:10', '2021-05-05 16:33:48', 3),
(3, 'noel.titus', '2016-10-24 09:23:04', '2021-05-05 16:33:48', 3),
(4, 'abdul.hemedy', '2016-10-24 09:23:30', '2016-10-24 09:36:55', 4),
(5, 'noel.titus', '2021-04-22 09:16:48', '2021-05-05 16:33:48', 3),
(6, 'noel.titus', '2021-04-23 15:33:24', '2021-05-05 16:33:48', 3),
(7, 'noel.titus', '2021-04-24 13:40:33', '2021-05-05 16:33:48', 3),
(8, 'noel.titus', '2021-05-03 10:44:52', '2021-05-05 16:33:48', 3),
(9, 'noel.titus', '2021-05-21 16:07:52', '', 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`activity_log_id`);

--
-- Indeks untuk tabel `aprjun`
--
ALTER TABLE `aprjun`
  ADD PRIMARY KEY (`aprjun_id`);

--
-- Indeks untuk tabel `bantuan`
--
ALTER TABLE `bantuan`
  ADD PRIMARY KEY (`id_bantuan`);

--
-- Indeks untuk tabel `bantuan_siswa`
--
ALTER TABLE `bantuan_siswa`
  ADD PRIMARY KEY (`id_bantuan_siwa`),
  ADD KEY `bantuan_siswa` (`id_dtl_bantuan`),
  ADD KEY `class_stud_idx` (`class_stud_id`);

--
-- Indeks untuk tabel `biaya_siswa`
--
ALTER TABLE `biaya_siswa`
  ADD PRIMARY KEY (`biaya_id`);

--
-- Indeks untuk tabel `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indeks untuk tabel `dtl_bantuan`
--
ALTER TABLE `dtl_bantuan`
  ADD PRIMARY KEY (`id_dtl_bantuan`),
  ADD KEY `dtl_bantuan` (`id_bantuan`);

--
-- Indeks untuk tabel `fee_made`
--
ALTER TABLE `fee_made`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indeks untuk tabel `janmar`
--
ALTER TABLE `janmar`
  ADD PRIMARY KEY (`janmar_id`);

--
-- Indeks untuk tabel `julsep`
--
ALTER TABLE `julsep`
  ADD PRIMARY KEY (`julsep_id`);

--
-- Indeks untuk tabel `octdec`
--
ALTER TABLE `octdec`
  ADD PRIMARY KEY (`octdec_id`);

--
-- Indeks untuk tabel `payment_made`
--
ALTER TABLE `payment_made`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indeks untuk tabel `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `class` (`class`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indeks untuk tabel `user_log`
--
ALTER TABLE `user_log`
  ADD PRIMARY KEY (`user_log_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `activity_log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `aprjun`
--
ALTER TABLE `aprjun`
  MODIFY `aprjun_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `bantuan`
--
ALTER TABLE `bantuan`
  MODIFY `id_bantuan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `bantuan_siswa`
--
ALTER TABLE `bantuan_siswa`
  MODIFY `id_bantuan_siwa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `biaya_siswa`
--
ALTER TABLE `biaya_siswa`
  MODIFY `biaya_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `dtl_bantuan`
--
ALTER TABLE `dtl_bantuan`
  MODIFY `id_dtl_bantuan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `fee_made`
--
ALTER TABLE `fee_made`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `janmar`
--
ALTER TABLE `janmar`
  MODIFY `janmar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `julsep`
--
ALTER TABLE `julsep`
  MODIFY `julsep_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `octdec`
--
ALTER TABLE `octdec`
  MODIFY `octdec_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `payment_made`
--
ALTER TABLE `payment_made`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user_log`
--
ALTER TABLE `user_log`
  MODIFY `user_log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
