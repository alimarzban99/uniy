<?php

namespace App\Http\Requests\Admin\Blog;

use Illuminate\Foundation\Http\FormRequest;

class BlogStoreRequest extends FormRequest
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
            'category_id' => 'required|numeric',
            'title' => 'required|string|min:3',
            'slug' => 'required|unique:blogs,slug',
            'status' => 'required|numeric',
            'summary' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:5048',
        ];
    }
}
