<!DOCTYPE html>
<html class="no-js" lang="fa">

@include('client.layouts.navbar',['title'=>'بررسی'])

@include('client.layouts.breadcrumb',['title' => 'بررسی'])

<!-- Start Checkout Page -->
<section class="section-padding-2">
    <div class="container rtl">
        <div class="row">
            <div class="col-lg-8 mb-30">
                <div class="checkout-form-main">
                    <h2>اطلاعات گیرنده سفارش</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-field">
                                <label>نام</label>
                                <input type="text" required="required" name="username" disabled
                                       value="{{auth()->user()->username}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-field">
                                <label>موبایل</label>
                                <input type="text" required="required" name="mobile" disabled
                                       value="{{auth()->user()->mobile}}">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="input-field">
                                <label>آدرس</label>
                                <input type="text" name="address" disabled value="{{auth()->user()->address}}">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="input-field">
                                <label>یادداشت های سفارش (اختیاری) </label>
                                <textarea name="note"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-30">
                <div class="checkout-summery">
                    <h2>روش پرداخت</h2>
                    <div class="form-check">
                        <label class="inline">
                            <input class="form-check-input" type="radio" name="payment_method" value="cash" checked>
                            <span class="input"></span>پرداخت نقدی هنگام تحویل
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="inline">
                            <input class="form-check-input" type="radio" name="payment_method" value="online">
                            <span class="input"></span>درگاه اینترنتی
                        </label>
                    </div>
                    <button type="submit" class="button-1 submit-order mt-10">ثبت سفارش</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Checkout Page -->

@include('client.layouts.footer')

<script>
    $(document).ready(function () {
        // هنگام کلیک روی دکمه ثبت سفارش
        $(".submit-order").on("click", function (event) {
            event.preventDefault(); // جلوگیری از ارسال فرم (در صورت وجود)

            let note = $("textarea[name='note']").val();
            let paymentMethod = $("input[name='payment_method']:checked").val();

            $.ajax({
                url: "{{route('client.order.store')}}",
                method: "POST",
                data: {
                    note: note,
                    payment_method: paymentMethod,
                    _token: $('meta[name="csrf-token"]').attr('content') // برای امنیت Laravel
                },
                success: function () {
                    window.location.href = "{{route('client.cart.index')}}"
                },
            })
        });
    });
</script>
</html>
