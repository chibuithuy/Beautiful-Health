-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2023 at 06:00 PM
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
(1, 'hạt sấy', 100),
(2, 'Mỳ rau củ', 200),
(3, 'Trà', 60),
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
(1, 'Hạt macca sấy', 1, 'Hộp', 300000, 1, 'abc', 'sp1.png'),
(2, 'Hạt óc chó sấy', 50, 'hộp', 280000, 1, 'ngon', 'sp2.png'),
(8, 'Mỳ Chũ Rau Củ 4 Vị Wise Food 1Kg Ăn Kiêng Eat Clean Không Phẩm Màu, Không Chất Bảo Quản, Phụ Gia', 100, 'túi', 80000, 0, 'Mỳ được tráng và phơi theo phương pháp thủ công truyền thống, không làm công nghiệp. \r\nChỉ cần ninh một chút sườn và với 1 vắt mì, cả nhà có bữa sáng ngon lành, đầy đủ dinh dưỡng. Ngoài ra nhúng lẩu, xào...cũng rất ngon.\r\nThành phần: gạo, gấc, nghệ, đậu biếc, củ dền\r\n\r\n- Nguyên liệu Organic, không phẩm màu, không chất bảo quản và phụ gia\r\nThông tin dinh dưỡng/100Gr: Calories: 109\r\n\r\n', 'mi4.png'),
(9, 'Mỳ Chũ Rau Củ 6 Vị Wise Food 1Kg Ăn Kiêng Eat Clean Không Phẩm Màu, Không Chất Bảo Quản, Phụ Gia', 100, 'kg', 90000, 0, 'Mỳ được tráng và phơi theo phương pháp thủ công truyền thống, không làm công nghiệp. \r\nhỉ cần ninh một chút sườn và với 1 vắt mì, cả nhà có bữa sáng ngon lành, đầy đủ dinh dưỡng. Ngoài ra nhúng lẩu, xào...cũng rất ngon.\r\nhành phần: gồm: gạo, gấc, mè, nghệ, đậu biếc, khoai lang tím, củ dền đỏ, trắng, chùm ngây\r\n\r\n- Nguyên liệu Organic, không phẩm màu, không chất bảo quản và phụ gia.\r\nThông tin dinh dưỡng/100Gr: Calories: 109', 'mi6.png'),
(10, 'Hạt Hạnh Nhân Sấy Mộc 500g ', 20, 'gam', 200000, 1, 'Nguyên liệu 100% từ thiên nhiên\r\nHạt luôn được đóng gói trong hộp pet có nắp giật tiện lợi, bảo quản hạt ở điều kiện tốt nhất, giữ cho hạt thơm ngon\r\nSản phẩm cung cấp đầy đủ dinh dưỡng có lợi cho sức khỏe, mọi đối tượng đều có thể sử dụng. Đặc biệt là người ăn kiêng, ăn thô, mẹ bầu, gymer.\r\nSản phẩm hạnh nhân sấy mộc Wise Food 100% từ thiên nhiên, không sử dụng chất bảo quản, gia vị.\r\n- Hạnh nhân đã tách vỏ và sấy mộc, có thể ăn trực tiếp\r\n- Hạn sử dụng: 6 tháng kể từ ngày sản xuất\r\n- Hỗ trợ đổ', 'hat3.png'),
(11, 'Hạt điều sấy mộc 500g', 20, 'gam', 150000, 1, 'Hạt Điều sữa sấy mộc Wise Food chất lượng cao, hạt Điều Bình Phước Việt Nam 500g\r\nHạn sử dụng: 6 tháng kể từ ngày sản xuất\r\nHỗ trợ đổi trả hàng trong vòng 7 ngày nếu có lỗi từ nhà sản xuất.', 'hat8.png'),
(12, 'Trà Gạo Lứt Hoa Cúc', 20, 'gam', 180000, 0, 'Bạn có uống đủ 2L nước mỗi ngày? Trà gạo lứt của chúng tôi sẽ giúp bạn điều đó.\r\nHSD: 24 tháng kể từ NSX\r\n- Thành phần: Gạo lứt rang, hoa cúc, đậu đen xanh lòng, đậu đỏ, cỏ ngọt, hoa nhài\r\n- Nguyên liệu Organic, không chất bảo quản và phụ gia\r\n- Sản phẩm đạt chứng chỉ ISO 22000:2018', 'tra6.png'),
(13, 'Trà Gạo Lứt ', 20, 'gam', 150000, 0, 'HSD: 24 tháng kể từ NSX\r\n- Thành phần: Gạo lứt rang, đậu đen xanh lòng, đậu đỏ, cỏ ngọt, hoa nhài\r\n- Nguyên liệu Organic, không chất bảo quản và phụ gia\r\n- Sản phẩm đạt chứng chỉ ISO 22000:2018', 'tra4.png'),
(14, 'Trà Hoa Cúc', 20, 'gam', 150000, 0, 'HSD: 24 tháng kể từ NSX\r\n- Thành phần: Gạo hoa cúc, đậu đen xanh lòng, đậu đỏ, cỏ ngọt, hoa nhài\r\n- Nguyên liệu Organic, không chất bảo quản và phụ gia\r\n- Sản phẩm đạt chứng chỉ ISO 22000:2018', 'tra1.png'),
(15, 'Granola siêu hạt 500gram', 100, 'gam', 180000, 0, 'Ngũ cốc dinh dưỡng dành cho người muốn: giảm cân, điều chỉnh chế độ ăn và vóc dáng, mẹ bầu trong và sau sinh, trẻ nhỏ.\r\n Mọi lứa tuổi đều có thể thêm Granola Siêu Hạt của WiseFood vào bữa ăn hàng ngày.\r\nChỉ với 1 phút bạn đã có bữa ăn sáng thông minh, dinh dưỡng.', 'sieuhat.png'),
(16, 'Granola Vị Matcha 500g', 100, 'gam', 180000, 0, 'Ngũ cốc dinh dưỡng dành cho người muốn: giảm cân, điều chỉnh chế độ ăn và vóc dáng, mẹ bầu trong và sau sinh, trẻ nhỏ.', 'mcha2.png'),
(17, 'Granola Vị Chocolate 500g', 100, 'gam', 180000, 0, 'Ngũ cốc dinh dưỡng dành cho người muốn: giảm cân, điều chỉnh chế độ ăn và vóc dáng, mẹ bầu trong và sau sinh, trẻ nhỏ.', 'cho3.png'),
(18, 'Granola Vị Vani 500g', 100, 'gam', 150000, 0, 'Chỉ với 1 phút bạn đã có bữa ăn sáng thông minh, dinh dưỡng.', 'vani2.png');

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
