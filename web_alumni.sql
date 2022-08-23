-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2022 at 06:03 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_alumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumnis`
--

CREATE TABLE `alumnis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `nim` int(11) NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_hp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fakultas_id` bigint(20) UNSIGNED NOT NULL,
  `prodi_id` bigint(20) UNSIGNED NOT NULL,
  `jenjang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_masuk` int(11) NOT NULL,
  `tahun_lulus` int(11) NOT NULL,
  `ipk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organisasi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alumnis`
--

INSERT INTO `alumnis` (`id`, `id_user`, `nim`, `nama`, `gender`, `tempat_lahir`, `tgl_lahir`, `no_hp`, `alamat`, `fakultas_id`, `prodi_id`, `jenjang`, `tahun_masuk`, `tahun_lulus`, `ipk`, `organisasi`, `foto`, `created_at`, `updated_at`) VALUES
(1, 1, 180102019, 'Nuri Nurianti', 'Perempuan', 'Bandung', '1998-11-29', '081224027615', 'Majalaya, Kab.Bandung', 1, 1, 'S1', 2018, 2022, '3.50', 'HIMA dan UKM', 'foto.jpeg', '2022-08-22 09:34:12', '2022-08-22 09:34:12');

-- --------------------------------------------------------

--
-- Table structure for table `alumni_tbls`
--

CREATE TABLE `alumni_tbls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nim` int(11) NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fakultas_id` bigint(20) UNSIGNED NOT NULL,
  `prodi_id` bigint(20) UNSIGNED NOT NULL,
  `tahun_lulus` int(11) NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_fakultas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_fakultas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`id`, `kode_fakultas`, `nama_fakultas`, `created_at`, `updated_at`) VALUES
(1, 'FST01', 'Fakultas Sains dan Teknologi', '2022-08-22 09:34:12', '2022-08-22 09:34:12'),
(2, 'FSH02', 'Fakultas Sosial Humaniora', '2022-08-22 09:34:13', '2022-08-22 09:34:13'),
(3, 'FEB03', 'Fakultas Ekonomi dan Bisnis', '2022-08-22 09:34:13', '2022-08-22 09:34:13'),
(4, 'FAI04', 'Fakultas Agama Islam', '2022-08-22 09:34:13', '2022-08-22 09:34:13');

-- --------------------------------------------------------

--
-- Table structure for table `kuesioners`
--

CREATE TABLE `kuesioners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `alumni_id` bigint(20) UNSIGNED NOT NULL,
  `pertanyaan_satu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan_dua` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan_tiga` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan_empat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `integritas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keahlian` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bahasa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teknologi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `komunikasi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kerjasama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengembangan_diri` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan_lima` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan_enam` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan_tujuh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan_delapan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan_sembilan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan_sepuluh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kuesioners`
--

INSERT INTO `kuesioners` (`id`, `alumni_id`, `pertanyaan_satu`, `pertanyaan_dua`, `pertanyaan_tiga`, `pertanyaan_empat`, `integritas`, `keahlian`, `bahasa`, `teknologi`, `komunikasi`, `kerjasama`, `pengembangan_diri`, `pertanyaan_lima`, `pertanyaan_enam`, `pertanyaan_tujuh`, `pertanyaan_delapan`, `pertanyaan_sembilan`, `pertanyaan_sepuluh`, `created_at`, `updated_at`) VALUES
(1, 1, 'Ya', 'Sangat Berpengaruh', 'Tidak', 'Cukup Sulit', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Ya', 'programming', 'Ya', 'Tidak', 'Tidak', 'semoga kedapannya lebih baik lagi', '2022-08-22 11:11:27', '2022-08-22 11:11:27');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_06_22_143841_create_alumni_tbls_table', 1),
(6, '2022_06_23_153708_create_fakultas_table', 1),
(7, '2022_06_23_154329_create_prodis_table', 1),
(8, '2022_06_23_154926_create_tracerstudies_table', 1),
(9, '2022_07_05_132038_create_posts_table', 1),
(10, '2022_08_09_143934_create_alumnis_table', 1),
(11, '2022_08_20_020655_create_pekerjaans_table', 1),
(12, '2022_08_22_160311_create_kuesioners_table', 1),
(13, '2022_08_22_161153_create_perusahaans_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaans`
--

CREATE TABLE `pekerjaans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `alumni_id` bigint(20) UNSIGNED NOT NULL,
  `memiliki_pekerjaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_instansi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bulan_bekerja` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_bekerja` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_instansi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info_pekerjaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gaji` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_perusahaan_sebelumnya` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mulai_kerja` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alasan_keluar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pekerjaans`
--

INSERT INTO `pekerjaans` (`id`, `alumni_id`, `memiliki_pekerjaan`, `nama_instansi`, `bulan_bekerja`, `tahun_bekerja`, `jenis_instansi`, `info_pekerjaan`, `gaji`, `nama_perusahaan_sebelumnya`, `mulai_kerja`, `alasan_keluar`, `created_at`, `updated_at`) VALUES
(1, 1, 'Ya', 'PT. Teknologi', 'juni', '2021', 'BUMN', 'teman', '1.000.000,00 - Rp 2.500.000,00', 'PT. Cyberlab', 'Mei, 2019', 'Lokasi juah dari rumah', '2022-08-22 09:34:14', '2022-08-22 09:34:14');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `perusahaans`
--

CREATE TABLE `perusahaans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_instansi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_instansi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kontak_instansi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_instansi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sektor_instansi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alumni_id` bigint(20) UNSIGNED NOT NULL,
  `bidang_kerja_alumni` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan_alumni` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_responden` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kontak_responden` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_responden` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan_responden` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lama_kerjasama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `integritas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keahlian` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bahasa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teknologi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `komunikasi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kerjasama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengembangan_diri` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `image`, `excerpt`, `body`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 'Judul ke satu', 'judul-ke-satu', NULL, 'ini isi dari postingan ke satu bla bla bla bla', 'orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. \n            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', NULL, '2022-08-22 09:34:14', '2022-08-22 09:34:14');

-- --------------------------------------------------------

--
-- Table structure for table `prodis`
--

CREATE TABLE `prodis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_prodi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fakultas_id` bigint(20) UNSIGNED NOT NULL,
  `nama_prodi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenjang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prodis`
--

INSERT INTO `prodis` (`id`, `kode_prodi`, `fakultas_id`, `nama_prodi`, `jenjang`, `created_at`, `updated_at`) VALUES
(1, 'TE01', 1, 'Teknik Elektro', 'S1', '2022-08-22 09:34:13', '2022-08-22 09:34:13'),
(2, 'IF02', 1, 'Teknik Informatika', 'S1', '2022-08-22 09:34:13', '2022-08-22 09:34:13'),
(3, 'TI03', 1, 'Teknik Industri', 'S1', '2022-08-22 09:34:13', '2022-08-22 09:34:13'),
(4, 'TPH04', 1, 'Teknik Pangan Halal', 'S1', '2022-08-22 09:34:13', '2022-08-22 09:34:13'),
(5, 'BIO05', 1, 'Bioteknologi', 'S1', '2022-08-22 09:34:13', '2022-08-22 09:34:13'),
(6, 'FAR06', 1, 'Farmasi', 'S1', '2022-08-22 09:34:13', '2022-08-22 09:34:13'),
(7, 'AGR07', 1, 'Agribisnis', 'S1', '2022-08-22 09:34:13', '2022-08-22 09:34:13'),
(8, 'AP08', 2, 'Administrasi Publik', 'S1', '2022-08-22 09:34:13', '2022-08-22 09:34:13'),
(9, 'ILKOM09', 2, 'Ilmu Komunikasi', 'S1', '2022-08-22 09:34:13', '2022-08-22 09:34:13'),
(10, 'KTF10', 2, 'Kriya Tekstil dan Fashion', 'S1', '2022-08-22 09:34:13', '2022-08-22 09:34:13'),
(11, 'PSI11', 2, 'Psikologi', 'S1', '2022-08-22 09:34:13', '2022-08-22 09:34:13'),
(12, 'AKT12', 3, 'Akuntansi', 'S1', '2022-08-22 09:34:13', '2022-08-22 09:34:13'),
(13, 'MAN13', 3, 'Manajemen', 'S1', '2022-08-22 09:34:13', '2022-08-22 09:34:13'),
(14, 'PAI14', 4, 'Pendidikan Agama Islam', 'S1', '2022-08-22 09:34:13', '2022-08-22 09:34:13'),
(15, 'EKSYAR15', 4, 'Ekonomi Syariah', 'S1', '2022-08-22 09:34:13', '2022-08-22 09:34:13');

-- --------------------------------------------------------

--
-- Table structure for table `tracerstudies`
--

CREATE TABLE `tracerstudies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `alumni_id` bigint(20) UNSIGNED NOT NULL,
  `kegiatan_stlh_lulus` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_perusahaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_kantor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_bekerja` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenjang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fakultas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_masuk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_lulus` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_usaha` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bidang_usaha` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_usaha` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_usaha` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relevansi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saran_masukan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tracerstudies`
--

INSERT INTO `tracerstudies` (`id`, `alumni_id`, `kegiatan_stlh_lulus`, `nama_perusahaan`, `jabatan`, `alamat_kantor`, `tahun_bekerja`, `nama_pt`, `jenjang`, `fakultas`, `prodi`, `tahun_masuk`, `tahun_lulus`, `nama_usaha`, `bidang_usaha`, `alamat_usaha`, `tahun_usaha`, `relevansi`, `saran_masukan`, `created_at`, `updated_at`) VALUES
(1, 1, 'Bekerja', 'PT. Teknologi Indonesia', 'Web Programmer', 'jl. Soekarno-Hatta No.04', '2022', 'Universitas Muhammadiyah Bandung', 'S2', 'Sains Dan Teknologi', 'Teknik Informatika', '2022', '-', 'Sigmawi', 'fashion', 'Majalaya Kab.bandung', '2021', 'sesuai', 'semoga lebih baik', '2022-08-22 09:34:12', '2022-08-22 09:34:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nuri Nurianti', '180102019', 'nurinurianti@gmail.com', NULL, '$2y$10$iHNFVSNDLNTnZKArFP2byOKYhi70YAqf7dQXJrhFAnpu7PZPlj29C', 1, NULL, '2022-08-22 09:34:14', '2022-08-22 09:34:14'),
(2, 'Amalia Nur Ahlina', '180102009', 'amalianur@gmail.com', NULL, '$2y$10$vs/cvANiJlmImhNKtCJ4vOcNW67z12LVE07p/XHKSFUBtI6iHkht2', 0, NULL, '2022-08-22 11:49:29', '2022-08-22 11:49:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumnis`
--
ALTER TABLE `alumnis`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `alumnis_id_user_unique` (`id_user`),
  ADD UNIQUE KEY `alumnis_nim_unique` (`nim`);

--
-- Indexes for table `alumni_tbls`
--
ALTER TABLE `alumni_tbls`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `alumni_tbls_nim_unique` (`nim`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fakultas_kode_fakultas_unique` (`kode_fakultas`);

--
-- Indexes for table `kuesioners`
--
ALTER TABLE `kuesioners`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kuesioners_alumni_id_unique` (`alumni_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pekerjaans`
--
ALTER TABLE `pekerjaans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pekerjaans_alumni_id_unique` (`alumni_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `perusahaans`
--
ALTER TABLE `perusahaans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `perusahaans_alumni_id_unique` (`alumni_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `prodis`
--
ALTER TABLE `prodis`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `prodis_kode_prodi_unique` (`kode_prodi`);

--
-- Indexes for table `tracerstudies`
--
ALTER TABLE `tracerstudies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tracerstudies_alumni_id_unique` (`alumni_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumnis`
--
ALTER TABLE `alumnis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `alumni_tbls`
--
ALTER TABLE `alumni_tbls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kuesioners`
--
ALTER TABLE `kuesioners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pekerjaans`
--
ALTER TABLE `pekerjaans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `perusahaans`
--
ALTER TABLE `perusahaans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prodis`
--
ALTER TABLE `prodis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tracerstudies`
--
ALTER TABLE `tracerstudies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
