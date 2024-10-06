<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservationsController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/reservations', [ReservationsController::class, 'index']);


/* Rutas de ADMIN */
Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/about', function () {
    return view('about.index');
});

Route::get('/contact', function () {
    return view('contact.index');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/', function () {
        return view('home.index');
    })->name('dashboard');
});
