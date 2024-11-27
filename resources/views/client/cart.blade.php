<!DOCTYPE html>
<html class="no-js" lang="fa">

@include('client.layouts.navbar',['title'=>'سبد خرید'])

@include('client.layouts.breadcrumb',['title' => 'سبد خرید'])

<!-- Start Cart Section -->
<div class="section-padding">
    <div class="container rtl">
        <div class="row table-responsive">
            <table class="table shopping-cart-tabel table-bordered align-middle">
                <thead>
                <tr class="text-uppercase">
                    <th class="text-center">تصویر</th>
                    <th class="text-center">نام محصول</th>
                    <th class="text-center">تا قیمت</th>
                    <th class="text-center">تعداد</th>
                    <th class="text-center">جمع کلی</th>
                    <th class="text-center">عمل</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="text-center product-thumbnail">
                        <a href="#"><img src="assets/img/product/1.jpg" alt="product"></a>
                    </td>
                    <td class="text-center product-name">
                        <a href="#">نام محصول</a>
                    </td>
                    <td class="text-center product-price-cart">
                        <span class="amount">260 تومان</span>
                    </td>
                    <td class="text-center product-quantity">
                                <span class="quantity">
				  					<input type="number" min="1" max="1000" step="1" value="1">
								</span>
                    </td>
                    <td class="text-center product-subtotal">
                        <span class="amount">260 تومان</span>
                    </td>
                    <td class="product-remove text-center">
                        <a href="#"><i class="fas fa-times"></i></a>
                    </td>
                </tr>
                <tr>
                    <td class="text-center product-thumbnail">
                        <a href="#"><img src="assets/img/product/2.jpg" alt="product"></a>
                    </td>
                    <td class="text-center product-name">
                        <a href="#">نام محصول</a>
                    </td>
                    <td class="text-center product-price-cart">
                        <span class="amount">260 تومان</span>
                    </td>
                    <td class="text-center product-quantity">
                                <span class="quantity">
				  					<input type="number" min="1" max="1000" step="1" value="1">
								</span>
                    </td>
                    <td class="text-center product-subtotal">
                        <span class="amount">260 تومان</span>
                    </td>
                    <td class="product-remove text-center">
                        <a href="#"><i class="fas fa-times"></i></a>
                    </td>
                </tr>
                <tr>
                    <td class="text-center product-thumbnail">
                        <a href="#"><img src="assets/img/product/3.jpg" alt="product"></a>
                    </td>
                    <td class="text-center product-name">
                        <a href="#">نام محصول</a>
                    </td>
                    <td class="text-center product-price-cart">
                        <span class="amount">260 تومان</span>
                    </td>
                    <td class="text-center product-quantity">
                                <span class="quantity">
				  					<input type="number" min="1" max="1000" step="1" value="1">
								</span>
                    </td>
                    <td class="text-center product-subtotal">
                        <span class="amount">260 تومان</span>
                    </td>
                    <td class="product-remove text-center">
                        <a href="#"><i class="fas fa-times"></i></a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col-6">
                <a class="button-1" href="{{route('client.product.index')}}">به خرید ادامه دهید</a>
            </div>
            <div class="col-6 updae-cart text-right">
                <a class="button-1" href="#">به روز رسانی سبد خرید</a>
            </div>
        </div>
        <div class="row cart-page-check-out-area flex-row-reverse pt-4 ">
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-header py-3">
                        <h6 class="m-0 mb-1">جمع سفارش</h6>
                    </div>
                    <div class="card-body ">
                        <ul class="list-unstyled">
                            <li class="d-flex justify-content-between align-items-center mb-2">
                                <h6 class="me-2 text-body">جمع کل</h6><span class="text-end">260 تومان</span>
                            </li>
                            <li class="d-flex justify-content-between align-items-center mb-2">
                                <h6 class="me-2 text-body">مالیات</h6><span class="text-end">260 تومان</span>
                            </li>
                            <li class="d-flex justify-content-between align-items-center border-top pt-3 mt-3">
                                <h6 class="me-2">جمع کل</h6><span class="text-end text-dark">260 تومان</span>
                            </li>
                        </ul>
                        <div class="d-grid gap-2 pt-10 mx-auto">
                            <a class="button-1" href="{{route('client.checkout')}}">برای تسویه حساب ادامه دهید</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-8">
                <div class="card">
                    <div class="card-header bg-transparent py-3">
                        <h6 class="m-0">از کد تخفیف استفاده کنید</h6>
                    </div>
                    <div class="card-body ">
                        <form>
                            <div class="form-group mb-3">
                                <label class="form-label">کد تخفیف دارید؟</label>
                                <input type="email" class="form-control" placeholder="xxxx">
                            </div>
                            <button class="button-1">درخواست</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Cart Section -->

@include('client.layouts.footer')


</html>
