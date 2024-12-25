<?php

namespace App\Http\Requests\Client\Contact;

use Illuminate\Foundation\Http\FormRequest;

class ContactStoreRequest extends FormRequest
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
            'mobile' => 'required|numeric',
            'title' => 'required|string',
            'description' => 'nullable|string',
        ];
    }
}
