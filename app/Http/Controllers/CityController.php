<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{

    public function cityByState(string $state): string
    {
        $city = new City();
        return $city->getCityByState($state);
    }
}
