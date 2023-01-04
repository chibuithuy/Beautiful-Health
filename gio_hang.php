<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Beautiful Health | Giỏ hàng </title>


  <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td,
    th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #ffffff;
    }
  </style>
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
  <?php
  session_start();
  require('cart.php');
  ?>

  <?php
  $tong_tien = 0;
  $so_luong_sp = 0;
  $gio_hang = (isset($_SESSION['gio_hang'])) ? $_SESSION['gio_hang'] : []; ?>
  <section id="cart-view">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="cart-view-area">
            <div class="cart-view-table">
              <form action="">
                <div class="table-responsive">
                  <table class="wishlist-table text-center">

                    <tr>
                      <th>Hủy bỏ</th>
                      <th>Ảnh</th>
                      <th>Tên sản phẩm</th>
                      <th>Số lượng muốn mua </th>
                      <th>Đơn giá</th>
                    </tr>

                    <tbody>
                    <?php foreach($gio_hang as $value):
                      $tong_tien += $value['sp_gia_tien']*$value['quantity'];
                      $so_luong_sp+=$value['quantity'];  ?>
                      <tr>
                       
                        <td><a href="gio_hang.php?id=<?php echo $value['sp_id']; ?>&action=delete" title="" class="btn btn-danger">Xóa</a></td>
                        <td><a class="aa-product-img"><img src="admin/img/<?php echo $value['sp_anh'] ?>" alt="" width="400" height="400"></a></td>
                        <td><?php echo $value['sp_ten']; ?></td>
                        <td><?php echo $value['sp_so_luong']; ?></td>
                        <td><?php echo $value['sp_gia_tien']; ?></td>
                        
                      </tr>
                      <?php endforeach ?>


                      <tr>
                        <td></td>
                        <th>Số sản phẩm</th>
                        <td></td>
                        <td></td>
                        <td><?php echo $so_luong_sp; ?></td>
                      </tr>
                      <tr>
                        <td></td>
                        <th>Tổng giá</th>
                        <td></td>
                        <td></td>
                        <td><?php echo $tong_tien; ?></td>
                      </tr>
                      <tr>
                      </tr>
                    </tbody>
                  </table>

                </div>
              </form>
            </div>
          </div>
          <a href="thanhtoan.php?tong_tien=<?php echo $tong_tien; ?>&sp_so_luong=<?php echo $so_luong_sp; ?>" class="aa-cart-view-btn"> Thanh toán</a>
        </div>

      </div>
    </div>
  </section>
</body>

<!-- footer -->

</html>