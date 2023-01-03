<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BeautifulHealth | Danh sách yêu thích</title>

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
<style>
    .container{
        margin-top:150px;
    }
    .remove{
        color: #ff0000;
    }
</style>

</head>

<body>
  <!-- wpf loader Two -->
  <?php
    include('header.php');
    ?>
    <?php
    session_start();
    // if (!isset($_SESSION['da_dang_nhap']) && !($_SESSION['da_dang_nhap'] == 1)) {
    //   echo "
    //     <script type='text/javascript'>
    //         window.alert('Bạn chưa đăng nhập');
    //         window.location.href='dang_nhap.php?callback=yeu_thich.php';
    //     </script>";
    // }
    if ( isset($_GET['id']) ) {
      $id_yeu_thich = isset($_SESSION['yeu_thich']) ? $_SESSION['yeu_thich'] : [];
      array_push($id_yeu_thich, $_GET['id']);
      $_SESSION['yeu_thich'] = array_unique($id_yeu_thich);
    }
    if ( isset($_GET['remove_id']) ) {
      $id_yeu_thich = isset($_SESSION['yeu_thich']) ? $_SESSION['yeu_thich'] : [];
      $id_yeu_thich = array_diff($id_yeu_thich, [$_GET['remove_id']]);
      $_SESSION['yeu_thich'] = array_unique($id_yeu_thich);
    }
  
  ?>
  <!-- / catg header banner section -->

  <!-- Cart view section -->
  <section id="cart-view" >
    <div class="container" >
      <div class="row">
        <div class="col-md-12">
          <div class="cart-view-area">
            <div class="cart-view-table aa-wishlist-table" style="margin-bottom: 6rem;">
              <form action="">
                <div class="table-responsive">
                  <table class="table" >
                    <thead>
                      <tr>
                        <th width="5%">Xóa</th>
                        <th width="20%">Ảnh</th>
                        <th width="20%">Tên sản phẩm</th>
                        <th width="20%">Giá </th>
                        <th width="15%">Số lượng còn</th>
                        <th width="20%">Thêm vào giỏ hàng</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                          include("config.php");
                          if ( isset($_SESSION['yeu_thich']) ) {
                            $ids = $_SESSION['yeu_thich'];
                            $whereInId = "";
                            foreach($ids as $id) {
                              $whereInId .= "'$id',";
                            }
                            $whereInId = rtrim($whereInId,",");
                          } else {
                            $ids = "'0'";
                          }
                          $sql = "SELECT * FROM tbl_san_pham WHERE sp_id IN ($whereInId)";
                          $ketQuaTruyVan = $conn->query($sql);
                          while ($row = $ketQuaTruyVan ->fetch_assoc()) { 
                        ?> 
                          <tr>
                            <td width="5%">
                              <a class="remove" href="yeuthich.php?remove_id=<?php echo $row['sp_id']?>">
                                <fa class="fa fa-close"></fa>
                              </a>
                            </td>
                            <td width="20%">
                              <a href="#">
                                <img src="<?php echo 'beautyhealth/admin/img/' . $row['sp_anh'] ?> " width="100%" height = "auto">
                              </a>
                            </td>
                            <td width="20%">
                              <a class="aa-cart-title">
                                <?php echo $row["sp_ten"]; ?>
                              </a>
                            </td>
                            <td width="20%">
                              <?php echo $row["sp_gia_tien"]; ?>
                            </td>
                            <td width="15%">
                              <?php echo $row["sp_so_luong"]; ?>
                            </td>
                            <td width="20%">
                              <a href="gio_hang.php?id=<?php echo $row["sp_id"];?>" class="aa-add-to-cart-btn">Đưa vào giỏ hàng</a>
                            </td>
                          </tr>
                        <?php 
                          }; 
                        ?>
                    </tbody>
              </table>
            </div>
            </form>
          </div>
  </section>
  <!-- / Cart view section -->
  <!-- footer -->
  <?php
    include('footer.php');
  ?>
</body>

</html>