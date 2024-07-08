<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StateController;

Route::get('/home', function () {
    return view('home', ['name' => 'Ricardo']);
});

Route::get('/cliente', function() {

    $object = new StateController();
    $states = $object->getList();

    return view('cliente', [
        'states' => $states
    ]);
});

Route::get('/representante', function() {
    return view('representante', []);
});

Route::get('/state', [StateController::class, 'getList']);
