<?php
$hoTen = $_POST['kh_ho_ten'];
$email = $_POST['kh_email'];
$dienThoai= $_POST['kh_dien_thoai'];
$tinNhan = $_POST['kh_tin_nhan'];
?>
<?php
include('config.php');
if($conn-> connect_error) {
  die("connection failed: " . $conn->connect_error);
}
$sql="INSERT INTO `tbl_khach_hang_lien_he`(`kh_ho_ten`, `kh_email`, `kh_tin_nhan`, `kh_dien_thoai`) 
VALUES ('".$hoTen."','".$email."','".$tinNhan."','".$dienThoai."')";
if($conn->query($sql)){
  echo "liên hệ thành công";
}
echo "
            <script type='text/javascript'>
                window.alert('Bạn đã đăng nhập thành công');
                window.location.href='index.php';
            </script>";
?>