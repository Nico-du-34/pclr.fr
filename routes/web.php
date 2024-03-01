<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\AutoController;

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
// Route::get('/auto', [SiteController::class, 'auto'])->name('auto');
Route::get('/immobilier', [SiteController::class, 'immobilier'])->name('immobilier');


Route::get('/autos', [AutoController::class, 'index'])->name('autos');