@php
    $title = 'لیست کاربران';
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
                                <th class="border-bottom p-3">ایمبل</th>
                                <th class="border-bottom p-3">وضعیت</th>
                                <th class="border-bottom p-3">ادمین</th>
                                <th class="border-bottom p-3" style="min-width: 150px;">تاریخ ثبت نام</th>
                                <th class="border-bottom p-3" style="min-width: 100px;"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <th class="p-3">{{$user->id}}</th>
                                    <td class="py-3">
                                        <div class="d-flex align-items-center">
                                            <span class="me-2">{{$user->username}}</span>
                                        </div>
                                    </td>
                                    <td class="p-3">{{$user->email}}</td>
                                    <td class="p-3">
                                        @include('admin.layouts.status',['status'=>$user->status])

                                    </td>
                                    <td class="p-3">
                                        @if($user->is_admin)
                                            <span class="badge bg-soft-success">بله</span>
                                        @else
                                            <span class="badge bg-soft-danger">خیر</span>
                                        @endif
                                    </td>
                                    <td class="p-3">{{$user->created_at}}</td>
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
                @include('admin.layouts.pagination',['pagination'=>$users])
            </div>

        </div>
    </div>

    @include('admin.user.show')
    @include('admin.user.update')

@endsection

@section('custom-script')

@endsection
