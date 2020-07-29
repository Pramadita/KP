-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2020 at 06:24 PM
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
  `Info` varchar(256) DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`id`, `tata_cara`, `periode_daftar`, `Info`) VALUES
(7, 'Tugas_Besar_(UAS_-_SisTer).pdf', '13 Juli - 14 Agustus 2020', 'default.jpg');

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
  `Akta_Lahir` varchar(256) NOT NULL,
  `KK` varchar(256) DEFAULT NULL,
  `Bio_Raport` varchar(256) DEFAULT NULL,
  `KTP_Ayah` varchar(256) DEFAULT NULL,
  `KTP_Ibu` varchar(256) DEFAULT NULL,
  `Ijazah_SMP` varchar(256) DEFAULT NULL,
  `SKHUN_SMP` varchar(256) DEFAULT NULL,
  `Surat_Lulus_SMP` varchar(256) DEFAULT NULL,
  `KPS` varchar(256) DEFAULT NULL,
  `status` varchar(5) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `Tanggal_Daftar`, `Tingkat`, `Prodi`, `Nama_Siswa`, `Jenis_Kelamin`, `Asal_Sekolah`, `NISN`, `No_Ijazah`, `No_SKHUN`, `No_UN`, `NIK`, `TTL`, `Alamat_Tinggal`, `Transportasi`, `Jenis_Tinggal`, `Rencana_Tinggal`, `Ukuran_Pakaian`, `No_HP`, `Email`, `Jenis_Bantuan`, `No_KKS`, `Nama_Ayah`, `Lahir_Ayah`, `Pekerjaan_Ayah`, `Pendidikan_Ayah`, `Penghasilan_Ayah`, `Nama_Ibu`, `Lahir_Ibu`, `Pekerjaan_Ibu`, `Pendidikan_Ibu`, `Penghasilan_Ibu`, `Nama_Wali`, `Lahir_Wali`, `Pekerjaan_Wali`, `Pendidikan_Wali`, `Penghasilan_Wali`, `Tinggi_Badan`, `Berat_Badan`, `Jarak_Sekolah`, `Waktu_Tempuh`, `Saudara_Kandung`, `Prestasi_1`, `Prestasi_2`, `Prestasi_3`, `Beasiswa_1`, `Beasiswa_2`, `Beasiswa_3`, `Akta_Lahir`, `KK`, `Bio_Raport`, `KTP_Ayah`, `KTP_Ibu`, `Ijazah_SMP`, `SKHUN_SMP`, `Surat_Lulus_SMP`, `KPS`, `status`) VALUES
(1, '0000-00-00 00:00:00', '1', 'Pemasaran', 'Pramadita Sielda Dewi', 'Perempuan', 'SMPN 45 Kota Bandung', '928472347347', 'DN-82875438754', NULL, NULL, '327590303857', 'Bandung, 24 Oktober 1999', 'Jl.Cikaso No.197', 'Jalan Kaki', 'Bersama Orang Tua', 'Bersama Orang Tua', 'M', '087566777999', 'pramaditasielda@gmail.com', NULL, '', 'Yadi', '1966', 'Pensiunan', 'SMA Sederajat', 'Kurang dari Rp.1.000.000', 'Yani', '1972', 'Tidak Bekerja', 'SMA Sederajat', 'Lebih dari Rp.2.000.000', '', '', 'Tidak Bekerja', 'Tidak Sekolah', 'Kurang dari Rp.1.000.000', '158', '55', '1,3', '30', '1', '', '', '', '', '', '', 'Akta-200729-b1c6d8211d.jpg', 'KK-200729-e148f2c572.jpg', 'Raport-200729-1451178db8.png', 'KTP_Ayah-200729-fdfe1831e3.jpg', 'KTP_Ibu-200729-f1f6350ef4.jpg', 'Ijazah-200729-1054f0d05a.png', 'SKHUN_SMP-200729-ec345bfce9.jpg', 'Surat_Lulus_SMP-200728-4cef753f61.png', 'KPS-200729-cbf7a0bc1d.jpg', '2'),
(7, '0000-00-00 00:00:00', '1', 'Usaha Perjalanan Wisata', 'Vania Dinda', 'Perempuan', 'SMP Plus Parahiyangan', '987463776476', NULL, NULL, NULL, '327646483888', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', NULL, '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Akta-200726-aa8eb33952.jpg', 'KK-200726-2adcd139e5', 'Raport-200726-a7dae315c8', 'KTP_Ayah-200726-48b47628ab', 'KTP_Ibu-200726-e1416d8bcf', 'Ijazah-200726-c9a534f8c0', 'SKHUN_SMP-200726-b3097fafd3', 'Surat_Lulus_SMP-200726-e6ba30c0da', 'KPS-200726-b014625843', '2'),
(8, '0000-00-00 00:00:00', '1', 'Pemasaran', 'Damadika Husein Sagara', 'Laki-laki', 'SMPN 2 Majalengka', '9834858875487', NULL, NULL, NULL, '324545465656', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', NULL, '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, '2'),
(9, '0000-00-00 00:00:00', '1', 'Pemasaran', 'Siti Auliya Syarif', 'Perempuan', 'SMPN 1 Majalengka', '98492482475', NULL, NULL, NULL, '32454655666', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', NULL, '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, '1'),
(10, '0000-00-00 00:00:00', '1', 'Usaha Perjalanan Wisata', 'Kirana Dwinanda ', 'Perempuan', 'SMP Tiara Citra 2', '9484873262625', '', NULL, NULL, '3275433454555', '', '', 'Jalan Kaki', 'Bersama Orang Tua', 'Bersama Orang Tua', 'S', '', '', NULL, '', '', '', 'Tidak Bekerja', 'Tidak Sekolah', 'Kurang dari Rp.1.000.000', '', '', 'Tidak Bekerja', 'Tidak Sekolah', 'Kurang dari Rp.1.000.000', '', '', 'Tidak Bekerja', 'Tidak Sekolah', 'Kurang dari Rp.1.000.000', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2'),
(11, '0000-00-00 00:00:00', '1', 'Agribisnis Peternakan Unggas', 'Budiawan Kusuma Dana', 'Laki-laki', 'SMP Bani Adam', '9859458753847', NULL, NULL, NULL, '3274958587576', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', NULL, '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, '1'),
(12, '0000-00-00 00:00:00', '1', 'Pemasaran', 'Surya Nabawi', 'Laki-laki', 'SMPN 1 Majalengka', '984826346746', NULL, NULL, NULL, '3276454532222', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', NULL, '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, '1'),
(37, '0000-00-00 00:00:00', '2', 'Usaha Perjalanan Wisata', 'Dannia', '', '', '', NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '', '', NULL, '', NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, '1'),
(41, '0000-00-00 00:00:00', '1', 'Usaha Perjalanan Wisata', 'Nilam Sekar', 'Perempuan', 'SMPN 14 Kota Jakarta', '998548547857857', 'DN-UEUWR4URH8573', NULL, NULL, '325374858756545454', 'Kediri, 14 Agustus 2005', 'Jl. Bahagia Selamanya No. 78', 'Jalan Kaki', 'Asrama', 'Panti Asuhan', 'M', '084756645321', 'Nilams@gmail.com', NULL, '', 'Dodi Diansyah', '1970', 'Pedagang Kecil', 'SMA Sederajat', 'Rp.1.000.000 - Rp.2.000.000', 'Nining Ningsih', '1975', 'Pedagang Kecil', 'SMA Sederajat', 'Kurang dari Rp.1.000.000', '', '', NULL, NULL, NULL, '165', '58', '1,5', '45', '0', '', '', '', '', '', '', 'Akta-200724-f99e7904cf.png', 'KK-200724-43a6ff2cf1.png', 'Raport-200724-b684459e16.png', 'KTP_Ayah-200724-fd559f1203.png', 'KTP_Ibu-200724-6bd06a88be.png', 'Ijazah-200724-552810c1b7', 'SKHUN_SMP-200724-8b2d0d6686', 'Surat_Lulus_SMP-200724-50e2e6fe8f', 'KPS-200724-f0d75aa1c4', '1'),
(42, '0000-00-00 00:00:00', '2', 'Usaha Perjalanan Wisata', 'Renaldi Naufal Atmaja', 'Laki-laki', 'SMP Unggul Berdikari', '98742762645234', '-', '-', '-', '3239565654747', 'Bandung, 19 Oktober 2005', 'Jl.Perjuangan 5 RT.08 RW.09 Kel.Sukaraja', 'Kendaraan Umum', 'Asrama', 'Bersama Orang Tua', 'XL', '08974637282744', 'naufalatmaja@gmail.com', NULL, '', 'Budiawan Randi', '1988', 'Karyawan Swasta', 'D1-D3', 'Lebih dari Rp.2.000.000', 'Putriani Narni', '1988', 'Tidak Bekerja', 'SMA Sederajat', 'Rp.1.000.000 - Rp.2.000.000', '', '', NULL, NULL, NULL, '180', '70', '1', '15', '1', '', '', '', '', '', '', 'ikon.jpeg', 'Screenshot (1).png', 'Screenshot (9).png', 'Screenshot (11).png', 'Screenshot (8).png', '', '', '', '', '1'),
(44, '2020-05-16 18:46:02', '1', 'Usaha Perjalanan Wisata', 'Niadinda', 'Perempuan', 'SMPN 90 Kota Jakarta', '98321434', '', NULL, NULL, '32342534', 'Jakarta, 15 Maret 2007', 'Jl.Kemanggisan No.5', 'Kendaraan Pribadi', 'Bersama Orang Tua', 'Kost', 'L', '09482425', 'niadi@gmail.com', NULL, '', 'Maulana Adi', '1985', 'Pedagang Kecil', 'SMA Sederajat', 'Rp.1.000.000 - Rp.2.000.000', 'Mulyawati', '1988', '', 'D1-D3', 'Lebih dari Rp.2.000.000', '', '', '', '', '', '158', '56', '1', '30', '3', '', '', '', '', '', '', 'c4f38935c1575d89958f852440276129.jpg', 'forests-why-matter_63516847.jpg', 'images (1).jpg', 'lana.jpg', 'images.jpg', '', '', '', '', '2'),
(45, '2020-05-16 19:18:49', '1', 'Usaha Perjalanan Wisata', 'Okigawa', 'Laki-laki', 'SMPN 1 Tanggerang', '974634', '', NULL, NULL, '97685865', 'Hokaido, 16 Januari 2008', 'Jl.Duta Pemangga 1', 'Jalan Kaki', 'Bersama Orang Tua', 'Asrama', 'M', '098372423', 'okig@gmail.com', NULL, '', 'Wardana', '1980', 'Nelayan', 'S2', 'Lebih dari Rp.2.000.000', 'Mizaki Takara', '1983', 'Nelayan', 'D4/S1', 'Lebih dari Rp.2.000.000', '', '', '', '', '', '190', '69', '1', '20', '-', '', '', '', '', '', '', 'c4f38935c1575d89958f852440276129.jpg', 'forests-why-matter_63516847.jpg', 'images (1).jpg', 'images.jpg', 'lana.jpg', '', '', '', '', NULL),
(47, '2020-05-17 21:03:49', '1', 'Usaha Perjalanan Wisata', 'Danniatur', 'Laki-laki', 'turu', 'utrt', '', NULL, NULL, 'uyr', 'turu', 'tur', 'Jalan Kaki', 'Bersama Orang Tua', 'Asrama', 'S', 'tftfh', 'y5546u7567@gmail.com', NULL, 'trytruy', 'tyruyr', 'urtuytr', 'Petani', 'SD Sederajat', 'Rp.1.000.000 - Rp.2.000.000', 'uytut', 'ytu', 'Tidak Bekerja', 'Tidak Sekolah', 'Kurang dari Rp.1.000.000', '', '', '', '', '', 'uyt', 'ytu', 'uyt', 'uytu', 'uy', '', '', '', '', '', '', '0f948ef9244e8de6c597c26dba806aa1.jpg', '83519.png', 'card.jpg', 'android.png', 'car.jpg', '', '', '', '', NULL),
(48, '2020-05-17 21:09:19', '2', 'Agribisnis Peternakan Unggas', 'Dwinanda', 'Laki-laki', 'rwe', 'trete', '', NULL, NULL, 'gfd', 'gfdg', 'fgd', 'Kendaraan Umum', 'Asrama', 'Bersama Orang Tua', 'M', 'gfd', 'iouoe@gmail.com', NULL, 'iuou', 'hyj', 'jhg', 'Nelayan', 'SD Sederajat', 'Rp.1.000.000 - Rp.2.000.000', 'jhg', 'hjgj', 'Tidak Bekerja', 'SD Sederajat', 'Rp.1.000.000 - Rp.2.000.000', '', '', '', '', '', 'jhg', 'jhg', 'jhg', 'jhg', 'hj', '', '', '', '', '', '', '9c319328e5f938d9634ebc64219d4be6.jpg', 'android.png', '3981717-karaoke-png-background-image-peoplepngcom-karaoke-png-640_642_preview.png', 'persegi.png', 'lamb.png', '', '', '', '', NULL),
(49, '2020-05-18 07:05:25', '1', 'Usaha Perjalanan Wisata', 'JYUJ', 'Laki-laki', 'HJ', 'HJ', 'fgh', NULL, NULL, 'fgh', 'hf', 'ghgf', 'Kendaraan Umum', 'Asrama', 'Kost', 'XL', 'hgh', 'iyu@gmail.com', NULL, 'jhku', 'jki', 'ik', 'Petani', 'Tidak Sekolah', 'Rp.1.000.000 - Rp.2.000.000', 'iku', 'kiu', 'Buruh', 'D4/S1', 'Kurang dari Rp.1.000.000', '', '', '', '', '', 'i', 'kiu', 'kiu', 'kiu', 'iu', '', '', '', '', '', '', 'dokumen-200518-522320939e', 'dokumen-200518-522320939e', 'dokumen-200518-522320939e', 'dokumen-200518-522320939e', 'dokumen-200518-522320939e', 'dokumen-200518-522320939e', 'dokumen-200518-522320939e', 'dokumen-200518-522320939e', 'dokumen-200518-522320939e', NULL),
(50, '2020-05-18 07:07:39', '1', 'Usaha Perjalanan Wisata', 'JYUJ', 'Laki-laki', 'HJ', 'HJ', 'fgh', NULL, NULL, 'fgh', 'hf', 'ghgf', 'Kendaraan Umum', 'Asrama', 'Kost', 'XL', 'hgh', 'iyu@gmail.com', NULL, 'jhku', 'jki', 'ik', 'Petani', 'Tidak Sekolah', 'Rp.1.000.000 - Rp.2.000.000', 'iku', 'kiu', 'Buruh', 'D4/S1', 'Kurang dari Rp.1.000.000', '', '', '', '', '', 'i', 'kiu', 'kiu', 'kiu', 'iu', '', '', '', '', '', '', 'dokumen-200518-077694ba86', 'dokumen-200518-077694ba86', 'dokumen-200518-077694ba86', 'dokumen-200518-077694ba86', 'dokumen-200518-077694ba86', 'dokumen-200518-077694ba86', 'dokumen-200518-077694ba86', 'dokumen-200518-077694ba86', 'dokumen-200518-077694ba86', NULL),
(60, '2020-07-22 19:26:51', NULL, NULL, 'Pramadita', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(61, '2020-07-22 19:51:51', NULL, NULL, 'Kiran', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Akta-200725-7d5e83fc3d.png', 'KK-200725-f2d9b54463', 'Raport-200725-9c3ca5c142', 'KTP_Ayah-200725-0dd6168ca5', 'KTP_Ibu-200725-8fac78abfa', 'Ijazah-200725-4293564004', 'SKHUN_SMP-200725-d8835e1024', 'Surat_Lulus_SMP-200725-8eef5ab2e3', 'KPS-200725-a3ddca8d4c', '1'),
(62, '2020-07-25 20:03:16', NULL, NULL, 'tata', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Akta-200725-64a44daab1.png', 'KK-200725-74c3787f11.png', 'Raport-200725-6e8a030e29.png', 'KTP_Ayah-200725-76ef0610ce.png', 'KTP_Ibu-200725-d43f5d10af.png', 'Ijazah-200725-41a5f415eb', 'SKHUN_SMP-200725-b8c86c316b', 'Surat_Lulus_SMP-200725-39af8a0500', 'KPS-200725-3cd77f3cf5', '1'),
(63, '2020-07-26 17:16:42', NULL, NULL, 'Nayla', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Akta-200726-4a775992f0.jpg', 'KK-200726-c4795ad8a1', 'Raport-200726-07afff9d61', 'KTP_Ayah-200726-7336977f36', 'KTP_Ibu-200726-ee14439f44', 'Ijazah-200726-e6f546dc6c', 'SKHUN_SMP-200726-379f27f4f6', 'Surat_Lulus_SMP-200726-15f14cc1b7', 'KPS-200726-f1f096a2ec', '1'),
(64, '2020-07-26 18:45:38', NULL, NULL, 'coba', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Akta-200726-1edb543d91.jpg', 'KK-200726-305c9b19eb.jpg', 'Raport-200726-c5f0f79eb0.png', 'KTP_Ayah-200726-389b852931.jpg', 'KTP_Ibu-200726-5294cfd607.jpg', 'Ijazah-200726-2bd7d5dd6c', 'SKHUN_SMP-200726-a13b454ea6', 'Surat_Lulus_SMP-200726-089c3496c4', 'KPS-200726-979f4bd550', '1');

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

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
