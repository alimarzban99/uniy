<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index()
    {
        return view('client.blog.index');
    }

    public function show()
    {
        return view('client.blog.show');
    }

}
