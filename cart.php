<!-- ket noi-->


<?php
$action = (isset($_GET['action'])) ? $_GET['action'] : 'add';
$quantity = (isset($_GET['quantity'])) ? $_GET['quantity'] : 1;
include('config.php');
if (isset($_GET['id'])) {
  $sp_id = $_GET['id'];
  $sql =  " SELECT * FROM `tbl_san_pham`  WHERE `sp_id` = " . $sp_id;
  // 3. Thực thi câu lệnh lấy dữ liệu mong muốn
  $sp_mo_ta = mysqli_query($conn, $sql);

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
      'khuyen_mai' => $row['khuyen_mai'],
    ];
  if (isset($_SESSION['gio_hang'][$sp_id])) {
    //check request update thì tăng
    if (isset($_GET['update'])) {
      $_SESSION['gio_hang'][$sp_id]['quantity'] += 1;
    }
    //check request delete thì giảm
    if (isset($_GET['delete'])) {
      $_SESSION['gio_hang'][$sp_id]['quantity'] -= 1;
    }
  } else {
    $_SESSION['gio_hang'][$sp_id] = $muc;
  }
} 
if ($action == 'delete') {
  unset($_SESSION['gio_hang'][$sp_id]);
}
?>