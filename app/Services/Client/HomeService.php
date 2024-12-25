<?php

namespace App\Services\Client;

class HomeService
{
    public function __construct()
    {
    }

    /**
     * @return array
     */
    public function home(): array
    {
        $newestProducts = app(ProductService::class)->latestProducts();
        $featureProducts = app(ProductService::class)->featureProducts();
        $latestBlogs = app(BlogService::class)->latestBlogs();
        $categories = app(CategoryService::class)->list();

        return [$latestBlogs, $newestProducts, $featureProducts, $categories];
    }
}
