-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2022 at 08:00 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `complaintsci`
--

-- --------------------------------------------------------

--
-- Table structure for table `resident`
--

CREATE TABLE `resident` (
  `id` int(50) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resident`
--

INSERT INTO `resident` (`id`, `name`) VALUES
(1, 'Jonathan Buccat'),
(5, 'Elijah Capudoy'),
(6, 'Christian Dave Naguit');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(27, 'Liam Moore', 'admin@mail.com', 'admin-icn.png', '$2y$10$oPOmdz1Ph/Sob88t5NWcXObo0.EdDa7TY6ZHEYrYG5IHEfMyEtpJ6', 1, 1, 1599504982),
(63, 'Jose Jov', 'hosejov556@inkmoto.com', 'default.jpg', '$2y$10$uY.mxZymw8lT9iryveuRV.1wTh4..M74HvCnKeiaxkXflJF621llW', 2, 0, 1665889663);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(14, 1, 2),
(15, 1, 7),
(16, 2, 4),
(17, 1, 5),
(20, 1, 3),
(21, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'Menu'),
(3, 'User'),
(4, 'Report Form'),
(5, 'Report');

-- --------------------------------------------------------

--
-- Table structure for table `user_report`
--

CREATE TABLE `user_report` (
  `id` varchar(64) NOT NULL,
  `name` varchar(64) NOT NULL,
  `status` varchar(64) NOT NULL,
  `uqid` varchar(64) NOT NULL,
  `address` varchar(64) NOT NULL,
  `age` int(11) NOT NULL,
  `contactnum` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `type` text NOT NULL,
  `date_reported` int(11) NOT NULL,
  `file` varchar(64) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_report`
--

INSERT INTO `user_report` (`id`, `name`, `status`, `uqid`, `address`, `age`, `contactnum`, `title`, `description`, `type`, `date_reported`, `file`) VALUES
('5f57a6d18c382', 'Marvin D. Behrens', 'Process', '0311192857689401', '1', 4, 0, 'Flood', 'Several residential areas were affected by the flood', 'Natural Disaster', 1646499899, '5f57a6d18c382.jpeg'),
('5f57a769d43b0', 'Tiffany O. Errico', 'Pending', '3299000709012871', '2', 4, 0, 'Need Education Help', 'Some children are still not getting a decent education.', 'Education', 1648405450, '5f57a769d43b0.jpg'),
('6270af1bdf852', 'Christine Moore', 'Pending', '12121', '2', 2, 0, 'Demo', 'Demo demo demo', 'Corona Virus', 1651552027, '6270af1bdf852.png'),
('631096ca4f2d2', 'Christian Dave Naguit', 'Pending', '15', '2', 1, 0, 'sda', 'asda', 'Health', 1662031562, 'default.jpg'),
('63135a3eb2a04', 'Christian Dave Naguit', 'Pending', '1662212631775989', '21', 23, 0, 'asdas', 'asdas', 'Sexual Harassment', 1662212670, '63135a3eb2a04.jpg'),
('631376e11e712', 'Christian Dave Naguit', '2', '1662219991509890', '23', 2112, 0, 'asdasd', 'asdasd', 'Agriculture', 1662220001, 'default.jpg'),
('631376ee381f5', 'Christian Dave Naguit', '2', '1662220003876098', '23', 23, 0, '231', 'asdas', 'Natural Disasters', 1662220014, 'default.jpg'),
('631380bf5f09f', 'Christian Dave Naguit', '2', '43', '21', 21312, 0, 'asdasd', 'asdada', 'Drugs', 1662222527, 'default.jpg'),
('631742e821120', 'Jonathan Bautista Buccat', 'Cancelled', '46', '497 N. CRUZ Street Palatiw Pasig City', 21, 2147483647, 'pandessal', 'ube', 'Corona Virus', 1662468840, 'default.jpg'),
('6317430319349', 'Jonathan Bautista Buccat', 'Cancelled', '46', '497 N. CRUZ Street Palatiw Pasig City', 2321, 2147483647, 'sadas', 'ddasdas', 'Corona Virus', 1662468867, 'default.jpg'),
('634280c0a24fa', 'Jonathan Bautista Buccat', 'Pending', '46', 'dasdsad', 1231, 23123, 'asdas', 'dasd', 'Corona Virus', 0, 'default.jpg'),
('634282f23173e', 'Jonathan Bautista Buccat', 'Pending', '46', '497 N. CRUZ Street Palatiw Pasig City', 21, 2147483647, 'dasd', 'asdas', 'Corona Virus', 0, 'default.jpg'),
('634283afc9d5b', 'Jonathan Bautista Buccat', 'Pending', '46', 'd', 2, 2, '123', 'sd', 'Corona Virus', 1665303471, 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 3, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 3, 'Update Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 2, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 2, 'Submenu Management', 'menu/submenu', 'fas fa-fa-fw fa-folder-open', 1),
(6, 1, 'Access Authority', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(7, 3, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(9, 4, 'Report', 'report/addreport', 'fas fa-fw fa-headset', 1),
(10, 5, 'Report Data', 'report', 'fas fa-fw fa-file-alt', 1),
(11, 1, 'User Data', 'admin/datamember', 'fas fa-fw fa-users', 1),
(12, 4, 'Report History', 'report/user_report_detail', 'fas fa-fw fa-headset', 1),
(14, 1, 'Analytics', 'admin/analytics', 'fa-solid fa-newspaper', 1),
(15, 1, 'Residents', 'admin/dataresidents', 'fas fa-id-card', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(8, 'aa@gmail.com', 'Wag8dsxx6ziM9O8n/HisVkGyy9+az5XeumzNuaJMGg4=', 1599579296),
(9, 'christine@mail.com', '0Hrx2++F9JMO4pYOuQRLLlfQwP5DWH/O76x//+Yhs54=', 1651551632),
(10, 'mcdcnaguit@tip.edu.ph', 'R9ZzbqwC+J+x+5ZhLNW9xG5Xg1GSVkm9gEXX1otwJKA=', 1662203349),
(11, 'mefcapudoy@tip.edu.ph', 'TxTWBAg6n/2fJcbyoWUoqcJ3ob3wI0I4o1mimphLUIg=', 1662203404),
(13, 'mjbbuccat@tip.edu.ph', 'XpnL+drN4SmxSqVfNXoar746Ykvii+IXI120em5g9i8=', 1665301491),
(14, 'mjbbuccat@tip.edu.ph', 'NTd+IdX1xEHcLuMJuf9DSgiqmYtQ1vLFVJMifZGB9VI=', 1665853778),
(15, 'mjbbuccat@tip.edu.ph', 'PZSGn5xa3/iYOzYhRq8Ysb21LHMhVv1TsZ/41FLisdo=', 1665853961),
(16, 'mjbbuccat@tip.edu.ph', 'KMDjdnZ9KGf1yJdjuHl+FS6AToXWQl8y0tAgawjhWGI=', 1665854070),
(17, 'mjbbuccat@tip.edu.ph', 'R7HOXXhmgT+f0pSh/WzQNRN0DKKYHW43uGlCimlUJgM=', 1665857896),
(18, 'mjbbuccat@tip.edu.ph', 'BZOPjnf2zxXwcp6gwz+NL1SebhNwByty3Ht9p4UAu2Y=', 1665859872),
(19, 'hosejov556@inkmoto.com', 'kagUdh4s6BmOSbwpanNiPP/kqkoC0kTVCGtqfIhBhv8=', 1665859946),
(20, 'hosejov556@inkmoto.com', 'izl653h3QWCQoBwCV8IB+yuBgLl2vz03cfPQLxAVQ+0=', 1665871167),
(21, 'mjbbuccat@tip.edu.ph', '6murSVnDsMfaLexQM+BwzOU+BoBTs2fazl0zxb0/jSc=', 1665871217),
(22, 'hosejov556@inkmoto.com', 'oGY/G5P8sygHHLGcntzefWIOcC739/QqjvoX3vBVNbU=', 1665889663);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `resident`
--
ALTER TABLE `resident`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_report`
--
ALTER TABLE `user_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `resident`
--
ALTER TABLE `resident`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
