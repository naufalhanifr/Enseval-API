<?php

use App\Http\Controllers\Warehouse\MaintenanceController;
use Illuminate\Support\Facades\Route;

Route::get("/", [MaintenanceController::class, 'find']);
Route::post("/", [MaintenanceController::class, 'create']);
Route::get("/{id}", [MaintenanceController::class, 'findOne']);
Route::delete("/{id}", [MaintenanceController::class, 'delete']);
Route::put("/{id}", [MaintenanceController::class, 'update']);
