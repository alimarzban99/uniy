<?php

namespace App\Http\DTO\Client\Cart;

use App\Enums\CartStatus;
use App\Http\DTO\BaseDTO;
use App\Http\Requests\Client\Cart\CartStoreRequest;

readonly class CartStoreDTO
{
    use BaseDTO;

    /**
     * @param int $user_id
     * @param int $product_id
     * @param int $count
     * @param int $status
     */
    public function __construct(
        public int $user_id,
        public int $product_id,
        public int $count,
        public int $status,
    )
    {
    }

    /**
     * @param CartStoreRequest $request
     * @return self
     */
    public static function fromRequest(CartStoreRequest $request): self
    {
        return new static(
            $request->user()->id,
            $request->input('product_id'),
            $request->filled('count') ? $request->input('count') : 1,
            CartStatus::NEW->value
        );
    }
}
