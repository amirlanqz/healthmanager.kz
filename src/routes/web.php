<?php

use App\Http\Controllers\Admin\MainController;
use Illuminate\Support\Facades\Route;



Route::get('/admin', [MainController::class,  'index'])->name('admin.main.index');
