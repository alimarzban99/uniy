<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\DTO\Client\Blog\BlogIndexDTO;
use App\Http\Requests\Client\Blog\BlogIndexRequest;
use App\Services\Client\BlogService;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class BlogController extends Controller
{
    public function __construct(private readonly BlogService $service)
    {
    }

    /**
     * @return Factory|View|Application|\Illuminate\View\View
     */
    public function index(BlogIndexRequest $request)
    {
        [$blogs, $categories] = $this->service->index(BlogIndexDTO::fromRequest($request));
        return view('client.blog.index', compact('blogs', 'categories'));
    }

    /**
     * @param int $blog
     * @return Factory|View|Application|\Illuminate\View\View
     */
    public function show(int $blog)
    {
        [$blog, $categories] = $this->service->show($blog);
        return view('client.blog.show', compact('blog', 'categories'));
    }

}
