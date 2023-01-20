<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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
Route::get('/', [HomeController::class, "index"]);
Route::get('/redirects', [HomeController::class, "redirects"]);
// home -- reservation
Route::post('/makereservation', [HomeController::class, "makereservation"]);

/* admin */
// admin -- user
Route::get('/users', [AdminController::class, "user"]);
Route::get('/deleteuser/{id}', [AdminController::class, "deleteuser"]);
// admin -- food
Route::get('/foodmenulist', [AdminController::class, "foodmenulist"]);
// admin -- food: add food
Route::get('/addfoodmenu', [AdminController::class, "addfoodmenu"]);
Route::post('/uploadfood', [AdminController::class, "uploadfood"]);
// admin -- food: update food
Route::get('/updatefoodmenu/{id}', [AdminController::class, "updatefoodmenu"]);
Route::post('/updatefood/{id}', [AdminController::class, "updatefood"]);
// admin -- food: delete food
Route::get('/delfoodmenu/{id}', [AdminController::class, "delfoodmenu"]);
// admin -- reservation
Route::get('/reservationlist', [AdminController::class, "reservationlist"]);

/* jetstream auth */
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
