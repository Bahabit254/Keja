<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect', [HomeController::class, 'redirect']);

Route::get('/', [HomeController::class, 'index']);

Route::get('/product', [AdminController::class, 'product']);

Route::post('/productupload', [AdminController::class, 'productupload']);

Route::get('/showproducts', [AdminController::class, 'showproducts']);

Route::get('/deleteproduct/{id}', [AdminController::class, 'deleteproduct']);

Route::get('/editproduct/{id}', [AdminController::class, 'editproduct']);

Route::post('/productupdate/{id}', [AdminController::class, 'productupdate']);

Route::get('/searchbar', [HomeController::class, 'searchbar']);

Route::post('/addCart/{id}', [HomeController::class, 'addCart']);

Route::get('/cart', [HomeController::class, 'cart']);

Route::get('/deletecart/{id}', [HomeController::class, 'deletecart']);

Route::get('/orders', [AdminController::class, 'orders']);

Route::get('/delivery/{id}', [AdminController::class, 'delivery']);