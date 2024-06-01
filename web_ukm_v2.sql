-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jun 01, 2024 at 06:10 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_ukm_v2`
--

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `id_divisi` int(11) NOT NULL,
  `nama_divisi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`id_divisi`, `nama_divisi`) VALUES
(1, 'Media Kreatif'),
(2, 'Bendahara');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(1, 'Koordinator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `join_ukm`
--

CREATE TABLE `join_ukm` (
  `id_user` int(11) NOT NULL,
  `id_ukm` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `id_divisi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `join_ukm`
--

INSERT INTO `join_ukm` (`id_user`, `id_ukm`, `id_jabatan`, `id_divisi`) VALUES
(1, 1, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
(1, 'Informatika'),
(2, 'Culinary Arts');

-- --------------------------------------------------------

--
-- Table structure for table `list_anggota`
--

CREATE TABLE `list_anggota` (
  `id_anggota` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `nim` char(10) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `id_jurusan` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_divisi` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `list_ukm`
--

CREATE TABLE `list_ukm` (
  `id_ukm` int(11) NOT NULL,
  `nama_ukm` varchar(100) NOT NULL,
  `deskripsi_ukm` text NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `list_ukm`
--

INSERT INTO `list_ukm` (`id_ukm`, `nama_ukm`, `deskripsi_ukm`, `foto`) VALUES
(1, 'Futsal', 'Aku menggelindingkan bola, aku digelindingkan bola, Aku menggelindingkan bola, aku digelindingkan bola, Aku menggelindingkan bola, aku digelindingkan bola, Aku menggelindingkan bola, aku digelindingkan bola', 'assets\\img\\icon_ukm\\ukm_futsal.jpeg'),
(2, 'Badminton', 'UKM Badminton, atau singkatan dari Unit Kegiatan Mahasiswa Badminton, adalah salah satu organisasi atau kelompok kegiatan mahasiswa di lingkungan perguruan tinggi yang memiliki fokus pada olahraga badminton. UKM Badminton biasanya merupakan wadah bagi para mahasiswa yang memiliki minat dan bakat dalam olahraga badminton untuk berkumpul, berlatih, dan berkompetisi.', 'assets\\img\\icon_ukm\\Badminton.jpeg'),
(3, 'Android Pradita', ' UKM Android Pradita dapat diartikan sebagai unit kegiatan mahasiswa yang fokus pada pengembangan keterampilan dan pengetahuan dalam pengembangan aplikasi berbasis Android. Berikut adalah deskripsi umum yang mungkin mencakup aspek-aspek tertentu:', 'assets\\img\\icon_ukm\\Android pradita.jpeg'),
(4, 'Paduan Suara', '\r\nUKM Paduan Suara adalah unit kegiatan mahasiswa di lingkungan perguruan tinggi yang memiliki fokus pada seni vokal, khususnya dalam bentuk paduan suara atau coral. Berikut adalah deskripsi umum tentang UKM Paduan Suara:', 'assets\\img\\icon_ukm\\Vidya gita paduan suara.jpeg'),
(5, 'Modern Dance', 'UKM Modern Dance (Unit Kegiatan Mahasiswa Modern Dance) adalah organisasi mahasiswa di lingkungan perguruan tinggi yang fokus pada pengembangan keterampilan dan ekspresi seni tari modern. Berikut adalah deskripsi umum tentang UKM Modern Dance:', 'assets\\img\\icon_ukm\\Virtudes.jpeg'),
(6, 'Volley Ball', '\r\nUKM Volleyball (Unit Kegiatan Mahasiswa Volleyball) adalah organisasi mahasiswa di lingkungan perguruan tinggi yang berfokus pada pengembangan keterampilan dan partisipasi dalam olahraga voli. ', 'assets\\img\\icon_ukm\\Volleyball.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `list_user`
--

CREATE TABLE `list_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `nim` char(10) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `id_jurusan` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `list_user`
--

INSERT INTO `list_user` (`id_user`, `nama_user`, `nim`, `email`, `no_hp`, `id_jurusan`, `password`, `role`) VALUES
(1, 'Yohanes Kenny', '2210101001', 'yohanes.kenny@student.pradita.ac.id', '081318880920', 1, '1234', 'admin'),
(2, 'Julian Yang', '2210101019', 'julian.yang@student.pradita.ac.id', NULL, 1, '1234', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `join_ukm`
--
ALTER TABLE `join_ukm`
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_ukm` (`id_ukm`),
  ADD KEY `id_jabatan` (`id_jabatan`),
  ADD KEY `id_divisi` (`id_divisi`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `list_anggota`
--
ALTER TABLE `list_anggota`
  ADD PRIMARY KEY (`id_anggota`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id_jurusan_1` (`id_jurusan`),
  ADD KEY `id_divisi_1` (`id_divisi`),
  ADD KEY `id_jabatan_1` (`id_jabatan`);

--
-- Indexes for table `list_ukm`
--
ALTER TABLE `list_ukm`
  ADD PRIMARY KEY (`id_ukm`);

--
-- Indexes for table `list_user`
--
ALTER TABLE `list_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id_jurusan` (`id_jurusan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id_divisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `list_anggota`
--
ALTER TABLE `list_anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `list_ukm`
--
ALTER TABLE `list_ukm`
  MODIFY `id_ukm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `list_user`
--
ALTER TABLE `list_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `join_ukm`
--
ALTER TABLE `join_ukm`
  ADD CONSTRAINT `id_divisi` FOREIGN KEY (`id_divisi`) REFERENCES `divisi` (`id_divisi`),
  ADD CONSTRAINT `id_jabatan` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_jabatan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_ukm` FOREIGN KEY (`id_ukm`) REFERENCES `list_ukm` (`id_ukm`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `list_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `list_anggota`
--
ALTER TABLE `list_anggota`
  ADD CONSTRAINT `id_divisi_1` FOREIGN KEY (`id_divisi`) REFERENCES `divisi` (`id_divisi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_jabatan_1` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_jabatan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_jurusan_1` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `list_user`
--
ALTER TABLE `list_user`
  ADD CONSTRAINT `id_jurusan` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
