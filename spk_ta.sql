-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2019 at 08:59 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `spk_ta`
--

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi`
--

DROP TABLE IF EXISTS `konsultasi`;
CREATE TABLE IF NOT EXISTS `konsultasi` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `prodi_id` int(11) NOT NULL,
  `topik_id` int(11) NOT NULL,
  `skor` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konsultasi`
--

INSERT INTO `konsultasi` (`id`, `tanggal`, `user_id`, `prodi_id`, `topik_id`, `skor`) VALUES
(1, '2019-06-02', 1, 1, 10, 7),
(2, '2019-06-02', 1, 1, 1, 7),
(3, '2019-06-02', 1, 1, 1, 3),
(4, '2019-06-03', 0, 1, 1, 10),
(5, '2019-06-03', 12, 1, 10, 9);

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi_detail`
--

DROP TABLE IF EXISTS `konsultasi_detail`;
CREATE TABLE IF NOT EXISTS `konsultasi_detail` (
  `id` int(11) NOT NULL,
  `konsultasi_id` int(11) NOT NULL,
  `matakuliah_id` int(11) NOT NULL,
  `nilai` char(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konsultasi_detail`
--

INSERT INTO `konsultasi_detail` (`id`, `konsultasi_id`, `matakuliah_id`, `nilai`) VALUES
(1, 1, 7, 'A'),
(2, 1, 8, 'A'),
(3, 1, 17, 'A'),
(4, 1, 18, 'B'),
(5, 1, 19, 'B'),
(6, 1, 20, 'C'),
(7, 1, 21, 'B'),
(8, 1, 22, 'C'),
(9, 1, 23, 'B'),
(10, 1, 24, 'B'),
(11, 2, 7, 'B'),
(12, 2, 8, 'B'),
(13, 2, 17, 'B'),
(14, 2, 18, 'A'),
(15, 2, 19, 'A'),
(16, 2, 20, 'C'),
(17, 2, 21, 'C'),
(18, 2, 22, 'B'),
(19, 2, 23, 'B'),
(20, 2, 24, 'A'),
(21, 3, 7, 'B'),
(22, 3, 8, 'B'),
(23, 3, 17, 'C'),
(24, 3, 18, 'B'),
(25, 3, 19, 'B'),
(26, 3, 20, 'B'),
(27, 3, 21, 'A'),
(28, 3, 22, 'A'),
(29, 3, 23, 'A'),
(30, 3, 24, 'C'),
(31, 4, 7, 'A'),
(32, 4, 8, 'A'),
(33, 4, 17, 'B'),
(34, 4, 18, 'A'),
(35, 4, 19, 'A'),
(36, 4, 20, 'B'),
(37, 4, 21, 'A'),
(38, 4, 22, 'A'),
(39, 4, 23, 'A'),
(40, 4, 24, 'A'),
(41, 5, 7, 'A'),
(42, 5, 8, 'C'),
(43, 5, 17, 'A'),
(44, 5, 18, 'A'),
(45, 5, 19, 'C'),
(46, 5, 20, 'A'),
(47, 5, 21, 'A'),
(48, 5, 22, 'B'),
(49, 5, 23, 'A'),
(50, 5, 24, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

DROP TABLE IF EXISTS `mahasiswa`;
CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(64) NOT NULL,
  `level` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `hp` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `jk` varchar(2) NOT NULL,
  `umur` int(11) NOT NULL,
  `prodi_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `email`, `password`, `level`, `nama`, `hp`, `alamat`, `jk`, `umur`, `prodi_id`) VALUES
(1, 'admin', NULL, '0cc175b9c0f1b6a831c399e269772661', 1, 'Aministrator', '08132945559', 'Jl. kenair no. 343', 'L', 0, 0),
(7, '6427427492749', 'budiman@gmail.com', '', 0, 'Firmansyah', '0813280800', 'jl. kenari no. 34', 'L', 20, 2),
(8, '0009495985865', 'hendrix@gmail.com', '', 0, 'Bejo sandix', '0813243595', 'Jl. keramat jadixxx', 'P', 40, 1),
(9, '567892494824', 'email@gmail.com', '', 0, 'Heru hendriyadi', '45838538r3985', 'Jl. undru no. 4', 'P', 40, 2),
(10, '456789032482', 'aa@gmail.com', '0cc175b9c0f1b6a831c399e269772661', 0, 'Heru hendriyadi', '083848583', 'Jl. kenari no. 345', 'L', 3, 2),
(11, '009998889', 'budi@gmail.com', '', 0, 'Eko kurniawan', '03895935893', 'Jl. kenari no. 335', 'L', 25, 1),
(12, '01051906', 'admin@gmail.com', '0cc175b9c0f1b6a831c399e269772661', 0, 'Firmansyah', '0939853853858', 'JL. Sudirman no. 34 ', 'L', 21, 2);

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

DROP TABLE IF EXISTS `matakuliah`;
CREATE TABLE IF NOT EXISTS `matakuliah` (
  `id` int(10) unsigned NOT NULL,
  `matakuliah` varchar(255) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `kode` varchar(10) DEFAULT NULL,
  `sks` int(255) DEFAULT NULL,
  `prodi_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`id`, `matakuliah`, `semester`, `kode`, `sks`, `prodi_id`) VALUES
(1, 'Sistem Operasi', 2, '30123', 3, 2),
(2, 'Sistem Informasi', 3, '30852', 3, 2),
(7, 'Pemrograman Visual II', 3, '30721', 3, 1),
(8, 'Sistem Basis Data II', 4, '30621', 2, 1),
(9, 'Basis Data', 4, '30652', 3, 2),
(10, 'Teknik Simulasi', 5, '32252', 2, 2),
(11, 'Analisa & Perancangan Sistem', 6, '31943', 3, 2),
(12, 'Kecerdasan Buatan', 6, '32572', 2, 2),
(13, 'Jaringan Komputer', 6, '30943', 3, 2),
(14, 'Sistem Pakar', 7, '32972', 2, 2),
(15, 'Keamanan Komputer', 7, '32672', 2, 2),
(16, 'Sistem Proses Tersebar', 7, '32872', 2, 2),
(17, 'Sistem Informasi Manajemen II', 4, '20721', 3, 1),
(18, 'Sistem Penunjang Keputusan', 5, '21301', 3, 1),
(19, 'Aplikasi Internet II', 5, '30321', 2, 1),
(20, 'Teknik Simulasi', 5, '20901', 2, 1),
(21, 'Jaringan Komputer', 6, '30801', 3, 1),
(22, 'Rekayasa Perangkat Lunak', 6, '31201', 3, 1),
(23, 'Sistem Pakar', 7, '31401', 2, 1),
(24, 'Analisis & Perancangan Sistem Informasi', 7, '21401', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

DROP TABLE IF EXISTS `pengguna`;
CREATE TABLE IF NOT EXISTS `pengguna` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(64) NOT NULL,
  `level` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `hp` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `jk` varchar(2) NOT NULL,
  `umur` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `username`, `password`, `level`, `nama`, `hp`, `alamat`, `jk`, `umur`) VALUES
(1, 'admin', '0cc175b9c0f1b6a831c399e269772661', 1, 'Aministrator', '08132945559', 'Jl. kenair no. 343', 'L', 0),
(7, 'budi', '0cc175b9c0f1b6a831c399e269772661', 0, 'Firmansyah', '0813280800', 'jl. kenari no. 34', 'L', 20),
(8, 'bejo', '7fc56270e7a70fa81a5935b72eacbe29', 0, 'Bejo sandix', '0813243595', 'Jl. keramat jadixxx', 'P', 40),
(9, 'heri', '0cc175b9c0f1b6a831c399e269772661', 0, 'Heru hendriyadi', '45838538r3985', 'Jl. undru no. 4', 'P', 40),
(10, 'heru', '0cc175b9c0f1b6a831c399e269772661', 0, 'Heru hendriyadi', '083848583', 'Jl. kenari no. 345', 'L', 3),
(11, 'eko', '0cc175b9c0f1b6a831c399e269772661', 0, 'Eko kurniawan', '03895935893', 'Jl. kenari no. 335', 'L', 25);

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

DROP TABLE IF EXISTS `prodi`;
CREATE TABLE IF NOT EXISTS `prodi` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `prodi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id`, `kode`, `prodi`) VALUES
(1, 'SI ', 'Sistem Informasi '),
(2, 'TI', 'Teknik Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `referensi`
--

DROP TABLE IF EXISTS `referensi`;
CREATE TABLE IF NOT EXISTS `referensi` (
  `id` int(11) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `topik_id` int(11) DEFAULT NULL,
  `prodi_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `referensi`
--

INSERT INTO `referensi` (`id`, `nim`, `nama`, `topik_id`, `prodi_id`) VALUES
(8, '00099900', 'Firmansyah', 1, 1),
(9, '8389585858', 'Herman', 6, 2),
(10, '11223344', 'BUdiman Harjono', 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `referensi_detail`
--

DROP TABLE IF EXISTS `referensi_detail`;
CREATE TABLE IF NOT EXISTS `referensi_detail` (
  `id` int(11) NOT NULL,
  `matakuliah_id` int(11) DEFAULT NULL,
  `nilai` char(1) DEFAULT NULL,
  `referensi_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=112 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `referensi_detail`
--

INSERT INTO `referensi_detail` (`id`, `matakuliah_id`, `nilai`, `referensi_id`) VALUES
(82, 7, 'B', 8),
(83, 8, 'B', 8),
(84, 17, 'C', 8),
(85, 18, 'B', 8),
(86, 19, 'B', 8),
(87, 20, 'B', 8),
(88, 21, 'C', 8),
(89, 22, 'A', 8),
(90, 23, 'B', 8),
(91, 24, 'C', 8),
(92, 1, 'A', 9),
(93, 2, 'B', 9),
(94, 9, 'B', 9),
(95, 10, 'C', 9),
(96, 11, 'B', 9),
(97, 12, 'C', 9),
(98, 13, 'B', 9),
(99, 14, 'C', 9),
(100, 15, 'B', 9),
(101, 16, 'B', 9),
(102, 7, 'B', 10),
(103, 8, 'B', 10),
(104, 17, 'B', 10),
(105, 18, 'B', 10),
(106, 19, 'C', 10),
(107, 20, 'C', 10),
(108, 21, 'A', 10),
(109, 22, 'B', 10),
(110, 23, 'B', 10),
(111, 24, 'C', 10);

-- --------------------------------------------------------

--
-- Table structure for table `topik`
--

DROP TABLE IF EXISTS `topik`;
CREATE TABLE IF NOT EXISTS `topik` (
  `id` int(11) NOT NULL,
  `topik` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `kode` char(4) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topik`
--

INSERT INTO `topik` (`id`, `topik`, `keterangan`, `kode`) VALUES
(1, 'Sistem Penunjang Keputusan', 'Saw, WP, Topsis, AHP, Promethe, Profile Matching, Naïve Bayes\n', '01'),
(4, 'Aplikasi pembelajaran', 'Kamus bahasa asing, edukasi, dll\n', '04'),
(5, 'Games', 'Tic-tac to, catur, puzzle, dll', '05'),
(6, 'Sistem Informasi', 'Manajemen, geografis, dll', '06'),
(7, 'Sistem pakar', 'Certainty Factor, Dempster-Shafer, Fuzzy', '07'),
(8, 'Jaringan Komputer', 'Cloud Computing, Mikrotik, dll', '08'),
(9, 'Aplikasi Berbasis Android', '', '09'),
(10, 'Sim Berbasis Desktop', '', '10'),
(11, 'Sim Berbasis Web', '', '11'),
(12, 'Rekayasa Perangkat Lunak', '', '12'),
(13, 'Keamanan Komputer', 'Kriptography', '13'),
(14, 'Database Terdistribusi', '', '14'),
(15, 'Multimedia', '', '15'),
(16, 'Web Service', '', '16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konsultasi_detail`
--
ALTER TABLE `konsultasi_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `referensi`
--
ALTER TABLE `referensi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `referensi_detail`
--
ALTER TABLE `referensi_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fktoref` (`referensi_id`);

--
-- Indexes for table `topik`
--
ALTER TABLE `topik`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `konsultasi_detail`
--
ALTER TABLE `konsultasi_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `matakuliah`
--
ALTER TABLE `matakuliah`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `referensi`
--
ALTER TABLE `referensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `referensi_detail`
--
ALTER TABLE `referensi_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=112;
--
-- AUTO_INCREMENT for table `topik`
--
ALTER TABLE `topik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `referensi_detail`
--
ALTER TABLE `referensi_detail`
  ADD CONSTRAINT `fktoref` FOREIGN KEY (`referensi_id`) REFERENCES `referensi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
