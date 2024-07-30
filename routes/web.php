<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('home');
Route::get('about', [\App\Http\Controllers\Frontend\AboutController::class, 'index'])->name('about');
Route::get('service', [\App\Http\Controllers\Frontend\ServiceController::class, 'index'])->name('service');
Route::get('news', [\App\Http\Controllers\Frontend\PostController::class, 'index'])->name('post.index');
Route::get('contact', [\App\Http\Controllers\Frontend\ContactController::class, 'index'])->name('contact');