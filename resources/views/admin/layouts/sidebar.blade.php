<nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content" data-simplebar="" style="height: calc(100% - 60px);">
        <div class="sidebar-brand">
            <a href="{{route('home')}}">
                <img src="{{asset('assets/img/logo.png')}}" height="24" class="logo-light-mode" alt="">
                <img src="{{asset('assets/img/logo.png')}}" height="24" class="logo-dark-mode" alt="">
            </a>
        </div>

        <ul class="sidebar-menu pt-3">
            <li><a href="{{route('admin.dashboard')}}"><i class="uil uil-dashboard ms-2 d-inline-block"></i>داشبرد</a></li>

            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="uil uil-wheelchair ms-2 d-inline-block"></i>کاربران</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="{{route('admin.user.index')}}">لیست</a></li>
                        <li><a href="{{route('admin.user.create')}}">افزودن</a></li>
                    </ul>
                </div>
            </li>

            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="uil uil-wheelchair ms-2 d-inline-block"></i>سفارش ها</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="{{route('admin.order.index')}}">لیست</a></li>
                        <li><a href="{{route('admin.order.create')}}">افزودن</a></li>
                    </ul>
                </div>
            </li>

            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="uil uil-wheelchair ms-2 d-inline-block"></i>دسته بندی</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="{{route('admin.category.index')}}">لیست</a></li>
                        <li><a href="{{route('admin.category.create')}}">افزودن</a></li>
                    </ul>
                </div>
            </li>

            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="uil uil-wheelchair ms-2 d-inline-block"></i>محصولات</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="{{route('admin.product.index')}}">لیست</a></li>
                        <li><a href="{{route('admin.product.create')}}">افزودن</a></li>
                    </ul>
                </div>
            </li>

            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="uil uil-wheelchair ms-2 d-inline-block"></i>وبلاگ</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="{{route('admin.blog.index')}}">لیست</a></li>
                        <li><a href="{{route('admin.blog.create')}}">افزودن</a></li>
                    </ul>
                </div>
            </li>

        </ul>
        <!-- sidebar-menu  -->
    </div>

</nav>
