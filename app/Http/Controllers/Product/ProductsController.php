<?php

namespace App\Http\Controllers\Products;

use App\Abstracts\Controller;
use App\Models\Products\Product;
use App\Http\Requests\Product\CreateProductRequest;
use App\Http\Requests\Products\UpdateProductRequest;

class ProductController extends Controller
{
    public function getAll()
    {
        $data = Product::paginate();

        return $data;
    }

    public function delete($id)
    {
        $product = Product::find($id);

        if ($product) {
            $product->delete();
        }

        return null;
    }

    public function create(CreateProductRequest $request)
    {
        $product = new Product;
        $product->fill($request->validated());
        $product->save();

        return $product;
    }

    public function update($id, UpdateProductRequest $request)
    {
        $product = product::find($id);
        $product->fill($request->validated());
        $product->save();

        return $product;
    }
}
