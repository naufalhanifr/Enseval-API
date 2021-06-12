<?php

use App\Http\Controllers\Logistics\TrackController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TrackController::class, 'find']);
Route::post('/', [TrackController::class, 'create']);
Route::get('/{id}', [TrackController::class, 'findOne']);
Route::put('/{id}', [TrackController::class, 'update']);
Route::delete('/{id}', [TrackController::class, 'delete']);
