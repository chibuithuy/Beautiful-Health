

<?php
	// Lấy các dữ liệu được chuyển sang
	$tieu_de=$_POST['txtTieuDe'];
	$mo_ta=$_POST['txtMoTa'];
	$noi_dung=$_POST['txtNoiDung'];
	$admin_id=$_POST['adminid'];


	// Đẩy FILE lên SERVER
	$noi_dat_file_anh_minh_hoa = "img/".basename($_FILES['txtAnhMinhHoa']['name']);
	$file_du_lieu_anh = $_FILES['txtAnhMinhHoa']['tmp_name'];
	$tai_anh_len_he_thong = move_uploaded_file($file_du_lieu_anh, $noi_dat_file_anh_minh_hoa);
	if (!$tai_anh_len_he_thong) {
		$anh_minh_hoa=NULL;
	} else {
		$anh_minh_hoa=$_FILES['txtAnhMinhHoa']['name'];
	}

	// Kết nối đến CSDL
	require('../config/dbconfig.php');
	 $ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
	// Truy vấn đến bảng dữ liệu
	$sql="
		INSERT INTO `tbl_tin_tuc` (`tt_id`, `tt_tieu_de`,`tt_mo_ta`,`tt_noi_dung`, `tt_anh`,  `tt_so_luot_xem`, `admin_id`, `tt_ngay_dang`) VALUES (NULL, '".$tieu_de."','".$mo_ta."','".$noi_dung."', '".$anh_minh_hoa."',  0, '".$admin_id."', current_timestamp())
	";
	
	// echo $sql; exit();

	// Thực hiện thêm mới dữ liệu
	mysqli_query($ketnoi, $sql);

	// Thực hiện thông báo cho mọi người biết các bạn thêm mới thành công
;?>
<script type="text/javascript">
	window.alert("Thêm mới dữ liệu thành công!");
	window.location.href = "quan_tri_tin_tuc.php";
</script>