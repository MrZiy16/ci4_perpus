-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2024 at 06:17 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus_0045`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota_perpus`
--

CREATE TABLE `anggota_perpus` (
  `id_anggotA` varchar(11) NOT NULL,
  `name_anggota` varchar(50) NOT NULL,
  `alamat_anggota` text NOT NULL,
  `nomor_anggota` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anggota_perpus`
--

INSERT INTO `anggota_perpus` (`id_anggotA`, `name_anggota`, `alamat_anggota`, `nomor_anggota`) VALUES
('10-A', 'Wirna', 'JL.Notosuryo gg.10', '+828274274324'),
('10-B', 'Rinosaurus', 'JL.Kasunyatan no.10', '+628472842726'),
('10-C', 'Fikri', 'JL.Melati no.99', '+628472842324'),
('10-D', 'Jena', 'JL.Rambutan gg9', '+62020318203'),
('11-A', 'Wirna', 'JL.Notosuryo', '+828274274324'),
('11-B', 'Fina ', 'JL.Botowonto', '+892749472983'),
('11-C', 'Dika', 'JL.Kemangi gg.11', '+629187814632'),
('11-D', 'Kino', 'JL. Flamboyan', '+894829342'),
('12-A', 'Nika Nika', 'Pulau Wano kec.Ambatukam', '+629365475687'),
('12-B', 'Bimo', 'JL.Amatunggal gg.1', '+629365475687'),
('12-C', 'Heni', 'JL.Danios', '+621001801280'),
('12-D', 'Hermawan', 'JL.Lele gg.3', '+632342342234');

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_activation_attempts`
--

INSERT INTO `auth_activation_attempts` (`id`, `ip_address`, `user_agent`, `token`, `created_at`) VALUES
(1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36', '7738c4a3d3c96216bfa5b7c3ff92f7fd', '2023-11-29 06:49:01');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'jokoookendhil@gmail.com', NULL, '2023-11-29 06:32:53', 0),
(2, '::1', 'jokoookendhil@gmail.com', NULL, '2023-11-29 06:47:29', 0),
(3, '::1', 'joko', 1, '2023-11-29 06:48:12', 0),
(4, '::1', 'jokoookendhil@gmail.com', 1, '2023-11-29 06:49:39', 1),
(5, '::1', 'jokoookendhil@gmail.com', 1, '2023-11-29 06:51:49', 1),
(6, '::1', 'jokoookendhil@gmail.com', 1, '2023-12-20 10:11:30', 1),
(7, '::1', 'jokoookendhil@gmail.com', NULL, '2023-12-26 14:30:38', 0),
(8, '::1', 'jokoookendhil@gmail.com', 1, '2023-12-26 14:31:37', 1),
(9, '::1', 'jokoookendhil@gmail.com', 1, '2023-12-27 04:51:32', 1),
(10, '::1', 'jokoookendhil@gmail.com', 1, '2023-12-27 06:54:39', 1),
(11, '::1', 'joko', NULL, '2023-12-29 02:02:38', 0),
(12, '::1', 'jokoookendhil@gmail.com', 1, '2023-12-29 02:03:16', 1),
(13, '::1', 'jokoookendhil@gmail.com', NULL, '2023-12-29 15:15:31', 0),
(14, '::1', 'jokoookendhil@gmail.com', 1, '2023-12-29 15:21:59', 1),
(15, '::1', 'jokoookendhil@gmail.com', 1, '2023-12-29 17:27:41', 1),
(16, '::1', 'jokoookendhil@gmail.com', 1, '2023-12-30 00:15:38', 1),
(17, '::1', 'jokoookendhil@gmail.com', 1, '2023-12-31 08:55:20', 1),
(18, '::1', 'jokoookendhil@gmail.com', 1, '2023-12-31 18:35:32', 1),
(19, '::1', 'jokoookendhil@gmail.com', 1, '2024-01-01 04:59:12', 1),
(20, '::1', 'jokoookendhil@gmail.com', 1, '2024-01-01 08:42:05', 1),
(21, '::1', 'jokoookendhil@gmail.com', 1, '2024-01-01 12:17:49', 1),
(22, '::1', 'jokoookendhil@gmail.com', 1, '2024-01-02 02:49:32', 1),
(23, '::1', 'jokoookendhil@gmail.com', 1, '2024-01-02 14:30:23', 1),
(24, '::1', 'jokoookendhil@gmail.com', 1, '2024-01-02 21:00:37', 1),
(25, '::1', 'jokoookendhil@gmail.com', 1, '2024-01-03 04:02:30', 1),
(26, '::1', 'jokoookendhil@gmail.com', 1, '2024-01-03 13:41:30', 1),
(27, '::1', 'jokoookendhil@gmail.com', 1, '2024-01-04 03:18:08', 1),
(28, '::1', 'jokoookendhil@gmail.com', 1, '2024-01-04 15:42:18', 1),
(29, '::1', 'jokoookendhil@gmail.com', 1, '2024-01-06 01:47:14', 1),
(30, '::1', 'jokoookendhil@gmail.com', 1, '2024-01-08 05:52:05', 1),
(31, '::1', 'jokoookendhil@gmail.com', 1, '2024-01-08 22:21:32', 1),
(32, '::1', 'jokoookendhil@gmail.com', 1, '2024-01-09 02:25:08', 1),
(33, '::1', 'jokoookendhil@gmail.com', NULL, '2024-01-09 09:12:53', 0),
(34, '::1', 'jokoookendhil@gmail.com', 1, '2024-01-09 09:13:21', 1),
(35, '::1', 'jokoookendhil@gmail.com', 1, '2024-01-10 02:10:44', 1),
(36, '::1', 'jokoookendhil@gmail.com', 1, '2024-01-10 03:51:13', 1),
(37, '::1', 'jokoookendhil@gmail.com', 1, '2024-01-10 04:37:45', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `pengarang` varchar(75) DEFAULT NULL,
  `penerbit` varchar(50) DEFAULT NULL,
  `tahun_terbit` year(4) DEFAULT NULL,
  `stok_awal` int(11) UNSIGNED NOT NULL,
  `stok_buku` int(11) UNSIGNED NOT NULL,
  `sampul` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `pengarang`, `penerbit`, `tahun_terbit`, `stok_awal`, `stok_buku`, `sampul`) VALUES
(1, 'Buku Bhs Indonesia', 'enoki', 'VistaPt', 2010, 34, 30, '1704859406_58adb4cf7dbba0d30f86.jpeg'),
(2, 'Buku PKN', 'Endah', 'VistaPt', 2017, 100, 100, '1704860107_f480f5188a6ec85d0f8e.jpeg'),
(3, 'BUKU SEJARAH INDONESIA', 'KUSWORO', 'Fiens', 2018, 100, 100, 'WhatsApp Image 2024-01-10 at 09.54.10.jpeg'),
(4, 'BUKU FISIKA', 'KUSWORO', 'Fiens', 2018, 100, 96, '1704861750_9f9533c6be4a02e75651.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `kembali`
--

CREATE TABLE `kembali` (
  `no_kembali` char(6) NOT NULL,
  `tgl_kembali` date NOT NULL,
  `id_buku` int(11) NOT NULL,
  `id_anggota` varchar(11) NOT NULL,
  `jml_pinjam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kembali`
--

INSERT INTO `kembali` (`no_kembali`, `tgl_kembali`, `id_buku`, `id_anggota`, `jml_pinjam`) VALUES
('k01', '2024-01-11', 1, '12-A', 5);

--
-- Triggers `kembali`
--
DELIMITER $$
CREATE TRIGGER `kembali_buku` AFTER INSERT ON `kembali` FOR EACH ROW BEGIN UPDATE buku SET stok_buku = stok_buku + new.jml_pinjam WHERE id_buku = new.id_buku; END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1701237971, 1);

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `no_pinjam` char(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `id_buku` int(11) NOT NULL,
  `id_anggota` varchar(11) NOT NULL,
  `jml_pinjam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`no_pinjam`, `tgl_pinjam`, `id_buku`, `id_anggota`, `jml_pinjam`) VALUES
('P-01', '2024-01-11', 4, '11-A', 9),
('P-02', '2024-01-11', 1, '10-A', 9);

--
-- Triggers `peminjaman`
--
DELIMITER $$
CREATE TRIGGER `pinjam` AFTER INSERT ON `peminjaman` FOR EACH ROW BEGIN UPDATE buku SET stok_buku = stok_buku - new.jml_pinjam WHERE id_buku = new.id_buku; END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'jokoookendhil@gmail.com', 'joko', '$2y$10$H98/avGlldaQ3LsT5RYjSOijMEkfY7PYmpt5oTCsI8BAobGmfZEhS', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-11-29 06:37:05', '2023-11-29 06:49:01', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota_perpus`
--
ALTER TABLE `anggota_perpus`
  ADD PRIMARY KEY (`id_anggotA`);

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `kembali`
--
ALTER TABLE `kembali`
  ADD PRIMARY KEY (`no_kembali`),
  ADD KEY `id_buku` (`id_buku`),
  ADD KEY `id_anggota` (`id_anggota`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD KEY `id_buku` (`id_buku`),
  ADD KEY `id_anggota` (`id_anggota`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `kembali`
--
ALTER TABLE `kembali`
  ADD CONSTRAINT `kembali_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`),
  ADD CONSTRAINT `kembali_ibfk_2` FOREIGN KEY (`id_anggota`) REFERENCES `anggota_perpus` (`id_anggotA`);

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`),
  ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`id_anggota`) REFERENCES `anggota_perpus` (`id_anggotA`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
