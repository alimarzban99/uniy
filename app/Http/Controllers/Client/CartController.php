<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\DTO\Client\Cart\CartStoreDTO;
use App\Http\Requests\Client\Cart\CartStoreRequest;
use App\Services\Client\CartService;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;
use Throwable;

class CartController extends Controller
{
    public function __construct(private readonly CartService $service)
    {
    }

    /**
     * @return Factory|View|Application|JsonResponse|RedirectResponse|\Illuminate\View\View
     */
    public function index()
    {
        try {

            if ($this->service->count() === 0) {
                return redirect()->back();
            }
            $data = $this->service->index();
            return view('client.cart', compact('data'));
        } catch (Throwable $exception) {

            return response()->json($exception->getMessage());
        }
    }

    /**
     * @param CartStoreRequest $request
     * @return JsonResponse
     */
    public function store(CartStoreRequest $request)
    {
        try {
            $this->service->store(CartStoreDTO::fromRequest($request));
            return response()->json('ok', ResponseAlias::HTTP_OK);
        } catch (Exception $exception) {
            return response()->json($exception->getMessage());
        }
    }

    public function checkout()
    {
        return view('client.checkout');
    }

    /**
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(int $id)
    {
        try {
            $data = $this->service->destroy($id);

            if ($this->service->count() === 0) {
                return response()->json('redirect', ResponseAlias::HTTP_OK);
            }

            return response()->json($data, ResponseAlias::HTTP_OK);
        } catch (Throwable $exception) {
            return response()->json($exception->getMessage());
        }
    }

}
