<?php

use App\Http\Controllers\Site\PackageController;
use App\Http\Controllers\Site\TouristsController;
use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\Site\TourGuideController;
use App\Http\Controllers\Site\TourOperatorController;
use Illuminate\Support\Facades\Route;

Route::get('/profile', function () {
    return view('site.profile');
});

Route::prefix('tourist')->name('tourist.')->middleware(['auth:tourist', 'web'])->group(function () {
    Route::controller(TouristsController::class)->name('tourist.')->group(function () {
        Route::get('/', 'dashboard')->name('index');
        Route::post('connect', 'requestConnection')->name('connect');
        Route::get('/logout', 'logout')->name('logout');
    });
});

Route::get('/', [TouristsController::class, 'index']);
Route::get('/findCompanion', [SiteController::class, 'findCompanion']);

Route::get('/login', [SiteController::class, 'login']);
Route::get('/about', [SiteController::class, 'about']);
Route::get('/service', [SiteController::class, 'service']);
Route::get('/tour-guides', [SiteController::class, 'tour_guides']);
Route::get('/tour-operators', [SiteController::class, 'tour_operators']);
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
        Route::post('request-action', 'requestAction')->name('request-action');
    });
});

Route::prefix('touroperator')->name('touroperator.')->middleware(['auth:touroperator', 'web'])->group(function () {
    Route::controller(TourOperatorController::class)->name('operator.')->group(function () {
        Route::get('/', 'dashboard')->name('index');
        Route::get('edit', 'edit')->name('edit');
        Route::post('update', 'updateProfile')->name('update');
        Route::post('request-action', 'requestAction')->name('request-action');
    });
    Route::controller(PackageController::class)->prefix('package')->name('package.')->group(function () {
        Route::post('store', 'store')->name('store');
        Route::get('edit', 'edit')->name('edit');
        Route::post('update', 'update')->name('update');
        Route::post('destroy', 'destroy')->name('destroy');
    });
});
