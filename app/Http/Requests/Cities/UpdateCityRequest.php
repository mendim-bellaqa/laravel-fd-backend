<?php

namespace App\Http\Requests\Cities;

use App\Abstracts\ApiRequest;

class UpdateCityRequest extends ApiRequest
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

        ];
    }
}
