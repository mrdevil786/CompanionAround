<?php

use App\Http\Controllers\TourGuideController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Web\AuthController;
use App\Http\Controllers\Web\BasicController;
use App\Http\Controllers\Web\TouristsController;
use App\Http\Controllers\Web\TourOperatorController;

Route::prefix('admin')->middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'loginView'])->name('view.login');
    Route::post('/login', [AuthController::class, 'login'])->name('submit.login');
});

Route::prefix('admin')->name('admin.')->middleware(['auth:sanctum', 'web', 'checkAdminStatus'])->group(function () {

    Route::get('/', [BasicController::class, 'dashboard'])->name('dashboard');
    Route::get('logout', [AuthController::class, 'logout'])->name('user.logout');

    Route::middleware('admin')->group(function () {

        Route::prefix('users')->name('users.')->group(function () {
            Route::get('/{id}/destroy', [UsersController::class, 'destroy'])->name('destroy');
            Route::put('status', [UsersController::class, 'status'])->name('status');
        });

        Route::prefix('tourists')->name('tourists.')->group(function () {
            Route::get('/{id}/destroy', [TouristsController::class, 'destroy'])->name('destroy');
            Route::put('status', [TouristsController::class, 'status'])->name('status');
            Route::get('profile/{id}', [TouristsController::class, 'profile'])->name('profile');
        });

        Route::prefix('touroperators')->name('touroperators.')->group(function () {
            Route::get('/{id}/destroy', [TourOperatorController::class, 'destroy'])->name('destroy');
            Route::put('status', [TourOperatorController::class, 'status'])->name('status');
        });

        Route::controller(TourGuideController::class)->prefix('tourguides')->name('tourguides.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('profile/{id}', 'profile')->name('profile');
            Route::get('/{id}/destroy', 'destroy')->name('destroy');
            Route::put('status', 'status')->name('status');
        });
    });

    Route::middleware('manager')->group(function () {

        Route::prefix('users')->name('users.')->group(function () {
            Route::post('store', [UsersController::class, 'store'])->name('store');
            Route::get('edit/{id}', [UsersController::class, 'edit'])->name('edit');
            Route::put('update/{id}', [UsersController::class, 'update'])->name('update');
        });

        Route::prefix('tourists')->name('tourists.')->group(function () {
            Route::post('store', [TouristsController::class, 'store'])->name('store');
            Route::get('edit/{id}', [TouristsController::class, 'edit'])->name('edit');
            Route::put('update/{id}', [TouristsController::class, 'update'])->name('update');
        });

        Route::prefix('touroperators')->name('touroperators.')->group(function () {
            Route::post('store', [TourOperatorController::class, 'store'])->name('store');
            Route::get('edit/{id}', [TourOperatorController::class, 'edit'])->name('edit');
            Route::put('update/{id}', [TourOperatorController::class, 'update'])->name('update');
        });
    });

    Route::middleware('member')->group(function () {

        Route::prefix('users')->name('users.')->group(function () {
            Route::get('/', [UsersController::class, 'index'])->name('index');
            Route::get('profile/{id}', [UsersController::class, 'profile'])->name('profile');
        });

        Route::prefix('tourists')->name('tourists.')->group(function () {
            Route::get('/', [TouristsController::class, 'index'])->name('index');
            Route::get('profile/{id}', [TouristsController::class, 'profile'])->name('profile');
        });

        Route::prefix('touroperators')->name('touroperators.')->group(function () {
            Route::get('/', [TourOperatorController::class, 'index'])->name('index');
            Route::get('profile/{id}', [TourOperatorController::class, 'profile'])->name('profile');
        });
    });
});

// Route::name('users.')
//     ->prefix('users')
//     ->controller(UsersController::class)->group(function () {
//         Route::get('/', 'index')->name('index');
//         Route::get('blocked', 'index')->name('blocked');
//         Route::get('deleted', 'index')->name('deleted');
//         Route::post('store', 'store')->name('store');
//         Route::get('edit/{id}', "edit")->name('edit');
//         Route::delete('/{id}', 'destroy')->name('destroy');
//         Route::post('update', 'update')->name('update');
//         Route::put('status', 'status')->name('status');
//         Route::get('view/{id}', 'showUser')->name('show');
//     });
