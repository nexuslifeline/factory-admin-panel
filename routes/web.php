<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FactoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/factories', function () {
//     return view('factories');
// })->middleware(['auth', 'verified'])->name('factories');

// Route::get('/employees', function () {
//     return view('employees');
// })->middleware(['auth', 'verified'])->name('employees');


Route::resource('factories', FactoryController::class);
Route::resource('employees', EmployeeController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('factories', FactoryController::class);
    Route::resource('employees', EmployeeController::class);
});

require __DIR__ . '/auth.php';
