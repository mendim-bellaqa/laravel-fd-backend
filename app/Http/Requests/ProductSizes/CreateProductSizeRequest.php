<?php

namespace App\Http\Requests\ProductSizes;

use App\Abstracts\ApiRequest;
use App\Http\Requests\ProductSizes\CreateProductSizeRequest;

class CreateProductSizeRequest extends ApiRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:3',
            'product_id' => 'required',
        ];
    }
}
