-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Des 2021 pada 05.42
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tb_kylera`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `nama_buku` varchar(100) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `deskripsi_buku` text NOT NULL,
  `harga_buku` int(11) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `nama_buku`, `penulis`, `penerbit`, `genre`, `deskripsi_buku`, `harga_buku`, `cover`, `status`) VALUES
(31, 'Jujutsu Kaisen Vol.11', 'Gege Akutami', 'Viz Media, Subs. of Shogakukan Inc', 'Komik', 'Komik Manga, Original English Version', 160000, 'JK Vol11.jpg', 'Ready Stok'),
(32, 'The Promise Neverland Vol.6', 'Kaiu Shirai', 'Elex Media Komputiondo', 'Komik', 'Komik Manga, Bahasa Indonesia', 22400, 'tpn vol6.jpg', 'Ready Stok'),
(33, 'Kimetsu no Yaiba Vol.19', 'Koyoharu Gotouge', 'Viz Media, Subs. of Shogakukan Inc', 'Komik', 'Komik Manga, Original English Version', 205000, 'ds vol19.jpg', 'Pre-Order'),
(34, 'Spy x Family Vol.5', 'Tatsuya Endo', 'Viz Media LLC', 'Komik', 'Komik Manga, Original English Version', 168000, 'sf vol5.jpg', 'Ready Stok'),
(35, 'Tokyo Ghoul: re Vol.9', 'Sui Ishida', 'Viz Media', 'Komik', 'Komik Manga, Original English Version', 311000, 'TGre VOL9.jpg', 'Ready Stok'),
(41, 'Cool Boy vs Cool Girl', 'Prisma Cintya', 'Loveable', 'Fiksi', 'Novel Remaja, Fanfiction, Bahasa Indonesia', 64000, 'coolboycoolgirl.jpg', 'Ready Stok'),
(42, 'Mantappu Jiwa', 'Jerome Polin Sijabat', 'Gramedia Pustaka Utama', 'Non-Fiksi', 'Buku Latihan Soal, Bahasa Indonesia', 88000, 'mantappu jiwa.jpg', 'Ready Stok'),
(43, 'Murder At Shijinso', 'Imamura Masahiro', 'Haru', 'Horror', 'Bahasa Indonesia', 70000, 'Murder aS.jpg', 'Ready Stok'),
(44, 'Alaska', 'Nisaafatm', 'Bintang Media', 'Novel', 'Bahasa Indonesia', 84000, 'alaska.jpg', 'Ready Stok'),
(45, 'Black Clover Vol.25', 'Yuka Tabata', 'Viz Media', 'Komik', 'Komik Manga, Original English Version', 287000, 'BLACK CLOVER 25.jpg', 'Pre-Order'),
(46, 'Statistika untuk Penelitian', 'Prof. Dr. Sugiyono', 'Alfabeta', 'Non-Fiksi', 'Bahasa Indonesia', 38000, 'statistikapenelitian.jpg', 'Ready Stok'),
(47, 'Sejarah Peradaban Islam', 'Dedi Supriyadi', 'Pustaka Setia', 'Non-Fiksi', 'Buku Sejarah, Bahasa Indonesia', 37000, 'spi.jpg', 'Ready Stok'),
(48, 'Hazel Eyes', 'Cindy Viranti', 'Aksara Plus', 'Fiksi', 'Novel Remaja, Bahasa Indonesia', 58000, 'hazeleyes.jpg', 'Ready Stok'),
(49, 'Seni untuk Bersikap Bodo Amat', 'Mark Manson', 'Grasindo', 'Non-Fiksi', 'Soft Cover, Bahasa Indonesia', 64000, 'bodoamat.jpg', 'SOLD OUT'),
(50, 'Sapiens', 'Yuval Noah Harari', 'Kpg', 'Non-Fiksi', 'Sejarah Dunia, Bahasa Indonesia, Soft Cover', 99000, 'sapiens.jpg', 'SOLD OUT'),
(51, 'The Keeper of Night', 'Kylie Lee Baker', 'Inkyard PR Publication', 'Novel', 'Original Edition, English', 420000, 'tkon.jpg', 'Pre-Order'),
(52, 'The Collective', 'Alison Gaylin', 'HarperCollins Publishers', 'Fiksi', 'Original, English, Hard Cover', 155500, 'tc.jpg', 'Pre-Order'),
(53, 'Chainsaw Man Vol.1', 'Tatsuki Fujimoto', 'Shueisha', 'Komik', 'Komik Manga, Original Japan Version', 385000, 'cm vol1.jpg', 'Pre-Order');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
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
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2021-11-17-122258', 'App\\Database\\Migrations\\Buku', 'default', 'App', 1637151791, 1),
(2, '2021-11-17-125254', 'App\\Database\\Migrations\\User', 'default', 'App', 1637153802, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `email`) VALUES
('yuki', '$2y$10$MnOEgmJ/.HsuuX7OOBAfIuXxIp1U/f1LawUzlpP6B1BsOW2reXVCi', 'ummuqaltsum11@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
