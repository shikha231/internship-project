-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2017 at 07:34 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `search`
--

-- --------------------------------------------------------

--
-- Table structure for table `css`
--

CREATE TABLE `css` (
  `video` int(11) NOT NULL,
  `ebook` int(11) NOT NULL,
  `notes` int(11) NOT NULL,
  `text` int(11) NOT NULL,
  `link` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `css`
--

INSERT INTO `css` (`video`, `ebook`, `notes`, `text`, `link`) VALUES
(1, 2, 4, 5, 'www.lynda.com'),
(3, 4, 1, 2, 'www.w3school.com'),
(2, 5, 2, 1, 'www.udemy.com'),
(5, 1, 3, 5, 'www.javatpoint.com'),
(4, 3, 4, 3, 'www.unacademy.com');

-- --------------------------------------------------------

--
-- Table structure for table `html`
--

CREATE TABLE `html` (
  `video` int(11) NOT NULL,
  `ebook` int(11) NOT NULL,
  `notes` int(11) NOT NULL,
  `text` int(11) NOT NULL,
  `link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `html`
--

INSERT INTO `html` (`video`, `ebook`, `notes`, `text`, `link`) VALUES
(1, 2, 5, 4, 'www.w3school.com'),
(2, 5, 2, 1, 'www.udemy.com'),
(5, 1, 3, 5, 'www.unacademy.com'),
(3, 4, 1, 2, 'www.lynda.com'),
(4, 3, 4, 3, 'www.unacademy.com');

-- --------------------------------------------------------

--
-- Table structure for table `java`
--

CREATE TABLE `java` (
  `video` int(11) NOT NULL,
  `ebook` int(11) NOT NULL,
  `notes` int(11) NOT NULL,
  `text` int(11) NOT NULL,
  `link` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `java`
--

INSERT INTO `java` (`video`, `ebook`, `notes`, `text`, `link`) VALUES
(4, 3, 4, 3, 'www.udemy.com'),
(5, 1, 3, 5, 'www.javatpoint.com'),
(2, 5, 2, 1, 'www.unacademy.com'),
(3, 4, 1, 2, 'www.lynda.com'),
(1, 2, 4, 5, 'www.w3school.com');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `html` varchar(11) NOT NULL,
  `css` varchar(11) NOT NULL,
  `php` varchar(11) NOT NULL,
  `java` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`html`, `css`, `php`, `java`) VALUES
('0', '0', '0', '1'),
('0', '0', '0', '0'),
('1', '0', '0', '0'),
('e', '', '', ''),
('e', '', '', ''),
('e', '', '', ''),
('', 'e', '', ''),
('', '', 'n', ''),
('v', '', '', ''),
('t', '', '', ''),
('', 't', '', ''),
('', '', 'n', ''),
('v', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `php`
--

CREATE TABLE `php` (
  `video` int(11) NOT NULL,
  `ebook` int(11) NOT NULL,
  `notes` int(11) NOT NULL,
  `text` int(11) NOT NULL,
  `link` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `php`
--

INSERT INTO `php` (`video`, `ebook`, `notes`, `text`, `link`) VALUES
(3, 4, 1, 2, 'www.unacademy.com'),
(2, 5, 2, 1, 'www.javatpoint.com'),
(5, 1, 3, 5, 'www.udemy.com'),
(4, 3, 4, 3, 'www.w3s'),
(1, 2, 4, 5, 'www.lynda.com');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `name` varchar(20) NOT NULL,
  `no` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`name`, `no`, `email`, `password`) VALUES
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('shobhit jaiswal', '0945627644', 'shobhit24_7@gmail.com', 'up32eh3338'),
('shobhit jaiswal', '0945627644', 'shobhit24_7@gmail.com', 'up32eh3338'),
('shobhit jaiswal', '0945627644', 'shobhit24_7@gmail.com', 'up32eh3338'),
('', '', '', ''),
('', '', '', ''),
('shobhit jaiswal', '0945627644', 'shobhit24_7@gmail.com', 'up32eh3338'),
('swa', '0945627644', 'shobhit24_72@hhs.com', 'up32eh3338'),
('qw', '9456276446', 'shobhit291994@gmail.com', 'up32eh3338'),
('fff', '9456276446', 'shobhit291994@gmail.com', 'up32eh3338'),
('as', '34234', 'shobhit24_7@eer.com', 'up32eh3338'),
('shobhit jaiswal', '0945627644', 'shobhit24_7@eer.com', 'up32eh3338'),
('qwasas', '0945627644', 'shobhit291994@gmail.com', 'up32eh3338'),
('shobhit jaiswal', '9456276446', 'shobhit24_7@gmail.com', 'up32eh3338'),
('asd', '9456276446', 'shobhit24_7@gmail.com', 'up32eh3338'),
('sdf', '9456276446', 'shobhit24_7@gmail.com', 'up32eh3338');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
