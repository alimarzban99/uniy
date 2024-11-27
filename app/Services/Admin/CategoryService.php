<?php

namespace App\Services\Admin;

use App\Models\Category;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

readonly class CategoryService
{
    public function __construct(private Category $category)
    {
    }

    /**
     * @return LengthAwarePaginator
     */
    public function index(): LengthAwarePaginator
    {
        return $this->category->query()
            ->orderByDesc('id')
            ->paginate(10);
    }

    /**
     * @param int $id
     * @return object
     */
    public function findOne(int $id): object
    {
        return $this->category->query()->findOrFail($id);
    }

    /**
     * @param int $id
     * @return bool|null
     */
    public function destroy(int $id): ?bool
    {
        return $this->category->query()
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
        $this->category->query()
            ->where('id', '=', $id)
            ->update($all);
    }

    /**
     * @param array $only
     * @return void
     */
    public function store(array $only): void
    {
        $this->category->query()->create($only);
    }

}
