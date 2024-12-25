<?php

namespace App\Services\Client;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;

readonly class CategoryService
{
    public function __construct(private Category $category)
    {
    }

    /**
     * @return Collection
     */
    public function list(): Collection
    {
        return $this->category->query()
            ->orderByDesc('id')
            ->limit(5)
            ->get();
    }

    /**
     * @return Collection
     */
    public function filterList(): Collection
    {
        return $this->category->query()
            ->orderByDesc('id')
            ->limit(15)
            ->get();
    }
}
