<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Users\SignInController;
use App\Http\Controllers\Admin\Users\SignUpController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\Users\SignOutController;
use Symfony\Component\HttpKernel\DataCollector\DataCollector;

Route::get('/', [SignInController::class, 'index'])->name('signin');
Route::get('/signup', [SignUpController::class, 'index'])->name('signup');
Route::post('users/signin/store', [SigninController::class, 'store']);


Route::middleware(['auth'])->group(function () {
    Route::middleware(['role:1'])->group(function () {
        Route::prefix('user')->group(function () {
            Route::get('/home', [MainController::class, 'index'])->name('user');
            Route::get('/cart', [MainController::class, 'cart'])->name('user.cart');
            Route::get('/detail', [MainController::class, 'detail'])->name('user.detail');
        });
    });


    Route::middleware(['role:2'])->group(function () {
        Route::prefix('admin')->group(function () {
            Route::get('/product', [MainController::class, 'product'])->name('admin');
            Route::get('/customer', [MainController::class, 'customer'])->name('admin.customer');
            Route::get('/category', [MainController::class, 'category'])->name('admin.category');
            Route::get('/listproduct', [MainController::class, 'listproduct'])->name('admin.listproduct');
            Route::get('/listcustomer', [MainController::class, 'listcustomer'])->name('admin.listcustomer');
            Route::get('/listcategory', [MainController::class, 'listcategory'])->name('admin.listcategory');
        });
    });
    Route::get('/{any}', function () {
        return redirect()->route('signin');
    })->where('any', '.*');
});


Route::get('/{page?}', [DataCollector::class,'page']);
Route::get('/signout', [SignOutController::class, 'index'])->name('signout');
