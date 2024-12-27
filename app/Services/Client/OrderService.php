<?php

namespace App\Services\Client;

use App\Enums\CartStatus;
use App\Enums\OrderStatus;
use App\Http\DTO\Client\Order\OrderStoreDTO;
use App\Models\Order;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Exception\BadRequestException;

readonly class OrderService
{
    /**
     * @param Order $order
     */
    public function __construct(private Order $order)
    {
    }

    /**
     * @return Collection
     */
    public function getList(): Collection
    {
        return $this->order->query()
            ->where('user_id', '=', auth()->user()->id)
            ->orderByDesc('id')
            ->limit(15)
            ->get();
    }


    /**
     * @param OrderStoreDTO $storeDTO
     * @return void
     */
    public function store(OrderStoreDTO $storeDTO): void
    {
        $lastValidCart = app(CartService::class)->lastValidCart($storeDTO->user_id);
        if (empty($lastValidCart)) {
            throw new BadRequestException('cart_not_fount');
        }

        $data = $storeDTO->toArray();
        $data['cart_id'] = $lastValidCart->id;
        $data['price'] = $lastValidCart->total;

        DB::transaction(function () use ($lastValidCart, $data) {
            $this->order->query()->create($data);
            $lastValidCart->update(['status' => CartStatus::FINAL->value]);
        }, 2);

    }

    /**
     * @param int $id
     * @return void
     */
    public function destroy(int $id): void
    {
        $data = $this->order->query()->findOrFail($id);

        if (!in_array($data->status, [OrderStatus::NEW->value, OrderStatus::ACCEPTED->value])) {
            throw new BadRequestException('امکان حذف سفارش وجود ندارد');
        }

        $data->delete();
    }

}
