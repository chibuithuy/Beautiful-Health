-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 06, 2023 lúc 04:19 PM
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
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_ten_dang_nhap` varchar(200) NOT NULL,
  `admin_mat_khau` varchar(200) NOT NULL,
  `admin_ho_ten` varchar(50) NOT NULL,
  `admin_dien_thoai` varchar(200) DEFAULT NULL,
  `admin_email` varchar(50) DEFAULT NULL,
  `admin_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_ten_dang_nhap`, `admin_mat_khau`, `admin_ho_ten`, `admin_dien_thoai`, `admin_email`, `admin_created`) VALUES
(1, 'admin', '1', 'Long', '0385253022', 'caotuanlong28@gmail.com', '2022-12-28 11:25:33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_chi_tiet_hoa_don`
--

CREATE TABLE `tbl_chi_tiet_hoa_don` (
  `id_chi_tiet_hoa_don` int(20) NOT NULL,
  `id_hoa_don` int(20) NOT NULL,
  `sp_id` int(20) NOT NULL,
  `gia_ban` float NOT NULL,
  `so_luong` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_chi_tiet_hoa_don`
--

INSERT INTO `tbl_chi_tiet_hoa_don` (`id_chi_tiet_hoa_don`, `id_hoa_don`, `sp_id`, `gia_ban`, `so_luong`) VALUES
(1, 1, 11, 180000, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_hoa_don`
--

CREATE TABLE `tbl_hoa_don` (
  `id_hoa_don` int(20) NOT NULL,
  `ngay_hoa_don` date NOT NULL,
  `kh_id` int(20) NOT NULL,
  `tong_tien` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_hoa_don`
--

INSERT INTO `tbl_hoa_don` (`id_hoa_don`, `ngay_hoa_don`, `kh_id`, `tong_tien`) VALUES
(1, '2023-01-01', 1, 180000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_khach_hang`
--

CREATE TABLE `tbl_khach_hang` (
  `kh_id` int(11) NOT NULL,
  `kh_ho_ten` varchar(200) NOT NULL,
  `kh_dia_chi` varchar(200) NOT NULL,
  `kh_dien_thoai` varchar(20) NOT NULL,
  `kh_email` varchar(200) NOT NULL,
  `kh_cccd` int(20) NOT NULL,
  `kh_ghi_chu` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_khach_hang`
--

INSERT INTO `tbl_khach_hang` (`kh_id`, `kh_ho_ten`, `kh_dia_chi`, `kh_dien_thoai`, `kh_email`, `kh_cccd`, `kh_ghi_chu`) VALUES
(1, 'Cao Tuấn Long', 'Hà Nội', '0385253028', 'caotuanlong28@gmail.com', 213564346, 'thẰNG lồn này bom hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_khuyen_mai`
--

CREATE TABLE `tbl_khuyen_mai` (
  `khuyen_mai_id` int(11) NOT NULL,
  `giam_gia` int(155) NOT NULL,
  `thoi_han` datetime(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_khuyen_mai`
--

INSERT INTO `tbl_khuyen_mai` (`khuyen_mai_id`, `giam_gia`, `thoi_han`) VALUES
(0, 0, '2025-01-29 10:22:38.00000'),
(1, 15000, '2023-01-18 22:41:50.00000'),
(2, 30000, '2023-01-26 22:42:16.00000'),
(3, 25000, '2023-01-29 22:42:30.00000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_loai_sp`
--

CREATE TABLE `tbl_loai_sp` (
  `lsp_id` int(11) NOT NULL,
  `lsp_ten` varchar(200) NOT NULL,
  `lsp_so_luong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_loai_sp`
--

INSERT INTO `tbl_loai_sp` (`lsp_id`, `lsp_ten`, `lsp_so_luong`) VALUES
(1, 'Hạt sấy', 240),
(2, 'Mỳ rau củ', 200),
(3, 'Trà', 90),
(4, 'Granola', 400);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_san_pham`
--

CREATE TABLE `tbl_san_pham` (
  `sp_id` int(11) NOT NULL,
  `sp_ten` varchar(200) NOT NULL,
  `sp_so_luong` int(10) NOT NULL,
  `sp_don_vi` varchar(200) NOT NULL,
  `sp_gia_tien` int(20) NOT NULL,
  `lsp_id` int(11) NOT NULL,
  `sp_mo_ta` varchar(500) NOT NULL,
  `sp_anh` varchar(200) NOT NULL,
  `khuyen_mai_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_san_pham`
--

INSERT INTO `tbl_san_pham` (`sp_id`, `sp_ten`, `sp_so_luong`, `sp_don_vi`, `sp_gia_tien`, `lsp_id`, `sp_mo_ta`, `sp_anh`, `khuyen_mai_id`) VALUES
(1, 'Hạt macca sấy', 60, 'Hộp', 300000, 1, 'Sản phẩm cung cấp đầy đủ dinh dưỡng có lợi cho sức khỏe, mọi đối tượng đều có thể sử dụng. Đặc biệt là người ăn kiêng, ăn thô, mẹ bầu, gymer.', 'sp1.png', 0),
(2, 'Hạt óc chó sấy', 60, 'Hộp', 250000, 1, 'Quả óc chó giàu protein, chất béo có lợi như axit béo omega 3, chất xơ cùng nhiều chất dinh dưỡng và khoáng chất khác mang lại vô số lợi ích cho sức khỏe.', 'sp2.png', 0),
(3, 'Hạt Hạnh Nhân Sấy Mộc  ', 60, 'Hộp', 300000, 1, 'Sản phẩm cung cấp đầy đủ dinh dưỡng có lợi cho sức khỏe, mọi đối tượng đều có thể sử dụng. Đặc biệt là người ăn kiêng, ăn thô, mẹ bầu, gymer.', 'hat3.png', 1),
(4, 'Hạt điều sấy mộ', 60, 'Hộp', 300000, 1, 'Sản phẩm cung cấp đầy đủ dinh dưỡng có lợi cho sức khỏe, mọi đối tượng đều có thể sử dụng. Đặc biệt là người ăn kiêng, ăn thô, mẹ bầu, gymer.', 'hat8.png', 1),
(5, 'Mỳ Chũ Rau Củ 4 Vị ', 100, 'Túi', 80000, 2, 'Chỉ cần ninh một chút sườn và với 1 vắt mì, cả nhà có bữa sáng ngon lành, đầy đủ dinh dưỡng.', 'mi4.png', 1),
(6, 'Mỳ Chũ Rau Củ 6 Vị', 100, 'Túi', 100000, 2, 'Chỉ cần ninh một chút sườn và với 1 vắt mì, cả nhà có bữa sáng ngon lành, đầy đủ dinh dưỡng.', 'mi6.png', 1),
(7, 'Trà Hoa Cúc', 30, 'Hộp', 60000, 3, 'Bạn có uống đủ 2L nước mỗi ngày? Trà hoa cúc của chúng tôi sẽ giúp bạn điều đó', 'tra1.png', 1),
(8, 'Trà Gạo Lứt ', 30, 'Hộp', 60000, 3, 'Bạn có uống đủ 2L nước mỗi ngày? Trà gạo lứt của chúng tôi sẽ giúp bạn điều đó', 'tra4.png', 1),
(9, 'Trà Gạo Lứt Hoa Cúc', 30, 'Hộp', 70000, 3, 'Bạn có uống đủ 2L nước mỗi ngày? Trà hoa cúc gạo lứt  của chúng tôi sẽ giúp bạn điều đó', 'tra6.png', 1),
(10, 'Granola siêu hạt 500gram', 100, 'Hộp', 200000, 4, 'Chỉ với 1 phút bạn đã có bữa ăn sáng thông minh, dinh dưỡng.', 'sieuhat.png', 1),
(11, 'Granola Vị Vani 500g', 100, 'Hộp', 180000, 4, 'Chỉ với 1 phút bạn đã có bữa ăn sáng thông minh, dinh dưỡng.', 'vani2.png', 1),
(12, 'Granola Vị Matcha 500g', 100, 'Hộp', 230000, 4, 'Chỉ với 1 phút bạn đã có bữa ăn sáng thông minh, dinh dưỡng.', 'mcha2.png', 1),
(13, 'Granola Vị Chocolate 500g', 100, 'Hộp', 230000, 4, 'Chỉ với 1 phút bạn đã có bữa ăn sáng thông minh, dinh dưỡng.', 'cho3.png', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_tin_tuc`
--

CREATE TABLE `tbl_tin_tuc` (
  `tt_id` int(11) NOT NULL,
  `tt_tieu_de` varchar(200) NOT NULL,
  `tt_mo_ta` varchar(500) NOT NULL,
  `tt_noi_dung` varchar(500) NOT NULL,
  `tt_anh` varchar(200) NOT NULL,
  `tt_ngay_dang` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tt_so_luot_xem` int(15) DEFAULT 0,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_tin_tuc`
--

INSERT INTO `tbl_tin_tuc` (`tt_id`, `tt_tieu_de`, `tt_mo_ta`, `tt_noi_dung`, `tt_anh`, `tt_ngay_dang`, `tt_so_luot_xem`, `admin_id`) VALUES
(1, 'Healthy là gì? Chế độ ăn healthy và công dụng cho sức khỏe', ' ', 'Theo tổ chức Y tế Thế giới (WHO) một chế độ ăn healthy nên có sự đa dạng và đầy đủ các chất bao gồm cả tinh bột, natri, đường, chất xơ, hay chất khoáng từ rau, củ, trái cây, ngũ cốc nguyên hạt,… Đây cũng là những nhóm thực phẩm lành mạnh cung cấp dinh dưỡng nuôi sống cơ thể và bảo vệ chống lại bệnh tật trong khi vẫn duy trì mục tiêu giảm cân bằng cách tiết giảm tối ưu lượng calo. Healthy diet cũng góp phần làm giảm nguy cơ mắc bệnh tim và cải thiện tình trạng sức khỏe thể chất và tinh thần.', 'healthy.png', '2022-12-28 09:28:59', 0, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `tbl_chi_tiet_hoa_don`
--
ALTER TABLE `tbl_chi_tiet_hoa_don`
  ADD PRIMARY KEY (`id_chi_tiet_hoa_don`);

--
-- Chỉ mục cho bảng `tbl_hoa_don`
--
ALTER TABLE `tbl_hoa_don`
  ADD PRIMARY KEY (`id_hoa_don`);

--
-- Chỉ mục cho bảng `tbl_khach_hang`
--
ALTER TABLE `tbl_khach_hang`
  ADD PRIMARY KEY (`kh_id`);

--
-- Chỉ mục cho bảng `tbl_khuyen_mai`
--
ALTER TABLE `tbl_khuyen_mai`
  ADD PRIMARY KEY (`khuyen_mai_id`);

--
-- Chỉ mục cho bảng `tbl_loai_sp`
--
ALTER TABLE `tbl_loai_sp`
  ADD PRIMARY KEY (`lsp_id`);

--
-- Chỉ mục cho bảng `tbl_san_pham`
--
ALTER TABLE `tbl_san_pham`
  ADD PRIMARY KEY (`sp_id`);

--
-- Chỉ mục cho bảng `tbl_tin_tuc`
--
ALTER TABLE `tbl_tin_tuc`
  ADD PRIMARY KEY (`tt_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_khach_hang`
--
ALTER TABLE `tbl_khach_hang`
  MODIFY `kh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_loai_sp`
--
ALTER TABLE `tbl_loai_sp`
  MODIFY `lsp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_san_pham`
--
ALTER TABLE `tbl_san_pham`
  MODIFY `sp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `tbl_tin_tuc`
--
ALTER TABLE `tbl_tin_tuc`
  MODIFY `tt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
