<?php

use App\Http\Controllers\Site\TouristsController;
use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'tourist'], function () {
    Route::get('/about', function () {
        return 'This is about page.';
    });
});

Route::get('/', [TouristsController::class, 'index']);
Route::get('/findCompanion', [SiteController::class, 'findCompanion']);
Route::get('/login', [SiteController::class, 'login']);
Route::get('/googleLogin', [TouristsController::class, 'googleLogin']);
Route::get('/auth/google/callback', [TouristsController::class, 'googleHandle']);
