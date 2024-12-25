<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\DTO\Client\Product\ProductIndexDTO;
use App\Http\Requests\Client\Product\ProductIndexRequest;
use App\Models\Product;
use App\Services\Client\ProductService;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class ProductController extends Controller
{
    public function __construct(private readonly ProductService $service)
    {
    }

    /**
     * @param ProductIndexRequest $request
     * @return Factory|View|Application|\Illuminate\View\View
     */
    public function index(ProductIndexRequest $request)
    {
        [$products, $categories] = $this->service->index(ProductIndexDTO::fromRequest($request));
        return view('client.product.index', compact('products', 'categories'));
    }

    /**
     * @param Product $product
     * @return Factory|View|Application|\Illuminate\View\View
     */
    public function show(Product $product)
    {
        $relatedProducts = $this->service->relatedProducts($product->category_id);
        return view('client.product.show', compact('product', 'relatedProducts'));
    }

}
