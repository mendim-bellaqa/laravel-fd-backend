<?php

namespace App\Http\Controllers\ProductSizesController;

use App\Abstracts\Controller;
use App\Models\ProductSizes\ProductSizes;
use App\Http\Requests\ProductSizes\CreateProductSizeRequest;
use App\Http\Requests\ProductsSizes\UpdateProductSizeRequest;
use App\Http\Controllers\ProductSizesController\ProductSizeController;






class ProductSizeController extends Controller
{
    public function getAll()
    {
        $data = ProductSizes::paginate();

        return $data;
    }

    public function delete($id)
    {
        $product_size = ProductSizes::find($id);

        if ($product_size) {
            $product_size->delete();
        }

        return null;
    }

    public function create(CreateProductSizeRequest $request)
    {
        $product_size_size = new ProductSizes;
        $product_size->fill($request->validated());
        $product_size->save();

        return $product_size;
    }

    public function update($id, UpdateProductSizeRequest $request)
    {
        $product_size = ProductSizes::find($id);
        $product_size->fill($request->validated());
        $product_size->save();

        return $product_size;
    }

    public function show($id)
    {
        $product_size = ProductSizes::find($id);

        return $product_size;
    }
}
