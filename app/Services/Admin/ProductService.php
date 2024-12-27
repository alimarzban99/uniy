<?php

namespace App\Services\Admin;

use App\Enums\Status;
use App\Http\DTO\Admin\Product\ProductStoreDTO;
use App\Http\DTO\Admin\Product\ProductUpdateDTO;
use App\Models\Product;
use App\Services\Admin\Trait\UploadImageTrait;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class ProductService
{
    use UploadImageTrait;

    /**
     * @var string
     */
    private string $basePath = 'product';

    /**
     * @param Product $product
     */
    public function __construct(private readonly Product $product)
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
     * @param ProductStoreDTO $storeDTO
     * @return void
     */
    public function store(ProductStoreDTO $storeDTO): void
    {
        $data = $storeDTO->toArray();
        $path = $this->uploadImage($storeDTO->image);
        $data['image'] = $path;

        $this->product->query()->create($data);
    }

    /**
     * @param int $id
     * @param ProductUpdateDTO $updateDTO
     * @return void
     */
    public function update(int $id, ProductUpdateDTO $updateDTO): void
    {
        $data = $updateDTO->toArray();
        $path = $this->uploadImage($updateDTO->image);
        $data['image'] = $path;

        $this->product->query()
            ->where('id', '=', $id)
            ->update($data);
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
     * @return Collection
     */
    public function categoryList(): Collection
    {
        return app(CategoryService::class)->list();
    }

    /**
     * @param int $id
     * @return bool
     */
    public function featured(int $id): bool
    {
        $product = $this->product->query()->findOrFail($id);
        return $product->update(['is_featured' => !$product->is_featured]);
    }

    /**
     * @return int
     */
    public function report(): int
    {
        return $this->product->query()
            ->where('status', '=', Status::PUBLISHED->value)
            ->count();
    }

}
