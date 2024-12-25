<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Services\Client\HomeService;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * @param HomeService $service
     */
    public function __construct(private readonly HomeService $service)
    {
    }

    /**
     * @return Factory|View|Application|\Illuminate\View\View
     */
    public function home()
    {
        [$latestBlogs, $newestProducts, $featureProducts, $categories] = $this->service->home();
        return view('client.home', compact(
            'latestBlogs', 'newestProducts', 'featureProducts', 'categories'));
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
