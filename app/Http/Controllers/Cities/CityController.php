<?php

namespace App\Http\Controllers\Cities;

use App\Abstracts\Controller;
use App\Http\Requests\Cities\CreateCityRequest;
use App\Http\Requests\Cities\UpdateCityRequest;
use App\Models\Cities\City;

class CityController extends Controller
{
    public function getAll()
    {
        $data = City::paginate();

        return $data;
    }

    public function delete($id)
    {
        $city = City::find($id);

        if ($city) {
            $city->delete();
        }

        return null;
    }

    public function create(CreateCityRequest $request)
    {
        $city = new City;
        $city->fill($request->validated());
        $city->save();

        return $city;
    }

    public function update($id, UpdateCityRequest $request)
    {
        $city = city::find($id);
        $city->fill($request->validated());
        $city->save();

        return $city;
    }
}
