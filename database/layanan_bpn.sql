-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18 Agu 2019 pada 15.16
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `layanan_bpn`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_07_08_032309_create_permission_tables', 2),
(9, '2019_07_19_124048_create_statuses_table', 3),
(10, '2019_07_20_072646_create_pemohons_table', 3),
(11, '2019_07_20_072720_create_tanahs_table', 3),
(12, '2019_07_20_072721_create_permohonans_table', 3),
(13, '2019_07_20_072835_create_tanggungans_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1),
(1, 'App\\User', 3),
(2, 'App\\User', 2),
(3, 'App\\User', 4),
(4, 'App\\User', 5),
(5, 'App\\User', 6),
(6, 'App\\User', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemohons`
--

CREATE TABLE `pemohons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `umur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kewarganegaraan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jenis_identitas` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nomor_identitas` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pekerjaan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `nama_ibu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status_pasangan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nama_pasangan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `no_hp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `pemohons`
--

INSERT INTO `pemohons` (`id`, `nama`, `umur`, `kewarganegaraan`, `jenis_identitas`, `nomor_identitas`, `pekerjaan`, `alamat`, `nama_ibu`, `status_pasangan`, `nama_pasangan`, `no_hp`, `created_at`, `updated_at`) VALUES
(5, 'Rizqi Mauludin', '23', 'Indonesia', 'KTP', '12345', 'Swasta', 'Jl. A Yani II', 'Sunarti', 'Belum Menikah', NULL, '08992161506', '2019-07-30 06:38:24', '2019-07-30 06:38:24'),
(6, 'Lorem Ipsum', '45', 'Indonesia', 'KTP', '77676767', 'Buruh', 'Jl. Arteri Supadio Gg. Ringin Sari III', 'Lorem Ipsum', 'Belum Menikah', NULL, '087654321', '2019-08-05 06:13:08', '2019-08-05 06:13:08'),
(7, 'Anugrah Ananda', '33', 'Indonesia', 'SIM', '345345543', 'PNS', 'Jl. Adi Sucipto Gg. Beringin', 'Lorem Ipsum', 'Belum Menikah', NULL, '7898766545', '2019-08-05 06:21:53', '2019-08-05 06:21:53'),
(8, 'RRRRRRRRR', '23', 'Indonesia', 'adad', '97876', 'sefef', 'jhbhbjhb', 'hbhbuhbuhb', 'Belum Menikah', NULL, '879879', '2019-08-14 08:59:22', '2019-08-14 08:59:22'),
(9, 'Rizqi Mauludin', '24', 'Indonesia', 'KTP', '987543', 'Honor', 'Jl A Yani II', 'Sunarti', 'Belum Menikah', NULL, '081254076740', '2019-08-14 09:06:06', '2019-08-14 09:06:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `permohonans`
--

CREATE TABLE `permohonans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pemohon_id` bigint(20) UNSIGNED NOT NULL,
  `tanah_id` bigint(20) UNSIGNED NOT NULL,
  `nomor_pemohon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fc_identitas` tinyint(1) NOT NULL DEFAULT '0',
  `surat_kuasa` tinyint(1) NOT NULL DEFAULT '0',
  `bukti_perolehan` tinyint(1) NOT NULL DEFAULT '0',
  `fc_suratukur` tinyint(1) NOT NULL DEFAULT '0',
  `imb` tinyint(1) NOT NULL DEFAULT '0',
  `fc_persetujuanbidang` tinyint(1) NOT NULL DEFAULT '0',
  `fc_rekomendasi` tinyint(1) NOT NULL DEFAULT '0',
  `surat_persetujuan_penguasaan` tinyint(1) NOT NULL DEFAULT '0',
  `surat_pernyataan` tinyint(1) NOT NULL DEFAULT '0',
  `surat_pelepasan_kawasan` tinyint(1) NOT NULL DEFAULT '0',
  `surat_penunjukkan` tinyint(1) NOT NULL DEFAULT '0',
  `surat_rencana` tinyint(1) NOT NULL DEFAULT '0',
  `surat_pernyataan_modal` tinyint(1) NOT NULL DEFAULT '0',
  `surat_lain` tinyint(1) NOT NULL DEFAULT '0',
  `legalitas` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bayar_ptpgt` tinyint(1) NOT NULL DEFAULT '0',
  `file_peta_bidang` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `file_ptpgt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `permohonans`
--

INSERT INTO `permohonans` (`id`, `pemohon_id`, `tanah_id`, `nomor_pemohon`, `fc_identitas`, `surat_kuasa`, `bukti_perolehan`, `fc_suratukur`, `imb`, `fc_persetujuanbidang`, `fc_rekomendasi`, `surat_persetujuan_penguasaan`, `surat_pernyataan`, `surat_pelepasan_kawasan`, `surat_penunjukkan`, `surat_rencana`, `surat_pernyataan_modal`, `surat_lain`, `legalitas`, `bayar_ptpgt`, `file_peta_bidang`, `file_ptpgt`, `status_id`, `created_at`, `updated_at`) VALUES
(2, 5, 2, '1564493904', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 1, '1564493904_petabidang.pdf', '1564493904_ptpgt.pdf', 13, '2019-07-30 06:38:24', '2019-08-14 08:15:28'),
(3, 6, 3, '1565010788', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, 1, '1565010788_petabidang.pdf', '1565010788_ptpgt.pdf', 13, '2019-08-05 06:13:08', '2019-08-08 07:22:33'),
(4, 7, 4, '1565011313', 1, 1, 1, 1, 1, 1, 0, 1, 0, 1, 0, 1, 1, 0, NULL, 1, '1565011313_petabidang.pdf', '1565011313_ptpgt.pdf', 13, '2019-08-05 06:21:53', '2019-08-08 07:22:49'),
(5, 8, 5, '1565798362', 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 1, 1, 0, 0, NULL, 0, NULL, NULL, 1, '2019-08-14 08:59:22', '2019-08-14 08:59:39'),
(6, 9, 6, '1565798766', 1, 0, 1, 0, 0, 0, 0, 1, 1, 1, 0, 0, 0, 0, NULL, 0, NULL, NULL, 1, '2019-08-14 09:06:06', '2019-08-14 09:06:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Superadmin', 'web', '2019-07-07 21:55:33', '2019-07-27 05:09:19'),
(2, 'Admin', 'web', '2019-07-07 21:56:01', '2019-07-27 05:09:36'),
(3, 'Loket', 'web', '2019-07-07 21:59:20', '2019-07-07 23:47:17'),
(4, 'IP', 'web', '2019-07-27 05:09:44', '2019-07-27 05:09:44'),
(5, 'P2', 'web', '2019-07-27 05:09:52', '2019-07-27 05:09:52'),
(6, 'HHP', 'web', '2019-07-27 05:09:59', '2019-07-27 05:09:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `statuses`
--

CREATE TABLE `statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `statuses`
--

INSERT INTO `statuses` (`id`, `nama`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Permohonan Masuk', 'IP', NULL, NULL),
(2, 'Pra Pengukuran', 'IP', NULL, NULL),
(3, 'Pengukuran', 'IP', NULL, NULL),
(4, 'Permohonan Masuk ke P2', 'IP', NULL, NULL),
(5, 'Pembuatan Laporan Aspek Pertimbangan', 'P2', NULL, NULL),
(6, 'Menunggu Pembayaran PTPGT Dari Pemohon', 'P2', NULL, NULL),
(7, 'PTPGT Telah Dibayar', 'P2', NULL, NULL),
(8, 'Permohonan Masuk ke HHP', 'P2', NULL, NULL),
(9, 'Panitia A Turun Lapangan', 'HHP', NULL, NULL),
(10, 'Publikasi Koran', 'HHP', NULL, NULL),
(11, 'Proses Pencetakan Sertifikat', 'HHP', NULL, NULL),
(12, 'Sertifikat Dalam Proses Paraf', 'HHP', NULL, NULL),
(13, 'Permohonan Selesai', 'HHP', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanahs`
--

CREATE TABLE `tanahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pemohon_id` bigint(20) UNSIGNED NOT NULL,
  `jalan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `desa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kabupaten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `luas` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batas_utara` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batas_timur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batas_selatan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batas_barat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status_tanah` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hak_tanah` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal_haktanah` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nomor_haktanah` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jenis_tanah` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dasar_penguasaan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rencana_penggunaan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `tanahs`
--

INSERT INTO `tanahs` (`id`, `pemohon_id`, `jalan`, `desa`, `kecamatan`, `kabupaten`, `luas`, `batas_utara`, `batas_timur`, `batas_selatan`, `batas_barat`, `status_tanah`, `hak_tanah`, `tanggal_haktanah`, `nomor_haktanah`, `jenis_tanah`, `dasar_penguasaan`, `rencana_penggunaan`, `created_at`, `updated_at`) VALUES
(2, 5, 'Jl. Adi Sucipto', 'Kampung Arang', 'Arang Limbung', 'Kubu Raya', '100', 'Sawah', 'Sawah', 'Sawah', 'Sungai', 'Status', 'Surat Pernyataan Tanah', '2 Agustus 2000', '98765', 'Suami', 'Lorem Ipsum', 'Suami', '2019-07-30 06:38:24', '2019-07-30 06:38:24'),
(3, 6, 'Jl. Parit Tengkorak Km. 5', 'Lorem Ipsum', 'Lorem Ipsum', 'Kubu Raya', '345', 'Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum', 'Surat Pernyataan Tanah', '4 Mei 2000', '567', 'Pertanian', 'Lorem Ipsum', 'Pertanian', '2019-08-05 06:13:08', '2019-08-05 06:13:08'),
(4, 7, 'Jl. Parit Bugis', 'Arang Limbung', 'Bekarang', 'Kubu Raya', '230', 'Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum', 'Ketitir', '2 Juni 1998', '23', 'Pertanian', 'Lorem Ipsum', 'Pertanian', '2019-08-05 06:21:53', '2019-08-05 06:21:53'),
(5, 8, 'kjnkjnkjn', 'lllplpl', 'fygyg', 'hbjhbjb', '7687', 'kjnkj', 'kjb', 'jhjh', 'kjb', 'Hak Milik', 'SKPT', '2 Agustus 2000', '98765', 'Pertanian', 'Lorem Ipsum', 'Pertanian', '2019-08-14 08:59:22', '2019-08-14 08:59:22'),
(6, 9, 'Jl A Yani II', 'Arang Limbung', 'Arang', 'Kubu Raya', '1000 Ha', 'Sungai', 'Sungai', 'Sungai', 'Sungai', 'Hak Milik', 'Ketitir', '2019-07-10', '5657', 'Pertanian', 'Lorem Ipsum', 'Pertanian', '2019-08-14 09:06:06', '2019-08-14 09:06:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanggungans`
--

CREATE TABLE `tanggungans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pemohon_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dio Nuzuluddin Natsir', 'dionatsir', 'dionatsir@gmail.com', NULL, '$2y$10$i8SvXxyGh/255qqb8cZzReLFl90vxP8HlwS3U0hfqus9xp8747yPW', NULL, '2019-07-07 19:46:41', '2019-07-07 23:40:14'),
(2, 'Bart Stein', 'stein', 'bart@stein.com', NULL, '$2y$10$Y2Oq8FucPOO36uLm1Fi36OXFAmU1G84ZGwKiXGZ4pnGn04Liql36K', NULL, '2019-07-07 19:57:18', '2019-07-07 23:40:53'),
(3, 'Rizqi Mauludin', 'rizqi', 'rizqiedge.rm@gmail.com', NULL, '$2y$10$Ld0w7JG9zXIj4cKTJD2yi.WMm5.zRTbysU/M9uk.V6P.SYDzOCQRu', NULL, '2019-07-20 02:30:54', '2019-07-20 02:30:54'),
(4, 'Loket', 'loket', 'loket@gmail.com', NULL, '$2y$10$4V2/7oGzM9s2Z0NfONLxW.UyHjVEns.UetlDth58kznskXxL08rEW', NULL, '2019-07-27 05:23:47', '2019-07-27 05:23:47'),
(5, 'IP BPN', 'ipbpn', 'ip@gmail.com', NULL, '$2y$10$CV6HVxtcGSYogd0v.StN5eoeLT3mSI0wpssFEe4ox2pTEFYDvpX8S', NULL, '2019-07-27 05:24:27', '2019-07-27 05:24:27'),
(6, 'P2 BPN', 'p2bpn', 'p2@gmail.com', NULL, '$2y$10$kdko7w.0CL6JGK/cAL/2JushEmau/QCBuZVB1F0OgsT17fsPB4O1.', NULL, '2019-07-27 05:24:53', '2019-07-27 05:24:53'),
(7, 'HHP BPN', 'hhpbpn', 'hhp@gmail.com', NULL, '$2y$10$btW2vYxGMeT4AnL/pFvkXun.KqSEQhAprY8TvXj2kmQUvWGwtW7kK', NULL, '2019-07-27 05:25:22', '2019-07-27 05:25:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pemohons`
--
ALTER TABLE `pemohons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pemohons_nomor_identitas_unique` (`nomor_identitas`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permohonans`
--
ALTER TABLE `permohonans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permohonans_nomor_pemohon_unique` (`nomor_pemohon`),
  ADD KEY `permohonans_pemohon_id_foreign` (`pemohon_id`),
  ADD KEY `permohonans_tanah_id_foreign` (`tanah_id`),
  ADD KEY `permohonans_status_id_foreign` (`status_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tanahs`
--
ALTER TABLE `tanahs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tanahs_pemohon_id_foreign` (`pemohon_id`);

--
-- Indexes for table `tanggungans`
--
ALTER TABLE `tanggungans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tanggungans_pemohon_id_foreign` (`pemohon_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pemohons`
--
ALTER TABLE `pemohons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permohonans`
--
ALTER TABLE `permohonans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tanahs`
--
ALTER TABLE `tanahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tanggungans`
--
ALTER TABLE `tanggungans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `permohonans`
--
ALTER TABLE `permohonans`
  ADD CONSTRAINT `permohonans_pemohon_id_foreign` FOREIGN KEY (`pemohon_id`) REFERENCES `pemohons` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permohonans_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permohonans_tanah_id_foreign` FOREIGN KEY (`tanah_id`) REFERENCES `tanahs` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tanahs`
--
ALTER TABLE `tanahs`
  ADD CONSTRAINT `tanahs_pemohon_id_foreign` FOREIGN KEY (`pemohon_id`) REFERENCES `pemohons` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tanggungans`
--
ALTER TABLE `tanggungans`
  ADD CONSTRAINT `tanggungans_pemohon_id_foreign` FOREIGN KEY (`pemohon_id`) REFERENCES `pemohons` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
