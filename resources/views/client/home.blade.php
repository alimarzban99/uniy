<!DOCTYPE html>
<html class="no-js" lang="fa">

@include('client.layouts.navbar',['title'=>'فروشگاه میوه ها'])


<!-- Start Hero Slider Area -->
<section class="heros-sldier-area">
    <div class="hero-slider-full owl-carousel">
        <!-- Single -->
        <div class="hero-slider-item rtl" style="background-image: url('{{asset('assets/img/slider1.jpg')}}');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 align-self-center">
                        <div class="hero-slider-content">
                            <h4>مواد غذایی ارگانیک و تازه</h4>
                            <h2>سالم درب منزل تحویل بگیرید</h2>
                            <div class="hero-btn">
                                <a class="button-1" href="{{route('client.product.index')}}">اکنون خرید کنید</a>
                                <a class="button-3" href="{{route('client.product.index')}}">دسته بندی</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="hero-slider-rimg">
                            <img src="assets/img/hr1.png" alt="img">
                            <img class="image-2" src="assets/img/hr2.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single -->
        <div class="hero-slider-item rtl" style="background-image: url('{{asset('assets/img/slider2.jpg')}}');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 align-self-center">
                        <div class="hero-slider-content">
                            <h4>مواد غذایی ارگانیک و تازه</h4>
                            <h2>سالم درب منزل تحویل بگیرید</h2>
                            <div class="hero-btn">
                                <a class="button-1" href="{{route('client.product.index')}}">اکنون خرید کنید</a>
                                <a class="button-3" href="{{route('client.product.index')}}">دسته بندی</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="hero-slider-rimg">
                            <img src="assets/img/hr2.png" alt="img">
                            <img class="image-2" src="assets/img/hr1.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Hero Slider Area -->

<!-- Start Banner Area -->
<div class="pt-50 pb-20">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-30">
                <div class="banner-item">
                    <img src="assets/img/banner1.jpg" alt="banner">
                </div>
            </div>
            <div class="col-md-6 mb-30">
                <div class="banner-item">
                    <img src="assets/img/banner2.jpg" alt="banner">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Banner Area -->
<!-- Feature Products -->
<section class="pt-30 pb-50">
    <div class="container">
        <!-- Section Headding -->
        <div class="row">
            <div class="col-lg-12 rtl">
                <div class="section-headding text-center  mb-50">
                    <h2><span>محصولات ویژه</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 rtl">
                <div class="feature-product-slider owl-carousel">
                    <!-- Single -->
                    <div class="product-item rtl">
                        <div class="sale-badge"><span>فروش</span></div>
                        <!-- Thumbnail -->
                        <div class="product-thumbnail">
                            <a href="#">
                                <img src="assets/img/product/1.jpg" alt="product">
                            </a>
                            <a class="wishlist" href="wishlist.html"><i class="far fa-heart"></i></a>
                            <div class="product-overly-btn">
                                <ul>
                                    <li><a href="cart.html"><i class="fas fa-shopping-cart"></i><span>به سبد خرید اضافه کنید</span></a>
                                    </li>
                                    <li><a data-bs-toggle="modal" data-bs-target="#quickViewModal" href="#"><i
                                                class="far fa-eye"></i><span>مشاهده سریع</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Content -->
                        <div class="product-content">
                            <div class="ratting">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <h4><a href="#">پیاز</a></h4>
                            <div class="pricing">
                                <span>200 تومان <del>210 تومان</del></span>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="product-item rtl">
                        <div class="sale-badge"><span>25%</span></div>
                        <!-- Thumbnail -->
                        <div class="product-thumbnail">
                            <a href="#">
                                <img src="assets/img/product/2.jpg" alt="product">
                            </a>
                            <a class="wishlist" href="wishlist.html"><i class="far fa-heart"></i></a>
                            <div class="product-overly-btn">
                                <ul>
                                    <li><a href="cart.html"><i class="fas fa-shopping-cart"></i><span>به سبد خرید اضافه کنید</span></a>
                                    </li>
                                    <li><a data-bs-toggle="modal" data-bs-target="#quickViewModal" href="#"><i
                                                class="far fa-eye"></i><span>مشاهده سریع</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Content -->
                        <div class="product-content">
                            <div class="ratting">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <h4><a href="#">خرمالو</a></h4>
                            <div class="pricing">
                                <span>200 تومان <del>210 تومان</del></span>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="product-item rtl">
                        <div class="sale-badge"><span>جدید</span></div>
                        <!-- Thumbnail -->
                        <div class="product-thumbnail">
                            <a href="#">
                                <img src="assets/img/product/3.jpg" alt="product">
                            </a>
                            <a class="wishlist" href="wishlist.html"><i class="far fa-heart"></i></a>
                            <div class="product-overly-btn">
                                <ul>
                                    <li><a href="cart.html"><i class="fas fa-shopping-cart"></i><span>به سبد خرید اضافه کنید</span></a>
                                    </li>
                                    <li><a data-bs-toggle="modal" data-bs-target="#quickViewModal" href="#"><i
                                                class="far fa-eye"></i><span>مشاهده سریع</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Content -->
                        <div class="product-content">
                            <div class="ratting">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <h4><a href="#">خیار</a></h4>
                            <div class="pricing">
                                <span>200 تومان <del>210 تومان</del></span>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="product-item rtl">
                        <!-- Thumbnail -->
                        <div class="product-thumbnail">
                            <a href="#">
                                <img src="assets/img/product/4.jpg" alt="product">
                            </a>
                            <a class="wishlist" href="wishlist.html"><i class="far fa-heart"></i></a>
                            <div class="product-overly-btn">
                                <ul>
                                    <li><a href="cart.html"><i class="fas fa-shopping-cart"></i><span>به سبد خرید اضافه کنید</span></a>
                                    </li>
                                    <li><a data-bs-toggle="modal" data-bs-target="#quickViewModal" href="#"><i
                                                class="far fa-eye"></i><span>مشاهده سریع</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Content -->
                        <div class="product-content">
                            <div class="ratting">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <h4><a href="#">گوجه فرنگی</a></h4>
                            <div class="pricing">
                                <span>200 تومان <del>210 تومان</del></span>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="product-item rtl">
                        <div class="sale-badge"><span>فروش</span></div>
                        <!-- Thumbnail -->
                        <div class="product-thumbnail">
                            <a href="#">
                                <img src="assets/img/product/5.jpg" alt="product">
                            </a>
                            <a class="wishlist" href="wishlist.html"><i class="far fa-heart"></i></a>
                            <div class="product-overly-btn">
                                <ul>
                                    <li><a href="cart.html"><i class="fas fa-shopping-cart"></i><span>به سبد خرید اضافه کنید</span></a>
                                    </li>
                                    <li><a data-bs-toggle="modal" data-bs-target="#quickViewModal" href="#"><i
                                                class="far fa-eye"></i><span>مشاهده سریع</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Content -->
                        <div class="product-content">
                            <div class="ratting">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <h4><a href="#">قارچ</a></h4>
                            <div class="pricing">
                                <span>200 تومان <del>210 تومان</del></span>

                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="product-item rtl">
                        <div class="sale-badge"><span>25%</span></div>
                        <!-- Thumbnail -->
                        <div class="product-thumbnail">
                            <a href="#">
                                <img src="assets/img/product/6.jpg" alt="product">
                            </a>
                            <a class="wishlist" href="wishlist.html"><i class="far fa-heart"></i></a>
                            <div class="product-overly-btn">
                                <ul>
                                    <li><a href="cart.html"><i class="fas fa-shopping-cart"></i><span>به سبد خرید اضافه کنید</span></a>
                                    </li>
                                    <li><a data-bs-toggle="modal" data-bs-target="#quickViewModal" href="#"><i
                                                class="far fa-eye"></i><span>مشاهده سریع</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Content -->
                        <div class="product-content">
                            <div class="ratting">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <h4><a href="#">بادمجان</a></h4>
                            <div class="pricing">
                                <span>200 تومان <del>210 تومان</del></span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Feature Products -->

<!-- Start Shop Category -->
<section class="shop-category pt-20 pb-50">
    <div class="container">
        <!-- Section Headding -->
        <div class="row">
            <div class="col-lg-12 rtl">
                <div class="section-headding text-center  mb-50">
                    <h2><span>خرید بر اساس طبقه بندی</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="shop-category-full owl-carousel">
                <!-- Single -->
                <div class="sc-sigle-item">
                    <div class="thumbanil">
                        <img src="assets/img/cate/1.jpg" alt="img">
                        <a href="#">
                            <i class="fas fa-times"></i>
                        </a>
                    </div>
                    <div class="title">
                        <a href="#">سبزیجات</a>
                    </div>
                </div>
                <!-- Single -->
                <div class="sc-sigle-item">
                    <div class="thumbanil">
                        <img src="assets/img/cate/2.jpg" alt="img">
                        <a href="#">
                            <i class="fas fa-times"></i>
                        </a>
                    </div>
                    <div class="title">
                        <a href="#">میوه ها</a>
                    </div>
                </div>
                <!-- Single -->
                <div class="sc-sigle-item">
                    <div class="thumbanil">
                        <img src="assets/img/cate/3.jpg" alt="img">
                        <a href="#">
                            <i class="fas fa-times"></i>
                        </a>
                    </div>
                    <div class="title">
                        <a href="#">سالادها</a>
                    </div>
                </div>
                <!-- Single -->
                <div class="sc-sigle-item">
                    <div class="thumbanil">
                        <img src="assets/img/cate/4.jpg" alt="img">
                        <a href="#">
                            <i class="fas fa-times"></i>
                        </a>
                    </div>
                    <div class="title">
                        <a href="#">ماهی و غذاهای دریایی</a>
                    </div>
                </div>
                <!-- Single -->
                <div class="sc-sigle-item">
                    <div class="thumbanil">
                        <img src="assets/img/cate/1.jpg" alt="img">
                        <a href="#">
                            <i class="fas fa-times"></i>
                        </a>
                    </div>
                    <div class="title">
                        <a href="#">گوشت تازه</a>
                    </div>
                </div>
                <!-- Single -->
                <div class="sc-sigle-item">
                    <div class="thumbanil">
                        <img src="assets/img/cate/3.jpg" alt="img">
                        <a href="#">
                            <i class="fas fa-times"></i>
                        </a>
                    </div>
                    <div class="title">
                        <a href="#">محصول بهداشتی</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Shop Category -->

<!-- Start Newest Products -->
<section class="pt-30 pb-50">
    <div class="container">
        <!-- Section Headding -->
        <div class="row">
            <div class="col-lg-12 rtl">
                <div class="section-headding text-center  mb-50">
                    <h2><span>جدیدترین محصولات</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 rtl">
                <div class="feature-product-slider owl-carousel">
                    <!-- Single -->
                    <div class="product-item rtl">
                        <!-- Thumbnail -->
                        <div class="product-thumbnail">
                            <a href="#">
                                <img src="assets/img/product/1.jpg" alt="product">
                            </a>
                            <a class="wishlist" href="wishlist.html"><i class="far fa-heart"></i></a>
                            <div class="product-overly-btn">
                                <ul>
                                    <li><a href="cart.html"><i class="fas fa-shopping-cart"></i><span>به سبد خرید اضافه کنید</span></a>
                                    </li>
                                    <li><a data-bs-toggle="modal" data-bs-target="#quickViewModal" href="#"><i
                                                class="far fa-eye"></i><span>مشاهده سریع</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Content -->
                        <div class="product-content">
                            <div class="ratting">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <h4><a href="#">پیاز</a></h4>
                            <div class="pricing">
                                <span>200 تومان <del>210 تومان</del></span>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="product-item rtl">
                        <div class="sale-badge"><span>جدید</span></div>
                        <!-- Thumbnail -->
                        <div class="product-thumbnail">
                            <a href="#">
                                <img src="assets/img/product/2.jpg" alt="product">
                            </a>
                            <a class="wishlist" href="wishlist.html"><i class="far fa-heart"></i></a>
                            <div class="product-overly-btn">
                                <ul>
                                    <li><a href="cart.html"><i class="fas fa-shopping-cart"></i><span>به سبد خرید اضافه کنید</span></a>
                                    </li>
                                    <li><a data-bs-toggle="modal" data-bs-target="#quickViewModal" href="#"><i
                                                class="far fa-eye"></i><span>مشاهده سریع</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Content -->
                        <div class="product-content">
                            <div class="ratting">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <h4><a href="#">خرمالو</a></h4>
                            <div class="pricing">
                                <span>200 تومان <del>210 تومان</del></span>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="product-item rtl">
                        <div class="sale-badge"><span>جدید</span></div>
                        <!-- Thumbnail -->
                        <div class="product-thumbnail">
                            <a href="#">
                                <img src="assets/img/product/3.jpg" alt="product">
                            </a>
                            <a class="wishlist" href="wishlist.html"><i class="far fa-heart"></i></a>
                            <div class="product-overly-btn">
                                <ul>
                                    <li><a href="cart.html"><i class="fas fa-shopping-cart"></i><span>به سبد خرید اضافه کنید</span></a>
                                    </li>
                                    <li><a data-bs-toggle="modal" data-bs-target="#quickViewModal" href="#"><i
                                                class="far fa-eye"></i><span>مشاهده سریع</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Content -->
                        <div class="product-content">
                            <div class="ratting">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <h4><a href="#">خیار</a></h4>
                            <div class="pricing">
                                <span>200 تومان <del>210 تومان</del></span>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="product-item rtl">
                        <!-- Thumbnail -->
                        <div class="product-thumbnail">
                            <a href="#">
                                <img src="assets/img/product/4.jpg" alt="product">
                            </a>
                            <a class="wishlist" href="wishlist.html"><i class="far fa-heart"></i></a>
                            <div class="product-overly-btn">
                                <ul>
                                    <li><a href="cart.html"><i class="fas fa-shopping-cart"></i><span>به سبد خرید اضافه کنید</span></a>
                                    </li>
                                    <li><a data-bs-toggle="modal" data-bs-target="#quickViewModal" href="#"><i
                                                class="far fa-eye"></i><span>مشاهده سریع</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Content -->
                        <div class="product-content">
                            <div class="ratting">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <h4><a href="#">گوجه فرنگی</a></h4>
                            <div class="pricing">
                                <span>200 تومان <del>210 تومان</del></span>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="product-item rtl">
                        <!-- Thumbnail -->
                        <div class="product-thumbnail">
                            <a href="#">
                                <img src="assets/img/product/5.jpg" alt="product">
                            </a>
                            <a class="wishlist" href="wishlist.html"><i class="far fa-heart"></i></a>
                            <div class="product-overly-btn">
                                <ul>
                                    <li><a href="cart.html"><i class="fas fa-shopping-cart"></i><span>به سبد خرید اضافه کنید</span></a>
                                    </li>
                                    <li><a data-bs-toggle="modal" data-bs-target="#quickViewModal" href="#"><i
                                                class="far fa-eye"></i><span>مشاهده سریع</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Content -->
                        <div class="product-content">
                            <div class="ratting">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <h4><a href="#">قارچ</a></h4>
                            <div class="pricing">
                                <span>200 تومان <del>210 تومان</del></span>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="product-item rtl">
                        <!-- Thumbnail -->
                        <div class="product-thumbnail">
                            <a href="#">
                                <img src="assets/img/product/6.jpg" alt="product">
                            </a>
                            <a class="wishlist" href="wishlist.html"><i class="far fa-heart"></i></a>
                            <div class="product-overly-btn">
                                <ul>
                                    <li><a href="cart.html"><i class="fas fa-shopping-cart"></i><span>به سبد خرید اضافه کنید</span></a>
                                    </li>
                                    <li><a data-bs-toggle="modal" data-bs-target="#quickViewModal" href="#"><i
                                                class="far fa-eye"></i><span>مشاهده سریع</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Content -->
                        <div class="product-content">
                            <div class="ratting">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <h4><a href="#">بادمجان</a></h4>
                            <div class="pricing">
                                <span>200 تومان <del>210 تومان</del></span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Newest Products -->

<!-- Start Deal Section -->
<section class="deal-section pt-50 pb-50 rtl">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="deal-section-img">
                    <img src="assets/img/deal.png" alt="del">
                </div>
            </div>
            <div class="col-lg-7 align-self-center">
                <div class="deal-section-content">
                    <h4>معاملات داغ امروز</h4>
                    <h2>تخفیف های روز میوهجات ارگانیک</h2>
                    <div class="count-time" id="FuristCountdown" data-countdown-codepopular="2025/9/31">
                        <ul>
                            <li><strong>%s</strong><span>ثانیه</span></li>
                            <li><strong>%m</strong> <span>دقیقه</span></li>
                            <li><strong>%h</strong> <span>ساعت</span></li>
                            <li><strong>%d</strong> <span>روز</span></li>
                        </ul>
                    </div>
                    <div class="dh-btn mt-30">
                        <a class="button-3" href="{{route('client.product.index')}}">اکنون خرید کنید</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Deal Section -->

<!-- Start Product Widgets -->
<section class="pt-30 pb-50 rtl">
    <div class="container">
        <div class="row">
            <!-- Single -->
            <div class="col-lg-3 col-md-6">
                <h3 class="deal-title">پرفروش ترین</h3>
                <div class="product-widgets-single">
                    <!-- Single -->
                    <div class="p-widgets-single mb-20">
                        <div class="row">
                            <div class="col-5">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="assets/img/product/1.jpg" alt="img">
                                    </a>
                                </div>
                            </div>
                            <div class="col-7 align-self-center">
                                <div class="content">
                                    <h4><a href="#">پیاز</a></h4>
                                    <div class="ratting">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                    <div class="pricing">
                                        <span>200 تومان <del>210 تومان</del></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="p-widgets-single mb-20">
                        <div class="row">
                            <div class="col-5">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="assets/img/product/2.jpg" alt="img">
                                    </a>
                                </div>
                            </div>
                            <div class="col-7 align-self-center">
                                <div class="content">
                                    <h4><a href="#">خرمالو</a></h4>
                                    <div class="ratting">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                    <div class="pricing">
                                        <span>200 تومان <del>210 تومان</del></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="p-widgets-single mb-20">
                        <div class="row">
                            <div class="col-5">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="assets/img/product/3.jpg" alt="img">
                                    </a>
                                </div>
                            </div>
                            <div class="col-7 align-self-center">
                                <div class="content">
                                    <h4><a href="#">خیار</a></h4>
                                    <div class="ratting">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                    <div class="pricing">
                                        <span>200 تومان <del>210 تومان</del></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="p-widgets-single mb-20">
                        <div class="row">
                            <div class="col-5">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="assets/img/product/4.jpg" alt="img">
                                    </a>
                                </div>
                            </div>
                            <div class="col-7 align-self-center">
                                <div class="content">
                                    <h4><a href="#">گوجه فرنگی</a></h4>
                                    <div class="ratting">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                    <div class="pricing">
                                        <span>200 تومان <del>210 تومان</del></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Single -->
            <div class="col-lg-3 col-md-6">
                <h3 class="deal-title">فروش محصولات</h3>
                <div class="product-widgets-single">
                    <!-- Single -->
                    <div class="p-widgets-single mb-20">
                        <div class="row">
                            <div class="col-5">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="assets/img/product/5.jpg" alt="img">
                                    </a>
                                </div>
                            </div>
                            <div class="col-7 align-self-center">
                                <div class="content">
                                    <h4><a href="#">قارچ</a></h4>
                                    <div class="ratting">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                    <div class="pricing">
                                        <span>200 تومان <del>210 تومان</del></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="p-widgets-single mb-20">
                        <div class="row">
                            <div class="col-5">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="assets/img/product/6.jpg" alt="img">
                                    </a>
                                </div>
                            </div>
                            <div class="col-7 align-self-center">
                                <div class="content">
                                    <h4><a href="#">بادمجان</a></h4>
                                    <div class="ratting">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                    <div class="pricing">
                                        <span>200 تومان <del>210 تومان</del></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="p-widgets-single mb-20">
                        <div class="row">
                            <div class="col-5">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="assets/img/product/7.jpg" alt="img">
                                    </a>
                                </div>
                            </div>
                            <div class="col-7 align-self-center">
                                <div class="content">
                                    <h4><a href="#">بلوبری</a></h4>
                                    <div class="ratting">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                    <div class="pricing">
                                        <span>200 تومان <del>210 تومان</del></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="p-widgets-single mb-20">
                        <div class="row">
                            <div class="col-5">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="assets/img/product/8.jpg" alt="img">
                                    </a>
                                </div>
                            </div>
                            <div class="col-7 align-self-center">
                                <div class="content">
                                    <h4><a href="#">زردالو</a></h4>
                                    <div class="ratting">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                    <div class="pricing">
                                        <span>200 تومان <del>210 تومان</del></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Single -->
            <div class="col-lg-3 col-md-6">
                <h3 class="deal-title">آخرین محصولات</h3>
                <div class="product-widgets-single">
                    <!-- Single -->
                    <div class="p-widgets-single mb-20">
                        <div class="row">
                            <div class="col-5">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="assets/img/product/9.jpg" alt="img">
                                    </a>
                                </div>
                            </div>
                            <div class="col-7 align-self-center">
                                <div class="content">
                                    <h4><a href="#">انگور سیاه</a></h4>
                                    <div class="ratting">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                    <div class="pricing">
                                        <span>200 تومان <del>210 تومان</del></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="p-widgets-single mb-20">
                        <div class="row">
                            <div class="col-5">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="assets/img/product/10.jpg" alt="img">
                                    </a>
                                </div>
                            </div>
                            <div class="col-7 align-self-center">
                                <div class="content">
                                    <h4><a href="#">کمبزه</a></h4>
                                    <div class="ratting">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                    <div class="pricing">
                                        <span>200 تومان <del>210 تومان</del></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="p-widgets-single mb-20">
                        <div class="row">
                            <div class="col-5">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="assets/img/product/1.jpg" alt="img">
                                    </a>
                                </div>
                            </div>
                            <div class="col-7 align-self-center">
                                <div class="content">
                                    <h4><a href="#">پیاز</a></h4>
                                    <div class="ratting">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                    <div class="pricing">
                                        <span>200 تومان <del>210 تومان</del></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="p-widgets-single mb-20">
                        <div class="row">
                            <div class="col-5">
                                <div class="thumbnail">
                                    <a href="#">
                                        <img src="assets/img/product/2.jpg" alt="img">
                                    </a>
                                </div>
                            </div>
                            <div class="col-7 align-self-center">
                                <div class="content">
                                    <h4><a href="#">خرمالو</a></h4>
                                    <div class="ratting">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                    <div class="pricing">
                                        <span>200 تومان <del>210 تومان</del></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Single -->
            <div class="col-lg-3 col-md-6 d-flex">
                <div class="width-100-week">
                    <h3 class="deal-title">تخفیف هفتگی</h3>
                    <div class="weekly-offer-banner" style="background-image:url('{{asset('assets/img/week.jpg')}}');">
                        <div class="con con1">
                            <h2>برای پیشنهاد هفتگی تخفیف بگیرید!</h2>
                            <a class="button-1" href="#">اکنون خرید کنید</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Product Widgets -->

<!-- Start Call Now Section -->
<section class="call-now pt-120 pb-120" style="background-image:url('{{asset('assets/img/call-bg.jpg')}}');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="call-now-content">
                    <h4>هر سوالی دارید</h4>
                    <h2>09129354776</h2>
                    <div class="cl-btn mt-20">
                        <a class="button-3" href="contact.html">تماس باما</a>
                        <a class="button-1 btn-2" href="tel:+123456789">تماس بگیر</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="call-now-shap">
        <img src="assets/img/call.png" alt="img">
    </div>
</section>
<!-- End Call Now Section -->
<!-- Start Latest Blog -->
<section class="section-padding-2">
    <div class="container">
        <!-- Section Headding -->
        <div class="row">
            <div class="col-lg-12 rtl">
                <div class="section-headding text-center  mb-50">
                    <h2><span>آخرین وبلاگ</span></h2>
                </div>
            </div>
        </div>
        <div class="row rtl">
            <!-- Single -->
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="blog-item">
                    <div class="thumbnail">
                        <a href="single.html">
                            <img src="assets/img/blog/1.jpg" alt="blog">
                        </a>
                    </div>
                    <div class="content">
                        <div class="meta">
                            <span><a href="#"><i class="fas fa-user"></i> توسط: ادمین</a></span>
                            <span><a href="#"><i class="bi bi-tags-fill"></i> سبزیجات</a></span>
                        </div>
                        <h2 class="title"><a href="single.html">سالم ترین سبزیجات روی زمین</a></h2>
                        <div class="btm-meta">
                            <div class="date">
                                <span><i class="far fa-calendar-alt"></i> 2021/7/16</span>
                            </div>
                            <div class="read-more">
                                <a href="single.html">ادامه مطلب</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single -->
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="blog-item">
                    <div class="thumbnail">
                        <a href="single.html">
                            <img src="assets/img/blog/2.jpg" alt="blog">
                        </a>
                    </div>
                    <div class="content">
                        <div class="meta">
                            <span><a href="#"><i class="fas fa-user"></i> توسط: ادمین</a></span>
                            <span><a href="#"><i class="bi bi-tags-fill"></i> سبزیجات</a></span>
                        </div>
                        <h2 class="title"><a href="single.html">سالم ترین سبزیجات روی زمین</a></h2>
                        <div class="btm-meta">
                            <div class="date">
                                <span><i class="far fa-calendar-alt"></i> 2021/7/16</span>
                            </div>
                            <div class="read-more">
                                <a href="single.html">ادامه مطلب</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single -->
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="blog-item">
                    <div class="thumbnail">
                        <a href="single.html">
                            <img src="assets/img/blog/3.jpg" alt="blog">
                        </a>
                    </div>
                    <div class="content">
                        <div class="meta">
                            <span><a href="#"><i class="fas fa-user"></i> توسط: ادمین</a></span>
                            <span><a href="#"><i class="bi bi-tags-fill"></i> سبزیجات</a></span>
                        </div>
                        <h2 class="title"><a href="single.html">سالم ترین سبزیجات روی زمین</a></h2>
                        <div class="btm-meta">
                            <div class="date">
                                <span><i class="far fa-calendar-alt"></i> 2021/7/16</span>
                            </div>
                            <div class="read-more">
                                <a href="single.html">ادامه مطلب</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Latest Blog -->

@include('client.layouts.footer')

</html>
