-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 11, 2016 at 02:41 PM
-- Server version: 5.5.47-0+deb8u1
-- PHP Version: 5.6.19-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `admin_userdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `datapasien`
--

CREATE TABLE IF NOT EXISTS `datapasien` (
  `nocm` varchar(10) NOT NULL,
  `namapasien` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datapasien`
--

INSERT INTO `datapasien` (`nocm`, `namapasien`) VALUES
('16015768', 'Kadek Rara Yoratamara'),
('16015753', 'I Gst Made Padang'),
('16015748', 'I Made Sukarja'),
('16015764', 'I Nyoman Nyeneng'),
('16012510', 'Komang Nopa Susanta, SE'),
('16015807', 'Yosep Timo Olin'),
('16015813', 'Rinjani'),
('16008736', 'I Ngr Md Adi Suma Artha'),
('16015817', 'Ni Komang Pujiastuti'),
('16015818', 'By Ayu Kadek Susanti'),
('16016059', 'Ni Ketut Muliasih'),
('16016065', 'Ni Luh Putu Marsyanawati'),
('16016086', 'Agus Derpa Satya Niswa'),
('16016320', 'Ni Made Nitil'),
('16016315', 'Ni Wayan Gamiasih'),
('16016311', 'Putu Eka Putra Wijaya'),
('16016312', 'By Ketut Murtini'),
('01500220', 'Sasriningsih, Ni Putu'),
('16016316', 'Ketut Buana Kawan'),
('16016317', 'I Made Budiarta'),
('16016324', 'Ulin Naja'),
('16013309', 'Made Supradnyana'),
('16016319', 'Ni Kadek Nanda Darma Yanti'),
('01376441', 'Riyati'),
('15002150', 'I Made Sadia'),
('15049034', 'A. A. Made Rai Astiti'),
('16016346', 'Putu Indah Febriyanti'),
('01169769', 'Nila Asih, Ni Made'),
('16016349', 'Ni Putu Suwitari'),
('01129231', 'Adinata Komang'),
('16016347', 'Ir. I Ketut Suputra'),
('16016751', 'Luh Kriyanuti'),
('15051247', 'I Made Suarna'),
('16016753', 'Andreana Umiliadi'),
('16016756', 'Mr. William Bradford'),
('01448009', 'Raka Yuni A A Istri'),
('16016769', 'Novian Haryawan'),
('16016773', 'Monica A. Kaylani Mbete'),
('16016778', 'Nyoman Gunawan '),
('16016772', 'Anak Agung Rai Agung'),
('16016658', 'Katja Stubbe'),
('16017006', 'Sutik Indah Yanti'),
('16017007', 'Nabil Muzhaffa Effendi'),
('16017016', 'I Wayan Kisid'),
('01469712', 'Riani Ni Ketut'),
('01363212', 'Kiyoshi Morita'),
('16011237', 'Ni Wayan Rai'),
('14027345', 'Surya Srana Jaya'),
('16017024', 'Desak Made Tirtaningrum'),
('16017033', 'Heltaria'),
('16017043', 'Mariyani'),
('16017045', 'Yudianto Irawan'),
('16017229', 'I Putu Anom Januardi'),
('01630099', 'I Wayan Lambon'),
('15003264', 'Ida Bagus Nyoman Mendra'),
('16007701', 'Agnes Bora Dima'),
('16017247', 'Dzakiya Arsy Rhomsdona'),
('01413463', 'Listiawati, Pt Ayu'),
('01350626', 'Puja Adnyana, I Ketut'),
('16017250', 'Ni Pt Intan Kartika Maharani'),
('16017251', 'Putu Sri Dharma Apriani '),
('16017664', 'I Gede Karnata'),
('16011208', 'Rahono'),
('16017312', 'I Gst Ayu Sri Kesuma Dewi'),
('16017732', 'Zhu Yun Hua'),
('16017739', 'Rambu Yaku Pewu'),
('16017740', 'I Gede Wiguna Ekaputra'),
('16017919', 'Ni Made Rat Anjani'),
('01531211', 'Subudiasih, Ni Made'),
('16017930', 'Saverinus Prudens'),
('16017510', 'Lalu Iskandar'),
('15041835', 'Sugeng Hariadi'),
('16017942', 'Joko Rono Hema Waskita'),
('14022007', 'Yuliana'),
('15060411', 'Ni Ketut Riatni'),
('00684630', 'Bisma Sanjaya AA Gde'),
('16018059', 'Ni Ketut Wartini '),
('16018063', 'I Putu Bagus Krisna Jayanta'),
('16014376', 'Ni Luh Suprianti'),
('15066834', 'Khoirul Godar'),
('16007420', 'Ni Luh De Suantari'),
('01432558', 'Cahaya Praba Dinata Ni L Gd'),
('16018095', 'I Gst Agung Mahajaya Wikrama'),
('15006071', 'Made Sadnyana'),
('15039812', 'Ida Ayu Sutiami'),
('14006786', 'I Gst Ayu Raka Astuti'),
('15020107', 'I Ketut Rabek'),
('00919230', 'Remping Ni Nym '),
('16018566', 'Abdullah Subhan'),
('00910206', 'Ngakan Made Ardita'),
('16018560', 'I Kadek Krisnanda Putra'),
('16018563', 'Kadek Meliani'),
('16018576', 'Sumarmi'),
('15034169', 'I Gusti Ayu Sudarsih'),
('16018606', 'Kd Anggita Rahayu'),
('16018608', 'Luh Surya Rahmawati'),
('14056042', 'Made Dewi Anggreni'),
('16018771', 'Marthen Nyongky Jesua'),
('13003141', 'Andre Rumteh'),
('16018776', 'H. Sumarko Kasirudin'),
('15007697', 'I Dewa Komang Mas Sedana Artha'),
('16018783', 'I Made Widana'),
('16008346', 'Ni Gusti Ayu Made Arwantini'),
('16018798', 'Putu Agus Muliawan'),
('01605831', 'I Gusti Ayu Putu Mei Ardiani'),
('01542654', 'Fajar Ari Prawira, Kadek'),
('16015607', 'Nyoman Sulendra'),
('13037987', 'Lyksen G. Ora'),
('16018883', 'Gst Ayu Pt Pancawaniti'),
('16018885', 'Achmad Sugianto'),
('16018881', 'Comang'),
('01412955', 'Ayu Susanthi Pradnyani, Ni Pt'),
('16018906', 'Rocky'),
('16018905', 'Horas'),
('16018908', 'I B Kadek Bajra'),
('16018904', 'Ni Putu Eka Cahyaning Putri'),
('01037163', 'Ananda Putri I Gst Ayu'),
('16018911', 'Dewi Kumalasari'),
('16018913', 'Ni Wayan Sukru'),
('16018914', 'Ni Nyoman Prigi'),
('16018720', 'Yuda Pangestu Suteja'),
('14028108', 'Ni Putu Erika Dewi Apriliana'),
('01628098', 'Nata Raharja'),
('16019302', 'Violandora Martina Roding'),
('16013538', 'Ni Wayan Kangen'),
('01607230', 'Anida Peliani'),
('16019341', 'Kadek Dicky Sudarmadi'),
('01339246', 'Margiasih Ni Luh'),
('16019327', 'Najwa Zahirah Salsabila'),
('16019359', 'Ni Nengah Suminten'),
('16019362', 'Nur Badriyah'),
('16019370', 'Dra. Luh Sumartini'),
('16019371', 'Zainul Asikin'),
('01610207', 'Dewa Made Khrisna Adi Permana'),
('16019374', 'Ni Made Mudiasih'),
('14029464', 'Misyati'),
('16019421', 'Ketut Manik'),
('16019423', 'Sabariyanto'),
('16019431', 'I Wayan Sukancana'),
('01632791', 'Ni Wayan Wiwik Sunarsih'),
('16019430', 'Ahmad Fauzi'),
('16008226', 'Nyoman Merta'),
('16017466', 'I Gusti Agung Gede Surya Krishna'),
('16019436', 'Dicka Indra Prasetia'),
('16019437', 'Gede Rupada'),
('16000062', 'I Wayan Subagia'),
('01406131', 'Henky Lestario'),
('16018918', 'I G K Suastama'),
('16019443', 'Judith Debdralistia Wangania'),
('16019444', 'Komang Sutradana'),
('16014088', 'Nurhayati'),
('14005062', 'Pt. Agus Radit Putra'),
('15051744', 'Ni Ketut Arsini'),
('16019557', 'Putu Dhea Pradnya Puspandari'),
('16019558', 'I Made Sudana'),
('16019560', 'Ketut Ratna Sari'),
('01370186', 'Damar Arif Wijaksana'),
('01465878', 'Achmad Djarot Suningrat'),
('16019566', 'Mohamad Saleh'),
('15031057', 'Ni Nyoman Lestari'),
('16019565', 'I Gst Nym Sarka'),
('14062704', 'Ni Wayan Budiartini'),
('00975241', 'Tekeng I Made'),
('16019580', 'Ni Kadek Dwi Juniati'),
('16019579', 'Suminah'),
('16019589', 'Fadhur Rohman'),
('16019576', 'Ribut'),
('00846562', 'Surya Natha Ida Bagus'),
('16019591', 'Ni Made Puspa Yanthi'),
('16019592', 'Farida'),
('16019598', 'Ketut Widiarta'),
('16019599', 'Sang Ayu Made Sintia Dewi');

-- --------------------------------------------------------

--
-- Table structure for table `iki`
--

CREATE TABLE IF NOT EXISTS `iki` (
`id` int(10) unsigned NOT NULL,
  `nocm` varchar(10) NOT NULL,
  `diag` varchar(50) NOT NULL,
  `ats` char(1) NOT NULL,
  `gol` char(1) NOT NULL,
  `shift` char(1) NOT NULL,
  `username` varchar(50) NOT NULL,
  `tanggal` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=183 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iki`
--

INSERT INTO `iki` (`id`, `nocm`, `diag`, `ats`, `gol`, `shift`, `username`, `tanggal`) VALUES
(1, '16015768', 'Susp Appendicitis Akut', '4', '2', '2', 'suryasedana', '2016-04-23 15:55:01'),
(2, '16015753', 'Susp DHF', '4', '2', '2', 'suryasedana', '2016-04-23 15:56:03'),
(3, '16015748', 'Fr Basis Cranii', '3', '1', '2', 'suryasedana', '2016-04-23 15:56:54'),
(4, '16015764', 'LBP', '3', '1', '2', 'suryasedana', '2016-04-23 15:57:31'),
(5, '16012510', 'Dyspepsia', '4', '2', '2', 'suryasedana', '2016-04-23 16:01:35'),
(6, '16015807', 'Visum Penganiayaan', '3', '1', '2', 'suryasedana', '2016-04-23 16:02:05'),
(7, '16015813', 'DHF', '3', '1', '2', 'suryasedana', '2016-04-23 16:02:38'),
(8, '16008736', 'Febris', '4', '2', '2', 'suryasedana', '2016-04-23 16:03:20'),
(9, '16015817', 'DHF', '3', '1', '2', 'suryasedana', '2016-04-23 16:03:51'),
(10, '16015818', 'Penumonia Berat, TOF', '3', '1', '2', 'suryasedana', '2016-04-23 16:04:31'),
(11, '16016059', 'DHF', '3', '1', '2', 'suryasedana', '2016-04-23 16:06:04'),
(12, '16016065', 'DHF', '3', '1', '2', 'suryasedana', '2016-04-23 16:06:47'),
(13, '16016086', 'Febris', '4', '2', '3', 'suryasedana', '2016-04-23 16:07:31'),
(14, '16016320', 'Susp Sirosis Hepatis', '3', '1', '3', 'suryasedana', '2016-04-23 16:08:05'),
(15, '16016315', 'MBC', '3', '1', '3', 'suryasedana', '2016-04-23 16:08:43'),
(16, '16016311', 'DSS', '3', '1', '3', 'suryasedana', '2016-04-23 16:09:58'),
(17, '16016312', 'Atresia Ani', '3', '1', '3', 'suryasedana', '2016-04-23 16:10:55'),
(18, '01500220', 'Post KLL', '3', '1', '3', 'suryasedana', '2016-04-23 16:11:26'),
(19, '16016316', 'Pneumonia', '3', '1', '3', 'suryasedana', '2016-04-23 16:12:08'),
(20, '16016317', 'Asma', '4', '2', '3', 'suryasedana', '2016-04-23 16:12:34'),
(21, '16016324', 'Febris', '4', '2', '3', 'suryasedana', '2016-04-23 16:13:27'),
(22, '16013309', 'CKD', '3', '1', '3', 'suryasedana', '2016-04-23 16:14:00'),
(23, '16016319', 'DSS', '3', '1', '3', 'suryasedana', '2016-04-23 16:14:29'),
(24, '01376441', 'Asma', '4', '2', '3', 'suryasedana', '2016-04-23 16:15:33'),
(25, '15002150', 'AF', '3', '2', '3', 'suryasedana', '2016-04-23 16:16:23'),
(26, '15049034', 'Dyspepsia', '4', '2', '3', 'suryasedana', '2016-04-23 16:16:53'),
(27, '16016346', 'Febris', '4', '2', '3', 'suryasedana', '2016-04-23 16:17:20'),
(28, '01169769', 'SVT', '3', '2', '3', 'suryasedana', '2016-04-23 16:17:54'),
(29, '16016349', 'Dyspepsia', '4', '2', '3', 'suryasedana', '2016-04-23 16:18:30'),
(30, '01129231', 'Febris', '4', '2', '3', 'suryasedana', '2016-04-23 16:19:03'),
(31, '16016347', 'Dyspepsia', '4', '2', '3', 'suryasedana', '2016-04-23 16:19:40'),
(32, '16016751', 'Susp Appendicitis Akut', '4', '2', '1', '', '2016-04-24 08:38:51'),
(33, '16016751', 'Susp. Appendicitis Akut', '4', '2', '1', 'suryasedana', '2016-04-24 08:39:48'),
(34, '15051247', 'Epistaksis', '3', '1', '1', 'suryasedana', '2016-04-24 08:41:02'),
(35, '16016753', 'DHF', '3', '1', '1', 'suryasedana', '2016-04-24 09:25:24'),
(36, '16016756', 'Korpal Faring', '3', '1', '1', 'suryasedana', '2016-04-24 09:45:55'),
(37, '01448009', 'Dyspepsia', '4', '2', '1', 'suryasedana', '2016-04-24 10:23:51'),
(38, '16016769', 'B24', '3', '1', '1', 'suryasedana', '2016-04-24 11:05:15'),
(39, '16016773', 'Distensi Abdomen', '4', '2', '1', 'suryasedana', '2016-04-24 12:58:36'),
(40, '16016778', 'DHF', '3', '1', '1', 'suryasedana', '2016-04-24 12:59:19'),
(41, '16016772', 'Kolik Ureter', '4', '2', '1', 'suryasedana', '2016-04-24 13:00:07'),
(42, '16016658', 'Susp DHF', '4', '2', '1', 'suryasedana', '2016-04-24 14:07:47'),
(43, '16017006', 'Vertigo', '4', '2', '2', 'suryasedana', '2016-04-25 14:59:11'),
(44, '16017007', 'ISPA', '5', '2', '2', 'suryasedana', '2016-04-25 15:11:57'),
(45, '16017016', 'Retensio Urin', '3', '1', '2', 'suryasedana', '2016-04-25 16:50:14'),
(46, '01469712', 'Vertigo', '4', '2', '2', 'suryasedana', '2016-04-25 17:27:34'),
(47, '01363212', 'Morsum Canis', '5', '2', '2', 'suryasedana', '2016-04-25 17:28:42'),
(48, '16011237', 'AML', '3', '1', '2', 'suryasedana', '2016-04-25 18:22:49'),
(49, '14027345', 'Dyspepsia', '4', '2', '2', 'suryasedana', '2016-04-25 18:43:45'),
(50, '16017024', 'DSS', '3', '1', '2', 'suryasedana', '2016-04-25 18:45:33'),
(51, '16017033', 'Morsum Canis', '5', '2', '2', 'suryasedana', '2016-04-25 19:32:04'),
(52, '16017043', 'APB', '3', '1', '2', 'suryasedana', '2016-04-25 21:11:35'),
(53, '16017045', 'Chest Pain', '3', '2', '2', 'suryasedana', '2016-04-25 21:12:14'),
(54, '16017229', 'Fr. Terbuka Cruris Dextra', '3', '1', '3', '', '2016-04-26 22:03:22'),
(55, '16017229', 'Fr. Terbuka Cruris Dextra', '2', '1', '3', 'suryasedana', '2016-04-26 22:04:14'),
(56, '01630099', 'Retensio Urin', '3', '1', '3', 'suryasedana', '2016-04-26 22:16:31'),
(57, '15003264', 'Kolik Renal', '4', '2', '3', 'suryasedana', '2016-04-27 04:12:41'),
(58, '16007701', 'Luka Kolostomi', '3', '1', '3', 'suryasedana', '2016-04-27 04:32:56'),
(59, '16017247', 'KDS', '4', '2', '3', 'suryasedana', '2016-04-27 05:27:11'),
(60, '01413463', 'Febris', '4', '2', '3', 'suryasedana', '2016-04-27 06:09:04'),
(61, '01350626', 'Febris', '4', '2', '3', 'suryasedana', '2016-04-27 06:17:04'),
(62, '16017250', 'Dyspneu', '4', '2', '3', 'suryasedana', '2016-04-27 06:45:57'),
(63, '16017251', 'DHF', '3', '1', '3', 'suryasedana', '2016-04-27 07:12:42'),
(64, '16017664', 'Febris', '4', '2', '1', 'suryasedana', '2016-04-29 08:40:57'),
(65, '16011208', 'CKD', '3', '2', '1', 'suryasedana', '2016-04-29 11:01:01'),
(66, '16017312', 'Febris', '4', '2', '1', 'suryasedana', '2016-04-29 11:02:39'),
(67, '16017732', 'Morsum Canis', '5', '2', '1', 'suryasedana', '2016-04-29 12:27:29'),
(68, '16017739', 'DHF', '3', '1', '1', 'suryasedana', '2016-04-29 13:03:42'),
(69, '16017740', 'DHF', '3', '1', '1', 'suryasedana', '2016-04-29 13:12:42'),
(70, '16017919', 'RHD', '3', '2', '2', 'suryasedana', '2016-04-30 14:33:12'),
(71, '01531211', 'Febris', '4', '2', '2', 'suryasedana', '2016-04-30 15:58:16'),
(72, '16017930', 'Kolik Ureter', '4', '2', '2', '', '2016-04-30 16:43:24'),
(73, '16017930', 'Kolik Abdomen', '4', '2', '2', 'suryasedana', '2016-04-30 16:44:12'),
(74, '16017510', 'CH', '3', '1', '2', 'suryasedana', '2016-04-30 17:48:31'),
(75, '15041835', 'Asma', '4', '2', '2', 'suryasedana', '2016-04-30 19:10:35'),
(76, '16017942', 'Dyspepsia', '4', '2', '2', 'suryasedana', '2016-04-30 20:24:09'),
(77, '14022007', 'DHF', '3', '1', '2', 'suryasedana', '2016-04-30 21:11:16'),
(78, '15060411', 'Syncope', '3', '2', '2', 'suryasedana', '2016-04-30 21:12:08'),
(79, '00684630', 'Febris', '4', '2', '3', 'suryasedana', '2016-05-01 21:11:44'),
(80, '16018059', 'DHF', '3', '1', '3', 'suryasedana', '2016-05-01 22:29:09'),
(81, '01376441', 'Asma Attack', '4', '2', '3', 'suryasedana', '2016-05-01 22:43:17'),
(82, '16018063', 'KDS', '4', '2', '3', 'suryasedana', '2016-05-01 23:00:49'),
(83, '16014376', 'Ca Cerviks', '3', '1', '3', 'suryasedana', '2016-05-01 23:11:11'),
(84, '15066834', 'Dyspepsia', '4', '2', '3', 'suryasedana', '2016-05-02 03:59:36'),
(85, '16007420', 'Febris', '4', '2', '3', 'suryasedana', '2016-05-02 04:58:08'),
(86, '01432558', 'Febris', '4', '2', '3', 'suryasedana', '2016-05-02 06:55:02'),
(87, '16018095', 'Febris', '4', '2', '3', 'suryasedana', '2016-05-02 07:42:04'),
(88, '15006071', 'SLE', '3', '1', '3', 'suryasedana', '2016-05-02 08:03:55'),
(89, '15039812', 'DOA', '5', '2', '3', 'suryasedana', '2016-05-02 08:10:47'),
(90, '14006786', 'SLE', '3', '1', '1', 'suryasedana', '2016-05-04 08:38:05'),
(91, '15020107', 'Arrhytmia', '3', '2', '1', 'suryasedana', '2016-05-04 08:58:39'),
(92, '00919230', 'Hipoglikemi', '3', '2', '1', 'suryasedana', '2016-05-04 09:12:33'),
(93, '16018566', 'Post KLL', '3', '1', '1', 'suryasedana', '2016-05-04 10:31:26'),
(94, '16018566', 'Post KLL', '3', '1', '1', 'suryasedana', '2016-05-04 10:31:42'),
(95, '00910206', 'Febris', '4', '2', '1', 'suryasedana', '2016-05-04 10:40:22'),
(96, '16018560', 'Susp DHF', '4', '2', '1', 'suryasedana', '2016-05-04 10:45:30'),
(97, '16018563', 'Susp DHF', '4', '2', '1', 'suryasedana', '2016-05-04 10:46:22'),
(98, '16018576', 'Atrial Flutter', '4', '2', '1', 'suryasedana', '2016-05-04 12:31:14'),
(99, '15034169', 'Vertigo', '4', '2', '1', 'suryasedana', '2016-05-04 13:05:41'),
(100, '16018606', 'DHF', '3', '1', '1', 'suryasedana', '2016-05-04 13:46:31'),
(101, '16018608', 'Morsum Canis', '5', '2', '1', 'suryasedana', '2016-05-04 14:08:46'),
(102, '14056042', 'Ca Cerviks', '3', '1', '1', 'suryasedana', '2016-05-04 14:12:53'),
(103, '16018771', 'Dyspepsia', '4', '2', '3', 'suryasedana', '2016-05-05 21:31:21'),
(104, '13003141', 'Hernia Inguinalis D', '3', '1', '3', 'suryasedana', '2016-05-05 21:42:18'),
(105, '16018776', 'DOA', '5', '2', '3', 'suryasedana', '2016-05-05 22:11:18'),
(106, '15007697', 'Febris', '4', '2', '3', 'suryasedana', '2016-05-05 23:17:32'),
(107, '16018783', 'Combustio', '3', '1', '3', 'suryasedana', '2016-05-06 03:47:28'),
(108, '16008346', 'APB', '3', '1', '3', 'suryasedana', '2016-05-06 04:09:56'),
(109, '16018798', 'Dyspepsia', '4', '2', '3', 'suryasedana', '2016-05-06 05:26:55'),
(110, '01605831', 'ICH   IVH', '3', '1', '3', 'suryasedana', '2016-05-06 05:54:10'),
(111, '01542654', 'Febris', '4', '2', '3', 'suryasedana', '2016-05-06 08:01:49'),
(112, '16015607', 'Kateter mampet', '3', '1', '3', 'suryasedana', '2016-05-06 08:35:17'),
(113, '13037987', 'Febris', '4', '2', '3', 'suryasedana', '2016-05-06 08:35:47'),
(114, '13037987', 'Febris', '4', '2', '3', 'suryasedana', '2016-05-06 08:35:48'),
(115, '16018883', 'Korpal Faring', '3', '1', '3', 'suryasedana', '2016-05-06 23:02:28'),
(116, '16018885', 'Vulnus Ictum', '3', '1', '3', 'suryasedana', '2016-05-06 23:03:31'),
(117, '16018881', 'Febris', '4', '2', '3', 'suryasedana', '2016-05-06 23:18:22'),
(118, '01412955', 'Dyspepsia', '4', '2', '3', 'suryasedana', '2016-05-06 23:20:24'),
(119, '16018906', 'KLL', '3', '1', '3', 'suryasedana', '2016-05-07 06:24:45'),
(120, '16018905', 'KLL', '3', '1', '3', 'suryasedana', '2016-05-07 06:27:58'),
(121, '16018908', 'Kolik Abdomen', '4', '2', '3', 'suryasedana', '2016-05-07 06:28:52'),
(122, '16018904', 'Dyspepsia, GEA', '4', '2', '3', 'suryasedana', '2016-05-07 06:30:26'),
(123, '01037163', 'Asma Attack', '4', '2', '3', 'suryasedana', '2016-05-07 06:31:17'),
(124, '16018911', 'Dyspepsia', '4', '2', '3', 'suryasedana', '2016-05-07 06:32:05'),
(125, '16018913', 'Susp Pneumonia', '3', '1', '3', 'suryasedana', '2016-05-07 06:57:45'),
(126, '16018914', 'Peritonitis', '3', '1', '3', 'suryasedana', '2016-05-07 07:29:16'),
(127, '16018720', 'Febris', '4', '2', '3', 'suryasedana', '2016-05-07 07:48:31'),
(128, '14028108', 'Bronkhiolitis Akut', '4', '2', '3', 'suryasedana', '2016-05-07 07:49:28'),
(129, '01628098', 'Asthma Attack', '4', '2', '1', 'suryasedana', '2016-05-09 09:06:24'),
(130, '16018720', 'Febris', '4', '2', '1', 'suryasedana', '2016-05-09 09:07:01'),
(131, '16019302', 'Wasting syndrome', '3', '1', '1', '', '2016-05-09 10:03:33'),
(132, '16019302', 'Wasting syndrome', '3', '1', '1', 'suryasedana', '2016-05-09 10:13:03'),
(133, '16013538', 'Tumor Inguinal', '3', '1', '1', 'suryasedana', '2016-05-09 10:13:57'),
(134, '01607230', 'Susp Appendicitis Akut', '3', '2', '1', 'suryasedana', '2016-05-09 10:32:37'),
(135, '16019341', 'DHF', '3', '1', '1', 'suryasedana', '2016-05-09 11:03:09'),
(136, '01339246', 'Low Back Pain', '4', '2', '1', 'suryasedana', '2016-05-09 11:28:19'),
(137, '16019327', '16019327', '4', '2', '1', 'suryasedana', '2016-05-09 11:29:06'),
(138, '16019327', 'Febris', '4', '2', '1', 'suryasedana', '2016-05-09 11:30:16'),
(139, '16019359', 'Tumor Rektum', '3', '1', '1', 'suryasedana', '2016-05-09 12:10:56'),
(140, '16019362', 'Febris', '4', '2', '1', 'suryasedana', '2016-05-09 12:16:29'),
(141, '16019370', 'CF Humerus', '3', '1', '1', 'suryasedana', '2016-05-09 13:37:18'),
(142, '16019371', 'CKD st. V', '3', '1', '1', 'suryasedana', '2016-05-09 14:01:53'),
(143, '01610207', 'Asthma Attack', '4', '2', '1', 'suryasedana', '2016-05-09 14:02:46'),
(144, '16019374', 'DMDF DM Gastropathy', '3', '1', '1', 'suryasedana', '2016-05-09 14:09:53'),
(145, '14029464', 'Gum Bleeding', '4', '2', '3', 'suryasedana', '2016-05-09 22:37:46'),
(146, '16019421', 'Susp Appendicitis Akut', '4', '2', '3', 'suryasedana', '2016-05-09 22:42:00'),
(147, '16019423', 'Susp Appendicitis Akut', '4', '2', '3', 'suryasedana', '2016-05-09 22:43:47'),
(148, '16019431', 'Hepatomegali', '3', '1', '3', 'suryasedana', '2016-05-09 23:18:41'),
(149, '01632791', 'Febris', '4', '2', '3', 'suryasedana', '2016-05-09 23:24:19'),
(150, '16019430', 'Hematuria susp Striktur Uretra', '3', '1', '3', 'suryasedana', '2016-05-09 23:43:31'),
(151, '16008226', 'CKD dan Sindrom Uremic', '3', '1', '3', 'suryasedana', '2016-05-09 23:45:17'),
(152, '16017466', 'Osteosarkoma', '3', '1', '3', 'suryasedana', '2016-05-10 00:04:32'),
(153, '16019436', 'Post KLL', '3', '1', '3', 'suryasedana', '2016-05-10 00:16:46'),
(154, '16019437', 'Trauma Orbita', '3', '1', '3', 'suryasedana', '2016-05-10 00:19:19'),
(155, '16000062', 'Kolik Abdomen', '4', '2', '3', 'suryasedana', '2016-05-10 05:05:01'),
(156, '01406131', 'Morsum Canis', '5', '2', '3', 'suryasedana', '2016-05-10 05:05:58'),
(157, '16018918', 'Hipertensi Emergency', '3', '1', '3', 'suryasedana', '2016-05-10 05:57:31'),
(158, '16019443', 'Dysmenorrhea', '4', '2', '3', 'suryasedana', '2016-05-10 05:58:39'),
(159, '16019444', 'Febris', '4', '2', '3', 'suryasedana', '2016-05-10 06:28:49'),
(160, '16014088', 'Febris', '4', '2', '3', 'suryasedana', '2016-05-10 07:15:12'),
(161, '14005062', 'Asthma Attack', '4', '2', '3', 'suryasedana', '2016-05-10 07:36:35'),
(162, '15051744', 'MBC', '3', '1', '3', 'suryasedana', '2016-05-10 07:41:45'),
(163, '16019557', 'DHF', '3', '1', '2', 'suryasedana', '2016-05-10 14:30:03'),
(164, '16019558', 'Post KLL', '3', '1', '2', 'suryasedana', '2016-05-10 14:49:02'),
(165, '16019560', 'CKS', '3', '1', '1', 'suryasedana', '2016-05-10 15:50:53'),
(166, '01370186', 'Morsum Canis', '5', '2', '1', 'suryasedana', '2016-05-10 16:21:55'),
(167, '01465878', 'Distensi Abdomen', '4', '2', '2', 'suryasedana', '2016-05-10 16:26:19'),
(168, '16019566', 'Post Jatuh', '3', '1', '2', 'suryasedana', '2016-05-10 16:46:06'),
(169, '15031057', 'Ewing Sarkoma', '3', '1', '2', 'suryasedana', '2016-05-10 16:47:19'),
(170, '16019565', 'Paraparesis', '3', '1', '2', 'suryasedana', '2016-05-10 16:48:18'),
(171, '14062704', 'Susp SOL', '4', '1', '2', 'suryasedana', '2016-05-10 17:32:25'),
(172, '00975241', 'Vulnus Ictum', '3', '1', '2', 'suryasedana', '2016-05-10 18:41:31'),
(173, '16019580', 'Inpartu', '3', '1', '2', 'suryasedana', '2016-05-10 18:42:18'),
(174, '16019579', 'TIA', '4', '2', '2', '', '2016-05-10 19:13:04'),
(175, '16019579', 'TIA', '4', '2', '2', 'suryasedana', '2016-05-10 19:13:48'),
(176, '16019589', 'Post KLL', '3', '1', '2', 'suryasedana', '2016-05-10 19:31:05'),
(177, '16019576', 'Febris', '4', '2', '2', 'suryasedana', '2016-05-10 20:10:25'),
(178, '00846562', 'Urtikaria', '4', '2', '2', 'suryasedana', '2016-05-10 20:11:52'),
(179, '16019591', 'DVT', '3', '1', '2', 'suryasedana', '2016-05-10 20:12:49'),
(180, '16019592', 'Vulnus Appertum', '3', '1', '2', 'suryasedana', '2016-05-10 20:17:22'),
(181, '16019598', 'Febris', '4', '2', '2', 'suryasedana', '2016-05-10 20:56:48'),
(182, '16019599', 'Asthma Attack', '4', '2', '2', 'suryasedana', '2016-05-10 20:57:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `tanggal` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `tanggal`, `nama`, `username`, `email`, `password`) VALUES
(0, 'April, 23 2016', 'I Wayan Surya Sedana', 'suryasedana', 'suryasedana@gmail.com', 'aptx4869');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `iki`
--
ALTER TABLE `iki`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `iki`
--
ALTER TABLE `iki`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=183;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
