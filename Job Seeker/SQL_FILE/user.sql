-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2020 at 07:35 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `pquote` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `password`, `pquote`) VALUES
('fahim', '112233', ''),
('mushfiq', '445566', ''),
('Ops', '778899', ''),
('bangla', 'hello', ''),
('', '', ''),
('banglasd', 'hello', ''),
('fahimBhai', 'bangla', ''),
('fahimbot', '445566', ''),
('fahimbotr', '445566', ''),
('fahimbotrdd', '445566', 'sdfdsfdsf'),
('fahimbotrddg', '445566', 'dfdsfds'),
('fahimbotrddgdd', '445566', 'sdfdsfdsfsdfsdfdsfsdfdsafdsfdsfds'),
('fahimbhai4', '445566', 'fahim sarker is a very bad boy');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
