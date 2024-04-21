<?php

namespace App\Http\Controllers\Categories;

use App\Abstracts\Controller;
use App\Http\Controllers\Categories\CategoryController;
use App\Http\Requests\Categories\CreateCategoryRequest;
use App\Http\Requests\Categories\UpdateCategoryRequest;
use App\Models\Categories\Category;

class CategoryController extends Controller
{
    public function getAll()
    {
        $data = Category::paginate();

        return $data;
    }

    public function delete($id)
    {
        $category = Category::find($id);

        if (!$category) {
            return response()->json(['error' => 'Category not found'], 404);
        }

        $category->delete();

        return response()->json(['message' => 'Category deleted successfully'], 200);
    }

    public function create(CreateCategoryRequest $request)
    {
        $category = new Category;
        $category->fill($request->validated());
        $category->save();

        return $category;
    }

    public function update($id, UpdateCategoryRequest $request)
    {
        $category = category::find($id);
        $category->fill($request->validated());
        $category->save();

        return $category;
    }
    public function show($id)
    {
        $category = category::find($id);

        return $category;
    }
}
