<?php

use App\Http\Controllers\Logistics\VehicleController;
use Illuminate\Support\Facades\Route;

Route::get('/', [VehicleController::class, 'find']);
Route::post('/', [VehicleController::class, 'create']);
Route::get('/{id}', [VehicleController::class, 'findOne']);
Route::put('/{id}', [VehicleController::class, 'update']);
Route::delete('/{id}', [VehicleController::class, 'delete']);
