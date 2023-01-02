-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2023 at 10:49 AM
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
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_ten_dang_nhap` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `admin_mat_khau` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `admin_ho_ten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `admin_dien_thoai` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `admin_email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `admin_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_ten_dang_nhap`, `admin_mat_khau`, `admin_ho_ten`, `admin_dien_thoai`, `admin_email`, `admin_created`) VALUES
(1, 'admin', '1', 'Long', '0385253022', 'caotuanlong28@gmail.com', '2022-12-28 11:25:33');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chi_tiet_dat_hang`
--

CREATE TABLE `tbl_chi_tiet_dat_hang` (
  `dh_id` int(11) NOT NULL,
  `lsp_id` int(11) NOT NULL,
  `so_sp_moi_loai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_chi_tiet_dat_hang`
--

INSERT INTO `tbl_chi_tiet_dat_hang` (`dh_id`, `lsp_id`, `so_sp_moi_loai`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dat_hang`
--

CREATE TABLE `tbl_dat_hang` (
  `dh_id` int(11) NOT NULL,
  `kh_id` int(11) NOT NULL,
  `sp_id` int(11) NOT NULL,
  `dh_ngay_dat` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `dh_so_tien_phai_tra` int(11) NOT NULL,
  `dh_ghi_chu` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dh_trang_thai` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `lsp_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_dat_hang`
--

INSERT INTO `tbl_dat_hang` (`dh_id`, `kh_id`, `sp_id`, `dh_ngay_dat`, `dh_so_tien_phai_tra`, `dh_ghi_chu`, `dh_trang_thai`, `lsp_id`) VALUES
(1, 1, 1, '2022-12-21 16:00:36', 300000, NULL, 'Thành công', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_khach_hang`
--

CREATE TABLE `tbl_khach_hang` (
  `kh_id` int(11) NOT NULL,
  `kh_ho_ten` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `kh_dia_chi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `kh_dien_thoai` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `kh_email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `kh_cccd` int(20) NOT NULL,
  `kh_ghi_chu` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_khach_hang`
--

INSERT INTO `tbl_khach_hang` (`kh_id`, `kh_ho_ten`, `kh_dia_chi`, `kh_dien_thoai`, `kh_email`, `kh_cccd`, `kh_ghi_chu`) VALUES
(1, 'Cao Tuấn Long', 'Hà Nội', '0385253028', 'caotuanlong28@gmail.com', 213564346, 'thẰNG lồn này bom hàng');

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
(1, 'Hạt sấy', 240),
(2, 'Mỳ rau củ', 200),
(3, 'Trà', 90),
(4, 'Granola', 400);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_san_pham`
--

CREATE TABLE `tbl_san_pham` (
  `sp_id` int(11) NOT NULL,
  `sp_ten` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `sp_so_luong` int(10) NOT NULL,
  `sp_don_vi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `sp_gia_tien` int(20) NOT NULL,
  `lsp_id` int(11) NOT NULL,
  `sp_mo_ta` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `sp_anh` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_san_pham`
--

INSERT INTO `tbl_san_pham` (`sp_id`, `sp_ten`, `sp_so_luong`, `sp_don_vi`, `sp_gia_tien`, `lsp_id`, `sp_mo_ta`, `sp_anh`) VALUES
(1, 'Hạt macca sấy', 60, 'Hộp', 300000, 1, 'Sản phẩm cung cấp đầy đủ dinh dưỡng có lợi cho sức khỏe, mọi đối tượng đều có thể sử dụng. Đặc biệt là người ăn kiêng, ăn thô, mẹ bầu, gymer.', 'sp1.png'),
(2, 'Hạt óc chó sấy', 60, 'Hộp', 250000, 1, 'Quả óc chó giàu protein, chất béo có lợi như axit béo omega 3, chất xơ cùng nhiều chất dinh dưỡng và khoáng chất khác mang lại vô số lợi ích cho sức khỏe.', 'sp2.png'),
(3, 'Hạt Hạnh Nhân Sấy Mộc  ', 60, 'Hộp', 300000, 1, 'Sản phẩm cung cấp đầy đủ dinh dưỡng có lợi cho sức khỏe, mọi đối tượng đều có thể sử dụng. Đặc biệt là người ăn kiêng, ăn thô, mẹ bầu, gymer.', 'hat3.png'),
(4, 'Hạt điều sấy mộ', 60, 'Hộp', 300000, 1, 'Sản phẩm cung cấp đầy đủ dinh dưỡng có lợi cho sức khỏe, mọi đối tượng đều có thể sử dụng. Đặc biệt là người ăn kiêng, ăn thô, mẹ bầu, gymer.', 'hat8.png'),
(5, 'Mỳ Chũ Rau Củ 4 Vị ', 100, 'Túi', 80000, 2, 'Chỉ cần ninh một chút sườn và với 1 vắt mì, cả nhà có bữa sáng ngon lành, đầy đủ dinh dưỡng.', 'mi4.png'),
(6, 'Mỳ Chũ Rau Củ 6 Vị', 100, 'Túi', 100000, 2, 'Chỉ cần ninh một chút sườn và với 1 vắt mì, cả nhà có bữa sáng ngon lành, đầy đủ dinh dưỡng.', 'mi6.png'),
(7, 'Trà Hoa Cúc', 30, 'Hộp', 60000, 3, 'Bạn có uống đủ 2L nước mỗi ngày? Trà hoa cúc của chúng tôi sẽ giúp bạn điều đó', 'tra1.png'),
(8, 'Trà Gạo Lứt ', 30, 'Hộp', 60000, 3, 'Bạn có uống đủ 2L nước mỗi ngày? Trà gạo lứt của chúng tôi sẽ giúp bạn điều đó', 'tra4.png'),
(9, 'Trà Gạo Lứt Hoa Cúc', 30, 'Hộp', 70000, 3, 'Bạn có uống đủ 2L nước mỗi ngày? Trà hoa cúc gạo lứt  của chúng tôi sẽ giúp bạn điều đó', 'tra6.png'),
(10, 'Granola siêu hạt 500gram', 100, 'Hộp', 200000, 4, 'Chỉ với 1 phút bạn đã có bữa ăn sáng thông minh, dinh dưỡng.', 'sieuhat.png'),
(11, 'Granola Vị Vani 500g', 100, 'Hộp', 180000, 4, 'Chỉ với 1 phút bạn đã có bữa ăn sáng thông minh, dinh dưỡng.', 'vani2.png'),
(12, 'Granola Vị Matcha 500g', 100, 'Hộp', 230000, 4, 'Chỉ với 1 phút bạn đã có bữa ăn sáng thông minh, dinh dưỡng.', 'mcha2.png'),
(13, 'Granola Vị Chocolate 500g', 100, 'Hộp', 230000, 4, 'Chỉ với 1 phút bạn đã có bữa ăn sáng thông minh, dinh dưỡng.', 'cho3.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tin_tuc`
--

CREATE TABLE `tbl_tin_tuc` (
  `tt_id` int(11) NOT NULL,
  `tt_tieu_de` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `tt_mo_ta` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `tt_noi_dung` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `tt_anh` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `tt_ngay_dang` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tt_so_luot_xem` int(15) DEFAULT 0,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_tin_tuc`
--

INSERT INTO `tbl_tin_tuc` (`tt_id`, `tt_tieu_de`, `tt_mo_ta`, `tt_noi_dung`, `tt_anh`, `tt_ngay_dang`, `tt_so_luot_xem`, `admin_id`) VALUES
(1, 'Healthy là gì? Chế độ ăn healthy và công dụng cho sức khỏe', ' ', 'Theo tổ chức Y tế Thế giới (WHO) một chế độ ăn healthy nên có sự đa dạng và đầy đủ các chất bao gồm cả tinh bột, natri, đường, chất xơ, hay chất khoáng từ rau, củ, trái cây, ngũ cốc nguyên hạt,… Đây cũng là những nhóm thực phẩm lành mạnh cung cấp dinh dưỡng nuôi sống cơ thể và bảo vệ chống lại bệnh tật trong khi vẫn duy trì mục tiêu giảm cân bằng cách tiết giảm tối ưu lượng calo. Healthy diet cũng góp phần làm giảm nguy cơ mắc bệnh tim và cải thiện tình trạng sức khỏe thể chất và tinh thần.', 'healthy.png', '2022-12-28 09:28:59', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_dat_hang`
--
ALTER TABLE `tbl_dat_hang`
  ADD PRIMARY KEY (`dh_id`);

--
-- Indexes for table `tbl_khach_hang`
--
ALTER TABLE `tbl_khach_hang`
  ADD PRIMARY KEY (`kh_id`);

--
-- Indexes for table `tbl_loai_sp`
--
ALTER TABLE `tbl_loai_sp`
  ADD PRIMARY KEY (`lsp_id`);

--
-- Indexes for table `tbl_san_pham`
--
ALTER TABLE `tbl_san_pham`
  ADD PRIMARY KEY (`sp_id`);

--
-- Indexes for table `tbl_tin_tuc`
--
ALTER TABLE `tbl_tin_tuc`
  ADD PRIMARY KEY (`tt_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_dat_hang`
--
ALTER TABLE `tbl_dat_hang`
  MODIFY `dh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_khach_hang`
--
ALTER TABLE `tbl_khach_hang`
  MODIFY `kh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_loai_sp`
--
ALTER TABLE `tbl_loai_sp`
  MODIFY `lsp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_san_pham`
--
ALTER TABLE `tbl_san_pham`
  MODIFY `sp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_tin_tuc`
--
ALTER TABLE `tbl_tin_tuc`
  MODIFY `tt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
