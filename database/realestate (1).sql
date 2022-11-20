-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2022 at 11:03 AM
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
-- Database: `realestate`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `phonenumber` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `phonenumber`, `email`, `password`) VALUES
(1, 'yohannes', 'admin', 9097878, 'yohannes@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phonenumber` int(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`id`, `name`, `username`, `email`, `phonenumber`, `password`, `image`) VALUES
(7, 'James b', 'jami', 'jemi@gmail.com', 95642312, '7b9879d8801de7ec0738401ebdcaa93d', 'img/agent3.jfif'),
(10, 'surafel', 'sura', 'superadmin@gmail.com', 32435789, '717d323d7122211176a499dc09ed88a3', 'img/agent.jfif'),
(11, 'dani', 'dani', 'yo@gmail.com', 32435, '717d323d7122211176a499dc09ed88a3', 'img/agent2.jfif'),
(12, 'asdfg', 'sdfgh', 'bezaayalsew@gmail.co', 324358908, '717d323d7122211176a499dc09ed88a3', 'img/1 - Copy.jfif'),
(13, 'jona', 'jjoo', 'addis@gmail.com', 987654, '717d323d7122211176a499dc09ed88a3', 'img/'),
(14, 'yonas', 'joyy', 'yo@gmail.com', 32435890, '717d323d7122211176a499dc09ed88a3', 'img/icon.png'),
(15, 'owner', 'yona', 'superadmin@gmail.com', 32435890, '717d323d7122211176a499dc09ed88a3', 'img/icon.png'),
(16, 'yonas', 'yo', 'mulugeta.yinager@gma', 32435, '717d323d7122211176a499dc09ed88a3', 'img/2.jfif'),
(17, 'y', 'uu', 'bezaayalsew@gmail.co', 987654, '717d323d7122211176a499dc09ed88a3', 'img/aa.png'),
(18, 'yohannes', 'sami', 'bezaayalsew@gmail.com', 98754578, 'yohannab2237@B', 'img/aa.png');

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `age` int(20) NOT NULL,
  `phoneNumber` int(12) NOT NULL,
  `adress` varchar(100) NOT NULL,
  `pasword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`id`, `first_name`, `last_name`, `username`, `sex`, `age`, `phoneNumber`, `adress`, `pasword`) VALUES
(65, 'manesh', ',mmaas', '@ab', 'female', 30, 988747433, 'debrebrhan', '34e7fbc49d8e6c0e54c6509d6d79bd11'),
(66, 'KIBURNEW', 'ENGIDA', 'kiru', 'male', 43, 987454332, 'addis abeba', '754bc1fe841f180f76ecbf8f9b1e7f99'),
(71, 'weewr', 'jj', 'yo', 'male', 34, 32435890, 'bd', '776b11615fa1b9c99f52e1efd75c92b1'),
(72, 'ty', 'jj', 'ownertrt', 'male', 77, 32435890, 'owner', '717d323d7122211176a499dc09ed88a3'),
(73, 'jo', 'bro', 'yy', 'male', 12, 987654, 'bahir dar', '717d323d7122211176a499dc09ed88a3'),
(74, 'rwetwe', 'bro', 'ss', 'male', 77, 987654, 'bahir dar', '717d323d7122211176a499dc09ed88a3'),
(75, 'yohannes', 'edewd', 'jooo', 'male', 34, 987654, 'bahir dar', 'c641e594d54c1dddaf6e79b9792e65c3'),
(76, 'yohannes', 'edewd', 'hub', 'male', 34, 987654, 'bahir dar', '70b4269b412a8af42b1f7b0d26eceff2'),
(77, 'yohannes', 'edewd', 'ter', 'male', 34, 987654, 'bahir dar', '70b4269b412a8af42b1f7b0d26eceff2');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `Name`, `Email`, `Subject`, `Message`) VALUES
(11, 'yo', 'y@gmail.com', 'hey', 'ghjgijkl'),
(12, 'yohannes', 'yohannesEmail@gmail.com', 'hey', 'i have some suggestion '),
(13, 'samson', 'samiEmail@gmail.com', 'hi', 'i get a problem with your system please help me'),
(14, 'samson', 'samson@gmail.com', 'selam', 'hey how are you i have some advice for your system can you contact me please'),
(15, 'Name', 'Email@gmail.com', 'Subject', 'hi'),
(16, 'sura', 'Email@gmail.com', 'Subject', 'hi'),
(17, 'yohannes', 'yohannes@gmail.com', 'hey', 'i have some suggestion on your system please contact me on telegram my telegram number is 123456789'),
(18, 'solo', 'Email@gmail.com', 'Subjecthi', 'hey their'),
(19, 'teshi', 'tesh@gmail.com', 'hi', 'byyyyyyyyyyyyyyy'),
(20, 'daniel', 'Email@gmail.com', 'id 45 bete tlkuwal', 'you can publish the house'),
(21, 'YOHANNES', 'YYY@gmail.com', 'hey', '1 house is released so you can modify and upload the house'),
(22, 'yohannes', 'yohan@gmail.com', 'hey', 'yemikeraye bite ale if you have a time you can upload the data of the house');

-- --------------------------------------------------------

--
-- Table structure for table `house`
--

CREATE TABLE `house` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `type` varchar(50) NOT NULL,
  `price` varchar(255) NOT NULL,
  `address` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `uploaded_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `disc` varchar(600) NOT NULL,
  `sold_status` int(1) NOT NULL DEFAULT 0,
  `status2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `house`
--

INSERT INTO `house` (`id`, `image`, `type`, `price`, `address`, `status`, `uploaded_date`, `disc`, `sold_status`, `status2`) VALUES
(24, 'img/rent5.jfif', 'villa', '200', 'debrebrhan', 'for rent', '2022-08-19 04:29:13', '', 1, ''),
(30, 'img/1.jfif', 'villa', '20000', 'Addis abeba', 'for sell', '2022-08-18 17:07:12', '', 1, ''),
(31, 'img/4.jfif', 'appartama', '20000', 'harrer', 'for sell', '2022-08-18 17:24:10', '', 0, ''),
(32, 'img/5.jfif', 'appartama', '2000', 'harrer', 'for sell', '2022-08-18 21:18:26', '', 1, ''),
(33, 'img/1 - Copy.jfif', 'vila', '200', 'bd', 'for sell', '2022-08-18 19:43:14', 'this is nothing , but something ....', 1, ''),
(45, 'img/blog-img-3.jpg', 'vila', '1234', 'bd', 'for sell', '2022-08-18 19:41:36', '', 1, ''),
(51, 'img/8.jfif', 'vila', '200', 'owner', 'for rent', '2022-08-15 17:32:44', '', 0, ''),
(53, 'img/signin-bg.jpg', 'appartment', '200', 'bahir dar', 'for rent', '2022-08-16 06:09:46', '', 0, ''),
(54, 'img/7.jfif', 'vila', '400', 'bahir dar', 'for rent', '2022-08-16 07:21:45', '', 0, ''),
(55, 'img/5.jfif', 'vila', '200', 'bd', 'for rent', '2022-08-16 07:33:56', '', 0, ''),
(60, 'img/6.jfif', 'jhon', '12345678', 'yohannab', 'for rent', '2022-08-16 10:48:15', '                       this is disc', 0, ''),
(65, 'img/8.jfif', 'resort', '234', 'bahir dar', 'for rent', '2022-08-17 13:03:57', '                       alskdkfglfcmglkfhofjghoidfjgitydrifgfckjghsljdAHPEUyruezdhgfbncfjkxhfcghzoirhgkzdfjcfjghdizfuhzgdfijgjdfhgzdpjgvjdfxhiugxuifcghidfhgsdjfgozdfui', 0, ''),
(99, 'img/8.jfif', 'yo', '1221', 'bahir dar', 'for rent', '2022-08-19 04:29:42', '                       hghjghjkllkjhgfcvbjklkjkjhjhj', 1, ''),
(100, 'img/6.jfif', 'vila', '1234', 'bahir dar', 'for sell', '2022-08-18 19:34:28', '                       kjdxfkxjcgkcjfgkjdcfkxjgfklhjgvkh', 1, ''),
(101, 'img/7.jfif', 'vila', '240', 'bahir dar', 'for sell', '2022-08-18 21:15:32', '         sdjhfjgkhjgvhlkgjhjfgklhkgbvjk', 1, ''),
(102, 'img/blog-img-3.jpg', 'yohann', '138', 'aa', 'for sell', '2022-08-18 21:36:02', '                       ghhghjhjjkjlkhgbkjb', 1, ''),
(103, 'img/5.jfif', 'appartama', '2500', 'bahir dar', 'for sell', '2022-08-18 22:34:04', 'Area: 150sq\r\nNumber of Rooms:5\r\nNumber of shoure:2  \r\n                     ', 0, ''),
(104, 'img/re2.jfif', 'Single-Family Home', '3500', 'gonder', 'for sell', '2022-08-18 22:37:45', 'Area: 150sq Number of Rooms:5 Number of shoure:2 1 parking                        ', 0, ''),
(105, 'img/8.jfif', 'vila', '2500', 'hawasa', 'for sell', '2022-08-18 22:38:55', 'Area: 100sq Number of Rooms:3 Number of shoure:2                       ', 0, ''),
(106, 'img/6.jfif', 'apartama', '2300', 'bahir dar', 'for sell', '2022-08-18 22:39:58', 'Area: 150sq Number of Rooms:5 Number of shoure:2 parking:1                       ', 0, ''),
(107, 'img/rent.jfif', 'vila', '3600', 'hawasa', 'for sell', '2022-08-18 22:40:52', 'Area: 150sq Number of Rooms:5 Number of shoure:2                       ', 0, ''),
(108, 'img/re7.jfif', 'America mood', '1800', 'dire dawa', 'for sell', '2022-08-18 22:42:01', 'Area: 150sq Number of Rooms:5 Number of shoure:2                       ', 0, ''),
(109, 'img/re3.jfif', 'apartama', '5600', 'adiss abeba', 'for sell', '2022-08-18 22:43:24', 'Area: 150sq Number of Rooms:5 Number of shoure:2  parking area:1                  ', 0, ''),
(110, 'img/blog-img-3.jpg', 'vila', '7300', 'bahir dar', 'for sell', '2022-08-18 22:45:42', ' Area: 150sq Number of Rooms:5 Number of shoure:2                       ', 0, ''),
(111, 'img/rent5.jfif', 'Single-Family Home', '457', 'hawasa', 'for sell', '2022-08-18 22:49:06', 'Area:150 sq\r\nParking Area:1\r\nShoure:3\r\nRoom:5\r\n             ', 0, ''),
(112, 'img/re8.jfif', 'multi-Family Home', '9700', 'adiss abeba', 'for sell', '2022-08-18 22:51:21', 'Area :200 sq\r\nRoom:6\r\nService:3\r\n                       ', 0, ''),
(113, 'img/6.jfif', 'multi-Family Home', '8500', 'harer', 'for sell', '2022-08-18 22:52:40', 'Area: 100sq \r\nNumber of Rooms:3\r\n Number of shoure:2                       ', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `houserent`
--

CREATE TABLE `houserent` (
  `id` int(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `type` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  `uploaded_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `disc` varchar(600) NOT NULL,
  `TotalAmount` int(11) NOT NULL,
  `BuyerId` varchar(100) NOT NULL,
  `MerchantOrderId` varchar(100) NOT NULL,
  `MerchantCode` varchar(100) NOT NULL,
  `MerchantId` varchar(100) NOT NULL,
  `TransactionCode` varchar(100) NOT NULL,
  `TransactionId` varchar(100) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `Currency` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `houserent`
--

INSERT INTO `houserent` (`id`, `image`, `type`, `price`, `address`, `uploaded_date`, `disc`, `TotalAmount`, `BuyerId`, `MerchantOrderId`, `MerchantCode`, `MerchantId`, `TransactionCode`, `TransactionId`, `Status`, `Currency`) VALUES
(1, 'img/a1.jpg', 'vila', 180, 'bahir dar', '2022-08-18 11:11:52', '                       dfhgkjdsfklghdfkjghkjdfhgjdfhgkjldshgfhsjkdghkdfjghdfjghdfjghskljfgh', 0, '', '', '', '', '', '', '', ''),
(2, '', '', 0, '', '2022-08-18 11:16:25', '', 240, '98e45c7a-10e5-4aaa-a9d0-3de37b19643a', 'xny2', 'SB1909', '0c347c7c-011c-4085-a454-4dea0fb31452', '7ZRMMCUC', 'be2cd33b-2130-4c3e-99b9-4c1dbcc39815', 'Paid', 'ETB');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `phonenumber` int(11) NOT NULL,
  `email` int(11) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`id`, `name`, `username`, `phonenumber`, `email`, `password`) VALUES
(1, '', 'owner', 0, 0, 'owner'),
(3, 'yo', 'yooy', 32435789, 0, '717d323d7122211176a499dc09ed88a3'),
(4, 'gy', 'by', 32435789, 0, '123'),
(5, 'yohannes', 'busu', 918779564, 0, 'yohannab2237'),
(6, 'hyhy', 'xx', 918779564, 0, '25d55ad283aa400af464c76d713c07ad');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `payer_name` varchar(100) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `phonenumber` int(100) DEFAULT NULL,
  `reason` varchar(100) DEFAULT NULL,
  `payed_amount` varchar(100) NOT NULL DEFAULT '0',
  `payed_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `house_id` int(11) NOT NULL,
  `paymentstatus` varchar(30) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `price`, `payer_name`, `username`, `phonenumber`, `reason`, `payed_amount`, `payed_date`, `house_id`, `paymentstatus`) VALUES
(15, 0, 'weewr', NULL, 32435890, NULL, '0', '2022-08-17 18:16:48', 45, 'pending'),
(16, 0, 'weewr', NULL, 32435890, NULL, '0', '2022-08-17 18:20:31', 45, 'pending'),
(17, 0, 'weewr', NULL, 32435890, NULL, '0', '2022-08-17 18:25:28', 45, 'pending'),
(18, 0, 'weewr', NULL, 32435890, NULL, '0', '2022-08-17 18:26:50', 45, 'pending'),
(19, 0, 'weewr', NULL, 32435890, NULL, '0', '2022-08-17 18:32:11', 45, 'pending'),
(20, 0, 'weewr', NULL, 32435890, NULL, '0', '2022-08-17 18:32:52', 45, 'pending'),
(21, 0, 'weewr', NULL, 32435890, NULL, '0', '2022-08-17 18:34:16', 45, 'pending'),
(22, 0, 'weewr', NULL, 32435890, NULL, '0', '2022-08-17 18:34:34', 45, 'pending'),
(23, 0, 'weewr', NULL, 32435890, NULL, '0', '2022-08-17 18:38:15', 45, 'pending'),
(76, 0, 'weewr', NULL, 32435890, NULL, '20000', '2022-08-18 17:16:56', 31, 'Canceled'),
(77, 0, 'weewr', NULL, 32435890, NULL, '20000', '2022-08-18 17:16:56', 31, 'Canceled'),
(78, 0, 'weewr', NULL, 32435890, NULL, '20000', '2022-08-18 17:16:56', 31, 'Canceled'),
(79, 0, 'weewr', NULL, 32435890, NULL, '20000', '2022-08-18 17:16:56', 31, 'Canceled'),
(80, 0, 'weewr', NULL, 32435890, NULL, '2000', '2022-08-18 16:59:08', 32, 'pending'),
(81, 0, 'weewr', NULL, 32435890, NULL, '0', '2022-08-18 17:02:14', 33, 'pending'),
(82, 0, 'weewr', NULL, 32435890, NULL, '0', '2022-08-18 17:03:22', 33, 'pending'),
(86, 0, 'weewr', NULL, 32435890, NULL, '0', '2022-08-18 17:16:56', 31, 'Canceled'),
(87, 0, 'weewr', NULL, 32435890, NULL, '0', '2022-08-18 17:16:56', 31, 'Canceled'),
(88, 0, 'weewr', NULL, 32435890, NULL, '0', '2022-08-18 17:17:51', 31, 'pending'),
(89, 0, 'weewr', NULL, 32435890, NULL, '0', '2022-08-18 17:20:06', 31, 'Canceled'),
(90, 0, 'weewr', NULL, 32435890, NULL, '20000', '2022-08-18 17:21:14', 31, 'Paid'),
(91, 0, 'weewr', NULL, 32435890, NULL, '0', '2022-08-18 17:25:39', 31, 'Canceled'),
(93, 0, '', NULL, 0, NULL, '0', '2022-08-18 19:29:03', 51, 'pending'),
(94, 0, '', NULL, 0, NULL, '0', '2022-08-18 19:29:38', 54, 'pending'),
(95, 0, '', NULL, 0, NULL, '1234', '2022-08-18 19:34:28', 100, 'Paid'),
(96, 0, '', NULL, 0, NULL, '1234', '2022-08-18 19:41:36', 45, 'Paid'),
(97, 0, '', NULL, 0, NULL, '200', '2022-08-18 19:43:14', 33, 'Paid'),
(98, 0, '', NULL, 0, NULL, '0', '2022-08-18 19:51:57', 99, 'pending'),
(99, 0, '', NULL, 0, NULL, '0', '2022-08-18 19:52:39', 24, 'pending'),
(105, 0, '', NULL, 0, NULL, '0', '2022-08-18 21:15:05', 101, 'pending'),
(106, 0, '', NULL, 0, NULL, '2000', '2022-08-18 21:18:26', 32, 'Paid'),
(107, 0, '', NULL, 0, NULL, '138', '2022-08-18 21:36:02', 102, 'Paid');

-- --------------------------------------------------------

--
-- Table structure for table `payment_renter`
--

CREATE TABLE `payment_renter` (
  `id` int(100) NOT NULL,
  `house_id` int(100) NOT NULL,
  `price` int(200) NOT NULL,
  `payer_name` varchar(500) NOT NULL,
  `username` varchar(100) NOT NULL,
  `phonenumber` varchar(200) NOT NULL,
  `payed_amount` varchar(500) NOT NULL,
  `payed_date` varchar(200) NOT NULL,
  `paymentstatus` varchar(50) NOT NULL,
  `reason` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_renter`
--

INSERT INTO `payment_renter` (`id`, `house_id`, `price`, `payer_name`, `username`, `phonenumber`, `payed_amount`, `payed_date`, `paymentstatus`, `reason`) VALUES
(6, 24, 0, '', '', '', '', '', '', ''),
(7, 99, 0, '', '', '', '1221', '', 'Paid', '');

-- --------------------------------------------------------

--
-- Table structure for table `renter`
--

CREATE TABLE `renter` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `age` varchar(13) NOT NULL,
  `phoneNumber` int(15) NOT NULL,
  `adress` varchar(50) NOT NULL,
  `pasword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `renter`
--

INSERT INTO `renter` (`id`, `first_name`, `last_name`, `username`, `sex`, `age`, `phoneNumber`, `adress`, `pasword`) VALUES
(28, 'KIBURNEW', 'DEBASH', 'tesh', 'male', '43', 987454332, 'addis abeba', '15ae942c9802a1c43398'),
(29, 'KIBURNEW', 'ENGIDA', '1234', 'male', '43', 987454332, 'addis abeba', '2237'),
(30, 'yohanna', 'get', 'yoha', 'male', '34', 32435, 'owner', '717d323d7122211176a499dc09ed88a3'),
(31, 'jo', 'bro', 'yo', 'male', '34', 32435789, 'yo', '717d323d7122211176a499dc09ed88a3'),
(32, 'jo', 'b', 'y', 'male', '12', 987654, 'bahir dar', '80b10dbf3a336837f33c0d28d1fc0656'),
(33, 'adamu', 'gared', 'ada', 'male', '34', 98876523, 'bahir dar', '70b4269b412a8af42b1f7b0d26eceff2'),
(34, 'adamu', 'gared', 'gar', 'male', '34', 987654, 'bahir dar', '70b4269b412a8af42b1f7b0d26eceff2'),
(35, 'yohannes', 'ferede', 'dan', 'male', '34', 987654, 'bahir dar', '70b4269b412a8af42b1f7b0d26eceff2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `house`
--
ALTER TABLE `house`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `houserent`
--
ALTER TABLE `houserent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `house_id` (`house_id`);

--
-- Indexes for table `payment_renter`
--
ALTER TABLE `payment_renter`
  ADD PRIMARY KEY (`id`),
  ADD KEY `house_id_fk` (`house_id`);

--
-- Indexes for table `renter`
--
ALTER TABLE `renter`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `house`
--
ALTER TABLE `house`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `payment_renter`
--
ALTER TABLE `payment_renter`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `renter`
--
ALTER TABLE `renter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`house_id`) REFERENCES `house` (`id`);

--
-- Constraints for table `payment_renter`
--
ALTER TABLE `payment_renter`
  ADD CONSTRAINT `payment_renter_ibfk_1` FOREIGN KEY (`house_id`) REFERENCES `house` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
