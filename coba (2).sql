-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Agu 2023 pada 15.50
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coba`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agendas`
--

CREATE TABLE `agendas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal_agenda` varchar(255) NOT NULL,
  `acara_agenda` varchar(255) NOT NULL,
  `kegiatan_agenda` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `agendas`
--

INSERT INTO `agendas` (`id`, `tanggal_agenda`, `acara_agenda`, `kegiatan_agenda`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, '2023-06-01', 'contoh', 'isinya', NULL, '2023-06-01 18:32:49', '2023-06-01 18:35:21'),
(4, '2023-05-28', 'xxxxxxxxx', 'rrrrrrrrrrrrr', NULL, '2023-06-01 19:09:09', '2023-06-01 19:09:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `beritas`
--

CREATE TABLE `beritas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul_berita` varchar(255) NOT NULL,
  `penulis_berita` varchar(255) NOT NULL,
  `tanggal_berita` varchar(255) NOT NULL,
  `foto_berita` varchar(255) NOT NULL,
  `isi_berita` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `beritas`
--

INSERT INTO `beritas` (`id`, `judul_berita`, `penulis_berita`, `tanggal_berita`, `foto_berita`, `isi_berita`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Ini adalah widya', 'qwer', '2023-06-09', 'upload_foto_berita/jogMgVVL9ifOpHTfvShpowEuHLqbvqmjq1w7e69g.jpg', '<div>qwerty</div>', NULL, '2023-06-01 19:38:14', '2023-06-02 18:10:17'),
(4, 'cccccccccccccccccc', 'eee', '2023-05-28', 'upload_foto_berita/Cznhub8Rk0UwZYmyFfftsCxhGufBnW5JMjs7bYvA.jpg', '<div>qwertyu</div>', NULL, '2023-06-02 18:08:39', '2023-06-02 18:09:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeris`
--

CREATE TABLE `galeris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kegiatan` varchar(255) NOT NULL,
  `definisi_kegiatan` varchar(255) NOT NULL,
  `foto_kegiatan` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `galleris`
--

CREATE TABLE `galleris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kegiatan` varchar(255) NOT NULL,
  `definisi_kegiatan` varchar(255) NOT NULL,
  `foto_kegiatan` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gurus`
--

CREATE TABLE `gurus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_guru` varchar(255) NOT NULL,
  `nip_guru` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir_guru` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `nomor_hp` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `kelas_yang_diajar` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `gurus`
--

INSERT INTO `gurus` (`id`, `nama_guru`, `nip_guru`, `tempat_lahir`, `tanggal_lahir_guru`, `jabatan`, `jenis_kelamin`, `agama`, `nomor_hp`, `email`, `kelas_yang_diajar`, `alamat`, `foto`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'YOHANIS ISA P., S.Ag', '196612241986121000', 'Bebo', '1966-12-24', 'Kepsek / Pembina TK.1', 'L', 'katolik', '-', '-', 'Kepala Sekolah', 'Rante Pasele', 'upload_foto_guru/yQZ7JWs4y72k61mBq4xBkb4x5bmhYKCcxtnqvyp6.jpg', NULL, '2023-05-31 10:13:55', '2023-06-04 18:11:46'),
(7, 'RITA LIMBONG PAIRI, S.Pd.', '196409161984112001', 'Tator', '1964-09-16', 'Pembina TK.1', 'P', 'Kristen Protestan', '-', '-', 'V.6', 'Rantepao', 'upload_foto_guru/EZ74tk9KOdURPqCw0jk7rIhpRNsflC841Q7UPzz7.jpg', NULL, '2023-05-31 20:32:59', '2023-05-31 20:35:08'),
(8, 'YOHANA RANTE ROMBE, S.Pd.', '197007042007012016', 'Tana Toraja', '1970-07-04', 'Penata TK.1', 'P', 'Kristen Protestan', '-', '-', 'IV.3', 'Malango', 'upload_foto_guru/x1oyUqUwyO1V95mmyVNlo9czXqge3jV1vuelRLg2.jpg', NULL, '2023-05-31 20:39:27', '2023-05-31 20:39:27'),
(9, 'ELIS, S.Pd.', '196710051986112001', 'Marante', '1967-10-05', 'Pembina TK.1', 'P', 'Kristen Protestan', '-', '-', 'VI.5', 'Rante Pasele', 'upload_foto_guru/TpmX5AZH8eYtKazxcxz0q5GIQIZFoysENrluyEGT.jpg', NULL, '2023-05-31 20:42:25', '2023-06-02 18:02:41'),
(10, 'PETRUS KILALALA, S.Pd.', '196607152006041015', 'Minanga, Sadan', '1966-07-15', 'Penata', 'P', 'Kristen Protestan', '-', '-', 'VI.3', 'Rantepao', 'upload_foto_guru/aovR4ZDpWzC1JnS65mCMkMS8b4tpVWrunvXBwfwX.jpg', NULL, '2023-05-31 20:48:21', '2023-06-04 18:40:36'),
(11, 'YOHANA B. MAYANG, S.Pd.', '196711111991062001', 'Tana Toraja', '1967-11-11', 'Pembina TK.1', 'P', 'Kristen Protestan', '-', '-', 'IV.5', 'Bolu', 'upload_foto_guru/ALTwAdbIalOmvoK3mzRAggR9aTAMpFxbtBR9WhAT.jpg', NULL, '2023-05-31 20:50:44', '2023-06-02 18:15:29'),
(12, 'INTAN MESTIKA, S.Th.', '197906142014112003', 'Bambang Boda', '1979-06-14', 'Penata Muda TK.1', 'P', 'Kristen Protestan', '-', '-', 'V.3', 'Singki', '', NULL, '2023-05-31 20:53:10', '2023-05-31 20:56:26'),
(13, 'LUSIAN MARKUS, S.Pd.', '196902252006042010', 'Rantepao', '1969-02-25', 'Guru Madya', 'P', 'Kristen Protestan', '-', '-', 'III.3', 'Rante Pasele', 'upload_foto_guru/YMQeb2nFeiTVYSQLnMwrMNTc1Ozhf8sFUcyrqTgt.jpg', NULL, '2023-05-31 20:59:58', '2023-06-01 01:21:56'),
(14, 'BERTHA KORI, S.Pd.', '19640823198522004', 'Rantepao', '1964-08-23', 'Pembina TK.1', 'P', 'Kristen Protestan', '-', '-', 'Guru Bidang Studi Penjaskes', 'Batan', 'upload_foto_guru/ReVP96iiIVQnKUFtY3gsjk8a5MVFQBXsCCcZjVLB.jpg', NULL, '2023-05-31 21:02:38', '2023-06-01 01:24:11'),
(15, 'Y. D. Sarrin, S.Pd.', '196212161986112002', 'Tator', '1962-12-16', 'Pembina TK.1', 'P', 'Kristen Protestan', '-', '-', 'I.3', 'Rante Pasele', '', NULL, '2023-05-31 21:04:44', '2023-05-31 21:04:44'),
(16, 'A. A. Pasedan, S.Pd.', '196501081988031016', 'Sanggalangi', '1965-08-18', 'Pembina TK.1', 'L', 'katolik', '-', '-', 'Guru Bidang Studi Penjaskes', 'Labo', '', NULL, '2023-05-31 21:07:44', '2023-05-31 21:07:44'),
(17, 'YULIANA LINDA, S.Ag.', '196807022000032002', 'Tator', '1968-07-02', 'Penata', 'P', 'Kristen Protestan', '-', '-', 'Guru Bidang Studi Agama Katolik', 'Rantepao', 'upload_foto_guru/CUMhrxEJfjqTc2vhpHHCEw020ny1cZfGxLjiFspN.jpg', NULL, '2023-05-31 21:10:07', '2023-06-01 01:28:46'),
(18, 'KRISTIANI, S.Pd.', '197107102008012017', 'Pangaparang', '1971-07-10', 'Pengatur Muda TK.1', 'P', 'Kristen Protestan', '-', '-', 'I.3', 'Bolu', '', NULL, '2023-05-31 21:13:04', '2023-05-31 21:13:04'),
(19, 'AGUSTINA KUMAU, S.Pd.', '198308142008012012', 'Baruppu', '1983-08-14', 'Penata', 'P', 'Kristen Protestan', '-', '-', 'III.3', 'Rantepao', '', NULL, '2023-05-31 21:14:49', '2023-05-31 21:14:49'),
(20, 'SENIWATI P. BATURANTE, S.Pd.', '198508202008012006', 'Watampone', '1985-08-20', 'Pengatur Muda TK.1', 'P', 'Kristen Protestan', '-', '-', 'IV.3', 'Rantepao', '', NULL, '2023-05-31 21:18:45', '2023-05-31 21:18:45'),
(21, 'RITA ASBIPA BURA, S.Pd.K.', '196902182007012021', 'Rantepao', '1969-02-18', 'Pengatur Muda TK.1', 'P', 'Kristen Protestan', '-', '-', 'Guru Bidang Studi Agama Kristen Protestan', 'Rantepao', '', NULL, '2023-05-31 21:21:45', '2023-05-31 21:21:45'),
(22, 'MARTHINA SARMUD, S.Pd.', '197505242009032002', 'Palopo', '1975-05-24', 'Pengatur Muda TK.1', 'P', 'Kristen Protestan', '-', '-', 'VI.4', 'Rantepao', '', NULL, '2023-05-31 21:23:30', '2023-05-31 21:23:30'),
(23, 'JENIS ANDARIAS, T., S.Pd.', '198610292009032001', 'Buntao', '1986-10-29', 'Pengatur Muda', 'P', 'Kristen Protestan', '-', '-', 'IV.3', 'Rantepao', '', NULL, '2023-05-31 21:25:11', '2023-05-31 21:25:11'),
(24, 'KORNELIUS, S.Th.', '198309272010011020', 'Pangli Pallawa', '1983-09-27', 'Penata', 'L', 'Kristen Protestan', '-', '-', 'Guru Bidang Studi Agama Kristen Protestan', 'Alang-alang', '', NULL, '2023-05-31 21:42:17', '2023-05-31 21:42:17'),
(25, 'HERLINA P. ALLO, S.Pd.', '198301152010012017', 'Patongloan', '1983-01-15', 'Penata', 'P', 'Kristen Protestan', '-', '-', 'VI.1', 'Rantepao', 'upload_foto_guru/eBesg69ejwRCL4GuaLAMYrLRlA0bzntlGMXIWSJO.jpg', NULL, '2023-05-31 21:49:03', '2023-06-01 01:25:54'),
(26, 'YULIANTI LAYUK, S.Pd.', '198107232014082004', 'Rantepao', '1981-07-23', 'Pengatur Muda', 'P', 'Kristen Protestan', '-', '-', 'III.5', 'Tikala', '', NULL, '2023-05-31 21:51:21', '2023-05-31 21:51:21'),
(27, 'SAPIRA RANTELANGAN, S.Th.', '197011092014112001', 'Pitung Penanian', '1970-11-09', 'Penata Muda', 'P', 'Kristen Protestan', '-', '-', 'Guru Bidang Studi Agama Kristen Protestan', 'Rantepao', '', NULL, '2023-05-31 21:53:33', '2023-05-31 21:53:33'),
(28, 'TRESNA LESTARI, S.Pd.', '198605242019032003', 'Rantepao', '1986-05-24', 'Penata Muda', 'P', 'Kristen Protestan', '-', '-', 'I.4', 'Jln. Gajah', 'upload_foto_guru/UjcKu3Zbmj5xAcNrFnV7Wk6gObWcE2zjCWyLGycz.jpg', NULL, '2023-05-31 21:55:47', '2023-06-01 01:29:56'),
(29, 'ERNY MARLI, S.Pd.', '198604152019032001', 'Tana Toraja', '1986-04-15', 'Penata Muda', 'P', 'Kristen Protestan', '-', '-', 'II.6', 'Rantepao', '', NULL, '2023-05-31 21:58:41', '2023-05-31 21:58:41'),
(30, 'HESRON RANTEALO, S.Pd.', '198306012009021003', 'Tana Toraja', '1983-06-01', 'Penata', 'L', 'Kristen Protestan', '-', '-', 'VI.6', 'Tagari', 'upload_foto_guru/c9bXXJ2Ut6TtlofrIbaaGL29s1NjQ20VGtlnv5fh.jpg', NULL, '2023-05-31 22:00:48', '2023-06-01 01:26:28'),
(31, 'KRISTINA RANDAN, S.Pd.', '1042757657220003', 'T. Y. Akung', '1979-10-07', 'Guru Honda', 'P', 'Kristen Protestan', '-', '-', 'II.6', 'Jln. Serang', '', NULL, '2023-05-31 22:03:56', '2023-05-31 22:03:56'),
(32, 'ESTER, S.Th.', '0836758660300042', 'Pongsamelung', '1980-05-04', 'Guru Honda', 'P', 'Kristen Protestan', '-', '-', 'Guru Bidang Studi Agama Kristen Protestan', 'Rantepao', '', NULL, '2023-05-31 22:05:50', '2023-05-31 22:05:50'),
(33, 'ELSCE PAEMBE, S.Pd.', '3159758660300073', 'Rantepao', '1980-08-27', 'Guru Honda 2009', 'P', 'Kristen Protestan', '-', '-', 'V.5', 'Rantepao', 'upload_foto_guru/MgeGAccDXwb10NbSv3C7vueEYebrdVqEcLDaDMdv.jpg', NULL, '2023-05-31 22:08:38', '2023-06-01 01:29:15'),
(34, 'MARTHINA RANTE L., S.Pd.', '2248752655300013', 'Rantepao', '1974-09-16', 'Guru Honda', 'P', 'Kristen Protestan', '-', '-', 'III.6', 'Rantepao', '', NULL, '2023-05-31 22:14:24', '2023-05-31 22:14:24'),
(35, 'DESI, S.Pd.', '9533762663210113', 'Tomale', '1984-12-02', 'Guru Honda', 'P', 'Kristen Protestan', '-', '-', 'II.3', 'Rantepao', 'upload_foto_guru/q8rL8hsHd5fHNAukrTzapxbJM0iFzF544cU7THhg.jpg', NULL, '2023-05-31 22:16:50', '2023-06-02 18:12:01'),
(36, 'EVITA PARETANDUK, S.Pd.', '6062749650210023', 'Tondok Litak', '1971-07-30', 'Guru Honda', 'P', 'Kristen Protestan', '-', '-', 'I.6', 'Rantepao', 'upload_foto_guru/OM6IMuUn14fK6DU8Cme7T4diuxRjssKcLAlWXsUl.jpg', NULL, '2023-05-31 22:18:36', '2023-06-01 01:23:24'),
(37, 'KRISTINA IMBAK, S.Pd.', '3060761664210023', 'MAKKODO', '1983-07-24', 'Guru Honda', 'P', 'Kristen Protestan', '-', '-', 'I.5', 'Rantepao', '', NULL, '2023-05-31 22:20:36', '2023-05-31 22:20:36'),
(38, 'YULIANA TOBA, S.Pd.', '9061748650210070', 'Rantepao', '1970-07-29', 'Guru Honda', 'P', 'Kristen Protestan', '-', '-', 'IV.6', 'Rantepao', '', NULL, '2023-05-31 22:23:10', '2023-05-31 22:23:10'),
(39, 'IMMA ALI, S.Pd.', '-', 'Sanggalangi', '1977-03-02', 'Guru Honda', 'P', 'Islam', '-', '-', 'V.5', 'Rantepao', 'upload_foto_guru/aS5cOV7r1REQlHLgoSzCjGpK0ar6dMsT5hUOM8vH.jpg', NULL, '2023-05-31 22:26:07', '2023-06-01 01:26:44'),
(40, 'SELVI ARIS KARANGAN, S.Pd.', '-', 'Kendari', '1991-03-30', 'Guru Honda', 'P', 'Kristen Protestan', '-', '-', 'IV.5', 'Batan', '', NULL, '2023-05-31 22:27:38', '2023-05-31 22:27:38'),
(41, 'SUMARIATI SUDJITO, S.Pd.', '4441756658300043', 'Rantepao', '1978-11-09', 'Guru Honda', 'P', 'Kristen Protestan', '-', '-', 'III.2', 'Pangrante', 'upload_foto_guru/CpLVdHgE4iPtU2H3kDbJWRiI9qXh2sF2SyhyPRrq.jpg', NULL, '2023-05-31 22:35:25', '2023-06-01 01:28:02'),
(42, 'EVI DAYATI KARANGAN, S.Pd.', '-', 'Kandeapi', '1999-10-13', 'Guru Honda', 'P', 'Kristen Protestan', '-', '-', 'IV.1', 'Kandeapi', 'upload_foto_guru/mcruysfG4tHJWlCpDE5UXMm1BYb3mQlOqbknCZj3.jpg', NULL, '2023-05-31 22:39:26', '2023-06-01 01:23:03'),
(43, 'HERMIN LOLO, S.Pd.', '-', 'Rantepao', '1989-08-12', 'Guru Honda', 'P', 'Kristen Protestan', '-', '-', 'V.4', 'Jln. Gajah', 'upload_foto_guru/RC0xH4jR2yhfv6CMB1Jcx6HU9fuARZf1DxSCgnoh.jpg', NULL, '2023-05-31 22:40:56', '2023-06-01 01:26:12'),
(44, 'FAUZIAH TIKU PASEDAN, S.Pd.', '-', 'Rantepao', '1993-02-02', 'Guru Honda', 'P', 'Katolik', '-', '-', 'Guru Bidang Studi Bahasa Inggris', 'Labo', 'upload_foto_guru/7uu7Aq7zC3wsLzwhl14Aud8orMytBcDK4NCV9BvB.jpg', NULL, '2023-05-31 22:42:34', '2023-06-01 01:23:48'),
(45, 'MIDRAWATI P., S.Pd.', '-', 'Rantepao', '1977-01-14', 'Pegawai Honda', 'P', 'Islam', '-', '-', 'Pegawai', 'Rantepao', 'upload_foto_guru/FX3TLA5iBpod3Njp7uS67InjFV5dgpDyVghAPjnH.jpg', NULL, '2023-05-31 22:45:06', '2023-06-02 18:13:07'),
(46, 'MARTHA PARUBAK, S.Pd.', '-', 'Pangala', '1978-03-20', 'Guru Honda', 'P', 'Kristen Protestan', '-', '-', 'Guru Bidang Studi Agama Kristen Protestan', 'Parinding', '', NULL, '2023-06-01 00:57:44', '2023-06-01 00:57:44'),
(47, 'MATIUS SUMARJI, S.Pd.', '-', 'Rantepao', '1984-05-05', 'Pegawai Honda', 'L', 'Kristen Protestan', '-', '-', 'Pegawai', 'Jln. Gajah', '', NULL, '2023-06-01 00:59:31', '2023-06-01 00:59:31'),
(48, 'SUHERMAN, S.Pd.I', '-', 'Enrekang', '1982-01-01', 'Guru Honorer', 'L', 'Islam', '-', '-', 'Guru Bidang Studi Agama Islam', 'Rantepao', '', NULL, '2023-06-01 01:01:12', '2023-06-01 01:01:12'),
(49, 'ADRI RANTE LEMBANG, S.Pd.', '-', 'Rantepao', '1989-01-25', 'Guru Honorer', 'P', 'Kristen Protestan', '-', '-', 'Guru Bidang Studi Bahasa Inggris', 'Jln. Gajah', '', NULL, '2023-06-01 01:03:10', '2023-06-01 01:03:10'),
(50, 'RESKY DAMI, S.Pd.', '-', 'Rantepao', '1994-12-19', 'Guru Honorer', 'L', 'Kristen Protestan', '-', '-', 'Guru Bidang Studi Bahasa Inggris', 'Rantepao', '', NULL, '2023-06-01 01:05:04', '2023-06-01 01:05:04'),
(51, 'ANATRI TASIANA BUANG, S.Pd.', '-', 'Rantepao', '1998-07-13', 'Guru Honorer', 'P', 'Islam', '-', '-', 'V.4', 'Rantepao', 'upload_foto_guru/83pyKQjcfWr6BeYZvEPMg9Diu7fbazJ2fmUX2CBb.jpg', NULL, '2023-06-01 01:06:55', '2023-06-01 01:25:07'),
(52, 'NAOMI MALLISA, S.Pd.', '-', 'Paku', '1996-11-10', 'Guru Honorer', 'P', 'Kristen Protestan', '-', '-', 'IV.5', 'Jln. Gajah', '', NULL, '2023-06-01 01:08:39', '2023-06-01 01:08:39'),
(53, 'MIRNA R.', '7153758661300013', 'Karassik', '1980-08-21', 'Pegawai Honda', 'P', 'Islam', '-', '-', 'Tata Usaha', 'Karassik', '', NULL, '2023-06-01 01:10:44', '2023-06-01 01:10:44'),
(54, 'MURTINI BOMBANG, SE', '3735760662300052', 'Rantepao', '1982-03-04', 'Pegawai Honda', 'P', 'Kristen Protestan', '-', '-', 'Tata Usaha', 'Rantepao', '', NULL, '2023-06-01 01:12:52', '2023-06-01 01:12:52'),
(55, 'YERMIMA TANDISERU', '1534756664210002', 'Rantepao', '1978-02-02', 'Pegawai Honda', 'P', 'Kristen Protestan', '-', '-', 'Pustakawan', 'Tikala', '', NULL, '2023-06-01 01:14:51', '2023-06-01 01:14:51'),
(56, 'SARMYA BUMBUNGAN', '-', 'Rantepao', '1989-01-26', 'Pegawai Honda', 'P', 'Kristen Protestan', '-', '-', 'Pustakawan', 'Bolu', '', NULL, '2023-06-01 01:16:07', '2023-06-01 01:16:07'),
(57, 'YACOB LAPU', '1342723671200003', 'Palopo', '1954-10-10', 'Pegawai Honor', 'L', 'Kristen Protestan', '-', '-', 'Satpam', 'Rantepao', '', NULL, '2023-06-01 01:17:59', '2023-06-01 01:17:59'),
(58, 'YANTI M.', '1247436553000040', 'Simbuang', '1976-07-16', 'Pegawai Honor', 'P', 'Kristen Protestan', '-', '-', 'Pegawai', 'Rantepao', '', NULL, '2023-06-01 01:19:18', '2023-06-01 01:19:18'),
(59, 'TARUK MANGAPE', '-', 'Lemo Menduruk', '1990-10-15', 'Pegawai Honor', 'L', 'Kristen Protestan', '-', '-', 'Cleaning Service', 'Rantepao', '', NULL, '2023-06-01 01:20:31', '2023-06-01 01:20:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru_mapels`
--

CREATE TABLE `guru_mapels` (
  `id` int(11) NOT NULL,
  `nama_guru` varchar(255) NOT NULL,
  `kelas_ajar` varchar(255) NOT NULL,
  `mapel` varchar(255) NOT NULL,
  `nama_siswa` varchar(255) NOT NULL,
  `nilai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `guru_mapels`
--

INSERT INTO `guru_mapels` (`id`, `nama_guru`, `kelas_ajar`, `mapel`, `nama_siswa`, `nilai`) VALUES
(1, 'ansel', 'V', 'Bahasa Indonesia', 'coba', '89');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `nama_kelas` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id`, `nama_kelas`, `created_at`, `updated_at`) VALUES
(1, '1.a', NULL, NULL),
(3, '1.widya coba', '2023-08-22 04:30:04', '2023-08-22 21:48:31'),
(4, '1.c', '2023-08-22 06:55:36', '2023-08-22 06:55:36'),
(5, '1.d', '2023-08-22 06:55:43', '2023-08-22 06:55:43'),
(6, '1.e', '2023-08-22 06:55:50', '2023-08-22 06:55:50'),
(7, '2.a', '2023-08-22 06:55:58', '2023-08-22 06:55:58'),
(8, '2.b', '2023-08-22 06:56:04', '2023-08-22 06:56:04'),
(9, '2.c', '2023-08-22 06:56:10', '2023-08-22 06:56:10'),
(10, '2.d', '2023-08-22 06:56:17', '2023-08-22 06:56:17'),
(11, '2.e', '2023-08-22 06:56:25', '2023-08-22 06:56:25'),
(12, '3.a', '2023-08-22 06:56:31', '2023-08-22 06:56:31'),
(13, '3.b', '2023-08-22 06:56:37', '2023-08-22 06:56:37'),
(14, '3.c', '2023-08-22 06:56:42', '2023-08-22 06:56:42'),
(15, '3.d', '2023-08-22 06:56:48', '2023-08-22 06:56:48'),
(16, '3.e', '2023-08-22 06:56:55', '2023-08-22 06:56:55'),
(17, '4.a', '2023-08-22 06:57:02', '2023-08-22 06:57:02'),
(18, '4.b', '2023-08-22 06:57:07', '2023-08-22 06:57:07'),
(19, '4.c', '2023-08-22 06:57:17', '2023-08-22 06:57:17'),
(20, '4.d', '2023-08-22 06:57:26', '2023-08-22 06:57:26'),
(21, '4.e', '2023-08-22 06:57:40', '2023-08-22 06:57:40'),
(22, '5.a', '2023-08-22 06:57:48', '2023-08-22 06:57:48'),
(23, '5.b', '2023-08-22 06:57:54', '2023-08-22 06:57:54'),
(24, '5.c', '2023-08-22 06:57:59', '2023-08-22 06:57:59'),
(25, '5.d', '2023-08-22 06:58:04', '2023-08-22 06:58:04'),
(26, '5.e', '2023-08-22 06:58:10', '2023-08-22 06:58:10'),
(27, '6.a', '2023-08-22 06:58:16', '2023-08-22 06:58:16'),
(28, '6.b', '2023-08-22 06:58:24', '2023-08-22 06:58:24'),
(29, '6.c', '2023-08-22 06:58:30', '2023-08-22 06:58:30'),
(30, '6.d', '2023-08-22 06:58:35', '2023-08-22 06:58:35'),
(31, '6.e', '2023-08-22 06:58:42', '2023-08-22 06:58:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapels`
--

CREATE TABLE `mapels` (
  `id` int(11) NOT NULL,
  `nama_mapel` varchar(255) NOT NULL,
  `kkm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mapels`
--

INSERT INTO `mapels` (`id`, `nama_mapel`, `kkm`) VALUES
(1, 'Pendidikan Agama dan Budi Pekerti', '60'),
(2, 'Pendidikan Pancasila dan Kewarganegaraan', '60'),
(3, 'Bahasa Indonesia', '60'),
(4, 'Matematika', '60'),
(5, 'Seni Budaya dan Prakarya', '60'),
(6, 'Pendidikan Jasmani, Olahraga dan Kesehatan', '60'),
(7, 'Muatan Lokal Bahasa Daerah', '70'),
(8, 'Muatan Lokal Bahasa Inggris', '60'),
(9, 'Muatan Lokal Pertanian', '60');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_agendas_table', 1),
(2, '2014_10_12_000000_create_beritas_table', 1),
(3, '2014_10_12_000000_create_galeris_table', 1),
(4, '2014_10_12_000000_create_gurus_table', 1),
(5, '2014_10_12_000000_create_pengumumans_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumumans`
--

CREATE TABLE `pengumumans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul_pengumuman` varchar(255) NOT NULL,
  `penulis_pengumuman` varchar(255) NOT NULL,
  `tanggal_pengumuman` varchar(255) NOT NULL,
  `foto_pengumuman` varchar(255) NOT NULL,
  `isi_pengumuman` varchar(255) NOT NULL,
  `quotes` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumumen`
--

CREATE TABLE `pengumumen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul_pengumuman` varchar(255) NOT NULL,
  `penulis_pengumuman` varchar(255) NOT NULL,
  `tanggal_pengumuman` varchar(255) NOT NULL,
  `foto_pengumuman` varchar(255) NOT NULL,
  `isi_pengumuman` text NOT NULL,
  `quotes` text NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pengumumen`
--

INSERT INTO `pengumumen` (`id`, `judul_pengumuman`, `penulis_pengumuman`, `tanggal_pengumuman`, `foto_pengumuman`, `isi_pengumuman`, `quotes`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'PENERIMAAN PESERTA DIDIK BARU (PPDB) SD NEGERI 3 RANTEPAO TAHUN PELAJARAN 2023/2024', 'Panitia PPDB', '2023-06-01', 'upload_foto_pengumuman/RujW9TAHK8sChPtYA9IeaiPouQCQASfjmXpdbbvv.jpg', '<div>Mendapatkan pendidikan lebih baik merupakan keinginan setiap anak. Pemerintah melalui Kemendikbud telah<br>&nbsp;membuat peraturan untuk penerimaan siswa baru di setiap daerah melalui Penerimaan Peserta Didik Baru (PPDB).<br>&nbsp;PPDB adalah sistem penerimaan yang dimaksudkan untuk pemerataan akses dan kualitas pendidikan. Bagi Kamu <br>yang penasaran apa definisi dari PPDB, yuk simak uraian berikut ini:<br><br><strong>1. Sistem PPDB</strong><br>PPDB merupakan proses pendaftaran siswa baru yang menggunakan sistem khusus dengan rancangan satu <br>sumber atau pusat informasi sebagai server atau pengelola seleksi penerimaan siswa baru.<br><strong>2. Di Tingkat Sekolah Apa PPDB Dapat Digunakan</strong><br>PPDB dilaksanakan mulai dari pendaftaran sekolah tingkat paling dasar, yaitu TK, SD, SMP, SMU, dan SMK. <br>Jadi, dapat digunakan pada setiap tingkat sekolah.<br><strong>3. Mengapa Harus PPDB</strong><br>PPDB merupakan sistem yang sudah diatur dalam Permendikbud Nomor 51 Tahun 2018 dan disempurnakan <br>dengan Permendikbud Nomor 44 Tahun 2019 sehingga harus dilaksanakan oleh seluruh panitia penerimaan siswa<br> baru di setiap sekolah.<br><strong>4. Di mana Saja PPDB Dilaksanakan</strong><br>PPDB dilaksanakan di setiap daerah di Indonesia, baik kota maupun kabupaten. Setiap sekolah harus melakukan <br>proses PPDB sesuai dengan ketentuan yang telah diatur oleh Kementerian pendidikan.<br><strong>5. Sistem PPDB</strong><br>PPDB adalah proses penerimaan siswa baru yang dirancang agar penerimaan siswa baru terancang dengan baik <br>sehingga sekolah dapat melakukan efisiensi pembiayaan dan mengurangi risiko terjadinya KKN.<br>Sistem PPDB dapat dilakukan secara luring maupun daring, tergantung kemampuan dari tiap sekolah atau daerah.<br> <strong>6. Jalur PPDB</strong><br>Ada 4 jalur penerimaan yang diperbolehkan dalam APBD, yaitu jalur zonasi (50%), jalur perpindahan orangtua/wali <br>(5%), jalur afirmasi (15%), dan jalur prestasi (30%).<br><strong>7. PPDB Online</strong><br>PPDB online merupakan proses penerimaan siswa baru dengan sistem daring menggunakan satu pintu, di mana <br>data siswa yang mendaftar akan disatukan dalam sebuah basis data untuk kemudian dilakukan proses seleksi.<br><strong>8. 3 Langkah PPDB Online</strong><br>Tidak semua orang benar-benar memahami peraturan mengenai PPDB online, berikut 3 tahap PPDB online:<br>Pendaftaran online yang dapat dilakukan calon siswa atau orangtua dari rumah.<br>Verifikasi pendaftaran online dari rumah oleh operator dari sekolah atau dinas pendidikan yang membuka <br>pendaftaran.<br>Mengecek hasil seleksi yang bisa dilihat oleh calon peserta didik.<br><strong>9. Biaya PPDB</strong><br>Adakah biaya yang harus dikeluarkan untuk mendaftar PPDB online? Saat melakukan pendaftaran awal tidak<br> ada biaya yang harus dikeluarkan. Biaya mungkin akan harus dikeluarkan ketika pengumuman sudah keluar,<br> yaitu untuk biaya pendaftaran ulang.<br><strong>10. Jalur Zonasi PPDB</strong><br>Jalur zonasi merupakan jalur pendaftaran dengan kuota terbesar dalam PPDB, yakni 50% dari daya tampung&nbsp;<br>sekolah. Jalur zonasi mengutamakan siswa yang beralamat dekat sekolah untuk diterima lebih dulu. Jadi, PPDB<br> adalah sebuah sistem yang memudahkan penerimaan siswa baru, baik bagi sekolah maupun calon peserta didik&nbsp;<br>dan orangtua. Semoga informasi ini dapat bermanfaat untuk Kamu.<br>https://www.renesia.com/apa-itu-ppdb-adalah/</div>', 'SELAMAT DATANG KAMI UCAPKAN KEPADA CALON PESERTA DIDIK BARU YANG BERHASIL LOLOS DI SD NEGERI 3 RANTEPAO. “SELAMAT DATANG SANG JUARA” ADALAH KATA MOTIVASI SEBAGAI SEMANGAT UNTUK TERUS MENINGKATKAN KOMPETENSI DAN POTENSI DIRI BAGI SEMUA WARGA SEKOLAH, JADILAH BAGIAN DARI WARGA SEKOLAH YANG \"BERKARAKTER, BERPRESTASI DAN BERWAWASAN LINGKUNGAN\", SERTA SELALU CINTA DAN MENJAGA NAMA BAIK SEKOLAH.', NULL, '2023-06-01 03:36:07', '2023-06-01 04:27:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `raport1s`
--

CREATE TABLE `raport1s` (
  `id` int(11) NOT NULL,
  `nama_siswa` varchar(255) NOT NULL,
  `nis` varchar(255) NOT NULL,
  `nisn` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `tahun_pelajaran` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `nama_sekolah` varchar(255) NOT NULL,
  `alamat_sekolah` varchar(255) NOT NULL,
  `nama_sikap1` varchar(255) NOT NULL,
  `deskripsi_sikap1` text NOT NULL,
  `nama_sikap2` varchar(255) NOT NULL,
  `deskripsi_sikap2` text NOT NULL,
  `nama_mapel1` varchar(255) NOT NULL,
  `nilai_pengetahuan_mapel1` varchar(255) NOT NULL,
  `predikat_pengetahuan_mapel1` varchar(255) NOT NULL,
  `deskripsi_pengetahuan_mapel1` varchar(255) NOT NULL,
  `nilai_keterampilan_mapel1` varchar(255) NOT NULL,
  `predikat_keterampilan_mapel1` varchar(255) NOT NULL,
  `deskripsi_keterampilan_mapel1` varchar(255) NOT NULL,
  `nama_mapel2` varchar(255) NOT NULL,
  `nilai_pengetahuan_mapel2` varchar(255) NOT NULL,
  `predikat_pengetahuan_mapel2` varchar(255) NOT NULL,
  `deskripsi_pengetahuan_mapel2` text NOT NULL,
  `nilai_keterampilan_mapel2` varchar(255) NOT NULL,
  `predikat_keterampilan_mapel2` varchar(255) NOT NULL,
  `deskripsi_keterampilan_mapel2` text NOT NULL,
  `nama_mapel3` varchar(255) NOT NULL,
  `nilai_pengetahuan_mapel3` varchar(255) NOT NULL,
  `predikat_pengetahuan_mapel3` varchar(255) NOT NULL,
  `deskripsi_pengetahuan_mapel3` text NOT NULL,
  `nilai_keterampilan_mapel3` varchar(255) NOT NULL,
  `predikat_keterampilan_mapel3` varchar(255) NOT NULL,
  `deskripsi_keterampilan_mapel3` text NOT NULL,
  `nama_mapel4` varchar(255) NOT NULL,
  `nilai_pengetahuan_mapel4` varchar(255) NOT NULL,
  `predikat_pengetahuan_mapel4` varchar(255) NOT NULL,
  `deskripsi_pengetahuan_mapel4` text NOT NULL,
  `nilai_keterampilan_mapel4` varchar(255) NOT NULL,
  `predikat_keterampilan_mapel4` varchar(255) NOT NULL,
  `deskripsi_keterampilan_mapel4` text NOT NULL,
  `nama_mapel5` varchar(255) NOT NULL,
  `nilai_pengetahuan_mapel5` varchar(255) NOT NULL,
  `predikat_pengetahuan_mapel5` varchar(255) NOT NULL,
  `deskripsi_pengetahuan_mapel5` text NOT NULL,
  `nilai_keterampilan_mapel5` varchar(255) NOT NULL,
  `predikat_keterampilan_mapel5` varchar(255) NOT NULL,
  `deskripsi_keterampilan_mapel5` text NOT NULL,
  `nama_mapel6` varchar(255) NOT NULL,
  `nilai_pengetahuan_mapel6` varchar(255) NOT NULL,
  `predikat_pengetahuan_mapel6` varchar(255) NOT NULL,
  `deskripsi_pengetahuan_mapel6` text NOT NULL,
  `nilai_keterampilan_mapel6` varchar(255) NOT NULL,
  `predikat_keterampilan_mapel6` varchar(255) NOT NULL,
  `deskripsi_keterampilan_mapel6` text NOT NULL,
  `nama_mapel7` varchar(255) NOT NULL,
  `nilai_pengetahuan_mapel7` varchar(255) NOT NULL,
  `predikat_pengetahuan_mapel7` varchar(255) NOT NULL,
  `deskripsi_pengetahuan_mapel7` text NOT NULL,
  `nilai_keterampilan_mapel7` varchar(255) NOT NULL,
  `predikat_keterampilan_mapel7` varchar(255) NOT NULL,
  `deskripsi_keterampilan_mapel7` text NOT NULL,
  `nama_mapel8` varchar(255) NOT NULL,
  `nilai_pengetahuan_mapel8` varchar(255) NOT NULL,
  `predikat_pengetahuan_mapel8` varchar(255) NOT NULL,
  `deskripsi_pengetahuan_mapel8` text NOT NULL,
  `nilai_keterampilan_mapel8` varchar(255) NOT NULL,
  `predikat_keterampilan_mapel8` varchar(255) NOT NULL,
  `deskripsi_keterampilan_mapel8` text NOT NULL,
  `nama_mapel9` varchar(255) NOT NULL,
  `nilai_pengetahuan_mapel9` varchar(255) NOT NULL,
  `predikat_pengetahuan_mapel9` varchar(255) NOT NULL,
  `deskripsi_pengetahuan_mapel9` text NOT NULL,
  `nilai_keterampilan_mapel9` varchar(255) NOT NULL,
  `predikat_keterampilan_mapel9` varchar(255) NOT NULL,
  `deskripsi_keterampilan_mapel9` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `raport1s`
--

INSERT INTO `raport1s` (`id`, `nama_siswa`, `nis`, `nisn`, `semester`, `tahun_pelajaran`, `kelas`, `nama_sekolah`, `alamat_sekolah`, `nama_sikap1`, `deskripsi_sikap1`, `nama_sikap2`, `deskripsi_sikap2`, `nama_mapel1`, `nilai_pengetahuan_mapel1`, `predikat_pengetahuan_mapel1`, `deskripsi_pengetahuan_mapel1`, `nilai_keterampilan_mapel1`, `predikat_keterampilan_mapel1`, `deskripsi_keterampilan_mapel1`, `nama_mapel2`, `nilai_pengetahuan_mapel2`, `predikat_pengetahuan_mapel2`, `deskripsi_pengetahuan_mapel2`, `nilai_keterampilan_mapel2`, `predikat_keterampilan_mapel2`, `deskripsi_keterampilan_mapel2`, `nama_mapel3`, `nilai_pengetahuan_mapel3`, `predikat_pengetahuan_mapel3`, `deskripsi_pengetahuan_mapel3`, `nilai_keterampilan_mapel3`, `predikat_keterampilan_mapel3`, `deskripsi_keterampilan_mapel3`, `nama_mapel4`, `nilai_pengetahuan_mapel4`, `predikat_pengetahuan_mapel4`, `deskripsi_pengetahuan_mapel4`, `nilai_keterampilan_mapel4`, `predikat_keterampilan_mapel4`, `deskripsi_keterampilan_mapel4`, `nama_mapel5`, `nilai_pengetahuan_mapel5`, `predikat_pengetahuan_mapel5`, `deskripsi_pengetahuan_mapel5`, `nilai_keterampilan_mapel5`, `predikat_keterampilan_mapel5`, `deskripsi_keterampilan_mapel5`, `nama_mapel6`, `nilai_pengetahuan_mapel6`, `predikat_pengetahuan_mapel6`, `deskripsi_pengetahuan_mapel6`, `nilai_keterampilan_mapel6`, `predikat_keterampilan_mapel6`, `deskripsi_keterampilan_mapel6`, `nama_mapel7`, `nilai_pengetahuan_mapel7`, `predikat_pengetahuan_mapel7`, `deskripsi_pengetahuan_mapel7`, `nilai_keterampilan_mapel7`, `predikat_keterampilan_mapel7`, `deskripsi_keterampilan_mapel7`, `nama_mapel8`, `nilai_pengetahuan_mapel8`, `predikat_pengetahuan_mapel8`, `deskripsi_pengetahuan_mapel8`, `nilai_keterampilan_mapel8`, `predikat_keterampilan_mapel8`, `deskripsi_keterampilan_mapel8`, `nama_mapel9`, `nilai_pengetahuan_mapel9`, `predikat_pengetahuan_mapel9`, `deskripsi_pengetahuan_mapel9`, `nilai_keterampilan_mapel9`, `predikat_keterampilan_mapel9`, `deskripsi_keterampilan_mapel9`, `created_at`, `updated_at`) VALUES
(10, 'GREGORIUS M. DHARMAWAN', '0610170180', '-', 'ganjil', '2017-2018', '6.a', 'SDN 3 Rantepao', 'jln.123', 'Sikap Spiritual', 'Ananda Chriszhen Lobo Sambo Karaeng sangat baik dalam ketaatan beribadah, menerima dan menjalankan agama yang dianutnya, berdoa sebelum dan sesudah melakukan kegiatan dan dengan bimbingan dan pendampingan yang lebih akan mampu meningkatkan sikap toleransi dalam beribadah dan berperilaku syukur.', 'Sikap Sosial', 'Ananda Chrizhen Lobo Sambo Karaeng sangat baik dan jujur, peduli, santun, disiplin, tanggungjawab, percaya diri, dan dengan bimbingan dan pendampingan yang lebih akan mampu meningkatkan sikap kerjasama.', 'Pendidikan Agama dan Budi Pekerti', '80', 'B', 'Baik dalam mengenal dirinya sebagai ciptaan Allah', '82', 'B', 'Baik dalam Membuat karya sederhana yang menunjukkan bertanggungjawab terhadap dirinya sebagai ciptaan Allah', 'Pendidikan Pancasila dan Kewarganegaraan', '80', 'B', 'Baik dalam mengenal simbol-simbol sila Pancasila dalam lambang Negara', '81', 'B', 'Baik dalam mengamati dan menceritakan perilaku di sekitar rumah dan mengatikannya dengan salah satu simbol sila Pancasil', 'Bahasa Indonesia', '78', 'B', 'Baik dalam mengemukakan kegiatan persiapan menulis permulaan.', '77', 'B', 'Baik dalam menyampaikan teks terima kasih mengenai sikap kasih sayang secara mandiri dalam bahasa Indonesia lisan dan tulis yang dapat diisi dengan kosakata yang benar.', 'Matematika', '80', 'B', 'Baik dalam mengenal lambang  bilangan dan mendeskripsikan kemunculan bilangan dengan bahasa sederhana.', '80', 'B', 'Baik dalam mengurai sebuah bilangan asli sampai 99 sebagai hasil penjumlahan atau pengurangan dua buah bilangan asli lainnya.', 'Seni Budaya dan Prakarya', '80', 'B', 'Baik dalam mengenal karya ekspresi dua dan tiga dimensi.', '79', 'B', 'Baik dalam menyanyikan lagu anak-anak dan memperagakan tepuk irama dengan gerak.', 'Pendidikan Jasmani, Olahraga dan Kesehatan', '79', 'B', 'Baik dalam mengetahui konsep bergerak secara seimbang dan dapat dalam rangka pengembangan kebugaran jasmani melalui permainan sederhana.', '78', 'B', 'Baik dalam memahami bagian-bagian tubuh, bagian tubuh yang boleh dan tidak boleh disentuh orang lain, cara menjaga kebersihannya, dan kebersihan pakaian.', 'Muatan Lokal Bahasa Daerah', '78', 'B', '-', '-', '-', '-', 'Muatan Lokal Bahasa Inggris', '76', 'B', '-', '-', '-', '-', 'Muatan Lokal Pertanian', '79', 'B', '-', '-', '-', '-', '2023-06-30 19:05:43', '2023-07-04 18:06:41'),
(17, 'CHRIZHEN L. S. KARAENG', '061017018', '-', 'ganjil', '2017-2018', '1.a', 'SDN 3 Rantepao', 'jln.123', 'Sikap Spiritual', 'Ananda Chrizhen Lobo Sambo Karaeng sangat  baik dalam ketaatan beribadah, menerima dan menjalankan agama yang dianutnya, berdoa sebelum dan sesudah melakukan kegiatan dan dengan bimbingan dan pendampingan yang lebih akan mampu meningkatkan sikap toleransi dalam beribadah dan berperilaku syukur.', 'Sikap Sosial', 'Ananda Chrizhen Lobo Sambo Karaeng sangat baik dalam jujur, peduli, santun, disiplin, tanggung jawab, percaya diri, dan dengan bimbingan dan pendampingan yang lebih akan mampu meningkatkan sikap kerjasama.', 'Pendidikan Agama dan Budi Pekerti', '80', 'B', 'Baik dalam mengenal dirinya sebagai ciptaan Allah', '82', 'B', 'Baik dalam Membuat karya sederhana yang menunjukkan bertanggungjawab terhadap dirinya sebagai ciptaan Allah', 'Pendidikan Pancasila dan Kewarganegaraan', '80', 'B', 'Baik dalam mengenal simbol-simbol sila Pancasila dalam lambang Negara', '81', 'B', 'Baik dalam mengamati dan menceritakan perilaku di sekitar rumah dan mengatikannya dengan salah satu simbol sila Pancasil', 'Bahasa Indonesia', '78', 'B', 'Baik dalam mengemukakan kegiatan persiapan menulis permulaan.', '77', 'B', 'Baik dalam menyampaikan teks terima kasih mengenai sikap kasih sayang secara mandiri dalam bahasa Indonesia lisan dan tulis yang dapat diisi dengan kosakata yang benar.', 'Matematika', '80', 'B', 'Baik dalam mengenal lambang  bilangan dan mendeskripsikan kemunculan bilangan dengan bahasa sederhana.', '80', 'B', 'Baik dalam mengurai sebuah bilangan asli sampai 99 sebagai hasil penjumlahan atau pengurangan dua buah bilangan asli lainnya.', 'Seni Budaya dan Prakarya', '80', 'B', 'Baik dalam mengenal karya ekspresi dua dan tiga dimensi.', '79', 'B', 'Baik dalam menyanyikan lagu anak-anak dan memperagakan tepuk irama dengan gerak.', 'Pendidikan Jasmani, Olahraga dan Kesehatan', '79', 'B', 'Baik dalam mengetahui konsep bergerak secara seimbang dan dapat dalam rangka pengembangan kebugaran jasmani melalui permainan sederhana.', '78', 'B', 'Baik dalam memahami bagian-bagian tubuh, bagian tubuh yang boleh dan tidak boleh disentuh orang lain, cara menjaga kebersihannya, dan kebersihan pakaian.', 'Muatan Lokal Bahasa Daerah', '78', '-', '-', '-', '-', '-', 'Muatan Lokal Bahasa Inggris', '76', 'B', '-', '-', '-', 't', 'Muatan Lokal Pertanian', '79', 'B', '-', '-', '-', '-', '2023-07-04 18:00:11', '2023-08-22 06:00:54'),
(21, 'CHRIZHEN L. S. KARAENG', '061017018', '0116646605', 'genap', '2017-2018', '1.a', 'SDN 3 Rantepao', 'jln.123', 'Sikap Spiritual', 'Ananda Chrizhen Lobo Sambo Karaeng sangat baik dalam ketaatan beribadah, menerima dan menjalankan agama yang dianutnya, berperilaku syukur, berdoa sebelum dan sesudah melakukan kegiatan dan dengan bimbingan dan pendampingan yang lebih akan mampu meningkatkan sikap toleransi dalam beribadah.', 'Sikap Sosial', 'Ananda Chrizhen Lobo Sambo Karaeng sangat baik dalam sikap jujur, peduli, santun, disiplin, tanggungjawab, kerjasama dan dengan bimbingan dan pendampingan yang lebih akan mampu meningkatkan sikap percaya diri.', 'Pendidikan Agama dan Budi Pekerti', '86', 'A', 'Ananda Chrizhen Lobo Sambo Karaeng sangat baik dalam menyebutkan contoh tanggung jawab dalam memelihara alam Ciptaan Allah.', '88', 'A', 'Ananda Chrizhen Lobo Sambo Karaeng sangat baik dalam melakukan tindakan sederhana dalam memelihara ciptaan Allah.', 'Pendidikan Pancasila dan Kewarganegaraan', '84', 'B', 'Ananda Chrizhen Lobo Sambo Karaeng sangat baik dalam mengenal simbol-simbol sila Pancasila dalam lambang negara \"Garuda Pancasila\"\"', '85', 'B', 'Ananda Chrizhen Lobo Sambo Karaeng sangat baik dalam menceritakan simbol-simbol sila Pancasila pada lambang Garuda Pancasila.', 'Bahasa Indonesia', '83', 'B', 'Ananda Chrizhen Lobo Sambo Karaeng sangat baik dalam menyampaikan terima kasih permintaan maaf, tolong, dan pemberian pujian, pemberitahuan, perintah, dan petunjuk kepada orang lain dalam menggunakan bahasa yang santun secara lisan dan tulisan.', '81', 'B', 'Ananda Chrizhen Lobo Sambo Karaeng sangat baik dalam mempraktekkan ungkapan terima kasih, permintaan maaf, tolong, dan pemberian pujian dengan menggunakan bahasa yang santun kepada orang lains secara lisan dan tulis.', 'Matematika', '83', 'B', 'Ananda Chrizhen Lobo Sambo Karaeng sangat baik dalam membandingkan dua bilangan sampai dua angka dengan menggunakan kumpulan benda-benda kongkret.', '83', 'B', 'Ananda Chrizhen Lobo Sambo Karaeng sangat baik dalam mengurutkan bilangan-bilangan dua angka dari bilangan terkecil ke bilangan terbesar atau sebaliknya dengan menggunakan kumpulan benda-benda kongkret.', 'Seni Budaya dan Prakarya', '82', 'B', 'Ananda Chrizhen Lobo Sambo Karaeng sangat baik dalam mengenal bahan alam dalam berkarya', '85', 'B', 'Ananda Chrizhen Lobo Sambo Karaeng sangat baik dalam membuat karya dari bahan alam.', 'Pendidikan Jasmani, Olahraga dan Kesehatan', '84', 'B', 'Ananda Chrizhen Lobo Sambo Karaeng sangat baik dalam memahami dasar lokomotor dan non lokomotor sesuai dengan irama (ketukan) tanpa/dengan musik dalam aktifitas gerak berirama.', '86', 'A', 'Ananda Chrizhen Lobo Sambo Karaeng sangat baik dalam mempraktekkan gerak dasar lokomotor dan non lokomotor sesuai dengan irama (ketukan) tanpa/dengan music dalam aktifitas gerak berirama.', 'Muatan Lokal Bahasa Daerah', '80', 'B', '-', '-', '-', '-', 'Muatan Lokal Bahasa Inggris', '82', 'B', '-', '-', '-', '-', 'Muatan Lokal Pertanian', '85', 'B', '-', '-', '-', '-', '2023-07-05 10:21:05', '2023-07-05 10:21:05'),
(22, 'CHRIZHEN L. S. KARAENG', '061017018', '-', 'ganjil', '2018/2019', '2.a', 'SDN 3 Rantepao', 'jln.123', 'Sikap Spiritual', 'Ananda Chrizhen Lobo Sambo Karaeng sudah baik dalam ketaatan beribadah, berprilaku syukur, berdoa sebelum dan sesudah melakukan kegiatan toleransi.', 'Sikap Sosial', 'Ananda Chrizhen Lobo Sambo Karaeng  sudah baik dalam sikap jujur, disiplin, tanggung jawab, percaya diri, kerjasama, santun.', 'Pendidikan Agama dan Budi Pekerti', '81', 'B', 'Ananda Chrizhen Lobo Sambo Karaeng sudah baik dalam memahami alasan menghormati orangtua, dan sudah baik dalam memahami pentingnya tanggung jawab dalam keluarga.', '83', 'B', 'Ananda Chrizhen Lobo Sambo Karaeng sudah baik dalam mempraktekkan sikap hormat kepada orangtua, dan sudah baik dalam mempraktekkan tanggung jawab dalam keluarga melalui tindakan sederhana sesuai usianya.', 'Pendidikan Pancasila dan Kewarganegaraan', '83', 'B', 'Ananda Chrizhen Lobo Sambo Karaeng sangat baik dalam mengindentifikasi jenis-jenis keberagaman karakteristik individu di sekolah, dan sudah baik dalam mengidentifikasi hubungan antara simbol dan sila-sila Pancasila dalam lambang negara Garuda Pancasil', '79', 'B', 'Ananda Chrizhen Lobo Sambo Karaeng sudah baik dalam menjelaskan hubungan gambar pada lambang negara dengan sila-sila Pancasila, dan sudah baik dalam menceritakan kegiatan sesuai aturan dan tata tertib yang berlaku di sekolah.', 'Bahasa Indonesia', '75', 'C', 'Ananda Chrizhen Lobo Sambo Karaeng sudah baik dalam mengenal kosakata dan konsep tentang lingkungan sehat dan lingkungan sekitar serta cara dan cukup baik dalam merinci ungkapan, ajakan, perintah, penolkan yang terdapat dalam teks cerita atau lagu yang menggambarkan sikap hidup rukun.', '80', 'B', 'Ananda Chrizhen Lobo Sambo Karaeng sudah baik dalam menyajikan penggunaan kosakata bahasa Indonesia yang tepat atau bahasa daerah hasil pengamatan tentang lingkungan, dan sudah baik dalam melaporkan penggunaan kosa kata bahasa Indonesia yang tepat atau bahasa daerah hasil pengamatann tentang keragaman benda berdasarkan bentuk dan wujudnya', 'Matematika', '80', 'B', 'Ananda Chrizhen Lobo Sambo Karaeng sangat baik dalam menjelaskan bangun datar dan bangun ruang berdasarkan ciri-cirinya, dan cukup baik dalam membandingkan dua bilangan cacah.', '79', 'B', 'Ananda Chrizhen Lobo Sambo Karaeng sudah baik dalam mengurutkan nilai mata uang serta mendemonstrasikan berbagai kesetaraan mata uang, dan cukup baik dalam mengklasifikasi bangun datar dan bangun ruang berdasarkan ciri-cirinya.', 'Seni Budaya dan Prakarya', '85', 'B', 'Ananda Chrizhen Lobo Sambo Karaeng sangat baik dalam mengenal karya imajinatif dua dan tiga dimensi, dan sudah baik dalam mengenal gerak keseharian dan alam dalam tari.', '85', 'B', 'Ananda Chrizhen Lobo Sambo Karaeng sangat baik dalam menampilkan pola irama sederhana melalui lagu anak-anak, dan sudah baik dalam meragakan gerak keseharian dan alam dalam tari', 'Pendidikan Jasmani, Olahraga dan Kesehatan', '88', 'B', 'Ananda Chrizhen Lobo Sambo Karaeng sangat baik dalam memahami variasi gerak dasar manipulatif sesuai dengan konsep tubuh, ruang, usaha, dan keterhubungan dalam, dan sudah baik dalam memahami variasi gerak dasar non lokomotor sesuai dengan konsep tubuh, ruang, usaha, dan keterhubungan.', '85', 'B', 'Ananda Chrizhen Lobo Sambo Karaeng sangat baik dalam mempraktikkan variasi gerak dan lokomotor sesuai dengan konsep tubuh, ruang, usaha, dan keterhubungan dalam, dan sudah baik dalam mempraktikkan variasi gerak dasar non lokomotor sesuai dengan konsep tubuh, ruang, usaha, dan keterhubungan.', 'Muatan Lokal Bahasa Daerah', '80', 'B', '-', '-', '-', '-', 'Muatan Lokal Bahasa Inggris', '76', 'C', '-', '-', '-', '-', 'Muatan Lokal Pertanian', '-', '-', '-', '-', '-', '-', '2023-07-05 10:45:10', '2023-07-05 10:45:10'),
(23, 'CHRIZHEN L. S. KARAENG', '061017018', '-', 'genap', '2018/2019', '2.a', 'SDN 3 Rantepao', 'jln.123', 'Sikap Spiritual', 'Ananda Chrizhen Lobo S. Karaeng sangat baik dalam berdoa sebelum dan sesudah melakukan kegiatan, sudah baik dalam ketaatan beribadah, berprilaku syukur, toleransi', 'Sikap Sosial', 'Ananda Chrizhen Lobo S. Karaeng sangat baik dalam sikap tanggung jawab, percaya diri, sudah baik dalam sikap jujur, disiplin, kerjasama, santun.', 'Pendidikan Agama dan Budi Pekerti', '84', 'B', 'Ananda Chrizhen Lobo S. Karaeng sangat baik dalam memahami cara menjaga kerukunan di sekolah dan di lingkungannya, dan sangat baik dalam memahami cara menjaga kerukunan di sekolah dan di lingkungannya.', '90', 'A', 'Ananda Chrizhen Lobo S. Karaeng sangat baik dalam menyajikan cara menjaga dan menerapkan hidup rukun di sekolah dan di lingkungannya, dan sangat baik dalam menyajikan cara menjaga dan menerapkan hidup rukun di sekolah dan dilingkungannya.', 'Pendidikan Pancasila dan Kewarganegaraan', '85', 'B', 'Ananda Chrizhen Lobo S. Karaeng sangat baik dalam mengidentifikasi hubungan antara simbol dan sila-sila pancasila dalam lambang negara \"Garuda Pancasila\", dan sangat baik dalam mengidentifikasi hbungan antara simbol dan sila-sila pancasila dalam lambang negara \"Garuda Pancasila\"', '82', 'B', 'Ananda Chrizhen Lobo S. Karaeng sangat baik dalam menceritakan hubungan antara simbol dan sila-sila Pancasila dalam lambang negara \"Garuda Pancasila\", dan sudah baik dalam menceritakan kegiatan sesuai dengan aturan dan tata tertib yang berlaku di sekolah', 'Bahasa Indonesia', '79', 'B', 'Ananda Chrizhen Lobo S. Karaeng sudah baik dalam mencermati puisi anak dalam bahasa Indonesia atau bahasa daerah melalui teks tulis dan lisan, dan sudah baik dalam mencermati puisi anak dalam bahasa Indonesia atau bahasa daerah melalui teks tulis dan lisan.', '86', 'B', 'Ananda Chrizhen Lobo S. Karaeng sangat baik dalam menyampaikan ungkapan-ungkapan santun (menggunakan kata \"maaf\", \"tolong\" ) untuk hidup rukun dalam dan sudah baik dalam menulis dengan tulisan tegak bersambung menggunakan hurup kapital (awal kalimat, nama bulan, dan hari))', 'Matematika', '83', 'B', 'Ananda Chrizhen Lobo S. Karaeng sudah baik dalam menjelaskan dan menentukan panjang (termasuk jarak) berat dan waktu dalam satuan baku yang dan sudah baik dalam menjelaskan dan menentukan panjang (termasuk jarak), berat, dan waktu dalam satuan baku', '84', 'B', 'Ananda Chrizhen Lobo S. Karaeng sudah baik dalam menyajikan pecahan 1/2, 1/3, 1/4 yang bersesuaian dengan bagian dari keseluruhan suatu benda konkret dalam dan cukup baikd alam melakukan pengukuran panjang (termasuk jarak) berat dan waktu dalam satuan baku yang berkaitan.', 'Seni Budaya dan Prakarya', '85', 'B', 'Ananda Chrizhen Lobo S. Karaeng sudah baik dalam mengenal karya imajinatif dua dan tiga dimensi dan sudah baik dalam mengenal karya imajinatif dua dan tiga dimensi.', '89', 'A', 'Ananda Chrizhen Lobo S. Karaeng sangat baik dalam meragakan gerak keseharian dan alam dalam tari, dan sudah baik dalam menampilkan pola irama sederhana melalui lagu anak-anak.', 'Pendidikan Jasmani, Olahraga dan Kesehatan', '84', 'B', 'Ananda Chrizhen Lobo S. Karaeng sudah baik dalam memahami variasi berbagai pola gerak dominan (bertumpu, bergantung, keseimbangan, berpindah) dan sudah baik dalam memahami variasi berbagai pola gerak dominan (bertumpu, bergantung, keseimbangan, dan berpindah)', '85', 'B', 'Ananda Chrizhen Lobo S. Karaeng sangat baik dalam menceritakan cara menjaga kebersihan lingkungan (tempat tidur, rumah, kelas, lingkungan sekolah, dan lain-lain) dan sudah baik dalam mempraktikkan variasi berbagai pola gerak dominan (bertumpu, bergantung, keseimbangan, dan berpindah)', 'Muatan Lokal Bahasa Daerah', '81', 'B', '-', '-', '-', '-', 'Muatan Lokal Bahasa Inggris', '79', 'B', '-', '-', '-', '-', 'Muatan Lokal Pertanian', '-', '-', '-', '-', '-', '-', '2023-07-05 11:24:08', '2023-07-05 11:24:08'),
(24, 'CHRIZHEN L. S. KARAENG', '061017018', '0116646605', 'ganjil', '2019/2020', '3.a', 'SDN 3 Rantepao', 'jln.123', 'Sikap Spiritual', 'Ananda Chrizhen Lobo S. Karaeng sangat baik dalam ketaatan beribadah, sangat baikd alam berprilaku syukur, sangat baik dalam berdoa sebelum dan sesudah melakukan kegiatan, sangat baik dalam toleransi beribadah.', 'Sikap Sosial', 'Ananda Chrizhen Lobo S. Karaeng sangata baik dalam jujur, sangat baikd alam disiplin, sangat baik dalam tanggungjawab, sangatb aik dalam peduli, sangat baik dalam percaya diri.', 'Pendidikan Agama dan Budi Pekerti', '-', '-', '-', '-', '-', '-', 'Pendidikan Pancasila dan Kewarganegaraan', '-', '-', '-', '-', '-', '-', 'Bahasa Indonesia', '-', '-', '-', '-', '-', '-', 'Matematika', '-', '-', '-', '-', '-', '-', 'Seni Budaya dan Prakarya', '-', '-', '-', '-', '-', '-', 'Pendidikan Jasmani, Olahraga dan Kesehatan', '-', '-', '-', '-', '-', '-', 'Muatan Lokal Bahasa Daerah', '-', '-', '-', '-', '-', '-', 'Muatan Lokal Bahasa Inggris', '-', '-', '-', '-', '-', '-', 'Muatan Lokal Pertanian', '-', '-', '-', '-', '-', '-', '2023-07-05 11:32:37', '2023-07-05 11:32:37'),
(25, 'CHRIZHEN L. S. KARAENG', '061017018', '0116646605', 'genap', '2019/2020', '3.a', 'SDN 3 Rantepao', 'jln.123', 'Sikap Spiritual', 'Ananda Chrizhen Lobo S. Karaeng sudah baik dalam ketaatan beribadah, berprilaku syukur, berdoa sebelum dan sesudah melakukan kegiatan toleransi', 'Sikap Sosial', 'Ananda Chrizhen Lobo S. Karaeng sangat baik dalam sikap jujur, kerjasama, sudah baik dalam sikap disiplin, tanggung jawab.', 'Pendidikan Agama dan Budi Pekerti', '--', '-', '-', '-', '-', '-', 'Pendidikan Pancasila dan Kewarganegaraan', '-', '-', '-', '-', '-', '-', 'Bahasa Indonesia', '-', '-', '--', '-', '-', '-', 'Matematika', '-', '-', '-', '-', '-', '-', 'Seni Budaya dan Prakarya', '--', '-', '-', '-', '-', '-', 'Pendidikan Jasmani, Olahraga dan Kesehatan', '-', '-', '-', '-', '-', '-', 'Muatan Lokal Bahasa Daerah', '-', '-', '-', '-', '-', '-', 'Muatan Lokal Bahasa Inggris', '-', '-', '-', '-', '-', '-', 'Muatan Lokal Pertanian', '-', '-', '-', '-', '-', '-', '2023-07-05 11:37:34', '2023-07-05 11:37:34'),
(26, 'CHRIZHEN L. S. KARAENG', '061017018', '0116646605', 'ganjil', '2020/2021', '4.a', 'SDN 3 Rantepao', 'jln.123', 'Sikap Spiritual', 'Ananda Chrizhen Lobo S. Karaeng sudah baikd alam ketaatan beribadah, berprilaku syukur, berdoa sebelum dan sesudah melakukan kegiatan toleransi', 'Sikap Sosial', 'Ananda Chrizhen Lobo S. Karaeng sudah baik dalam sikap percaya diri, kerjasama, dan dengan bimbingan dan pendampingan yang lebih akan meningkatkan sikap jujur, disiplin, tanggungjawab, santun.', 'Pendidikan Agama dan Budi Pekerti', '-', '-', '-', '-', '-', '-', 'Pendidikan Pancasila dan Kewarganegaraan', '-', '-', '-', '-', '-', '-', 'Bahasa Indonesia', '-', '-', '-', '-', '-', '-', 'Matematika', '-', '-', '-', '-', '-', '-', 'Seni Budaya dan Prakarya', '-', '-', '-', '-', '-', '-', 'Pendidikan Jasmani, Olahraga dan Kesehatan', '-', '-', '-', '-', '-', '-', 'Muatan Lokal Bahasa Daerah', '-', '-', '-', '-', '-', '-', 'Muatan Lokal Bahasa Inggris', '-', '-', '-', '-', '--', '-', 'Muatan Lokal Pertanian', '-', '-', '-', '-', '-', '-', '2023-07-05 11:44:32', '2023-07-05 11:44:32'),
(27, 'CHRIZHEN L. S. KARAENG', '061017018', '0116646605', 'genap', '2020/2021', '4.a', 'SDN 3 Rantepao', 'jln.123', 'Sikap Spiritual', 'Ananda Chrizhen Lobo S. Karaeng sudah baik dalam ketaatan beribadah, berprilaku syukur, berdoa sebelum dan sesudah melakukan kegiatan toleransi.', 'Sikap Sosial', 'Ananda Chrizhen Lobo S. Karaeng sudah baik dalam sikap percaya diri, kerjasama dan dengan bimbingan dan pendampingan yang lebih akan mampu meningkatkan sikap jujur, disiplin, tanggunjawab, santun', 'Pendidikan Agama dan Budi Pekerti', '-', '-', '-', '-', '-', '-', 'Pendidikan Pancasila dan Kewarganegaraan', '-', '-', '-', '--', '-', '-', 'Bahasa Indonesia', '-', '-', '-', '-', '-', '-', 'Matematika', '-', '-', '-', '-', '-', '-', 'Seni Budaya dan Prakarya', '-', '-', '-', '-', '-', '-', 'Pendidikan Jasmani, Olahraga dan Kesehatan', '-', '-', '-', '-', '-', '-', 'Muatan Lokal Bahasa Daerah', '-', '-', '-', '-', '-', '-', 'Muatan Lokal Bahasa Inggris', '-', '-', '-', '-', '-', '-', 'Muatan Lokal Pertanian', '-', '-', '-', '-', '-', '-', '2023-07-05 11:49:25', '2023-07-05 11:49:25'),
(28, 'CHRIZHEN L. S. KARAENG', '061017018', '0116646605', 'ganjil', '2021/2022', '5.a', 'SDN 3 Rantepao', 'jln.123', 'Sikap Spiritual', 'Ananda Chrizhen Lobo S. Karaeng sangat baik dalam ketaatan beribadah sebelum dan sesudah melakukan kegiatan, dan dengan bimbingan dan pendampingan yang lebih akan mampu meningkatkan sikap berprilaku syukur.', 'Sikap Sosial', 'Ananda Chrizhen Lobo S. Karaeng sangat baik dalam disiplin dan dengan bimbingan dan penampingan yang lebih akan mampu meningkatkan sikap santun, peduli, dan percaya diri.', 'Pendidikan Agama dan Budi Pekerti', '-', '-', '-', '-', '-', '-', 'Pendidikan Pancasila dan Kewarganegaraan', '-', '-', '-', '-', '-', '-', 'Bahasa Indonesia', '-', '--', '-', '-', '-', '-', 'Matematika', '-', '-', '-', '-', '-', '-', 'Seni Budaya dan Prakarya', '-', '-', '-', '-', '-', '-', 'Pendidikan Jasmani, Olahraga dan Kesehatan', '-', '-', '-', '-', '-', '-', 'Muatan Lokal Bahasa Daerah', '-', '-', '-', '-', '-', '-', 'Muatan Lokal Bahasa Inggris', '-', '-', '-', '-', '-', '-', 'Muatan Lokal Pertanian', '-', '-', '-', '-', '-', '-', '2023-07-05 11:56:32', '2023-07-05 11:56:32'),
(29, 'CHRIZHEN L. S. KARAENG', '061017018', '0116646605', 'genap', '2021/2022', '5.a', 'SDN 3 Rantepao', 'jln.123', 'Sikap Spiritual', 'Ananda Chrizhen Lobo S. Karaeng sangat baik dalam ketaatan beribadah, berdoa sebelum dan sesudah melakukan kegiatan, dan dengan bimbingan dan pendampingan yang lebih akan mampu meningkatkan sikap berperilaku syukur.', 'Sikap Sosial', 'Ananda Chrizhen Lobo S. Karaeng sangat baik dalam disiplin, dan dengan bimbingan dan pendampingan yang lebih akan mampu meningkatkan sikap santun, peduli dan percaya diri.', 'Pendidikan Agama dan Budi Pekerti', '-', '-', '-', '--', '-', '-', 'Pendidikan Pancasila dan Kewarganegaraan', '-', '-', '-', '-', '-', '-', 'Bahasa Indonesia', '-', '-', '-', '[', '[', '6----------p0--', 'Matematika', '-', '-', '-', '-', '-', '-', 'Seni Budaya dan Prakarya', '-', '-', '-', '-', '-', '-', 'Pendidikan Jasmani, Olahraga dan Kesehatan', '-', '-', '-', '-', '-', '-', 'Muatan Lokal Bahasa Daerah', '-', '-', '-', '-', '-', '-', 'Muatan Lokal Bahasa Inggris', '-', '-', '-', '-', '-', '-', 'Muatan Lokal Pertanian', '-', '-', '-', '-', '-', '-', '2023-07-05 12:01:31', '2023-07-05 12:01:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `raport2s`
--

CREATE TABLE `raport2s` (
  `id` int(11) NOT NULL,
  `nama_ekstrakurikuler1` varchar(255) NOT NULL,
  `keterangan_nama_ekstrakurikuler1` varchar(255) NOT NULL,
  `nama_ekstrakurikuler2` varchar(255) NOT NULL,
  `keterangan_nama_ekstrakurikuler2` varchar(255) NOT NULL,
  `saran_saran` varchar(255) NOT NULL,
  `tinggi_badan_semester1` varchar(255) NOT NULL,
  `tinggi_badan_semester2` varchar(255) NOT NULL,
  `berat_badan_semester1` varchar(255) NOT NULL,
  `berat_badan_semester2` varchar(255) NOT NULL,
  `nama_aspek_fisik1` varchar(255) NOT NULL,
  `keterangan_aspek_fisik1` varchar(255) NOT NULL,
  `nama_aspek_fisik2` varchar(255) NOT NULL,
  `keterangan_aspek_fisik2` varchar(255) NOT NULL,
  `nama_aspek_fisik3` varchar(255) NOT NULL,
  `keterangan_aspek_fisik3` varchar(255) NOT NULL,
  `nama_aspek_fisik4` varchar(255) NOT NULL,
  `keterangan_aspek_fisik4` varchar(255) NOT NULL,
  `jenis_prestasi1` varchar(255) NOT NULL,
  `keterangan_prestasi1` varchar(255) NOT NULL,
  `jenis_prestasi2` varchar(255) NOT NULL,
  `keterangan_prestasi2` varchar(255) NOT NULL,
  `jumlah_sakit` varchar(255) NOT NULL,
  `jumlah_izin` varchar(255) NOT NULL,
  `jumlah_tanpa_keterangan` varchar(255) NOT NULL,
  `tanggal_penulisan_raport` varchar(255) NOT NULL,
  `nama_wali_kelas` varchar(255) NOT NULL,
  `nip_wali_kelas` varchar(255) NOT NULL,
  `keputusan_naik_kelas` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `raport2s`
--

INSERT INTO `raport2s` (`id`, `nama_ekstrakurikuler1`, `keterangan_nama_ekstrakurikuler1`, `nama_ekstrakurikuler2`, `keterangan_nama_ekstrakurikuler2`, `saran_saran`, `tinggi_badan_semester1`, `tinggi_badan_semester2`, `berat_badan_semester1`, `berat_badan_semester2`, `nama_aspek_fisik1`, `keterangan_aspek_fisik1`, `nama_aspek_fisik2`, `keterangan_aspek_fisik2`, `nama_aspek_fisik3`, `keterangan_aspek_fisik3`, `nama_aspek_fisik4`, `keterangan_aspek_fisik4`, `jenis_prestasi1`, `keterangan_prestasi1`, `jenis_prestasi2`, `keterangan_prestasi2`, `jumlah_sakit`, `jumlah_izin`, `jumlah_tanpa_keterangan`, `tanggal_penulisan_raport`, `nama_wali_kelas`, `nip_wali_kelas`, `keputusan_naik_kelas`, `created_at`, `updated_at`) VALUES
(5, 'Praja Muda Karana (Pramuka)', '-', 'Drum Band', '-', 'Ananda Chriszhen Lobo Sambo Karaeng tetap rajin belajar utamanya membaca.', '113', '-', '24', '-', 'Pendengaran', 'Baik', 'Penglihatan', 'Baik', 'Gigi', 'Normal', 'Lainnya', '-', 'Kesenian', '-', 'Olahraga', '-', '3', '-', '1', '2017-12-16', 'Kristiani, S.Pd.', '-', '-', '2023-06-30 19:05:43', '2023-07-03 21:15:01'),
(12, 'Praja Muda Karana (Pramuka)', '-', 'Drum Band', '-', 'Ananda Chriszhen Lobo\' Sambo Karaeng tetap rajin belajar utamanya membaca.', '113', '-', '24', '-', 'Pendengaran', 'Baik', 'Penglihatan', 'Baik', 'Gigi', 'Normal', 'Lainnya', '-', 'Kesenian', '-', 'Olahraga', '-', '3', '-', '1', '2017-12-16', 'Kristiani, S.Pd.', '197107102008012017', '-', '2023-07-04 18:00:11', '2023-07-05 09:30:13'),
(16, 'Praja Muda Karana (Pramuka)', '-', 'Drum Band', '-', 'Ananda Chrizhen Lobo Sambo Karaeng usahakan tetap rajin belajar di rumah.', '-', '117,4', '-', '26', 'Pendengaran', 'Baik', 'Penglihatan', 'Baik', 'Gigi', 'Berlubang', 'Lainnya', '-', 'Kesenian', '-', 'Olahraga', '-', '3', '2', '5', '2018-06-09', 'Kristiani, S.Pd.', '197107102008012017', 'naik', '2023-07-05 10:21:05', '2023-07-05 10:21:05'),
(17, '-', '-', '-', '-', 'Lebih giat belajar di rumah khususnya membaca', '116', '-', '29', '-', 'Pendengaran', 'Baik', 'Penglihatan', 'Baik', 'Gigi', 'Berlubang', '-', '-', '-', '-', '-', '-', '2', '-', '-', '2018-12-15', 'Desi, S.Pd.', '-', '-', '2023-07-05 10:45:10', '2023-07-05 10:45:10'),
(18, '-', '-', '-', '-', 'Lebih giat belajar di rumah khususnya membaca', '116', '121.5', '29', '30,6', 'Pendengaran', 'Baik', 'Penglihatan', 'Baik', 'Gigi', 'Berlubang', '-', '-', '-', '-', '-', '-', '3', '-', '-', '2019-06-27', 'Desi, S.Pd.', '-', 'naik', '2023-07-05 11:24:08', '2023-07-05 11:24:08'),
(19, '-', '-', '-', '-', '-', '126', '-', '-', '-', 'Pendengaran', '-', 'Penglihatan', '-', 'Penglihatan', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '2019-12-21', 'Marthina R. Lembang, S.Pd.', '-', '-', '2023-07-05 11:32:37', '2023-07-05 11:32:37'),
(20, '-', '-', '-', '-', '-', '-', '-', '-', '-', 'Pendengaran', 'Baik', 'Penglihatan', 'Baik', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '2020-06-27', 'Marthina R. Lembang, S.Pd.', '-', 'naik', '2023-07-05 11:37:34', '2023-07-05 11:37:34'),
(21, '-', '-', '-', '-', '-', '-', '-', '-', '-', 'Pendengaran', 'Baik', 'Penglihatan', '-', 'Gigi', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '2020-12-12', 'Jeni Andarias Tappi, S.Pd.', '198610292009032001', '-', '2023-07-05 11:44:32', '2023-07-05 11:44:32'),
(22, '-', '-', '-', '-', '-', '-', '-', '-', '-', 'Pendengaran', 'Baik', 'Penglihatan', 'Baik', 'Gigi', '-', '-', '-', '-', '-', '-', '-', '-', '1', '-', '2021-06-26', 'Jeni Andarias Tappi, S.Pd.', '198610292009032001', 'naik', '2023-07-05 11:49:25', '2023-07-05 11:49:25'),
(23, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 'Kesenian', '-', 'Olahraga', '-', '2', '0', '3', '2021-12-11', 'Hermin Lolo, S.Pd.', '-', '-', '2023-07-05 11:56:32', '2023-07-05 11:56:32'),
(24, '-', '-', '-', '-', '-', '-', '-', '-', '-', 'Pendengaran', 'Baik', 'Penglihatan', 'Baik', 'Gigi', 'Baik', 'Lainnya', '-', 'Kesenian', '-', 'Olahraga', '-', '0', '0', '2', '2022-06-25', 'Hermin Lolo, S.Pd.', '-', 'naik', '2023-07-05 12:01:31', '2023-07-05 12:01:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswas`
--

CREATE TABLE `siswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_siswa` varchar(255) NOT NULL,
  `nis_siswa` varchar(255) NOT NULL,
  `password_siswa` varchar(255) NOT NULL,
  `tanggal_lahir_siswa` varchar(255) NOT NULL,
  `sampul_raport` varchar(255) DEFAULT NULL,
  `catatan` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `kelas` varchar(255) NOT NULL,
  `nisn` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `siswas`
--

INSERT INTO `siswas` (`id`, `nama_siswa`, `nis_siswa`, `password_siswa`, `tanggal_lahir_siswa`, `sampul_raport`, `catatan`, `created_at`, `updated_at`, `kelas`, `nisn`) VALUES
(3, 'ADI PRATAMA PARINDING', '088017018', '088017018', '2023-06-01', 'upload_sampul_raport/aAwUFf1fx4Teml4hS5Ur2p2TYoP65owZXhH5V3qu.jpg', 'okmbaik', '2023-05-31 20:09:02', '2023-08-22 05:23:53', '1.b', '9999999'),
(4, 'GREGORIUS M. DHARMAWAN', '064017018', '064017018', '2023-06-02', 'upload_sampul_raport/kVo9cGFHxr0Om5B1QaTXcrqXxB7AbpU4tyEDpawU.jpg', NULL, '2023-05-31 20:11:23', '2023-08-22 04:26:34', '1.a', '88888800'),
(5, 'TIARA SALIPADANG', '086017018', '086017018', '2023-06-01', 'upload_sampul_raport/jRA3QeFzf3tSU5YHYAsWjC1KagJEvnZA2eO66VIG.jpg', NULL, '2023-06-01 01:40:53', '2023-08-22 04:26:47', '1.a', ''),
(6, 'HARFI FRANS CORNELIUS', '066017018', '066017018', '2023-06-01', 'upload_sampul_raport/1YsVxMCLdO1nzmjla8Hx8Y2PhEpL2PAUQXdeKaU6.jpg', NULL, '2023-06-01 01:41:26', '2023-08-22 04:27:24', '1.a', ''),
(7, 'CHRIZHEN L. S. KARAENG', '061017018', '061017018', '2023-06-01', 'upload_sampul_raport/JTMoegIgYjMfe2pq3Y4KlVDuTpRc8ilKpXp3nxR1.jpg', NULL, '2023-06-01 01:42:02', '2023-08-22 04:27:15', '1.a', ''),
(8, 'EUSTAKEUS S. SINGKALONG', '063017018', '063017018', '2023-06-01', 'upload_sampul_raport/9X1sYvfUFaWYaGMTjkpbPxp2wLh5VhtdjL9hkCoF.jpg', NULL, '2023-06-01 01:42:34', '2023-08-22 04:27:05', '1.a', ''),
(9, 'AIRISH ABELA ANDREY', '072017018', '072017018', '2023-06-01', 'upload_sampul_raport/HiKIdcjkXFX1VoHStaCrK7Gckmk1RFmqf4RYxItH.jpg', NULL, '2023-06-01 01:43:06', '2023-08-22 04:26:57', '1.a', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jabatan` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `kelas` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `mapel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `jabatan`, `created_at`, `updated_at`, `kelas`, `remember_token`, `mapel`) VALUES
(1, 'admin', 'admin', '12345678', 'admin', '2023-05-31 07:14:55', '2023-05-31 07:14:55', '', NULL, ''),
(2, 'ansel', 'ansel', 'ansel123', 'guru', NULL, NULL, '', NULL, ''),
(6, 'Kristiani', 'kristiani', '12345678', 'walikelas', '2023-07-05 06:52:16', '2023-08-21 23:58:48', '1.a', NULL, ''),
(7, 'Desi', 'desi', '12345678', 'walikelas', '2023-07-05 09:11:51', '2023-08-22 06:59:23', '2.a', NULL, ''),
(8, 'Marthina L. Lembang', 'marthina', '12345678', 'walikelas', '2023-07-05 09:13:14', '2023-08-22 06:59:34', '3.a', NULL, ''),
(9, 'Jeni Andarias Tappi\'', 'jeni', '12345678', 'walikelas', '2023-07-05 09:14:23', '2023-08-22 06:59:41', '4.a', NULL, ''),
(10, 'Hermin Lolo', 'hermin', '12345678', 'walikelas', '2023-07-05 09:15:30', '2023-08-22 06:59:56', '5.a', NULL, '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `agendas`
--
ALTER TABLE `agendas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `galeris`
--
ALTER TABLE `galeris`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galleris`
--
ALTER TABLE `galleris`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gurus`
--
ALTER TABLE `gurus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `guru_mapels`
--
ALTER TABLE `guru_mapels`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mapels`
--
ALTER TABLE `mapels`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pengumumans`
--
ALTER TABLE `pengumumans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengumumen`
--
ALTER TABLE `pengumumen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `raport1s`
--
ALTER TABLE `raport1s`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `raport2s`
--
ALTER TABLE `raport2s`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswas`
--
ALTER TABLE `siswas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `agendas`
--
ALTER TABLE `agendas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `galeris`
--
ALTER TABLE `galeris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `galleris`
--
ALTER TABLE `galleris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `gurus`
--
ALTER TABLE `gurus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT untuk tabel `guru_mapels`
--
ALTER TABLE `guru_mapels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `mapels`
--
ALTER TABLE `mapels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pengumumans`
--
ALTER TABLE `pengumumans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pengumumen`
--
ALTER TABLE `pengumumen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `raport1s`
--
ALTER TABLE `raport1s`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `raport2s`
--
ALTER TABLE `raport2s`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `siswas`
--
ALTER TABLE `siswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
