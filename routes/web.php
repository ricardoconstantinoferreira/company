<?php

use Illuminate\Support\Facades\Route;
use App\Models\City;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CustomersController;

Route::get('/home', function () {
    return view('home', ['name' => 'Ricardo']);
});

Route::get('/representante', function() {
    $city = new City();

    return view('representante', [
        'states' => $city->getStates()
    ]);
});

Route::get('/city/{state}', [CityController::class, 'cityByState']);
Route::get('/customers/search/', [CustomersController::class, 'search']);

Route::resource('customers', CustomersController::class)->only(['store', 'index']);

