<?php

use App\Http\Controllers\Site\TouristController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('site.welcome');
});

Route::get('/about', function () {
    return 'This is about page.';
});

Route::get('/googleLogin', [TouristController::class, 'googleLogin']);
Route::get('/auth/google/callback', [TouristController::class, 'googleHandle']);