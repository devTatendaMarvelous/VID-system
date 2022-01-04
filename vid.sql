-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2020 at 04:56 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vid`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(3) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `idnumber` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contactno` int(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `firstname`, `lastname`, `dob`, `idnumber`, `email`, `contactno`, `password`, `image`) VALUES
(3, 'Admin', 'admin', '2018-10-03', '12-56367y67', 'admin@gmail.com', 739374287, 'password', 'edited.jpg'),
(9, 'sdew', 'd', '2020-10-07', 'jds', 'w@m.com', 122345, 'pas', 'edited.jpg'),
(10, 'w', 'dfsd', '2020-10-06', '1234567890987', 'w@m.com', 1234567890, '12345yu', 'edited.jpg'),
(11, 'w', 'dfsd', '2020-10-06', '1234567890987', 'w@m.com', 1234567890, '12345yu', 'edited.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(3) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `idnumber` varchar(15) NOT NULL,
  `contact` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `firstname`, `lastname`, `dob`, `idnumber`, `contact`, `email`, `password`) VALUES
(1, 'Admin', 'admin', '2020-10-01', '12-23546y67', 78865766, 'admin@gmail.com', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `qid` text NOT NULL,
  `ansid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`qid`, `ansid`) VALUES
('55892169bf6a7', '55892169d2efc'),
('5589216a3646e', '5589216a48722'),
('558922117fcef', '5589221195248'),
('55892211e44d5', '55892211f1fa7'),
('558922894c453', '558922895ea0a'),
('558922899ccaa', '55892289aa7cf'),
('558923538f48d', '558923539a46c'),
('55892353f05c4', '55892354051be'),
('558973f4389ac', '558973f462e61'),
('558973f4c46f2', '558973f4d4abe'),
('558973f51600d', '558973f526fc5'),
('558973f55d269', '558973f57af07'),
('558973f5abb1a', '558973f5e764a'),
('5589751a63091', '5589751a81bf4'),
('5589751ad32b8', '5589751adbdbd'),
('5589751b304ef', '5589751b3b04d'),
('5589751b749c9', '5589751b9a98c'),
('5eb7f8cf29a7a', '5eb7f8cf42549'),
('5eb7f8cf98975', '5eb7f8cfa3568'),
('5f89474b9e32c', '5f89474bc2d1d'),
('5f89474bf3a5d', '5f89474c0945d'),
('5f894ceeedaf6', '5f894cef2118f'),
('5f894cef74993', '5f894cef82456'),
('5f894cefe3eed', '5f894cf0336c5'),
('5f894cf05f9d7', '5f894cf069de9'),
('5f894cf0b39ab', '5f894cf0bddbd'),
('5f8953890eb25', '5f8953893545f'),
('5f89538991904', '5f895389bcc76'),
('5f895389f339b', '5f89538a07245'),
('5f8954b97de1b', '5f8954b9a62ad'),
('5f8954b9f40d7', '5f8954ba08f21'),
('5f8954ba43c97', '5f8954ba5175a');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `booking_id` int(3) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `contactno` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `driving_school` varchar(50) NOT NULL,
  `_type` varchar(50) NOT NULL,
  `session_num` varchar(30) NOT NULL,
  `_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`booking_id`, `firstname`, `lastname`, `contactno`, `email`, `driving_school`, `_type`, `session_num`, `_date`) VALUES
(1, 'pertunia', 'john', '078364723', 'admin@gmail.com', 'Zikwa', 'provisional', '0', '2020-10-17 15:56:58'),
(2, 'pertunia', 'john', '078364723', 'admin@gmail.com', 'Zikwa', 'provisional', '0', '2020-10-17 15:57:08'),
(3, 'pertunia', 'john', '078364723', 'admin@gmail.com', 'Galaxy', 'provisional', '0', '2020-10-17 15:57:24'),
(4, 'Tatenda', 'Chimunya', '0745763', 'tc@gmail.com', 'Zikwa', 'provisional', '0', '2020-10-17 15:57:33'),
(5, 'marve', 'marve', '012546', 'marve@gmail.cpm', 'Galaxy', 'drivetest', '0', '2020-10-17 15:57:43'),
(6, 'marve', 'mKE', '2155', 'R@R.COM', 'Galaxy', 'provisional', '0', '2020-10-17 15:58:06'),
(7, 'sir', 'nkomo', '02145', 'sn@gmail.com', 'Zikwa', 'provisional', '0', '2020-10-17 15:58:17'),
(10, 'Tapiwa', 'Fambai', '03587273', 'taps@gmail.com', 'Galaxy', 'drivetest', 's1', '2020-10-28 06:44:48'),
(11, 'Tapiwa', 'Fambai', '222382', 'taps@gmail.com', 'Galaxy', 'provisional', 's1', '2020-10-29'),
(12, 'Tapiwa', 'Fambai', '1123344', 'taps@gmail.com', 'Galaxy', 'provisional', 's1', '2020-10-29'),
(13, 'brian', 'hjss', '0783779699', 'brian@gmail.com', 'Galaxy', 'provisional', 's1', '2020-10-29');

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` int(3) NOT NULL,
  `message` varchar(255) NOT NULL,
  `message_from` varchar(50) NOT NULL,
  `_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`id`, `message`, `message_from`, `_date`) VALUES
(1, 'hie', 'brian@gmail.com', '2020-10-21 15:19:52'),
(2, 'hello', 'admin@gmail.com', '2020-10-21 15:25:14'),
(3, 'hello', 'admin@gmail.com', '2020-10-21 15:25:42'),
(4, 'hello', 'admin@gmail.com', '2020-10-21 15:25:56'),
(5, 'how are you guys', 'vz@gmail.com', '2020-10-21 15:29:18'),
(6, 'hie how yu doi ng', 'admin@gmail.com', '2020-10-24 08:29:52'),
(7, 'gffghhgkjhgjhvjhbvjnhbv', 'admin@gmail.com', '2020-10-27 16:18:07');

-- --------------------------------------------------------

--
-- Table structure for table `driving_school`
--

CREATE TABLE `driving_school` (
  `id` int(11) NOT NULL,
  `firstname` int(11) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `idnumber` varchar(15) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `drivingschool` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `driving_schools`
--

CREATE TABLE `driving_schools` (
  `school_id` int(3) NOT NULL,
  `school_name` varchar(100) NOT NULL,
  `school_contactno` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driving_schools`
--

INSERT INTO `driving_schools` (`school_id`, `school_name`, `school_contactno`, `email`, `address`) VALUES
(1, 'Galaxy', '776354223', 'galaxy@gmail.com', 'main street gweru'),
(2, 'Zikwa', '0775362613', 'zikwa@gmail.com', '5th street gweru'),
(3, 'Chifamba', '0786546242', 'chifamba@email.com', '13 driveway');

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `exam_id` int(3) NOT NULL,
  `exam` varchar(255) NOT NULL,
  `exam_type` varchar(100) NOT NULL,
  `pdfpath` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`exam_id`, `exam`, `exam_type`, `pdfpath`) VALUES
(1, '2015 highway code', 'provisional', 'BusinessPlan.pdf'),
(2, '2019 highway code', 'provisional', 'SoftwareEngineering2017QP.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `exam_key`
--

CREATE TABLE `exam_key` (
  `key_id` int(3) NOT NULL,
  `exam_key` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_key`
--

INSERT INTO `exam_key` (`key_id`, `exam_key`) VALUES
(1, '12345');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `subject`, `feedback`, `date`, `time`) VALUES
('55846be776610', 'testing', 'sunnygkp10@gmail.com', 'testing', 'testing stART', '2015-06-19', '09:22:15pm'),
('5584ddd0da0ab', 'netcamp', 'sunnygkp10@gmail.com', 'feedback', ';mLBLB', '2015-06-20', '05:28:16am'),
('558510a8a1234', 'sunnygkp10', 'sunnygkp10@gmail.com', 'dl;dsnklfn', 'fmdsfld fdj', '2015-06-20', '09:05:12am'),
('5585509097ae2', 'sunny', 'sunnygkp10@gmail.com', 'kcsncsk', 'l.mdsavn', '2015-06-20', '01:37:52pm'),
('5586ee27af2c9', 'vikas', 'vikas@gmail.com', 'trial feedback', 'triaal feedbak', '2015-06-21', '07:02:31pm'),
('5589858b6c43b', 'nik', 'nik1@gmail.com', 'good', 'good site', '2015-06-23', '06:12:59pm');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `email` varchar(50) NOT NULL,
  `eid` text NOT NULL,
  `score` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `sahi` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`email`, `eid`, `score`, `level`, `sahi`, `wrong`, `date`) VALUES
('sunnygkp10@gmail.com', '558921841f1ec', 4, 2, 2, 0, '2015-06-23 09:31:26'),
('sunnygkp10@gmail.com', '558920ff906b8', 4, 2, 2, 0, '2015-06-23 13:32:09'),
('avantika420@gmail.com', '558921841f1ec', 4, 2, 2, 0, '2015-06-23 14:33:04'),
('avantika420@gmail.com', '5589222f16b93', 4, 2, 2, 0, '2015-06-23 14:49:39'),
('sunnygkp10@gmail.com', '5589741f9ed52', 4, 5, 3, 2, '2015-06-23 15:07:16'),
('mi5@hollywood.com', '5589222f16b93', 4, 2, 2, 0, '2015-06-23 15:12:56'),
('nik1@gmail.com', '558921841f1ec', 1, 2, 1, 1, '2015-06-23 16:11:50'),
('sunnygkp10@gmail.com', '5589222f16b93', 1, 2, 1, 1, '2015-06-24 03:22:38'),
('admin@admin.com', '5589741f9ed52', -6, 5, 1, 6, '2020-05-11 10:06:55'),
('admin@admin.com', '5589741f9ed52', -6, 5, 0, 6, '2020-05-11 10:06:55'),
('admin@admin.com', '5eb7f88752b76', 1, 2, 1, 1, '2020-05-11 10:10:15'),
('softgenicenginz@gmail.com', '5eb7f88752b76', 0, 2, 0, 2, '2020-05-13 10:53:30'),
('', '5eb7f88752b76', 2, 2, 2, 0, '2020-06-03 13:33:33'),
('admin@gmail.com', '5eb7f88752b76', 1, 2, 1, 1, '2020-10-13 13:33:45'),
('Shumba@gmail.com', '5eb7f88752b76', 0, 2, 0, 2, '2020-10-16 05:28:31'),
('admin@gmail.com', '558922ec03021', -2, 2, 0, 2, '2020-10-16 07:53:24'),
('admin@gmail.com', '5f8953041b3e9', 3, 3, 3, 0, '2020-10-16 08:03:39'),
('admin@gmail.com', '558921841f1ec', 1, 2, 1, 1, '2020-10-16 08:10:49'),
('admin@gmail.com', '558920ff906b8', -2, 2, 0, 2, '2020-10-17 11:42:49');

-- --------------------------------------------------------

--
-- Table structure for table `instructors`
--

CREATE TABLE `instructors` (
  `instructor_id` int(3) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `idnumber` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `driving_school` varchar(255) NOT NULL,
  `contactno` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructors`
--

INSERT INTO `instructors` (`instructor_id`, `firstname`, `lastname`, `dob`, `idnumber`, `email`, `driving_school`, `contactno`, `password`, `image`) VALUES
(1, 'Tatenda', 'vharazipi', '2018-08-08', '12-54676y76', 'vz@gmail.com', 'Zikwa', '0776354223', 'password', 'image_4.jpg'),
(2, 'kenias', 'mhofu', '1990-07-11', '34-sjshbhjsj787', 'mhofu@gmail.com', 'Zikwa', '0786546242', 'password', 'â€ª_263_77_660_6749â€¬_20180306_192922.jpg'),
(3, 'panganai', 'vharazipi', '2020-11-20', '33-82382y67', '', 'chikwava', '0776092348', 'passasa', 'image_4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `id` int(10) NOT NULL,
  `bkname` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`id`, `bkname`, `faculty`) VALUES
(11, 'lect11.pdf', 'Select Faculty'),
(12, 'computer_pc-block.pdf', 'Arts'),
(13, 'ESDmodule2011.pdf', 'Commerce'),
(14, 'NassModule2008Revised-Copy.pdf', 'Arts'),
(15, 'IT_Manual_102E.pdf', 'Science'),
(16, 'classnotesc.pdf', 'Science'),
(17, 'mathstat.pdf', 'Commerce'),
(18, 'vbnet_mock_test_i.pdf', 'Science'),
(19, 'VBTutorial.pdf', 'Select Faculty'),
(20, 'vbnet_mock_test_ii.pdf', 'Science'),
(21, 'BusinessPlan.pdf', 'Commerce'),
(22, 'chapter13-two-dimensional-array.pdf', 'Agriculture'),
(23, 'EpilepsyShona.pdf', 'Commerce');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(30) NOT NULL,
  `convo_id` int(30) NOT NULL,
  `user_id` int(30) NOT NULL,
  `message` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0=unread , 1= read',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `convo_id`, `user_id`, `message`, `status`, `date_created`) VALUES
(1, 1, 2, 'hi', 1, '2020-10-13 21:03:22'),
(2, 2, 3, 'yow', 0, '2020-10-13 16:58:22'),
(3, 3, 1, 'hi', 0, '2020-10-13 16:59:12'),
(4, 1, 3, 'hey', 1, '2020-10-13 20:19:22'),
(5, 2, 2, 'hi', 1, '2020-10-13 20:19:49'),
(6, 2, 1, 'test', 1, '2020-10-13 20:19:16'),
(7, 1, 2, 'test1234', 1, '2020-10-13 21:03:22'),
(8, 2, 1, '\r\n123123', 1, '2020-10-13 20:19:16'),
(9, 2, 1, 'asdasd', 1, '2020-10-13 20:19:16'),
(10, 2, 1, 'asdasd\r\n', 1, '2020-10-13 20:19:16'),
(11, 2, 1, '\r\nasdasd', 1, '2020-10-13 20:19:16'),
(12, 2, 1, '\r\nwewee', 1, '2020-10-13 20:19:16'),
(13, 2, 1, 'asdasd wew\r\n', 1, '2020-10-13 20:19:16'),
(14, 2, 1, 'sample', 1, '2020-10-13 20:21:40'),
(15, 2, 1, 'hey', 1, '2020-10-13 20:22:48'),
(16, 2, 2, 'what ?', 1, '2020-10-13 20:22:58'),
(17, 2, 2, 'yes??', 1, '2020-10-13 20:23:16'),
(18, 2, 2, 'yes sss', 1, '2020-10-13 20:23:22'),
(19, 2, 2, 'oh yeah >', 1, '2020-10-13 20:24:51'),
(20, 2, 2, 'ahem', 1, '2020-10-13 20:25:53'),
(21, 2, 2, 'hey bro', 1, '2020-10-13 20:36:10'),
(22, 2, 1, 'yes >', 1, '2020-10-13 20:36:14'),
(23, 2, 2, 'nothing', 1, '2020-10-13 20:36:33'),
(24, 2, 1, 'r u sure?', 1, '2020-10-13 20:36:45'),
(25, 2, 2, 'a', 1, '2020-10-13 20:36:53'),
(26, 2, 1, 'a', 1, '2020-10-13 20:36:57'),
(27, 2, 1, 'a', 1, '2020-10-13 20:38:06'),
(28, 2, 2, 'a', 1, '2020-10-13 20:38:39'),
(29, 2, 1, 'aaaaa', 1, '2020-10-13 20:39:14'),
(30, 2, 1, 'aaa', 1, '2020-10-13 20:39:21'),
(31, 2, 1, 'asdasd', 1, '2020-10-13 20:44:16'),
(32, 2, 1, 'asdasd', 1, '2020-10-13 20:46:20'),
(33, 2, 1, 'asdasd', 1, '2020-10-13 20:46:30'),
(34, 2, 1, 'asdasd', 1, '2020-10-13 20:47:55'),
(35, 2, 2, 'asdasd', 1, '2020-10-13 20:50:33'),
(36, 2, 2, 'asdasdasd', 1, '2020-10-13 20:51:10'),
(37, 2, 2, 'what ?', 1, '2020-10-13 20:51:18'),
(38, 2, 1, 'asa', 1, '2020-10-13 20:51:32'),
(39, 2, 1, 'aaa', 1, '2020-10-13 20:52:15'),
(40, 2, 1, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 0, '2020-10-13 21:06:41'),
(41, 1, 3, 'Hi Blake.', 0, '2020-10-13 21:10:15');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `notice_id` int(3) NOT NULL,
  `notice` text NOT NULL,
  `date_tym` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`notice_id`, `notice`, `date_tym`) VALUES
(1, 'we only have three sessions these days because of the pandemic', '2020-10-16 01:19:01'),
(2, 'We might be fully booked tomorrow', '2020-10-16 01:35:34');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `qid` varchar(50) NOT NULL,
  `option` varchar(5000) NOT NULL,
  `optionid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`qid`, `option`, `optionid`) VALUES
('55892169bf6a7', 'usermod', '55892169d2efc'),
('55892169bf6a7', 'useradd', '55892169d2f05'),
('55892169bf6a7', 'useralter', '55892169d2f09'),
('55892169bf6a7', 'groupmod', '55892169d2f0c'),
('5589216a3646e', '751', '5589216a48713'),
('5589216a3646e', '752', '5589216a4871a'),
('5589216a3646e', '754', '5589216a4871f'),
('5589216a3646e', '755', '5589216a48722'),
('558922117fcef', 'echo', '5589221195248'),
('558922117fcef', 'print', '558922119525a'),
('558922117fcef', 'printf', '5589221195265'),
('558922117fcef', 'cout', '5589221195270'),
('55892211e44d5', 'int a', '55892211f1f97'),
('55892211e44d5', '$a', '55892211f1fa7'),
('55892211e44d5', 'long int a', '55892211f1fb4'),
('55892211e44d5', 'int a$', '55892211f1fbd'),
('558922894c453', 'cin>>a;', '558922895ea0a'),
('558922894c453', 'cin<<a;', '558922895ea26'),
('558922894c453', 'cout>>a;', '558922895ea34'),
('558922894c453', 'cout<a;', '558922895ea41'),
('558922899ccaa', 'cout', '55892289aa7cf'),
('558922899ccaa', 'cin', '55892289aa7df'),
('558922899ccaa', 'print', '55892289aa7eb'),
('558922899ccaa', 'printf', '55892289aa7f5'),
('558923538f48d', '255.0.0.0', '558923539a46c'),
('558923538f48d', '255.255.255.0', '558923539a480'),
('558923538f48d', '255.255.0.0', '558923539a48b'),
('558923538f48d', 'none of these', '558923539a495'),
('55892353f05c4', '192.168.1.100', '5589235405192'),
('55892353f05c4', '172.168.16.2', '55892354051a3'),
('55892353f05c4', '10.0.0.0.1', '55892354051b4'),
('55892353f05c4', '11.11.11.11', '55892354051be'),
('558973f4389ac', 'containing root file-system required during bootup', '558973f462e44'),
('558973f4389ac', ' Contains only scripts to be executed during bootup', '558973f462e56'),
('558973f4389ac', ' Contains root-file system and drivers required to be preloaded during bootup', '558973f462e61'),
('558973f4389ac', 'None of the above', '558973f462e6b'),
('558973f4c46f2', 'Kernel', '558973f4d4abe'),
('558973f4c46f2', 'Shell', '558973f4d4acf'),
('558973f4c46f2', 'Commands', '558973f4d4ad9'),
('558973f4c46f2', 'Script', '558973f4d4ae3'),
('558973f51600d', 'Boot Loading', '558973f526f9d'),
('558973f51600d', ' Boot Record', '558973f526fb9'),
('558973f51600d', ' Boot Strapping', '558973f526fc5'),
('558973f51600d', ' Booting', '558973f526fce'),
('558973f55d269', ' Quick boot', '558973f57aef1'),
('558973f55d269', 'Cold boot', '558973f57af07'),
('558973f55d269', ' Hot boot', '558973f57af17'),
('558973f55d269', ' Fast boot', '558973f57af27'),
('558973f5abb1a', 'bash', '558973f5e7623'),
('558973f5abb1a', ' Csh', '558973f5e7636'),
('558973f5abb1a', ' ksh', '558973f5e7640'),
('558973f5abb1a', ' sh', '558973f5e764a'),
('5589751a63091', 'q', '5589751a81bd6'),
('5589751a63091', 'wq', '5589751a81be8'),
('5589751a63091', ' both (a) and (b)', '5589751a81bf4'),
('5589751a63091', ' none of the mentioned', '5589751a81bfd'),
('5589751ad32b8', ' moves screen down one page', '5589751adbdbd'),
('5589751ad32b8', 'moves screen up one page', '5589751adbdce'),
('5589751ad32b8', 'moves screen up one line', '5589751adbdd8'),
('5589751ad32b8', ' moves screen down one line', '5589751adbde2'),
('5589751b304ef', ' yy', '5589751b3b04d'),
('5589751b304ef', 'yw', '5589751b3b05e'),
('5589751b304ef', 'yc', '5589751b3b069'),
('5589751b304ef', ' none of the mentioned', '5589751b3b073'),
('5589751b749c9', 'X', '5589751b9a98c'),
('5589751b749c9', 'x', '5589751b9a9a5'),
('5589751b749c9', 'D', '5589751b9a9b7'),
('5589751b749c9', 'd', '5589751b9a9c9'),
('5589751bd02ec', 'autoindentation is not possible in vi editor', '5589751bdadaa'),
('5eb7f8cf29a7a', 'ahjsgf', '5eb7f8cf42549'),
('5eb7f8cf29a7a', 'ghadg', '5eb7f8cf42560'),
('5eb7f8cf29a7a', 'ashgd', '5eb7f8cf42561'),
('5eb7f8cf29a7a', 'asdhjgas', '5eb7f8cf42562'),
('5eb7f8cf98975', 'asdhgsa', '5eb7f8cfa355e'),
('5eb7f8cf98975', 'ajsf', '5eb7f8cfa3568'),
('5eb7f8cf98975', 'asjfgsa', '5eb7f8cfa356a'),
('5eb7f8cf98975', 'asfgs', '5eb7f8cfa356b'),
('5f89474b9e32c', 'bsjkasnkdasmdnsjdcsajk', '5f89474bc2d1d'),
('5f89474b9e32c', 'jsknmaskdl', '5f89474bc2d1d'),
('5f89474b9e32c', 'ufnhjjfkadk', '5f89474bc2d1d'),
('5f89474b9e32c', 'vuligate', '5f89474bc2d1d'),
('5f89474bf3a5d', 'mapara', '5f89474c0945d'),
('5f89474bf3a5d', 'heywena', '5f89474c0945d'),
('5f89474bf3a5d', 'stolo', '5f89474c0945d'),
('5f89474bf3a5d', 'bsndas', '5f89474c0945d'),
('5f894ceeedaf6', 'an electronic devics', '5f894cef2118f'),
('5f894ceeedaf6', 'hdkjf', '5f894cef2118f'),
('5f894ceeedaf6', 'sjkfnmk', '5f894cef2118f'),
('5f894ceeedaf6', 'bhjdfnsdf', '5f894cef2118f'),
('5f894cef74993', 'an input device', '5f894cef82456'),
('5f894cef74993', 'jkfsdkfdk', '5f894cef82456'),
('5f894cef74993', 'dkfdjm', '5f894cef82456'),
('5f894cef74993', 'klsfjlksa', '5f894cef82456'),
('5f894cefe3eed', 'dhbncjhd', '5f894cf0336c5'),
('5f894cefe3eed', 'output device', '5f894cf0336c5'),
('5f894cefe3eed', 'tyygdfh', '5f894cf0336c5'),
('5f894cefe3eed', 'jhdfdnj', '5f894cf0336c5'),
('5f894cf05f9d7', 'jhjhcbnf', '5f894cf069de9'),
('5f894cf05f9d7', 'hjhdhjjh', '5f894cf069de9'),
('5f894cf05f9d7', 'for printing', '5f894cf069de9'),
('5f894cf05f9d7', 'yuhsgd', '5f894cf069de9'),
('5f894cf0b39ab', 'hard disk drive', '5f894cf0bddbd'),
('5f894cf0b39ab', 'nsjdafsjh', '5f894cf0bddbd'),
('5f894cf0b39ab', 'jhdskdf', '5f894cf0bddbd'),
('5f894cf0b39ab', 'smhdfbnfsd', '5f894cf0bddbd'),
('5f8953890eb25', 'hdklfklasd', '5f8953893545f'),
('5f8953890eb25', 'tangible device', '5f8953893545f'),
('5f8953890eb25', 'hjknsd', '5f8953893545f'),
('5f8953890eb25', 'lTIN', '5f8953893545f'),
('5f89538991904', 'screen', '5f895389bcc76'),
('5f89538991904', 'cpu', '5f895389bcc76'),
('5f89538991904', 'motherboard', '5f895389bcc76'),
('5f89538991904', 'software', '5f895389bcc76'),
('5f895389f339b', 'screen', '5f89538a07245'),
('5f895389f339b', 'cpu', '5f89538a07245'),
('5f895389f339b', 'printer', '5f89538a07245'),
('5f895389f339b', 'keyboard', '5f89538a07245'),
('5f8954b97de1b', 'keyboard', '5f8954b9a62ad'),
('5f8954b97de1b', 'mouse', '5f8954b9a62ad'),
('5f8954b97de1b', 'operating system', '5f8954b9a62ad'),
('5f8954b97de1b', 'printer', '5f8954b9a62ad'),
('5f8954b9f40d7', 'windows', '5f8954ba08f21'),
('5f8954b9f40d7', 'linux', '5f8954ba08f21'),
('5f8954b9f40d7', 'mac os', '5f8954ba08f21'),
('5f8954b9f40d7', 'smadav', '5f8954ba08f21'),
('5f8954ba43c97', 'photoshop', '5f8954ba5175a'),
('5f8954ba43c97', 'vlc', '5f8954ba5175a'),
('5f8954ba43c97', 'msword', '5f8954ba5175a'),
('5f8954ba43c97', 'fifa', '5f8954ba5175a');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(3) NOT NULL,
  `student_id` int(3) NOT NULL,
  `email` varchar(100) NOT NULL,
  `driving_school` varchar(100) NOT NULL,
  `_type` varchar(50) NOT NULL,
  `payment_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `student_id`, `email`, `driving_school`, `_type`, `payment_date`) VALUES
(1, 1, 'brian@gmail.com', 'Galaxy', 'provisional', '2020-10-28 04:28:18'),
(2, 3, 'taps@gmail.com', 'Galaxy', 'drivetest', '2020-10-28 04:46:40'),
(3, 9, 'malo@gmail.com', 'zikwa', 'provisional', '2020-10-28 15:23:53'),
(4, 3, 'taps@gmail.com', 'Galaxy', 'provisional', '2020-10-28 15:40:34');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `eid` text NOT NULL,
  `qid` text NOT NULL,
  `qns` text NOT NULL,
  `choice` int(10) NOT NULL,
  `sn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`eid`, `qid`, `qns`, `choice`, `sn`) VALUES
('558920ff906b8', '55892169bf6a7', 'what is command for changing user information??', 4, 1),
('558920ff906b8', '5589216a3646e', 'what is permission for view only for other??', 4, 2),
('558921841f1ec', '558922117fcef', 'what is command for print in php??', 4, 1),
('558921841f1ec', '55892211e44d5', 'which is a variable of php??', 4, 2),
('5589222f16b93', '558922894c453', 'what is correct statement in c++??', 4, 1),
('5589222f16b93', '558922899ccaa', 'which command is use for print the output in c++?', 4, 2),
('558922ec03021', '558923538f48d', 'what is correct mask for A class IP???', 4, 1),
('558922ec03021', '55892353f05c4', 'which is not a private IP??', 4, 2),
('55897338a6659', '558973f4389ac', 'On Linux, initrd is a file', 4, 1),
('55897338a6659', '558973f4c46f2', 'Which is loaded into memory when system is booted?', 4, 2),
('55897338a6659', '558973f51600d', ' The process of starting up a computer is known as', 4, 3),
('55897338a6659', '558973f55d269', ' Bootstrapping is also known as', 4, 4),
('55897338a6659', '558973f5abb1a', 'The shell used for Single user mode shell is:', 4, 5),
('5589741f9ed52', '5589751a63091', ' Which command is used to close the vi editor?', 4, 1),
('5589741f9ed52', '5589751ad32b8', ' In vi editor, the key combination CTRL+f', 4, 2),
('5589741f9ed52', '5589751b304ef', ' Which vi editor command copies the current line of the file?', 4, 3),
('5589741f9ed52', '5589751b749c9', ' Which command is used to delete the character before the cursor location in vi editor?', 4, 4),
('5589741f9ed52', '5589751bd02ec', ' Which one of the following statement is true?', 4, 5),
('5eb7f88752b76', '5eb7f8cf29a7a', 'What is php', 4, 1),
('5eb7f88752b76', '5eb7f8cf98975', 'What does $_POST used for ', 4, 2),
('5f89458301ee0', '5f89474b9e32c', 'what is a database', 4, 1),
('5f89458301ee0', '5f89474bf3a5d', 'wat is a dbms', 4, 2),
('5f894c5b455cf', '5f894ceeedaf6', 'what z a computer', 4, 1),
('5f894c5b455cf', '5f894cef74993', 'what is a key board', 4, 2),
('5f894c5b455cf', '5f894cefe3eed', 'screen', 4, 3),
('5f894c5b455cf', '5f894cf05f9d7', 'printer', 4, 4),
('5f894c5b455cf', '5f894cf0b39ab', 'hdd', 4, 5),
('5f8953041b3e9', '5f8953890eb25', 'what is a hardware', 4, 1),
('5f8953041b3e9', '5f89538991904', 'which device is a peripheral', 4, 2),
('5f8953041b3e9', '5f895389f339b', 'input device', 4, 3),
('5f89541295ac9', '5f8954b97de1b', 'which of the following is a software', 4, 1),
('5f89541295ac9', '5f8954b9f40d7', 'which one is not an operating system', 4, 2),
('5f89541295ac9', '5f8954ba43c97', 'which one is a software for designing', 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `eid` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `sahi` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `time` bigint(20) NOT NULL,
  `intro` text NOT NULL,
  `tag` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`eid`, `title`, `sahi`, `wrong`, `total`, `time`, `intro`, `tag`, `date`) VALUES
('558920ff906b8', 'Linux : File Managment', 2, 1, 2, 5, '', 'linux', '2015-06-23 09:03:59'),
('558921841f1ec', 'Php Coding', 2, 1, 2, 5, '', 'PHP', '2015-06-23 09:06:12'),
('5589222f16b93', 'C++ Coding', 2, 1, 2, 5, '', 'c++', '2015-06-23 09:09:03'),
('558922ec03021', 'Networking', 2, 1, 2, 5, '', 'networking', '2015-06-23 09:12:12'),
('55897338a6659', 'Linux:startup', 2, 1, 5, 10, '', 'linux', '2015-06-23 14:54:48'),
('5589741f9ed52', 'Linux :vi Editor', 2, 1, 5, 10, '', 'linux', '2015-06-23 14:58:39'),
('5eb7f88752b76', 'Master Phpp', 1, 0, 2, 3, 'For php Developers', 'masterphp', '2020-05-10 12:50:15'),
('5f89437cf2d68', 'Database', 1, 0, 2, 2, 'hjcdszndjk', 'sdsd', '2020-10-16 06:53:48'),
('5f894c5b455cf', 'Cops Assignment 1', 1, 0, 5, 2, 'computer operations and packages', 'computers', '2020-10-16 07:31:39'),
('5f8953041b3e9', 'Hardware Test', 1, 0, 3, 2, 'hardware devices', 'hardware', '2020-10-16 08:00:04'),
('5f89541295ac9', 'Software Test', 1, 0, 3, 2, 'software', 'software', '2020-10-16 08:04:34');

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `email` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`email`, `score`, `time`) VALUES
('sunnygkp10@gmail.com', 9, '2015-06-24 03:22:38'),
('avantika420@gmail.com', 8, '2015-06-23 14:49:39'),
('mi5@hollywood.com', 4, '2015-06-23 15:12:56'),
('nik1@gmail.com', 1, '2015-06-23 16:11:50'),
('softgenicenginz@gmail.com', 0, '2020-05-13 10:53:31'),
('', 2, '2020-06-03 13:33:33'),
('Admin@gmail.com', -8, '2020-10-17 11:42:49'),
('Shumba@gmail.com', 0, '2020-10-16 05:28:31');

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` int(11) NOT NULL,
  `day` varchar(50) NOT NULL,
  `8:00-8:30` varchar(50) NOT NULL,
  `8:30-10:00` varchar(50) NOT NULL,
  `10:00-10:30` varchar(50) NOT NULL,
  `10:30-1:00` varchar(50) NOT NULL,
  `1:00-2:00` varchar(50) NOT NULL,
  `2:00-2:30` varchar(50) NOT NULL,
  `2:30-4:00` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `day`, `8:00-8:30`, `8:30-10:00`, `10:00-10:30`, `10:30-1:00`, `1:00-2:00`, `2:00-2:30`, `2:30-4:00`) VALUES
(1, 'Monday', 'Preparation and verification procedures', 'Provisional and dirve test 1', 'Break', 'Provisional and drive test 2', 'Lunch', 'Preparation and verification', 'Provisional and drive test 3'),
(2, 'Tuesday', 'Preparation and verification procedures', 'Provisional and dirve test 1', 'Break', 'Provisional and drive test 2', 'Lunch', 'Preparation and verification', 'Provisional and drive test 3'),
(3, 'Wednesday', 'Preparation and verification procedures', 'Provisional and dirve test 1', 'Break', 'Provisional and drive test 2', 'Lunch', 'Preparation and verification', 'Provisional and drive test 3'),
(4, 'Thursday', 'Preparation and verification procedures', 'Provisional and dirve test 1', 'Break', 'Provisional and drive test 2', 'Lunch', 'Preparation and verification', 'Provisional and drive test 3'),
(5, 'Friday', 'Preparation and verification procedures', 'Provisional and dirve test 1', 'Break', 'Provisional and drive test 2', 'Lunch', 'Preparation and verification', 'Provisional and drive test 3'),
(7, 'Saturday', 'Preparation and verification procedures', 'Provisional and dirve test 1', 'Break', 'Provisional and drive test 2', 'Closed', '--------', '--------');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` int(3) NOT NULL,
  `_day` varchar(30) NOT NULL,
  `session1` int(3) NOT NULL,
  `session2` int(3) NOT NULL,
  `session3` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `_day`, `session1`, `session2`, `session3`) VALUES
(1, '0', 5, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(3) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `idnumber` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `driving_school` varchar(255) NOT NULL,
  `lessons` int(3) NOT NULL,
  `contactno` int(10) NOT NULL,
  `image` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `firstname`, `lastname`, `dob`, `idnumber`, `email`, `driving_school`, `lessons`, `contactno`, `image`, `password`) VALUES
(1, 'Brian', 'Shumba', '1996-11-18', '12-54676y76', 'brian@gmail.com', 'Galaxy', 2, 78364723, 'image', 'password'),
(3, 'taps', 'fambai', '2006-09-13', '67-fghfbj78', 'taps@gmail.com', 'Galaxy', 0, 78364723, 'edited.jpg', 'password'),
(4, 'tatenda', 'muuyo', '2018-10-05', '34-y-45456363', 'tm@m.com', 'Galaxy', 0, 7298342, 'image', 'password'),
(5, 'Ben', 'Dengu', '2020-10-05', '12-56367y67', 'ben@t.com', 'Zikwa', 23, 776354223, 'male-circle-512.png', 'password'),
(6, 'brash', 'litoto', '1995-09-06', '57-7845398y19', 'zikwa@gmail.gom', 'Zikwa', 10, 2147483647, '20190122_165254.jpg', 'password'),
(7, 'John', 'Marange', '1999-08-10', '29-345678-Z23', 'john@gmail.com', 'galaxy', 0, 73593364, 'male-circle-512.png', 'password'),
(8, 'trymore', 'gucks', '2020-02-05', '29-298092b66', 'password@gmail.com', 'zikwa', 2, 783779699, 'male-circle-512.png', 'password'),
(9, 'Malon', 'muti', '2020-09-29', '1222323232k', 'malo@gmail.com', 'zikwa', 0, 247242761, 'edited.jpg', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontacts`
--

CREATE TABLE `tblcontacts` (
  `id` int(4) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `phone_number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcontacts`
--

INSERT INTO `tblcontacts` (`id`, `first_name`, `last_name`, `phone_number`) VALUES
(1, 'Brian', 'Shumba', 776606743),
(4, 'Smart', 'Gida', 77836236),
(6, 'takudzwa', 'zigonde', 77886987);

-- --------------------------------------------------------

--
-- Table structure for table `thread`
--

CREATE TABLE `thread` (
  `id` int(30) NOT NULL,
  `user_ids` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thread`
--

INSERT INTO `thread` (`id`, `user_ids`) VALUES
(1, '2,3'),
(2, '1,2');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `tymid` int(3) NOT NULL,
  `event` varchar(255) NOT NULL,
  `_date` varchar(50) NOT NULL,
  `_time` varchar(50) NOT NULL,
  `venue` varchar(255) NOT NULL,
  `more_info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`tymid`, `event`, `_date`, `_time`, `venue`, `more_info`) VALUES
(1, 'exams', '2020-10-22', '00:00:09.0000', 'upper library', 'vbnet_mock_test_i.pdf'),
(5, 'inclas', '2020-10-30', '10:30:00.0000', 'arena', 'vbnet_mock_test_i.pdf'),
(6, 'clean up campaign', '2020-10-20', '09:00', 'PARK', 'EP_01.pdf'),
(7, 'internal assessment', '2020-11-03', '08:00', 'Main Hall', 'SoftwareEngineering2017QP.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(50) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `college` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mob` bigint(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `gender`, `college`, `email`, `mob`, `password`) VALUES
('admin', 'm', 'msu', 'admin@gmail.com', 79876, 'password'),
('Avantika', 'F', 'KNIT sultanpur', 'avantika420@gmail.com', 7785068889, 'e10adc3949ba59abbe56e057f20f883e'),
('Mark Zukarburg', 'M', 'Stanford', 'ceo@facebook.com', 987654321, 'e10adc3949ba59abbe56e057f20f883e'),
('Komal', 'F', 'KNIT sultanpur', 'komalpd2011@gmail.com', 7785068889, 'e10adc3949ba59abbe56e057f20f883e'),
('Tom Cruze', 'M', 'Hollywood', 'mi5@hollywood.com', 7785068889, 'e10adc3949ba59abbe56e057f20f883e'),
('Netcamp', 'M', 'KNIT sultanpur', 'netcamp@gmail.com', 987654321, 'e10adc3949ba59abbe56e057f20f883e'),
('Nikunj', 'M', 'XYZ', 'nik1@gmail.com', 987, '202cb962ac59075b964b07152d234b70'),
('Shumba', 'M', 'msu', 'shumba@gmail.com', 7243257124, '5f4dcc3b5aa765d61d8327deb882cf99'),
('Mandaza', 'M', 'Poly', 'softgenicenginz@gmail.com', 778216768, '6119442a08276dbb22e918c3d85c1c6e'),
('Sunny', 'M', 'KNIT sultanpur', 'sunnygkp10@gmail.com', 7785068889, 'e10adc3949ba59abbe56e057f20f883e'),
('User', 'M', 'cimt', 'user@user.com', 11, 'e10adc3949ba59abbe56e057f20f883e'),
('Vikash', 'M', 'KNIT sultanpur@gmail.com', 'vikash@gmail.com', 7785068889, 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `signup_date` date NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `faculty` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `email`, `password`, `signup_date`, `profile_pic`, `faculty`) VALUES
(11, 'Code', 'Code', 'code_code', 'Code@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2020-10-18', 'assets/images/profile_pics/defaults/head_deep_blue.png', 'arts'),
(17, 'Admin', 'Admin', 'admin_admin', 'Admin@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2020-10-19', 'assets/images/profile_pics/defaults/head_deep_blue.png', 'sciences'),
(18, 'Student', 'Student', 'student_student', 'Student@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2020-10-19', 'assets/images/profile_pics/defaults/head_emerald.png', 'sciences'),
(19, 'John', 'Vz', 'john_vz', 'Vz@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2020-10-19', 'assets/images/profile_pics/defaults/head_emerald.png', 'sciences');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driving_school`
--
ALTER TABLE `driving_school`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driving_schools`
--
ALTER TABLE `driving_schools`
  ADD PRIMARY KEY (`school_id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`exam_id`);

--
-- Indexes for table `exam_key`
--
ALTER TABLE `exam_key`
  ADD PRIMARY KEY (`key_id`);

--
-- Indexes for table `instructors`
--
ALTER TABLE `instructors`
  ADD PRIMARY KEY (`instructor_id`);

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `tblcontacts`
--
ALTER TABLE `tblcontacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thread`
--
ALTER TABLE `thread`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `driving_schools`
--
ALTER TABLE `driving_schools`
  MODIFY `school_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `exam_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `exam_key`
--
ALTER TABLE `exam_key`
  MODIFY `key_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `instructors`
--
ALTER TABLE `instructors`
  MODIFY `instructor_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `notice_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
