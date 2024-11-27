@php
    $title = 'ویرایش دسته بندی';
@endphp
@extends('admin.layouts.main',['title'=>$title])
@section('content')
    <div class="container-fluid">
        <div class="layout-specing">
            @include('admin.layouts.breadcrumb',['title'=>$title])

            <div class="row">
                <div class="mt-4">
                    <div class="card border-0 p-4 rounded shadow">

                        <form action="{{route('admin.product.update',['category'=>$data->id])}}" method="POST" class="mt-4">
                            @csrf
                            @method('PUT')
                            @include('admin.product.partial.entry',['data'=>$data])

                            <button type="submit" class="btn btn-primary">ویرایش محصول</button>
                            <a class="btn btn-danger" href="{{route('admin.user.index')}}">لغو</a>
                        </form>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div>
    </div><!--end container-->
@endsection
