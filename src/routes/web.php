<?php

use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController as AdminUserController;

Route::get('/', [\App\Http\Controllers\PostController::class, 'index'])->name('home');
Route::get('/post/{slug}', [\App\Http\Controllers\PostController::class, 'show'])->name('posts.single');
Route::get('/managers', [\App\Http\Controllers\PostController::class, 'show'])->name('managers');

Route::middleware('guest')->group(function () {
    Route::get('/login', [UserController::class, 'login'])->name('login');
    Route::post('/login', [UserController::class, 'authenticate'])->name('login.authenticate');
});

Route::middleware('auth')->group(function () {
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
});

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/', [MainController::class, 'index'])->name('admin.main.index');

    Route::resource('categories', CategoryController::class);
    Route::get('posts/basket', [PostController::class, 'basket'])->name('admin.posts.basket');
    Route::get('posts/basket/{post}/restore', [PostController::class, 'basketRestore'])->name('admin.posts.basket.restore');
    Route::delete('posts/basket/{post}/destroy', [PostController::class, 'basketRemove'])->name('admin.posts.basket.destroy');
    Route::resource('posts', PostController::class);
    Route::resource('tags', TagController::class);
    Route::resource('users', AdminUserController::class);
});
