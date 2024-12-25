<!DOCTYPE html>
<html class="no-js" lang="fa">

@include('client.layouts.navbar',['title' => 'حساب من'])

@include('client.layouts.breadcrumb',['title' => 'حساب من'])

<section class="section-padding">
    <div class="container rtl">
        <div class="row">
            <div class="col-md-3">
                <div class="my-account-menu">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="#" class="nav-link active" id="order-tab" data-bs-toggle="tab"
                               data-bs-target="#order" role="tab" aria-controls="order" aria-selected="true">سفارشات<i
                                    class="far fa-file-alt"></i></a>
                        </li>

                        <li class="nav-item" role="presentation">
                            <a href="#" class="nav-link" id="acdetails-tab" data-bs-toggle="tab"
                               data-bs-target="#acdetails" role="tab" aria-controls="acdetails" aria-selected="false">جزئیات
                                حساب <i class="fas fa-user"></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('auth.logout')}}" class="nav-link" title="Logout">خروج <i
                                    class="fas fa-sign-out-alt"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9 rtl">
                <div class="my-account-main-content">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="my-account-main-content-item">
                                <h2>سفارشات</h2>
                                <div class="table-responsive text-center">
                                    <table class="table table-bordered  table-hover">
                                        <thead>
                                        <tr>
                                            <th>سفارش</th>
                                            <th>تاریخ</th>
                                            <th>وضعیت</th>
                                            <th>جمع</th>
                                            <th>عمل</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>دی 22, 1380</td>
                                            <td>انتظار</td>
                                            <td>T3000</td>
                                            <td><a href="cart.html">چشم انداز</a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Nov 22, 2019</td>
                                            <td>تایید شده</td>
                                            <td>T200</td>
                                            <td><a href="cart.html">چشم انداز</a></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Jan 12, 2020</td>
                                            <td>در انتظار</td>
                                            <td>T990</td>
                                            <td><a href="cart.html">چشم انداز</a></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="acdetails" role="tabpanel" aria-labelledby="acdetails-tab">

                            <div class="my-account-main-content-item">
                                <h2>جزئیات حساب</h2>
                                <form action="#">
                                    <div class="single-field">
                                        <label>نام</label>
                                        <input type="text" name="username" value="{{auth()->user()->username}}">
                                    </div>
                                    <div class="single-field">
                                        <label>آدرس</label>
                                        <input type="text" name="address" value="{{auth()->user()->address}}">
                                    </div>
                                    <div class="single-field">
                                        <label>ایمیل</label>
                                        <input type="text" name="email" value="{{auth()->user()->email}}">
                                    </div>

                                    <div class="single-field">
                                        <label>موبایل</label>
                                        <input type="text" name="mobile" value="{{auth()->user()->mobile}}">
                                    </div>
                                    <div class="single-field">
                                        <label>رمز عبور</label>
                                        <input type="password" name="password" placeholder="رمز عبور">
                                    </div>
                                    <div class="single-field">
                                        <label>نکرار رمز عبور</label>
                                        <input type="password" name="password_confirmation"
                                               placeholder="تکرار رمز عبور">
                                    </div>
                                    <div class="single-field">
                                        <button class="button-1" type="submit">ذخیره کنید</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('client.layouts.footer')


</html>
