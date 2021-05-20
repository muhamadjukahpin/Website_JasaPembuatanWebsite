-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Nov 2020 pada 04.07
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4_jasa_web`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) UNSIGNED NOT NULL,
  `text` longtext NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `about_us`
--

INSERT INTO `about_us` (`id`, `text`, `created_at`, `updated_at`) VALUES
(1, '<p>Kami nolep koding menawarkan jasa membuat website dengan harga yang terjangkau dan berkualias.<br>kami bergerak di bidang IT yaitu web development.</p>', '2020-09-02 06:52:23', '2020-09-02 18:57:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `banner`
--

CREATE TABLE `banner` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(250) NOT NULL,
  `isi` longtext NOT NULL,
  `img` varchar(250) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `banner`
--

INSERT INTO `banner` (`id`, `title`, `isi`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Pembuatan Website Professional', '<p>cocok untuk anda yang sedang butuh<br>website.</p>', '1599060995_02e33efc8d2a04e36885.png', '2020-09-02 19:41:34', '2020-09-02 22:36:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(250) NOT NULL,
  `number` varchar(25) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `number`, `created_at`, `updated_at`) VALUES
(1, 'Ricki', '628558293996', '2020-09-02 19:05:58', '2020-09-02 19:05:58'),
(2, 'Jukahpin', '6289601846870', '2020-09-02 19:06:25', '2020-09-02 19:06:25'),
(3, 'Fazri', '6281398661682', '2020-09-02 19:07:19', '2020-09-02 19:07:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `content`
--

CREATE TABLE `content` (
  `id` int(11) UNSIGNED NOT NULL,
  `text` longtext NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `content`
--

INSERT INTO `content` (`id`, `text`, `created_at`, `updated_at`) VALUES
(1, '<p>Website sudah<strong> Responsive</strong>. sehingga user friendly.</p>', '2020-09-02 19:10:02', '2020-09-02 19:49:13'),
(2, '<p>Website <strong>Secure (aman).</strong> jadi tidak akan terkena hacking</p>', '2020-09-02 19:12:33', '2020-09-02 19:12:33'),
(3, '<p>Desain <strong>Tampilan website keren.</strong> sehingga tampilannya enak di pandang.</p>', '2020-09-02 22:59:53', '2020-09-02 22:59:53'),
(4, '<p>Website sudah <strong>SEO Friendly.</strong> maksudnya akan mudah di cari oleh mesin pencari Google.</p>', '2020-09-02 23:00:23', '2020-09-02 23:00:23'),
(5, '<p>Website dengan <strong>Fitur lengkap.</strong> fitur sangat lengkap sesuai permintaan client.</p>', '2020-09-02 23:00:55', '2020-09-02 23:00:55'),
(6, '<p>Website sudah <strong>Dinamis</strong>. terdapat halaman admin untuk mengelola website.</p>', '2020-09-02 23:02:27', '2020-09-03 07:57:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `message`
--

CREATE TABLE `message` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` longtext NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'asdasd', 'asdasd2@zxs.asd', 'sdsdsada', '2020-09-04 01:22:46', '2020-09-04 01:22:46'),
(2, 'adasd', 'adsad@sada.asda', 'sdsadsa', '2020-11-24 03:33:04', '2020-11-24 03:33:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `meta`
--

CREATE TABLE `meta` (
  `id` int(11) UNSIGNED NOT NULL,
  `text` longtext NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `meta`
--

INSERT INTO `meta` (`id`, `text`, `created_at`, `updated_at`) VALUES
(1, 'Jasa Pembuatan Website murah dan terpercaya.', '2020-09-08 21:29:31', '2020-09-08 21:37:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` text NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2020-08-27-072230', 'App\\Database\\Migrations\\Message', 'default', 'App', 1599046713, 1),
(2, '2020-08-27-132127', 'App\\Database\\Migrations\\Users', 'default', 'App', 1599046713, 1),
(3, '2020-08-31-044814', 'App\\Database\\Migrations\\Content', 'default', 'App', 1599046713, 1),
(4, '2020-08-31-094709', 'App\\Database\\Migrations\\AboutUs', 'default', 'App', 1599046713, 1),
(5, '2020-09-01-141202', 'App\\Database\\Migrations\\Visi', 'default', 'App', 1599046713, 1),
(6, '2020-09-01-143802', 'App\\Database\\Migrations\\Misi', 'default', 'App', 1599046714, 1),
(7, '2020-09-01-150746', 'App\\Database\\Migrations\\ContactUs', 'default', 'App', 1599046714, 1),
(8, '2020-09-02-043939', 'App\\Database\\Migrations\\Banner', 'default', 'App', 1599046714, 1),
(9, '2020-09-08-142553', 'App\\Database\\Migrations\\Meta', 'default', 'App', 1599575290, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `misi`
--

CREATE TABLE `misi` (
  `id` int(11) UNSIGNED NOT NULL,
  `text` longtext NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `misi`
--

INSERT INTO `misi` (`id`, `text`, `created_at`, `updated_at`) VALUES
(1, '<p>menjadi seseorang yang bermanfaat untuk orang lain. serta meningkatkan kualitas kami.</p>', '2020-09-02 06:52:23', '2020-09-02 19:03:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'nolep koding', 'nolepkoding@gmail.com', '$2y$10$DsT8eew3dXF/Ok0HrrD5A.Mfuqqzul/i65XC8peOWRIF2hIganI2i', '2020-09-02 06:52:23', '2020-09-02 06:52:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visi`
--

CREATE TABLE `visi` (
  `id` int(11) UNSIGNED NOT NULL,
  `text` longtext NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `visi`
--

INSERT INTO `visi` (`id`, `text`, `created_at`, `updated_at`) VALUES
(1, '<p>menawarkan jasa membuat website yang berkualitas dan harga terjangkau.</p>', '2020-09-02 06:52:23', '2020-09-02 19:00:47');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `meta`
--
ALTER TABLE `meta`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `misi`
--
ALTER TABLE `misi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `visi`
--
ALTER TABLE `visi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `meta`
--
ALTER TABLE `meta`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `misi`
--
ALTER TABLE `misi`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `visi`
--
ALTER TABLE `visi`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
