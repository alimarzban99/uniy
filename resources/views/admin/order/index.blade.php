@php
    $title = 'لیست سفارش ها';
@endphp
@extends('admin.layouts.main',['title'=>$title])

@section('content')
    <div class="container-fluid">
        <div class="layout-specing">
            @include('admin.layouts.breadcrumb',['title'=>$title])
            <div class="row">
                <div class="col-12 mt-4">
                    <div class="table-responsive shadow rounded">
                        <table class="table table-center bg-white mb-0">
                            <thead>
                            <tr>
                                <th class="border-bottom p-3" style="min-width: 50px;">شناسه</th>
                                <th class="border-bottom p-3">نام مشتری</th>
                                <th class="border-bottom p-3">قیمت</th>
                                <th class="border-bottom p-3">روش پرداخت</th>
                                <th class="border-bottom p-3">وضعیت</th>
                                <th class="border-bottom p-3" style="min-width: 150px;">تاریخ</th>
                                <th class="border-bottom p-3" style="min-width: 100px;"></th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($orders as $order)
                            <tr>
                                <th class="p-3">{{$order->id}}</th>
                                <td class="p-3">{{$order->user->username}}</td>
                                <td class="p-3">{{number_format($order->price)}}</td>
                                <td class="p-3">
                                    <span class="badge bg-soft-primary">
                                    {{\App\Enums\PaymentMethod::trans(value: $order->payment_method)}}
                                    </span>
                                </td>
                                <td class="p-3">
                                    <span class="badge bg-soft-success">
                                    {{\App\Enums\OrderStatus::trans(value: $order->status)}}
                                    </span>
                                </td>
                                <td class="p-3">{{$order->created_at}}</td>

                                <td class="text-start">
                                    <a href="{{route('admin.order.show',['order'=>$order->id])}}"
                                       class="btn btn-icon btn-pills btn-soft-primary">
                                        <i class="uil uil-eye"></i>
                                    </a>
                                    <a class="btn btn-icon btn-pills btn-soft-danger order-delete" id="{{$order->id}}">
                                        <i class="uil uil-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row text-center">
                @include('admin.layouts.pagination',['pagination'=>$orders])
            </div>
        </div>
    </div>

@endsection

@section('custom-script')
    <script>
        $(document).ready(function () {
            $(".order-delete").click(function () {
                var idValue = $(this).attr("id");
                var url = "{{ route('admin.order.destroy', ['order' => '__ID__']) }}".replace('__ID__', idValue);

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: url,
                    type: 'DELETE',
                    dataType: 'json',
                    success: function () {
                        setTimeout(function() {
                            window.location.reload();
                        }, 500);
                    },
                })

            });
        });
    </script>

@endsection
