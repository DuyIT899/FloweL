<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\RoleServices;
use App\Http\Resources\RoleResource;


class RoleController extends Controller
{
    protected $roleServices;

    public function __construct(roleServices $roleServices){
        $this->roleServices = $roleServices;
    }

    public function index(){
        $roles = $this->roleServices->getAllRole();
        return RoleResource::collection($roles);
    }

    public function searchRole(Request $request){
        $name = $request->input('name');
        $searchRole = $this->roleServices->findByName($name);
        return RoleResource::collection($searchRole);
    }

    public function store(Request $request){
        $name = $request->input('name');
        $data =[
            'role' => $name,
        ];
        $createRole = $this->roleServices->createRole($data);

        return response([
            'status'=>'success',
        ]);
    }

    public function update($id, Request $request){
        $name = $request->input('name');
        $data =[
            'role' => $name,
        ];
        $updateRole = $this->roleServices->updateRole($id, $data);

        return response([
            'status'=>'success',
        ]);
    }
}
