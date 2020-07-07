-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2020 at 10:39 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `riky_asfajri`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(125) NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `foto`) VALUES
('admin', 'c4ca4238a0b923820dcc509a6f75849b', 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `arsip`
--

CREATE TABLE `arsip` (
  `id_arsip` int(11) NOT NULL,
  `no_akta` varchar(100) NOT NULL,
  `berkas` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `arsip`
--

INSERT INTO `arsip` (`id_arsip`, `no_akta`, `berkas`) VALUES
(1, '12312', '82069127loginkariawan.png'),
(2, '11111nn', '165512743D-Action-Games-HD-Wallpaper.jpg'),
(3, '2222111', '50862765classDiagram.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `file_permohonan`
--

CREATE TABLE `file_permohonan` (
  `id_file` int(11) NOT NULL,
  `id_permohonan` int(125) NOT NULL,
  `nama_file` int(125) NOT NULL,
  `file` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file_permohonan`
--

INSERT INTO `file_permohonan` (`id_file`, `id_permohonan`, `nama_file`, `file`) VALUES
(37, 39640273, 25, '396402733D-Action-Games-HD-Wallpaper.jpg'),
(38, 39640273, 26, '396402733d-games-wallpapers-3d-picture-3d-wallpaper_oWEbyQ7.jpg'),
(39, 39640273, 27, '396402733d-games-wallpapers-3d-picture-3d-wallpaper_oWEbyQ7.jpg'),
(40, 39640273, 28, '396402733d-games-wallpapers-3d-picture-3d-wallpaper_oWEbyQ7.jpg'),
(41, 39640273, 29, '396402733d-games-wallpapers-3d-picture-3d-wallpaper_oWEbyQ7.jpg'),
(42, 39640273, 30, '396402733d-games-wallpapers-3d-picture-3d-wallpaper_oWEbyQ7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_akta`
--

CREATE TABLE `jenis_akta` (
  `id_jenis_akta` int(11) NOT NULL,
  `nama_akta` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_akta`
--

INSERT INTO `jenis_akta` (`id_jenis_akta`, `nama_akta`) VALUES
(1, 'AKTA JUAL BELI'),
(2, 'AKTA TUKAR MENUKAR'),
(3, 'AKTA HIBAH'),
(4, 'AKTA PEMASUKAN KE DALAM PERUSAHAAN'),
(5, 'AKTA PEMBAGIAN HAK BERSAMA'),
(6, 'AKTA PEMBERIAN HAK TANGGUNGAN'),
(7, 'AKTA PEMBERIAN HAK GUNA BANGUNAN/HAK PAKAI DI ATAS TANAH HAK MILIK'),
(8, 'SURAT KUASA MEMBEBANKAN HAK TANGGUNGAN'),
(9, 'akta hibah');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(11) NOT NULL,
  `no_akta` varchar(125) NOT NULL,
  `tgl_akta` date NOT NULL,
  `bentuk_hukum` varchar(15) NOT NULL,
  `nama_penjual` varchar(50) NOT NULL,
  `nama_pembeli` varchar(50) NOT NULL,
  `no_sertifikat` varchar(100) NOT NULL,
  `alamat_tanah` varchar(125) NOT NULL,
  `luas_tanah` int(100) NOT NULL,
  `luas_bangunan` int(100) NOT NULL,
  `harga_peralihan_hak` int(20) NOT NULL,
  `nop_tahun` int(20) NOT NULL,
  `njop` int(20) NOT NULL,
  `tgl_ssp` varchar(20) NOT NULL,
  `h_ssp` int(20) NOT NULL,
  `tgl_ssb` varchar(20) NOT NULL,
  `h_ssb` int(20) NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `tgl_laporan` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `no_akta`, `tgl_akta`, `bentuk_hukum`, `nama_penjual`, `nama_pembeli`, `no_sertifikat`, `alamat_tanah`, `luas_tanah`, `luas_bangunan`, `harga_peralihan_hak`, `nop_tahun`, `njop`, `tgl_ssp`, `h_ssp`, `tgl_ssb`, `h_ssb`, `keterangan`, `tgl_laporan`) VALUES
(7, '123', '0000-00-00', '', '', '', '', '', 0, 0, 0, 0, 0, '', 0, '', 0, '', '2020-07-07'),
(8, '2222', '0000-00-00', '', '', '', '', '', 0, 0, 0, 0, 0, '', 0, '', 0, '', '2020-06-07'),
(9, '', '0000-00-00', '', '', '', '', '', 0, 0, 0, 0, 0, '', 0, '', 0, '', '2020-07-07');

-- --------------------------------------------------------

--
-- Table structure for table `permohonan`
--

CREATE TABLE `permohonan` (
  `id_permohonan` int(50) NOT NULL,
  `tgl_pengajuan` varchar(50) NOT NULL,
  `jenis_akta` int(11) NOT NULL,
  `nama` varchar(125) NOT NULL,
  `hp` varchar(50) NOT NULL,
  `alamat` varchar(125) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permohonan`
--

INSERT INTO `permohonan` (`id_permohonan`, `tgl_pengajuan`, `jenis_akta`, `nama`, `hp`, `alamat`, `status`) VALUES
(39640273, '02/04/2020', 5, 'gentho', '0320853275025', 'Jl. Parmata', 'PROSES');

-- --------------------------------------------------------

--
-- Table structure for table `syarat`
--

CREATE TABLE `syarat` (
  `id_syarat` int(11) NOT NULL,
  `jenis_akta` int(11) NOT NULL,
  `syarat` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `syarat`
--

INSERT INTO `syarat` (`id_syarat`, `jenis_akta`, `syarat`) VALUES
(6, 1, 'Fc. KTP pembeli'),
(7, 1, 'Fc. KK pembeli'),
(8, 1, 'Fc. NPWP pembeli'),
(9, 1, 'Fc. KTP Suami dan Istri penjual'),
(10, 1, 'Fc. KK, Surat Nikah penjual'),
(11, 1, 'Fc. PBB, Sertifikat dan NPWP penjual '),
(18, 3, 'scen Ktp dan KK suami dan isteri pemberi hibah '),
(19, 3, 'scen Fc. KTP dan KK anak-anak'),
(20, 3, 'scen NPWP Penjual'),
(21, 3, 'scen Fc. KTP dan KK Penerima Hibah'),
(22, 3, 'scen NPWP Penerima Hibah'),
(23, 3, 'scan PBB+BB'),
(24, 3, 'scan Sertifikat'),
(25, 5, 'scen KTP dan KK penjual/yang punya sertifikat (suami isteri)'),
(26, 5, ' scen Fc. NPWP penjual/yang punya sertifikat'),
(27, 5, 'scen Fc. PBB+BB'),
(28, 5, 'scen Sertipikat'),
(29, 5, 'scen Fc. KTP dan KK Pembeli/penerima hak'),
(30, 5, ' scen NPWP Pembeli/penerima hak');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `arsip`
--
ALTER TABLE `arsip`
  ADD PRIMARY KEY (`id_arsip`);

--
-- Indexes for table `file_permohonan`
--
ALTER TABLE `file_permohonan`
  ADD PRIMARY KEY (`id_file`);

--
-- Indexes for table `jenis_akta`
--
ALTER TABLE `jenis_akta`
  ADD PRIMARY KEY (`id_jenis_akta`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `permohonan`
--
ALTER TABLE `permohonan`
  ADD PRIMARY KEY (`id_permohonan`);

--
-- Indexes for table `syarat`
--
ALTER TABLE `syarat`
  ADD PRIMARY KEY (`id_syarat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arsip`
--
ALTER TABLE `arsip`
  MODIFY `id_arsip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `file_permohonan`
--
ALTER TABLE `file_permohonan`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `jenis_akta`
--
ALTER TABLE `jenis_akta`
  MODIFY `id_jenis_akta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `syarat`
--
ALTER TABLE `syarat`
  MODIFY `id_syarat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
