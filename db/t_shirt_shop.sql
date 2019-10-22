-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2019 at 07:44 AM
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
(3, '5431535463', 'กสิกรไทย', 'ออมทรัพย์', 'มงคล ศรีสุข', 'เทียนทะเล', 'imgb197504342620180818_223441.png'),
(4, '4453543233', 'ไทยพาณิชย์', 'ออมทรัพย์', 'สมบูรณ์ มั่งมี', 'บางบัวทอง', 'imgb133828463220180818_223607.jpg');

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
(36, 'รวดเร็ว ฉับไว', '', 'ที่อยู่22', '0914232511', 'member1', '123456', 'manboing007_za@hotmail.com', 'ex', 's10uenhntbn0mdk5hectj4qas2', 'yes', '2019-03-23 12:07:59'),
(37, 'บุษบา ลาลา', '', '66/99 แขวง/ตำบลรมณีย์ เขต/อำเภอกะปง จังหวัดพังงา รหัสไปรษณีย์ 82170', '0912365481', 'member2', '123456', 'osamble_boling@hotmail.com', 'user', 'u28cstf8f836950guguuc59cb6', 'yes', '2019-03-23 12:17:52'),
(38, 'asdasdasd', 'asdasd', '112 / 22  trdtdgsddfsad', '0873212313', '1', '1', 'asdasd@ads.dv', 'user', '4o9ntjhg2b15riqfsnf03nbup0', 'no', '2019-09-22 12:45:47');

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
(000074, 32, 'ชื่อทดสอบ', 'นามสกุลทดสอบ', 'sdsdกกกกff', 'boingza1@gmail.com', '0914232511', 2, '17647042520190922_190640.jpg', 'ไทยพาณิชย์', '4453543233', '2019-09-22', '14:06:00', 490.00, '', 50, '2019-09-22 12:06:40');

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
(177, 74, 93, 'เสื้อปั่นจักรยานสีฟ้า', 1, 490.00),
(178, 74, 92, 'เสื้อวิ่งสีแดง', 1, 490.00);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `p_id` int(11) NOT NULL,
  `t_id` int(11) NOT NULL,
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
  `p_size` varchar(10) NOT NULL,
  `p_ems` int(50) NOT NULL,
  `promo` float(10,2) NOT NULL,
  `p_sell` varchar(200) NOT NULL,
  `date_save` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`p_id`, `t_id`, `p_name`, `p_detial`, `p_price`, `p_unit`, `p_img1`, `p_img2`, `p_img3`, `p_img4`, `p_img5`, `p_view`, `p_qty`, `p_size`, `p_ems`, `promo`, `p_sell`, `date_save`) VALUES
(93, 23, 'เสื้อปั่นจักรยานสีฟ้า', '<p>สกรีนเสื้อจักรยาน รับออกแบบ และ ผลิตงานเสื้อจักรยาน มีเนื้อผ้าให้เลือก 4 ชนิด ได้แก่ ผ้า Poly Micro, ผ้า Poly เม็ดข้าวสาร, ผ้า Spandex, ผ้า TK<br />\r\nแต่ละเนื้อผ้านั้น มีคุณสมบัติที่แตกต่างกันดังนั้น เสื้อจักรยาน ของทางเรา สามารถตอบโจทย์ความต้องการของลูกค้าได้หลากหลาย ตามเนื้อผ้าที่ลูกค้าต้องการ</p>\r\n', 250.00, 'ตัว', 'img1182224129420190922_165240.jpg', 'img2182224129420190922_165240.jpg', 'img3182224129420190922_165240.jpg', '', '', 0, 209, 'M', 25, 0.00, '', '2019-10-22 07:42:17'),
(94, 24, 'เสื้อติดสกรีน', '<p>งานพิมพ์เครื่องหนัง สติ๊กเกอร์โลโก้<br />\r\nสำหรับเสื้อกีฬาหรือเสื้อทั่วไป<br />\r\nงานมีหลากหลายสีสันไม่จำกัดสี<br />\r\nเครื่องตัดสติ๊กเกอร์ Silhouette CAMEO V3<br />\r\nรองรับงานหลากหลาย เช่น ตัดเฟล็ก PU กำมะหยี่<br />\r\nเบอร์เสื้อและชื่อนักกีฬา งานสกรีน เสื้อกีฬา<br />\r\nงานเฟล็กพิมพ์เสื้อ ตัวอักษร ไดคัทโลโก้<br />\r\nและงานแฟชั่นต่างๆ</p>\r\n', 150.00, 'ตัว', 'img137102357520190922_165814.jpg', 'img237102357520190922_165814.jpg', '', '', '', 0, 150, 'S', 25, 0.00, '', '2019-10-22 07:42:20'),
(92, 22, 'เสื้อวิ่งสีแดง', '<p>รับผลิตเสื้อวิ่งคุณภาพสูง เราเป็นผู้นำด้านการพิมพ์ลงบนผ้าด้วยระบบดิจิตอลสกรีน คุณจึงสามารถมั่นใจได้ในคุณภาพสีสัน ที่ตรงกับความต้องการของคุณ เราเป็นผู้อยู่เบื้องหลังผู้ผลิตเสื้อกีฬามากว่า10ปี คุณภาพเนื้อผ้าที่สั่งทอเฉพาะTouchเท่านั้น จึงสร้างความโดดเด่นไม่เหมือนใคร การตัดเย็บที่ใส่ใจทุกรายละเอียด โดยช่างผู้ชำนาญมาตราฐานส่งออก รวมถึงขั้นตอนการQCรายละเอียดในทุกแผนก ทุกขั้นตอน ทำให้ผลงานเป็นที่ยอมรับถึงคุณภาพอย่างแท้จริง</p>\r\n\r\n<ul>\r\n	<li>พิมพ์ด้วยเครื่องพิมพ์EPSON และ สีพิมพ์ผ้าแท้ EPSON เท่านั้น ซึ่งได้รับมาตรฐาน OEKO TEX ซึ่งมั่นใจไม่เกิดสารก่อภูมิแพ้ อาการคันโดยไม่รู้สาเหตุ</li>\r\n	<li>เนื้อผ้าสั่งทอพิเศษเฉพาะTouch เท่านั้น มีให้เลือกหลากหลายตามความต้องการ</li>\r\n	<li>แพทเทิ้ลเป็นแบบเสื้อวิ่งมาตรฐานสากลเช่นเดียวกับทัวนาเม้นต์ระดับโลก</li>\r\n	<li>สามารถพิมพ์ลวดลายได้ทุกชิ้นส่วน ทั้งตัว ไม่จำกัดเฉดสี และ ปริมาณสี</li>\r\n	<li>Touchเป็นผู้เชี่ยวชาญด้านการควบคุมสี Color Management จึงมั่นใจสีสันที่ตรงตอบโจทย์ทุกความต้องการ</li>\r\n	<li>เรามีฟังชั่นการพิมพ์&nbsp;<strong>&ldquo;</strong><strong><a href=\"http://touch-printing.com/product/%E0%B8%A3%E0%B8%B1%E0%B8%9A%E0%B8%9E%E0%B8%B4%E0%B8%A1%E0%B8%9E%E0%B9%8C%E0%B8%87%E0%B8%B2%E0%B8%99%E0%B8%AA%E0%B8%B5%E0%B8%AA%E0%B8%B0%E0%B8%97%E0%B9%89%E0%B8%AD%E0%B8%99%E0%B9%81%E0%B8%AA%E0%B8%87/\">สีสะท้อนแสง</a>&rdquo;</strong>&nbsp;โดยไม่กระทบกับสีปกติ ทำให้ได้ความโดดเด่น ไม่เหมือนใคร</li>\r\n	<li>มาตรฐานเครื่องมือ ทำให้ภาพและตัวหนังสือคมชัดแม้Fontขนาดเล็ก การันตีคุณภาพ &ldquo;ต้องพิสูจน์ถึงรู้ว่าแตกต่าง&rdquo;</li>\r\n	<li>จักรอุตสาหกรรมมาตรฐานผลิตเสื้อผ้าส่งออกไปเขตประเทศยูโรโซน</li>\r\n	<li>ทีมQC(Quality Control) เป็นสิ่งสำคัญเพื่อป้องกันงานผิดพลาด ในทุกขั้นตอนการผลิต</li>\r\n	<li>งานเย็บที่ฝีเข็มละเอียด ประณีต เป็นหัวใจในการตัดเย็บของเรา เพื่อทำให้เสื้อของคุณดูมีระดับ</li>\r\n</ul>\r\n', 240.00, 'ตัว', 'img1148709296820190922_164356.jpg', 'img2142087918920190922_162340.jpg', '', '', '', 0, 249, 'L', 50, 0.00, 'koramex', '2019-10-22 07:42:22'),
(91, 22, 'เสื้อวิ่งสีฟ้า', '<p>รับผลิตเสื้อวิ่งคุณภาพสูง เราเป็นผู้นำด้านการพิมพ์ลงบนผ้าด้วยระบบดิจิตอลสกรีน คุณจึงสามารถมั่นใจได้ในคุณภาพสีสัน ที่ตรงกับความต้องการของคุณ เราเป็นผู้อยู่เบื้องหลังผู้ผลิตเสื้อกีฬามากว่า10ปี คุณภาพเนื้อผ้าที่สั่งทอเฉพาะTouchเท่านั้น จึงสร้างความโดดเด่นไม่เหมือนใคร การตัดเย็บที่ใส่ใจทุกรายละเอียด โดยช่างผู้ชำนาญมาตราฐานส่งออก รวมถึงขั้นตอนการQCรายละเอียดในทุกแผนก ทุกขั้นตอน ทำให้ผลงานเป็นที่ยอมรับถึงคุณภาพอย่างแท้จริง</p>\r\n', 240.00, 'ตัว', 'img168490039320190922_163913.jpg', 'img2194209985620190922_162210.jpg', 'img3194209985620190922_162210.jpg', 'img4194209985620190922_162210.jpg', '', 0, 200, 'M', 50, 0.00, 'koramex', '2019-10-22 07:42:26'),
(90, 21, 'เสื้อบาสสีดำ', '<p>รับออกแบบและ&nbsp;ผลิตเสื้อบาสเก็ตบอล ด้วยประสบการณ์อันยาวนาน เลือกใช้แพลทเทิ้ลเสื้อบาสเก็ตบอลโดยตรง ซึ่งแพลทเทิ้ลเสื้อบาสเก็ตบอลโดยตรงนั้น จะมีขนาด ความกว้าง-ยาว และรอบวงแขน ไม่เหมือนเสื้อกีฬาประเภทอื่น ทำให้การเล่น และ กาสวมใส่สบาย คุณสามารถดึงศักยภาพของตัวคุณออกมาได้อย่างเต็มที่ ได้รับการรับรองมาตรฐานจากสมาคมนานาชาติ</p>\r\n', 250.00, 'ตัว', 'img116614398920190922_163458.jpg', 'img2193623781920190922_161826.jpg', '', '', '', 0, 150, 'S', 50, 0.00, 'koramex', '2019-10-22 07:42:28'),
(96, 25, 'testet', '<p>testtest</p>\r\n', 212.00, 'ตัว', 'img1190410537920191012_154523.png', 'img2190410537920191012_154523.png', '', '', '', 0, 40, 'S', 21, 0.00, '', '2019-10-22 06:52:26'),
(97, 25, 'testet', '<p>testtest</p>\r\n', 212.00, 'ตัว', 'img1190410537920191012_154523.png', 'img2190410537920191012_154523.png', '', '', '', 0, 40, 'M', 21, 0.00, '', '2019-10-22 06:52:28'),
(98, 25, 'testet', '<p>testtest</p>\r\n', 212.00, 'ตัว', 'img1190410537920191012_154523.png', 'img2190410537920191012_154523.png', '', '', '', 0, 40, 'L', 21, 0.00, '', '2019-10-22 07:38:07');

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
(23, '', 'เสื้อปั่นจักยาน'),
(22, '', 'เสื้อวิ่ง'),
(21, '', 'เสื้อบาส'),
(24, '', 'เสื้อสกรีน'),
(25, '', 'testest');

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
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `tbl_sell`
--
ALTER TABLE `tbl_sell`
  MODIFY `s_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tbl_type`
--
ALTER TABLE `tbl_type`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
