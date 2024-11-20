<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');


// Route::get('/about', function () {})->name('about');
Route::get('/doctor', function () {})->name('doctor');
Route::get('/news', function () {})->name('news');
Route::get('/contact', function () {})->name('contact');


Route::middleware('guest')
    ->group(function () {
        Route::get('login', [AuthController::class, 'login'])
            ->name('login');
        Route::post('login', [AuthController::class, 'auth'])
            ->name('login');

        Route::get('register', [AuthController::class, 'register'])
            ->name('register');
        Route::post('register', [AuthController::class, 'new'])
            ->name('register');
    });


Route::get('/admin', [DashboardController::class, 'index'])->name('admin');
