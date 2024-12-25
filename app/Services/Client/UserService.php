<?php

namespace App\Services\Client;

use App\Http\DTO\Client\User\UserUpdateDTO;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

readonly class UserService
{
    /**
     * @param User $user
     */
    public function __construct(private User $user)
    {
    }

    /**
     * @param UserUpdateDTO $updateDTO
     * @return void
     */
    public function update(UserUpdateDTO $updateDTO): void
    {
        $user = $this->user->query()->findOrFail(auth()->user()->id);
        if (empty($updateDTO->password)) {
            $user->update([
                'username' => $updateDTO->username,
                'address' => $updateDTO->address,
                'mobile' => $updateDTO->mobile,
            ]);
        } else {
            $user->update([
                'username' => $updateDTO->username,
                'address' => $updateDTO->address,
                'mobile' => $updateDTO->mobile,
                'password' => $updateDTO->password,
            ]);

            Auth::logout();
        }
    }

}
