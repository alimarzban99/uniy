<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Services\Admin\OrderService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;
use Throwable;

class OrderController extends Controller
{
    public function __construct(private readonly OrderService $service)
    {
    }

    public function index()
    {
        $orders = $this->service->index();
        return view('admin.order.index', compact('orders'));
    }

    public function show(Order $order)
    {
        return view('admin.order.show', compact('order'));
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
        } catch (Throwable $exception) {
            return response()->json($exception->getMessage(), ResponseAlias::HTTP_BAD_REQUEST);
        }
    }

    /**
     * @param Request $request
     * @param int $id
     * @return JsonResponse
     */
    public function changeStatus(Request $request, int $id)
    {
        try {
            $this->service->changeStatus($id, $request->input('status'));
            return response()->json('ok', ResponseAlias::HTTP_OK);
        } catch (Throwable $exception) {
            return response()->json($exception->getMessage(), ResponseAlias::HTTP_BAD_REQUEST);
        }
    }
}
