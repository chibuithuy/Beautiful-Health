<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Beautiful Health | Giỏ hàng </title>
  <!-- Font awesome -->
  <link href="css/font-awesome.css" rel="stylesheet">
  <!-- Bootstrap -->

  <!-- SmartMenus jQuery Bootstrap Addon CSS -->
  <link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
  <!-- Product view slider -->
  <link rel="stylesheet" type="text/css" href="css/jquery.simpleLens.css">
  <!-- slick slider -->
  <link rel="stylesheet" type="text/css" href="css/slick.css">
  <!-- price picker slider -->
  <link rel="stylesheet" type="text/css" href="css/nouislider.css">
  <!-- Theme color -->
  <link id="switcher" href="css/theme-color/dark-red-theme.css" rel="stylesheet">
  <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->
  <!-- Top Slider CSS -->
  <link href="css/sequence-theme.modern-slide-in.css" rel="stylesheet" media="all">

  <!-- Main style sheet -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/../css/all.min.css">

  <!-- custom css file link  -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="./js/script.js">

  <!-- Google Font -->
  <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>



  <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td,
    th {
      border: 1px solid #dddddd;
      text-align: center;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #ffffff;
    }

    h3 {
      text-align: center;
      font-size: 3rem;
      color: #333;
      padding: 1rem;
      margin: 2rem 0;
      background: rgba(89, 150, 104, 0.05);
    }

    .container {
      /* margin-top: 100px; */
    }
  </style>
</head>

<body>
  <?php
  session_start();

  require('cart.php');
  require('header.php');
  ?>

  <?php
  $tong_tien = 0;
  $khuyen_mai = 0;
  $so_luong_sp = 0;
  $gio_hang = (isset($_SESSION['gio_hang']) && !empty($_SESSION['gio_hang'])) ? $_SESSION['gio_hang'] : [];
  ?>
  <section id="cart-view" style="">
    <div class="container" style="">
      <div class="row" style="">
        <div class="col-md-12">
          <div class="cart-view-area">
            <div class="cart-view-table">
              <form action="">
                <div class="table-responsive">
                  <h3>Giỏ hàng</h3>
                  <?php if (!empty($gio_hang)) { ?>
                    <table class="wishlist-table text-center" style="font-size:16px;">

                      <tr>
                        <th>Hủy bỏ</th>
                        <th>Ảnh</th>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng </th>
                        <th>Đơn giá (VNĐ)</th>
                        <th>Khuyến mãi (VNĐ)</th>
                      </tr>

                      <tbody>
                        <?php
                        foreach ($gio_hang as $key => $value) :
                          $tong_tien += $value['sp_gia_tien'] * $value['quantity'];
                          $so_luong_sp += $value['quantity'];
                          $khuyen_mai += $value['sp_gia_tien'] * 1.0 * ($value['khuyen_mai'] / 100); ?>
                          <tr>

                            <td><a href="giohang.php?id=<?php echo $value['sp_id']; ?>&action=delete" title="" class="btn btn-danger">Xóa</a></td>
                            <td><a class="aa-product-img"><img src="images/img/<?php echo $value['sp_anh'] ?>" alt="" width="400" height="400"></a></td>
                            <td><?php echo $value['sp_ten']; ?></td>

                            <td>
                              <form action="" method="POST">
                                <div class="plus-minus">
                                  <a href="giohang.php?delete&id=<?= $value['sp_id'] ?>" class="dec qtybutton" type="button">-</a>
                                  <b class="plus-minus-box"><?= $value['quantity'] ?></b>
                                  <a href="giohang.php?update&id=<?= $value['sp_id'] ?>" class="inc qtybutton" type="button">+</a>
                                </div>
                              </form>
                            </td>

                            <td><?php echo $value['sp_gia_tien']; ?></td>
                            <td><?php if (($value['khuyen_mai']) != 0) { ?>

                                <span class="price" style=" " href=""><?php echo $value['sp_gia_tien'] * 1.0 * ($value['khuyen_mai'] / 100); ?>
                                </span>
                              <?php  } else { ?>

                                <div class="price" style=" ">0</div>
                              <?php } ?>
                            </td>

                          </tr>
                        <?php endforeach ?>


                        <tr>
                          <td></td>
                          <th>Số sản phẩm</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td><?php echo $so_luong_sp; ?></td>
                        </tr>
                        <tr>
                          <td></td>
                          <th>Tổng tiền (VNĐ)</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td><?php echo $tong_tien; ?></td>
                        </tr>
                        <tr>
                          <td></td>
                          <th>Giảm giá (VNĐ)</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td><?php echo $khuyen_mai; ?></td>
                        </tr>
                        <td></td>
                        <th>Thành tiền (VNĐ)</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><?php echo $tong_tien - $khuyen_mai; ?></td>
                        </tr>
                      </tbody>
                    </table>
                  <?php } else { ?>
                    <h3>Bạn không có sản phẩm nào trong giỏ hàng!</h3>
                  <?php } ?>
                </div>
              </form>
            </div>
          </div>
          <?php if (!empty($gio_hang)) { ?>
            <a href="thanhtoan.php?tongtien=<?php echo $tong_tien - $khuyen_mai; ?>&sp_so_luong=<?php echo $so_luong_sp; ?>" class="aa-cart-view-btn"> Thanh toán</a>
          <?php } else { ?>
            <a href="index.php" class="aa-cart-view-btn">Trang chủ</a>
          <?php } ?>
        </div>

      </div>
    </div>

</body>
</section>
<?php
require('footer.php');
?>
<!-- footer -->

</html>