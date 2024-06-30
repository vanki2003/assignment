<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\LoginController;

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

Route::get('/manufacturers', [ManufacturerController::class, 'show']);
Route::get('/', [ManufacturerController::class, 'welcome']);

    Route::get('/cars', [CarController::class, 'index'])->name('cars.index');
    Route::get('/cars/create', [CarController::class, 'create'])->name('cars.create')->middleware('auth');
    Route::post('/cars', [CarController::class, 'store'])->name('cars.store')->middleware('auth');
    Route::get('/cars/{id}', [CarController::class, 'show'])->name('cars.show');
    Route::get('/cars/{id}/edit', [CarController::class, 'edit'])->name('cars.edit')->middleware('auth');
    Route::put('/cars/{id}', [CarController::class, 'update'])->name('cars.update')->middleware('auth');
    Route::delete('/cars/{id}', [CarController::class, 'destroy'])->name('cars.destroy')->middleware('auth');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);



