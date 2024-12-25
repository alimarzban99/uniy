<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\DTO\Admin\Product\ProductStoreDTO;
use App\Http\DTO\Admin\Product\ProductUpdateDTO;
use App\Http\Requests\Admin\Product\ProductStoreRequest;
use App\Http\Requests\Admin\Product\ProductUpdateRequest;
use App\Services\Admin\ProductService;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;
use Throwable;

class ProductController extends Controller
{
    public function __construct(private readonly ProductService $service)
    {
    }

    public function index()
    {
        $products = $this->service->index();
        return view('admin.product.index', compact('products'));
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
        } catch (Throwable $exception) {
            return response()->json($exception->getMessage(), ResponseAlias::HTTP_OK);
        }
    }

    public function create()
    {
        $categories = $this->service->categoryList();
        return view('admin.product.create', compact('categories'));
    }

    /**
     * @param ProductStoreRequest $request
     * @return RedirectResponse
     */
    public function store(ProductStoreRequest $request)
    {
        $this->service->store(ProductStoreDTO::fromRequest($request));
        return response()->redirectToRoute('admin.product.index');
    }

    /**
     * @param int $id
     * @return Factory|View|Application|\Illuminate\View\View
     */
    public function edit(int $id)
    {
        $data = $this->service->findOne($id);
        $categories = $this->service->categoryList();

        return view('admin.product.update', compact('data', 'categories'));

    }

    /**
     * @param ProductUpdateRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(ProductUpdateRequest $request, int $id)
    {
        $this->service->update($id, ProductUpdateDTO::fromRequest($request));
        return response()->redirectToRoute('admin.product.index');
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

    public function featured(int $id)
    {
        try {
            $data = $this->service->featured($id);
            return response()->json($data, ResponseAlias::HTTP_OK);
        } catch (Throwable $exception) {
            return response()->json($exception->getMessage(), ResponseAlias::HTTP_OK);
        }
    }
}
