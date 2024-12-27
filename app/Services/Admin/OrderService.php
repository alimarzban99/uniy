<?php

namespace App\Services\Admin;

use App\Models\Order;
use App\Services\Admin\Trait\UploadImageTrait;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class OrderService
{
    use UploadImageTrait;

    /**
     * @var string
     */
    private string $basePath = 'order';

    public function __construct(private readonly Order $order)
    {
    }

    /**
     * @return LengthAwarePaginator
     */
    public function index(): LengthAwarePaginator
    {
        return $this->order->query()
            ->orderByDesc('id')
            ->paginate(10);
    }

    /**
     * @param int $id
     * @return bool|null
     */
    public function destroy(int $id): ?bool
    {
        return $this->order->query()
            ->findOrFail($id)
            ->delete();
    }

    /**
     * @param int $id
     * @param int $status
     * @return bool
     */
    public function changeStatus(int $id, int $status): bool
    {
        return $this->order->query()
            ->findOrFail($id)
            ->update(['status' => $status]);
    }
}
