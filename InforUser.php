<?php
session_start();
if(isset($_SESSION['login'])==true){
}
else{
  header("location:index.php");
}
$id = $_SESSION['id'];
require_once "controller/userControl.php";
$usercontrol = new userControl();
$user = $usercontrol->getUserById($id);
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Hoang Hung</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="manifest" href="site.webmanifest" />
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico" />

  <!-- CSS here -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
  <link rel="stylesheet" href="assets/css/slicknav.css" />
  <link rel="stylesheet" href="assets/css/flaticon.css" />
  <link rel="stylesheet" href="assets/css/gijgo.css" />
  <link rel="stylesheet" href="assets/css/animate.min.css" />
  <link rel="stylesheet" href="assets/css/magnific-popup.css" />
  <link rel="stylesheet" href="assets/css/fontawesome-all.min.css" />
  <link rel="stylesheet" href="assets/css/themify-icons.css" />
  <link rel="stylesheet" href="assets/css/slick.css" />
  <link rel="stylesheet" href="assets/css/nice-select.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/navpointer.css">
  <link rel="stylesheet" href="assets/css/price.css">
  <link rel="stylesheet" href="assets/css/schedule.css">
  <!-- <link rel="stylesheet" href="assets/css/imgcss/avatar.css"> -->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="assets/css/imgcss/imgid.css">
</head>

<body>
  <!-- hiệu ứng load file -->
  <div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
      <div class="preloader-inner position-relative">
        <div class="preloader-circle"></div>
        <div class="preloader-img pere-text">
          <img src="assets/img/logo/loder.png" alt="" />
        </div>
      </div>
    </div>
  </div>
  <!-- Preloader Start -->
  <header>
    <!--Narbar cac fuction cho user -->
    <div class="header-area">
      <div class="main-header header-sticky">
        <div class="container-fluid">
          <div class="row align-items-center">
            <!-- Logo công ty-->
            <div class="col-xl-2 col-lg-2 col-md-1">
              <div class="logo">
                <a href="index.html"><img src="assets/img/logo/hoanghung.png" alt="" /></a>
              </div>
            </div>
            <div class="col-xl-10 col-lg-10 col-md-10">
              <div class="menu-main d-flex align-items-center justify-content-end">
                <!--Các fuction-->
                <div class="main-menu f-right d-lg-block">
                  <nav>

                    <ul>
                      <li><a href="CommonUser.php">Trang Chủ</a></li>
                      <li><a href="CommonUser.php">Thông Tin</a></li>
                      <li><a href="CommonUser.php">Diễn Giả</a></li>
                      <li><a href="CommonUser.php">Lịch Trình</a></li>
                    </ul>
                  </nav>
                </div>

                <div class="dropdown show" style="margin-bottom: 28px;">
                  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user"></i> <?php
                                                if (isset($_SESSION['fullname']))
                                                  echo $_SESSION['fullname'];
                                                ?>
                  </a>

                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Thông Tin Cá Nhân</a>
                    <a class="dropdown-item" href="controller/deleteSession.php">Đăng Xuất</a>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- kết thúc narbar -->
  </header>
  <main>
    <!-- Modal -->
    <div class="modal fade" id="avatar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-center" id="exampleModalLabel">Sửa thông tin</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="user-profilesinglepage" id="avatar-header">
              <div class="avatar-header">
                <form action="controller/uploadFile.php" method="POST" enctype="multipart/form-data">
                  <div class="avatar-wrapper">
                    <?php
                    if ($_SESSION['avatar'] == '') {
                      echo '<img class="profile-pic" id="img" src=""/>';
                    } else {
                      $src = $_SESSION['avatar'];
                      echo '<img class="profile-pic" id="img" src="' . $src . '" />';
                    }
                    ?>
                    <div class="upload-button">
                    </div>
                    <input class="file-upload" name="file" type="file">
                  </div>
                  <button class="btn-success" style="margin-top: 15px;">SAVE</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="assets/js/avatar.js"></script>



    <div class="modal fade" id="update" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-center" id="exampleModalLabel">Sửa thông tin</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="controller/updateUser.php" method="POST">
              <div class="form-group">
                <label for="exampleInputEmail1">Họ Tên</label>
                <input type="text" class="form-control" name="fullname" value="<?= $user['fullname'] ?>" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" name="email" value="<?= $user['email'] ?>" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Địa Chỉ</label>
                <input type="text" class="form-control" name="address" value="<?= $user['address'] ?>" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Số Điện Thoại</label>
                <input type="number" class="form-control" name="phone" value="<?= $user['phone'] ?>" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Mật khẩu</label>
                <input type="text" class="form-control" name="password" value="<?= $user['password'] ?>" required>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                <button type="submit" class="btn btn-primary">Lưu</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>




    <!-- Giới thiệu chung  về nội dung của hội thảo  -->
    <div class="container-fluid" style="background-color: cadetblue;">
      <div class="container" style="background-color: white;">
        <h3 class="text-center" style="padding: 40px;color:aqua;background-color:burlywood;;">Thông tin người dùng</h3>
        <div class="row" style="">
          <div class="col-lg-6 col-md-12">
            <?php
            if (is_null($_SESSION['avatar']) || $_SESSION['avatar'] == '')
              echo '<img src="avatar/AvatarDefault.png" id="img" alt="">';
            else
              echo '<img src="' . $_SESSION['avatar'] . '" id="img" alt="">'
            ?>
          </div>
          <div class="col-lg-6 col-md-12" style="margin-top: 45px;">

            <form method="POST" action="controller/updateUserParticipant.php">
              <input type="hidden" class="form-control align-center" name="id" value="<?= $iduser ?>" readonly>
              <div class="form-group">
                <label>Họ Tên:</label>
                <input type="text" class="form-control align-center" name="fullname" value="<?= $user['fullname'] ?>" readonly>
              </div>

              <div class="form-group">
                <label>Email:</label>
                <input type="email" class="form-control align-center" name="email" value="<?= $user['email'] ?>" readonly>

              </div>
              <div class="form-group">
                <label>Địa chỉ:</label>
                <input type="text" class="form-control align-center" name="address" value="<?= $user['address'] ?>" readonly>
              </div>
              <div class="form-group">
                <label for="pwd">SĐT:</label>
                <input type="number" class="form-control" name="phone" value="<?= $user['phone'] ?>" readonly>
              </div>
              <!-- <button type="submit" class="btn btn-info">Sửa thông tin</button> -->
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#update"><i class="fas fa-edit"></i>Sửa thông tin</button>
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#avatar"><i class="fas fa-edit"></i>Cập nhật ảnh đại diện</button>

            </form>

          </div>
        </div>
      </div>


  </main>
  <footer style="margin-top: 20px;">
    <!-- Footer -->
    <div class="footer-area footer-padding">
      <div class="container">
        <div class="row d-flex justify-content-between">
          <div class="col-xl-4">
            <div class="single-footer-caption mb-50">
              <div class="single-footer-caption mb-30">
                <div class="footer-tittle">
                  <h4> Hội thảo AI và RPA</h4>
                  <div class="footer-pera">
                    <p>
                      Hội thảo "Bứt phá trong trải nghiệm khách hàng với công nghệ AI và RPA"
                      ngày 2/7 tới là sự kiện hấp dẫn cho các tổ chức, doanh nghiệp tài chính, bảo hiểm, ngân hàng
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4">
            <div class="single-footer-caption mb-50">
              <div class="footer-tittle">
                <h4>Liên Hệ</h4>
                <ul>
                  <li>
                    <p><a>Gmail: hungcn8b@gmail.com</a></p>
                  </li>
                  <li><a style="font-size: 20px;">SĐT : 0335038168</a></li>
                  <li><a style="font-size: 20px;">Địa chỉ: Thị Trấn Chờ,Yên Phong, Bắc Ninh</a></li>
                </ul>
                <ul class="socail-contact" id="contact">
                  <li><a><i class="fab fa-facebook-square"></i></a></li>
                  <li><a><i class="fab fa-youtube"></i></a></li>
                  <li><a><i class="fab fa-google-plus-square"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-xl-4">
            <div class="single-footer-caption mb-50">
              <div class="footer-tittle">
                <h4>Theo dõi chúng tôi</h4>
                <div class="footer-pera footer-pera2">
                  <p>
                    Nhập email để đăng ký nhận những thông tin hữu ích về học tập từ sự kiện
                  </p>
                </div>
                <!-- Form nhap email -->
                <div class="footer-form">
                  <div id="mc_embed_signup">
                    <form>
                      <input placeholder="Email Address">
                      <div class="form-icon">
                        <button>
                          <img src="assets/img/gallery/form.png" alt="" />
                        </button>
                      </div>
                      <div class="mt-10 info"></div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end-->
  </footer>

  <!-- Scroll Up -->
    <div id="back-top">
      <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

  <!-- JS  -->
  <script src="./assets/js/demnguoc.js"></script>
  <script src="./assets/js/lichtrinh.js"></script>

  <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
  <script src="./assets/js/jquery.slicknav.min.js"></script>

  <script src="./assets/js/plugins.js"></script>
  <script src="./assets/js/main.js"></script>
</body>

</html>