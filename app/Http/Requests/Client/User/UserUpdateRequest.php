<?php

namespace App\Http\Requests\Client\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class UserUpdateRequest extends FormRequest
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
            'username' => 'required|string',
            'address' => 'required|string',
            'mobile' => 'required|string',
            'password' => [
                'nullable',
                'confirmed',
                Password::min(4)
            ],
        ];
    }
}
