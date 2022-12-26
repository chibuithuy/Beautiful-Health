-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2022 at 04:52 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tbl_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `id_blog` int(11) NOT NULL,
  `tieu_de` varchar(50) NOT NULL,
  `mo_ta` varchar(200) NOT NULL,
  `noi_dung` varchar(500) NOT NULL,
  `anh_minh_hoa` varchar(200) DEFAULT NULL,
  `ngay_dang` timestamp NOT NULL DEFAULT current_timestamp(),
  `so_lan_doc` int(11) NOT NULL,
  `ghi_chu` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`id_blog`, `tieu_de`, `mo_ta`, `noi_dung`, `anh_minh_hoa`, `ngay_dang`, `so_lan_doc`, `ghi_chu`) VALUES
(1, 'Healthy là gì? Chế độ ăn healthy và công dụng cho ', 'abc', 'Bạn thường nghe nhiều về chế độ ăn healthy cùng những lợi ích to lớn mà cách ăn này mang lại. Tuy nhiên, bạn đã hiểu rõ chế độ ăn healthy là gì chưa? Beautiful-health tin rằng khi bạn đã nắm vững nguyên tắc xây dựng của chế độ ăn này, chắc chắn bạn sẽ có động lực và kế hoạch ăn uống hợp lý hơn. Hiểu được điều đó, bài viết dưới đây sẽ giải đáp và gợi ý cho bạn từ A-Z về chế độ ăn healthy này, cùng tham khảo nhé!', 'healthy.png', '2022-12-20 15:42:22', 0, 'abc'),
(2, '7 lợi ích của sữa hạt đối với sức khỏe, người đái ', 'abc', 'Các sản phẩm sữa hạt có thể chứa protein, canxi và nhiều vi chất cần thiết khác rất tốt cho nhiều nhóm đối tượng. Bên cạnh những lợi ích với sức khoẻ, người dùng cần lưu ý sử dụng sữa hạt đúng cách để không hiểu sai hoặc thổi phồng tác dụng.', 'sua.png', '2022-12-20 15:42:22', 0, 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
