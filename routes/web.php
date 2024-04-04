<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Users\SignInController;
use App\Http\Controllers\Admin\Users\SignUpController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\Users\SignOutController;
<<<<<<< HEAD

// Route đăng nhập
Route::get('/signin', [SignInController::class, 'index'])->name('users.signin');
Route::post('/signin', [SignInController::class, 'store'])->name('users.signin.store');

// Route đăng ký
Route::get('/signup', [SignUpController::class, 'index']);
Route::post('/signup', [SignUpController::class, 'store']);
=======
use Symfony\Component\HttpKernel\DataCollector\DataCollector;
>>>>>>> ac2d3a3a4d765abe425ffd9eba594fdc5f7b1b2d

// Route đăng xuất
Route::get('/signout', [SignOutController::class, 'index'])->name('signout');

// Route cho người dùng đã đăng nhập
Route::middleware(['auth'])->group(function () {
    // Route cho vai trò user
    Route::middleware('role:1')->group(function () {
        Route::prefix('user')->group(function () {
            Route::get('/home', [MainController::class, 'index'])->name('user.home');
            Route::get('/cart', [MainController::class, 'cart'])->name('user.cart');
            Route::get('/detail', [MainController::class, 'detail'])->name('user.detail');
        });
    });

    // Route cho vai trò admin
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

    // Route bắt các URL không khớp và chuyển hướng về trang đăng nhập
    Route::get('/{any}', function () {
        return redirect()->route('users.signin');
    })->where('any', '.*');
});
<<<<<<< HEAD
=======


Route::get('/{page?}', [DataCollector::class,'page']);
Route::get('/signout', [SignOutController::class, 'index'])->name('signout');
>>>>>>> ac2d3a3a4d765abe425ffd9eba594fdc5f7b1b2d
