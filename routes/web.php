<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Users\SignInController;
use App\Http\Controllers\Admin\Users\SignUpController;
use App\Http\Controllers\Admin\Users\SignOutController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CartController;
use App\Http\Controllers\Admin\DetailController;
use App\Http\Controllers\Admin\Author\CategoryController;
use App\Http\Controllers\Admin\Author\ManageController;
use App\Http\Controllers\Admin\Users\ForgotPasswordController;

Route::get('/signin', [SignInController::class, 'index'])->name('users.signin');
Route::post('/signin', [SignInController::class, 'store'])->name(('users.signin'));
Route::get('/signup', [SignUpController::class, 'index'])->name('users.signup');
Route::post('/signup', [SignUpController::class, 'store'])->name('users.register');
Route::get('/signout', [SignOutController::class, 'index'])->name('signout');
Route::get('/forgot_password', [ForgotPasswordController::class, 'index'])->name('users.forgot_password');
Route::post('/forgot_password/send', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('forgot_password.send');


Route::middleware(['auth'])->group(function () {

    Route::middleware('role:1')->group(function () {
        Route::prefix('user')->group(function () {
            Route::get('/home', [HomeController::class, 'index'])->name('user.home');
            Route::get('/product', [ProductController::class, 'index'])->name('user.product');
            Route::get('/cart', [CartController::class, 'index'])->name('user.cart');
            Route::post('/cart', [CartController::class, 'store'])->name('user.cart.store');
            Route::post('/cart/clear', [CartController::class, 'clearCart'])->name('user.cart.clear');
            Route::post('/cart/update/{cartId}', [CartController::class, 'updateCart'])->name('user.cart.update');
            Route::post('/cart/remove/{cartId}', [CartController::class, 'removeItem'])->name('user.cart.remove');
            Route::post('/cart/checkout', [CartController::class, 'checkout'])->name('user.cart.checkout');
            Route::get('/detail/{id}', [DetailController::class, 'detail'])->name('user.detail');
        });
    });


    Route::middleware('role:2')->group(function () {
        Route::prefix('admin')->group(function () {
            Route::get('/', [ManageController::class, 'index'])->name('admin.home');
            Route::prefix('category')->group(function(){
                Route::get('/', [CategoryController::class, 'index'])->name('admin.category.index');
                Route::get('/create', [CategoryController::class, 'create'])->name('admin.category.create');
                Route::post('/store', [CategoryController::class, 'store'])->name('admin.category.store');
                Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('admin.category.edit');
                Route::post('/update/{id}', [CategoryController::class, 'update'])->name('admin.category.update');
                Route::get('/delete{id}', [CategoryController::class, 'delete'])->name('admin.category.delete');
            });

            //Route::get('/product', [MainController::class, 'product'])->name('admin.product');
            // Route::get('/customer', [MainController::class, 'customer'])->name('admin.customer');
            // Route::get('/listproduct', [MainController::class, 'listProduct'])->name('admin.listproduct');
            // Route::get('/listcustomer', [MainController::class, 'listCustomer'])->name('admin.listcustomer');
        });
    });

    // Kiểm tra xem người dùng nhập link khác sẽ chuyển về trang login
    Route::get('/{any}', function () {
        return redirect()->route('users.signin');
    })->where('any', '.*');
});

