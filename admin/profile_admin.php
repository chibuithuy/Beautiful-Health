<?php 
  session_start();
  if (!isset($_SESSION['admin'])) {;?>
      <script type="text/javascript">
        window.alert('Vui lòng đăng nhập để truy cập trang quản trị!')
        window.location.href='dang_nhap.php';
      </script>
<?php
  }
;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Beautiful Health </title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
      <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
      <meta name="author" content="codedthemes" />
      <!-- Favicon icon -->
      <link rel="icon" type="image/png" href="./img/logo1.png">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
      <!-- waves.css -->
      <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
      <!-- themify icon -->
      <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
      <!-- scrollbar.css -->
      <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
        <!-- am chart export.css -->
        <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
      <style>
		body{
		background-color: #CBCFD3;
		font-family: arial;
		font-size: 20px;
		width: 2145px;
		}
		.Profile{
			background-color:#CBCFD3 ;
			border-radius: 25px;
			margin: 80px 80px 80px 80px;
			padding: 30px 80px 30px 80px ;
			display: flex;
		}
		.AnhProfile{
			flex: 1;
			padding: 50px 80px 50px 0px;
			margin-left: 0px;
		}
		.Thongtinkhach{
			flex: 3;
			font-size: 15px;
			
		}
		.Thongtinkhach input{
			width: 400px;
			height: 60px;
			border-radius: 20px;
			border: none;
		}
		
		.AnhProfile1{
			padding-top: 50px  ;
			font-size: 15px;
		}
		.AnhProfile1 ul{
			list-style-type: none;
		}
		.Thongtinkhach5-1{
			background-color: #448AFF;
			color: white;
			border: none;
			height: 60px;
			width: 200px;
			border-radius: 15px;
			font-size: 25px;
			margin-left: 220px;
			font-size: 20px;
		}
		.Thongtinkhach5-1:hover{
	border: 2px solid black;
}
.Thongtinkhach6{
	margin-top: 50px;
	font-size: 20px;
}

	</style>
  </head>

  <body>
   <?php
	include('../config/dbconfig.php');
	$sql="select * from tbl_admin where admin_id =1";
	$admin=mysqli_query($ketnoi,$sql);
	$row=mysqli_fetch_array($admin);
	;?>


  <!-- Pre-loader start -->
  <div class="theme-loader">
      <div class="loader-track">
          <div class="preloader-wrapper">
              <div class="spinner-layer spinner-blue">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
              <div class="spinner-layer spinner-red">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
            
              <div class="spinner-layer spinner-yellow">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
            
              <div class="spinner-layer spinner-green">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Pre-loader end -->
  <div id="pcoded" class="pcoded">
      <div class="pcoded-overlay-box"></div>
      <div class="pcoded-container navbar-wrapper">
          <nav class="navbar header-navbar pcoded-header">
              <div class="navbar-wrapper">
                  <div class="navbar-logo">
                      <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                          <i class="ti-menu"></i>
                      </a>
                      <div class="mobile-search waves-effect waves-light">
                          <div class="header-search">
                              <div class="main-search morphsearch-search">
                                  <div class="input-group">
                                      <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                      <input type="text" class="form-control" placeholder="Enter Keyword">
                                      <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <a href="index.php">
                          <img class="img-fluid" src="img/logo2.png" alt="Theme-Logo" />
                      </a>
                      <a class="mobile-options waves-effect waves-light">
                          <i class="ti-more"></i>
                      </a>
                  </div>
                
                  <div class="navbar-container container-fluid">
                      <ul class="nav-left">
                          <li>
                              <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                          </li>
                          <li class="header-search">
                              <div class="main-search morphsearch-search">
                                  <div class="input-group">
                                      <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                      <input type="text" class="form-control">
                                      <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                  </div>
                              </div>
                          </li>
                          <li>
                              <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                  <i class="ti-fullscreen"></i>
                              </a>
                          </li>
                      </ul>
                      <ul class="nav-right">
                          <li class="user-profile header-notification">
                              <a href="#!" class="waves-effect waves-light">
                              <img class="img-fluid" src="img/logo1.png" alt="Theme-Logo" />
                                  <span><?php echo "Xin chào ";Echo $row['admin_ten_dang_nhap'];?> </span>
                                  <i class="ti-angle-down"></i>
                              </a>
                              <ul class="show-notification profile-notification">
                                  <li class="waves-effect waves-light">
                                      <a href="#!">
                                           
                                      </a>
                                  </li>
                                  <li class="waves-effect waves-light">
                                      <a href="profile_admin.php">
                                          <i class="ti-user"></i> Tài khoản
                                      </a>
                                  </li>
                                  <li class="waves-effect waves-light">
                                      <a href="dang_xuat_thuc_hien.php">
                                          <i class="ti-layout-sidebar-left"></i> Đăng xuất
                                      </a>
                                  </li>
                              </ul>
                          </li>
                      </ul>
                  </div>
              </div>
          </nav>

          <div class="pcoded-main-container">
              <div class="pcoded-wrapper">
                  <nav class="pcoded-navbar">
                      <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                      <div class="pcoded-inner-navbar main-menu">
                          <div class="">
                              <div class="main-menu-header">
                              <img class="img-fluid" src="img/logo1.png" alt="Theme-Logo" />
                                  <div class="user-details">
                                      <span id="more-details"><?php echo "Xin chào "; echo $row['admin_ten_dang_nhap'];?><i class="fa fa-caret-down"></i></span>
                                  </div>
                              </div>
        
                              <div class="main-menu-content">
                                  <ul>
                                      <li class="more-details">
                                          <a href="profile_admin.php"><i class="ti-user"></i>Tài khoản</a>
                                          <a href="#!"><i class="ti-settings"></i>Cài đặt</a>
                                          <a href="dang_xuat_thuc_hien.php"><i class="ti-layout-sidebar-left"></i>Đăng xuất</a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                          <div class="pcoded-navigation-label" data-i18n="nav.category.navigation"></div>
                          <ul class="pcoded-item pcoded-left-item">
                              <li class="active">
                                  <a href="index.php" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.dash.main">Trang quản trị</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                          </ul>
                          <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Sản Phẩm</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li>
                                    <a href="quan_tri_san_pham.php" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Quản trị Sản phẩm</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                                <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Tin tức</div>
                                    <ul class="pcoded-item pcoded-left-item">
                                        <li>
                                            <a href="quan_tri_tin_tuc.php" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                                <span class="pcoded-mtext" data-i18n="nav.form-components.main">Quản trị Tin tức</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Khác</div>
                                    <ul class="pcoded-item pcoded-left-item">
                                        <li>
                                            <a href="quan_tri_admin.php" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                                <span class="pcoded-mtext" data-i18n="nav.form-components.main">Quản trị Admin</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="quan_tri_khach_hang.php" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                                <span class="pcoded-mtext" data-i18n="nav.form-components.main">Quản trị Khách hàng</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="quan_tri_don_dat_hang.php" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                                <span class="pcoded-mtext" data-i18n="nav.form-components.main">Quản trị Đơn đặt hàng</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="quan_tri_loai_san_pham.php" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                                <span class="pcoded-mtext" data-i18n="nav.form-components.main">Quản trị Loại Sản phẩm</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                      </div>
                  </nav>
                  <div class="pcoded-content">
                      <!-- Page-header start -->
                      <div class="page-header">
                          <div class="page-block">
                              <div class="row align-items-center">
                                  <div class="col-md-8">
                                      <div class="page-header-title">
                                          <h5 class="m-b-10">Trang quản trị</h5>
                                          <p class="m-b-0">Chào mừng trở lại!</p>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <ul class="breadcrumb-title">
                                          <li class="breadcrumb-item">
                                              <a href="index.php"> <i class="fa fa-home"></i> </a>
                                          </li>
                                          <li class="breadcrumb-item"><a href=index.php>Trang quản trị</a>
                                          </li>
                                          <li class="breadcrumb-item"><a href="quan_tri_san_pham.php">Quản trị sản phẩm</a>
                                          </li>
                                          <li class="breadcrumb-item"><a href="#!">Thêm mới sản phẩm</a>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-xl-8 col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                    	<?php
														include('../config/dbconfig.php');
														$sql="select * from tbl_admin";
														$admin=mysqli_query($ketnoi,$sql);
														$row=mysqli_fetch_array($admin);
														;?>
														<form action="profile_admin_sua_thuc_hien.php" method="POST" enctype="multipart/form-data">
															<div class="Profile">
																<div class="AnhProfile">
                                                                <img style="width:200px;height:200px;" class="img-fluid" src="img/avt.jpg" alt="Theme-Logo" />

																</div>
																<div class="Thongtinkhach">
																	<div class="Thongtinkhach-label1">
																		<label class="Thongtinkhach-label1-1" for="Name">Họ và tên:</label>
																	</div>
																	<div class="Thongtinkhach-input1">
																		<input type="text" name="txtHoTen" class="Thongtinkhach-input1-1" value="<?php echo $row['admin_ten_dang_nhap']; ?>">
																	</div>
																	<hr>
																	<div class="Thongtinkhach-input1">
																		<input type="password" name="txtMatKhau" class="Thongtinkhach-input1-1" value="<?php echo $row['admin_mat_khau']; ?>">
																	</div>
																	<hr>
																	<div class="Thongtinkhach-label2">
																		<label class="Thongtinkhach-label2-1" for="Email">Email:</label>
																	</div>
																	<div class="Thongtinkhach-input2">
																		<input type="text" name="txtEmail" class="Thongtinkhach-input2-1" value="<?php echo $row['admin_email']; ?>">
																	</div>
																	<hr>
																	<div class="Thongtinkhach-label3">
																		<label class="Thongtinkhach-label3-1" for="Phone">Số điện thoại:</label>
																	</div>
																	<div class="Thongtinkhach-input3">
																		<input type="text" name="txtDienThoai" class="Thongtinkhach-input3-1" value="<?php echo $row['admin_dien_thoai']; ?>">
																	</div>
																	<hr>
																	<div class="Thongtinkhach-input5">
																		<button class="Thongtinkhach5-1" type="submit">
																			<input type="hidden" name="txtID" value="<?php echo $row['admin_id'];?>">Lưu thông tin</button>
																	</div>
																	<div class="Thongtinkhach6">
																		<a style="text-decoration: none;" href="admin_doi_mat_khau.php">Đổi mật khẩu</a>
																	</div>
																</div>
															</div>
															</form>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <!-- task, page, download counter  end -->
    
                                            
                                            <!--  project and team member end -->
                                        </div>
                                    </div>
                                    <!-- Page-body end -->
                                </div>
                                <div id="styleSelector"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
    <div class="ie-warning">
        <h1>Warning!!</h1>
        <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
        <div class="iew-container">
            <ul class="iew-download">
                <li>
                    <a href="http://www.google.com/chrome/">
                        <img src="assets/images/browser/chrome.png" alt="Chrome">
                        <div>Chrome</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.mozilla.org/en-US/firefox/new/">
                        <img src="assets/images/browser/firefox.png" alt="Firefox">
                        <div>Firefox</div>
                    </a>
                </li>
                <li>
                    <a href="http://www.opera.com">
                        <img src="assets/images/browser/opera.png" alt="Opera">
                        <div>Opera</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.apple.com/safari/">
                        <img src="assets/images/browser/safari.png" alt="Safari">
                        <div>Safari</div>
                    </a>
                </li>
                <li>
                    <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                        <img src="assets/images/browser/ie.png" alt="">
                        <div>IE (9 & above)</div>
                    </a>
                </li>
            </ul>
        </div>
        <p>Sorry for the inconvenience!</p>
    </div>
    <![endif]-->
    <!-- Warning Section Ends -->
    <!-- partial:partials/_footer.html -->
          <footer style="width: 1312px;margin-left: 225px;position: relative;" class="footer">
            <div class="container-fluid d-flex justify-content-between">
              <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> Website được xây dựng bởi nhóm 6 LTW</span>
            </div>
          </footer>
    <!-- Required Jquery -->
    <script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js "></script>
    <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js "></script>
    <script type="text/javascript" src="assets/pages/widget/excanvas.js "></script>
    <!-- waves js -->
    <script src="assets/pages/waves/js/waves.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js "></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="assets/js/modernizr/modernizr.js "></script>
    <!-- slimscroll js -->
    <script type="text/javascript" src="assets/js/SmoothScroll.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js "></script>
    <!-- Chart js -->
    <script type="text/javascript" src="assets/js/chart.js/Chart.js"></script>
    <!-- amchart js -->
    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="assets/pages/widget/amchart/gauge.js"></script>
    <script src="assets/pages/widget/amchart/serial.js"></script>
    <script src="assets/pages/widget/amchart/light.js"></script>
    <script src="assets/pages/widget/amchart/pie.min.js"></script>
    <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
    <!-- menu js -->
    <script src="assets/js/pcoded.min.js"></script>
    <script src="assets/js/vertical-layout.min.js "></script>
    <!-- custom js -->
    <script type="text/javascript" src="assets/pages/dashboard/custom-dashboard.js"></script>
    <script type="text/javascript" src="assets/js/script.js "></script>
</body>

</html>
