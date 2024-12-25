<?php

namespace App\Services\Client;

use App\Http\DTO\Client\Contact\ContactStoreDTO;
use App\Models\Contact;
use Illuminate\Support\Facades\Session;

readonly class ContactService
{
    /**
     * @param Contact $contact
     */
    public function __construct(private Contact $contact)
    {
    }

    /**
     * @param ContactStoreDTO $storeDTO
     * @return void
     */
    public function store(ContactStoreDTO $storeDTO): void
    {
        $this->contact->query()->create($storeDTO->toArray());
        Session::flash('message', 'پیام شما ثبت شد');
    }
}
