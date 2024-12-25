<?php

namespace App\Http\Requests\Admin\Product;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
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
            'status' => 'required|numeric',
            'name' => 'required|string|min:3',
            'slug' => 'required|unique:products,slug',
            'price' => 'required|numeric|min:0',
            'discount' => 'nullable|numeric|min:0',
            'description' => 'required|string',
            'is_featured' => 'required|boolean',
            'image' => 'required|image|max:5048',
        ];
    }
}
