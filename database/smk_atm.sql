-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2020 at 09:21 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smk_atm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `photo` varchar(64) NOT NULL DEFAULT 'user_no_image.jpg',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_active` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `email`, `full_name`, `last_login`, `photo`, `created_at`, `is_active`) VALUES
(2, 'SMK ATM', '$2y$10$xDsN5UTI0U6tr7b4bwSMVej4cDEDIrozwchSvLX3q.L6jfmDaam.y', 'smkatm@gmail.com', 'SMK ATM', '2020-08-27 18:03:19', 'logo fix.jpg', '2020-08-27 10:41:33', 1);

-- --------------------------------------------------------

--
-- Table structure for table `oc`
--

CREATE TABLE `oc` (
  `id` int(11) NOT NULL,
  `status` enum('1','2') NOT NULL DEFAULT '1',
  `Tanggal_Buka` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oc`
--

INSERT INTO `oc` (`id`, `status`, `Tanggal_Buka`) VALUES
(1, '2', '2020-08-28 01:04:13');

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE `sekolah` (
  `id` int(11) NOT NULL,
  `tata_cara` varchar(256) NOT NULL DEFAULT 'default.pdf',
  `periode_daftar` varchar(128) NOT NULL,
  `Info` varchar(256) DEFAULT NULL,
  `berkas` varchar(128) DEFAULT NULL,
  `foto` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`id`, `tata_cara`, `periode_daftar`, `Info`, `berkas`, `foto`) VALUES
(7, '1162-1238-1-PB.pdf', '15 Juli - 16 Agustus 2020', 'halaman_awal.png', '10_1001@jama_2020_3151.pdf', 's-pengumuman.png');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) UNSIGNED NOT NULL,
  `Tanggal_Daftar` datetime DEFAULT CURRENT_TIMESTAMP,
  `Tingkat` enum('1','2','3') DEFAULT NULL,
  `Prodi` enum('Agribisnis Ternak Unggas','Usaha Perjalanan Wisata','Pemasaran') DEFAULT NULL,
  `Nama_Siswa` varchar(100) DEFAULT NULL,
  `Jenis_Kelamin` enum('Laki-laki','Perempuan') DEFAULT NULL,
  `Asal_Sekolah` varchar(50) DEFAULT NULL,
  `NISN` varchar(50) DEFAULT NULL,
  `No_Ijazah` varchar(50) DEFAULT NULL,
  `No_SKHUN` varchar(50) DEFAULT NULL,
  `No_UN` varchar(50) DEFAULT NULL,
  `NIK` varchar(50) DEFAULT NULL,
  `TTL` varchar(100) DEFAULT NULL,
  `Alamat_Tinggal` varchar(256) DEFAULT NULL,
  `Transportasi` enum('Jalan Kaki','Kendaraan Pribadi','Kendaraan Umum','Lainnya') DEFAULT NULL,
  `Jenis_Tinggal` enum('Bersama Orang Tua','Asrama','Kost','Panti Asuhan','Lainnya') DEFAULT NULL,
  `Rencana_Tinggal` enum('Bersama Orang Tua','Asrama','Kost','Panti Asuhan','Lainnya') DEFAULT NULL,
  `Ukuran_Pakaian` enum('S','M','L','XL','XXL') DEFAULT NULL,
  `No_HP` varchar(15) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Jenis_Bantuan` enum('Kartu Indonesia Pintar (KIP)','Katu Indonesia Sehat (KIS)','PKH','KPS') DEFAULT NULL,
  `No_KKS` varchar(50) DEFAULT NULL,
  `Nama_Ayah` varchar(100) DEFAULT NULL,
  `Lahir_Ayah` varchar(50) DEFAULT NULL,
  `Pekerjaan_Ayah` enum('Tidak Bekerja','Nelayan','Petani','Peternak','PNS/TNI/POLRI','Karyawan Swasta','Pedagang Kecil',' Wiraswasta','Wirausaha','Buruh','Pekerja Seni','Pensiunan','Lainnya') DEFAULT NULL,
  `Pendidikan_Ayah` enum('Tidak Sekolah','SD Sederajat','SMP Sederajat','SMA Sederajat','D1-D3','D4/S1','S2','S3') DEFAULT NULL,
  `Penghasilan_Ayah` enum('Kurang dari Rp.1.000.000','Rp.1.000.000 - Rp.2.000.000','Lebih dari Rp.2.000.000') DEFAULT NULL,
  `Nama_Ibu` varchar(100) DEFAULT NULL,
  `Lahir_Ibu` varchar(50) DEFAULT NULL,
  `Pekerjaan_Ibu` enum('Tidak Bekerja','Nelayan','Petani','Peternak','PNS/TNI/POLRI','Karyawan Swasta','Pedagang Kecil',' Wiraswasta','Wirausaha','Buruh','Pekerja Seni','Pensiunan','Lainnya') DEFAULT NULL,
  `Pendidikan_Ibu` enum('Tidak Sekolah','SD Sederajat','SMP Sederajat','SMA Sederajat','D1-D3','D4/S1','S2','S3') DEFAULT NULL,
  `Penghasilan_Ibu` enum('Kurang dari Rp.1.000.000','Rp.1.000.000 - Rp.2.000.000','Lebih dari Rp.2.000.000') DEFAULT NULL,
  `Nama_Wali` varchar(100) DEFAULT NULL,
  `Lahir_Wali` varchar(50) DEFAULT NULL,
  `Pekerjaan_Wali` enum('-','Tidak Bekerja','Nelayan','Petani','Peternak','PNS/TNI/POLRI','Karyawan Swasta','Pedagang Kecil',' Wiraswasta','Wirausaha','Buruh','Pekerja Seni','Pensiunan','Lainnya') DEFAULT NULL,
  `Pendidikan_Wali` enum('-','Tidak Sekolah','SD Sederajat','SMP Sederajat','SMA Sederajat','D1-D3','D4/S1','S2','S3') DEFAULT NULL,
  `Penghasilan_Wali` enum('-','Kurang dari Rp.1.000.000','Rp.1.000.000 - Rp.2.000.000','Lebih dari Rp.2.000.000') DEFAULT NULL,
  `Tinggi_Badan` varchar(5) DEFAULT NULL,
  `Berat_Badan` varchar(5) DEFAULT NULL,
  `Jarak_Sekolah` varchar(5) DEFAULT NULL,
  `Waktu_Tempuh` varchar(5) DEFAULT NULL,
  `Saudara_Kandung` varchar(2) DEFAULT NULL,
  `Prestasi_1` varchar(256) DEFAULT NULL,
  `Prestasi_2` varchar(256) DEFAULT NULL,
  `Prestasi_3` varchar(256) DEFAULT NULL,
  `Beasiswa_1` varchar(256) DEFAULT NULL,
  `Beasiswa_2` varchar(256) DEFAULT NULL,
  `Beasiswa_3` varchar(256) DEFAULT NULL,
  `Foto` varchar(256) DEFAULT NULL,
  `Akta_Lahir` varchar(50) DEFAULT NULL,
  `KK` varchar(50) DEFAULT NULL,
  `Raport` varchar(50) DEFAULT NULL,
  `KTP_Ayah` varchar(50) DEFAULT NULL,
  `KTP_Ibu` varchar(50) DEFAULT NULL,
  `Ijazah` varchar(50) DEFAULT NULL,
  `SKHUN` varchar(50) DEFAULT NULL,
  `Surat_Lulus` varchar(50) DEFAULT NULL,
  `status` enum('1','2','3') DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `Tanggal_Daftar`, `Tingkat`, `Prodi`, `Nama_Siswa`, `Jenis_Kelamin`, `Asal_Sekolah`, `NISN`, `No_Ijazah`, `No_SKHUN`, `No_UN`, `NIK`, `TTL`, `Alamat_Tinggal`, `Transportasi`, `Jenis_Tinggal`, `Rencana_Tinggal`, `Ukuran_Pakaian`, `No_HP`, `Email`, `Jenis_Bantuan`, `No_KKS`, `Nama_Ayah`, `Lahir_Ayah`, `Pekerjaan_Ayah`, `Pendidikan_Ayah`, `Penghasilan_Ayah`, `Nama_Ibu`, `Lahir_Ibu`, `Pekerjaan_Ibu`, `Pendidikan_Ibu`, `Penghasilan_Ibu`, `Nama_Wali`, `Lahir_Wali`, `Pekerjaan_Wali`, `Pendidikan_Wali`, `Penghasilan_Wali`, `Tinggi_Badan`, `Berat_Badan`, `Jarak_Sekolah`, `Waktu_Tempuh`, `Saudara_Kandung`, `Prestasi_1`, `Prestasi_2`, `Prestasi_3`, `Beasiswa_1`, `Beasiswa_2`, `Beasiswa_3`, `Foto`, `Akta_Lahir`, `KK`, `Raport`, `KTP_Ayah`, `KTP_Ibu`, `Ijazah`, `SKHUN`, `Surat_Lulus`, `status`) VALUES
(1, '0000-00-00 00:00:00', '1', 'Pemasaran', 'Pramadita Sielda Dewi', 'Perempuan', 'SMPN 45 Kota Bandung', '928472347347', 'DN-82875438754', NULL, NULL, '327590303857', 'Bandung, 24 Oktober 1999', 'Jl.Cikaso No.197', 'Jalan Kaki', 'Bersama Orang Tua', 'Bersama Orang Tua', 'M', '087566777999', 'pramaditasielda@gmail.com', NULL, '', 'Yadi', '1966', 'Pensiunan', 'SMA Sederajat', 'Kurang dari Rp.1.000.000', 'Yani', '1972', 'Tidak Bekerja', 'SMA Sederajat', 'Lebih dari Rp.2.000.000', '', '', 'Tidak Bekerja', 'Tidak Sekolah', 'Kurang dari Rp.1.000.000', '158', '55', '1,3', '30', '1', '', '', '', '', '', '', 'lamb.png', '0', '0', '', '', '', '', '0', '', '3'),
(64, '2020-07-26 18:45:38', NULL, NULL, 'coba', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'KK-200726-305c9b19eb.png', '0', '0', '', '', '', '', '0', '', '3'),
(67, '2020-07-31 15:01:21', NULL, NULL, 'Hani Nafisa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'lana.jpg', '0', '0', '', '', '', '', '0', '', '2'),
(69, '2020-08-22 17:50:13', NULL, NULL, 'Wani', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'buku.png', '0', '0', '', '', '', '', '0', '', '2'),
(70, '2020-08-22 17:56:03', '', 'Usaha Perjalanan Wisata', 'Wayla Waliah Nurohmah', 'Perempuan', 'SMP Tiara Citra 2', '7567567', '', NULL, 'T567RFTGR6546456', '5678678', 'Bandung 12 Oktober 2007', '8hujkyukh', 'Kendaraan Umum', 'Asrama', 'Asrama', 'S', '98796876', 'waliyah@gmail.com', NULL, '', 'Uyun', '1979', 'Peternak', 'SMP Sederajat', 'Lebih dari Rp.2.000.000', 'Nurina', '1980', 'PNS/TNI/POLRI', 'SMP Sederajat', 'Rp.1.000.000 - Rp.2.000.000', '', '', 'Tidak Bekerja', 'Tidak Sekolah', 'Kurang dari Rp.1.000.000', '3467', '56', '6575', '546', '56', '', '', '', '', '', '', 'book1.png', '0', '0', '', '', '', '', '0', '', '3'),
(71, '2020-08-24 15:52:13', '2', 'Usaha Perjalanan Wisata', 'dita', 'Perempuan', 'rthyry', '6756756', '', NULL, 'YTRUGHGH758575', '75677', 'Bandung 12 Oktober 2007', 'jhhfgjgh', 'Kendaraan Pribadi', 'Bersama Orang Tua', 'Asrama', 'M', '6575756', 'pramaditasiede@gmail.com', NULL, '', '8i', '1989', 'Petani', 'SMP Sederajat', 'Rp.1.000.000 - Rp.2.000.000', '5465465', '411242', 'Wirausaha', 'SD Sederajat', 'Rp.1.000.000 - Rp.2.000.000', '', '', 'Tidak Bekerja', 'Tidak Sekolah', 'Kurang dari Rp.1.000.000', '12.7', '67.8', '56.8', '67.8', '65', '', '', '', '', '', '', 'Screenshot_(12).png', '0', '0', '', '', '', '', '0', '', '3'),
(78, '2020-08-24 20:32:10', NULL, 'Usaha Perjalanan Wisata', 'ity7i', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'lamb.png', 'card.jpg', '', '', '', NULL, 'book.jpg', NULL, '3'),
(80, '2020-08-24 22:56:33', '1', 'Usaha Perjalanan Wisata', 'ilkjlljk', 'Laki-laki', 'hggjtuyu', '65775676', '675657', 'tyruty', '75756', '75765', 'hfgj', 'jghjgj', 'Kendaraan Umum', 'Bersama Orang Tua', 'Kost', 'M', '756658586', 'jjhkhkjh@gmail.com', 'PKH', 'j657658', '75756', '25435', 'Nelayan', 'SMP Sederajat', 'Kurang dari Rp.1.000.000', '65466', '6465', 'Pensiunan', 'SMP Sederajat', 'Kurang dari Rp.1.000.000', 'hgjgj', '547467', 'Lainnya', 'Tidak Sekolah', 'Kurang dari Rp.1.000.000', '564', '65', '646', '65', '54', 'hgjghj', 'kghkh', 'jhkhjk', 'kjhk', 'kjhj', 'khjkhk', 'Screenshot_(9).png', 'Screenshot_(33).png', 'Screenshot_(30).png', 'Screenshot_(34).png', 'Screenshot_(8).png', 'Screenshot_(25).png', 'Screenshot_(10).png', 'Screenshot_(32).png', 'Screenshot_(11).png', '1'),
(81, '2020-08-24 23:07:47', '2', '', 'thjmvnvnh', 'Perempuan', 'hjv', '675585', 'hgfhfh', 'eree', '856', '85687', '87686', '7587', 'Kendaraan Pribadi', 'Bersama Orang Tua', 'Bersama Orang Tua', 'M', '7785', 'iuykjl@gmail.com', 'Kartu Indonesia Pintar (KIP)', 'rererr', 'iii8', '78', 'Petani', 'SD Sederajat', 'Rp.1.000.000 - Rp.2.000.000', 'ttyy', '786', 'Nelayan', 'Tidak Sekolah', 'Kurang dari Rp.1.000.000', 'ghfj', '6757', 'Petani', 'SD Sederajat', 'Rp.1.000.000 - Rp.2.000.000', '6575', '67', '765', '76', '76', 'jhkkjk', 'kjkh', 'jhkjhk', 'jhkhjk', 'hkjhkh', 'khkj', 'ikon.jpeg', 'buku.png', 'pen-exam.png', 'persegipanjang.jpg', 'img_458524.png', 'bc950a88e182b515f98d3a0b276a04f1.jpg', 'lingkaran.png', 'pen-exam.png', '', '1'),
(82, '2020-08-24 23:46:15', '3', 'Agribisnis Ternak Unggas', 'Man', 'Laki-laki', 'SMP Tiara Citra 2', '34334', '', '', '678', '54646', 'Bandung 12 Oktober 2007', 'kjhkljkl', 'Jalan Kaki', 'Panti Asuhan', 'Asrama', 'S', '89908', 'ljljlj@gmail.com', 'Katu Indonesia Sehat (KIS)', 'fbgvnvb', 'uiuoi', '798797', 'Nelayan', 'Tidak Sekolah', 'Kurang dari Rp.1.000.000', '978', '899', 'Nelayan', 'SMP Sederajat', 'Kurang dari Rp.1.000.000', '', '', NULL, '', '', '6465', '6757', '6565', '7657', '75', 'khjkhj', 'kjhkh', 'khjk', 'hkh', 'khk', 'khjk', 'lingkaran.png', 'persegi.png', 'persegipanjang.jpg', 'keranjang.png', 'persegipanjang.jpg', 'book1.png', '', '', '', '2'),
(83, '2020-08-27 20:53:30', '1', '', 'nasya', 'Perempuan', 'SMP Tiara Citra 2', '1234343', '5435', '543534', '5345', '534543', 'gfgfhfg', '56hgfhfgj', 'Jalan Kaki', 'Asrama', 'Asrama', 'M', '565476547', '7546756@gmail.com', NULL, 'uyuytu', 'fgh', '35235', 'Petani', 'SMA Sederajat', 'Rp.1.000.000 - Rp.2.000.000', '45354', '12332', 'Wirausaha', 'SD Sederajat', 'Kurang dari Rp.1.000.000', '', '', NULL, NULL, NULL, '12', '432', '321', '43234', '23', '', '', '', '', '', '', 'lana.jpg', 'WhatsApp_Image_2019-05-12_at_20_13_53.jpeg', 'AKTA.jpg', 'Rapot.png', 'KTP.jpg', 'KTP1.jpg', 'IJAZAH.jpg', 'SKHUN.jpg', 'SULUS.png', '1'),
(84, '2020-08-27 20:58:01', '1', '', 'narnia', 'Laki-laki', 'SMP Luar', '546', '56464', '', '6546', '56546', 'yyt', 'utyu', 'Jalan Kaki', 'Asrama', 'Asrama', 'S', '65756756', 'email@gmail.com', 'Kartu Indonesia Pintar (KIP)', 'dsrfet', 'rtet', '5465', 'Nelayan', 'SD Sederajat', 'Kurang dari Rp.1.000.000', 'hgj', '6757', 'Nelayan', 'SMP Sederajat', 'Rp.1.000.000 - Rp.2.000.000', '675yt', '6756', 'Pensiunan', 'D4/S1', 'Kurang dari Rp.1.000.000', '54465', '564', '65465', '654', '65', 'hjygujyt', 'yiy', 'jhgj', 'ghjhg', 'jgj', 'hjghj', 'Screenshot_(21).png', 'Screenshot_(24).png', 'Screenshot_(25).png', 'Screenshot_(11).png', 'Screenshot_(28).png', 'Screenshot_(29).png', '', '', '', '1'),
(87, '2020-08-27 21:11:07', NULL, '', 'ertt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(90, '2020-08-27 21:13:48', '', 'Usaha Perjalanan Wisata', 'iuohlo', 'Laki-laki', ',kjlj', '-1', '', '', 'l;kl;', ';kl;l', ';k;l', ';k;l', 'Jalan Kaki', 'Bersama Orang Tua', 'Panti Asuhan', 'S', '', 'jkjkjokoko@gmail.com', 'Kartu Indonesia Pintar (KIP)', 'lklk', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(93, '2020-08-27 21:33:21', '1', '', 'karima', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kartu Indonesia Pintar (KIP)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(94, '2020-08-27 21:34:34', '2', '', 'dita', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kartu Indonesia Pintar (KIP)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2'),
(95, '2020-08-28 00:24:20', '1', 'Agribisnis Ternak Unggas', 'Renaldi', 'Laki-laki', 'SMP Luar', '2545354', 'frtdfgt5654765', NULL, '6786y6h', '676575', 'Bandung 12 Oktober 2007', 'jghjhjhk', 'Jalan Kaki', 'Bersama Orang Tua', 'Bersama Orang Tua', 'S', '0986878', 'khjkuk@gmail.com', 'Kartu Indonesia Pintar (KIP)', '676yju', 'uytut', '6778', 'Nelayan', 'Tidak Sekolah', 'Kurang dari Rp.1.000.000', 'gsdsfg', '6768', 'Tidak Bekerja', 'Tidak Sekolah', 'Kurang dari Rp.1.000.000', 'uyyuiyi', '78678', 'Petani', 'Tidak Sekolah', 'Kurang dari Rp.1.000.000', '165', '123', '6', '23', '7', '', '', '', '', '', '', 'Screenshot_(12).png', 'Screenshot_(23).png', 'Screenshot_(33).png', 'Screenshot_(30).png', 'Screenshot_(28)1.png', 'Screenshot_(19).png', 'Screenshot_(32).png', 'Screenshot_(32)1.png', 'Screenshot_(2).png', '1'),
(96, '2020-08-28 01:17:51', '2', 'Agribisnis Ternak Unggas', 'tyry', 'Perempuan', 'htrhr', '6757', '567', '677', '7657', '7567', '657567', 'yjtyj', 'Kendaraan Pribadi', 'Bersama Orang Tua', 'Asrama', 'S', '17685667', 'khjkhk@gmail.com', 'PKH', 'kyu', 'uiy', '76867', 'Peternak', 'SMP Sederajat', 'Kurang dari Rp.1.000.000', 'Nurina876', '876', 'Peternak', 'SMP Sederajat', 'Kurang dari Rp.1.000.000', '876', '876', 'Pensiunan', 'SD Sederajat', 'Rp.1.000.000 - Rp.2.000.000', '78', '76', '87', '76', '87', 'khhjk', 'kjhk', 'khjk', 'kjhk', 'kjh', 'kjh', 's-pengumuman.png', 'halaman_awal_2.png', 's-login.png', 'info_ppdb.png', 's-akun_siswa.png', 's-akun_siswa.png', 's-formulir_pendaftaran.png', '', '', '1'),
(97, '2020-08-28 01:26:45', '1', 'Agribisnis Ternak Unggas', 'try', 'Laki-laki', 'yty', '77566', '', '', '7657', '765', '765', 'gfhfj', 'Jalan Kaki', 'Asrama', 'Panti Asuhan', 'L', '67658', '868@gmail.com', '', '', 'htf', '786', 'Petani', 'D1-D3', 'Kurang dari Rp.1.000.000', '68', '878', 'Nelayan', 'SMP Sederajat', 'Kurang dari Rp.1.000.000', '', '', NULL, '', '', '76', '76', '76', '76', '76', '', '', '', '', '', '', '3x4.jpg', 'c4f38935c1575d89958f852440276129.jpg', 'forests-why-matter_63516847.jpg', 'images_(1).jpg', 'images.jpg', 'lana.jpg', '', '', '', '1'),
(98, '2020-08-28 01:43:38', NULL, NULL, 'narnia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Sekolah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '1'),
(101, '2020-08-28 01:46:19', NULL, NULL, 'coba', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'D4/S1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(108, '2020-08-28 01:53:29', '1', 'Pemasaran', 'jygj', 'Perempuan', 'khg', '77', '', NULL, '897', '987', 'iuy', 'hk', 'Jalan Kaki', 'Bersama Orang Tua', 'Asrama', 'M', '7989', '897@gmail.com', '', '', 'jy', '78', 'Buruh', 'SD Sederajat', 'Lebih dari Rp.2.000.000', '786', '876', 'Nelayan', 'SD Sederajat', 'Rp.1.000.000 - Rp.2.000.000', '', '', '', '', '', '87', '87', '86', '87', '78', '', '', '', '', '', '', 'lana1.jpg', 'c4f38935c1575d89958f8524402761291.jpg', 'forests-why-matter_635168471.jpg', 'images_(1)1.jpg', '3x4.jpg', 'images.jpg', '', '', '', '1'),
(109, '2020-08-28 02:08:47', '1', 'Pemasaran', 'FDS', 'Laki-laki', 'FSD', '45345', '', '', '5435', '435', '543', 'HGNGJH', 'Kendaraan Pribadi', 'Kost', 'Kost', 'S', '657', 'HGTRT@gmail.com', '', '', '5445', '45', 'Petani', 'SMP Sederajat', 'Lebih dari Rp.2.000.000', 'TR445T', '54', 'Tidak Bekerja', 'Tidak Sekolah', 'Kurang dari Rp.1.000.000', '', '', NULL, '', '', '54', '54', '45', '45', '54', '', '', '', '', '', '', 'Screenshot_(14).png', 'Screenshot_(13).png', 'Screenshot_(16).png', 'Screenshot_(17).png', 'book1.png', 'Screenshot_(17).png', '', '', '', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `oc`
--
ALTER TABLE `oc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oc`
--
ALTER TABLE `oc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
