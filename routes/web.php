<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DateController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('logout',[AuthController::class, 'logout']);

Route::get('test/{name}/{age?}', [HomeController::class, 'test']);


Route::middleware('auth')->group(function(){
    Route::get('admin', [AdminController::class, 'index']);
    Route::get('/', [HomeController::class,'index']);

    Route::prefix('admin')->group(function () {

        Route::Resource('produk', ProdukController::class);
        Route::Resource('user', UserController::class);
        Route::Resource('date', DateController::class);

        

    });



});











