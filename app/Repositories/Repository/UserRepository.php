<?php

namespace App\Repositories\Repository;

use App\Repositories\BaseRepository;
use App\Models\User;

class UserRepository extends BaseRepository
{
    public function __construct(User $user)
    {
        parent::__construct($user);
    }
    public function findByName($name)
    {
        return $this->model->where('name', 'LIKE', '%' . $name . '%')->get();
    }
}
