<?php

use Illuminate\Support\Facades\Route;

Route::prefix('inbound')->group(__DIR__ . '/inbound/api.php');
Route::prefix('outbound')->group(__DIR__ . '/outbound/api.php');
Route::prefix('warehouse')->group(__DIR__ . '/warehouse/api.php');
Route::prefix('stock')->group(__DIR__ . '/stock/api.php');
Route::prefix('maintenance')->group(__DIR__ . '/maintenance/api.php');
