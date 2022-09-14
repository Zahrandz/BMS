-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2022 at 08:04 PM
-- Server version: 10.4.20-MariaDB-log
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bms`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id_about` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id_about`, `judul`, `deskripsi`, `foto`) VALUES
(5, 'Voluptatem dignissimos provident quasi corporis vo', '<p class=\"fst-italic\">\r\n              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore\r\n              magna aliqua.\r\n            </p>\r\n            <ul>\r\n              <li>\r\n                <i class=\"bx bx-store-alt\"></i>\r\n                <div>\r\n                  <h5>Ullamco laboris nisi ut aliquip consequat</h5>\r\n                  <p>Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade</p>\r\n                </div>\r\n              </li>\r\n              <li>\r\n                <i class=\"bx bx-images\"></i>\r\n                <div>\r\n                  <h5>Magnam soluta odio exercitationem reprehenderi</h5>\r\n                  <p>Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna pasata redi</p>\r\n                </div>\r\n              </li>\r\n            </ul>\r\n            <p>\r\n              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate\r\n              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in\r\n              culpa qui officia deserunt mollit anim id est laborum\r\n            </p>', '5.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id_contact`, `alamat`, `email`, `phone`) VALUES
(1, 'A108 Adam Street, New York, NY 535022', 'contact@example.com', '+1 5589 55488 55');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `jabatan`) VALUES
(6, 'Karyawan'),
(7, 'Direktur Utama'),
(9, 'Admin'),
(10, 'ERP & Big Data'),
(11, 'Finance'),
(12, 'HRD'),
(13, 'Manager Operation');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama`, `alamat`, `id_jabatan`, `foto`) VALUES
(24, 'Muhammad Zahran Dziqriansyah', 'Jl. Al Barkah RT 03 RW 09 No. 58 Jatijajar Tapos Depok', 9, '24.png'),
(28, 'Walter White', 'Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.', 7, '28.png'),
(29, 'Sarah Jhonson', 'Magni Dolores Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia', 13, '29.png'),
(30, 'William Anderson', 'Nemo Enim At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis', 10, '30.png');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id_kota` int(11) NOT NULL,
  `kota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id_kota`, `kota`) VALUES
(2, 'Jakarta Pusat'),
(3, 'Jakarta Utara'),
(4, 'Jakarta Barat'),
(5, 'Jakarta Selatan'),
(6, 'Jakarta Timur');

-- --------------------------------------------------------

--
-- Table structure for table `pasar`
--

CREATE TABLE `pasar` (
  `id_pasar` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `id_wilayah` int(11) NOT NULL,
  `lokasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasar`
--

INSERT INTO `pasar` (`id_pasar`, `nama`, `alamat`, `id_wilayah`, `lokasi`) VALUES
(4, 'Pasar Jaya', 'a', 1, 'coba');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` text NOT NULL,
  `tanggal` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `nama`, `email`, `pesan`, `tanggal`) VALUES
(1, 'coba', 'a', 'm', '2022-08-09 14:38:00'),
(2, 'Naufal Ulinnuha', 'naufalulinnuha40@gmail.com', 'Hello World', '2022-09-09 19:48:23');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id_portfolio` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `id_wilayah` int(11) DEFAULT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id_portfolio`, `nama`, `deskripsi`, `lokasi`, `id_wilayah`, `foto`) VALUES
(1, 'Portfolio 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam gravida nisi nisi, viverra congue justo suscipit dapibus. ', 'https://maps.google.com/?q=Jl.+KP.Dalam+IV+No.16%2', 1, '1.png'),
(3, 'Portfolio 2', 'Donec pellentesque nulla non arcu interdum semper. In ac eros condimentum, aliquet arcu ac, malesuada magna.', '', 2, '3.png'),
(4, 'Portfolio 3', 'In sed arcu eget sapien accumsan gravida. Nam commodo ligula ut felis gravida, vel fringilla lacus semper. Quisque interdum a dui faucibus varius.', '', 3, '4.png'),
(5, 'Portfolio 4', 'Morbi mauris velit, pharetra eget ligula at, faucibus faucibus tortor. Aliquam erat volutpat. Maecenas mauris est, scelerisque non justo quis, viverra euismod lacus.', '', 4, '5.png'),
(6, 'Portfolio 5', 'Nullam augue nulla, lacinia in tellus a, rhoncus pellentesque elit. Quisque et mauris odio. In diam neque, laoreet eu metus vitae, tempor elementum sem. ', '', 1, '6.png'),
(7, 'Portfolio 6', 'Nulla posuere urna ac lectus iaculis rutrum. Mauris non placerat nibh. Maecenas eget odio ac enim euismod fringilla nec eu mi.', '', 2, '7.png'),
(8, 'coba', 'coba', 'https://maps.google.com/?q=Jl.+KP.Dalam+IV+No.16%2', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id_testimoni` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id_testimoni`, `nama`, `deskripsi`, `id_jabatan`, `foto`) VALUES
(1, 'Muhammad Zahran', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam gravida nisi nisi, viverra congue justo suscipit dapibus.', 9, ''),
(3, 'Sara Wilson', 'Donec pellentesque nulla non arcu interdum semper. In ac eros condimentum, aliquet arcu ac, malesuada magna.', 10, '3.png'),
(4, 'Jena Karlis', 'In sed arcu eget sapien accumsan gravida. Nam commodo ligula ut felis gravida, vel fringilla lacus semper. Quisque interdum a dui faucibus varius.', 13, '4.png'),
(5, 'Matt Brandon', 'Morbi mauris velit, pharetra eget ligula at, faucibus faucibus tortor. Aliquam erat volutpat. Maecenas mauris est, scelerisque non justo quis, viverra euismod lacus.', 6, '5.png'),
(6, 'Muhammad Zahran', 'coba', 7, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(6) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `level`, `foto`) VALUES
(1, 'Naufal Ulinnuha', 'naufal', '21232f297a57a5a743894a0e4a801fc3', 'superadmin', ''),
(3, 'Muhammad Zahran', 'Muhammad Zahran', 'e00cf25ad42683b3df678c61f42c6bda', 'superadmin', '3.png');

-- --------------------------------------------------------

--
-- Table structure for table `wilayah`
--

CREATE TABLE `wilayah` (
  `id_wilayah` int(11) NOT NULL,
  `wilayah` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wilayah`
--

INSERT INTO `wilayah` (`id_wilayah`, `wilayah`) VALUES
(1, 'Jakarta Pusat'),
(2, 'Jakarta Barat'),
(3, 'Jakarta Timur'),
(4, 'Jakarta Selatan'),
(5, 'Jakarta Utara');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`),
  ADD KEY `id_varian` (`id_jabatan`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id_kota`);

--
-- Indexes for table `pasar`
--
ALTER TABLE `pasar`
  ADD PRIMARY KEY (`id_pasar`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id_portfolio`),
  ADD KEY `id_wilayah` (`id_wilayah`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id_testimoni`),
  ADD KEY `id_jabatan` (`id_jabatan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `wilayah`
--
ALTER TABLE `wilayah`
  ADD PRIMARY KEY (`id_wilayah`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id_about` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id_kota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pasar`
--
ALTER TABLE `pasar`
  MODIFY `id_pasar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id_portfolio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id_testimoni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `wilayah`
--
ALTER TABLE `wilayah`
  MODIFY `id_wilayah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD CONSTRAINT `karyawan_ibfk_1` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_jabatan`) ON UPDATE CASCADE;

--
-- Constraints for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD CONSTRAINT `portfolio_ibfk_1` FOREIGN KEY (`id_wilayah`) REFERENCES `wilayah` (`id_wilayah`);

--
-- Constraints for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD CONSTRAINT `testimoni_ibfk_1` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_jabatan`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
