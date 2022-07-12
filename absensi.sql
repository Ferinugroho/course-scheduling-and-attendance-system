-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 30, 2015 at 07:27 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `absensi`
--

-- --------------------------------------------------------

--
-- Table structure for table `absens`
--

CREATE TABLE IF NOT EXISTS `absens` (
  `id_absen` int(30) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `jam` varchar(30) NOT NULL,
  `nim_a` varchar(30) NOT NULL,
  `nama_a` varchar(40) NOT NULL,
  `keterangan` varchar(20) NOT NULL,
  `d_pjr` varchar(30) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  PRIMARY KEY (`id_absen`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absens`
--

INSERT INTO `absens` (`id_absen`, `tanggal`, `hari`, `jam`, `nim_a`, `nama_a`, `keterangan`, `d_pjr`, `kelas`) VALUES
(30, '21-06-2015', 'Sunday', '01:41', '061430800550', 'ADE SATRIANI', 'hadir', 'Zulkarnaini', '1IA'),
(31, '21-06-2015', 'Sunday', '01:41', '061430800572', 'TIA ELVIANA', 'hadir', 'Zulkarnaini', '1IA'),
(32, '21-06-2015', 'Sunday', '01:41', '061430800558', 'FAHLITA EKA FITRI', 'hadir', 'Zulkarnaini', '1IA'),
(35, '21-06-2015', 'Sunday', '02:09', '061430800574', 'AGUNG FADHIL RAMADHAN', 'alpa', 'Zulkarnaini', '1IB'),
(36, '21-06-2015', 'Sunday', '02:09', '061430800584', 'ERSA KAROLINA', 'alpa', 'Zulkarnaini', '1IB'),
(37, '23-06-2015', 'Tuesday', '13:41', '061430800550', 'ADE SATRIANI', 'hadir', 'Ridwan', '1IA'),
(38, '23-06-2015', 'Tuesday', '13:41', '061430800572', 'TIA ELVIANA', 'izin', 'Ridwan', '1IA'),
(39, '23-06-2015', 'Tuesday', '13:41', '061430800558', 'FAHLITA EKA FITRI', 'alpa', 'Ridwan', '1IA');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE IF NOT EXISTS `dosen` (
  `id_dosen` int(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `kontak` varchar(20) NOT NULL,
  `kd_dosen` varchar(5) NOT NULL,
  PRIMARY KEY (`id_dosen`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nama`, `nip`, `kontak`, `kd_dosen`) VALUES
(14, 'Dedy Rusdyanto, SE.,M.Si.', '197306202001121001', '8980', '01'),
(15, 'Robinson, S.Kom., M.Kom.', '19750317 200212 1 00', '08768491191', '02'),
(16, 'Ridwan Effendi, S.E.', '19600311 198903 1 00', '0854352352', '03'),
(17, 'Ir. Zulkarnaini, M.T.', '19620918 199203 1 00', '09986546321', '04'),
(18, 'Dewi Irmawati Siregar, S.Kom.,', '19770918 200112 2 00', '095237237323', '05'),
(19, 'Indra Satriadi, S.T., M.Kom.', '19721116 200003 1 00', '081290402666', '06'),
(20, 'Ienda Meiriska, S.Kom., M.Kom.', '19790517 200212 2 00', '03532562733', '07'),
(21, 'Meivi Kusnandar, S.Kom.,M.Kom.', '19740705 200212 1 01', '081272001974', '08'),
(22, 'Muhammad Noval, S.E.', '19751108 200501 1 00', '0879129417', '09'),
(23, 'Yusniarti, S.Kom., M.Kom.', '19790921 200501 2 00', '07382298283', '10'),
(24, 'Henny Madora, S.Kom.,M.M.', '19770927 200501 2 00', '0987621718', '11'),
(25, 'Rika Sadariawati, S.E.,M.Si.', '19730223 200212 2 00', '08976216819', '12'),
(26, 'Leni Novianti, S.Kom.,M.Kom.', '19771031 200212 2 00', '07866645789', '13'),
(27, 'Indri Ariyanti, S.E., M.Si.', '19730603 200801 2 00', '05642435478', '14'),
(28, 'Delta Khairunnisa, S.E. M.Si.', '19760606 200801 2 02', '09874657432', '15'),
(29, 'Nita Novita, S.E. M.M.', '19741123 200801 2 00', '09928642472', '16'),
(30, 'Devi Sartika, S.Kom.,MAB.', '19771011 200112 2 00', '095039532932', '17'),
(31, 'Sony Oktapriandi, S.Kom.,M.Kom', '19751027 200812 1 00', '096743235238', '18'),
(32, 'Hetty Meileni, S.Kom., MT.', '19790514 200812 2 00', '098735723393', '19'),
(33, 'Desi Apriyanty, S.E., M.Si.', '19730429 200501 2 00', '095384834389', '20'),
(34, 'Ida Wahyuningrum, S.E.,M.Si.', '19801011 200501 2 00', '09873562385', '21'),
(35, 'Ahmad Ari Gunawan Sepriansyah,', '19730918 200604 1 00', '09874737389', '22'),
(36, 'M. Aris Ganiardi, M.T.', '19810114 201212 1 00', '09753823875', '23'),
(37, 'Usep Tisnajaya, S.Kom., M.Kom.', '', '08567345634', '24');

-- --------------------------------------------------------

--
-- Table structure for table `f_jadwal`
--

CREATE TABLE IF NOT EXISTS `f_jadwal` (
  `id_fjadwal` int(11) NOT NULL AUTO_INCREMENT,
  `id_postjadwal` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL,
  PRIMARY KEY (`id_fjadwal`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `f_jadwal`
--

INSERT INTO `f_jadwal` (`id_fjadwal`, `id_postjadwal`, `id_dosen`) VALUES
(1, 1, 18),
(2, 2, 14);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
  `id_jadwal` int(30) NOT NULL,
  `s_jadwal` varchar(30) NOT NULL,
  `s_hari` varchar(30) NOT NULL,
  `jam_k` varchar(50) NOT NULL,
  `kd_mk` varchar(50) NOT NULL,
  `ruang` varchar(30) NOT NULL,
  `dosen` varchar(30) NOT NULL,
  `kelas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_dosen`
--

CREATE TABLE IF NOT EXISTS `jadwal_dosen` (
  `id_jadwaldosen` int(11) NOT NULL,
  `id_dosen` varchar(100) NOT NULL,
  PRIMARY KEY (`id_jadwaldosen`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_dosen`
--

INSERT INTO `jadwal_dosen` (`id_jadwaldosen`, `id_dosen`) VALUES
(0, '22'),
(1, 'Dedy Rusdyanto, SE.,M.Si.197306202001121001'),
(2, 'Meivi Kusnandar, S.Kom.,M.Kom.19740705 200212 1 01'),
(3, 'Ir. Zulkarnaini, M.T.19620918 199203 1 00');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_hari`
--

CREATE TABLE IF NOT EXISTS `jadwal_hari` (
  `id_jadwalhari` int(11) NOT NULL,
  `hari` varchar(50) NOT NULL,
  `jam_k` varchar(50) NOT NULL,
  PRIMARY KEY (`id_jadwalhari`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_hari`
--

INSERT INTO `jadwal_hari` (`id_jadwalhari`, `hari`, `jam_k`) VALUES
(0, 'kamis', '08.40-09.30'),
(1, 'senin', '07.00-07.50'),
(2, 'rabu', '07.50-08.40'),
(3, 'senin', '08.40-09.30'),
(4, 'senin', '10.00-10.50'),
(5, 'senin', '10.50-11.40'),
(6, 'senin', '07.50-08.40'),
(7, 'senin', '17.20-18.10'),
(8, 'senin', '16.30-17.20'),
(9, 'senin', '15.40-16.30'),
(10, 'senin', '14.20-15.10'),
(11, 'senin', '12.40-13.30'),
(12, 'senin', '13.30-14.20'),
(13, 'senin', '11.40-12.30'),
(14, 'selasa', '07.00-07.50');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_kelas`
--

CREATE TABLE IF NOT EXISTS `jadwal_kelas` (
  `id_jadwalkelas` int(11) NOT NULL,
  `id_matkul` varchar(100) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  PRIMARY KEY (`id_jadwalkelas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_kelas`
--

INSERT INTO `jadwal_kelas` (`id_jadwalkelas`, `id_matkul`, `kelas`) VALUES
(0, '24', '1IB'),
(1, '18', '1IB'),
(4, '18', '1IA'),
(5, '19', '1IC'),
(6, '22', '1IB'),
(7, '19', '1IB'),
(8, '24', '1IC'),
(9, '21', '1IB'),
(10, '22', '1IC'),
(11, '27', '1IC');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `id_mhs` int(30) NOT NULL,
  `nim` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kelas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mhs`, `nim`, `nama`, `kelas`) VALUES
(10, '061430800550', 'ADE SATRIANI', '1IA'),
(11, '061430800551', 'AGUS BUDI PRAMUDIA', '1IA'),
(12, '061430800552', 'ALHAMDA SEPTRI TIANI LUYNAZORI', '1IA'),
(13, '061430800553', 'ANGELINE MAULIDINA', '1IA'),
(14, '061430800554', 'DERI KERSANI', '1IA'),
(15, '061430800555', 'DIAN PERMATA SARI', '1IA'),
(16, '061430800556', 'EFFY LUTHFIYYAH NUR', '1IA'),
(17, '061430800557', 'ERICK SISI PERMANA', '1IA'),
(18, '061430800558', 'FAHLITA EKA FITRI', '1IA'),
(19, '061430800559', 'GUSTINI ROSA', '1IA'),
(20, '061430800560', 'HENDRI WIDIANTO', '1IA'),
(21, '061430800561', 'LUCKY ALDIN MARZUKI', '1IA'),
(22, '061430800562', 'MARTINAH', '1IA'),
(23, '061430800563', 'MUHAMAD HARRY RIZKI', '1IA'),
(24, '061430800564', 'MUHAMMAD ZEN ZIDAN', '1IA'),
(25, '061430800565', 'NANI PUJI PRIHATIN', '1IA'),
(26, '061430800566', 'PANJI MAULANA', '1IA'),
(27, '061430800567', 'PATRA AZIANATA', '1IA'),
(28, '061430800568', 'RANDO', '1IA'),
(29, '061430800569', 'RISKI MITRA PRATAMA', '1IA'),
(30, '061430800570', 'SAID AKHMAD FADIL MALKI', '1IA'),
(31, '061430800571', 'SUKMA MAULIDINA DETAKA', '1IA'),
(32, '061430800572', 'TIA ELVIANA', '1IA'),
(33, '061430800573', 'USWATUN HASANAH', '1IA'),
(34, '061430800574', 'AGUNG FADHIL RAMADHAN', '1IB'),
(35, '061430800575', 'AIDIL FITRIANSYAH PARIKESIT', '1IB'),
(36, '061430800576', 'ANIS FAJRIN', '1IB'),
(37, '061430800577', 'ARI SEPTIANI', '1IB'),
(38, '061430800578', 'ARMAWINDA', '1IB'),
(39, '061430800579', 'BAHRUL ULUM', '1IB'),
(40, '061430800580', 'BASTIAN NOPRI SUSANTO', '1IB'),
(41, '061430800581', 'CHANDRA DINATA', '1IB'),
(42, '061430800582', 'DEA EMILDA SAVIRA', '1IB'),
(43, '061430800583', 'EKA LILI SURYANI', '1IB'),
(44, '061430800584', 'ERSA KAROLINA', '1IB'),
(45, '061430800585', 'HARMI THAHIRO UTAMI', '1IB'),
(46, '061430800586', 'LIE VENIA METTA LOVILLEA', '1IB'),
(47, '061430800587', 'M ALFI HIDAYAT', '1IB'),
(48, '061430800588', 'MUHAMMAD KARNADI', '1IB'),
(49, '061430800589', 'MUHAMMAD LUTHFI NURHABIBI', '1IB'),
(50, '061430800590', 'MUTIA PRATIWI', '1IB'),
(51, '061430800591', 'NANDO YOSA PRATAMA', '1IB'),
(52, '061430800592', 'REFI WIRAWAN ERWIN', '1IB'),
(53, '061430800593', 'RIZKA NURRAHIM DWIAYU', '1IB'),
(54, '061430800594', 'ROFIQO OKTARIA', '1IB'),
(55, '061430800595', 'SRI UTAMI', '1IB'),
(56, '061430800596', 'SUNDARI NANANG', '1IB'),
(57, '061430800597', 'TRYO ANDRIANS', '1IB'),
(58, '061430800598', 'ALYAH ANJANI', '1IC'),
(59, '061430800599', 'ANDRA ADITIA', '1IC'),
(60, '061430800600', 'DARMARIYANTI', '1IC'),
(61, '061430800601', 'DEWI RAHMAWATI', '1IC'),
(62, '061430800602', 'DONA NOVIA', '1IC'),
(63, '061430800603', 'GIAN ANDREANDI SENA', '1IC'),
(64, '061430800604', 'GRENDA FRISCILIA', '1IC'),
(65, '061430800605', 'HASANAL AQLI', '1IC'),
(66, '061430800606', 'KEVIN KASIH PRATAMA', '1IC'),
(68, '061430800607', 'M NAUFAL RAFIF', '1IC'),
(69, '061430800608', 'M RIANNUR PRIMA', '1IC'),
(70, '061430800609', 'MARETA DEWI AFSARI', '1IC'),
(71, '061430800610', 'MERRY', '1IC'),
(72, '061430800611', 'MUHAMMAD ALISYAHDAN', '1IC'),
(73, '061430800612', 'NINGRUM PERMATASARI', '1IC'),
(74, '061430800613', 'PEBRI JUNIKA', '1IC'),
(75, '061430800614', 'PUTRA KOLINGGA', '1IC'),
(76, '061430800615', 'RAHMAT MARYASI', '1IC'),
(77, '061430800616', 'REZA PAHLEVI', '1IC'),
(78, '061430800617', 'RIKO PRATAMA', '1IC'),
(79, '061430800618', 'SITI ZAHARA', '1IC'),
(80, '061430800619', 'TRI MEILINDA', '1IC'),
(81, '061430800620', 'TRIA FEBRI RAMADHANIA', '1IC'),
(82, '061230800599', 'Adinda Lestari Putri', '6IA'),
(83, '061230800600', 'Ahmad Haziq', '6IA'),
(84, '061230800601', 'Anjasmara Yurlanda', '6IA'),
(85, '061230800603', 'Ayu Lestari', '6IA'),
(86, '061230800604', 'Balqis Calista', '6IA'),
(87, '061230800605', 'Dwi Prasetio', '6IA'),
(88, '061230800606', 'FERI NUGROHO', '6IA'),
(89, '061230800607', 'Indah Hidayah Santi', '6IA'),
(90, '061230800608', 'Irwan', '6IA'),
(91, '061230800609', 'Julli Santiae', '6IA'),
(92, '061230800610', 'Kiki Usman', '6IA'),
(93, '061230800611', 'Mgs Ahmad Firmansyah', '6IA'),
(94, '061230800612', 'Modi Sertiaan Amanda', '6IA'),
(95, '061230800613', 'Muhammad Nofriyansyah', '6IA'),
(96, '061230800614', 'Muharram Abdul Gani', '6IA'),
(97, '061230800615', 'Nisa Destiana', '6IA'),
(98, '061230800616', 'Nurul Azizah Holifatul Umami', '6IA'),
(99, '061230800617', 'Putri Yulina Yeni Marsela', '6IA'),
(100, '061230800618', 'Ria Syafitri', '6IA'),
(101, '061230800619', 'Rizqi Amalia.J', '6IA'),
(102, '061230800620', 'Rocky Pamoga', '6IA'),
(103, '061230800621', 'Sittah April Lindah', '6IA'),
(104, '061230800622', 'Tesah Mentari', '6IA');

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE IF NOT EXISTS `matkul` (
  `id_matkul` int(20) NOT NULL,
  `nama_matkul` varchar(30) NOT NULL,
  `kd_matkul` varchar(20) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `sks` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matkul`
--

INSERT INTO `matkul` (`id_matkul`, `nama_matkul`, `kd_matkul`, `semester`, `sks`) VALUES
(18, 'Sistem Keamanan Komputer', 'A1', 'ganjil', 2),
(19, 'Manajemen Umum', 'B1', 'ganjil', 2),
(20, 'Perilaku Dalam Berorganisasi', 'A3', 'ganjil', 2),
(21, 'Bahasa Inggris 1', 'B3', 'ganjil', 2),
(22, 'Pendidikan Agama', 'A2', 'genap', 2),
(23, 'Analisis dan Perancangan Sisfo', 'B2', 'genap', 2),
(24, 'Bahasa Inggris 2', 'A4', 'genap', 2),
(25, 'Matematika Diskrit', 'B4', 'genap', 2),
(26, 'Pengantar Sistem Informasi', 'C1', 'ganjil', 2),
(27, 'Pengantar Sistem Komputer', 'D1', 'ganjil', 2),
(28, 'Dasar-Dasar Akuntansi', 'E1', 'ganjil', 2),
(29, 'Jaringan Komputer', 'F1', 'ganjil', 1),
(30, 'Logika dan Algoritma', 'G1', 'ganjil', 1),
(31, 'Grafika Komputer', 'H1', 'ganjil', 1),
(32, 'Praktikum Jaringan Komputer', 'I1', 'ganjil', 2),
(33, 'Praktikum Paket Program Niaga ', 'J1', 'ganjil', 2),
(34, 'Praktikum Logika dan Algoritma', 'K1', 'ganjil', 2),
(35, 'Praktikum Grafika Komputer', 'L1', 'ganjil', 2),
(36, 'Perilaku Dalam Berorganisasi', 'A3', 'ganjil', 2),
(37, 'Bahasa Inggris 1', 'B3', 'ganjil', 2),
(38, 'Pendidikan Kewarganegaraan', 'C2', 'genap', 2);

-- --------------------------------------------------------

--
-- Table structure for table `n_jadwal`
--

CREATE TABLE IF NOT EXISTS `n_jadwal` (
  `id_njadwal` int(11) NOT NULL AUTO_INCREMENT,
  `id_fjadwal` int(11) NOT NULL,
  `ruang` varchar(10) NOT NULL,
  PRIMARY KEY (`id_njadwal`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `n_jadwal`
--

INSERT INTO `n_jadwal` (`id_njadwal`, `id_fjadwal`, `ruang`) VALUES
(1, 1, 'LABIII'),
(2, 2, 'LABII');

-- --------------------------------------------------------

--
-- Table structure for table `n_of_jadwal`
--

CREATE TABLE IF NOT EXISTS `n_of_jadwal` (
  `id` int(100) NOT NULL,
  `n_jadwal` varchar(100) NOT NULL,
  `ruang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `n_of_jadwal`
--

INSERT INTO `n_of_jadwal` (`id`, `n_jadwal`, `ruang`) VALUES
(1, 'senin07.00-07.50A11IADedy Rusdyanto, SE.,M.Si.', 'LABII'),
(2, 'senin07.50-08.40B11ICRobinson, S.Kom., M.Kom.', 'LABIII'),
(3, 'senin08.40-09.30B11IBIndra Satriadi, S.T., M.Kom.', 'IV'),
(4, 'senin08.40-09.30B11ICRidwan Effendi, S.E.', 'II'),
(5, 'senin10.00-10.50D11ICMuhammad Noval, S.E.', 'LABVI');

-- --------------------------------------------------------

--
-- Table structure for table `post_jadwal`
--

CREATE TABLE IF NOT EXISTS `post_jadwal` (
  `id_postjadwal` int(11) NOT NULL AUTO_INCREMENT,
  `id_jadwalhari` int(11) NOT NULL,
  `id_jadwalkelas` int(11) NOT NULL,
  PRIMARY KEY (`id_postjadwal`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `post_jadwal`
--

INSERT INTO `post_jadwal` (`id_postjadwal`, `id_jadwalhari`, `id_jadwalkelas`) VALUES
(1, 4, 6),
(2, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `t_jadwal`
--

CREATE TABLE IF NOT EXISTS `t_jadwal` (
  `id_tjadwal` int(11) NOT NULL AUTO_INCREMENT,
  `id_njadwal` int(11) NOT NULL,
  PRIMARY KEY (`id_tjadwal`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `t_jadwal`
--

INSERT INTO `t_jadwal` (`id_tjadwal`, `id_njadwal`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nip`, `level`) VALUES
(1, 'admin', 'admin', '', 'admin_jur'),
(2, 'fery', 'ferry', '', 'sekjur'),
(8, 'indra', 'indra', '1212121', 'dosen'),
(9, 'Ridwan', 'Ridwan', '11113', 'dosen'),
(10, 'Zulkarnaini', 'Zulkarnaini', '11114', 'dosen'),
(11, 'indra', 'indra', '2345', 'dosen'),
(12, 'robin', 'robin', '54321', 'dosen'),
(13, 'zulkar', 'zulkar', '987', 'dosen'),
(14, 'dedy', 'dedy', '0987654321', 'dosen'),
(15, 'robin', 'robin', '43462', 'dosen'),
(16, 'dedy', 'dedy', '197306202001121001', 'dosen'),
(17, 'robinson', 'robinson', '19750317 200212 1 00', 'dosen'),
(18, 'ridwan', 'ridwan', '19600311 198903 1 00', 'dosen'),
(19, 'zulkarnaini', 'zulkarnaini', '19620918 199203 1 00', 'dosen'),
(20, 'dewi', 'dewi', '19770918 200112 2 00', 'dosen'),
(21, 'indra', 'indra', '19721116 200003 1 00', 'dosen'),
(22, 'ienda', 'ienda', '19790517 200212 2 00', 'dosen'),
(23, 'meivi', 'meivi', '19740705 200212 1 01', 'dosen'),
(24, 'noval', 'noval', '19751108 200501 1 00', 'dosen'),
(25, 'yusniarti', 'yusniarti', '19790921 200501 2 00', 'dosen'),
(26, 'henny', 'henny', '19770927 200501 2 00', 'dosen'),
(27, 'rika', 'rika', '19730223 200212 2 00', 'dosen'),
(28, 'leni', 'leni', '19771031 200212 2 00', 'dosen'),
(29, 'indri', 'indri', '19730603 200801 2 00', 'dosen'),
(30, 'delta', 'delta', '19760606 200801 2 02', 'dosen'),
(31, 'nita', 'nita', '19741123 200801 2 00', 'dosen'),
(32, 'devi', 'devi', '19771011 200112 2 00', 'dosen'),
(33, 'soni', 'soni', '19751027 200812 1 00', 'dosen'),
(34, 'hetty', 'hetty', '19790514 200812 2 00', 'dosen'),
(35, 'desi', 'desi', '19730429 200501 2 00', 'dosen'),
(36, 'ida', 'ida', '19801011 200501 2 00', 'dosen'),
(37, 'ahmad', 'ahmad', '19730918 200604 1 00', 'dosen'),
(38, 'aris', 'aris', '19810114 201212 1 00', 'dosen'),
(39, 'usep', 'usep', '', 'dosen');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
