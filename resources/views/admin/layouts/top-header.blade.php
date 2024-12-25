<div class="top-header">
    <div class="header-bar d-flex justify-content-between border-bottom">
        <div class="d-flex align-items-center">
            <a class="logo-icon">
                <img src="{{asset('assets/img/logo.png')}}" height="30" class="small" alt="">
                <span class="big">
                                    <img src="{{asset('assets/img/logo.png')}}" height="24" class="logo-light-mode"
                                         alt="">
                                    <img src="{{asset('assets/img/logo.png')}}" height="24" class="logo-dark-mode"
                                         alt="">
                                </span>
            </a>
            <a id="close-sidebar" class="btn btn-icon btn-pills btn-soft-primary me-2" href="#">
                <i class="uil uil-bars"></i>
            </a>
        </div>

        <ul class="list-unstyled mb-0">

            <li class="list-inline-item mb-0 me-1">
                <div class="dropdown dropdown-primary">
                    <button type="button" class="btn btn-pills btn-soft-primary dropdown-toggle p-0"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                            src="{{asset('assets-profile/images/avatar.jpg')}}"
                            class="avatar avatar-ex-small rounded-circle" alt=""></button>
                    <div class="dropdown-menu dd-menu dropdown-menu-end bg-white shadow border-0 mt-3 py-3"
                         style="min-width: 200px;">
                        <div class="dropdown-divider border-top"></div>
                        <a class="dropdown-item text-dark" href="{{route('auth.logout')}}"><span
                                class="mb-0 d-inline-block me-1"><i
                                    class="uil uil-sign-out-alt align-middle h6"></i></span> خروج</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
