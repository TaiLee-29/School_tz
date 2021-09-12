<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::post('/',[\App\Http\Controllers\AuthController::class, 'handleLogin'])->name('handle-login');

Route::middleware('auth')->group(function() {
    Route::get('/auth/logout',[\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
    Route::resources([
        'schools' => \App\Http\Controllers\SchoolController::class,
        'employees' => \App\Http\Controllers\EmployeeController::class,
    ]);
});
