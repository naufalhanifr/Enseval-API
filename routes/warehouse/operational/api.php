<?php

use App\Http\Controllers\Warehouse\OperationalController;
use Illuminate\Support\Facades\Route;

Route::get("/", [OperationalController::class, 'find']);
Route::post("/", [OperationalController::class, 'create']);
Route::get("/{id}", [OperationalController::class, 'findOne']);
Route::delete("/{id}", [OperationalController::class, 'delete']);
Route::put("/{id}", [OperationalController::class, 'update']);
