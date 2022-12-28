<?php 
	session_start();
	if (!isset($_SESSION['admin'])) {
	  header("Location: dang_nhap.php");
	}

	// Lấy các dữ liệu bên trang Thêm mới bài viết
	$ten_dang_nhap = $_POST['txtTen'];
	$mat_khau = $_POST['txtPassword'];
	$ho_ten=$_POST['txtHoTen'];
	$dien_thoai=$_POST['txtDienThoai'];
	$email=$_POST['txtEmail'];

	// Chàn dữ liệu vào bảng tbl_tin_tuc
	// Bước 1: Kết nối đến CSDL 
	include("../config/dbconfig.php");
	$ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
	mysqli_set_charset($ketnoi, 'UTF8');

	// Bước 2: Chàn dữ liệu vào bảng Liên hệ
	$sql = "
	INSERT INTO `tbl_admin` (
		`admin_id`, 
		`admin_ten_dang_nhap`,
		`admin_mat_khau`,
		`admin_ho_ten`,
		`admin_dien_thoai`,
		`admin_email`,
		`admin_created`
		) 
	VALUES (
		NULL, 
		'".$ten_dang_nhap."',
		'".$mat_khau."',
		'".$ho_ten."',
		'".$dien_thoai."',
		'".$email."',
		current_timestamp()
					)";
					
	
	// Xem câu lệnh SQL viết có đúng hay không?
	// echo $sql;

	// Cho thực thi câu lệnh SQL trên
	mysqli_query($ketnoi, $sql);
	echo '
		<script type="text/javascript">
			alert("Thêm mới người dùng thành công!!!");
			window.location.href="quan_tri_admin.php";
		</script>';
;?>