<?php

namespace App\Http\DTO\Client\User;

use App\Http\DTO\BaseDTO;
use App\Http\Requests\Client\User\UserUpdateRequest;

readonly class UserUpdateDTO
{
    use BaseDTO;

    /**
     * @param string $username
     * @param string $address
     * @param string $mobile
     * @param string|null $password
     */
    public function __construct(
        public string  $username,
        public string  $address,
        public string  $mobile,
        public ?string $password,
    )
    {
    }

    /**
     * @param UserUpdateRequest $request
     * @return self
     */
    public static function fromRequest(UserUpdateRequest $request): self
    {
        return new static(
            $request->input('username'),
            $request->input('address'),
            $request->input('mobile'),
            $request->input('password'),
        );
    }
}
