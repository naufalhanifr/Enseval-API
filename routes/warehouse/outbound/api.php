<?php

use App\Http\Controllers\Warehouse\OutboundController;
use Illuminate\Support\Facades\Route;

Route::get("/", [OutboundController::class, 'find']);
Route::post("/", [OutboundController::class, 'create']);
Route::get("/{id}", [OutboundController::class, 'findOne']);
Route::delete("/{id}", [OutboundController::class, 'delete']);
Route::put("/{id}", [OutboundController::class, 'update']);
