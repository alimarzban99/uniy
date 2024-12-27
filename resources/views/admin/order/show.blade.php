@php
    $title = 'نمایش سفارش';
@endphp
@extends('admin.layouts.main',['title'=>$title])
@section('content')
    <div class="container-fluid">
        <div class="layout-specing">
            @include('admin.layouts.breadcrumb', ['title' => $title])

            <div class="col-md-12 mt-4">
                <div class="card border-0 p-4 rounded shadow">
                    <h5 class="card-title border-bottom pb-2">اطلاعات سفارش</h5>
                    <div class="order-details mt-3">
                        <div class="row">
                            <div class="col-md-6">
                                <p><strong>شماره سفارش: </strong> {{$order->id}}</p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>نام مشتری: </strong> {{$order->user->username}}</p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>شماره مشتری: </strong> {{$order->user->mobile}} </p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>آدرس مشتری: </strong> {{$order->user->address}} </p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>تاریخ سفارش: </strong> {{$order->created_at}}</p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>مجموع قیمت: </strong> {{number_format($order->price)}} تومان</p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>توضیحات سفارش دهنده: </strong> {{$order->note}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 mt-4">
                <div class="card border-0 p-4 rounded shadow">
                    <h5 class="card-title border-bottom pb-2">سبد خرید</h5>
                    <div class="mt-3">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th class="text-center">نام محصول</th>
                                <th class="text-center">قیمت</th>
                                <th class="text-center">تعداد</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($order->cart->carts as $item)
                                <tr>
                                    <td class="text-center">{{$item->product->name}}</td>
                                    <td class="text-center">
                                        @if($item->product->discount > 0)
                                            <span>{{number_format($item->product->discounted_price)}}تومان <del>{{number_format($item->product->price)}} تومان</del></span>
                                        @else
                                            <span>{{number_format($item->product->price)}}تومان </span>
                                        @endif
                                    </td>
                                    <td class="text-center">{{$item->count}} عدد</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-12 mt-4">
                <div class="d-flex justify-content-start gap-2">
                    @if($order->status === \App\Enums\OrderStatus::NEW->value)
                        <button class="btn btn-danger  change-status" id="{{\App\Enums\OrderStatus::REJECTED->value}}">
                            لغو سفارش
                        </button>
                        <button class="btn btn-success  change-status" id="{{\App\Enums\OrderStatus::ACCEPTED->value}}">
                            قبول سفارش
                        </button>
                    @endif

                    @if($order->status === \App\Enums\OrderStatus::ACCEPTED->value)
                        <button class="btn btn-primary change-status" id="{{\App\Enums\OrderStatus::DELIVERED->value}}">
                            ارسال سفارش
                        </button>
                    @endif
                    @if($order->status === \App\Enums\OrderStatus::DELIVERED->value)
                        <button class="btn btn-info" disabled>
                            کاربر تحویل گرفت
                        </button>
                    @endif
                </div>
            </div>

        </div>
    </div><!--end container-->

@endsection

@section('custom-script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function () {
            $('.change-status').on('click', function () {
                $.ajax({
                    url: "{{ route('admin.order.change_status', ['order' => '__ID__']) }}".replace('__ID__', '{{$order->id}}'),
                    method: 'POST',
                    data: {
                        status: $(this).attr('id'),
                        _token: '{{ csrf_token() }}'
                    },
                    success: function () {
                        setTimeout(function () {
                            window.location.href = "{{route('admin.order.index')}}"
                        }, 500);
                    },
                    error: function () {
                        Swal.fire({
                            icon: 'error',
                            title: 'خطا',
                            text: 'خطای ناشناخته به وجود امده',
                        });
                    }
                });
            });
        });
    </script>

@endsection
