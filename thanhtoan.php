<?php
$host = "localhost";
$dbname = "beautiful_health";
$dbusername = "root";
$dbpassword = "";
$ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beautiful Health | Giỏ hàng</title>

</head>

<body>
    <?php
    $tong_tien = $_POST['tong_tien'];
    ?>
    <!-- kiem tra xem nguoi dung da dang nhap chua, neu chua thi redirect ve trang dang nhap-->
    <!--
        <?php
        session_start();
        if (!isset($_SESSION['da_dang_nhap']) && !($_SESSION['da_dang_nhap'] == 1)) {
            echo "
                <script type='text/javascript'>
                 window.alert('Bạn chưa đăng nhập');
                 window.location.href='dang_nhap.php?callback=thanh_toan.php';
                </script>";
        }
        ?> -->

    <!-- ket noi-->
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">

                <div><a><br></a></div>
                <div><a><br></a></div>
                <div class="card mb-4">
                    <div class="panel-heading">
                        <h4 class="panel-title">

                            <div text-align:cente>
                                <a>
                                    <font color="#009933"><b><u>ĐIỀN THÔNG TIN ĐẶT HÀNG</u></b></form>
                                </a>
                            </div>

                        </h4>
                        <div><a><br></a></div>
                        <div><a><br></a></div>

                    </div>
                    <div class="card-body">
                        <form method="POST" action="thuc_hien_thanh_toan.php" enctype="multipart/form-data">


                            <div class="card-body">
                                <div class="col-md-12">
                                    <input class="form-control" id="inputEmail" type="email" placeholder="Email*" name="txtEmail" />

                                </div>

                                <div><a><br></a></div>

                                <div class="col-md-6">
                                    <input class="form-control" id="inputHovaten" type="text" placeholder="Họ và tên*" name="txtHovaten" />


                                </div>
                                <div><a><br></a></div>

                                <div class="col-md-6">
                                    <input class="form-control" id="inputSDT" type="text" placeholder="Số điện thoại*" name="txtSDT" />

                                </div>
                                <div><a><br></a></div>
                                <div class="col-md-12">
                                    <input class="form-control" id="inputDiachi" type="text" placeholder="Địa chỉ*" name="txtDiachi" />

                                </div>
                                <div><a><br></a></div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="" value="<?php echo $_GET['sp_so_luong']; ?>" type="hidden" placeholder="Số lượng" name="txtSoluong" />

                                </div>

                                <div class="form-floating mb-3">
                                    <input class="form-control" id="" value="<?php echo $_GET['tong_tien']; ?>" type="hidden" placeholder="tổng tiền" name="txtTongtien" />

                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="row margin-top">
                        <div class="col-sm-6">
                            <div class="single-cart-form padding60">
                                <div class="log-title">
                                    <h3><strong>Chi tiết thanh toán</strong></h3>
                                </div>
                                <div class="cart-form-text pay-details table-responsive">
                                    <form action="?act=thanhtoan" method="post">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <th>Tổng Giỏ Hàng</th>
                                                    <td><?= number_format($tong_tien) ?> VNĐ</td>
                                                </tr>
                                                <tr>
                                                    <th>Giảm giá</th>
                                                    <td>0%</td>
                                                </tr>
                                                <tr>
                                                    <th>Vận Chuyển</th>
                                                    <td>15,000 VNĐ</td>
                                                </tr>
                                                <tr>
                                                    <th>Vat</th>
                                                    <td>0 VNĐ</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th class="tfoot-padd">Tổng tiền</th>
                                                    <td class="tfoot-padd"><?= number_format($tong_tien + 15000) ?> VNĐ</td>
                                                </tr>
                                            </tfoot>
                                        </table>

                                        <div class="mt-4 mb-0">
                                            <div class="d-grid"><button type="submit">ĐẶT HÀNG</button></a></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-cart-form padding60">
                                <div class="log-title">
                                    <h3><strong>Mã giảm giá</strong></h3>
                                </div>
                                <div class="cart-form-text custom-input">
                                    <p>Nhập mã giảm giá nếu bạn có !!</p>
                                    <form action="" method="post">
                                        <input type="text" name="subject" placeholder="Nhập mã tại đây..." />
                                        <div class="submit-text coupon">
                                            <button type="submit">Áp dụng</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!--                    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        -->
        <div><a><br></a></div>
        <div><a><br></a></div>
        <?php

        ?>
</body>

</html>