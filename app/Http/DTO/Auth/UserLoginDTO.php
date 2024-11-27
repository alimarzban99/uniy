<?php

namespace App\Http\DTO\Auth;

use App\Http\Requests\LoginRequest;

readonly class UserLoginDTO
{
    /**
     * @param string $email
     * @param string $password
     */
    public function __construct(
        public string $email,
        public string $password,
    )
    {
    }

    /**
     * @param LoginRequest $request
     * @return self
     */
    public static function fromRequest(LoginRequest $request): self
    {
        return new static(
            $request->input('email'),
            $request->input('password'),
        );
    }

}
