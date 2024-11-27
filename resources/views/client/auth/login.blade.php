<!DOCTYPE html>
<html class="no-js" lang="fa">


@include('client.layouts.navbar',['title' => 'ورود'])

<!-- Start Login Register Content -->
<div class="lr-page pt-100 pb-100">
    <div class="container rtl">
        <div class="row">
            <div class="col-12">
                <div class="lr-user-holder">
                    @include('client.layouts.alert')
                    <div class="lr-user-holder-form">
                        <h2>وارد حساب کاربری خود شوید</h2>
                        <form action="{{route('auth.do_login')}}" method="POST">
                            @csrf

                            <div class="single-field">
                                <input type="text" name="email" placeholder="ایمیل" required>
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="single-field">
                                <input type="password" name="password" placeholder="رمز عبور" required>
                                <i class="fas fa-lock"></i>
                            </div>
                            <div class="single-field mb-0">
                                <button class="button-1" type="submit">ورود به سیستم</button>
                            </div>
                        </form>
                    </div>
                    <div class="lr-user-holder-botm">
                        <p>حساب کاربری ندارید؟ <a href="{{route('auth.register')}}">ثبت نام</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Login Register Content -->


@include('client.layouts.footer')


</html>
