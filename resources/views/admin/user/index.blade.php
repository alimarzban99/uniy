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
                                        <a href="#" class="btn btn-icon btn-pills btn-soft-primary user-show" id="{{$user->id}}">
                                            <i class="uil uil-eye"></i>
                                        </a>
                                        <a href="{{route('admin.user.edit',['user'=>$user->id])}}" class="btn btn-icon btn-pills btn-soft-success">
                                            <i class="uil uil-pen"></i>
                                        </a>
                                        <a href="#" class="btn btn-icon btn-pills btn-soft-danger user-delete" id="{{$user->id}}">
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
            <!--end row-->

            <div class="row text-center">
                @include('admin.layouts.pagination',['pagination'=>$users])
            </div>

        </div>
    </div>

    @include('admin.user.show')
@endsection

@section('custom-script')
    <script>
        $(document).ready(function () {
            $(".user-show").click(function () {
                var idValue = $(this).attr("id");
                var url = "{{ route('admin.user.show', ['user' => '__ID__']) }}".replace('__ID__', idValue);

                $.ajax({
                    url: url,
                    method: "GET",
                    data: { id: idValue },
                    success: function (response) {

                        $("#viewprofile .modal-body h5.mb-0").text(response.username); // جایگزینی نام کاربر
                        $("#viewprofile .modal-body .d-flex:nth-child(1) p.text-muted").eq(0).text(response.address); // ایمیل
                        $("#viewprofile .modal-body .d-flex:nth-child(1) p.text-muted").eq(1).text(response.created_at); // آدرس
                        $("#viewprofile .modal-body .d-flex:nth-child(2) p.text-muted").eq(0).text(response.address); // تاریخ

                        $("#viewprofile").modal("show");

                    },
                    error: function (xhr, status, error) {
                        alert("مشکلی در ارسال درخواست رخ داده است.");
                    }
                });
            });

            $(".user-delete").click(function () {
                var idValue = $(this).attr("id");
                var url = "{{ route('admin.user.destroy', ['user' => '__ID__']) }}".replace('__ID__', idValue);

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
                        setTimeout(function() {
                            window.location.reload();
                        }, 3000);
                    },
                })

            });
        });
    </script>

@endsection
