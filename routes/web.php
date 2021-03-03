<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\TvController;
use App\Http\Controllers\PrinterController;
use App\Http\Controllers\XboxController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resources([
    'vehicles'=> VehicleController::class,
]);
Route::resources([
    'phones'=> PhoneController::class,
]);
Route::resources([
    'tvs'=> TvController::class,
]);
Route::resources([
    'printers'=> PrinterController::class,
]);
Route::resources([
    'xboxes'=> XboxController::class,
]);