-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2020 at 05:37 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aam_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `kalender_ceramah`
--

CREATE TABLE `kalender_ceramah` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `nama_lembaga` varchar(255) NOT NULL,
  `waktu` varchar(255) NOT NULL,
  `lokasi` text NOT NULL,
  `jenis_acara` varchar(255) NOT NULL,
  `sifat_acara` varchar(128) NOT NULL,
  `jml_pria` int(11) NOT NULL,
  `jml_wanita` int(11) NOT NULL,
  `tamu` varchar(255) NOT NULL,
  `karakteristik` varchar(255) NOT NULL,
  `saran_tema` varchar(255) NOT NULL,
  `tanggal_mulai` datetime NOT NULL,
  `tanggal_akhir` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kalender_ceramah`
--

INSERT INTO `kalender_ceramah` (`id`, `nama`, `telp`, `nama_lembaga`, `waktu`, `lokasi`, `jenis_acara`, `sifat_acara`, `jml_pria`, `jml_wanita`, `tamu`, `karakteristik`, `saran_tema`, `tanggal_mulai`, `tanggal_akhir`) VALUES
(21, 'Mahdy', '089514215664', 'DKM Masjid', 'Pagi', 'Melong Raya 05/25 Melong Cimahi Selatan CImahi Jawa Barat Indonesia', 'Pengajian Umum', 'Internal', 10, 20, '', '', 'Cara supaya doa mustajab', '2020-01-03 00:00:00', '2020-01-04 00:00:00'),
(34, 'Mahdy', '089514215664', 'DKM Masjid', 'Malam', 'Melong Raya 05/25 MelongCimahi Selatan CImahi Jawa Barat Indonesia', 'Pengajian Umum', 'Terbuka', 10, 20, 'Dosen', 'Anak Muda', 'Waktu dalam perspektif Al-Quran', '2020-01-23 00:00:00', '2020-01-24 00:00:00'),
(35, 'Mahdy', '089514215664', 'DKM Masjid', 'Pagi', 'Melong Raya 05/25 MelongCimahi Selatan CImahi Jawa Barat Indonesia', 'Kuliah', 'Terbuka', 10, 20, 'Dosen', 'Anak Muda', 'Membangun rumah tangga sakinah', '2020-01-01 00:00:00', '2020-01-02 00:00:00'),
(36, 'Mahdy', '089514215664', 'DKM Masjid', 'Sore', 'Melong Raya 05/25 MelongCimahi Selatan CImahi Jawa Barat Indonesia', 'Seminar', 'Terbuka', 10, 20, 'Dosen', 'Anak Muda', 'Waktu dalam perspektif Al-Quran', '2020-01-25 00:00:00', '2020-01-26 00:00:00'),
(37, 'Mahdy', '089514215664', 'DKM Masjid', 'Siang', 'Melong Raya 05/25 MelongCimahi Selatan CImahi Jawa Barat Indonesia', 'Pengajian Umum', 'Internal', 10, 20, 'Dosen', 'Anak Muda', 'Waktu dalam perspektif Al-Quran', '2020-01-31 00:00:00', '2020-02-01 00:00:00'),
(38, 'Agung', '089514215664', 'DKM Masjid', 'Siang', 'Melong Raya 05/25 MelongCimahi Selatan CImahi Jawa Barat Indonesia', 'Kuliah', 'Internal', 10, 20, 'Dosen', 'Anak Muda', 'Bersatu dalam keberagaman', '2020-01-24 00:00:00', '2020-01-25 00:00:00'),
(39, 'Mahdy', '089514215664', 'DKM Masjid', 'Malam', 'Melong Raya 05/25 MelongCimahi Selatan CImahi Jawa Barat Indonesia', 'Seminar', 'Terbuka', 10, 20, 'Dosen', 'Anak Muda (Mahasiswa)', 'Bersatu dalam keberagaman', '2020-01-30 00:00:00', '2020-01-31 00:00:00'),
(40, 'Mahdy Khairudin', '089514215664', 'DKM Masjid', 'Sore', 'Jl. Melong Raya No. 99 RT/RW 05/25 MelongCimahi Selatan CImahi Jawa Barat Indonesia', 'Seminar', 'Terbuka', 10, 20, 'Dosen', 'Anak Muda (Mahasiswa)', 'Bersatu dalam keberagaman', '2020-01-10 00:00:00', '2020-01-11 00:00:00'),
(41, 'Mahdy Khairudin', '089514215664', 'DKM Masjid', 'Sore', 'Jl. Melong Raya No. 99 RT/RW 05/25 MelongCimahi Selatan CImahi Jawa Barat Indonesia', 'Seminar', 'Terbuka', 10, 20, 'Dosen', 'Anak Muda (Mahasiswa)', 'Bersatu dalam keberagaman', '2020-01-10 00:00:00', '2020-01-11 00:00:00'),
(42, 'Mahdy', '089514215664', 'DKM Masjid', 'Pagi', 'Melong Raya RT/RW 05/25 Kel. Melong Kec. Cimahi Selatan Kota CImahi Jawa Barat, Indonesia', 'Pengajian Umum', 'Internal', 10, 20, 'Dosen', 'Anak Muda', 'Waktu dalam perspektif Al-Quran', '2020-01-16 00:00:00', '2020-01-17 00:00:00'),
(43, 'Mahdy Khairudin', '089514215664', 'DKM Masjid', 'Pagi', 'Jl. Melong Raya No. 99 RT/RW 05/25 Kel. Melong Kec. Cimahi Selatan Kota CImahi Jawa Barat, Indonesia', 'Kuliah', 'Terbuka', 10, 20, 'Dosen', 'Anak Muda (Mahasiswa)', 'Cara supaya doa mustajab', '2020-01-29 00:00:00', '2020-01-30 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(8, 'Mahdy', 'mr.mahdy5@gmail.com', 'default.jpg', '$2y$10$WKkUPacacIvun3zT93TvTObZ8OKmiLdYsDeu162tlYv7niP8hJNY2', 2, 1, 1579666479);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kalender_ceramah`
--
ALTER TABLE `kalender_ceramah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kalender_ceramah`
--
ALTER TABLE `kalender_ceramah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
