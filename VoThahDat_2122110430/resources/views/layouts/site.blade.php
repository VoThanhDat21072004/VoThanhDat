<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/css/layoutsite.css">
    <link rel="stylesheet" href="assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/owlcarousel/assets/owl.theme.default.min.css">
    <script src="assets/vendors/jquery.min.js"></script>
    <script src="assets/owlcarousel/owl.carousel.js"></script>
    @yield('header')
</head>
<body>
<section class="myheader">
        <class="container py-3>
        <div class="row">
            <div class="col-md-3 py-3">
                <img src="assets/images/logo.webp" class="img-fluid" alt="logo" style="margin-left: 150px;">
            </div>
            <div class="col-md-4">
                <div class="input-group mb-3 py-3">
                    <input type="text" class="form-control border-danger" placeholder="Nhập từ khóa tìm kiếm" 
                    aria-label="Nhập từ khóa tìm kiếm" aria-describedby="basic-addon2">
                    <span class="input-group-text border-danger bg-danger" id="basic-addon2"><i class="fa-solid fa-magnifying-glass" ></i></span>
                  </div>
            </div>
            <div class="col-md-3 py-3">
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col-3">
                                <div class="fs-3 text-danger">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                            </div>
                            <div class="col-9">
                                Tư vấn hỗ trợ<br>
                                <strong class="text-danger">0799442031</strong>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col-3">
                                <div class="fs-3 text-danger">
                                    <i class="fa-regular fa-user"></i>
                                </div>
                            </div>
                            <div class="col-9">
                                Xin Chào<br>
                                <strong class="text-danger">Đăng Nhập</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 py-3">
                <div class="row">
                    <div class="col">
                        <a href="#" class="position-relative">
                            <span class="fs-3"><i class="fa-regular fa-heart"></i></span>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                              10
                            </span>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#" class="position-relative">
                            <span class="fs-3"><i class="fa-solid fa-cart-shopping"></i></span>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                              10
                            </span>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#" class="position-relative">
                            <span class="fs-3"><i class="fa-regular fa-comment"></i></span>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                              10
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
 <!--myheader-->
 <section class="mymainmenu bg-danger">
    <div class="container">
        <div class="row">
            <div class="col-md-3 py-3 text-white">Danh mục sản phẩm</div>
            <div class="col-md-9">
                <nav class="navbar navbar-expand-lg bg-danger">
                    <div class="container-fluid">
                      <a class="navbar-brand d-none" href="#">Navbar</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                            <a class="nav-link text-white active" aria-current="page" href="#">Trang chủ</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-white" href="#">Laptop</a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Sản phẩm
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Action</a></li>
                              <li><a class="dropdown-item" href="#">Another action</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-white disabled" aria-disabled="true">Pc, Màn hình</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-white disabled" aria-disabled="true">Liên hệ</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-white disabled" aria-disabled="true">Kiểm tra đơn hàng</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </nav>
            </div>
        </div>
    </div>
</section>

    <main>
        @yield('content')
    </main>

<section class="myfooter bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h5 class="fs-5">VĂN PHÒNG GIAO DỊCH</h5>
                    <ul class="list-menu">
						
						<li class="li_menu"><a href="/he-thong-cua-hang" title="Cơ sở chính thức">Cơ sở chính thức</a></li>
						
						<li class="li_menu"><a href="/he-thong-cua-hang" title="Địa điểm bán hàng">Địa điểm bán hàng</a></li>
						
						<li class="li_menu"><a href="/gioi-thieu" title="Tuyển cộng tác viên">Tuyển cộng tác viên</a></li>
						
						<li class="li_menu"><a href="/gioi-thieu" title="Tuyển dụng">Tuyển dụng</a></li>
						
						<li class="li_menu"><a href="/gioi-thieu" title="Fanpage trực tuyến">Fanpage trực tuyến</a></li>
				
					</ul>
                </div>
                <div class="col-md-3">
                    <h5 class="fs-5">VỀ CHÚNG TÔI</h5>
                    <ul class="list-menu">
						
						<li class="li_menu"><a href="/he-thong-cua-hang" title="Cơ sở chính thức">Đôi nét về công ty</a></li>
						
						<li class="li_menu"><a href="/he-thong-cua-hang" title="Địa điểm bán hàng">Lịch sử hình thành</a></li>
						
						<li class="li_menu"><a href="/gioi-thieu" title="Tuyển cộng tác viên">Giải thưởng cao quý</a></li>
						
						<li class="li_menu"><a href="/gioi-thieu" title="Tuyển dụng">Cơ hội cho ai</a></li>
						
						<li class="li_menu"><a href="/gioi-thieu" title="Fanpage trực tuyến">Thương hiệu số 1</a></li>
				
					</ul>
                </div>
                <div class="col-md-3">
                    <h5 class="fs-5">CHÍNH SÁCH BÁN HÀNG</h5>
                    <ul class="list-menu">
						
						<li class="li_menu"><a href="/chinh-sach-chung" title="Chính sách chung">Chính sách chung</a></li>
						
						<li class="li_menu"><a href="/chinh-sach-chung" title="Chính sách đổi trả">Chính sách đổi trả</a></li>
						
						<li class="li_menu"><a href="/chinh-sach-chung" title="Chính sách bảo hành">Chính sách bảo hành</a></li>
						
						<li class="li_menu"><a href="/chinh-sach-chung" title="Chính sách thành viên">Chính sách thành viên</a></li>
						
						<li class="li_menu"><a href="/chinh-sach-chung" title="Chính sách điểm thưởng">Chính sách điểm thưởng</a></li>
						
					</ul>
                </div>
                <div class="col-md-3">
                    <h5 class="fs-5">THEO DÕI CHÚNG TÔI</h5>
                    <ul class="list-menu">
						
						<li class="li_menu"><a href="https://www.facebook.com/" title="Theo dõi trên Fanpage">Theo dõi trên Fanpage</a></li>
						
						<li class="li_menu"><a href="https://www.instagram.com/" title="Theo dõi trên Instagram">Theo dõi trên Instagram</a></li>
						
						<li class="li_menu"><a href="https://twitter.com/home?lang=vi" title="Theo dõi trên X">Theo dõi trên X</a></li>
						
						<li class="li_menu"><a href="/" title="Theo dõi trên Tiktok">Theo dõi trên Tiktok</a></li>
						
						<li class="li_menu"><a href="https://www.youtube.com/" title="Theo dõi trên Youtube">Theo dõi trên Youtube</a></li>
						
					</ul>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="fs-5">THẾ GIỚI MOBILE CHO MỌI NGƯỜI</h5>
            <ul>
						<p class="m-0 text-secondary">Copyright@ 2023 Công ty cổ phần thương mại Ego Mobicon</p>
						<p class="m-0 text-secondary">Chứng nhận ĐKKD số: 038828xxxx do sở KH &amp; ĐT TP.Hà Nội cấp</p>
						<p class="m-0 text-secondary">Địa chỉ: Xuân Thủy, Hà Nội</p>
						<p class="m-0 text-secondary">Điện thoại: <a class="fone" href="tel:19006750">19006750</a> 
							- Email: <a href="mailto:support@sapo.vn">Đăng ký</a></p>
					</ul>
                </div>
                <div class="col-md-6">
                    <h5 class="fs-5">NHẬN TIN KHUYẾN MÃI</h5>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Nhập email của bạn" aria-label="Nhập email của bạn" aria-describedby="basic-addon2">
                        <span class="input-group-text bg-danger text-white" id="basic-addon2">Đăng ký</span>
                      </div>
                      <div>
                        <span class="box50 mr-3 bg-primary text-white">
                            <i class="fa-brands fa-facebook-f"></i>
                        </span>
                        <span class="box50 mr-3 text-white" style="background-color: gray;">
                            <i class="fa-brands fa-tiktok"></i>
                        </span>
                        
                        <span class="box50 mr-3 text-danger bg-white" style="color: pink;">
                            <i class="fa-brands fa-youtube"></i>
                        </span>
                                              
                        <span class="box50 mr-3 text-white bg-primary">
                            <i class="fa-brands fa-twitter"></i>
                        </span>
                      </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6 text-secondary">Bản quyền thuộc về Võ Thành Đạt</div>
                <div class="col-md-6  text-secondary text-end">
                    Điện thoại, tablet
                    Laptop
                    Phụ kiện
                    Âm thanh
                    Sản phẩm
                </div>
            </div>
        </div>
</section>
<!--myfooter-->
    @yield('footer')


    <cript src="js/bootstrap.bundle.min.js"></cript>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/layoutsite.js"></script>
    <script>
      $(document).ready(function() {
        $('.owl-carousel').owlCarousel({
          loop: true,
          margin: 10,
          nav: false,
          dots:false,
          responsiveClass: true,
          responsive: {
            0: {
              items: 4,
            },
            600: {
              items: 6,
            },
            1000: {
              items: 8,
              loop: false,
              margin: 20
            }
          }
        })
      })
    </script>
</body>
</html>