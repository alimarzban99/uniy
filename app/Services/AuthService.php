<?php

namespace App\Services;

use App\Enums\Status;
use App\Http\DTO\Auth\UserLoginDTO;
use App\Http\DTO\Auth\UserRegisterDTO;
use App\Models\User;
use App\Notifications\UserConfirmationNotification;
use Exception;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

class AuthService
{
    /**
     * @param User $user
     */
    public function __construct(private readonly User $user)
    {
    }

    /**
     * @param UserLoginDTO $loginDTO
     * @return string
     * @throws Exception
     */
    public function doLogin(UserLoginDTO $loginDTO): void
    {
        $user = $this->user->query()
            ->where("email", '=', $loginDTO->email)
            ->first();

        if (!$user) {
            throw new Exception('کاربری با این ایمیل یافت نشد');
        }

        if (empty($user->email_verified_at)) {
            throw new Exception('برای فعال سازی ایمیل خود را تایید کنید');
        }

        if ($user->status !== Status::PUBLISHED->value) {
            throw new Exception('این کاربر مسدود می باشد');
        }

        if (!Hash::check($loginDTO->password, $user->password)) {
            throw new Exception('ایمیل یا رمز عبور اشتباه است');
        }


        Auth::login($user);

//        if ($user->is_admin) {
//            return route('admin.dashboard');
//        }
//        return route('client.profile');
    }

    /**
     * @param UserRegisterDTO $registerDTO
     * @return void
     * @throws Exception
     */
    public function doRegister(UserRegisterDTO $registerDTO): void
    {
        DB::beginTransaction();

        $user = $this->user->query()
            ->create($registerDTO->toArray());

        DB::commit();

        $user->notify(new UserConfirmationNotification());

        Session::flash('register', 'ایمیل فعال سازی برای شما ارسال شد');

    }

    /**
     * @param int $id
     * @return void
     * @throws Exception
     */
    public function verify(int $id): void
    {

        $user = $this->user->query()->find($id);

        if (!$user) {
            throw new Exception('کاربری با این ایمیل یافت نشد');
        }

        $user->update([
            'email_verified_at' => now(),
            'status' => Status::PUBLISHED->value
        ]);

        Auth::loginUsingId($user->id);

//        if ($user->is_admin) {
//            return route('admin.dashboard');
//        }
//        return route('client.profile');
    }
}
