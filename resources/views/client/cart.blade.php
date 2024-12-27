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
                @foreach($data->carts as $item)
                    <tr>
                        <td class="text-center product-thumbnail">
                            <a href="{{route('client.product.show',['product'=>$item->product])}}"><img
                                    src="{{asset('storage/'.$item->product->image)}}" alt="product"></a>
                        </td>
                        <td class="text-center product-name">
                            <a href="{{route('client.product.show',['product'=>$item->product])}}">{{$item->product->name}}</a>
                        </td>
                        <td class="text-center product-price-cart">
                            <span class="amount">
                            @if($item->discounted_price > 0)
                                    {{number_format($item->discounted_price)}}تومان
                                    <del>{{number_format($item->price)}} تومان </del>
                                @else
                                    {{number_format($item->price)}}تومان
                                @endif
                            </span>
                        </td>
                        <td class="text-center product-quantity">
                                <span class="quantity">
				  					{{$item->count}}
								</span>
                        </td>
                        <td class="text-center product-subtotal">
                            <span class="amount">{{$item->total_price}} تومان </span>
                        </td>

                        <td class="product-remove text-center">
                            <a class="cart-delete" id="{{$item->id}}"><i class="fas fa-times"></i></a>
                        </td>
                    </tr>
                @endforeach


                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col-6">
                <a class="button-1" href="{{route('client.product.index')}}">به خرید ادامه دهید</a>
            </div>
            <div class="col-6 updae-cart text-right">
                <a class="button-1" href="{{route('client.cart.index')}}">به روز رسانی سبد خرید</a>
            </div>
        </div>
        <div class="row cart-page-check-out-area flex-row-reverse pt-4 ">
            @if($data->total > 0)
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-header py-3">
                            <h6 class="m-0 mb-1">جمع سفارش</h6>
                        </div>
                        <div class="card-body ">
                            <ul class="list-unstyled">
                                <li class="d-flex justify-content-between align-items-center mb-2">
                                    <h6 class="me-2 text-body">جمع کل</h6><span class="text-end">{{number_format($data->total)}} تومان </span>
                                </li>
                            </ul>
                            <div class="d-grid gap-2 pt-10 mx-auto">
                                <a class="button-1" href="{{route('client.checkout')}}">پرداخت</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
<!-- End Cart Section -->

@include('client.layouts.footer')

<script>
    $(document).ready(function () {
        $(".cart-delete").click(function () {
            var idValue = $(this).attr("id");
            var url = "{{ route('client.cart.destroy', ['cart' => '__ID__']) }}".replace('__ID__', idValue);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: url,
                type: 'DELETE',
                dataType: 'json',
                success: function (data) {
                    if (data === 'redirect') {
                        window.location.href = "{{route('client.product.index')}}"
                    } else {
                        setTimeout(function () {
                            window.location.reload();
                        }, 500);
                    }

                },
            })

        });
    });
</script>

</html>
