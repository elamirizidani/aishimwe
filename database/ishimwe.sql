-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2020 at 06:08 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ishimwe`
--

-- --------------------------------------------------------

--
-- Table structure for table `freind`
--

CREATE TABLE `freind` (
  `ID` int(11) NOT NULL,
  `request_id` int(11) NOT NULL,
  `receive_id` int(11) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `freind`
--

INSERT INTO `freind` (`ID`, `request_id`, `receive_id`, `Time`, `status`) VALUES
(1, 2, 3, '2019-07-24 10:23:41', ''),
(3, 2, 1, '2019-07-28 16:17:17', ''),
(5, 3, 0, '2019-07-28 16:26:43', ''),
(6, 3, 2, '2019-07-28 16:27:39', ''),
(7, 3, 1, '2019-09-03 15:49:39', '');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `Msg_ID` int(11) NOT NULL,
  `Sender` tinytext NOT NULL,
  `Message` longtext NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`Msg_ID`, `Sender`, `Message`, `date`) VALUES
(1, 'Peter', 'PeterDonk is here', '2017-04-13 01:26:02'),
(2, 'Peter', 'Hellow All', '2017-05-04 00:25:39'),
(3, 'priscilla', 'priscilla is also here', '2017-05-05 22:37:05'),
(4, 'priscilla', 'Hellow All', '2017-05-08 22:37:15');

-- --------------------------------------------------------

--
-- Table structure for table `peter_john`
--

CREATE TABLE `peter_john` (
  `ID` int(11) NOT NULL,
  `Messages` longtext NOT NULL,
  `File` varchar(100) NOT NULL,
  `Type` varchar(10) NOT NULL,
  `Size` int(11) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Usernames` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peter_john`
--

INSERT INTO `peter_john` (`ID`, `Messages`, `File`, `Type`, `Size`, `Time`, `Usernames`) VALUES
(1, 'hi', '', '', 0, '2019-09-05 20:10:51', 'peter'),
(2, 'sw', '', '', 0, '2019-09-05 20:13:47', 'peter'),
(3, '', 'camera.png', 'image/png', 1, '2019-09-05 20:16:06', 'peter'),
(4, 'iy', '', '', 0, '2019-09-05 20:16:54', 'peter'),
(5, '', 'calinder.png', 'image/png', 0, '2019-09-05 20:19:01', 'peter'),
(6, 'h', '', '', 0, '2019-09-05 20:19:07', 'peter'),
(7, 'f', '', '', 0, '2019-09-05 20:20:16', 'peter');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `pid` int(25) NOT NULL,
  `uid` int(25) NOT NULL,
  `name` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`pid`, `uid`, `name`, `detail`, `time`) VALUES
(4, 3, 'Opera Snapshot_2019-08-21_013537_play.google.com.png', '', '2019-09-05 10:47:46'),
(5, 3, 'dv.jpg', '', '2019-09-05 10:50:03'),
(6, 3, 'vlcsnap-error631.png', '', '2019-09-05 10:50:10'),
(7, 3, 'vlcsnap-error733.png', '', '2019-09-05 10:50:22'),
(8, 3, 'bg.png', '', '2019-09-05 10:50:28'),
(9, 3, 'bg.png', '', '2019-09-05 10:50:54'),
(10, 3, 'bg.jpg', '', '2019-09-05 10:51:04'),
(11, 3, '', 'vdvb', '2019-12-09 18:50:41'),
(12, 3, 'calinder.PNG', '', '2019-12-20 18:15:12'),
(13, 3, 'calinder.PNG', '', '2019-12-20 18:15:31'),
(14, 3, '20191107_110729(2).jpg', '', '2019-12-20 18:19:16');

-- --------------------------------------------------------

--
-- Table structure for table `priscilla_john`
--

CREATE TABLE `priscilla_john` (
  `ID` int(11) NOT NULL,
  `Messages` longtext NOT NULL,
  `File` varchar(100) NOT NULL,
  `Type` varchar(10) NOT NULL,
  `Size` int(11) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Usernames` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `priscilla_john`
--

INSERT INTO `priscilla_john` (`ID`, `Messages`, `File`, `Type`, `Size`, `Time`, `Usernames`) VALUES
(1, 'bte sha', '', '', 0, '2019-12-20 17:43:48', 'priscilla'),
(2, 'amakur yae', '', '', 0, '2019-12-20 17:44:02', 'priscilla'),
(3, 'uraho urakomeye', '', '', 0, '2019-12-20 17:44:21', 'priscilla'),
(4, 'yg sha', '', '', 0, '2019-12-20 17:47:03', 'priscilla'),
(5, '', 'calinder.png', 'image/png', 0, '2019-12-20 17:57:58', 'priscilla');

-- --------------------------------------------------------

--
-- Table structure for table `priscilla_peter`
--

CREATE TABLE `priscilla_peter` (
  `ID` int(11) NOT NULL,
  `Messages` longtext NOT NULL,
  `File` varchar(100) NOT NULL,
  `Type` varchar(10) NOT NULL,
  `Size` int(11) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Usernames` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `priscilla_peter`
--

INSERT INTO `priscilla_peter` (`ID`, `Messages`, `File`, `Type`, `Size`, `Time`, `Usernames`) VALUES
(1, 'bte', '', '', 0, '2019-09-05 18:38:25', 'priscilla'),
(2, '', 'z.jpg', 'image/jpeg', 39, '2019-09-05 19:22:39', 'priscilla'),
(3, '', 'localhost.htm', 'text/html', 10, '2019-09-05 19:36:50', 'priscilla'),
(4, '', 'cp.docx', 'applicatio', 17, '2019-09-05 19:41:07', 'priscilla'),
(5, '', 'ai.png', 'image/png', 124, '2019-09-05 19:42:13', 'priscilla'),
(6, '', 'comment.png', 'image/png', 0, '2019-09-05 19:53:14', 'priscilla'),
(7, '', 'like.png', 'image/png', 1, '2019-09-05 19:53:32', 'priscilla'),
(8, 'hi hi hi', '', '', 0, '2019-09-05 20:05:54', 'peter'),
(9, '', 'calinder.png', 'image/png', 0, '2019-12-20 16:38:49', 'priscilla'),
(10, '', 'calinder.png', 'image/png', 0, '2019-12-20 16:44:53', 'priscilla'),
(11, '', 'calinder.png', 'image/png', 0, '2019-12-20 16:45:53', 'priscilla'),
(12, '', 'calinder.png', 'image/png', 0, '2019-12-20 16:48:07', 'priscilla'),
(13, '', 'calinder.png', 'image/png', 0, '2019-12-20 16:48:41', 'priscilla'),
(14, '', 'calinder.png', 'image/png', 0, '2019-12-20 16:49:25', 'priscilla'),
(15, '', 'calinder.png', 'image/png', 0, '2019-12-20 16:50:03', 'priscilla'),
(16, '', 'calinder.png', 'image/png', 0, '2019-12-20 16:51:49', 'priscilla'),
(17, '', 'calinder.png', 'image/png', 0, '2019-12-20 16:53:42', 'priscilla'),
(18, '', 'calinder.png', 'image/png', 0, '2019-12-20 16:54:32', 'priscilla'),
(19, '', 'calinder.png', 'image/png', 0, '2019-12-20 16:55:17', 'priscilla'),
(20, '', 'calinder.png', 'image/png', 0, '2019-12-20 16:56:04', 'priscilla'),
(21, '', 'calinder.png', 'image/png', 0, '2019-12-20 16:56:37', 'priscilla'),
(22, '', 'calinder.png', 'image/png', 0, '2019-12-20 16:58:10', 'priscilla'),
(23, '', 'calinder.png', 'image/png', 0, '2019-12-20 16:59:17', 'priscilla'),
(24, '', 'calinder.png', 'image/png', 0, '2019-12-20 17:00:20', 'priscilla'),
(25, '', 'calinder.png', 'image/png', 0, '2019-12-20 17:01:12', 'priscilla'),
(26, '', 'calinder.png', 'image/png', 0, '2019-12-20 17:02:26', 'priscilla'),
(27, '', 'calinder.png', 'image/png', 0, '2019-12-20 17:03:32', 'priscilla'),
(28, '', 'calinder.png', 'image/png', 0, '2019-12-20 17:04:29', 'priscilla'),
(29, '', 'calinder.png', 'image/png', 0, '2019-12-20 17:04:51', 'priscilla'),
(30, '', 'calinder.png', 'image/png', 0, '2019-12-20 17:05:57', 'priscilla'),
(31, '', 'calinder.png', 'image/png', 0, '2019-12-20 17:07:44', 'priscilla'),
(32, '', 'calinder.png', 'image/png', 0, '2019-12-20 17:08:33', 'priscilla'),
(33, '', 'calinder.png', 'image/png', 0, '2019-12-20 17:09:37', 'priscilla'),
(34, '', 'calinder.png', 'image/png', 0, '2019-12-20 17:10:09', 'priscilla'),
(35, '', 'calinder.png', 'image/png', 0, '2019-12-20 17:11:22', 'priscilla'),
(36, '', 'calinder.png', 'image/png', 0, '2019-12-20 17:12:15', 'priscilla'),
(37, '', 'calinder.png', 'image/png', 0, '2019-12-20 17:13:15', 'priscilla'),
(38, '', 'calinder.png', 'image/png', 0, '2019-12-20 17:15:07', 'priscilla'),
(39, '', 'calinder.png', 'image/png', 0, '2019-12-20 17:16:03', 'priscilla');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_uploads`
--

CREATE TABLE `tbl_uploads` (
  `id` int(11) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `file_type` varchar(100) NOT NULL,
  `file_size` varchar(100) NOT NULL,
  `file_path` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `users_online`
--

CREATE TABLE `users_online` (
  `ID` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_online`
--

INSERT INTO `users_online` (`ID`, `first_name`, `last_name`, `status`, `Time`) VALUES
(1, 'peter', 'Donkor', 'online', '2017-06-14 22:35:12'),
(2, 'priscilla', 'appah', 'online', '2019-07-21 11:23:18'),
(3, 'LAST', 'KING', 'offline', '2019-07-21 15:17:11'),
(4, 'John', 'Doe', 'online', '2019-07-24 20:05:30');

-- --------------------------------------------------------

--
-- Table structure for table `users_table`
--

CREATE TABLE `users_table` (
  `Users_ID` int(11) NOT NULL,
  `user_fname` varchar(255) NOT NULL,
  `user_lname` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Profile_Picture` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_table`
--

INSERT INTO `users_table` (`Users_ID`, `user_fname`, `user_lname`, `Password`, `Profile_Picture`, `date`) VALUES
(1, 'Peter', 'Donkor', 'Donk', 'claude.png', '2017-04-13 01:24:56'),
(2, 'John', 'Doe', 'Doe', '', '2017-04-21 10:14:17'),
(3, 'priscilla', 'appah', 'house', 'Opera Snapshot_2019-08-21_013537_play.google.com.png', '2017-05-05 22:35:15'),
(4, 'LAST', 'KING', '123456', '', '2019-07-21 15:15:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `freind`
--
ALTER TABLE `freind`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`Msg_ID`);

--
-- Indexes for table `peter_john`
--
ALTER TABLE `peter_john`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `priscilla_john`
--
ALTER TABLE `priscilla_john`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `priscilla_peter`
--
ALTER TABLE `priscilla_peter`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_uploads`
--
ALTER TABLE `tbl_uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_online`
--
ALTER TABLE `users_online`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users_table`
--
ALTER TABLE `users_table`
  ADD PRIMARY KEY (`Users_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `freind`
--
ALTER TABLE `freind`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `Msg_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `peter_john`
--
ALTER TABLE `peter_john`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `pid` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `priscilla_john`
--
ALTER TABLE `priscilla_john`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `priscilla_peter`
--
ALTER TABLE `priscilla_peter`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tbl_uploads`
--
ALTER TABLE `tbl_uploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users_online`
--
ALTER TABLE `users_online`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users_table`
--
ALTER TABLE `users_table`
  MODIFY `Users_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
