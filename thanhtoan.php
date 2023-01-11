<?php
require('config.php');
?>
<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beautiful Health || Thanh toán</title>
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- <link href="css/bootstrap.css" rel="stylesheet"> -->
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
    <link href="css/style.css" rel="stylesheet">

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            font-family: lato;
        }

        h2 {
            margin-bottom: 0px;
            margin-top: 25px;
            text-align: center;
            font-weight: 200;
            font-size: 25px;
            font-size: 1.2rem;

        }

        .container {
            padding: 80px 0;
            max-width: 100% !important;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            background: -webkit-linear-gradient(#c5e5e5, #ccddf9);
            background: linear-gradient(#c9e5e9, #ccddf9);
        }

        .dropdown-select.visible {
            display: block;
        }

        .dropdown {
            position: relative;
        }

        ul {
            margin: 0;
            padding: 0;
        }

        ul li {
            list-style: none;
            padding-left: 10px;
            cursor: pointer;
        }

        ul li:hover {
            background: rgba(255, 255, 255, 0.1);
        }

        .dropdown-select {
            position: absolute;
            background: #77aaee;
            text-align: left;
            box-shadow: 0px 3px 5px 0px rgba(0, 0, 0, 0.1);
            border-bottom-right-radius: 5px;
            border-bottom-left-radius: 5px;
            width: 90%;
            left: 2px;
            line-height: 2em;
            margin-top: 2px;
            box-sizing: border-box;
        }

        .thin {
            font-weight: 400;
        }

        .small {
            font-size: 12px;
            font-size: .8rem;
        }

        .half-input-table {
            border-collapse: collapse;
            width: 100%;
        }

        .half-input-table td:first-of-type {
            border-right: 10px solid #4488dd;
            width: 50%;
        }

        .window {
            height: 700px;
            width: 800px;
            background: #fff;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            box-shadow: 0px 15px 50px 10px rgba(0, 0, 0, 0.2);
            border-radius: 30px;
            z-index: 10;
        }

        .order-info {
            height: 100%;
            width: 50%;
            padding-left: 25px;
            padding-right: 25px;
            box-sizing: border-box;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            position: relative;
        }

        .price {
            bottom: 0px;
            position: absolute;
            right: 0px;
            color: #4488dd;
        }

        .order-table td:first-of-type {
            width: 25%;
        }

        .order-table {
            position: relative;
        }

        .line {
            height: 1px;
            width: 100%;
            margin-top: 10px;
            margin-bottom: 10px;
            background: #ddd;
        }

        .order-table td:last-of-type {
            vertical-align: top;
            padding-left: 25px;
        }

        .order-info-content {
            table-layout: fixed;

        }

        .full-width {
            width: 100%;
        }

        .pay-btn {
            border: none;
            background: #22b877;
            line-height: 2em;
            border-radius: 10px;
            font-size: 19px;
            font-size: 1.2rem;
            color: #fff;
            cursor: pointer;
            position: absolute;
            bottom: 25px;
            width: calc(100% - 50px);
            -webkit-transition: all .2s ease;
            transition: all .2s ease;
        }

        .pay-btn:hover {
            background: #22a877;
            color: #eee;
            -webkit-transition: all .2s ease;
            transition: all .2s ease;
        }

        .total {
            margin-top: 25px;
            font-size: 20px;
            font-size: 1.3rem;
            position: absolute;
            bottom: 65px;
            right: 27px;
            left: 35px;
        }

        .dense {
            line-height: 1.2em;
            font-size: 16px;
            font-size: 1rem;
        }

        .input-field {
            background: rgba(255, 255, 255, 0.1);
            margin-bottom: 10px;
            margin-top: 3px;
            line-height: 1.5em;
            font-size: 20px;
            font-size: 1.3rem;
            border: none;
            padding: 5px 10px 5px 10px;
            color: #fff;
            box-sizing: border-box;
            width: 100%;
            margin-left: auto;
            margin-right: auto;
        }

        .credit-info {
            background: #4488dd;
            width: 50%;
            color: #eee;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            font-size: 14px;
            font-size: .9rem;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            box-sizing: border-box;
            padding-left: 25px;
            padding-right: 25px;
            border-top-right-radius: 30px;
            border-bottom-right-radius: 30px;
            position: relative;
        }

        .dropdown-btn {
            background: rgba(255, 255, 255, 0.1);
            width: 100%;
            border-radius: 5px;
            text-align: center;
            line-height: 1.5em;
            cursor: pointer;
            position: relative;
            -webkit-transition: background .2s ease;
            transition: background .2s ease;
        }

        .dropdown-btn:after {
            content: '\25BE';
            right: 8px;
            position: absolute;
        }

        .dropdown-btn:hover {
            background: rgba(255, 255, 255, 0.2);
            -webkit-transition: background .2s ease;
            transition: background .2s ease;
        }

        .dropdown-select {
            display: none;
        }

        .credit-card-image {
            display: block;
            max-height: 80px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 35px;
            margin-bottom: 15px;
        }

        .credit-info-content {
            margin-top: 25px;
            -webkit-flex-flow: column;
            -ms-flex-flow: column;
            flex-flow: column;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            width: 100%;
        }

        @media (max-width: 600px) {
            .window {
                width: 100%;
                height: 100%;
                display: block;
                border-radius: 0px;
            }

            .order-info {
                width: 100%;
                height: auto;
                padding-bottom: 100px;
                border-radius: 0px;
            }

            .credit-info {
                width: 100%;
                height: auto;
                padding-bottom: 100px;
                border-radius: 0px;
            }

            .pay-btn {
                border-radius: 0px;
            }
        }
    </style>

</head>

<body>
    <?php
    $tongtien = $_GET['tongtien'];
    var_dump($_SESSION['da_dang_nhap']);
    if (!isset($_SESSION['da_dang_nhap']) && !($_SESSION['da_dang_nhap'] == 1)) {
        echo "
                <script type='text/javascript'>
                 window.alert('Bạn chưa đăng nhập');
                 window.location.href='dang_nhap.php?callback=thanhtoan.php';
                </script>";
    }
    require('header.php');
    $gio_hang = (isset($_SESSION['gio_hang'])) ? $_SESSION['gio_hang'] : [];
    ?>

    <!-- content -->
    <div class='container'>
        <div class='window'>
            <div class='order-info'>
                <div class='order-info-content'>
                    <h2 style="font-size: 17px">Chi tiết đặt hàng</h2>
                    <?php if (!empty($gio_hang)) { ?>
                        <?php
                        foreach ($gio_hang as $key => $value) : ?>
                            <div class='line'></div>
                            <table class='order-table'>
                                <tbody>
                                    <tr>
                                        <td><img src='images/img/<?php echo $value['sp_anh'] ?>' class='full-width'></img>
                                        </td>
                                        <td>
                                            <br> <span class='thin' style="font-size: 17px"><?php echo $value['sp_ten']; ?></span>
                                            <br> <span class='thin small' style="font-size: 17px"> Số lượng: <?php echo $value['quantity'] ?><br>
                                            <span class='thin small' style="font-size: 17px"> Đơn giá: <?php echo $value['sp_gia_tien']; ?> VNĐ <br>
                                                Khuyến mãi: <?php if (($value['khuyen_mai']) != 0) { ?>
                                                    <?php echo $value['sp_gia_tien'] * 1.0 * ($value['khuyen_mai'] / 100); ?> VNĐ
                                                <?php  } else { ?>
                                                    0
                                                <?php } ?>
                                                <br><br>
                                            </span>
                                        </td>

                                    </tr>
                                </tbody>

                            </table>
                        <?php endforeach ?>
                    <?php } else { ?>
                        <h2 style="font-size: 17px">Bạn không có sản phẩm nào!</h2>
                    <?php } ?>
                </div>
            </div>
            <div class='credit-info'>
                <div class='credit-info-content'>
                    <h2 style="font-size: 17px">ĐIỀN THÔNG TIN ĐẶT HÀNG</h2>
                    <form method="POST" action="thuchienthanhtoan.php" enctype="multipart/form-data">
                        Email*
                        <input type="email" class='input-field' placeholder="Email*" name="txtEmail">
                        Họ và tên*
                        <input type="text" class='input-field' placeholder="Họ và tên*" name="txtHovaten">
                        Số điện thoại*
                        <input type="text" class='input-field' placeholder="Số điện thoại*" name="txtSDT">
                        Địa chỉ*
                        <input type="text" class='input-field' placeholder="Địa chỉ*" name="txtDiachi">
                        <input class="form-control" id="" value="<?php echo $_GET['sp_so_luong']; ?>" type="hidden" placeholder="Số lượng" name="txtSoluong" />
                        <input class="form-control" id="" value="<?php echo $_GET['tongtien']; ?>" type="hidden" placeholder="tổng tiền" name="txtTongtien" />
                        <div class='line'></div>
                        <div class='total'>
                            <span style= "float:left; font-size: 17px;">
                                <div class='thin dense' style="font-size: 17px">Tổng Giỏ Hàng</div>
                                <div class='thin dense' style="font-size: 17px">Vận Chuyển</div>
                                <div class='thin dense' style="font-size: 17px">VAT</div>
                                Thành tiền<br>
                            </span>
                            <span style="float:right; text-align:right; font-size: 17px;">
                                <div class='thin dense' style="font-size: 17px"><?= number_format($tongtien) ?> VNĐ</div>
                                <div class='thin dense' style="font-size: 17px">35,000 VNĐ</div>
                                <div class='thin dense' style="font-size: 17px"><?php echo number_format($tongtien * 0.08) ?> VNĐ</div>
                                <?= number_format($tongtien + 35000 + ($tongtien * 0.08)) ?> VNĐ
                            </span><br>
                        </div><br>
                        <button class='pay-btn' type="submit" style="font-size: 17px">Đặt hàng</button><br>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <?php
    require('footer.php');
    ?>
</body>

</html>