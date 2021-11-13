-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2021 at 10:20 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fswd14_cr10_elnazmontazeri_biglibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `Id` int(10) NOT NULL,
  `type` enum('Book','CD','DVD') DEFAULT 'Book',
  `title` varchar(30) DEFAULT NULL,
  `short_description` varchar(255) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `ISBN_code` int(10) DEFAULT NULL,
  `author_first_name` varchar(30) DEFAULT NULL,
  `author_last_name` varchar(30) DEFAULT NULL,
  `publisher_name` varchar(30) DEFAULT NULL,
  `publisher_address` varchar(50) DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `status` enum('available','reserved') DEFAULT 'available'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`Id`, `type`, `title`, `short_description`, `image`, `ISBN_code`, `author_first_name`, `author_last_name`, `publisher_name`, `publisher_address`, `publish_date`, `status`) VALUES
(1, 'Book', 'Animal Farm', 'The dystopian classic reimagined with cover art by Shepard Fairey', 'AnimalFarm.jpg', 141036133, 'George', 'Orwell', 'Penguin Books Ltd', 'London, United Kingdom', '2008-08-01', 'available'),
(2, 'Book', 'My First Green Cook Book', 'Vegetarian Recipes for Young Cooks', 'MyFirstGreen Cookbook.jpg', 1529500605, 'David', 'Atherton', 'Walker Books Ltd', 'London, United Kingdom', '2021-09-16', 'reserved'),
(3, 'CD', 'The Wonky Donkey', 'In this very funny, cumulative song, each page tells us something new about the donkey until we end up with a spunky, hanky-panky cranky stinky dinky lanky honky-tonky winky wonky donkey, which will have children in fits of laughter!\r\n', 'TheWonky Donkey.jpg', 1775431754, 'Craig', 'Smith', 'Scholastic New Zealand Limited', 'Auckland, New Zealand', '2013-07-01', 'available'),
(4, 'Book', 'The Official Cambridge Guide t', 'Perfect for students at band 4.0 and above, this study guide has EVERYTHING you need to prepare for IELTS Academic or General Training. ', 'IELTS.jpg', 1107620694, 'Pauline', 'Cullen', 'Cambridge University Press', 'Cambridge, United Kingdom', '2014-03-30', 'reserved'),
(5, 'DVD', '1-2-3 Magic', 'Managing Difficult Behavior in Children 2-12', 'Magic.jpg', 1889140201, 'Thomas', 'Phelan', 'Sourcebooks, Inc', 'Naperville, United States', '2005-05-28', 'reserved'),
(6, 'Book', 'Giraffes Can\'t Dance', 'Gerald the tall giraffe would love to join in with the other animals at the Jungle Dance, but everyone knows that giraffes can\'t dance or can they?', 'GiraffesCant Dance.jpg', 1841215651, 'Giles', 'Andreae', 'Hachette Children\'s Group', 'London, United Kingdom', '2014-05-01', 'available'),
(7, 'DVD', 'Jolly Phonics', 'Inky Mouse shows her friends Snake and Bee how to read and write with the help of \'Phonic\', an old computer. The DVD (over two hours long) covers all the letter sounds and the five basic skills for reading and writing.', 'JollyPhonics.jpg', 1844140709, 'Sue', 'Lloyd', 'Jolly Learning Ltd', 'Essex, United Kingdom', '2004-12-01', 'available'),
(8, 'CD', 'Fat cat on a mat and other tal', 'he funny antics of twelve lovable animal characters are brought together in this marvelous collection - a brilliant way to introduce phonics to young readers.', 'Fat_cat_on_a_mat.jpg', 1409509230, 'Russell', 'Punter', 'Usborne Publishing Ltd', 'London, United Kingdom', '2010-06-29', 'available'),
(9, 'DVD', 'Super Minds', 'Level 1 Student\'s Book ', 'SuperMinds.jpg', 521148553, 'Herbert', 'Puchta', 'Cambridge University Press', 'Cambridge, United Kingdom', '2012-03-30', 'reserved'),
(10, 'Book', 'Roald Dahl\'s Marvellous Joke', 'Laugh yourself silly with Roald Dahl\'s Marvelous Joke Book, filled with over 400 hilarious jokes, limericks and riddles, illustrated by Quentin Blake.', 'Roald.jpg', 141340552, 'Roald', 'Dahl', 'Penguin Random House Children\'', 'London, United Kingdom', '2012-09-06', 'reserved'),
(52, 'Book', 'Child Development', NULL, '61902b31cca90.jpg', NULL, 'Carolyn ', 'Meggitt', NULL, NULL, NULL, 'available'),
(53, '', 'Child Development, An Illustra', NULL, 'book.jpg', NULL, 'Elnaz', 'Montazeri', NULL, NULL, NULL, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
