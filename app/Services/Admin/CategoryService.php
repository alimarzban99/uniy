<?php

namespace App\Services\Admin;

use App\Enums\Status;
use App\Http\DTO\Admin\Category\CategoryStoreDTO;
use App\Http\DTO\Admin\Category\CategoryUpdateDTO;
use App\Models\Category;
use App\Services\Admin\Trait\UploadImageTrait;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class CategoryService
{
    use UploadImageTrait;

    /**
     * @var string
     */
    private string $basePath = 'category';

    /**
     * @param Category $category
     */
    public function __construct(private readonly Category $category)
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
     * @param CategoryStoreDTO $storeDTO
     * @return void
     */
    public function store(CategoryStoreDTO $storeDTO): void
    {
        $data = $storeDTO->toArray();
        $path = $this->uploadImage($storeDTO->image);
        $data['image'] = $path;

        $this->category->query()->create($data);
    }

    /**
     * @param int $id
     * @param CategoryUpdateDTO $updateDTO
     * @return void
     *
     */
    public function update(int $id, CategoryUpdateDTO $updateDTO): void
    {
        $data = $updateDTO->toArray();
        $path = $this->uploadImage($updateDTO->image);
        $data['image'] = $path;

        $this->category->query()
            ->where('id', '=', $id)
            ->update($data);
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
     * @return Collection
     */
    public function list(): Collection
    {
        return $this->category->query()
            ->where('status', '=', Status::PUBLISHED->value)
            ->orderByDesc('id')
            ->pluck('name', 'id');
    }

}
