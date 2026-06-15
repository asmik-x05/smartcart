<?php

use App\Http\Controllers\Auth\UserController;


use App\Http\Controllers\Merchant\MerchantController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Page Routes

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/shop', [PageController::class, 'shop'])->name('shop');
Route::get('/categories', [PageController::class, 'categories'])->name('categories');
Route::get('/deals', [PageController::class, 'deals'])->name('deals');

Route::post('/subscribe/newsletter', [PageController::class, 'subscribe_newsletter'])->name('newsletter.subscribe');

// Merchant Routes
Route::get('/merchant/register', [MerchantController::class, 'merchant_registration_page'])->name('merchant.register');
Route::post('/merchant/register', [MerchantController::class, 'merchant_registration'])->name('merchant.register.store');
Route::get('/merchant/login', [MerchantController::class, 'merchant_login_page'])->name('merchant.login');
Route::post('/merchant/login', [MerchantController::class, 'merchant_login'])->name('merchant.login.store');


// User Auth Routes
Route::get('/login', [PageController::class, 'login'])->name('user.login');
Route::get('/register', [PageController::class, 'register'])->name('user.register');
Route::post('/login/', [PageController::class, 'login_store'])->name('user.login.store');
Route::post('/register/store', [PageController::class, 'register_store'])->name('user.register.store');