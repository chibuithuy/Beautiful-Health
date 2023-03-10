<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beautiful Health</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="./js/script.js">
    <!-- Font awesome -->
    <link href="/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="/css/bootstrap.css" rel="stylesheet">   
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="/css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="/css/jquery.simpleLens.css">    
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="/css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="/css/nouislider.css">
    <!-- Theme color -->
    <link id="switcher" href="/css/theme-color/dark-red-theme.css" rel="stylesheet">
    <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->
    <!-- Top Slider CSS -->
    <link href="/css/sequence-theme.modern-slide-in.css" rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href="/css/style.css" rel="stylesheet">    

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    
</head>
<body>

<!-- header section starts  -->

<?php
    include('header.php');
    ?>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">

    </div>
    
</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span> about </span> us </h1>

    <div class="row">

        <div class="gioithieu-container">
            <img src="images/banner2.jpg" alt="" >
        </div>

        <div class="content">
            <h3>Eat clean l?? g??</h3>
           <p> S???c kh???e l?? v???n ????? ???????c ??u ti??n h??ng ?????u, v?? v???y xu h?????ng ??n s???ch v?? vi???c th??? d???c th??? thao ?????u ?????n l?? l???i s???ng kh???e m???nh m?? m???i ng?????i ?????u h?????ng ?????n. Ch??? ????? ??n, th???c ph???m ch??ng ta n???p v??o ng?????i s??? ???nh h?????ng ?????n 80% s???c kh???e c???a ch??ng ta. T??? nhu c???u mong mu???n ??n s???ch ????? kh???e m???nh h??n do ???? ch??? ????? ??n Eat Clean, ??n u???ng Health ???? ???????c t???o ra v?? ph??t tri???n th??nh xu h?????ng ??n u???ng hi???n nay.</p>
            <a href="#" class="btn">?????c th??m</a>
        </div>

    </div>

</section>


<!-- about section ends -->

<!-- icons section starts  -->

<!-- <section class="icons-container">

    <div class="icons">
        <img src="images/icon-1.png" alt="">
        <div class="info">
            <h3>free delivery</h3>
            <span>on all orders</span>
        </div>
    </div> -->

    <!-- <div class="icons">
        <img src="images/icon-2.png" alt="">
        <div class="info">
            <h3>10 days returns</h3>
            <span>moneyback guarantee</span>
        </div>
    </div>

    <div class="icons">
        <img src="images/icon-3.png" alt="">
        <div class="info">
            <h3>offer & gifts</h3>
            <span>on all orders</span>
        </div>
    </div>

    <div class="icons">
        <img src="images/icon-4.png" alt="">
        <div class="info">
            <h3>secure paymens</h3>
            <span>protected by paypal</span>
        </div>
    </div>
    -->
</section>

<!-- icons section ends -->

<!-- prodcuts section starts  -->

<section class="products" id="products">

    <h1 class="heading"> Best <span>Seller</span> </h1>

    <div class="box-container">
    <?php
     
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "db_beautifulhealth";
        //ket noi CSDL
        $conn = new mysqli($servername, $username, $password, $dbname);
        mysqli_query($conn,'set names utf8');
        //Check connection
        if ($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);}
 
        
            $sql = "SELECT * FROM tbl_san_pham where sp_so_luong<50 limit 9";
            $ketQuaTruyVan = $conn->query($sql);

            if ($ketQuaTruyVan->num_rows > 0){
                $i = 0;
                while($sanpham = $ketQuaTruyVan ->fetch_assoc()){
                    if($i % 3 == 0){
                        ?>
                    <div class="container">    
                        <div class="row">
                            <?php
                    }
                    

            ?>

            <div class="box">
                        <div class="image">
                            <img src="beautyhealth/admin/img/<?php echo $sanpham['sp_anh'];?>" alt=""  class="img-responsive" alt="Image">
                            <div class="icons">
                                <a href="yeuthich.php?id=<?php echo $sanpham["sp_id"]; ?>" data-toggle="tooltip" data-placement="top" title="Th??m v??o danh s??ch y??u th??ch" class="fas fa-heart"></a>
                                <a href="#" class="cart-btn">th??m v??o gi??? h??ng</a>
                                <a href="#" class="fas fa-share"></a>
                            </div>
                        </div>
                        <div class="content">
                            <h3><?php echo $sanpham['sp_ten'];?></h3>
                            <div class="price"><?php echo $sanpham['sp_gia_tien'];?></div>
                        </div>
                    </div>
        <!-- <div class="col-sm-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading"></div>
                        <div class="panel-body"><img src="" class="img-responsive" style="width:100%" alt="Image"></div>
                        <div class="panel-footer"></div>
                    </div>
                </div> -->
                <?php if($i % 3 == 2){
                    ?>
            </div>
        </div><br/>
        <?php

                }
                $i++;
            }
        }
        ?>
        

    </div>

</section>

<!-- <section id="aa-testimonial">  
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-testimonial-area">
            <ul class="aa-testimonial-slider">
          
              <li>
                <div class="aa-testimonial-single">
                <img class="aa-testimonial-img" src="images/img-1.jpg" alt="testimonial img">
                  <span class="fa fa-quote-left aa-testimonial-quote"></span>
                  <p>???B???t c??? ai c??ng c?? th??? di???n nh???ng b??? c??nh ?????p nh???t v?? tr??? n??n th???t l???ng l???y, nh??ng nh???ng th??? m???i ng?????i m???c trong ng??y ngh??? m???i th???c s??? h???p d???n???.</p>
                  <div class="aa-testimonial-info">
                    <p>ALEXANDER WANG</p>
                    <span>Nh?? thi???t k??? th???i trang</span>
                    <a href="#">Dribble.com</a>
                  </div>
                </div>
              </li>
        
              <li>
                <div class="aa-testimonial-single">
                <img class="aa-testimonial-img" src="images/img-2.jpg" alt="testimonial.img">
                  <span class="fa fa-quote-left aa-testimonial-quote"></span>
                  <p>???Sang tr???ng kh??ng ph???i l?? n???i b???t, m?? ph???i ???????c ghi nh??????.</p>
                  <div class="aa-testimonial-info">
                    <p>GIORGIO ARMANI</p>
                    <span>Nh?? thi???t k??? th???i trang</span>
                    <a href="#">Alphabet</a>
                  </div>
                </div>
              </li>
           
              <li>
                <div class="aa-testimonial-single">
                <img class="aa-testimonial-img" src="images/img-3.jpg" alt="testimonial.img">
                  <span class="fa fa-quote-left aa-testimonial-quote"></span>
                  <p>???Phong c??ch ch??nh l?? m???t c??ch ????n gi???n ????? n??i l??n nh???ng ??i???u ph???c t???p???.</p>
                  <div class="aa-testimonial-info">
                    <p>JEAN COCTEAU</p>
                    <span>Nh?? th??</span>
                    <a href="#">Kinatic Solution</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section> --> 

<!-- review section starts  -->

<section class="review" id="review">

<h1 class="heading"> Tr???i nghi???m <span>Kh??ch h??ng</span> </h1>

<div class="box-container">

    <div class="box">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti asperiores laboriosam praesentium enim maiores? Ad repellat voluptates alias facere repudiandae dolor accusamus enim ut odit, aliquam nesciunt eaque nulla dignissimos.</p>
        <div class="user">
            <img src="images/pic-1.png" alt="">
            <div class="user-info">
                <h3>john deo</h3>
                <span>happy customer</span>
            </div>
        </div>
        <span class="fas fa-quote-right"></span>
    </div>

    <div class="box">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti asperiores laboriosam praesentium enim maiores? Ad repellat voluptates alias facere repudiandae dolor accusamus enim ut odit, aliquam nesciunt eaque nulla dignissimos.</p>
        <div class="user">
            <img src="images/pic-2.png" alt="">
            <div class="user-info">
                <h3>john deo</h3>
                <span>happy customer</span>
            </div>
        </div>
        <span class="fas fa-quote-right"></span>
    </div>

    <div class="box">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti asperiores laboriosam praesentium enim maiores? Ad repellat voluptates alias facere repudiandae dolor accusamus enim ut odit, aliquam nesciunt eaque nulla dignissimos.</p>
        <div class="user">
            <img src="images/pic-3.png" alt="">
            <div class="user-info">
                <h3>john deo</h3>
                <span>happy customer</span>
            </div>
        </div>
        <span class="fas fa-quote-right"></span>
    </div>

</div>
    
</section>

<!-- review section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span> Li??n </span> h??? </h1>

    <div class="row">

        <form action="">
            <input type="text" placeholder="name" class="box">
            <input type="email" placeholder="email" class="box">
            <input type="number" placeholder="number" class="box">
            <textarea name="" class="box" placeholder="message" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" class="btn">
        </form>

        <div class="image">
            <img src="images/contact-img.svg" alt="">
        </div>

    </div>

    <?php
    include('footer.php');
    ?>

<!-- footer section ends -->


















    
</body>
</html>