-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2021 at 03:00 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `frida_gamehubdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bug_reports`
--

CREATE TABLE `bug_reports` (
  `id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `message` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bug_type`
--

CREATE TABLE `bug_type` (
  `type_id` int(11) NOT NULL,
  `description` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact_request`
--

CREATE TABLE `contact_request` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `checked` tinyint(1) NOT NULL,
  `date_of_register` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_request`
--

INSERT INTO `contact_request` (`id`, `name`, `email`, `message`, `checked`, `date_of_register`) VALUES
(75, 'Valon', 'valon.ma@hotmail.com', 'Vasgajndvbgadvbgadvbg', 1, '2021-03-03'),
(76, 'Valon', 'valon.ma@hotmail.com', 'VALONINIII', 1, '2021-03-03'),
(77, 'Valon Marku', 'valon@gmail.com', 'Kjo faqe eshte shume e keqe', 0, '2021-03-03'),
(78, 'Valon', 'valon@gmail.com', 'asdasdasda', 1, '2021-03-03'),
(79, 'Valon', 'valon@gmail.com', 'asdasdasda', 1, '2021-03-03'),
(80, 'Reetila RUMUDUNI', 'reetila1234@gmail.com', 'KJO FAQE ESHTE SHUME E KEQE TE LUTEM HIQE SA NUK JU KOM RAPORTUAR NE POLICI.FALEMINDERIt', 0, '2021-03-08');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `author`, `content`, `created_by`, `image`, `active`) VALUES
(21, 'Call Of Duty', 'COD', '_______________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________', 37, '60377cd2421f4COD.webp', 1),
(22, 'CyberPunk 2077', 'CuberPunk', 'The Best Game Ever', 37, '60377e2074557Cyberpunk.jpg', 1),
(27, 'BloodBorne', 'Riot Games', 'BBBBBBBBBBBB', 37, '603c96563c4e7BloodBorne.jpg', 0),
(28, 'reetila qan gjithkon ne gaming', 'reetila', 'reetila a ki naj foto palidhje najkun  pm', 0, '604629ae28fe0anders-jilden-GjwsHRIcQjU-unsplash.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `slider_doc`
--

CREATE TABLE `slider_doc` (
  `id` int(11) NOT NULL,
  `path_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider_doc`
--

INSERT INTO `slider_doc` (`id`, `path_name`) VALUES
(1, 'gamingevent1'),
(2, 'gamingevent2'),
(3, 'gamingevent3'),
(4, 'gamingevent4');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `full_name`, `email`, `password`, `role`, `active`) VALUES
(37, 'Valon', 'Valon Marku', 'valon.ma@hotmail.com', 'Valon.1234', 'Admin', 1),
(38, 'vali', 'Vali', 'valon@gmail.com', 'Valon.1234', 'User', 1),
(39, 'reetila', 'Reetila rumuduni', 'reetila@gmail.com', 'reetila.1234', 'User', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bug_reports`
--
ALTER TABLE `bug_reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type_id` (`type_id`);

--
-- Indexes for table `bug_type`
--
ALTER TABLE `bug_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `contact_request`
--
ALTER TABLE `contact_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_doc`
--
ALTER TABLE `slider_doc`
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
-- AUTO_INCREMENT for table `bug_type`
--
ALTER TABLE `bug_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_request`
--
ALTER TABLE `contact_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `slider_doc`
--
ALTER TABLE `slider_doc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bug_reports`
--
ALTER TABLE `bug_reports`
  ADD CONSTRAINT `bug_reports_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `bug_type` (`type_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
