<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
                    <!-- Category Or Search -->
                    <div class="select-search-option">
                        <div class="select-category">
                            <select name="cate">
                                <option value="0">انتخاب دسته بندی</option>
                                <option value="1">سبزیجات</option>
                                <option value="2">میوه ها</option>
                                <option value="3">سالادها</option>
                                <option value="4">ماهی و غذاهای دریایی</option>
                                <option value="5">گوشت تازه</option>
                                <option value="6">محصولات سالم</option>
                                <option value="7">کره و تخم مرغ</option>
                            </select>
                        </div>
                        <div class="search-form">
                            <form action="#">
                                <input type="text" name="search" placeholder="جستجو محصول...">
                                <button type="submit"><i class="bi bi-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <!-- Header Top Right -->
                    <div class="header-top-right">
                        <ul>
                            <li class="call">
                                <i class="bi bi-telephone-inbound"></i>
                                <span>09129354776</span>
                            </li>
                            <li class="need-help">
                                <a href="#"><i class="bi bi-question-circle"></i> پشتیبانی</a>
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
                                <li><a href="{{route('client.contact')}}">تماس باما</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-2 align-self-center">
                    <div class="header-mini-cart-icon">
                        <div class="icon" id="minicart_open">
                            <i class="fas fa-shopping-basket"></i>
                            <span>5</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Start Mobile Menu Area -->
<div class="mobile-menu-area">

    <!--offcanvas menu area start-->
    <div class="off_canvars_overlay">

    </div>
    <div class="offcanvas_menu">
        <div class="offcanvas_menu_wrapper">
            <div class="canvas_close">
                <a href="javascript:void(0)"><i class="fas fa-times"></i></a>
            </div>
            <div class="mobile-logo">
                <a href="{{route('home')}}">
                    <img src="{{asset('assets/img/logo.png')}}" alt="logo">
                </a>
            </div>
            <div id="menu" class="text-left ">
                <ul class="offcanvas_main_menu">
                    <li class="menu-item-has-children active">
                        <a href="{{route('home')}}">خانه</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{route('client.about')}}"> درباره ما</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{route('client.blog.index')}}">وبلاگ</a>
                    </li>

                    <li class="menu-item-has-children">
                        <a href="{{route('client.product.index')}}">محصولات</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{route('client.contact')}}"> تماس باما</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--offcanvas menu area end-->

<!-- End Header Area -->
<div class="off_canvars_overlay">

</div>
<!-- Start Mincart Section -->
<div class="minicart-sidebar">
    <div class="minicart-sidebar-full">
        <div class="minicart-header">
            <div class="left">
                <i class="bi bi-bag-fill"></i>
                <span>3 مورد</span>
            </div>
            <div class="mini-cart-off">
                <i class="bi bi-x-lg"></i>
            </div>
        </div>
        <div class="minicart-product-item-full">
            <!-- Single -->
            <div class="mcp-item-single">
                <div class="thumbnail">
                    <a href="#">
                        <img src="{{asset('assets/img/1.png')}}" alt="img">
                    </a>
                </div>
                <div class="content">
                    <h4><a href="#">محصول ساده</a></h4>
                    <div class="price">
                        <span>تومان200.00 x 1</span>
                    </div>
                </div>
                <div class="remove">
                    <a href="#"><i class="bi bi-x-lg"></i></a>
                </div>
            </div>
            <!-- Single -->
            <div class="mcp-item-single">
                <div class="thumbnail">
                    <a href="#">
                        <img src="{{asset('assets/img/2.png')}}" alt="img">
                    </a>
                </div>
                <div class="content">
                    <h4><a href="#">محصول ساده</a></h4>
                    <div class="price">
                        <span>تومان200.00 x 1</span>
                    </div>
                </div>
                <div class="remove">
                    <a href="#"><i class="bi bi-x-lg"></i></a>
                </div>
            </div>
            <!-- Single -->
            <div class="mcp-item-single">
                <div class="thumbnail">
                    <a href="#">
                        <img src="{{asset('assets/img/3.png')}}" alt="img">
                    </a>
                </div>
                <div class="content">
                    <h4><a href="#">محصول ساده</a></h4>
                    <div class="price">
                        <span>تومان200.00 x 1</span>
                    </div>
                </div>
                <div class="remove">
                    <a href="#"><i class="bi bi-x-lg"></i></a>
                </div>
            </div>
        </div>
        <div class="minicart-bottom">
            <div class="title">
                <h2>جمع : <span>600 تومان</span></h2>
            </div>
            <div class="button-b">
                <a class="button-2" href="{{route('client.cart')}}">مشاهده سبد خرید</a>
                <a class="button-1" href="{{route('client.checkout')}}">ادامه تسویه حساب </a>
            </div>
        </div>
    </div>
</div>
<!-- End Mincart Section -->
