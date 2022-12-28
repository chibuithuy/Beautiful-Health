

<?php
	// Lấy các dữ liệu được chuyển sang
	$ten_san_pham=$_POST['txtTenSanPham'];
	$mo_ta=$_POST['txtMoTa'];
	$so_luong=$_POST['txtSoLuong'];
	$don_vi=$_POST['txtDonVi'];
	$gia_tien=$_POST['txtGiaTien'];
	$lsp_id=$_POST['LoaiSPID'];

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
		INSERT INTO `tbl_san_pham` (`sp_id`, `sp_ten`, `sp_mo_ta`,`sp_so_luong`, `sp_don_vi`, `sp_gia_tien`, `sp_anh`, `lsp_id`) VALUES (NULL, '".$ten_san_pham."',  '".$mo_ta."', '".$so_luong."', '".$don_vi."', '".$gia_tien."', '".$anh_minh_hoa."', '".$lsp_id."')
	";
	
	// echo $sql; exit();

	// Thực hiện thêm mới dữ liệu
	mysqli_query($ketnoi, $sql);

	// Thực hiện thông báo cho mọi người biết các bạn thêm mới thành công
;?>
<script type="text/javascript">
	window.alert("Thêm mới dữ liệu thành công!");
	window.location.href = "san_pham_them_moi.php";
</script>