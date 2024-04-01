<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Users\SigninController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\Users\SignOutController;


Route::get('/', [SigninController::class, 'index'])->name('signin');
Route::post('users/signin/store', [SigninController::class, 'store']);

Route::middleware(['auth'])->group(function () {
    Route::prefix('user')->group(function () {
        Route::get('/', [MainController::class, 'index'])->name('user');
        Route::get('/cart', [MainController::class, 'cart'])->name('user.cart');
        Route::get('/detail', [MainController::class, 'detail'])->name('user.detail');
        Route::get('/product', [MainController::class, 'product'])->name('user.product');
        Route::get('/customer', [MainController::class, 'customer'])->name('user.customer');
        Route::get('/category', [MainController::class, 'category'])->name('user.category');
        Route::get('/listproduct', [MainController::class, 'listproduct'])->name('user.listproduct');
        Route::get('/listcustomer', [MainController::class, 'listcustomer'])->name('user.listcustomer');
        Route::get('/listcategory', [MainController::class, 'listcategory'])->name('user.listcategory');

    });
});


Route::get('/signout', [SignOutController::class, 'index'])->name('signout');