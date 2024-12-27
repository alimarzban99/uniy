<?php

namespace App\Services\Client;

use App\Enums\CartStatus;
use App\Http\DTO\Client\Cart\CartStoreDTO;
use App\Models\Cart;
use App\Models\CartData;

readonly class CartService
{
    /**
     * @param CartData $cartData
     * @param Cart $cart
     */
    public function __construct(private CartData $cartData, private Cart $cart)
    {
    }

    /**
     * @return object|null
     */
    public function index(): ?object
    {
        return $this->cartData->query()
            ->with('carts')
            ->where('status', '=', CartStatus::NEW->value)
            ->where('user_id', '=', auth()->user()->id)
            ->first();

    }

    /**
     * @return int
     */
    public function count(): int
    {
        if (!auth()->check()) {
            return 0;
        }

        $cartData = $this->cartData->query()
            ->where('status', '=', CartStatus::NEW->value)
            ->where('user_id', '=', auth()->user()->id)
            ->first();

        return !empty($cartData) ? $cartData->carts()->count() : 0;
    }


    /**
     * @param CartStoreDTO $storeDTO
     * @return void
     */
    public function store(CartStoreDTO $storeDTO): void
    {
        $product = app(ProductService::class)->findById($storeDTO->product_id);

        $cartData = $this->checkExistsOrCreateCartData($storeDTO);
        $existsProduct = $this->checkExistsProductInCart($storeDTO);
        if ($existsProduct) {
            $existsProduct->count += $storeDTO->count;
            $pricePerUnit = $product->discount > 0 ? $product->discounted_price : $product->price;
            $existsProduct->total_price = $existsProduct->count * $pricePerUnit;

            $existsProduct->save();
        } else {
            $discountedPrice = $product->discount > 0 ? $product->discounted_price : 0;
            $pricePerUnit = $discountedPrice > 0 ? $discountedPrice : $product->price;

            $data = $storeDTO->toArray();
            $data['cart_id'] = $cartData->id;
            $data['price'] = $product->price;
            $data['total_price'] = $pricePerUnit * $storeDTO->count;
            $data['discounted_price'] = $discountedPrice;

            $this->cart->query()->create($data);
        }

        $cartData->update(['total' => $cartData->carts()->sum('total_price')]);

    }

    /**
     * @param int $id
     * @return bool|null
     */
    public function destroy(int $id): ?bool
    {
        $data = $this->cart->query()->findOrFail($id);
        $cartData = $data->cartData;
        if ($data->count === 1) {
            $data->delete();
            if ($cartData->carts->isEmpty()) {
                $cartData->delete();
            } else {
                $cartData->update(['total' => $cartData->carts()->sum('total_price')]);
            }

        } else {
            $data->count -= 1;
            $pricePerUnit = $data->product->discount > 0 ? $data->product->discounted_price : $data->product->price;
            $data->total_price = $data->count * $pricePerUnit;
            $data->save();
            $cartData->update(['total' => $cartData->carts()->sum('total_price')]);
        }


        return true;
    }

    /**
     * @param int $userId
     * @return object|null
     */
    public function lastValidCart(int $userId): ?object
    {
       return $this->cartData->query()
            ->where('user_id', '=', $userId)
            ->where('status', '=', CartStatus::NEW->value)
            ->first();
    }

    /**
     * @param CartStoreDTO $storeDTO
     * @return object|null
     */
    private function checkExistsOrCreateCartData(CartStoreDTO $storeDTO): ?object
    {
        $data = $this->cartData->query()
            ->where('user_id', '=', $storeDTO->user_id)
            ->where('status', '=', $storeDTO->status)
            ->first();

        if (empty($data)) {
            return $this->cartData->query()->create([
                'user_id' => $storeDTO->user_id,
                'status' => $storeDTO->status,
                'total' => 0,
            ]);
        }
        return $data;
    }

    /**
     * @param CartStoreDTO $storeDTO
     * @return object|null
     */
    private function checkExistsProductInCart(CartStoreDTO $storeDTO): ?object
    {
        return $this->cart->query()
            ->where('product_id', '=', $storeDTO->product_id)
            ->first();
    }


}
