@php
    $title = 'لیست محصولات';
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
                                <th class="border-bottom p-3" style="min-width: 180px;">نام</th>
                                <th class="border-bottom p-3">دسته بندی</th>
                                <th class="border-bottom p-3">قیمت</th>
                                <th class="border-bottom p-3">ویژه</th>
                                <th class="border-bottom p-3">وضعیت</th>
                                <th class="border-bottom p-3" style="min-width: 150px;">تاریخ</th>
                                <th class="border-bottom p-3" style="min-width: 100px;"></th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($products as $product)
                                <tr>
                                    <th class="p-3">{{$product->id}}</th>
                                    <td class="p-3">{{$product->name}}</td>
                                    <td class="p-3">{{$product->category->name}}</td>
                                    <td class="p-3">{{$product->price}}</td>
                                    <td class="p-3">
                                        @if($product->is_featured)
                                            <span class="badge bg-soft-success">بله</span>
                                        @else
                                            <span class="badge bg-soft-danger">خیر</span>
                                        @endif
                                    </td>
                                    <td class="p-3">
                                        @include('admin.layouts.status',['status'=>$product->status])
                                    </td>
                                    <td class="p-3">{{$product->created_at}}</td>
                                    <td class="text-start">
                                        <a href="{{route('admin.product.edit',['product'=>$product->id])}}" class="btn btn-icon btn-pills btn-soft-success">
                                            <i class="uil uil-pen"></i>
                                        </a>
                                        <a href="#" class="btn btn-icon btn-pills btn-soft-danger product-delete" id="{{$product->id}}">
                                            <i class="uil uil-trash"></i>
                                        </a>

                                        <a href="#" class="btn btn-icon btn-pills btn-soft-primary product-is-featured" id="{{$product->id}}">
                                            <i class="uil uil-star"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--end row-->

            <div class="row text-center">
                @include('admin.layouts.pagination',['pagination'=>$products])
            </div><!--end row-->
            <!--end row-->
        </div>
    </div>

@endsection

@section('custom-script')
    <script>
        $(document).ready(function () {
            $(".product-delete").click(function () {
                var idValue = $(this).attr("id");
                var url = "{{ route('admin.product.destroy', ['product' => '__ID__']) }}".replace('__ID__', idValue);

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

            $(".product-is-featured").click(function () {
                var idValue = $(this).attr("id");
                var url = "{{ route('admin.product.featured', ['product' => '__ID__']) }}".replace('__ID__', idValue);

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: url,
                    type: 'POST',
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
