<?php

namespace App\Services\Admin;

use App\Models\User;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

readonly class UserService
{
    public function __construct(private User $user)
    {
    }

    /**
     * @return LengthAwarePaginator
     */
    public function index(): LengthAwarePaginator
    {
        return $this->user->query()
            ->orderByDesc('id')
            ->paginate(10);
    }

    /**
     * @param int $id
     * @return object
     */
    public function findOne(int $id): object
    {
        return $this->user->query()->findOrFail($id);
    }

    /**
     * @param int $id
     * @return bool|null
     */
    public function destroy(int $id): ?bool
    {
        return $this->user->query()
            ->findOrFail($id)
            ->delete();
    }

    /**
     * @param int $id
     * @param array $all
     * @return void
     */
    public function update(int $id, array $all): void
    {
        $this->user->query()
            ->where('id', '=', $id)
            ->update($all);
    }

    /**
     * @param array $only
     * @return void
     */
    public function store(array $only): void
    {
        $only['password'] = '1234';
        $this->user->query()->create($only);
    }

}
