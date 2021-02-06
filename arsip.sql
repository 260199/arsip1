-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2020 at 12:31 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.0.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arsip`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `nickname` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `berkas`
--

CREATE TABLE `berkas` (
  `id_berkas` int(11) NOT NULL,
  `no_berkas` varchar(120) NOT NULL,
  `nama_berkas` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berkas`
--

INSERT INTO `berkas` (`id_berkas`, `no_berkas`, `nama_berkas`) VALUES
(5, '1', 'kartu indonesia sehat'),
(212, '79', 'joko');

-- --------------------------------------------------------

--
-- Table structure for table `keuangan`
--

CREATE TABLE `keuangan` (
  `id_keuangan` int(11) NOT NULL,
  `no_berkas` varchar(200) NOT NULL,
  `nama_berkas` varchar(200) NOT NULL,
  `jenis_berkas` varchar(1000) NOT NULL,
  `bidang` varchar(200) NOT NULL,
  `bulan` varchar(200) NOT NULL,
  `tahun` varchar(200) NOT NULL,
  `box` varchar(200) NOT NULL,
  `Rak` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keuangan`
--

INSERT INTO `keuangan` (`id_keuangan`, `no_berkas`, `nama_berkas`, `jenis_berkas`, `bidang`, `bulan`, `tahun`, `box`, `Rak`, `file`, `status`) VALUES
(6, '1', 'Pengiriman surat kantor pos', 'Berkas penagihan', 'keuangan', '-', '2016/2017', 'MMI', '2', '', '1'),
(7, '2', 'Surat tagihan mandiri', 'Berkas penagihan', 'keuangan', '-', '2015', 'MMI', '2', '', '1'),
(8, '2', 'Surat pengiriman surat zataka', 'Berkas penagihan', 'keuangan', '-', '2015', 'MMI', '2', '', '1'),
(9, '2', 'Rekon dari bukit', 'Berkas penagihan', 'keuangan', '-', '2015', 'MMI', '2', '', '1'),
(10, '2', 'Berkan rekon bu tanah datar', 'Berkas penagihan', 'keuangan', '-', '2016', 'MMI', '2', '', '1'),
(11, '2', 'REKON BU', 'Berkas penagihan', 'keuangan', '-', '2017', 'MMI', '2', '', '1'),
(12, '2', 'Surat masuk 1&2', 'Berkas penagihan', 'keuangan', '-', '2-18', 'MMI', '2', '', '1'),
(13, '2', 'Berkas penting 1&2', 'Berkas penagihan', 'keuangan', '-', '2019', 'MMI', '2', '', '1'),
(14, '3', 'Denda pelayanan', 'Berkas penagihan', 'keuangan', 'januari-desember', '2016', 'MMI', '2', '', '1'),
(15, '4', 'Laporan IW pemda dan pns', 'Berkas penagihan', 'keuangan', 'januari-desember', '2015/2016', 'MMI', '2', '', '1'),
(16, '4', 'Laporan IW pemda dan pns', 'Berkas penagihan', 'keuangan', 'januari-desember', '2017', 'MMI', '2', '', '1'),
(17, '5', 'Denda pembayaran', 'Berkas penagihan', 'keuangan', 'januari-desember', '2017', 'MMI', '2', '', '1'),
(18, '6', 'wali perangkat ', 'Berkas penagihan', 'keuangan', '-', '2017', 'MMI', '3', '', '1'),
(19, '6', 'daftar kader', 'Berkas penagihan', 'keuangan', '-', '2017', 'MMI', '3', '', '1'),
(20, '6', 'Refund', 'Berkas penagihan', 'keuangan', '-', '2017', 'MMI', '3', '', '1'),
(21, '6', 'VA TO VA ', 'Berkas penagihan', 'keuangan', '-', '2018', 'MMI', '3', '', '1'),
(22, '6', 'Peraturan', 'Berkas penagihan', 'keuangan', '-', '2016', 'MMI', '3', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `kpp`
--

CREATE TABLE `kpp` (
  `id_kpp` int(11) NOT NULL,
  `jenis_berkas` varchar(1100) NOT NULL,
  `no_berkas` varchar(200) NOT NULL,
  `nama_berkas` varchar(200) NOT NULL,
  `bidang` varchar(200) NOT NULL,
  `bulan` varchar(200) NOT NULL,
  `tahun` varchar(200) NOT NULL,
  `Rak` varchar(100) NOT NULL,
  `box` varchar(200) NOT NULL,
  `file` varchar(1000) NOT NULL,
  `status` varchar(129) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kpp`
--

INSERT INTO `kpp` (`id_kpp`, `jenis_berkas`, `no_berkas`, `nama_berkas`, `bidang`, `bulan`, `tahun`, `Rak`, `box`, `file`, `status`) VALUES
(4, 'DIP DAN MCS(berkas campur)', '3', '-', 'KPP', '-', '2019', '3', 'MMI', '', 'Tersedia'),
(5, 'DAFTAR ISI PESERTA', '1', '-', 'KPP', 'januari', '2020', '3', 'MMI', '', 'Tersedia'),
(7, 'DAFTAR ISI PESERTA', '2', '-', 'KPP', 'JULI', '2019', '3', 'MMI', '', '1'),
(8, 'Distribusi apbn kab 50 kota dan payakumbuh', '3', 'Berkas  kk distribusi apbn', 'kpp', '-', '2019', '3', '2', '', '1'),
(9, 'DIP', '2', '-', 'KPP', 'MARET-SEPTEMBER', '2019', '3', 'MMI', '', 'Tersedia'),
(10, 'KARTU RECYLE', '-', '-', 'KPP', '-', '-', '3', '1', '', '1'),
(11, 'KARTU RECYLE', '-', '-', 'KPP', '-', '-', '3', '2', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `p4`
--

CREATE TABLE `p4` (
  `id_p4` int(11) NOT NULL,
  `no_berkas` varchar(200) NOT NULL,
  `nama_berkas` varchar(200) NOT NULL,
  `jenis_berkas` varchar(200) NOT NULL,
  `bulan` varchar(200) NOT NULL,
  `bidang` varchar(100) NOT NULL,
  `tahun` varchar(200) NOT NULL,
  `box` varchar(200) NOT NULL,
  `Rak` varchar(100) NOT NULL,
  `file` varchar(1000) NOT NULL,
  `status` varchar(199) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `peminjam`
--

CREATE TABLE `peminjam` (
  `id_peminjam` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `status_peminjaman` varchar(50) NOT NULL,
  `status_pengembalian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `nickname` varchar(120) NOT NULL,
  `alamat` varchar(120) NOT NULL,
  `gendre` varchar(20) NOT NULL,
  `bidang` varchar(120) NOT NULL,
  `npp` varchar(100) NOT NULL,
  `password` varchar(120) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pmp`
--

CREATE TABLE `pmp` (
  `id_pmp` int(11) NOT NULL,
  `jenis_berkas` varchar(200) NOT NULL,
  `no_berkas` varchar(120) NOT NULL,
  `nama_berkas` varchar(2000) NOT NULL,
  `bidang` varchar(120) NOT NULL,
  `bulan` varchar(120) NOT NULL,
  `tahun` varchar(120) NOT NULL,
  `box` varchar(120) NOT NULL,
  `Rak` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pmp`
--

INSERT INTO `pmp` (`id_pmp`, `jenis_berkas`, `no_berkas`, `nama_berkas`, `bidang`, `bulan`, `tahun`, `box`, `Rak`, `file`, `status`) VALUES
(95937, 'KLAIM NON KAPITASI', '43', '-', 'PMP', 'APRIL-AGUSTUS', '2020', 'MMI', '1', '', 'Tersedia'),
(95938, 'KLAIM NON KAPITASI', '41', '-', 'PMP', 'JULI', '2020', 'MMI', '1', '', 'Tersedia'),
(95939, 'KLAIM NON KAPITASI', '37', '-', 'PMP', 'JUNI-JANUARI', '2019-2020', 'MMI', '1', '', '1'),
(95940, 'KLAIM NON KAPITASI', '55', '-', 'PMP', 'OKTOBER', '2019', 'MMI', '-', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `pmr`
--

CREATE TABLE `pmr` (
  `id_pmr` int(11) NOT NULL,
  `no_berkas` varchar(120) NOT NULL,
  `nama_berkas` varchar(2000) NOT NULL,
  `jenis_berkas` varchar(100) NOT NULL,
  `bidang` varchar(100) NOT NULL,
  `bulan` varchar(1000) NOT NULL,
  `tahun` varchar(1000) NOT NULL,
  `Rak` varchar(129) NOT NULL,
  `box` varchar(120) NOT NULL,
  `file` varchar(2000) NOT NULL,
  `status` varchar(20000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pmr`
--

INSERT INTO `pmr` (`id_pmr`, `no_berkas`, `nama_berkas`, `jenis_berkas`, `bidang`, `bulan`, `tahun`, `Rak`, `box`, `file`, `status`) VALUES
(9, '-', 'Optikal', '-', 'pmr', 'september', '2019', '3', 'MMI', '', '1'),
(10, '-', 'Optikal', '-', 'pmr', 'oktober', '2019', '3', 'MMI', '', '1'),
(11, '-', 'ibnu sina', 'RJTL', 'pmr', 'FEBRUARY', '2019', '3', 'MMI', '', '1'),
(12, '-', 'RSUD adnaa wd', 'RJTL', 'PMR', 'mei', '2019', '3', 'MMI', '', '1'),
(13, '4', '-', 'CBGS', 'PMR', '-', '2019', '3', 'mmi', '', '1'),
(14, '-', '-', 'RJTL', 'PMR', 'FEBRUARI', '2019', '3', 'MMI', '', '1'),
(15, '-', 'OPTIKAL', '-', 'PMR', 'september', '2019', '3', 'MMI', '', '1'),
(16, '32', 'Obat Kronis', '-', 'PMR', '-', '2019', '3', 'mmi', '', '1'),
(17, '-', 'OPTIKAL', '-', 'PMR', 'DESEMBER', '2019', '3', 'MMI', '', '1'),
(18, '-', 'OPTIKAL', '-', 'PMR', 'NOVEMBER', '2019', '3', 'MMI', '', '1'),
(19, '-', 'kLAIN ING CG=BG', 'RTJL RSIA ANISA', 'PMR', 'JANUARI-JUNI', '2019', '3', 'MMI', '', '1'),
(20, '-', 'OPTIKAL', '-', 'PMR', 'FEBRUARI', '2019', '3', 'MMI', '', '1'),
(21, '-', 'ibnu sina', 'RTJL', 'PMR', 'MARET', '2019', '3', 'MMI', '', '1'),
(22, '8', '-', 'KLAIN INA CBGS RTJL', 'PMR', '-', '2019', '3', 'MMI', '', '1'),
(23, '-', '-', 'RTJL RSUD ADNAA WD', 'PMR', 'JULI', '2019', '2', 'MMI', '', '1'),
(24, '-', '-', 'RTJL RS IBNU SINA', 'PMR', 'OKTOBER', '2019', '2', 'MMI', '', '1'),
(25, '-', '-', 'RTJL RSUD ADNAA WD', 'PMR', 'FEBRUARI', '2019', '3', 'MMI', '', '1'),
(26, '29', '-', 'KLAIM INA CBGS', 'PMR', '-', '2019', '1', 'MMI', '', '1'),
(27, '-', 'OPTIKAL WTA AMBULAN', '-', 'pmr', '-', '-', '1', 'MMI', '', '1'),
(28, '3', '-', 'KLAIN INA CBGS RTJL', 'pmr', '-', '2019', '-', 'MMI', '', '1'),
(29, '2', '-', 'KLAIN INA CBGS RTJL', 'PMR', '-', '2019', '-', 'MMI', '', '1'),
(30, '13', '-', 'KLAIN INA CBGS RTJL', 'PMR', '-', '2019', '-', 'MMI', '', '1'),
(31, '16', '-', 'KLAIN INA CBGS RTJL', 'PMR', '-', '2019', '-', 'MMI', '', '1'),
(32, '55', '-', 'KLAIN INA CBGS RTJL', 'PMR', '-', '2019', '-', 'MMI', '', '1'),
(33, '46', '-', 'KLAIN INA CBGS RTJL', 'PMR', '-', '2019', '-', 'MMI', '', '1'),
(34, '22', '-', 'KLAIN INA CBGS RTJL', 'PMR', '-', '2019', '-', 'MMI', '', '1'),
(35, '18', '-', 'KLAIN INA CBGS RTJL', 'PMR', '-', '2019', '-', 'MMI', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `sdm`
--

CREATE TABLE `sdm` (
  `id_sdm` int(11) NOT NULL,
  `no_berkas` varchar(200) NOT NULL,
  `nama_berkas` varchar(200) NOT NULL,
  `jenis_berkas` varchar(1000) NOT NULL,
  `bidang` varchar(200) NOT NULL,
  `bulan` varchar(200) NOT NULL,
  `tahun` varchar(200) NOT NULL,
  `box` varchar(200) NOT NULL,
  `Rak` varchar(120) NOT NULL,
  `file` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_peminjam` int(11) NOT NULL,
  `id_berkas` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `status_peminjaman` varchar(50) NOT NULL,
  `status_pengembalian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `npp` int(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `bidang` varchar(128) NOT NULL,
  `nomor_hp` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(30) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(2) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_create` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `npp`, `name`, `bidang`, `nomor_hp`, `email`, `image`, `password`, `role_id`, `is_active`, `date_create`) VALUES
(1, 0, 'admin', '', '0', 'admin@gmail.com', 'default.jpg', '$2y$10$PHyD2C.h6BD2CLQy1K4xD.vYhX114z6SnhaB.7bCXZf.sGBSaka66', 1, 1, '0000-00-00'),
(12, 1928, 'Handyka Dwiska Putra', 'SDMUKP', '081291715380', 'handykadwisk@gmail.com', 'default.jpg', '$2y$10$ZYqKxFf8Cgq8jC8EliPfjO2PWbpuS.QeXA/3IVKcpdmNiBBT2SBBS', 2, 1, '0000-00-00'),
(13, 171013009, 'aif surganda', 'SDMUKP', '081291271867', 'alif@gmail.com', 'default.jpg', '$2y$10$/rrJovOMLA4FLojM4ilRE.8OGXBhL4fgvRK06UszWl6Z9/5eilFJm', 2, 1, '0000-00-00'),
(17, 2020, 'm.kelvin', 'PKEU', '1234567788', 'kelvin40@gmail.com', 'default.jpg', '$2y$10$Nhi/GfOkxaNVMbqfExMBmuCh4c9pMgjfUYSpEDMAdky4OWqxl11ki', 1, 1, '0000-00-00'),
(18, 10, 'ilham', 'SDMUKP', '789', 'kelvin23@gmail.com', 'default.jpg', '$2y$10$QAUf9eferkLu6JBQLkrQXeD5GF/sd89lzywm.pn7BMGAIicU/.3tq', 1, 1, '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `berkas`
--
ALTER TABLE `berkas`
  ADD PRIMARY KEY (`id_berkas`);

--
-- Indexes for table `keuangan`
--
ALTER TABLE `keuangan`
  ADD PRIMARY KEY (`id_keuangan`);

--
-- Indexes for table `kpp`
--
ALTER TABLE `kpp`
  ADD PRIMARY KEY (`id_kpp`);

--
-- Indexes for table `p4`
--
ALTER TABLE `p4`
  ADD PRIMARY KEY (`id_p4`);

--
-- Indexes for table `peminjam`
--
ALTER TABLE `peminjam`
  ADD PRIMARY KEY (`id_peminjam`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `pmp`
--
ALTER TABLE `pmp`
  ADD PRIMARY KEY (`id_pmp`);

--
-- Indexes for table `pmr`
--
ALTER TABLE `pmr`
  ADD PRIMARY KEY (`id_pmr`);

--
-- Indexes for table `sdm`
--
ALTER TABLE `sdm`
  ADD PRIMARY KEY (`id_sdm`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_peminjam`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `berkas`
--
ALTER TABLE `berkas`
  MODIFY `id_berkas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213;

--
-- AUTO_INCREMENT for table `keuangan`
--
ALTER TABLE `keuangan`
  MODIFY `id_keuangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `kpp`
--
ALTER TABLE `kpp`
  MODIFY `id_kpp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `p4`
--
ALTER TABLE `p4`
  MODIFY `id_p4` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `peminjam`
--
ALTER TABLE `peminjam`
  MODIFY `id_peminjam` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pmp`
--
ALTER TABLE `pmp`
  MODIFY `id_pmp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95941;

--
-- AUTO_INCREMENT for table `pmr`
--
ALTER TABLE `pmr`
  MODIFY `id_pmr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `sdm`
--
ALTER TABLE `sdm`
  MODIFY `id_sdm` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_peminjam` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
