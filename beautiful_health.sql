-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2022 at 05:30 PM
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
-- Database: `beautiful_health`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_khach_hang`
--

CREATE TABLE `tbl_khach_hang` (
  `id_khach_hang` int(11) NOT NULL,
  `ten_khach_hang` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sđt` varchar(50) NOT NULL,
  `dia_chi` text NOT NULL,
  `so_luong` int(11) NOT NULL,
  `tong_tien` int(11) NOT NULL,
  `trang_thai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_khach_hang`
--

INSERT INTO `tbl_khach_hang` (`id_khach_hang`, `ten_khach_hang`, `email`, `sđt`, `dia_chi`, `so_luong`, `tong_tien`, `trang_thai`) VALUES
(1, 'Nguyễn Thị Hoa', 'hoa123@gmail.com', '0385401073', 'Đống Đa Hà Nội', 48, 90000, 3),
(2, 'Nguyễn Thị Hằng', 'hang123@gmail.com', '0384062956', 'Nguyễn Xiển Hà Nội', 6, 26000, 96),
(3, 'Phùng Thị Thu Hiền', 'thuhien123@gmail.com', '0375835582', 'Phùng khoang Hà Nội', 79, 45000, 8),
(4, 'Nguyễn Thị Dương', 'duong123@gmail.com', '0645284756', 'Nhổm Hà Nội', 59, 39000, 8),
(5, 'Nguyễn Văn Lộc', 'loc123@gmail.com', '0475637835', 'Quảng Ninh', 80, 38000, 39),
(6, 'Nguyễn Thị Hiệp', 'hiep123@gmail.com', '0364736763', 'Hải Dương', 48, 987000, 50),
(7, 'Nguyễn Như Bảo', 'bao123@gmail.com', '03648368254', 'Nghệ An', 73, 39000, 75),
(8, 'Trần Nhật Huy', 'nhathuy123@gmail.com', '0364826946', 'Ninh Bình', 46, 736000, 38),
(9, 'Đoàn Lê Nam', 'Nam123@gmail.com', '0365738947', 'Sapa', 57, 364000, 67);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nguoi_dung`
--

CREATE TABLE `tbl_nguoi_dung` (
  `id_nguoi_dung` int(11) NOT NULL,
  `ten_nguoi_dung` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dien_thoai` varchar(50) NOT NULL,
  `mat_khau` varchar(50) NOT NULL,
  `chuc_vu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_nguoi_dung`
--

INSERT INTO `tbl_nguoi_dung` (`id_nguoi_dung`, `ten_nguoi_dung`, `email`, `dien_thoai`, `mat_khau`, `chuc_vu`) VALUES
(1, 'Bùi Thùy Chi', 'thuychi123@gmail.com', '0384503087', '123456', 'QTV'),
(2, 'Đặng Thị Thảo', 'thao123@gmail.com', '0383406097', '123456', 'QTV'),
(3, 'Nguyễn Thị Mai Linh', 'mailinh123@gmail.com', '0186402075', '123456', 'QTV'),
(4, 'Nguyễn Thị Trang', 'trang123@gmail.com', '0395401974', '123456', 'QTV'),
(5, 'Cao Tuấn Long', 'tuanlong123@gmail.com', '0274406082', '123456', 'QTV');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_khach_hang`
--
ALTER TABLE `tbl_khach_hang`
  ADD PRIMARY KEY (`id_khach_hang`);

--
-- Indexes for table `tbl_nguoi_dung`
--
ALTER TABLE `tbl_nguoi_dung`
  ADD PRIMARY KEY (`id_nguoi_dung`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_khach_hang`
--
ALTER TABLE `tbl_khach_hang`
  MODIFY `id_khach_hang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_nguoi_dung`
--
ALTER TABLE `tbl_nguoi_dung`
  MODIFY `id_nguoi_dung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
