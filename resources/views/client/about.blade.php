<!DOCTYPE html>
<html  class="no-js" lang="fa">

@include('client.layouts.navbar',['title'=>'درباره ما'])

@include('client.layouts.breadcrumb',['title' => 'درباره ما'])

<!-- Start About Us -->
<section class="section-padding">
    <div class="container rtl">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-img">
                    <img src="{{asset('assets/img/about.jpg')}}" alt="about">
                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="about-content">
                    <h4>درباره ما</h4>
                    <h2>ارائه محصولات ارگانیک از سال 1380</h2>
                    <p> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است،
                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی
                        مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه
                        درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری
                        را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این
                        صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و
                        زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی
                        اساسا مورد استفاده قرار گیرد.</p>
                    <ul>
                        <li><i class="fas fa-check-circle"></i> با عشق و فداکاری</li>
                        <li><i class="fas fa-check-circle"></i> بهترین مورد اعتماد</li>
                        <li><i class="fas fa-check-circle"></i> مزارع در جهان</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Us -->
<!-- Start We Provide Area -->
<section class="we-provied" style="background-image:url('{{asset('assets/img/ab-bg.jpg')}}');">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="we-provied-contetn">
                    <div class="video-btn">
                        <a href="https://www.youtube.com/watch?v=sY2bdbsy3rg"><i class="fas fa-play"></i></a>
                    </div>
                    <h2>ما یک تیم هستیم که بر ارائه بهترین غذای ارگانیک و تجربیات کاربر تمرکز دارد.</h2>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ </p>
                    <a class="button-1" href="{{route('client.product.index')}}">اکنون خرید کنید</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End We Provide Area -->
<!-- Start Team Area -->
<section class="pt-70 pb-40">
    <div class="container">
        <!-- Section headding -->
        <div class="row">
            <div class="col-lg-12 rtl">
                <div class="section-headding text-center  mb-50">
                    <h2><span>اعضای تیم ما</span></h2>
                </div>
            </div>
        </div>
        <!-- Team -->
        <div class="row">
            <!-- Single -->
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="team-item">
                    <div class="thumbnail">
                        <img src="{{asset('assets/img/team/1.jpg')}}" alt="img">
                        <div class="socila">
                            <span><a href="#"><i class="fab fa-facebook-f"></i></a></span>
                            <span><a href="#"><i class="fab fa-twitter"></i></a></span>
                            <span><a href="#"><i class="fab fa-vimeo-v"></i></a></span>
                            <span><a href="#"><i class="fab fa-instagram"></i></a></span>
                        </div>
                    </div>
                    <div class="content">
                        <h4>رضا معتمدی</h4>
                        <p>موسس</p>
                    </div>
                </div>
            </div>
            <!-- Single -->
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="team-item">
                    <div class="thumbnail">
                        <img src="{{asset('assets/img/team/2.jpg')}}" alt="img">
                        <div class="socila">
                            <span><a href="#"><i class="fab fa-facebook-f"></i></a></span>
                            <span><a href="#"><i class="fab fa-twitter"></i></a></span>
                            <span><a href="#"><i class="fab fa-vimeo-v"></i></a></span>
                            <span><a href="#"><i class="fab fa-instagram"></i></a></span>
                        </div>
                    </div>
                    <div class="content">
                        <h4>رضا معتمدی</h4>
                        <p>موسس</p>
                    </div>
                </div>
            </div>
            <!-- Single -->
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="team-item">
                    <div class="thumbnail">
                        <img src="{{asset('assets/img/team/3.jpg')}}" alt="img">
                        <div class="socila">
                            <span><a href="#"><i class="fab fa-facebook-f"></i></a></span>
                            <span><a href="#"><i class="fab fa-twitter"></i></a></span>
                            <span><a href="#"><i class="fab fa-vimeo-v"></i></a></span>
                            <span><a href="#"><i class="fab fa-instagram"></i></a></span>
                        </div>
                    </div>
                    <div class="content">
                        <h4>رضا معتمدی</h4>
                        <p>موسس</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Team Area -->
<!-- Start Testimonial Area -->
<section class="client-testimonial pb-70">
    <div class="container">
        <!-- Section Headding -->
        <div class="row">
            <div class="col-lg-12 rtl">
                <div class="section-headding text-center  mb-50">
                    <h2><span>بازخورد مشتریان</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="client-testimonial-full owl-carousel">
                    <!-- Single -->
                    <div class="testimonial-item rtl">
                        <div class="thumbnail">
                            <img src="{{asset('assets/img/tes1.jpg')}}" alt="">
                        </div>
                        <div class="content">
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
                            <h2>رزا ایزدی</h2>
                            <h4>موسس</h4>
                        </div>
                        <div class="btm-big-icon">
                            <i class="far fa-comments"></i>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="testimonial-item rtl">
                        <div class="thumbnail">
                            <img src="{{asset('assets/img/tes2.jpg')}}" alt="">
                        </div>
                        <div class="content">
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
                            <h2>رزا ایزدی</h2>
                            <h4>موسس</h4>
                        </div>
                        <div class="btm-big-icon">
                            <i class="far fa-comments"></i>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="testimonial-item">
                        <div class="thumbnail">
                            <img src="{{asset('assets/img/tes1.jpg')}}" alt="">
                        </div>
                        <div class="content">
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
                            <h2>رزا ایزدی</h2>
                            <h4>موسس</h4>
                        </div>
                        <div class="btm-big-icon">
                            <i class="far fa-comments"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Testimonial Area -->

@include('client.layouts.footer')

</html>
