@extends('admin.layouts.main',['title'=>'داشبرد'])
@section('content')
    <div class="container-fluid">
        <div class="layout-specing">
            <h5 class="mb-0">داشبرد</h5>

            <div class="row">
                <div class="col-xl-2 col-lg-4 col-md-4 mt-4">
                    <div class="card features feature-primary rounded border-0 shadow p-4">
                        <div class="d-flex align-items-center">
                            <div class="icon text-center rounded-md">
                                <i class="uil uil-bed h3 mb-0"></i>
                            </div>
                            <div class="flex-1 me-2">
                                <h5 class="mb-0">558</h5>
                                <p class="text-muted mb-0">بیماران</p>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-xl-2 col-lg-4 col-md-4 mt-4">
                    <div class="card features feature-primary rounded border-0 shadow p-4">
                        <div class="d-flex align-items-center">
                            <div class="icon text-center rounded-md">
                                <i class="uil uil-file-medical-alt h3 mb-0"></i>
                            </div>
                            <div class="flex-1 me-2">
                                <h5 class="mb-0">2164</h5>
                                <p class="text-muted mb-0">هزینه میانگین</p>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-xl-2 col-lg-4 col-md-4 mt-4">
                    <div class="card features feature-primary rounded border-0 shadow p-4">
                        <div class="d-flex align-items-center">
                            <div class="icon text-center rounded-md">
                                <i class="uil uil-social-distancing h3 mb-0"></i>
                            </div>
                            <div class="flex-1 me-2">
                                <h5 class="mb-0">112</h5>
                                <p class="text-muted mb-0">کارکنان</p>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-xl-2 col-lg-4 col-md-4 mt-4">
                    <div class="card features feature-primary rounded border-0 shadow p-4">
                        <div class="d-flex align-items-center">
                            <div class="icon text-center rounded-md">
                                <i class="uil uil-ambulance h3 mb-0"></i>
                            </div>
                            <div class="flex-1 me-2">
                                <h5 class="mb-0">16</h5>
                                <p class="text-muted mb-0">وسایل</p>
                            </div>
                        </div>

                    </div>
                </div><!--end col-->

                <div class="col-xl-2 col-lg-4 col-md-4 mt-4">
                    <div class="card features feature-primary rounded border-0 shadow p-4">
                        <div class="d-flex align-items-center">
                            <div class="icon text-center rounded-md">
                                <i class="uil uil-medkit h3 mb-0"></i>
                            </div>
                            <div class="flex-1 me-2">
                                <h5 class="mb-0">220</h5>
                                <p class="text-muted mb-0">نوبت گرفتن</p>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-xl-2 col-lg-4 col-md-4 mt-4">
                    <div class="card features feature-primary rounded border-0 shadow p-4">
                        <div class="d-flex align-items-center">
                            <div class="icon text-center rounded-md">
                                <i class="uil uil-medical-drip h3 mb-0"></i>
                            </div>
                            <div class="flex-1 me-2">
                                <h5 class="mb-0">10</h5>
                                <p class="text-muted mb-0">اپراطور</p>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->


            <div class="row">
                <div class="col-xl-4 col-lg-6 mt-4">
                    <div class="card border-0 shadow rounded">
                        <div class="d-flex justify-content-between align-items-center p-4 border-bottom">
                            <h6 class="mb-0"><i class="uil uil-calender text-primary ms-1 h5"></i>آخرین نوبت ها</h6>
                            <h6 class="text-muted mb-0">55 بیمار</h6>
                        </div>

                        <ul class="list-unstyled mb-0 p-4">
                            <li>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-inline-flex">
                                        <img src="../assets/images/client/01.jpg"
                                             class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                        <div class="me-3">
                                            <h6 class="text-dark mb-0 d-block">کلوین کارلو</h6>
                                            <small class="text-muted">نوبت در 27ام اسفند 1400</small>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="#" class="btn btn-icon btn-pills btn-soft-success"><i
                                                class="uil uil-check icons"></i></a>
                                        <a href="#" class="btn btn-icon btn-pills btn-soft-danger"><i
                                                class="uil uil-times icons"></i></a>
                                    </div>
                                </div>
                            </li>

                            <li class="mt-4">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-inline-flex">
                                        <img src="../assets/images/client/02.jpg"
                                             class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                        <div class="me-3">
                                            <h6 class="text-dark mb-0 d-block">جویا خان</h6>
                                            <small class="text-muted">نوبت در 27ام اسفند 1400</small>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="#" class="btn btn-icon btn-pills btn-soft-success"><i
                                                class="uil uil-check icons"></i></a>
                                        <a href="#" class="btn btn-icon btn-pills btn-soft-danger"><i
                                                class="uil uil-times icons"></i></a>
                                    </div>
                                </div>
                            </li>

                            <li class="mt-4">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-inline-flex">
                                        <img src="../assets/images/client/03.jpg"
                                             class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                        <div class="me-3">
                                            <h6 class="text-dark mb-0 d-block">امیلی مولی</h6>
                                            <small class="text-muted">نوبت در 27ام اسفند 1400</small>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="#" class="btn btn-icon btn-pills btn-soft-success"><i
                                                class="uil uil-check icons"></i></a>
                                        <a href="#" class="btn btn-icon btn-pills btn-soft-danger"><i
                                                class="uil uil-times icons"></i></a>
                                    </div>
                                </div>
                            </li>

                            <li class="mt-4">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-inline-flex">
                                        <img src="../assets/images/client/04.jpg"
                                             class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                        <div class="me-3">
                                            <h6 class="text-dark mb-0 d-block">نیک رونالدو</h6>
                                            <small class="text-muted">نوبت در 27ام اسفند 1400</small>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="#" class="btn btn-icon btn-pills btn-soft-success"><i
                                                class="uil uil-check icons"></i></a>
                                        <a href="#" class="btn btn-icon btn-pills btn-soft-danger"><i
                                                class="uil uil-times icons"></i></a>
                                    </div>
                                </div>
                            </li>

                            <li class="mt-4">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-inline-flex">
                                        <img src="../assets/images/client/05.jpg"
                                             class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                        <div class="me-3">
                                            <h6 class="text-dark mb-0 d-block">کریس جوژپه</h6>
                                            <small class="text-muted">نوبت در 27ام اسفند 1400</small>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="#" class="btn btn-icon btn-pills btn-soft-success"><i
                                                class="uil uil-check icons"></i></a>
                                        <a href="#" class="btn btn-icon btn-pills btn-soft-danger"><i
                                                class="uil uil-times icons"></i></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div><!--end col-->

                <div class="col-xl-4 col-lg-6 mt-4">
                    <div class="card border-0 shadow rounded">
                        <div class="d-flex justify-content-between align-items-center p-4 border-bottom">
                            <h6 class="mb-0"><i class="uil uil-calender text-primary ms-1 h5"></i>آخرین نوبت ها</h6>
                            <h6 class="text-muted mb-0">55 بیمار</h6>
                        </div>

                        <ul class="list-unstyled mb-0 p-4">
                            <li>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-inline-flex">
                                        <img src="../assets/images/client/01.jpg"
                                             class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                        <div class="me-3">
                                            <h6 class="text-dark mb-0 d-block">کلوین کارلو</h6>
                                            <small class="text-muted">نوبت در 27ام اسفند 1400</small>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="#" class="btn btn-icon btn-pills btn-soft-success"><i
                                                class="uil uil-check icons"></i></a>
                                        <a href="#" class="btn btn-icon btn-pills btn-soft-danger"><i
                                                class="uil uil-times icons"></i></a>
                                    </div>
                                </div>
                            </li>

                            <li class="mt-4">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-inline-flex">
                                        <img src="../assets/images/client/02.jpg"
                                             class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                        <div class="me-3">
                                            <h6 class="text-dark mb-0 d-block">جویا خان</h6>
                                            <small class="text-muted">نوبت در 27ام اسفند 1400</small>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="#" class="btn btn-icon btn-pills btn-soft-success"><i
                                                class="uil uil-check icons"></i></a>
                                        <a href="#" class="btn btn-icon btn-pills btn-soft-danger"><i
                                                class="uil uil-times icons"></i></a>
                                    </div>
                                </div>
                            </li>

                            <li class="mt-4">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-inline-flex">
                                        <img src="../assets/images/client/03.jpg"
                                             class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                        <div class="me-3">
                                            <h6 class="text-dark mb-0 d-block">امیلی مولی</h6>
                                            <small class="text-muted">نوبت در 27ام اسفند 1400</small>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="#" class="btn btn-icon btn-pills btn-soft-success"><i
                                                class="uil uil-check icons"></i></a>
                                        <a href="#" class="btn btn-icon btn-pills btn-soft-danger"><i
                                                class="uil uil-times icons"></i></a>
                                    </div>
                                </div>
                            </li>

                            <li class="mt-4">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-inline-flex">
                                        <img src="../assets/images/client/04.jpg"
                                             class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                        <div class="me-3">
                                            <h6 class="text-dark mb-0 d-block">نیک رونالدو</h6>
                                            <small class="text-muted">نوبت در 27ام اسفند 1400</small>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="#" class="btn btn-icon btn-pills btn-soft-success"><i
                                                class="uil uil-check icons"></i></a>
                                        <a href="#" class="btn btn-icon btn-pills btn-soft-danger"><i
                                                class="uil uil-times icons"></i></a>
                                    </div>
                                </div>
                            </li>

                            <li class="mt-4">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-inline-flex">
                                        <img src="../assets/images/client/05.jpg"
                                             class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                        <div class="me-3">
                                            <h6 class="text-dark mb-0 d-block">کریس جوژپه</h6>
                                            <small class="text-muted">نوبت در 27ام اسفند 1400</small>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="#" class="btn btn-icon btn-pills btn-soft-success"><i
                                                class="uil uil-check icons"></i></a>
                                        <a href="#" class="btn btn-icon btn-pills btn-soft-danger"><i
                                                class="uil uil-times icons"></i></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div><!--end col-->

                <div class="col-xl-4 col-lg-6 mt-4">
                    <div class="card border-0 shadow rounded">
                        <div class="d-flex justify-content-between align-items-center p-4 border-bottom">
                            <h6 class="mb-0"><i class="uil uil-calender text-primary ms-1 h5"></i>آخرین نوبت ها</h6>
                            <h6 class="text-muted mb-0">55 بیمار</h6>
                        </div>

                        <ul class="list-unstyled mb-0 p-4">
                            <li>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-inline-flex">
                                        <img src="../assets/images/client/01.jpg"
                                             class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                        <div class="me-3">
                                            <h6 class="text-dark mb-0 d-block">کلوین کارلو</h6>
                                            <small class="text-muted">نوبت در 27ام اسفند 1400</small>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="#" class="btn btn-icon btn-pills btn-soft-success"><i
                                                class="uil uil-check icons"></i></a>
                                        <a href="#" class="btn btn-icon btn-pills btn-soft-danger"><i
                                                class="uil uil-times icons"></i></a>
                                    </div>
                                </div>
                            </li>

                            <li class="mt-4">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-inline-flex">
                                        <img src="../assets/images/client/02.jpg"
                                             class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                        <div class="me-3">
                                            <h6 class="text-dark mb-0 d-block">جویا خان</h6>
                                            <small class="text-muted">نوبت در 27ام اسفند 1400</small>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="#" class="btn btn-icon btn-pills btn-soft-success"><i
                                                class="uil uil-check icons"></i></a>
                                        <a href="#" class="btn btn-icon btn-pills btn-soft-danger"><i
                                                class="uil uil-times icons"></i></a>
                                    </div>
                                </div>
                            </li>

                            <li class="mt-4">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-inline-flex">
                                        <img src="../assets/images/client/03.jpg"
                                             class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                        <div class="me-3">
                                            <h6 class="text-dark mb-0 d-block">امیلی مولی</h6>
                                            <small class="text-muted">نوبت در 27ام اسفند 1400</small>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="#" class="btn btn-icon btn-pills btn-soft-success"><i
                                                class="uil uil-check icons"></i></a>
                                        <a href="#" class="btn btn-icon btn-pills btn-soft-danger"><i
                                                class="uil uil-times icons"></i></a>
                                    </div>
                                </div>
                            </li>

                            <li class="mt-4">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-inline-flex">
                                        <img src="../assets/images/client/04.jpg"
                                             class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                        <div class="me-3">
                                            <h6 class="text-dark mb-0 d-block">نیک رونالدو</h6>
                                            <small class="text-muted">نوبت در 27ام اسفند 1400</small>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="#" class="btn btn-icon btn-pills btn-soft-success"><i
                                                class="uil uil-check icons"></i></a>
                                        <a href="#" class="btn btn-icon btn-pills btn-soft-danger"><i
                                                class="uil uil-times icons"></i></a>
                                    </div>
                                </div>
                            </li>

                            <li class="mt-4">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-inline-flex">
                                        <img src="../assets/images/client/05.jpg"
                                             class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                        <div class="me-3">
                                            <h6 class="text-dark mb-0 d-block">کریس جوژپه</h6>
                                            <small class="text-muted">نوبت در 27ام اسفند 1400</small>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="#" class="btn btn-icon btn-pills btn-soft-success"><i
                                                class="uil uil-check icons"></i></a>
                                        <a href="#" class="btn btn-icon btn-pills btn-soft-danger"><i
                                                class="uil uil-times icons"></i></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div><!--end col-->


            </div><!--end row-->
        </div>
    </div><!--end container-->
@endsection
