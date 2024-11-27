@php
    $title = 'لیست وبلاگ';
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
                                <th class="border-bottom p-3" style="min-width: 180px;">عنوان</th>
                                <th class="border-bottom p-3" style="min-width: 180px;">دسته بندی</th>
                                <th class="border-bottom p-3">تعداد بازدید</th>
                                <th class="border-bottom p-3">وضعیت</th>
                                <th class="border-bottom p-3" style="min-width: 150px;">تاریخ</th>
                                <th class="border-bottom p-3" style="min-width: 100px;"></th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($blogs as $blog)
                                <tr>
                                    <th class="p-3">{{$blog->id}}</th>
                                    <td class="p-3">{{$blog->title}}</td>
                                    <td class="p-3">{{$blog->category->name}}</td>
                                    <td class="p-3">{{$blog->visit}}</td>
                                    <td class="p-3">
                                        @include('admin.layouts.status',['status'=>$blog->status])
                                    </td>
                                    <td class="p-3">{{$blog->created_at}}</td>
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
                @include('admin.layouts.pagination',['pagination'=>$blogs])

            </div><!--end row-->
            <!--end row-->
        </div>
    </div>



@endsection
