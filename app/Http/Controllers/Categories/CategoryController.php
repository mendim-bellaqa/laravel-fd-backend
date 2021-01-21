<?php

namespace App\Http\Controllers\Categories;

use App\Abstracts\Controller;
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
}
