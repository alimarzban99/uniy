<?php

namespace App\Http\Controllers;

use App\Http\DTO\Auth\UserLoginDTO;
use App\Http\DTO\Auth\UserRegisterDTO;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Services\AuthService;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Throwable;

class AuthController extends Controller
{
    /**
     * @param AuthService $service
     */
    public function __construct(private readonly AuthService $service)
    {

    }

    /**
     * @return Factory|View|Application|\Illuminate\View\View
     */
    public function login()
    {
        return view('client.auth.login');
    }

    /**
     * @return Factory|View|Application|\Illuminate\View\View
     */
    public function register()
    {
        return view('client.auth.register');
    }

    /**
     * @param LoginRequest $request
     * @return RedirectResponse
     */
    public function doLogin(LoginRequest $request)
    {
        try {
            $result = $this->service->doLogin(UserLoginDTO::fromRequest($request));
            return response()->redirectTo(route('home'));
        } catch (Throwable $exception) {
            return redirect()->back()->withErrors($exception->getMessage());
        }
    }

    /**
     * @param RegisterRequest $request
     * @return RedirectResponse
     */
    public function doRegister(RegisterRequest $request)
    {
        try {
            $this->service->doRegister(UserRegisterDTO::fromRequest($request));
            return response()->redirectTo(route('auth.register'));
        } catch (Throwable $exception) {
            DB::rollBack();
            Session::flash('register', $exception->getMessage());
            return redirect()->back()->withErrors($exception->getMessage())->withInput();
        }
    }

    /**
     * @return RedirectResponse
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return response()->redirectTo(route('auth.login'));
    }

    /**
     * @return RedirectResponse
     */
    public function verify(int $id)
    {
        try {
            $result = $this->service->verify($id);
            return response()->redirectTo(route('auth.register'));
        } catch (Throwable $exception) {
            Session::flash('register', $exception->getMessage());

            return redirect()->back()->withErrors($exception->getMessage())->withInput();
        }
    }
}
