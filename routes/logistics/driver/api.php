<?php

use App\Http\Controllers\Logistics\DriverController;
use Illuminate\Support\Facades\Route;

Route::get("/", [DriverController::class, 'find']);
Route::post("/", [DriverController::class, 'create']);
Route::get("/{id}", [DriverController::class, 'findOne']);
Route::delete("/{id}", [DriverController::class, 'delete']);
Route::put("/{id}", [DriverController::class, 'update']);
