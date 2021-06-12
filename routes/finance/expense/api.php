<?php

use App\Http\Controllers\Finance\ExpenseController;
use Illuminate\Support\Facades\Route;

Route::get("/", [ExpenseController::class, 'find']);
Route::post("/", [ExpenseController::class, 'create']);
Route::get("/{id}", [ExpenseController::class, 'findOne']);
Route::delete("/{id}", [ExpenseController::class, 'delete']);
Route::put("/{id}", [ExpenseController::class, 'update']);
