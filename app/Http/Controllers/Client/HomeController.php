<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
    }

    /**
     * @return Factory|View|Application|\Illuminate\View\View
     */
    public function home()
    {
        return view('client.home');
    }

    /**
     * @return Factory|View|Application|\Illuminate\View\View
     */
    public function about()
    {
        return view('client.about');
    }

    /**
     * @return Factory|View|Application|\Illuminate\View\View
     */
    public function profile()
    {
        return view('client.profile');
    }
}
