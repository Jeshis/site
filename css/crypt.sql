-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jan 18, 2023 at 05:17 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crypt`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `sender` int(11) NOT NULL,
  `receiver` int(11) NOT NULL,
  `content` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `is_superuser` tinyint(1) DEFAULT 0,
  `is_active` tinyint(1) DEFAULT 1,
  `joined_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `salt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `middlename`, `lastname`, `username`, `email`, `user_password`, `profile_image`, `is_superuser`, `is_active`, `joined_date`, `salt`) VALUES
(17, 'sadf', 'adsf', 'fds', 'asdfg', 'dasfds@gmail.com', 'd161026332d498c3198b6b75e81db26ca92bd6396eb8a62755b7af850727ef17', NULL, 0, 1, '2023-01-18 09:15:10', '6f393da1d8bcd2f9c79a254466e1567c4b139e1ecd34c808d0e42edc2e14943f'),
(18, 'Jeshis', '', 'Rasailee', 'jeshis22', 'jeshis@gmail.com', '942f82bfd40fc1cd510a56942ab6586080c323d88f7c472756c5761d77a1f79a', NULL, 1, 1, '2023-01-18 14:38:04', 'b95130976ab4d10e16a744b4981b658a05235301bebcbb00b2e25f5946f02a03'),
(19, 'Hello', 'HI', 'Hello', 'hello', 'hello@gmail.com', 'b40efb2027c107fa07d18929a792002613a7bc7ee7033809091e90e9f52c04b7', NULL, 0, 1, '2023-01-18 14:38:42', '8065a0433a020205839f60a8b59bacbe96a7b0394c4db7c7d597f6eca7906dbe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
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
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
