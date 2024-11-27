<!DOCTYPE html>
<html  class="no-js" lang="fa">

@include('client.layouts.navbar',['title' => 'ثبت نام'])

<!-- Start Login Register Content -->
<div class="lr-page pt-100 pb-100">
    <div class="container rtl">
        <div class="row">
            <div class="col-12">
                <div class="lr-user-holder">
                    @include('client.layouts.alert')
                    <div class="lr-user-holder-form">
                        <h2>حساب کاربری برای خود بسازید</h2>
                        <form action="{{route('auth.do_register')}}" method="POST">
                            @csrf
                            <div class="single-field">
                                <input type="text" name="username" placeholder="نام کاربری"  value="{{ old('username') }}">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="single-field">
                                <input type="email" name="email" placeholder="ایمیل"  value="{{ old('email') }}">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="single-field">
                                <input type="password" name="password" placeholder="رمزعبور" value="{{ old('password') }}">
                                <i class="fas fa-lock"></i>
                            </div>
                            <div class="single-field">
                                <input type="password" name="password_confirmation" placeholder="رمز عبور را تایید کنید" value="{{ old('password_confirmation') }}">
                                <i class="fas fa-lock"></i>
                            </div>
                            <div class="single-field mb-0">
                                <button class="button-1" type="submit">ایجاد حساب کاربری</button>
                            </div>
                        </form>
                    </div>
                    <div class="lr-user-holder-botm">
                        <p>ایا حساب کاربری دارید؟ <a href="{{route('auth.login')}}">ورود</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Login Register Content -->




@include('client.layouts.footer')

</html>
