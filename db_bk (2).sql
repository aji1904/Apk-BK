-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2020 at 08:48 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bk`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_jurusan`
--

CREATE TABLE `tb_jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(25) NOT NULL,
  `ketua_jurusan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jurusan`
--

INSERT INTO `tb_jurusan` (`id_jurusan`, `nama_jurusan`, `ketua_jurusan`) VALUES
(1, 'Akuntansi', 'NOPIKA SURYANI, S.Pd'),
(2, 'Administrasi Perkantoran', 'BELLA WIDI K.P, S.Pd'),
(3, 'Teknik Komputer Jaringan', 'LIA AGUSTINI, S.Pd');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `nama_kelas` varchar(50) NOT NULL,
  `wali_kelas` varchar(25) NOT NULL,
  `nip_wali` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `id_jurusan`, `nama_kelas`, `wali_kelas`, `nip_wali`) VALUES
(29, 1, 'X Akuntansi', 'Yana Yupiko, S.Pd', '-'),
(30, 2, 'X Administrasi Perkantoran', 'OCTHA LIBRA YANI, S.Pd', '-'),
(39, 5, 'X Perhotelan', 'xxxx', '-'),
(40, 6, 'X Multimedia', 'Xxxx', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tb_konseling`
--

CREATE TABLE `tb_konseling` (
  `id_konseling` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `nis` varchar(10) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `bid_bimbingan` enum('Pribadi','Sosial','Pribadi&Sosial') NOT NULL,
  `tindak_lanjut` enum('Pembinaan','Surat Panggilan') NOT NULL,
  `verifikasi` varchar(10) NOT NULL,
  `id_point` varchar(11) NOT NULL,
  `hasil_bim` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_point`
--

CREATE TABLE `tb_point` (
  `id_point` int(11) NOT NULL,
  `nama_pelanggaran` varchar(255) NOT NULL,
  `jenis_pelanggaran` varchar(15) NOT NULL,
  `point_pelanggaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_point`
--

INSERT INTO `tb_point` (`id_point`, `nama_pelanggaran`, `jenis_pelanggaran`, `point_pelanggaran`) VALUES
(1, 'mancing', 'Ringan', 11),
(5, 'maling mangga', 'Ringan', 20);

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `nis` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `agama` enum('Islam','Katolik','Kristen Protestan','Hindu','Buddha','Kong Hu Cu') NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`nis`, `nama`, `tempat_lahir`, `tgl_lahir`, `alamat`, `jk`, `agama`, `no_hp`, `id_kelas`) VALUES
('2745', 'APRILLIA', 'Jakarta', '2004-04-29', 'Jln R.H.A Arifai Tjetyan', 'P', 'Islam', '-', 29),
('2747', 'DHEA PUTRI APRILIA', 'Palembang', '2004-04-24', 'jl. angkatan 66 sekip', 'P', 'Islam', '0895383032300', 29);

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `jabatan` varchar(15) NOT NULL,
  `nip_bk` varchar(20) NOT NULL,
  `no_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id_user`, `username`, `password`, `nama`, `jabatan`, `nip_bk`, `no_hp`) VALUES
(2, 'admin', '123456', 'Iche Ria Afriani, S.Pd.', 'Admin', '061630700531', '08984980351'),
(3, 'guru bk', '123456', 'nama guru BK', 'BK', '1111', '0510510'),
(4, 'tata usaha', '123456', 'nama tata usaha', 'Tata Usaha', '145151', '05410511'),
(5, 'wakil kesiswaan', '123456', 'nama wakil', 'Wakil Kesiswaan', '15613218', '002123123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tb_konseling`
--
ALTER TABLE `tb_konseling`
  ADD PRIMARY KEY (`id_konseling`);

--
-- Indexes for table `tb_point`
--
ALTER TABLE `tb_point`
  ADD PRIMARY KEY (`id_point`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tb_konseling`
--
ALTER TABLE `tb_konseling`
  MODIFY `id_konseling` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_point`
--
ALTER TABLE `tb_point`
  MODIFY `id_point` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
