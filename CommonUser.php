<?php
session_start();
if(isset($_SESSION['login'])==true){
 
}
else{
  header("location:index.php");
}
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
  <link rel="stylesheet" href="assets/css/imgcss/imgspeaker.css">


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
                      <li><a href="#tongquan">Trang Chủ</a></li>
                      <li><a href="#thongtin">Thông Tin</a></li>
                      <li><a href="#diengia">Diễn Giả</a></li>
                      <li><a href="#lichtrinh">Lịch Trình</a></li>
                    </ul>
                  </nav>
                </div>

                <div class="dropdown show" style="margin-bottom: 28px;">
                  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-user"></i> <?php 
                  if(isset($_SESSION['fullname']))
                  echo $_SESSION['fullname'];
                  ?>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="InforUser.php">Thông Tin Cá Nhân</a>
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
    <!-- Hình ảnh tổng quan về hội thảo -->
    <section id="tongquan">
      <div class="slider-area position-relative">
        <!-- Single Slider -->
        <div class="slider-height d-flex align-items-center">
          <div class="container">
            <div class="row">
              <div class="col-xl-8 col-lg-8 col-md-9 col-sm-10">
                <div class="hero__caption">
                  <h1>HỘI THẢO KHOA HỌC MACHINE LEARNING</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--Đồng hồ đếm ngược-->
      <div class="counter-section d-none d-sm-block">
        <div class="cd-timer" id="demnguoc">
        </div>
      </div>
    </section>
    <!-- Giới thiệu chung  về nội dung của hội thảo  -->
    <section class="about-low-area section-padding2" id="thongtin">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12">
            <div class="about-caption mb-50">
              <!-- Tiêu đề -->
              <div class="section-tittle mb-">
                <h2>Ba điểm nhấn tại hội thảo AI và RPA</h2>
              </div>
              <!-- nội dung -->
              <p>1.Chia sẻ về ứng dụng AI và RPA từ các chuyên gia</p>
              <p>2.Những xu hướng và cách thức ứng dụng AI và RPA</p>
              <p>3.Tư vấn trực tiếp cho doanh nghiệp</p>
            </div>
            <!-- Địa chỉ và thời gian -->
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-10">
                <div class="single-caption mb-20">
                  <div class="caption-icon">
                    <span class="flaticon-communications-1"></span>
                  </div>
                  <div class="caption">
                    <h5>Địa Điểm</h5>
                    <p>Thị trấn Chờ, Yên Phong, Bắc Ninh</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-10">
                <div class="single-caption mb-20">
                  <div class="caption-icon">
                    <span class="flaticon-education"></span>
                  </div>
                  <div class="caption">
                    <h5>Thời Gian</h5>
                    <p>13 tháng 12 năm 2020</p>
                  </div>
                </div>
              </div>
            </div>
            <a href="controller/SubcriberEvent.php" class="btn mt-50" style="background-color:cyan;">Đặt Vé Nào</a>
          </div>


          <div class="col-lg-6 col-md-12">
            <!-- Hình ảnh minh họa cho đẹp :)) -->
            <div class="about-img ">
              <div class="about-back-img ">
                <img src="assets/img/imgdemo/ht11.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- hình ảnh -->
    <section>
      <div class="gallery-area fix">
        <div class="container-fluid p-0">
          <div class="row no-gutters">
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="gallery-box">
                <div class="single-gallery">
                  <div class="gallery-img " style="background-image: url(assets/img/imgdemo/ht1.jpg);"></div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="gallery-box">
                <div class="single-gallery">
                  <div class="gallery-img " style="background-image: url(assets/img/imgdemo/ht8.jpg);"></div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="gallery-box">
                <div class="single-gallery">
                  <div class="gallery-img " style="background-image: url(assets/img/imgdemo/ht7.jpeg);"></div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="gallery-box">
                <div class="single-gallery">
                  <div class="gallery-img " style="background-image: url(assets/img/imgdemo/ht5.jpg);"></div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="gallery-box">
                <div class="single-gallery">
                  <div class="gallery-img " style="background-image: url(assets/img/imgdemo/ht9.jpg);"></div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
              <div class="gallery-box">
                <div class="single-gallery">
                  <div class="gallery-img " style="background-image: url(assets/img/imgdemo/ht10.png);"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- dien gia -->
    <section class="team-area pt-180 pb-100 section-bg" id="diengia">
      <div class="section-tittle mb-35 text-center">
        <h2>Diễn Giả</h2>
      </div>
      <div class="container">
        <div class="row">
        <?php
                require_once "controller/userControl.php";
                $usercontrol=new userControl();
                $listSpeaker=$usercontrol->getALLSpeaker();
                while($row=$listSpeaker->fetch_assoc()){
                echo'
                  <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="single-team mb-30">
                        <div class="team-img">';
                    
                        if(is_null($row['avatar'])||$row==''){
                        echo '<img src="avatar/AvatarDefault.png" id="img" alt="">';
                          
                        }
                        else{
                        echo '<img src="'.$row['avatar'].'" id="img" alt="">';
                        }
                            echo '<ul class="team-social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fas fa-globe"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-caption">
                            <h3><a href="#">'.$row['fullname'].'</a></h3>

                        </div>
                    </div>
                </div>';
                }
              ?>
        </div>
      </div>
    </section>
    <!-- lichtrinh -->
    <section id="lichtrinh">
      <div class="container-fluid background">
        <div class="container keodai" style="background-color: aqua; width: 100%;">
          <h1 class="text-center xuongdong">Lịch Sự Kiện diễn ra</h1>
          <div class='schedule-task-item-container margin100'>
            <div class='schedule-task-item-due'>
              <div class='schedule-task-item-due-upper'>
                Ngày
              </div>
              <div class='schedule-task-item-due-lower'>
                1
              </div>
            </div>
            <div class='schedule-task-item-content'>
              <div class='schedule-task-item-content-title'>
                <span class='schedule-task-item-content-title-text'>
                  Lịch Trình
                </span>
                <span class='schedule-task-item-content-title-icons'>
                </span>
              </div>
              <div class='schedule-task-item-content-content'>
                - Giới Thiệu tổng quan về chương trình<br>
                - Chia sẻ về ứng dụng AI và RPA từ các chuyên gia<br>
                - Trải nghiệm ứng dụng<br>
              </div>
            </div>
          </div>

          <div class='schedule-task-item-container ma margin100'>
            <div class='schedule-task-item-due'>
              <div class='schedule-task-item-due-upper'>
                Ngày
              </div>
              <div class='schedule-task-item-due-lower'>
                2
              </div>
            </div>
            <div class='schedule-task-item-content'>
              <div class='schedule-task-item-content-title'>
                <span class='schedule-task-item-content-title-text'>
                  Lịch Trình
                </span>
                <span class='schedule-task-item-content-title-icons'>
                </span>
              </div>
              <div class='schedule-task-item-content-content'>
                - Những xu hướng AI và RPA<br>
                - Cách thức ứng dụng AI và RPA<br>
                - Doanh nghiệp có thể trực tiếp trải nghiệm các sản phẩm <br>
              </div>
            </div>
          </div>

          <div class='schedule-task-item-container margin100'>
            <div class='schedule-task-item-due'>
              <div class='schedule-task-item-due-upper'>
                Ngày
              </div>
              <div class='schedule-task-item-due-lower'>
                3
              </div>
            </div>
            <div class='schedule-task-item-content'>
              <div class='schedule-task-item-content-title'>
                <span class='schedule-task-item-content-title-text'>
                  Lịch Trình
                </span>
                <span class='schedule-task-item-content-title-icons'>

                </span>
              </div>
              <div class='schedule-task-item-content-content'>
                - Tư vấn trực tiếp cho doanh nghiệp<br>
                - Giám đốc công nghệ FPT Lê Hồng Việt cho biết nhận thức và mối quan tâm của các công ty Việt Nam<br>
                - Hai đại diện công nghệ của FPT sẽ tập trung giới thiệu về những sản phẩm AI và RPA nổi bật hiện nay<br>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      </div>
    </section>

    <!-- Giá Vé -->

  </main>

  <footer>
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