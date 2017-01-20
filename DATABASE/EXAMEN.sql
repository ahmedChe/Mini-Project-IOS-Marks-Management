-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 21, 2016 at 09:00 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `EXAMEN`
--

-- --------------------------------------------------------

--
-- Table structure for table `Matiere`
--

CREATE TABLE `Matiere` (
  `Nom_matiere` varchar(100) NOT NULL,
  `Coefficient` double NOT NULL,
  `Note` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Matiere`
--

INSERT INTO `Matiere` (`Nom_matiere`, `Coefficient`, `Note`) VALUES
('Anglais', 3, 17),
('C', 2, 14),
('Francais', 2, 16),
('JAVA', 5, 17);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Matiere`
--
ALTER TABLE `Matiere`
  ADD PRIMARY KEY (`Nom_matiere`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
