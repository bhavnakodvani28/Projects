-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2019 at 01:31 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `focusdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendancemaster`
--

CREATE TABLE `attendancemaster` (
  `attid` int(15) NOT NULL,
  `trainerid` int(15) NOT NULL,
  `attdate` date NOT NULL,
  `uid` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dietfood`
--

CREATE TABLE `dietfood` (
  `dietfoodid` int(15) NOT NULL,
  `dietid` int(15) NOT NULL,
  `fid` int(15) NOT NULL,
  `trainerid` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dietmaster`
--

CREATE TABLE `dietmaster` (
  `dietid` int(15) NOT NULL,
  `dietname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dietmaster`
--

INSERT INTO `dietmaster` (`dietid`, `dietname`) VALUES
(1, 'Weight lose'),
(2, 'Weight gain');

-- --------------------------------------------------------

--
-- Table structure for table `equipmentmaster`
--

CREATE TABLE `equipmentmaster` (
  `eid` int(15) NOT NULL,
  `ename` varchar(50) NOT NULL,
  `eimagepath` varchar(50) NOT NULL,
  `edesc` varchar(50) NOT NULL,
  `eprice` bigint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipmentmaster`
--

INSERT INTO `equipmentmaster` (`eid`, `ename`, `eimagepath`, `edesc`, `eprice`) VALUES
(1, 'Bench press', 'C:/img.jpg', '', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `exercisemovement`
--

CREATE TABLE `exercisemovement` (
  `movid` int(15) NOT NULL,
  `movname` varchar(50) NOT NULL,
  `movimagepath` varchar(50) NOT NULL,
  `movvideopath` varchar(50) NOT NULL,
  `movdesc` varchar(50) NOT NULL,
  `eid` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exercisemovement`
--

INSERT INTO `exercisemovement` (`movid`, `movname`, `movimagepath`, `movvideopath`, `movdesc`, `eid`) VALUES
(1, 'Upper chest', 'c:/p.jpg', 'c:/v.jpg', 'Helpful for chest', 1);

-- --------------------------------------------------------

--
-- Table structure for table `foodmaster`
--

CREATE TABLE `foodmaster` (
  `fid` int(15) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `fdesc` varchar(50) NOT NULL,
  `fcalories` varchar(20) NOT NULL,
  `fquantity` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foodmaster`
--

INSERT INTO `foodmaster` (`fid`, `fname`, `fdesc`, `fcalories`, `fquantity`) VALUES
(2, 'mlk', 'jhkdfh', '487', 2);

-- --------------------------------------------------------

--
-- Table structure for table `improvementmaster`
--

CREATE TABLE `improvementmaster` (
  `improveid` int(15) NOT NULL,
  `uid` int(15) NOT NULL,
  `memweight` varchar(20) NOT NULL,
  `memheight` varchar(20) NOT NULL,
  `memneck` varchar(20) NOT NULL,
  `memshoulder` varchar(20) NOT NULL,
  `memchest` varchar(20) NOT NULL,
  `memupperarm` varchar(20) NOT NULL,
  `memforearm` varchar(20) NOT NULL,
  `memwrist` varchar(20) NOT NULL,
  `memwaist` varchar(20) NOT NULL,
  `memhips` varchar(20) NOT NULL,
  `memthigh` varchar(20) NOT NULL,
  `trainerid` varchar(15) NOT NULL,
  `improvedate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `memberprofile`
--

CREATE TABLE `memberprofile` (
  `profileid` int(15) NOT NULL,
  `uid` int(15) NOT NULL,
  `trainerid` int(15) NOT NULL,
  `pkid` int(15) NOT NULL,
  `dietfoodid` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `memberprofile`
--

INSERT INTO `memberprofile` (`profileid`, `uid`, `trainerid`, `pkid`, `dietfoodid`) VALUES
(1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `messagingmaster`
--

CREATE TABLE `messagingmaster` (
  `msgid` int(15) NOT NULL,
  `pktypeid` int(15) NOT NULL,
  `uid` int(15) NOT NULL,
  `message` varchar(50) NOT NULL,
  `trainerid` int(15) NOT NULL,
  `msgdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `packagedetail`
--

CREATE TABLE `packagedetail` (
  `pkid` int(15) NOT NULL,
  `pkname` varchar(50) NOT NULL,
  `pktypeid` int(15) NOT NULL,
  `pkmonth` int(2) NOT NULL,
  `pkprice` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packagedetail`
--

INSERT INTO `packagedetail` (`pkid`, `pkname`, `pktypeid`, `pkmonth`, `pkprice`) VALUES
(1, 'Body strength', 1, 1, 1000),
(2, 'Body strength+Cardio', 1, 1, 1500),
(3, 'Body strength', 1, 3, 2500),
(4, 'Body strength+Cardio', 1, 3, 3500),
(5, 'Body strength', 1, 6, 4000),
(6, 'Body strength+Cardio', 1, 6, 5000),
(7, 'Body strength', 1, 12, 6000),
(8, 'Body strength+Cardio', 1, 12, 6500),
(13, 'xyz', 2, 7, 1250);

-- --------------------------------------------------------

--
-- Table structure for table `packagetransaction`
--

CREATE TABLE `packagetransaction` (
  `ptid` int(15) NOT NULL,
  `pkid` int(15) NOT NULL,
  `uid` int(15) NOT NULL,
  `trainerid` int(15) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `isactive` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `packagetype`
--

CREATE TABLE `packagetype` (
  `pktypeid` int(15) NOT NULL,
  `pktypename` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packagetype`
--

INSERT INTO `packagetype` (`pktypeid`, `pktypename`) VALUES
(1, 'Regular'),
(2, 'Personal');

-- --------------------------------------------------------

--
-- Table structure for table `paymentmaster`
--

CREATE TABLE `paymentmaster` (
  `payid` int(15) NOT NULL,
  `uid` int(15) NOT NULL,
  `ptid` int(15) NOT NULL,
  `prtid` int(15) NOT NULL,
  `paydate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `productdetail`
--

CREATE TABLE `productdetail` (
  `prid` int(15) NOT NULL,
  `prtypeid` int(15) NOT NULL,
  `prname` varchar(50) NOT NULL,
  `imagepath` varchar(150) NOT NULL,
  `prprice` bigint(7) NOT NULL,
  `prsize` varchar(5) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `prcolor` varchar(50) NOT NULL,
  `isavailable` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productdetail`
--

INSERT INTO `productdetail` (`prid`, `prtypeid`, `prname`, `imagepath`, `prprice`, `prsize`, `gender`, `prcolor`, `isavailable`) VALUES
(1, 1, 'Pent', 'c:/cloth.jpg', 400, '35', 'm', 'red', '1'),
(2, 2, 'cheese', 'c:/c.img', 50, '100', '', '', '1'),
(3, 1, 'Tshirt', 'C:/abc.img', 400, 'XL', 'm', 'Black', '1');

-- --------------------------------------------------------

--
-- Table structure for table `producttransaction`
--

CREATE TABLE `producttransaction` (
  `prtid` int(15) NOT NULL,
  `prid` int(15) NOT NULL,
  `uid` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `producttype`
--

CREATE TABLE `producttype` (
  `prtypeid` int(15) NOT NULL,
  `prtypename` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `producttype`
--

INSERT INTO `producttype` (`prtypeid`, `prtypename`) VALUES
(1, 'Cloth'),
(2, 'Food'),
(3, 'Accessories');

-- --------------------------------------------------------

--
-- Table structure for table `schedulemaster`
--

CREATE TABLE `schedulemaster` (
  `sid` int(15) NOT NULL,
  `sday` varchar(15) NOT NULL,
  `trainerid` int(15) NOT NULL,
  `isactive` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedulemaster`
--

INSERT INTO `schedulemaster` (`sid`, `sday`, `trainerid`, `isactive`) VALUES
(1, 'Monday', 1, '1'),
(2, 'Monday', 2, '1'),
(3, 'Monday', 3, '1');

-- --------------------------------------------------------

--
-- Table structure for table `schedulemovement`
--

CREATE TABLE `schedulemovement` (
  `sid` int(15) NOT NULL,
  `movid` int(15) NOT NULL,
  `profileid` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trainermaster`
--

CREATE TABLE `trainermaster` (
  `trainerid` int(15) NOT NULL,
  `uid` int(15) NOT NULL,
  `trainerqualification` varchar(50) NOT NULL,
  `trainerdesignatoin` varchar(50) NOT NULL,
  `trainerexpertise` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trainerrepmaster`
--

CREATE TABLE `trainerrepmaster` (
  `replyid` int(15) NOT NULL,
  `trainerid` int(15) NOT NULL,
  `msgid` int(15) NOT NULL,
  `replymsg` varchar(50) NOT NULL,
  `repdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usermaster`
--

CREATE TABLE `usermaster` (
  `userid` int(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `repassword` varchar(50) NOT NULL,
  `ufname` varchar(25) NOT NULL,
  `umname` varchar(25) NOT NULL,
  `ulname` varchar(25) NOT NULL,
  `udob` date NOT NULL,
  `ugender` varchar(1) NOT NULL,
  `ubloodgrup` varchar(4) NOT NULL,
  `uaddress` varchar(50) NOT NULL,
  `upincode` varchar(15) NOT NULL,
  `umobno` int(15) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `usertype` varchar(1) NOT NULL,
  `isactive` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendancemaster`
--
ALTER TABLE `attendancemaster`
  ADD PRIMARY KEY (`attid`),
  ADD KEY `fkey` (`trainerid`),
  ADD KEY `fkey1` (`uid`);

--
-- Indexes for table `dietfood`
--
ALTER TABLE `dietfood`
  ADD PRIMARY KEY (`dietfoodid`),
  ADD KEY `fkey` (`dietid`),
  ADD KEY `fkey1` (`fid`),
  ADD KEY `fkey2` (`trainerid`);

--
-- Indexes for table `dietmaster`
--
ALTER TABLE `dietmaster`
  ADD PRIMARY KEY (`dietid`);

--
-- Indexes for table `equipmentmaster`
--
ALTER TABLE `equipmentmaster`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `exercisemovement`
--
ALTER TABLE `exercisemovement`
  ADD PRIMARY KEY (`movid`),
  ADD KEY `fkey` (`eid`);

--
-- Indexes for table `foodmaster`
--
ALTER TABLE `foodmaster`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `improvementmaster`
--
ALTER TABLE `improvementmaster`
  ADD PRIMARY KEY (`improveid`),
  ADD KEY `fkey` (`uid`),
  ADD KEY `fkey1` (`trainerid`);

--
-- Indexes for table `memberprofile`
--
ALTER TABLE `memberprofile`
  ADD PRIMARY KEY (`profileid`),
  ADD KEY `fkey` (`uid`),
  ADD KEY `fkey1` (`trainerid`),
  ADD KEY `fkey2` (`pkid`),
  ADD KEY `fkey3` (`dietfoodid`);

--
-- Indexes for table `messagingmaster`
--
ALTER TABLE `messagingmaster`
  ADD PRIMARY KEY (`msgid`),
  ADD KEY `fkey` (`pktypeid`),
  ADD KEY `fkey1` (`uid`),
  ADD KEY `fkey2` (`trainerid`);

--
-- Indexes for table `packagedetail`
--
ALTER TABLE `packagedetail`
  ADD PRIMARY KEY (`pkid`),
  ADD KEY `fkey` (`pktypeid`);

--
-- Indexes for table `packagetransaction`
--
ALTER TABLE `packagetransaction`
  ADD PRIMARY KEY (`ptid`),
  ADD UNIQUE KEY `fkey` (`pkid`),
  ADD KEY `fkey1` (`uid`),
  ADD KEY `fkey3` (`trainerid`);

--
-- Indexes for table `packagetype`
--
ALTER TABLE `packagetype`
  ADD PRIMARY KEY (`pktypeid`);

--
-- Indexes for table `paymentmaster`
--
ALTER TABLE `paymentmaster`
  ADD PRIMARY KEY (`payid`),
  ADD KEY `fkey` (`uid`),
  ADD KEY `fkey1` (`ptid`),
  ADD KEY `fkey2` (`prtid`);

--
-- Indexes for table `productdetail`
--
ALTER TABLE `productdetail`
  ADD PRIMARY KEY (`prid`),
  ADD KEY `fkey` (`prtypeid`);

--
-- Indexes for table `producttransaction`
--
ALTER TABLE `producttransaction`
  ADD PRIMARY KEY (`prtid`),
  ADD KEY `fkey` (`prid`),
  ADD KEY `fkey1` (`uid`);

--
-- Indexes for table `producttype`
--
ALTER TABLE `producttype`
  ADD PRIMARY KEY (`prtypeid`);

--
-- Indexes for table `schedulemaster`
--
ALTER TABLE `schedulemaster`
  ADD PRIMARY KEY (`sid`),
  ADD KEY `fkey` (`trainerid`);

--
-- Indexes for table `schedulemovement`
--
ALTER TABLE `schedulemovement`
  ADD KEY `fkey` (`sid`),
  ADD KEY `fkey1` (`movid`),
  ADD KEY `fkey2` (`profileid`);

--
-- Indexes for table `trainermaster`
--
ALTER TABLE `trainermaster`
  ADD PRIMARY KEY (`trainerid`),
  ADD KEY `fkey` (`uid`);

--
-- Indexes for table `trainerrepmaster`
--
ALTER TABLE `trainerrepmaster`
  ADD PRIMARY KEY (`replyid`),
  ADD KEY `fkey` (`trainerid`),
  ADD KEY `fkey1` (`msgid`);

--
-- Indexes for table `usermaster`
--
ALTER TABLE `usermaster`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendancemaster`
--
ALTER TABLE `attendancemaster`
  MODIFY `attid` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dietfood`
--
ALTER TABLE `dietfood`
  MODIFY `dietfoodid` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dietmaster`
--
ALTER TABLE `dietmaster`
  MODIFY `dietid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `equipmentmaster`
--
ALTER TABLE `equipmentmaster`
  MODIFY `eid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `exercisemovement`
--
ALTER TABLE `exercisemovement`
  MODIFY `movid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `foodmaster`
--
ALTER TABLE `foodmaster`
  MODIFY `fid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `improvementmaster`
--
ALTER TABLE `improvementmaster`
  MODIFY `improveid` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `memberprofile`
--
ALTER TABLE `memberprofile`
  MODIFY `profileid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `packagedetail`
--
ALTER TABLE `packagedetail`
  MODIFY `pkid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `packagetransaction`
--
ALTER TABLE `packagetransaction`
  MODIFY `ptid` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `packagetype`
--
ALTER TABLE `packagetype`
  MODIFY `pktypeid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `paymentmaster`
--
ALTER TABLE `paymentmaster`
  MODIFY `payid` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `productdetail`
--
ALTER TABLE `productdetail`
  MODIFY `prid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `producttransaction`
--
ALTER TABLE `producttransaction`
  MODIFY `prtid` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `producttype`
--
ALTER TABLE `producttype`
  MODIFY `prtypeid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `schedulemaster`
--
ALTER TABLE `schedulemaster`
  MODIFY `sid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
