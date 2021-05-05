<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\TvController;
use App\Http\Controllers\PrinterController;
use App\Http\Controllers\XboxController;
use App\Http\Controllers\UserController;


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
Route::get('/xboxes/import', [XboxController::class, 'import'])->name('/xboxes/import');
Route::post('/xboxes/importData', [XboxController::class, 'importData'])->name('/xboxes/importData');
Route::get('/users/import', [UserController::class, 'import'])->name('/users/import');
Route::post('/users/importData', [UserController::class, 'importData'])->name('/users/importData');
Route::get('/tvs/import', [TvController::class, 'import'])->name('/tvs/import');
Route::post('/tvs/importData', [TvController::class, 'importData'])->name('/tvs/importData');
Route::get('/users/import', [UserController::class, 'import'])->name('/users/import');
Route::post('/users/importData', [UserController::class, 'importData'])->name('/users/importData');
Route::get('/printers/import', [PrinterController::class, 'import'])->name('/printers/import');
Route::post('/printers/importData', [PrinterController::class, 'importData'])->name('/printers/importData');
Route::get('/users/import', [UserController::class, 'import'])->name('/users/import');
Route::post('/users/importData', [UserController::class, 'importData'])->name('/users/importData');
Route::get('/phones/import', [PhoneController::class, 'import'])->name('/phones/import');
Route::post('/phones/importData', [PhoneController::class, 'importData'])->name('/phones/importData');
Route::get('/users/import', [UserController::class, 'import'])->name('/users/import');
Route::post('/users/importData', [UserController::class, 'importData'])->name('/users/importData');
Route::get('/xboxes/exportToXlsx', [XboxController::class, 'exportToXlsx'])->name('/xboxes/exportToXlsx');
Route::get('/tvs/exportToXlsx', [TvController::class, 'exportToXlsx'])->name('/tvs/exportToXlsx');
Route::get('/printers/exportToXlsx', [PrinterController::class, 'exportToXlsx'])->name('/printers/exportToXlsx');
Route::get('/users/exportToXlsx', [UserController::class, 'exportToXlsx'])->name('/users/exportToXlsx');
Route::get('/phones/exportToXlsx', [PhoneController::class, 'exportToXlsx'])->name('/phones/exportToXlsx');
Route::get('/xboxes/cards', [XboxController::class, 'cards'])->name('/xboxes/cards');
Route::get('/tvs/cards', [TvController::class, 'cards'])->name('/tvs/cards');
Route::get('/printers/cards', [PrinterController::class, 'cards'])->name('/printers/cards');
Route::get('/phones/cards', [PhoneController::class, 'cards'])->name('/phones/cards');
Route::get('/phones/chart', [PhoneController::class, 'chart'])->name('/phones/chart');
Route::get('/printers/chart', [PrinterController::class, 'chart'])->name('/printers/chart');
Route::get('/tvs/chart', [TvController::class, 'chart'])->name('/tvs/chart');
Route::get('/xboxes/chart', [XboxController::class, 'chart'])->name('/xboxes/chart');
Route::get('/exportPhonesToCSV', [PhoneController::class, 'exportPhonesToCSV' ])-> name('/exportPhonesToCSV');
Route::get('/exportPrintersToCSV', [PrinterController::class, 'exportPrintersToCSV' ])-> name('/exportPrintersToCSV');
Route::get('/exportTvsToCSV', [TvController::class, 'exportTvsToCSV' ])-> name('/exportTvsToCSV');
Route::get('/exportXboxesToCSV', [XboxController::class, 'exportXboxesToCSV' ])-> name('/exportXboxesToCSV');



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
        'users'=> UserController::class,
       

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
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
