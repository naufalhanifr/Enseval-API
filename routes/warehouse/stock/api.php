<?php

use App\Http\Controllers\Warehouse\StockController;
use Illuminate\Support\Facades\Route;

Route::get("/", [StockController::class, 'find']);
Route::post("/", [StockController::class, 'create']);
Route::get("/{id}", [StockController::class, 'findOne']);
Route::delete("/{id}", [StockController::class, 'delete']);
Route::put("/{id}", [StockController::class, 'update']);
