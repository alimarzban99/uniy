<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\DTO\Client\Order\OrderStoreDTO;
use App\Http\Requests\Client\Order\OrderStoreRequest;
use App\Services\Client\OrderService;
use Exception;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class OrderController extends Controller
{
    public function __construct(private readonly OrderService $service)
    {
    }

    /**
     * @param OrderStoreRequest $request
     * @return JsonResponse
     */
    public function store(OrderStoreRequest $request)
    {
        try {
            $this->service->store(OrderStoreDTO::fromRequest($request));
            return response()->json('ok', ResponseAlias::HTTP_OK);
        } catch (Exception $exception) {
            return response()->json($exception->getMessage(), ResponseAlias::HTTP_BAD_REQUEST);
        }
    }

    /**
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(int $id)
    {
        try {
            $this->service->destroy($id);
            return response()->json('ok', ResponseAlias::HTTP_OK);
        } catch (Exception $exception) {
            return response()->json($exception->getMessage(), ResponseAlias::HTTP_BAD_REQUEST);
        }
    }

}
