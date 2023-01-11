<!doctype html>
<!--
  Lamoda by TEMPLATE STOCK
  templatestock.co @templatestock
  Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->


<html lang="en-gb" class="no-js">
  <head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Beautiful Health | Trang chủ</title>
    
    <!-- Font awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">   
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
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  

 

   <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    
  <body  data-spy="scroll" data-target="#main-menu">
 
    
  </header>
  
      
   <!--Start Navigation-->
    <header id="header">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu">
                <span class="sr-only">Toggle navigation</span>
                <span class="fa fa-bars"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <div class="clear-toggle"></div>
              <div id="main-menu" class="collapse scroll navbar-right">
                <ul class="nav">
                                
                  <li class="active"> <a href="index.html">Trang chủ</a> </li>
                  
                  <li> <a href="index.php#about">About</a> </li>
                                    
                                    <li> <a href="index.php#history">Lịch sử </a> </li>
                                    
                                    <li> <a href="index.php#works">Công việc </a> </li>
                                    
                                     <li> <a href="index.php#team">Team</a> </li>
                                   
                    <li> <a href="index.html#services">Dịch vụ </a> </li>
                                    
                  <li> <a href="blog.php">CÙNG BEAUTIFUL HEALTH TRỞ NÊN XINH ĐẸP</a></li>
                                    
                                    <li> <a href="index.php#testimonials">Testimonials</a></li>
                                     
                  <li> <a href="index.html#contact">Contact</a> </li>
                    
                </ul>
              </div><!-- end main-menu -->
            </div>
          </div>
        </div>
      </header>
    <!--End Navigation-->

    <section id="aa-catg-head-banner">
   <img src="img/logo.png" alt="beautiful health img">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2><b>CÙNG BEAUTIFUL HEALTH TRỞ NÊN XINH ĐẸP</b></h2>
        <ol class="breadcrumb">
          <li><a href="index.php">Trang chủ</a></li>         
          <li class="active">Blog nhỏ của Beautiful Health</li>
        </ol>
      </div>
     </div>
   </div>
    
    </section>
    <!-- /page-header -->
    
       <?php 
          // 1. Load file cấu hình để kết nối đến máy chủ CSDL, CSDL
          include("config.php");

          // 2. Viết câu lệnh truy vấn để lấy ra dữ liệu mong muốn (TIN TỨC đã lưu trong CSDL)
          $tt_id = $_GET['id'];
          $sql = " SELECT *  FROM `tbl_tin_tuc`
                    WHERE `tt_id` = '".$tt_id."'
          ";

          // 3. Thực thi câu lệnh lấy dữ liệu mong muốn
          $noi_dung_tin_tuc = mysqli_query($conn, $sql);

          // 4. Hiển thị ra dữ liệu mà các bạn vừa lấy
          $row = mysqli_fetch_array($noi_dung_tin_tuc)
       ;?>

    <!--Start blog -->
    <section class="section">
      <div class="container">
        <div class="row">
          <!-- Blog Post -->
          <div class="col-md-8 col-sm-8">
            <div class="post-content">  
              <h2><a href="#"><?php echo $row['tt_tieu_de'];?></a></h2>
              <div class="aa-article-bottom">
                      <div class="aa-post-date">
                         <i class="fa fa-clock-o"></i><?php echo date("d/M/Y", strtotime($row["tt_ngay_dang"]));?> </span> <a href="#"><i class="fa fa-eye"></i><?php echo $row['tt_so_luot_xem'];?></a> 

                      </div>
                      
                    </div>
              <!-- Post Image -->
              <div class="post-img" text-align:center>
                <img src="img/<?php echo $row['tt_anh']; ?>" alt="">;
                
              </div>
              
             
              
              <!-- Post Description -->
              <div class="post-description">   
                <blockquote><?php echo $row['tt_mo_ta'];?></blockquote>                                
                <p><?php echo $row['tt_noi_dung'];?></p>
              </div>
             
      
              
                        
              <!-- Comment Section -->
              <div class="comments-section">                
                
                <div class="comment-form">
                  <form method="post">
                  </form>
                </div>            
              </div>
              <!-- /Comment Section -->                     
            </div>
          </div>  
          <!-- /Blog Post -->
           
           <div class="aa-sidebar-widget">
                    <h3><b><u>Bài viết gần đây</u></b></h3>
                    <div class="row">
                <?php 
                //1. kết nối đến máy chủ CSDL
                include("config.php");
                //2.viết câu lệnh truy vấn lấy ra được DL mong muốn 
                $sql=" SELECT * FROM tbl_tin_tuc  ORDER BY tt_id DESC LIMIT 3" ;
                //3. thực hiện câu lệnh truy vấn 
                $noi_dung_tin_tuc= mysqli_query($conn,$sql);
                //4. hiển trị ra dữ liệu mà bạn vừa lấy
                while($row=mysqli_fetch_array($noi_dung_tin_tuc))
                {
                  ;?>
                  <div class="media">

                          <div class="media-left">     
                              <img height="150px" width="150px" class="media-object news-img" src="img/<?php echo $row['tt_anh'] ?>" alt="">
                          </div>
                          <br>
                          <div class="media-body">
                           <h4><b><?php echo $row['tt_tieu_de'];?></b></h4>
                           <span class="comments-date"></span>
                           <p><?php echo $row['tt_mo_ta'];?></p>
                           <a href= "blog.php?id=<?php echo $row["tt_id"];?>" class="aa-read-mor-btn"><button style="color: blue;" >Đọc thêm  </button></a>
                           <a href=""></a>
                                                                            
                </div>
                 <?php
              }
              ;?>
                 
              </div>
            </div>
          </div>
        </div>
      </div>


          
        
      </div> <!-- /row -->      
    </div>    
  </section>
  <!-- /blog -->


 <!--Start Footer-->
 <footer>
     <div class="container">
         <div class="row">
             
             
             
         </div> <!-- /.row-->
     </div> <!-- /.container-->
 </footer>
 <!--End Footer-->

 <?php
    // include('../components/footer.php');
?>
  
</body>
</html>