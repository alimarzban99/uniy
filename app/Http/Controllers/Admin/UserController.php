<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Admin\UserService;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;
use Throwable;

class UserController extends Controller
{
    public function __construct(private readonly UserService $service)
    {
    }

    public function index()
    {
        $users = $this->service->index();
        return view('admin.user.index', compact('users'));
    }

    /**
     * @param int $id
     * @return JsonResponse
     */
    public function show(int $id)
    {
        try {
            $data = $this->service->findOne($id);
            return response()->json($data, ResponseAlias::HTTP_OK);
        } catch (Exception $exception) {
            return response()->json($exception->getMessage(), ResponseAlias::HTTP_OK);
        }
    }

    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $this->service->store($request->only('username', 'email', 'address', 'is_admin', 'status'));
        return response()->redirectToRoute('admin.user.index');
    }

    /**
     * @param int $id
     * @return Factory|View|Application|\Illuminate\View\View
     */
    public function edit(int $id)
    {
        $data = $this->service->findOne($id);
        return view('admin.user.update', compact('data'));

    }

    /**
     * @param Request $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(Request $request, int $id)
    {
        $this->service->update($id, $request->only('username', 'address', 'email', 'is_admin', 'status'));
        return response()->redirectToRoute('admin.user.index');
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
            return response()->json($exception->getMessage(), ResponseAlias::HTTP_OK);
        }
    }
}
