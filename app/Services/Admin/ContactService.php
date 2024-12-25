<?php

namespace App\Services\Admin;

use App\Enums\Status;
use App\Models\Contact;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

readonly class ContactService
{
    public function __construct(private Contact $contact)
    {
    }

    /**
     * @return LengthAwarePaginator
     */
    public function index(): LengthAwarePaginator
    {
        return $this->contact->query()
            ->orderByDesc('id')
            ->paginate(10);
    }

    /**
     * @param int $id
     * @return bool|null
     */
    public function destroy(int $id): ?bool
    {
        return $this->contact->query()
            ->findOrFail($id)
            ->delete();
    }

    /**
     * @param int $id
     * @return object
     */
    public function show(int $id): object
    {
        $data = $this->contact->query()->findOrFail($id);
        $data->update(['status' => Status::PUBLISHED->value]);
        return $data;
    }

}
