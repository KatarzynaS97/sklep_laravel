<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\NavigationController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('headers/welcome');
})->name('welcome');
Route::get('/aboutus', [NavigationController::class, 'aboutUs']);
require __DIR__.'/auth.php';
Route::get('/categories/{slug}', [NavigationController::class, 'category'])->name('category');
Route::get('/contact', [NavigationController::class, 'contact'])->name('contact');
Route::get('/aboutus', [NavigationController::class, 'aboutUs'])->name('aboutus');
Route::get('/shopping_prices', [NavigationController::class, 'shoppingPrices'])->name('shopping.prices');
Route::get('/exchange', [NavigationController::class, 'exchange'])->name('exchange');
Route::get('/cookies', [NavigationController::class, 'cookies'])->name('cookies');
Route::get('/size_tables', [NavigationController::class, 'sizeTables'])->name('size.tables');
Route::get('/statute', [NavigationController::class, 'statute'])->name('statute');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

Route::get('/categories/{slug}', [CategoryController::class, 'show'])->name('category.show');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

Route::get('/products/{id}', [ProductController::class, 'show'])->name('product.show');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('category');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::get('/cart/view', [CartController::class, 'index'])->name('cart.view');
Route::put('/cart/update/{cartItem}', [CartController::class, 'update'])->name('cart.update');
Route::delete('/cart/delete/{cartItem}', [CartController::class, 'destroy'])->name('cart.destroy');
Route::post('/cart/update-delivery', [CartController::class, 'updateDelivery'])->name('cart.updateDelivery');
Route::put('/cart/update-delivery-option/{id}', [CartController::class, 'updateDeliveryOption'])->name('cart.updateDeliveryOption');


Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');
Route::get('/products', [ProductController::class, 'index'])->name('home'); 

Route::get('/', [MainController::class, 'index']);


Route::get('/categories/{slug}', [CategoryController::class, 'show'])->name('category.show');
Route::post('/cart/add/{productType}/{id}', [CartController::class, 'add'])->name('cart.add');

Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');


Route::delete('/cart/remove/{productType}/{id}', [CartController::class, 'remove'])
    ->name('cart.remove');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('/login', [AuthenticatedSessionController::class, 'store']);

    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [RegisteredUserController::class, 'store']);

    Route::get('/confirm-password', [ConfirmablePasswordController::class, 'show'])->name('password.confirm');
    Route::post('/confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::get('/email/verify', [EmailVerificationPromptController::class, '__invoke'])->name('verification.notice');
    Route::get('/email/verify/{id}/{hash}', [VerifyEmailController::class, '__invoke'])->middleware(['signed', 'throttle:6,1'])->name('verification.verify');
    Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])->middleware(['throttle:6,1'])->name('verification.send');
    
    Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');
    Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');
    Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])->name('password.reset');
    Route::post('/reset-password', [NewPasswordController::class, 'store'])->name('password.update');
});

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->middleware('auth')->name('logout');

Route::get('/category/{category}/products', [ProductController::class, 'index2'])->name('products.index');

Route::get('/product/{id}', [ProductController::class, 'show3'])->name('product.show');

Route::post('/cart/add/{category_id}/{id}', [CartController::class, 'add'])->name('cart.add');



Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
