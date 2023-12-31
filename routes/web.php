<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StolenAvtoController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\ExportToExcelController;



use App\Http\Controllers\AutomaticUpdateController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//Auth::routes();

Auth::routes(['verify' => true]);

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('/add-to-stolen-avto', StolenAvtoController::class)
    ->only(['create', 'store', 'edit', 'destroy', 'update']);

Route::get('/search', [SearchController::class, 'index'])->name('search');

Route::get('/filter', [FilterController::class, 'index'])->name('filter');

Route::get('/export/excel', [ExportToExcelController::class, 'exportToStolenCar'])->name('export.excel');