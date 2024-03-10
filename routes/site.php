<?php

use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('site.welcome');
});

Route::get('/about', function () {
    return 'This is about page.';
});

Route::get('/googleLogin', [SiteController::class, 'googleLogin']);
Route::get('/auth/google/callback', [SiteController::class, 'googleHandle']);