<?php

namespace App\Http\DTO\Client\Blog;

use App\Http\DTO\BaseDTO;
use App\Http\Requests\Client\Blog\BlogIndexRequest;

readonly class BlogIndexDTO
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
     * @param BlogIndexRequest $request
     * @return self
     */
    public static function fromRequest(BlogIndexRequest $request): self
    {
        return new static(
            $request->input('category'),
            $request->input('search'),
        );
    }
}
