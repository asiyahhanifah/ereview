-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 13, 2020 at 05:02 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ereview_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

DROP TABLE IF EXISTS `assignment`;
CREATE TABLE IF NOT EXISTS `assignment` (
  `id_assign` int(11) NOT NULL AUTO_INCREMENT,
  `id_task` int(11) NOT NULL,
  `id_reviewer` int(11) NOT NULL,
  `nama_reviewer` varchar(255) NOT NULL,
  `tgl_assign` date DEFAULT current_timestamp(),
  `tgl_deadline` date DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NULL DEFAULT NULL,
  `sts_assign` tinyint(4) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id_assign`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`id_assign`, `id_task`, `id_reviewer`, `nama_reviewer`, `tgl_assign`, `tgl_deadline`, `date_created`, `date_updated`, `sts_assign`) VALUES
(15, 52, 12, 'Reviewer', '2020-05-13', '2020-05-23', '2020-05-12 19:09:22', NULL, 1),
(16, 53, 12, 'Reviewer', '2020-05-13', '2020-05-30', '2020-05-12 19:09:42', NULL, 1),
(17, 54, 13, 'Reviewer Kedua', '2020-05-13', '2020-05-23', '2020-05-12 19:10:11', NULL, 1),
(18, 55, 12, 'Reviewer', '2020-05-13', '2020-05-23', '2020-05-12 19:10:30', NULL, 1),
(19, 56, 12, 'Reviewer', '2020-05-13', '2020-05-23', '2020-05-12 19:10:51', NULL, 1),
(20, 57, 13, 'Reviewer Kedua', '2020-05-13', '2020-06-06', '2020-05-12 19:11:15', NULL, 1),
(21, 58, 13, 'Reviewer Kedua', '2020-05-13', '2020-05-15', '2020-05-12 19:11:35', NULL, 1),
(22, 59, 12, 'Reviewer', '2020-05-13', '2020-05-15', '2020-05-12 19:11:58', NULL, 1),
(23, 60, 12, 'Reviewer', '2020-05-13', '2020-05-29', '2020-05-13 02:43:28', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `editor`
--

DROP TABLE IF EXISTS `editor`;
CREATE TABLE IF NOT EXISTS `editor` (
  `id_editor` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NULL DEFAULT NULL,
  `sts_editor` tinyint(4) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id_editor`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `editor`
--

INSERT INTO `editor` (`id_editor`, `id_user`, `nama`, `date_created`, `date_updated`, `sts_editor`) VALUES
(11, 41, 'Editor', '2020-05-10 07:39:55', NULL, 1),
(12, 43, 'Bryan Yehuda Mannuel', '2020-05-11 15:04:34', NULL, 1),
(13, 45, 'Editor Baru', '2020-05-12 18:48:42', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `grup`
--

DROP TABLE IF EXISTS `grup`;
CREATE TABLE IF NOT EXISTS `grup` (
  `id_grup` int(11) NOT NULL AUTO_INCREMENT,
  `nama_grup` varchar(50) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NULL DEFAULT NULL,
  `sts_grup` tinyint(4) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id_grup`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `grup`
--

INSERT INTO `grup` (`id_grup`, `nama_grup`, `date_created`, `date_updated`, `sts_grup`) VALUES
(1, 'editor', '2020-03-12 05:56:08', '2020-03-12 05:57:48', 1),
(2, 'reviewer', '2020-03-12 05:56:08', '2020-03-12 05:57:48', 1),
(3, 'makelaar', '2020-03-12 05:56:19', '2020-03-12 05:57:48', 1);

-- --------------------------------------------------------

--
-- Table structure for table `makelar`
--

DROP TABLE IF EXISTS `makelar`;
CREATE TABLE IF NOT EXISTS `makelar` (
  `id_makelar` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NULL DEFAULT NULL,
  `sts_makelar` tinyint(4) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id_makelar`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `makelar`
--

INSERT INTO `makelar` (`id_makelar`, `id_user`, `nama`, `date_created`, `date_updated`, `sts_makelar`) VALUES
(2, 40, 'makelaar', '2020-05-10 07:42:18', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE IF NOT EXISTS `member` (
  `id_member` int(11) NOT NULL AUTO_INCREMENT,
  `id_grup` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NULL DEFAULT NULL,
  `sts_member` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id_member`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `id_grup`, `id_user`, `date_created`, `date_updated`, `sts_member`) VALUES
(16, 3, 40, '2020-05-10 07:39:38', NULL, 1),
(17, 1, 41, '2020-05-10 07:39:55', NULL, 1),
(18, 2, 42, '2020-05-10 07:40:11', NULL, 1),
(19, 1, 43, '2020-05-11 15:04:34', NULL, 1),
(20, 2, 44, '2020-05-12 08:33:18', NULL, 1),
(21, 1, 45, '2020-05-12 18:48:42', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

DROP TABLE IF EXISTS `pembayaran`;
CREATE TABLE IF NOT EXISTS `pembayaran` (
  `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT,
  `amount` float NOT NULL,
  `bukti` varchar(100) NOT NULL,
  `id_task` int(11) NOT NULL,
  `date_created` timestamp NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NULL DEFAULT NULL,
  `sts_payment` tinyint(4) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id_pembayaran`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `amount`, `bukti`, `id_task`, `date_created`, `date_updated`, `sts_payment`) VALUES
(1, 200000, 'uploads/bukti/1 ', 28, '2020-05-12 14:35:45', NULL, 1),
(2, 200000, 'uploads/bukti/2 ', 53, '2020-05-12 19:12:10', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `reviewer`
--

DROP TABLE IF EXISTS `reviewer`;
CREATE TABLE IF NOT EXISTS `reviewer` (
  `id_reviewer` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_rek` varchar(255) NOT NULL,
  `kompetensi` text NOT NULL,
  `funds` int(11) NOT NULL,
  `date_created` timestamp NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_reviewer`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reviewer`
--

INSERT INTO `reviewer` (`id_reviewer`, `id_user`, `nama`, `no_rek`, `kompetensi`, `funds`, `date_created`, `date_updated`) VALUES
(12, 42, 'Reviewer', '12345678', 'Tidur, makan, maen game', 40001, '2020-05-10 07:40:11', NULL),
(13, 44, 'Reviewer Kedua', '0', '', 0, '2020-05-12 08:33:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

DROP TABLE IF EXISTS `task`;
CREATE TABLE IF NOT EXISTS `task` (
  `id_task` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(250) NOT NULL,
  `authors` varchar(300) DEFAULT NULL,
  `keywords` varchar(300) DEFAULT NULL,
  `file_loc` varchar(300) DEFAULT NULL,
  `id_editor` int(11) NOT NULL,
  `nama_editor` varchar(255) NOT NULL,
  `status` smallint(2) NOT NULL DEFAULT 1,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_uploaded` timestamp NULL DEFAULT NULL,
  `sts_task` tinyint(4) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id_task`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id_task`, `judul`, `authors`, `keywords`, `file_loc`, `id_editor`, `nama_editor`, `status`, `date_created`, `date_uploaded`, `sts_task`) VALUES
(52, 'Test Status 1', 'Bryan', '123', 'uploads/paper/52 ', 13, 'Editor Baru', 1, '2020-05-12 19:09:22', NULL, 1),
(53, 'Test Status 2', 'Bryan', '123', 'uploads/paper/53 ', 13, 'Editor Baru', 2, '2020-05-12 19:09:42', NULL, 1),
(54, 'Test Status 3', 'Bryan', '123', 'uploads/paper/54 ', 13, 'Editor Baru', 3, '2020-05-12 19:10:11', NULL, 1),
(55, 'Test Status 4', 'Bryan', '123', 'uploads/paper/55 ', 13, 'Editor Baru', 4, '2020-05-12 19:10:30', NULL, 1),
(56, 'Test Status 5', 'Bryan', '123', 'uploads/paper/56 ', 13, 'Editor Baru', 5, '2020-05-12 19:10:51', NULL, 1),
(57, 'Test Status 6', 'Bryan', '123', 'uploads/paper/57 ', 13, 'Editor Baru', 6, '2020-05-12 19:11:15', NULL, 1),
(58, 'Test Status 7', 'Bryan', '123', 'uploads/paper/58 ', 13, 'Editor Baru', 7, '2020-05-12 19:11:35', NULL, 1),
(59, 'Test Status 8', 'Bryan', '123', 'uploads/paper/59 ', 13, 'Editor Baru', 8, '2020-05-12 19:11:58', NULL, 1),
(60, 'Test ID Editor', 'Bryan', '123', 'uploads/paper/60 ', 11, 'Editor', 1, '2020-05-13 02:43:28', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(256) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NULL DEFAULT NULL,
  `sts_user` tinyint(4) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama`, `email`, `date_created`, `date_updated`, `sts_user`) VALUES
(40, 'makelaar', '$2y$12$61Nca7JBV1Zs4BYQAYL1nO486TiNqT29TL00GVSXEo0TAQcCxm2um', 'Makelar', 'makelaar@gmail.com', '2020-05-10 07:39:38', NULL, 1),
(41, 'editor', '$2y$12$yLnTNbFJph1iI6a59r4kkOTN6yE8V5Suk/3RJ3x3251RmcyqR7Hw2', 'Editor', 'editor@gmail.com', '2020-05-10 07:39:55', NULL, 1),
(42, 'reviewer', '$2y$12$5VRdVB9BD.1Id1h/RlqfuuPxHhAJgzBczuj1fPyoBl6UFKoCKh8Oy', 'Reviewer', 'reviewer@gmail.com', '2020-05-10 07:40:11', NULL, 1),
(43, 'bryanyehuda', '$2y$12$FnyBZ8b3fM.T2UcaZxiLSu/IbJP7GqnuA.fl1uI7052VS8k0B15gq', 'Bryan Yehuda Mannuel', 'bryanyehuda@gmail.com', '2020-05-11 15:04:34', NULL, 1),
(44, 'reviewer2', '$2y$12$HGqBO8QDFwr/4ZNCfs7sd.VMbMJ/I6TytY3e0O3Fk9QqZ3PSpf.G.', 'Reviewer Kedua', 'kedua@gmail.com', '2020-05-12 08:33:18', NULL, 1),
(45, 'baru', '$2y$12$zHHNyGTktcUKGRNjnPQjveNIfx9eSQ2dJTbFQsL3zBYDgT9yt82HG', 'Editor Baru', 'baru@gmail.com', '2020-05-12 18:48:42', NULL, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
