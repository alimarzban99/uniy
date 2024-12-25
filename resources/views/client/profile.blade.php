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
                            <a href="#" class="nav-link" id="user-tab" data-bs-toggle="tab" data-bs-target="#user"
                               role="tab" aria-controls="user" aria-selected="false">جزئیات حساب<i
                                    class="fas fa-user"></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('auth.logout')}}" class="nav-link" title="Logout">خروج<i
                                    class="fas fa-sign-out-alt"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9 rtl">
                <div class="my-account-main-content">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="order" role="tabpanel" aria-labelledby="order-tab">
                            <div class="my-account-main-content-item">
                                <h2>سفارشات</h2>
                                <div class="table-responsive text-center">
                                    <table class="table table-bordered  table-hover">
                                        <thead>
                                        <tr>
                                            <th>سفارش</th>
                                            <th>تاریخ</th>
                                            <th>وضعیت</th>
                                            <th>قیمت</th>
                                            <th>عمل</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($orders as $order)
                                            <tr>
                                                <td>{{$order->id}}</td>
                                                <td>{{$order->created_at}}</td>
                                                <td>{{$order->status}}</td>
                                                <td>{{$order->price}}تومان </td>
                                                <td><a href="cart.html">حذف</a></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="user" role="tabpanel" aria-labelledby="user-tab">
                            <div class="my-account-main-content-item">
                                <h2>جزئیات حساب</h2>
                                <form action="{{route('client.user.update')}}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <div class="single-field">
                                        <label>ایمیل</label>
                                        <input type="text" name="email" disabled value="{{auth()->user()->email}}">
                                    </div>
                                    <div class="single-field">
                                        <label>نام</label>
                                        <input type="text" name="username" value="{{auth()->user()->username}}">
                                    </div>
                                    <div class="single-field">
                                        <label>آدرس</label>
                                        <input type="text" name="address" value="{{auth()->user()->address}}">
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
