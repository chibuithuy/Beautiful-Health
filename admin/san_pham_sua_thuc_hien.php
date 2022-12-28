<?php 
session_start();
	if (!isset($_SESSION['admin'])) {
	  header("Location: dang_nhap.php");
	}


	// Lấy các dữ liệu được chuyển sang
	$id = $_POST['txtID'];
	$ten_san_pham=$_POST['txtTenSanPham'];
	$mo_ta=$_POST['txtMoTa'];
	$so_luong=$_POST['txtSoLuong'];
	$don_vi=$_POST['txtDonVi'];
	$gia_tien=$_POST['txtGiaTien'];



	// Đẩy FILE lên SERVER
	$noi_dat_file_anh_minh_hoa = "img/".basename($_FILES['txtAnhMinhHoa']['name']);
	$file_du_lieu_anh = $_FILES['txtAnhMinhHoa']['tmp_name'];
	$tai_anh_len_he_thong = move_uploaded_file($file_du_lieu_anh, $noi_dat_file_anh_minh_hoa);
	if (!$tai_anh_len_he_thong) {
		$anh_minh_hoa=NULL;
		$sql="
			UPDATE `tbl_san_pham` 
			SET `sp_ten` = '".$ten_san_pham."', `sp_mo_ta` = '".$mo_ta."', `sp_anh` = '".$anh_minh_hoa."',`sp_so_luong` = ''".$so_luong."', `sp_don_vi` = '".$don_vi."', `sp_gia_tien` = '".$gia_tien."'
			 WHERE `tbl_san_pham`.`sp_id` = '".$id."'; 
		";

	} else {
		$anh_minh_hoa=$_FILES['txtAnhMinhHoa']['name'];
		$sql="
			UPDATE `tbl_san_pham` 
			SET `sp_ten` = '".$ten_san_pham."', `sp_mo_ta` = '".$mo_ta."', `sp_anh` = '".$anh_minh_hoa."',`sp_so_luong` = '".$so_luong."', `sp_don_vi` = '".$don_vi."', `sp_gia_tien` = '".$gia_tien."'
			 WHERE `tbl_san_pham`.`sp_id` = '".$id."'; 
		";
	}

	// Kết nối đến CSDL
	require('../config/dbconfig.php');

	// Thực hiện thêm mới dữ liệu
	mysqli_query($ketnoi, $sql);

	// Thực hiện thông báo cho mọi người biết các bạn thêm mới thành công
;?>
<script type="text/javascript">
	window.alert("Cập nhật dữ liệu thành công!");
	window.location.href = "quan_tri_san_pham.php";
</script>