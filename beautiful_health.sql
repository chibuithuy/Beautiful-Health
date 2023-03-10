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
(1, 1, 1, '2022-12-21 16:00:36', 300000, NULL, 'Th??nh c??ng', 1);

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
(1, 'Cao Tu???n Long', 'H?? N???i', '0385253028', 'caotuanlong28@gmail.com', 213564346, 'th???NG l???n n??y bom h??ng');

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
(1, 'H???t s???y', 240),
(2, 'M??? rau c???', 200),
(3, 'Tr??', 90),
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
(1, 'H???t macca s???y', 60, 'H???p', 300000, 1, 'S???n ph???m cung c???p ?????y ????? dinh d?????ng c?? l???i cho s???c kh???e, m???i ?????i t?????ng ?????u c?? th??? s??? d???ng. ?????c bi???t l?? ng?????i ??n ki??ng, ??n th??, m??? b???u, gymer.', 'sp1.png'),
(2, 'H???t ??c ch?? s???y', 60, 'H???p', 250000, 1, 'Qu??? ??c ch?? gi??u protein, ch???t b??o c?? l???i nh?? axit b??o omega 3, ch???t x?? c??ng nhi???u ch???t dinh d?????ng v?? kho??ng ch???t kh??c mang l???i v?? s??? l???i ??ch cho s???c kh???e.', 'sp2.png'),
(3, 'H???t H???nh Nh??n S???y M???c  ', 60, 'H???p', 300000, 1, 'S???n ph???m cung c???p ?????y ????? dinh d?????ng c?? l???i cho s???c kh???e, m???i ?????i t?????ng ?????u c?? th??? s??? d???ng. ?????c bi???t l?? ng?????i ??n ki??ng, ??n th??, m??? b???u, gymer.', 'hat3.png'),
(4, 'H???t ??i???u s???y m???', 60, 'H???p', 300000, 1, 'S???n ph???m cung c???p ?????y ????? dinh d?????ng c?? l???i cho s???c kh???e, m???i ?????i t?????ng ?????u c?? th??? s??? d???ng. ?????c bi???t l?? ng?????i ??n ki??ng, ??n th??, m??? b???u, gymer.', 'hat8.png'),
(5, 'M??? Ch?? Rau C??? 4 V??? ', 100, 'T??i', 80000, 2, 'Ch??? c???n ninh m???t ch??t s?????n v?? v???i 1 v???t m??, c??? nh?? c?? b???a s??ng ngon l??nh, ?????y ????? dinh d?????ng.', 'mi4.png'),
(6, 'M??? Ch?? Rau C??? 6 V???', 100, 'T??i', 100000, 2, 'Ch??? c???n ninh m???t ch??t s?????n v?? v???i 1 v???t m??, c??? nh?? c?? b???a s??ng ngon l??nh, ?????y ????? dinh d?????ng.', 'mi6.png'),
(7, 'Tr?? Hoa C??c', 30, 'H???p', 60000, 3, 'B???n c?? u???ng ????? 2L n?????c m???i ng??y? Tr?? hoa c??c c???a ch??ng t??i s??? gi??p b???n ??i???u ????', 'tra1.png'),
(8, 'Tr?? G???o L???t ', 30, 'H???p', 60000, 3, 'B???n c?? u???ng ????? 2L n?????c m???i ng??y? Tr?? g???o l???t c???a ch??ng t??i s??? gi??p b???n ??i???u ????', 'tra4.png'),
(9, 'Tr?? G???o L???t Hoa C??c', 30, 'H???p', 70000, 3, 'B???n c?? u???ng ????? 2L n?????c m???i ng??y? Tr?? hoa c??c g???o l???t  c???a ch??ng t??i s??? gi??p b???n ??i???u ????', 'tra6.png'),
(10, 'Granola si??u h???t 500gram', 100, 'H???p', 200000, 4, 'Ch??? v???i 1 ph??t b???n ???? c?? b???a ??n s??ng th??ng minh, dinh d?????ng.', 'sieuhat.png'),
(11, 'Granola V??? Vani 500g', 100, 'H???p', 180000, 4, 'Ch??? v???i 1 ph??t b???n ???? c?? b???a ??n s??ng th??ng minh, dinh d?????ng.', 'vani2.png'),
(12, 'Granola V??? Matcha 500g', 100, 'H???p', 230000, 4, 'Ch??? v???i 1 ph??t b???n ???? c?? b???a ??n s??ng th??ng minh, dinh d?????ng.', 'mcha2.png'),
(13, 'Granola V??? Chocolate 500g', 100, 'H???p', 230000, 4, 'Ch??? v???i 1 ph??t b???n ???? c?? b???a ??n s??ng th??ng minh, dinh d?????ng.', 'cho3.png');

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
(1, 'Healthy l?? g??? Ch??? ????? ??n healthy v?? c??ng d???ng cho s???c kh???e', ' ', 'Theo t??? ch???c Y t??? Th??? gi???i (WHO) m???t ch??? ????? ??n healthy n??n c?? s??? ??a d???ng v?? ?????y ????? c??c ch???t bao g???m c??? tinh b???t, natri, ???????ng, ch???t x??, hay ch???t kho??ng t??? rau, c???, tr??i c??y, ng?? c???c nguy??n h???t,??? ????y c??ng l?? nh???ng nh??m th???c ph???m l??nh m???nh cung c???p dinh d?????ng nu??i s???ng c?? th??? v?? b???o v??? ch???ng l???i b???nh t???t trong khi v???n duy tr?? m???c ti??u gi???m c??n b???ng c??ch ti???t gi???m t???i ??u l?????ng calo. Healthy diet c??ng g??p ph???n l??m gi???m nguy c?? m???c b???nh tim v?? c???i thi???n t??nh tr???ng s???c kh???e th??? ch???t v?? tinh th???n.', 'healthy.png', '2022-12-28 09:28:59', 0, 0);

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
