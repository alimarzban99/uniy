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
                                <th class="border-bottom p-3" style="min-width: 180px;">نام</th>
                                <th class="border-bottom p-3">سن</th>
                                <th class="border-bottom p-3">جنسیت</th>
                                <th class="border-bottom p-3">آدرس</th>
                                <th class="border-bottom p-3">شماره</th>
                                <th class="border-bottom p-3">دپارتمان</th>
                                <th class="border-bottom p-3" style="min-width: 150px;">تاریخ</th>
                                <th class="border-bottom p-3">زمان</th>
                                <th class="border-bottom p-3">وضعیت</th>
                                <th class="border-bottom p-3" style="min-width: 100px;"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th class="p-3">1</th>
                                <td class="py-3">
                                    <a href="#" class="text-dark">
                                        <div class="d-flex align-items-center">
                                            <img src="../assets/images/client/01.jpg"
                                                 class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                            <span class="me-2">هاوارد تونر</span>
                                        </div>
                                    </a>
                                </td>
                                <td class="p-3">25</td>
                                <td class="p-3">مرد</td>
                                <td class="p-3">یک آدرس فرضی اینجاست</td>
                                <td class="p-3">(+452) 8945 4568</td>
                                <td class="p-3"> قلب و عروق</td>
                                <td class="p-3">20ام اسفند 1400</td>
                                <td class="p-3">11:00 عصر</td>
                                <td class="p-3"><span class="badge bg-soft-success">پذیرفته شده</span></td>
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

                            <tr>
                                <th class="p-3">2</th>
                                <td class="py-3">
                                    <a href="#" class="text-dark">
                                        <div class="d-flex align-items-center">
                                            <img src="../assets/images/client/02.jpg"
                                                 class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                            <span class="me-2">وندی فلیسون</span>
                                        </div>
                                    </a>
                                </td>
                                <td class="p-3">28</td>
                                <td class="p-3">زن</td>
                                <td class="p-3">یک آدرس فرضی اینجاست</td>
                                <td class="p-3">(+452) 8945 4568</td>
                                <td class="p-3"> زنان</td>
                                <td class="p-3">20ام اسفند 1400</td>
                                <td class="p-3">11:00 عصر</td>
                                <td class="p-3"><span class="badge bg-soft-warning">معلق</span></td>
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

                            <tr>
                                <th class="p-3">3</th>
                                <td class="py-3">
                                    <a href="#" class="text-dark">
                                        <div class="d-flex align-items-center">
                                            <img src="../assets/images/client/03.jpg"
                                                 class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                            <span class="me-2">فلر بریجر</span>
                                        </div>
                                    </a>
                                </td>
                                <td class="p-3">28</td>
                                <td class="p-3">زن</td>
                                <td class="p-3">یک آدرس فرضی اینجاست</td>
                                <td class="p-3">(+452) 8945 4568</td>
                                <td class="p-3"> روان درمانی</td>
                                <td class="p-3">20ام اسفند 1400</td>
                                <td class="p-3">11:00 عصر</td>
                                <td class="p-3"><span class="badge bg-soft-success">پذیرفته شده</span></td>
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

                            <tr>
                                <th class="p-3">4</th>
                                <td class="py-3">
                                    <a href="#" class="text-dark">
                                        <div class="d-flex align-items-center">
                                            <img src="../assets/images/client/04.jpg"
                                                 class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                            <span class="me-2">رونالد کریتوس</span>
                                        </div>
                                    </a>
                                </td>
                                <td class="p-3">25</td>
                                <td class="p-3">مرد</td>
                                <td class="p-3">یک آدرس فرضی اینجاست</td>
                                <td class="p-3">(+452) 8945 4568</td>
                                <td class="p-3"> ارتوپدی</td>
                                <td class="p-3">20ام اسفند 1400</td>
                                <td class="p-3">11:00 عصر</td>
                                <td class="p-3"><span class="badge bg-soft-success">پذیرفته شده</span></td>
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

                            <tr>
                                <th class="p-3">5</th>
                                <td class="py-3">
                                    <a href="#" class="text-dark">
                                        <div class="d-flex align-items-center">
                                            <img src="../assets/images/client/05.jpg"
                                                 class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                            <span class="me-2">ملیسا هینگر</span>
                                        </div>
                                    </a>
                                </td>
                                <td class="p-3">28</td>
                                <td class="p-3">زن</td>
                                <td class="p-3">یک آدرس فرضی اینجاست</td>
                                <td class="p-3">(+452) 8945 4568</td>
                                <td class="p-3">دندانپزشکی</td>
                                <td class="p-3">20ام اسفند 1400</td>
                                <td class="p-3">11:00 عصر</td>
                                <td class="p-3"><span class="badge bg-soft-warning">معلق</span></td>
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

                            <tr>
                                <th class="p-3">6</th>
                                <td class="py-3">
                                    <a href="#" class="text-dark">
                                        <div class="d-flex align-items-center">
                                            <img src="../assets/images/client/06.jpg"
                                                 class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                            <span class="me-2">رندال کیس</span>
                                        </div>
                                    </a>
                                </td>
                                <td class="p-3">25</td>
                                <td class="p-3">مرد</td>
                                <td class="p-3">یک آدرس فرضی اینجاست</td>
                                <td class="p-3">(+452) 8945 4568</td>
                                <td class="p-3"> ارتوپدی</td>
                                <td class="p-3">20ام اسفند 1400</td>
                                <td class="p-3">11:00 عصر</td>
                                <td class="p-3"><span class="badge bg-soft-success">پذیرفته شده</span></td>
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

                            <tr>
                                <th class="p-3">7</th>
                                <td class="py-3">
                                    <a href="#" class="text-dark">
                                        <div class="d-flex align-items-center">
                                            <img src="../assets/images/client/07.jpg"
                                                 class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                            <span class="me-2">جری مورانا</span>
                                        </div>
                                    </a>
                                </td>
                                <td class="p-3">25</td>
                                <td class="p-3">مرد</td>
                                <td class="p-3">یک آدرس فرضی اینجاست</td>
                                <td class="p-3">(+452) 8945 4568</td>
                                <td class="p-3"> دندانپزشک</td>
                                <td class="p-3">20ام اسفند 1400</td>
                                <td class="p-3">11:00 عصر</td>
                                <td class="p-3"><span class="badge bg-soft-warning">معلق</span></td>
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

                            <tr>
                                <th class="p-3">8</th>
                                <td class="py-3">
                                    <a href="#" class="text-dark">
                                        <div class="d-flex align-items-center">
                                            <img src="../assets/images/client/08.jpg"
                                                 class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                            <span class="me-2">لستر مینلی</span>
                                        </div>
                                    </a>
                                </td>
                                <td class="p-3">25</td>
                                <td class="p-3">مرد</td>
                                <td class="p-3">یک آدرس فرضی اینجاست</td>
                                <td class="p-3">(+452) 8945 4568</td>
                                <td class="p-3">گاسترولوژی</td>
                                <td class="p-3">20ام اسفند 1400</td>
                                <td class="p-3">11:00 عصر</td>
                                <td class="p-3"><span class="badge bg-soft-success">پذیرفته شده</span></td>
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

                            <tr>
                                <th class="p-3">9</th>
                                <td class="py-3">
                                    <a href="#" class="text-dark">
                                        <div class="d-flex align-items-center">
                                            <img src="../assets/images/client/09.jpg"
                                                 class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                            <span class="me-2">کریستوفر بورلر</span>
                                        </div>
                                    </a>
                                </td>
                                <td class="p-3">28</td>
                                <td class="p-3">زن</td>
                                <td class="p-3">یک آدرس فرضی اینجاست</td>
                                <td class="p-3">(+452) 8945 4568</td>
                                <td class="p-3">Urology</td>
                                <td class="p-3">20ام اسفند 1400</td>
                                <td class="p-3">11:00 عصر</td>
                                <td class="p-3"><span class="badge bg-soft-success">پذیرفته شده</span></td>
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

                            <tr>
                                <th class="p-3">10</th>
                                <td class="py-3">
                                    <a href="#" class="text-dark">
                                        <div class="d-flex align-items-center">
                                            <img src="../assets/images/client/10.jpg"
                                                 class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                            <span class="me-2">مری اسکینز</span>
                                        </div>
                                    </a>
                                </td>
                                <td class="p-3">28</td>
                                <td class="p-3">زن</td>
                                <td class="p-3">یک آدرس فرضی اینجاست</td>
                                <td class="p-3">(+452) 8945 4568</td>
                                <td class="p-3"> مغز و اعصاب</td>
                                <td class="p-3">20ام اسفند 1400</td>
                                <td class="p-3">11:00 عصر</td>
                                <td class="p-3"><span class="badge bg-soft-warning">معلق</span></td>
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
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--end row-->

            <div class="row text-center">
                <!-- PAGINATION START -->
                <div class="col-12 mt-4">
                    <div class="d-md-flex align-items-center text-center justify-content-between">
                        <span class="text-muted me-3">نمایش 1 - 10 از 50</span>
                        <ul class="pagination justify-content-center mb-0 mt-3 mt-sm-0">
                            <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Previous">قبلی</a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0)"
                                                     aria-label="Next">بعدی</a></li>
                        </ul>
                    </div>
                </div><!--end col-->
                <!-- PAGINATION END -->
            </div><!--end row-->
            <!--end row-->
        </div>
    </div>

    @include('admin.user.show')
    @include('admin.user.update')

@endsection
