<?php

namespace App\Services\Client;

use App\Enums\Status;
use App\Http\DTO\Client\Blog\BlogIndexDTO;
use App\Models\Blog;
use Illuminate\Database\Eloquent\Collection;

readonly class BlogService
{
    public function __construct(private Blog $blog)
    {
    }

    /**
     * @return Collection
     */
    public function latestBlogs(): Collection
    {
        return $this->blog->query()
            ->orderByDesc('id')
            ->limit(3)
            ->get();
    }

    /**
     * @param BlogIndexDTO $indexDTO
     * @return array
     */
    public function index(BlogIndexDTO $indexDTO): array
    {
        $blogs = $this->blog->query()
            ->when(!empty($indexDTO->search), function ($query) use ($indexDTO) {
                $query->where('title', 'LIKE', '%' . $indexDTO->search . '%')
                    ->orWhere('summary', 'LIKE', '%' . $indexDTO->search . '%')
                    ->orWhere('description', 'LIKE', '%' . $indexDTO->search . '%');
            })
            ->when(!empty($indexDTO->category), fn($query) => $query->where('category_id', '=', $indexDTO->category))
            ->where('status', '=', Status::PUBLISHED->value)
            ->orderByDesc('id')
            ->paginate(3);

        $categories = app(CategoryService::class)->filterList();

        return [$blogs, $categories];
    }

    /**
     * @param int $blog
     * @return array
     */
    public function show(int $blog): array
    {
        $blog = $this->blog->query()->findOrFail($blog);
        $categories = app(CategoryService::class)->filterList();

        $blog->increment('visit');

        return [$blog, $categories];
    }
}
