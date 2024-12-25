@php
    $title = 'لیست تماس با ما';
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
                                <th class="border-bottom p-3" style="min-width: 180px;">نام و نام خانوادگی</th>
                                <th class="border-bottom p-3">موضوع</th>
                                <th class="border-bottom p-3">وضعیت</th>
                                <th class="border-bottom p-3" style="min-width: 100px;"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($contacts as $contact)
                                <tr>
                                    <th class="p-3">{{$contact->id}}</th>
                                    <td class="p-3">{{$contact->username}}</td>
                                    <td class="p-3">{{$contact->title}}</td>
                                    <td class="p-3">
                                        @include('admin.layouts.status',['status'=>$contact->status])
                                    </td>
                                    <td class="text-start">

                                        <a href="#" class="btn btn-icon btn-pills btn-soft-primary contact-show" id="{{$contact->id}}">
                                            <i class="uil uil-eye"></i>
                                        </a>
                                        <a href="#" class="btn btn-icon btn-pills btn-soft-danger contact-delete" id="{{$contact->id}}">
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
                @include('admin.layouts.pagination',['pagination'=>$contacts])
            </div><!--end row-->
        </div>
    </div>
    @include('admin.contact.show')
@endsection

@section('custom-script')
    <script>
        $(document).ready(function () {
            $(".contact-show").click(function () {
                var idValue = $(this).attr("id");
                var url = "{{ route('admin.contact.show', ['contact' => '__ID__']) }}".replace('__ID__', idValue);

                $.ajax({
                    url: url,
                    method: "GET",
                    data: { id: idValue },
                    success: function (response) {

                        $("#viewprofile .modal-body .d-flex:nth-child(1) p.text-muted").eq(0).text(response.description); // ایمیل
                        $("#viewprofile").modal("show");

                    },
                    error: function (xhr, status, error) {
                        alert("مشکلی در ارسال درخواست رخ داده است.");
                    }
                });
            });
            $(".contact-delete").click(function () {
                var idValue = $(this).attr("id");
                var url = "{{ route('admin.contact.destroy', ['contact' => '__ID__']) }}".replace('__ID__', idValue);

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
                        }, 100);
                    },
                })

            });
        });
    </script>

@endsection
