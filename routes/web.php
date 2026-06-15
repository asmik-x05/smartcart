<?php


use App\Http\Controllers\Merchant\MerchantAuthController;
use App\Http\Controllers\Merchant\MerchantController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\User\AuthController;
use Illuminate\Support\Facades\Route;

// Page Routes
Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/shop', [PageController::class, 'shop'])->name('shop');
Route::get('/categories', [PageController::class, 'categories'])->name('categories');
Route::get('/deals', [PageController::class, 'deals'])->name('deals');

Route::post('/subscribe/newsletter', [PageController::class, 'subscribe_newsletter'])->name('newsletter.subscribe');




Route::middleware(['guest-only'])->group(function () {

    // Merchant Routes
    Route::get('/merchant/register', [MerchantController::class, 'register'])->name('merchant.register');
    Route::post('/merchant/register/store', [MerchantAuthController::class, 'register'])->name('merchant.register.store');
    Route::get('/merchant/login', [MerchantController::class, 'login'])->name('merchant.login');
    Route::post('/merchant/login', [MerchantAuthController::class, 'login'])->name('merchant.login.store');

    // User Auth Routes
    Route::get('/login', [PageController::class, 'login'])->name('user.login');
    Route::get('/register', [PageController::class, 'register'])->name('user.register');
    Route::post('/login/', [AuthController::class, 'login'])->name('user.login.store');
    Route::post('/register/store', [AuthController::class, 'register'])->name('user.register.store');

    // Social Login Routes
    Route::get('/auth/google/redirect', [AuthController::class, 'redirectToGoogle'])->name('google.redirect');
    Route::get('/auth/google/callback', [AuthController::class, 'callbackFromGoogle'])->name('google.callback');

    // Forgot and reset password routes for users
    Route::get('/forgot-password', [PageController::class, 'forgot_password'])->name('user.forgot-password.view');
    Route::get('/reset-password', [PageController::class, 'reset_password'])->name('user.reset-password.view');
    Route::post('/forgot-password', [AuthController::class, 'forgotPassword'])->name('user.forgot-password');
    Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name('user.reset-password');

    // Forgot and reset password routes for merchants
    Route::get('/merchant/forgot-password', [MerchantController::class, 'forgot_password'])->name('merchant.forgot-password.view');
    Route::get('/merchant/reset-password', [MerchantController::class, 'reset_password'])->name('merchant.reset-password.view');
    Route::post('/merchant/forgot-password', [MerchantAuthController::class, 'forgotPassword'])->name('merchant.forgot-password');
    Route::post('/merchant/reset-password', [MerchantAuthController::class, 'resetPassword'])->name('merchant.reset-password');
});

Route::middleware(['authenticated'])->group(function () {

    // logout routes
    Route::delete('/logout', [AuthController::class, 'logout'])->name('user.logout');
    Route::delete('/merchant/logout', [MerchantAuthController::class, 'logout'])->name('merchant.logout');
});


