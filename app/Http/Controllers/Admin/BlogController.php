<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\DTO\Admin\Blog\BlogStoreDTO;
use App\Http\DTO\Admin\Blog\BlogUpdateDTO;
use App\Http\Requests\Admin\Blog\BlogStoreRequest;
use App\Http\Requests\Admin\Blog\BlogUpdateRequest;
use App\Services\Admin\BlogService;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;
use Throwable;

class BlogController extends Controller
{
    public function __construct(private readonly BlogService $service)
    {
    }

    public function index()
    {
        $blogs = $this->service->index();
        return view('admin.blog.index', compact('blogs'));
    }

    /**
     * @param int $id
     * @return JsonResponse
     */
    public function show(int $id)
    {
        try {
            $data = $this->service->findOne($id);
            return response()->json($data, ResponseAlias::HTTP_OK);
        } catch (Exception $exception) {
            return response()->json($exception->getMessage(), ResponseAlias::HTTP_OK);
        }
    }

    public function create()
    {
        $categories = $this->service->categoryList();
        return view('admin.blog.create', compact('categories'));
    }

    /**
     * @param BlogStoreRequest $request
     * @return RedirectResponse
     */
    public function store(BlogStoreRequest $request)
    {
        try {
            $this->service->store(BlogStoreDTO::fromRequest($request));
            return response()->redirectToRoute('admin.blog.index');
        } catch (Exception $exception) {
            return response()->redirectToRoute('admin.blog.create')->withErrors($exception->getMessage());
        }
    }

    /**
     * @param int $id
     * @return Factory|View|Application|\Illuminate\View\View
     */
    public function edit(int $id)
    {
        $data = $this->service->findOne($id);
        $categories = $this->service->categoryList();
        return view('admin.blog.update', compact('data', 'categories'));

    }

    /**
     * @param BlogUpdateRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(BlogUpdateRequest $request, int $id)
    {
        $this->service->update($id, BlogUpdateDTO::fromRequest($request));
        return response()->redirectToRoute('admin.blog.index');
    }

    /**
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(int $id)
    {
        try {
            $data = $this->service->destroy($id);
            return response()->json($data, ResponseAlias::HTTP_OK);
        } catch (Throwable $exception) {
            return response()->json($exception->getMessage(), ResponseAlias::HTTP_OK);
        }
    }

}
