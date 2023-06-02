<?php

use App\Http\Controllers\PencatatanATKController;
use App\Http\Controllers\SuratMasukController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Route::resource('surats', SuratMasukController::class);
Route::resource('atks', PencatatanATKController::class); 
Route::get('search/surats', [SuratMasukController::class, 'search'])->name('surats.search');
Route::get('search/atks', [PencatatanATKController::class, 'search'])->name('atks.search');