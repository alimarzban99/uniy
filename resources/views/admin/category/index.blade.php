@php
    $title = 'لیست دسته بندی';
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
                                <th class="border-bottom p-3">ادرس اینترنتی</th>
                                <th class="border-bottom p-3">وضعیت</th>
                                <th class="border-bottom p-3" style="min-width: 100px;"></th>
                            </tr>
                            </thead>
                            <tbody>

                           @foreach($categories as $category)
                               <tr>
                                   <th class="p-3">{{$category->id}}</th>
                                   <td class="p-3">{{$category->name}}</td>
                                   <td class="p-3">{{$category->slug}}</td>
                                   <td class="p-3">
                                       @include('admin.layouts.status',['status'=>$category->status])
                                   </td>
                                   <td class="text-start">

                                       <a href="{{route('admin.category.edit',['category'=>$category->id])}}" class="btn btn-icon btn-pills btn-soft-success">
                                           <i class="uil uil-pen"></i>
                                       </a>
                                       <a href="#" class="btn btn-icon btn-pills btn-soft-danger category-delete" id="{{$category->id}}">
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
                @include('admin.layouts.pagination',['pagination'=>$categories])
            </div><!--end row-->
            <!--end row-->
        </div>
    </div>
@endsection

@section('custom-script')
    <script>
        $(document).ready(function () {

            $(".category-delete").click(function () {
                var idValue = $(this).attr("id");
                var url = "{{ route('admin.category.destroy', ['category' => '__ID__']) }}".replace('__ID__', idValue);

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
                        }, 2000);
                    },
                })

            });
        });
    </script>

@endsection

