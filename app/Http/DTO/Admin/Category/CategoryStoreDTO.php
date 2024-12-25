<?php

namespace App\Http\DTO\Admin\Category;

use App\Http\DTO\BaseDTO;
use App\Http\Requests\Admin\Category\CategoryStoreRequest;
use Illuminate\Http\UploadedFile;

readonly class CategoryStoreDTO
{
    use BaseDTO;

    /**
     * @param string $name
     * @param string $slug
     * @param int $status
     * @param UploadedFile $image
     */
    public function __construct(
        public string       $name,
        public string       $slug,
        public int          $status,
        public UploadedFile $image,
    )
    {
    }

    /**
     * @param CategoryStoreRequest $request
     * @return self
     */
    public static function fromRequest(CategoryStoreRequest $request): self
    {
        return new static(
            $request->input('name'),
            $request->input('slug'),
            $request->input('status'),
            $request->file('image'),
        );
    }

}
