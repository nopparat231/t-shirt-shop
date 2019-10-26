-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2019 at 05:03 AM
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
-- Database: `t_shirt_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_user` varchar(20) NOT NULL,
  `admin_pass` varchar(20) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_address` varchar(100) NOT NULL,
  `admin_tel` varchar(10) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `date_save` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_user`, `admin_pass`, `admin_name`, `admin_address`, `admin_tel`, `admin_email`, `status`, `date_save`) VALUES
(1, '1', '1', 'ผู้ดูแลระบบ', 'test add', '0123456789', 'e-mail@admin.com', 'admin', '2017-08-29 17:00:00'),
(2, '2', '2', 'พนักงาน', 'test staff', '0123456789', 'e-mail@staff.com', 'staff', '2018-01-24 17:00:00'),
(10, '3', '3', 'ผู้บริหาร', 'test staff', '0222222222', '23superadmin@superadmin.com', 'superadmin', '2018-10-19 17:00:00'),
(18, 'root', '123123123', 'หกดกหด', 'หกดหกด', '0222222222', '23supedfn@superadmin.com', 'ex', '2018-11-27 13:22:11'),
(17, 'rootrdfg', '123123123', 'sdfsdfsa', 'asdasd', '0222222222', '23ssdfn@superadmin.com', 'ex', '2018-11-27 12:22:47');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bank`
--

CREATE TABLE `tbl_bank` (
  `b_id` int(11) NOT NULL,
  `b_number` varchar(50) NOT NULL,
  `b_name` varchar(50) NOT NULL,
  `b_type` varchar(50) NOT NULL,
  `b_owner` varchar(50) NOT NULL,
  `bn_name` varchar(50) NOT NULL,
  `b_logo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_bank`
--

INSERT INTO `tbl_bank` (`b_id`, `b_number`, `b_name`, `b_type`, `b_owner`, `bn_name`, `b_logo`) VALUES
(3, '0171333040', 'กสิกรไทย', 'ออมทรัพย์', 'จุฑาภรณ์ อุณชาติ', 'เซนทรัลปิ่นเกล้า', 'imgb159622132120191022_224113.png'),
(4, '2102253103', 'ไทยพาณิชย์', 'ออมทรัพย์', 'จุฑาภรณ์ อุณชาติ', 'แพลทินั่ม', 'imgb132594244420191022_224537.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_desing`
--

CREATE TABLE `tbl_desing` (
  `desing_id` int(11) NOT NULL,
  `desing_mem` int(11) NOT NULL,
  `desing_order` int(11) NOT NULL,
  `desing_img_front` text NOT NULL,
  `desing_img_back` text NOT NULL,
  `desing_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `desing_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `mem_id` int(11) NOT NULL,
  `mem_fname` varchar(50) NOT NULL,
  `mem_lname` varchar(50) NOT NULL,
  `mem_address` varchar(255) NOT NULL,
  `mem_tel` varchar(10) NOT NULL,
  `mem_username` varchar(20) NOT NULL,
  `mem_password` varchar(20) NOT NULL,
  `mem_email` varchar(100) NOT NULL,
  `status` varchar(5) NOT NULL,
  `sid` varchar(32) NOT NULL,
  `active` varchar(3) NOT NULL,
  `dateinsert` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`mem_id`, `mem_fname`, `mem_lname`, `mem_address`, `mem_tel`, `mem_username`, `mem_password`, `mem_email`, `status`, `sid`, `active`, `dateinsert`) VALUES
(32, 'ชื่อทดสอบ', 'นามสกุลทดสอบ', 'sdsdกกกกff', '0914232511', 'customer1', 'customer1', 'boingza1@gmail.com', 'user', 'dl0b7k6568iclo9i2notr0b205', 'yes', '2019-01-26 19:18:24'),
(37, 'บุษบา ลาลา', '', '66/99 แขวง/ตำบลรมณีย์ เขต/อำเภอกะปง จังหวัดพังงา รหัสไปรษณีย์ 82170', '0912365481', 'member2', '123456', 'osamble_boling@hotmail.com', 'user', 'u28cstf8f836950guguuc59cb6', 'yes', '2019-03-23 12:17:52'),
(38, 'asdasdasd', 'asdasd', '112 / 22  trdtdgsddfsad', '0873212313', '1', '1', 'asdasd@ads.dv', 'user', '4o9ntjhg2b15riqfsnf03nbup0', 'no', '2019-09-22 12:45:47'),
(41, 'รุ่งนภา', 'พิมตะคอง', 'ร้านลุงแดง นิคมอุตสาหกรรมไฮเทต ต.บ้านเลน อ.บางปะอิน จ.อยุธยา 13160', '0619786716', 'mo', 'mo10', 'chaymomo@gmail.com', 'user', '9199e6951827f36c992c7b931bac1b88', 'no', '2019-10-09 14:19:34'),
(42, 'juthaporn', 'aunnachart', 'นิคมไฮเทค', '0626237888', 'zai', 'zaii', 'shay280419@gmail.com', 'user', '926c52821f28cd305748d469fb33bdfe', 'no', '2019-10-22 03:21:38');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(6) UNSIGNED ZEROFILL NOT NULL,
  `mem_id` int(11) NOT NULL,
  `mem_fname` varchar(100) NOT NULL,
  `mem_lname` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `order_status` int(1) NOT NULL,
  `pay_slip` varchar(200) DEFAULT NULL,
  `b_name` varchar(100) DEFAULT NULL,
  `b_number` varchar(200) DEFAULT NULL,
  `pay_date` date DEFAULT NULL,
  `time_date` time NOT NULL,
  `pay_amount` float(10,2) DEFAULT NULL,
  `postcode` varchar(30) DEFAULT NULL,
  `pos_ems` int(11) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `mem_id`, `mem_fname`, `mem_lname`, `address`, `email`, `phone`, `order_status`, `pay_slip`, `b_name`, `b_number`, `pay_date`, `time_date`, `pay_amount`, `postcode`, `pos_ems`, `order_date`) VALUES
(000005, 41, 'รุ่งนภา', 'พิมตะคอง', 'ร้านลุงแดง นิคมอุตสาหกรรมไฮเทต ต.บ้านเลน อ.บางปะอิน จ.อยุธยา 13160', 'chaymomo@gmail.com', '0619786716', 4, '72388769920191023_225729.jpg', 'กสิกรไทย', '0171333040', '2019-10-23', '15:56:00', 220.00, 'rnsr0000064407', 50, '2019-10-25 17:00:02'),
(000006, 41, 'รุ่งนภา', 'พิมตะคอง', 'ร้านลุงแดง นิคมอุตสาหกรรมไฮเทต ต.บ้านเลน อ.บางปะอิน จ.อยุธยา 13160', 'chaymomo@gmail.com', '0619786716', 1, '', '', '', '0000-00-00', '00:00:00', 220.00, '', 50, '2019-10-24 17:53:47');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_detail`
--

CREATE TABLE `tbl_order_detail` (
  `d_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `p_name` varchar(200) DEFAULT NULL,
  `p_c_qty` int(11) NOT NULL,
  `total` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order_detail`
--

INSERT INTO `tbl_order_detail` (`d_id`, `order_id`, `p_id`, `p_name`, `p_c_qty`, `total`) VALUES
(189, 3, 113, 'สีขาว/ม่วง', 1, 220.00),
(190, 4, 116, 'สีขาว/ม่วง', 1, 220.00),
(191, 5, 115, 'สีดำ/ขาว', 1, 220.00),
(192, 6, 113, 'สีขาว/ม่วง', 1, 220.00);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `p_id` int(11) NOT NULL,
  `t_id` int(11) NOT NULL,
  `ts_id` int(11) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `p_detial` text NOT NULL,
  `p_price` float(10,2) NOT NULL,
  `p_unit` varchar(20) NOT NULL,
  `p_img1` varchar(200) NOT NULL,
  `p_img2` varchar(100) DEFAULT NULL,
  `p_img3` varchar(200) NOT NULL,
  `p_img4` varchar(200) NOT NULL,
  `p_img5` varchar(200) NOT NULL,
  `p_view` int(11) NOT NULL,
  `p_qty` int(11) DEFAULT NULL,
  `p_size` varchar(50) NOT NULL,
  `p_ems` int(50) NOT NULL,
  `promo` float(10,2) NOT NULL,
  `p_sell` varchar(200) NOT NULL,
  `date_save` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`p_id`, `t_id`, `ts_id`, `p_name`, `p_detial`, `p_price`, `p_unit`, `p_img1`, `p_img2`, `p_img3`, `p_img4`, `p_img5`, `p_view`, `p_qty`, `p_size`, `p_ems`, `promo`, `p_sell`, `date_save`) VALUES
(113, 28, 1, 'สีขาว/ม่วง', '', 150.00, 'ตัว', 'img132736269420191022_101254.png', 'img215080150020191024_232647.jpg', '', '', '', 0, 14, 'S', 70, 0.00, '', '2019-10-24 17:53:47'),
(150, 28, 3, 'สีกรม/แดง', '', 150.00, 'ตัว', 'img1214522374620191024_233824.png', 'img2214522374620191024_233824.jpg', '', '', '', 0, 15, ' L', 70, 0.00, '', '2019-10-24 16:49:36'),
(139, 28, 1, 'สีขาว/ม่วง', '', 150.00, 'ตัว', 'img12314782720191024_232629.png', 'img22314782720191024_232629.jpg', '', '', '', 0, 15, 'M', 70, 0.00, '', '2019-10-24 16:26:29'),
(140, 28, 1, 'สีขาว/ม่วง', '', 150.00, 'ตัว', 'img17195102320191024_232754.png', 'img27195102320191024_232754.jpg', '', '', '', 0, 15, ' L', 70, 0.00, '', '2019-10-24 16:27:54'),
(141, 28, 1, 'สีขาว/ม่วง', '', 150.00, 'ตัว', 'img1173836969820191024_232855.png', 'img2173836969820191024_232855.jpg', '', '', '', 0, 15, 'XL', 70, 0.00, '', '2019-10-24 16:28:55'),
(142, 28, 1, 'สีขาว/ม่วง', '', 150.00, 'ตัว', 'img113937172220191024_232956.png', 'img213937172220191024_232956.jpg', '', '', '', 0, 15, 'XXL', 70, 0.00, '', '2019-10-24 16:29:56'),
(143, 28, 2, 'สีดำ/ขาว', '', 150.00, 'ตัว', 'img1129484473020191024_233221.png', 'img2129484473020191024_233221.jpg', '', '', '', 0, 15, 'S', 70, 0.00, '', '2019-10-24 16:32:21'),
(144, 28, 2, 'สีดำ/ขาว', '', 150.00, 'ตัว', 'img134175417320191024_233306.png', 'img234175417320191024_233306.jpg', '', '', '', 0, 15, 'M', 70, 0.00, '', '2019-10-24 16:33:06'),
(145, 28, 2, 'สีดำ/ขาว', '', 150.00, 'ตัว', 'img146003916520191024_233338.png', 'img246003916520191024_233338.jpg', '', '', '', 0, 15, ' L', 70, 0.00, '', '2019-10-24 16:33:38'),
(146, 28, 2, 'สีดำ/ขาว', '', 150.00, 'ตัว', 'img1128875971720191024_233426.png', 'img2128875971720191024_233426.jpg', '', '', '', 0, 15, 'XL', 70, 0.00, '', '2019-10-24 16:34:26'),
(147, 28, 2, 'สีดำ/ขาว', '', 150.00, 'ตัว', 'img162051360420191024_233507.png', 'img262051360420191024_233507.jpg', '', '', '', 0, 15, 'XXL', 70, 0.00, '', '2019-10-24 16:35:07'),
(148, 28, 3, 'สีกรม/แดง', '', 150.00, 'ตัว', 'img126063767020191024_233654.png', 'img226063767020191024_233654.jpg', '', '', '', 0, 15, 'S', 70, 0.00, '', '2019-10-24 16:50:16'),
(149, 28, 3, 'สีกรม/แดง', '', 150.00, 'ตัว', 'img197853234920191024_233747.png', 'img297853234920191024_233747.jpg', '', '', '', 0, 15, 'M', 70, 0.00, '', '2019-10-24 16:49:51'),
(151, 28, 3, 'สีกรม/แดง', '', 150.00, 'ตัว', 'img1202162942720191024_233912.png', 'img2202162942720191024_233912.jpg', '', '', '', 0, 15, 'XL', 70, 0.00, '', '2019-10-24 16:49:21'),
(152, 28, 3, 'สีกรม/แดง', '', 150.00, 'ตัว', 'img1154794320720191024_234009.png', 'img2154794320720191024_234009.jpg', '', '', '', 0, 15, 'XXL', 70, 0.00, '', '2019-10-24 16:49:09'),
(153, 28, 5, 'สีขาว/กรม', '', 150.00, 'ตัว', 'img1155168917420191024_234217.png', 'img2155168917420191024_234217.jpg', '', '', '', 0, 15, 'S', 70, 0.00, '', '2019-10-24 16:48:52'),
(154, 28, 5, 'สีขาว/กรม', '', 150.00, 'ตัว', 'img1117738829220191024_234306.png', 'img2117738829220191024_234306.jpg', '', '', '', 0, 15, 'M', 70, 0.00, '', '2019-10-24 16:48:34'),
(155, 28, 5, 'สีขาว/กรม', '', 150.00, 'ตัว', 'img1140536430820191024_234353.png', 'img2140536430820191024_234353.jpg', '', '', '', 0, 15, ' L', 70, 0.00, '', '2019-10-24 16:48:16'),
(156, 28, 5, 'สีขาว/กรม', '', 150.00, 'ตัว', 'img114428808720191024_234432.png', 'img214428808720191024_234432.jpg', '', '', '', 0, 15, 'XL', 70, 0.00, '', '2019-10-24 16:47:59'),
(157, 28, 5, 'สีขาว/กรม', '', 150.00, 'ตัว', 'img1111398282420191024_234523.png', 'img2111398282420191024_234523.jpg', '', '', '', 0, 15, 'XXL', 70, 0.00, '', '2019-10-24 16:47:48'),
(158, 28, 6, 'สีแดง/กรม', '', 150.00, 'ตัว', 'img1171904839920191024_235148.png', 'img2171904839920191024_235148.jpg', '', '', '', 0, 15, 'S', 70, 0.00, '', '2019-10-24 16:51:48'),
(159, 28, 6, 'สีแดง/กรม', '', 150.00, 'ตัว', 'img146372252720191024_235224.png', 'img246372252720191024_235224.jpg', '', '', '', 0, 15, 'M', 70, 0.00, '', '2019-10-24 16:52:24'),
(160, 28, 6, 'สีแดง/กรม', '', 150.00, 'ตัว', 'img172588811820191024_235302.png', 'img272588811820191024_235302.jpg', '', '', '', 0, 15, ' L', 70, 0.00, '', '2019-10-24 16:53:02'),
(161, 28, 6, 'สีแดง/กรม', '', 150.00, 'ตัว', 'img173779523120191024_235335.png', 'img273779523120191024_235335.jpg', '', '', '', 0, 15, 'XL', 70, 0.00, '', '2019-10-24 16:53:35'),
(162, 28, 6, 'สีแดง/กรม', '', 150.00, 'ตัว', 'img122426261020191024_235410.png', 'img222426261020191024_235410.jpg', '', '', '', 0, 15, 'XXL', 70, 0.00, '', '2019-10-24 16:54:24'),
(163, 28, 7, 'สีกรม/เขียวมิ้น', '', 150.00, 'ตัว', 'img121794959220191024_235635.png', 'img221794959220191024_235635.jpg', '', '', '', 0, 15, 'S', 70, 0.00, '', '2019-10-24 16:56:35'),
(164, 28, 7, 'สีกรม/เขียวมิ้น', '', 150.00, 'ตัว', 'img1134860076420191024_235708.png', 'img2134860076420191024_235708.jpg', '', '', '', 0, 15, 'M', 70, 0.00, '', '2019-10-24 16:57:08'),
(165, 28, 7, 'สีกรม/เขียวมิ้น', '', 150.00, 'ตัว', 'img1162579846120191024_235742.png', 'img2162579846120191024_235742.jpg', '', '', '', 0, 15, ' L', 70, 0.00, '', '2019-10-24 16:57:42'),
(166, 28, 7, 'สีกรม/เขียวมิ้น', '', 150.00, 'ตัว', 'img1103168693320191024_235814.png', 'img2103168693320191024_235814.jpg', '', '', '', 0, 15, 'XL', 70, 0.00, '', '2019-10-24 16:58:14'),
(167, 28, 7, 'สีกรม/เขียวมิ้น', '', 150.00, 'ตัว', 'img1143762985920191024_235854.png', 'img2143762985920191024_235854.jpg', '', '', '', 0, 15, 'XXL', 70, 0.00, '', '2019-10-24 16:58:54'),
(168, 30, 8, 'สีกะปิ', '', 150.00, 'ตัว', 'img182552881920191025_000124.png', 'img239372565220191025_000315.jpg', '', '', '', 0, 15, 'S', 70, 0.00, '', '2019-10-24 17:03:15'),
(169, 30, 8, 'สีกะปิ', '', 150.00, 'ตัว', 'img119049156320191025_000303.png', 'img219049156320191025_000303.jpg', '', '', '', 0, 15, 'M', 70, 0.00, '', '2019-10-24 17:03:03'),
(170, 30, 8, 'สีกะปิ', '', 150.00, 'ตัว', 'img1136765963720191025_000417.png', 'img2136765963720191025_000417.jpg', '', '', '', 0, 15, ' L', 70, 0.00, '', '2019-10-24 17:04:17'),
(171, 30, 8, 'สีกะปิ', '', 150.00, 'ตัว', 'img1182241390120191025_000457.png', 'img2182241390120191025_000457.jpg', '', '', '', 0, 15, 'XL', 70, 0.00, '', '2019-10-24 17:04:57'),
(172, 30, 8, 'สีกะปิ', '', 150.00, 'ตัว', 'img1169975890420191025_000537.png', 'img2169975890420191025_000537.jpg', '', '', '', 0, 15, 'XXL', 70, 0.00, '', '2019-10-24 17:05:37'),
(173, 30, 9, 'สีขี้ม้า', '', 150.00, 'ตัว', 'img13418897320191025_000753.png', 'img23418897320191025_000753.jpg', '', '', '', 0, 15, 'S', 70, 0.00, '', '2019-10-24 17:07:53'),
(174, 30, 9, 'สีขี้ม้า', '', 150.00, 'ตัว', 'img1141510616120191025_000841.png', 'img2141510616120191025_000841.jpg', '', '', '', 0, 15, 'M', 70, 0.00, '', '2019-10-24 17:08:41'),
(175, 30, 9, 'สีขี้ม้า', '', 150.00, 'ตัว', 'img112358294020191025_000915.png', 'img212358294020191025_000915.jpg', '', '', '', 0, 15, ' L', 70, 0.00, '', '2019-10-24 17:09:15'),
(176, 30, 9, 'สีขี้ม้า', '', 150.00, 'ตัว', 'img16541841720191025_000953.png', 'img26541841720191025_000953.jpg', '', '', '', 0, 15, 'XL', 70, 0.00, '', '2019-10-24 17:09:53'),
(177, 30, 9, 'สีขี้ม้า', '', 150.00, 'ตัว', 'img145115252520191025_001031.png', 'img245115252520191025_001031.jpg', '', '', '', 0, 15, 'XXL', 70, 0.00, '', '2019-10-24 17:10:31'),
(178, 30, 10, 'สีกะปิเข้ม', '', 150.00, 'ตัว', 'img1214195438420191025_001227.png', 'img2214195438420191025_001227.jpg', '', '', '', 0, 15, 'S', 70, 0.00, '', '2019-10-24 17:12:27'),
(179, 30, 10, 'สีกะปิเข้ม', '', 150.00, 'ตัว', 'img163272110920191025_001421.png', 'img263272110920191025_001421.jpg', '', '', '', 0, 15, 'M', 70, 0.00, '', '2019-10-24 17:14:21'),
(180, 30, 10, 'สีกะปิเข้ม', '', 150.00, 'ตัว', 'img1168606234220191025_001453.png', 'img2168606234220191025_001453.jpg', '', '', '', 0, 15, ' L', 70, 0.00, '', '2019-10-24 17:14:53'),
(181, 30, 10, 'สีกะปิเข้ม', '', 150.00, 'ตัว', 'img198936661320191025_001529.png', 'img298936661320191025_001529.jpg', '', '', '', 0, 15, 'XL', 70, 0.00, '', '2019-10-24 17:15:29'),
(182, 30, 10, 'สีกะปิเข้ม', '', 150.00, 'ตัว', 'img1142220312920191025_001607.png', 'img2142220312920191025_001607.jpg', '', '', '', 0, 15, 'XXL', 70, 0.00, '', '2019-10-24 17:16:07'),
(183, 30, 11, 'สีเทา', '', 150.00, 'ตัว', 'img1205325610020191025_001808.png', 'img2205325610020191025_001808.jpg', '', '', '', 0, 15, 'S', 70, 0.00, '', '2019-10-24 17:18:08'),
(184, 30, 11, 'สีเทา', '', 150.00, 'ตัว', 'img18424166120191025_001837.png', 'img28424166120191025_001837.jpg', '', '', '', 0, 15, 'M', 70, 0.00, '', '2019-10-24 17:18:37'),
(185, 30, 11, 'สีเทา', '', 150.00, 'ตัว', 'img1149859025320191025_001906.png', 'img2149859025320191025_001906.jpg', '', '', '', 0, 15, ' L', 70, 0.00, '', '2019-10-24 17:19:06'),
(186, 30, 11, 'สีเทา', '', 150.00, 'ตัว', 'img1166090225820191025_001949.png', 'img2166090225820191025_001949.jpg', '', '', '', 0, 15, 'XL', 70, 0.00, '', '2019-10-24 17:19:49'),
(187, 30, 11, 'สีเทา', '', 150.00, 'ตัว', 'img165636737620191025_002039.png', 'img265636737620191025_002039.jpg', '', '', '', 0, 15, 'XXL', 70, 0.00, '', '2019-10-24 17:20:39'),
(188, 30, 12, 'สีอิฐ', '', 150.00, 'ตัว', 'img1113127995020191025_002240.png', 'img2113127995020191025_002240.jpg', '', '', '', 0, 15, 'S', 70, 0.00, '', '2019-10-24 17:22:40'),
(189, 30, 12, 'สีอิฐ', '', 150.00, 'ตัว', 'img192366509920191025_002336.png', 'img292366509920191025_002336.jpg', '', '', '', 0, 15, 'M', 70, 0.00, '', '2019-10-24 17:23:36'),
(190, 30, 12, 'สีอิฐ', '', 150.00, 'ตัว', 'img133403749520191025_002422.png', 'img233403749520191025_002422.jpg', '', '', '', 0, 15, ' L', 70, 0.00, '', '2019-10-24 17:24:22'),
(191, 30, 12, 'สีอิฐ', '', 150.00, 'ตัว', 'img164820274420191025_002531.png', 'img264820274420191025_002531.jpg', '', '', '', 0, 15, 'XL', 70, 0.00, '', '2019-10-24 17:25:31'),
(192, 30, 12, 'สีอิฐ', '', 150.00, 'ตัว', 'img1146660963320191025_002622.png', 'img2146660963320191025_002622.jpg', '', '', '', 0, 15, 'XXL', 70, 0.00, '', '2019-10-24 17:26:22'),
(193, 30, 13, 'สีเทาม่วง', '', 150.00, 'ตัว', 'img1212707533420191025_002855.png', 'img2212707533420191025_002855.jpg', '', '', '', 0, 15, 'S', 70, 0.00, '', '2019-10-24 17:28:55'),
(194, 30, 13, 'สีเทาม่วง', '', 150.00, 'ตัว', 'img168172085120191025_002937.png', 'img268172085120191025_002937.jpg', '', '', '', 0, 15, 'M', 70, 0.00, '', '2019-10-24 17:29:37'),
(195, 30, 13, 'สีเทาม่วง', '', 150.00, 'ตัว', 'img1113202459720191025_003013.png', 'img2113202459720191025_003013.jpg', '', '', '', 0, 15, ' L', 70, 0.00, '', '2019-10-24 17:30:13'),
(196, 30, 13, 'สีเทาม่วง', '', 150.00, 'ตัว', 'img139063631120191025_003054.png', 'img239063631120191025_003054.jpg', '', '', '', 0, 15, 'XL', 70, 0.00, '', '2019-10-24 17:30:54'),
(197, 30, 13, 'สีเทาม่วง', '', 150.00, 'ตัว', 'img144419309220191025_003126.png', 'img244419309220191025_003126.jpg', '', '', '', 0, 15, 'XXL', 70, 0.00, '', '2019-10-24 17:31:26'),
(198, 29, 16, 'สีส้ม', '', 150.00, 'ตัว', 'img154853310420191025_014536.png', 'img2158127681620191025_013912.jpg', '', '', '', 0, 15, 'S', 70, 0.00, '', '2019-10-24 18:45:36'),
(199, 29, 16, 'สีส้ม', '', 150.00, 'ตัว', 'img16779108220191025_014603.png', 'img2186722693920191025_013950.jpg', '', '', '', 0, 15, 'M', 70, 0.00, '', '2019-10-24 18:46:03'),
(200, 29, 16, 'สีส้ม', '', 150.00, 'ตัว', 'img132849936620191025_014627.png', 'img2177759371620191025_014023.jpg', '', '', '', 0, 15, ' L', 70, 0.00, '', '2019-10-24 18:46:27'),
(201, 29, 16, 'สีส้ม', '', 150.00, 'ตัว', 'img1189391269820191025_014648.png', 'img222985611820191025_014117.jpg', '', '', '', 0, 15, 'XL', 70, 0.00, '', '2019-10-24 18:46:48'),
(202, 29, 16, 'สีส้ม', '', 150.00, 'ตัว', 'img193438103420191025_014706.png', 'img229722322620191025_014149.jpg', '', '', '', 0, 15, 'XXL', 70, 0.00, '', '2019-10-24 18:47:06'),
(203, 29, 17, 'สีม่วง', '', 150.00, 'ตัว', 'img178284720191025_014851.png', 'img278284720191025_014851.jpg', '', '', '', 0, 15, 'S', 70, 0.00, '', '2019-10-24 18:48:51'),
(204, 29, 17, 'สีม่วง', '', 150.00, 'ตัว', 'img163930602520191025_014928.png', 'img263930602520191025_014928.jpg', '', '', '', 0, 15, 'M', 70, 0.00, '', '2019-10-24 18:49:28'),
(205, 29, 17, 'สีม่วง', '', 150.00, 'ตัว', 'img149123243720191025_015000.png', 'img249123243720191025_015000.jpg', '', '', '', 0, 15, ' L', 70, 0.00, '', '2019-10-24 18:50:00'),
(206, 29, 17, 'สีม่วง', '', 150.00, 'ตัว', 'img172815786520191025_015030.png', 'img272815786520191025_015030.jpg', '', '', '', 0, 15, 'XL', 70, 0.00, '', '2019-10-24 18:50:30'),
(207, 29, 17, 'สีม่วง', '', 150.00, 'ตัว', 'img1139392803320191025_015106.png', 'img2139392803320191025_015106.jpg', '', '', '', 0, 15, 'XXL', 70, 0.00, '', '2019-10-24 18:51:06'),
(208, 29, 18, 'สีเทา', '', 150.00, 'ตัว', 'img1199461502620191025_015300.png', 'img2199461502620191025_015300.jpg', '', '', '', 0, 15, 'S', 70, 0.00, '', '2019-10-24 18:53:00'),
(209, 29, 18, 'สีเทา', '', 150.00, 'ตัว', 'img1155232797020191025_015349.png', 'img2155232797020191025_015349.jpg', '', '', '', 0, 15, 'M', 70, 0.00, '', '2019-10-24 18:53:49'),
(210, 29, 18, 'สีเทา', '', 150.00, 'ตัว', 'img15213884920191025_015430.png', 'img25213884920191025_015430.jpg', '', '', '', 0, 15, ' L', 70, 0.00, '', '2019-10-24 18:54:30'),
(211, 29, 18, 'สีเทา', '', 150.00, 'ตัว', 'img1140839980020191025_015504.png', 'img2140839980020191025_015504.jpg', '', '', '', 0, 15, 'XL', 70, 0.00, '', '2019-10-24 18:55:04'),
(212, 29, 18, 'สีเทา', '', 150.00, 'ตัว', 'img168086712820191025_015540.png', 'img268086712820191025_015540.jpg', '', '', '', 0, 15, 'XXL', 70, 0.00, '', '2019-10-24 18:56:01'),
(213, 29, 19, 'สีแดง', '', 150.00, 'ตัว', 'img1121154050720191025_015812.png', 'img2121154050720191025_015812.jpg', '', '', '', 0, 15, 'S', 70, 0.00, '', '2019-10-24 18:58:12'),
(214, 29, 19, 'สีแดง', '', 150.00, 'ตัว', 'img1108346034120191025_015846.png', 'img2108346034120191025_015846.jpg', '', '', '', 0, 15, 'M', 70, 0.00, '', '2019-10-24 18:58:46'),
(215, 29, 19, 'สีแดง', '', 15.00, 'ตัว', 'img1107905440720191025_015916.png', 'img2107905440720191025_015916.jpg', '', '', '', 0, 15, ' L', 70, 0.00, '', '2019-10-24 18:59:16'),
(216, 29, 19, 'สีแดง', '', 150.00, 'ตัว', 'img156190258820191025_015947.png', 'img256190258820191025_015947.jpg', '', '', '', 0, 15, 'XL', 70, 0.00, '', '2019-10-24 18:59:47'),
(217, 29, 19, 'สีแดง', '', 150.00, 'ตัว', 'img1203371174120191025_020026.png', 'img2203371174120191025_020026.jpg', '', '', '', 0, 15, 'XXL', 70, 0.00, '', '2019-10-24 19:00:26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sell`
--

CREATE TABLE `tbl_sell` (
  `s_id` int(20) NOT NULL,
  `s_pid` int(11) NOT NULL,
  `s_old` int(11) NOT NULL,
  `s_add` int(11) NOT NULL,
  `s_bill` varchar(200) NOT NULL,
  `s_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_sell`
--

INSERT INTO `tbl_sell` (`s_id`, `s_pid`, `s_old`, `s_add`, `s_bill`, `s_time`) VALUES
(38, 82, 22, 5, 'imgbill157460916420190603_170300.jpg', '2019-06-03 10:03:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_type`
--

CREATE TABLE `tbl_type` (
  `t_id` int(11) NOT NULL,
  `t_type` varchar(11) NOT NULL,
  `t_name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_type`
--

INSERT INTO `tbl_type` (`t_id`, `t_type`, `t_name`) VALUES
(29, '', 'เสื้อคอตตอน ผ้าสปัน'),
(30, '', 'เสื้อคอตตอน ผ้าลองสลูป'),
(28, '', 'เสื้อคอตตอน ลายทาง'),
(31, '', 'เสื้อสกรีน');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_type_sub`
--

CREATE TABLE `tbl_type_sub` (
  `ts_id` int(11) NOT NULL,
  `ts_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_type_sub`
--

INSERT INTO `tbl_type_sub` (`ts_id`, `ts_name`) VALUES
(1, 'สีขาว/ม่วง'),
(2, 'สีดำ/ขาว'),
(3, 'สีกรม/แดง'),
(5, 'สีขาว/กรม'),
(6, 'สีแดง/กรม'),
(7, 'สีกรม/เขียวมิ้น'),
(8, 'สีกะปิ'),
(9, 'สีขี้ม้า'),
(10, 'สีกะปิเข้ม'),
(11, 'สีเทา'),
(12, 'สีอิฐ'),
(13, 'สีเทาม่วง'),
(16, 'สีส้ม'),
(17, 'สีม่วง'),
(18, 'สีเทาผ้าสปัน'),
(19, 'สีแดงผ้าสปัน');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_bank`
--
ALTER TABLE `tbl_bank`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `tbl_desing`
--
ALTER TABLE `tbl_desing`
  ADD PRIMARY KEY (`desing_id`);

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `tbl_sell`
--
ALTER TABLE `tbl_sell`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `tbl_type`
--
ALTER TABLE `tbl_type`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `tbl_type_sub`
--
ALTER TABLE `tbl_type_sub`
  ADD PRIMARY KEY (`ts_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tbl_bank`
--
ALTER TABLE `tbl_bank`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_desing`
--
ALTER TABLE `tbl_desing`
  MODIFY `desing_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218;

--
-- AUTO_INCREMENT for table `tbl_sell`
--
ALTER TABLE `tbl_sell`
  MODIFY `s_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tbl_type`
--
ALTER TABLE `tbl_type`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_type_sub`
--
ALTER TABLE `tbl_type_sub`
  MODIFY `ts_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
