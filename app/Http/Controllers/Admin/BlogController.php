<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index()
    {
        return view('admin.blog.index');
    }


    public function create()
    {
        return view('admin.blog.create');
    }

}
