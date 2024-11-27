<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class HomeController extends Controller
{
    public function __construct()
    {
    }

    /**
     * @return Factory|View|Application|\Illuminate\View\View
     */
    public function dashboard()
    {
        return view('admin.dashboard');
    }

}
