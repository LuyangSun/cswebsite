-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2016 at 01:47 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cswebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `newsposts`
--

CREATE TABLE `newsposts` (
  `Title` varchar(100) NOT NULL,
  `Body` text NOT NULL,
  `DateStart` date NOT NULL,
  `DateExpired` date NOT NULL,
  `DateCreated` date NOT NULL,
  `Author` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsposts`
--

INSERT INTO `newsposts` (`Title`, `Body`, `DateStart`, `DateExpired`, `DateCreated`, `Author`, `id`) VALUES
('Make sure you return your books!!', 'Books are due December 5th so make sure that you return your books if you didn''t purchase them!!! There will be a fee to all students who don''t return their books. Thanks!!\r\nAlso, I need to test a really long post so I am going to copy and paste this a bunch of times.\r\n\r\nBooks are due December 5th so make sure that you return your books if you didn''t purchase them!!! There will be a fee to all students who don''t return their books. Thanks!!\r\nAlso, I need to test a really long post so I am going to copy and paste this a bunch of times.\r\nBooks are due December 5th so make sure that you return your books if you didn''t purchase them!!! There will be a fee to all students who don''t return their books. Thanks!!\r\nAlso, I need to test a really long post so I am going to copy and paste this a bunch of times.\r\nBooks are due December 5th so make sure that you return your books if you didn''t purchase them!!! There will be a fee to all students who don''t return their books. Thanks!!\r\nAlso, I need to test a really long post so I am going to copy and paste this a bunch of times.\r\nBooks are due December 5th so make sure that you return your books if you didn''t purchase them!!! There will be a fee to all students who don''t return their books. Thanks!!\r\nAlso, I need to test a really long post so I am going to copy and paste this a bunch of times.\r\n\r\n\r\n', '2016-11-19', '2016-11-29', '2016-11-20', 'Brad Hennes', 14),
('Internships!!', 'Please contact me at my email for some cool internship opportunities!', '2016-11-20', '2016-11-22', '2016-11-20', 'Dr. Smith', 16),
('First', 'This is the fist page created with the new addnews.html page (The editor also works with the new pages). \r\nDid this \r\n\r\n\r\n\r\n', '2016-11-14', '2016-11-29', '2016-11-21', 'Brad Hennes', 18),
('Another test', 'I''m testing to see if the new submit page looks nice', '2016-11-13', '2016-11-29', '2016-11-21', 'Brad Hennes', 19);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `newsposts`
--
ALTER TABLE `newsposts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `newsposts`
--
ALTER TABLE `newsposts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
