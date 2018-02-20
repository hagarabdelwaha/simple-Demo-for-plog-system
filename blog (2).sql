-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 20, 2018 at 12:28 PM
-- Server version: 5.5.56-MariaDB
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int(11) NOT NULL,
  `content` varchar(250) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `content`, `user_id`, `post_id`) VALUES
(15, 'chat lab', 20, 6),
(16, 'lab threads', 21, 6),
(17, 'hello', 21, 7),
(18, 'welcome in our plog system', 20, 7),
(21, 'dddddd', 22, 6);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(11) NOT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `content` varchar(250) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `date`, `content`, `user_id`) VALUES
(6, '2018-02-20 07:09:43', '  java programming\r\n ', 20),
(7, '2018-02-20 07:12:08', '  my first post in plog', 21),
(11, '2018-02-20 10:41:17', '  jhhhhhhhhhhhhh', 22),
(12, '2018-02-20 10:44:59', 'hhhhhhhhhh  ', 22),
(13, '2018-02-20 10:46:18', '  xvcvcvc', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `psw` char(255) DEFAULT NULL,
  `imgpath` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `name`, `psw`, `imgpath`) VALUES
(16, ' w@ou.com ', ' w ', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'users_img/26814954_747542932101281_5617000228158561746_n.jpg'),
(17, 'gemy@redhat.com', 'gemy', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'users_img/26814954_747542932101281_5617000228158561746_n.jpg'),
(18, 'om@oooo.com', 'omran', '9920fc5401536b5f4163fecc448bc3d7b0a968ce', 'users_img/26814954_747542932101281_5617000228158561746_n.jpg'),
(19, 'admin@yahoo.com', 'Admin', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'users_img/26814954_747542932101281_5617000228158561746_n.jpg'),
(20, 'cdd@dd.com', 'hh', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'users_img/26169867_977756062404418_934769729941486765_n.jpg'),
(21, 'gogo@outlo.com', 'Hagar', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'users_img/26814954_747542932101281_5617000228158561746_n.jpg'),
(22, 'ii@outlook.com', 'islam', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'users_img/26814954_747542932101281_5617000228158561746_n.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `posts` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
