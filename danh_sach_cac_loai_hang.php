<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="btl_ltw";

$conn=new mysqli($servername,$username,$password,$dbname);
mysqli_query($conn,'set names utf8');

if($conn->connect_error) {
    die("Connection failed:" . $conn->connect_error);
}
?>
<html>
<head>  
    <title>Danh mục sản phẩm</title>
</head>
<body>
    <table>
        <tr>
            <th>STT</th>
            <th>Tên loại hàng</th>
            <th>Mô tả</th>
            <th>Thao tác</t
        </tr>
<?php
$sql= "SELECT*FROM btl_san_pham";

$KetQuaTruyVan = $conn->query($sql);

if($KetQuaTruyVan->num_rows > 0) {
    $i =1;
    while($sanpham = $KetQuaTruyVan -> fetch_assoc()) {
?> 
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $sanpham ['ten_san_pham']; ?></td>
                <td><a href="#">Sửa</a> | <a href ="#">Xóa</a></td>
    </tr>
<?php
        $i++;
    }
}
?>
    </table>
</body>
</html>







