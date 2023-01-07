<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Beautiful Health | Chi tiết sản phẩm </title>
    
    <!-- Font awesome -->
    <link href="../assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">   
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="../assets/css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="../assets/css/jquery.simpleLens.css">    
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="../assets/css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="../assets/css/nouislider.css">
    <!-- Theme color -->
    <link id="switcher" href="../assets/css/theme-color/dark-red-theme.css" rel="stylesheet">
    <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->
    <!-- Top Slider CSS -->
    <link href="../assets/css/sequence-theme.modern-slide-in.css" rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href="../assets/css/style.css" rel="stylesheet">    

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    

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
      include('../components/header.php');
     /// include('../components/banner.php');
  ?>
  <?php 
          // 1. Load file cấu hình để kết nối đến máy chủ CSDL, CSDL
          include("../public/connect.php");

          // 2. Viết câu lệnh truy vấn để lấy ra dữ liệu mong muốn (TIN TỨC đã lưu trong CSDL)
          $id_san_pham = $_GET['id'];
          $sql = "
                    SELECT * 
                    FROM tbl_san_pham  
                    WHERE sp_id = '".$id_san_pham."'
          ";
          $sql1 = "SELECT * FROM tbl_san_pham join tbl_khuyen_mai on tbl_san_pham.khuyen_mai_id=tbl_khuyen_mai.khuyen_mai_id WHERE sp_id = '".$id_san_pham."'";

          // 3. Thực thi câu lệnh lấy dữ liệu mong muốn
          $noi_dung_san_pham = mysqli_query($ket_noi, $sql);
          $noi_dung_san_pham1 = mysqli_query($ket_noi, $sql1);

          // 4. Hiển thị ra dữ liệu mà các bạn vừa lấy
  $row = mysqli_fetch_array($noi_dung_san_pham);
  $row1 = mysqli_fetch_array($noi_dung_san_pham1);
       ;?>
       <section id="aa-product-details">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-product-details-area">
            <div class="aa-product-details-content">
              <div class="row">
                    <div class="col-md-7 col-sm-7 col-xs-12">
                  <div class="aa-product-view-content">
                  <a class="aa-product-img" ><img src="<?= '../assets/img/product/'.$row['sp_anh'] ?>" alt="" width="400" height="400"></a>
                    <h3 href="gio_hang.php?id=<?php echo $row["sp_id"];?>"><?php echo $row['sp_ten'];?></h3>
                    <div class="aa-price-block">
                  <span class="aa-product-view-price">Giá tiền:</span></span>
                  <span class="aa-product-price"  style="text-decoration: line-through"
                                                  href="san_pham_chi_tiet.php?id=<?php echo $row["sp_id"]; ?>"><?php echo $row["sp_gia_tien"]; ?></sapan>đ</span>
                                            <span class="aa-product-price"
                                                  href="san_pham_chi_tiet.php?id=<?php echo $row["sp_id"];?>"> -> <?php echo $row["sp_gia_tien"]-$row1["giam_gia"]; ?></span>đ
                                            </span> 
                      <p class="aa-product-avilability">Số lượng:<?php echo $row['sp_so_luong'];?></span></p>
                    </div>
                    <div class="aa-prod-quantity">
                    </div>
                     <br><a href="gio_hang.php?id=<?php echo $row["sp_id"];?>"><span class="fa fa-shopping-cart"></span>Thêm vào giỏ hàng</a>
                      <br>   
                      <br><a href="yeu_thich.php?id=<?php echo $row["sp_id"];?>" class="heart"><span class="fa fa-heart-o"></span>Thêm vào yêu thích</a>
                    </div>
                     <div class="aa-product-details-bottom">
              <ul class="nav nav-tabs" id="myTab2">
                <li><a href="#description" data-toggle="tab">Mô tả</a></li>
                <li><a href="#review" data-toggle="tab">Đánh giá</a></li>                
              </ul>
              <div class="tab-content">
                <div class="tab-pane fade in active" id="description">
                  <p><?php echo $row['sp_mo_ta'];?></p>
                  </div>
                  <div class="tab-pane fade " id="review">
                 <div class="aa-product-review-area">
                   <h4> Đánh giá sản phẩm</h4> 
                   <ul class="aa-review-nav">
                     <li>
                        <div class="media">
                          <div class="media-left">
                            <a href="#">
                            </a>
                          </div>
                          <div class="media-body">
                            <h4 class="media-heading"><strong>Nguyễn Thùy Dương</strong> - <span>15/11/2020</span></h4>
                            <div class="aa-product-rating">
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star-o"></span>
                            </div>
                            <p>Sản phẩm rất tốt</p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="media">
                          <div class="media-left">
                            <a href="#">
                             
                            </a>
                          </div>
                          <div class="media-body">
                            <h4 class="media-heading"><strong>Kim Chi</strong> - <span>31/12/2020</span></h4>
                            <div class="aa-product-rating">
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                            </div>
                            <p>Mua đồ bên shop nhiều lần rồi, lần nào cũng ưng lắm!!!</p>
                          </div>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><strong>Ngọc Ánh</strong> - <span>15/6/2021</span></h4>
                            <div class="aa-product-rating">
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                            </div>
                            <p>Sản phẩm phù hợp với giá tiền!</p>
                          </div>
                        </div>
                      </li>
                   </ul>
                   
                  <!-- product badge -->
                </li>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                </section>

  <!-- footer -->  
  <?php
      include('../components/footer.php');
      ;?>
  </body>
  <script>
    function addToCart(id) {
        $.get(
            "../cart/them.php",
            {
                'sp_id': id,
            },
            function (data,status) {
                alert('Thêm vào giỏ hàng thành công');
                $('.menu-cart').load("./index.php .menu-cart");
            }
        )
    }
</script>
</html>
