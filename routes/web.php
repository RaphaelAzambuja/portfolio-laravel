<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Site\AboutController;
use App\Http\Controllers\Site\BlogController;
use App\Http\Controllers\Site\ContactController;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('/about', AboutController::class)->name('about.index');
Route::get('/products', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/contact', ContactController::class)->name('contact.index');
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware('auth')->group(function () {
        Route::get('/', DashboardController::class)->name('index');
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

        Route::resource('services', ServiceController::class)
            ->except(['show'])
            ->names('services');
    });

    Route::middleware('guest')->group(function () {
        Route::get('/login', [AuthController::class, 'index'])->name('login');
        Route::post('/login', [AuthController::class, 'login'])->name('login.store');
    });
});
