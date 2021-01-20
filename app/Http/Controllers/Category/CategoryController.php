<?php

namespace App\Http\Controllers\Category;

use App\Models\Category\Category;

class CategoryController
{
    public function getAll()
    {
        $data=Category::get();
        return $data;
    }
}
