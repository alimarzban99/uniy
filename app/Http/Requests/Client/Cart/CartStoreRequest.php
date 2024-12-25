<?php

namespace App\Http\Requests\Client\Cart;

use Illuminate\Foundation\Http\FormRequest;

class CartStoreRequest extends FormRequest
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
            'product_id' => 'required',
            'count' => 'nullable|numeric|min:1',
        ];
    }
}
