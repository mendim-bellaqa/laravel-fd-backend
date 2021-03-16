<?php

namespace App\Http\Requests\ProductsSizes;

use App\Abstracts\ApiRequest;
use App\Http\Requests\ProductsSizes\UpdateProductSizeRequest;

class UpdateProductSizeRequest extends ApiRequest
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
