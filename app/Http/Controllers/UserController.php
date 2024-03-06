<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Services\UserServices;
use App\Http\Resources\UserResource;

class UserController extends Controller
{
    protected $userServices;

    public function __construct(userServices $userServices)
    {
        $this->userServices = $userServices;
    }

    public function index()
    {
        $users = $this->userServices->getAllUser();

        return UserResource::collection($users);
    }

    public function searchUserByName(Request $request)
    {
        $name = $request->input('name');
        $searchUserByName = $this->userServices->findByName($name);

        return UserResource::collection($searchUserByName);
    }

    public function store(UserRequest $request)
    {
        $createUser = $this->userServices->createUser($request->all());

        if (!empty($createUser)) {
            return response([
                'status' => 'success',
            ]);
        } else {
            return response([
                'status' => 'fail',
            ]);
        }
    }

    public function update($id, Request $request)
    {
        $updateUser = $this->userServices->updateUser($id, $request->all());

        if (!empty($updateUser)) {
            return response([
                'status' => 'success',
            ]);
        } else {
            return response([
                'status' => 'fail',
            ]);
        }
    }
}
