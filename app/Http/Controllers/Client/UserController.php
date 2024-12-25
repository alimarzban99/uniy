<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\DTO\Client\User\UserUpdateDTO;
use App\Http\Requests\Client\User\UserUpdateRequest;
use App\Services\Client\UserService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Throwable;

class UserController extends Controller
{
    public function __construct(private readonly UserService $service)
    {
    }

    /**
     * @param UserUpdateRequest $request
     * @return JsonResponse|RedirectResponse
     */
    public function update(UserUpdateRequest $request)
    {
        try {
            $dto = UserUpdateDTO::fromRequest($request);
            $this->service->update($dto);
            if (!empty($dto->password)) {
                return response()->redirectToRoute('client.profile');
            } else {
                return response()->redirectToRoute('auth.login');
            }
        } catch (Throwable $exception) {
            return response()->json($exception->getMessage());
        }
    }
}
