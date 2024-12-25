<?php

namespace App\Services\Admin;

use App\Http\DTO\Admin\Blog\BlogStoreDTO;
use App\Http\DTO\Admin\Blog\BlogUpdateDTO;
use App\Models\Blog;
use App\Services\Admin\Trait\UploadImageTrait;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class BlogService
{
    use UploadImageTrait;

    /**
     * @var string
     */
    private string $basePath = 'blog';

    public function __construct(private readonly Blog $blog)
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
     * @param BlogStoreDTO $storeDTO
     * @return void
     */
    public function store(BlogStoreDTO $storeDTO): void
    {
        $data = $storeDTO->toArray();
        $path = $this->uploadImage($storeDTO->image);
        $data['image'] = $path;

        $this->blog->query()->create($data);
    }

    /**
     * @param int $id
     * @param BlogUpdateDTO $updateDTO
     * @return void
     */
    public function update(int $id, BlogUpdateDTO $updateDTO): void
    {
        $data = $updateDTO->toArray();
        $path = $this->uploadImage($updateDTO->image);
        $data['image'] = $path;

        $this->blog->query()
            ->where('id', '=', $id)
            ->update($data);
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
     * @return Collection
     */
    public function categoryList(): Collection
    {
        return app(CategoryService::class)->list();
    }


}
