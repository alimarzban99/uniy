<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Services\Client\ProductService;

class ProductController extends Controller
{
    public function __construct(private ProductService $service)
    {
    }

    public function index()
    {
        $products = $this->service->index();
        return view('client.product.index',compact('products'));
    }

    public function show()
    {
//        $products = Product::all();
//        return view('client.product.index',compact('products'));
        return view('client.product.show');
    }

}
