<?php

use App\Http\Controllers\Warehouse\InboundController;
use Illuminate\Support\Facades\Route;

Route::get("/", [InboundController::class, 'find']);
Route::post("/", [InboundController::class, 'create']);
Route::get("/{id}", [InboundController::class, 'findOne']);
Route::delete("/{id}", [InboundController::class, 'delete']);
Route::put("/{id}", [InboundController::class, 'update']);
