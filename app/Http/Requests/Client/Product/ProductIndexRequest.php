<?php

namespace App\Http\Requests\Client\Product;

use App\Http\DTO\Client\Product\ProductIndexDTO;
use Illuminate\Foundation\Http\FormRequest;

class ProductIndexRequest extends FormRequest
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
