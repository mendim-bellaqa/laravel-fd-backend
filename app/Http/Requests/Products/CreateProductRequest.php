<?php

namespace App\Http\Requests\Product;

use App\Abstracts\ApiRequest;
use App\Http\Requests\Product\CreateProductRequest;

class CreateProductRequest extends ApiRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3',
            'category_id' => 'required',
            'description' => 'required',
            'price' => 'required'
        ];
    }
}
