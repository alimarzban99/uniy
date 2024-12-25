<?php

namespace App\Http\DTO\Client\Contact;

use App\Enums\Status;
use App\Http\DTO\BaseDTO;
use App\Http\Requests\Client\Contact\ContactStoreRequest;

readonly class ContactStoreDTO
{
    use BaseDTO;

    /**
     * @param string $username
     * @param string $mobile
     * @param string $title
     * @param string|null $description
     * @param int $status
     */
    public function __construct(
        public string  $username,
        public string  $mobile,
        public string  $title,
        public ?string $description,
        public int     $status,

    )
    {
    }

    /**
     * @param ContactStoreRequest $request
     * @return self
     */
    public static function fromRequest(ContactStoreRequest $request): self
    {
        return new static(
            $request->input('username'),
            $request->input('mobile'),
            $request->input('title'),
            $request->input('description'),
            Status::DRAFTED->value
        );
    }
}
