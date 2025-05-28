<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/campaign', function () {
    return view('campaign');
});
Route::get('/donasi', function () {
    return view('donasi');
});
Route::get('/zakat', function () {
    return view('zakat');
});

Route::get('/zakat/maal', function () {
    return view('zakat.maal');
});

Route::get('/zakat/income', function () {
    return view('zakat.income');
});

Route::get('/zakat/trade', function () {
    return view('zakat.trade');
});

Route::get('/zakat/gold', function () {
    return view('zakat.gold');
});

Route::get('/zakat/agricultural', function () {
    return view('zakat.agricultural');
    });

Route::get('/infaq', function (){
    return view('infaq');
});

Route::get('wakaf', function (){
    return view('wakaf');
    });

require __DIR__.'/auth.php';
