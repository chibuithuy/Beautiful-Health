<?php 
session_start();
	if (!isset($_SESSION['admin'])) {
	  header("Location: dang_nhap.php");
	}


	// Lấy các dữ liệu được chuyển sang
	$id = $_POST['txtID'];
	$ghi_chu=$_POST['txtGhiChu'];

		$sql="
			UPDATE `tbl_khach_hang` 
			SET `kh_ghi_chu` = '".$ghi_chu."'
			 WHERE `tbl_khach_hang`.`kh_id` = '".$id."'; 
		";


	// Kết nối đến CSDL
	require('../config/dbconfig.php');

	// Thực hiện thêm mới dữ liệu
	mysqli_query($ketnoi, $sql);

	// Thực hiện thông báo cho mọi người biết các bạn thêm mới thành công
;?>
<script type="text/javascript">
	window.alert("Cập nhật dữ liệu thành công!");
	window.location.href = "quan_tri_khach_hang.php";
</script>