<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\IngleController;
use App\Http\Controllers\ItalianoController;

Route::get('',[AdminController::class, 'index'])->name('home');

Route::resource('posts', PostController::class)->names('posts'); 

Route::resource('servicios', ServicioController::class)->names('servicios'); 

Route::resource('ingles', IngleController::class)->names('servicios-ingles'); 

Route::resource('italiano', ItalianoController::class)->names('servicios-italiano'); 