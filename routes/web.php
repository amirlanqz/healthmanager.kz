<?php

use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController as AdminUserController;

Route::get('/', [\App\Http\Controllers\PostController::class, 'index'])->name('home');
Route::get('/post/{slug}', [\App\Http\Controllers\PostController::class, 'show'])->name('posts.single');
Route::get('/posts/all', [\App\Http\Controllers\PostController::class, 'allPosts'])->name('posts.all');
Route::get('/membership', [\App\Http\Controllers\MembershipController::class, 'choose'])->name('membership.store');
Route::get('/membership/form', [\App\Http\Controllers\MembershipController::class, 'showForm'])->name('membership.form');
Route::post('/membership/submit', [\App\Http\Controllers\MembershipController::class, 'submit'])->name('membership.submit');
Route::get('/membership/success', [\App\Http\Controllers\MembershipController::class, 'success'])->name('membership.success');

Route::get('/forum/form', [ForumController::class, 'showForm'])->name('forum.form');
Route::post('/forum/apply', [ForumController::class, 'apply'])->name('forum.apply');



Route::get('/managers', [\App\Http\Controllers\PostController::class, 'show'])->name('managers');
Route::get('/manager/all', [\App\Http\Controllers\ManagerFrontController::class, 'show'])->name('all.managers');

Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::post('/contact/send', [\App\Http\Controllers\ContactController::class, 'send'])->name('contact.send');


Route::middleware('guest')->group(function () {
    Route::get('/login', [UserController::class, 'login'])->name('login');
    Route::post('/login', [UserController::class, 'authenticate'])->name('login.authenticate');

    Route::get('/register', [\App\Http\Controllers\Admin\RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [\App\Http\Controllers\Admin\RegisterController::class, 'register']);
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
    Route::resource('manager', \App\Http\Controllers\Admin\ManagerController::class);
});
