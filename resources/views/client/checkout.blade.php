<!DOCTYPE html>
<html  class="no-js" lang="fa">

@include('client.layouts.navbar',['title'=>'بررسی'])

@include('client.layouts.breadcrumb',['title' => 'بررسی'])

<!-- Start Checkout Page -->
<section class="section-padding-2">
    <div class="container rtl">
        <div class="row">
            <div class="col-lg-8 mb-30">
                <div class="checkout-form-main">
                    <h2>جزئیات صورتحساب</h2>
                    <form action="#">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-field">
                                    <label>نام *</label>
                                    <input type="text" required="required" name="namme">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-field">
                                    <label>نام خانوادگی *</label>
                                    <input type="text" required="required" name="lnamme">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-field">
                                    <label>نام شرکت </label>
                                    <input type="text" name="companyname">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-field">
                                    <label>ایمیل * </label>
                                    <input type="email" name="email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-field">
                                    <label>موبایل * </label>
                                    <input type="text" name="phone">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-field">
                                    <label>کشور * </label>
                                    <select name="country">
                                        <option value="0">انگلستان</option>
                                        <option value="1">چین</option>
                                        <option value="2">عربستان</option>
                                        <option value="3">آلمان</option>
                                        <option value="4">فرانسه</option>
                                        <option value="5">ژاپن</option>
                                        <option value="6">بنگلادش</option>
                                        <option value="7">هند</option>
                                        <option value="8">لندن</option>
                                        <option value="9">آفریقا</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-field">
                                    <label>زیپ * </label>
                                    <input type="text" name="zip">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-field">
                                    <div class="form-check">
                                        <label class="inline">
                                            <input class="form-check-input" type="checkbox">
                                            <span class="input"></span>به آدرس دیگری ارسال شود؟
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-field">
                                    <label>یادداشت های سفارش (اختیاری) </label>
                                    <textarea name="ordernote"></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 mb-30">
                <div class="checkout-summery mb-30">
                    <h2>صورتحساب</h2>
                    <ul>
                        <li>530 تومان <span> جمع کل :</span></li>
                        <li>530 تومان <span> حمل دریایی</span></li>
                        <li>530 تومان <span> تخفیف</span></li>
                        <li>530 تومان <span> جمع : </span></li>
                        <li><b>جمع کل</b><span><b> 530 تومان</b></span></li>
                    </ul>
                </div>
                <div class="checkout-summery">
                    <h2>روش پرداخت</h2>
                    <div class="form-check">
                        <label class="inline">
                            <input class="form-check-input" type="checkbox">
                            <span class="input"></span>انتقال مستقیم بانکی
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="inline">
                            <input class="form-check-input" type="checkbox">
                            <span class="input"></span>پرداخت نقدی هنگام تحویل
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="inline">
                            <input class="form-check-input" type="checkbox">
                            <span class="input"></span>پرداخت ها را چک کنید
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="inline">
                            <input class="form-check-input" type="checkbox">
                            <span class="input"></span>پی پال
                        </label>
                    </div>
                    <button type="submit" class="button-1 mt-10">ثبت سفارش</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Checkout Page -->

@include('client.layouts.footer')


</html>
