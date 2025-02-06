<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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

Route::get('login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('login', [UserController::class, 'login']);

Route::middleware(['auth'] /*laravel tự động check theo cấu hình config/auth.php*/)->group(function () {
    Route::get('/', [UserController::class, 'dashboard'])->name('dashboard');
});

Route::prefix('admin')->group(function () {
    Route::get('login', [AdminController::class, 'showLoginForm'])->name('admin.login');
    Route::post('login', [AdminController::class, 'login']);

    Route::middleware(['auth:admin'] /*laravel tự động check theo cấu hình config/auth.php*/)->group(function () {
        Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    });
});
