-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2022 at 10:32 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pmi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `email_admin` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `foto` text NOT NULL,
  `hak_akses` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `email_admin`, `password`, `telepon`, `foto`, `hak_akses`, `status`) VALUES
(1, 'Dan Giri', 'danngriel@gmail.com', 'tes123', '087859935894', '', 1, 1),
(2, 'Admin', 'admin@gmail.com', 'admin', '087850123132', '', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id_agenda` int(11) NOT NULL,
  `nama_agenda` varchar(100) NOT NULL,
  `tgl_agenda` date NOT NULL,
  `lokasi_agenda` varchar(100) NOT NULL,
  `jam_buka` time NOT NULL,
  `jam_tutup` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id_agenda`, `nama_agenda`, `tgl_agenda`, `lokasi_agenda`, `jam_buka`, `jam_tutup`) VALUES
(1, 'Seminar Protokol Kesehatan', '2022-06-30', 'Rumah Sakit Ngudi Waluyo Malang', '13:00:00', '17:00:00'),
(2, 'Cek Kesehatan Lambung Gratis', '2022-07-02', 'Rumah Sakit Persada', '10:00:00', '14:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `darah`
--

CREATE TABLE `darah` (
  `id_darah` int(11) NOT NULL,
  `jenis_darah` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `darah`
--

INSERT INTO `darah` (`id_darah`, `jenis_darah`) VALUES
(1, 'AHF'),
(5, 'FFP');

-- --------------------------------------------------------

--
-- Table structure for table `detail_darah`
--

CREATE TABLE `detail_darah` (
  `id_detail_darah` int(11) NOT NULL,
  `id_darah` int(11) NOT NULL,
  `id_jenis_darah` int(11) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_darah`
--

INSERT INTO `detail_darah` (`id_detail_darah`, `id_darah`, `id_jenis_darah`, `stok`) VALUES
(5, 1, 1, 10),
(6, 1, 3, 9),
(7, 1, 2, 6),
(8, 1, 4, 4),
(9, 5, 1, 0),
(10, 5, 3, 0),
(11, 5, 2, 0),
(12, 5, 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id_informasi` int(11) NOT NULL,
  `judul_informasi` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id_informasi`, `judul_informasi`, `deskripsi`) VALUES
(1, 'Informasi Manfaat Donor', '1. Menurunkan risiko terkena penyakit jantung dan pembuluh darah Donor darah secara teratur diketahui dapat menurunkan kekentalan darah. Kekentalan darah merupakan salah satu faktor yang berperan dalam meningkatkan risiko terkena penyakit jantung.');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_mobil`
--

CREATE TABLE `jadwal_mobil` (
  `id_mobil` int(11) NOT NULL,
  `jam_buka` time NOT NULL,
  `jam_tutup` time NOT NULL,
  `jadwal` date NOT NULL,
  `lokasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal_mobil`
--

INSERT INTO `jadwal_mobil` (`id_mobil`, `jam_buka`, `jam_tutup`, `jadwal`, `lokasi`) VALUES
(1, '13:00:00', '17:00:00', '2022-06-30', 'Taman Anggrek'),
(3, '10:40:00', '14:30:00', '2022-07-06', 'Plaza Araya (Samping Burger King)');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_darah`
--

CREATE TABLE `jenis_darah` (
  `id_jenis_darah` int(11) NOT NULL,
  `nama_jenis_darah` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_darah`
--

INSERT INTO `jenis_darah` (`id_jenis_darah`, `nama_jenis_darah`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'AB'),
(4, 'O');

-- --------------------------------------------------------

--
-- Table structure for table `pendonor`
--

CREATE TABLE `pendonor` (
  `id_pendonor` int(11) NOT NULL,
  `nik_pendonor` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_pendonor` varchar(100) NOT NULL,
  `foto_pendonor` text NOT NULL,
  `umur_pendonor` int(11) NOT NULL,
  `id_jenis_darah` int(11) NOT NULL,
  `alamat_pendonor` varchar(150) NOT NULL,
  `telepon_pendonor` varchar(20) NOT NULL,
  `donor_terakhir` date NOT NULL,
  `donor_selanjutnya` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(11) NOT NULL,
  `judul_profil` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id_profil`, `judul_profil`, `deskripsi`) VALUES
(1, 'Profil', 'Pada th.1955 PMI bertempat di Jl.Embong Ploso 7 – 9 dan dr.Payma diganti oleh dr.Suharyono. Dr. Payma meninggal dunia di negeri Belanda waktu menuntut ilmu. Memasuki th.1972 dr. Suharyono diganti dr.Alfian dan sesudah dilakukan perluasan gedung diberi nama : Dinas Transfusi Darah. Lokasi ini diperluas areanya dengan menguasai Jl.Embong Ploso no 11 – 15. Dengan perluasan ini: kegiatan donor darah ditempatkan Jl.Embong Ploso 7–9 dan untuk ruang Laboratorium di Jl.Embong Ploso 11–15.'),
(2, 'Visi', 'Siap dengan darah yang aman, cukup dan setiap saat dengan Pelayanan Prima mengikuti Perkembangan Teknologi Mutakhir mengacu Managemen Mutu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indexes for table `darah`
--
ALTER TABLE `darah`
  ADD PRIMARY KEY (`id_darah`);

--
-- Indexes for table `detail_darah`
--
ALTER TABLE `detail_darah`
  ADD PRIMARY KEY (`id_detail_darah`),
  ADD KEY `id_darah` (`id_darah`) USING BTREE,
  ADD KEY `id_jenis_darah` (`id_jenis_darah`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indexes for table `jadwal_mobil`
--
ALTER TABLE `jadwal_mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `jenis_darah`
--
ALTER TABLE `jenis_darah`
  ADD PRIMARY KEY (`id_jenis_darah`);

--
-- Indexes for table `pendonor`
--
ALTER TABLE `pendonor`
  ADD PRIMARY KEY (`id_pendonor`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id_agenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `darah`
--
ALTER TABLE `darah`
  MODIFY `id_darah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `detail_darah`
--
ALTER TABLE `detail_darah`
  MODIFY `id_detail_darah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jadwal_mobil`
--
ALTER TABLE `jadwal_mobil`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jenis_darah`
--
ALTER TABLE `jenis_darah`
  MODIFY `id_jenis_darah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pendonor`
--
ALTER TABLE `pendonor`
  MODIFY `id_pendonor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_darah`
--
ALTER TABLE `detail_darah`
  ADD CONSTRAINT `detail_darah_ibfk_1` FOREIGN KEY (`id_darah`) REFERENCES `darah` (`id_darah`),
  ADD CONSTRAINT `detail_darah_ibfk_2` FOREIGN KEY (`id_jenis_darah`) REFERENCES `jenis_darah` (`id_jenis_darah`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
