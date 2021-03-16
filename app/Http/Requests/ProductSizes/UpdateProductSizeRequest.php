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
            'title' => 'required|min:3',
            'product_id' => 'required',
        ];
    }
}
