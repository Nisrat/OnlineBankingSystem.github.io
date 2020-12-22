-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2020 at 03:31 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `balance`
--

CREATE TABLE `balance` (
  `card_no` int(255) NOT NULL,
  `balan` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `balance`
--

INSERT INTO `balance` (`card_no`, `balan`) VALUES
(1, 0),
(444, 0),
(446, 500),
(999, 11500),
(5656, 5000),
(6363, 48700),
(7070, 30000),
(8080, 51500),
(9090, 54500),
(9898, 22500);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(255) NOT NULL,
  `card_no` int(255) NOT NULL,
  `deposit` int(255) NOT NULL,
  `withdraw` int(255) NOT NULL,
  `date` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `card_no`, `deposit`, `withdraw`, `date`) VALUES
(7, 6767, 400, 0, '2020-12-10 00:07:46.647715'),
(8, 0, 0, 0, '2020-12-10 00:07:52.116077'),
(9, 6767, 500, 0, '2020-12-10 00:17:01.180312'),
(10, 6767, 500, 0, '2020-12-10 00:19:48.082795'),
(11, 444, 500, 0, '2020-12-10 00:22:33.171773'),
(12, 444, 500, 0, '2020-12-10 00:35:52.802862'),
(13, 444, 500, 0, '2020-12-10 00:54:14.101208'),
(14, 444, 600, 0, '2020-12-11 21:05:38.600395'),
(15, 444, 600, 0, '2020-12-11 21:16:15.902504'),
(16, 444, 500, 0, '2020-12-12 19:04:51.277650'),
(17, 6767, 500, 0, '2020-12-12 19:11:19.318629'),
(18, 6767, 0, 500, '2020-12-12 19:33:20.774366'),
(19, 444, 2000, 0, '2020-12-12 20:01:05.475018'),
(20, 444, 500, 0, '2020-12-13 00:09:42.911179'),
(21, 6363, 500, 0, '2020-12-13 21:17:20.024169'),
(24, 6363, 400, 0, '2020-12-13 21:46:28.716718'),
(25, 6363, 500, 0, '2020-12-13 21:50:20.649133'),
(26, 6363, 500, 0, '2020-12-13 21:54:14.873015'),
(27, 6363, 0, 200, '2020-12-13 22:05:10.208042'),
(28, 6363, 400, 0, '2020-12-13 22:13:43.947242'),
(29, 777, 500, 0, '2020-12-14 00:27:12.748822'),
(30, 777, 5000, 0, '2020-12-14 00:28:06.703169'),
(31, 8585, 500, 0, '2020-12-14 00:34:22.694442'),
(32, 8585, 500, 0, '2020-12-14 00:36:58.558246'),
(33, 8585, 10000, 0, '2020-12-14 00:37:30.849236'),
(34, 8585, 10000, 0, '2020-12-14 00:37:54.818570'),
(35, 8585, 10000, 0, '2020-12-14 00:38:08.310889'),
(36, 8585, 10000, 0, '2020-12-14 00:39:58.437278'),
(37, 8585, 20000, 0, '2020-12-14 00:40:51.444297'),
(38, 8585, 500, 0, '2020-12-14 00:42:48.266278'),
(39, 5656, 5000, 0, '2020-12-14 00:45:52.482559'),
(40, 6363, 600, 0, '2020-12-14 17:14:36.369916'),
(41, 6363, 400, 0, '2020-12-14 17:15:46.030143'),
(42, 6363, 0, 500, '2020-12-14 17:28:07.516637'),
(43, 6363, 2000, 0, '2020-12-14 17:39:28.436878'),
(44, 6363, 0, 5000, '2020-12-14 17:39:48.867106'),
(45, 6363, 50000, 0, '2020-12-14 18:18:18.325186'),
(46, 9898, 10000, 0, '2020-12-14 18:23:19.757080'),
(47, 9898, 0, 500, '2020-12-14 18:23:37.627521'),
(48, 9898, 5000, 0, '2020-12-14 18:24:13.833600'),
(49, 9898, 0, 10000, '2020-12-14 18:24:44.205177'),
(50, 9898, 20000, 0, '2020-12-14 18:25:08.658295'),
(51, 9898, 0, 2000, '2020-12-14 18:25:30.777543'),
(52, 9090, 50000, 0, '2020-12-14 19:00:29.438655'),
(53, 9090, 0, 500, '2020-12-14 19:00:37.715478'),
(54, 9090, 5000, 0, '2020-12-14 19:00:59.473918'),
(55, 8080, 50000, 0, '2020-12-14 19:09:38.375235'),
(56, 8080, 0, 500, '2020-12-14 19:09:56.433162'),
(57, 8080, 2000, 0, '2020-12-14 19:10:30.813997'),
(58, 999, 10000, 0, '2020-12-14 19:19:46.345763'),
(59, 999, 0, 500, '2020-12-14 19:20:03.522908'),
(60, 999, 2000, 0, '2020-12-14 19:20:30.062116'),
(61, 7070, 50000, 0, '2020-12-21 23:50:44.421262'),
(62, 7070, 0, 20000, '2020-12-21 23:50:59.306950');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `card_no` int(12) NOT NULL,
  `name` varchar(50) NOT NULL,
  `pin_no` int(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `bdate` varchar(20) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `marital_status` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `income` int(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `edu_qualification` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`card_no`, `name`, `pin_no`, `father_name`, `bdate`, `gender`, `email`, `marital_status`, `address`, `city`, `religion`, `income`, `occupation`, `edu_qualification`, `created_at`) VALUES
(444, 'ria', 444, 'haque', '5-9-1997', 'female', 'nisrat.jahan@g.bracu.ac.bd', 'single', 'Mohakhali', 'Dhaka', '', 0, '', '', '2020-12-06 02:33:58'),
(999, 'Fahim', 909, 'haque', '5-9-1997', 'male', 'r@gmail.com', 'single', 'Mohammadpur', 'Dhaka', 'Islam', 20000, 'BSc', 'Student', '2020-12-14 19:19:22'),
(6363, 'Rasel', 6565, 'haque', '25-10-1996', 'male', 'rasel@gmail.com', 'single', 'Rampura', 'Dhaka', 'Islam', 30000, 'BSc', 'service holder', '2020-12-13 21:14:43'),
(6767, 'Rafid', 6666, 'haque', '5-5-1999', 'male', 'r@gmail.com', 'single', 'Rampura', 'Dhaka', 'muslim', 20000, 'BSc', 'service holder', '2020-12-06 02:49:03'),
(7070, 'Mike', 787, 'John', '25-10-1998', 'male', 'mike@gmail.com', 'single', 'Gulshan', 'Dhaka', 'Christan', 250000, 'Msc', 'Businessman', '2020-12-21 23:28:17'),
(8080, 'TITHI', 800, 'Islam', '5-5-1999', 'female', 'sadia47ae@yahoo.com', 'single', '/Mirpur', 'Dhaka', 'Islam', 30000, 'BSc', 'Student', '2020-12-14 19:08:31'),
(8585, 'Jshan', 888, 'haque', '5-9-1997', 'female', 'jahannisrat36@gmail.com', 'single', 'Mohammadpur', 'Dhaka', 'Islam', 30000, 'BSc', 'service holder', '2020-12-14 00:33:51'),
(9090, 'Nisrat', 100, 'Islam', '4-9-1997', 'female', 'nisrat.jahan@g.bracu.ac.bd', 'single', 'Nisrat Jahan 22/18, Eastern Nahar, khilji road, mohammadpur, dhaka-1207, flat no:401', 'Dhaka', 'Islam', 20000, 'BSc', 'Student', '2020-12-14 19:00:05'),
(9898, 'Nisrat', 999, 'Islam', '4-9-1997', 'female', 'nisrat.jahan@g.bracu.ac.bd', 'single', 'Mohammadpur', 'Dhaka', 'Islam', 20000, 'BSc', 'Student', '2020-12-14 18:22:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `balance`
--
ALTER TABLE `balance`
  ADD PRIMARY KEY (`card_no`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`card_no`) USING BTREE;
ALTER TABLE `users` ADD FULLTEXT KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `balance`
--
ALTER TABLE `balance`
  MODIFY `card_no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9899;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `card_no` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9899;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
