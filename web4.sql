-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 13, 2017 at 04:38 AM
-- Server version: 10.2.3-MariaDB-log
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `agent`
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
-- Table structure for table `akses`
--

CREATE TABLE `akses` (
  `id_akses` int(11) NOT NULL,
  `akses` varchar(255) NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akses`
--

INSERT INTO `akses` (`id_akses`, `akses`, `tipe`, `status`) VALUES
(1, 'Room', '1', 1),
(3, 'Allotment', '1', 1),
(5, 'Gallery', '1', 1),
(7, 'Feature', '1', 1),
(9, 'User', '0.1', 1),
(10, 'Supplier', '0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `allotment`
--

CREATE TABLE `allotment` (
  `id_allotment` int(11) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `dari` date NOT NULL,
  `sampai` date NOT NULL,
  `produk_id` int(11) NOT NULL,
  `harga` varchar(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allotment`
--

INSERT INTO `allotment` (`id_allotment`, `jumlah`, `dari`, `sampai`, `produk_id`, `harga`, `supplier_id`, `status`) VALUES
(10, '3', '2017-10-10', '2017-10-11', 50, '370000', 51, 1);

-- --------------------------------------------------------

--
-- Table structure for table `bed`
--

CREATE TABLE `bed` (
  `id_bed` int(11) NOT NULL,
  `bed` varchar(255) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bed`
--

INSERT INTO `bed` (`id_bed`, `bed`, `status`) VALUES
(1, 'Twin', 1),
(3, 'Double', 1),
(5, 'Both', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fitur`
--

CREATE TABLE `fitur` (
  `id_fitur` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fitur`
--

INSERT INTO `fitur` (`id_fitur`, `nama`, `tipe`, `status`) VALUES
(9, 'Wifi', '0.1', 1),
(10, 'Sofa', '1', 1),
(11, 'Tv', '1', 1),
(12, 'Swimming Pool', '0', 1),
(13, 'Ac', '0.1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
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
-- Dumping data for table `gallery`
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
(38, 'tunjungan6.jpg', 'Room', '0', 50, 1),
(39, 'Horison_Ultima_Malang.jpg', 'Hotel', '0', 52, 1),
(40, 'Horison_Ultima_Malang1.jpg', 'Pool', '0', 52, 1),
(42, 'Horison_Ultima_Malang2.jpg', 'Lobby', '0', 52, 1),
(43, 'Horison_Ultima_Malang3.jpg', 'Room', '54', 52, 1),
(44, 'Horison_Ultima_Malang4.jpg', 'Room', '55', 52, 1),
(45, 'Ciputra_World_Surabaya.jpg', 'Hotel', '0', 53, 1),
(46, 'Ciputra_World_Surabaya1.jpg', 'Lobby', '0', 53, 1),
(47, 'Ciputra_World_Surabaya2.jpg', 'Pool', '0', 53, 1),
(48, 'Ciputra_World_Surabaya3.jpg', 'Room', '56', 53, 1),
(49, 'Ciputra_World_Surabaya4.jpg', 'Room', '57', 53, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id_kota` int(11) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id_kota`, `kota`, `status`) VALUES
(1, 'Surabaya', 1),
(2, 'Malang', 1);

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id_log` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `ket` varchar(255) NOT NULL,
  `waktu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
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
(285, 23, 53, 'Insert Photo For Room Double Superior', '2017-10-11 13:13:42');

-- --------------------------------------------------------

--
-- Table structure for table `nearby`
--

CREATE TABLE `nearby` (
  `id_nearby` int(11) NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `kota_id` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nearby`
--

INSERT INTO `nearby` (`id_nearby`, `tempat`, `kota_id`, `status`) VALUES
(1, 'Tunjungan Plaza', 1, 1),
(2, 'Stasiun Gubeng', 1, 1),
(3, 'Jatim Park', 2, 1),
(4, 'Plaza Araya', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `produk_id` int(11) NOT NULL,
  `tgl_pemesanan` date NOT NULL,
  `tgl_in` date NOT NULL,
  `tgl_out` date NOT NULL,
  `status` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `person`
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
-- Dumping data for table `person`
--

INSERT INTO `person` (`id_person`, `password`, `no_identitas`, `nama_lengkap`, `tgl_lahir`, `alamat`, `no_telp`, `email`, `status`) VALUES
(38, '28b662d883b6d76fd96e4ddc5e9ba780', '99', 'Lalala', '2017-10-02', 'Jl Jalan', '081233333333', 'norok.event@gmail.com', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `harga_produk` varchar(11) NOT NULL,
  `fitur_id` varchar(255) NOT NULL,
  `luas` int(11) NOT NULL,
  `stok` varchar(255) NOT NULL,
  `warna` varchar(255) NOT NULL,
  `bed_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`, `fitur_id`, `luas`, `stok`, `warna`, `bed_id`, `supplier_id`, `status`, `created`) VALUES
(50, 'Twin Superior', '350000', '9,10,11,13', 10, '3', '#3f51b5', 1, 51, 1, '2017-10-10'),
(51, 'Double Deluxe', '400000', '9,10,11,13', 10, '4', '#3fb58d', 3, 51, 1, '2017-10-10'),
(52, 'Twin Deluxe', '500000', '9,10,11,13', 10, '3', '#3f51b5', 1, 50, 1, '2017-10-10'),
(53, 'Double Superior', '450000', '9,11,13', 9, '4', '#9ab53f', 3, 50, 1, '2017-10-10'),
(54, 'Double Deluxe', '475000', '9,10,11,13', 12, '3', '#3f51b5', 3, 52, 1, '2017-10-11'),
(55, 'Double Superior', '435000', '9,10,11,13', 9, '2', '#7723c3', 3, 52, 1, '2017-10-11'),
(56, 'Twin Deluxe', '400000', '9,11,13', 10, '4', '#a9b53f', 1, 53, 1, '2017-10-11'),
(57, 'Double Superior', '450000', '9,10,11,13', 10, '2', '#3f51b5', 3, 53, 1, '2017-10-11');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
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
  `kota_id` int(11) NOT NULL,
  `nearby` varchar(255) NOT NULL,
  `tentang` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `slug`, `nama_supplier`, `alamat`, `no_telp`, `email`, `lat`, `longi`, `fitur_id`, `kota_id`, `nearby`, `tentang`, `status`) VALUES
(50, 'tunjungan-hotel-surabaya', 'Tunjungan Hotel Surabaya', 'Jl. Tunjungan No.102-104, Kedungdoro, Tegalsari, Kota SBY, Jawa Timur 60261, Indonesia', '081233333333', 'email@email.com', '-7.2618993', '112.74013549999995', '9,13', 1, '1,2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pretium tellus quis vulputate pharetra. Cras lacus leo, venenatis ac venenatis sit amet, vehicula vitae odio. Nulla vitae ante sagittis, iaculis felis quis, auctor libero. Vestibulum a aliquet orci. Aliquam aliquet, est finibus porttitor volutpat, arcu ipsum elementum odio, vel consectetur nisl metus eu metus. Morbi erat nibh, sodales id ante at, interdum pulvinar ante. Duis id urna non metus vulputate ultrices. Phasellus id tortor in arcu fermentum varius. Etiam eget lorem in libero sagittis auctor eget sed ex.', 1),
(51, 'hotel-santika-premier-surabaya', 'Hotel Santika Premier Surabaya', 'Jl. Raya Gubeng No.52, Gubeng, Kota SBY, Jawa Timur 60281, Indonesia', '081233333333', 'email@email.com', '-7.272253900000001', '112.74773430000005', '', 1, '2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pretium tellus quis vulputate pharetra. Cras lacus leo, venenatis ac venenatis sit amet, vehicula vitae odio. Nulla vitae ante sagittis, iaculis felis quis, auctor libero. Vestibulum a aliquet orci. Aliquam aliquet, est finibus porttitor volutpat, arcu ipsum elementum odio, vel consectetur nisl metus eu metus. Morbi erat nibh, sodales id ante at, interdum pulvinar ante. Duis id urna non metus vulputate ultrices. Phasellus id tortor in arcu fermentum varius. Etiam eget lorem in libero sagittis auctor eget sed ex.', 1),
(52, 'Horison-Ultima-Malang', 'Horison Ultima Malang', 'Plaza Araya, Jl. Blimbing Indah Megah No.2, Purwodadi, Blimbing, Kota Malang, Jawa Timur 65126, Indonesia', '081233333333', 'email@email.com', '-7.935677', '112.65138400000001', '', 2, '4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget sollicitudin magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris rhoncus neque massa, non porta sapien congue vitae. Mauris rhoncus urna quis mollis iaculis. Phasellus efficitur at enim quis feugiat. Quisque mattis elit at est dictum porta. Sed at nulla at odio ullamcorper sodales. Sed sed arcu tellus. Cras ut magna ac magna tempus consectetur ac non enim. Nullam at urna vitae elit maximus bibendum. Nunc pulvinar feugiat orci in mattis. Integer rhoncus vehicula dui nec commodo. ', 1),
(53, 'ciputra-world-surabaya', 'Ciputra World Surabaya', 'Ciputra World, Jl. Mayjen Sungkono No.89, Gn. Sari, Dukuh Pakis, Kota SBY, Jawa Timur 60224, Indonesia', '081233333333', 'email@email.com', '-7.293672800000001', '112.72026570000003', '', 1, '1,2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pretium tellus quis vulputate pharetra. Cras lacus leo, venenatis ac venenatis sit amet, vehicula vitae odio. Nulla vitae ante sagittis, iaculis felis quis, auctor libero. Vestibulum a aliquet orci. Aliquam aliquet, est finibus porttitor volutpat, arcu ipsum elementum odio, vel consectetur nisl metus eu metus. Morbi erat nibh, sodales id ante at, interdum pulvinar ante. Duis id urna non metus vulputate ultrices. Phasellus id tortor in arcu fermentum varius. Etiam eget lorem in libero sagittis auctor eget sed ex.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tutup`
--

CREATE TABLE `tutup` (
  `id_tutup` int(11) NOT NULL,
  `produk_id` int(11) NOT NULL,
  `dari` date NOT NULL,
  `sampai` date NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
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
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `akses_id`, `nama_lengkap`, `alamat`, `no_telp`, `email`, `status`) VALUES
(1, 'dd', '1aabac6d068eef6a7bad3fdf50a05cc8', '9', 'D D', 'Surabaya', '0812', 'email@email.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_supplier`
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
  `supplier_id` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_supplier`
--

INSERT INTO `user_supplier` (`id_us`, `username`, `password`, `akses_id`, `nama_lengkap`, `alamat`, `no_telp`, `email`, `supplier_id`, `status`) VALUES
(21, 'tunjungan', 'ec9f05f2515e6df85ddebe630ba7fd78', '1,3,5,7,9', 'Tunjungan Hotel', 'Jl Jalan', '081233333333', 'email@email.com', 50, 1),
(22, 'santika', 'dac93fcdb9817a41a54b7cdc01dc88cd', '1,3,5,7,9', 'Santika Hotel', 'Jl Jalan', '081233333333', 'email@email.com', 51, 1),
(23, 'ciputra', '4b3770767ac8d7613fe0c94d77582b7c', '1,3,5,7,9', 'Ciputra World', 'Jl Jalan', '081233333333', 'email@email.com', 53, 1),
(24, 'artotel', '33ad055ee37025c3289bf7549cf431e4', '1,3,5,7,9', 'Artotel Hotel', 'Jl Jalan', '081233333333', 'email@email.com', 0, 1),
(25, 'favehotel', '44aba635c33c26cecd76e88e6a42a181', '1,3,5,7,9', 'Favehotel Graha Agung', 'Jl Jalan', '081233333333', 'email@email.com', 0, 1),
(26, 'javaparagon', '12a5e59f392b5f54d9e973896586bf2b', '1,3,5,7,9', 'Java Paragon', 'Jl Jalan', '081233333333', 'email@email.com', 0, 1),
(27, 'jwmarriott', '55eac7967546e3ccbda6fc05a1e47d19', '1,3,5,7,9', 'Jw Marriott Surabaya', 'Jl Jalan', '081233333333', 'email@email.com', 0, 1),
(28, 'horison', '8ea7273c9bd44b1f9587e8ad3306d765', '1,3,5,7,9', 'Horison Ultima', 'Jl Jalan', '081233333333', 'email@email.com', 52, 1);

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
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id_person`);

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
  MODIFY `id_akses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `allotment`
--
ALTER TABLE `allotment`
  MODIFY `id_allotment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `bed`
--
ALTER TABLE `bed`
  MODIFY `id_bed` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `fitur`
--
ALTER TABLE `fitur`
  MODIFY `id_fitur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id_kota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=286;
--
-- AUTO_INCREMENT for table `nearby`
--
ALTER TABLE `nearby`
  MODIFY `id_nearby` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `id_person` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `tutup`
--
ALTER TABLE `tutup`
  MODIFY `id_tutup` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_supplier`
--
ALTER TABLE `user_supplier`
  MODIFY `id_us` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `allotment`
--
ALTER TABLE `allotment`
  ADD CONSTRAINT `allotment_ibfk_1` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `allotment_ibfk_3` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`id_supplier`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `gallery_ibfk_1` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`id_supplier`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`id_supplier`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `produk_ibfk_2` FOREIGN KEY (`bed_id`) REFERENCES `bed` (`id_bed`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tutup`
--
ALTER TABLE `tutup`
  ADD CONSTRAINT `tutup_ibfk_1` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`id_supplier`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tutup_ibfk_2` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
