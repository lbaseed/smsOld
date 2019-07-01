-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2019 at 01:49 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sms_compiler`
--

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE IF NOT EXISTS `classes` (
  `classid` varchar(100) NOT NULL,
  `classTeacher` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`classid`, `classTeacher`) VALUES
('JS2_A', ''),
('JS1_A', 'SP/1001');

-- --------------------------------------------------------

--
-- Table structure for table `class_promotion_history`
--

CREATE TABLE IF NOT EXISTS `class_promotion_history` (
  `recID` varchar(100) NOT NULL,
  `classID` varchar(100) NOT NULL,
  `promoted` varchar(100) NOT NULL,
  `notpromoted` varchar(100) NOT NULL,
  `session` varchar(100) NOT NULL,
  `criteria` varchar(50) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE IF NOT EXISTS `fees` (
  `recID` varchar(100) NOT NULL,
  `fees` double NOT NULL,
  `term` varchar(100) NOT NULL,
  `session` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`recID`, `fees`, `term`, `session`) VALUES
('1448740784', 21500, 'FIRST', '2015/2016'),
('1455440887', 30000, 'FIRST', '2016/2017'),
('1551783815', 35000, 'FIRST', '2017/2018');

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE IF NOT EXISTS `parents` (
  `email` varchar(100) NOT NULL,
  `lastName` text NOT NULL,
  `otherNames` text NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`email`, `lastName`, `otherNames`, `address`, `phone`, `password`) VALUES
('lbaseed2015@gmail.com', 'TANKO', 'BUKAR', 'DAWAKI QTRS', '08064701205', 'password'),
('lbaseedt@gmail.com', 'DAUDA', 'UMAR', 'CHECHENIYA QTRS', '080', '');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `recID` varchar(100) NOT NULL,
  `ref` varchar(100) NOT NULL,
  `amount` double NOT NULL,
  `date` varchar(100) NOT NULL,
  `cashier` varchar(100) NOT NULL,
  `bank` varchar(150) NOT NULL,
  `tellerNum` varchar(50) NOT NULL,
  `depositDate` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`recID`, `ref`, `amount`, `date`, `cashier`, `bank`, `tellerNum`, `depositDate`) VALUES
('1551784079', '1542534530', 35000, '05/03/2019', '', 'ACCESS', '45781263', '2019-01-16');

-- --------------------------------------------------------

--
-- Table structure for table `promotion_tbl`
--

CREATE TABLE IF NOT EXISTS `promotion_tbl` (
  `recID` varchar(100) NOT NULL,
  `studentID` varchar(100) NOT NULL,
  `class` varchar(50) NOT NULL,
  `subClass` varchar(10) NOT NULL,
  `session` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reg_subjects`
--

CREATE TABLE IF NOT EXISTS `reg_subjects` (
  `recID` varchar(150) NOT NULL,
  `studentID` varchar(150) NOT NULL,
  `subjectID` varchar(150) NOT NULL,
  `session` varchar(150) NOT NULL,
  `remark` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_subjects`
--

INSERT INTO `reg_subjects` (`recID`, `studentID`, `subjectID`, `session`, `remark`) VALUES
('1544531507', 'SEC/2018/1001', 'ENG', '2017/2018', ''),
('1542534713', 'SEC/2018/1001', 'MATH', '2017/2018', ''),
('1554205968', 'SEC/2018/1005', 'ARB', '2018/2019', ''),
('1554206012', 'SEC/2018/1005', 'ENG', '2018/2019', ''),
('1554206044', 'SEC/2018/1005', 'MATH', '2018/2019', ''),
('1554206076', 'SEC/2018/1001', 'ENG', '2018/2019', ''),
('1554206108', 'SEC/2018/1001', 'MATH', '2018/2019', '');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE IF NOT EXISTS `school` (
  `recID` varchar(100) NOT NULL,
  `longName` text NOT NULL,
  `shortName` varchar(50) NOT NULL,
  `mission` text NOT NULL,
  `vision` text NOT NULL,
  `motto` text NOT NULL,
  `address` text NOT NULL,
  `pobox` varchar(50) NOT NULL,
  `about` text NOT NULL,
  `logo` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`recID`, `longName`, `shortName`, `mission`, `vision`, `motto`, `address`, `pobox`, `about`, `logo`) VALUES
('10001', 'LONGER NAME OF SCHOOL', 'LNS', 'SCHOOL MISSION', 'SCHOOL VISSION', 'SCHOOL MOTTO', 'WHERE THE SCHOOL IS LOCATED', 'P.O BOX 145', 'If you are interested in seeing more of our web designs feel free to visit our website, K9 IS. We intend to add more software soonest. If you are interested in seeing more of our web designs feel free to visit our website, K9 IS. We intend to add more software soonest. If you are interested in seeing more of our web designs feel free to visit our website, K9 IS. We intend to add more software soonest. If you are interested in seeing more of our web designs feel free to visit our website, K9 IS. We intend to add more software soonest. If you are interested in seeing more of our web designs feel free to visit our website, K9 IS. We intend to add more software soonest. If you are interested in seeing more of our web designs feel free to visit our website, K9 IS. We intend to add more software soonest. If you are interested in seeing more of our web designs feel free to visit our website, K9 IS. We intend to add more software soonest. If you are interested in seeing more of our web designs feel free to visit our website, K9 IS. We intend to add more software soonest. If you are interested in seeing more of our web designs feel free to visit our website, K9 IS. We intend to add more software soonest.', 'logo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sc_arb`
--

CREATE TABLE IF NOT EXISTS `sc_arb` (
  `recID` varchar(150) NOT NULL,
  `ref` varchar(150) NOT NULL,
  `studentID` varchar(150) NOT NULL,
  `ca1` varchar(150) NOT NULL,
  `ca2` varchar(150) NOT NULL,
  `ca3` varchar(150) NOT NULL,
  `ca4` varchar(150) NOT NULL,
  `exam` varchar(150) NOT NULL,
  `total` varchar(150) NOT NULL,
  `term` varchar(150) DEFAULT NULL,
  `session` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sc_arb`
--

INSERT INTO `sc_arb` (`recID`, `ref`, `studentID`, `ca1`, `ca2`, `ca3`, `ca4`, `exam`, `total`, `term`, `session`) VALUES
('1554208290', '1554205968', 'SEC/2018/1005', '', '', '', '', '', '', 'FIRST', '2018/2019'),
('1554272748', '1554205968', 'SEC/2018/1005', '', '', '', '', '', '', 'SECOND', '2018/2019'),
('1554327471', '1554205968', 'SEC/2018/1005', '', '', '', '', '', '', 'THIRD', '2018/2019');

-- --------------------------------------------------------

--
-- Table structure for table `sc_eng`
--

CREATE TABLE IF NOT EXISTS `sc_eng` (
  `recID` varchar(150) NOT NULL,
  `ref` varchar(150) NOT NULL,
  `studentID` varchar(150) NOT NULL,
  `ca1` varchar(150) NOT NULL,
  `ca2` varchar(150) NOT NULL,
  `ca3` varchar(150) NOT NULL,
  `ca4` varchar(150) NOT NULL,
  `exam` varchar(150) NOT NULL,
  `total` varchar(150) NOT NULL,
  `term` varchar(150) DEFAULT NULL,
  `session` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sc_eng`
--

INSERT INTO `sc_eng` (`recID`, `ref`, `studentID`, `ca1`, `ca2`, `ca3`, `ca4`, `exam`, `total`, `term`, `session`) VALUES
('1544531746', '1544531507', 'SEC/2018/1001', '8', '7', '8', '', '65', '88', 'FIRST', '2017/2018'),
('1544607164', '1544531507', 'SEC/2018/1001', '', '', '', '', '', '', 'SECOND', '2017/2018'),
('1544701935', '1544531507', 'SEC/2018/1001', '', '', '', '', '', '', 'THIRD', '2017/2018'),
('1554206026', '1554206076', 'SEC/2018/1001', '', '', '', '', '', '', 'FIRST', '2018/2019'),
('1554206242', '1554206012', 'SEC/2018/1005', '', '', '', '', '', '', 'FIRST', '2018/2019'),
('1554231009', '1554206076', 'SEC/2018/1001', '', '', '', '', '', '0', 'SECOND', '2018/2019'),
('1554259551', '1554206012', 'SEC/2018/1005', '10', '10', '0', '0', '70', '90', 'SECOND', '2018/2019'),
('1554275475', '1554206012', 'SEC/2018/1005', '', '', '', '', '', '', 'THIRD', '2018/2019'),
('1554309084', '1554206076', 'SEC/2018/1001', '', '', '', '', '', '', 'THIRD', '2018/2019');

-- --------------------------------------------------------

--
-- Table structure for table `sc_math`
--

CREATE TABLE IF NOT EXISTS `sc_math` (
  `recID` varchar(150) NOT NULL,
  `ref` varchar(150) NOT NULL,
  `studentID` varchar(150) NOT NULL,
  `ca1` varchar(150) NOT NULL,
  `ca2` varchar(150) NOT NULL,
  `ca3` varchar(150) NOT NULL,
  `ca4` varchar(150) NOT NULL,
  `exam` varchar(150) NOT NULL,
  `total` varchar(150) NOT NULL,
  `term` varchar(150) DEFAULT NULL,
  `session` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sc_math`
--

INSERT INTO `sc_math` (`recID`, `ref`, `studentID`, `ca1`, `ca2`, `ca3`, `ca4`, `exam`, `total`, `term`, `session`) VALUES
('1542534752', '1542534713', 'SEC/2018/1001', '7', '5', '6', '8', '45', '71', 'FIRST', '2017/2018'),
('1542591809', '1542534713', 'SEC/2018/1001', '', '', '', '', '', '', 'SECOND', '2017/2018'),
('1542653722', '1542534713', 'SEC/2018/1001', '', '', '', '', '', '', 'THIRD', '2017/2018'),
('1554206035', '1554206044', 'SEC/2018/1005', '', '', '', '', '', '', 'FIRST', '2018/2019'),
('1554206285', '1554206108', 'SEC/2018/1001', '', '', '', '', '', '', 'FIRST', '2018/2019'),
('1554232763', '1554206108', 'SEC/2018/1001', '', '', '', '', '', '', 'SECOND', '2018/2019'),
('1554234774', '1554206044', 'SEC/2018/1005', '', '', '', '', '', '', 'SECOND', '2018/2019'),
('1554242890', '1554206044', 'SEC/2018/1005', '', '', '', '', '', '', 'THIRD', '2018/2019'),
('1554255862', '1554206108', 'SEC/2018/1001', '', '', '', '', '', '', 'THIRD', '2018/2019');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `recID` varchar(100) NOT NULL,
  `session` varchar(100) NOT NULL,
  `term` varchar(50) NOT NULL,
  `resumptionDate` varchar(50) NOT NULL,
  `closingDate` varchar(50) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`recID`, `session`, `term`, `resumptionDate`, `closingDate`, `status`) VALUES
('47338', '2018/2019', 'SECOND', '29/01/2019', '19/04/2019', 'CURRENT'),
('38841', '2017/2018', 'FIRST', '09/09/2017', '25/01/2018', 'PAST');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `staffID` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `lastName` text NOT NULL,
  `firstName` text NOT NULL,
  `otherNames` text NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `clrs` varchar(100) NOT NULL,
  `pic` varchar(150) NOT NULL,
  `secQue` text NOT NULL,
  `secAns` text NOT NULL,
  `accessCode` varchar(120) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffID`, `password`, `lastName`, `firstName`, `otherNames`, `gender`, `dob`, `address`, `phone`, `email`, `clrs`, `pic`, `secQue`, `secAns`, `accessCode`, `status`) VALUES
('SP/1001', 'password', 'HARUNA', 'USMAN', 'BABAJI', 'MALE', '15/04/1967', 'FEDERAL LOW COST', '08036025913', 'AHU@K9IS.COM', 'ADMIN', 'SP_1001.jpg', '', '', '', 'ACTIVE'),
('SP/1002', 'password', 'HARUNA', 'ABDULBASID', '', 'MALE', '15/04/1993', 'FEDERAL LOW COST GOMBE', '08064701206', 'ABDUL@K9IS.COM', 'PRINCIPAL', 'SP_1002.jpg', '', '', '', 'ACTIVE'),
('SP/1003', 'password', 'MUSTAPHA', 'AUDU', 'BALA', 'MALE', '15/04/1990', 'GRA GOMBE', '08036025913', 'ADMIN@K9IS.COM', 'STAFF', 'SP_1003.jpg', '', '', '', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `studentID` varchar(100) NOT NULL,
  `lastName` text NOT NULL,
  `firstName` text NOT NULL,
  `otherNames` text NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `class` varchar(20) NOT NULL,
  `subClass` varchar(10) NOT NULL,
  `parentID` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `pic` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`studentID`, `lastName`, `firstName`, `otherNames`, `gender`, `dob`, `address`, `class`, `subClass`, `parentID`, `status`, `pic`) VALUES
('SEC/2018/1005', 'MUSA', 'BUKAR', '', 'MALE', '15-04-2004', 'DAWAKI QTRS        ', 'JS1', 'A', '08064701205', 'ACTIVE', 'SEC_2018_1005.png'),
('SEC/2018/1001', 'MUSA', 'DAUDA', '', 'SELECT', '15-04-2002', 'CHECHENIYA QTRS', 'JS1', 'A', 'lbaseedt@gmail.com', 'ACTIVE', 'SEC_2018_1001.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `subjectID` varchar(100) NOT NULL,
  `subjectTitle` text NOT NULL,
  `type` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subjectID`, `subjectTitle`, `type`, `category`, `status`) VALUES
('ARB', 'ARABIC', 'OPTIONAL', 'BASIC', 'ACTIVE'),
('MATH', 'MATHEMATICS', 'CORE', 'BOTH', 'ACTIVE'),
('ENG', 'ENGLISH LANGUAGE', 'CORE', 'BOTH', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `subject_allocation`
--

CREATE TABLE IF NOT EXISTS `subject_allocation` (
  `recID` varchar(100) NOT NULL,
  `staffID` varchar(100) NOT NULL,
  `subjectID` varchar(100) NOT NULL,
  `classID` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
  `ref` varchar(100) NOT NULL,
  `studentID` varchar(100) NOT NULL,
  `fees` varchar(100) NOT NULL,
  `amountPaid` double NOT NULL,
  `balance` double NOT NULL,
  `term` varchar(100) NOT NULL,
  `session` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`ref`, `studentID`, `fees`, `amountPaid`, `balance`, `term`, `session`) VALUES
('1554205697', 'SEC/2018/1005', '', 0, 0, 'SECOND', '2018/2019'),
('1542534530', 'SEC/2018/1001', '', 35000, -35000, 'FIRST', '2017/2018');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`classid`);

--
-- Indexes for table `class_promotion_history`
--
ALTER TABLE `class_promotion_history`
  ADD PRIMARY KEY (`recID`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`recID`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`recID`);

--
-- Indexes for table `promotion_tbl`
--
ALTER TABLE `promotion_tbl`
  ADD PRIMARY KEY (`recID`);

--
-- Indexes for table `reg_subjects`
--
ALTER TABLE `reg_subjects`
  ADD PRIMARY KEY (`recID`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`recID`);

--
-- Indexes for table `sc_arb`
--
ALTER TABLE `sc_arb`
  ADD PRIMARY KEY (`recID`);

--
-- Indexes for table `sc_eng`
--
ALTER TABLE `sc_eng`
  ADD PRIMARY KEY (`recID`);

--
-- Indexes for table `sc_math`
--
ALTER TABLE `sc_math`
  ADD PRIMARY KEY (`recID`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`recID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staffID`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`studentID`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subjectID`);

--
-- Indexes for table `subject_allocation`
--
ALTER TABLE `subject_allocation`
  ADD PRIMARY KEY (`recID`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`ref`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
