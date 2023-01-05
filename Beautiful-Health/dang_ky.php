<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Beautiful Health | Đăng nhập</title>

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
  <!-- wpf loader Two -->
  <?php
    session_start();
    if (isset($_SESSION['da_dang_nhap']) && $_SESSION['da_dang_nhap']==1) {
      echo "
          <script type='text/javascript'>
              window.alert('Bạn đã đăng nhập nên không thể thực hiện chức năng đăng ký');
              window.location.href='index.php';
          </script>
      ";
    }
    // include('../components/header.php');
  ?>

  <!-- / catg header banner section -->
  <!-- start contact section -->
  <section id="aa-myaccount">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-myaccount-area" style="padding: 50px 0 !important;">
            <div class="row">
              <div class="col-md-6">
                <div class="aa-myaccount-register">
                  <h4>Đăng ký</h4>
                  <form method="post" action="dang_ky_kiem_tra.php">
            <label>Liên hệ chúng tôi</label>
            <br>
            <input name="txtHoTen" type="text" placeholder="Họ và tên">
            <br>
            <input name="txtEmail" type="text" placeholder="Email">
            <br>
            <input name="txtSdt" type="text" placeholder="Số điện thoại">
            <br>
            <input name="txtMatKhau" type="password" placeholder="Mật khẩu">
            <br>
            <input type="submit" value="Lưu">
        </form>
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
    // include('../components/footer.php');
  ?>
</body>

</html>