-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2022 at 07:12 PM
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
(1, 'Healthy là gì? Chế độ ăn healthy và công dụng cho ', 'Chế ăn healthy', 'Bạn thường nghe nhiều về chế độ ăn healthy cùng những lợi ích to lớn mà cách ăn này mang lại. Tuy nhiên, bạn đã hiểu rõ chế độ ăn healthy là gì chưa? Beautiful-health tin rằng khi bạn đã nắm vững nguyên tắc xây dựng của chế độ ăn này, chắc chắn bạn sẽ có động lực và kế hoạch ăn uống hợp lý hơn. Hiểu được điều đó, bài viết dưới đây sẽ giải đáp và gợi ý cho bạn từ A-Z về chế độ ăn healthy này, cùng tham khảo nhé!', 'healthy.png', '2022-12-20 15:42:22', 297, ''),
(2, '7 lợi ích của sữa hạt đối với sức khỏe, người đái ', 'Lợi ích của sữa hạt', 'Các sản phẩm sữa hạt có thể chứa protein, canxi và nhiều vi chất cần thiết khác rất tốt cho nhiều nhóm đối tượng. Bên cạnh những lợi ích với sức khoẻ, người dùng cần lưu ý sử dụng sữa hạt đúng cách để không hiểu sai hoặc thổi phồng tác dụng.', 'sua.png', '2022-12-20 15:42:22', 434, ''),
(3, '12 lợi ích của phương pháp detox', 'Lợi ích của phương pháp detox', 'Nhiều người trải qua quá trình detox chia sẻ họ luôn cảm thấy tràn đầy năng lượng. Khi detox, bạn sẽ phải cắt giảm đường, caffein và chất béo, thay thế chúng bằng các loại hoa quả và rau xanh. Ở đó có chứa nguồn năng lượng tự nhiên dồi dào, và cung cấp đủ nước cho cơ thể.', 'detox.png', '2022-12-20 17:50:49', 59, NULL),
(4, 'DANH SÁCH 65 MÓN ĂN VẶT GIẢM CÂN LÀNH MẠNH, HIỆU Q', 'Danh sách món ăn vặt lành mạnh', 'Một số người cho rằng nếu muốn giảm cân thì chỉ nên ăn đủ 3 bữa chính trong ngày. Số khác lại cho rằng nên kết hợp với ăn vặt. Các chuyên gia dinh dưỡng nói rằng cố gắng giảm cân không có nghĩa là bạn phải từ bỏ hoàn toàn các bữa ăn nhẹ. Bởi, nếu biết ăn đúng cách và chọn thực phẩm lành mạnh thì bạn có thể giảm cân', 'blog4.png', '2022-12-20 17:50:49', 357, NULL),
(5, 'Những Món Ăn Vặt Giảm Cân Healthy Cho Các Nàng Thí', 'Món ăn vặt giảm cân', 'Hầu hết các món ăn vặt có hại cho sức khỏe đều gây nghiện. Thế nên cách giảm cân cho người hay ăn vặt hiệu quả nhất là lựa chọn các thực phẩm ăn vặt lành mạnh vừa giúp thỏa mãn sở thích, vừa giúp giảm cân hiệu quả. Vậy đó là các loại nào, hãy cùng với Ad tìm hiểu ngay sau đây nhé.', 'blog5.png', '2022-12-20 17:58:51', 444, NULL),
(6, 'Chế độ ăn eat clean là gì? Gợi ý thực đơn eat clea', 'Chế độ eat clean', 'Eat clean là gì? Đây là chế độ ăn ưu tiên thực phẩm tươi, lành và sạch, hạn chế thực phẩm chế biến sẵn. Eat clean không từ chối bất kỳ nhóm thực phẩm nào nhưng tập trung vào: ngũ cốc nguyên hạt, trái cây, rau, chất béo và protein với khẩu phần phù hợp.\r\n\r\nĂn eat clean là như thế nào? Chế độ ăn eat clean luôn khuyến khích mọi người sử dụng thực phẩm toàn phần (thực phẩm không qua chế biến hoặc chế biến ít) để nhận được giá trị dinh dưỡng cao nhất. Nếu kiểm soát được thành phần và khẩu phần thực đ', 'blog6.png', '2022-12-20 17:58:51', 347, NULL),
(7, 'Gợi ý cách thực hiện chế độ ăn tập gym giảm cân ch', 'Chế độ ăn tập gym', 'Dinh dưỡng là một trong những yếu tố cực kỳ quan trọng trong quá trình tập gym, đặc biệt là đối với giảm cân. Điều bạn cần ưu tiên khi xây dựng chế độ ăn cho quá trình này là bữa ăn trước và sau tập. Bởi đây là hai bữa ăn sẽ có tác động rất nhiều đến với nỗ lực của bạn.\r\n\r\nTránh nhịn ăn trước khi tập vì khi đó cơ thể sẽ chuyển hóa các mô cơ thành năng lượng, điều này sẽ khiến bạn dễ mất sức, chóng mệt, có thể dẫn đến chóng mặt, nhức đầu và kết quả của quá trình giảm cân không ưng ý.', 'blog7.png', '2022-12-20 17:58:51', 453, NULL),
(8, '9 nguyên tắc cần lưu ý khi theo chế độ ăn healthy', 'Nguyên tắc khi theo chế độ ăn healthy', 'Chế độ ăn healthy là 1 chế độ ăn uống lành mạnh với đầy đủ các thành phần dưỡng chất cần thiết cho cơ thể như tinh bột, đường, chất xơ, khoáng chất,… Các nhóm thực phẩm được sử dụng trong chế độ ăn có xu hướng duy trì mục tiêu giảm cân, giảm lượng calo, giảm nguy cơ mắc các bệnh lý và cải thiện tình trạng sức khỏe.', 'blog8.png', '2022-12-20 17:58:51', 531, NULL);

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
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
