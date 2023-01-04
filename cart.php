<!-- ket noi-->
<?php
$host = "localhost";
$dbname = "beautiful_health";
$dbusername = "root";
$dbpassword = "";
$ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
?>

<?php
$action = (isset($_GET['action'])) ? $_GET['action'] : 'add';
$quantity = (isset($_GET['quantity'])) ? $_GET['quantity'] : 1;

if (isset($_GET['id'])) {
  $sp_id = $_GET['id'] ;
} else {
  $sp_id = 1;
}
$sql =  " SELECT * FROM tbl_san_pham  
   WHERE sp_id = " . $sp_id;

  // 3. Thực thi câu lệnh lấy dữ liệu mong muốn
  $sp_mo_ta = mysqli_query($ketnoi, $sql);

// 4. Hiển thị ra dữ liệu mà các bạn vừa lấy
if ($sp_mo_ta) {
  $row = mysqli_fetch_array($sp_mo_ta);
}
//5. Giu o gio hang 
$muc =
  [
    'sp_id' => $row['sp_id'],
    'sp_ten' => $row['sp_ten'],
    'sp_so_luong' => $row['sp_so_luong'],
    'sp_gia_tien' => $row['sp_gia_tien'],
    'sp_anh' => $row['sp_anh'],
    'quantity' => $quantity,
  ];
if (isset($_SESSION['gio_hang'][$sp_id]))
 {
  $_SESSION['gio_hang'][$sp_id]['quantity'] = 1;
 }
 else 
 {
  $_SESSION['gio_hang'][$sp_id] = $muc;
 }
if ($action == 'delete')
{
  unset($_SESSION['gio_hang'][$sp_id]);
}; ?>