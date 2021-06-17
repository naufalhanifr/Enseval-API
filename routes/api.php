<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Logistik\DeliveryController;
use App\Http\Controllers\API\Logistik\DriverController;
use App\Http\Controllers\API\Logistik\ProductController;
use App\Http\Controllers\API\Logistik\TrackingController;
use App\Http\Controllers\API\Logistik\VehicleController;

use App\Http\Controllers\API\Warehouse\OutboundController;
use App\Http\Controllers\API\Warehouse\StockController;
use App\Http\Controllers\API\Warehouse\WarehouseController;
use App\Http\Controllers\API\Warehouse\OperationalController;
use App\Http\Controllers\API\Warehouse\MaintenanceController;
use App\Http\Controllers\API\Warehouse\InboundController;

use App\Http\Controllers\API\Financial\PengeluaranController;
use App\Http\Controllers\API\Financial\PemasukanController;
use App\Http\Controllers\API\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('auth:API')->get('/user', function (Request $request) {
    return $request->user();
});

Route::APIResource('delivery', DeliveryController::class);
Route::APIResource('driver', DriverController::class);

Route::resource('home', HomeController::class);
Route::resource('warehouse', WarehouseController::class);
Route::resource('financial', FinancialController::class);
