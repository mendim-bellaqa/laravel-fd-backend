<?php

namespace App\Http\Controllers\Categories;

use App\Abstracts\Controller;
use App\Http\Requests\Categories\CreateCategoryRequest;
use App\Models\Categories\Category;

class CategoryController extends Controller
{
    public function getAll()
    {
        $data = Category::get();

        return $data;
    }

    public function delete($id)
    {
        return Category::find($id)->delete();
    }

    public function create(CreateCategoryRequest $request)
    {
        $category = new Category;
        $category->fill($request->validated());
        $category->save();
        return $category;
    }
    public function update(CreateCategoryRequest $request, $id)
    {
        $category = category::find($id);
        $category->fill($request->validated());
        $category->save();
        return $category;
    }
}
