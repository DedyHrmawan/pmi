-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Agu 2022 pada 16.55
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

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
-- Struktur dari tabel `admin`
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
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `email_admin`, `password`, `telepon`, `foto`, `hak_akses`, `status`) VALUES
(1, 'Dan Giri', 'danngriel@gmail.com', 'tes123', '087859935894', '', 1, 1),
(2, 'Admin', 'admin@gmail.com', 'admin', '087850123132', '', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `agenda`
--

CREATE TABLE `agenda` (
  `id_agenda` int(11) NOT NULL,
  `nama_agenda` varchar(100) NOT NULL,
  `tgl_agenda` date NOT NULL,
  `lokasi_agenda` varchar(100) NOT NULL,
  `jam_buka` time NOT NULL,
  `jam_tutup` time NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `agenda`
--

INSERT INTO `agenda` (`id_agenda`, `nama_agenda`, `tgl_agenda`, `lokasi_agenda`, `jam_buka`, `jam_tutup`, `status`) VALUES
(1, 'Seminar Protokol Kesehatan', '2022-06-30', 'Rumah Sakit Ngudi Waluyo Malang', '13:00:00', '17:00:00', 0),
(2, 'Cek Kesehatan Lambung Gratis', '2022-07-02', 'Rumah Sakit Persada', '10:00:00', '14:30:00', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(100) NOT NULL,
  `tanggal_berita` date NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` text NOT NULL,
  `status` int(11) NOT NULL,
  `penulis_berita` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `tanggal_berita`, `deskripsi`, `gambar`, `status`, `penulis_berita`) VALUES
(2, 'PMI KOTA SURAKARTA AJAK PENDONOR BERBAGI MOMENT DONOR DARAH', '2022-08-23', '<p>PMI KOTA SURAKARTA AJAK PENDONOR BERBAGI MOMENT DONOR DARAH</p>', 'http://localhost/pmi/assets/images/1b0ff079ac308b1a1183b1d53e16022e.jpeg', 1, 'Admin'),
(4, 'PERINGATI HARI DONOR', '2022-08-23', '<p><span style=\"color: #181c32; font-family: Poppins, Helvetica, sans-serif; font-size: 14.95px; background-color: #ffffff;\">Palang Merah Indonesia Kota Administrasi Jakarta Selatan (PMI Jaksel) melaksanakan pelantikan 8 kepengurusan PMI Tingkat Kecamatan se-Jakarta Selatan. Pelantikan bertempat di Ruang Pola Kantor Walikota Jakarta Selatan, Jalan Prapanca Raya, Kebayoran Baru, Jakarta Selatan, Senin (27/6/2022).</span></p>', 'http://localhost/pmi/assets/images/9b11038f21096900e4c16a5599300ed5.jpg', 1, 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `carousel`
--

CREATE TABLE `carousel` (
  `id_carousel` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `carousel`
--

INSERT INTO `carousel` (`id_carousel`, `gambar`, `status`) VALUES
(1, 'http://localhost/pmi/assets/images/3b68cd27bf63a25558cb954c0378302d.jpg', 1),
(3, 'http://localhost/pmi/assets/images/fbb5211b62ee54ced8bf838d44258d75.jpeg', 1),
(5, 'http://localhost/pmi/assets/images/80fc3c1a796f897eed37a2759c60c13f.jpg', 1),
(6, 'http://localhost/pmi/assets/images/582972b0d5f71a149b6f57f61643c13a.jpg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `darah`
--

CREATE TABLE `darah` (
  `id_darah` int(11) NOT NULL,
  `jenis_darah` varchar(20) NOT NULL,
  `last_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `darah`
--

INSERT INTO `darah` (`id_darah`, `jenis_darah`, `last_updated`) VALUES
(1, 'AHF', '2022-07-05 11:46:23'),
(9, 'Plasma Konvalesen', '2022-07-05 12:16:51'),
(10, 'FFP', '2022-07-12 08:28:25'),
(11, 'PCR', '2022-07-12 08:28:41'),
(12, 'PRC', '2022-07-12 08:28:48'),
(13, 'TC', '2022-07-12 08:28:55'),
(14, 'WB', '2022-07-12 08:28:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_darah`
--

CREATE TABLE `detail_darah` (
  `id_detail_darah` int(11) NOT NULL,
  `id_darah` int(11) NOT NULL,
  `id_jenis_darah` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_darah`
--

INSERT INTO `detail_darah` (`id_detail_darah`, `id_darah`, `id_jenis_darah`, `stok`, `updated_at`) VALUES
(5, 1, 1, 10, '2022-07-12 05:28:06'),
(6, 1, 3, 31, '2022-07-12 05:28:06'),
(7, 1, 2, 32, '2022-07-12 05:28:06'),
(8, 1, 4, 4, '2022-07-12 05:28:06'),
(21, 9, 1, 10, '2022-07-12 05:28:06'),
(22, 9, 2, 13, '2022-07-12 05:28:06'),
(23, 9, 3, 35, '2022-07-12 05:28:50'),
(24, 9, 4, 33, '2022-07-12 05:28:06'),
(25, 10, 1, 15, '2022-07-12 08:29:19'),
(26, 10, 2, 12, '2022-07-12 08:29:21'),
(27, 10, 3, 15, '2022-07-12 08:29:24'),
(28, 10, 4, 32, '2022-07-12 08:29:29'),
(29, 11, 1, 12, '2022-07-12 08:29:33'),
(30, 11, 2, 15, '2022-07-12 08:29:36'),
(31, 11, 3, 16, '2022-07-12 08:29:38'),
(32, 11, 4, 23, '2022-07-12 08:29:40'),
(33, 12, 1, 53, '2022-07-12 08:29:43'),
(34, 12, 2, 22, '2022-07-12 08:29:45'),
(35, 12, 3, 17, '2022-07-12 08:29:48'),
(36, 12, 4, 8, '2022-07-12 08:29:53'),
(37, 13, 1, 25, '2022-07-12 08:29:56'),
(38, 13, 2, 2, '2022-07-12 08:29:59'),
(39, 13, 3, 0, '2022-07-12 08:28:56'),
(40, 13, 4, 31, '2022-07-12 08:30:03'),
(41, 14, 1, 27, '2022-07-12 08:30:07'),
(42, 14, 2, 13, '2022-07-12 08:30:34'),
(43, 14, 3, 26, '2022-07-12 08:30:55'),
(44, 14, 4, 42, '2022-07-12 08:30:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi`
--

CREATE TABLE `informasi` (
  `id_informasi` int(11) NOT NULL,
  `judul_informasi` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `informasi`
--

INSERT INTO `informasi` (`id_informasi`, `judul_informasi`, `deskripsi`, `status`) VALUES
(1, 'Hal yang Perlu Diperhatikan Sesudah Donor Darah', '<p style=\"font-size: 16px; margin: 10px 0px; color: #3b3738; font-family: LatoWeb, sans-serif;\">Agar tetap aman setelah mendonorkan darah, berikut ini adalah beberapa hal yang perlu Anda perhatikan dan lakukan:</p>\r\n<ul style=\"color: #3b3738; font-family: LatoWeb, sans-serif; font-size: 16px;\">\r\n<li>Jangan melepas plester pada area bekas tusukan jarum setidaknya selama 6 jam setelah donor darah.</li>\r\n<li>Hindari merokok paling tidak selama 2 jam setelah donor darah.</li>\r\n<li>Hindari mengangkat barang-barang berat.</li>\r\n<li>Perbanyak minum air putih.</li>\r\n<li>Konsumsi makanan yang mengandung&nbsp;<a style=\"text-decoration-line: none; color: #3570d2;\" href=\"https://www.alodokter.com/5-alasan-tubuh-anda-membutuhkan-zat-besi\" target=\"_blank\" rel=\"noopener\">zat besi</a>, seperti daging dan kacang-kacangan, atau suplemen zat besi.</li>\r\n</ul>\r\n<p style=\"font-size: 16px; margin: 10px 0px; color: #3b3738; font-family: LatoWeb, sans-serif;\">Pada dasarnya donor darah adalah tindakan medis yang aman dilakukan. Kebanyakan orang tidak merasakan efek samping atau keluhan yang berarti setelah melakukan&nbsp;<a style=\"text-decoration-line: none; color: #3570d2;\" href=\"https://www.alodokter.com/berbagai-manfaat-donor-darah-untuk-kesehatan\" target=\"_blank\" rel=\"noopener\">donor darah</a>.</p>\r\n<p style=\"font-size: 16px; margin: 10px 0px; color: #3b3738; font-family: LatoWeb, sans-serif;\">Namun, terkadang donor darah bisa menimbulkan efek samping, seperti rasa nyeri ringan atau memar di lokasi suntikan dan pusing. Apabila merasakan keluhan tertentu setelah mendonorkan darah, Anda bisa berkonsultasi ke&nbsp;<a style=\"text-decoration-line: none; color: #3570d2;\" href=\"https://www.alodokter.com/cari-dokter/dokter-umum\" target=\"_blank\" rel=\"noopener\">dokter</a>&nbsp;untuk mendapatkan penanganan.</p>', 1),
(2, 'Syarat Donor Darah', '<p style=\"font-size: 16px; margin: 10px 0px; color: #3b3738; font-family: LatoWeb, sans-serif;\">Berikut ini adalah beberapa persyaratan dasar yang harus dipenuhi oleh orang yang hendak melakukan donor darah:</p>\r\n<ul style=\"color: #3b3738; font-family: LatoWeb, sans-serif; font-size: 16px;\">\r\n<li>Berusia 17&ndash;70 tahun</li>\r\n<li>Berat badan minimal 45 kg</li>\r\n<li>Nilai tekanan darah normal atau berkisar antara 90/60&ndash;120/80 mmHg</li>\r\n<li>Kadar hemoglobin sekitar 12,5-17 g/dL dan tidak lebih dari 20 g/dL</li>\r\n<li>Jarak waktu donor darah terakhir minimal 3 bulan atau 12 minggu, jika sebelumnya sudah pernah menjadi pendonor darah</li>\r\n<li>Tidak sedang dalam kondisi sakit atau memiliki keluhan tertentu, seperti lemas atau demam</li>\r\n<li><a style=\"text-decoration-line: none; color: #3570d2;\" href=\"https://www.alodokter.com/donor-darah-saat-hamil-amankah\" target=\"_blank\" rel=\"noopener\">Tidak sedang hamil</a>&nbsp;atau menyusui</li>\r\n<li>Bersedia menyumbangkan darah secara sukarela dengan menyetujui&nbsp;<em><a style=\"text-decoration-line: none; color: #3570d2;\" href=\"https://www.alodokter.com/inilah-pengertian-informed-consent-yang-penting-untuk-diketahui\" target=\"_blank\" rel=\"noopener\">informed consent</a></em></li>\r\n</ul>\r\n<p style=\"font-size: 16px; margin: 10px 0px; color: #3b3738; font-family: LatoWeb, sans-serif;\">Pendonor darah juga harus memiliki kondisi kesehatan yang baik dan tidak memiliki penyakit tertentu yang dapat menular melalui darah. Selain itu, ada beberapa kondisi lain yang &nbsp;tidak boleh dimiliki oleh seorang pendonor darah, di antaranya:</p>\r\n<ul style=\"color: #3b3738; font-family: LatoWeb, sans-serif; font-size: 16px;\">\r\n<li>Menderita penyakit tertentu, seperti diabetes, kanker, penyakit jantung, masalah paru-paru, atau gangguan fungsi ginjal</li>\r\n<li>Memiliki tekanan darah tinggi atau rendah</li>\r\n<li>Menderita epilepsi atau sering kejang</li>\r\n<li>Menderita penyakit menular atau berisiko tinggi terkena penyakit menular, seperti sifilis,&nbsp;<a style=\"text-decoration-line: none; color: #3570d2;\" href=\"https://www.alodokter.com/hiv-aids\" target=\"_blank\" rel=\"noopener\">HIV/AIDS</a>, hepatitis B, hepatitis C, atau malaria</li>\r\n<li>Mengonsumsi obat-obatan atau sedang menjalani pengobatan tertentu</li>\r\n<li>Memiliki gangguan perdarahan, seperti&nbsp;<a style=\"text-decoration-line: none; color: #3570d2;\" href=\"https://www.alodokter.com/hemofilia\" target=\"_blank\" rel=\"noopener\">hemofilia</a></li>\r\n<li>Memiliki riwayat penggunaan narkoba dalam bentuk suntik</li>\r\n<li>Memiliki kecanduan terhadap minuman keras</li>\r\n</ul>', 1),
(3, 'Informasi Manfaat Donor', '<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 12pt;\">Menurunkan risiko terkena penyakit jantung dan pembuluh darah. Donor darah secara teratur diketahui dapat menurunkan kekentalan darah. Kekentalan darah merupakan salah satu faktor yang berperan dalam meningkatkan risiko terkena penyakit jantung.</span></p>', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_mobil`
--

CREATE TABLE `jadwal_mobil` (
  `id_mobil` int(11) NOT NULL,
  `jam_buka` time NOT NULL,
  `jam_tutup` time NOT NULL,
  `jadwal` date NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `target` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jadwal_mobil`
--

INSERT INTO `jadwal_mobil` (`id_mobil`, `jam_buka`, `jam_tutup`, `jadwal`, `lokasi`, `target`) VALUES
(1, '13:00:00', '17:00:00', '2022-07-30', 'Taman Anggrek', 50),
(3, '10:40:00', '16:00:00', '2022-07-28', 'Plaza Araya (Samping Burger King)', 50);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_darah`
--

CREATE TABLE `jenis_darah` (
  `id_jenis_darah` int(11) NOT NULL,
  `nama_jenis_darah` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis_darah`
--

INSERT INTO `jenis_darah` (`id_jenis_darah`, `nama_jenis_darah`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'AB'),
(4, 'O');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendonor`
--

CREATE TABLE `pendonor` (
  `id_pendonor` int(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_pendonor` varchar(100) NOT NULL,
  `foto_pendonor` text DEFAULT NULL,
  `umur_pendonor` int(11) NOT NULL,
  `id_jenis_darah` int(11) NOT NULL,
  `alamat_pendonor` varchar(150) NOT NULL,
  `telepon_pendonor` varchar(20) NOT NULL,
  `donor_terakhir` date DEFAULT NULL,
  `donor_selanjutnya` date DEFAULT NULL,
  `email_pendonor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendonor`
--

INSERT INTO `pendonor` (`id_pendonor`, `password`, `nama_pendonor`, `foto_pendonor`, `umur_pendonor`, `id_jenis_darah`, `alamat_pendonor`, `telepon_pendonor`, `donor_terakhir`, `donor_selanjutnya`, `email_pendonor`) VALUES
(25, 'tes123', 'Dan Giri', 'http://localhost/pmi/uploads/pendonor/1657602538893_DOWNPOUR.jpg', 24, 3, 'Jalan Laks Adi Sucipto 8/25', '081123456', NULL, NULL, 'danngriel@gmail.com'),
(29, 'tes123', 'Ramadhan Giri Mukti', 'http://localhost/pmi/uploads/pendonor/1661263986049_SS.jpg', 24, 3, 'Jalan Kanan Kiri 12 Malang', '087859935894', NULL, NULL, 'kyurikariko@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(11) NOT NULL,
  `judul_profil` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id_profil`, `judul_profil`, `deskripsi`, `status`) VALUES
(1, 'Profil UDD Kota Malang', '<p>Pada th.1955 PMI bertempat di Jl.Embong Ploso 7 &ndash; 9 dan dr.Payma diganti oleh dr.Suharyono. Dr. Payma meninggal dunia di negeri Belanda waktu menuntut ilmu.</p>\r\n<p>Memasuki th.1972 dr. Suharyono diganti dr.Alfian dan sesudah dilakukan perluasan gedung diberi nama : Dinas Transfusi Darah. Lokasi ini diperluas areanya dengan menguasai Jl.Embong Ploso no 11 &ndash; 15.</p>\r\n<p>Dengan perluasan ini: kegiatan donor darah ditempatkan Jl.Embong Ploso 7&ndash;9 dan untuk ruang Laboratorium di Jl.Embong Ploso 11&ndash;15.</p>', 1),
(2, 'Visi & Misi', '<p>Siap dengan darah yang aman, cukup dan setiap saat dengan Pelayanan Prima mengikuti Perkembangan Teknologi Mutakhir mengacu Managemen Mutu</p>', 1),
(7, 'Raft', '<p>Mari kita berseluncur</p>\r\n<p>Oke...</p>', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id_carousel`);

--
-- Indeks untuk tabel `darah`
--
ALTER TABLE `darah`
  ADD PRIMARY KEY (`id_darah`);

--
-- Indeks untuk tabel `detail_darah`
--
ALTER TABLE `detail_darah`
  ADD PRIMARY KEY (`id_detail_darah`),
  ADD KEY `id_darah` (`id_darah`) USING BTREE,
  ADD KEY `id_jenis_darah` (`id_jenis_darah`);

--
-- Indeks untuk tabel `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indeks untuk tabel `jadwal_mobil`
--
ALTER TABLE `jadwal_mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indeks untuk tabel `jenis_darah`
--
ALTER TABLE `jenis_darah`
  ADD PRIMARY KEY (`id_jenis_darah`);

--
-- Indeks untuk tabel `pendonor`
--
ALTER TABLE `pendonor`
  ADD PRIMARY KEY (`id_pendonor`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id_agenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id_carousel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `darah`
--
ALTER TABLE `darah`
  MODIFY `id_darah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `detail_darah`
--
ALTER TABLE `detail_darah`
  MODIFY `id_detail_darah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `jadwal_mobil`
--
ALTER TABLE `jadwal_mobil`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `jenis_darah`
--
ALTER TABLE `jenis_darah`
  MODIFY `id_jenis_darah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pendonor`
--
ALTER TABLE `pendonor`
  MODIFY `id_pendonor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_darah`
--
ALTER TABLE `detail_darah`
  ADD CONSTRAINT `detail_darah_ibfk_1` FOREIGN KEY (`id_darah`) REFERENCES `darah` (`id_darah`),
  ADD CONSTRAINT `detail_darah_ibfk_2` FOREIGN KEY (`id_jenis_darah`) REFERENCES `jenis_darah` (`id_jenis_darah`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
