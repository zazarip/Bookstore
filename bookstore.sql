-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2022 at 07:45 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Adm_username` varchar(20) NOT NULL,
  `Adm_email` varchar(20) NOT NULL,
  `Adm_pass` varchar(15) NOT NULL,
  `Adm_name` varchar(50) NOT NULL,
  `Book_code` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Adm_username`, `Adm_email`, `Adm_pass`, `Adm_name`, `Book_code`) VALUES
('zariffDanial01', 'zariff00danial@gmail', 'zariff10', 'Zariff Danial', 10001),
('syafiqah12', 'syafiqahs_@gmail.com', 'syaff123', 'Syafiqah Syazwani', 10002),
('zariffDanial01', 'zariff00danial@gmail', 'zariff10', 'Zariff Danial', 10003),
('syafiqah12', 'syafiqahs_@gmail.com', 'syaff123', 'Syafiqah Syazwani', 10004),
('zariffDanial01', 'zariff00danial@gmail', 'zariff10', 'Zariff Danial', 10005);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `Book_code` int(5) NOT NULL,
  `Book_price` decimal(10,2) NOT NULL,
  `book_title` text NOT NULL,
  `book_author` text NOT NULL,
  `book_publisher` varchar(30) NOT NULL,
  `p_date` date NOT NULL,
  `book_cat` text NOT NULL,
  `Cust_username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`Book_code`, `Book_price`, `book_title`, `book_author`, `book_publisher`, `p_date`, `book_cat`, `Cust_username`) VALUES
(10001, '10.00', 'Lawak Kampus', 'Karya Keith', 'GEMPAK STARZ', '2015-12-15', 'Fiction', 'zaki_1308'),
(10002, '20.00', '20 A+ Essays', 'Nallini.M', 'PELANGI SDN. BHD.', '2021-06-23', 'Non-Fiction', 'ijan0203'),
(10003, '27.00', 'The Adventure of Sherlock Holmes', 'Arthur Conan Doyle', 'Chiltern Publishing', '2019-10-01', 'Fiction', 'miee1101'),
(10004, '24.90', 'Matematik Tingkatan 5', 'Wong Jin Lao', 'SASBADI', '2019-04-15', 'Non-Fiction', 'saeho1902'),
(10005, '10.00', 'Harry Potter (Deathly Hallows)', 'J.K. Rowling', 'Bloomsbury', '2007-07-21', 'Fiction', 'anyaforger12');

-- --------------------------------------------------------

--
-- Table structure for table `books category`
--

CREATE TABLE `books category` (
  `Book_code` int(5) NOT NULL,
  `Fict_book` text NOT NULL,
  `Nonfict_book` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books category`
--

INSERT INTO `books category` (`Book_code`, `Fict_book`, `Nonfict_book`) VALUES
(10001, 'YES', 'NO'),
(10002, 'NO', 'YES'),
(10003, 'YES', 'NO'),
(10004, 'NO', 'YES'),
(10005, 'YES', 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Cust_username` varchar(20) NOT NULL,
  `Cust_pass` varchar(15) NOT NULL,
  `Cust_email` varchar(25) NOT NULL,
  `Cust_phonenum` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Cust_username`, `Cust_pass`, `Cust_email`, `Cust_phonenum`) VALUES
('anyaforger12', 'peanut007', 'anyaforger17@gmail.com', '0124532367'),
('ijan0203', 'jaan0803', 'nor.hifzhan@gmail.com', '0134528923'),
('miee1101', 'denver05', 'hilmieee1701@gmail.com', '0193703902'),
('saeho1902', 'berlin06', 'saehoo_park@gmail.com', '0189076546'),
('zaki_1308', 'Zak0203', 'muhd_zaki@gmail.com', '0136783498');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Cust_username` varchar(20) NOT NULL,
  `Book_code` int(5) NOT NULL,
  `Seller_ID` int(15) NOT NULL,
  `Book_feedback` varchar(100) NOT NULL,
  `Service_feedback` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Cust_username`, `Book_code`, `Seller_ID`, `Book_feedback`, `Service_feedback`) VALUES
('anyaforger12', 10001, 1, 'great', 'good service'),
('ijan0203', 10002, 4, 'good', 'fast response'),
('miee1101', 10003, 2, 'excellent', 'kind seller'),
('saeho1902', 10004, 5, 'great', 'excellent service'),
('zaki_1308', 10005, 3, 'good', 'friendly seller');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Purchase_ID` int(6) NOT NULL,
  `Cash` decimal(10,2) NOT NULL,
  `Card_ID` int(20) NOT NULL,
  `Purchase_Receipt` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Purchase_ID`, `Cash`, `Card_ID`, `Purchase_Receipt`) VALUES
(11001, '10.00', 0, 11101),
(11002, '40.00', 0, 11102),
(11003, '0.00', 56708945, 11103),
(11004, '0.00', 67097895, 11104),
(11005, '50.00', 0, 11105);

-- --------------------------------------------------------

--
-- Table structure for table `pickup`
--

CREATE TABLE `pickup` (
  `Cust_username` varchar(20) NOT NULL,
  `Cust_phonenum` varchar(12) NOT NULL,
  `Date_pickup` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pickup`
--

INSERT INTO `pickup` (`Cust_username`, `Cust_phonenum`, `Date_pickup`) VALUES
('anyaforger12', '0124532367', '2022-08-11'),
('miee1101', '0193703902', '2022-08-13'),
('saeho1902', '0189076546', '2022-07-29'),
('zaki_1308', '0136783498', '2022-09-25'),
('ijan0203', '0134528923', '2022-08-16');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `Purchase_ID` int(6) NOT NULL,
  `DateTime_purchase` datetime NOT NULL,
  `No_purchase` int(15) NOT NULL,
  `Total_price` decimal(10,2) NOT NULL,
  `Discount` int(5) NOT NULL,
  `Pay_type` text NOT NULL,
  `Cust_username` varchar(20) NOT NULL,
  `Seller_ID` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`Purchase_ID`, `DateTime_purchase`, `No_purchase`, `Total_price`, `Discount`, `Pay_type`, `Cust_username`, `Seller_ID`) VALUES
(11001, '2022-08-05 10:24:15', 1, '10.00', 2, 'cash', 'anyaforger12', 1),
(11002, '2022-08-07 08:20:20', 2, '40.00', 6, 'cash', 'ijan0203', 4),
(11003, '2022-07-20 12:01:24', 3, '81.00', 20, 'card', 'miee1101', 2),
(11004, '2022-09-22 06:45:29', 4, '99.60', 30, 'card', 'saeho1902', 5),
(11005, '2022-08-11 02:20:55', 5, '50.00', 10, 'cash', 'zaki_1308', 3);

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `Seller_ID` int(15) NOT NULL,
  `Seller_email` varchar(20) NOT NULL,
  `Seller_pass` varchar(15) NOT NULL,
  `Seller_name` varchar(50) NOT NULL,
  `Book_code` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`Seller_ID`, `Seller_email`, `Seller_pass`, `Seller_name`, `Book_code`) VALUES
(1, 'isellbook@gmail.com', 'isellbook123', 'Mr Chua', 10001),
(2, 'isellbook@gmail.com', 'isellbook123', 'Mr Chua', 10003),
(3, 'isellbook@gmail.com', 'isellbook123', 'Mr Chua', 10005),
(4, 'studybook02@gmail.co', 'study123', 'Mr Ho', 10002),
(5, 'studybook02@gmail.co', 'study123', 'Mr Ho', 10004);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD KEY `fk9` (`Book_code`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`Book_code`);

--
-- Indexes for table `books category`
--
ALTER TABLE `books category`
  ADD KEY `fk8` (`Book_code`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Cust_username`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD KEY `fk2` (`Cust_username`),
  ADD KEY `fk3` (`Book_code`),
  ADD KEY `fk4` (`Seller_ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD KEY `fk5` (`Purchase_ID`);

--
-- Indexes for table `pickup`
--
ALTER TABLE `pickup`
  ADD KEY `fk` (`Cust_username`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`Purchase_ID`),
  ADD KEY `fk6` (`Seller_ID`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`Seller_ID`),
  ADD KEY `fk7` (`Book_code`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `fk9` FOREIGN KEY (`Book_code`) REFERENCES `books` (`Book_code`);

--
-- Constraints for table `books category`
--
ALTER TABLE `books category`
  ADD CONSTRAINT `fk8` FOREIGN KEY (`Book_code`) REFERENCES `books` (`Book_code`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `fk2` FOREIGN KEY (`Cust_username`) REFERENCES `customer` (`Cust_username`),
  ADD CONSTRAINT `fk3` FOREIGN KEY (`Book_code`) REFERENCES `books` (`Book_code`),
  ADD CONSTRAINT `fk4` FOREIGN KEY (`Seller_ID`) REFERENCES `seller` (`Seller_ID`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `fk5` FOREIGN KEY (`Purchase_ID`) REFERENCES `purchase` (`Purchase_ID`);

--
-- Constraints for table `pickup`
--
ALTER TABLE `pickup`
  ADD CONSTRAINT `fk` FOREIGN KEY (`Cust_username`) REFERENCES `customer` (`Cust_username`);

--
-- Constraints for table `purchase`
--
ALTER TABLE `purchase`
  ADD CONSTRAINT `fk6` FOREIGN KEY (`Seller_ID`) REFERENCES `seller` (`Seller_ID`);

--
-- Constraints for table `seller`
--
ALTER TABLE `seller`
  ADD CONSTRAINT `fk7` FOREIGN KEY (`Book_code`) REFERENCES `books` (`Book_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
