<?php

namespace App\Http\Requests\Cities;

use App\Abstracts\ApiRequest;

class CreateCityRequest extends ApiRequest
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

        ];
    }
}
