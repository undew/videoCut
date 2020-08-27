-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 
-- サーバのバージョン： 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hackson`
--
DROP DATABASE IF EXISTS `hackson`;
CREATE DATABASE IF NOT EXISTS `hackson` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `hackson`;

-- --------------------------------------------------------

--
-- テーブルの構造 `youtube`
--

DROP TABLE IF EXISTS `youtube`;
CREATE TABLE `youtube` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `start` int(255) NOT NULL,
  `end` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `youtube`
--

INSERT INTO `youtube` (`id`, `name`, `title`, `tag`, `url`, `start`, `end`) VALUES
(1, 'あんどうたかし', 'ぐつぐつのシチューにしてやる', 'music', 'https://www.youtube.com/watch?v=zkNzxsaCunU', 5, 60),
(2, 'みやした', 'アホ', 'エンタメ', 'https://www.youtube.com/watch?v=jFzhmDu9FCc', 570, 700),
(4, 'YUI', 'yeah!!', 'エンタメ', 'https://www.youtube.com/watch?v=YOlUqfWrGls', 50, 100),
(5, 'あんどうたかし', 'あほ', 'エンタメ', 'https://www.youtube.com/watch?v=lEHM9HZf0IA', 4, 60),
(6, 'あんどうたかし', 'ぐつぐつのシチューにしてやる', 'エンタメ', 'https://www.youtube.com/watch?v=UFQEttrn6CQ', 3, 40),
(7, '浅田正雄', 'BGM', 'music', 'https://www.youtube.com/watch?v=tyDN4R0pWvM', 40, 50),
(8, 'かずま', 'あんどう', 'music', 'https://www.youtube.com/watch?v=XeFQJ6-XoD0', 50, 60),
(9, 'さかいようた', '音楽', 'music', 'https://www.youtube.com/watch?v=GlBWvRslL2c', 60, 70),
(10, 'あんどうたかし', 'ぐつぐつのシチューにしてやる', 'music', 'https://www.youtube.com/watch?v=zkNzxsaCunU', 40, 60),
(11, 'まさき', 'おんがく', 'music', 'https://www.youtube.com/watch?v=myiJB8SiIcU', 50, 70);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `youtube`
--
ALTER TABLE `youtube`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `youtube`
--
ALTER TABLE `youtube`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
