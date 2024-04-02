<?php

use App\Http\Controllers\Site\TouristsController;
use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\Site\TourGuideController;
use Illuminate\Support\Facades\Route;

Route::get('/profile', function () {
    return view('site.profile');
});

Route::group(['middleware' => 'tourist'], function () {
    Route::get('/about', function () {
        return 'This is about page.';
    });
});

Route::get('/', [TouristsController::class, 'index']);
Route::get('/findCompanion', [SiteController::class, 'findCompanion']);

Route::get('/login', [SiteController::class, 'login']);
Route::get('/about', [SiteController::class, 'about']);
Route::get('/service', [SiteController::class, 'service']);
Route::get('/packages', [SiteController::class, 'packages']);
Route::get('/contact', [SiteController::class, 'contact']);

Route::get('/googleLogin', [TouristsController::class, 'googleLogin']);
Route::get('/auth/google/callback', [TouristsController::class, 'googleHandle']);

Route::controller(SiteController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::get('/logout', 'logout')->name('logout');
    Route::post('/post-signup', 'signUp')->name('post-signup');
    Route::post('/post-login', 'postLogin')->name('post-login');
    Route::get('get-tourguide', 'getTourGuide')->name('get-tourguide');
});
Route::prefix('tourguide')->name('tourguide.')->middleware(['auth:tourguard', 'web'])->group(function () {
    Route::controller(TourGuideController::class)->name('guide.')->group(function () {
        Route::get('/', 'dashboard')->name('index');
        Route::get('edit', 'edit')->name('edit');
        Route::post('update', 'updateProfile')->name('update');
    });
});
