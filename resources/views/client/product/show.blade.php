<!DOCTYPE html>
<html  class="no-js" lang="fa">

@include('client.layouts.navbar',['title' => 'جزئیات محصول'])

@include('client.layouts.breadcrumb',['title' => 'جزئیات محصول'])
<!-- Start Shop Page -->
<section class="section-padding">
    <div class="container rtl">
        <div class="row">
            <div class="col-lg-6 mb-30">
                <div class="blog-details-thumb">
                    <div class="modal_tab">
                        <div class="tab-content product-details-large">
                            <div class="tab-pane fade show active" id="tabd1" role="tabpanel" >
                                <div class="modal_tab_img">
                                    <a href="#"><img src="{{asset('assets/img/product/1.jpg')}}" alt="img"></a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tabd2" role="tabpanel">
                                <div class="modal_tab_img">
                                    <a href="#"><img src="{{asset('assets/img/product/2.jpg')}}" alt="img"></a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tabd3" role="tabpanel">
                                <div class="modal_tab_img">
                                    <a href="#"><img src="{{asset('assets/img/product/3.jpg')}}" alt="img"></a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tabd4" role="tabpanel">
                                <div class="modal_tab_img">
                                    <a href="#"><img src="{{asset('assets/img/product/4.jpg')}}" alt="img"></a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tabd5" role="tabpanel">
                                <div class="modal_tab_img">
                                    <a href="#"><img src="{{asset('assets/img/product/5.jpg')}}" alt="img"></a>
                                </div>
                            </div>
                        </div>
                        <div class="modal_tab_button">
                            <ul class="nav product_navactive owl-carousel" role="tablist">
                                <li >
                                    <a class="nav-link active" data-toggle="tab" href="#tabd1" role="tab" aria-controls="tabd1" aria-selected="false"><img src="{{asset('assets/img/product/1.jpg')}}" alt="img"></a>
                                </li>
                                <li>
                                    <a class="nav-link" data-toggle="tab" href="#tabd2" role="tab" aria-controls="tabd2" aria-selected="false"><img src="{{asset('assets/img/product/2.jpg')}}" alt="img"></a>
                                </li>
                                <li>
                                    <a class="nav-link button_three" data-toggle="tab" href="#tabd3" role="tab" aria-controls="tabd3" aria-selected="false"><img src="{{asset('assets/img/product/3.jpg')}}" alt="img"></a>
                                </li>
                                <li>
                                    <a class="nav-link" data-toggle="tab" href="#tabd4" role="tab" aria-controls="tabd4" aria-selected="false"><img src="{{asset('assets/img/product/4.jpg')}}" alt="img"></a>
                                </li>
                                <li>
                                    <a class="nav-link" data-toggle="tab" href="#tabd5" role="tab" aria-controls="tabd5" aria-selected="false"><img src="{{asset('assets/img/product/5.jpg')}}" alt="img"></a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-30">
                <div class="products-details-content">
                    <div class="quickview-modal-content-full">
                        <!-- Ratting -->
                        <div class="ratting">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><small>( 25 نظر )</small></span>
                        </div>
                        <!-- Title -->
                        <h3>آب سبزیجات</h3>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
                        <!-- Price -->
                        <div class="pricing">
                            <span>200 تومان <del>210 تومان</del></span>
                        </div>
                        <!-- Category -->
                        <div class="cate">
                            <span><strong>دسته بندی ها:</strong></span>
                            <span><a href="#">کاور,</a></span>
                            <span><a href="#">صندلی,</a></span>
                            <span><a href="#">ماشین,</a></span>
                            <span><a href="#">قطعات</a></span>
                        </div>
                        <!-- size -->
                        <div class="size">
                            <h4> سایز: </h4>
                            <select name="size">
                                <option value="0">XXL</option>
                                <option value="l1">LG</option>
                                <option value="1">L</option>
                                <option value="2">M</option>
                                <option value="3">S</option>
                                <option value="4">SM</option>
                            </select>
                        </div>
                        <!-- Add To Cart -->
                        <div class="quantity-add-cart">
								<span class="quantity">
				  					<input type="number" min="1" max="1000" step="1" value="1">
								</span>
                            <div class="cart-btn">
                                <a class="button-1" href="#"><i class="fas fa-shopping-cart"></i> به سبد خرید اضافه کنید</a>
                            </div>
                        </div>
                        <div class="quick-view-sahre mt-50">
                            <span><strong>اشتراک گذاری :</strong></span>
                            <span><a href="#"><i class="fab fa-facebook-f"></i></a></span>
                            <span><a href="#"><i class="fab fa-twitter"></i></a></span>
                            <span><a href="#"><i class="fab fa-pinterest-p"></i></a></span>
                            <span><a href="#"><i class="fab fa-instagram"></i></a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-30">
            <div class="product-details-tab">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description"  role="tab" aria-controls="description" aria-selected="true">تعریف</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="info-tab" data-bs-toggle="tab" data-bs-target="#info"  role="tab" aria-controls="info" aria-selected="false">اطلاعات تکمیلی</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review"  role="tab" aria-controls="review" aria-selected="false">مرور</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                        <div class="pd-tab-item">
                            <div class="pd-description">
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="info" role="tabpanel" aria-labelledby="info-tab">
                        <div class="pd-tab-item">
                            <div class="pd-additional-info table-responsive">
                                <table class="table table-bordered">
                                    <tbody>
                                    <tr>
                                        <td>ظرفیت</td>
                                        <td>5 کیلوگرم</td>
                                    </tr>
                                    <tr>
                                        <td>رنگ</td>
                                        <td>سیاه, قهوه ای, قرمز,</td>
                                    </tr>
                                    <tr>
                                        <td>ضد آب</td>
                                        <td>بله</td>
                                    </tr>
                                    <tr>
                                        <td>مواد</td>
                                        <td>چرم مصنوعی</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                        <div class="pd-tab-item">
                            <h3 class="review-title">2 بررسی</h3>
                            <ul>
                                <!-- Single -->
                                <li class="review-single">
                                    <img src="assets/img/tes1.jpg" alt="avatar">
                                    <div class="content">
                                        <div class="review-info">
                                            <h5>نسرین علیزاده</h5>
                                            <small> خرداد 01, 1401 </small>
                                        </div>
                                        <div class="ratting">
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                        </div>
                                        <div class="revie-con">
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
                                        </div>
                                    </div>
                                </li>
                                <!-- Single -->
                                <li class="review-single">
                                    <img src="assets/img/tes2.jpg" alt="avatar">
                                    <div class="content">
                                        <div class="review-info">
                                            <h5>علی یاسر</h5>
                                            <small> خرداد 01, 1401 </small>
                                        </div>
                                        <div class="ratting">
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                        </div>
                                        <div class="revie-con">
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="product-review-form">
                                <h3>یک بررسی اضافه کنید</h3>
                                <div class="ratting mb-30">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                                <form action="#">
                                    <textarea name="review-message" class="form-control" placeholder="نقد شما" spellcheck="false"></textarea>
                                    <input type="text" name="name" class="form-control" placeholder="اسم شما">
                                    <input type="email" name="email" class="form-control" placeholder="ایمیل شما">
                                    <button class="button-1" type="submit">ارسال بررسی</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Section Headding -->
        <div class="row mt-50">
            <div class="col-lg-12 rtl">
                <div class="section-headding text-center  mb-50">
                    <h2><span>محصولات مرتبط</span></h2>
                </div>
            </div>
        </div>
        <!-- Related Products -->
        <div class="row">
            <div class="col-lg-12 rtl">
                <div class="related-product-slider owl-carousel">
                    <!-- Single -->
                    <div class="product-item rtl">
                        <div class="sale-badge"><span>فروش</span></div>
                        <!-- Thumbnail -->
                        <div class="product-thumbnail">
                            <a href="product-details.html">
                                <img src="{{asset('assets/img/product/1.jpg')}}" alt="product">
                            </a>
                            <a class="wishlist" href="wishlist.html"><i class="far fa-heart"></i></a>
                            <div class="product-overly-btn">
                                <ul>
                                    <li><a href="cart.html"><i class="fas fa-shopping-cart"></i><span>به سبد خرید اضافه کنید</span></a></li>
                                    <li><a data-bs-toggle="modal" data-bs-target="#quickViewModal" href="#"><i class="far fa-eye"></i><span>مشاهده سریع</span></a></li>
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
                    <!-- Single -->
                    <div class="product-item rtl">
                        <div class="sale-badge"><span>25%</span></div>
                        <!-- Thumbnail -->
                        <div class="product-thumbnail">
                            <a href="product-details.html">
                                <img src="assets/img/product/2.jpg" alt="product">
                            </a>
                            <a class="wishlist" href="wishlist.html"><i class="far fa-heart"></i></a>
                            <div class="product-overly-btn">
                                <ul>
                                    <li><a href="cart.html"><i class="fas fa-shopping-cart"></i><span>به سبد خرید اضافه کنید</span></a></li>
                                    <li><a data-bs-toggle="modal" data-bs-target="#quickViewModal" href="#"><i class="far fa-eye"></i><span>مشاهده سریع</span></a></li>
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
                    <!-- Single -->
                    <div class="product-item rtl">
                        <div class="sale-badge"><span>جدید</span></div>
                        <!-- Thumbnail -->
                        <div class="product-thumbnail">
                            <a href="product-details.html">
                                <img src="assets/img/product/3.jpg" alt="product">
                            </a>
                            <a class="wishlist" href="wishlist.html"><i class="far fa-heart"></i></a>
                            <div class="product-overly-btn">
                                <ul>
                                    <li><a href="cart.html"><i class="fas fa-shopping-cart"></i><span>به سبد خرید اضافه کنید</span></a></li>
                                    <li><a data-bs-toggle="modal" data-bs-target="#quickViewModal" href="#"><i class="far fa-eye"></i><span>مشاهده سریع</span></a></li>
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
                    <!-- Single -->
                    <div class="product-item rtl">
                        <!-- Thumbnail -->
                        <div class="product-thumbnail">
                            <a href="product-details.html">
                                <img src="assets/img/product/4.jpg" alt="product">
                            </a>
                            <a class="wishlist" href="wishlist.html"><i class="far fa-heart"></i></a>
                            <div class="product-overly-btn">
                                <ul>
                                    <li><a href="cart.html"><i class="fas fa-shopping-cart"></i><span>به سبد خرید اضافه کنید</span></a></li>
                                    <li><a data-bs-toggle="modal" data-bs-target="#quickViewModal" href="#"><i class="far fa-eye"></i><span>مشاهده سریع</span></a></li>
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
                    <!-- Single -->
                    <div class="product-item rtl">
                        <div class="sale-badge"><span>فروش</span></div>
                        <!-- Thumbnail -->
                        <div class="product-thumbnail">
                            <a href="product-details.html">
                                <img src="assets/img/product/5.jpg" alt="product">
                            </a>
                            <a class="wishlist" href="wishlist.html"><i class="far fa-heart"></i></a>
                            <div class="product-overly-btn">
                                <ul>
                                    <li><a href="cart.html"><i class="fas fa-shopping-cart"></i><span>به سبد خرید اضافه کنید</span></a></li>
                                    <li><a data-bs-toggle="modal" data-bs-target="#quickViewModal" href="#"><i class="far fa-eye"></i><span>مشاهده سریع</span></a></li>
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
                    <!-- Single -->
                    <div class="product-item rtl">
                        <div class="sale-badge"><span>25%</span></div>
                        <!-- Thumbnail -->
                        <div class="product-thumbnail">
                            <a href="product-details.html">
                                <img src="assets/img/product/6.jpg" alt="product">
                            </a>
                            <a class="wishlist" href="wishlist.html"><i class="far fa-heart"></i></a>
                            <div class="product-overly-btn">
                                <ul>
                                    <li><a href="cart.html"><i class="fas fa-shopping-cart"></i><span>به سبد خرید اضافه کنید</span></a></li>
                                    <li><a data-bs-toggle="modal" data-bs-target="#quickViewModal" href="#"><i class="far fa-eye"></i><span>مشاهده سریع</span></a></li>
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
            </div>
        </div>
        <!-- Related Products -->
    </div>
</section>
<!-- End Shop Page -->

@include('client.layouts.footer')

</html>
