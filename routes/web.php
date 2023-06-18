<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

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

Route::controller(IndexController::class)->group( function () {
   Route::get('/', 'home')->name('home');
   Route::get('/signUp', 'signUp')->name('signUp');
    Route::get('/signIn', 'signIn')->name('signIn');
    Route::middleware(['auth', AdminMiddleware::class])->group( function () {
        Route::get('/createProduct', 'createProduct')->name('createProduct');
    });
});

Route::controller(AuthController::class)->prefix('/auth')->as('auth.')->group( function () {
   Route::post('/signUp', 'signUp')->name('signUp');
   Route::post('/signIn', 'signIn')->name('signIn');

   Route::get('/logOut', 'logOut')->name('logOut');
});

Route::controller(ProductController::class)->prefix('/product')->as('product.')->group( function () {
   Route::middleware(['auth', AdminMiddleware::class])->group( function () {
     Route::post('/createProduct', 'createProduct')->name('createProduct');
     Route::get('/{product:id}/delete', 'delete')->name('delete');

     Route::get('/{product:id}/updateProduct', 'updateProduct')->name('updateProduct');
     Route::post('/{product:id}/update', 'update')->name('update');
   });
});
