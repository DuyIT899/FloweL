<?php
namespace App\Services;
use App\Repositories\Repository\RoleRepository;
class RoleServices
{
    protected $roleRepository;
    
    public function __construct(RoleRepository $roleRepository){
        $this->roleRepository = $roleRepository;
    }

    public function getAllRole(){
        return $this->roleRepository->all();
    }

    public function findByName($name){
        return $this->roleRepository->findByName($name);
    }    

    public function createRole(array $data){
        return $this->roleRepository->create($data);
    }

    public function updateRole($id, $data){
        return $this->roleRepository->update($id, $data);
    }
}