-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2022 at 09:01 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `galery`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `textarea` text NOT NULL,
  `orderlist` int(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`name`, `email`, `textarea`, `orderlist`, `image`) VALUES
('Sadri', 'sadripervana@gmail.com', 'Shume Bukur Parisi', 0, ''),
('Sadri', 'sadripervana@gmail.com', 'Shume Bukur Parisi', 0, ''),
('Sadri', 'sadripervana@gmail.com', 'Shume Bukur Parisi', 0, ''),
('sadri', 'sadripervana@gmail.com', 'Shume Bukur Anglia', 1, ''),
('sadri', 'sadripervana@gmail.com', 'Shum bukur Anglia', 3, ''),
('Ana', 'anagega@gmail.com', 'Kam qene njehere ne Paris.', 4, ''),
('Besi', 'besiBesi@gmail.com', 'Edhe un kam qene ne Paris. Shume bukur ishte.', 4, '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
