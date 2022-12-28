<?php 
session_start();
	if (!isset($_SESSION['admin'])) {
	  header("Location: dang_nhap.php");
	}


	// Lấy các dữ liệu được chuyển sang
	$id = $_POST['txtID'];
	$ten_loai_sp=$_POST['txtTenLoaiSanPham'];
	$so_luong=$_POST['txtSoLuong'];



		$sql="
			UPDATE `tbl_loai_sp` 
			SET `lsp_ten` = '".$ten_loai_sp."', `lsp_so_luong` = '".$so_luong."'
			 WHERE `tbl_loai_sp`.`lsp_id` = '".$id."'; 
		";


	// Kết nối đến CSDL
	require('../config/dbconfig.php');

	// Thực hiện thêm mới dữ liệu
	mysqli_query($ketnoi, $sql);

	// Thực hiện thông báo cho mọi người biết các bạn thêm mới thành công
;?>
<script type="text/javascript">
	window.alert("Cập nhật dữ liệu thành công!");
	window.location.href = "quan_tri_loai_san_pham.php";
</script>