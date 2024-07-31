<?php

use Illuminate\Support\Facades\Route;

Route::name('admin.')->group(function () {

    Route::get('/', [\App\Http\Controllers\Backend\HomeController::class, 'index'])->name('dashboard');

    Route::get('district', [\App\Http\Controllers\Backend\DistrictController::class, 'index'])->name('district.index');
    Route::get('city', [\App\Http\Controllers\Backend\CityController::class, 'index'])->name('city.index');
});
