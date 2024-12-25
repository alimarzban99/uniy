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
                                        <a href="{{route('admin.blog.edit',['blog'=>$blog->id])}}" class="btn btn-icon btn-pills btn-soft-success">
                                            <i class="uil uil-pen"></i>
                                        </a>
                                        <a class="btn btn-icon btn-pills btn-soft-danger blog-delete" id="{{$blog->id}}">
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
                @include('admin.layouts.pagination',['pagination'=>$blogs])

            </div><!--end row-->
            <!--end row-->
        </div>
    </div>

@endsection

@section('custom-script')
    <script>
        $(document).ready(function () {
            $(".blog-delete").click(function () {
                var idValue = $(this).attr("id");
                var url = "{{ route('admin.blog.destroy', ['blog' => '__ID__']) }}".replace('__ID__', idValue);

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
                        }, 500);
                    },
                })

            });
        });
    </script>

@endsection

