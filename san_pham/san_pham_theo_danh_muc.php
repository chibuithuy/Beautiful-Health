<!DOCTYPE html>
<html lang="zxx">
<?php
    require("header.php");
    include("dbconfig.php");
;?>
<body id="tin_tuc" >
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>


    <!-- Header Section Begin -->

    <!-- Header Section End -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Sản phẩm</h4>
                        <div class="breadcrumb__links">
                            <a href="./index.php">Trang chủ</a>
                            <span>Danh mục</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <section class="shop spad">
        <div class="container">
            <div class="row">
                 <div class="col-lg-3">
                    <div class="shop__sidebar">
                        <div class="shop__sidebar__accordion">
                            <div class="accordion" id="accordionExample">
                                    <?php 
                                      require("category.php")
                                     ?>
                            </div>
                        </div>

                    </div>
    </div>
                 <div class="col-lg-9">


                      <?php 
    //sắp xếp  
                $param = "";
                $sortParam = "";
                $orderConditon = "";

                $ketnoi = mysqli_connect("localhost","root","","beautiful_health") ; 
                $sql_total= "SELECT * FROM tbl_san_pham "; 

                $orderField = isset($_GET['field']) ? $_GET['field'] : "";
                $orderSort = isset($_GET['sort']) ? $_GET['sort'] : "";
                if(!empty($orderField) && !empty($orderSort))
                {
                    $param .= "field=".$orderField."&sort=".$orderSort."&";
                    $orderConditon = "ORDER BY ".$orderField." ".$orderSort;
                }
                $item_per_page = 6;
                $current_page = !empty($_GET['page'])?$_GET['page']:1;

                $totalRecords = mysqli_query($ketnoi,$sql_total );
                $Records = mysqli_num_rows($totalRecords);
                $totalPages = ceil($Records / $item_per_page);

   ?>


<!-- Lọc sản phẩm -->
                  <div class="shop__product__option">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                            </div>
                        </div>
                    </div>
  
 <!-- end Lọc sản phẩm --> 
 <!-- List sản phẩm -->  
   <div class="row">
                    <?php
                    $ketnoi = mysqli_connect("localhost","root","","beautiful_health");

                    $id = $_GET['lsp_id'];
                    $sql = " SELECT * 
                        FROM tbl_san_pham
                        WHERE lsp_id = ".$id."
                        ORDER BY sp_id DESC";
                      $dulieu = mysqli_query($ketnoi, $sql);
                      $i = 0;
                    $id = $_GET['lsp_id'];
                      while ($row = mysqli_fetch_array($dulieu)) {
                      $i++;
                      ;?>
                           <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="admin/<?php echo $row["sp_anh"] ?>">
                                
                                </div>
                                <div class="product__item__text">
                                    <h6><?php echo $row["sp_ten"] ?></h6>
                                    <a href="san_pham_chi_tiet.php?sp_id=<?php echo $id;?>" class="add-cart">Chi tiết sản phẩm</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>đ<?php echo $row["sp_gia_tien"] ?> </strike></h5>
                                </div>
                            </div>
                        </div>
                 <?php }; ?>

 <!-- end List sản phẩm -->  
 
                
            </div>
         </div>
     </div>
 </div>


    <!-- Footer Section Begin -->

<?php
require("footer.php")
;?>
</body>

</html>