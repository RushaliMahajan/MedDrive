-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2021 at 02:14 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(4, 'admin', '1234', '2021-12-06 15:52:47');

-- --------------------------------------------------------

--
-- Table structure for table `booked`
--

CREATE TABLE `booked` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(30) NOT NULL,
  `EMAIL` varchar(40) NOT NULL,
  `ADDRESS` varchar(30) NOT NULL,
  `PHONE` text NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booked`
--

INSERT INTO `booked` (`ID`, `NAME`, `EMAIL`, `ADDRESS`, `PHONE`, `Date`) VALUES
(15, 'Shreya Sinha', 'shreyasinha@gmail.com', 'Rohini Sector 2', '8865793422', '2021-12-03 16:21:30'),
(17, 'Kanika Jain', 'kj@yahoo.com', 'CP', '9876543210', '2021-12-03 16:22:34'),
(58, 'SUBHASH CHAND', 'segdb', 'HOUSE NO-750, GALI NO-23, JOSH', '07982312254', '2021-12-06 17:58:49');

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `id` int(20) NOT NULL,
  `NAME` varchar(30) NOT NULL,
  `PHONE` text NOT NULL,
  `COST` int(11) NOT NULL,
  `SERVICE` varchar(30) NOT NULL,
  `LOCATION` varchar(15) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`id`, `NAME`, `PHONE`, `COST`, `SERVICE`, `LOCATION`, `status`) VALUES
(2, 'MOOLCHAND HOSPITAL', '(313) 555-5735', 2400, 'PRIVATE HOSPITAL', 'DELHI', 1),
(3, 'MAX HOSPITAL', '(171) 555-2222', 5000, 'PRIVATE HOSPITAL', 'DELHI', 1),
(4, 'APOLLO HOSPITAL', '(503) 555-9931', 12000, 'PUBLIC HOSPITAL', 'DELHI', 1),
(5, 'GANGA RAM HOSPITAL', '(204) 619-5731', 6500, 'PRIVATE HOSPITAL', 'DELHI', 1),
(6, 'P.D GARG PVT HOSPITAL', '(480) 631-2097', 3000, 'PERSONAL/PRIVATE SERVICE', 'DELHI', 0),
(7, 'SANTOKH HOSPITAL', '(0172)508-8088', 2000, 'PUBLIC HOSPITAL', 'CHANDIGARH', 1),
(8, 'HEALING HOSPITAL', '(0172)508-8883', 1200, 'PRIVATE HOSPITAL', 'CHANDIGARH', 0),
(9, 'MUKUT HOSPITAL', '(0172)434-4444', 500, 'PUBLIC HOSPITAL', 'CHANDIGARH', 1),
(10, 'EDEN CRITICAL CARE ', '(0172)412-3400', 1000, 'PRIVATE HOSPITAL', 'CHANDIGARH', 1),
(11, 'RAJAGIRI HOSPITAL', '(0484)290-5000', 7000, 'PUBLIC HOSPITAL', 'KERALA', 1),
(12, 'COCHIN HOSPITAL', '(0484)288-7800', 3500, 'PUBLIC HOSPITAL', 'KERALA', 0),
(13, 'BANGLA SAHIB SERVICE', '9897562412', 0, 'GURUDWARA SERVICE', 'DELHI', 0),
(16, 'PANKAJ TRAVELS', '989897326', 23, 'PRIVATE HOSPITAL', 'MUMBAI', 1),
(17, 'GANGA RAM HOSPITAL', '180065742', 12, 'PRIVATE HOSPITAL', 'DELHI', 0);

-- --------------------------------------------------------

--
-- Table structure for table `newvehicles`
--

CREATE TABLE `newvehicles` (
  `id` int(11) NOT NULL,
  `DriverName` varchar(20) NOT NULL,
  `VehiclesTitle` varchar(30) NOT NULL,
  `VehiclesBrand` varchar(20) NOT NULL,
  `VehiclesOverview` text NOT NULL,
  `PricePerDay` int(11) NOT NULL,
  `FuelType` varchar(20) NOT NULL,
  `ModelYear` int(11) NOT NULL,
  `SeatingCapacity` int(11) NOT NULL,
  `AirConditioner` int(11) NOT NULL,
  `PowerDoorLocks` int(11) NOT NULL,
  `AntiLockBrakingSystem` int(11) NOT NULL,
  `BrakeAssist` int(11) NOT NULL,
  `PowerSteering` int(11) NOT NULL,
  `DriverAirbag` int(11) NOT NULL,
  `PassengerAirbag` int(11) NOT NULL,
  `PowerWindows` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newvehicles`
--

INSERT INTO `newvehicles` (`id`, `DriverName`, `VehiclesTitle`, `VehiclesBrand`, `VehiclesOverview`, `PricePerDay`, `FuelType`, `ModelYear`, `SeatingCapacity`, `AirConditioner`, `PowerDoorLocks`, `AntiLockBrakingSystem`, `BrakeAssist`, `PowerSteering`, `DriverAirbag`, `PassengerAirbag`, `PowerWindows`) VALUES
(13, 'Rakesh', 'Rakesh Travels', ' 1', 'Private Ambulance Service', 1200, 'Petrol', 2017, 6, 1, 1, 0, 1, 0, 1, 0, 1),
(14, 'Mukesh', 'Mukesh Travels', ' 1', 'Private Ambulance Service', 1200, 'Petrol', 2017, 6, 1, 1, 0, 1, 0, 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactusinfo`
--

CREATE TABLE `tblcontactusinfo` (
  `id` int(11) NOT NULL,
  `Address` tinytext DEFAULT NULL,
  `EmailId` varchar(255) DEFAULT NULL,
  `ContactNo` char(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcontactusinfo`
--

INSERT INTO `tblcontactusinfo` (`id`, `Address`, `EmailId`, `ContactNo`) VALUES
(1, 'MedDrive Center																									', 'meddrive@gmail.com', '9876543210');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactusquery`
--

CREATE TABLE `tblcontactusquery` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `EmailId` varchar(120) DEFAULT NULL,
  `ContactNumber` char(11) DEFAULT NULL,
  `Message` longtext DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcontactusquery`
--

INSERT INTO `tblcontactusquery` (`id`, `name`, `EmailId`, `ContactNumber`, `Message`, `PostingDate`, `status`) VALUES
(1, 'Anuj Kumar', 'webhostingamigo@gmail.com', '2147483647', 'My payment was delayed', '2017-06-18 10:03:07', 1),
(2, 'Riya Jain', 'riyajain@gmail.com', '9876543210', 'Facing issues in payment', '2021-12-02 08:14:05', 1),
(3, 'Shreya Sinha', 'shreyasinha@gmail.com', '8867014233', 'Your website carries onlu authentic data. Can you add plasma donation information?', '2021-12-02 16:40:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbltestimonial`
--

CREATE TABLE `tbltestimonial` (
  `id` int(11) NOT NULL,
  `UserEmail` varchar(100) NOT NULL,
  `Testimonial` mediumtext NOT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltestimonial`
--

INSERT INTO `tbltestimonial` (`id`, `UserEmail`, `Testimonial`, `PostingDate`, `status`) VALUES
(1, 'demo@gmail.com', 'Great Service', '2017-06-18 07:44:31', 1),
(2, 'webhostingamigo@gmail.com', 'Helpful platform', '2017-06-18 07:46:05', 1),
(3, 'rushalimahajan@gmail.com', 'User friendly', '2021-11-20 13:02:10', 1),
(4, 'abc@gmail.com', 'Need more platforms like these', '2021-12-06 05:04:11', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `FullName` varchar(120) DEFAULT NULL,
  `EmailId` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `FullName`, `EmailId`, `Password`, `Address`) VALUES
(1, 'Swagata Katiyar', 'demo@gmail.com', 'f925916e2754e5e03f75dd58a5733251', 'Delhi'),
(2, 'Sanya Gupta', 'abc@gmail.com', 'f925916e2754e5e03f75dd58a5733251', 'Delhi'),
(3, 'Nakshita Malhotra', 'webhostingamigo@gmail.com', 'f09df7868d52e12bba658982dbd79821', 'New Delhi'),
(5, 'RUSHALI MAHAJAN', 'rushalimahajan@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Vaishali');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booked`
--
ALTER TABLE `booked`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newvehicles`
--
ALTER TABLE `newvehicles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcontactusinfo`
--
ALTER TABLE `tblcontactusinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcontactusquery`
--
ALTER TABLE `tblcontactusquery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbltestimonial`
--
ALTER TABLE `tbltestimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `booked`
--
ALTER TABLE `booked`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `newvehicles`
--
ALTER TABLE `newvehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tblcontactusinfo`
--
ALTER TABLE `tblcontactusinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcontactusquery`
--
ALTER TABLE `tblcontactusquery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbltestimonial`
--
ALTER TABLE `tbltestimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
