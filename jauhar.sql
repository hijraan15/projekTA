-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2019 at 11:53 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jauhar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `level`) VALUES
(3, 'admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id_informasi` int(10) NOT NULL,
  `judul_informasi` varchar(100) NOT NULL,
  `isi_informasi` text NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(100) NOT NULL,
  `nama_kriteria` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`) VALUES
(1, 'Tes Baca Iqro\''),
(2, 'Tes Matematika'),
(3, 'Hasil Wawancara');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(100) NOT NULL,
  `id_kriteria` int(100) NOT NULL,
  `nisn_santri` int(100) NOT NULL,
  `id_panitia` int(50) NOT NULL,
  `nilai` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `id_kriteria`, `nisn_santri`, `id_panitia`, `nilai`) VALUES
(1, 0, 80, 100, '');

-- --------------------------------------------------------

--
-- Table structure for table `panitia`
--

CREATE TABLE `panitia` (
  `id_panitia` int(10) NOT NULL,
  `nama_panitia` varchar(250) NOT NULL,
  `jenis_panitia` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `panitia`
--

INSERT INTO `panitia` (`id_panitia`, `nama_panitia`, `jenis_panitia`, `username`, `password`) VALUES
(0, 'Hijraan', 'Admin', 'hijraan123', 'hijraan123'),
(1, 'Bambang', 'Iqro\'', '', ''),
(3, 'Yani', 'Sekretaris', '', ''),
(4, 'Tina', 'Pengawas', 'Tina123', 'Tina123');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(10) NOT NULL,
  `jenis_pembayaran` varchar(250) NOT NULL,
  `nominal` varchar(250) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `nisn_santri` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `jenis_pembayaran`, `nominal`, `keterangan`, `nisn_santri`) VALUES
(1, 'SPP', '250000', 'LUNAS', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `id_ruangan` int(10) NOT NULL,
  `nama_ruangan` varchar(250) NOT NULL,
  `jenis_tes` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`id_ruangan`, `nama_ruangan`, `jenis_tes`) VALUES
(1, 'Ali bin Abi Thalib 101', ''),
(3, 'Aisyah', 'Tes Matematika');

-- --------------------------------------------------------

--
-- Table structure for table `santri`
--

CREATE TABLE `santri` (
  `nisn_santri` int(100) NOT NULL,
  `nama_lengkap` varchar(250) NOT NULL,
  `jenis_kelamin` varchar(150) NOT NULL,
  `nomor_HP` varchar(250) NOT NULL,
  `kota_asal` varchar(150) NOT NULL,
  `kabupaten` varchar(150) NOT NULL,
  `tempat_lahir` varchar(150) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `anak_ke` varchar(50) NOT NULL,
  `alamat_rumah` varchar(250) NOT NULL,
  `sekolah_asal` varchar(250) NOT NULL,
  `pendidikan_terakhir` varchar(250) NOT NULL,
  `program_yang_dituju` varchar(250) NOT NULL,
  `nama_lengkap_ortu` varchar(250) NOT NULL,
  `pekerjaan_ortu` varchar(250) NOT NULL,
  `noHP_ortu` varchar(100) NOT NULL,
  `alamat_rumah_ortu` varchar(150) NOT NULL,
  `status_santri` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `santri`
--

INSERT INTO `santri` (`nisn_santri`, `nama_lengkap`, `jenis_kelamin`, `nomor_HP`, `kota_asal`, `kabupaten`, `tempat_lahir`, `tanggal_lahir`, `anak_ke`, `alamat_rumah`, `sekolah_asal`, `pendidikan_terakhir`, `program_yang_dituju`, `nama_lengkap_ortu`, `pekerjaan_ortu`, `noHP_ortu`, `alamat_rumah_ortu`, `status_santri`) VALUES
(1, 'Rossi', 'Perempuan', '081365783920', 'Pekanbaru', 'Bengkalis', 'Duri', '1998-01-01', '3', 'Rumbai', 'SDN032', 'SD/MI', 'Intensive', 'Tukimin', 'PNS', '083678925678', 'Bengkalis', 'IKHD'),
(1232123, 'Rossi', 'Perempuan', '081365783920', 'Siak', 'Bengkalis', 'Duri', '1998-01-09', '3', 'Dayun', 'SDN032', 'SD/MI', 'Intensive', 'Tukimin', 'PNS', '083678925678', 'Bengkalis', 'Murni'),
(1234567, 'Seri', 'Perempuan', '082170557864', 'Siak', 'Siak', 'Siak', '1997-04-09', '2', 'Dayun', 'SDN13 Suka Mulya', 'SD/MI', 'Intensive', 'Tukimin', 'Buruh', '083678925678', 'Bengkalis', 'IKHD');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(10) NOT NULL,
  `nisn_santri` int(10) NOT NULL,
  `id_pembayaran` int(10) NOT NULL,
  `tanggal_pembayaran` date NOT NULL,
  `keterangan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `nisn_santri`, `id_pembayaran`, `tanggal_pembayaran`, `keterangan`) VALUES
(1, 1, 1, '2019-10-10', 'Lunas'),
(2, 2, 2, '2019-10-17', 'Belum Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `ujian`
--

CREATE TABLE `ujian` (
  `id_ujian` int(100) NOT NULL,
  `jam` varchar(100) NOT NULL,
  `nisn_santri` int(100) NOT NULL,
  `id_panitia` int(100) NOT NULL,
  `id_ruangan` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ujian`
--

INSERT INTO `ujian` (`id_ujian`, `jam`, `nisn_santri`, `id_panitia`, `id_ruangan`) VALUES
(1, '07:30', 0, 0, 0),
(5, '07:00', 4567, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `nisn_santri` (`nisn_santri`),
  ADD KEY `id_panitia` (`id_panitia`),
  ADD KEY `id_kriteria` (`id_kriteria`) USING BTREE;

--
-- Indexes for table `panitia`
--
ALTER TABLE `panitia`
  ADD PRIMARY KEY (`id_panitia`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `nisn_santri` (`nisn_santri`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`id_ruangan`);

--
-- Indexes for table `santri`
--
ALTER TABLE `santri`
  ADD PRIMARY KEY (`nisn_santri`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD UNIQUE KEY `no_pendaftaran` (`nisn_santri`),
  ADD UNIQUE KEY `id_pembayaran` (`id_pembayaran`),
  ADD KEY `nisn_santri` (`nisn_santri`),
  ADD KEY `id_pembayaran_2` (`id_pembayaran`);

--
-- Indexes for table `ujian`
--
ALTER TABLE `ujian`
  ADD PRIMARY KEY (`id_ujian`),
  ADD KEY `nisn_santri` (`nisn_santri`),
  ADD KEY `id_panitia` (`id_panitia`),
  ADD KEY `id_ruangan` (`id_ruangan`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`nisn_santri`) REFERENCES `santri` (`nisn_santri`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ujian`
--
ALTER TABLE `ujian`
  ADD CONSTRAINT `ujian_ibfk_1` FOREIGN KEY (`id_panitia`) REFERENCES `panitia` (`id_panitia`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
