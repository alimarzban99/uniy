<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Admin\BlogService;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

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
        return view('admin.blog.create');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $this->service->store($request->only('blogname', 'email', 'address', 'is_admin', 'status'));
        return response()->redirectToRoute('admin.blog.index');
    }

    /**
     * @param int $id
     * @return Factory|View|Application|\Illuminate\View\View
     */
    public function edit(int $id)
    {
        $data = $this->service->findOne($id);
        return view('admin.blog.update', compact('data'));

    }

    /**
     * @param Request $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(Request $request, int $id)
    {
        $this->service->update($id, $request->only('blogname', 'address', 'email', 'is_admin', 'status'));
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
