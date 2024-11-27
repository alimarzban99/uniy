<?php

namespace App\Services\Admin;

use App\Models\Blog;
use App\Models\Product;
use App\Models\User;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

readonly class BlogService
{
    public function __construct(private Blog $blog)
    {
    }

    /**
     * @return LengthAwarePaginator
     */
    public function index(): LengthAwarePaginator
    {
        return $this->blog->query()
            ->orderByDesc('id')
            ->paginate(10);
    }

    /**
     * @param int $id
     * @return object
     */
    public function findOne(int $id): object
    {
        return $this->blog->query()->findOrFail($id);
    }

    /**
     * @param int $id
     * @return bool|null
     */
    public function destroy(int $id): ?bool
    {
        return $this->blog->query()
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
        $this->blog->query()
            ->where('id', '=', $id)
            ->update($all);
    }

    /**
     * @param array $only
     * @return void
     */
    public function store(array $only): void
    {
        $this->blog->query()->create($only);
    }

}
