<!DOCTYPE html>
<html lang="fa">

@include('admin.layouts.navbar',['title'=>$title])

<body>

<div class="page-wrapper doctris-theme toggled">

    @include('admin.layouts.sidebar')


    <!-- Start Page Content -->
    <main class="page-content bg-light">
        @include('admin.layouts.top-header')
        @yield('content')

    </main>
    <!--End page-content" -->
</div>
<!-- page-wrapper -->


@include('admin.layouts.footer')

@yield('custom-script')

</body>

</html>
