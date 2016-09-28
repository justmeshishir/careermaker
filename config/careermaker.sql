-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2016 at 04:51 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `careermaker`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE IF NOT EXISTS `destination` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`id`, `name`) VALUES
(0, 'USA'),
(1, 'UK'),
(2, 'Netherland');

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE IF NOT EXISTS `document` (
  `id` int(11) NOT NULL,
  `studentId` int(11) NOT NULL,
  `upload` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`id`, `studentId`, `upload`, `type`, `size`) VALUES
(7, 12, '21354-angularjs_tutorial.pdf', 'applicatio', 1770132),
(8, 12, '15471-Communication.pdf', 'applicatio', 953197),
(9, 12, '22435-ads.jpg', 'image/jpeg', 199703),
(10, 10, '49835-Friends-1680x1050-020.jpg', 'image/jpeg', 461598),
(11, 10, '9160-giphy12.gif', 'image/gif', 952871),
(12, 10, '29043-guidance-web.jpg', 'image/jpeg', 219924),
(13, 10, '47657-Friends-1680x1050-020.jpg', 'image/jpeg', 461598),
(14, 10, '33146-giphy12.gif', 'image/gif', 952871),
(15, 10, '52461-guidance-web.jpg', 'image/jpeg', 219924),
(16, 10, '52476-Friends-1680x1050-020.jpg', 'image/jpeg', 461598),
(19, 11, '18834-Friends-1680x1050-020.jpg', 'image/jpeg', 461598),
(20, 11, '16166-13312789_1766341350300702_8105161022166279732_n.jpg', 'image/jpeg', 22970),
(21, 18, '21435-cs140846_lab2.pdf', 'applicatio', 303412);

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `id` int(11) NOT NULL,
  `studentId` int(11) NOT NULL,
  `photo_thumb` int(11) NOT NULL,
  `photo` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `studentId`, `photo_thumb`, `photo`) VALUES
(2, 9, 9, 9),
(3, 10, 10, 10),
(4, 11, 11, 11),
(5, 12, 12, 12),
(6, 13, 13, 13),
(7, 14, 14, 14),
(8, 15, 15, 15),
(9, 16, 16, 16),
(10, 17, 17, 17),
(11, 18, 18, 18);

-- --------------------------------------------------------

--
-- Table structure for table `imagestaff`
--

CREATE TABLE IF NOT EXISTS `imagestaff` (
  `id` int(11) NOT NULL,
  `staffId` int(11) NOT NULL,
  `photo_thumb` int(11) NOT NULL,
  `photo` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imagestaff`
--

INSERT INTO `imagestaff` (`id`, `staffId`, `photo_thumb`, `photo`) VALUES
(1, 37, 0, 0),
(2, 39, 39, 39);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `address` varchar(30) NOT NULL,
  `contact` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `post` text NOT NULL,
  `level` enum('slc','+2','bachleor','diploma','masters') NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `firstname`, `lastname`, `gender`, `address`, `contact`, `email`, `post`, `level`, `date`) VALUES
(1, 'rupesh', 'poudel', 'male', 'thali', '478965', 'rup@abc.com', 'Counselling', 'masters', '2016-07-21'),
(2, 'Niran', 'Chapagain', 'male', 'Narayantar', '147852369', 'niran@nire.com', 'Manager', 'masters', '2016-07-27'),
(3, 'Rajendra', 'Sharma', 'male', 'Kapan', '986532', 'r@r.com', 'Receptionist', 'diploma', '2016-07-27'),
(5, 'shishir', 'thapa', 'male', 'thali', '879654', 'shishirthapa1@gmail.com', 'Counselling', 'bachleor', '2016-07-27'),
(6, 'Manisha', 'Thapa', 'female', 'Dakshindhoka', '9843222525', 'manisha@gmail.com', 'Receptionist', 'diploma', '2016-07-27'),
(7, 'Kusum', 'Shrestha', 'female', 'Sankhu', '986532147', 'kusum@kusumusu.com', 'Receptionist', 'bachleor', '2016-07-27'),
(8, 'Kusum', 'Shrestha', 'female', 'Sankhu', '986532147', 'kusum@kusumusu.com', 'Receptionist', 'bachleor', '2016-07-27'),
(9, 'Kusum', 'Shrestha', 'female', 'Sankhu', '986532147', 'kusum@kusumusu.com', 'Receptionist', 'bachleor', '2016-07-27'),
(10, 'Kusum', 'Shrestha', 'female', 'Kathmandu', '96985', 'kusum@kusumusu.com', 'Receptionist', 'bachleor', '2016-07-27'),
(11, 'Kusum', 'Shrestha', 'female', 'Kathmandu', '96985', 'kusum@kusumusu.com', 'Receptionist', 'bachleor', '2016-07-27'),
(12, 'bipana', 'bhattrai', 'female', 'Kathmandu', '12563', 'shishirthapa1@gmail.com', 'Receptionist', 'slc', '2016-07-27'),
(13, 'bipana', 'bhattrai', 'female', 'Kathmandu', '12563', 'shishirthapa1@gmail.com', 'Receptionist', 'slc', '2016-07-27'),
(15, 'Mina', 'Thapa', 'female', 'Kathmandu', '963258', 'hari@abc.com', 'Receptionist', 'bachleor', '2016-07-27'),
(17, 'Badri', 'Poudel', 'male', 'Kathmandu', '963258', 'hari@abc.com', 'Houskeeping', '+2', '2016-07-27'),
(18, 'bipana', 'thapa', 'female', 'Kathmandu', '1234', 'shishirthapa1@gmail.com', 'Receptionist', '+2', '2016-07-27'),
(19, 'bipana', 'thapa', 'female', 'Kathmandu', '1234', 'shishirthapa1@gmail.com', 'Receptionist', '+2', '2016-07-27'),
(20, 'bipana', 'thapa', 'female', 'Kathmandu', '1234', 'shishirthapa1@gmail.com', 'Receptionist', '+2', '2016-07-27'),
(21, 'bipana', 'thapa', 'female', 'Kathmandu', '1234', 'shishirthapa1@gmail.com', 'Receptionist', '+2', '2016-07-27'),
(22, 'bipana', 'thapa', 'female', 'Kathmandu', '1234', 'shishirthapa1@gmail.com', 'Receptionist', '+2', '2016-07-27'),
(23, 'bipana', 'thapa', 'female', 'Kathmandu', '1234', 'shishirthapa1@gmail.com', 'Receptionist', '+2', '2016-07-27'),
(24, 'bipana', 'thapa', 'female', 'Kathmandu', '1234', 'shishirthapa1@gmail.com', 'Receptionist', '+2', '2016-07-27'),
(25, 'bipana', 'thapa', 'female', 'Kathmandu', '1234', 'shishirthapa1@gmail.com', 'Receptionist', '+2', '2016-07-27'),
(26, 'bipana', 'thapa', 'female', 'Kathmandu', '1234', 'shishirthapa1@gmail.com', 'Receptionist', '+2', '2016-07-27'),
(28, 'Sabindra', 'Maharjan', 'male', 'Kritipur', '986532147', 'sabindra_maharjan@gmail.com', 'Manager', 'masters', '2016-07-28'),
(29, 'susmita', 'bhattrai', 'female', 'Kathmandu', '12345678', 'abc@gmail.com', 'Receptionist', 'slc', '2016-07-28'),
(31, 'susmita', 'bhattrai', 'female', 'Kathmandu', '12345678', 'abc@gmail.com', 'Receptionist', 'slc', '2016-07-28'),
(32, 'susmita', 'bhattrai', 'female', 'Kathmandu', '12345678', 'abc@gmail.com', 'Receptionist', 'slc', '2016-07-28'),
(33, 'susmita', 'bhattrai', 'female', 'Kathmandu', '12345678', 'abc@gmail.com', 'Receptionist', 'slc', '2016-07-28'),
(34, 'Aakash', 'Tiwari', 'female', 'sankhamul', '896547', 'abc@gmail.com', 'Houskeeping', '+2', '2016-07-30'),
(35, 'Rejina', 'Phalange', 'female', 'Sankhu', '987654321', 'rej@yahoo.com', 'Counselling', 'diploma', '2016-07-30'),
(36, 'Gunther', 'Central Perk', 'male', 'New York', '985632147', 'gunt@ther.com', 'Receptionist', 'slc', '2016-07-30'),
(37, 'Gunther', 'Central Perk', 'male', 'New York', '985632147', 'gunt@ther.com', 'Receptionist', 'slc', '2016-07-30'),
(38, 'Hari', 'Bahadur', 'male', 'ramveti', '123456789', 'hari@abc.com', 'Houskeeping', '+2', '2016-07-30'),
(39, 'Hari', 'Bahadur', 'male', 'ramveti', '123456789', 'hari@abc.com', 'Houskeeping', '+2', '2016-07-30');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `address` varchar(30) NOT NULL,
  `contact` text NOT NULL,
  `parentname` varchar(30) NOT NULL,
  `parentno` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `level` enum('SLC','+2','Bachleor','Diploma','Masters') NOT NULL,
  `destinationId` int(11) NOT NULL,
  `date` date NOT NULL,
  `working_exp` varchar(100) NOT NULL,
  `visatype` enum('student','dependent','working') NOT NULL,
  `approval` enum('yes','no') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `firstname`, `lastname`, `gender`, `address`, `contact`, `parentname`, `parentno`, `email`, `level`, `destinationId`, `date`, `working_exp`, `visatype`, `approval`) VALUES
(9, 'Riyasha', 'Parajuli', 'female', 'mitrapark', '986532147', 'Roshan Parajuli', '987456321', 'ilovccr@yesido.com', '+2', 0, '2016-07-25', 'no any', 'student', 'no'),
(10, 'Monica', 'Geller', 'female', 'newyork', '1236547', 'Jack Geller', '965874', 'mon@friends.com', 'Masters', 0, '2016-07-25', 'chef in aviato', 'working', 'yes'),
(11, 'Rachel', 'Green', 'female', 'long island', '11147', 'Dr, Green', '7778888', 'rach@yahoo.com', '+2', 0, '2016-07-25', 'cascsa', 'working', 'yes'),
(12, 'Basanta', 'thapa', 'male', 'thali', '458965', 'mina thapa', '6463143', 'abc@gmail.com', 'SLC', 0, '2016-07-25', 'dasdsa', 'student', 'yes'),
(15, 'bipana', 'thapa', 'female', 'Kathmandu', '12345', 'Mina', '3245', 'hari@abc.com', 'SLC', 1, '2016-07-25', '23456fg', 'student', 'no'),
(17, 'ramesh', 'yadav', 'male', 'chovar', '789654', 'samir yadav', '963258', 'ramesh@abc.com', 'Bachleor', 1, '2016-07-25', 'hjvcja  kjca', 'dependent', 'no'),
(18, 'Manisha', 'Thapa', 'female', 'Dakshindhoka', '986532', 'mina', '963258', 'manisha@gmail.com', 'Bachleor', 0, '2016-07-27', 'cevgvfc', 'student', 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imagestaff`
--
ALTER TABLE `imagestaff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `imagestaff`
--
ALTER TABLE `imagestaff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
