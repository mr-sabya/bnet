<?php

use Illuminate\Support\Facades\Route;

Route::name('admin.')->group(function () {

    Route::get('/login', [App\Http\Controllers\Backend\AuthController::class, 'showLoginForm'])->name('login');
    Route::group(['middleware' => 'adminauth'], function () {

        Route::get('/', [\App\Http\Controllers\Backend\HomeController::class, 'index'])->name('dashboard');

        Route::get('district', [\App\Http\Controllers\Backend\DistrictController::class, 'index'])->name('district.index');
        Route::get('city', [\App\Http\Controllers\Backend\CityController::class, 'index'])->name('city.index');
        Route::get('ftp-server', [\App\Http\Controllers\Backend\FtpController::class, 'index'])->name('ftp.index');
        Route::get('live-tv', [\App\Http\Controllers\Backend\LiveTvController::class, 'index'])->name('livetv.index');
        Route::get('package', [\App\Http\Controllers\Backend\PackageController::class, 'index'])->name('package.index');
    });
});
