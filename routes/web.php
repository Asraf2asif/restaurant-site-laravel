<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\FoodMenuController;
use App\Http\Controllers\SpecialDishController;
use App\Http\Controllers\TestimonialController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* home */
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('index');
});

/* Admin */
Route::controller(AdminController::class)->group(function () {
    Route::get('/admin/dashboard', 'index')->name('admin.index');
});

/* User */
Route::controller(UserController::class)->group(function () {
    Route::get('/admin/user', 'index')->name('user.index');
    Route::delete('/admin/user/del/{id}', 'destroy')->name('user.destroy');
});

/* Reservation */
Route::controller(ReservationController::class)->group(function () {
    Route::get('/admin/reservation', 'index')->name('reservation.index');
    Route::post('/reservation/store', 'store')->name('reservation.store');
});

/* Food Menu */
Route::controller(FoodMenuController::class)->group(function () {
    Route::get('/foodmenu', 'index')->name('foodmenu.index');
    Route::get('/foodmenu/create', 'create')->name('foodmenu.create');
    Route::get('/foodmenu/edit/{id}', 'edit')->name('foodmenu.edit');
    Route::post('/admin/foodmenu/store', 'store')->name('foodmenu.store');
    Route::put('/admin/foodmenu/update/{id}', 'update')->name('foodmenu.update');
    Route::delete('/admin/foodmenu/del/{id}', 'destroy')->name('foodmenu.destroy');
});

/* Special Dish */
Route::controller(SpecialDishController::class)->group(function () {
    Route::get('/spdish', 'index')->name('spdish.index');
    Route::get('/spdish/create', 'create')->name('spdish.create');
    Route::get('/spdish/edit/{id}', 'edit')->name('spdish.edit');
    Route::post('/admin/spdish/store', 'store')->name('spdish.store');
    Route::put('/admin/spdish/update/{id}', 'update')->name('spdish.update');
    Route::delete('/admin/spdish/del/{id}', 'destroy')->name('spdish.destroy');
});

/* Testimonial */
Route::controller(TestimonialController::class)->group(function () {
    Route::get('/review', 'index')->name('review.index');
    Route::get('/review/create', 'create')->name('review.create');
    Route::get('/review/edit/{id}', 'edit')->name('review.edit');
    Route::post('/admin/review/store', 'store')->name('review.store');
    Route::put('/admin/review/update/{id}', 'update')->name('review.update');
    Route::delete('/admin/review/del/{id}', 'destroy')->name('review.destroy');
});

/* jetstream auth */
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
