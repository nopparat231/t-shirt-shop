-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2019 at 09:25 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

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
(17, 'rootrdfg', '123123123', 'sdfsdfsa', 'asdasd', '0222222222', '23ssdfn@superadmin.com', 'ex', '2018-11-27 12:22:47'),
(19, 'asdad', '123123123', 'asdasd', 'asdasd', '0222222222', '23superadssmin@superyyadmin.com', 'ex', '2018-11-26 17:39:12'),
(20, 'sucha', '123456789', 'สุชา ชาติ', '1600 ถ.เพชรบุรีตัดใหม่\r\nแขวงมักกะสัน\r\nเขตราชเทวี\r\nกรุงเทพฯ\r\n10400', '0896454231', 'sucha@hotmail.com', 'admin', '2018-12-02 07:38:35'),
(21, 'thai', '123456789', 'ไทย สะสม', '1600 ถ.เพชรบุรีตัดใหม่\r\nแขวงมักกะสัน\r\nเขตราชเทวี\r\nกรุงเทพฯ\r\n10401', '0864546216', 'thai@hotmail.com', 'admin', '2018-12-02 07:41:19'),
(22, 'stam', '123456789', 'แสตม นาม', '1600 ถ.เพชรบุรีตัดใหม่\r\nแขวงมักกะสัน\r\nเขตราชเทวี\r\nกรุงเทพฯ\r\n10400', '0836324154', 'stam@hotmail.com', 'admin', '2018-12-02 07:49:04'),
(23, 'fam', '123456789', 'แฟม ชาติ', '1600 ถ.เพชรบุรีตัดใหม่\r\nแขวงมักกะสัน\r\nเขตราชเทวี\r\nกรุงเทพฯ\r\n10400', '0985465451', 'fam@hotmail.com', 'admin', '2018-12-02 07:53:12'),
(24, 'top', '123456789', 'ท็อป นาม', 'ซอยลาดพร้าว 110 ถนนลาดพร้าว\r\n\r\nแขวงคลองจั่น เขตบางกะปิ\r\n\r\nกรุงเทพมหานคร\r\n\r\n10240', '0916548668', 'top@hotmail.com', 'staff', '2018-12-02 07:59:15'),
(25, 'namsai', '123456789', 'น้ำ ใส', 'ซอยลาดพร้าว 110 ถนนลาดพร้าว\r\n\r\nแขวงคลองจั่น เขตบางกะปิ\r\n\r\nกรุงเทพมหานคร\r\n\r\n10240', '0864321345', 'nam@hotmail.com', 'staff', '2018-12-02 08:03:39'),
(26, 'sai', '123456789', 'ไทร สา', 'ซอยลาดพร้าว 110 ถนนลาดพร้าว\r\n\r\nแขวงคลองจั่น เขตบางกะปิ\r\n\r\nกรุงเทพมหานคร\r\n\r\n10240', '0816645889', 'sai@hotmail.com', 'staff', '2018-12-02 08:05:39'),
(27, 'pun', '123456789', 'ปัญ ติยะ', 'ซอยลาดพร้าว 110 ถนนลาดพร้าว\r\n\r\nแขวงคลองจั่น เขตบางกะปิ\r\n\r\nกรุงเทพมหานคร\r\n\r\n10240', '0816465789', 'pun@hotmail.com', 'staff', '2018-12-02 08:14:52'),
(28, 'orn', '123456789', 'อร เจีย', 'ซอยลาดพร้าว 110 ถนนลาดพร้าว\r\n\r\nแขวงคลองจั่น เขตบางกะปิ\r\n\r\nกรุงเทพมหานคร\r\n\r\n10240', '0841645478', 'orn@hotmail.com', 'staff', '2018-12-02 08:14:55'),
(29, 'noey', '123456789', 'เนย วัชรทัศ', 'ซอยลาดพร้าว 110 ถนนลาดพร้าว\r\n\r\nแขวงคลองจั่น เขตบางกะปิ\r\n\r\nกรุงเทพมหานคร\r\n\r\n10240', '0816454897', 'noey@hotmail.com', 'superadmin', '2018-12-02 08:31:18'),
(30, 'music', '123456789', 'มิวสิก สุธรรม', 'ซอยลาดพร้าว 110 ถนนลาดพร้าว\r\n\r\nแขวงคลองจั่น เขตบางกะปิ\r\n\r\nกรุงเทพมหานคร\r\n\r\n10240', '0816545648', 'music@hotmail.com', 'superadmin', '2018-12-02 08:36:25'),
(31, 'kaew', '123456789', 'แก้ว วรรณ', 'ซอยลาดพร้าว 110 ถนนลาดพร้าว\r\n\r\nแขวงคลองจั่น เขตบางกะปิ\r\n\r\nกรุงเทพมหานคร\r\n\r\n10240', '0914567894', 'kaew@hotmail.com', 'superadmin', '2018-12-02 08:38:59'),
(32, 'pu', '123456789', 'ปู จิรดา', 'ซอยลาดพร้าว 110 ถนนลาดพร้าว\r\n\r\nแขวงคลองจั่น เขตบางกะปิ\r\n\r\nกรุงเทพมหานคร\r\n\r\n10240', '0915467895', 'pu@hotmail.com', 'superadmin', '2018-12-02 08:41:25'),
(33, 'jane', '123456789', 'เจน', 'ซอยลาดพร้าว 110 ถนนลาดพร้าว\r\n\r\nแขวงคลองจั่น เขตบางกะปิ\r\n\r\nกรุงเทพมหานคร\r\n\r\n10240', '0915468798', 'jane@hotmail.com', 'superadmin', '2018-12-02 08:43:03'),
(34, 'ad', 'ad123456', 'นาจิง จัดการ', '42 หมู่ 1 บ้านสังแก  ตำบลสะเดา  อำเภอบัวเชด  จังหวัดสุรินทร์  32230', '0818915917', '12dd@ff.cc', 'admin', '2019-06-03 07:35:29'),
(35, '12', '123456', 'พรเทพ นารักกา', '42 หมู่ 1 บ้านสังแกตำบลสะเดาอำเภอบัวเชดจังหวัดสุรินทร์322', '0816181810', 'ponn@hotmail.com', 'admin', '2019-06-03 07:49:31'),
(36, 'chai', '123456', 'ชัยวัด มีการใจ', '93/1952 แขวงหนองค้างพลู เขตบางใหญ่ แชวง', '0891951900', 'chai01@hotmail.com', 'superadmin', '2019-06-03 09:42:36');

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
(189, 3, 113, 'สีขาว/ม่วง', 1, 220.00);

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
(113, 28, 1, 'สีขาว/ม่วง', '', 150.00, 'ตัว', 'img132736269420191022_101254.png', 'img29662147220191023_145041.png', '', '', '', 0, 99, 'M', 70, 0.00, '', '2019-10-23 09:24:24'),
(116, 28, 1, 'สีขาว/ม่วง', '', 150.00, 'ตัว', 'img132736269420191022_101254.png', 'img29662147220191023_145041.png', '', '', '', 0, 77, 'L', 70, 0.00, '', '2019-10-23 08:55:30'),
(114, 28, 2, 'สีดำ/ขาว', '', 150.00, 'ตัว', 'img1182767315920191022_101158.png', '', '', '', '', 0, 12, 'M', 70, 0.00, '', '2019-10-23 08:42:49'),
(115, 28, 2, 'สีดำ/ขาว', '', 150.00, 'ตัว', 'img1182767315920191022_101158.png', '', '', '', '', 0, 16, 'L', 70, 0.00, '', '2019-10-23 08:55:40');

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
(31, '', 'เสื้อคอตตอน สีพื้น');

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
(2, 'สีดำ/ขาว');

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
  MODIFY `order_id` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

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
  MODIFY `ts_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
