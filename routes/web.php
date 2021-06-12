<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEnd\Logistik\DeliveryController;
use App\Http\Controllers\FrontEnd\Logistik\DriverController;
use App\Http\Controllers\FrontEnd\Logistik\ProductController;
use App\Http\Controllers\FrontEnd\Logistik\TrackingController;
use App\Http\Controllers\FrontEnd\Logistik\VehicleController;

use App\Http\Controllers\FrontEnd\Warehouse\OutboundController;
use App\Http\Controllers\FrontEnd\Warehouse\StockController;
use App\Http\Controllers\FrontEnd\Warehouse\WarehouseController;
use App\Http\Controllers\FrontEnd\Warehouse\MaintenanceController;
use App\Http\Controllers\FrontEnd\Warehouse\InboundController;

use App\Http\Controllers\FrontEnd\Financial\PengeluaranController;
use App\Http\Controllers\FrontEnd\Financial\PemasukanController;
use App\Http\Controllers\FrontEnd\HomeController;

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


Route::resource('home', HomeController::class);
Route::resource('warehouse', WarehouseController::class);
Route::resource('financial', FinancialController::class);

route::name('logistik.')->group(function () {
    Route::resource('driver', DriverController::class);
    Route::resource('product', ProductController::class);
    Route::resource('tracking', TrackingController::class);
    Route::resource('vehicle', VehicleController::class);
    Route::resource('delivery', DeliveryController::class);
});

route::name('warehouse.')->group(function () {
    Route::resource('inbound', InboundController::class);
    Route::resource('maintenance', MaintenanceController::class);
    Route::resource('warehouse', WarehouseController::class);
    Route::resource('outbound', OutboundController::class);
    Route::resource('stock', StockController::class);
});

route::name('financial.')->group(function () {
    Route::resource('pemasuakn', PemasukanController::class);
    Route::resource('pengeluaran', PengeluaranController::class);
});
