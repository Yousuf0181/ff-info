-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2023 at 06:40 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ff_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `freedomfighter`
--

CREATE TABLE `freedomfighter` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `father_name` varchar(40) DEFAULT NULL,
  `mother_name` varchar(40) DEFAULT NULL,
  `address` varchar(100) NOT NULL,
  `area` varchar(40) NOT NULL,
  `sector` int(11) NOT NULL,
  `martyr` varchar(10) NOT NULL,
  `date_of_birth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `freedomfighter`
--

INSERT INTO `freedomfighter` (`id`, `name`, `father_name`, `mother_name`, `address`, `area`, `sector`, `martyr`, `date_of_birth`) VALUES
(2, 'MONAYEM', 'ABC', 'CDF', 'CHANDGAON', 'CHITTAGONG', 9, 'yes', '0000-00-00'),
(5, 'Md Yousuf', 'Mosarof', 'Yesmin', 'khulshi', 'gg', 1, 'yes', '0000-00-00'),
(6, 'Babu', 'swapen nath', 'sikha dabi', 'chittagong', 'sssss', 11, 'yes', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `freedomfighterslider`
--

CREATE TABLE `freedomfighterslider` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `pagelink` varchar(1000) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `freedomfighterslider`
--

INSERT INTO `freedomfighterslider` (`id`, `name`, `pagelink`, `image`) VALUES
(1, 'Rhunun amin', 'https://bn.wikipedia.org/wiki/%E0%A6%AE%E0%A7%8B%E0%A6%B9%E0%A6%BE%E0%A6%AE%E0%A7%8D%E0%A6%AE%E0%A6%A6_%E0%A6%B0%E0%A7%81%E0%A6%B9%E0%A7%81%E0%A6%B2_%E0%A6%86%E0%A6%AE%E0%A6%BF%E0%A6%A8', '1.jpg'),
(2, 'Mohammad Mostafa Kamal', 'https://bn.wikipedia.org/wiki/%E0%A6%AE%E0%A7%8B%E0%A6%B8%E0%A7%8D%E0%A6%A4%E0%A6%AB%E0%A6%BE_%E0%A6%95%E0%A6%BE%E0%A6%AE%E0%A6%BE%E0%A6%B2', '2.jpg'),
(3, 'Mohammad Hamidur Rahman', 'https://bn.wikipedia.org/wiki/%E0%A6%B9%E0%A6%BE%E0%A6%AE%E0%A6%BF%E0%A6%A6%E0%A7%81%E0%A6%B0_%E0%A6%B0%E0%A6%B9%E0%A6%AE%E0%A6%BE%E0%A6%A8', '3.jpg'),
(4, 'Mohiuddin Jahangir', 'https://bn.wikipedia.org/wiki/%E0%A6%AE%E0%A6%B9%E0%A6%BF%E0%A6%89%E0%A6%A6%E0%A7%8D%E0%A6%A6%E0%A7%80%E0%A6%A8_%E0%A6%9C%E0%A6%BE%E0%A6%B9%E0%A6%BE%E0%A6%99%E0%A7%8D%E0%A6%97%E0%A7%80%E0%A6%B0', '4.jpg'),
(5, 'Matur Rahman', 'https://bn.wikipedia.org/wiki/%E0%A6%AE%E0%A6%A4%E0%A6%BF%E0%A6%89%E0%A6%B0_%E0%A6%B0%E0%A6%B9%E0%A6%AE%E0%A6%BE%E0%A6%A8_(%E0%A6%AC%E0%A7%80%E0%A6%B0%E0%A6%B6%E0%A7%8D%E0%A6%B0%E0%A7%87%E0%A6%B7%E0%A7%8D%E0%A6%A0)', '5.jpg'),
(6, 'Nur Mohammad Sheikh', 'https://bn.wikipedia.org/wiki/%E0%A6%A8%E0%A7%82%E0%A6%B0_%E0%A6%AE%E0%A7%8B%E0%A6%B9%E0%A6%BE%E0%A6%AE%E0%A7%8D%E0%A6%AE%E0%A6%A6_%E0%A6%B6%E0%A7%87%E0%A6%96', '6.jpg'),
(7, 'Munshi Abdur Rouf', 'https://bn.banglapedia.org/index.php?title=%E0%A6%B0%E0%A6%89%E0%A6%AB,_%E0%A6%AC%E0%A7%80%E0%A6%B0%E0%A6%B6%E0%A7%8D%E0%A6%B0%E0%A7%87%E0%A6%B7%E0%A7%8D%E0%A6%A0_%E0%A6%AE%E0%A7%81%E0%A6%A8%E0%A7%8D%E0%A6%B8%E0%A7%80_%E0%A6%86%E0%A6%AC%E0%A6%A6%E0%A7%81%E0%A6%B0', '7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `history1` varchar(500) NOT NULL,
  `history2` varchar(1000) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `title`, `history1`, `history2`, `image`) VALUES
(6, 'BANGLADESH LIBERATION WAR', 'The Bangladesh Liberation War The war began after the Pakistani military junta based in West Pakistan launched Operation Searchlight against the people of East Pakistan on the night of 25 March 1971. It pursued the systematic elimination of nationalist Bengali civilians, students, intelligentsia, religious minorities and armed personnel. The junta annulled the results of the 1970 elections and arrested Prime Minister-elect Sheikh Mujibur Rahman.', 'Rural and urban areas across East Pakistan saw extensive military operations and air strikes to suppress the tide of civil disobedience that formed following the 1970 election stalemate. The Pakistan Army, which had the backing of Islamists, created radical religious militias – the Razakars, Al-Badr and Al-Shams – to assist it during raids on the local populace.[11][12][13][14] [15] Members of the Pakistani military and supporting militias engaged in mass murder, deportation and genocidal rape. The capital Dhaka was the scene of numerous massacres, including the Dhaka University killings. An estimated 10 million Bengali refugees fled to neighbouring India, while 30 million were internally displaced.[16] Sectarian violence broke out between Bengalis and Urdu-speaking immigrants. An academic consensus prevails that the atrocities committed by the Pakistani military were a genocide.', 'download1.jpeg'),
(7, 'BANGLADESH LIBARATION WAR', 'The Bangladesh Liberation WaIt pursued the systematic elimination of nationalist Bengali civilians, students, intelligentsia, religious minorities and armed personnel. The junta annulled the results of the 1970 elections and arrested Prime Minister-elect Sheikh Mujibur Rahman.', 'Rural and urban areas across East Pakistan saw extensive military operations and air strikes to suppress the tide of civil disobedience that formed following the 1970 election stalemate. ', 'download1.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `homeslider`
--

CREATE TABLE `homeslider` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homeslider`
--

INSERT INTO `homeslider` (`id`, `name`, `image`) VALUES
(1, 'something', 'slider-2.jpg'),
(2, 'new slider', 'slider-3.jpg'),
(3, 'jhgjk', 'slider-4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `message` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `message`) VALUES
(12, 'Monayem Chowdhury', 'monayemcpi@gmail.com', 'Hello , This is monayem'),
(13, 'MONAYEM', 'monayemcpi@gmail.com', 'Hello');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(8, 'MONAYEM', 'monayem@v-linknetwork.com', '123'),
(9, 'yousuf', 'yousuf7@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `freedomfighter`
--
ALTER TABLE `freedomfighter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `freedomfighterslider`
--
ALTER TABLE `freedomfighterslider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homeslider`
--
ALTER TABLE `homeslider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `freedomfighter`
--
ALTER TABLE `freedomfighter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `freedomfighterslider`
--
ALTER TABLE `freedomfighterslider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `homeslider`
--
ALTER TABLE `homeslider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
