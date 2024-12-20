<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

/*
Route::get('/', function () {
    //return 'Hello World'; //ovo se ispisati samo hello world na plain sajtu
    return view('welcome');
});
*/

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
/*
Route::get('cars', function () {
    return view('cars.index');
})->middleware(['auth', 'verified'])->get('cars', [CarController::class,'index'])->name('cars');
*/

Route::get('/cars', [CarController::class, 'index'])->middleware(['auth', 'verified'])->name('cars');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
