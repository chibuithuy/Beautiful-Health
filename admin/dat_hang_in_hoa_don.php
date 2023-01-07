<?php 
  session_start();
  if (!isset($_SESSION['admin'])) {
      header("Location: dang_nhap.php");
  }
;?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="icon" href="images/dumbum.ico" type="image/ico" />
        <title> BeautyHealth | In hóa đơn</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/admin_style.css" >
        <script src="../resources/ckeditor/ckeditor.js"></script>
    </head>
    <body>
        <?php
            include("../config/dbconfig.php");
          $ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
          mysqli_set_charset($ketnoi, 'UTF8');
          $sql="SELECT tbl_dat_hang.*,tbl_loai_sp.*, tbl_san_pham.*, tbl_khach_hang.*,tbl_chi_tiet_dat_hang.so_sp_moi_loai FROM tbl_chi_tiet_dat_hang join tbl_loai_sp on tbl_chi_tiet_dat_hang.lsp_id=tbl_loai_sp.lsp_id join tbl_san_pham on tbl_chi_tiet_dat_hang.sp_id=tbl_san_pham.sp_id join tbl_khach_hang on tbl_chi_tiet_dat_hang.kh_id=tbl_khach_hang.kh_id join tbl_dat_hang on tbl_chi_tiet_dat_hang.dh_id=tbl_dat_hang.dh_id WHERE tbl_chi_tiet_dat_hang.dh_id =  " . $_GET['dh_id'];

          

            $dat_hang = mysqli_query($ketnoi, $sql);
            $row1 = mysqli_fetch_array($dat_hang);
        
        ?>
        <div style="border: 5px solid black;width: 700px;text-align: center; margin-left: 500px;margin-top: 100px;" id="dp-detail-wrapper">
            <div id="dp-detail">
                <h1>Chi tiết đơn đặt hàng</h1>
                <label>Người đặt: </label><span> <?= $row1['kh_ho_ten'] ?></span><br/><br/>
                <label>Điện thoại: </label><span> <?= $row1['kh_dien_thoai'] ?></span><br/><br/>
                <label>Địa chỉ: </label><span> <?= $row1['kh_dia_chi'] ?></span><br/><br/>
                <label>Địa chỉ email : </label><span> <?= $row1['kh_email'] ?></span><br/><br/>
                <hr/>
                <h3>Danh sách Sản Phẩm</h3>
                <ul style="list-style: none;">
                    <?php
                    $totalQuantity = 0;
                    $totalMoney = 0;
                    foreach ($dat_hang as $row) {
                        ?>
                        <li>
                            <span class="item-name"><?= $row['sp_ten'] ?></span>
                            <span class="item-quantity"> - SL: <?= $row['so_sp_moi_loai'] ?> <?= $row['sp_don_vi'] ?> </span>
                        </li>
                        <?php
                        $totalMoney += ($row['dh_so_tien_phai_tra']);
                        $totalQuantity += $row['so_sp_moi_loai'];
                    }


                    
                    ?>
                </ul>
                <hr/>
                <label>Tổng SL:</label> <?= $totalQuantity ?> - <label>Tổng tiền:</label> <?= number_format($totalMoney, 0, ",", ".") ?> đ
                <p><label>Ghi chú: </label><?= $row1['dh_ghi_chu'] ?></p>
            </div>
        </div>
    </body>
</html>
