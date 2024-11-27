<!DOCTYPE html>
<html class="no-js" lang="fa">

@include('client.layouts.navbar',['title' => 'محصولات'])

@include('client.layouts.breadcrumb',['title' => 'محصولات'])

<!-- Start Shop Page -->
<section class="section-padding rtl">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- ltn__shop-options -->
                <div class="row mb-30">
                    <div class="col-12">
                        <div class="ltn__shop-options">
                            <div class="list-single">
                                <div class="ltn__grid-list-tab-menu ">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="gridView-tab" data-bs-toggle="tab"
                                                    data-bs-target="#gridView" role="tab" aria-controls="gridView"
                                                    aria-selected="true"><i class="fas fa-th"></i></button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="listView-tab" data-bs-toggle="tab"
                                                    data-bs-target="#listView" role="tab" aria-controls="listView"
                                                    aria-selected="false"><i class="fas fa-list-ul"></i></button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="list-single">
                                <div class="showing-product-number text-right">
                                    <span>
                                        نمایش {{ $products->firstItem() ?? 0 }} - {{ $products->lastItem() ?? 0 }} از {{ $products->total() ?? 0 }}  نتیجه
                                    </span>
                                </div>
                            </div>
                            <div class="list-single">
                                <div class="woo-product-shorting">
                                    <select name="srot">
                                        <option value="0">مرتب سازی پیش فرض</option>
                                        <option value="1">مرتب سازی بر اساس محبوبیت</option>
                                        <option value="2">مرتب سازی بر اساس ورودی های جدید</option>
                                        <option value="3">مرتب سازی بر اساس قیمت: کم به زیاد</option>
                                        <option value="4">مرتب سازی بر اساس قیمت: زیاد به پایین</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Products -->
                <div class="row">
                    <div class="tab-content" id="myTabContent">
                        <!-- Shop GridView -->
                        <div class="tab-pane fade show active shop-gridview" id="gridView" role="tabpanel"
                             aria-labelledby="gridView-tab">
                            <div class="row">
                                <!-- Single -->
                                <div class="col-lg-4 col-sm-6 mb-30">
                                    <div class="product-item rtl">
                                        <!-- Thumbnail -->
                                        <div class="product-thumbnail">
                                            <a href="product-details.html">
                                                <img src="assets/img/product/1.jpg" alt="product">
                                            </a>
                                            <a class="wishlist" href="wishlist.html"><i class="far fa-heart"></i></a>
                                            <div class="product-overly-btn">
                                                <ul>
                                                    <li><a href="cart.html"><i class="fas fa-shopping-cart"></i><span>به سبد خرید اضافه کنید</span></a>
                                                    </li>
                                                    <li><a data-bs-toggle="modal" data-bs-target="#quickViewModal"
                                                           href="#"><i
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
                                            <h4><a href="product-details.html">پیاز</a></h4>
                                            <div class="pricing">
                                                <span>200 تومان <del>210 تومان</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single -->
                                <div class="col-lg-4 col-sm-6 mb-30">
                                    <div class="product-item rtl">
                                        <!-- Thumbnail -->
                                        <div class="product-thumbnail">
                                            <a href="product-details.html">
                                                <img src="assets/img/product/2.jpg" alt="product">
                                            </a>
                                            <a class="wishlist" href="wishlist.html"><i class="far fa-heart"></i></a>
                                            <div class="product-overly-btn">
                                                <ul>
                                                    <li><a href="cart.html"><i class="fas fa-shopping-cart"></i><span>به سبد خرید اضافه کنید</span></a>
                                                    </li>
                                                    <li><a data-bs-toggle="modal" data-bs-target="#quickViewModal"
                                                           href="#"><i
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
                                            <h4><a href="product-details.html">خرمالو</a></h4>
                                            <div class="pricing">
                                                <span>200 تومان <del>210 تومان</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single -->
                                <div class="col-lg-4 col-sm-6 mb-30">
                                    <div class="product-item rtl">
                                        <!-- Thumbnail -->
                                        <div class="product-thumbnail">
                                            <a href="product-details.html">
                                                <img src="assets/img/product/3.jpg" alt="product">
                                            </a>
                                            <a class="wishlist" href="wishlist.html"><i class="far fa-heart"></i></a>
                                            <div class="product-overly-btn">
                                                <ul>
                                                    <li><a href="cart.html"><i class="fas fa-shopping-cart"></i><span>به سبد خرید اضافه کنید</span></a>
                                                    </li>
                                                    <li><a data-bs-toggle="modal" data-bs-target="#quickViewModal"
                                                           href="#"><i
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
                                            <h4><a href="product-details.html">خیار</a></h4>
                                            <div class="pricing">
                                                <span>200 تومان <del>210 تومان</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single -->
                                <div class="col-lg-4 col-sm-6 mb-30">
                                    <div class="product-item rtl">
                                        <!-- Thumbnail -->
                                        <div class="product-thumbnail">
                                            <a href="product-details.html">
                                                <img src="assets/img/product/4.jpg" alt="product">
                                            </a>
                                            <a class="wishlist" href="wishlist.html"><i class="far fa-heart"></i></a>
                                            <div class="product-overly-btn">
                                                <ul>
                                                    <li><a href="cart.html"><i class="fas fa-shopping-cart"></i><span>به سبد خرید اضافه کنید</span></a>
                                                    </li>
                                                    <li><a data-bs-toggle="modal" data-bs-target="#quickViewModal"
                                                           href="#"><i
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
                                            <h4><a href="product-details.html">گوجه فرنگی</a></h4>
                                            <div class="pricing">
                                                <span>200 تومان <del>210 تومان</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single -->
                                <div class="col-lg-4 col-sm-6 mb-30">
                                    <div class="product-item rtl">
                                        <!-- Thumbnail -->
                                        <div class="product-thumbnail">
                                            <a href="product-details.html">
                                                <img src="assets/img/product/5.jpg" alt="product">
                                            </a>
                                            <a class="wishlist" href="wishlist.html"><i class="far fa-heart"></i></a>
                                            <div class="product-overly-btn">
                                                <ul>
                                                    <li><a href="cart.html"><i class="fas fa-shopping-cart"></i><span>به سبد خرید اضافه کنید</span></a>
                                                    </li>
                                                    <li><a data-bs-toggle="modal" data-bs-target="#quickViewModal"
                                                           href="#"><i
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
                                            <h4><a href="product-details.html">قارچ</a></h4>
                                            <div class="pricing">
                                                <span>200 تومان <del>210 تومان</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single -->
                                <div class="col-lg-4 col-sm-6 mb-30">
                                    <div class="product-item rtl">
                                        <!-- Thumbnail -->
                                        <div class="product-thumbnail">
                                            <a href="product-details.html">
                                                <img src="assets/img/product/6.jpg" alt="product">
                                            </a>
                                            <a class="wishlist" href="wishlist.html"><i class="far fa-heart"></i></a>
                                            <div class="product-overly-btn">
                                                <ul>
                                                    <li><a href="cart.html"><i class="fas fa-shopping-cart"></i><span>به سبد خرید اضافه کنید</span></a>
                                                    </li>
                                                    <li><a data-bs-toggle="modal" data-bs-target="#quickViewModal"
                                                           href="#"><i
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
                                            <h4><a href="product-details.html">بادمجان</a></h4>
                                            <div class="pricing">
                                                <span>200 تومان <del>210 تومان</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single -->
                                <div class="col-lg-4 col-sm-6 mb-30">
                                    <div class="product-item rtl">
                                        <!-- Thumbnail -->
                                        <div class="product-thumbnail">
                                            <a href="product-details.html">
                                                <img src="assets/img/product/7.jpg" alt="product">
                                            </a>
                                            <a class="wishlist" href="wishlist.html"><i class="far fa-heart"></i></a>
                                            <div class="product-overly-btn">
                                                <ul>
                                                    <li><a href="cart.html"><i class="fas fa-shopping-cart"></i><span>به سبد خرید اضافه کنید</span></a>
                                                    </li>
                                                    <li><a data-bs-toggle="modal" data-bs-target="#quickViewModal"
                                                           href="#"><i
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
                                            <h4><a href="product-details.html">بلوبری</a></h4>
                                            <div class="pricing">
                                                <span>200 تومان <del>210 تومان</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single -->
                                <div class="col-lg-4 col-sm-6 mb-30">
                                    <div class="product-item rtl">
                                        <!-- Thumbnail -->
                                        <div class="product-thumbnail">
                                            <a href="product-details.html">
                                                <img src="assets/img/product/8.jpg" alt="product">
                                            </a>
                                            <a class="wishlist" href="wishlist.html"><i class="far fa-heart"></i></a>
                                            <div class="product-overly-btn">
                                                <ul>
                                                    <li><a href="cart.html"><i class="fas fa-shopping-cart"></i><span>به سبد خرید اضافه کنید</span></a>
                                                    </li>
                                                    <li><a data-bs-toggle="modal" data-bs-target="#quickViewModal"
                                                           href="#"><i
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
                                            <h4><a href="product-details.html">زردالو</a></h4>
                                            <div class="pricing">
                                                <span>200 تومان <del>210 تومان</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single -->
                                <div class="col-lg-4 col-sm-6 mb-30">
                                    <div class="product-item rtl">
                                        <!-- Thumbnail -->
                                        <div class="product-thumbnail">
                                            <a href="product-details.html">
                                                <img src="assets/img/product/9.jpg" alt="product">
                                            </a>
                                            <a class="wishlist" href="wishlist.html"><i class="far fa-heart"></i></a>
                                            <div class="product-overly-btn">
                                                <ul>
                                                    <li><a href="cart.html"><i class="fas fa-shopping-cart"></i><span>به سبد خرید اضافه کنید</span></a>
                                                    </li>
                                                    <li><a data-bs-toggle="modal" data-bs-target="#quickViewModal"
                                                           href="#"><i
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
                                            <h4><a href="product-details.html">انگور</a></h4>
                                            <div class="pricing">
                                                <span>200 تومان <del>210 تومان</del></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Shop ListView -->
                        <div class="tab-pane fade shop-listview" id="listView" role="tabpanel"
                             aria-labelledby="listView-tab">
                            <div class="row">
                                <!-- Single -->
                                <div class="col-lg-12 rtl">
                                    <div class="product-list-item mb-30">
                                        <div class="row">
                                            <div class="col-sm-4 d-flex">
                                                <div class="thumbnail">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/product/1.jpg" alt="img">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-8 align-self-center">
                                                <div class="content">
                                                    <h2 class="title">
                                                        <a href="product-details.html">آب سبزیجات</a>
                                                    </h2>
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
                                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a title="Quick View" data-bs-toggle="modal"
                                                                   data-bs-target="#quickViewModal" href="#"><i
                                                                        class="far fa-eye"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart"><i
                                                                        class="fas fa-shopping-cart"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist"><i
                                                                        class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single -->
                                <div class="col-lg-12 rtl">
                                    <div class="product-list-item mb-30">
                                        <div class="row">
                                            <div class="col-sm-4 d-flex">
                                                <div class="thumbnail">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/product/3.jpg" alt="img">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-8 align-self-center">
                                                <div class="content">
                                                    <h2 class="title">
                                                        <a href="product-details.html">آب سبزیجات</a>
                                                    </h2>
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
                                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a title="Quick View" data-bs-toggle="modal"
                                                                   data-bs-target="#quickViewModal" href="#"><i
                                                                        class="far fa-eye"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart"><i
                                                                        class="fas fa-shopping-cart"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist"><i
                                                                        class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single -->
                                <div class="col-lg-12 rtl">
                                    <div class="product-list-item mb-30">
                                        <div class="row">
                                            <div class="col-sm-4 d-flex">
                                                <div class="thumbnail">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/product/4.jpg" alt="img">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-8 align-self-center">
                                                <div class="content">
                                                    <h2 class="title">
                                                        <a href="product-details.html">آب سبزیجات</a>
                                                    </h2>
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
                                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a title="Quick View" data-bs-toggle="modal"
                                                                   data-bs-target="#quickViewModal" href="#"><i
                                                                        class="far fa-eye"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart"><i
                                                                        class="fas fa-shopping-cart"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist"><i
                                                                        class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single -->
                                <div class="col-lg-12 rtl">
                                    <div class="product-list-item mb-30">
                                        <div class="row">
                                            <div class="col-sm-4 d-flex">
                                                <div class="thumbnail">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/product/5.jpg" alt="img">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-8 align-self-center">
                                                <div class="content">
                                                    <h2 class="title">
                                                        <a href="product-details.html">آب سبزیجات</a>
                                                    </h2>
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
                                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a title="Quick View" data-bs-toggle="modal"
                                                                   data-bs-target="#quickViewModal" href="#"><i
                                                                        class="far fa-eye"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart"><i
                                                                        class="fas fa-shopping-cart"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist"><i
                                                                        class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single -->
                                <div class="col-lg-12 rtl">
                                    <div class="product-list-item mb-30">
                                        <div class="row">
                                            <div class="col-sm-4 d-flex">
                                                <div class="thumbnail">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/product/6.jpg" alt="img">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-8 align-self-center">
                                                <div class="content">
                                                    <h2 class="title">
                                                        <a href="product-details.html">آب سبزیجات</a>
                                                    </h2>
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
                                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a title="Quick View" data-bs-toggle="modal"
                                                                   data-bs-target="#quickViewModal" href="#"><i
                                                                        class="far fa-eye"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart"><i
                                                                        class="fas fa-shopping-cart"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist"><i
                                                                        class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single -->
                                <div class="col-lg-12 rtl">
                                    <div class="product-list-item mb-30">
                                        <div class="row">
                                            <div class="col-sm-4 d-flex">
                                                <div class="thumbnail">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/product/7.jpg" alt="img">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-8 align-self-center">
                                                <div class="content">
                                                    <h2 class="title">
                                                        <a href="product-details.html">آب سبزیجات</a>
                                                    </h2>
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
                                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a title="Quick View" data-bs-toggle="modal"
                                                                   data-bs-target="#quickViewModal" href="#"><i
                                                                        class="far fa-eye"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart"><i
                                                                        class="fas fa-shopping-cart"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist"><i
                                                                        class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single -->
                                <div class="col-lg-12 rtl">
                                    <div class="product-list-item mb-30">
                                        <div class="row">
                                            <div class="col-sm-4 d-flex">
                                                <div class="thumbnail">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/product/5.jpg" alt="img">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-8 align-self-center">
                                                <div class="content">
                                                    <h2 class="title">
                                                        <a href="product-details.html">آب سبزیجات</a>
                                                    </h2>
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
                                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a title="Quick View" data-bs-toggle="modal"
                                                                   data-bs-target="#quickViewModal" href="#"><i
                                                                        class="far fa-eye"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart"><i
                                                                        class="fas fa-shopping-cart"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist"><i
                                                                        class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single -->
                                <div class="col-lg-12 rtl">
                                    <div class="product-list-item mb-30">
                                        <div class="row">
                                            <div class="col-sm-4 d-flex">
                                                <div class="thumbnail">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/product/9.jpg" alt="img">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-8 align-self-center">
                                                <div class="content">
                                                    <h2 class="title">
                                                        <a href="product-details.html">آب سبزیجات</a>
                                                    </h2>
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
                                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a title="Quick View" data-bs-toggle="modal"
                                                                   data-bs-target="#quickViewModal" href="#"><i
                                                                        class="far fa-eye"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart"><i
                                                                        class="fas fa-shopping-cart"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist"><i
                                                                        class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single -->
                                <div class="col-lg-12 rtl">
                                    <div class="product-list-item mb-30">
                                        <div class="row">
                                            <div class="col-sm-4 d-flex">
                                                <div class="thumbnail">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/product/10.jpg" alt="img">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-8 align-self-center">
                                                <div class="content">
                                                    <h2 class="title">
                                                        <a href="product-details.html">آب سبزیجات</a>
                                                    </h2>
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
                                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a title="Quick View" data-bs-toggle="modal"
                                                                   data-bs-target="#quickViewModal" href="#"><i
                                                                        class="far fa-eye"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Add to Cart"><i
                                                                        class="fas fa-shopping-cart"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="#" title="Wishlist"><i
                                                                        class="far fa-heart"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pagination -->
                <div class="row mt-15 mb-30">
                    <div class="col-12 text-center">
                        <div class="fr-pagination">
                            <ul>
                                @if($products->onFirstPage())
                                    <li><a class="disabled"><i class="fas fa-angle-right"></i></a></li>
                                @else
                                    <li><a href="{{$products->previousPageUrl()}}"><i
                                                class="fas fa-angle-right"></i></a></li>
                                @endif
                                <li><span>{{$products->currentPage()}}</span></li>
                                    @if(!$products->hasMorePages())
                                        <li><a  class="disabled"><i class="fas fa-angle-left"></i></a></li>
                                    @else
                                        <li><a href="{{$products->nextPageUrl()}}"><i class="fas fa-angle-left"></i></a></li>
                                    @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Widgets -->
            <div class="col-lg-4">
                <!-- Single -->
                <div class="widgets-single mb-30">
                    <h2> جستجوی اشیاء</h2>
                    <div class="wi-search-form">
                        <form action="#">
                            <input type="text" name="search" placeholder="جستجو کنید">
                            <button type="submit"><i class="bi bi-search"></i></button>
                        </form>
                    </div>
                </div>
                <!-- Single -->
                <div class="widgets-single mb-30">
                    <h2>دسته محصولات</h2>
                    <ul>
                        <li><a href="#">سبزیجات</a></li>
                        <li><a href="#">محصول بهداشتی</a></li>
                        <li><a href="#">ماهی و غذاهای دریایی</a></li>
                        <li><a href="#">محصول بهداشتی</a></li>
                        <li><a href="#">کره و تخم مرغ</a></li>
                        <li><a href="#">شیر و خامه</a></li>
                    </ul>
                </div>
                <!-- Single -->
                <div class="widgets-single mb-30">
                    <h2>محصول دارای امتیاز برتر</h2>
                    <div class="wi-top-rated-p">
                        <!-- Single -->
                        <div class="single mb-20">
                            <div class="thumb">
                                <a href="product-details.html">
                                    <img src="assets/img/product/1.jpg" alt="product">
                                </a>
                            </div>
                            <div class="content">
                                <div class="ratting">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                                <h4 class="title">
                                    <a href="product-details.html">پیاز</a>
                                </h4>
                                <div class="pricing">
                                    <span>200 تومان <del>210 تومان</del></span>
                                </div>
                            </div>
                        </div>
                        <!-- Single -->
                        <div class="single mb-20">
                            <div class="thumb">
                                <a href="product-details.html">
                                    <img src="assets/img/product/2.jpg" alt="product">
                                </a>
                            </div>
                            <div class="content">
                                <div class="ratting">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                                <h4 class="title">
                                    <a href="product-details.html">خرمالو</a>
                                </h4>
                                <div class="pricing">
                                    <span>200 تومان <del>210 تومان</del></span>
                                </div>
                            </div>
                        </div>
                        <!-- Single -->
                        <div class="single mb-20">
                            <div class="thumb">
                                <a href="product-details.html">
                                    <img src="assets/img/product/3.jpg" alt="product">
                                </a>
                            </div>
                            <div class="content">
                                <div class="ratting">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                                <h4 class="title">
                                    <a href="product-details.html">خیار</a>
                                </h4>
                                <div class="pricing">
                                    <span>200 تومان <del>210 تومان</del></span>
                                </div>
                            </div>
                        </div>
                        <!-- Single -->
                        <div class="single mb-20">
                            <div class="thumb">
                                <a href="product-details.html">
                                    <img src="assets/img/product/4.jpg" alt="product">
                                </a>
                            </div>
                            <div class="content">
                                <div class="ratting">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                                <h4 class="title">
                                    <a href="product-details.html">گوجه فرنگی</a>
                                </h4>
                                <div class="pricing">
                                    <span>200 تومان <del>210 تومان</del></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single -->
                <div class="widgets-single">
                    <h2>برچسب های محصولات</h2>
                    <div class="tags-could">
                        <a href="#">پاستا</a>
                        <a href="#">ارگانیک</a>
                        <a href="#">انگور</a>
                        <a href="#">ماهی</a>
                        <a href="#">غذا</a>
                        <a href="#">برنج</a>
                        <a href="#">تخم مرغ</a>
                        <a href="#">قهوه</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Shop Page -->

@include('client.layouts.footer')

</html>
