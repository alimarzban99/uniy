<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Admin\BlogService;
use App\Services\Admin\OrderService;
use App\Services\Admin\ProductService;
use App\Services\Admin\UserService;
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
        $countUser = app(UserService::class)->report();
        $countProducts = app(ProductService::class)->report();
        $countBlogs = app(BlogService::class)->report();
        $countOrders = app(OrderService::class)->report();
        return view('admin.dashboard', compact('countUser', 'countProducts', 'countBlogs', 'countOrders'));
    }

}
