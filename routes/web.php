<?php

use Illuminate\Support\Facades\Route;
use App\Models\City;
use App\Http\Controllers\CityController;

Route::get('/home', function () {
    return view('home', ['name' => 'Ricardo']);
});

Route::get('/cliente', function() {
    $city = new City();

    return view('cliente', [
        'states' => $city->getStates()
    ]);
});

Route::get('/representante', function() {
    $city = new City();

    return view('representante', [
        'states' => $city->getStates()
    ]);
});

Route::get('/city/{state}', [CityController::class, 'cityByState']);

