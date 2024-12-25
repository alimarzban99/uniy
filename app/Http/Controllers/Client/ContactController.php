<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\DTO\Client\Contact\ContactStoreDTO;
use App\Http\Requests\Client\Contact\ContactStoreRequest;
use App\Services\Client\ContactService;
use Exception;

class ContactController extends Controller
{
    public function __construct(private readonly ContactService $service)
    {
    }
    public function index()
    {
        return view('client.contact');
    }

    public function store(ContactStoreRequest $request)
    {
        try {
            $this->service->store(ContactStoreDTO::fromRequest($request));
            return response()->redirectToRoute('client.contact.index');
        } catch (Exception $exception) {
            return response()->redirectToRoute('client.contact.index')->withErrors($exception->getMessage());
        }
    }

}
