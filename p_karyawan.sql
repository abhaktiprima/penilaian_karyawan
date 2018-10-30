-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2018 at 04:00 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `p_karyawan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_absensi`
--

CREATE TABLE `tbl_absensi` (
  `nik` int(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `jam_masuk` datetime NOT NULL,
  `jam_pulang` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_absensi`
--

INSERT INTO `tbl_absensi` (`nik`, `nama`, `jabatan`, `jam_masuk`, `jam_pulang`) VALUES
(100003, 'wiwid', 'manager', '2018-10-27 23:28:49', '2018-10-27 23:29:19'),
(201730, 'Heru Kuswoyo', 'Admin Operation', '2018-10-28 01:39:49', '2018-10-28 01:40:48'),
(100003, 'wiwid', 'manager', '2018-10-28 01:42:01', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `uname` varchar(7) NOT NULL,
  `pass` char(7) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`uname`, `pass`, `date`) VALUES
('andrian', 'andrian', '2014-03-05 04:13:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_karyawan`
--

CREATE TABLE `tbl_karyawan` (
  `nik` int(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_karyawan`
--

INSERT INTO `tbl_karyawan` (`nik`, `password`, `nama`, `level`) VALUES
(100003, '12345', 'wiwid', 'admin'),
(20170802, 'ayamk0s0ng', 'heru', 'karyawan'),
(20170803, 'gyros098', 'absdfa', 'penilai');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pegawai`
--

CREATE TABLE `tbl_pegawai` (
  `nik` int(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pegawai`
--

INSERT INTO `tbl_pegawai` (`nik`, `nama`, `jabatan`, `alamat`) VALUES
(100003, 'Wiwid', 'Manager', 'jalan kebahagiaan no 1 jaksel'),
(201730, 'Heru', 'Admin', 'Srengseng, Kebon Jeruk'),
(10003, 'wiwid', 'manager', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penilaian`
--

CREATE TABLE `tbl_penilaian` (
  `tgl_update` datetime NOT NULL,
  `nik` int(20) NOT NULL,
  `absensi` int(10) NOT NULL,
  `sikap` int(10) NOT NULL,
  `teamwork` int(10) NOT NULL,
  `tg_jawab` int(10) NOT NULL,
  `advance` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_penilaian`
--

INSERT INTO `tbl_penilaian` (`tgl_update`, `nik`, `absensi`, `sikap`, `teamwork`, `tg_jawab`, `advance`) VALUES
('2018-10-28 01:23:41', 100003, 100, 80, 90, 85, 90);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `nik` int(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`nik`, `password`) VALUES
(20170801, 'ayamk0s0ng');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_penilaian`
--
ALTER TABLE `tbl_penilaian`
  ADD UNIQUE KEY `nik` (`nik`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD UNIQUE KEY `nik` (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
