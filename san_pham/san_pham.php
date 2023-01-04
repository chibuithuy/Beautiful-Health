<<?php
function showspdetail($id){
    $sql = " SELECT * 
    FROM tbl_san_pham where  1";
    if($id >0)  $sql.="AND sp_id=".$id;
    $conn=conect();
    $stmt=$conn->prepare($sql);
    $stmt-> execute();
    $stmt-> setFetchMode( PDO:: FETCH_ASSOC);
    return $stmt -> fetch();// lấy ra 1 mảng
}
?>
   <section class="shop spad">
        <div class="container">
            <div class="row">
                 <div class="col-lg-3">
                    <div class="shop__sidebar">
                        <div class="shop__sidebar__accordion">
                            <div class="accordion" id="accordionExample">
                                    <br>
                                     <?php 
                                      require("category.php")
                                     ?>

                    
                            </div>
                        </div>



                    </div>
                 </div>
                 <div class="col-lg-9">

  <?php 
                $param = "";
                $sortParam = "";
                $orderConditon = "";

                $ketnoi = mysqli_connect("localhost","root","","beautiful_health") or die("Sorry, can't connect to the mysql."); 
                $tk = isset($_GET['search']) ? $_GET['search'] : "";

                $orderField = isset($_GET['field']) ? $_GET['field'] : "";
                $orderSort = isset($_GET['sort']) ? $_GET['sort'] : "";
                if(!empty($orderField) && !empty($orderSort))
                {
                    $param .= "field=".$orderField."&sort=".$orderSort."&";
                    $orderConditon = "ORDER BY ".$orderField." ".$orderSort;
                }
                $item_per_page = 9;
                $current_page = !empty($_GET['page'])?$_GET['page']:1;
                $offset = ($current_page - 1) * $item_per_page;


                $sql = "SELECT * FROM tbl_san_pham ".$orderConditon."  LIMIT " . $item_per_page . " OFFSET " . $offset ;

                $sql_total= "SELECT * FROM tbl_san_pham "; 

                $totalRecords = mysqli_query($ketnoi,$sql_total );
                $Records = mysqli_num_rows($totalRecords);
                $totalPages = ceil($Records / $item_per_page);

                $query=mysqli_query($ketnoi,$sql);
                $num2 = mysqli_num_rows($query);

   ?>

                       <div class="shop__product__option">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__left">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__right">
                                    <br>
                                    <p>Sắp xếp theo:</p>
                                    <select onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);" >
                                        <option <?php if(isset($_GET['field']) && $_GET['field'] == "sp_gia_tien" && isset($_GET['sort']) && $_GET['sort'] == "desc") { ?> selected <?php } ?> value="?<?=$sortParam?>field=gia_ban&sort=desc">giá từ cao đến thấp</option>
                                         <option <?php if(isset($_GET['field']) && $_GET['field'] == "sp_gia_tien" && isset($_GET['sort']) && $_GET['sort'] == "asc") { ?> selected <?php } ?> value="?<?=$sortParam?>field=gia_ban&sort=asc">giá từ thấp đến cao</option>
                                         <option <?php if(isset($_GET['field']) && $_GET['field'] == "sp_ten" && isset($_GET['sort']) && $_GET['sort'] == "desc") { ?> selected <?php } ?> value="?<?=$sortParam?>field=ten_san_pham&sort=desc">Tên sản phẩm z-a</option>
                                        <option <?php if(isset($_GET['field']) && $_GET['field'] == "sp_ten" && isset($_GET['sort']) && $_GET['sort'] == "asc") { ?> selected <?php } ?> value="?<?=$sortParam?>field=ten_san_pham&sort=asc">Tên sản phẩm a-z</option>
                                        
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
               <?php
                    function viewedProduct(){
	session_start();
	if(!isset($_SESSION["viewed"])){
		$_SESSION["viewed"] = array();
	}
	if(is_singular('product')){
		$_SESSION["viewed"][get_the_ID()] = get_the_ID();
	}
}

?>
<?php if(isset($_SESSION["viewed"]) && $_SESSION["viewed"]){
	$data = $_SESSION["viewed"];
	$args = array(
		'post_type' => 'product',
		'post_status' => 'publish',
		'posts_per_page' => 10,
		'post__in'	=> $data
	);
?>
<?php $getposts = new WP_query( $args);?>
<?php global $wp_query; $wp_query->in_the_loop = true; ?>
<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
<?php global $product; ?>
	<div class="item-product">
		<a href="<?php the_permalink(); ?>">
			<?php echo get_the_post_thumbnail(get_the_ID(), 'thumnail', array( 'class' =>'thumnail') ); ?>
		</a>
		<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
		<div class="price-product"><?php echo $product->get_price_html(); ?></div>
		<a href="<?php bloginfo('url'); ?>?add-to-cart=<?php the_ID(); ?>">Thêm vào giỏ</a>
	</div>
<?php endwhile; wp_reset_postdata(); 
} else { ?> 
	<p>Không có sản phẩm nào đã xem!</p>
<?php } ?>

  
 <!-- end Lọc sản phẩm --> 
 <!-- List sản phẩm -->  
   <div class="row">
       <?php 
                while($row=mysqli_fetch_array($query))
                {
                ;?>
                           <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg"<?php echo $row["sp_anh"] ?>>
                                <td><a class="aa-product-img"><img src="admin/img/<?php echo $value['sp_anh'] ?>" alt="" width="400" height="400"></a></td>
                                
                                </div>
                                <div class="product__item__text">
                                    <h6><?php echo $row["sp_ten"] ?></h6>
                                    <a href="san_pham_chi_tiet.php?id=<?php echo $row["sp_id"];?> && lsp_id=<?php echo $row["lsp_id"];?>" class="add-cart">Chi tiết sản phẩm</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>đ<?php echo $row["sp_gia_tien"] ?> </h5>
                                 
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