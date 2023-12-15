<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\VisitorController;
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

/* Handle login Request */
Route::name('Login.')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('index');
    Route::post('/login-cek', [LoginController::class, 'loginCek'])->name('loginCek');
    Route::post('/login-destroy', [LoginController::class, 'login_destroy'])->name('login_destroy');
});

/* Handle For Tamu Submit Form To Visit */
Route::name('Visitor.')->group(function () {
    Route::get('/', [VisitorController::class, 'index'])->name('index');
    Route::get('/visitor-store', [VisitorController::class, 'loginCek'])->name('loginCek');
});

/* Handle Dashboard */
Route::name('Dashboard.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('index');
    Route::get('/visitor/data', [DashboardController::class, 'loginCek'])->name('loginCek');
});
