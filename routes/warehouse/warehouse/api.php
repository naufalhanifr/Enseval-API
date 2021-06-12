<?php

use App\Http\Controllers\Warehouse\WarehouseController;
use Illuminate\Support\Facades\Route;

Route::get("/", [WarehouseController::class, 'find']);
Route::post("/", [WarehouseController::class, 'create']);
Route::get("/{id}", [WarehouseController::class, 'findOne']);
Route::delete("/{id}", [WarehouseController::class, 'delete']);
Route::put("/{id}", [WarehouseController::class, 'update']);
