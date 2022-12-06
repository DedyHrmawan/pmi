-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Des 2022 pada 10.48
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
(1, 'Sihono', 'sihono37@gmail.com', 'adminsio', '085790768626', '', 1, 1),
(2, 'Admin', 'admin@gmail.com', 'admin', '085790768626', '', 1, 1);

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
(7, 'Pengurus PMI Kota Malang Masa Bhakti 2022-2027 Dikukuhkan', '2022-05-13', '<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-size: 16px; line-height: 1.8; color: #3a3a3a; font-family: \'source sans pro\', sans-serif; background-color: #ffffff; text-align: justify;\">Ketua Palang Merah Indonesia (PMI) Jawa Timur, H. Imam Utomo, melantik pengurus&nbsp; PMI Kota Malang Masa Bhakti 2022 - 2027, di Hotel Santika Malang, Jumat (13/5/2022).</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-size: 16px; line-height: 1.8; color: #3a3a3a; font-family: \'source sans pro\', sans-serif; background-color: #ffffff; text-align: justify;\">Imam Utomo menyampaikan terima kasih kepada pengurus baru yang telah dilantik, dan berharap semoga ke depan bisa menjalankan amanah dan kepercayaan masyarakat. Tak lupa kepada para pengurus lama juga&nbsp; disampaikan terimakasih atas pengabdiannya selama menjalakan tugas.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-size: 16px; line-height: 1.8; color: #3a3a3a; font-family: \'source sans pro\', sans-serif; background-color: #ffffff; text-align: justify;\">Lebih lanjut ia mengatakan, semua yang ada di forum ini adalah relawan. Tidak ada sesuatu di PMI karena PMI adalah organisasi sosial. Sesuai UU No. 1 tahun 2018 tentang Kepalangmerahan. Dimana disitu ada 5 tugas pokok dan 3 tugas tambahan, ditambah tugas-tugas PMI Pusat berdasarkan AD/ART.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-size: 16px; line-height: 1.8; color: #3a3a3a; font-family: \'source sans pro\', sans-serif; background-color: #ffffff; text-align: justify;\">&ldquo;Tugas PMI itu yang pokok adalah donor darah dan tugas bencana alam. Selama ini untuk provinsi Jawa Timur selalu dilihat oleh seluruh PMI di Indonesia. Artinya PMI Jatim menjadi barometer,&ldquo; ujarnya.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-size: 16px; line-height: 1.8; color: #3a3a3a; font-family: \'source sans pro\', sans-serif; background-color: #ffffff; text-align: justify;\">Pada kesempatan tersebut juga disampaikan apresiasi kepada PMI&nbsp; Kota dan Kabupaten Malang khususnya dalam pelaksanaan donor darah yang selama ini sudah berjalan cukup baik. Bahkan&nbsp; BPOM juga memberikan penilaian yang baik kepada Jawa Timur, tegas mantan Gubernur Jatim dua periode tersebut.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-size: 16px; line-height: 1.8; color: #3a3a3a; font-family: \'source sans pro\', sans-serif; background-color: #ffffff; text-align: justify;\">&ldquo;Tindakan, respon dan aksi cepat penanganan bencana alam oleh PMI kota dan kabupaten Malang tergolong bagus. Hal tersebut terlihat dari upaya penanganan bencana Semeru di Lumajang dengan pendirian posko mandiri,&rdquo; tegasnya</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-size: 16px; line-height: 1.8; color: #3a3a3a; font-family: \'source sans pro\', sans-serif; background-color: #ffffff; text-align: justify;\">Selain itui, Imam Utomo juga menyampaikan persoalan perlunya para relawan mempunyai sertifikasi. Bila belum ada sertifikasi, segera diusulkan ke provinsi agar diikutkan dalam pelatihan baik bagian dapur, kesehatannya dan evakuasi. Jangan sampai ada relawan yang dikirim ke wilayah bencana malah menjadi beban.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-size: 16px; line-height: 1.8; color: #3a3a3a; font-family: \'source sans pro\', sans-serif; background-color: #ffffff; text-align: justify;\">&ldquo;Dalam penanganan bencana alam PMI, jangan meninggalkan BPBD setempat. Jangan bertindak sendiri. Agar berjalan lancar. PMI Pusat sudah memberikan kepercayaan Jawa Timur sangat baik agar tetap dijaga, &ldquo; pungkasnya.</p>', 'https://pmi.kawankitasolusindo.com/assets/images/38f91e9b558c37a1cd2c7a3b7035f8ab.jpg', 1, 'Admin'),
(8, 'Pendonor Darah 75 Kali Terima Penghargaan dari PMI Kota Malang', '2022-08-18', '<p style=\"box-sizing: border-box; margin: 0px 0px 20px; color: #63636a; font-family: Poppins, Arial, serif; font-size: 14px; background-color: #ffffff;\">Wali Kota Sutiaji berharap dengan adanya kegiatan ini bisa menjadi motivasi bagi yang lain untuk mau secara sukarela melakukan aksi sosial, yakni donor darah. Donor darah itu merupakan kegiatan yang sangat mulia, tanpa pamrih memupuk sifat peduli untuk membantu.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; color: #63636a; font-family: Poppins, Arial, serif; font-size: 14px; background-color: #ffffff;\">&ldquo;Semoga semua yang melakukan donor terus mendapatkan bimbingan, hidayah, maunah dan juga selalu diberikan kesehatan serta rida dari Allah SWT,&rdquo; jelas Sutiaji.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; color: #63636a; font-family: Poppins, Arial, serif; font-size: 14px; background-color: #ffffff;\">Sutiaji menambahkan, ucapan selamat bagi para peserta yang sudah melakukan donor darah sebanyak 75 kali maupun yang melakukan donor plasma konvalesen. Mudah-mudahan apa yang sudah di darma baktikan untuk nusa dan bangsa, bisa menyelamatkan nyawa orang lain.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; color: #63636a; font-family: Poppins, Arial, serif; font-size: 14px; background-color: #ffffff;\">&ldquo;Keikhlasan para pendonor sangat luar biasa, tidak bisa diganti dengan yang lain. Semoga ini menjadi amal ibadah yang tidak akan pernah terputus pahalanya,&rdquo; terang Sutiaji.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; color: #63636a; font-family: Poppins, Arial, serif; font-size: 14px; background-color: #ffffff;\">Demikian juga untuk pengurus Palang Merah Indonesia (PMI) dan Perhimpunan Donor Darah Indonesia (PPDI) yang terus mendorong terpenuhinya kebutuhan darah dari masyarakat. PMI Kota Malang tidak hanya melayani permintaan darah dari Kota Malang, namun juga dari Malang Raya, Blitar, Probolinggo, dan berbagai daerah di Jawa Timur.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; color: #63636a; font-family: Poppins, Arial, serif; font-size: 14px; background-color: #ffffff;\">Sekretaris PMI Kota Malang, Samsul Hadi mengatakan, kegiatan ini dilakukan setiap tahun untuk memberikan penghargaan kepada masyarakat yang aktif melakukan donor darah. &ldquo;Kegiatan ini rutin untuk pendonor 50 kali dan 75 kali diberikan, namun saat pandemi Covid-19 harus tertunda,&rdquo; terang Samsul.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; color: #63636a; font-family: Poppins, Arial, serif; font-size: 14px; background-color: #ffffff;\">Samsul menjelaskan, kegiatan hari ini juga merupakan ajang kesempatan untuk melakukan evaluasi penyediaan stok darah di Kota Malang. Di mana stok darah di Kota Malang untuk jangka waktu 14 hari ke depan masih dalam kondisi aman.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; color: #63636a; font-family: Poppins, Arial, serif; font-size: 14px; background-color: #ffffff;\">&ldquo;Keamanan stok darah tidak lepas dari wujud nyata kesediaan para relawan untuk melakukan donor darah,&rdquo; terang Samsul.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; color: #63636a; font-family: Poppins, Arial, serif; font-size: 14px; background-color: #ffffff;\">Baik itu relawan dari TNI/Polri, perusahaan, bank, instansi pemerintah, hingga kampus-kampus di Kota Malang yang mendukung penyediaan darah. Donor darah tidak diperjualbelikan, di mana kontraknya dengan rumah sakit. &ldquo;Penyediaan darah sudah update setiap hari, darah apa yang tersedia,&rdquo; terang Samsul.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; color: #63636a; font-family: Poppins, Arial, serif; font-size: 14px; background-color: #ffffff;\">Penghargaan ini diberikan kepada 76 orang. Di mana yang 50 orang adalah pendonor darah yang sudah 75 kali melakukan donor darah selebihnya adalah pendonor darah plasma konvalesen. Keberhasilan ini tidak lepas dari kepedulian yang luar biasa masyarakat Kota Malang.&nbsp;</p>', 'https://pmi.kawankitasolusindo.com/assets/images/ddaa4c1afb30a1cdfb8dad5c2b9fac8e.jpeg', 1, 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking`
--

CREATE TABLE `booking` (
  `id_booking` int(11) NOT NULL,
  `id_pendonor` int(11) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(50) NOT NULL,
  `telp` varchar(16) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jam_datang` time NOT NULL,
  `instansi` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(7, 'https://pmi.kawankitasolusindo.com/assets/images/4fc48357511abffe82d39b7080c17a43.jpg', 1),
(8, 'https://pmi.kawankitasolusindo.com/assets/images/a787f54be29480ae6207ecde3bb9ec1e.jpg', 1),
(9, 'https://pmi.kawankitasolusindo.com/assets/images/ab499aa00b74c6c0d6f75712fee3c995.jpg', 1),
(10, 'https://pmi.kawankitasolusindo.com/assets/images/290c5635887ec5adc46c32b09bb8c599.jpg', 1),
(11, 'https://pmi.kawankitasolusindo.com/assets/images/e5a24deef9957842d71778825c6e80e6.jpg', 1),
(12, 'https://pmi.kawankitasolusindo.com/assets/images/da4b4aeb5fa8a9ab51bfe95603f043c1.jpg', 1);

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
(1, 'WB', '2022-10-25 13:22:00'),
(9, 'TC', '2022-10-25 13:25:12'),
(10, 'PRC', '2022-10-25 13:25:09'),
(11, 'FFP Fraksionasi', '2022-10-25 13:22:43'),
(12, 'FFP', '2022-10-25 13:24:53'),
(13, 'AHF', '2022-10-25 13:25:04');

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
(5, 1, 1, 1, '2022-11-08 23:58:33'),
(6, 1, 3, 0, '2022-10-23 14:10:57'),
(7, 1, 2, 0, '2022-10-23 14:11:06'),
(8, 1, 4, 0, '2022-10-23 14:11:15'),
(21, 9, 1, 1, '2022-11-08 23:59:32'),
(22, 9, 2, 0, '2022-10-23 14:11:30'),
(23, 9, 3, 0, '2022-10-23 14:11:39'),
(24, 9, 4, 0, '2022-10-23 14:11:52'),
(25, 10, 1, 1, '2022-11-09 00:00:46'),
(26, 10, 2, 0, '2022-10-23 14:12:38'),
(27, 10, 3, 0, '2022-10-23 14:12:48'),
(28, 10, 4, 0, '2022-10-23 14:16:49'),
(29, 11, 1, 0, '2022-10-23 14:16:55'),
(30, 11, 2, 0, '2022-10-23 14:17:02'),
(31, 11, 3, 0, '2022-10-23 14:17:37'),
(32, 11, 4, 0, '2022-10-23 14:17:47'),
(33, 12, 1, 0, '2022-10-23 14:17:53'),
(34, 12, 2, 0, '2022-10-23 14:18:01'),
(35, 12, 3, 0, '2022-10-23 14:18:11'),
(36, 12, 4, 0, '2022-10-23 14:18:20'),
(37, 13, 1, 0, '2022-10-23 14:18:28'),
(38, 13, 2, 0, '2022-10-23 14:18:43'),
(39, 13, 3, 0, '2022-07-12 08:28:56'),
(40, 13, 4, 0, '2022-10-23 14:18:57');

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
-- Struktur dari tabel `jadwal_donor`
--

CREATE TABLE `jadwal_donor` (
  `id_mobil` int(11) NOT NULL,
  `jam_buka` time NOT NULL,
  `jam_tutup` time NOT NULL,
  `jadwal` date NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `target` int(11) NOT NULL,
  `tipe` int(11) NOT NULL,
  `terisi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jadwal_donor`
--

INSERT INTO `jadwal_donor` (`id_mobil`, `jam_buka`, `jam_tutup`, `jadwal`, `lokasi`, `target`, `tipe`, `terisi`) VALUES
(1, '13:00:00', '17:00:00', '2022-09-28', 'Taman Anggrek', 50, 2, 0),
(3, '10:40:00', '16:00:00', '2022-10-31', 'Plaza Araya (Samping Burger King)', 50, 2, 0),
(9, '09:00:00', '14:00:00', '2022-10-31', 'UDD PMI Kota Malang', 50, 1, 0),
(10, '12:00:00', '16:00:00', '2022-10-02', 'UDD PMI Kota Malang', 50, 1, 0);

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
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(11) NOT NULL,
  `id_darah` int(11) NOT NULL,
  `id_jenis_darah` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `instansi` varchar(100) NOT NULL,
  `telp` varchar(16) NOT NULL,
  `tanggal` date NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `tipe` int(11) NOT NULL,
  `nik_pendonor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `id_darah`, `id_jenis_darah`, `nama`, `alamat`, `instansi`, `telp`, `tanggal`, `lokasi`, `tipe`, `nik_pendonor`) VALUES
(70, 1, 1, 'Guest 7', 'Jl. Wiromargo', 'Masyarakat', '081998765234', '2022-11-01', 'UDD PMI Kota Malang', 1, '01234567890007'),
(71, 9, 1, 'Guest 8', 'Jl. Ade Irma Suryani', 'Jl. Ade Irma SuryaniMasyarakat', '081345765345', '2022-11-02', 'UDD PMI Kota Malang', 1, '01234567890008'),
(72, 10, 1, 'Guest 9', 'Jl. Syarif Al-Qodri', 'Masyarakat', '081876567432', '2022-11-03', 'UDD PMI Kota Malang', 1, '01234567890009');

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
  `email_pendonor` varchar(100) NOT NULL,
  `nik_pendonor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendonor`
--

INSERT INTO `pendonor` (`id_pendonor`, `password`, `nama_pendonor`, `foto_pendonor`, `umur_pendonor`, `id_jenis_darah`, `alamat_pendonor`, `telepon_pendonor`, `donor_terakhir`, `donor_selanjutnya`, `email_pendonor`, `nik_pendonor`) VALUES
(44, '12345', 'Sihono', 'https://pmi.kawankitasolusindo.com/assets/images/5bb0b0c7cda7e7126c7328af0cb04e73.png', 21, 1, 'Jl. Yulius Usman', '081654987452', '2022-05-01', '2022-08-31', 'sihono37@gmail.com', '01234567890001'),
(45, '12345', 'Guest 2', 'https://pmi.kawankitasolusindo.com/assets/images/5cf0977785e64d5ab6befc85dfce599d.png', 21, 1, 'Jl. Sukarjo Wiryopranoto', '081254234765', NULL, NULL, 'akuntuyulcok01@gmail.com', '01234567890002'),
(46, '12345', 'Guest 3', 'https://pmi.kawankitasolusindo.com/assets/images/197f2c319c12d3186c6a68df2d3908b9.png', 21, 1, 'Jl. Kyai Tamin', '081543765987', NULL, NULL, 'lbastard87@gmail.com', '01234567890003'),
(47, '12345', 'Guest 4', 'https://pmi.kawankitasolusindo.com/assets/images/5e6c7922587a357c52597f4f43bb3539.png', 22, 1, 'Jl. Sersan Harun', '081654863109', NULL, NULL, 'lbastard37@gmail.com', '01234567890004'),
(48, '12345', 'Guest 5', 'https://pmi.kawankitasolusindo.com/assets/images/5728d6a863f7ff4e3ede0995d6e0d835.png', 20, 1, 'Jl. Kopral Usman', '081354726099', NULL, NULL, 'guest5@gmail.com', '01234567890005'),
(49, '12345', 'Guest 6', 'https://pmi.kawankitasolusindo.com/assets/images/559f907562e86a37b6aa3832262d0d5a.png', 23, 1, 'Jl. Pasar Besar', '081098897765', NULL, NULL, 'guest6@gmail.com', '01234567890006');

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
(9, 'Profil UDD PMI Kota Malang', '<p>Palang Merah Indonesia Daerah Jawa Timur berdiri pada tahun 1960 dipimpin oleh seorang Komisaris yaitu dr. Angka Nitisastro dipilih melalui Musyawarah Daerah (MUSDA) PMI Jatim bertempat di Lembaga Kesehatan Negata (LKN) terletak di jalan Indrapura Surabaya. Sedangkan Markas Daerah pada waktu itu masih bergabung menjadi satu dengan Markas Cabang di Jalan Tunjungan No. 53 Surabaya pada tahun 1960. Kemudian pindah lagi ke Jl. Tunjungan 61 pada tahun 1963 dari Jl. Tunjungan 61 pindah ke Jl. Cempaka No. 2 tahun 1970. Pada tahun 1975 Markas PMI Daerah pindah ke Jl. Kalibokor No. 161 Surabaya, dan tahun 2003 Markas PMI Daerah Jawa Timur pindah lagi ke jl. Karang Menjangan No. 22 hingga sekarang ini. Sebutan PMI Daerah Jawa Timur sejak tahun 2010 berganti nama menjadi PMI Provinsi Jawa Timur.</p>', 1),
(10, 'Visi & Misi', '<p><strong>VISI</strong></p>\r\n<p><span style=\"color: #222222; font-family: Muli; font-size: 17px; background-color: #ffffff;\">Terwujudnya PMI yang profesional dan berintegritas serta bergerak bersama masyarakat.</span></p>\r\n<p>&nbsp;</p>\r\n<p><strong>MISI</strong></p>\r\n<ol style=\"box-sizing: border-box; padding: 0px; margin-bottom: 26px; margin-left: auto; margin-right: auto; color: #222222; font-family: Muli; font-size: 17px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box; line-height: inherit; margin-left: 21px; margin-bottom: 10px;\">MEMELIHARA reputasi organisasi PMI di tingkat Nasional dan Internasional.</li>\r\n<li style=\"box-sizing: border-box; line-height: inherit; margin-left: 21px; margin-bottom: 0px;\">MENJADI organisasi kemanusiaan terdepan yang memberikan layanan berkualitas kepada masyarakat sesuai dengan prinsip-prinsip dasar Gerakan Palang Merah dan Bulan Sabit Merah</li>\r\n</ol>', 1);

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
-- Indeks untuk tabel `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`);

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
-- Indeks untuk tabel `jadwal_donor`
--
ALTER TABLE `jadwal_donor`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indeks untuk tabel `jenis_darah`
--
ALTER TABLE `jenis_darah`
  ADD PRIMARY KEY (`id_jenis_darah`);

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`);

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
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id_carousel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
-- AUTO_INCREMENT untuk tabel `jadwal_donor`
--
ALTER TABLE `jadwal_donor`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `jenis_darah`
--
ALTER TABLE `jenis_darah`
  MODIFY `id_jenis_darah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT untuk tabel `pendonor`
--
ALTER TABLE `pendonor`
  MODIFY `id_pendonor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT untuk tabel `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
