<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;

Route::get('/', [AdminController::class, 'index'])
    ->name('admin.home');

    use App\Http\Controllers\Admin\ReservationsController;

    Route::get('/admin/reservations', [ReservationsController::class, 'recentReservations'])->name('admin.reservations.index');
