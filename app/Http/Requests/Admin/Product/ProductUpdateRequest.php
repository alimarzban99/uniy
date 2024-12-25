<?php

namespace App\Http\Requests\Admin\Product;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductUpdateRequest extends FormRequest
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
        $productId = request()->route('product');

        return [
            'category_id' => 'required|numeric',
            'status' => 'required|numeric',
            'name' => 'required|string|min:3',
            'slug' => ['required', Rule::unique('products', 'slug')->ignore($productId)],
            'price' => 'required|numeric|min:0',
            'discount' => 'nullable|numeric|min:0',
            'description' => 'required|string',
            'is_featured' => 'required|boolean',
            'image' => 'required|image|max:5048',
        ];
    }
}
