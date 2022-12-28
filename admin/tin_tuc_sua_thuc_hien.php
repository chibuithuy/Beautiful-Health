<?php 
session_start();
	if (!isset($_SESSION['admin'])) {
	  header("Location: dang_nhap.php");
	}


	// Lấy các dữ liệu được chuyển sang
	$id = $_POST['txtID'];
	$tieude=$_POST['txtTieuDe'];
	$mo_ta=$_POST['txtMota'];



	// Đẩy FILE lên SERVER
	$noi_dat_file_anh_minh_hoa = "img/".basename($_FILES['txtAnhMinhHoa']['name']);
	$file_du_lieu_anh = $_FILES['txtAnhMinhHoa']['tmp_name'];
	$tai_anh_len_he_thong = move_uploaded_file($file_du_lieu_anh, $noi_dat_file_anh_minh_hoa);
	if (!$tai_anh_len_he_thong) {
		$anh_minh_hoa=NULL;
		$sql="
			UPDATE `tbl_tin_tuc` 
			SET `tt_tieu_de` = '".$tieude."', `tt_mo_ta` = '".$mo_ta."'
			 WHERE `tbl_tin_tuc`.`tt_id` = '".$id."'; 
		";

	} else {
		$anh_minh_hoa=$_FILES['txtAnhMinhHoa']['name'];
		$sql="
			UPDATE `tbl_tin_tuc` 
			SET `tt_tieu_de` = '".$tieude."', `tt_anh` = '".$anh_minh_hoa."', `tt_mo_ta` = '".$mo_ta."' WHERE `tbl_tin_tuc`.`tt_id` = '".$id."'; 
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
	window.location.href = "quan_tri_tin_tuc.php";
</script>