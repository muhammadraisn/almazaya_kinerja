-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2020 at 08:53 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ekinerja`
--

-- --------------------------------------------------------

--
-- Table structure for table `kinerja`
--

CREATE TABLE `kinerja` (
  `id` int(11) NOT NULL,
  `id_user` int(4) NOT NULL,
  `tanggal` date NOT NULL,
  `kegiatan` varchar(100) NOT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `dokumen` varchar(100) DEFAULT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'Mulai',
  `waktu` time NOT NULL,
  `update_status` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kinerja`
--

INSERT INTO `kinerja` (`id`, `id_user`, `tanggal`, `kegiatan`, `gambar`, `dokumen`, `status`, `waktu`, `update_status`) VALUES
(1, 3, '2019-06-10', 'Lorem ipsum dolor sit amet, consectetuer adipiscing', NULL, NULL, 'Mulai', '00:34:17', '2020-11-10 07:14:12'),
(2, 3, '2019-06-02', 'Lorem ipsum dolor sit', NULL, NULL, 'Mulai', '00:00:00', '2020-11-10 07:14:12'),
(3, 3, '2019-06-18', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed', NULL, NULL, 'Proses', '00:00:00', '2020-11-10 07:14:12'),
(4, 3, '2019-07-03', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur', NULL, NULL, 'Mulai', '00:00:00', '2020-11-10 07:14:12'),
(5, 3, '2019-06-15', 'Lorem ipsum dolor', NULL, NULL, 'Selesai', '00:00:00', '2020-11-10 07:14:12'),
(6, 3, '2019-06-02', 'Lorem ipsum', NULL, NULL, 'Selesai', '00:00:00', '2020-11-10 07:14:12'),
(7, 3, '2019-06-29', 'Lorem ipsum dolor sit amet, consectetuer adipiscing', NULL, NULL, 'Selesai', '00:00:00', '2020-11-10 07:14:12'),
(8, 3, '2019-05-28', 'Lorem ipsum dolor sit amet, consectetuer adipiscing', NULL, NULL, 'Mulai', '00:39:51', '2020-11-10 07:14:12'),
(9, 3, '2019-05-31', 'Lorem ipsum', NULL, NULL, 'Mulai', '00:32:27', '2020-11-10 07:14:12'),
(10, 3, '2019-06-25', 'Lorem ipsum dolor sit amet, consectetuer', NULL, NULL, 'Mulai', '00:31:52', '2020-11-10 07:14:12'),
(11, 4, '2019-05-21', 'Lorem ipsum', NULL, NULL, 'Mulai', '00:00:00', '2020-11-10 07:14:12'),
(12, 4, '2019-06-29', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adip', NULL, NULL, 'Mulai', '00:11:35', '2020-11-10 07:14:12'),
(13, 4, '2019-06-04', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', NULL, NULL, 'Mulai', '00:00:00', '2020-11-10 07:14:12'),
(14, 4, '2019-07-01', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam', NULL, NULL, 'Mulai', '00:00:00', '2020-11-10 07:14:12'),
(15, 4, '2019-05-31', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adip', NULL, NULL, 'Selesai', '00:12:59', '2020-11-10 07:14:12'),
(16, 4, '2019-06-25', 'Lorem ipsum dolor sit', NULL, NULL, 'Proses', '00:00:00', '2020-11-10 07:14:12'),
(17, 4, '2019-06-02', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed', NULL, NULL, 'Proses', '00:35:01', '2020-11-10 07:14:12'),
(18, 4, '2019-06-06', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adip', NULL, NULL, 'Proses', '00:00:00', '2020-11-10 07:14:12'),
(19, 4, '2019-07-01', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adip', NULL, NULL, 'Mulai', '00:21:32', '2020-11-10 07:14:12'),
(20, 4, '2019-05-28', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed', NULL, NULL, 'Mulai', '00:00:00', '2020-11-10 07:14:12'),
(21, 4, '2020-11-10', 'hgghjkj', NULL, NULL, 'Mulai', '00:00:13', '2020-11-10 07:14:12'),
(22, 4, '2020-11-10', 'srr', '7d0cf35d3f93fc54772a9b62369b05fd.jpeg', NULL, 'Mulai', '00:00:13', '2020-11-10 07:14:12'),
(24, 4, '2020-11-10', 'qwerty', NULL, 'd614c318c58c1e0eb714814a51a1eca4.pdf', 'Mulai', '00:00:13', '2020-11-10 07:14:12'),
(25, 4, '2020-11-10', 'hgvh', '4d24ee5ccd17e36a4a2a379d9bd80adf.jpg', NULL, 'Mulai', '00:00:14', '2020-11-10 07:14:12'),
(29, 4, '2020-11-10', 'asasasasas', '4da422dc837008e552db570260cdb871.jpeg', 'a6b8756f6e014b5ebf781d9c803def28.pdf', 'Mulai', '14:33:57', '2020-11-10 07:14:12'),
(30, 4, '2020-11-10', 'sd', '4f0206af302fff95bbffab80d0a05378.jpg', NULL, 'Mulai', '14:36:44', '2020-11-10 07:14:12'),
(31, 4, '2020-11-10', 'sdsdsdd', NULL, '91ca1cc3ef19d0a2fa25dc2744451640.pdf', 'Mulai', '14:37:26', '2020-11-10 07:14:12'),
(32, 4, '2020-11-10', 'sadasdsadasddsad', NULL, NULL, 'Mulai', '14:38:11', '2020-11-10 07:14:12');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `id` int(11) NOT NULL,
  `nama_unit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`id`, `nama_unit`) VALUES
(1, 'Administrator'),
(2, 'SMP'),
(3, 'Kepala Sekolah SMA'),
(4, 'SMA'),
(5, 'Kepala Sekolah SMK'),
(6, 'SMK'),
(7, 'Kepala Sekolah SMP');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(4) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `id_unit` int(11) NOT NULL,
  `level` varchar(20) NOT NULL,
  `foto` varchar(100) DEFAULT 'user5.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama`, `id_unit`, `level`, `foto`) VALUES
(1, 'admin', '4297f44b13955235245b2497399d7a93', 'Administrator', 1, 'admin', 'user5.png'),
(3, 'kepalasma', '4297f44b13955235245b2497399d7a93', 'Nama Kepala Sekolah SMA', 3, 'kepala', 'user5.png'),
(4, 'sma', '4297f44b13955235245b2497399d7a93', 'Nama Karyawan Unit SMA', 4, 'staff', 'user5.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kinerja`
--
ALTER TABLE `kinerja`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`id_user`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `unit` (`id_unit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kinerja`
--
ALTER TABLE `kinerja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `kinerja`
--
ALTER TABLE `kinerja`
  ADD CONSTRAINT `fk_kinerja_users` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_unit` FOREIGN KEY (`id_unit`) REFERENCES `unit` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
