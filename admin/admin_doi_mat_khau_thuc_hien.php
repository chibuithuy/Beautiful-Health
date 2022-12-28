<?php
	// Lấy các dữ liệu được chuyển sang
	$old_password=$_POST['txtOldPassword'];
	$password=$_POST['txtPassword'];
	$repassword=$_POST['txtRePassword'];
	// Kết nối đến CSDL
	require('../config/dbconfig.php');
	$id=$_POST['txtID'];
	// Kiểm tra xem Username & Password có khớp với thông tin lưu trong CSDL hay không?
	$sql = "
		UPDATE `tbl_admin` SET 
			`admin_mat_khau`=$password
		WHERE `admin_id` = ".$id
		;

	$sql1="select * from tbl_admin";

	$admin=mysqli_query($ketnoi,$sql1);
	$row=mysqli_fetch_array($admin);
	// echo $sql; exit();

	
	

	if($password != $repassword) { ;?>
		<script type="text/javascript">
			window.alert("Các mật khẩu bạn đã nhập không khớp, vui lòng thử lại!");
			window.history.go(-1);
		</script>

<?php	}
	elseif($old_password!=$row['admin_mat_khau']){ ;?>
		<script type="text/javascript">
			window.alert("Mật khẩu cũ không đúng, vui lòng nhập lại ");
			window.history.go(-1);
		</script>
<?php 	}

    else{      
         mysqli_query($ketnoi, $sql);
		;?>
		<script type="text/javascript">
			window.alert("Bạn đã đổi mật khẩu thành công!! ");
			window.location.href="profile_admin.php";
		</script>

<?php } ;?>