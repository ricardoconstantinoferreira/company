<?php

use Illuminate\Support\Facades\Route;
use App\Models\City;

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

Route::get('/state', [StateController::class, 'getList']);
