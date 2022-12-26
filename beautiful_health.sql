-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 26, 2022 lúc 05:23 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `beautiful_health`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_chi_tiet_don_hang`
--

CREATE TABLE `tbl_chi_tiet_don_hang` (
  `id_don_hang` int(11) NOT NULL,
  `id_san_pham` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `don_gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_chi_tiet_don_hang`
--

INSERT INTO `tbl_chi_tiet_don_hang` (`id_don_hang`, `id_san_pham`, `so_luong`, `don_gia`) VALUES
(1, 1, 2, 100),
(1, 2, 1, 100),
(2, 4, 1, 200),
(3, 2, 2, 100),
(3, 3, 1, 200),
(4, 5, 1, 100),
(5, 6, 1, 150),
(6, 2, 3, 100),
(6, 7, 2, 50),
(7, 2, 3, 100),
(7, 7, 3, 50),
(8, 7, 3, 50);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_don_hang`
--

CREATE TABLE `tbl_don_hang` (
  `id_don_hang` int(11) NOT NULL,
  `id_khach_hang` int(11) NOT NULL,
  `ngay_ban` date NOT NULL,
  `giam_gia` int(11) DEFAULT NULL,
  `tong_tien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_don_hang`
--

INSERT INTO `tbl_don_hang` (`id_don_hang`, `id_khach_hang`, `ngay_ban`, `giam_gia`, `tong_tien`) VALUES
(1, 1, '2022-12-07', NULL, 200),
(2, 1, '2022-12-04', NULL, 200),
(3, 3, '2022-11-16', NULL, 400),
(4, 4, '2022-12-17', NULL, 100),
(5, 2, '2022-12-03', NULL, 150),
(6, 5, '2022-12-10', NULL, 400),
(7, 2, '2022-12-03', NULL, 450),
(8, 6, '2022-12-09', NULL, 150),
(9, 6, '2022-12-04', NULL, 250),
(10, 7, '2022-12-01', NULL, 450),
(11, 8, '2022-12-04', NULL, 500),
(12, 9, '2022-11-19', NULL, 600);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_chi_tiet_don_hang`
--
ALTER TABLE `tbl_chi_tiet_don_hang`
  ADD PRIMARY KEY (`id_don_hang`,`id_san_pham`);

--
-- Chỉ mục cho bảng `tbl_don_hang`
--
ALTER TABLE `tbl_don_hang`
  ADD PRIMARY KEY (`id_don_hang`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_don_hang`
--
ALTER TABLE `tbl_don_hang`
  MODIFY `id_don_hang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
