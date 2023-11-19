-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2023 at 06:32 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `CategoryID` int(11) NOT NULL,
  `CategoryName` varchar(255) NOT NULL,
  `CategoryStatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CategoryID`, `CategoryName`, `CategoryStatus`) VALUES
(1, 'bluetooh', 'Active'),
(2, 'Vi tính', 'Active'),
(3, 'Sport', 'Active'),
(4, 'soundbar', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `ID` int(11) NOT NULL,
  `Names` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Comments` varchar(255) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `Dates` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`ID`, `Names`, `Phone`, `Comments`, `ProductID`, `Dates`) VALUES
(15, 'nguyen van a', '123456789', 'good !', 42, '2022-11-11 04:11:55:PM'),
(16, 'Bạc xỉu 1', '0328162643', 'sản phẩm rất ok ', 77, '2023-11-19 03:00:55:AM');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `ID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `CustomerName` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `CustomerAddress` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`ID`, `UserID`, `CustomerName`, `Phone`, `Email`, `CustomerAddress`) VALUES
(59, 15, 'nguyen van a', '99999999999', 'nguyenvana@gmail.com', 'HaNoi'),
(60, 15, 'nguyen van a', '99999999999', 'nguyenvana@gmail.com', 'HaNoi'),
(61, 15, 'nguyen van a', '99999999999', 'nguyenvana@gmail.com', 'HaNoi'),
(62, 15, 'nguyen van a', '99999999999', 'nguyenvana@gmail.com', 'HaNoi'),
(63, 15, 'nguyen van a', '99999999999', 'nguyenvana@gmail.com', 'HaNoi'),
(64, 15, 'nguyen van a', '99999999999', 'nguyenvana@gmail.com', 'HaNoi'),
(65, 15, 'nguyen van a', '99999999999', 'nguyenvana@gmail.com', 'HaNoi'),
(66, 17, 'nguyen van a', '99999999999', 'nguyenvana@gmail.com', 'HaNoi'),
(67, 18, 'nguyen van t', '99999999999', 'nguyenvant@gmail.com', 'HaNoi'),
(68, 21, 'nguyen van a', '99999999999', 'nguyenvana@gmail.com', 'HaNoi'),
(69, 22, 'test', '123456789', 'test@gmail.com', 'HN'),
(70, 22, 'test', '12345678', 'testforfun@gmail.com', 'HN'),
(71, 13, 'thiet', '12324421', 'thiet11201@gmail.com', 'Hà nội ');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `OrderDetailID` int(11) NOT NULL,
  `OrderID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `OrderTotal` float NOT NULL,
  `StatusOrderDetail` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`OrderDetailID`, `OrderID`, `ProductID`, `Quantity`, `OrderTotal`, `StatusOrderDetail`) VALUES
(66, 44, 42, 1, 425, 1),
(67, 45, 54, 1, 234, 1),
(68, 46, 57, 1, 222, 1),
(69, 47, 42, 1, 425, 1),
(70, 48, 41, 1, 200, 1),
(71, 49, 42, 1, 425, 1),
(72, 50, 42, 1, 425, 0),
(73, 50, 41, 1, 200, 0),
(74, 50, 40, 1, 300, 0),
(75, 51, 42, 3, 1275, 0),
(76, 51, 39, 1, 300, 1),
(77, 52, 54, 1, 234, 1),
(78, 53, 42, 1, 425, 1),
(79, 54, 79, 1, 35, 0),
(80, 55, 78, 1, 40, 0),
(81, 55, 77, 1, 25, 0),
(82, 55, 76, 1, 25, 0),
(83, 56, 79, 1, 35, 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `OrderDate` varchar(255) NOT NULL,
  `OrderStatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderID`, `UserID`, `OrderDate`, `OrderStatus`) VALUES
(44, 15, '01/11/2023 2:24 PM', 0),
(45, 15, '01/11/2023 2:27 PM', 0),
(46, 15, '02/11/2023 2:29 PM', 0),
(47, 15, '02/11/2023 2:32 PM', 0),
(48, 15, '02/11/2023 2:33 PM', 0),
(49, 15, '02/11/2023 2:34 PM', 0),
(50, 15, '03/14/2023 4:10 PM', 0),
(51, 17, '03/15/2023 9:48 AM', 0),
(52, 18, '04/15/2023 9:56 AM', 0),
(53, 21, '14/15/2023 10:24 AM', 0),
(54, 22, '05/11/2023 7:27 AM', 0),
(55, 22, '05/11/2023 8:30 AM', 0),
(56, 13, '11/18/2023 5:02 AM', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProductID` int(11) NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `ProductDescription` varchar(255) NOT NULL,
  `ProductImage` varchar(255) NOT NULL,
  `OldPrice` float NOT NULL,
  `NewPrice` float NOT NULL,
  `CategoryID` int(11) NOT NULL,
  `ProductStatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductID`, `ProductName`, `ProductDescription`, `ProductImage`, `OldPrice`, `NewPrice`, `CategoryID`, `ProductStatus`) VALUES
(25, 'Iphone X', 'Product high quality', 'discount-7.jpg', 300, 200, 0, 'Active'),
(75, 'Vivo V25 Pro 5G', 'A portable computer device that combines mobile telephone and computing functions into one unit. They are distinguished from feature phones', 'vivo-v25-pro-5g-xanh-thumb-1-600x600.jpg', 30, 25, 0, 'Active'),
(76, 'Loa JBL', 'A portable computer device that combines mobile telephone and computing functions into one unit. They are distinguished from feature phones', 'download (12).jpg', 30, 25, 1, 'Active'),
(77, 'Loa JBL EON ONE', 'A portable computer device that combines mobile telephone and computing functions into one unit. They are distinguished from feature phones', 'download (8).jpg', 30, 25, 1, 'Active'),
(78, 'Loa JBL Partybox', 'A portable computer device that combines mobile telephone and computing functions into one unit. They are distinguished from feature phones', 'download (9).jpg', 50, 40, 1, 'Active'),
(79, 'Loa JBL Go ', 'A portable computer device that combines mobile telephone and computing functions into one unit. They are distinguished from feature phones', 'download (10).jpg', 40, 35, 1, 'Active'),
(80, 'Loa JBL Go PRO', 'A portable computer device that combines mobile telephone and computing functions into one unit. They are distinguished from feature phones', 'download (12).jpg', 70, 45, 1, 'Active'),
(81, 'Loa JBL KI', 'A portable computer device that combines mobile telephone and computing functions into one unit. They are distinguished from feature phones', 'images (2).jpg', 44, 34, 2, 'Active'),
(82, 'LOA JBL Redmi 10 ', 'A portable computer device that combines mobile telephone and computing functions into one unit. They are distinguished from feature phones', 'images (4).jpg', 30, 15, 2, 'Active'),
(83, 'Loa JBL SUMMIT', 'A portable computer device that combines mobile telephone and computing functions into one unit. They are distinguished from feature phones', 'images (4).jpg', 50, 30, 2, 'Active'),
(84, 'Loa JBL EON', 'A portable computer device that combines mobile telephone and computing functions into one unit. They are distinguished from feature phones', 'images (6).jpg', 70, 50, 2, 'Active'),
(85, 'Loa JBL CO', 'A portable computer device that combines mobile telephone and computing functions into one unit. They are distinguished from feature phones', 'images (11).jpg', 30, 20, 2, 'Active'),
(86, 'Loa JBL BOOMBOX', 'A portable computer device that combines mobile telephone and computing functions into one unit. They are distinguished from feature phones', 'images (1).jpg', 100, 95, 3, 'Active'),
(87, 'Loa JBL Chagre', 'A portable computer device that combines mobile telephone and computing functions into one unit. They are distinguished from feature phones', 'images (2).jpg', 77, 66, 3, 'Active'),
(88, 'Loa JBL PUSlE', 'A portable computer device that combines mobile telephone and computing functions into one unit. They are distinguished from feature phones', 'images (6).jpg', 88, 55, 3, 'Active'),
(89, 'Loa JBL FLIP PRO', 'A portable computer device that combines mobile telephone and computing functions into one unit. They are distinguished from feature phones', 'images (4).jpg', 102, 99, 3, 'Active'),
(90, 'Loa JBL FLIP', 'A portable computer device that combines mobile telephone and computing functions into one unit. They are distinguished from feature phones', 'images (1).jpg', 55, 44, 3, 'Active'),
(91, 'Loa JBL Go PRO', 'A portable computer device that combines mobile telephone and computing functions into one unit. They are distinguished from feature phones', 'images (8).jpg', 67, 55, 4, 'Active'),
(92, 'Loa JBL track', 'A portable computer device that combines mobile telephone and computing functions into one unit. They are distinguished from feature phones', 'images (9).jpg', 65, 33, 4, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `PassW` varchar(255) NOT NULL,
  `Role` int(11) NOT NULL,
  `Date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `UserName`, `Email`, `PassW`, `Role`, `Date`) VALUES
(13, 'admin', 'admin@gmail.com', '123456', 0, '4'),
(15, 'nguyenvana', 'nguyenvana@gmail.com', '123456', 1, '5'),
(17, 'aaaaa', 'anguyen@gmail.com', '123456', 1, '5'),
(18, 'nguyenvant', 'nguyenvant@gmail.com', '123456', 1, '5'),
(21, 'vu', 'vu123@gmail.com', '123456', 1, '5'),
(22, 'testforfun', 'testforfun@gmail.com', '123456', 1, '5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`OrderDetailID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `CategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `OrderDetailID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
