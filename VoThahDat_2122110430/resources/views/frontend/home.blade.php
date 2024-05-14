@extends ('layouts.site')
@section('title','Trang chủ')
@section('content')
<div>
<section class="mymaincontent my-3">
        <div class="container">
            <div class="slider mb-3">
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="assets/images/slider_2.webp" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="assets/images/slider_2.webp" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="assets/images/slider_1.webp" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
                <!--slider-->
                <div class="cate-list mb-3">
                  <div class="row">
                      <div class="large-12 columns">
                          <div class="owl-carousel owl-theme">
                            <div class="item">
                             <div class="category-icon">
                                <img src="assets/images/icon1.webp" class="img-fluid w-100 small-image">
                                <h6>Samsung S24 Ultra</h6>
                             </div>
                            </div>
                            <div class="item">
                              <div class="category-icon">
                                <img src="assets/images/icon2.webp" class="img-fluid w-100 small-image">
                                <h6>Redmi Note 11 Pro</h6>
                            </div>
                            
                          </div>
                      </div>
                  </div>
              </div>
                <!--cate-list-->
                <div class="product-list mb-3">
                 <div class="product-title border-bottom">
                  <div class="row">
                    <div class="col-md-4">
                      <strong class="bg-danger text-white">SẢN PHẨM NỔI BẬT</strong>
                    </div>
                    <div class="col-md-8 text-end"> 
                      Điện thoại, tablet      
                      Laptop     
                      Phụ kiện    
                      Âm thanh
                      Sản phẩm
                    </div>
                  </div>
                 </div>
                 <div class="product-list-s py-3">
                  <div class="row">
                    <div class="col-md-3 mb-3">
                      <img src="assets/images/sanpham1.webp" class="img-fluid w-50">
                      <h4 class="card-title">Laptop rog g15</h4>
                      <strong><p class="card-text text-danger">21.925.000đ</p></strong>
                      <a href="#" class="btn btn-primary text-center"><i class="fa-solid fa-cart-shopping" style="margin-right: 5px;"></i>Thêm vào giỏ</a>
                    </div>
                    <div class="col-md-3 mb-3">
                      <img src="assets/images/sanpham2.webp" class="img-fluid w-50">
                      <h4 class="card-title">IPhone 15 Pro</h4>
                      <strong><p class="card-text text-danger">30.425.000đ</p></strong>
                      <a href="#" class="btn btn-primary text-center"><i class="fa-solid fa-cart-shopping" style="margin-right: 5px;"></i>Thêm vào giỏ</a>
                    </div>
                    <div class="col-md-3 mb-3">
                      <img src="assets/images/sanpham3.webp" class="img-fluid w-50">
                      <h4 class="card-title">IPhone 14 Pro</h4>
                      <strong><p class="card-text text-danger">20.530.000đ</p></strong>
                      <a href="#" class="btn btn-primary text-center"><i class="fa-solid fa-cart-shopping" style="margin-right: 5px;"></i>Thêm vào giỏ</a>
                    </div>
                    <div class="col-md-3 mb-3">
                      <img src="assets/images/sanpham4.webp" class="img-fluid w-50">
                      <h4 class="card-title">Macbook Air</h4>
                      <strong><p class="card-text text-danger">42.300.000đ</p></strong>
                                    <a href="#" class="btn btn-primary text-center"><i class="fa-solid fa-cart-shopping" style="margin-right: 5px;"></i>Thêm vào giỏ</a>
                    </div>
                    <div class="col-md-3 mb-3">
                      <img src="assets/images/sanpham5.webp" class="img-fluid w-50">
                      <h4 class="card-title">Macbook Pro</h4>
                      <strong><p class="card-text text-danger">40.425.000đ</p></strong>
                                    <a href="#" class="btn btn-primary text-center"><i class="fa-solid fa-cart-shopping" style="margin-right: 5px;"></i>Thêm vào giỏ</a>
                    </div>
                    <div class="col-md-3 mb-3">
                      <img src="assets/images/sanpham6.webp" class="img-fluid w-50">
                      <h4 class="card-title">Macbook Air</h4>
                      <strong><p class="card-text text-danger">30.425.000đ</p></strong>
                      <a href="#" class="btn btn-primary text-center"><i class="fa-solid fa-cart-shopping" style="margin-right: 5px;"></i>Thêm vào giỏ</a>
                    </div>
                    <div class="col-md-3 mb-3">
                      <img src="assets/images/sanpham7.webp" class="img-fluid w-50">
                      <h4 class="card-title">Macbook Pro</h4>
                      <strong><p class="card-text text-danger">19.425.000đ</p></strong>
                      <a href="#" class="btn btn-primary text-center"><i class="fa-solid fa-cart-shopping" style="margin-right: 5px;"></i>Thêm vào giỏ</a>
                    </div>
                    <div class="col-md-3 mb-3">
                      <img src="assets/images/sanpham8.webp" class="img-fluid w-50">
                      <h4 class="card-title">Redmi Note 12</h4>
                      <strong><p class="card-text text-danger">5.425.000đ</p></strong>
                      <a href="#" class="btn btn-primary text-center"><i class="fa-solid fa-cart-shopping" style="margin-right: 5px;"></i>Thêm vào giỏ</a>
                    </div>
                    <div class="col-md-3 mb-3">
                      <img src="assets/images/sanpham9.webp" class="img-fluid w-50">
                      <h4 class="card-title">Galaxy A34</h4>
                      <strong><p class="card-text text-danger">4.425.000đ</p></strong>
                      <a href="#" class="btn btn-primary text-center"><i class="fa-solid fa-cart-shopping" style="margin-right: 5px;"></i>Thêm vào giỏ</a>
                    </div>
                    <div class="col-md-3 mb-3">
                      <img src="assets/images/sanpham10.webp" class="img-fluid w-50">
                      <h4 class="card-title">IPhone 12 Pro</h4>
                      <strong><p class="card-text text-danger">12.425.000đ</p></strong>
                                    <a href="#" class="btn btn-primary text-center"><i class="fa-solid fa-cart-shopping" style="margin-right: 5px;"></i>Thêm vào giỏ</a>
                    </div>
                    <div class="col-md-3 mb-3">
                      <img src="assets/images/sanpham11.webp" class="img-fluid w-50">
                      <h4 class="card-title">Laptop MSI</h4>
                      <strong><p class="card-text text-danger">14.425.000đ</p></strong>
                      <a href="#" class="btn btn-primary text-center"><i class="fa-solid fa-cart-shopping" style="margin-right: 5px;"></i>Thêm vào giỏ</a>
                    </div>
                    <div class="col-md-3 mb-3">
                      <img src="assets/images/sanpham12.webp" class="d-block w-50">
                      <h4 class="card-title">IPhone 14 Pro</h4>
                      <strong><p class="card-text text-danger">20.425.000đ</p></strong>
                      <a href="#" class="btn btn-primary text-center"><i class="fa-solid fa-cart-shopping" style="margin-right: 5px;"></i>Thêm vào giỏ</a>
                    </div>
                  </div>
                 </div>
                </div>
                  <!--product-list-->
                  <div class="product-list mb-3">
                    <div class="product-title border-bottom">
                     <div class="row">
                       <div class="col-md-4">
                         <strong class="bg-danger text-white">SẢN PHẨM NỔI BẬT</strong>
                       </div>
                     </div>
                    </div>
                    <div class="product-list-s py-3">
                     <div class="row">
                       <div class="col-md-3 mb-3">
                         <img src="assets/images/sanpham1.webp" class="img-fluid w-50">
                         <h4 class="card-title">Laptop rog g15</h4>
                         <strong><p class="card-text text-danger">21.925.000đ</p></strong>
                         <a href="#" class="btn btn-primary text-center"><i class="fa-solid fa-cart-shopping" style="margin-right: 5px;"></i>Thêm vào giỏ</a>
                       </div>
                       <div class="col-md-3 mb-3">
                         <img src="assets/images/sanpham2.webp" class="img-fluid w-50">
                         <h4 class="card-title">IPhone 15 Pro</h4>
                         <strong><p class="card-text text-danger">30.425.000đ</p></strong>
                         <a href="#" class="btn btn-primary text-center"><i class="fa-solid fa-cart-shopping" style="margin-right: 5px;"></i>Thêm vào giỏ</a>
                       </div>
                       <div class="col-md-3 mb-3">
                         <img src="assets/images/sanpham3.webp" class="img-fluid w-50">
                         <h4 class="card-title">IPhone 14 Pro</h4>
                         <strong><p class="card-text text-danger">20.530.000đ</p></strong>
                         <a href="#" class="btn btn-primary text-center"><i class="fa-solid fa-cart-shopping" style="margin-right: 5px;"></i>Thêm vào giỏ</a>
                       </div>
                       <div class="col-md-3 mb-3">
                         <img src="assets/images/sanpham4.webp" class="img-fluid w-50">
                         <h4 class="card-title">Macbook Air</h4>
                         <strong><p class="card-text text-danger">42.300.000đ</p></strong>
                                       <a href="#" class="btn btn-primary text-center"><i class="fa-solid fa-cart-shopping" style="margin-right: 5px;"></i>Thêm vào giỏ</a>
                       </div>
                       
                       <div class="col-md-3 mb-3">
                         <img src="assets/images/sanpham9.webp" class="img-fluid w-50">
                         <h4 class="card-title">Galaxy A34</h4>
                         <strong><p class="card-text text-danger">4.425.000đ</p></strong>
                         <a href="#" class="btn btn-primary text-center"><i class="fa-solid fa-cart-shopping" style="margin-right: 5px;"></i>Thêm vào giỏ</a>
                       </div>
                       <div class="col-md-3 mb-3">
                         <img src="assets/images/sanpham10.webp" class="img-fluid w-50">
                         <h4 class="card-title">IPhone 12 Pro</h4>
                         <strong><p class="card-text text-danger">12.425.000đ</p></strong>
                                       <a href="#" class="btn btn-primary text-center"><i class="fa-solid fa-cart-shopping" style="margin-right: 5px;"></i>Thêm vào giỏ</a>
                       </div>
                       <div class="col-md-3 mb-3">
                         <img src="assets/images/sanpham11.webp" class="img-fluid w-50">
                         <h4 class="card-title">Laptop MSI</h4>
                         <strong><p class="card-text text-danger">14.425.000đ</p></strong>
                         <a href="#" class="btn btn-primary text-center"><i class="fa-solid fa-cart-shopping" style="margin-right: 5px;"></i>Thêm vào giỏ</a>
                       </div>
                       <div class="col-md-3 mb-3">
                         <img src="assets/images/sanpham12.webp" class="d-block w-50">
                         <h4 class="card-title">IPhone 14 Pro</h4>
                         <strong><p class="card-text text-danger">20.425.000đ</p></strong>
                         <a href="#" class="btn btn-primary text-center"><i class="fa-solid fa-cart-shopping" style="margin-right: 5px;"></i>Thêm vào giỏ</a>
                       </div>
                     </div>
                    </div>
                   </div>
                    <!--product-list-->
</section>
</div>
@endsection
