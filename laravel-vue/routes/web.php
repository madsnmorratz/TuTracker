<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\TransportUnitController;

Route::get('/', function () {
    return view('welcome',);
});


Route::get('/{pathMatch}', function () {
    return view('welcome');
})->where('pathMatch','.*');
