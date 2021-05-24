-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2021 at 03:22 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2104_reqta-baloga360`
--

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id_profile` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(70) NOT NULL,
  `level` enum('admin','user') NOT NULL,
  `email` varchar(75) DEFAULT NULL,
  `nama_lengkap` varchar(75) DEFAULT NULL,
  `gender` enum('L','P') DEFAULT NULL,
  `waktu_pembutan` datetime DEFAULT current_timestamp(),
  `foto` varchar(50) DEFAULT NULL,
  `status` enum('aktif','nonaktif') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id_profile`, `username`, `password`, `level`, `email`, `nama_lengkap`, `gender`, `waktu_pembutan`, `foto`, `status`) VALUES
(1, 'admin', '123', 'admin', NULL, NULL, NULL, '2021-04-27 23:13:52', NULL, NULL),
(2, 'dwinuray', '$2y$10$vyX5/ULU6VHbAeLRqYSKnuJ.mG9RkxyNx9ceySQI8ApjBGdbsIExC', 'admin', 'dwinuchy@gmail.com', 'Dwi Nur Cahyo', NULL, '2021-04-27 23:20:14', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `scene_coords`
--

CREATE TABLE `scene_coords` (
  `id_scene_coords` int(11) NOT NULL,
  `id_scene_detail` int(11) NOT NULL,
  `pitch` float NOT NULL,
  `yaw` float NOT NULL,
  `type` enum('scene','info') NOT NULL,
  `description` text NOT NULL,
  `scene_anchor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scene_coords`
--

INSERT INTO `scene_coords` (`id_scene_coords`, `id_scene_detail`, `pitch`, `yaw`, `type`, `description`, `scene_anchor`) VALUES
(10, 8, -5.49987, 161.872, 'scene', '<h1><strong>Jangan Kesini</strong></h1>\r\n<p>Pokok jangan disini, mengerikan !</p>', 7),
(11, 8, -8.34787, -152.021, 'info', '<h3>Who is this guy ?&nbsp;</h3>\r\n<p>Aku dewe ae yo gak ngerti wong iki</p>', 0),
(12, 7, -1.78778, 13.8259, 'scene', '<h1>Semak-Semak&nbsp;</h1>\r\n<p>Ayo bersembunyi, tekongan, dolipan, engklek an, lan boyo-boyoan</p>', 8),
(14, 7, -2.2457, -9.3638, 'info', '<h1><em>Pintu Doraemun</em></h1>\r\n<p><em>Pintu untuk menuju .........</em></p>', 0),
(15, 9, 2.57164, -32.0188, 'scene', '<p>Pintu emergency !</p>', 7),
(16, 7, 1.46048, 169.542, 'scene', '<p>Menuju kegelapan</p>', 9),
(17, 7, -1.85443, -54.9941, 'scene', '<h1>Taman bermain</h1>\r\n<p>tempat kumpul bersama keluarga, cocok gawe piknik, gawe rembukan, mangan bareng, main uno</p>', 10),
(19, 10, 6.65694, 92.5195, 'scene', '<h1>Pintu keluar</h1>\r\n<p>heyooooo,</p>', 7);

-- --------------------------------------------------------

--
-- Table structure for table `scene_detail`
--

CREATE TABLE `scene_detail` (
  `id_scene_detail` int(11) NOT NULL,
  `id_scene_info` int(11) NOT NULL,
  `id_spot` int(11) NOT NULL,
  `scene_default` enum('iya','tidak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scene_detail`
--

INSERT INTO `scene_detail` (`id_scene_detail`, `id_scene_info`, `id_spot`, `scene_default`) VALUES
(7, 4, 4, 'iya'),
(8, 4, 5, 'tidak'),
(9, 4, 6, 'tidak'),
(10, 4, 9, 'tidak');

-- --------------------------------------------------------

--
-- Table structure for table `scene_info`
--

CREATE TABLE `scene_info` (
  `id_scene_info` int(11) NOT NULL,
  `author` varchar(150) NOT NULL,
  `scene_rotate` int(11) NOT NULL,
  `scene_fade_duration` int(11) NOT NULL,
  `scene_autoload` enum('true','false') NOT NULL,
  `scene_status` enum('aktif','nonaktif') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scene_info`
--

INSERT INTO `scene_info` (`id_scene_info`, `author`, `scene_rotate`, `scene_fade_duration`, `scene_autoload`, `scene_status`, `created_at`) VALUES
(4, 'Batu Love Garden', -1, 1000, 'true', 'aktif', '2021-05-24 11:55:51');

-- --------------------------------------------------------

--
-- Table structure for table `spot`
--

CREATE TABLE `spot` (
  `id_spot` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status_ditampilkan` enum('iya','tidak') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spot`
--

INSERT INTO `spot` (`id_spot`, `nama`, `deskripsi`, `foto`, `status_ditampilkan`, `created_at`) VALUES
(4, 'Zona Fresh Flower', 'Zona Fresh Flower adalah pembuka perjalanan anda di Baloga. Anda akan disambut dengan berbagai macam bunga dengan warna-warni yang cantik. Bunga yang disajikan adalah bunga hidup dengan macam-macam bentuk yang unik sehingga cocok untuk anda yang suka berfoto-foto. Jangan lupa abadikan momen anda disini ya! ', '60ab938a79e36.jpg', 'iya', '2021-05-17 07:08:04'),
(5, 'Zona Dried Flower', 'Bunga-bunga hidup dan segar yang sebelumnya anda lihat tentu terlihat cantik. Namun, setelah kering bukan berarti bunga-bunga itu tidak terlihat cantik lagi. Di zona dried flower anda akan disuguhkan dengan kreasi bunga-bunga kering yang dirangkai sedemikian rupa sehingga terlihat cantik dan estetik. Bunga-bunga kering yang ditampilkan jarang kita temukan di Indonesia.\r\n\r\n', '60ab941f9acad.jpg', 'iya', '2021-05-07 07:10:15'),
(6, 'Artificial Flower', 'Artificial flower atau bunga tiruan adalah bunga yang dibuat menyerupai bunga asli dan biasa digunakan untuk dekorasi. Di area artificial flower anda akan menemukan berbagai rangkaian kreasi bunga yang dipadukan dengan elemen-elemen lain seperti kayu, bambu, dan vas bunga yang cantik.', '60ab9fdd55b70.jpg', 'iya', '2021-05-07 07:10:15'),
(7, 'Cafe De’ Orchid / Terrace Cafe', 'Di zona ini, anda dapat mengenal berbagai jenis dan rupa anggrek serta dapat membawa pulang anggrek favorit anda! Anda bisa melihat berbagai macam bunga anggrek, seperti anggrek bulan, anggrek hartinah, dan lain sebagainya. Selain itu, anda juga bisa menikmati makanan dan minuman yang dijual disana.', '6094e754b0a46.jpg', 'tidak', '2021-05-07 07:10:15'),
(9, 'Taman Bermain', 'lorepisum dolarsit amlet', '60aba4aa50c72.jpeg', 'iya', '2021-05-24 13:05:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id_profile`);

--
-- Indexes for table `scene_coords`
--
ALTER TABLE `scene_coords`
  ADD PRIMARY KEY (`id_scene_coords`);

--
-- Indexes for table `scene_detail`
--
ALTER TABLE `scene_detail`
  ADD PRIMARY KEY (`id_scene_detail`),
  ADD KEY `id_scene_info` (`id_scene_info`),
  ADD KEY `id_spot` (`id_spot`);

--
-- Indexes for table `scene_info`
--
ALTER TABLE `scene_info`
  ADD PRIMARY KEY (`id_scene_info`);

--
-- Indexes for table `spot`
--
ALTER TABLE `spot`
  ADD PRIMARY KEY (`id_spot`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id_profile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `scene_coords`
--
ALTER TABLE `scene_coords`
  MODIFY `id_scene_coords` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `scene_detail`
--
ALTER TABLE `scene_detail`
  MODIFY `id_scene_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `scene_info`
--
ALTER TABLE `scene_info`
  MODIFY `id_scene_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `spot`
--
ALTER TABLE `spot`
  MODIFY `id_spot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
