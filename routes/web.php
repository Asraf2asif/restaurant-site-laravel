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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [HomeController::class, "index"]);

Route::get('/users', [AdminController::class, "user"]);

Route::get('/deleteuser/{id}', [AdminController::class, "deleteuser"]);

Route::get('/foodmenu', [AdminController::class, "foodmenu"]);

Route::post('/uploadfood', [AdminController::class, "uploadfood"]);

Route::get('/redirects', [HomeController::class, "redirects"]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
