<?php
    // Kết nối với cơ sở dữ liệu
    include 'config.php';
    // Gán 3 biến POST được gửi đến vào 3 biến của mình
    $kh_email = $_POST["txtEmail"];
    $mat_khau = $_POST["txtMatKhau"];
    $kh_ho_ten = $_POST["txtHoTen"];
    $kh_dien_thoai = $_POST["txtSdt"];

    //Câu lệnh truy vấn kiểm tra sự trùng lặp tài khoản không
    $sql = "SELECT * FROM tbl_khach_hang WHERE kh_email=\"".$email."\"";
    // Thực hiện câu lênh
    $result = $conn->query($sql);

    if( $result->num_rows > 0 ) //Tài khoản mới đã tồn tại
    {
        echo "
            <script type='text/javascript'>
                window.alert('Email đã được sử dụng vui lòng đăng ký lại');
                window.location.href='dang_ky.php';
            </script>
        ";
    } else { // Tài khoản mới không tồn tại
            $sql="INSERT INTO `tbl_khach_hang`(`kh_ho_ten`, `kh_dien_thoai`, `kh_email`, `mat_khau`) 
            VALUES ('$kh_ho_ten','$kh_dien_thoai','$kh_email','$mat_khau')";
            if($conn->query($sql)===TRUE) {
                echo "
                    <script type='text/javascript'>
                        window.alert('Đăng ký thành công');
                        window.location.href='dang_nhap.php';
                    </script>
                ";
            }
    }
?>