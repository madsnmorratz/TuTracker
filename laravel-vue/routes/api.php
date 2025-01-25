<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\TransportUnitController;

Route::get('/transport-units', [TransportUnitController::class, 'index']);

Route::post('/transport-units', [TransportUnitController::class, 'store']);

Route::get('/transport-units-trailer', [TransportUnitController::class, 'getTrailer']);

Route::get('/transport-units-truck', [TransportUnitController::class, 'getTruck']);
