<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\Users\LogoutController;


Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('users/login/store', [LoginController::class, 'store']);

Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', [MainController::class, 'index'])->name('admin');
        Route::get('/cart', [MainController::class, 'cart'])->name('admin.cart');
        Route::get('/detail', [MainController::class, 'detail'])->name('admin.detail');
    });
});


Route::get('/logout', [LogoutController::class, 'index'])->name('logout');


Route::get('cart', function(){
    return view('cart');
});