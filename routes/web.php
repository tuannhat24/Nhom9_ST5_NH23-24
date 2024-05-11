<?php

use App\Http\Controllers\Admin\AccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Users\SignInController;
use App\Http\Controllers\Admin\Users\SignUpController;
use App\Http\Controllers\Admin\Users\SignOutController;

use App\Http\Controllers\Admin\MainController;

use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CartController;
use App\Http\Controllers\Admin\CheckOutController;
use App\Http\Controllers\Admin\DetailController;
use App\Http\Controllers\Admin\Author\CategoryController;
use App\Http\Controllers\Admin\Author\ProductControllers;
use App\Http\Controllers\Admin\Author\ManageController;
use App\Http\Controllers\Admin\Author\SilderController;
use App\Http\Controllers\Admin\PurchaseController;
use App\Http\Controllers\Admin\Users\ForgotPasswordController;
use App\Http\Controllers\Admin\VoucherController;
use App\Http\Controllers\FavoriteController;


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
            Route::get('/product/category/{category}', [ProductController::class, 'productsByCategory'])->name('products.by.category');
            Route::get('/search_results', [ProductController::class, 'search'])->name('product.search');
            Route::get('/all-products', [ProductController::class, 'allProducts'])->name('user.all-products');
            Route::get('/cart', [CartController::class, 'index'])->name('user.cart');
            Route::post('/cart', [CartController::class, 'store'])->name('user.cart.store');
            Route::post('/cart/clear', [CartController::class, 'clearCart'])->name('user.cart.clear');
            Route::post('/cart/update/{cartId}', [CartController::class, 'updateCart'])->name('user.cart.update');
            Route::post('/cart/remove/{cartId}', [CartController::class, 'removeItem'])->name('user.cart.remove');
            Route::post('/checkout', [CheckOutController::class, 'index'])->name('user.checkout');
            Route::get('/checkout', [CheckOutController::class, 'index'])->name('user.checkout');
            Route::post('/checkout/vnpay', [CheckOutController::class, 'vnpay'])->name('user.checkout.vnpay');
            Route::get('/purchase', [PurchaseController::class, 'index'])->name('user.purchase');
            Route::get('/account', [AccountController::class, 'index'])->name('user.account');
            Route::get('/voucher', [VoucherController::class, 'index'])->name('user.voucher');
            Route::get('/detail/{id}', [DetailController::class, 'detail'])->name('user.detail');
            Route::post('/detail/{id}', [DetailController::class, 'toggleFavorite'])->name('user.toggleFavorite');
            Route::post('/products/{product}/comments', [CommentController::class, 'poComment'])->name('products.comments');
        });
    });


    Route::middleware('role:2')->group(function () {
        Route::prefix('admin')->group(function () {
            Route::get('/', [ManageController::class, 'index'])->name('admin.home');
            Route::prefix('/category')->group(function () {
                Route::get('/listcategory', [CategoryController::class, 'index'])->name('admin.category.index');
                Route::get('/create', [CategoryController::class, 'create'])->name('admin.category.create');
                Route::post('/store', [CategoryController::class, 'store'])->name('admin.category.store');
                Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('admin.category.edit');
                Route::post('/update/{id}', [CategoryController::class, 'update'])->name('admin.category.update');
                Route::get('/delete{id}', [CategoryController::class, 'delete'])->name('admin.category.delete');
            });
            Route::prefix('product')->group(function () {
                Route::get('/listproduct', [ProductControllers::class, 'index'])->name('admin.product.index');
                Route::get('/create', [ProductControllers::class, 'create'])->name('admin.product.create');
                Route::post('/store', [ProductControllers::class, 'store'])->name('admin.product.store');
                Route::get('/edit/{id}', [ProductControllers::class, 'edit'])->name('admin.product.edit');
                Route::post('/update/{id}', [ProductControllers::class, 'update'])->name('admin.product.update');
                Route::get('/delete/{id}', [ProductControllers::class, 'delete'])->name('admin.product.delete');
            });
            Route::prefix('/silder')->group(function () {
                Route::get('/index', [SilderController::class, 'index'])->name('admin.slider.index');
                Route::get('/create', [SilderController::class, 'create'])->name('admin.slider.create');
                Route::post('/store', [SilderController::class, 'store'])->name('admin.slider.store');
                Route::get('/edit/{id}', [SilderController::class, 'edit'])->name('admin.slider.edit');
                Route::post('/update/{id}', [SilderController::class, 'update'])->name('admin.slider.update');
                Route::get('/delete/{id}', [SilderController::class, 'delete'])->name('admin.slider.delete');
            });
        });
    });

    // Kiểm tra xem người dùng nhập link khác sẽ chuyển về trang login
    Route::get('/{any}', function () {
        return redirect()->route('users.signin');
    })->where('any', '.*');
});
