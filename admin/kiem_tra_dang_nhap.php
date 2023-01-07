<!DOCTYPE html>
<html>
<head>
	<title> Beautiful Health | Đăng nhập thực hiện</title>
</head>
<body>
	<?php
		// Lấy các dữ liệu bên trang Thêm mới bài viết
		$taikhoan = $_POST['txtUserName'];
		$matkhau = $_POST['txtPassword'];

		// Kết nối đến CSDL 
		include("../config/dbconfig.php");
	    $ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

		// Chèn dữ liệu vào bảng Liên hệ
		$sql = "
		SELECT *
		FROM `tbl_admin` 
		WHERE `admin_ten_dang_nhap` = '".$taikhoan."' AND `admin_mat_khau` = '".$matkhau."'
		";
		
		
		// Thực thi câu lệnh SQL trên
		$result = mysqli_query($ketnoi, $sql)->num_rows;

		if ($result == 0) { ;?>
			<script type="text/javascript">;
				alert("Tài khoản mật khẩu không chính xác");
			</script>;
			<?php
			header("Location: dang_nhap.php");
		} else { 
			session_start();
			$_SESSION['admin'] = $taikhoan;
			$_SESSION['quyen_han'] = '1';?>
			<script type="text/javascript">;
				alert("Bạn đã đăng nhập hệ thống thành công");
			</script>;
		<?php	
		header("Location: index.php");
		}
		;?>
	</body>
	</html>

