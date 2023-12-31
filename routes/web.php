<?php

use App\Models\Dashboard;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SourceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Home\ItemController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\FacilitiesController;
use App\Http\Controllers\ItemInstanceController;
use App\Http\Controllers\UsersProfileController;
use App\Http\Controllers\Home\CategoryController;

Route::view('/', 'welcome');

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');

    Route::controller(AdminController::class)->group(function () {
        Route::get('/admin/logout', 'destroy')->name('admin.logout');
        Route::get('/admin/profile', 'profile')->name('admin.profile');
        Route::get('/edit/profile', 'EditProfile')->name('edit.profile');
        Route::post('/store/profile', 'StoreProfile')->name('store.profile');

        Route::get('/change/password', 'ChangePassword')->name('change.password');
        Route::post('/update/password', 'UpdatePassword')->name('update.password');
    });

    //CategoryController
    Route::controller(CategoryController::class)->prefix('category')->group(function () {
        Route::resource('category', CategoryController::class);
    });

    //ItemController
    Route::controller(ItemController::class)->prefix('item')->group(function () {
        Route::resource('item', ItemController::class);
    });

    //ItemInstanceController
    Route::controller(ItemInstanceController::class)->prefix('instance')->group(function () {
        Route::resource('instance', ItemInstanceController::class);
    });

    //UsersProfileController
    Route::controller(UsersProfileController::class)->prefix('users')->group(function () {
        Route::resource('users', UsersProfileController::class);
    });

    //DepartmentController
    Route::controller(DepartmentController::class)->prefix('department')->group(function () {
        Route::resource('department', DepartmentController::class);
    });

    //FacilitiesController
    Route::controller(FacilitiesController::class)->prefix('facilities')->group(function () {
        Route::resource('facilities', FacilitiesController::class);
    });

    //SourceController
    Route::controller(SourceController::class)->prefix('source')->group(function () {
        Route::resource('source', SourceController::class);
    });

    //DashboardController
    Route::controller(Dashboard::class)->group(function () {
    });
});

require __DIR__ . '/auth.php';
