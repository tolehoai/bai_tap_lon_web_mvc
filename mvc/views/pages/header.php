
<?php header('Access-Control-Allow-Origin: *');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="keywords" content="MediaCenter, Template, eCommerce">
  <meta name="robots" content="all">
  <title>Trang chủ</title>
  <!-- Google Font  -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap"
    rel="stylesheet">
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script> -->
  
  <script src="<?php echo URL;?>mvc/views/pages/assets/js/jquery.js"></script>
  <script type="text/javascript">

    $(document).ready(function () {
      var loaisanpham = $(".sub1");
      // console.log(loaisanpham);

      $(".sub1").on("click", function () {
        var loaisanphamcanlay = $(this).attr('loaisanpham');
        
        // var str1=str1.concat(loaisanphamcanlay);
        var a='noidung-';
        var b=a.concat(loaisanphamcanlay);
        $.post("./Ajax/GetSubMenu",{loaisanpham:loaisanphamcanlay}, function(data){
          $("."+b).html(data);
          // alert(data);
        })
      });


















      $(".new-arriavls").ready(function(){
        var danhmuc = $(".new-arriavls");
        var myVals = [];
        $(danhmuc).map(function(){
          myVals.push($(this).attr('madanhmuc'));
          var madanhmuc=$(this).attr('madanhmuc');
          var tendanhmuclayduoc=$(this).attr('tendanhmuc');
          var a='san-pham-cua-danh-muc-';
          var b=a.concat(madanhmuc);
          console.log(b);
          // Ajax
          $.post("./Ajax/LaySanPhamTheoDanhMuc",{danhmuc:madanhmuc,tendanhmuc:tendanhmuclayduoc}, function(data){
          $("#"+b).html(data);
          // alert(data);
        })
        // Ajax
        });
        // console.log(myVals);

      })

  








      $(".sub1").on("click", function () {
        // var el =$(this).siblings().hide(500);
        $(this).siblings().toggle(300);
        // console.log(el);

      });
      // When the user scrolls the page, execute myFunction
      window.onscroll = function () { myFunction() };

      // Get the header
      var header = document.getElementById("sanphammoi");
      // console.log(header);
      // Get the offset position of the navbar
      var sticky = header.offsetTop;

      // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
      function myFunction() {
        if (window.pageYOffset > sticky) {
          header.classList.add("sticky");
        } else {
          header.classList.remove("sticky");
        }
      }
    });

  </script>

  <!-- Bootstrap Core CSS -->
  <!-- <link rel="stylesheet" href="./css/bootstrap.min.css"> -->

  <!-- CSS -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
 <link rel="stylesheet" href="<?php echo URL;?>mvc\views\pages\assets\css\bootstrap.css">
  <!-- Customizable CSS -->
 
  <link rel="stylesheet" type="text/css" href="<?php echo URL;?>mvc/views/pages/assets/css/main.css">
  <link rel="stylesheet" type="text/css" href="<?php echo URL;?>mvc/views/pages/assets/css/blue.css">
  <link rel="stylesheet" type="text/css" href="<?php echo URL;?>mvc/views/pages/assets/css/owl.carousel.css">
  <link rel="stylesheet" type="text/css" href="<?php echo URL;?>mvc/views/pages/assets/css/owl.transitions.css">
  <link rel="stylesheet" type="text/css" href="<?php echo URL;?>mvc/views/pages/assets/css/animate.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo URL;?>mvc/views/pages/assets/css/rateit.css">
  <link rel="stylesheet" type="text/css" href="<?php echo URL;?>mvc/views/pages/assets/css/bootstrap-select.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo URL;?>mvc/views/pages/assets/css/style.css">
  <!-- Icons/Glyphs -->
  <link rel="stylesheet" type="text/css"href="<?php echo URL;?>mvc/views/pages/assets/css/font-awesome.css">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap"
    rel="stylesheet">
</head>


<style>
  .slider-img {
    width: 1200px;
  }
  .search-button {
    padding: 29px 25px 19px !important;
}
</style>

<body class="cnt-home">

  <!-- ============================================== HEADER ============================================== -->
  <header class="header-style-1">

    <!-- ============================================== TOP MENU ============================================== -->
    <div class="top-bar animate-dropdown">
      <div class="container-fluid-fluid">
        <div class="header-top-inner">
          <div class="cnt-account">
            <ul class="list-unstyled">
              <?php
              if(isset($_SESSION["userNameLogin"])){
                echo '<li><a href="">Chào <b>'.$_SESSION["userNameLogin"].'</b></a></li>
                      <li><a href="'.URL.'TaiKhoan/DangXuat">Đăng xuất</a></li>                      
                ';

              }
              else{
                echo '<li class="myaccount"><a href="'.URL.'TaiKhoan"><span>Đăng ký</span></a></li>

                <li class="header_cart hidden-xs"><a href="'.URL.'TaiKhoan"><span>Đăng nhập</span></a></li>';
              }
              ?>
              
              


            </ul>
          </div>
          <!-- /.cnt-account -->


          <!-- /.cnt-cart -->
          <div class="clearfix"></div>
        </div>
        <!-- /.header-top-inner -->
      </div>
      <!-- /.container-fluid-fluid -->
    </div>
    <!-- /.header-top -->
    <!-- ============================================== TOP MENU : END ============================================== -->
    <div class="main-header">
      <div class="container-fluid-fluid">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
            <!-- ============================================================= LOGO ============================================================= -->
            <div class="logo"> <a href="<?php echo URL?>" class="w-100"> <img src="<?php echo URL;?>mvc/views/pages/images/logo.PNG" class="logo-img"
                  alt="Logo"></a> </div>
            <!-- /.logo -->
            <!-- ============================================================= LOGO : END ============================================================= -->
          </div>
          <!-- /.logo-holder -->

          <div class="col-lg-7 col-md-6 col-sm-8 col-xs-12 top-search-holder">
            <!-- /.contact-row -->
            <!-- ============================================================= SEARCH AREA ============================================================= -->
            <div class="search-area">
              <form>
                <div class="control-group">

                  <input class="search-field" placeholder="Tìm kiếm sản phẩm" />
                  <a class="search-button" href="#"></a> </div>
              </form>
            </div>
            <!-- /.search-area -->
            <!-- ============================================================= SEARCH AREA : END ============================================================= -->
          </div>
          <!-- /.top-search-holder -->

          <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 top-cart-row item">
            <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-cart2 cart-icon" fill="white"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
            </svg>
            <div class="cart-number">5</div>
          </div>

        </div>


        <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= -->
      </div>
      <!-- /.top-cart-row -->
    </div>
    <!-- /.row -->

    </div>
    <!-- /.container-fluid-fluid -->

    </div>
    <!-- /.main-header -->


    <!-- ============================================== NAVBAR ============================================== -->

    <nav class="navbar navbar-expand-lg navbar-light bg-white py-1 shadow-sm"> <a href="#"
        class="navbar-brand font-weight-bold d-block d-lg-none">MegaMenu</a> <button type="button"
        data-toggle="collapse" data-target="#navbarContent" aria-controls="navbars" aria-expanded="false"
        aria-label="Toggle navigation" class="navbar-toggler"> <span class="navbar-toggler-icon"></span> </button>
      <div id="navbarContent" class="collapse navbar-collapse">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item dropdown megamenu"><a id="megamneu" href="" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false" class="nav-link dropdown-toggle font-weight-bold text-uppercase">SẢN PHẨM</a>
            <div aria-labelledby="megamneu" class="dropdown-menu border-0 p-0 m-0">
              <div class="container">
                <div class="row bg-white rounded-0 m-0 shadow-sm">
                  <div class="col-lg-7 col-xl-8">
                    <div class="p-4">
                      <div class="row">
                        <div class="col-lg-6 mb-4">
                          <h6 class="font-weight-bold text-uppercase">Vợt cầu lông</h6>
                          <ul class="list-unstyled">
                            <li class="nav-item"><a href="" class="nav-link text-small pb-0">Vợt cầu lông Yonex</a>
                            </li>
                            <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Vợt cầu lông Lining</a>
                            </li>
                            <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Vợt cầu lông Victor</a>
                            </li>
                            <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Vợt cầu lông Mizuno</a>
                            </li>
                          </ul>
                        </div>
                        <div class="col-lg-6 mb-4">
                          <h6 class="font-weight-bold text-uppercase">Giày cầu lông</h6>
                          <ul class="list-unstyled">
                            <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Giày cầu lông Yonex</a>
                            </li>
                            <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Giày cầu lông Linng</a>
                            </li>
                            <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Giày cầu lông Victor</a>
                            </li>
                            <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Giày cầu lông Mizuno</a>
                            </li>
                          </ul>
                        </div>
                        <div class="col-lg-6 mb-4">
                          <h6 class="font-weight-bold text-uppercase">Áo cầu lông</h6>
                          <ul class="list-unstyled">
                            <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Áo cầu lông Yonex</a>
                            </li>
                            <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Áo cầu lông Lining</a>
                            </li>
                            <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Áo cầu lông Victor</a>
                            </li>
                            <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Áo cầu lông Mizuno</a>
                            </li>
                          </ul>
                        </div>
                        <div class="col-lg-6 mb-4">
                          <h6 class="font-weight-bold text-uppercase">Quần cầu lông</h6>
                          <ul class="list-unstyled">
                            <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Quần cầu lông Yonex</a>
                            </li>
                            <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Quần cầu lông Lining</a>
                            </li>
                            <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Quần cầu lông Victor</a>
                            </li>
                            <li class="nav-item"><a href="" class="nav-link text-small pb-0 ">Quần cầu lông Mizuno</a>
                            </li>
                          </ul>
                        </div>

                      </div>

                    </div>
                  </div>
                  <div class="col-md-4 itemR">


                    <img src="https://pbs.twimg.com/media/ElYb9AZVMAEkdvQ.jpg" class="img-fluid" alt="Responsive image">

                  </div>
                </div>
              </div>
            </div>
      </div>
      </li>
      <li class="nav-item"><a href="" class="nav-link font-weight-bold text-uppercase">Giới thiệu</a></li>
      <li class="nav-item"><a href="" class="nav-link font-weight-bold text-uppercase">Dịch vụ</a></li>
      <li class="nav-item"><a href="" class="nav-link font-weight-bold text-uppercase">Liên hệ</a></li>
      </ul>
      </div>
    </nav>

    </div>
    <!-- ============================================== NAVBAR : END ============================================== -->


  </header>