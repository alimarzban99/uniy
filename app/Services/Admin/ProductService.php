<?php

namespace App\Services\Admin;

use App\Models\Product;
use App\Models\User;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

readonly class ProductService
{
    public function __construct(private Product $product)
    {
    }

    /**
     * @return LengthAwarePaginator
     */
    public function index(): LengthAwarePaginator
    {
        return $this->product->query()
            ->orderByDesc('id')
            ->paginate(10);
    }

    /**
     * @param int $id
     * @return object
     */
    public function findOne(int $id): object
    {
        return $this->product->query()->findOrFail($id);
    }

    /**
     * @param int $id
     * @return bool|null
     */
    public function destroy(int $id): ?bool
    {
        return $this->product->query()
            ->findOrFail($id)
            ->delete();
    }

    /**
     * @param int $id
     * @param array $all
     * @return void
     */
    public function update(int $id, array $all): void
    {
        $this->product->query()
            ->where('id', '=', $id)
            ->update($all);
    }

    /**
     * @param array $only
     * @return void
     */
    public function store(array $only): void
    {
        $this->product->query()->create($only);
    }

}
