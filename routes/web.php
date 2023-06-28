<?php

use App\Http\Controllers\Auth\LoginController;
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

// Login Route
Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');

Route::get('/test', function () {
    return view('test');
});

// Laravel/UI Package Route
Auth::routes([
    'register' => false
]);

// Auth Route
Route::group(['middleware' => ['auth']], function () {
    // Dashboard Route
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

    // Export Routes
    Route::get('atks/export-excel/', [PencatatanATKController::class, 'exportExcel'])->name('atks.export-excel');
    Route::get('atks/export-pdf/', [PencatatanATKController::class, 'exportPDF'])->name('atks.export-pdf');
    Route::get('surats/export-excel/', [SuratMasukController::class, 'exportExcel'])->name('surats.export-excel');
    Route::get('surats/export-pdf/', [SuratMasukController::class, 'exportPDF'])->name('surats.export-pdf');

    // Resources Routes
    Route::resource('surats', SuratMasukController::class);
    Route::resource('atks', PencatatanATKController::class);

    // Searchs Route
    Route::get('search/surats', [SuratMasukController::class, 'search'])->name('surats.search');
    Route::get('search/atks', [PencatatanATKController::class, 'search'])->name('atks.search');
});