-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 20 Nov 2017 pada 03.27
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web4`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agent`
--

CREATE TABLE `agent` (
  `id_agent` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_identitas` varchar(255) NOT NULL,
  `nama_agent` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `akses`
--

CREATE TABLE `akses` (
  `id_akses` int(11) NOT NULL,
  `akses` varchar(255) NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akses`
--

INSERT INTO `akses` (`id_akses`, `akses`, `tipe`, `status`) VALUES
(1, 'kamar', '1', 1),
(3, 'khusus', '1', 1),
(5, 'galeri', '1', 1),
(7, 'fasilitas', '0', 1),
(9, 'pengguna', '0.1', 1),
(10, 'Supplier', '0', 1),
(11, 'staff', '0', 1),
(12, 'aktivitas', '0.1', 1),
(13, 'kasur', '0', 1),
(14, 'kota', '0', 1),
(15, 'terdekat', '0', 1),
(16, 'akses', '0', 1),
(17, 'bank', '0', 1),
(18, 'hotel', '1', 1),
(22, 'pemesanan', '0', 1),
(23, 'dipesan', '0.1', 1),
(24, 'Tutup', '1', 1),
(25, 'Kalender', '1', 1),
(26, 'fee', '0', 1),
(27, 'permintaan', '0', 1),
(28, 'Pertanyaan', '0', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `allotment`
--

CREATE TABLE `allotment` (
  `id_allotment` int(11) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `dari` date NOT NULL,
  `sampai` date NOT NULL,
  `produk_id` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `allotment`
--

INSERT INTO `allotment` (`id_allotment`, `jumlah`, `dari`, `sampai`, `produk_id`, `harga`, `supplier_id`, `status`) VALUES
(69, '2', '2017-11-02', '2017-11-02', 53, 500000, 50, 1),
(72, '2', '2017-10-31', '2017-10-31', 53, 500000, 50, 1),
(73, '3', '2017-10-30', '2017-10-30', 53, 500000, 50, 1),
(74, '2', '2017-11-01', '2017-11-01', 53, 500000, 50, 1),
(75, '3', '2017-11-03', '2017-11-03', 53, 470000, 50, 1),
(76, '2', '2017-11-02', '2017-11-02', 57, 470000, 53, 1),
(77, '2', '2017-11-01', '2017-11-01', 57, 470000, 53, 1),
(78, '1', '2017-11-03', '2017-11-03', 57, 450000, 53, 1),
(79, '1', '2017-11-08', '2017-11-08', 61, 700000, 55, 1),
(80, '2', '2017-11-08', '2017-11-08', 52, 500000, 50, 1),
(81, '2', '2017-11-09', '2017-11-09', 52, 500000, 50, 1),
(82, '2', '2017-11-09', '2017-11-09', 50, 350000, 51, 1),
(83, '2', '2017-11-11', '2017-11-11', 52, 500000, 50, 1),
(84, '1', '2017-11-14', '2017-11-14', 68, 550000, 60, 1),
(85, '2', '2017-11-14', '2017-11-14', 52, 500000, 50, 1),
(86, '2', '2017-11-15', '2017-11-15', 67, 650000, 59, 1),
(87, '2', '2017-11-16', '2017-11-16', 67, 650000, 59, 1),
(88, '1', '2017-11-15', '2017-11-15', 66, 500000, 58, 1),
(89, '1', '2017-11-16', '2017-11-16', 66, 500000, 58, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bed`
--

CREATE TABLE `bed` (
  `id_bed` int(11) NOT NULL,
  `bed` varchar(255) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bed`
--

INSERT INTO `bed` (`id_bed`, `bed`, `status`) VALUES
(1, 'Twin', 1),
(3, 'Double', 1),
(5, 'Both', 1),
(7, 'Single', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `fee`
--

CREATE TABLE `fee` (
  `id_fee` int(11) NOT NULL,
  `fee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fee`
--

INSERT INTO `fee` (`id_fee`, `fee`) VALUES
(1, 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `fitur`
--

CREATE TABLE `fitur` (
  `id_fitur` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fitur`
--

INSERT INTO `fitur` (`id_fitur`, `nama`, `tipe`, `icon`, `status`) VALUES
(9, 'Wifi', '0', 'ico-wifi-public', 1),
(10, 'Sofa', '1', 'ico-sofa', 1),
(11, 'Tv', '1', 'ico-lcd', 1),
(12, 'Kolam Renang', '0', 'ico-swimmingpool', 1),
(13, 'AC', '0.1', 'ico-ac', 1),
(14, 'Cafe', '0', 'ico-cafe', 1),
(15, 'Keamanan', '0', 'ico-security24', 1),
(16, 'Lemari', '1', 'ico-cabinets', 1),
(17, 'Wastafel', '1', 'ico-referigerator', 1),
(18, 'Kulkas', '1', 'ico-referigerator', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id_gallery` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `ket` varchar(255) NOT NULL,
  `produk_id` varchar(255) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `foto`, `ket`, `produk_id`, `supplier_id`, `status`) VALUES
(29, 'Hotel_Santika_Premier_Surabaya.jpg', 'Hotel', '0', 51, 1),
(30, 'Hotel_Santika_Premier_Surabaya1.jpg', 'Lobby', '0', 51, 1),
(31, 'Hotel_Santika_Premier_Surabaya2.jpg', 'Pool', '0', 51, 1),
(32, 'Hotel_Santika_Premier_Surabaya3.jpg', 'Cafe', '0', 51, 1),
(33, 'Hotel_Santika_Premier_Surabaya4.jpg', 'Room', '50', 51, 1),
(34, 'Hotel_Santika_Premier_Surabaya5.jpg', 'Room', '51', 51, 1),
(35, 'Tunjungan_Hotel_Surabaya.jpg', 'Hotel', '0', 50, 1),
(36, 'Tunjungan_Hotel_Surabaya1.jpg', 'Lobby', '0', 50, 1),
(37, 'Tunjungan_Hotel_Surabaya2.jpg', 'Room', '53', 50, 1),
(38, 'tunjungan6.jpg', 'Room', '52', 50, 1),
(39, 'Horison_Ultima_Malang.jpg', 'Hotel', '0', 52, 1),
(40, 'Horison_Ultima_Malang1.jpg', 'Pool', '0', 52, 1),
(42, 'Horison_Ultima_Malang2.jpg', 'Lobby', '0', 52, 1),
(43, 'Horison_Ultima_Malang3.jpg', 'Room', '54', 52, 1),
(44, 'Horison_Ultima_Malang4.jpg', 'Room', '55', 52, 1),
(45, 'Ciputra_World_Surabaya.jpg', 'Hotel', '0', 53, 1),
(46, 'Ciputra_World_Surabaya1.jpg', 'Lobby', '0', 53, 1),
(47, 'Ciputra_World_Surabaya2.jpg', 'Pool', '0', 53, 1),
(48, 'Ciputra_World_Surabaya3.jpg', 'Room', '56', 53, 1),
(49, 'Ciputra_World_Surabaya4.jpg', 'Room', '57', 53, 1),
(50, 'Prima_Asri_Hotel.jpeg', 'Hotel', '0', 54, 1),
(51, 'Prima_Asri_Hotel.png', 'Lobby', '0', 54, 1),
(52, 'Prima_Asri_Hotel1.png', 'Room', '58', 54, 1),
(53, 'Prima_Asri_Hotel1.jpeg', 'Room', '59', 54, 1),
(54, 'Kuta_Paradiso_Hotel.jpeg', 'Hotel', '0', 55, 1),
(55, 'Kuta_Paradiso_Hotel1.jpeg', 'Lobby', '0', 55, 1),
(56, 'Kuta_Paradiso_Hotel2.jpeg', 'Room', '60', 55, 1),
(57, 'Kuta_Paradiso_Hotel3.jpeg', 'Room', '61', 55, 1),
(58, 'Grand_Ambarrukmo_Yogyakarta.jpeg', 'Hotel', '0', 56, 1),
(60, 'Grand_Ambarrukmo_Yogyakarta2.jpeg', 'Room', '62', 56, 1),
(61, 'Grand_Ambarrukmo_Yogyakarta3.jpeg', 'Room', '63', 56, 1),
(62, 'Hotel_Tentrem_Yogyakarta.jpeg', 'Hotel', '0', 57, 1),
(63, 'Hotel_Tentrem_Yogyakarta1.jpeg', 'Pool', '0', 57, 1),
(64, 'Hotel_Tentrem_Yogyakarta2.jpeg', 'Room', '64', 57, 1),
(65, 'Hotel_Tentrem_Yogyakarta3.jpeg', 'Room', '65', 57, 1),
(66, 'The_Trans_Luxury_Bandung.jpeg', 'Hotel', '0', 58, 1),
(67, 'The_Trans_Luxury_Bandung1.jpeg', 'Pool', '0', 58, 1),
(68, 'The_Trans_Luxury_Bandung2.jpeg', 'Lobby', '0', 58, 1),
(69, 'The_Trans_Luxury_Bandung3.jpeg', 'Room', '66', 58, 1),
(70, 'Hotel_Borobudur_Jakrta.jpeg', 'Hotel', '0', 59, 1),
(71, 'Hotel_Borobudur_Jakrta1.jpeg', 'Lobby', '0', 59, 1),
(72, 'Hotel_Borobudur_Jakrta2.jpeg', 'Pool', '0', 59, 1),
(73, 'Hotel_Borobudur_Jakrta3.jpeg', 'Room', '67', 59, 1),
(74, 'Merlynn_Park_Hotel.jpeg', 'Hotel', '0', 60, 1),
(75, 'Merlynn_Park_Hotel1.jpeg', 'Lobby', '0', 60, 1),
(76, 'Merlynn_Park_Hotel2.jpeg', 'Pool', '0', 60, 1),
(77, 'Merlynn_Park_Hotel3.jpeg', 'Room', '68', 60, 1),
(78, 'The_Trans_Luxury_Bandung.png', 'tes', '66', 58, 1),
(79, 'Tunjungan_Hotel_Surabaya.png', '', '52', 50, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `isi` text NOT NULL,
  `kebersihan` int(11) NOT NULL,
  `pelayanan` int(11) NOT NULL,
  `makanan` int(11) NOT NULL,
  `lokasi` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `rata` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `tgl_komen` date NOT NULL,
  `pemesanan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `user_id`, `isi`, `kebersihan`, `pelayanan`, `makanan`, `lokasi`, `harga`, `rata`, `supplier_id`, `tgl_komen`, `pemesanan_id`) VALUES
(15, 38, 'Gud', 70, 81, 67, 82, 70, 74, 50, '2017-11-09', 91117001),
(16, 38, 'Mayan', 86, 51, 70, 55, 70, 66, 51, '2017-11-09', 91117002),
(17, 38, 'nais', 70, 77, 86, 70, 77, 76, 50, '2017-11-11', 111117002),
(18, 38, 'gud', 70, 70, 70, 70, 70, 70, 53, '2017-11-18', 161117001);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kota`
--

CREATE TABLE `kota` (
  `id_kota` int(11) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kota`
--

INSERT INTO `kota` (`id_kota`, `kota`, `status`) VALUES
(1, 'Surabaya', 1),
(2, 'Malang', 1),
(3, 'Bali', 1),
(4, 'Jakarta', 1),
(5, 'Bandung', 1),
(6, 'Yogyakarta', 1),
(7, 'Makasar', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `log`
--

CREATE TABLE `log` (
  `id_log` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `ket` varchar(255) NOT NULL,
  `waktu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `log`
--

INSERT INTO `log` (`id_log`, `user_id`, `supplier_id`, `ket`, `waktu`) VALUES
(165, 1, 0, 'Insert User gg', '2017-09-05 14:59:32'),
(166, 18, 49, 'Insert Room Deluxe', '2017-09-05 15:14:18'),
(167, 18, 49, 'Insert Allotment Deluxe 2017-09-05 - 2017-09-06', '2017-09-05 15:15:34'),
(168, 18, 49, 'Insert Room Superior', '2017-09-05 15:17:49'),
(169, 18, 49, 'Insert Allotment Superior 2017-09-29 - 2017-09-30', '2017-09-05 15:18:12'),
(170, 18, 49, 'Insert Closed Deluxe 2017-09-05 - 2017-09-05', '2017-09-05 15:31:03'),
(171, 1, 0, 'Insert User gon', '2017-09-05 16:34:32'),
(172, 19, 50, 'Insert Hotel Grand Surabaya', '2017-09-05 16:35:30'),
(173, 18, 49, 'Insert Photo For Hotel', '2017-09-06 16:27:32'),
(174, 18, 49, 'Insert Photo For Hotel', '2017-09-06 16:27:57'),
(175, 18, 49, 'Insert Photo For Room Deluxe', '2017-09-06 16:30:37'),
(176, 18, 49, 'Insert Photo For Room Deluxe', '2017-09-06 16:30:37'),
(177, 18, 49, 'Delete Photo For Room Deluxe', '2017-09-06 16:30:43'),
(178, 18, 49, 'Insert Photo For Hotel', '2017-09-06 16:33:19'),
(179, 18, 49, 'Insert Photo For Hotel', '2017-09-06 16:35:23'),
(180, 18, 49, 'Insert Photo For Hotel', '2017-09-06 16:37:01'),
(181, 18, 49, 'Insert Photo For Hotel', '2017-09-06 16:38:53'),
(182, 18, 49, 'Insert Photo For Hotel', '2017-09-06 16:40:03'),
(183, 18, 49, 'Insert Photo For Hotel', '2017-09-06 16:42:06'),
(184, 18, 49, 'Insert Photo For Hotel', '2017-09-06 16:42:18'),
(185, 18, 49, 'Insert Photo For Hotel', '2017-09-06 16:43:49'),
(186, 18, 49, 'Insert Photo For Hotel', '2017-09-06 16:48:45'),
(187, 18, 49, 'Insert Photo For Hotel', '2017-09-19 14:50:59'),
(188, 18, 49, 'Insert Photo For Hotel', '2017-09-19 14:56:05'),
(189, 18, 49, 'Insert Photo For Hotel', '2017-09-19 14:56:43'),
(190, 1, 0, 'Insert User red', '2017-09-29 10:21:11'),
(191, 1, 0, 'Insert User tunjungan', '2017-09-29 10:49:13'),
(192, 1, 0, 'Insert User santika', '2017-09-29 10:49:45'),
(193, 1, 0, 'Insert User ciputra', '2017-09-29 10:51:30'),
(194, 1, 0, 'Insert User artotel', '2017-09-29 10:52:13'),
(195, 1, 0, 'Insert User favehotel', '2017-09-29 10:53:31'),
(196, 1, 0, 'Insert User javaparagon', '2017-09-29 10:55:41'),
(197, 1, 0, 'Insert User jwmarriott', '2017-09-29 10:56:33'),
(198, 21, 50, 'Insert Hotel Tunjungan Hotel Surabaya', '2017-09-29 10:58:19'),
(199, 21, 50, 'Insert Room Double Superior', '2017-09-29 10:59:28'),
(200, 21, 50, 'Insert Room Twin Superior', '2017-09-29 11:00:32'),
(201, 21, 50, 'Insert Room Double Junior', '2017-09-29 11:01:10'),
(202, 21, 50, 'Insert Allotment Twin Superior 2017-09-30 - 2017-10-10', '2017-09-29 11:06:25'),
(203, 21, 50, 'Insert Photo For Hotel', '2017-09-29 11:14:39'),
(204, 21, 50, 'Insert Photo For Hotel', '2017-09-29 11:15:03'),
(205, 21, 50, 'Insert Photo For Hotel', '2017-09-29 11:16:24'),
(206, 21, 50, 'Insert Photo For Room Double Superior', '2017-09-29 11:17:02'),
(207, 21, 50, 'Update Photo For Room Double Superior', '2017-09-29 11:17:21'),
(208, 21, 50, 'Insert Photo For Room Twin Superior', '2017-09-29 11:17:45'),
(209, 21, 50, 'Insert Photo For Room Double Junior', '2017-09-29 11:18:14'),
(210, 21, 50, 'Insert Photo For Room Twin Superior', '2017-09-29 11:20:23'),
(211, 21, 50, 'Update Photo For Room Double Junior', '2017-09-29 11:21:17'),
(212, 21, 50, 'Update Photo For Room Double Junior', '2017-09-29 11:21:17'),
(213, 21, 50, 'Update Photo For Room Double Junior', '2017-09-29 11:21:17'),
(214, 21, 50, 'Update Photo For Room Double Junior', '2017-09-29 11:21:17'),
(215, 21, 50, 'Insert Photo For Room Double Superior', '2017-09-29 11:25:42'),
(216, 21, 50, 'Update Room Double Junior', '2017-09-29 11:27:35'),
(217, 22, 51, 'Insert Hotel Hotel Santika Premier Surabaya', '2017-09-29 11:30:45'),
(218, 22, 51, 'Insert Room Twin Deluxe', '2017-09-29 12:22:29'),
(219, 22, 51, 'Insert Room Double Superior', '2017-09-29 12:23:33'),
(220, 22, 51, 'Insert Photo For Room Twin Deluxe', '2017-09-29 12:38:12'),
(221, 22, 51, 'Insert Photo For Room Double Superior', '2017-09-29 12:41:10'),
(222, 22, 51, 'Insert Photo For Hotel', '2017-09-29 12:51:17'),
(223, 22, 51, 'Insert Photo For Hotel', '2017-09-29 12:51:35'),
(224, 22, 51, 'Insert Photo For Hotel', '2017-09-29 12:53:14'),
(225, 22, 51, 'Update Photo For Hotel', '2017-09-29 12:56:48'),
(226, 22, 51, 'Insert Photo For Hotel', '2017-09-29 12:57:07'),
(227, 1, 0, 'Insert User horison', '2017-09-30 11:39:34'),
(228, 28, 0, 'Insert Nearby Plaza Araya', '2017-09-30 11:42:24'),
(229, 28, 52, 'Insert Hotel Horison Ultima Malang', '2017-09-30 11:44:07'),
(230, 28, 52, 'Insert Room Double Deluxe', '2017-09-30 11:47:00'),
(231, 28, 52, 'Insert Room Double Junior ', '2017-09-30 11:47:32'),
(232, 28, 52, 'Insert Photo For Hotel', '2017-09-30 11:47:52'),
(233, 28, 52, 'Insert Photo For Hotel', '2017-09-30 11:48:09'),
(234, 28, 52, 'Insert Photo For Hotel', '2017-09-30 11:48:28'),
(235, 28, 52, 'Insert Photo For Room Double Deluxe', '2017-09-30 11:48:40'),
(236, 28, 52, 'Update Photo For Room Double Deluxe', '2017-09-30 11:48:40'),
(237, 28, 52, 'Update Photo For Room Double Deluxe', '2017-09-30 11:50:12'),
(238, 28, 52, 'Update Photo For Room Double Deluxe', '2017-09-30 11:50:12'),
(239, 28, 52, 'Update Photo For Room Double Deluxe', '2017-09-30 11:51:03'),
(240, 28, 52, 'Update Photo For Room Double Deluxe', '2017-09-30 11:52:12'),
(241, 28, 52, 'Insert Photo For Room Double Junior ', '2017-09-30 11:52:32'),
(242, 23, 53, 'Insert Hotel Ciputra World Surabaya', '2017-10-03 09:55:28'),
(243, 23, 53, 'Insert Room Double Deluxe', '2017-10-03 10:02:21'),
(244, 23, 53, 'Insert Room Twin Deluxe', '2017-10-03 10:02:46'),
(245, 23, 53, 'Insert Room Twin Superior', '2017-10-03 10:03:19'),
(246, 23, 53, 'Insert Photo For Hotel', '2017-10-03 10:04:10'),
(247, 23, 53, 'Insert Photo For Hotel', '2017-10-03 10:04:25'),
(248, 23, 53, 'Insert Photo For Hotel', '2017-10-03 10:04:43'),
(249, 23, 53, 'Insert Photo For Room Twin Deluxe', '2017-10-03 10:05:09'),
(250, 23, 53, 'Insert Photo For Room Twin Superior', '2017-10-03 10:05:25'),
(251, 23, 53, 'Insert Photo For Room Double Deluxe', '2017-10-03 10:05:40'),
(252, 23, 53, 'Insert Allotment Twin Deluxe 2017-10-03 - 2017-10-05', '2017-10-03 11:39:13'),
(253, 23, 53, 'Insert Allotment Twin Superior 2017-10-03 - 2017-10-03', '2017-10-03 11:39:39'),
(254, 22, 51, 'Insert Room tes', '2017-10-10 09:24:12'),
(255, 22, 51, 'Insert Room Twin Superior', '2017-10-10 09:33:47'),
(256, 22, 51, 'Insert Room Double Deluxe', '2017-10-10 09:36:27'),
(257, 22, 51, 'Insert Allotment Twin Superior 2017-10-10 - 2017-10-11', '2017-10-10 09:39:00'),
(258, 22, 51, 'Insert Photo For Hotel', '2017-10-10 09:41:48'),
(259, 22, 51, 'Insert Photo For Hotel', '2017-10-10 09:42:11'),
(260, 22, 51, 'Insert Photo For Hotel', '2017-10-10 09:42:30'),
(261, 22, 51, 'Insert Photo For Hotel', '2017-10-10 09:42:47'),
(262, 22, 51, 'Insert Photo For Room Twin Superior', '2017-10-10 09:43:09'),
(263, 22, 51, 'Insert Photo For Room Double Deluxe', '2017-10-10 09:43:25'),
(264, 21, 50, 'Insert Room Twin Deluxe', '2017-10-10 15:44:23'),
(265, 21, 50, 'Insert Room Double Superior', '2017-10-10 15:45:14'),
(266, 21, 50, 'Insert Photo For Hotel', '2017-10-10 15:46:05'),
(267, 21, 50, 'Insert Photo For Hotel', '2017-10-10 15:46:33'),
(268, 21, 50, 'Insert Photo For Room Double Superior', '2017-10-10 15:46:59'),
(269, 21, 50, 'Insert Photo For Hotel', '2017-10-10 15:47:16'),
(270, 21, 50, 'Update Photo For Hotel', '2017-10-10 15:47:47'),
(271, 28, 52, 'Insert Room Double Deluxe', '2017-10-11 11:50:19'),
(272, 28, 52, 'Insert Room Double Superior', '2017-10-11 11:50:51'),
(273, 28, 52, 'Insert Photo For Hotel', '2017-10-11 11:51:13'),
(274, 28, 52, 'Insert Photo For Hotel', '2017-10-11 11:51:59'),
(275, 28, 52, 'Insert Photo For Hotel', '2017-10-11 11:52:00'),
(276, 28, 52, 'Insert Photo For Hotel', '2017-10-11 11:53:00'),
(277, 28, 52, 'Insert Photo For Room Double Deluxe', '2017-10-11 11:54:55'),
(278, 28, 52, 'Insert Photo For Room Double Superior', '2017-10-11 11:55:47'),
(279, 23, 53, 'Insert Room Twin Deluxe', '2017-10-11 11:57:48'),
(280, 23, 53, 'Insert Room Double Superior', '2017-10-11 11:58:12'),
(281, 23, 53, 'Insert Photo For Hotel', '2017-10-11 13:12:26'),
(282, 23, 53, 'Insert Photo For Hotel', '2017-10-11 13:12:44'),
(283, 23, 53, 'Insert Photo For Hotel', '2017-10-11 13:12:57'),
(284, 23, 53, 'Insert Photo For Room Twin Deluxe', '2017-10-11 13:13:27'),
(285, 23, 53, 'Insert Photo For Room Double Superior', '2017-10-11 13:13:42'),
(286, 21, 50, 'Insert Allotment Twin Deluxe 2017-10-14 - 2017-10-15', '2017-10-14 11:48:53'),
(287, 1, 0, 'Insert User prima', '2017-10-17 10:46:43'),
(288, 29, 54, 'Insert Hotel Prima Asri Hotel', '2017-10-17 03:52:03'),
(289, 29, 54, 'Insert Room Twin Deluxe', '2017-10-17 03:53:30'),
(290, 29, 54, 'Insert Room Double Superior', '2017-10-17 03:54:04'),
(291, 29, 54, 'Insert Photo For Hotel', '2017-10-17 04:02:48'),
(292, 29, 54, 'Insert Photo For Hotel', '2017-10-17 04:03:01'),
(293, 29, 54, 'Insert Photo For Room Twin Deluxe', '2017-10-17 04:03:20'),
(294, 29, 54, 'Insert Photo For Room Double Superior', '2017-10-17 04:03:34'),
(295, 21, 50, 'Update Photo For Room Twin Deluxe', '2017-10-17 04:09:12'),
(296, 29, 54, 'Insert Allotment Twin Deluxe 2017-10-17 - 2017-10-17', '2017-10-17 14:40:51'),
(297, 29, 54, 'Insert Allotment Double Superior 2017-10-18 - 2017-10-19', '2017-10-18 09:03:26'),
(298, 23, 53, 'Insert Allotment Double Superior 2017-10-18 - 2017-10-20', '2017-10-18 14:52:27'),
(299, 1, 0, 'Insert City Bali', '2017-10-19 13:32:58'),
(300, 1, 0, 'Insert City Jakarta', '2017-10-19 13:33:06'),
(301, 1, 0, 'Insert City Bandung', '2017-10-19 13:33:15'),
(302, 1, 0, 'Insert City Yogyakarta', '2017-10-19 13:33:42'),
(303, 1, 0, 'Insert Nearby Kuta Beach', '2017-10-19 13:34:46'),
(304, 1, 0, 'Insert Nearby Gadjah Mada University', '2017-10-19 13:35:21'),
(305, 1, 0, 'Insert Nearby Plaza Ambarukmo', '2017-10-19 13:36:04'),
(306, 1, 0, 'Insert Nearby Trans Studio Bandung', '2017-10-19 13:36:36'),
(307, 1, 0, 'Insert Nearby Pasar Senen Terminal', '2017-10-19 13:37:36'),
(308, 1, 0, 'Insert Nearby ITC Roxy Mas', '2017-10-19 13:38:00'),
(309, 1, 0, 'Insert User kutaparadiso', '2017-10-19 13:44:30'),
(310, 1, 0, 'Insert User grandambarrukmo', '2017-10-19 13:45:42'),
(311, 1, 0, 'Insert User tentrem', '2017-10-19 13:46:53'),
(312, 1, 0, 'Insert User transluxury', '2017-10-19 13:47:38'),
(313, 1, 0, 'Insert User borobudur', '2017-10-19 13:48:40'),
(314, 1, 0, 'Insert User merlynn', '2017-10-19 13:49:54'),
(315, 30, 55, 'Insert Hotel Kuta Paradiso Hotel', '2017-10-19 13:54:40'),
(316, 30, 55, 'Insert Room Double Deluxe', '2017-10-19 13:55:54'),
(317, 30, 55, 'Insert Room Double Superior', '2017-10-19 13:57:10'),
(318, 30, 55, 'Insert Photo For Hotel', '2017-10-19 13:57:46'),
(319, 30, 55, 'Insert Photo For Hotel', '2017-10-19 13:58:06'),
(320, 30, 55, 'Insert Photo For Room Double Deluxe', '2017-10-19 13:58:25'),
(321, 30, 55, 'Insert Photo For Room Double Superior', '2017-10-19 13:59:40'),
(322, 31, 56, 'Insert Hotel Grand Ambarrukmo Yogyakarta', '2017-10-19 14:07:04'),
(323, 31, 56, 'Insert Room Premium Double Superior', '2017-10-19 14:13:27'),
(324, 31, 56, 'Insert Room Double Deluxe', '2017-10-19 14:14:18'),
(325, 31, 56, 'Insert Photo For Hotel', '2017-10-19 14:16:13'),
(326, 31, 56, 'Insert Photo For Hotel', '2017-10-19 14:16:13'),
(327, 31, 56, 'Insert Photo For Room Premium Double Superior', '2017-10-19 14:20:33'),
(328, 31, 56, 'Insert Photo For Room Double Deluxe', '2017-10-19 14:21:06'),
(329, 32, 57, 'Insert Hotel Hotel Tentrem Yogyakarta', '2017-10-19 14:24:50'),
(330, 32, 57, 'Insert Room Grand Double Deluxe', '2017-10-19 14:26:28'),
(331, 32, 57, 'Insert Room Double Superior', '2017-10-19 14:27:00'),
(332, 32, 57, 'Insert Photo For Hotel', '2017-10-19 14:28:02'),
(333, 32, 57, 'Insert Photo For Hotel', '2017-10-19 14:28:23'),
(334, 32, 57, 'Insert Photo For Room Grand Double Deluxe', '2017-10-19 14:28:45'),
(335, 32, 57, 'Insert Photo For Hotel', '2017-10-19 14:29:04'),
(336, 33, 58, 'Insert Hotel The Trans Luxury Bandung', '2017-10-19 14:32:07'),
(337, 33, 58, 'Insert Room Double Superior', '2017-10-19 14:33:50'),
(338, 33, 58, 'Insert Photo For Hotel', '2017-10-19 14:34:23'),
(339, 33, 58, 'Insert Photo For Hotel', '2017-10-19 14:34:38'),
(340, 33, 58, 'Insert Photo For Hotel', '2017-10-19 14:34:53'),
(341, 33, 58, 'Insert Photo For Room Double Superior', '2017-10-19 14:35:11'),
(342, 34, 59, 'Insert Hotel Hotel Borobudur Jakrta', '2017-10-19 14:38:47'),
(343, 34, 59, 'Insert Room Superior', '2017-10-19 14:39:48'),
(344, 34, 59, 'Insert Photo For Hotel', '2017-10-19 14:43:18'),
(345, 34, 59, 'Insert Photo For Hotel', '2017-10-19 14:43:31'),
(346, 34, 59, 'Insert Photo For Hotel', '2017-10-19 14:43:59'),
(347, 34, 59, 'Insert Photo For Room Superior', '2017-10-19 14:44:18'),
(348, 35, 60, 'Insert Hotel Merlynn Park Hotel', '2017-10-19 14:47:54'),
(349, 35, 60, 'Insert Photo For Hotel', '2017-10-19 14:48:31'),
(350, 35, 60, 'Insert Room Double Deluxe', '2017-10-19 14:49:06'),
(351, 35, 60, 'Insert Photo For Hotel', '2017-10-19 14:50:15'),
(352, 35, 60, 'Insert Photo For Hotel', '2017-10-19 14:50:29'),
(353, 35, 60, 'Insert Photo For Room Double Deluxe', '2017-10-19 14:50:56'),
(354, 32, 57, 'Update Photo For Room Double Superior', '2017-10-21 04:02:46'),
(355, 21, 50, 'Insert Closed Twin Deluxe 2017-10-21 - 2017-10-21', '2017-10-21 09:06:36'),
(356, 32, 57, 'Insert Closed Double Superior 2017-10-21 - 2017-10-23', '2017-10-21 09:16:56'),
(357, 32, 57, 'Insert Allotment Grand Double Deluxe 2017-10-21 - 2017-10-23', '2017-10-21 09:17:24'),
(358, 29, 54, 'Insert Allotment Twin Deluxe 2017-10-24 - 2017-10-31', '2017-10-24 15:16:11'),
(359, 21, 50, 'Insert Closed Double Superior 2017-10-25 - 2017-10-26', '2017-10-25 09:29:08'),
(360, 23, 53, 'Insert Closed Twin Deluxe 2017-10-25 - 2017-10-27', '2017-10-25 09:30:12'),
(361, 21, 50, 'Update Room Double Superior', '2017-10-27 13:50:59'),
(362, 21, 50, 'Update Room Twin Deluxe', '2017-10-27 13:52:07'),
(363, 21, 50, 'Update Room Twin Deluxe', '2017-10-27 13:52:25'),
(364, 21, 50, 'Update Room Twin Deluxe', '2017-10-27 13:54:29'),
(365, 21, 50, 'Update Room Double Superior', '2017-10-27 14:00:53'),
(366, 21, 50, 'Update Room Double Superior', '2017-10-27 14:01:07'),
(367, 21, 50, 'Update Room Double Superior', '2017-10-27 14:01:17'),
(368, 28, 52, 'Update Room Double Deluxe', '2017-10-30 11:28:04'),
(369, 28, 52, 'Update Room Double Superior', '2017-10-30 11:28:15'),
(370, 28, 52, 'Update Room Double Superior', '2017-10-30 11:28:26'),
(371, 22, 51, 'Update Room Twin Superior', '2017-10-30 11:29:39'),
(372, 22, 51, 'Update Room Double Deluxe', '2017-10-30 11:29:45'),
(373, 29, 54, 'Update Room Twin Deluxe', '2017-10-30 12:06:41'),
(374, 29, 54, 'Update Room Double Superior', '2017-10-30 12:06:48'),
(375, 29, 54, 'Insert Allotment Twin Deluxe 2017-10-30 - 2017-11-01', '2017-10-30 12:07:17'),
(376, 21, 50, 'Insert Allotment Double Superior 2017-10-30 - 2017-10-30', '2017-10-30 12:23:06'),
(377, 21, 50, 'Insert Allotment Double Superior 2017-10-31 - 2017-10-31', '2017-10-30 12:23:54'),
(378, 21, 50, 'Update Room Double Superior', '2017-10-30 14:06:38'),
(379, 1, 0, 'Insert User fave', '2017-10-30 16:54:53'),
(380, 21, 50, 'Update Room Twin Deluxe', '2017-10-31 04:53:13'),
(381, 21, 50, 'Insert Allotment Double Superior 2017-10-30 - 2017-11-02', '2017-10-31 13:52:48'),
(382, 21, 50, 'Insert Allotment Double Superior 2017-10-30 - 2017-11-02', '2017-10-31 14:19:00'),
(383, 21, 50, 'Insert Allotment Double Superior 2017-10-30 - 2017-10-30', '2017-10-31 15:49:55'),
(384, 21, 50, 'Update Allotment Double Superior 2017-10-31 - 2017-10-30', '2017-10-31 15:49:55'),
(385, 21, 50, 'Update Allotment Double Superior 2017-10-30 - 2017-10-30', '2017-10-31 16:10:00'),
(386, 23, 53, 'Update Room Double Superior', '2017-11-01 16:11:24'),
(387, 23, 53, 'Update Room Twin Deluxe', '2017-11-01 16:11:35'),
(388, 23, 53, 'Insert Allotment Double Superior 2017-11-01 - 2017-11-02', '2017-11-01 16:12:04'),
(389, 33, 58, 'Insert Photo For Room Double Superior', '2017-11-08 10:00:00'),
(390, 21, 50, 'Insert Photo For Room Twin Deluxe', '2017-11-08 10:00:53'),
(391, 1, 0, 'Update Access khusus For Hotel', '2017-11-08 10:45:21'),
(392, 1, 0, 'Update Access fasilitas For Hotel', '2017-11-08 10:45:31'),
(393, 1, 0, 'Update Access galeri For Hotel', '2017-11-08 10:45:38'),
(394, 1, 0, 'Update Access fasilitas For Staff, Hotel', '2017-11-08 10:45:48'),
(395, 1, 0, 'Update Access fasilitas For Staff', '2017-11-08 10:45:53'),
(396, 1, 0, 'Update Access kamar For Hotel', '2017-11-08 10:46:02'),
(397, 1, 0, 'Insert Access staff For Staff', '2017-11-08 10:46:20'),
(398, 1, 0, 'Insert Access aktivitas For Staff, Hotel', '2017-11-08 10:46:38'),
(399, 1, 0, 'Insert Access kasur For Staff', '2017-11-08 10:48:01'),
(400, 1, 0, 'Insert Access kota For Staff', '2017-11-08 10:48:07'),
(401, 1, 0, 'Insert Access terdekat For Staff', '2017-11-08 10:48:14'),
(402, 1, 0, 'Insert Access akses For Staff', '2017-11-08 10:48:45'),
(403, 1, 0, 'Insert Access bank For Staff', '2017-11-08 10:49:07'),
(404, 1, 0, 'Update User dd', '2017-11-08 10:49:46'),
(405, 1, 0, 'Update User tunjungan', '2017-11-08 10:51:29'),
(406, 1, 0, 'Update Feature Wifi', '2017-11-08 11:03:22'),
(407, 1, 0, 'Update Feature Sofa', '2017-11-08 11:03:46'),
(408, 1, 0, 'Update Feature Tv', '2017-11-08 11:04:16'),
(409, 1, 0, 'Update Feature Swimming Pool', '2017-11-08 11:04:35'),
(410, 1, 0, 'Update Feature Ac', '2017-11-08 11:05:09'),
(411, 1, 0, 'Insert Feature Cafr', '2017-11-08 11:05:55'),
(412, 1, 0, 'Update Feature Kolam Renang', '2017-11-08 11:06:28'),
(413, 1, 0, 'Update Feature Cafe', '2017-11-08 11:06:37'),
(414, 1, 0, 'Insert Feature Keamanan', '2017-11-08 11:07:36'),
(415, 1, 0, 'Update Access pengguna For Staff, Hotel', '2017-11-08 11:17:44'),
(416, 1, 0, 'Insert Access hotel For Hotel', '2017-11-08 11:27:26'),
(417, 1, 0, 'Update User tunjungan', '2017-11-08 11:27:35'),
(418, 1, 0, 'Insert Access pemesanan For Staff', '2017-11-08 11:35:28'),
(419, 1, 0, 'Insert Access pemesanan For Hotel', '2017-11-08 11:43:09'),
(420, 1, 0, 'Insert Access pemesanan For Hotel', '2017-11-08 11:43:09'),
(421, 1, 0, 'Insert Access pemesanan For Staff', '2017-11-08 11:48:54'),
(422, 1, 0, 'Insert Access dipesan For Staff, Hotel', '2017-11-08 11:49:09'),
(423, 1, 0, 'Update User dd', '2017-11-08 11:50:36'),
(424, 1, 0, 'Update User tunjungan', '2017-11-08 11:59:05'),
(425, 1, 0, 'Insert Feature Lemari', '2017-11-08 13:03:46'),
(426, 1, 0, 'Insert Feature Wastafel', '2017-11-08 13:04:16'),
(427, 1, 0, 'Insert Feature kulkas', '2017-11-08 13:04:43'),
(428, 21, 50, 'Update Room Twin Deluxe', '2017-11-08 13:05:13'),
(429, 21, 50, 'Update Room Double Superior', '2017-11-08 13:05:18'),
(430, 1, 0, 'Insert Bed a', '2017-11-08 16:35:08'),
(431, 1, 0, 'Insert Bed Single', '2017-11-08 16:35:27'),
(432, 1, 0, 'Insert City Makasar', '2017-11-08 16:39:56'),
(433, 1, 0, 'Insert User a', '2017-11-09 10:56:10'),
(434, 1, 0, 'Insert User admin', '2017-11-09 11:08:02'),
(435, 21, 50, 'Insert Photo For Hotel', '2017-11-09 11:18:11'),
(436, 1, 0, 'Update User fave', '2017-11-09 14:23:19'),
(437, 1, 0, 'Update User dd', '2017-11-09 14:24:54'),
(438, 36, 61, 'Insert Hotel Fave Hotel Rungkut Surabaya', '2017-11-09 14:34:36'),
(439, 2, 0, 'Update Nearby Tunjungan Plaza', '2017-11-10 10:16:46'),
(440, 2, 0, 'Update Nearby Stasiun Gubeng', '2017-11-10 10:19:34'),
(441, 2, 0, 'Update Nearby Jatim Park 1', '2017-11-10 10:19:51'),
(442, 2, 0, 'Update Nearby Plaza Araya', '2017-11-10 10:20:10'),
(443, 2, 0, 'Update Nearby Kuta Beach', '2017-11-10 10:20:27'),
(444, 2, 0, 'Update Nearby Plaza Ambarukmo', '2017-11-10 10:22:04'),
(445, 2, 0, 'Update Nearby Trans Studio Bandung', '2017-11-10 10:22:21'),
(446, 2, 0, 'Update Nearby Pasar Senen', '2017-11-10 10:23:20'),
(447, 2, 0, 'Update Nearby ITC Roxy Mas', '2017-11-10 10:23:32'),
(448, 2, 0, 'Update Nearby Jatim Park 1', '2017-11-10 12:53:21'),
(449, 2, 0, 'Update Feature Kulkas', '2017-11-11 09:24:54'),
(450, 21, 50, 'Insert Access Tutup For Hotel', '2017-11-11 10:31:59'),
(451, 21, 50, 'Update User tunjungan', '2017-11-11 10:33:23'),
(452, 21, 50, 'Insert Access Kalender For Hotel', '2017-11-11 10:36:26'),
(453, 21, 50, 'Update User tunjungan', '2017-11-11 10:36:38'),
(454, 21, 50, 'Update Closed Twin Deluxe 2017-10-21 - 2017-10-21', '2017-11-11 10:40:56'),
(455, 22, 51, 'Update User santika', '2017-11-13 17:00:00'),
(456, 22, 51, 'Update Room Double Deluxe', '2017-11-13 17:00:43'),
(457, 23, 53, 'Update User ciputra', '2017-11-13 17:01:37'),
(458, 28, 52, 'Update User horison', '2017-11-13 17:03:00'),
(459, 29, 54, 'Update User prima', '2017-11-13 17:04:28'),
(460, 30, 55, 'Update User kutaparadiso', '2017-11-13 17:05:28'),
(461, 31, 56, 'Update User grandambarrukmo', '2017-11-13 17:07:15'),
(462, 32, 57, 'Update User tentrem', '2017-11-13 17:08:11'),
(463, 33, 58, 'Update User transluxury', '2017-11-13 17:09:03'),
(464, 34, 59, 'Update User borobudur', '2017-11-13 17:10:33'),
(465, 35, 60, 'Update User merlynn', '2017-11-13 17:11:30'),
(466, 2, 0, 'Update Access fee For Staff', '2017-11-15 16:52:22'),
(467, 2, 0, 'Update User admin', '2017-11-15 16:52:39'),
(468, 2, 0, 'Update User dd', '2017-11-15 16:52:46'),
(469, 21, 50, 'Update Room Twin Deluxe', '2017-11-15 22:15:52'),
(470, 21, 50, 'Update Room Double Superior', '2017-11-15 22:16:42'),
(471, 23, 53, 'Update Room Twin Deluxe', '2017-11-15 22:17:37'),
(472, 23, 53, 'Update Room Twin Deluxe', '2017-11-15 22:17:55'),
(473, 23, 53, 'Update Room Double Superior', '2017-11-15 22:18:00'),
(474, 2, 0, 'Insert Access permintaan For Staff', '2017-11-16 04:27:55'),
(475, 2, 0, 'Insert Access Pertanyaan For Staff', '2017-11-16 09:43:46'),
(476, 2, 0, 'Update User admin', '2017-11-16 10:00:55'),
(477, 2, 0, 'Update User dd', '2017-11-16 10:01:03'),
(478, 2, 0, 'Update Nearby Gadjah Mada University', '2017-11-16 10:25:31'),
(479, 2, 0, 'Update Feature AC', '2017-11-16 11:48:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `metode`
--

CREATE TABLE `metode` (
  `id_metode` int(11) NOT NULL,
  `bank` varchar(255) DEFAULT NULL,
  `nama` varchar(255) NOT NULL,
  `rek` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `metode`
--

INSERT INTO `metode` (`id_metode`, `bank`, `nama`, `rek`, `status`) VALUES
(1, 'Bca', 'PT Karunia Travel', '1234', 1),
(3, 'BRI', 'PT Karunia Travel', '6789', 1),
(5, 'bni', 'PT Karunia Travel', '12345', 1),
(12, 'bjb', 'PT Karunia Travel', '123', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nearby`
--

CREATE TABLE `nearby` (
  `id_nearby` int(11) NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `kota_id` int(11) NOT NULL,
  `alamatnear` varchar(255) NOT NULL,
  `latnear` varchar(255) NOT NULL,
  `longinear` varchar(255) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nearby`
--

INSERT INTO `nearby` (`id_nearby`, `tempat`, `kota_id`, `alamatnear`, `latnear`, `longinear`, `status`) VALUES
(1, 'Tunjungan Plaza', 1, 'Jl. Basuki Rahmat No.8-12, Kedungdoro, Tegalsari, Kota SBY, Jawa Timur 60261, Indonesia', '-7.2630531', '112.74031430000002', 1),
(2, 'Stasiun Gubeng', 1, 'Jl. Stasiun Gubeng No.1, Pacar Keling, Tambaksari, Kota SBY, Jawa Timur 60131, Indonesia', '-7.265452', '112.75210330000004', 1),
(3, 'Jatim Park 1', 2, 'Jl. Kartika 2, Sisir, Kec. Batu, Kota Batu, Jawa Timur 65315, Indonesia', '-7.884501699999998', '112.5248818', 1),
(4, 'Plaza Araya', 2, 'Komp. Araya Bussines Center, Jl. Panji Suroso, Purwodadi, Blimbing, Kota Malang, Jawa Timur 65126, Indonesia', '-7.934936299999999', '112.65024749999998', 1),
(5, 'Kuta Beach', 3, 'Jl. Raya Kuta No.1, Kuta, Kabupaten Badung, Bali 80361, Indonesia', '-8.7184926', '115.16863220000005', 1),
(6, 'Gadjah Mada University', 6, 'Jl. Bhinneka Tunggal Ika, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281, Indonesia', '-7.7713847', '110.37749980000001', 1),
(7, 'Plaza Ambarukmo', 6, 'Plaza Ambarrukmo, Jl. Laksda Adisucipto, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281, Indonesia', '-7.7823147', '110.40131989999998', 1),
(8, 'Trans Studio Bandung', 5, 'Jl. Jendral Gatot Subroto No.289, Cibangkong, Kec. Bandung, Kota Bandung, Jawa Barat 40273, Indonesia', '-6.925058399999999', '107.63649009999995', 1),
(9, 'Pasar Senen', 4, 'Jl. Bungur Besar No.161, Bungur, Senen, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10460, Indonesia', '-6.174143999999999', '106.84505379999996', 1),
(10, 'ITC Roxy Mas', 4, 'Jl. KH. Hasyim Ashari No.125, Cideng, Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10150, Indonesia', '-6.1667558', '106.80300299999999', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` bigint(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `nama_pemesan` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `no_telp` varchar(20) NOT NULL,
  `produk_id` int(11) NOT NULL,
  `kamar` int(12) NOT NULL,
  `orang` int(12) NOT NULL,
  `tgl_pemesanan` datetime NOT NULL,
  `datang` varchar(255) DEFAULT NULL,
  `tgl_in` date NOT NULL,
  `tgl_out` date NOT NULL,
  `ket` text,
  `bukti` varchar(255) DEFAULT NULL,
  `bayar` int(255) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `metode_id` int(11) NOT NULL,
  `status_pemesanan` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `user_id`, `nama_pemesan`, `email`, `no_telp`, `produk_id`, `kamar`, `orang`, `tgl_pemesanan`, `datang`, `tgl_in`, `tgl_out`, `ket`, `bukti`, `bayar`, `supplier_id`, `metode_id`, `status_pemesanan`) VALUES
(91117001, 'p38', 'Lalala', 'norok.event@gmail.com', '081233333333', 52, 1, 1, '2017-11-09 00:00:00', '03.00 - 04.00', '2017-11-09', '2017-11-09', 'Lantai Atas,Bebas Asap Rokok', '911170013.png', 499001, 50, 1, '1'),
(91117002, 'p38', 'Lalala', 'hakiki@karuniatravel.com', '081233333333', 50, 1, 1, '2017-11-09 00:00:00', '07.00 - 08.00', '2017-11-09', '2017-11-09', NULL, NULL, 349002, 51, 1, '1'),
(111117002, 'p38', 'Lalala', 'norok.event@gmail.com', '081', 52, 1, 1, '2017-11-11 00:00:00', 'Saya tidak tahu', '2017-11-11', '2017-11-11', NULL, NULL, 499002, 50, 1, '1'),
(131117001, 'g1', 'ya', 'hakiki@karuniatravel.com', '01', 57, 1, 1, '2017-11-13 00:00:00', '19.00 - 20.00', '2017-11-13', '2017-11-13', 'Lantai Atas', NULL, 449001, 53, 1, '0'),
(141117001, 'g2', 'zx', 'email@email.com', '081233333333', 57, 1, 1, '2017-11-14 00:00:00', '08.00 - 09.00', '2017-11-14', '2017-11-14', 'Lantai Atas', NULL, 449001, 53, 1, '0'),
(141117002, 'g3', 'Gege', 'hakiki@karuniatravel.com', '01', 67, 1, 1, '2017-11-14 09:38:00', '10.00 - 11.00', '2017-11-14', '2017-11-14', NULL, NULL, 649002, 59, 1, '0'),
(141117003, 'g4', 'Haha', 'hakiki@karuniatravel.com', '01', 68, 1, 1, '2017-11-14 09:41:12', 'Saya tidak tahu', '2017-11-14', '2017-11-14', NULL, '141117003.jpg', 549003, 60, 1, '1'),
(141117004, 'g5', 'Zuhri', 'zuhri@karuniatravel.com', '081235374767', 61, 1, 1, '2017-11-14 14:40:59', 'Saya tidak tahu', '2017-11-16', '2017-11-18', NULL, NULL, 2099004, 55, 0, '0'),
(141117005, 'p38', 'Lalala', 'hakiki@karuniatravel.com', '081', 52, 1, 1, '2017-11-14 15:46:51', '06.00 - 07.00', '2017-11-14', '2017-11-14', NULL, '141117005.png', 499005, 50, 1, '1'),
(141117006, 'p38', 'Lalala', 'norok.event@gmail.com', '081', 50, 1, 1, '2017-11-14 16:24:03', 'Saya tidak tahu', '2017-11-14', '2017-11-16', NULL, NULL, 1049006, 51, 0, '0'),
(141117007, 'p38', 'Lalala', 'norok.event@gmail.com', '081', 50, 1, 1, '2017-11-14 16:30:00', 'Saya tidak tahu', '2017-11-14', '2017-11-16', NULL, NULL, 1049007, 51, 0, '0'),
(151117001, 's2', 'WW', 'hakiki@karuniatravel.com', '081', 52, 1, 1, '2017-11-15 11:00:59', 'Saya tidak tahu', '2017-11-15', '2017-11-19', NULL, NULL, 1999001, 50, 0, '0'),
(151117003, 'g6', 'QQ', 'hakiki@karuniatravel.com', '081233333333', 67, 1, 1, '2017-11-15 11:23:28', '06.00 - 07.00', '2017-11-15', '2017-11-16', 'Lantai Atas,Bebas Asap Rokok', '151117003.png', 649003, 59, 1, '1'),
(151117004, 'p38', 'Lalala', 'hakiki@karuniatravel.com', '081', 50, 1, 2, '2017-11-15 16:15:53', 'Saya tidak tahu', '2017-11-15', '2017-11-16', NULL, '151117004.jpg', 349004, 51, 1, '0'),
(151117005, 'p38', 'Lalala', 'norok.event@gmail.com', '081', 66, 1, 1, '2017-11-15 18:25:04', '02.00 - 03.00', '2017-11-15', '2017-11-16', NULL, '151117005.png', 499005, 58, 1, '1'),
(151117006, 'p38', 'Lalala', 'norok.event@gmail.com', '081', 57, 1, 2, '2017-11-15 21:44:45', 'Saya tidak tahu', '2017-11-15', '2017-11-16', NULL, '151117006.jpg', 494006, 53, 1, '1'),
(161117001, 'p38', 'Lalala', 'hakiki@karuniatravel.com', '081', 56, 1, 2, '2017-11-16 11:39:26', 'Saya tidak tahu', '2017-11-16', '2017-11-17', 'Lantai Atas', '161117001.jpg', 439001, 53, 1, '1'),
(161117002, 'p41', 'Dicky', 'dicky@karuniatravel.com', '08123152231', 53, 1, 2, '2017-11-16 13:31:01', 'Saya tidak tahu', '2017-11-23', '2017-11-29', NULL, '161117002.jpg', 2969002, 50, 1, '0'),
(161117003, 'p41', 'Dicky', 'dicky@karuniatravel.com', '08123152231', 61, 1, 1, '2017-11-16 13:34:52', 'Saya tidak tahu', '2017-11-16', '2017-11-17', NULL, NULL, 769003, 55, 1, '0'),
(161117004, 'p38', 'Lalala', 'norok.event@gmail.com', '081', 50, 1, 2, '2017-11-16 14:29:19', 'Saya tidak tahu', '2017-11-16', '2017-11-17', NULL, '1611170042.jpg', 384004, 51, 1, '0'),
(161117005, 'g7', 'agung', 'puji', '083857321987', 52, 1, 2, '2017-11-16 15:46:05', 'Saya tidak tahu', '2017-11-18', '2017-11-19', NULL, NULL, 549005, 50, 0, '0'),
(161117006, 'g8', 'AGUNG', 'PUJI', '083857321987', 52, 1, 2, '2017-11-16 15:47:07', 'Saya tidak tahu', '2017-11-18', '2017-11-19', ',ABC', NULL, 549006, 50, 1, '0'),
(161117007, 'p38', 'Gege', 'hakiki@karuniatravel.com', '081233333333', 52, 1, 2, '2017-11-16 16:26:16', 'Saya tidak tahu', '2017-11-21', '2017-11-22', NULL, '161117007.jpg', 549007, 50, 1, '0'),
(161117008, 'p38', 'Lalala', 'norok.event@gmail.com', '081233333333', 52, 1, 2, '2017-11-16 16:36:16', 'Saya tidak tahu', '2017-11-16', '2017-11-22', 'Lantai Atas', NULL, 3299008, 50, 1, '0'),
(171117001, 'p38', 'Lalala', 'hakiki@karuniatravel.com', '081', 67, 1, 2, '2017-11-17 16:46:15', 'Saya tidak tahu', '2017-11-18', '2017-11-19', NULL, NULL, 714001, 59, 0, '0'),
(171117002, 'p38', 'Lalala', 'hakiki@karuniatravel.com', '081233333333', 57, 1, 1, '2017-11-17 16:50:50', 'Saya tidak tahu', '2017-11-17', '2017-11-18', NULL, '1711170024.png', 494002, 53, 1, '0'),
(171117003, 'p38', 'Lalala', 'hakiki@karuniatravel.com', '081', 61, 1, 2, '2017-11-17 17:53:49', 'Saya tidak tahu', '2017-11-18', '2017-11-19', NULL, '171117003.png', 769003, 55, 1, '0'),
(181117001, 'p38', 'Lalala', 'norok.event@gmail.com', '081', 57, 1, 1, '2017-11-18 09:04:51', '19.00 - 20.00', '2017-11-18', '2017-11-19', NULL, '181117001.png', 494001, 53, 1, '0'),
(181117002, 'p38', 'Lalala', 'norok.event@gmail.com', '081', 57, 1, 1, '2017-11-18 09:21:12', 'Saya tidak tahu', '2017-11-18', '2017-11-19', NULL, '1811170024.png', 494002, 53, 1, '0'),
(181117003, 'p38', 'Lalala', 'norok.event@gmail.com', '081', 57, 1, 1, '2017-11-18 09:29:05', 'Saya tidak tahu', '2017-11-18', '2017-11-19', NULL, '1811170032.png', 494003, 53, 1, '0'),
(181117004, 'p38', 'Lalala', 'norok.event@gmail.com', '081', 51, 1, 1, '2017-11-18 14:21:53', 'Saya tidak tahu', '2017-11-18', '2017-11-19', NULL, '1811170046.jpg', 439004, 51, 1, '0'),
(181117005, 'p38', 'Lalala', 'norok.event@gmail.com', '081', 52, 1, 1, '2017-11-18 14:44:47', 'Saya tidak tahu', '2017-11-18', '2017-11-19', NULL, '1811170054.jpg', 549005, 50, 1, '0'),
(201117001, 'p38', 'Lalala', 'norok.event@gmail.com', '081', 56, 1, 1, '2017-11-20 09:05:30', '05.00 - 06.00', '2017-11-20', '2017-11-21', NULL, '2011170015.jpg', 439001, 53, 1, '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `permintaan`
--

CREATE TABLE `permintaan` (
  `id_permintaan` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `relasi` varchar(255) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `permintaan`
--

INSERT INTO `permintaan` (`id_permintaan`, `nama`, `relasi`, `status`) VALUES
(1, 'Lantai Atas', '', 0),
(2, 'Tempat tidur bayi', '', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `person`
--

CREATE TABLE `person` (
  `id_person` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_identitas` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `person`
--

INSERT INTO `person` (`id_person`, `password`, `no_identitas`, `nama_lengkap`, `tgl_lahir`, `alamat`, `no_telp`, `email`, `status`) VALUES
(38, '28b662d883b6d76fd96e4ddc5e9ba780', '99', 'Lalala', '2017-10-02', 'Jl Jalan', '081', 'norok.event@gmail.com', 'Y'),
(39, '28b662d883b6d76fd96e4ddc5e9ba780', '', '', '0000-00-00', '', '', 'guidedn3@gmail.com', '35d2857a7fe268b8ed7b35414642d5b1'),
(40, '28b662d883b6d76fd96e4ddc5e9ba780', '', '', '0000-00-00', '', '', 'hakiki@karuniatravel.com', '4ac0bc9fc4c4c2d01b0b66a368dc3f3c'),
(41, '0f7844467d9715c9f90faff91ef01cf2', '08123152231', 'Dicky', '1990-12-03', 'Kalibutuh', '08123152231', 'dicky@karuniatravel.com', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id_pertanyaan` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `lampiran` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pertanyaan`
--

INSERT INTO `pertanyaan` (`id_pertanyaan`, `nama`, `email`, `judul`, `isi`, `lampiran`) VALUES
(2, 'MM', 'email@email.com', 'tes', 'tested', NULL),
(5, 'foto', 'foto', 'foto', 'foto', 'foto.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `fitur_id` varchar(255) NOT NULL,
  `luas` int(11) NOT NULL,
  `stok` varchar(255) NOT NULL,
  `warna` varchar(255) NOT NULL,
  `bed_id` int(11) NOT NULL,
  `pembayaran` varchar(255) DEFAULT NULL,
  `supplier_id` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`, `fitur_id`, `luas`, `stok`, `warna`, `bed_id`, `pembayaran`, `supplier_id`, `status`, `created`) VALUES
(50, 'Twin Superior', 350000, '9,10,11,13', 10, '3', '#3f51b5', 1, '0,1', 51, 1, '2017-10-10'),
(51, 'Double Deluxe', 400000, '13,10,11,17', 10, '4', '#3fb58d', 3, '1', 51, 1, '2017-10-10'),
(52, 'Twin Deluxe', 500000, '13,16,10,11,17', 10, '3', '#3f51b5', 1, '0,1', 50, 1, '2017-10-10'),
(53, 'Double Superior', 450000, '13,10,11,17', 9, '4', '#9ab53f', 3, '1,2', 50, 1, '2017-10-10'),
(54, 'Double Deluxe', 475000, '9,10,11,13', 12, '3', '#3f51b5', 3, '0,1', 52, 1, '2017-10-11'),
(55, 'Double Superior', 425000, '9,10,11,13', 9, '2', '#7723c3', 3, '1', 52, 1, '2017-10-11'),
(56, 'Twin Deluxe', 400000, '13,18', 10, '4', '#a9b53f', 1, '1', 53, 1, '2017-10-11'),
(57, 'Double Superior', 450000, '13,18,16,11,17', 10, '2', '#3f51b5', 3, '0,1', 53, 1, '2017-10-11'),
(58, 'Twin Deluxe', 300000, '9,13', 10, '4', '#3f51b5', 1, '0,1', 54, 1, '2017-10-17'),
(59, 'Double Superior', 320000, '9,13', 11, '4', '#9bb53f', 3, '1', 54, 1, '2017-10-17'),
(60, 'Double Deluxe', 600000, '9,10,11,13', 15, '4', '#3f51b5', 3, '', 55, 1, '2017-10-19'),
(61, 'Double Superior', 700000, '9,10,11,13', 17, '2', '#3f51b5', 3, '', 55, 1, '2017-10-19'),
(62, 'Premium Double Superior', 1000000, '9,11,13', 20, '4', '#3f51b5', 5, '', 56, 1, '2017-10-19'),
(63, 'Double Deluxe', 500000, '9,11,13', 10, '3', '#3fb562', 3, '', 56, 1, '2017-10-19'),
(64, 'Grand Double Deluxe', 1200000, '9,10,11,13', 20, '5', '#3f51b5', 3, '', 57, 1, '2017-10-19'),
(65, 'Double Superior', 600000, '9,10,11,13', 10, '2', '#3f51b5', 3, '', 57, 1, '2017-10-19'),
(66, 'Double Superior', 500000, '9,10,11,13', 9, '2', '#3f51b5', 3, '', 58, 1, '2017-10-19'),
(67, 'Superior', 650000, '9,10,11,13', 11, '3', '#3f51b5', 5, '', 59, 1, '2017-10-19'),
(68, 'Double Deluxe', 550000, '9,10,11,13', 10, '2', '#3f51b5', 3, '', 60, 1, '2017-10-19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `nama_supplier` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `longi` varchar(255) NOT NULL,
  `fitur_id` varchar(255) NOT NULL,
  `fiturkamar` varchar(255) NOT NULL,
  `bintang` varchar(2) NOT NULL,
  `kota_id` int(11) NOT NULL,
  `nearby` varchar(255) NOT NULL,
  `tentang` text NOT NULL,
  `pengumuman` text,
  `rate` int(11) NOT NULL,
  `popular` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `slug`, `nama_supplier`, `alamat`, `no_telp`, `email`, `lat`, `longi`, `fitur_id`, `fiturkamar`, `bintang`, `kota_id`, `nearby`, `tentang`, `pengumuman`, `rate`, `popular`, `status`) VALUES
(50, 'tunjungan-hotel-surabaya', 'Tunjungan Hotel Surabaya', 'Jl. Tunjungan No.102-104, Kedungdoro, Tegalsari, Kota SBY, Jawa Timur 60261, Indonesia', '081233333333', 'email@email.com', '-7.2618993', '112.74013549999995', '13,14,15,12,9', '13,16,10,11,17', '2', 1, '1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pretium tellus quis vulputate pharetra. Cras lacus leo, venenatis ac venenatis sit amet, vehicula vitae odio. Nulla vitae ante sagittis, iaculis felis quis, auctor libero. Vestibulum a aliquet orci. Aliquam aliquet, est finibus porttitor volutpat, arcu ipsum elementum odio, vel consectetur nisl metus eu metus. Morbi erat nibh, sodales id ante at, interdum pulvinar ante. Duis id urna non metus vulputate ultrices. Phasellus id tortor in arcu fermentum varius. Etiam eget lorem in libero sagittis auctor eget sed ex.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pretium tellus quis vulputate pharetra. Cras lacus leo, venenatis ac venenatis sit amet, vehicula vitae odio. Nulla vitae ante sagittis, iaculis felis quis, auctor libero. Vestibulum a aliquet orci. Aliquam aliquet, est finibus porttitor volutpat, arcu ipsum elementum odio, vel consectetur nisl metus eu metus. Morbi erat nibh, sodales id ante at, interdum pulvinar ante. Duis id urna non metus vulputate ultrices. Phasellus id tortor in arcu fermentum varius. Etiam eget lorem in libero sagittis auctor eget sed ex.', 75, 2, 1),
(51, 'hotel-santika-premier-surabaya-1510567223', 'Hotel Santika Premier Surabaya', 'Jl. Raya Gubeng No.52, Gubeng, Kota SBY, Jawa Timur 60281, Indonesia', '081233333333', 'email@email.com', '-7.272253900000001', '112.74773430000005', '13,12,9', '13,18,16,10,11,17', '1', 1, '2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pretium tellus quis vulputate pharetra. Cras lacus leo, venenatis ac venenatis sit amet, vehicula vitae odio. Nulla vitae ante sagittis, iaculis felis quis, auctor libero. Vestibulum a aliquet orci. Aliquam aliquet, est finibus porttitor volutpat, arcu ipsum elementum odio, vel consectetur nisl metus eu metus. Morbi erat nibh, sodales id ante at, interdum pulvinar ante. Duis id urna non metus vulputate ultrices. Phasellus id tortor in arcu fermentum varius. Etiam eget lorem in libero sagittis auctor eget sed ex.', '', 66, 1, 1),
(52, 'horison-ultima-malang-1510567430', 'Horison Ultima Malang', 'Plaza Araya, Jl. Blimbing Indah Megah No.2, Purwodadi, Blimbing, Kota Malang, Jawa Timur 65126, Indonesia', '081233333333', 'email@email.com', '-7.935677', '112.65138400000001', '13,9', '13,18,16,10,11,17', '5', 2, '4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget sollicitudin magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris rhoncus neque massa, non porta sapien congue vitae. Mauris rhoncus urna quis mollis iaculis. Phasellus efficitur at enim quis feugiat. Quisque mattis elit at est dictum porta. Sed at nulla at odio ullamcorper sodales. Sed sed arcu tellus. Cras ut magna ac magna tempus consectetur ac non enim. Nullam at urna vitae elit maximus bibendum. Nunc pulvinar feugiat orci in mattis. Integer rhoncus vehicula dui nec commodo. ', '', 0, NULL, 1),
(53, 'ciputra-world-surabaya', 'Ciputra World Surabaya', 'Ciputra World, Jl. Mayjen Sungkono No.89, Gn. Sari, Dukuh Pakis, Kota SBY, Jawa Timur 60224, Indonesia', '081233333333', 'email@email.com', '-7.293672800000001', '112.72026570000003', '13,15,9', '13,18,16,11,17', '4', 1, '1,2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pretium tellus quis vulputate pharetra. Cras lacus leo, venenatis ac venenatis sit amet, vehicula vitae odio. Nulla vitae ante sagittis, iaculis felis quis, auctor libero. Vestibulum a aliquet orci. Aliquam aliquet, est finibus porttitor volutpat, arcu ipsum elementum odio, vel consectetur nisl metus eu metus. Morbi erat nibh, sodales id ante at, interdum pulvinar ante. Duis id urna non metus vulputate ultrices. Phasellus id tortor in arcu fermentum varius. Etiam eget lorem in libero sagittis auctor eget sed ex.', '', 70, 1, 1),
(54, 'prima-asri-hotel-1510567485', 'Prima Asri Hotel', 'Jl. Imam Bonjol Atas No.30, Sisir, Kec. Batu, Kota Batu, Jawa Timur 65314, Indonesia', '081222233425', 'email@email.com', '-7.881193', '112.52427409999996', '13,9', '13,18,16,10,11,17', '2', 2, '3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pretium tellus quis vulputate pharetra. Cras lacus leo, venenatis ac venenatis sit amet, vehicula vitae odio. Nulla vitae ante sagittis, iaculis felis quis, auctor libero. Vestibulum a aliquet orci. Aliquam aliquet, est finibus porttitor volutpat, arcu ipsum elementum odio, vel consectetur nisl metus eu metus. Morbi erat nibh, sodales id ante at, interdum pulvinar ante. Duis id urna non metus vulputate ultrices. Phasellus id tortor in arcu fermentum varius. Etiam eget lorem in libero sagittis auctor eget sed ex.', '', 0, NULL, 1),
(55, 'kuta-paradiso-hotel-1510567580', 'Kuta Paradiso Hotel', 'Jl. Kartika No.4, Kuta, Kabupaten Badung, Bali 80361, Indonesia', '081222233425', 'email@email.com', '-8.725868900000002', '115.17030010000008', '13,12,9', '13,18,16,10,11,17', '5', 3, '5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pretium tellus quis vulputate pharetra. Cras lacus leo, venenatis ac venenatis sit amet, vehicula vitae odio. Nulla vitae ante sagittis, iaculis felis quis, auctor libero. Vestibulum a aliquet orci. Aliquam aliquet, est finibus porttitor volutpat, arcu ipsum elementum odio, vel consectetur nisl metus eu metus. Morbi erat nibh, sodales id ante at, interdum pulvinar ante. Duis id urna non metus vulputate ultrices. Phasellus id tortor in arcu fermentum varius. Etiam eget lorem in libero sagittis auctor eget sed ex.', '', 0, NULL, 1),
(56, 'grand-ambarrukmo-yogyakarta-1510567650', 'Grand Ambarrukmo Yogyakarta', 'Jl. Laksda Adisucipto No.57, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281, Indonesia', '081222233425', 'email@email.com', '-7.783335999999997', '110.40067499999998', '13,9', '13,18,16,10,11,17', '4', 6, '7', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pretium tellus quis vulputate pharetra. Cras lacus leo, venenatis ac venenatis sit amet, vehicula vitae odio. Nulla vitae ante sagittis, iaculis felis quis, auctor libero. Vestibulum a aliquet orci. Aliquam aliquet, est finibus porttitor volutpat, arcu ipsum elementum odio, vel consectetur nisl metus eu metus. Morbi erat nibh, sodales id ante at, interdum pulvinar ante. Duis id urna non metus vulputate ultrices. Phasellus id tortor in arcu fermentum varius. Etiam eget lorem in libero sagittis auctor eget sed ex.', '', 0, NULL, 1),
(57, 'hotel-tentrem-yogyakarta-1510567709', 'Hotel Tentrem Yogyakarta', 'Jl. AM. Sangaji No.72, Karangwaru, Tegalrejo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55233, Indonesia', '081222233425', 'email@email.com', '-7.773766099999999', '110.36848629999997', '13,12,9', '13,18,16,10,11,17', '5', 6, '6', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pretium tellus quis vulputate pharetra. Cras lacus leo, venenatis ac venenatis sit amet, vehicula vitae odio. Nulla vitae ante sagittis, iaculis felis quis, auctor libero. Vestibulum a aliquet orci. Aliquam aliquet, est finibus porttitor volutpat, arcu ipsum elementum odio, vel consectetur nisl metus eu metus. Morbi erat nibh, sodales id ante at, interdum pulvinar ante. Duis id urna non metus vulputate ultrices. Phasellus id tortor in arcu fermentum varius. Etiam eget lorem in libero sagittis auctor eget sed ex.', '', 0, NULL, 1),
(58, 'the-trans-luxury-bandung-1510567760', 'The Trans Luxury Bandung', 'Jl. Trans Studio No.1615, Cibangkong, Batununggal, Kota Bandung, Jawa Barat 40273, Indonesia', '081222233425', 'email@email.com', '-6.927096', '107.63600700000006', '13,12,9', '13,18,16,10,11,17', '5', 5, '8', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pretium tellus quis vulputate pharetra. Cras lacus leo, venenatis ac venenatis sit amet, vehicula vitae odio. Nulla vitae ante sagittis, iaculis felis quis, auctor libero. Vestibulum a aliquet orci. Aliquam aliquet, est finibus porttitor volutpat, arcu ipsum elementum odio, vel consectetur nisl metus eu metus. Morbi erat nibh, sodales id ante at, interdum pulvinar ante. Duis id urna non metus vulputate ultrices. Phasellus id tortor in arcu fermentum varius. Etiam eget lorem in libero sagittis auctor eget sed ex.', '', 0, NULL, 1),
(59, 'hotel-borobudur-jakarta-1510567848', 'Hotel Borobudur Jakarta', 'Jl. Lap. Banteng Selatan No.1, Ps. Baru, Sawah Besar, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10710, Indonesia', '081222233425', 'email@email.com', '-6.172552899999999', '106.83517189999998', '13,12,9', '13,18,16,10,11,17', '5', 4, '9', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pretium tellus quis vulputate pharetra. Cras lacus leo, venenatis ac venenatis sit amet, vehicula vitae odio. Nulla vitae ante sagittis, iaculis felis quis, auctor libero. Vestibulum a aliquet orci. Aliquam aliquet, est finibus porttitor volutpat, arcu ipsum elementum odio, vel consectetur nisl metus eu metus. Morbi erat nibh, sodales id ante at, interdum pulvinar ante. Duis id urna non metus vulputate ultrices. Phasellus id tortor in arcu fermentum varius. Etiam eget lorem in libero sagittis auctor eget sed ex.', '', 0, NULL, 1),
(60, 'merlynn-park-hotel-1510567902', 'Merlynn Park Hotel', 'Jl. KH. Hasyim Ashari No.29-31, Petojo Utara, Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10130, Indonesia', '081222233425', 'email@email.com', '-6.1655739', '106.81539279999993', '13,12,9', '13,18,16,10,11,17', '5', 4, '10', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pretium tellus quis vulputate pharetra. Cras lacus leo, venenatis ac venenatis sit amet, vehicula vitae odio. Nulla vitae ante sagittis, iaculis felis quis, auctor libero. Vestibulum a aliquet orci. Aliquam aliquet, est finibus porttitor volutpat, arcu ipsum elementum odio, vel consectetur nisl metus eu metus. Morbi erat nibh, sodales id ante at, interdum pulvinar ante. Duis id urna non metus vulputate ultrices. Phasellus id tortor in arcu fermentum varius. Etiam eget lorem in libero sagittis auctor eget sed ex.', '', 0, NULL, 1),
(61, 'fave-hotel-rungkut-surabaya', 'Fave Hotel Rungkut Surabaya', 'Jl. Raya Kali Rungkut No.25, Kali Rungkut, Rungkut, Kota SBY, Jawa Timur 60293, Indonesia', '081', 'email@email.com', '-7.315037999999999', '112.76905290000002', '9,12,13,14,15', '', '3', 1, '1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pretium tellus quis vulputate pharetra. Cras lacus leo, venenatis ac venenatis sit amet, vehicula vitae odio. Nulla vitae ante sagittis, iaculis felis quis, auctor libero. Vestibulum a aliquet orci. Aliquam aliquet, est finibus porttitor volutpat, arcu ipsum elementum odio, vel consectetur nisl metus eu metus. Morbi erat nibh, sodales id ante at, interdum pulvinar ante. Duis id urna non metus vulputate ultrices. Phasellus id tortor in arcu fermentum varius. Etiam eget lorem in libero sagittis auctor eget sed ex.', '', 0, NULL, 1),
(65, 'red-planet-1510550816', 'Red Planet', 'Jl. Arjuno No.64, Sawahan, Kec. Sawahan, Kota SBY, Jawa Timur 60251, Indonesia', '1', 'email@email.com', '-7.262162999999998', '112.72637199999997', '13,15,12,9', '13,18,16,10,11,17', '1', 1, '1', '', '', 0, NULL, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tutup`
--

CREATE TABLE `tutup` (
  `id_tutup` int(11) NOT NULL,
  `produk_id` int(11) NOT NULL,
  `dari` date NOT NULL,
  `sampai` date NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tutup`
--

INSERT INTO `tutup` (`id_tutup`, `produk_id`, `dari`, `sampai`, `supplier_id`, `status`) VALUES
(1, 52, '2017-10-21', '2017-10-21', 50, 1),
(2, 65, '2017-10-21', '2017-10-23', 57, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `akses_id` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `akses_id`, `nama_lengkap`, `alamat`, `no_telp`, `email`, `status`) VALUES
(1, 'dd', '1aabac6d068eef6a7bad3fdf50a05cc8', '16,12,17,23,7,26,13,14,22,9,27,28,11,10,15', 'D D', 'Surabaya', '0812', 'email@email.com', 1),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', '16,12,17,23,7,26,13,14,22,9,27,28,11,10,15', 'admin', 'jl jalan', '11', 'email@email.com', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_supplier`
--

CREATE TABLE `user_supplier` (
  `id_us` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `akses_id` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_supplier`
--

INSERT INTO `user_supplier` (`id_us`, `username`, `password`, `akses_id`, `nama_lengkap`, `alamat`, `no_telp`, `email`, `supplier_id`, `status`) VALUES
(21, 'tunjungan', 'ec9f05f2515e6df85ddebe630ba7fd78', '12,23,5,18,25,1,3,9,24', 'Tunjungan Hotel', 'Jl Jalan', '081', 'email@email.com', 50, 1),
(22, 'santika', 'dac93fcdb9817a41a54b7cdc01dc88cd', '12,23,5,18,25,1,3,9,24', 'Santika Hotel', 'Jl Jalan', '081233333333', 'email@email.com', 51, 1),
(23, 'ciputra', '4b3770767ac8d7613fe0c94d77582b7c', '12,23,5,18,25,1,3,9,24', 'Ciputra World', 'Jl Jalan', '081233333333', 'email@email.com', 53, 1),
(28, 'horison', '8ea7273c9bd44b1f9587e8ad3306d765', '12,23,5,18,25,1,3,9,24', 'Horison Ultima', 'Jl Jalan', '081233333333', 'email@email.com', 52, 1),
(29, 'prima', '3c00ab9ee5f47c8afc7ab4fc62342ef4', '12,23,5,18,25,1,3,9', 'Prima Asri Hotel Malang', 'Jl Raya Malang', '081222233425', 'email@email.com', 54, 1),
(30, 'kutaparadiso', '0f36cd92a135daa76a40b1d6195ad3ab', '12,23,5,18,25,1,3,9,24', 'Kuta Paradiso Hotel', 'JL. KARTIKA PLAZA, KUTA , PO.BOX 1133 & 1134, Badung, Indonesia, 80361', '081222233425', 'email@email.com', 55, 1),
(31, 'grandambarrukmo', '1f2ae914972288e44c389b8c602d2fc9', '12,23,5,18,25,1,3,9,24', 'Grand Ambarrukmo Yogyakarta', 'Jalan Adisucipto No. 82, Yogyakarta, Indonesia, 55281', '081222233425', 'email@email.com', 56, 1),
(32, 'tentrem', '267941b2b891525ad83a64253595bbf2', '12,23,5,18,25,1,3,9,24', 'Hotel Tentrem Yogyakarta', 'Jalan AM Sangaji No. 72 A, Yogyakarta, Indonesia, 55233', '081222233425', 'email@email.com', 57, 1),
(33, 'transluxury', '4f4c23fdc0369f9a27c5c7b64b88512d', '12,23,5,18,25,1,3,9,24', 'The Trans Luxury Bandung', 'Jl. Gatot Subroto No. 289, Bandung, Indonesia, 40273', '081222233425', 'email@email.com', 58, 1),
(34, 'borobudur', '09ecf666d54eb2007b839c49065fcd68', '12,23,5,18,25,1,3,9,24', 'Hotel Borobudur Jakarta', 'Jl. Lapangan Banteng Selatan No. 01, Jakarta Pusat, Indonesia, 10710', '081222233425', 'email@email.com', 59, 1),
(35, 'merlynn', '7facf87bd2a3124f4fd1eaec3c4f1693', '12,23,5,18,25,1,3,9,24', 'Merlynn Park Hotel', 'Jl. K.H.Hasyim Ashari 29-31, Central Jakarta, Jakarta Pusat, Indonesia, 10130', '081222233425', 'email@email.com', 60, 1),
(36, 'fave', 'a8646c4d9685c31aabaa506a055f14f6', '1,3,5,9,12,18,23', 'fave hotel surabaya', 'jl jalan', '081233333333', 'email@email.com', 61, 1),
(39, 'red_planet', '2a7cffcd5a84eb406838b966769a69b2', '12,23,5,18,25,1,3,9,24', 'Red Planet', 'Jl. Arjuno No.64, Sawahan, Kec. Sawahan, Kota SBY, Jawa Timur 60251, Indonesia', '1', 'email@email.com', 65, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akses`
--
ALTER TABLE `akses`
  ADD PRIMARY KEY (`id_akses`);

--
-- Indexes for table `allotment`
--
ALTER TABLE `allotment`
  ADD PRIMARY KEY (`id_allotment`),
  ADD KEY `produk_id` (`produk_id`),
  ADD KEY `supplier_id` (`supplier_id`);

--
-- Indexes for table `bed`
--
ALTER TABLE `bed`
  ADD PRIMARY KEY (`id_bed`);

--
-- Indexes for table `fee`
--
ALTER TABLE `fee`
  ADD PRIMARY KEY (`id_fee`);

--
-- Indexes for table `fitur`
--
ALTER TABLE `fitur`
  ADD PRIMARY KEY (`id_fitur`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_gallery`),
  ADD KEY `supplier_id` (`supplier_id`),
  ADD KEY `produk_id` (`produk_id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id_kota`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id_log`),
  ADD KEY `supplier_id` (`supplier_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `metode`
--
ALTER TABLE `metode`
  ADD PRIMARY KEY (`id_metode`);

--
-- Indexes for table `nearby`
--
ALTER TABLE `nearby`
  ADD PRIMARY KEY (`id_nearby`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `permintaan`
--
ALTER TABLE `permintaan`
  ADD PRIMARY KEY (`id_permintaan`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id_person`);

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id_pertanyaan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `supplier_id` (`supplier_id`),
  ADD KEY `bed_id` (`bed_id`),
  ADD KEY `fitur_id` (`fitur_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`),
  ADD KEY `nearby` (`nearby`);

--
-- Indexes for table `tutup`
--
ALTER TABLE `tutup`
  ADD PRIMARY KEY (`id_tutup`),
  ADD KEY `supplier_id` (`supplier_id`),
  ADD KEY `produk_id` (`produk_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_supplier`
--
ALTER TABLE `user_supplier`
  ADD PRIMARY KEY (`id_us`),
  ADD KEY `supplier_id` (`supplier_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akses`
--
ALTER TABLE `akses`
  MODIFY `id_akses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `allotment`
--
ALTER TABLE `allotment`
  MODIFY `id_allotment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `bed`
--
ALTER TABLE `bed`
  MODIFY `id_bed` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `fee`
--
ALTER TABLE `fee`
  MODIFY `id_fee` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fitur`
--
ALTER TABLE `fitur`
  MODIFY `id_fitur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id_kota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=480;

--
-- AUTO_INCREMENT for table `metode`
--
ALTER TABLE `metode`
  MODIFY `id_metode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `nearby`
--
ALTER TABLE `nearby`
  MODIFY `id_nearby` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201117002;

--
-- AUTO_INCREMENT for table `permintaan`
--
ALTER TABLE `permintaan`
  MODIFY `id_permintaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `id_person` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id_pertanyaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `tutup`
--
ALTER TABLE `tutup`
  MODIFY `id_tutup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_supplier`
--
ALTER TABLE `user_supplier`
  MODIFY `id_us` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `allotment`
--
ALTER TABLE `allotment`
  ADD CONSTRAINT `allotment_ibfk_1` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `allotment_ibfk_3` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`id_supplier`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `gallery_ibfk_1` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`id_supplier`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`id_supplier`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `produk_ibfk_2` FOREIGN KEY (`bed_id`) REFERENCES `bed` (`id_bed`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tutup`
--
ALTER TABLE `tutup`
  ADD CONSTRAINT `tutup_ibfk_1` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`id_supplier`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tutup_ibfk_2` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
