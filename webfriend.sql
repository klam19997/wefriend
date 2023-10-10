-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2023 at 07:13 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `am_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL COMMENT 'ลำดับที่',
  `orderID` int(10) UNSIGNED ZEROFILL NOT NULL COMMENT 'เลขที่ใบสั่งซื้อ',
  `pro_id` int(6) UNSIGNED ZEROFILL NOT NULL COMMENT 'รหัสสินค้า',
  `orderPrice` float NOT NULL COMMENT 'ราคาสินค้า',
  `orderQty` int(11) NOT NULL COMMENT 'จำนวนที่สั่งซื้อ',
  `Total` float NOT NULL COMMENT 'ราคารวม'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `orderID`, `pro_id`, `orderPrice`, `orderQty`, `Total`) VALUES
(1, 0000000000, 000001, 5000, 3, 15000),
(2, 0000000000, 000003, 50000, 2, 100000),
(3, 0000000000, 000004, 48498, 6, 290988),
(4, 0000000001, 000002, 5000, 1, 5000),
(5, 0000000002, 000003, 50000, 1, 50000),
(6, 0000000003, 000003, 50000, 1, 50000),
(7, 0000000004, 000003, 50000, 1, 50000),
(8, 0000000005, 000002, 5000, 2, 10000),
(9, 0000000006, 000003, 50000, 1, 50000),
(10, 0000000009, 000001, 5000, 1, 5000),
(11, 0000000009, 000003, 50000, 1, 50000),
(12, 0000000010, 000002, 5000, 1, 5000),
(13, 0000000010, 000003, 50000, 1, 50000),
(14, 0000000010, 000001, 5000, 1, 5000),
(15, 0000000011, 000001, 5000, 1, 5000),
(16, 0000000012, 000001, 5000, 1, 5000),
(17, 0000000012, 000004, 48498, 1, 48498),
(18, 0000000012, 000003, 50000, 1, 50000),
(19, 0000000013, 000003, 50000, 1, 50000),
(20, 0000000014, 000002, 5000, 1, 5000),
(21, 0000000015, 000002, 5000, 1, 5000),
(22, 0000000015, 000001, 5000, 1, 5000),
(23, 0000000015, 000004, 48498, 1, 48498),
(24, 0000000016, 000002, 5000, 1, 5000),
(25, 0000000017, 000003, 50000, 1, 50000),
(26, 0000000018, 000002, 5000, 1, 5000),
(27, 0000000020, 000002, 5000, 1, 5000),
(28, 0000000021, 000002, 5000, 1, 5000),
(29, 0000000022, 000002, 5000, 1, 5000),
(30, 0000000023, 000002, 5000, 1, 5000),
(31, 0000000024, 000004, 48498, 1, 48498),
(32, 0000000025, 000002, 5000, 1, 5000),
(33, 0000000026, 000002, 5000, 1, 5000),
(34, 0000000000, 000002, 5000, 1, 5000),
(35, 0000000027, 000003, 50000, 1, 50000),
(36, 0000000028, 000003, 50000, 1, 50000),
(37, 0000000028, 000002, 5000, 1, 5000),
(38, 0000000028, 000001, 5000, 1, 5000),
(39, 0000000029, 000003, 50000, 9, 450000),
(40, 0000000030, 000002, 5000, 5, 25000),
(41, 0000000030, 000003, 50000, 4, 200000),
(42, 0000000031, 000003, 50000, 1, 50000),
(43, 0000000032, 000002, 5000, 1, 5000),
(44, 0000000033, 000000, 1000000, 3, 3000000),
(45, 0000000033, 000001, 5000, 3, 15000),
(46, 0000000033, 000004, 100, 1, 100),
(47, 0000000034, 000002, 5000, 1, 5000),
(48, 0000000034, 000003, 50000, 1, 50000),
(49, 0000000035, 000002, 5000, 1, 5000),
(50, 0000000000, 000003, 50000, 2, 100000),
(51, 0000000000, 000000, 200000, 1, 200000),
(52, 0000000000, 000004, 100, 3, 300),
(53, 0000000000, 000001, 5000, 3, 15000),
(54, 0000000000, 000003, 50000, 1, 50000),
(55, 0000000000, 000004, 100, 5, 500),
(56, 0000000000, 000002, 5000, 1, 5000),
(57, 0000000000, 000000, 200000, 1, 200000),
(58, 0000000036, 000002, 5000, 1, 5000),
(59, 0000000036, 000004, 100, 1, 100),
(60, 0000000037, 000001, 5000, 1, 5000),
(61, 0000000037, 000004, 100, 5, 500),
(62, 0000000037, 000000, 200000, 1, 200000);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `orderID` int(10) UNSIGNED ZEROFILL NOT NULL COMMENT 'เลขที่ใบสั่งซื้อ',
  `pay_money` double NOT NULL COMMENT 'จำนวนเงินที่จ่าย',
  `pay_date` date NOT NULL COMMENT 'วันที่ชำระเงิน',
  `pay_time` time NOT NULL COMMENT 'เวลาโอนเงิน',
  `pay_image` varchar(100) NOT NULL COMMENT 'รูปหลักฐานการโอนเงิน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`orderID`, `pay_money`, `pay_date`, `pay_time`, `pay_image`) VALUES
(0000000028, 60000, '2023-10-18', '02:02:00', 'b_65236d3318565.jpg'),
(0000000037, 205500, '0000-00-00', '00:00:00', 'b_6524173a5bcb4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_id` varchar(6) NOT NULL COMMENT 'รหัสสินค้า',
  `pro_name` varchar(255) NOT NULL COMMENT 'ชื่อสินค้า',
  `detail` text NOT NULL COMMENT 'รายละเอียดสินค้า',
  `type_id` int(3) UNSIGNED ZEROFILL NOT NULL COMMENT 'รหัสประเภทสินค้า',
  `price` float NOT NULL COMMENT 'ราคา',
  `amount` int(11) NOT NULL COMMENT 'จำนวนคงเหลือ',
  `image` varchar(50) NOT NULL COMMENT 'รูปภาพ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `pro_name`, `detail`, `type_id`, `price`, `amount`, `image`) VALUES
('000001', ' เทส', ' ทดสอบ 123456', 001, 5000, 98, 'pr_651d8d8e836b1.jpg'),
('000002', 'เทส 2 ', '5555', 001, 5000, 90, 'pr_651d8e1715594.jpg'),
('000003', 'เทส 3 ', '6666', 001, 50000, 56, 'pr_651d8e2cb99fd.jpg'),
('000004', ' เทส 56789', '55555', 004, 100, 84, 'pr_65215df278a2f.jpg'),
('S12345', 'คอม', 'คอมระดับพรีเมี่ยมใ', 004, 200000, 17, 'pr_65212b3713f63.jpg'),
('S54321', 'เทสดี๊ดี', '555', 001, 1000000, 22, 'pr_65214562da575.jpg'),
('เทสดี9', 'ทดสอบ', '5555+', 001, 999999, 0, 'pr_65214470779ac.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_customer`
--

CREATE TABLE `tb_customer` (
  `id` int(10) UNSIGNED ZEROFILL NOT NULL COMMENT 'รหัสสมาชิก',
  `firstname` varchar(30) NOT NULL COMMENT 'ชื่อ',
  `lastname` varchar(30) NOT NULL COMMENT 'นามสกุล',
  `address` text NOT NULL COMMENT 'ที่อยู่',
  `telephone` varchar(10) NOT NULL COMMENT 'เบอร์โทรศัพท์',
  `username` varchar(20) NOT NULL COMMENT 'Username',
  `password` varchar(128) NOT NULL COMMENT 'Password'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_customer`
--

INSERT INTO `tb_customer` (`id`, `firstname`, `lastname`, `address`, `telephone`, `username`, `password`) VALUES
(0000000003, 'กฤษกร', 'สนเอี่ยม', '21 ม.4 ต.ลำเพียก อ.ครบุรี จ.นครราชสีมา 30250', '0937293146', 'pop123', 'be1cf58ad385b7f836f17fe452a406c47d9fee0fd04458252b2b63c4333ba50873272b491de79a1c07a2a9b95979d1a61019296f35a8be32d648e23df25d2856');

-- --------------------------------------------------------

--
-- Table structure for table `tb_employee`
--

CREATE TABLE `tb_employee` (
  `id` int(6) UNSIGNED ZEROFILL NOT NULL COMMENT 'รหัสสมาชิก',
  `name` varchar(30) NOT NULL COMMENT 'ชื่อ',
  `lastname` varchar(30) NOT NULL COMMENT 'นามสกุล',
  `telephone` varchar(10) NOT NULL COMMENT 'เบอร์โทรศัพท์',
  `username` varchar(10) NOT NULL COMMENT 'Username',
  `password` varchar(128) NOT NULL COMMENT 'Password'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_employee`
--

INSERT INTO `tb_employee` (`id`, `name`, `lastname`, `telephone`, `username`, `password`) VALUES
(000007, 'กฤษกร', 'สนเอี่ยม', '937293146', 'klam19997', 'da97cf343d079ef7135964fb20e9f73775fe8423a1de8a163ff9229eca839dddb726672eb2baa3285d3fe53073588645ca6a676c4fa3a627d1ee652f65d77b0a'),
(000012, 'เทสดี', 'เทสดี', '123456789', 'a12345', '3d6afd6361ad3fbc98e8b1454548d6ed2af6011d40fdf58ddc503fcfc3caf79d5f47906912a723edc0923022ff1e3b96f911d25f9e11eadf996bbd2e57fb9749');

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `orderID` int(10) UNSIGNED ZEROFILL NOT NULL COMMENT 'เลขที่ใบสั่งซื้อ',
  `cus_id` int(10) UNSIGNED ZEROFILL NOT NULL COMMENT 'รหัสลูกค้า',
  `cus_name` varchar(60) NOT NULL COMMENT 'ชื่อ-นามสกุล',
  `address` text NOT NULL COMMENT 'ที่อยู่การจัดส่งสินค้า',
  `telephone` varchar(10) NOT NULL COMMENT 'เบอร์โทรศัพท์',
  `total_price` float NOT NULL COMMENT 'ราคารวมสุทธิ',
  `id_ems` varchar(20) NOT NULL COMMENT 'เลขที่ EMS',
  `order_status` varchar(1) NOT NULL COMMENT '0=ยกเลิก, 1=ยังไม่ชำระเงิน, 2=ชำระเงินแล้ว',
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'วันที่สั่งซื้อ',
  `dateMonth` varchar(30) NOT NULL COMMENT 'เดือน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_order`
--

INSERT INTO `tb_order` (`orderID`, `cus_id`, `cus_name`, `address`, `telephone`, `total_price`, `id_ems`, `order_status`, `reg_date`, `dateMonth`) VALUES
(0000000029, 0000000000, '45634534', ' dfsdfsdf', ' 085752432', 450000, '', '1', '2023-10-07 08:40:10', ''),
(0000000031, 0000000000, 'dfas', ' asdasd', ' 453453453', 50000, '', '1', '2023-10-07 08:55:39', ''),
(0000000032, 0000000000, 'asdasd', ' asdasd', ' 243453', 5000, '', '0', '2023-10-07 09:10:46', ''),
(0000000033, 0000000000, 'สุรวดี โตสมภาพ', 'นน', ' 012345678', 3015100, '', '2', '2023-10-07 16:16:46', ''),
(0000000037, 0000000003, 'กฤษกร สนเอี่ยม', ' 21 ม.4 ต.ลำเพียก อ.ครบุรี จ.นครราชสีมา 30250 ', ' 093729314', 205500, 'EQ159318803TH', '3', '2023-10-09 15:07:38', '');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `type_id` int(3) UNSIGNED ZEROFILL NOT NULL COMMENT 'รหัสประเภทสินค้า',
  `type_name` varchar(50) NOT NULL COMMENT 'รหัสชื่อประเภทสินค้า'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type_id`, `type_name`) VALUES
(001, 'กีต้าร์'),
(002, 'เครื่องดนตรี'),
(003, 'สายกีต้าร์'),
(004, 'อื่นๆ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`orderID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_employee`
--
ALTER TABLE `tb_employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`orderID`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ลำดับที่', AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `tb_customer`
--
ALTER TABLE `tb_customer`
  MODIFY `id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT COMMENT 'รหัสสมาชิก', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_employee`
--
ALTER TABLE `tb_employee`
  MODIFY `id` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT COMMENT 'รหัสสมาชิก', AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `orderID` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT COMMENT 'เลขที่ใบสั่งซื้อ', AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `type_id` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT COMMENT 'รหัสประเภทสินค้า', AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
