<?php

use Illuminate\Support\Facades\Route;

Route::prefix('delivery')->group(__DIR__ . '/delivery/api.php');
Route::prefix('driver')->group(__DIR__ . '/driver/api.php');
Route::prefix('product')->group(__DIR__ . '/product/api.php');
Route::prefix('track')->group(__DIR__ . '/track/api.php');
Route::prefix('vehicle')->group(__DIR__ . '/vehicle/api.php');
