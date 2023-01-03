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

    td, th {
     border: 1px solid #dddddd;
     text-align: left;
     padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #ffffff;
    }
    </style>
  </head>
<body>
    

  <!--connect-->
  <?php
	$host = "localhost";
	$dbname = "beautiful_health";
	$dbusername = "root";
	$dbpassword = "";
	 $ketnoi = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
  ?>


 <?php 
    $tong_tien=0;
    $so_luong_sp=0;
   $gio_hang=(isset($_SESSION['gio_hang']))? $_SESSION['gio_hang'] : [];     
       ;?>
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
                     
                    
                  
                       <tr>
                         <td><a href="gio_hang.php?id=<?php echo $value['sp_id'];?>&action=delete" title="" class="btn btn-danger">Xóa</a></td>
                         <td><a class="aa-product-img" ><img src="../assets/img/product/<?php echo $value['sp_anh'] ?>" alt="" width="400" height="400"></a></td>
                         <td><?php echo $value['sp_ten'];?></td>
                         <td><?php echo $value['sp_so_luong'];?></td>
                         <td><?php echo $value['sp_gia_tien'];?></td>
                       </tr>
                       
                  
                      <tr>
                          <td></td>
                          <th>Số sản phẩm</th>
                          <td></td>
                          <td></td>
                          <td><?php echo $so_luong_sp;?></td>
                      </tr>          
                      <tr>
                          <td></td>
                          <th>Tổng giá</th>
                          <td></td>
                          <td></td>
                          <td><?php echo $tong_tien;?></td>
                      </tr>      
                      <tr>
                      </tr>
                     
                    </table>
                    
                </div>
            </form>
        </div>
    </div>
    <a >Xóa</a>
    <a href="thanh_toan.php?tong_tien=<?php echo $tong_tien?>&sp_so_luong=<?php echo $so_luong_sp?>" class="aa-cart-view-btn"> Thanh toán</a>
 </div>

 </div>
 </form>
 </section>
 </section>
 </body>

  <!-- footer -->  

</html>
