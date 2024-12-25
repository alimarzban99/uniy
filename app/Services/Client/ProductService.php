<?php

namespace App\Services\Client;

use App\Enums\Status;
use App\Http\DTO\Client\Product\ProductIndexDTO;
use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

readonly class ProductService
{
    public function __construct(private Product $product)
    {
    }

    /**
     * @param ProductIndexDTO $indexDTO
     * @return array
     */
    public function index(ProductIndexDTO $indexDTO): array
    {
        $products = $this->product->query()
            ->when(!empty($indexDTO->search), function ($query) use ($indexDTO) {
                $query->where('name', 'LIKE', '%' . $indexDTO->search . '%')
                    ->orWhere('description', 'LIKE', '%' . $indexDTO->search . '%');
            })
            ->when(!empty($indexDTO->category), fn($query) => $query->where('category_id', '=', $indexDTO->category))
            ->where('status', '=', Status::PUBLISHED->value)
            ->orderByDesc('id')
            ->paginate(5);

        $categories = app(CategoryService::class)->filterList();

        return [$products, $categories];
    }

    /**
     * @return Collection
     */
    public function latestProducts(): Collection
    {
        return $this->product->query()
            ->orderByDesc('id')
            ->limit(4)
            ->get();
    }

    /**
     * @return Collection
     */
    public function featureProducts(): Collection
    {
        return $this->product->query()
            ->where('is_featured', '=', true)
            ->orderByDesc('id')
            ->limit(4)
            ->get();
    }

    /**
     * @param int $categoryId
     * @return Collection
     */
    public function relatedProducts(int $categoryId): Collection
    {
        return $this->product->query()
            ->where('category_id', '=', $categoryId)
            ->orderByDesc('id')
            ->limit(4)
            ->get();
    }

    /**
     * @param int $id
     * @return object
     */
    public function findById(int $id): object
    {
        return $this->product->query()->findOrFail($id);
    }
}
