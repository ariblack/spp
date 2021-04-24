-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Apr 2021 pada 10.48
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
(13, 'noel.titus', '2021-04-24 15:42:56', 'Tambah Siswa Ariono');

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
(1, 1, 'Form 6', 250000, 'half', 125000, 0),
(2, 2, 'Form 6', 250000, 'paying', 250000, 250000),
(3, 3, 'Form 6', 250000, 'paying', 250000, 0),
(4, 4, 'Form 6', 250000, 'Full', 250000, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `class`
--

DROP TABLE IF EXISTS `class`;
CREATE TABLE `class` (
  `class_id` int(11) NOT NULL,
  `class_name` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `fee` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `class`
--

INSERT INTO `class` (`class_id`, `class_name`, `category`, `fee`) VALUES
(1, 'Form 6', 'Secondary', 250000);

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
(1, 1, 'Form 6', 250000, 'half', 125000, 0),
(2, 2, 'Form 6', 250000, 'paying', 250000, 250000),
(3, 3, 'Form 6', 250000, 'paying', 250000, 0),
(4, 4, 'Form 6', 250000, 'Full', 250000, 0);

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
(1, 1, 'Form 6', 250000, 'half', 125000, 0),
(2, 2, 'Form 6', 250000, 'paying', 250000, 0),
(3, 3, 'Form 6', 250000, 'paying', 250000, 0),
(4, 4, 'Form 6', 250000, 'Full', 250000, 0);

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
(1, 1, 'Form 6', 250000, 'half', 125000, 0),
(2, 2, 'Form 6', 250000, 'paying', 250000, 0),
(3, 3, 'Form 6', 250000, 'paying', 250000, 0),
(4, 4, 'Form 6', 250000, 'Full', 250000, 0);

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
(2, 2, 'aprjun', 250000, '2016-10-24', 90909887);

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
(1, 'aaa', 'Laki-laki', '', '2016-10-25', 'bububu', 'Form 6', 'oplkk', 'jjj', 'rfrf', '0789554433', 'half'),
(2, 'buel', 'Perempuan', '', '2016-10-26', 'stonetown', 'Form 6', 'bun', 'bol', 'buel', '0717884452', 'paying'),
(4, 'Ariono', 'Laki-laki', 'SURABAYA', '2010-02-14', 'KAPASMADYA			', 'Form 6', 'SUPRI', 'ATUN', '', '0878596676', 'Full');

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
(1, 'noel.titus', '2016-10-24 09:10:07', '2021-04-24 15:48:17', 3),
(2, 'noel.titus', '2016-10-24 09:11:10', '2021-04-24 15:48:17', 3),
(3, 'noel.titus', '2016-10-24 09:23:04', '2021-04-24 15:48:17', 3),
(4, 'abdul.hemedy', '2016-10-24 09:23:30', '2016-10-24 09:36:55', 4),
(5, 'noel.titus', '2021-04-22 09:16:48', '2021-04-24 15:48:17', 3),
(6, 'noel.titus', '2021-04-23 15:33:24', '2021-04-24 15:48:17', 3),
(7, 'noel.titus', '2021-04-24 13:40:33', '2021-04-24 15:48:17', 3);

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
-- Indeks untuk tabel `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

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
  MODIFY `activity_log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `aprjun`
--
ALTER TABLE `aprjun`
  MODIFY `aprjun_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `janmar`
--
ALTER TABLE `janmar`
  MODIFY `janmar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `julsep`
--
ALTER TABLE `julsep`
  MODIFY `julsep_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `octdec`
--
ALTER TABLE `octdec`
  MODIFY `octdec_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `payment_made`
--
ALTER TABLE `payment_made`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user_log`
--
ALTER TABLE `user_log`
  MODIFY `user_log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
