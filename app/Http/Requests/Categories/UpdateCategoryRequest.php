<?php

namespace App\Http\Requests\Categories;

use App\Abstracts\ApiRequest;

class UpdateCategoryRequest extends ApiRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'filled|min:3',
            'thumbnail' => 'filled'
        ];
    }
}
