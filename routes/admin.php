<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;

Route::get('/', [AdminController::class, 'index'])
    ->name('admin.home');


