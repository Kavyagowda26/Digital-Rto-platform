-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2022 at 03:15 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rto_management_system`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `DrivingLicenseRecord` ()  BEGIN
SELECT * FROM `drivinglicense` LEFT JOIN enroller ON drivinglicense.enrollerid=enroller.enrollerid;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `LLR_Record` ()  BEGIN
SELECT * from llr left join enroller ON llr.enrollerid=enroller.enrollerid LEFT JOIN state ON state.stateid=llr.stateid LEFT JOIN city ON city.cityid=llr.cityid LEFT JOIN vehicletype ON vehicletype.vehicletypeid=llr.vehicletypeid;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `PaymentRecord` ()  BEGIN
SELECT * from payment left join enroller ON payment.enrollerid=enroller.enrollerid;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `VehicleRegistrationRecord` ()  BEGIN
SELECT * FROM vehicleregistration LEFT JOIN enroller ON vehicleregistration.enrollerid=enroller.enrollerid LEFT JOIN state ON state.stateid=vehicleregistration.stateid LEFT JOIN city ON city.cityid=vehicleregistration.cityid LEFT JOIN vehicletype ON vehicletype.vehicletypeid = vehicleregistration.vehicletypeid;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branchid` int(10) NOT NULL,
  `branchname` varchar(25) NOT NULL,
  `branchaddress` text NOT NULL,
  `cityid` int(10) NOT NULL,
  `pin` varchar(10) NOT NULL,
  `stateid` int(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branchid`, `branchname`, `branchaddress`, `cityid`, `pin`, `stateid`, `status`) VALUES
(1, 'Bangalore Central (KA-01)', 'RTO Office ', 1, '560034', 1, 'Active'),
(2, 'Bangalore West (KA-02)', 'RTO Office', 2, '560010', 1, 'Active'),
(3, 'Bangalore East (KA-03)', 'RTO Office', 3, '560030', 1, 'Active'),
(4, 'Bangalore NORTH (KA-04)', 'RTO Office', 4, '560022', 1, 'Active'),
(5, 'BangaloreSOUTH (KA-05)', 'RTO Office', 5, '560041', 1, 'Active'),
(6, 'TUMKUR (KA-06)', 'RTO Office', 6, '572105', 1, 'Active'),
(7, 'KOLAR (KA-07)', 'RTO Office', 7, '562105', 1, 'Active'),
(8, 'KGF (KA-08)', 'RTO Office', 8, '563113', 1, 'Active'),
(9, 'Mysore (KA-09)', 'RTO Office', 9, '570001', 1, 'Active'),
(10, 'CHAMARAJANAGAR (KA-10)', 'RTO Office', 10, '571313', 1, 'Active'),
(11, 'MANDYA (KA-11)', 'RTO Office', 11, '571401', 1, 'Active'),
(12, 'MADIKERI (KA-12)', 'RTO Office', 12, '571201', 1, 'Active'),
(13, 'HASSAN (KA-13)', 'RTO Office', 13, '573201', 1, 'Active'),
(14, 'SHIVAMOGA (KA-14)', 'RTO Office', 14, '577201', 1, 'Active'),
(15, 'SAGAR (KA-15)', 'RTO Office', 15, '577401', 1, 'Active'),
(16, 'CHITRADURGA (KA-16)', 'RTO Office', 16, '577501', 1, 'Active'),
(17, 'DAVANAGERE  (KA-17)', 'RTO Office', 17, '577001', 1, 'Active'),
(18, 'CHIKKAMANGALORE (KA-18)', 'RTO Office', 18, '577101', 1, 'Active'),
(19, 'MANGALURU (KA-19)', 'RTO Office', 19, '574142', 1, 'Active'),
(20, 'UDUPI (KA-20)', 'RTO Office', 20, '574118', 1, 'Active'),
(21, 'PUTTUR (KA-21)', 'RTO Office', 21, '574201', 1, 'Active'),
(22, 'BELAGAUM (KA-22)', 'RTO Office', 22, '590001', 1, 'Active'),
(23, 'CHIKKODI (KA-23)', 'RTO Office', 23, '591201', 1, 'Active'),
(24, 'BAILAHONGALA (KA-24)', 'RTO Office', 24, '591102', 1, 'Active'),
(25, 'DHARAWAD (KA-25)', 'RTO Office', 25, '580001', 1, 'Active'),
(26, 'GADAG (KA-26)', 'RTO Office', 26, '581117', 1, 'Active'),
(27, 'HAVERI (KA-27)', 'RTO Office', 27, '581110', 1, 'Active'),
(28, 'BIJAPUR (KA-28)', 'RTO Office', 28, '586101', 1, 'Active'),
(29, 'BAGALKOT (KA-29)', 'RTO Office', 29, '587101', 1, 'Active'),
(30, 'KARWAR (KA-30)', 'RTO Office', 30, '581301', 1, 'Active'),
(31, 'SIRSI (KA-31)', 'RTO Office', 31, '584101', 1, 'Active'),
(32, 'GULBARGA (KA-32)', 'RTO Office', 32, '585104', 1, 'Active'),
(33, 'MANVI (KA-33)', 'RTO Office', 33, '584123', 1, 'Active'),
(34, 'BELLARY (KA-34)', 'RTO Office', 34, '583101', 1, 'Active'),
(35, 'HOSPET (KA-35)', 'RTO Office', 35, '583201', 1, 'Active'),
(36, 'RAICHUR  (KA-36)', 'RTO Office', 36, '584101', 1, 'Active'),
(37, 'GANAGAVATHI (KA-37)', 'RTO Office', 37, '583227', 1, 'Active'),
(38, 'BIDAR (KA-38)', 'RTO Office', 38, '585401', 1, 'Active'),
(39, 'BHALKI (KA-39)', 'RTO Office', 39, '585328', 1, 'Active'),
(40, 'CHIKKABALAPURA (KA-40)', 'RTO Office', 40, '562101', 1, 'Active'),
(41, 'R R NAGAR (KA-41)', 'RTO Office', 41, '560098', 1, 'Active'),
(42, 'RAMANAGAR (KA-42)', 'RTO Office', 42, '562159', 1, 'Active'),
(43, 'DEVANAHALLI (KA-43)', 'RTO Office', 43, '562110', 1, 'Active'),
(44, 'TIPTUR (KA-44)', 'RTO Office', 44, '572201', 1, 'Active'),
(45, 'HUNSUR (KA-45)', 'RTO Office', 45, '571105', 1, 'Active'),
(46, 'SAKALESHAPURA (KA-46)', 'RTO Office', 46, '573125', 1, 'Active'),
(47, 'HONNAVARA (KA-47)', 'RTO Office', 47, '581334', 1, 'Active'),
(48, 'JAMAKANDI (KA-48)', 'RTO Office', 48, '587301', 1, 'Active'),
(49, 'GOKAK (KA-49)', 'RTO Office', 49, '591218', 1, 'Active'),
(50, 'YELHANKA BLR (KA-50)', 'RTO Office', 50, '560064', 1, 'Active'),
(51, 'ELECTRONIC CITY (KA-51)', 'RTO Office', 51, '560100', 1, 'Active'),
(52, 'NELAMANGALA BLR (KA-52)', 'RTO Office', 52, '562123', 1, 'Active'),
(53, 'K R PURAM BLR (KA-53)', 'RTO Office', 53, '560016', 1, 'Active'),
(54, 'NAGAMANGALA (KA-54)', 'RTO Office', 54, '571432', 1, 'Active'),
(55, 'Mysore EAST (KA-55)', 'RTO Office', 55, '570007', 1, 'Active'),
(56, 'BASAVA KALYANA (KA-56)', 'RTO Office', 56, '585327', 1, 'Active'),
(57, 'SHANTHINAGAR BLR (KA-57)', 'RTO Office', 57, '560027', 1, 'Active'),
(58, 'BANASHANKARI BLR (KA-58)', 'RTO Office', 58, '560085', 1, 'Active'),
(59, 'CHAMARAJ PET BLR (KA-59)', 'RTO Office', 59, '560018', 1, 'Active'),
(60, 'R T NAGAR (KA-60)', 'RTO Office', 60, '560032', 1, 'Active'),
(61, 'MARATHAHALLI (KA-61)', 'RTO Office', 61, '560037', 1, 'Active'),
(62, 'SURATHKAL (KA-62)', 'RTO Office', 62, '575014', 1, 'Active'),
(63, 'HUBLI DHARWAD DIST(KA-63)', 'RTO Office', 63, '580009', 1, 'Active'),
(64, 'MADHUGIRI (KA-64)', 'RTO Office', 64, '572132', 1, 'Active'),
(65, 'DANDELI N K (KA-65)', 'RTO Office', 65, '581325', 1, 'Active'),
(66, 'THARIKERE (KA-66)', 'RTO Office', 66, '577228', 1, 'Active'),
(67, 'Telangana EB11', 'RTA NALGONDA, H.NO 6-9-294/1, NEAR MARCONI ITI  COMPLEX, MARRIGUDA, HYDERABAD ROAD, NALGONDA TELANGANA - 508001', 6, '258741', 1, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `cityid` int(10) NOT NULL,
  `city` varchar(50) NOT NULL,
  `stateid` int(10) NOT NULL,
  `citycode` varchar(10) NOT NULL,
  `discription` text NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`cityid`, `city`, `stateid`, `citycode`, `discription`, `status`) VALUES
(1, 'BangaloreCenter KORMANGALA', 1, '560034', 'KA-01', 'Active'),
(2, 'BangaloreWEST Rajajinagar', 1, '560010', 'KA-02', 'Active'),
(3, 'BangaloreEAST Indiranagar', 1, '560030', 'KA-03', 'Active'),
(4, 'BangaloreNORTH Yeswanthpura', 1, '560022', 'KA-04', 'Active'),
(5, 'BangaloreSOUTH Jayanagar', 1, '560041', 'KA-05', 'Active'),
(6, 'TUMKUR', 1, '572105', 'KA-06', 'Active'),
(7, 'KOLAR', 1, '562105', 'KA-07', 'Active'),
(8, 'KGF', 1, '563113', 'KA-08', 'Active'),
(9, 'Mysore', 1, '570001', 'KA-09', 'Active'),
(10, 'CHAMARAJANAGAR', 1, '571313', 'KA-10', 'Active'),
(11, 'MANDYA', 1, '571401', 'KA-11', 'Active'),
(12, 'MADIKERI', 1, '571201', 'KA-12', 'Active'),
(13, 'HASSAN', 1, '573201', 'KA-13', 'Active'),
(14, 'SHIVAMOGA', 1, '577201', 'KA-14', 'Active'),
(15, 'SAGAR', 1, '577401', 'KA-15', 'Active'),
(16, 'CHITRADURGA', 1, '577501', 'KA-16', 'Active'),
(17, 'DAVANAGERE', 1, '577001', 'KA-17', 'Active'),
(18, 'CHIKKAMANGALORE', 1, '577101', 'KA-18', 'Active'),
(19, 'MANGALURU', 1, '574142', 'KA-19', 'Active'),
(20, 'UDUPI', 1, '574118', 'KA-20', 'Active'),
(21, 'PUTTUR', 1, '574201', 'KA-21', 'Active'),
(22, 'BELAGAUM', 1, '590001', 'KA-22', 'Active'),
(23, 'CHIKKODI', 1, '591201', 'KA-23', 'Active'),
(24, 'BAILAHONGALA', 1, '591102', 'KA-24', 'Active'),
(25, 'DHARAWAD', 1, '580001', 'KA-25', 'Active'),
(26, 'GADAG', 1, '581117', 'KA-26', 'Active'),
(27, 'HAVERI', 1, '581110', 'KA-27', 'Active'),
(28, 'BIJAPUR', 1, '586101', 'KA-28', 'Active'),
(29, 'BAGALKOT', 1, '587101', 'KA-29', 'Active'),
(30, 'KARWAR', 1, '581301', 'KA-30', 'Active'),
(31, 'SIRSI', 1, '584101', 'KA-31', 'Active'),
(32, 'GULBARGA', 1, '585104', 'KA-32', 'Active'),
(33, 'MANVI', 1, '584123', 'KA-33', 'Active'),
(34, 'BELLARY', 1, '583101', 'KA-34', 'Active'),
(35, 'HOSPET', 1, '583201', 'KA-35', 'Active'),
(36, 'RAICHUR', 1, '584101', 'KA-36', 'Active'),
(37, 'GANAGAVATHI', 1, '583227', 'KA-37', 'Active'),
(38, 'BIDAR', 1, '585401', 'KA-38', 'Active'),
(39, 'BHALKI', 1, '585328', 'KA-39', 'Active'),
(40, 'CHIKKABALAPURA', 1, '562101', 'KA-40', 'Active'),
(41, 'R R NAGAR', 1, '560098', 'KA-41', 'Active'),
(42, 'RAMANAGAR', 1, '562159', 'KA-42', 'Active'),
(43, 'DEVANAHALLI', 1, '562110', 'KA-43', 'Active'),
(44, 'TIPTUR', 1, '572201', 'KA-44', 'Active'),
(45, 'HUNSUR', 1, '571105', 'KA-45', 'Active'),
(46, 'SAKALESHAPURA', 1, '573125', 'KA-46', 'Active'),
(47, 'HONNAVARA', 1, '581334', 'KA-47', 'Active'),
(48, 'JAMAKANDI', 1, '587301', 'KA-48', 'Active'),
(49, 'GOKAK', 1, '591218', 'KA-49', 'Active'),
(50, 'YELHANKA BLR', 1, '560064', 'KA-50', 'Active'),
(51, 'ELECTRONIC CITY BLR', 1, '560100', 'KA-51', 'Active'),
(52, 'NELAMANGALA BLR', 1, '562123', 'KA-52', 'Active'),
(53, 'K R PURAM BLR', 1, '560016', 'KA-53', 'Active'),
(54, 'NAGAMANGALA', 1, '571432', 'KA-54', 'Active'),
(55, 'Mysore EAST', 1, '570007', 'KA-55', 'Active'),
(56, 'BASAVA KALYANA', 1, '585327', 'KA-56', 'Active'),
(57, 'SHANTHINAGAR BLR', 1, '560027', 'KA-57', 'Active'),
(58, 'BANASHANKARI BLR', 1, '560085', 'KA-58', 'Active'),
(59, 'CHAMARAJ PET BLR', 1, '560018', 'KA-59', 'Active'),
(60, 'R T NAGAR', 1, '560032', 'KA-60', 'Active'),
(61, 'MARATHAHALLI', 1, '560037', 'KA-61', 'Active'),
(62, 'SURATHKAL', 1, '575014', 'KA-62', 'Active'),
(63, 'HUBLI DHARWAD DIST', 1, '580009', 'KA-63', 'Active'),
(64, 'MADHUGIRI', 1, '572132', 'KA-64', 'Active'),
(65, 'DANDELI N K', 1, '581325', 'KA-65', 'Active'),
(66, 'THARIKERE', 1, '577228', 'KA-66', 'Active'),
(67, 'Bailur', 1, '01', 'Bailur', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `drivinglicense`
--

CREATE TABLE `drivinglicense` (
  `drivinglicenseid` int(10) NOT NULL,
  `enrollerid` int(10) NOT NULL,
  `llrid` int(10) NOT NULL,
  `dltype` varchar(50) NOT NULL,
  `stateid` int(10) NOT NULL,
  `cityid` int(10) NOT NULL,
  `vehicletypeid` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `swdof` varchar(50) NOT NULL,
  `paddr` text NOT NULL,
  `taddr` text NOT NULL,
  `paddrduration` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `birthplace` varchar(25) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `identificationmarks` varchar(50) NOT NULL,
  `bloodgroup` varchar(10) NOT NULL,
  `previousdl` varchar(50) NOT NULL,
  `applicationdate` date NOT NULL,
  `testdate` date NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `dlno` varchar(25) NOT NULL,
  `document` varchar(100) NOT NULL,
  `note` text NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `drivinglicense`
--

INSERT INTO `drivinglicense` (`drivinglicenseid`, `enrollerid`, `llrid`, `dltype`, `stateid`, `cityid`, `vehicletypeid`, `photo`, `name`, `swdof`, `paddr`, `taddr`, `paddrduration`, `dob`, `birthplace`, `qualification`, `identificationmarks`, `bloodgroup`, `previousdl`, `applicationdate`, `testdate`, `startdate`, `enddate`, `dlno`, `document`, `note`, `status`) VALUES
(1, 10, 2, 'New', 1, 2, 'N;', '23111b1.jpg', 'Nikhil', 'Mahesh kiran', 'Opp. Nehru Maidan, Maidan Rd, Attavar, Mangaluru, Karnataka 575001', 'Opp. Nehru Maidan, Maidan Rd, Attavar, Mangaluru, Karnataka 575001', '5', '2000-05-01', 'Bangalore', 'bca', '17012b1.jpg', 'O-positive', '', '2019-03-08', '2019-03-09', '0000-00-00', '0000-00-00', '', '214059ba01df4c67988c025becc6d314c7383.jpg', '', 'Approved'),
(2, 13, 5, 'New', 1, 42, 'a:2:{i:0;s:1:\"1\";i:1;s:1:\"2\";}', '3224f2.jpg', 'Manu Gowda', 'kariyappa', '#71 rayasandra kanakapura', '#71 rayasandra kanakapura', '5', '1997-12-02', 'Bangalore', 'bca', '23793f3.jpg', 'O-negative', '', '2019-03-31', '2019-04-01', '0000-00-00', '0000-00-00', '', '12502register.jpg', '', 'Approved'),
(3, 15, 7, 'New', 1, 20, 'a:2:{i:0;s:1:\"1\";i:1;s:1:\"3\";}', '2073849746t2.jpg', 'Bindya kumar', 'Rani', 'Rajsur', 'palapet', '4', '2003-07-30', 'Bangalore', 'BBM', '651108674loginimage.jpg', 'O-negative', '', '2021-07-30', '2021-07-31', '0000-00-00', '0000-00-00', '', '729270907pay.png', '', 'Paid'),
(4, 16, 8, 'New', 1, 16, 'a:2:{i:0;s:1:\"2\";i:1;s:1:\"3\";}', '1245993536t2.jpg', 'Bharath', 'Rani', '4th cross', '5th cross', '5', '1997-07-04', 'Bangalore', 'SSLc', '1924786492dloffice.jfif', 'O-negative', '', '2021-07-30', '2021-07-31', '2021-07-30', '2020-04-30', 'K123A4566', '467524986dlrenew.jpg', '', 'Closed'),
(5, 16, 8, 'Address Change', 1, 16, 'a:2:{i:0;s:1:\"2\";i:1;s:1:\"3\";}', '1245993536t2.jpg', 'Bharath', 'Rani', '5th cross', '6th cross', '5', '1997-07-04', 'Bangalore', 'SSLc', '1924786492dloffice.jfif', 'O-negative', '4', '2021-07-30', '2021-08-06', '2021-07-30', '2040-04-30', 'k89a23', '467524986dlrenew.jpg', '', 'Driving License issued'),
(6, 16, 0, 'Renewal', 1, 15, 'a:2:{i:0;s:1:\"2\";i:1;s:1:\"3\";}', '1950463325b2.jpg', 'Bharath kumar', '', '', '', '', '2003-07-25', 'Bangalore', 'BBC', '1739280019dloffice.jfif', 'A-positive', '', '2021-07-30', '2021-07-31', '2021-07-30', '2040-04-30', 'K123A4566', '139660443dlrenew.jpg', '', 'Driving License issued'),
(7, 20, 10, 'New', 1, 1, 'a:1:{i:0;s:1:\"3\";}', '14704331085.jpg', 'john root', 'Rani', '3rd floor', 'migy road', '10', '1992-09-02', 'Managalore', 'Diploma', '3829184926.jpg', 'A-positive', '', '2021-09-06', '2021-09-07', '2021-09-06', '2040-06-06', 'KA12AB1548', '10180779223.jpg', '', 'Driving License issued');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `empid` int(10) NOT NULL,
  `emptype` varchar(20) NOT NULL,
  `branchid` int(10) NOT NULL,
  `empname` varchar(25) NOT NULL,
  `loginid` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`empid`, `emptype`, `branchid`, `empname`, `loginid`, `password`, `status`) VALUES
(1, 'Admin', 5, 'manu rk', 'admin', 'adminadminadmin', 'Active'),
(2, 'Employee', 6, 'mahesh', 'mahesh', 'mahesh', 'Active'),
(3, 'Employee', 5, 'Raj kiran', 'raj', '123456', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `enroller`
--

CREATE TABLE `enroller` (
  `enrollerid` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contactno` varchar(15) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `enroller`
--

INSERT INTO `enroller` (`enrollerid`, `name`, `emailid`, `password`, `contactno`, `status`) VALUES
(1, 'Raj kiran', 'rajkira111n@gmail.com', '123456', '9874561230', 'Active'),
(2, 'Pter king', 'peter@gmail.com ', 'q1w2e3r4/', '998475411', 'Active'),
(3, 'Raj kiran', 'rajkiran@gmail.com', '123456789', '9986058114', 'Active'),
(8, 'Raj kiran', 'rajkiran@gmail.com', 'q1w2e3r4', '7894561230', 'Active'),
(9, 'Hudson', 'hudson123@gmail.com', '123456', '7894561230', 'Active'),
(10, 'Nikhil', 'plavazhin@gmail.com', '12345678', '9481447308', 'Active'),
(11, 'VIJAY ', 'VJ@GMAIL.COM ', '123456', '9535864464', 'Active'),
(12, 'manu', 'manu@gmail.com', '123456', '8296758366', 'Active'),
(13, 'Manu Gowda', 'manugowda@gmail.com', '123789', '8296758366', 'Active'),
(14, 'rajkiran', 'rajkira111n@gmail.com', 'q1w2e3r4', '7894561230', 'Active'),
(15, 'Bindya kumar', 'bindyakumar@gmail.com', 'q1w2e3r4', '7894561230', 'Active'),
(16, 'Bharath kumar', 'bharath@gmail.com ', '123456789', '9876543210', 'Active'),
(17, 'Megha Shyam', 'meghashyam@gmail.com', 'q1w2e3r4', '7894561230', 'Active'),
(18, 'Vishnu kumar', 'vishnukumar@gmail.com', 'q1w2e3r4', '7894561230', 'Active'),
(19, 'Balakrishna', 'balakrishna@gmail.com', 'q1w2e3r4', '7891161230', 'Active'),
(20, 'john root', 'johnroot@gmail.com', '123456789', '9876543210', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `llr`
--

CREATE TABLE `llr` (
  `llrid` int(10) NOT NULL,
  `enrollerid` int(10) NOT NULL,
  `llrtype` varchar(50) NOT NULL,
  `stateid` int(10) NOT NULL,
  `cityid` int(10) NOT NULL,
  `vehicletypeid` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `swd` varchar(25) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `paddr` text NOT NULL,
  `taddr` text NOT NULL,
  `paddrduration` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `birthplace` varchar(50) NOT NULL,
  `qualification` varchar(25) NOT NULL,
  `identificationmarks` text NOT NULL,
  `bloodgroup` varchar(25) NOT NULL,
  `applicationdate` date NOT NULL,
  `testdate` date NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `note` text NOT NULL,
  `document` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `llr`
--

INSERT INTO `llr` (`llrid`, `enrollerid`, `llrtype`, `stateid`, `cityid`, `vehicletypeid`, `name`, `swd`, `photo`, `paddr`, `taddr`, `paddrduration`, `dob`, `birthplace`, `qualification`, `identificationmarks`, `bloodgroup`, `applicationdate`, `testdate`, `startdate`, `enddate`, `note`, `document`, `status`) VALUES
(1, 11, '', 1, 2, 'a:1:{i:0;s:1:\"3\";}', 'VIJAY', 's/o kariyappa', '20791', '# 2 1ST A MAIN ROAD BANGALORE', 'Opp. Nehru Maidan, Maidan Rd, Attavar, Mangaluru, Karnataka 575001', '5', '1998-04-28', 'Bangalore', 'bca', '1700b1.jpg', 'O-positive', '2019-03-08', '2019-03-15', '0000-00-00', '0000-00-00', '', '317579ba01df4c67988c025becc6d314c7383.jpg', 'Paid'),
(3, 10, '', 1, 2, 'a:2:{i:0;s:1:\"2\";i:1;s:1:\"3\";}', 'Nikhil', 's/o kariyappa', '24181b1.jpg', 'Opp. Nehru Maidan, Maidan Rd, Attavar, Mangaluru, Karnataka 575001', 'Opp. Nehru Maidan, Maidan Rd, Attavar, Mangaluru, Karnataka 575001', '5', '2000-06-15', 'Mangalore', 'bca', '35949ba01df4c67988c025becc6d314c7383.jpg', 'O-negative', '2019-03-12', '2019-03-19', '0000-00-00', '0000-00-00', '', '139474.jpg', 'Paid'),
(4, 11, '', 1, 42, 'a:2:{i:0;s:1:\"2\";i:1;s:1:\"3\";}', 'VIJAY', 's/o kariyappa', '31235ab3.jpg', 'Opp. Nehru Maidan, Maidan Rd, Attavar, Mangaluru, Karnataka 575001', 'Opp. Nehru Maidan, Maidan Rd, Attavar, Mangaluru, Karnataka 575001', '5', '1998-04-28', 'Bangalore', 'bca', '3456changeofaddress.jpg', 'O-positive', '2019-03-31', '2019-04-07', '2019-03-31', '2019-04-30', '', '28601b3.jpg', 'Active'),
(5, 13, '', 1, 42, 'a:2:{i:0;s:1:\"1\";i:1;s:1:\"2\";}', 'Manu Gowda', 's/o kariyappa', '20085t3.jpg', '#71 rayasandra kanakapura ramanagara', '#71 rayasandra kanakapura ramanagara', '5', '1997-12-02', 'Bangalore', 'bca,mca', '15882license.png', 'O-positive', '2019-03-31', '2019-04-07', '2019-03-31', '2019-04-30', '', '9851vehicleregistration.png', 'Active'),
(6, 14, '', 1, 1, 'a:2:{i:0;s:1:\"2\";i:1;s:1:\"3\";}', 'rajkiran', 'Rani', '1665222406bb1.jpg', 'Shirak force road', 'bilan road', '10', '1999-01-04', 'Bangalore', 'Disploma', '1160717300loginimage.jpg', 'O-negative', '2021-07-30', '2021-08-06', '0000-00-00', '0000-00-00', '', '1518138315llr.png', 'Paid'),
(7, 15, '', 1, 20, 'a:2:{i:0;s:1:\"1\";i:1;s:1:\"3\";}', 'Bindya kumar', 'Rani', '225731736t2.jpg', 'sagara', 'hasan', '2', '2003-07-11', 'Bangalore', 'BBM', '106934944dloffice.jfif', 'O-negative', '2021-07-30', '2021-08-06', '2021-07-30', '2021-08-29', '', '908516638dloffice.jfif', 'Active'),
(8, 16, '', 1, 16, 'a:2:{i:0;s:1:\"2\";i:1;s:1:\"3\";}', 'Bharath', 'Rani', '559908499t2.jpg', 'Bangal', 'Teruna', '1', '1998-07-23', 'Bangalore', 'BBM', '1998309076dloffice.jfif', 'O-negative', '2021-07-30', '2021-08-06', '2021-07-30', '2021-08-29', '', '1238615418dl.jpg', 'Active'),
(9, 18, '', 1, 19, 'a:2:{i:0;s:1:\"2\";i:1;s:1:\"3\";}', 'Vishnu kumar', 'Raj kiran', '785412913BLUE & YELLOW logo.png', '3rd floor, city light', '5th floor, Ma gate', '2', '2003-07-31', 'Mangalore', 'Bcom', '820779917imgfora5883imgfora28430one.jpg', 'O-positive', '2021-08-09', '2021-08-16', '2021-08-09', '2021-09-08', '', '1852030016imgfora28430one.jpg', 'Active'),
(10, 20, '', 1, 1, 'a:1:{i:0;s:1:\"3\";}', 'john root', 'Rani', '2059874879images.jpg', '5th floor', '6th floor', '3', '1987-09-03', 'Bangalore', 'Diploma', '20552472133.jpg', 'O-positive', '2021-09-06', '2021-09-13', '2021-09-06', '2021-10-06', '', '2183707736.jpg', 'Active'),
(11, 1, '', 1, 1, 'a:2:{i:0;s:1:\"1\";i:1;s:1:\"4\";}', 'Raj kiran', 'Raj', '1796828368Airline Reservation System in VB.NET.png', '3rd floor', 'ka', '2', '1998-01-07', 'Bangalore', 'SSM', '192198588Airline Reservation System in VB.NET.png', 'A-negative', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '750948613Android Antenna Positioning System.png', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `paymentid` int(10) NOT NULL,
  `enrollerid` int(10) NOT NULL,
  `paymenttype` varchar(25) NOT NULL,
  `paidfor` varchar(20) NOT NULL,
  `paidid` int(10) NOT NULL,
  `paidamt` float(10,2) NOT NULL,
  `paiddate` date NOT NULL,
  `description` text NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`paymentid`, `enrollerid`, `paymenttype`, `paidfor`, `paidid`, `paidamt`, `paiddate`, `description`, `status`) VALUES
(6, 11, 'VISA', 'Vehicle Registration', 1, 858.00, '2019-03-15', '<br>Payment type: VISA<br>Card holder: P Srinivas<br>Card number: 154785548774<br>Expires on: 2021-05<br>CVV Number: 965', 'Active'),
(7, 11, 'Credit card', 'Vehicle Registration', 2, 858.00, '2019-03-15', '<br>Payment type: Credit card<br>Card holder: V DASE GOWDA<br>Card number: 145862587422<br>Expires on: 2022-09<br>CVV Number: 125', 'Active'),
(8, 11, 'Credit card', 'Vehicle Registration', 3, 858.00, '2019-03-15', '<br>Payment type: Credit card<br>Card holder: V DASE GOWDA<br>Card number: 1547585636542<br>Expires on: 2022-09<br>CVV Number: 131', 'Active'),
(9, 11, 'Credit card', 'Vehicle Registration', 4, 858.00, '2019-03-15', '<br>Payment type: Credit card<br>Card holder: V DASE GOWDA<br>Card number: 121365489956<br>Expires on: 2022-09<br>CVV Number: 135', 'Active'),
(10, 11, 'Rupay', 'LLR', 4, 140.00, '2019-03-31', '<br>Payment type: Rupay<br>Card holder: V DASE GOWDA<br>Card number: 123456789123<br>Expires on: 2019-12<br>CVV Number: 456', 'Active'),
(11, 13, 'Master Card', 'LLR', 5, 120.00, '2019-03-31', '<br>Payment type: Master Card<br>Card holder: Manu Gowda<br>Card number: 123456789123<br>Expires on: 2019-08<br>CVV Number: 478', 'Active'),
(12, 13, 'Rupay', 'DL', 2, 1380.00, '2019-03-31', '<br>Payment type: Rupay<br>Card holder: V DASE GOWDA<br>Card number: 123456758966<br>Expires on: 2020-12<br>CVV Number: 753', 'Active'),
(13, 14, 'VISA', 'LLR', 6, 140.00, '2021-07-30', '<br>Payment type: VISA<br>Card holder: Raj kiran<br>Card number: 1234567890123456<br>Expires on: 2022-01<br>CVV Number: 125', 'Active'),
(14, 15, 'VISA', 'LLR', 7, 140.00, '2021-07-30', '<br>Payment type: VISA<br>Card holder: Raj kiran<br>Card number: 1597894561231541<br>Expires on: 2022-01<br>CVV Number: 159', 'Active'),
(15, 15, 'VISA', 'DL', 3, 1876.00, '2021-07-30', '<br>Payment type: VISA<br>Card holder: Raj kiran<br>Card number: 1234567890123456<br>Expires on: 2022-01<br>CVV Number: 157', 'Active'),
(16, 15, 'VISA', 'Vehicle Registration', 5, 780.00, '2021-07-30', '<br>Payment type: VISA<br>Card holder: Raj kiran<br>Card number: 1594878578945615<br>Expires on: 2022-01<br>CVV Number: 158', 'Active'),
(17, 16, 'VISA', 'LLR', 8, 140.00, '2021-07-30', '<br>Payment type: VISA<br>Card holder: Raj kiran<br>Card number: 1234567890123456<br>Expires on: 2022-01<br>CVV Number: 158', 'Active'),
(18, 16, 'VISA', 'DL', 4, 1286.00, '2021-07-30', '<br>Payment type: VISA<br>Card holder: Raj kiran<br>Card number: 1234567890123456<br>Expires on: 2022-01<br>CVV Number: 255', 'Active'),
(19, 16, 'VISA', 'Address Change', 5, 531.00, '2021-07-30', '<br>Payment type: VISA<br>Card holder: Raj kiran<br>Card number: 1234567890123456<br>Expires on: 2022-01<br>CVV Number: 158', 'Active'),
(20, 16, 'VISA', 'Renewal', 6, 1141.00, '2021-07-30', '<br>Payment type: VISA<br>Card holder: Raj kiran<br>Card number: 1234567890123456<br>Expires on: 2022-01<br>CVV Number: 158', 'Active'),
(21, 18, 'VISA', 'LLR', 9, 140.00, '2021-08-09', '<br>Payment type: VISA<br>Card holder: Ankith K Desai<br>Card number: 1234567890123456<br>Expires on: 2022-01<br>CVV Number: 158', 'Active'),
(22, 20, 'VISA', 'LLR', 10, 80.00, '2021-09-06', '<br>Payment type: VISA<br>Card holder: Raj kiran<br>Card number: 1234567890123456<br>Expires on: 2022-01<br>CVV Number: 158', 'Active'),
(23, 20, 'VISA', 'DL', 7, 891.00, '2021-09-06', '<br>Payment type: VISA<br>Card holder: Raj kiran<br>Card number: 1234567890123456<br>Expires on: 2022-01<br>CVV Number: 158', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `qid` int(10) NOT NULL,
  `question` text NOT NULL,
  `option1` text NOT NULL,
  `option2` text NOT NULL,
  `option3` text NOT NULL,
  `option4` text NOT NULL,
  `answer` varchar(25) NOT NULL,
  `img` text NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`qid`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`, `img`, `status`) VALUES
(16, 'You can overtake a vehicle that is in the front ', 'Through the Left side of the vehicle ahead', 'Through the Right side of the vehicle ahead', 'if the road is  wide enough', 'Non of these', 'Option 2', '12505', 'Active'),
(17, 'What is the Full Form of \"RTO\"?', '\"Registration Transfer Organisation\"', '\"Regional Transfer Organisation\"', '\"Regional Transport Office \"', 'Non of these', 'Option 3', '9980b1.jpg', 'Active'),
(18, 'On a road that has been designated as one way', 'You should not drive in Reverse gear', 'You should not overtake', 'You should not park', 'Non of these', 'Option 1', '6814', 'Active'),
(19, 'If a vehicle approaches a Railway crossing that is not guarded and the vehicle wants to proceed,the driver should ', 'Wait until the train passes', 'Press horn and cross the track at the earliest', 'Stop the Vehicle on left hand side of the road, approach the track and ensure that there is no train or trolley coming from any side prior to crossing', 'Non of these', 'Option 3', '22074', 'Active'),
(20, 'Transport vehicle can be distinguished by', 'The color of the Vehicle', 'Number plate of the vehicle', 'tyre size of the vehicle', 'Non of these', 'Option 2', '4843b2.jpg', 'Active'),
(21, 'Driver of a vehicle shall drive through the', 'Left side of the road', 'Right side of the road', 'Center side of the road', 'None of these ', 'Option 1', '27826', 'Active'),
(22, 'If a vehicle is parked on the side of a road at night', 'The vehicle should be locked', 'Parking light should remain on', 'It should be parked on the left side of road', 'All of the above', 'option 4', '17428', 'Active'),
(23, 'Fog lamps should be used when', 'There is mist', 'At night', 'When the vehicle opposite is not using the dim light', 'None of these', 'Option 1', '5220', 'Active'),
(24, 'Zebra lines are meant for', 'Overtaking ', 'Stopping vehicles', 'Crossing of Pedestrains', 'None of these', 'Option 3', '17597', 'Active'),
(25, 'If an Ambulance is approaching', 'No preference should be given', 'Allow free passage by moving to the side of the road', 'Provide passage if there no vehicles on the other side', 'None of these', 'Option 2', '13315', 'Active'),
(26, 'Red traffic light is an sign to', 'Slow the vehicle', 'Proceed with caution', 'Ready to go', 'Stop the vehicle', 'option 4', '16256', 'Active'),
(27, 'Parking in front of a hospital is ', 'Correct', 'Not Correct', 'Depends on the situation', 'None of these', 'Option 2', '23185', 'Active'),
(28, 'Overtaking is prohibited when', ' Roads are slippery', 'Poses danger to oncoming traffic ', 'From the left side of the vehicle', 'All of the above', 'option 4', '22221', 'Active'),
(29, 'Drunken driving is', ' Allowed at right', 'Allowed during the day', 'Prohibited at all times ', 'None of these', 'Option 3', '8702', 'Active'),
(30, 'Boarding in and a lighting from vehicles when it is in motion is ', 'Allowed in autos ', 'Allowed in buses', 'allowed in bikes', 'Prohibited in all vehicles ', 'option 4', '5495', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `stateid` int(10) NOT NULL,
  `state` varchar(50) NOT NULL,
  `statecode` varchar(10) NOT NULL,
  `discription` text NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`stateid`, `state`, `statecode`, `discription`, `status`) VALUES
(1, 'Karnataka', 'KA', 'Karnataka State RTO', 'Active'),
(2, 'Kerala', '22', 'Kerala state', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `testid` int(10) NOT NULL,
  `enrollerid` int(10) NOT NULL,
  `examfor` varchar(25) NOT NULL,
  `qid` int(10) NOT NULL,
  `answer` varchar(10) NOT NULL,
  `marks` int(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`testid`, `enrollerid`, `examfor`, `qid`, `answer`, `marks`, `status`) VALUES
(1, 10, '2', 1, 'Option 1', 0, 'Pending'),
(2, 10, '2', 2, 'Option 1', 0, 'Pending'),
(3, 10, '2', 3, 'Option 1', 0, 'Pending'),
(4, 10, '2', 4, 'Option 1', 0, 'Pending'),
(5, 10, '2', 5, 'Option 1', 0, 'Pending'),
(6, 10, '2', 6, 'Option 1', 0, 'Pending'),
(7, 10, '2', 7, 'Option 1', 0, 'Pending'),
(8, 10, '2', 8, 'Option 1', 0, 'Pending'),
(9, 10, '2', 9, 'Option 1', 0, 'Pending'),
(10, 10, '2', 10, 'Option 1', 0, 'Pending'),
(11, 10, '2', 11, 'Option 1', 0, 'Pending'),
(12, 10, '2', 12, 'Option 1', 0, 'Pending'),
(13, 10, '2', 13, 'Option 1', 0, 'Pending'),
(14, 10, '2', 14, 'Option 1', 0, 'Pending'),
(15, 10, '2', 15, 'Option 1', 0, 'Pending'),
(16, 11, '4', 16, 'Option 2', 0, 'Pending'),
(17, 11, '4', 17, 'Option 3', 0, 'Pending'),
(18, 11, '4', 18, 'Option 3', 0, 'Pending'),
(19, 11, '4', 19, 'Option 3', 0, 'Pending'),
(20, 11, '4', 20, 'Option 2', 0, 'Pending'),
(21, 11, '4', 21, 'Option 1', 0, 'Pending'),
(22, 11, '4', 22, 'Option 4', 0, 'Pending'),
(23, 11, '4', 23, 'Option 1', 0, 'Pending'),
(24, 11, '4', 24, 'Option 3', 0, 'Pending'),
(25, 11, '4', 25, 'Option 2', 0, 'Pending'),
(26, 11, '4', 26, 'Option 4', 0, 'Pending'),
(27, 11, '4', 27, 'Option 2', 0, 'Pending'),
(28, 11, '4', 28, 'Option 4', 0, 'Pending'),
(29, 11, '4', 29, 'Option 3', 0, 'Pending'),
(30, 11, '4', 30, 'Option 4', 0, 'Pending'),
(31, 13, '5', 16, 'Option 1', 0, 'Pending'),
(32, 13, '5', 17, 'Option 3', 0, 'Pending'),
(33, 13, '5', 18, 'Option 1', 0, 'Pending'),
(34, 13, '5', 19, 'Option 3', 0, 'Pending'),
(35, 13, '5', 20, 'Option 2', 0, 'Pending'),
(36, 13, '5', 21, 'Option 1', 0, 'Pending'),
(37, 13, '5', 22, 'Option 4', 0, 'Pending'),
(38, 13, '5', 23, 'Option 1', 0, 'Pending'),
(39, 13, '5', 24, 'Option 3', 0, 'Pending'),
(40, 13, '5', 25, 'Option 2', 0, 'Pending'),
(41, 13, '5', 26, 'Option 4', 0, 'Pending'),
(42, 13, '5', 27, 'Option 2', 0, 'Pending'),
(43, 13, '5', 28, 'Option 4', 0, 'Pending'),
(44, 13, '5', 29, 'Option 3', 0, 'Pending'),
(45, 13, '5', 30, 'Option 4', 0, 'Pending'),
(46, 14, '6', 16, 'Option 1', 0, 'Pending'),
(47, 14, '6', 17, 'Option 1', 0, 'Pending'),
(48, 14, '6', 18, 'Option 3', 0, 'Pending'),
(49, 14, '6', 19, 'Option 1', 0, 'Pending'),
(50, 14, '6', 20, 'Option 1', 0, 'Pending'),
(51, 14, '6', 21, 'Option 3', 0, 'Pending'),
(52, 14, '6', 22, 'Option 3', 0, 'Pending'),
(53, 14, '6', 23, 'Option 3', 0, 'Pending'),
(54, 14, '6', 24, 'Option 2', 0, 'Pending'),
(55, 14, '6', 25, 'Option 1', 0, 'Pending'),
(56, 14, '6', 26, 'Option 1', 0, 'Pending'),
(57, 14, '6', 27, 'Option 2', 0, 'Pending'),
(58, 14, '6', 28, 'Option 2', 0, 'Pending'),
(59, 14, '6', 29, 'Option 1', 0, 'Pending'),
(60, 14, '6', 30, 'Option 1', 0, 'Pending'),
(61, 15, '7', 16, 'Option 2', 0, 'Pending'),
(62, 15, '7', 17, 'Option 3', 0, 'Pending'),
(63, 15, '7', 18, 'Option 4', 0, 'Pending'),
(64, 15, '7', 19, 'Option 3', 0, 'Pending'),
(65, 15, '7', 20, 'Option 2', 0, 'Pending'),
(66, 15, '7', 21, 'Option 2', 0, 'Pending'),
(67, 15, '7', 22, 'Option 2', 0, 'Pending'),
(68, 15, '7', 23, 'Option 1', 0, 'Pending'),
(69, 15, '7', 24, 'Option 3', 0, 'Pending'),
(70, 15, '7', 25, 'Option 2', 0, 'Pending'),
(71, 15, '7', 26, 'Option 4', 0, 'Pending'),
(72, 15, '7', 27, 'Option 2', 0, 'Pending'),
(73, 15, '7', 28, 'Option 3', 0, 'Pending'),
(74, 15, '7', 29, 'Option 3', 0, 'Pending'),
(75, 15, '7', 30, 'Option 4', 0, 'Pending'),
(76, 16, '8', 16, 'Option 2', 0, 'Pending'),
(77, 16, '8', 17, 'Option 3', 0, 'Pending'),
(78, 16, '8', 18, 'Option 1', 0, 'Pending'),
(79, 16, '8', 19, 'Option 3', 0, 'Pending'),
(80, 16, '8', 20, 'Option 1', 0, 'Pending'),
(81, 16, '8', 21, 'Option 2', 0, 'Pending'),
(82, 16, '8', 22, 'Option 2', 0, 'Pending'),
(83, 16, '8', 23, 'Option 1', 0, 'Pending'),
(84, 16, '8', 24, 'Option 3', 0, 'Pending'),
(85, 16, '8', 25, 'Option 2', 0, 'Pending'),
(86, 16, '8', 26, 'Option 4', 0, 'Pending'),
(87, 16, '8', 27, 'Option 2', 0, 'Pending'),
(88, 16, '8', 28, 'Option 3', 0, 'Pending'),
(89, 16, '8', 29, 'Option 3', 0, 'Pending'),
(90, 16, '8', 30, 'Option 4', 0, 'Pending'),
(91, 18, '9', 16, 'Option 2', 0, 'Pending'),
(92, 18, '9', 17, 'Option 3', 0, 'Pending'),
(93, 18, '9', 18, 'Option 1', 0, 'Pending'),
(94, 18, '9', 19, 'Option 3', 0, 'Pending'),
(95, 18, '9', 20, 'Option 2', 0, 'Pending'),
(96, 18, '9', 21, 'Option 2', 0, 'Pending'),
(97, 18, '9', 22, 'Option 2', 0, 'Pending'),
(98, 18, '9', 23, 'Option 1', 0, 'Pending'),
(99, 18, '9', 24, 'Option 3', 0, 'Pending'),
(100, 18, '9', 25, 'Option 2', 0, 'Pending'),
(101, 18, '9', 26, 'Option 4', 0, 'Pending'),
(102, 18, '9', 27, 'Option 2', 0, 'Pending'),
(103, 18, '9', 28, 'Option 4', 0, 'Pending'),
(104, 18, '9', 29, 'Option 3', 0, 'Pending'),
(105, 18, '9', 30, 'Option 4', 0, 'Pending'),
(106, 20, '10', 16, 'Option 2', 0, 'Pending'),
(107, 20, '10', 17, 'Option 3', 0, 'Pending'),
(108, 20, '10', 18, 'Option 1', 0, 'Pending'),
(109, 20, '10', 19, 'Option 3', 0, 'Pending'),
(110, 20, '10', 20, 'Option 2', 0, 'Pending'),
(111, 20, '10', 21, 'Option 1', 0, 'Pending'),
(112, 20, '10', 22, 'Option 2', 0, 'Pending'),
(113, 20, '10', 23, 'Option 1', 0, 'Pending'),
(114, 20, '10', 24, 'Option 3', 0, 'Pending'),
(115, 20, '10', 25, 'Option 2', 0, 'Pending'),
(116, 20, '10', 26, 'Option 4', 0, 'Pending'),
(117, 20, '10', 27, 'Option 2', 0, 'Pending'),
(118, 20, '10', 28, 'Option 4', 0, 'Pending'),
(119, 20, '10', 29, 'Option 3', 0, 'Pending'),
(120, 20, '10', 30, 'Option 4', 0, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `vehicleregistration`
--

CREATE TABLE `vehicleregistration` (
  `vehicleregid` int(10) NOT NULL,
  `enrollerid` int(10) NOT NULL,
  `stateid` int(10) NOT NULL,
  `cityid` int(10) NOT NULL,
  `ownername` varchar(50) NOT NULL,
  `swdof` varchar(50) NOT NULL,
  `regtype` varchar(25) NOT NULL,
  `dob` date NOT NULL,
  `paddr` text NOT NULL,
  `taddr` text NOT NULL,
  `paddrduration` varchar(50) NOT NULL,
  `pancardno` varchar(25) NOT NULL,
  `birthplace` varchar(50) NOT NULL,
  `vehiclepurchasedfrom` text NOT NULL,
  `vehicletypeid` int(10) NOT NULL,
  `vehicledetail` text NOT NULL,
  `chasisno` varchar(50) NOT NULL,
  `engineno` varchar(50) NOT NULL,
  `seatingcapacity` varchar(50) NOT NULL,
  `fuel` varchar(50) NOT NULL,
  `vehicleimg` varchar(100) NOT NULL,
  `note` text NOT NULL,
  `date` date NOT NULL,
  `vehicleno` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `vehicleregistration`
--

INSERT INTO `vehicleregistration` (`vehicleregid`, `enrollerid`, `stateid`, `cityid`, `ownername`, `swdof`, `regtype`, `dob`, `paddr`, `taddr`, `paddrduration`, `pancardno`, `birthplace`, `vehiclepurchasedfrom`, `vehicletypeid`, `vehicledetail`, `chasisno`, `engineno`, `seatingcapacity`, `fuel`, `vehicleimg`, `note`, `date`, `vehicleno`, `status`) VALUES
(1, 11, 1, 2, 'P Srinivas', 's/o P', 'Vehicle Transfer', '1993-01-14', 'no.16/5 A.D.Halli Bangalore-79', 'no.16/5 A.D.Halli Bangalore-79', '10', '789574555884', 'Bangalore', 'Toyota', 3, 'grey', '6658475', '6325412', '7', 'petrol', '', 'LMV', '2019-03-22', 'KA-02-B-9468', 'Active'),
(2, 11, 1, 2, 'V DASE GOWDA', 'S/O VENKATESH', 'Vehicle Transfer', '1974-01-15', 'Opp. Nehru Maidan, Maidan Rd, BANGALORE, Karnataka 575001', 'Opp. Nehru Maidan, Maidan Rd, BANGALORE, Karnataka 575001', '10', '789574555884', 'Bangalore', 'Toyota', 3, 'grey', '87451149', '3568743', '5', 'Diesel', '', 'LMV', '2019-03-22', 'KA-02-MN-8035', 'Active'),
(3, 11, 1, 2, 'V DASE GOWDA', 's/o VENKATESHAPPA', 'Vehicle Transfer', '1974-01-15', 'Opp. Nehru Maidan, Maidan Rd,BANGALORE, Karnataka 575001', 'Opp. Nehru Maidan, Maidan Rd,BANGALORE, Karnataka 575001', '10', '789574555884', 'Bangalore', 'Toyota', 3, 'grey', '6658445', '3568778', '5', 'Diesel', '', 'LMV', '2019-03-22', 'KA-02-MN-2273', 'Paid'),
(4, 11, 1, 2, 'V DASE GOWDA', 'S/O VENKATESHAPPA', 'New', '1974-01-15', 'Opp. Nehru Maidan, Maidan Rd, BANGALORE, Karnataka 575001', 'Opp. Nehru Maidan, Maidan Rd,BANGALORE, Karnataka 575001', '10', '789574555884', 'Bangalore', 'MARUTHI SUZUKI', 3, 'grey', '5787585', '9887455', '5', 'petrol', '', 'LMV', '2019-03-22', '', 'Paid'),
(5, 15, 1, 1, 'Rajosh', 'vihind', 'Vehicle Transfer', '1999-12-04', '3rd floor', '4th floor', '2', 'ASK7885I', 'Bangalore', 'Maruti', 2, 'Purchased', '456789', '4568', '4', 'Diesel', '', 'None', '2021-08-06', '', 'Paid');

-- --------------------------------------------------------

--
-- Table structure for table `vehicletype`
--

CREATE TABLE `vehicletype` (
  `vehicletypeid` int(10) NOT NULL,
  `vehicletype` varchar(25) NOT NULL,
  `description` text NOT NULL,
  `llrcost` float(100,2) NOT NULL,
  `dlcost` double(100,2) NOT NULL,
  `vehicleregcost` double(100,2) NOT NULL,
  `addresschangecost` double(100,2) NOT NULL,
  `dlrenewalcost` double(100,2) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicletype`
--

INSERT INTO `vehicletype` (`vehicletypeid`, `vehicletype`, `description`, `llrcost`, `dlcost`, `vehicleregcost`, `addresschangecost`, `dlrenewalcost`, `status`) VALUES
(1, ' Motorcycle gear less ', ' Motorcycle gear less ', 60.00, 985.00, 570.00, 255.00, 575.00, 'Active'),
(2, ' Motor cycle with gear ', '  Motor cycle with gear ', 60.00, 395.00, 780.00, 275.00, 355.00, 'Active'),
(3, ' Light Motor vehicle ', ' car Motor vehicle', 80.00, 891.00, 858.00, 256.00, 786.00, 'Active'),
(4, 'Auto Rickshaw ', 'Auto-rickshaw ', 150.00, 1054.00, 853.00, 390.00, 855.00, 'Active'),
(5, ' Transport vehicle ', 'taxi ', 185.00, 886.00, 1090.00, 250.00, 791.00, 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`branchid`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`cityid`);

--
-- Indexes for table `drivinglicense`
--
ALTER TABLE `drivinglicense`
  ADD PRIMARY KEY (`drivinglicenseid`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`empid`);

--
-- Indexes for table `enroller`
--
ALTER TABLE `enroller`
  ADD PRIMARY KEY (`enrollerid`);

--
-- Indexes for table `llr`
--
ALTER TABLE `llr`
  ADD PRIMARY KEY (`llrid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`paymentid`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`stateid`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`testid`);

--
-- Indexes for table `vehicleregistration`
--
ALTER TABLE `vehicleregistration`
  ADD PRIMARY KEY (`vehicleregid`);

--
-- Indexes for table `vehicletype`
--
ALTER TABLE `vehicletype`
  ADD PRIMARY KEY (`vehicletypeid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `branchid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `cityid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `drivinglicense`
--
ALTER TABLE `drivinglicense`
  MODIFY `drivinglicenseid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `empid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `enroller`
--
ALTER TABLE `enroller`
  MODIFY `enrollerid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `llr`
--
ALTER TABLE `llr`
  MODIFY `llrid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `paymentid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `qid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `stateid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `testid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `vehicleregistration`
--
ALTER TABLE `vehicleregistration`
  MODIFY `vehicleregid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vehicletype`
--
ALTER TABLE `vehicletype`
  MODIFY `vehicletypeid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
