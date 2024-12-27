<?php

namespace App\Http\Requests\Client\Order;

use App\Enums\PaymentMethod;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use ReflectionException;

class OrderStoreRequest extends FormRequest
{
    /**
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array
     * @throws ReflectionException
     */
    public function rules(): array
    {
        return [
            'note' => 'nullable|string',
            'payment_method' => ['required', Rule::in(PaymentMethod::toArray())],
        ];
    }
}
