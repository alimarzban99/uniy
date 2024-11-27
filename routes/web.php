<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Client\BlogController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Client\CartController;
use App\Http\Controllers\Client\ContactController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Client\ProductController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::prefix('auth')
    ->name('auth.')
    ->group(function () {
        Route::get('logout', [AuthController::class, 'logout'])->name('logout');

        Route::get('login', [AuthController::class, 'login'])->name('login');
        Route::get('register', [AuthController::class, 'register'])->name('register');

        Route::get('verify/{id}', [AuthController::class, 'verify'])->name('verify')
            ->withoutMiddleware('auth:web');

        Route::post('do-login', [AuthController::class, 'doLogin'])->name('do_login');
        Route::post('do-register', [AuthController::class, 'doRegister'])->name('do_register');

    });

Route::name('client.')
    ->group(function () {

        Route::get('about', [HomeController::class, 'about'])->name('about');
        Route::get('contact', [ContactController::class, 'index'])->name('contact');
        Route::resource('blog', BlogController::class)->only('index', 'show');
        Route::resource('product', ProductController::class)->only('index', 'show');

        Route::middleware('auth:web')
            ->group(function () {
                Route::get('profile', [HomeController::class, 'profile'])
                    ->name('profile');

                Route::get('cart', [CartController::class, 'index'])->name('cart');
                Route::get('checkout', [CartController::class, 'checkout'])->name('checkout');
            });


    });


Route::prefix('admin')
    ->name('admin.')
    ->middleware(['auth:web', 'isAdmin'])
    ->group(function () {
        Route::get('dashboard', [AdminHomeController::class, 'dashboard'])->name('dashboard');

        Route::resource('order', AdminBlogController::class);
        Route::resource('blog', AdminBlogController::class);
        Route::resource('product', AdminProductController::class);
        Route::resource('contact', AdminContactController::class);
        Route::resource('user', UserController::class);
        Route::resource('category', CategoryController::class);

    });

