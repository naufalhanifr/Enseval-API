<?php

use Illuminate\Support\Facades\Route;

Route::prefix('product')->group(__DIR__ . '/product/api.php');
Route::prefix('user')->group(__DIR__ . '/user/api.php');
