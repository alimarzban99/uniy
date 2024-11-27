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
                                        <a href="#" class="btn btn-icon btn-pills btn-soft-primary"
                                           data-bs-toggle="modal" data-bs-target="#viewprofile"><i
                                                class="uil uil-eye"></i></a>
                                        <a href="#" class="btn btn-icon btn-pills btn-soft-success"
                                           data-bs-toggle="modal" data-bs-target="#editprofile"><i
                                                class="uil uil-pen"></i></a>
                                        <a href="#" class="btn btn-icon btn-pills btn-soft-danger"><i
                                                class="uil uil-trash"></i></a>
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
