<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CategoryServices;
use App\Http\Resources\CategoryResource;

class CategoryController extends Controller
{
    protected $categoryServices;

    public function __construct(categoryServices $categoryServices)
    {
        $this->categoryServices = $categoryServices;
    }

    public function index()
    {
        $category = $this->categoryServices->getAllCategory();

        return categoryResource::collection($category);
    }

    public function searchCategory(Request $request)
    {
        $name = $request->input('name');
        $searchCategory = $this->categoryServices->findByName($name);

        return categoryResource::collection($searchCategory);
    }

    public function store(Request $request)
    {
        $name = $request->input('name');
        $data = [
            'category' => $name,
        ];
        $createCategory = $this->categoryServices->createCategory($data);

        if (!empty($createCategory)) {
            return response([
                'status' => 'success',
            ]);
        } else {
            return response([
                'status' => 'error',
            ]);
        }
    }

    public function update($id, Request $request)
    {
        $name = $request->input('name');
        $data = [
            'category' => $name,
        ];
        $updateCategory = $this->categoryServices->updateCategory($id, $data);

        if (!empty($updateCategory)) {
            return response([
                'status' => 'success',
            ]);
        } else {
            return response([
                'status' => 'error',
            ]);
        }
    }
}
