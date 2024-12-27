<?php

namespace App\Http\DTO\Client\Order;

use App\Enums\OrderStatus;
use App\Http\DTO\BaseDTO;
use App\Http\Requests\Client\Order\OrderStoreRequest;

readonly class OrderStoreDTO
{
    use BaseDTO;

    /**
     * @param int $user_id
     * @param int $payment_method
     * @param string|null $note
     * @param int $status
     */
    public function __construct(
        public int     $user_id,
        public int     $payment_method,
        public ?string $note,
        public int     $status,
    )
    {
    }

    /**
     * @param OrderStoreRequest $request
     * @return self
     */
    public static function fromRequest(OrderStoreRequest $request): self
    {
        return new static(
            $request->user()->id,
            $request->input('payment_method'),
            $request->input('note'),
            OrderStatus::NEW->value

        );
    }
}
