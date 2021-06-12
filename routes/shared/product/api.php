<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'find']);
Route::post('/', [ProductController::class, 'create']);
Route::get('/{id}', [ProductController::class, 'findOne']);
Route::put('/{id}', [ProductController::class, 'update']);
Route::delete('/{id}', [ProductController::class, 'delete']);
