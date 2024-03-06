<?php

namespace App\Repositories\Repository;

use App\Repositories\BaseRepository;
use App\Repositories\Interface\RoleRepositoryInterface;
use App\Models\Role;

class RoleRepository extends BaseRepository {
    public function __construct(Role $role){
        parent::__construct($role);
    }
    public function findByName($name){
        return $this->model->where('role','LIKE','%'. $name.'%')->get();
    }
}