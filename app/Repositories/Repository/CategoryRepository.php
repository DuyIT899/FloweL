<?php

namespace App\Repositories\Repository;

use App\Repositories\BaseRepository;
use App\Models\Category;

class CategoryRepository extends BaseRepository {
    public function __construct(Category $category){
        parent::__construct($category);
    }
    public function findByName($name){
        return $this->model->where('category','LIKE','%'. $name.'%')->get();
    }
}