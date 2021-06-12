<?php

use App\Http\Controllers\Finance\ReportController;
use Illuminate\Support\Facades\Route;

Route::get("/", [ReportController::class, 'find']);
Route::post("/", [ReportController::class, 'create']);
Route::get("/{id}", [ReportController::class, 'findOne']);
Route::delete("/{id}", [ReportController::class, 'delete']);
Route::put("/{id}", [ReportController::class, 'update']);
