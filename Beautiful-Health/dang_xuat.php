<?php
    session_start();
    // Đi qua tất cả các biến session đã tạo trong quá trình thao tác với web
    foreach($_SESSION as $key => $val)
    {
        // Nếu biến session không phải là giỏ hàng thì xóa
        unset($_SESSION[$key]);
    }
    // Điều hướng về trang chủ
    header("location: index.php");
?>