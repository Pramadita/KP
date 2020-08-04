-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2020 at 12:08 PM
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
(1, '2', '2020-06-19 16:11:01');

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE `sekolah` (
  `id` int(11) NOT NULL,
  `tata_cara` varchar(256) NOT NULL DEFAULT 'default.pdf',
  `periode_daftar` varchar(128) NOT NULL,
  `Info` varchar(256) DEFAULT 'default.jpg',
  `berkas` varchar(128) DEFAULT NULL,
  `foto` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`id`, `tata_cara`, `periode_daftar`, `Info`, `berkas`, `foto`) VALUES
(7, 'urgent_need_to_develop_evidencebased_selfhelp_interventions_for_mental_health_of_healthcare_workers_in_covid19_pandemic.pdf', '14 Juli - 16 Agustus 2020', 'default.jpg', '10_1001@jama_2020_3151.pdf', 'lana.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) UNSIGNED NOT NULL,
  `Tanggal_Daftar` datetime DEFAULT CURRENT_TIMESTAMP,
  `Tingkat` enum('1','2','3') DEFAULT NULL,
  `Prodi` enum('Agribisnis Peternakan Unggas','Usaha Perjalanan Wisata','Pemasaran') DEFAULT NULL,
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
  `Berkas` varchar(256) DEFAULT NULL,
  `Foto` varchar(256) DEFAULT NULL,
  `status` varchar(5) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `Tanggal_Daftar`, `Tingkat`, `Prodi`, `Nama_Siswa`, `Jenis_Kelamin`, `Asal_Sekolah`, `NISN`, `No_Ijazah`, `No_SKHUN`, `No_UN`, `NIK`, `TTL`, `Alamat_Tinggal`, `Transportasi`, `Jenis_Tinggal`, `Rencana_Tinggal`, `Ukuran_Pakaian`, `No_HP`, `Email`, `Jenis_Bantuan`, `No_KKS`, `Nama_Ayah`, `Lahir_Ayah`, `Pekerjaan_Ayah`, `Pendidikan_Ayah`, `Penghasilan_Ayah`, `Nama_Ibu`, `Lahir_Ibu`, `Pekerjaan_Ibu`, `Pendidikan_Ibu`, `Penghasilan_Ibu`, `Nama_Wali`, `Lahir_Wali`, `Pekerjaan_Wali`, `Pendidikan_Wali`, `Penghasilan_Wali`, `Tinggi_Badan`, `Berat_Badan`, `Jarak_Sekolah`, `Waktu_Tempuh`, `Saudara_Kandung`, `Prestasi_1`, `Prestasi_2`, `Prestasi_3`, `Beasiswa_1`, `Beasiswa_2`, `Beasiswa_3`, `Berkas`, `Foto`, `status`) VALUES
(1, '0000-00-00 00:00:00', '1', 'Pemasaran', 'Pramadita Sielda Dewi', 'Perempuan', 'SMPN 45 Kota Bandung', '928472347347', 'DN-82875438754', NULL, NULL, '327590303857', 'Bandung, 24 Oktober 1999', 'Jl.Cikaso No.197', 'Jalan Kaki', 'Bersama Orang Tua', 'Bersama Orang Tua', 'M', '087566777999', 'pramaditasielda@gmail.com', NULL, '', 'Yadi', '1966', 'Pensiunan', 'SMA Sederajat', 'Kurang dari Rp.1.000.000', 'Yani', '1972', 'Tidak Bekerja', 'SMA Sederajat', 'Lebih dari Rp.2.000.000', '', '', 'Tidak Bekerja', 'Tidak Sekolah', 'Kurang dari Rp.1.000.000', '158', '55', '1,3', '30', '1', '', '', '', '', '', '', 'Berkas 1.pdf', 'lana1.jpg', '2'),
(8, '0000-00-00 00:00:00', '1', 'Pemasaran', 'Damadika Husein Sagara', 'Laki-laki', 'SMPN 2 Majalengka', '9834858875487', NULL, NULL, NULL, '324545465656', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', NULL, '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '2'),
(9, '0000-00-00 00:00:00', '1', 'Pemasaran', 'Siti Auliya Syarif', 'Perempuan', 'SMPN 1 Majalengka', '98492482475', NULL, NULL, NULL, '32454655666', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', NULL, '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '1'),
(10, '0000-00-00 00:00:00', '1', 'Usaha Perjalanan Wisata', 'Kirana Dwinanda ', 'Perempuan', 'SMP Tiara Citra 2', '9484873262625', '', NULL, NULL, '3275433454555', '', '', 'Jalan Kaki', 'Bersama Orang Tua', 'Bersama Orang Tua', 'S', '', '', NULL, '', '', '', 'Tidak Bekerja', 'Tidak Sekolah', 'Kurang dari Rp.1.000.000', '', '', 'Tidak Bekerja', 'Tidak Sekolah', 'Kurang dari Rp.1.000.000', '', '', 'Tidak Bekerja', 'Tidak Sekolah', 'Kurang dari Rp.1.000.000', '', '', '', '', '', '', '', '', '', '', '', '', '', '2'),
(12, '0000-00-00 00:00:00', '1', 'Pemasaran', 'Surya Nabawi', 'Laki-laki', 'SMPN 1 Majalengka', '984826346746', NULL, NULL, NULL, '3276454532222', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', NULL, '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '1'),
(37, '0000-00-00 00:00:00', '2', 'Usaha Perjalanan Wisata', 'Dannia', '', '', '', NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', NULL, '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '1'),
(64, '2020-07-26 18:45:38', NULL, NULL, 'coba', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Berkas 2.pdf', 'KK-200726-305c9b19eb.png', '1'),
(66, '2020-07-31 14:55:10', NULL, NULL, 'Tari Nurmarani', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pendahuluan.docx', '9c319328e5f938d9634ebc64219d4be6.jpg', '1'),
(67, '2020-07-31 15:01:21', NULL, NULL, 'Hani Nafisa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '01b.pdf', 'lana.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `REG` varchar(128) NOT NULL,
  `Tingkat` varchar(128) NOT NULL,
  `Prodi` varchar(128) NOT NULL,
  `Nama_Siswa` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `REG`, `Tingkat`, `Prodi`, `Nama_Siswa`) VALUES
(1, 'ATM', '1', 'Agribisnis Peternakan Unggas', 'SWAD');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
