<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Users\SignInController;
use App\Http\Controllers\Admin\Users\SignUpController;
use App\Http\Controllers\Admin\Users\SignOutController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CartController;
use App\Http\Controllers\Admin\DetailController;

Route::get('/signin', [SignInController::class, 'Index'])->name('users.signin');
Route::post('users/signin/store', [SignInController::class, 'Store']);
Route::get('/signup', [SignUpController::class, 'Index'])->name('signup');
Route::post('users/signup/store', [SignUpController::class, 'Store']);
Route::get('/signout', [SignOutController::class, 'Index'])->name('signout');


Route::middleware(['auth'])->group(function () {

    Route::middleware('role:1')->group(function () {
        Route::prefix('user')->group(function () {
            Route::get('/home', [HomeController::class, 'Index'])->name('user.home');
            Route::get('/cart', [CartController::class, 'Index'])->name('user.cart');
            Route::post('/cart', [CartController::class, 'Store'])->name('user.cart.store');
            Route::get('/detail', [DetailController::class, 'Index'])->name('user.detail');
            Route::get('/detail/{id}', [DetailController::class, 'Detail'])->name('user.detail');
        });
    });


    Route::middleware('role:2')->group(function () {
        Route::prefix('admin')->group(function () {
            Route::get('/product', [MainController::class, 'Product'])->name('admin.product');
            Route::get('/customer', [MainController::class, 'Customer'])->name('admin.customer');
            Route::get('/category', [MainController::class, 'Category'])->name('admin.category');
            Route::get('/listproduct', [MainController::class, 'ListProduct'])->name('admin.listproduct');
            Route::get('/listcustomer', [MainController::class, 'ListCustomer'])->name('admin.listcustomer');
            Route::get('/listcategory', [MainController::class, 'ListCategory'])->name('admin.listcategory');
        });
    });

    // Kiểm tra xem người dùng nhập link khác sẽ chuyển về trang login
    Route::get('/{any}', function () {
        return redirect()->route('users.signin');
    })->where('any', '.*');
});
