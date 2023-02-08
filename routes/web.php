<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FoodMenuController;
use App\Http\Controllers\SpecialDishController;

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
    Route::get('/', 'homeCtr@index')->name('index');
    Route::post('/reservation/create', 'ReservationCtr@create')->name('reservation.create');
});

/* Admin */
Route::controller(AdminController::class)->group(function () {
    Route::get('/admin/index', 'AdminCtr@index')->name('admin.index');
    Route::get('/admin/userlist', 'UserCtr@list')->name('user.list');
    Route::delete('/admin/deleteuser/{id}', 'UserCtr@destroy')->name('user.destroy');
    Route::get('/admin/reservation/list', 'ReservationCtr@list')->name('reservation.list');
});

/* Food Menu */
Route::controller(FoodMenuController::class)->group(function () {
    Route::get('/foodmenu/list', 'FoodMenuCtr@list')->name('foodmenu.list');
    Route::get('/foodmenu/create', 'FoodMenuCtr@create')->name('foodmenu.create');
    Route::get('/foodmenu/edit/{id}', 'FoodMenuCtr@edit')->name('foodmenu.edit');
    Route::post('/admin/foodmenu/store', 'FoodMenuCtr@store')->name('foodmenu.store');
    Route::put('/admin/foodmenu/update/{id}', 'FoodMenuCtr@update')->name('foodmenu.update');
    Route::delete('/admin/foodmenu/del/{id}', 'FoodMenuCtr@destroy')->name('foodmenu.destroy');
});

/* Special Dish */
Route::controller(SpecialDishController::class)->group(function () {
    Route::get('/spdish/list', 'SpDishCtr@list')->name('spdish.list');
    Route::get('/spdish/create', 'SpDishCtr@create')->name('spdish.create');
    Route::get('/spdish/edit/{id}', 'SpDishCtr@edit')->name('spdish.edit');
    Route::post('/admin/spdish/store', 'SpDishCtr@store')->name('spdish.store');
    Route::put('/admin/spdish/update/{id}', 'SpDishCtr@update')->name('spdish.update');
    Route::delete('/admin/spdish/del/{id}', 'SpDishCtr@destroy')->name('spdish.destroy');
});

/* jetstream auth */
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
