@php
    $title = 'افزودن دسته بندی';
@endphp
@extends('admin.layouts.main',['title'=>$title])
@section('content')
    <div class="container-fluid">
        <div class="layout-specing">
            @include('admin.layouts.breadcrumb',['title'=>$title])

            <div class="row">
                <div class="mt-4">
                    <div class="card border-0 p-4 rounded shadow">

                        <form action="{{route('admin.user.create')}}" method="POST" class="mt-4">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">نام کوچک</label>
                                        <input name="name" id="name" type="text" class="form-control"
                                               placeholder="نام کوچک :">
                                    </div>
                                </div><!--end col-->

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">نام خانوادگی</label>
                                        <input name="name" id="name2" type="text" class="form-control"
                                               placeholder="نام خانوادگی :">
                                    </div>
                                </div><!--end col-->

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">ایمیل شما</label>
                                        <input name="email" id="email" type="email" class="form-control"
                                               placeholder="ایمیل شما :">
                                    </div>
                                </div><!--end col-->

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">شماره تلفن</label>
                                        <input name="number" id="number" type="text" class="form-control"
                                               placeholder="شماره تلفن :">
                                    </div>
                                </div><!--end col-->

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label"> تاریخ: </label>
                                        <input name="date" type="text" class="flatpickr flatpickr-input form-control"
                                               id="checkin-date" placeholder="1400-12-06">
                                    </div>
                                </div><!--end col-->

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">دپارتمان ها</label>
                                        <select class="form-control department-name select2input">
                                            <option value="EY"> مراقبت از چشم</option>
                                            <option value="GY"> متخصص زنان</option>
                                            <option value="PS"> روان درمانگر</option>
                                            <option value="OR"> ارتوپدی</option>
                                            <option value="DE"> دندانپزشک</option>
                                            <option value="GA"> متخصص گوارش</option>
                                            <option value="UR"> اورولوژیست</option>
                                            <option value="NE"> متخصص مغز و اعصاب</option>
                                        </select>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->

                            <button type="submit" class="btn btn-primary">اضافه کردن کاربر</button>
                            <a class="btn btn-danger" href="{{route('admin.user.index')}}">لغو</a>
                        </form>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div>
    </div><!--end container-->
@endsection
