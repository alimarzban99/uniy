<?php

namespace App\Http\Requests\Client\Blog;

use Illuminate\Foundation\Http\FormRequest;

class BlogIndexRequest extends FormRequest
{
    /**
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return string[]
     */
    public function rules(): array
    {
        return [
            'search' => 'nullable|string',
            'category' => 'nullable|numeric',
        ];
    }
}
