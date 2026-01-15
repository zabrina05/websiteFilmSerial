-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 14, 2026 at 10:41 PM
-- Server version: 10.6.24-MariaDB-log
-- PHP Version: 8.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ensawirm_film`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `link_ref` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `isi`, `gambar`, `link_ref`) VALUES
(1, 'Action', 'Genre yang berfokus pada adegan fisik seperti perkelahian, kejar-kejaran, dan ledakan.', 'Venom The Last Dance.jpg', '#detail1'),
(2, 'Horor', 'Genre yang dirancang untuk menakut-nakuti melalui tema gelap dan supranatural.', 'Sumala.jpg', '#detail2'),
(3, 'Thriller', 'Genre yang membangun ketegangan, kecemasan, dan kejutan.', 'Wednesday.jpg', '#detail3'),
(4, 'Romance', 'Genre yang melibatkan kisah cinta romantis dan konflik percintaan.', 'Komang.jpg', '#detail4');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `tanggal` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `judul`, `gambar`, `deskripsi`, `tanggal`) VALUES
(2, 'Venom : The Last Dance.', 'Venom The Last Dance.jpg', 'Eddie Brock dan Venom dalam pelarian.', '2026-01-14 16:25:10'),
(3, 'Demon Slayer.', 'Demon Slayer.jpg', 'Musim Hashira Training Arc.', '2026-01-14 16:26:19'),
(4, 'Jujutsu Kaisen.', 'Jujutsu Kaisen.jpg', 'Yuta Okkotsu bergabung Sekolah Jujutsu.', '2026-01-14 16:27:03'),
(5, 'Petaka Gunung Gede.', 'Petaka Gunung Gede.jpg', 'Kisah nyata pendakian berujung teror.', '2026-01-14 16:28:19'),
(6, 'Sumala.', 'Sumala.jpg', 'Legenda urban Semarang.', '2026-01-14 16:29:12'),
(7, 'Pengabdi Setan.', 'Pengabdi Setan.jpg', 'Keluarga dihantui sosok ibu.', '2026-01-14 16:30:10'),
(8, 'Dendam Malam Kelam', 'Dendam Malam Kelam.jpg', 'Thriller psikologis dosen.', '2026-01-14 16:31:00'),
(9, 'Until Dawn.', 'Until Dawn.jpg', 'Bertahan hidup dari pembunuh.', '2026-01-14 16:31:40'),
(10, 'Wednesday.', 'Wednesday.jpg', 'Misteri di Nevermore Academy.', '2026-01-14 16:32:12'),
(11, 'Komang.', 'Komang.jpg', 'Kisah cinta Raim Laode.', '2026-01-14 16:32:54'),
(12, 'Lovely Runner.', 'Lovely Runner.jpg', 'Kembali ke masa lalu.', '2026-01-14 16:33:23'),
(13, ' Descendants of the Sun.', 'Descendants of the Sun.jpg', 'Kisah cinta Kapten dan Dokter.', '2026-01-14 16:34:06');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `foto`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', ''),
(3, 'april', '37d153a06c79e99e4de5889dbe2e7c57', 'img/zabzibzub.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
