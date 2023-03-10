<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beautiful Health | Granola </title>

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
    <link href="style.css" as="" rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->
    
</head>
<body onload="renderWatchedList()">
<?php
session_start();
include('../components/header.php');
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
                            // 1. Load file c???u h??nh ????? k???t n???i ?????n m??y ch??? CSDL, CSDL
                            include '../public/connect.php';
                            //2, L???y ra d??? li???u mong mu???n ( TIN T???C l??u trong csdl )

                            // 2. Vi???t c??u l???nh truy v???n ????? l???y ra d??? li???u mong mu???n (TIN T???C ???? l??u trong CSDL)

                            $sql = "SELECT * FROM tbl_san_pham WHERE lsp_id = 4";

                            // 3. Th???c thi c??u l???nh l???y d??? li???u mong mu???n
                            $noi_dung_san_pham = mysqli_query($ket_noi, $sql);

                            // 4. Hi???n th??? ra d??? li???u m?? c??c b???n v???a l???y

                            while ($row = mysqli_fetch_array($noi_dung_san_pham)) {
                                ;
                                $sql1 = "SELECT * FROM tbl_san_pham join tbl_khuyen_mai on tbl_san_pham.khuyen_mai_id=tbl_khuyen_mai.khuyen_mai_id WHERE sp_id = '". $row["sp_id"]."'";
                                $noi_dung_san_pham1 = mysqli_query($ket_noi, $sql1);
                                $row1 = mysqli_fetch_array($noi_dung_san_pham1);
                                ?>
                                <li>
                                    <figure>
                                        <a class="aa-add-card-btn" href="gio_hang.php?id=<?php echo $row["sp_id"]; ?>">
                                            <span class="fa fa-shopping-cart"></span>Th??m v??o gi???</a>


                                        <figcaption  class="giam-gia-box">
<!--                                            --><?php
//                                            if(($row1["giam_gia"]*1.0)/($row["sp_gia_tien"]*1.0)*100)
//                                            ?>
                                            <div class="giam-gia">
                                                <p  > <?php echo round(($row1["giam_gia"]*1.0)/($row["sp_gia_tien"]*1.0)*100,2); ?> % </p>
                                                <p  class="giam-gia-title">Gi???m</p>
                                            </div>

                                            <a 
                                            onclick="addToWatchedList('<?php echo $row["sp_ten"]; ?>')" class="aa-product-img"
                                               href="san_pham_chi_tiet.php?id=<?php echo $row["sp_id"]; ?>"><img
                                                        src="<?= '../assets/img/product/' . $row["sp_anh"] ?>" alt=""
                                                        width="175" height="200"></a>
                                            <h4 class="aa-product-title"><a href="#"><?php echo $row["sp_ten"]; ?></a>
                                            </h4>
                                            <span class="aa-product-price" style="text-decoration: line-through"
                                                  href="san_pham_chi_tiet.php?id=<?php echo $row["sp_id"]; ?>"><?php echo $row["sp_gia_tien"]; ?></span>
                                            <span class="aa-product-price"
                                                  href="san_pham_chi_tiet.php?id=<?php echo $row["sp_id"]; ?>"> -> <?php echo $row["sp_gia_tien"]-$row1["giam_gia"]; ?>
                                            </span>     
                                            <p class="aa-product-descrip"
                                               href="san_pham_chi_tiet.php?id=<?php echo $row["sp_id"]; ?>"><?php echo $row["sp_mo_ta"]; ?></p>
                                        </figcaption>
                                    </figure>
                                    <div class="aa-product-hvr-content">
                                        <div class="aa-product-hvr-content">
                                            <a href="yeu_thich.php?id=<?php echo $row["sp_id"]; ?>"
                                               data-toggle="tooltip" data-placement="top"
                                               title="Th??m v??o danh s??ch y??u th??ch"><span class="fa fa-heart-o"></span></a>
                                        </div>
                                    </div>
                                    <!-- product badge -->
                                </li>
                                <?php
                            }; ?>
                            <!-- start single product item -->
                    </div>
                    <div class="aa-product-catg-pagination">
                        <nav>
                            <ul class="pagination">
                                <li>
                                    <a href="#" aria-label="Xem tr?????c">
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
                        <h3>Lo???i kh??c</h3>
                        <ul class="aa-catg-nav">
                            <li><a href="hat.php">H???t</a></li>
                            <li><a href="tra.php"> Tr??</a></li>
                            <li><a href="granola.php">Granola</a></li>
                            <li><a href="my.php">M???</a></li>
                            <li><a href="san_pham_khuyen_mai.php">S???n ph???m khuy???n m??i</a></li>
                        </ul>
                    </div>

                    <div class="aa-sidebar-widget">
                        <h3>Danh s??ch s???n ph???m ???? xem</h3>

                            <ul class="aa-catg-nav" id="arrPrint">

                            </ul>
                    </div>

            </div>
            </aside>
        </div>
    </div>
    </div>
</section>
<!-- <script src="../js/index.js"></script> -->
<script>
    function addToWatchedList(a) {
            localStorage.setItem(a, a);
    }
    function renderWatchedList() {
        var arr = [];
        for (var i = 0; i < localStorage.length; i++) {
            var key = localStorage.key(i);
            var value = localStorage.getItem(key);
            arr.push(value);
        }
        var arrPrint = document.getElementById("arrPrint");
        for (var i = 0; i < arr.length; i++) {
            var li = document.createElement("li");
            li.innerHTML = arr[i];
            arrPrint.appendChild(li);
        }
    }
</script>
<!-- / product category -->
<!-- footer -->
<?php
include('../components/footer.php');; ?>

</body>
</html>


