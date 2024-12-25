<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>{{$title}}</title>
    <link rel="icon" href="{{asset('assets/img/icon.png')}}" type="image/gif" sizes="16x16">
    <link rel="icon" href="{{asset('assets/img/icon.png')}}" type="image/gif" sizes="18x18">
    <link rel="icon" href="{{asset('assets/img/icon.png')}}" type="image/gif" sizes="20x20">

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontfarsi.css')}}">

</head>

<body>

@php
    $count = app(\App\Services\Client\CartService::class)->count();
@endphp

    <!-- Start Header Area -->
<header class="header">
    <!-- Header Top -->
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 align-self-center">
                    <div class="logo d-mobile-none">
                        <a href="{{route('home')}}">
                            <img src="{{asset('assets/img/logo.png')}}" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <!-- Header Top Right -->
                    <div class="header-top-right">
                        <ul>
                            <li class="need-help">
                                @if($count > 0)
                                    <div class="col-2 align-self-center">
                                        <a href="{{route('client.cart.index')}}">
                                            <div class="header-mini-cart-icon">
                                                <div class="icon">
                                                    <i class="fas fa-shopping-basket"></i>
                                                    <span>{{$count}}</span>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                @endif

                            </li>
                            @if(auth()->check())
                                <li class="signin-option">
                                    <a href="{{route('client.profile')}}"><i class="far fa-user"></i></a>
                                </li>
                            @else
                                <li class="signin-option">
                                    <a href="{{route('auth.login')}}"><i class="far fa-user"></i></a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Bottom -->
    <div class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <!-- Logo -->
                    <div class="logo mobile-bar-logo">
                        <a href="{{route('home')}}">
                            <img src="{{asset('assets/img/logo.png')}}" alt="img">
                        </a>
                    </div>
                    <div class="mobile-bar">
                        <div class="canvas_open">
                            <a href="javascript:void(0)">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                    </div>
                    <div class="mobile-bar-wishlist-or-sign header-top-right">
                        <ul>
                            @if(auth()->check())
                                <li class="signin-option">
                                    <a href="{{route('client.profile')}}"><i class="far fa-user"></i></a>
                                </li>
                            @else
                                <li class="signin-option">
                                    <a href="{{route('auth.login')}}"><i class="far fa-user"></i></a>
                                </li>
                            @endif

                        </ul>
                    </div>
                    <div class="menu menu-1">
                        <nav>
                            <ul>
                                <li><a href="{{route('home')}}">خانه</a></li>
                                <li><a href="{{route('client.blog.index')}}">وبلاگ</a></li>
                                <li><a href="{{route('client.product.index')}}">محصولات</a></li>
                                <li><a href="{{route('client.about')}}">درباره ما</a></li>
                                <li><a href="{{route('client.contact.index')}}">تماس باما</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>

@include('client.layouts.mobile-navbar')

