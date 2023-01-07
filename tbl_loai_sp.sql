-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2023 at 04:22 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beautiful-health`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_loai_sp`
--

CREATE TABLE `tbl_loai_sp` (
  `lsp_id` int(11) NOT NULL,
  `lsp_ten` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `lsp_so_luong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_loai_sp`
--

INSERT INTO `tbl_loai_sp` (`lsp_id`, `lsp_ten`, `lsp_so_luong`) VALUES
(1, 'Hạt ', 240),
(2, 'Tinh bột', 200),
(3, 'Trà', 90),
(4, 'Bánh', 400),
(5, 'Gia vị', 300);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_loai_sp`
--
ALTER TABLE `tbl_loai_sp`
  ADD PRIMARY KEY (`lsp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_loai_sp`
--
ALTER TABLE `tbl_loai_sp`
  MODIFY `lsp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
