<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Thanh toán </title>

</head>

<body class="sb-nav-fixed">




    <?php
    // 1. kết nối với máy chủ

    require('config.php');


    // 2. Viết câu lệnh truy vấn để thêm mới dữ liệu vào bảng TIN TỨC trong CSDL
    $email = $_POST['txtEmail'];
    $ten = $_POST['txtHovaten'];
    $sdt = $_POST['txtSDT'];
    $dia_chi = $_POST['txtDiachi'];

    $so_luong_sp = $_POST['txtSoluong'];
    $tong_tien = $_POST['txtTongtien'];
    if (empty($email) && empty($ten) && empty($sdt) && empty($dia_chi)) {
        echo "
            <script type='text/javascript'>
                window.alert('Bạn phải điền đủ thông tin');
                window.location.href='thanhtoan.php?tongtien=" . $tong_tien . "&sp_so_luong=" . $so_luong_sp . "';
            </script>";
    } else {

        // 4.2. Câu lệnh INSERT


        $sql = " INSERT INTO `tbl_dat_hang` (`dh_id`, `dh_ngay_dat`, `dh_so_tien_phai_tra`, `dh_dia_chi`, `dh_email`, `dh_sdt`, `dh_ten`, `dh_trang_thai`) VALUES (NULL,now(), '" . $tong_tien . "', '" . $dia_chi . "', '" . $email . "','" . $sdt . "', '" . $ten . "', 0)";

        // 3. Thực thi câu lệnh lấy dữ liệu mong muốn
        $noi_dung_tin_tuc = mysqli_query($conn, $sql);


        // 4. Thông báo chèn dữ liệu thành công và đẩy các bạn về trang Quản trị tin tức
        echo "
                    <script type='text/javascript'>
                        window.alert('Bạn đã đặt hàng thành công ');
                        window.location.href='index.php';
                    </script>
                ";

        session_start();
        unset($_SESSION['gio_hang']);
    }

    ?>

</body>

</html>