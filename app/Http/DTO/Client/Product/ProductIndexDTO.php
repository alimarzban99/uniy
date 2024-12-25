<?php

namespace App\Http\DTO\Client\Product;

use App\Http\DTO\BaseDTO;
use App\Http\Requests\Client\Product\ProductIndexRequest;

readonly class ProductIndexDTO
{
    use BaseDTO;

    /**
     * @param int|null $category
     * @param string|null $search
     */
    public function __construct(
        public ?int    $category,
        public ?string $search,

    )
    {
    }

    /**
     * @param ProductIndexRequest $request
     * @return self
     */
    public static function fromRequest(ProductIndexRequest $request): self
    {
        return new static(
            $request->input('category'),
            $request->input('search'),
        );
    }
}
