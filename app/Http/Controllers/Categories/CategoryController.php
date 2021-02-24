<?php

namespace App\Http\Controllers\Categories;

use App\Abstracts\Controller;
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

        if ($category) {
            $category->delete();
        }

        return null;
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
