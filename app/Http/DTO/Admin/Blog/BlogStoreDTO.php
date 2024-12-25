<?php

namespace App\Http\DTO\Admin\Blog;

use App\Http\DTO\BaseDTO;
use App\Http\Requests\Admin\Blog\BlogStoreRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\UploadedFile;

readonly class BlogStoreDTO
{
    use BaseDTO;

    /**
     * @param int $category_id
     * @param string $title
     * @param string $slug
     * @param int $status
     * @param string $summary
     * @param string $description
     * @param UploadedFile $image
     */
    public function __construct(
        public int $category_id,
        public string $title,
        public string $slug,
        public int $status,
        public string $summary,
        public string $description,
        public UploadedFile $image,
    )
    {
    }

    /**
     * @param LoginRequest $request
     * @return self
     */
    public static function fromRequest(BlogStoreRequest $request): self
    {
        return new static(
            $request->input('category_id'),
            $request->input('title'),
            $request->input('slug'),
            $request->input('status'),
            $request->input('summary'),
            $request->input('description'),
            $request->file('image'),
        );
    }

}
