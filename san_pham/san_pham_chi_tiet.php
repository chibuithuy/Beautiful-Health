<!DOCTYPE html>
<html lang="zxx">
<?php
    require("header.php");
    include("dbconfig.php");
;?>
<body id="home" >
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>


    <!-- Header Section End -->

    <?php 
            $ketnoi = mysqli_connect("localhost","root","","beautiful_health");
            /*mysqli_set_charset($ketnoi, 'UTF8');*/
            
            // Bước 2: Lấy dữ liệu từ trên đường đẫn
            $id=$_GET["sp_id"];

            //Bước 3: Hiển thị các dữ liệu trong bảng tbl_sanpham ra đây
            $sql = " SELECT * 
            FROM tbl_san_pham
            WHERE lsp_id = ".$id."
            ORDER BY sp_id DESC";
        
            $dulieu = mysqli_query($ketnoi, $sql);
   
    
     //  $product = mysqli_fetch_assoc($dulieu);
            $row = mysqli_fetch_array($dulieu);
            
       
        ;?>
    <section class="shop-details">
        <div class="product__details__pic" style="background-color: white;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__details__breadcrumb" style="text-align: left;">
                            <a href="./index.php">Trang chủ</a>
                            <a>Chi tiết sản phẩm</a>
                            <span><?php echo $row["sp_ten"] ?></span>
                        </div>
                    </div>
                </div>
             <div class="product-single colorPublic2" style="padding-bottom: 0px; padding-top: 15px;">  
                    <div class="row" style="margin-bottom: 0px;">
                        <div class="col-xs-12 col-sm-5">
                         <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__pic__item_left">
                                    <img style="width: 700px; height: auto;" src="admin/<?php echo $row["sp_anh"];?>" alt="">
                                </div>
                            </div>
        
                          </div>
                         </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="product__details__text">
                            <h2 style="text-align: left;"><b><?php echo $row["sp_ten"] ?></b></h2>
                            <div class="rating" style="text-align: left;">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <span> - 5 Reviews</span>
                            </div>
                            <h3 style="text-align: left;">đ<?php echo $row["sp_gia_tien"] ?> </h3>
                            
                            <div class="row"  style="text-align: left;">
                                <label for="inputNumber" class="col-sm-3 col-form-label" style="font-size: 18px;">Số lượng</label>
                                    <div class="col-sm-2">
                                        <input type="hidden" name="temp_id" value="276">
                                        <!-- begin thêm hoặc đặt -->
                            
                            <!-- End -->
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
    <div class="container">
        <div class="row">
             <div class="col-lg-12">
             <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-5"
                            role="tab"><b>MÔ TẢ SẢN PHẨM</b></a>
                        </li>
                </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-5" role="tabpanel">
                            <div class="product__details__tab__content">
                          
                                <div class="product__details__tab__content__item">
                                    <p><?php echo $row["sp_mo_ta"] ?></p>
                            </div>
                        </div>
                    </div>
                <br>
                <br>
                
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-5" role="tabpanel">
                            <div class="product__details__tab__content">
                          
                                <div class="product__details__tab__content__item">
                                    
                                    <br>
                                    <br>
                                    <br>
                            </div>
                        </div>
                    </div>
                <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-5"
                            role="tab"><b>SẢN PHẨM LIÊN QUAN</b></a>
                        </li>
                </ul>  
                <br>           
             </div>
        </div>    
    </div> 
            <?php 
                    $ket_noi =mysqli_connect("localhost","root","","beautiful_health");
                    
                    $sql ="SELECT * FROM tbl_san_pham join tbl_loai_sp on tbl_san_pham.lsp_id=tbl_loai_sp.lsp_id
                    WHERE tbl_san_pham.lsp_id=tbl_loai_sp.lsp_id = ".$id." limit 4";
                    $san_pham=mysqli_query($ket_noi,$sql);
                    while($row=mysqli_fetch_array($san_pham))
                    {
                    ;?>

                 <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix best-sellers ">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="admin/<?php echo $row["sp_anh"] ?>">
                            </div>
                        
                            <div class="product__item__text">
                                <h6><?php echo $row["sp_ten"] ?></h6>
                                <a href="san_pham_chi_tiet.php?id=<?php echo $row["sp_id"];?> " class="add-cart">Chi tiết sản phẩm</a>
                                <div class="rating">
                                    <i class="fa fa-star-1"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <h5>đ<?php echo $row["sp_gia_tien"] ?> ></h5>
                            </div>
                        </div>
                    </div>
                <?php }; ?>  

         </div>
    </div>
</section>

<?php
require("footer.php")
;?>
</body>

</html>