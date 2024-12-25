<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Admin\ContactService;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;
use Throwable;

class ContactController extends Controller
{
    public function __construct(private readonly ContactService $service)
    {
    }

    public function index()
    {
        $contacts = $this->service->index();
        return view('admin.contact.index', compact('contacts'));
    }

    /**
     * @param int $id
     * @return JsonResponse
     */
    public function show(int $id)
    {
        try {
            $data = $this->service->show($id);
            return response()->json($data, ResponseAlias::HTTP_OK);
        } catch (Throwable $exception) {
            return response()->json($exception->getMessage(), $exception->getCode());
        }
    }

    /**
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(int $id)
    {
        try {
            $data = $this->service->destroy($id);
            return response()->json($data, ResponseAlias::HTTP_OK);
        } catch (Throwable $exception) {
            return response()->json($exception->getMessage(), $exception->getCode());
        }
    }
}
