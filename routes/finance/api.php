<?php

use Illuminate\Support\Facades\Route;

Route::prefix('expense')->group(__DIR__ . '/expense/api.php');
Route::prefix('income')->group(__DIR__ . '/income/api.php');
Route::prefix('report')->group(__DIR__ . '/report/api.php');
