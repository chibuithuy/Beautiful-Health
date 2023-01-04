<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Beautiful Health | Tìm kiếm  </title>
    
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
        include('header.php');
        session_start();
        // include('../components/header.php');
    ?>
  <!-- / menu --> 
  <?php
        // include('../components/banner.php');
    ?>
     <!-- product category -->
  
  <section id="aa-product-category">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-8 col-md-push-3">
          <div class="aa-product-catg-content">
            <div class="aa-product-catg-head">
              <div class="aa-product-catg-head-left">
              </div>
              <div class="aa-product-catg-head-right">
                <a id="grid-catg" href="#"><span class="fa fa-th"></span></a>
                <a id="list-catg" href="#"><span class="fa fa-list"></span></a>
              </div>
            </div>
            <div class="aa-product-catg-body">
              <ul class="aa-product-catg">
                <!-- start single product item -->
               <?php 
          // 1. Load file cấu hình để kết nối đến máy chủ CSDL, CSDL
          include 'config.php';
  //2, Lấy ra dữ liệu mong muốn ( TIN TỨC lưu trong csdl )

          // 2. Viết câu lệnh truy vấn để lấy ra dữ liệu mong muốn (TIN TỨC đã lưu trong CSDL)
          if (isset($_POST["timkiem"]))
        {
          $tukhoa=$_POST['tukhoa'];
        }
            $sql ="SELECT * FROM tbl_san_pham where ten_san_pham like '%".$tukhoa."%'";
           $noi_dung_san_pham = mysqli_query($conn, $sql);
           ?>
           <h3>Kết quả tìm kiếm của kết quả:<?php echo $_POST['tukhoa']?> </h3>
<?php
          // 4. Hiển thị ra dữ liệu mà các bạn vừa lấy
          while($row = mysqli_fetch_array($noi_dung_san_pham)){
       ?>
                <li>
                  <figure>
                    <a href="index.php?quanly=timkiem&id=<?php echo $row['id_san_pham']?>">
                    <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Thêm vào giỏ</a>
                    <figcaption>
                    <a class="aa-product-img" href="san_pham_chi_tiet.php?id=<?php echo $row["id_san_pham"];?>"><img src="<?= '../assets/img/product/'.$row["ten_anh"] ?>" alt="" width="175" height="200"></a>
                      <h4 class="aa-product-title"><a href="#"><?php echo $row["ten_san_pham"];?></a></h4>
                      <span class="aa-product-price" href="san_pham_chi_tiet.php?id=<?php echo $row["id_san_pham"];?>"><?php echo $row["gia_tien"];?></span>
                      <p class="aa-product-descrip" href= "san_pham_chi_tiet.php?id=<?php echo $row["id_san_pham"];?>"><?php echo $row["mo_ta"];?></p>
                    </figcaption>
                  </figure>                         
                  <div class="aa-product-hvr-content">
                    <a href="yeu_thich.php" data-toggle="tooltip" data-placement="top" title="Thêm vào danh sách yêu thích"><span class="fa fa-heart-o"></span></a>                         
                  </div>
                  <!-- product badge -->
                </li>
                <?php
                  }
               ;?>
                <!-- start single product item -->
            </div>
            <div class="aa-product-catg-pagination">
              <nav>
                <ul class="pagination">
                  <li>
                    <a href="#" aria-label="Xem trước">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>
                  <li class="active"><a href="#1" data-toggle="tab">1</a></li>
                  <li><a a href="#2" data-toggle="tab">2</a></li>
                  <li><a a href="#3" data-toggle="tab">3</a></li>
                  <li>
                    <a href="#" aria-label="Trang sau">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-4 col-md-pull-9">
          <aside class="aa-sidebar">
            <!-- single sidebar -->
            <div class="aa-sidebar-widget">
              <h3>Loại khác</h3>
              <ul class="aa-catg-nav">
                <li><a href="hat.php">Hạt</a></li>
                <li><a href="tinh_bot.php">Tinh bột</a></li>
                <li><a href="gia_vi.php">Gia vị</a></li>
                <li><a href="tra.php">Trà</a></li>
                <li><a href="banh.php">Bánh</a></li>
                <li><a href="san_pham_khuyen_ma.php">Sản phẩm khuyến mãi</a></li>
              </ul>
            </div>
            </div>
          </aside>
        </div>  
      </div>
    </div>
  </ul>
</div>
</div>
</div>
</div>
</div>
</figcaption>
</figure>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</section>
  <!-- / product category -->
<!-- footer -->  

</body>
</html>


