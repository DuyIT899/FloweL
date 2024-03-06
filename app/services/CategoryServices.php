<?php
namespace App\Services;
use App\Repositories\Repository\CategoryRepository;
class CategoryServices
{
    protected $categoryRepository;
    
    public function __construct(CategoryRepository $categoryRepository){
        $this->categoryRepository = $categoryRepository;
    }

    public function getAllCategory(){
        return $this->categoryRepository->all();
    }

    public function findByName($name){
        return $this->categoryRepository->findByName($name);
    }    

    public function createCategory(array $data){
        return $this->categoryRepository->create($data);
    }

    public function updateCategory($id, $data){
        return $this->categoryRepository->update($id, $data);
    }
}