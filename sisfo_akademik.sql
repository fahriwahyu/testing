-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2023 at 05:13 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisfo_akademik`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(150) NOT NULL,
  `level` varchar(10) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `created_at` date NOT NULL,
  `update_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `email`, `level`, `photo`, `created_at`, `update_at`) VALUES
(5, 'admin01', '21232f297a57a5a743894a0e4a801fc3', 'wahfahri122@gmail.com', 'admin', '', '2023-01-11', '0000-00-00'),
(6, 'admin02', '21232f297a57a5a743894a0e4a801fc3', 'wahfahri122@gmail.com', 'admin', '', '2023-01-11', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
  `nik` varchar(25) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `jk` enum('Laki-Laki','Perempuan') NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `hp` varchar(12) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `created_at` date NOT NULL,
  `update_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nik`, `nama_guru`, `jk`, `tempat_lahir`, `tgl_lahir`, `alamat`, `hp`, `photo`, `created_at`, `update_at`) VALUES
(1, '3312145286737920', 'Mauizah Rismawati', 'Laki-Laki', 'Wonogiri', '2001-07-03', 'Baturetno', '085155454237', 'OYI.jpg', '2023-01-05', '2023-01-10'),
(8, '3312162', 'test ', 'Laki-Laki', 'qwweekk', '2023-01-07', 'baturetno', '07788987655', '', '2023-01-05', '2023-01-06'),
(23, '011', 'Sri Muryani', 'Perempuan', 'Surakarta', '2023-01-02', 'Baturetno', '089562536273', 'IMG_20191125_201208-e1574687801250.jpg', '2023-01-12', '2023-01-12');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `id_ta` int(11) NOT NULL,
  `id_kelas` varchar(11) NOT NULL,
  `id_mapel` varchar(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `hari` varchar(20) NOT NULL,
  `jam` varchar(20) NOT NULL,
  `soft_delete` varchar(2) NOT NULL DEFAULT '1',
  `created_at` date NOT NULL,
  `update_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `id_ta`, `id_kelas`, `id_mapel`, `id_guru`, `hari`, `jam`, `soft_delete`, `created_at`, `update_at`) VALUES
(1, 1, 'kls001A', 'BI001A', 8, 'Senin', '08.50-10.50', '1', '2023-01-11', '0000-00-00'),
(2, 1, 'kls001A', 'IPA001A', 1, 'Senin', '11-00-12.10', '1', '2023-01-10', '0000-00-00'),
(3, 1, 'kls002A', 'IPA002A', 1, 'Senin', '08.50-10.50', '1', '2023-01-03', '0000-00-00'),
(6, 0, 'kls001B', 'IPA001B', 1, 'Selasa', '07.00-08.15', '1', '2023-01-11', '0000-00-00'),
(7, 0, 'kls001A', 'MTK001A', 23, 'Senin', '07.00-08.15', '0', '2023-01-12', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` varchar(11) NOT NULL,
  `kls` enum('1A','1B','2A','2B','3','4','5','6') NOT NULL,
  `tahun_ajaran` varchar(10) NOT NULL,
  `created_at` date NOT NULL,
  `update_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `kls`, `tahun_ajaran`, `created_at`, `update_at`) VALUES
('kls001A', '1A', '2022/2023', '2023-01-12', '0000-00-00'),
('kls001B', '1B', '2022/2023', '2023-01-08', '0000-00-00'),
('kls002A', '2A', '2022/2023', '2023-01-11', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` varchar(11) NOT NULL,
  `id_kelas` varchar(11) NOT NULL,
  `matapel` varchar(30) NOT NULL,
  `tahun_ajaran` varchar(10) NOT NULL,
  `semester` int(2) NOT NULL,
  `smt` varchar(10) NOT NULL,
  `created_at` date NOT NULL,
  `update_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `id_kelas`, `matapel`, `tahun_ajaran`, `semester`, `smt`, `created_at`, `update_at`) VALUES
('BI001A', 'kls001A', 'Bahasa Indonesia', '2022/2023', 2, 'Genap', '2023-01-08', '2023-01-12'),
('IPA001A', 'kls001A', 'Ilmu Pengetahuan Alam', '2022/2023', 1, 'Ganjil', '2023-01-08', '2023-01-11'),
('IPA001B', 'kls001B', 'Ilmu Pengetahuan Alam', '2022/2023', 1, 'Ganjil', '2023-01-11', '0000-00-00'),
('IPA002A', 'kls002A', 'Ilmu Pengetahuan Alam', '2022/2023', 1, 'Ganjil', '2023-01-11', '0000-00-00'),
('IPS001B', 'kls001B', 'Ilmu Pengetahuan Sosial', '2022/2023', 1, 'Ganjil', '2023-01-11', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `id_kelas` varchar(11) NOT NULL,
  `nik` varchar(25) NOT NULL,
  `nama_siswa` varchar(15) NOT NULL,
  `nama_kepanjangan` varchar(50) NOT NULL,
  `jk` enum('Laki-Laki','Perempuan') NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `email` varchar(30) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `hp_ortu` varchar(15) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `created_at` date NOT NULL,
  `update_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `id_kelas`, `nik`, `nama_siswa`, `nama_kepanjangan`, `jk`, `tempat_lahir`, `tgl_lahir`, `alamat`, `email`, `hp`, `nama_ayah`, `nama_ibu`, `hp_ortu`, `photo`, `password`, `created_at`, `update_at`) VALUES
(1, '', '3312145286737623', 'Ipul', 'Syaiful Ikhsani', 'Laki-Laki', 'Wonogiri', '2012-12-03', 'Eromoko,Wonogiri', 'syaifulguanteng@gmail.com', '089678234563', '', '', '', 'syaiful.jpg', 'siswa', '2022-12-21', '0000-00-00'),
(3, '', '33121672891827634', 'agung', 'Agung Nugroho', 'Laki-Laki', 'Tirtomoyo', '2012-03-03', 'Tirtomoyo', 'Agyngnug123@gmail.com', '087698152735', '', '', '', '', '', '2023-01-03', '0000-00-00'),
(23, 'kls002A', '02', 'Fauzi', 'Fauzi Ramadhan', 'Laki-Laki', 'Surakarta', '2023-01-02', 'Wonokarto', 'fauziguanteng@gmail.com', '089562536273', 'Tamam', 'dini', '081836937263', 'DSC_0160_copy.jpg', '16246ccb5e463b2842942c34c88041f9', '2023-01-12', '0000-00-00'),
(26, '--Pilih Kel', '11', 'test', '', '', '', '0000-00-00', '', 'admin', '', '', '', '', 'DSC_0150_copy.jpg', '674f3c2c1a8a6f90461e8a66fb5550ba', '2023-01-12', '0000-00-00'),
(27, 'kls002A', '03', 'Hanif', 'Hanif Nur Amin', 'Laki-Laki', 'Semarang', '2023-02-11', 'Ngaliyan', 'hanifkweren@gmail.com', '081675345273', 'Agus', 'Surati', '', 'DSC_0158_copy.jpg', 'bcd724d15cde8c47650fda962968f102', '2023-01-12', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `ta`
--

CREATE TABLE `ta` (
  `id_ta` int(11) NOT NULL,
  `ta` varchar(20) NOT NULL,
  `smt` varchar(10) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 0,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ta`
--

INSERT INTO `ta` (`id_ta`, `ta`, `smt`, `status`, `created_at`) VALUES
(2, '2022/2023', 'Genap', 0, '2023-01-11'),
(4, '2023/2024', 'Genap', 0, '2023-01-11');

-- --------------------------------------------------------

--
-- Table structure for table `user_level`
--

CREATE TABLE `user_level` (
  `id` int(11) NOT NULL,
  `level` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_level`
--

INSERT INTO `user_level` (`id`, `level`) VALUES
(1, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `ta`
--
ALTER TABLE `ta`
  ADD PRIMARY KEY (`id_ta`);

--
-- Indexes for table `user_level`
--
ALTER TABLE `user_level`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `ta`
--
ALTER TABLE `ta`
  MODIFY `id_ta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_level`
--
ALTER TABLE `user_level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
