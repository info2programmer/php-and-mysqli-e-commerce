-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jul 26, 2017 at 06:33 AM
-- Server version: 5.6.35-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_balas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `email`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'piyalibasu', 'ca34cb452c9c12090f552f15b70d7763'),
(3, 'anupam', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `balas_cart`
--

CREATE TABLE IF NOT EXISTS `balas_cart` (
  `Cart_ID` int(11) NOT NULL AUTO_INCREMENT,
  `User_ID` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_price` float NOT NULL,
  `qty` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`Cart_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=76 ;

--
-- Dumping data for table `balas_cart`
--

INSERT INTO `balas_cart` (`Cart_ID`, `User_ID`, `product_id`, `product_price`, `qty`, `status`) VALUES
(36, '204938054158ad45c3910ec8.32052805', 79, 90, 1, 'pending'),
(37, '193140344058ad81eb859894.50517022', 46, 297, 1, 'pending'),
(39, '53290789058ae6d56cd8a35.64828575', 69, 135, 1, 'pending'),
(40, '135337775458ae81e4e00918.09952660', 67, 180, 1, 'pending'),
(41, '135337775458ae81e4e00918.09952660', 69, 135, 1, 'pending'),
(42, '135337775458ae81e4e00918.09952660', 79, 90, 1, 'pending'),
(43, '197428019358afc660162500.63588400', 55, 288, 1, 'pending'),
(44, '83309638658b2ce17800625.10837672', 73, 945, 1, 'pending'),
(45, '83309638658b2ce17800625.10837672', 49, 837, 1, 'pending'),
(46, '60137422758bba1dc714483.24604813', 40, 405, 1, 'pending'),
(47, '188813349658bda299564f75.58350315', 86, 900, 1, 'pending'),
(48, '211704851058bfb10d9c9f16.29818895', 31, 720, 1, 'pending'),
(51, '79072661858c3b14f131cc6.96643638', 97, 405, 1, 'pending'),
(52, '151780741158c3b42f33b753.45827657', 70, 495, 1, 'pending'),
(53, '109848163558c3cdb20d6e75.86769960', 98, 360, 1, 'pending'),
(54, '163503483958c3ea790be8d1.52708224', 100, 360, 1, 'pending'),
(55, '79072661858c3b14f131cc6.96643638', 113, 234, 1, 'pending'),
(56, '180667445458c3f015eb9c74.18760172', 120, 288, 1, 'pending'),
(57, '21974877658c525dd8f4981.64332291', 68, 162, 1, 'pending'),
(59, '122261251058c5482fcb4266.98144307', 120, 288, 1, 'pending'),
(60, '33688422858c64113ca7df1.30472915', 110, 180, 10, 'pending'),
(61, '5370773858c7992a3bd056.97110580', 78, 360, 10, 'pending'),
(62, '32158280158c8027bb12386.88446589', 114, 234, 1, 'pending'),
(63, '177111682658c8dc0b9351b0.26554186', 133, 1, 1, 'pending'),
(64, '201422345458caceac1285a6.19965266', 113, 234, 1, 'pending'),
(65, '146356642858d27d864b9929.96172252', 31, 720, 1, 'pending'),
(66, '176615743158d505c33f2d62.24797309', 34, 1440, 1, 'pending'),
(67, '47535316358d60e6a864b12.80778907', 77, 450, 1, 'pending'),
(68, '149588936658d8ce40c3d231.00818757', 41, 279, 1, 'pending'),
(69, '198082928458d8ea083997e4.29843817', 54, 315, 1, 'pending'),
(70, '153009363358d93b8e71b1a7.48951932', 79, 90, 1, 'pending'),
(71, '13226739058e1f7fa3cd0d7.01467857', 41, 279, 1, 'pending'),
(72, '197422002358ea0a9228e701.91166076', 55, 288, 1, 'pending'),
(73, '1080412114590df073a01114.81558661', 108, 315, 10, 'pending'),
(74, '925696934593263dc8f11b8.08014137', 151, 2160, 2, 'pending'),
(75, '2089831850595229345073c0.58675917', 115, 234, 1, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `balas_newsletter`
--

CREATE TABLE IF NOT EXISTS `balas_newsletter` (
  `request_id` int(11) NOT NULL AUTO_INCREMENT,
  `request_by` varchar(255) NOT NULL,
  `datetime` varchar(255) NOT NULL,
  PRIMARY KEY (`request_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `balas_newsletter`
--

INSERT INTO `balas_newsletter` (`request_id`, `request_by`, `datetime`) VALUES
(1, 'buti_253', '22-02-2017 11:31'),
(2, 'sritamachatterjee145@gmail.com', '01-03-2017 16:18'),
(3, 'info2programmer@gmail.com', '03-04-2017 13:04'),
(4, 'info2programmer@gmail.com', '11-04-2017 15:47');

-- --------------------------------------------------------

--
-- Table structure for table `balas_order`
--

CREATE TABLE IF NOT EXISTS `balas_order` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `cart_id` varchar(255) NOT NULL,
  `order_by` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `landmark` varchar(255) DEFAULT NULL,
  `pin` varchar(6) NOT NULL,
  `state` varchar(255) NOT NULL,
  `totalamount` float NOT NULL,
  `deliverycharge` float NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` time NOT NULL,
  `mode` varchar(255) NOT NULL,
  `payment` tinyint(1) NOT NULL DEFAULT '0',
  `current_status` varchar(255) NOT NULL DEFAULT 'Pending',
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `balas_order`
--

INSERT INTO `balas_order` (`order_id`, `cart_id`, `order_by`, `email`, `phone`, `address`, `landmark`, `pin`, `state`, `totalamount`, `deliverycharge`, `date`, `time`, `mode`, `payment`, `current_status`) VALUES
(22, '204938054158ad45c3910ec8.32052805', 'Sanjukta basu', 'basu.sanjukta20@gmail.com', '2343254364', 'fghdxhfgd', '', '700000', 'West Bengal', 90, 0, '2017-02-22', '13:34:00', 'Cash On Delivery', 1, 'Shipped'),
(24, '135337775458ae81e4e00918.09952660', 'Roma Roy', 'romaroy.smart@gmail.com', '9836808231', '8A Asoke Road\r\nGanguly Bagan East', 'Besides BOI ATM', '700084', 'West Bengal', 405, 0, '2017-02-23', '12:06:00', 'Cash On Delivery', 1, 'Pending'),
(25, '188813349658bda299564f75.58350315', 'Annopurna Sen', 'anr.365@gmail.com', '9830563985', '165 K B S Road, New Town. Kolkata 136', '', '700136', 'West Bengal', 900, 0, '2017-03-06', '23:28:00', 'Cash On Delivery', 1, 'Pending'),
(51, '32158280158c8027bb12386.88446589', 'Piyali Basu', 'piyalibasu70@gmail.com', '9830728668', 'ganguly bagan, kolkata-84', 'ganguly bagan bus stand ', '700084', 'West Bengal', 234, 50, '14-03-2017', '20:20:00', 'Online', 1, 'Pending'),
(53, '177111682658c8dc0b9351b0.26554186', 'Annesha Roy', 'info2programmer@gmail.com', '9547763998', 'Demo', '', '700052', 'West Bengal', 1, 0, '15-03-2017', '11:51:00', 'Online', 1, 'Pending'),
(54, '47535316358d60e6a864b12.80778907', 'hj', 'hyujyu', 'ujuj', 'kjnoijoi', 'p]-o', '789456', 'Andaman and Nicobar', 450, 50, '25-03-2017', '12:25:00', 'Online', 0, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `balas_product`
--

CREATE TABLE IF NOT EXISTS `balas_product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `selling` float NOT NULL,
  `special` tinyint(1) DEFAULT NULL,
  `SKU` varchar(255) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=154 ;

--
-- Dumping data for table `balas_product`
--

INSERT INTO `balas_product` (`product_id`, `product_name`, `description`, `image`, `price`, `selling`, `special`, `SKU`) VALUES
(16, 'Necklace Set (Kundan Set)', 'Necklace Set (Kundan Set)', '533e431d9102235d8101377f788ea295.jpg', 5040, 4536, 1, 'BCNS001'),
(17, 'Necklace Set (Kundan Set)', 'Necklace Set (Kundan Set)', '55857c62b12f8c69db0e7d12d623021f.jpg', 4700, 4230, 1, 'BCNS002'),
(18, 'Necklace Set (A.D Set)', 'Necklace Set (A.D Set)', '4b61897d67996aa7b24a83e4496f20bc.jpg', 2050, 1845, 1, 'BCNS003'),
(19, 'Necklace Set (A.D Set)', 'Necklace Set (A.D Set)', 'bbdabf5eb9bbb3ff36a89f1c88e24a2e.jpg', 3300, 2970, 1, 'BCNS004'),
(20, 'Necklace Set (Kundan Set)', 'Necklace Set (Kundan Set)', '4faa9b3afbf071a09895dae87d9d30e0.jpg', 1800, 1620, 1, 'BCNS005'),
(21, 'Necklace Set (Kundan Set)', 'Necklace Set (Kundan Set)', '3286d7ffca66f36968c60a936aaa07c4.jpg', 3300, 2970, 1, 'BCNS006'),
(22, 'Necklace Set (Antique Set)', 'Necklace Set (Antique Set)', 'd1eb98346f1e5cb10df1efe4b03dc45a.jpg', 2600, 2340, 1, 'BCNS007'),
(23, 'Necklace Set (Antique Set)', 'Necklace Set (Antique Set)', 'f4fceef8106c60d49d5be4d2ba8a5529.jpg', 2600, 2340, 1, 'BCNS008'),
(24, 'Necklace Set (Antique Set)', 'Necklace Set (Antique Set)', 'b8e36124f52e64de51d9ded4d19c0798.jpg', 1600, 1440, 1, 'BCNS009'),
(25, 'Necklace Set (Antique Set)', 'Necklace Set (Antique Set)', 'ce58f1b4fd2634908d04ca7235624f04.jpg', 3300, 2970, 1, 'BCNS010'),
(26, 'Necklace (Western Neckpiece)', 'Necklace (Western Neckpiece)', '40b9fe8178a9f7cd79917254e7a9585c.jpg', 700, 630, 1, 'BCN011'),
(27, 'Necklace (Western Neckpiece)', 'Necklace (Western Neckpiece)', 'bdbe20b427556f8fe8dab9d80e266344.jpg', 1400, 1260, 1, 'BCN012'),
(28, 'Necklace (Western Neckpiece)', 'Necklace (Western Neckpiece)', 'cb1395e93be23af297c2a4971018797a.jpg', 600, 540, 1, 'BCN013'),
(29, 'Necklace (Western Neckpiece)', 'Necklace (Western Neckpiece)', '4b751545cbb72dd8130ed2ba53f13e6e.jpg', 1300, 1170, 1, 'BCN014'),
(30, 'Necklace (Western Neckpiece)', 'Necklace (Western Neckpiece)', '1d04a96981f67fbe032c30e433b66e2a.jpg', 800, 720, 1, 'BCN015'),
(31, 'Necklace (Western Neckpiece)', 'Necklace (Western Neckpiece)', '2d34b4a3148b5aa96cf0c5dc9cc96867.jpg', 800, 720, 1, 'BCN016'),
(32, 'Necklace (Western Neckpiece)', 'Necklace (Western Neckpiece)', 'a1d1a8c45370243281d6e049ac8bb582.jpg', 600, 540, 1, 'BCN017'),
(33, 'Necklace (Western Neckpiece)', 'Necklace (Western Neckpiece)', '1347302a6897725b6fb831ef7034e549.jpg', 1600, 1440, 1, 'BCN018'),
(34, 'Necklace (Western Neckpiece)', 'Necklace (Western Neckpiece)', '84aaf9c0c5275a16ab44d289a760890d.jpg', 1600, 1440, 1, 'BCN019'),
(35, 'Necklace (Western Neckpiece)', 'Necklace (Western Neckpiece)', 'ae40f87568a44e1493fa61937ee47ea0.jpg', 700, 630, 1, 'BCN020'),
(36, 'Necklace (Western Neckpiece)', 'Necklace (Western Neckpiece) \r\nRs.900.00+200.00', '3ca298aa9806587fa48066dc0aeb29d5.jpg', 1100, 990, 1, 'BCN021'),
(37, 'Necklace (Western Neckpiece)', 'Necklace (Western Neckpiece)', '12b96e5ea8c0d2c0ae21c2d85578e930.jpg', 1500, 1350, 1, 'BCN022'),
(38, 'Necklace (Western Neckpiece)', 'Necklace (Western Neckpiece)', '71d63692a2fce4d445f5735a59de8fb2.jpg', 1050, 945, 1, 'BCN023'),
(40, 'Necklace Set (Western Neckpiece)', 'Necklace Set (Western Neckpiece)', 'e195c5658a8cea362bb3a370d6371e6a.jpg', 450, 405, 1, 'BCNS025'),
(41, 'Earrings (Antique ER)', 'Earrings (Antique ER)', '8acb10cbdc239aa81d6677c94e551b65.jpg', 310, 279, 1, 'BCER001'),
(42, 'Earrings (Antique ER)', 'Earrings (Antique ER)', '7875603a8bba7f4c260c157a10e68607.jpg', 850, 765, 1, 'BCER002'),
(43, 'Earrings (Antique ER)', 'Earrings (Antique ER)', '6d47cafd7966aaf7e1a1a692015fbd21.jpg', 850, 765, 1, 'BCER003'),
(44, 'Earrings (Antique ER)', 'Earrings (Antique ER)', '8a0cf6c3fe39128303d2ab970944c398.jpg', 600, 540, 1, 'BCER004'),
(45, 'Earrings (Antique ER)', 'Earrings (Antique ER)', '7aadc61a8447a684c26b08b3e333b476.jpg', 330, 297, 1, 'BCER005'),
(46, 'Earrings (Antique ER)', 'Earrings (Antique ER)', 'e55291e9cfc0f2537ade97757f1612d6.jpg', 330, 297, 1, 'BCER006'),
(47, 'Earrings (AD ER)', 'Earrings (AD ER)', '1a6381ca4ee589a9d3431da78a801dde.jpg', 830, 747, 1, 'BCER007'),
(48, 'Earrings (AD ER)', 'Earrings (AD ER)', 'c67a1dbd9942e713cfb4d78069530a98.jpg', 550, 495, 1, 'BCER008'),
(49, 'Earrings (AD ER)', 'Earrings (AD ER)', 'aefbde1cced9f6a145be8da9fd17b7d2.jpg', 930, 837, 1, 'BCER009'),
(54, 'Earrings (AD ER)', 'Earrings (AD ER)', 'ba9f11191f66ce5a651188c3cd969c97.jpg', 350, 315, 1, 'BCER010'),
(55, 'Earrings (AD ER)', 'Earrings (AD ER)', '979eb2d1b56029fd486a4cc22f4a6c95.jpg', 320, 288, 1, 'BCER011'),
(56, 'Earrings (AD ER)', 'Earrings (AD ER)', '905739890cd5763bd5347a90e9d46ccf.jpg', 350, 315, 1, 'BCER012'),
(57, 'Earrings (AD ER)', 'Earrings (AD ER)', '117ea591130d6f934bb275a24e89baf4.jpg', 320, 288, 1, 'BCER013'),
(58, 'Earrings (AD ER)', 'Earrings (AD ER)', 'f45346f76ed05c674765e2fec9e012be.jpg', 150, 135, 1, 'BCER014'),
(59, 'Earrings (AD ER)', 'Earrings (AD ER)', 'fbd564d9b89a462947545adaea66efbb.jpg', 300, 270, 1, 'BCER015'),
(60, 'Earrings (AD ER)', 'Earrings (AD ER)', 'a7dea206bb556db51bcc55a86a487a5d.jpg', 480, 432, 1, 'BCER016'),
(61, 'Earrings (AD ER)', 'Earrings (AD ER)', '866cbc818edf8917483a66047c6553f9.jpg', 250, 225, 1, 'BCER017'),
(62, 'Earrings (AD ER)', 'Earrings (AD ER)', '2cad9883714ff98b9a348d6414c1a935.jpg', 150, 135, 1, 'BCER018'),
(63, 'Earrings (AD ER)', 'Earrings (AD ER)', 'fa8140e0334f2e6ddfa01a35ffafffc7.jpg', 200, 180, 1, 'BCER019'),
(64, 'Earrings (AD ER)', 'Earrings (AD ER)', 'c994bd56fc3256d3b458355f61044e61.jpg', 150, 135, 1, 'BCER020'),
(65, 'Earrings (AD ER)', 'Earrings (AD ER)', '295d0d3a2608ae17e33706339b17eadd.jpg', 250, 225, 1, 'BCER021'),
(66, 'Earrings (AD ER)', 'Earrings (AD ER)', '0629ca17e4ffb623c3974e421cb37d1b.jpg', 300, 270, 1, 'BCER022'),
(67, 'Pendant Set (AD Set)', 'Pendant Set (AD Set)', '24da73ea107cc3215fc70c1622b022cf.jpg', 200, 180, 1, 'BCPS001'),
(68, 'Pendant Set (AD Set)', 'Pendant Set (AD Set)', 'f8ab7ec2b6d1c3f0af17c95ac9dc896b.jpg', 180, 162, 1, 'BCPS002'),
(70, 'Pendant Set (AD Set)', 'Pendant Set (AD Set)', 'bb77a2b6ea5fc5030b05c4c7777f33bf.jpg', 550, 495, 1, 'BCPS004'),
(71, 'Pendant Set (AD Set)', 'Pendant Set (AD Set)', '959fd17628747b7d7c155c5dddc25db2.jpg', 2100, 1890, 1, 'BCPS005'),
(73, 'Pendant Set (AD Set)', 'Pendant Set (AD Set)', '07c9d16096c4a4a4d48e48bb3600a077.jpg', 1050, 945, 1, 'BCPS006'),
(75, 'Pendant Set (AD Set)', 'Pendant Set (AD Set)', '0ce6c196d914da8bb0ff0d16534dc2e0.jpg', 1200, 1080, 1, 'BCPS008'),
(76, 'Pendant Set (AD Set)', 'Pendant Set (AD Set)', 'c7880a34ad571f2ed21223c77982af44.jpg', 500, 450, 1, 'BCPS009'),
(77, 'Finger Rings (AD Rings)', 'Finger Rings (AD Rings)', '2b9de05af30880b7c2299d7c01fddf3f.jpg', 500, 450, 1, 'BCR001'),
(78, 'Finger Rings (AD Rings)', 'Finger Rings (AD Rings)', '47266c97730dc14a3c534e48c66a40f6.jpg', 400, 360, 1, 'BCR002'),
(79, 'Finger Rings (AD Rings)', 'Finger Rings (AD Rings)', '3c1233e5d368d9adaf2163f3e09ec5fb.jpg', 100, 90, 1, 'BCR003'),
(80, 'Finger Rings (Copper Rings)', 'Finger Rings (Copper Rings)', '50f07da5f3d7ae43f7d2b91f6d3e9142.jpg', 500, 450, 1, 'BCR004'),
(81, 'Finger Rings (AD Rings)', 'Finger Rings (AD Rings)', '21bec6162d00cfe1743c5d615c813511.jpg', 700, 630, 1, 'BCR005'),
(82, 'Finger Rings (AD Rings)', 'Finger Rings (AD Rings)', '958443f7ce8da66bdcbc040cc4fd132c.jpg', 250, 225, 1, 'BCR006'),
(83, 'Finger Rings (AD Rings)', 'Finger Rings (AD Rings)', '07b7fca6658a997cbaa4d98aa42f9415.jpg', 250, 225, 1, 'BCR007'),
(84, 'Finger Rings (AD Rings)', 'Finger Rings (AD Rings)', 'ccb454e85e2b2b0492ef12662d29c01d.jpg', 500, 450, 1, 'BCR008'),
(85, 'Finger Rings (AD Rings)', 'Finger Rings (AD Rings)', 'de354b49315bb2cf06b3b34610372c91.jpg', 500, 450, 1, 'BCR009'),
(86, 'Clutch', 'Bags', '570cdf16c5d94d1ad290894002ef9911.jpg', 1000, 900, 1, 'BCCB001'),
(87, 'Clutch', 'Bags', '174a7cbca3faa649aa88c682a82805ff.jpg', 1000, 900, 1, 'BCCB002'),
(88, 'Clutch', 'Bags', 'fb22a89c014b131bf3dbbcecc4c68e02.jpg', 1500, 1350, 1, 'BCCB003'),
(89, 'Clutch', 'Bags', '2de30e6cc0e18fcf2a3377e31fe1e6c3.jpg', 2000, 1800, 1, 'BCCB004'),
(90, 'Antique Bangles', 'Antique Bangles', '94b1315a4ed1e64525eb7eea2821305e.jpg', 500, 450, 1, 'BCB001'),
(91, 'Antique Bangles', 'Antique Bangles', 'ec108ad112c439779a981980cb099df2.jpg', 500, 450, 1, 'BCB002'),
(92, 'Antique Bangles', 'Antique Bangles', '8ac230237ce7bd0c922021acbd43b047.jpg', 550, 495, 1, 'BCB003'),
(93, 'Antique Bangles', 'Antique Bangles', '579da47b1fb18ffb1c82019c3420287d.jpg', 500, 450, 1, 'BCB004'),
(94, 'Antique Bangles', 'Antique Bangles', 'bace3282a328227aaebfc4f51ab4536b.jpg', 500, 450, 1, 'BCB005'),
(95, 'Antique Bangles', 'Antique Bangles', '4243478404dd341f8cbada98f0feaf07.jpg', 420, 378, 1, 'BCB006'),
(96, 'Antique Bangles', 'Antique Bangles', '148c49302f966ea2e092d2d2468ba995.jpg', 500, 450, 1, 'BCB007'),
(97, 'Antique Bangles', 'Antique Bangles', 'b19083878dc6531c774dc4c2dd46a06e.jpg', 450, 405, 1, 'BCB008'),
(98, 'Antique Bangles', 'Antique Bangles', '2149d108d80713e968ec803f20d82ae5.jpg', 400, 360, 1, 'BCB009'),
(99, 'Antique Bangles', 'Antique Bangles', '6637ac84b6c41461d897895a02e41fc9.jpg', 400, 360, 1, 'BCB010'),
(100, 'Antique Bangles', 'Antique Bangles', '0420677f5de8599a3ef167667c2c48db.jpg', 400, 360, 1, 'BCB011'),
(101, 'Antique Bangles', 'Antique Bangles', '09ba12a4ebcef669e5dcf990f3170a3f.jpg', 1300, 1170, 1, 'BCB012'),
(102, 'Antique Bangles', 'Antique Bangles', '7fcfd4233a67a1f108f12c551d4f3f37.jpg', 1300, 1170, 1, 'BCB013'),
(103, 'Antique Bangles', 'Antique Bangles', 'bc1b6f992e7e267df5a3c47d4e251939.jpg', 1400, 1260, 1, 'BCB014'),
(104, 'Antique Bangles', 'Antique Bangles', '17acb82c703d37ed2d13bac282308445.jpg', 500, 450, 1, 'BCB015'),
(105, 'Antique Bangles', 'Antique Bangles', '6f9061779ada68d16574444b8441da41.jpg', 500, 450, 1, 'BCB016'),
(106, 'Antique Bangles', 'Antique Bangles', '24ef64eca4f93decbd745cee6ceff85c.jpg', 500, 450, 1, 'BCB017'),
(107, 'Necklace (Western Neckpiece)', 'Necklace (Western Neckpiece)', '2ab26ac174008b1af9e6b85864a0cb1b.jpg', 1050, 945, 1, 'BCN024'),
(108, 'Earrings (AD ER)', 'Earrings (AD ER)', '3ed3d83ba513027fa3f098d10113ac3a.jpg', 350, 315, 1, 'BCER023'),
(109, 'Earrings And Tops (AD ER)', 'Earrings And Tops (AD ER)', '50d88146a12e758743ea654acad21c3c.jpg', 350, 315, 1, 'BCTP001'),
(110, 'Earrings And Tops (AD ER)', 'Earrings And Tops (AD ER)', '7ce968783c372253f28cec57c8e6ed10.jpg', 200, 180, 1, 'BCTP002'),
(111, 'Earrings And Tops (AD ER)', 'Earrings And Tops (AD ER)', 'b197ad4f5f46e88f432b58ae3763d012.jpg', 200, 180, 1, 'BCTP003'),
(112, 'Earrings And Tops (AD ER)', 'Earrings And Tops (AD ER)', 'c8ea5186094152e507abe42d9c56ee04.jpg', 200, 180, 1, 'BCTP004'),
(113, 'Necklace Set (Terracotta Set)', 'Necklace Set (Terracotta Set)', '5d74461a9c0a95c2667218b431f709fc.jpg', 260, 234, 1, 'BCNS(T)026'),
(114, 'Necklace Set (Terracotta Set)', 'Necklace Set (Terracotta Set)', '10b5cca27cefe62a930ffeafdf6b3b16.jpg', 260, 234, 1, 'BCNS(T)027'),
(115, 'Necklace Set (Terracotta Set)', 'Necklace Set (Terracotta Set)', 'b2ea0e01c499e6249299171917220f7b.jpg', 260, 234, 1, 'BCNS(T)028'),
(116, 'Necklace Set (Terracotta Set)', 'Necklace Set (Terracotta Set)', '363c54d785190b8bbbf019c4e9562b7f.jpg', 260, 234, 1, 'BCNS(T)029'),
(117, 'Necklace Set (Terracotta Set)', 'Necklace Set (Terracotta Set)', '54041fbf96b4652970a9ce3f140f6aa3.jpg', 260, 234, 1, 'BCNS(T)030'),
(118, 'Necklace Set (Terracotta Set)', 'Necklace Set (Terracotta Set)', '00fa361d7df8ee1a4708836f5c509482.jpg', 260, 234, 1, 'BCNS(T)031'),
(119, 'Necklace Set (Terracotta Set)', 'Necklace Set (Terracotta Set)', '458e77e9e66e7ee5c944202cef500194.jpg', 260, 234, 1, 'BCNS(T)032'),
(120, 'Necklace Set (Terracotta Set)', 'Necklace Set (Terracotta Set)', 'd5d91c9a6830a305bcb5b42793af3e5a.jpg', 320, 288, 1, 'BCNS(T)033'),
(121, 'Necklace Set (Terracotta Set)', 'Necklace Set (Terracotta Set)', '1f8c3d4e183900a1679e0087f6ccc7f9.jpg', 320, 288, 1, 'BCNS(T)034'),
(122, 'Necklace Set (Terracotta Set)', 'Necklace Set (Terracotta Set)', 'aac6482d08d317c0b9b2d579932752ab.jpg', 320, 288, 1, 'BCNS(T)035'),
(123, 'Necklace Set (Terracotta Set)', 'Necklace Set (Terracotta Set)', 'f0d0e47a2041b768566df2b0b9dc75b9.jpg', 320, 288, 1, 'BCNS(T)036'),
(124, 'Necklace Set (Terracotta Set)', 'Necklace Set (Terracotta Set)', '86694f6781f16f9ed6ccf6f4ae300826.jpg', 320, 288, 1, 'BCNS(T)037'),
(125, 'Necklace Set (Terracotta Set)', 'Necklace Set (Terracotta Set)', '059c1a63e3b00034d243734d2c11a33a.jpg', 320, 288, 1, 'BCNS(T)038'),
(126, 'Necklace Set (Terracotta Set)', 'Necklace Set (Terracotta Set)', '211005f58be431114e9185a78394e02d.jpg', 320, 250, 1, 'BCNS(T)039'),
(134, 'Pendant Set ', 'Pendant Set ', 'c4a731c015c3087d6dde4baf523d4a73.jpg', 200, 180, 1, 'BCPS010'),
(135, 'Pendant Set', 'Pendant Set', 'e21e15da9570f264617756f6a88ff3d6.jpg', 150, 135, 1, 'BCPS011'),
(136, 'Pendant Set', 'Pendant Set', 'a426843e7fc0f9a13575c1bcbae94cac.jpg', 150, 135, 1, 'BCPS012'),
(137, 'Pendant Set', 'Pendant Set', '2b43262d4ff602e066e806b21a7d53ab.jpg', 200, 180, 1, 'BCPS013'),
(138, 'Pendant Set', 'Pendant Set', '8f06510380a7ef8589240616a0784d49.jpg', 200, 180, 1, 'BCPS014'),
(139, 'Pendant Set', 'Pendant Set', 'bcf9a90c3cda188d1d190b9b5928bfcb.jpg', 450, 405, 1, 'BCPS015'),
(140, 'Pendant Set', 'Pendant Set', 'b8b58faa9246ae108010add8500ec08a.jpg', 220, 198, 1, 'BCPS016'),
(141, 'Pendant Set', 'Pendant Set', 'ab9e33f8397eb06cbf94cb9a8cd90e08.jpg', 220, 198, 1, 'BCPS017'),
(142, 'Pendant Set', 'Pendant Set', '84be7b95adf6de3abe6b1f85df9422f6.jpg', 220, 198, 1, 'BCPS018'),
(143, 'Pendant Set', 'Pendant Set', 'eea1764f5c55fe6395906d77a436edb3.jpg', 220, 198, 1, 'BCPS019'),
(144, 'Pendant Set', 'Pendant Set', '9f5d91166b33057ca4c8c94f8caf96ff.jpg', 400, 360, 1, 'BCPS020'),
(145, 'Pendant Set', 'Pendant Set', 'e23d695b561fb7c1a6736e3cd46fea05.jpg', 400, 360, 1, 'BCPS021'),
(146, 'Pendant Set', 'Pendant Set', '8124d3c7dd9440f0f3104b95b529bd10.jpg', 400, 360, 1, 'BCPS022'),
(147, 'Pendant Set', 'Pendant Set', 'b6bb5850732381f03a3ab93ffe1e4c63.jpg', 400, 360, 1, 'BCPS023'),
(148, 'Pendant Set', 'Pendant Set', '65e33528754bfe2e0db61042f9a4b978.jpg', 400, 360, 1, 'BCPS024'),
(149, 'Pendant Set', 'Pendant Set', '33f4827c7aeda0190269e982b2ec77e3.jpg', 900, 810, 1, 'BCPS025'),
(150, 'Pendant Set', 'Pendant Set', '48084f1acaf04ea8c301c06069101c12.jpg', 1200, 1080, 1, 'BCPS026'),
(151, 'Pendant Set', 'Pendant Set', 'd2411bfb864a983c37c8d70e4ff9b4be.jpg', 2400, 2160, 1, 'BCPS027'),
(152, 'Pendant Set', 'Pendant Set', '8ed98fb0b76caf2501d5373c793d48cf.jpg', 2600, 2340, 1, 'BCPS028'),
(153, 'Earrings', 'Earrings', 'acab32ef315b3b28d7b5a1f8c178ca96.jpg', 450, 405, 1, 'BCER024');

-- --------------------------------------------------------

--
-- Table structure for table `balas_productimage`
--

CREATE TABLE IF NOT EXISTS `balas_productimage` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=302 ;

--
-- Dumping data for table `balas_productimage`
--

INSERT INTO `balas_productimage` (`image_id`, `product_id`, `image_path`) VALUES
(25, 14, '93a14d90214920212a33ffed277a8535.jpg'),
(26, 14, '9c84bf447ca627a62ba70c912a30717e.jpg'),
(27, 15, '733b1fdfb3a3a12f24b9d6d5632834f7.jpg'),
(28, 15, '74f5e374e322518852de3d613dcd133f.jpg'),
(29, 15, 'a97cf2e40d4c82e5012620b96d31f1fb.jpg'),
(30, 16, 'a08ccccf98b177aa63e1e394ce540dad.jpg'),
(31, 16, '65f5ef96bc2aee2cc99c733665e54771.jpg'),
(32, 17, '59d85ce27fb6c0e6930ee5a29a1c24cd.jpg'),
(33, 17, '8dc6409bab6d8e6448e3bf00a9799269.jpg'),
(34, 18, '7551867fb86d88811aa803a08a1e259f.jpg'),
(35, 18, 'f09349c7b1f78929d6ce56f1d29dd35b.jpg'),
(36, 19, '43093407099b12f2e33d2e2a267ed60e.jpg'),
(37, 19, '0bc6153dfe4bee15fd6a5e3ab48a1640.jpg'),
(38, 20, 'e047a255b32f16e0be1300dc7c329687.jpg'),
(39, 20, 'c5a8b2116edfcc3cbacc6aff530ae43f.jpg'),
(40, 21, '9a006ac3c95d7e2e4cb9d5a8fd22239d.jpg'),
(41, 21, '5bc5e85d9281ef1864f50df0e901f742.jpg'),
(42, 22, 'c3f88a9e46f80061ea29687512a07850.jpg'),
(43, 22, '4f19d87cd21db1ebfee8838504491649.jpg'),
(44, 23, 'aa6c4dbd4110b6f180fd1f432f9f9b53.jpg'),
(45, 23, 'cc8e82de21d78dcf0fa32eee63579b4c.jpg'),
(46, 24, '766158126b361c64bcec19b53be545fd.jpg'),
(47, 24, '5363d5ce15ba134c13870b72f8e08611.jpg'),
(48, 25, '4396efaa9fc05ff052761aa6d1b9a7c0.jpg'),
(49, 25, 'a3d5c2cff038e237344afc96c1527cc3.jpg'),
(50, 26, '355c1eac93b7ca972e06197d99bf4f62.jpg'),
(51, 26, '060be11cb01f1c4fe40df8b27aed4afd.jpg'),
(52, 27, '5f2e1ded345b8b07f038add210e57880.jpg'),
(53, 27, '60c0b6a7504b89f2ee0200e299466b67.jpg'),
(54, 28, '3166ab45ff8b62a58dacb96fb3d38407.jpg'),
(55, 28, 'd90bcf136a47811b9b65a2f93bc10e83.jpg'),
(56, 29, '6cdfb5c0090e9fbf46e23b75ad581277.jpg'),
(57, 29, '7c803edf96385a926a326bdadc383311.jpg'),
(58, 30, 'c7938b49f058c6b3610e1d52576d718e.jpg'),
(59, 30, '34d23d72d91b171a574c3510e16aadbc.jpg'),
(60, 31, '3f8e051e0ad6ac749afe00f29b80bc8a.jpg'),
(61, 31, '125a413a21184180d435b24f57b3125f.jpg'),
(62, 32, '33c2a2cb5dd6455e92aa018f94bca95f.jpg'),
(63, 32, '0360acb512504e12862279c4272f4e62.jpg'),
(64, 33, '35f2cd41e9551d6590007e0f12ce89bd.jpg'),
(65, 33, '1ca13bc62854bddbecba9ffccb6e40fe.jpg'),
(66, 34, '2d6d41f04eff47022436bd0702251e38.jpg'),
(67, 34, '64e8d47abb0635bba575edf0412169fd.jpg'),
(68, 35, '358b71919948bc67002b19a56949620c.jpg'),
(69, 35, '19ca2ca8e58769688ad4b4bc985fd9f1.jpg'),
(70, 36, 'de2f9e71b1315ff66c0f640601fc37a7.jpg'),
(71, 36, '6547a18f0a8b99284fba55876dde2c68.jpg'),
(72, 37, '06f65c2b86ea3af79ed9123664d225b4.jpg'),
(73, 37, 'd8b0fb2fba15bad82135ae56dd1d1eef.jpg'),
(74, 38, 'cacd99ba03ae403ef13d5bf020c65d0f.jpg'),
(75, 38, '1348faf69b08f88079022f7ea9b4410b.jpg'),
(76, 39, '4e57a1ab5929601b38d5151bebc379c3.jpg'),
(77, 39, '93c41bd9634fa0c1b89f3e25f556ed85.jpg'),
(78, 39, 'f1d94748d543928808845329c93e736f.jpg'),
(79, 39, '81647ba562d3d817a1ca3bdfc4f94821.jpg'),
(80, 107, 'a32cbd97d6fb7b955990547eafbee465.jpg'),
(81, 107, '1b06a85f851b93507327a8bdde2a32f7.jpg'),
(82, 40, '5d8e82cd9120ad5884e97d1b90a1fd7e.jpg'),
(83, 40, 'c99773975db950373764dcc70ba52273.jpg'),
(84, 47, 'a33ad1d6f1b8a36b8d6eca476592c22c.jpg'),
(85, 47, 'afce0fb058bf3b38c779019ad29b76d0.jpg'),
(86, 41, '3f918e9c3e5561e78913251c060f041b.jpg'),
(87, 41, '41e0d12353d5b6b7f10fe14c3abd4eb2.jpg'),
(88, 42, '1153689d1761c35b9d33adebd7dbe200.jpg'),
(89, 42, '47376670a37f26927965f2fbd976f7e1.jpg'),
(90, 43, '39b72c587a00cedc27e51e7c4c72bc55.jpg'),
(91, 43, '96c55053f2fbd6c9d380f1b27909c110.jpg'),
(92, 44, 'c24ec81e8aebc61f3c8b92386ede5ee7.jpg'),
(93, 44, '93520a0008c20e25e497e4a5a43cb0aa.jpg'),
(94, 45, 'cfeb888110b9c107409901732e4bb5de.jpg'),
(95, 45, 'baccbdc54b613dc260ca168575841cfc.jpg'),
(96, 46, 'fe8f52060bfeeabd344dc83a4ba4b272.jpg'),
(97, 46, 'e6c6515e53741e91d27794e32af7359a.jpg'),
(98, 48, '1e005a3d156ee71d863cbaf889976e0a.jpg'),
(99, 48, 'b2742d31abcba30759834bdc2ed0fd2d.jpg'),
(100, 49, '3c319d2ac48a4669c27691fdf96d5672.jpg'),
(101, 49, '284122f0b214a8f482d838e5581960bc.jpg'),
(102, 50, '0774e52e1d6d38aea5c254cffe33b17c.jpg'),
(103, 50, '3402d152b673667b16498c603bb8286c.jpg'),
(104, 51, 'bcae7aef62fc6b767b2ac5701e4d0ff0.jpg'),
(105, 51, '1ffadf9e981345ea7ab2c7865b102bdf.jpg'),
(106, 52, '4b789b0b1845fe8211ab4c0e3c083dc7.jpg'),
(107, 52, '15d17bf00a13f58a91e5702dd128b919.jpg'),
(108, 53, '22fdbd77e0beee977a38feb34206164b.jpg'),
(109, 53, 'a42a0c39139c2032e13d5824bf3f5bb1.jpg'),
(110, 54, '93a658c3b60d0e0fd71707141f02de1d.jpg'),
(111, 54, '75a2a5b2407ef9a883f5b7fa19339b60.jpg'),
(112, 55, '0d2430cf6a0f80ffb27a7600ad3b56cd.jpg'),
(113, 55, '8f250c3b49a6a3fc4c57e8f9b331d89c.jpg'),
(114, 56, '49fbfce62e79d0e519f8a5048ea2ef27.jpg'),
(115, 56, 'ccf22d380ba1fffc7d9148916d701788.jpg'),
(116, 57, '171e0ebebced1e5a898bb5608aed9a71.jpg'),
(117, 57, 'e1568d214d5bd6929275e825a3b40b26.jpg'),
(118, 58, '50f1da285c8182e3390ba55d4a76b2fe.jpg'),
(119, 58, '6dc6b3722cc7ff5fb4f020cf87c20370.jpg'),
(120, 59, 'd20825111cc3e1ce5e10b2ea93651d9c.jpg'),
(121, 59, 'ad3c53458e67b8ee88ab87b30d2a3c59.jpg'),
(122, 60, '9dd31cb5d508a8b16492c1145db1dbb7.jpg'),
(123, 60, 'f4bd6f8cd74c7460c44c812b943e7f3e.jpg'),
(124, 61, '80c725f72cb95571e94af2fc804a3994.jpg'),
(125, 61, '2523fd07300a6764bfd9df198cfa8ce5.jpg'),
(126, 62, '7c58ca19ba93b254c720825abb4f061a.jpg'),
(127, 62, '8c432630efe13533fa69c27dea556252.jpg'),
(128, 63, '98eaea0afca6c375d00092148e2203fd.jpg'),
(129, 63, '96a638ce2bbd05354c98f53fb35caf2d.jpg'),
(130, 64, 'cfbe34fdbf032c54fbc6b6e3859e1876.jpg'),
(131, 64, 'd7dfcd254700cb04e3ab34c8551379d0.jpg'),
(132, 65, '2da683779a60154be0feb7aacaf993ed.jpg'),
(133, 65, '12bd675678941548bf1abc50946055ec.jpg'),
(134, 66, '8a6216a2dd449864a73f1f4e009321c6.jpg'),
(135, 66, '3baa0aa8bf2cfaedbcbf563834fae7b7.jpg'),
(136, 67, 'c34eb28aeef33e73b8939a8f0e2792b9.jpg'),
(137, 67, 'bb1fb0c9a8e16753a07fcbf519085811.jpg'),
(138, 68, 'e0c8e452aac7a7bc6a3ec6da2192f416.jpg'),
(139, 68, 'f5f7aca1fdd89e25fcf935f917e29044.jpg'),
(140, 69, '111bc4a331bcc81d1330cac61cff0dba.jpg'),
(141, 69, '0d4ca6b3ae5b2c773edc7298c09d2803.jpg'),
(142, 70, '758b5090f4f430f1273fb066d582dc5a.jpg'),
(143, 70, '0911d397b7510f6b6a0111499159f544.jpg'),
(144, 71, '885e22bb3830857cfc9cde93e5fdcb1e.jpg'),
(145, 71, 'cca9018a8ec17b4d2d29320a9dd5af36.jpg'),
(146, 73, 'b7e350e2409ff05861a77b30d90563b8.jpg'),
(147, 73, '319971fd522ac99a4828c8f6c4c284dc.jpg'),
(148, 74, '078b1fe45a7b469d5a9f9ca314cd1da7.jpg'),
(149, 74, '41ea7a2a3464649b78f7add2c7c1fe89.jpg'),
(150, 75, '5aebfbe97bcbaae5bb1bcdb81b578b87.jpg'),
(151, 75, '0ec710c5bb200a825cd6dd2a4511f544.jpg'),
(152, 76, '6070a54326dad76a81e6813806413505.jpg'),
(153, 76, 'f265b902ea716f43bede104b12e7eb8d.jpg'),
(154, 78, '7f6e25462dad524394854a389c1717f8.jpg'),
(155, 78, '2c0ad07292e11b9902f56b1c67395618.jpg'),
(156, 77, 'b14834d3b3b27b2105b23f321e518ba7.jpg'),
(157, 77, '24486709ff640a9f602ec8dd53a195ba.jpg'),
(158, 79, 'b46866ed084a8f5ba034a8020e5eaedb.jpg'),
(159, 79, 'c844de6100bc688473f07a39330756f3.jpg'),
(160, 80, '184e8240bb945b23f8287e8e52124716.jpg'),
(161, 80, '018e4b61c68777659d8e7c75421af397.jpg'),
(162, 81, '769024c3b6d1fd0bbadeb58376272212.jpg'),
(163, 81, '07f5d528c3d627a9431df7dc47ee7023.jpg'),
(164, 82, '816e5fcb8316397361cc39490b1dff2e.jpg'),
(165, 82, 'bcf10edea99cb93478fcca1a5b3636d7.jpg'),
(166, 83, 'b8c7503bc1297a9bee883647693c9658.jpg'),
(167, 83, '5d13e273503634c31fbab53f16c33633.jpg'),
(168, 84, '0e5da2049da6dac5c602fa94cea5c3f4.jpg'),
(169, 84, 'f61c0e4cf5340d48c2019e97af25547c.jpg'),
(170, 85, 'f7172ac572721c93d8a617d7f74c28bb.jpg'),
(171, 85, 'ab5d0590e2253e955b5f18b076a4bf12.jpg'),
(172, 86, '6eef75070bd691e8bbfa18dde1c0b57a.jpg'),
(173, 86, '8c2de01cb3b18204567b02b23d26eca4.jpg'),
(174, 87, '90152ac2775456ee03e6efb08f999815.jpg'),
(175, 87, 'c695ee973a515b2c838f5c3712b8c3d7.jpg'),
(176, 88, 'a2eb400e7d97798f04a93d94b5ac4efd.jpg'),
(177, 88, 'cce68681d5b06fcdbde8800ffc077862.jpg'),
(178, 89, '75004960ac3630298c2b472dc31afa15.jpg'),
(179, 89, '379c5001a31a2794a55d96f89beb39d2.jpg'),
(180, 90, '6e3c6d432fb8024cbe425e3bded2fcf7.jpg'),
(181, 90, '6a12f5e975c99080e7b2cf3b06963671.jpg'),
(182, 91, '699696dc6d2855957267f353479eeba4.jpg'),
(183, 91, 'a9174ed68167c17b9518aadd9f22333d.jpg'),
(184, 92, '098c108c2bd1d4ad45e22e2badcabf6b.jpg'),
(185, 92, 'b79f473e61937e59c131b8669cfca04e.jpg'),
(186, 93, '2302725b3d61a9277ec2a19be064f6a7.jpg'),
(187, 93, 'a86cb81c32f4ff7d73c77559636e271f.jpg'),
(188, 94, '30d21585c643021c87a14e4aac63d519.jpg'),
(189, 94, '85511cc26cdf3356d76cb52abcfca8ba.jpg'),
(190, 95, '200a89df5e656678bbc25b21c25b43c1.jpg'),
(191, 95, 'a174703f2fe2f42e88cd207979a288ff.jpg'),
(192, 96, 'ea3c04afbd7728374bc601d273d9db6f.jpg'),
(193, 96, '67fcc31dc9275257f84f66138643a38b.jpg'),
(194, 97, '810ffa90c6b0f078cdb561c354623590.jpg'),
(195, 97, 'e4199fc65490ee832b4e01ff09909732.jpg'),
(196, 98, '1b65eb140c41ca92685654691cf79942.jpg'),
(197, 98, '094271c723af8484cc0d5ef2eeee02cf.jpg'),
(198, 99, 'ad4c3cc2453e586afebb10e1ef95d808.jpg'),
(199, 99, 'be3a8341e8e01380940a2745d05db278.jpg'),
(200, 100, '05f5d5cb3a5452e5b54c8d50f6c333b4.jpg'),
(201, 100, '06c5a4a9bf50d83d6febdb12969810a0.jpg'),
(202, 101, '98bfcc74e5ff91a10ae0673c9d3d7b7b.jpg'),
(203, 101, 'cec91ef20e0bf66c5e35c5760cdc77eb.jpg'),
(204, 102, '774abb258e748a7fcf49b8db1a3f7d35.jpg'),
(205, 102, '484ea93359579e39979a6d8c56aff4ba.jpg'),
(206, 103, 'd151376a0a938481f0610a18253fcbf7.jpg'),
(207, 103, 'fe22d317d81f820e3c22d1248d2f462b.jpg'),
(208, 104, '3f7127994c10505618f7b72394af6ff6.jpg'),
(209, 104, '78cbb03a30dcf5d561ce3c9b4e17e76d.jpg'),
(210, 105, 'cfa65d0c04a409ff2c615c04049e261b.jpg'),
(211, 105, '30ac7af573740855cf98062aa509ee1e.jpg'),
(212, 106, 'c3a164d3e3267529856731c86b882473.jpg'),
(213, 106, '5df30f275bec62af670dc0050ef1bb79.jpg'),
(214, 108, '9634fe3c60a4b1b025bf0aff2862b3f0.jpg'),
(215, 108, '92413cd8f1fa5e3a2239a46a54178d66.jpg'),
(216, 109, 'be4cabe8f941afde71f65d51ec2e8992.jpg'),
(217, 109, '86b2d79e230a22b86bb1d5f725bb172b.jpg'),
(218, 110, '8af6382c1ca3b8bfe7144c0d1c82a922.jpg'),
(219, 110, '6608694a6ca39f0f2a496b3b5a3927bb.jpg'),
(220, 111, '6b9f033b4f30aabbd6aab08af7df2aa6.jpg'),
(221, 111, '79ae72a6a085157a373027a731be03da.jpg'),
(222, 112, '2fee8e71cab16f57bae668f5dddb0e97.jpg'),
(223, 112, '16bbbdd69a895f1b82e75abaee232d39.jpg'),
(224, 113, 'dde7d5cc6c30eca6c36b4c3d417c9bc2.jpg'),
(225, 113, '332858cf4d64fd3f35120e350e011694.jpg'),
(226, 114, '0ed923a89ad126fa937659888b769b33.jpg'),
(227, 114, '5bd329f498cebe40b1d9f9da09358073.jpg'),
(228, 115, 'c1264cb933abb6079ebdb96186697ecb.jpg'),
(229, 115, '7cfc50f1ef0c2c01cefbfd7c1d402f9a.jpg'),
(230, 116, '491ed89ea9c65e44e65d21a18c107bc5.jpg'),
(231, 116, 'a608a1e5a1d582eebb98c8e49934ecf5.jpg'),
(232, 117, '031435fc298a6b464815ef6a69c142c1.jpg'),
(233, 117, '1b540bb7a8b9deff27b569ed6c385aa9.jpg'),
(234, 118, 'fb4c863dd447f1e41e300d16bb561a2e.jpg'),
(235, 118, '4bc63118cb42d22e3ee0ca862963305b.jpg'),
(236, 119, '7fcc6f77dc990ec69c1f4f271dcc7598.jpg'),
(237, 119, '9a9e34fc544ac9781cf7d79c4075e20d.jpg'),
(238, 120, '6fcc15972e73338d571dc00bdd63e684.jpg'),
(239, 120, 'bda53835bd5012716b212f408bce898e.jpg'),
(240, 121, '365e2bc8ab71da0a7f96b9de1f023645.jpg'),
(241, 121, 'b54d5a949c5cb6f0dada2e889da19134.jpg'),
(242, 122, 'f02644512a82395f6e3d4c4de1d3b331.jpg'),
(243, 122, 'd7b5bea4dc651a399abc468eed7395e0.jpg'),
(244, 123, '6084c12e0b504eb1bafa74c68f6572fe.jpg'),
(245, 123, 'd652c60a398b9d4b631c05a0d7548e09.jpg'),
(246, 124, 'b5f9687a7279233e22e0579f66898254.jpg'),
(247, 124, '5bc3e22a20f1a4ff49d2e0736ed129ee.jpg'),
(248, 125, '91ea510abfcda88f300d1a731628a2e7.jpg'),
(249, 125, '828aead9f97b5d9e8baf16be5055b191.jpg'),
(250, 126, '17d4d3ff647455bb4409cc2f484cf639.jpg'),
(251, 126, 'db69e269133776be65e94a4bfcaaa374.jpg'),
(252, 127, '8e398aed66ed35942f3fa3b39e69c270.jpg'),
(253, 127, 'f8ad84bfe02ba07321cab360ac33c799.jpg'),
(254, 127, '8597ec096a0a6d9bb3142fa28f610b92.jpg'),
(255, 127, '9587742bd4619a635fc25c03cdbc8803.jpg'),
(256, 130, '5d271064fd568db592477ec59648f795.jpg'),
(257, 130, 'ef67698bd23cc744e3f7cf3115e59547.jpg'),
(258, 130, 'd07f4c1bec0c7e9997542ecc59368b07.jpg'),
(259, 130, '5fdf0f124162ca68225ec7ca1d087ee0.jpg'),
(260, 131, '82712ff610f287aa5a2bb467eade17da.jpg'),
(261, 131, '37198ec37e70606a778a6dca3bc0728e.jpg'),
(262, 134, 'ad246f9d654b8ff5eb11d2d7c3e822b7.jpg'),
(263, 134, '977a45ab6ed4775e034e8fdb59794c2f.jpg'),
(264, 135, 'f523908ac26d65458a7432ed786e683e.jpg'),
(265, 135, '2b7a54b5d79dde887ab206717b782e57.jpg'),
(266, 136, '136e31bfbcc28acc2d3b3d6ec0c3be42.jpg'),
(267, 136, 'a7ed494e75b7401a747458e5e39faebc.jpg'),
(268, 137, 'cf3f52323ce356b75bd1af9db02bb3db.jpg'),
(269, 137, 'a9087fb2e4d2a3a7dc61047e5520ca92.jpg'),
(270, 138, '18f502f91ca294f2f833c32144a0ff8d.jpg'),
(271, 138, 'eb6d6e16c369e08ccad6aa83b8b19015.jpg'),
(272, 139, 'c545b2d39f4c4b31fd30bc75fc5b42a0.jpg'),
(273, 139, '27af8044427dbbc108b90436ac2fa5a9.jpg'),
(274, 140, '1d919e5f15736523608514390fb4ee76.jpg'),
(275, 140, 'f9f3a97198a91631cff91b83d4fe69f6.jpg'),
(276, 141, '39602b980a9c696068bd44c6077ed5e6.jpg'),
(277, 141, 'b8294b32f269b120553b623db21a6962.jpg'),
(278, 142, 'e5cc09ac88f1483ce9ee3dcaf6e28a34.jpg'),
(279, 142, 'bafad4b4556a942e847a4ddc7f7c6de2.jpg'),
(280, 143, '94fa5bb8e0531c7631a0d21b00e08b36.jpg'),
(281, 143, '422eafd71144dd6e764f29b6b0c062d4.jpg'),
(282, 144, '7654beead0514b331606074538f43321.jpg'),
(283, 144, 'b8b9848d9109650592765badbf49150b.jpg'),
(284, 145, '5f3500674c396b87eda4b4bbce7ae5c5.jpg'),
(285, 145, '3e69d2abd31e9a563a6816b8fd11136e.jpg'),
(286, 146, 'c8004525101475ac58bd9f913c4c4e31.jpg'),
(287, 146, '649837e87564bc8ec0e1ae0b64a6be48.jpg'),
(288, 147, '01ae6812c36af512f9f87c841722cac7.jpg'),
(289, 147, '105a3369d66e43726abe91d2e4d0e4ce.jpg'),
(290, 148, 'b2ae2b7e68470888f68501cad2b02949.jpg'),
(291, 148, 'f65f80d776409132eef8918acbbc95d7.jpg'),
(292, 149, '6a7ee63dbc2af36e5ba291ffd50f0f5e.jpg'),
(293, 149, 'e5224707b74411d811bb2fb53b79170f.jpg'),
(294, 150, 'e0716ed0b742bc10f1058f5a078915cc.jpg'),
(295, 150, '397dd1157567ee3885781bba78ff07bf.jpg'),
(296, 151, '68cd2d2c839795e878e51577874d6314.jpg'),
(297, 151, 'ec944926b9e83222a986fe44af710572.jpg'),
(298, 152, 'aad9ba5409663b55d8ce4d7240cc0f62.jpg'),
(299, 152, 'a663fefb96e96f4bfd955f150167c392.jpg'),
(300, 153, 'a7586c6fc5ebb324f91bd79c4167cf96.jpg'),
(301, 153, 'c927c11102e5013146f9c3c6535ed102.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `balas_user`
--

CREATE TABLE IF NOT EXISTS `balas_user` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_email` varchar(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_number` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `billing_address` varchar(255) DEFAULT NULL,
  `shipping_address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `balas_user`
--

INSERT INTO `balas_user` (`customer_id`, `customer_email`, `customer_name`, `customer_number`, `password`, `billing_address`, `shipping_address`) VALUES
(5, 'info2programmer@gmail.com', 'Sakat Bhadury', '9547763998', '202cb962ac59075b964b07152d234b70', 'Hello User', 'Hello '),
(6, 'prasun@php.net', 'Prasun Pal', '9874563210', '202cb962ac59075b964b07152d234b70', NULL, NULL),
(7, 'admin@demo.com', 'Demo', '9874563210', '202cb962ac59075b964b07152d234b70', NULL, NULL),
(8, 'saikat@visioncreative.co.in', 'Saikat Bhadury', '9547763998', '202cb962ac59075b964b07152d234b70', NULL, NULL),
(9, 'piyalibasu70@gmail.com', 'Piyali Basu', '9830728668', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL),
(10, 'basu.sanjukta20@gmail.com', 'Sanjukta Basu', '8697446967', '76a6154889322e08f5bb1f950de4eeac', NULL, NULL),
(11, 'pallabi.mazumder.90@gmail.com', 'Pallabi Basu', '8100841382', 'd6dc56c840eb849a69c854b139c55011', NULL, NULL),
(12, 'romaroy.smart@gmail.com', 'Roma Roy', '9836808231', '2b01203e83a71e724533e861c8373705', NULL, NULL),
(13, 'deblinadas.89@gmail.com', 'Deblina Das', '8197552532', '29f13b5a475e90cb52338ef1f3c7f282', 'C105, Golden Nest Apartment, JCRLAYOUT, 2ndCross, Panathur Main Road,', ''),
(14, 'moumitamitra945@gmail.com', 'moumita mitra', '9804806521', '3063cf1ca25e85ded38bcc0064b77f51', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `catrgories`
--

CREATE TABLE IF NOT EXISTS `catrgories` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  `category_image` varchar(255) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `catrgories`
--

INSERT INTO `catrgories` (`category_id`, `category_name`, `category_image`) VALUES
(15, 'Necklace', '4bf60159dcb0e10e676056602314e56f.jpg'),
(16, 'Earrings And Top', '6127b547786d7dc371a499a3420fd19b.jpg'),
(17, 'Pendant Set', 'fa3f8269f47228164a474aab677ea9a5.jpg'),
(18, 'Finger Rings', '0cb0122717bcd7857368a7241d3996ab.jpg'),
(20, 'Bangles', '89a642bb2ded23f8aa24c0e3094fd0d5.jpg'),
(21, 'Clutchs And Bags', 'a7a09162fbbad3029c6011a83e70a638.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cod_location`
--

CREATE TABLE IF NOT EXISTS `cod_location` (
  `location_id` int(11) NOT NULL AUTO_INCREMENT,
  `pin` int(6) NOT NULL,
  `location` varchar(255) NOT NULL,
  PRIMARY KEY (`location_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=92 ;

--
-- Dumping data for table `cod_location`
--

INSERT INTO `cod_location` (`location_id`, `pin`, `location`) VALUES
(11, 700001, 'Kolkatta G.P.O'),
(12, 700002, 'Cossipore H.O'),
(13, 700003, 'Baghbazar S.O'),
(14, 700004, 'R.G.Kar Medical College S.O'),
(15, 700005, 'Hatkhola S.O'),
(16, 700006, 'Sahitya Parisad S.O'),
(17, 700007, 'Barabazar H.O'),
(18, 700008, 'Barisha S.O'),
(19, 700010, 'Joramandir S.O'),
(20, 700012, 'Yogayog Bhawan S.O'),
(21, 700013, 'Dharmatala S.O'),
(22, 700014, 'Bamboovila S.O'),
(23, 700014, 'Intally S.O'),
(24, 700015, 'Sales Tax Building S.O'),
(25, 700015, 'Seal Lane S.O'),
(26, 700016, 'Park Street H.O'),
(27, 700017, 'Jhowtala S.O'),
(28, 700018, 'Rabindra Nagar S.O (Kolkata)'),
(29, 700019, 'Ballygunge S.O'),
(30, 700020, 'L.R.Sarani S.O'),
(31, 700021, 'Fort William S.O'),
(32, 700022, 'Hastings S.O'),
(33, 700023, 'Mansatala S.O'),
(34, 700024, 'P.G.Reach S.O'),
(35, 700025, 'Bhawanipore S.O'),
(36, 700026, 'Sahanagar S.O (Kolkata)'),
(37, 700027, 'Natioinal Library S.O'),
(38, 700028, 'Dumdum S.O'),
(39, 700029, 'Rash Behari Avenue S.O'),
(40, 700030, 'Purba Sinthee S.O'),
(41, 700031, 'Dhakuria S.O'),
(42, 700032, 'Jadavpur University S.O'),
(43, 700033, 'Tollygunge H.O'),
(44, 700034, 'Panchanantala S.O'),
(45, 700035, 'Alambazar S.O'),
(46, 700036, 'Baranagar S.O'),
(47, 700037, 'Belgachia S.O'),
(48, 700038, 'Sahapur S.O'),
(49, 700041, 'Sirity S.O'),
(50, 700042, 'Kasba S.O (Kolkata)'),
(51, 700043, 'Sonai S.O (Kolkata)'),
(52, 700044, 'Badartala S.O'),
(53, 700045, 'Lake Gardens S.O'),
(54, 700046, 'Gobinda Khatick Road S.O'),
(55, 700047, 'Naktala S.O'),
(56, 700050, 'South Sinhee S.O'),
(57, 700052, 'Kolkata Airport S.O'),
(58, 700053, 'N.R.Avenue S.O'),
(59, 700054, 'Cmda Abasan S.O'),
(60, 700060, 'Mahendra Banerjee Road S.O'),
(61, 700061, 'Sarsoona S.O'),
(62, 700062, 'W.B.Governors Camp. S.O'),
(63, 700063, 'Paschim Barisha S.O'),
(64, 700063, 'Thakurpukur S.O'),
(65, 700065, 'Rabindra Nagar S.O (Bankura)'),
(66, 700066, 'Bidhangarh S.O'),
(67, 700067, 'Lily Biscuit S.O'),
(68, 700068, 'Jodhpur Park S.O'),
(69, 700069, 'Income Tax Building S.O'),
(70, 700071, 'Little Russel Street S.O'),
(71, 700072, 'Princep Street S.O'),
(72, 700073, 'Colootola S.O'),
(73, 700074, 'Motijheel S.O (Bankura)'),
(74, 700075, 'Santoshpur Avenue S.O'),
(75, 700077, 'Bediapara S.O'),
(76, 700078, 'Haltu S.O'),
(77, 700078, 'Jadavgarh S.O'),
(78, 700080, 'Mall Road'),
(79, 700082, 'Haridevpur S.O'),
(80, 700085, 'K.G Bose Sarani S.O'),
(81, 700086, 'Baghajatin S.O'),
(82, 700087, 'New Market S.O'),
(83, 700088, 'Taratala Road S.O'),
(84, 700090, 'Noapara S.O (Bankura)'),
(85, 700092, 'Regent Estate S.O'),
(86, 700094, 'S.R.F.T.I. S.O'),
(87, 700095, 'Golf Green S.O'),
(88, 700099, 'Mukundapur S.O'),
(89, 700107, 'E.K.T S.O'),
(90, 700108, 'ISI Po S.O'),
(91, 700084, 'Jadavpur');

-- --------------------------------------------------------

--
-- Table structure for table `collection`
--

CREATE TABLE IF NOT EXISTS `collection` (
  `collection_id` int(11) NOT NULL AUTO_INCREMENT,
  `collection_name` varchar(255) NOT NULL,
  `collection_banner` varchar(255) NOT NULL,
  `collection_thumble` varchar(255) NOT NULL,
  `collection_details` text NOT NULL,
  PRIMARY KEY (`collection_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `front_banner`
--

CREATE TABLE IF NOT EXISTS `front_banner` (
  `banner_id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`banner_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `front_banner`
--

INSERT INTO `front_banner` (`banner_id`, `url`, `image`) VALUES
(4, 'http://balaskolkata.com/allproduct.php', '15957af9757b8c7b1a29c6863249979c.jpg'),
(5, 'http://balaskolkata.com/allproduct.php', 'c853ffc1de0403ee042d915a74737330.jpg'),
(8, 'http://balaskolkata.com/allproduct.php', '488bf06df2d76318387c2796c0b2e9be.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE IF NOT EXISTS `product_category` (
  `record_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`record_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=296 ;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`record_id`, `product_id`, `category_id`) VALUES
(108, 54, 16),
(109, 55, 16),
(110, 56, 16),
(113, 57, 16),
(116, 61, 16),
(117, 62, 16),
(118, 63, 16),
(119, 64, 16),
(120, 65, 16),
(121, 66, 16),
(122, 67, 17),
(123, 68, 17),
(125, 70, 17),
(126, 71, 17),
(128, 73, 17),
(130, 75, 17),
(131, 76, 17),
(132, 77, 18),
(133, 78, 18),
(134, 79, 18),
(135, 80, 18),
(137, 82, 18),
(138, 83, 18),
(139, 84, 18),
(140, 85, 18),
(145, 90, 20),
(146, 91, 20),
(147, 92, 20),
(148, 93, 20),
(149, 94, 20),
(150, 95, 20),
(151, 96, 20),
(152, 97, 20),
(153, 98, 20),
(154, 99, 20),
(155, 100, 20),
(156, 101, 20),
(157, 102, 20),
(158, 103, 20),
(159, 104, 20),
(160, 105, 20),
(161, 106, 20),
(162, 107, 15),
(167, 108, 16),
(168, 109, 16),
(169, 110, 16),
(170, 111, 16),
(171, 112, 16),
(172, 86, 21),
(173, 87, 21),
(175, 88, 21),
(176, 89, 21),
(177, 113, 15),
(178, 114, 15),
(179, 115, 15),
(180, 116, 15),
(181, 117, 15),
(182, 118, 15),
(183, 119, 15),
(184, 120, 15),
(186, 122, 15),
(187, 123, 15),
(188, 124, 15),
(212, 125, 15),
(216, 40, 15),
(224, 48, 16),
(226, 58, 16),
(227, 59, 16),
(230, 17, 15),
(231, 18, 15),
(233, 19, 15),
(234, 20, 15),
(235, 21, 15),
(236, 22, 15),
(237, 23, 15),
(238, 24, 15),
(239, 25, 15),
(240, 26, 15),
(241, 27, 15),
(243, 28, 15),
(244, 29, 15),
(245, 30, 15),
(246, 31, 15),
(247, 32, 15),
(248, 33, 15),
(249, 34, 15),
(250, 35, 15),
(251, 36, 15),
(252, 37, 15),
(253, 38, 15),
(254, 41, 16),
(255, 42, 16),
(256, 43, 16),
(257, 44, 16),
(258, 45, 16),
(259, 46, 16),
(260, 47, 16),
(261, 49, 16),
(262, 60, 16),
(263, 81, 18),
(264, 121, 15),
(271, 126, 15),
(273, 134, 17),
(274, 135, 17),
(276, 137, 17),
(277, 138, 17),
(278, 139, 17),
(280, 141, 17),
(281, 142, 17),
(282, 143, 17),
(283, 144, 17),
(284, 145, 17),
(285, 146, 17),
(286, 147, 17),
(287, 148, 17),
(288, 149, 17),
(289, 150, 17),
(290, 151, 17),
(291, 152, 17),
(292, 136, 17),
(293, 153, 16),
(294, 140, 17),
(295, 16, 15);

-- --------------------------------------------------------

--
-- Table structure for table `product_collection`
--

CREATE TABLE IF NOT EXISTS `product_collection` (
  `record_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `collection_id` int(11) NOT NULL,
  PRIMARY KEY (`record_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product_review`
--

CREATE TABLE IF NOT EXISTS `product_review` (
  `review_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `review_by(email)` varchar(255) NOT NULL,
  `review_by(name)` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `rate` float NOT NULL,
  `publish` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`review_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `product_review`
--

INSERT INTO `product_review` (`review_id`, `product_id`, `review_by(email)`, `review_by(name)`, `title`, `details`, `rate`, `publish`) VALUES
(2, 14, 'prasun@php.net', 'Prasun Pal', 'Nice Product', 'This Product Is Very Good.', 5, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
