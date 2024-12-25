@php
    $title = 'ویرایش کاربر';
@endphp
@extends('admin.layouts.main',['title'=>$title])
@section('content')
    <div class="container-fluid">
        <div class="layout-specing">
            @include('admin.layouts.breadcrumb',['title'=>$title])

            <div class="row">
                <div class="mt-4">
                    <div class="card border-0 p-4 rounded shadow">
                        @include('admin.layouts.alert')
                        <form action="{{route('admin.user.update',['user'=>$data->id])}}" method="POST" class="mt-4">
                            @csrf
                            @method('PUT')

                            @include('admin.user.partial.entry',['data'=>$data])

                            <button type="submit" class="btn btn-primary">ویرایش کاربر</button>
                            <a class="btn btn-danger" href="{{route('admin.user.index')}}">لغو</a>
                        </form>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div>
    </div><!--end container-->
@endsection
