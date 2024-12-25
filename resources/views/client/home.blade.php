<!DOCTYPE html>
<html class="no-js" lang="fa">

@include('client.layouts.navbar',['title'=>'فروشگاه میوه ها'])

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
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="hero-slider-rimg">
                            <img src="{{asset('assets/img/hr1.png')}}" alt="img">
                            <img class="image-2" src="{{asset('assets/img/hr2.png')}}" alt="img">
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
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="hero-slider-rimg">
                            <img src="{{asset('assets/img/hr2.png')}}" alt="img">
                            <img class="image-2" src="{{asset('assets/img/hr1.png')}}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('client.product.feature_products',['featureProducts'=>$featureProducts])

@include('client.shop_category',['categories'=>$categories])

@include('client.product.newest_products',['newestProducts'=>$newestProducts])

<section class="call-now pt-120 pb-120" style="background-image:url('{{asset('assets/img/call-bg.jpg')}}');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="call-now-content">
                    <h4>هر سوالی دارید</h4>
                    <h2>09228598461</h2>
                    <div class="cl-btn mt-20">
                        <a class="button-3" href="{{route('client.contact.index')}}">تماس باما</a>
                        <a class="button-1 btn-2" href="tel:09228598461">تماس بگیر</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="call-now-shap">
        <img src="{{asset('assets/img/call.png')}}" alt="img">
    </div>
</section>

@if(!empty($latestBlogs))
    @include('client.blog.latest_blog',['latestBlogs'=>$latestBlogs])
@endif

@include('client.layouts.footer')

@yield('custom-script')

</html>
