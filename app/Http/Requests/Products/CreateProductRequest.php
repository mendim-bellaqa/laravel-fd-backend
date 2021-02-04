<?php

namespace App\Http\Requests\Product;

use App\Abstracts\ApiRequest;

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
            'description' => 'required',
            'category_id' => 'required',
            'price' => 'required'
        ];
    }
}
