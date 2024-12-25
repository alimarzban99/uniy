<?php

namespace App\Http\Requests\Admin\Category;

use Illuminate\Foundation\Http\FormRequest;

class CategoryStoreRequest extends FormRequest
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
            'name' => 'required|string|min:3',
            'slug' => 'required|unique:categories,slug',
            'status' => 'required|numeric',
            'image' => 'required|image|max:5048',
        ];
    }
}
