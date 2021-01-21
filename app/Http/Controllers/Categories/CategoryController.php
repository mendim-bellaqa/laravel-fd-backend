<?php

namespace App\Http\Controllers\Categories;

use Illuminate\Http\Request;
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

    public function create(Request $request)
    {
        $request->validate([

            "name"=> "required",

        ]);

        return $request->all();

    }
}
