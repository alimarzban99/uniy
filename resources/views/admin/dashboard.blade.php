@extends('admin.layouts.main',['title'=>'داشبرد'])
@section('content')
    <div class="container-fluid">
        <div class="layout-specing">
            <h5 class="mb-0">داشبرد</h5>

            <div class="row d-flex justify-content-center">
                <div class="col-xl-2 col-lg-4 col-md-3 mt-4">
                    <div class="card features feature-primary rounded border-0 shadow p-4">
                        <div class="d-flex align-items-center">
                            <div class="icon text-center rounded-md">
                                <i class="uil uil-bed h3 mb-0"></i>
                            </div>
                            <div class="flex-1 me-2">
                                <h5 class="mb-0">{{$countUser}}</h5>
                                <p class="text-muted mb-0">کاربران</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-4 col-md-4 mt-4">
                    <div class="card features feature-primary rounded border-0 shadow p-4">
                        <div class="d-flex align-items-center">
                            <div class="icon text-center rounded-md">
                                <i class="uil uil-file-medical-alt h3 mb-0"></i>
                            </div>
                            <div class="flex-1 me-2">
                                <h5 class="mb-0">{{$countProducts}}</h5>
                                <p class="text-muted mb-0">محصول های فعال</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-4 col-md-4 mt-4">
                    <div class="card features feature-primary rounded border-0 shadow p-4">
                        <div class="d-flex align-items-center">
                            <div class="icon text-center rounded-md">
                                <i class="uil uil-social-distancing h3 mb-0"></i>
                            </div>
                            <div class="flex-1 me-2">
                                <h5 class="mb-0">{{$countBlogs}}</h5>
                                <p class="text-muted mb-0">وبلاگ های فعال</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-4 col-md-4 mt-4">
                    <div class="card features feature-primary rounded border-0 shadow p-4">
                        <div class="d-flex align-items-center">
                            <div class="icon text-center rounded-md">
                                <i class="uil uil-ambulance h3 mb-0"></i>
                            </div>
                            <div class="flex-1 me-2">
                                <h5 class="mb-0">{{$countOrders}}</h5>
                                <p class="text-muted mb-0">سفارش های جدید</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection
