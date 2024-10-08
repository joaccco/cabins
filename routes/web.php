<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\Admin\PostController;

Route::get('/', [HomeController::class, 'index'])->name('home.index');

// Rutas para reservas
Route::post('/reservations', [HomeController::class, 'storeReservation'])->name('store.reservation');

Route::get('/about', function () {
    return view('about.index');
});

Route::get('/contact', function () {
    return view('contact.index');
});

Route::get('/posts', [PostsController::class, 'index'])->name('posts.index');
Route::get('/posts/{id}', [PostsController::class, 'show'])->name('posts.show');

Route::post('/comments', [CommentsController::class, 'store'])->name('comments.store');

use App\Http\Controllers\CabinsController;

Route::get('/cabins', [CabinsController::class, 'index'])->name('cabins.index');
Route::get('/cabins/{id}', [CabinsController::class, 'show'])->name('cabins.show');


// Grupo de rutas autenticadas
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('dashboard');
});



// Rutas de ADMIN
Route::get('/admin', function () {
    return view('admin.index');
});


use App\Http\Controllers\Admin\ReservationsController;
use App\Models\Post;

Route::get('/admin/recent-reservations', [ReservationsController::class, 'recentReservations'])->name('admin.recent-reservations');

/* use App\Http\Controllers\Admin\CabinsController; */

Route::get('/admin/cabins', [CabinsController::class, 'index'])->name('admin.cabins.index');

// Rutas para administrar cabañas
Route::get('/admin/cabins/create', [CabinsController::class, 'create'])->name('admin.create-cabin');
Route::post('/admin/cabins', [CabinsController::class, 'store'])->name('admin.store-cabin');

// Rutas para posts
Route::get('/admin/posts/create', [PostController::class, 'create'])->name('posts.create');

// Otras rutas para posts (como index, edit, show) pueden ir aquí
Route::get('/admin/posts', [PostController::class, 'index'])->name('posts.index');

Route::post('/admin/posts/store', [PostController::class, 'store'])->name('posts.store');
Route::get('/admin/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/admin/posts/{id}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/admin/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
