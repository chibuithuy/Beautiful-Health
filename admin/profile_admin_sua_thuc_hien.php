<?php 
	session_start();
	if (!isset($_SESSION['admin'])) {
	  header("Location: dang_nhap.php");
	}

	// Lấy các dữ liệu bên trang Thêm mới bài viết
	$id=$_POST['txtID'];
	$ten_admin=$_POST['txtHoTen'];
	$email=$_POST['txtEmail'];
	$dien_thoai=$_POST['txtDienThoai'];
	$mat_khau=$_POST['txtMatKhau'];
// Đẩy FILE lên SERVER
	
		$sql="
			UPDATE `tbl_admin` 
			SET `admin_ten_dang_nhap` = '".$ten_admin."',`admin_mat_khau`='".$mat_khau."', `admin_email` = '".$email."',`admin_dien_thoai` = '".$dien_thoai."'
			 WHERE `tbl_admin`.`admin_id` = '".$id."'; 
		";	

	include('../config/dbconfig.php');
	mysqli_set_charset($ketnoi, 'UTF8');


	
	//test xem câu sql có chạy đc ko

	//echo $sql; exit();

	// Cho thực thi câu lệnh SQL trên
	mysqli_query($ketnoi, $sql);

	echo '
	<script type="text/javascript">
			alert("Cập nhật thông tin tài khoản thành công!!!");
			window.location.href="profile_admin.php";
		</script>
		';
;?>