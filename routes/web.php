<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Users\SignInController;
use App\Http\Controllers\Admin\Users\SignUpController;
use App\Http\Controllers\Admin\Users\SignOutController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\DetailController;

Route::get('/signin', [SignInController::class, 'index'])->name('users.signin');
Route::post('users/signin/store', [SignInController::class, 'store']);
Route::get('/signup', [SignUpController::class, 'index'])->name('signup');
Route::post('users/signup/store', [SignUpController::class, 'store']);
Route::get('/signout', [SignOutController::class, 'index'])->name('signout');


Route::middleware(['auth'])->group(function () {
    Route::middleware('role:1')->group(function () {
        Route::prefix('user')->group(function () {
            Route::get('/home', [HomeController::class, 'index'])->name('user.home');
            Route::get('/cart', [MainController::class, 'cart'])->name('user.cart');
            Route::get('/detail', [DetailController::class, 'index'])->name('user.detail');
            Route::get('/detail/{id}', [DetailController::class, 'detail'])->name('user.detail');
        });
    });


    Route::middleware('role:2')->group(function () {
        Route::prefix('admin')->group(function () {
            Route::get('/product', [MainController::class, 'product'])->name('admin.product');
            Route::get('/customer', [MainController::class, 'customer'])->name('admin.customer');
            Route::get('/category', [MainController::class, 'category'])->name('admin.category');
            Route::get('/listproduct', [MainController::class, 'listproduct'])->name('admin.listproduct');
            Route::get('/listcustomer', [MainController::class, 'listcustomer'])->name('admin.listcustomer');
            Route::get('/listcategory', [MainController::class, 'listcategory'])->name('admin.listcategory');
        });
    });

    // Kiểm tra xem người dùng nhập link khác sẽ chuyển về trang login
    // Route::get('/{any}', function () {
    //     return redirect()->route('users.signin');
    // })->where('any', '.*');
});
