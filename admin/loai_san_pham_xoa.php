<?php 
  session_start();
  if (!isset($_SESSION['admin'])) {
    header("Location: dang_nhap.php");
  }

  // Lấyid từ trên đường dẫn
  $id = $_GET['lsp_id'];

  // Xóa bài viết có id trong bảng tbl_tainghe
  // Bước 1: Kết nối đến CSDL 
  include("../config/dbconfig.php");


  // Bước 2: Xóa dữ liệu trong bảng Tin tức   
  $sql = "DELETE FROM `tbl_loai_sp` WHERE `lsp_id` = '".$id."'";

  // Xem câu lệnh SQL viết có đúng hay không?
  // echo $sql;

  // Cho thực thi câu lệnh SQL trên
  mysqli_query($ketnoi, $sql);
  echo '
    <script type="text/javascript">
      alert("Xóa khách sạn thành công!!!");
      window.location.href="quan_tri_loai_san_pham.php";
    </script>';
;?>