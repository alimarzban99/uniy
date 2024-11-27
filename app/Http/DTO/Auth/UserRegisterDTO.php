<?php

namespace App\Http\DTO\Auth;

use App\Enums\Status;
use App\Http\DTO\BaseDTO;
use App\Http\Requests\RegisterRequest;

readonly class UserRegisterDTO
{
    use BaseDTO;

    /**
     * @param string $username
     * @param string $email
     * @param string $password
     * @param int $status
     * @param bool $is_admin
     */
    public function __construct(
        public string $username,
        public string $email,
        public string $password,
        public int    $status,
        public bool   $is_admin,
    )
    {
    }

    /**
     * @param RegisterRequest $request
     * @return self
     */
    public static function fromRequest(RegisterRequest $request): self
    {
        return new static(
            $request->input('username'),
            $request->input('email'),
            $request->input('password'),
            Status::DRAFTED->value,
            false,

        );
    }

}
