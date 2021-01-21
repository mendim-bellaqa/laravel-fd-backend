<?php

namespace App\Http\Requests\Categories;

use App\Abstracts\ApiRequest;

class CreateCategoryRequest extends ApiRequest
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
            'thumbnail' => 'required',
        ];
    }
}
