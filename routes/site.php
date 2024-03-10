<?php

use App\Http\Controllers\Site\TouristsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('site.welcome');
});

Route::get('/about', function () {
    return 'This is about page.';
});

Route::get('/googleLogin', [TouristsController::class, 'googleLogin']);
Route::get('/auth/google/callback', [TouristsController::class, 'googleHandle']);