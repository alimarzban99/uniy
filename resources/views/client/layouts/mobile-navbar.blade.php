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
                        <a href="{{route('client.contact.index')}}"> تماس باما</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
