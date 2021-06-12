<?php

use App\Http\Controllers\Finance\IncomeController;
use Illuminate\Support\Facades\Route;

Route::get("/", [IncomeController::class, 'find']);
Route::post("/", [IncomeController::class, 'create']);
Route::get("/{id}", [IncomeController::class, 'findOne']);
Route::delete("/{id}", [IncomeController::class, 'delete']);
Route::put("/{id}", [IncomeController::class, 'update']);
