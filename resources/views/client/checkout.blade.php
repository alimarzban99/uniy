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
                            <input class="form-check-input" type="radio" name="payment_method" value="1" checked>
                            <span class="input"></span>پرداخت نقدی هنگام تحویل
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="inline">
                            <input class="form-check-input" type="radio" name="payment_method" value="2" disabled>
                            <span class="input"></span>درگاه اینترنتی
                        </label>
                    </div>
                    <button type="submit" class="button-1 submit-order mt-10">ثبت سفارش</button>
                </div>
                @include('client.layouts.alert')
            </div>
        </div>
    </div>
</section>
<!-- End Checkout Page -->

@include('client.layouts.footer')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function () {
        $(".submit-order").on("click", function (event) {
            event.preventDefault();
            let note = $("textarea[name='note']").val();
            let paymentMethod = $("input[name='payment_method']:checked").val();

            $.ajax({
                url: "{{route('client.order.store')}}",
                method: "POST",
                data: {
                    note: note,
                    payment_method: paymentMethod,
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                success: function () {
                    window.location.href = "{{route('client.profile')}}"
                },
                error: function(xhr) {
                    if (xhr.responseText === '"cart_not_fount"') {
                        Swal.fire({
                            icon: 'error',
                            title: 'خطا',
                            text: 'سبد خرید برای تسویه وجود ندارد',
                        });

                        setTimeout(function() {
                            window.location.href = "{{route('client.product.index')}}"
                        }, 1000);

                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'خطا',
                            text: 'خطای ناشناخته به وجود امده',
                        });
                    }
                }
            })
        });
    });
</script>
</html>
