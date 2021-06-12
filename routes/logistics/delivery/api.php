<?php

use App\Http\Controllers\Logistics\DeliveryController;
use Illuminate\Support\Facades\Route;

Route::get("/", [DeliveryController::class, 'find']);
Route::post("/", [DeliveryController::class, 'create']);
Route::get("/{id}", [DeliveryController::class, 'findOne']);
Route::delete("/{id}", [DeliveryController::class, 'delete']);
Route::put("/{id}", [DeliveryController::class, 'update']);
