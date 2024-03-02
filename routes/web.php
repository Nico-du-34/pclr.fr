<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', [SiteController::class, 'index'])->name('home');
Route::get('/reglement', [SiteController::class, 'reglement'])->name('reglement');
Route::get('/entreprise', [SiteController::class, 'entreprise'])->name('entreprise');

Route::get('/immobilier', [SiteController::class, 'immobilier'])->name('immobilier');


Route::get('/autos', [SiteController::class, 'auto'])->name('autos');

