<?php

namespace App\Http\DTO\Admin\Product;

use App\Http\DTO\BaseDTO;
use App\Http\Requests\Admin\Product\ProductUpdateRequest;
use Illuminate\Http\UploadedFile;

readonly class ProductUpdateDTO
{
    use BaseDTO;

    /**
     * @param int $category_id
     * @param int $status
     * @param string $name
     * @param string $slug
     * @param int $price
     * @param int $discount
     * @param string $description
     * @param bool $is_featured
     * @param UploadedFile $image
     */
    public function __construct(
        public int          $category_id,
        public int          $status,
        public string       $name,
        public string       $slug,
        public int          $price,
        public int          $discount,
        public string       $description,
        public bool         $is_featured,
        public UploadedFile $image,
    )
    {
    }

    /**
     * @param ProductUpdateRequest $request
     * @return self
     */
    public static function fromRequest(ProductUpdateRequest $request): self
    {
        return new static(
            $request->input('category_id'),
            $request->input('status'),
            $request->input('name'),
            $request->input('slug'),
            $request->input('price'),
            $request->filled('discount') ? $request->input('discount') : 0,
            $request->input('description'),
            $request->input('is_featured'),
            $request->file('image'),
        );
    }

}
