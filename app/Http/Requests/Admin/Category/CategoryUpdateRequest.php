<?php

namespace App\Http\Requests\Admin\Category;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CategoryUpdateRequest extends FormRequest
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
        $categoryId = request()->route('category');

        return [
            'name' => 'required|string|min:3',
            'slug' => ['required', Rule::unique('categories', 'slug')->ignore($categoryId)],
            'status' => 'required|numeric',
            'image' => 'required|image|max:5048',
        ];
    }
}
