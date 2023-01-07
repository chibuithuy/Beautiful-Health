<?php 
  // Mục đích kiểm tra xem người dùng đăng nhập hệ thống hay chưa. Nếu $_SESSION['da_dang_nhap']=1 --> cho phép người dùng truy cập trang này. Ngược lại đẩy người dùng về trang đăng nhập.

  session_start();


;?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="./img/logo1.png">
  <title>Admin | Trang đổi mật khẩu</title>
</head>
<body  style="background-image: url('img/banner1.png');background-size: cover;";>
<div class="login_wrapper">
  <?php 
  include('../config/dbconfig.php');
  $sql="select * from tbl_admin";

  $admin=mysqli_query($ketnoi,$sql);
  $row=mysqli_fetch_array($admin); ;?>
        <div  class="animate form login_form">
          <section class="login_content">
               <div class="col-md-12"></div>
            <form style="text-align: center;" method="post" action="admin_doi_mat_khau_thuc_hien.php">
            <br><br>
             <h1 style="color: black; text-align: center;font-size: 35px;"><b>Đổi mật khẩu </b></h1>
              <div>
                <p style="color: black;" >Mật khẩu cũ</p><input style="height:30px;width: 300px;" type="password" class="form-control" placeholder="Mật khẩu cũ" required name="txtOldPassword" id="txtOldPassword" />
              </div>
              <div>
                <p style="color: black;" >Mật khẩu mới </p><input style="height:30px;width: 300px;" type="password" class="form-control" placeholder="Mật khẩu mới " required name="txtPassword" id="txtPassword" />
              </div>
              <div>
                <p style="color: black;" >Nhập lại mật khẩu mới</p><input style="height:30px;width: 300px;" type="password" class="form-control" placeholder="Nhập lại mật khẩu mới" required name="txtRePassword" id="txtRePassword" />
              </div>
              <br>
              <div>
                <p><input type="hidden" name="txtID" value="<?php echo $row['admin_id'];?>"><button style="background: #EE5057;padding: 10px;color:  #fff;border-radius: 10px;margin: 10px;" >Đổi mật khẩu</button></p>
              </div>
              <div class="clearfix"></div>

            </form>
          </section>
        </div>
      </div>
    </div>
</body>
</html>