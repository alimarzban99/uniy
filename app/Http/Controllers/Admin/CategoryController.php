<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\DTO\Admin\Category\CategoryStoreDTO;
use App\Http\DTO\Admin\Category\CategoryUpdateDTO;
use App\Http\Requests\Admin\Category\CategoryStoreRequest;
use App\Http\Requests\Admin\Category\CategoryUpdateRequest;
use App\Services\Admin\CategoryService;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;
use Throwable;

class CategoryController extends Controller
{

    public function __construct(private readonly CategoryService $service)
    {
    }

    /**
     * @return Factory|View|Application|\Illuminate\View\View
     */
    public function index()
    {
        $categories = $this->service->index();
        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * @param CategoryStoreRequest $request
     * @return RedirectResponse
     */
    public function store(CategoryStoreRequest $request)
    {
        $this->service->store(CategoryStoreDTO::fromRequest($request));
        return response()->redirectToRoute('admin.category.index');
    }

    /**
     * @param int $id
     * @return Factory|View|Application|\Illuminate\View\View
     */
    public function edit(int $id)
    {
        $data = $this->service->findOne($id);
        return view('admin.category.update', compact('data'));

    }

    /**
     * @param CategoryUpdateRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(CategoryUpdateRequest $request, int $id)
    {
        $this->service->update($id, CategoryUpdateDTO::fromRequest($request));
        return response()->redirectToRoute('admin.category.index');
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
