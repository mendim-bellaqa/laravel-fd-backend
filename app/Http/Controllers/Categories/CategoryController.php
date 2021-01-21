<?php

namespace App\Http\Categories\Category;

use App\Abstracts\Controller;
use App\Models\Categories\Category;

class CategoryController extends Controller
{
    public function getAll()
    {
        $data = Category::get();

        return $data;
    }
}
