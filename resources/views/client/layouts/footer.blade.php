<!-- Start Footer Area -->
<footer class="footer rtl">
    <div class="footer-top pt-70 pb-20">
        <div class="container">
            <div class="row">
                <!-- Single -->
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="footer-widget-item">
                        <div class="f-logo mb-10">
                            <a href="{{route('home')}}">
                                <img src="{{asset('assets/img/logo.png')}}" alt="logo">
                            </a>
                        </div>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
                        <div class="footer-social">
                            <span><a href="#"><i class="fab fa-facebook-f"></i></a></span>
                            <span><a href="#"><i class="fab fa-twitter"></i></a></span>
                            <span><a href="#"><i class="fab fa-instagram"></i></a></span>
                            <span><a href="#"><i class="fab fa-pinterest-p"></i></a></span>
                        </div>
                    </div>
                </div>
                <!-- Single -->
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="footer-widget-item">
                        <h2>کاتالوگ محصولات</h2>
                        <ul>
                            <li><a href="#">سبزیجات</a></li>
                            <li><a href="#">ماهی و غذاهای دریایی</a></li>
                            <li><a href="#">محصولات بهداشتی</a></li>
                            <li><a href="#">روغن و سرکه</a></li>
                            <li><a href="#">کره و تخم مرغ</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Single -->
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="footer-widget-item">
                        <h2>لینک های مفید</h2>
                        <ul>
                            <li><a href="#">درباره ما</a></li>
                            <li><a href="#">محصولات ویژه</a></li>
                            <li><a href="#">شرایط و ضوابط</a></li>
                            <li><a href="#">تماس باما</a></li>
                            <li><a href="#">پیشنهادات تبلیغاتی</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Single -->
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="footer-widget-item">
                        <h2>دانلود برنامه ها</h2>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
                        <div class="app-down">
                            <a class="mb-30" href="#">
                                <img src="{{asset('assets/img/google.png')}}" alt="google">
                            </a>
                            <a href="#">
                                <img src="{{asset('assets/img/apple.png')}}" alt="apple">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom pt-30 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="copyright-text">
                        <p>طراحی و توسعه توسط <a href="#"><b>ایران کد</b></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer Area -->

<!-- Start Quick View Modal Content -->
<div class="modal fade" id="quickViewModal" tabindex="-1" aria-labelledby="quickViewModal" aria-hidden="true">
    <div class="modal-dialog quick-view-modal">
        <div class="modal-content quick-view-modal-content rtl">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="modal_tab">
                        <div class="tab-content product-details-large">
                            <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                <div class="modal_tab_img">
                                    <a href="#"><img src="{{asset('assets/img/product/1.jpg')}}" alt="img"></a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab2" role="tabpanel">
                                <div class="modal_tab_img">
                                    <a href="#"><img src="{{asset('assets/img/product/2.jpg')}}" alt="img"></a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab3" role="tabpanel">
                                <div class="modal_tab_img">
                                    <a href="#"><img src="{{asset('assets/img/product/3.jpg')}}" alt="img"></a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab4" role="tabpanel">
                                <div class="modal_tab_img">
                                    <a href="#"><img src="{{asset('assets/img/product/4.jpg')}}" alt="img"></a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab5" role="tabpanel">
                                <div class="modal_tab_img">
                                    <a href="#"><img src="{{asset('assets/img/product/5.jpg')}}" alt="img"></a>
                                </div>
                            </div>
                        </div>
                        <div class="modal_tab_button">
                            <ul class="nav product_navactive owl-carousel" role="tablist">
                                <li>
                                    <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab"
                                       aria-controls="tab1" aria-selected="false"><img src="{{asset('assets/img/product/1.jpg')}}"
                                                                                       alt="img"></a>
                                </li>
                                <li>
                                    <a class="nav-link" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2"
                                       aria-selected="false"><img src="{{asset('assets/img/product/2.jpg')}}" alt="img"></a>
                                </li>
                                <li>
                                    <a class="nav-link button_three" data-toggle="tab" href="#tab3" role="tab"
                                       aria-controls="tab3" aria-selected="false"><img src="{{asset('assets/img/product/3.jpg')}}"
                                                                                       alt="img"></a>
                                </li>
                                <li>
                                    <a class="nav-link" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4"
                                       aria-selected="false"><img src="{{asset('assets/img/product/4.jpg')}}" alt="img"></a>
                                </li>
                                <li>
                                    <a class="nav-link" data-toggle="tab" href="#tab5" role="tab" aria-controls="tab5"
                                       aria-selected="false"><img src="{{asset('assets/img/product/5.jpg')}}" alt="img"></a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
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
    </div>
</div>
<!-- End Quick View Modal Content -->
<div class="scroll-area">
    <i class="fa fa-angle-up"></i>
</div>


<!-- Js File -->
<script src="{{asset('assets/js/modernizr.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<script src="{{asset('assets/js/ajax-form.js')}}"></script>
<script src="{{asset('assets/js/mobile-menu.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>

</body>
