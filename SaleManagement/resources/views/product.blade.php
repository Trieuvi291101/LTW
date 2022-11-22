
@extends('layout')
@section('content')
    <!-- slide - menu list -->
    <section class="menu-slide">
        <div class="container">
            <div class="row">
                <nav class="menu__nav col-lg-3 col-md-12 col-sm-0">
                    <ul class="menu__list">
                        <li class="menu__item menu__item--active">
                            <a href="#" class="menu__link">
                            <img src="images/item/phone.jfif" alt=""  class="menu__item-icon" id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512">
                            Điện thoại</a>
                        </li>
                        <li class="menu__item">
                            <a href="#" class="menu__link">
                                <img src="images/item/tablet.webp" alt="" class="menu__item-icon"  viewBox="0 0 512 512" width="1012" height="512">

                            Máy tính bảng</a>
                        </li>
                        <li class="menu__item">
                            <a href="#" class="menu__link">
                            <img src="images/item/laptop.jfif" alt="" class="menu__item-icon" id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512">
                            Laptop</a>
                        </li
                    </ul>
                </nav>
                <div class="slider col-lg-9 col-md-12 col-sm-0">
                    <div class="row">
                        <div class="slide__left col-lg-8 col-md-0 col-sm-0">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="images/banner/1.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                      <img src="images/banner/1.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                      <img src="images/banner/1.jpg" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <div class="slide__left-bottom">
                                <div class="slide__left-botom-one">
                                    <img src="images/banner/banner1.gif" class="slide__left-bottom-one-img">
                                </div>
                                <div class="slide__left-bottom-two">
                                    <img src="images/banner/lazBanner.gif" class="slide__left-bottom-tow-img">
                                </div>
                            </div>
                        </div>

                        <div class="slide__right col-lg-4 col-md-0 col-sm-0">
                            <img src="images/banner/4.png" class="slide__right-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end slide menu list -->
<!-- score-top-->

<button onclick="topFunction()" id="myBtn-scroll" title="Go to top"><i class="fas fa-chevron-up"></i></i></button>
    <!-- bestselling product -->
    <section class="bestselling">
        <div class="container">
            <div class="main-carousel">
                <div class="row justify-content-center">
                    <div class="carousel-phone__heading">Top sản phẩm hot</div>
                </div>
                
                <div class="main-carousel-phone">
                @foreach($product as $p)
                    <div class="Samsung-Galaxy-ZFold3-5G product__panel-item col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="product__panel-item-wrap">
                            <div class="product__panel-img-wrap">
                                <img src="{{$p->image}}" alt="" class="product__panel-img">
                            </div>
                            
                            <div class="product__panel-text">
                                <h3 class="product__panel-heading">
                                    <a href="#" class="product__panel-link">{{$p->name}}</a>
                                </h3>
                                <div class="product__panel-rate-wrap">
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                    <i class="fas fa-star product__panel-rate"></i>
                                </div>
                                <div class="product__panel-price">
                                    <span class="product__panel-price-current">
                                    @php echo number_format($p->price, 0); @endphp
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="bestselling__heading-wrap">
                    <img src="images/bestselling.png" alt="Sản phẩm bán chạy"
                    class="bestselling__heading-img">
                    <div class="bestselling__heading">Top bán chạy nhất tháng</div>
                </div>
            </div>
            <section class="row">
                <div class="Iphone-11 bestselling__product col-lg-4 col-md-6 col-6">
                    <div class="bestselling__product-img-box">
                        <img src="images/stm32.jpg" alt="Oppo zeno 7" class="bestselling__product-img">
                    </div>
                    <div class="bestselling__product-text">
                        <h3 class="bestselling__product-title">
                            <a href="#" class="bestselling__product-link">OPPO Reno7 series</a>
                        </h3>

                        <div class="bestselling__product-rate-wrap">
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                            
                        </div>

                        <span class="bestselling__product-price">
                            9.990.000đ
                        </span>

                        <div class="bestselling__product-btn-wrap">
                        
                            <button  class="bestselling__product-btn">
                                <a href="#" class="info_product_link" >Xem Hàng</a></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="Iphone-11 bestselling__product col-lg-4 col-md-6 col-6">
                    <div class="bestselling__product-img-box">
                        <img src="images/stm32.jpg" alt="Oppo zeno 7" class="bestselling__product-img">
                    </div>
                    <div class="bestselling__product-text">
                        <h3 class="bestselling__product-title">
                            <a href="#" class="bestselling__product-link">OPPO Reno7 series</a>
                        </h3>

                        <div class="bestselling__product-rate-wrap">
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                            
                        </div>

                        <span class="bestselling__product-price">
                            9.990.000đ
                        </span>

                        <div class="bestselling__product-btn-wrap">
                        
                            <button  class="bestselling__product-btn">
                                <a href="#" class="info_product_link" >Xem Hàng</a></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="Iphone-11 bestselling__product col-lg-4 col-md-6 col-6">
                    <div class="bestselling__product-img-box">
                        <img src="images/stm32.jpg" alt="Oppo zeno 7" class="bestselling__product-img">
                    </div>
                    <div class="bestselling__product-text">
                        <h3 class="bestselling__product-title">
                            <a href="#" class="bestselling__product-link">OPPO Reno7 series</a>
                        </h3>

                        <div class="bestselling__product-rate-wrap">
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                            
                        </div>

                        <span class="bestselling__product-price">
                            9.990.000đ
                        </span>

                        <div class="bestselling__product-btn-wrap">
                        
                            <button  class="bestselling__product-btn">
                                <a href="#" class="info_product_link" >Xem Hàng</a></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="Iphone-11 bestselling__product col-lg-4 col-md-6 col-6">
                    <div class="bestselling__product-img-box">
                        <img src="images/stm32.jpg" alt="Oppo zeno 7" class="bestselling__product-img">
                    </div>
                    <div class="bestselling__product-text">
                        <h3 class="bestselling__product-title">
                            <a href="#" class="bestselling__product-link">OPPO Reno7 series</a>
                        </h3>

                        <div class="bestselling__product-rate-wrap">
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                            
                        </div>

                        <span class="bestselling__product-price">
                            9.990.000đ
                        </span>

                        <div class="bestselling__product-btn-wrap">
                        
                            <button  class="bestselling__product-btn">
                                <a href="#" class="info_product_link" >Xem Hàng</a></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="Iphone-11 bestselling__product col-lg-4 col-md-6 col-6">
                    <div class="bestselling__product-img-box">
                        <img src="images/stm32.jpg" alt="Oppo zeno 7" class="bestselling__product-img">
                    </div>
                    <div class="bestselling__product-text">
                        <h3 class="bestselling__product-title">
                            <a href="#" class="bestselling__product-link">OPPO Reno7 series</a>
                        </h3>

                        <div class="bestselling__product-rate-wrap">
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                            
                        </div>

                        <span class="bestselling__product-price">
                            9.990.000đ
                        </span>

                        <div class="bestselling__product-btn-wrap">
                        
                            <button  class="bestselling__product-btn">
                                <a href="#" class="info_product_link" >Xem Hàng</a></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="Iphone-11 bestselling__product col-lg-4 col-md-6 col-6">
                    <div class="bestselling__product-img-box">
                        <img src="images/stm32.jpg" alt="Oppo zeno 7" class="bestselling__product-img">
                    </div>
                    <div class="bestselling__product-text">
                        <h3 class="bestselling__product-title">
                            <a href="#" class="bestselling__product-link">OPPO Reno7 series</a>
                        </h3>

                        <div class="bestselling__product-rate-wrap">
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                            <i class="fas fa-star bestselling__product-rate"></i>
                            
                        </div>

                        <span class="bestselling__product-price">
                            9.990.000đ
                        </span>

                        <div class="bestselling__product-btn-wrap">
                        
                            <button  class="bestselling__product-btn">
                                <a href="#" class="info_product_link" >Xem Hàng</a></span>
                            </button>
                        </div>
                    </div>
                </div>
            </section>
            <div class="row bestselling__banner">

                <div class="bestselling__banner-left col-lg-6">
                    <img src="images/banner/1.jpg" alt="Banner quảng cáo"
                    class="bestselling__banner-left-img">
                </div>
                <div class="bestselling__banner-right col-lg-6">
                    <img src="images/banner/1.jpg" alt="Banner quảng cáo"
                    class="bestselling__banner-right-img">
                </div>
            </div>
        </div>  
    </section>
    <!-- end bestselling product -->

    <!-- product -->
    <section class="product">
        <div class="container">
            <div class="row">
                <aside class="product__sidebar col-lg-3 col-md-0 col-sm-12">
                    <div class="product__sidebar-heading">
                        <div class=""></div>
                        <h2 class="product__sidebar-title">
                        <!-- <img src="" alt="" class="menu__item-icon" id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512"> -->
                       Phụ Kiện</h2>
                    </div>

                   

                    <div class="product__sidebar-img-wrap">
                        <!-- <img src="images1/product/Demon Slayer_ Kimetsu no Yaiba - Assista na Crunchyroll.png" width="255" height="350" alt=""> -->
                        <video width="255" height="200" controls>
                        <source src="video/vivo V21 5G x @J97 Jack  - Trọn Từng Phút Đẹp Từng Giây.mp4" type="video/mp4">
                        </video>
                        <!-- <img src="images/banner_7.jpg" alt="" class="product__sidebar-img"> -->
                    </div>
                    

                    <div class="product__sidebar-img-wrap">
                        <!-- <img src="images1/product/Demon Slayer_ Kimetsu no Yaiba - Assista na Crunchyroll.png" width="255" height="350" alt=""> -->
                        <video width="255" height="200" controls>
                        <source src="video/video gioi thieu.mp4" type="video/mp4">
                        </video>
                        <!-- <img src="images/banner_7.jpg" alt="" class="product__sidebar-img"> -->
                    </div>
                </aside>

                <article class="product__content col-lg-9 col-md-12">
                    <nav class="row">
                        <ul class="product__list hide-on-mobile">
                            <li class="product__item product__item--active">
                                <a href="#" class="product__link">Tool, Thiết Bị, Phụ Kiện</a>
                            </li>
                            <li class="product__item">
                                <a href="#" class="product__link"> Linh Kiện Bán Dẫn</a>
                            </li>
                            <li class="product__item">
                                <a href="#" class="product__link">Module</a>
                            </li>
                            <li class="product__item">
                                <a href="#" class="product__link">Tool Test</a>
                            </li>
                        </ul>

                        <div class="product__title-mobile">
                            <h2>Tool, Thiết Bị, Phụ Kiện</h2>
                        </div>
                    </nav>

                    <div class="row product__panel">
                    @foreach($product as $p)

                        <div class="Samsung-Galaxy-ZFold3-5G product__panel-item col-lg-3 col-md-4 col-sm-6 col-6">
                            <div class="product__panel-item-wrap">
                                <div class="product__panel-img-wrap">
                                    <img src="{{$p->image}}" alt="" class="product__panel-img">
                                </div>
                                
                                <div class="product__panel-text">
                                    <h3 class="product__panel-heading">
                                        <a href="#" class="product__panel-link">{{$p->name}}</a>
                                    </h3>
                                    <div class="product__panel-rate-wrap">
                                        <i class="fas fa-star product__panel-rate"></i>
                                        <i class="fas fa-star product__panel-rate"></i>
                                        <i class="fas fa-star product__panel-rate"></i>
                                        <i class="fas fa-star product__panel-rate"></i>
                                        <i class="fas fa-star product__panel-rate"></i>
                                    </div>
                                    <div class="product__panel-price">
                                        <span class="product__panel-price-current">
                                        @php echo number_format($p->price, 0); @endphp
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </article>
            </div>
        </div>
    </section>
    <!--end product -->

    <!-- post -->
    <section class="posts">
        <div class="container">
            <div class="slide-user-online">
                <div class="swiper mySwiper container">
                    <div class="swiper-wrapper content">
                        
                        <div class="swiper-slide card ">
                            <div class="card-content">
                                <div class="image">
                                    <img src="images/hien.jpg"  alt="">
                                </div>
                                <div class="name-profession">
                                    <span class="name">Hiền mỏ chu</span>
                                    <span class="profession">(Nhân viên tư vấn)</span>
                                </div>
                                <div class="button">
                                    <button class="aboutMe">
                                        <a href="javascript:0">
                                            <i class="fa fa-phone" aria-hidden="true" style=" font-size: 14px;"></i>
                                            Liên hệ
                                        </a>
                                    </button>
                                    <button class="hireMe">
                                        <a href="javascript:0">
                                            <i class="fa fa-comment" aria-hidden="true" style=" font-size: 14px;"></i>
                                            Nhắn tin
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide card ">
                            <div class="card-content">
                                <div class="image">
                                    <img src="images/hong.jpg"  alt="">
                                </div>
                                <div class="name-profession">
                                    <span class="name">Bích Hồng</span>
                                    <span class="profession">(Nhân viên tư vấn)</span>
                                </div>
                                <div class="button">
                                    <button class="aboutMe">
                                        <a href="javascript:0">
                                            <i class="fa fa-phone" aria-hidden="true" style=" font-size: 14px;"></i>
                                            Liên hệ
                                        </a>
                                    </button>
                                    <button class="hireMe">
                                        <a href="javascript:0">
                                            <i class="fa fa-comment" aria-hidden="true" style=" font-size: 14px;"></i>
                                            Nhắn tin
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide card ">
                            <div class="card-content">
                                <div class="image">
                                    <img src="images/hung.jpg"  alt="">
                                </div>
                                <div class="name-profession">
                                    <span class="name">Hùng Bê đê</span>
                                    <span class="profession">(Nhân viên tư vấn)</span>
                                </div>
                                <div class="button">
                                    <button class="aboutMe">
                                        <a href="javascript:0">
                                            <i class="fa fa-phone" aria-hidden="true" style=" font-size: 14px;"></i>
                                            Liên hệ
                                        </a>
                                    </button>
                                    <button class="hireMe">
                                        <a href="javascript:0">
                                            <i class="fa fa-comment" aria-hidden="true" style=" font-size: 14px;"></i>
                                            Nhắn tin
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide card ">
                            <div class="card-content">
                                <div class="image">
                                    <img src="images/vi.jpg"  alt="">
                                </div>
                                <div class="name-profession">
                                    <span class="name">Vi dep gai</span>
                                    <span class="profession">(Nhân viên tư vấn)</span>
                                </div>
                                <div class="button">
                                    <button class="aboutMe">
                                        <a href="javascript:0">
                                            <i class="fa fa-phone" aria-hidden="true" style=" font-size: 14px;"></i>
                                            Liên hệ
                                        </a>
                                    </button>
                                    <button class="hireMe">
                                        <a href="javascript:0">
                                            <i class="fa fa-comment" aria-hidden="true" style=" font-size: 14px;"></i>
                                            Nhắn tin
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>

    <!-- end post -->
    <section class ="Cart_Product">
        <i class="fas fa-times"></i>
        <h2 style="text-align: center; margin-bottom: 20px; color: tomato;"> GIỎ HÀNG CỦA BẠN</h2>
        <form action="">
            <table class="tbCard tbCard-bordered" >
                <thead>
                    <tr >
                        <th>Sản Phẩm</th>
                        <th>Giá</th>
                        <th>Số Lượng</th>
                        <th>Đơn giá</th>
                    </tr>
                </thead>
                <tbody class="tbd">
                    <!-- <tr>
                        <td class="cart__body-name-title" style=" padding: 8px;  font-size: 1.5rem;">Oppo reno 4</td>
                        <td style=" padding: 8px;  font-size: 1.5rem;"><span>76.800đ</span></td>
                        <td style=" padding: 8px;  font-size: 1.5rem;" ><input class="quantity" style="width:65px; outline:none;text-align:center" type="number" value="1" min="1"/></td>
                        <td style = "cursor: pointer; padding: 8px;  font-size: 1.5rem;">Xóa</td>
                    </tr> -->
                </tbody>
            </table>
            <br>
            <div style="text-align:right;color:red" class="price_total">
                <p style="font-weight: bold; font-size: 1.5rem; padding: 20px;">Tổng Tiền: <Span style="font-size: 1.5rem;">0</Span>  <sup>vnd</sup></p>
            </div>
            <div class="Order">
                <h3 class="doimausale">
                    Quý khách vui lòng để lại thông tin cá nhân để mua hàng
                </h3>
                <form id ="FormOrderP" action="" method="post">
                    <div>
                        <input type="text" id="Customer_Name" aria-describedby="emailHelp" placeholder="Họ tên của bạn..." required>
                        <span class="required"></span>
                    </div>
                    <div>
                        <input type="number" id="Customer-Phone" aria-describedby="emailHelp" placeholder="Số điện thoại của bạn..." required>
                        <span class="required"></span>
                    </div>
                    <div>
                        <input type="text" id="Customer-address" aria-describedby="emailHelp" placeholder="Địa chỉ của bạn..." required>
                        <span class="required"></span>
                    </div>
                    <p>Bạn muốn mua điện thoại trả góp bao nhiều tháng?</p>
                    <label class="radio-inline"><input type="radio" name="optradio" checked>3 Tháng</label>
                    <label class="radio-inline"><input type="radio" name="optradio">6 Tháng</label>
                    <label class="radio-inline"><input type="radio" name="optradio">9 Tháng</label>
                    <label class="radio-inline"><input type="radio" name="optradio">12 Tháng</label>
                    <textarea name="" id="" cols="200" rows="15" placeholder="Ghi chú..."></textarea> 
                    <button onclick="submitOrder()" class="btn btn-primary">Gửi liên hệ</button>
                </form>
            </div>
            <button onclick="btorder()" class="bto">
                Đặt hàng
            </button>
        </form>
    </section>

    <div class="main__modal">
        <div class="modal__overlay"></div>
        <div class="modal__body">
            <!-- resgist form -->
            <div class=" sale-off">
                <div class="sale-off__container">
                    <h2 class="sale-off__heading">
                        Nhận phiếu giảm giá <span class="sale-off__sp">40%</span>  khi mua <br> <span class="sale-off__name">Sản phẩm Quạt Tản Nhiệt ORIX 20x20x6CM MR20060 220VAC</span>  tại Shop Linh kiện ÍCNEWS
                    </h2>
                    <div class="sale-off__img">
                        <img src="images/orix_20x20.jpg" width="300">
                    </div>
                    
                    <a href="Samsung-Galaxy-Zlip3-5G.html" class="sale-off__link">
                        <button class="sale-off__btn">Mua ngay</button>
                    </a>
                </div>

                <div class="sale-off__close">
                    <!-- <svg class="sale-off__close-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" class="svg-inline--fa fa-times fa-w-11" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512"><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path></svg> -->
                    x
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="js/jq.js"></script>
    <script src="js/index.js"></script>
    <script src="js/link.js"></script>
    <script src="js/card.js"></script>
    <script> 
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        slidesPerGroup: 1,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
                spaceBetween: 5,

            },
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            950: {
                slidesPerView: 3,
                spaceBetween: 10,
            },

        },
    });

</script>

@stop